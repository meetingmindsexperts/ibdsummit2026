<?php
/**
 * cta.php — summit "register your interest" call-to-action band.
 *
 * Optional variables:
 *   $cta_heading  string  heading text (default below)
 *   $cta_id       string  optional id attribute on the inner wrap
 */
if (!defined('IBD_APP')) { http_response_code(403); exit('Forbidden'); }

$cta_heading = $cta_heading ?? 'Join us in charting the future of gastro care.';
$wrap_id     = isset($cta_id) ? ' id="' . e($cta_id) . '"' : '';
?>
<section class="sci-cta" id="register">
  <div class="wrap"<?= $wrap_id ?>>
    <img class="ji-png" src="/assets/img/journey-icon-white.png" alt="">
    <span class="divider"></span>
    <h2><?= e($cta_heading) ?></h2>
    <a class="btn btn--white" href="/register">Register your interest <span class="arrow">→</span></a>
  </div>
</section>
<?php
// Reset so a later include of this partial picks up its default again.
unset($cta_heading, $cta_id);
