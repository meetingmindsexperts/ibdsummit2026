<?php
/**
 * router.php — clean-URL router for the PHP built-in dev server ONLY.
 * Production uses .htaccess; this mimics it locally.
 *
 *   php -S localhost:8000 router.php
 *   open http://localhost:8000/
 */

$uri  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = __DIR__ . $uri;

// Block direct access to includes (matches the includes/.htaccess rule).
if (preg_match('#^/includes/#', $uri)) {
    http_response_code(403);
    echo 'Forbidden';
    return true;
}

// Serve existing real files (assets, pdfs, .htaccess-ignored) as-is.
if ($uri !== '/' && is_file($path)) {
    return false;
}

// Directory -> its index.php
if (is_dir($path)) {
    $index = rtrim($path, '/') . '/index.php';
    if (is_file($index)) { require $index; return true; }
}

// Clean URL -> matching .php file
$php = rtrim($path, '/') . '.php';
if ($uri !== '/' && is_file($php)) { require $php; return true; }

// Root
if ($uri === '/') { require __DIR__ . '/index.php'; return true; }

http_response_code(404);
echo 'Not found';
return true;
