<?php
/**
 * admin.php — password-protected view of registration submissions.
 *
 * Auth: simple session login against ADMIN_USER / ADMIN_PASSWORD (set as
 * GitHub secrets, written into includes/secrets.php at deploy). Reads from
 * Supabase server-side with the secret key. Not indexed; no caching.
 */
require __DIR__ . '/includes/bootstrap.php';

header('X-Robots-Tag: noindex, nofollow', true);
header('Cache-Control: no-store, max-age=0');
header('Referrer-Policy: no-referrer');

// Secure session (secure cookie only over HTTPS so local http dev still works).
$https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
session_set_cookie_params(['lifetime' => 0, 'path' => '/', 'httponly' => true, 'secure' => $https, 'samesite' => 'Strict']);
session_name('ibd_admin');
session_start();

// CSRF token (per session) for the login + logout forms.
if (empty($_SESSION['csrf'])) {
    $_SESSION['csrf'] = bin2hex(random_bytes(32));
}
$CSRF = $_SESSION['csrf'];

function admin_configured(): bool
{
    return ADMIN_USER !== '' && ADMIN_PASSWORD !== '';
}

function csrf_ok(): bool
{
    return is_string($_POST['csrf'] ?? null)
        && hash_equals($_SESSION['csrf'] ?? '', $_POST['csrf']);
}

$is_post = ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';

// Logout (POST + CSRF)
if ($is_post && isset($_POST['logout'])) {
    if (csrf_ok()) {
        $_SESSION = [];
        session_destroy();
    }
    header('Location: /admin');
    exit;
}

// Login
$login_error = '';
if ($is_post && isset($_POST['admin_login'])) {
    if (!csrf_ok()) {
        $login_error = 'Your session expired — please try again.';
    } else {
        $u = is_string($_POST['username'] ?? null) ? $_POST['username'] : '';
        $p = is_string($_POST['password'] ?? null) ? $_POST['password'] : '';
        $ok = admin_configured()
            && hash_equals(ADMIN_USER, $u)
            && hash_equals(ADMIN_PASSWORD, $p);
        if ($ok) {
            session_regenerate_id(true);
            $_SESSION['admin'] = true;
            header('Location: /admin');
            exit;
        }
        app_log('admin_login_failed', ['user' => mb_substr($u, 0, 100)]);
        usleep(700000); // throttle brute force
        $login_error = 'Invalid credentials.';
    }
}

$authed = !empty($_SESSION['admin']);

/** Shared page chrome for the standalone admin screens. */
function admin_head(string $title): void
{
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<meta name="robots" content="noindex, nofollow">';
    echo '<title>' . e($title) . '</title>';
    echo '<link rel="stylesheet" href="/assets/css/site.css?v=' . ASSET_VER . '">';
    echo '<style>'
        . '.adm{max-width:1200px;margin:0 auto;padding:clamp(20px,4vw,40px) clamp(16px,4vw,40px);}'
        . '.adm h1{color:var(--red);font-size:var(--fs-600);}'
        . '.adm .bar{display:flex;gap:12px;align-items:center;flex-wrap:wrap;margin:18px 0;}'
        . '.adm .bar .sp{flex:1}'
        . '.adm table{width:100%;border-collapse:collapse;font-size:.85rem;background:#fff;}'
        . '.adm th,.adm td{text-align:left;padding:9px 11px;border-bottom:1px solid var(--line);vertical-align:top;white-space:nowrap;}'
        . '.adm th{background:var(--paper);font-family:var(--font-display);position:sticky;top:0;}'
        . '.adm td.wrap{white-space:normal;max-width:240px;}'
        . '.adm .tablewrap{overflow:auto;border:1px solid var(--line);border-radius:10px;}'
        . '.adm .muted{color:var(--wg06);font-size:.85rem;}'
        . '.adm .login{max-width:360px;margin:8vh auto;}'
        . '.adm .login .field{margin-bottom:14px;}'
        . '.adm input{width:100%;padding:11px 13px;border:1px solid var(--wg04);border-radius:8px;font:inherit;}'
        . '.adm .err{background:#fdecea;border:1px solid #f3b7b0;color:#9e2018;padding:10px 13px;border-radius:8px;margin-bottom:14px;}'
        . '.adm .logs{margin-top:34px;}'
        . '.adm .logs pre{background:#1a1a1a;color:#e8e6e3;padding:14px;border-radius:10px;overflow:auto;font-size:.78rem;line-height:1.5;max-height:340px;}'
        . '.adm .pill{display:inline-block;background:var(--paper);border:1px solid var(--line);border-radius:999px;padding:2px 10px;font-size:.8rem;}'
        . '</style></head><body><div class="adm">';
}
function admin_foot(): void { echo '</div></body></html>'; }

