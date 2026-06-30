<?php
/**
 * logger.php — tiny structured logger.
 *
 * Writes one JSON object per line to storage/logs/app-YYYY-MM-DD.log
 * (kept out of the web root by storage/.htaccess). Use for form events,
 * admin logins, and Supabase errors — never log secrets or full PII.
 */
if (!defined('IBD_APP')) { http_response_code(403); exit('Forbidden'); }

/** Absolute path to the log directory. */
function log_dir(): string
{
    return dirname(__DIR__) . '/storage/logs';
}

/** Append a structured event line. Best-effort; never throws on failure. */
function app_log(string $event, array $ctx = []): void
{
    $dir = log_dir();
    if (!is_dir($dir)) {
        @mkdir($dir, 0775, true);
    }
    $entry = array_merge([
        'ts'    => gmdate('c'),
        'event' => $event,
        'ip'    => $_SERVER['REMOTE_ADDR'] ?? '',
        'ua'    => mb_substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200),
    ], $ctx);
    $line = json_encode($entry, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    if ($line !== false) {
        @file_put_contents($dir . '/app-' . gmdate('Y-m-d') . '.log', $line . "\n", FILE_APPEND | LOCK_EX);
    }
}

/** Return the most recent $n log lines (newest last), parsed to arrays. */
function app_log_tail(int $n = 100): array
{
    $files = glob(log_dir() . '/app-*.log') ?: [];
    rsort($files); // newest file first
    $lines = [];
    foreach ($files as $f) {
        $rows = @file($f, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [];
        $lines = array_merge($rows, $lines); // prepend older-file rows
        if (count($lines) >= $n) {
            break;
        }
    }
    $lines = array_slice($lines, -$n);
    return array_map(static fn ($l) => json_decode($l, true) ?: ['raw' => $l], $lines);
}
