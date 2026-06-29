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

/** Convenience accessor for the partials directory. */
function partial(string $name): string
{
    return __DIR__ . '/' . $name . '.php';
}
