<?php
/**
 * bootstrap.php — include this first from every page.
 * Defines the app guard, then loads config + helpers.
 *
 *   require __DIR__ . '/includes/bootstrap.php';          // top-level page
 *   require __DIR__ . '/../includes/bootstrap.php';       // page in /guide/
 */

define('IBD_APP', true);

require __DIR__ . '/config.php';
require __DIR__ . '/helpers.php';

// Server-side secrets (git-ignored; written by the deploy from GitHub secrets,
// or copied from secrets.example.php for local dev). Optional — the site runs
// without it; only the Supabase-backed forms need it.
if (is_file(__DIR__ . '/secrets.php')) {
    require __DIR__ . '/secrets.php';
}
if (!defined('SUPABASE_URL'))         { define('SUPABASE_URL', getenv('SUPABASE_URL') ?: ''); }
if (!defined('SUPABASE_SERVICE_KEY')) { define('SUPABASE_SERVICE_KEY', getenv('SUPABASE_SERVICE_KEY') ?: ''); }
if (!defined('ADMIN_USER'))           { define('ADMIN_USER', getenv('ADMIN_USER') ?: ''); }
if (!defined('ADMIN_PASSWORD'))       { define('ADMIN_PASSWORD', getenv('ADMIN_PASSWORD') ?: ''); }

require __DIR__ . '/logger.php';
require __DIR__ . '/supabase.php';
require __DIR__ . '/forms.php';

/** Convenience accessor for the partials directory. */
function partial(string $name): string
{
    return __DIR__ . '/' . $name . '.php';
}
