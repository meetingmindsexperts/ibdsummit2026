<?php
require __DIR__ . '/includes/bootstrap.php';

$title  = 'Programme — J&J IBD Summit 2026';
$desc   = 'Scientific programme for the J&J IBD Summit 2026, 3–4 July 2026, Marriott Creek Hotel, Dubai, UAE.';
$active = 'programme';

require partial('head');
?>

<!-- Page header -->
<section class="sci-section" id="maincontent" tabindex="-1" style="padding-block:clamp(36px,5vw,64px) clamp(18px,2.5vw,28px)">
  <div class="wrap">
    <p class="eyebrow">J&amp;J IBD Summit 2026</p>
    <h1 class="display-l" style="color:var(--red);margin-top:10px">Scientific programme</h1>
    <p class="lead mt-s">The IL-23 era for IBD: UAE Experience Exchange — two days of expert-led science.</p>
    <p class="mt-m"><a class="btn btn--ghost" href="/event-onepager.pdf" download>Download one-pager (PDF) <span class="arrow">↓</span></a> <a class="btn btn--ghost" href="/nursing" style="margin-left:10px">Nursing programme <span class="arrow">→</span></a></p>
  </div>
</section>

<?= fact_bar([
    ['Dates', $SITE['dates'], true],
    ['Venue', $SITE['venue']],
    ['Format', 'In-person meeting'],
    ['Audience', 'Healthcare professionals'],
]) ?>

<section class="sci-section">
  <div class="wrap">
    <?= render_agenda($PROGRAMME) ?>
    <div class="disclaimer mt-l">
      <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3z"/></svg>
      <span>Programme is subject to change. Agenda content is for healthcare professionals attending the J&amp;J IBD Summit 2026.</span>
    </div>
  </div>
</section>

<?php require partial('cta'); ?>
<?php require partial('footer'); ?>
