<?php
/**
 * supabase.php — minimal Supabase REST (PostgREST) client.
 * Server-side only; uses the service_role key from secrets.php.
 */
if (!defined('IBD_APP')) { http_response_code(403); exit('Forbidden'); }

/** True once SUPABASE_URL + SUPABASE_SERVICE_KEY are configured. */
function supabase_configured(): bool
{
    return defined('SUPABASE_URL') && SUPABASE_URL !== ''
        && defined('SUPABASE_SERVICE_KEY') && SUPABASE_SERVICE_KEY !== '';
}

/**
 * Insert one row into a table. Returns [bool ok, ?string error].
 * The error string is for server logs only — never shown to users.
 */
function supabase_insert(string $table, array $row): array
{
    if (!supabase_configured()) {
        return [false, 'supabase_not_configured'];
    }

    $url = rtrim(SUPABASE_URL, '/') . '/rest/v1/' . rawurlencode($table);

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => json_encode($row, JSON_UNESCAPED_UNICODE),
        CURLOPT_HTTPHEADER     => [
            'Content-Type: application/json',
            'apikey: ' . SUPABASE_SERVICE_KEY,
            'Authorization: Bearer ' . SUPABASE_SERVICE_KEY,
            'Prefer: return=minimal',
        ],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 10,
        CURLOPT_CONNECTTIMEOUT => 5,
    ]);

    $resp = curl_exec($ch);
    $code = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err  = curl_error($ch);
    curl_close($ch);

    if ($resp === false) {
        return [false, 'network: ' . $err];
    }
    if ($code >= 200 && $code < 300) {
        return [true, null];
    }
    // Trim body so we don't spill large payloads into logs.
    return [false, 'http ' . $code . ': ' . substr((string) $resp, 0, 300)];
}
