<?php
require __DIR__ . '/../includes/bootstrap.php';

$title  = 'The Gastro Journey Guide — J&J IBD Summit 2026';
$desc   = "The Gastro Journey Guide — a conversation guide for people living with IBD. Six stages to help you take each step with clarity and confidence.";
$nav    = $GUIDE_NAV;
$active = 'guide';
$strip  = $PATIENT_STRIP;
$footer = $FOOTER_GUIDE;

require partial('head');
?>

<!-- Guide hero -->
<section class="guide-hero" id="maincontent" tabindex="-1">
  <div class="wrap">
    <div>
      <p class="eyebrow">The Gastro Journey Guide · GCC Edition 2026</p>
      <hr class="tab">
      <h1>The Gastro<br>Journey Guide</h1>
      <p>A conversation guide for people living with Crohn's disease or ulcerative colitis — to help you take each step with more clarity and confidence.</p>
      <p class="mt-m"><a class="btn btn--white" href="#stages">Start the journey <span class="arrow">→</span></a></p>
    </div>
    <div class="ji-big cover-stage" aria-hidden="true">
      <img class="cover-art cover-ar" src="/assets/img/guide-cover-ar.jpg" alt="">
      <img class="cover-art cover-en" src="/assets/img/guide-cover.jpg" alt="The Gastro Journey Guide — cover">
    </div>
  </div>
</section>

<!-- Intro -->
<section>
  <div class="wrap split">
    <div>
      <hr class="tab">
      <h2 class="display-l">Your IBD journey<br>at a glance</h2>
    </div>
    <div>
      <p class="lead">Living with IBD is a journey. This guide is here to help you take each step with more clarity and confidence. Here are the six key stages we'll explore together — come back to it, write in it, and make it part of your ongoing conversations with your care team.</p>
    </div>
  </div>
</section>

<!-- Six stages -->
<section id="stages" class="bg-paper" style="padding-top:0">
  <div class="wrap">
    <div class="grid cols-3">
      <a class="stage-card" href="/guide/stage-1">
        <svg class="tic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8c-2-1.6-5-2.2-9-2.2V25c4 0 7 .6 9 2.2 2-1.6 5-2.2 9-2.2V5.8c-4 0-7 .6-9 2.2z"/><path d="M16 8v19.2"/></svg>
        <div class="num">1</div><div class="st-label">Stage</div>
        <h3>Understand</h3>
        <p>Learn the basics of IBD, what it is, and how it differs from other conditions.</p>
        <span class="go">Read stage 1 →</span>
      </a>
      <a class="stage-card" href="/guide/stage-2">
        <svg class="tic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="14" cy="14" r="8"/><path d="m20 20 7 7"/></svg>
        <div class="num">2</div><div class="st-label">Stage</div>
        <h3>Recognize</h3>
        <p>Identify symptoms and understand why hidden inflammation matters, even when you feel well.</p>
        <span class="go">Read stage 2 →</span>
      </a>
      <a class="stage-card" href="/guide/stage-3">
        <svg class="tic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="11"/><circle cx="16" cy="16" r="5"/><circle cx="16" cy="16" r="1.3" fill="currentColor" stroke="none"/></svg>
        <div class="num">3</div><div class="st-label">Stage</div>
        <h3>Aim deeper</h3>
        <p>Explore treatment goals beyond symptom relief and what remission can mean.</p>
        <span class="go">Read stage 3 →</span>
      </a>
      <a class="stage-card" href="/guide/stage-4">
        <svg class="tic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="8" y="6" width="16" height="22" rx="2"/><path d="M12 6V4.5h8V6"/><path d="m11.5 15 2.5 2.5 5-5.5"/></svg>
        <div class="num">4</div><div class="st-label">Stage</div>
        <h3>Track</h3>
        <p>Monitor what matters, prepare for appointments, and keep track of your health over time.</p>
        <span class="go">Read stage 4 →</span>
      </a>
      <a class="stage-card" href="/guide/stage-5">
        <svg class="tic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 27S5 20 5 12.5A5.5 5.5 0 0 1 16 9a5.5 5.5 0 0 1 11 3.5C27 20 16 27 16 27z"/></svg>
        <div class="num">5</div><div class="st-label">Stage</div>
        <h3>Live</h3>
        <p>Manage daily life with confidence — food, work, family, travel, and special moments.</p>
        <span class="go">Read stage 5 →</span>
      </a>
      <a class="stage-card" href="/guide/stage-6">
        <svg class="tic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 7h20v14H14l-6 5V21H6z"/><path d="M12 13h8M12 17h5"/></svg>
        <div class="num">6</div><div class="st-label">Stage</div>
        <h3>Speak</h3>
        <p>Communicate openly with your care team and find support when you need it.</p>
        <span class="go">Read stage 6 →</span>
      </a>
    </div>

    <div class="callouts mt-l">
      <div class="co">
        <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="12" r="4"/><circle cx="22" cy="13" r="3"/><path d="M4 26c0-4 3-6 7-6s7 2 7 6M19 26c0-3 1.5-5 5-5s4 2 4.5 4"/></svg>
        <div><h4>You are not alone</h4><p>With the right information and support, you can take control of your journey.</p></div>
      </div>
      <div class="co">
        <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 16h9M12 21h9"/></svg>
        <div><h4>Use this guide</h4><p>Come back to it, write in it, and make it part of your ongoing care.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- Download -->
<section id="download">
  <div class="wrap">
    <div class="dl-card">
      <div>
        <p class="eyebrow" style="color:#ff6a55">Take it with you</p>
        <h3>Download the full guide as a PDF</h3>
        <p>Read offline or print The Gastro Journey Guide — GCC Edition 2026.</p>
      </div>
      <a class="btn btn--white" href="/guide/gastro-journey-guide.pdf" download>Download PDF <span class="arrow">↓</span></a>
    </div>
  </div>
</section>

<?php require partial('footer'); ?>