// ---- Not logged in: show the login form ----
if (!$authed) {
    admin_head('Admin · Sign in');
    echo '<div class="login">';
    echo '<h1>IBD Summit Admin</h1>';
    if (!admin_configured()) {
        echo '<p class="err">Admin credentials are not configured yet (set ADMIN_USER and ADMIN_PASSWORD).</p>';
    }
    if ($login_error) {
        echo '<p class="err">' . e($login_error) . '</p>';
    }
    echo '<form method="post" action="/admin">';
    echo '<input type="hidden" name="csrf" value="' . e($CSRF) . '">';
    echo '<div class="field"><label for="u">Username</label><input id="u" name="username" autocomplete="username" autofocus></div>';
    echo '<div class="field"><label for="p">Password</label><input id="p" name="password" type="password" autocomplete="current-password"></div>';
    echo '<button class="btn" type="submit" name="admin_login" value="1" style="width:100%;justify-content:center">Sign in</button>';
    echo '</form></div>';
    admin_foot();
    exit;
}

// ---- Authenticated ----
$COLUMNS = ['created_at', 'first_name', 'last_name', 'email', 'phone', 'profession', 'specialty', 'organisation', 'country', 'consent_hcp', 'consent_contact', 'source'];

[$ok, $err, $rows] = supabase_select('ibd_registrations', 'select=*&order=created_at.desc');

// CSV export
if (isset($_GET['export'])) {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="ibd_registrations.csv"');
    $out = fopen('php://output', 'w');
    fputcsv($out, $COLUMNS);
    foreach ($rows as $r) {
        $line = [];
        foreach ($COLUMNS as $c) {
            $v = $r[$c] ?? '';
            $v = is_bool($v) ? ($v ? 'yes' : 'no') : (string) $v;
            // Neutralise spreadsheet formula injection: prefix a leading
            // =, +, -, @, tab or CR with an apostrophe so Excel/Sheets treat
            // it as text, not a formula.
            if ($v !== '' && in_array($v[0], ['=', '+', '-', '@', "\t", "\r"], true)) {
                $v = "'" . $v;
            }
            $line[] = $v;
        }
        fputcsv($out, $line);
    }
    fclose($out);
    exit;
}

admin_head('Admin · Registrations');
echo '<div class="bar">';
echo '<h1 style="margin:0">Registrations</h1>';
echo '<span class="pill">' . count($rows) . ' total</span>';
echo '<span class="sp"></span>';
echo '<a class="btn btn--ghost" href="/admin?export=1">Export CSV ↓</a>';
echo '<form method="post" action="/admin" style="display:inline"><input type="hidden" name="csrf" value="' . e($CSRF) . '"><button class="btn btn--ghost" type="submit" name="logout" value="1">Sign out</button></form>';
echo '</div>';

if (!$ok) {
    echo '<p class="err">Could not load submissions: ' . e($err ?? 'unknown error') . '</p>';
} elseif (!$rows) {
    echo '<p class="muted">No registrations yet.</p>';
} else {
    echo '<div class="tablewrap"><table><thead><tr>';
    foreach (['Date (UTC)', 'First', 'Last', 'Email', 'Phone', 'Profession', 'Specialty', 'Organisation', 'Country', 'HCP', 'Contact'] as $h) {
        echo '<th>' . e($h) . '</th>';
    }
    echo '</tr></thead><tbody>';
    foreach ($rows as $r) {
        $date = isset($r['created_at']) ? gmdate('Y-m-d H:i', strtotime($r['created_at'])) : '';
        echo '<tr>';
        echo '<td>' . e($date) . '</td>';
        echo '<td>' . e($r['first_name'] ?? '') . '</td>';
        echo '<td>' . e($r['last_name'] ?? '') . '</td>';
        echo '<td>' . e($r['email'] ?? '') . '</td>';
        echo '<td>' . e($r['phone'] ?? '') . '</td>';
        echo '<td>' . e($r['profession'] ?? '') . '</td>';
        echo '<td>' . e($r['specialty'] ?? '') . '</td>';
        echo '<td class="wrap">' . e($r['organisation'] ?? '') . '</td>';
        echo '<td>' . e($r['country'] ?? '') . '</td>';
        echo '<td>' . (!empty($r['consent_hcp']) ? '✓' : '') . '</td>';
        echo '<td>' . (!empty($r['consent_contact']) ? '✓' : '') . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table></div>';
}

// Recent activity log
echo '<div class="logs"><h2 style="font-size:var(--fs-500)">Recent activity</h2>';
$entries = app_log_tail(60);
if (!$entries) {
    echo '<p class="muted">No log entries yet.</p>';
} else {
    echo '<pre>';
    foreach (array_reverse($entries) as $en) { // newest first
        $ts = $en['ts'] ?? '';
        $ev = $en['event'] ?? ($en['raw'] ?? '');
        $extra = $en;
        unset($extra['ts'], $extra['event'], $extra['ua'], $extra['raw']);
        echo e($ts) . '  ' . e(str_pad((string) $ev, 26)) . '  ' . e(json_encode($extra, JSON_UNESCAPED_SLASHES)) . "\n";
    }
    echo '</pre>';
}
echo '</div>';
admin_foot();
