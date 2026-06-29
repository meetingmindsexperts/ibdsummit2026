<?php
/**
 * head.php — document head + skip link + banner strip + site header/nav.
 *
 * Expected variables (set on the page before including):
 *   $title   string  <title> text
 *   $desc    string  meta description
 *   $nav     array   nav items (defaults to $MAIN_NAV)
 *   $active  string  active nav key (default '')
 *   $strip   string  banner text (defaults to $HCP_STRIP)
 */
if (!defined('IBD_APP')) { http_response_code(403); exit('Forbidden'); }

$nav    = $nav    ?? $MAIN_NAV;
$active = $active ?? '';
$strip  = $strip  ?? $HCP_STRIP;
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($title) ?></title>
<meta name="description" content="<?= e($desc) ?>">
<link rel="stylesheet" href="/assets/css/site.css?v=<?= ASSET_VER ?>">
</head>
<body>
<a class="skip-link" href="#maincontent">Skip to content</a>

<div class="hcp-strip"><?= e($strip) ?></div>

<header class="site-header">
  <div class="wrap nav">
    <a class="brandmark" href="/" aria-label="Johnson &amp; Johnson Innovative Medicine"><img class="brand-logo" src="/assets/img/logo-corp.png?v=3" alt="Johnson &amp; Johnson Innovative Medicine"></a>
    <button class="nav-toggle" aria-label="Menu"><span></span><span></span><span></span></button>
    <nav class="nav-links">
      <?= nav_links($nav, $active) ?>
    </nav>
  </div>
</header>
