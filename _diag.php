<?php
// TEMPORARY diagnostic — token-gated. Remove after use.
require __DIR__ . '/includes/bootstrap.php';
if (($_GET['k'] ?? '') !== 'k7p2qz') { http_response_code(404); exit; }
header('Content-Type: text/plain');

echo 'configured: ' . (supabase_configured() ? 'yes' : 'no') . "\n";
echo 'url_set: '    . (SUPABASE_URL !== '' ? 'yes' : 'no') . "\n";
echo 'url_host: '   . parse_url(SUPABASE_URL, PHP_URL_HOST) . "\n";
$k = SUPABASE_SERVICE_KEY;
echo 'key_set: '    . ($k !== '' ? 'yes (' . strlen($k) . ' chars)' : 'no') . "\n";
echo 'key_type: '   . (str_starts_with($k, 'sb_secret_') ? 'new secret key' : (str_starts_with($k, 'eyJ') ? 'legacy JWT' : 'unknown')) . "\n";

[$ok, $err] = supabase_insert('ibd_registrations', [
    'first_name' => 'diag', 'last_name' => 'diag', 'email' => 'diag@example.com',
    'consent_hcp' => true, 'consent_contact' => true, 'source' => 'diag',
]);
echo 'insert_ok: ' . ($ok ? 'yes' : 'no') . "\n";
echo 'error: '     . ($err ?? '(none)') . "\n";
