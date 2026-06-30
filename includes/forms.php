<?php
/**
 * forms.php — server-side processing for the contact + register forms.
 *
 * Data-driven: each form is described by a spec (target table, field→column
 * map, required fields with labels, checkbox fields). process_form() validates,
 * checks the honeypot, inserts via Supabase, and uses Post/Redirect/Get so a
 * refresh never resubmits.
 */
if (!defined('IBD_APP')) { http_response_code(403); exit('Forbidden'); }

/** Form definitions. Add a field here + a column in supabase/schema.sql to extend. */
function form_specs(): array
{
    return [
        'register' => [
            'table'    => 'ibd_registrations',
            'success'  => '/register?sent=1',
            'fields'   => [
                'first'     => 'first_name',
                'last'      => 'last_name',
                'email'     => 'email',
                'phone'     => 'phone',
                'role'      => 'profession',
                'specialty' => 'specialty',
                'org'       => 'organisation',
                'country'   => 'country',
            ],
            'checkboxes' => [
                'consent_hcp'     => 'consent_hcp',
                'consent_contact' => 'consent_contact',
            ],
            'required' => [
                'first'           => 'First name',
                'last'            => 'Last name',
                'email'           => 'Email',
                'role'            => 'Profession',
                'consent_hcp'     => 'the healthcare-professional confirmation',
                'consent_contact' => 'the contact consent',
            ],
        ],
    ];
}

/** Trimmed, length-capped POST value — also used to repopulate fields on error. */
function form_value(string $key, int $max = 500): string
{
    $v = $_POST[$key] ?? '';
    if (!is_string($v)) {
        return '';
    }
    $v = trim($v);
    return mb_substr($v, 0, $max);
}

/** True if a required checkbox was ticked. */
function form_checked(string $key): bool
{
    return !empty($_POST[$key]);
}

/** Send a redirect and stop (Post/Redirect/Get). */
function form_redirect(string $path): void
{
    header('Location: ' . $path, true, 303);
    exit;
}

/**
 * Handle the current request for a given form.
 * Returns one of:
 *   ['status' => 'idle']
 *   ['status' => 'success']
 *   ['status' => 'error', 'message' => '...']
 * (On a successful POST it redirects and never returns.)
 */
function process_form(string $key): array
{
    $specs = form_specs();
    if (!isset($specs[$key])) {
        return ['status' => 'idle'];
    }
    $spec = $specs[$key];

    if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
        // GET: show the success banner after a PRG redirect.
        return isset($_GET['sent']) ? ['status' => 'success'] : ['status' => 'idle'];
    }

    // Honeypot: a hidden field bots tend to fill. Silently accept (so the bot
    // thinks it worked) without writing anything.
    if (form_value('website') !== '') {
        form_redirect($spec['success']);
    }

    // Validate required fields.
    $missing = [];
    foreach ($spec['required'] as $field => $label) {
        $isCheckbox = isset($spec['checkboxes'][$field]);
        $ok = $isCheckbox ? form_checked($field) : (form_value($field) !== '');
        if (!$ok) {
            $missing[] = $label;
        }
    }
    if ($missing) {
        return ['status' => 'error', 'message' => 'Please complete: ' . implode(', ', $missing) . '.'];
    }
    if (!filter_var(form_value('email'), FILTER_VALIDATE_EMAIL)) {
        return ['status' => 'error', 'message' => 'Please enter a valid email address.'];
    }

    // Build the row.
    $row = ['source' => 'website'];
    foreach ($spec['fields'] as $field => $column) {
        $max = ($field === 'message') ? 5000 : 500;
        $val = form_value($field, $max);
        if ($field === 'email') {
            $val = mb_strtolower($val);
        }
        $row[$column] = ($val === '') ? null : $val;
    }
    foreach ($spec['checkboxes'] as $field => $column) {
        $row[$column] = form_checked($field);
    }

    [$ok, $err] = supabase_insert($spec['table'], $row);
    if ($ok) {
        form_redirect($spec['success']);
    }

    error_log("[ibdsummit] form '$key' insert failed: $err");
    return ['status' => 'error', 'message' => 'Sorry — something went wrong submitting the form. Please try again, or email ' . ($GLOBALS['SITE']['email'] ?? '') . '.'];
}

/** Render a success/error banner from a process_form() result. */
function form_banner(array $result): string
{
    if ($result['status'] === 'success') {
        return '<div class="form-alert form-alert--ok" role="status">Thank you — your submission has been received. The organising team will be in touch.</div>';
    }
    if ($result['status'] === 'error') {
        return '<div class="form-alert form-alert--err" role="alert">' . e($result['message'] ?? 'Please check the form and try again.') . '</div>';
    }
    return '';
}
