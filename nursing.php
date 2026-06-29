<?php
require __DIR__ . '/includes/bootstrap.php';

$title  = 'IBD Nursing Training Programme — J&J IBD Summit 2026';
$desc   = 'IBD Nursing Training Programme — a parallel two-day education programme for nurses, 3–4 July 2026, Marriott Marquis Dubai Creek.';
$active = 'nursing';

require partial('head');
?>

<!-- Page header -->
<section class="sci-section" id="maincontent" tabindex="-1" style="padding-block:clamp(36px,5vw,64px) clamp(18px,2.5vw,28px)">
  <div class="wrap">
    <p class="eyebrow">J&amp;J IBD Summit 2026 · Parallel programme</p>
    <h1 class="display-l" style="color:var(--red);margin-top:10px">IBD Nursing Training Programme</h1>
    <p class="lead mt-s">A parallel two-day education programme equipping nurses with the knowledge and skills to deliver expert IBD care — running alongside the scientific summit.</p>
    <p class="mt-m">
      <a class="btn btn--ghost" href="/nursing-programme.pdf" download>Download programme (PDF) <span class="arrow">↓</span></a>
      <a class="btn btn--ghost" href="/programme" style="margin-left:10px">Scientific programme <span class="arrow">→</span></a>
    </p>
  </div>
</section>

<?= fact_bar([
    ['Dates', $SITE['dates'], true],
    ['Daily', '09:00 – 18:00'],
    ['Venue', $SITE['venue']],
    ['For', 'Nurses & IBD care teams'],
]) ?>

<section class="sci-section">
  <div class="wrap">
    <div class="sci-head"><span class="num">01</span><h2>Programme</h2></div>
    <?= render_agenda($NURSING) ?>
    <div class="disclaimer mt-l">
      <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3z"/></svg>
      <span>Programme is subject to change. The IBD Nursing Training Programme runs in parallel with the scientific summit and is intended for nurses and IBD care teams.</span>
    </div>
  </div>
</section>

<!-- Faculty TBA -->
<section class="sci-section alt" id="nursing-faculty">
  <div class="wrap">
    <div class="sci-head"><span class="num">02</span><h2>Faculty</h2></div>
    <div class="fac-line">
      <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="11" r="6"/><path d="M5 28c0-6 5-10 11-10s11 4 11 10"/></svg>
      <div>
        <h3>Nursing faculty to be announced</h3>
        <p>Educators for the IBD Nursing Training Programme will be confirmed soon. See the <a href="/faculty" style="color:var(--red);font-weight:700">summit faculty</a>.</p>
      </div>
    </div>
  </div>
</section>

<?php $cta_heading = 'Train with the IBD nursing community.'; require partial('cta'); ?>
<?php require partial('footer'); ?>
