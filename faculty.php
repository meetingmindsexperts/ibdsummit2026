<?php
require __DIR__ . '/includes/bootstrap.php';

$title  = 'Faculty — J&J IBD Summit 2026';
$desc   = 'Faculty for the J&J IBD Summit 2026 — chairs and speakers from across the Gulf and beyond.';
$active = 'faculty';

require partial('head');
?>

<section class="sci-section" id="maincontent" tabindex="-1" style="padding-block:clamp(36px,5vw,64px) clamp(18px,2.5vw,28px)">
  <div class="wrap">
    <p class="eyebrow">J&amp;J IBD Summit 2026</p>
    <h1 class="display-l" style="color:var(--red);margin-top:10px">Faculty</h1>
    <p class="lead mt-s">Chairs and speakers from across the Gulf and beyond, shaping the gastro journey in IBD. Faculty listed reflect the scientific programme and are subject to confirmation.</p>
  </div>
</section>

<section class="sci-section" style="padding-top:clamp(20px,3vw,36px)">
  <div class="wrap">
    <div class="sci-head"><span class="num">01</span><h2>Chairs</h2></div>
    <?= faculty_grid($CHAIRS, 'Chair') ?>

    <div class="sci-head" style="margin-top:clamp(40px,5vw,64px)"><span class="num">02</span><h2>Speakers</h2></div>
    <?= faculty_grid($SPEAKERS, 'Speaker') ?>

    <div class="sci-head" style="margin-top:clamp(40px,5vw,64px)"><span class="num">03</span><h2>Nursing education programme</h2><a class="more" href="/nursing">Nursing programme <span class="arrow">→</span></a></div>
    <div class="fac-line">
      <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="11" r="6"/><path d="M5 28c0-6 5-10 11-10s11 4 11 10"/></svg>
      <div>
        <h3>Nursing faculty to be announced</h3>
        <p>Educators for the parallel <a href="/nursing" style="color:var(--red);font-weight:700">IBD Nursing Training Programme</a> will be confirmed soon.</p>
      </div>
    </div>

    <div class="disclaimer" style="margin-top:clamp(36px,4vw,52px)">
      <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3z"/></svg>
      <span>Faculty and roles are drawn from the scientific programme and are subject to change and confirmation.</span>
    </div>
  </div>
</section>

<?php require partial('cta'); ?>
<?php require partial('footer'); ?>
