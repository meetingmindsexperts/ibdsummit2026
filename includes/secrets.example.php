<?php
/**
 * secrets.example.php — template for server-side secrets.
 *
 * LOCAL DEV: copy this file to `secrets.php` (same folder) and fill in your
 * Supabase project URL + service_role key. `secrets.php` is git-ignored and
 * never committed.
 *
 * PRODUCTION: you do NOT create secrets.php by hand. The GitHub Actions deploy
 * writes it on the runner from the repo secrets SUPABASE_URL and
 * SUPABASE_SERVICE_KEY, then uploads it. The includes/ folder is blocked from
 * web access by includes/.htaccess, so the key is never reachable over HTTP.
 *
 * The service_role key bypasses row-level security — keep it server-side only,
 * never in the browser or the repo.
 */

define('SUPABASE_URL', 'https://YOUR-PROJECT.supabase.co');
define('SUPABASE_SERVICE_KEY', 'YOUR-SERVICE-ROLE-KEY');
