<?php
require __DIR__ . '/includes/bootstrap.php';

$title  = 'J&J IBD Summit 2026 — The IL-23 era for IBD: UAE Experience Exchange';
$desc   = 'J&J IBD Summit 2026 · The IL-23 era for IBD: UAE Experience Exchange · 3–4 July 2026 · Marriott Creek Hotel, Dubai, UAE. A scientific meeting for healthcare professionals.';
$active = 'about';

require partial('head');
?>

<!-- Hero -->
<section class="sci-hero" id="maincontent" tabindex="-1">
  <div class="wrap">
    <div class="lead-col">
      <p class="eyebrow">J&amp;J IBD Summit 2026</p>
      <h1>The IL-23 era for IBD: UAE Experience Exchange</h1>
      <p class="tagline">A regional scientific meeting for the IBD community.</p>
      <p class="intro">Two days of expert-led science across the Gulf — advancing collaboration, sharing the latest evidence, and shaping the future of inflammatory bowel disease care.</p>
      <div class="actions">
        <a class="btn" href="/programme">View the programme <span class="arrow">→</span></a>
        <a class="btn btn--ghost" href="/faculty">Meet the faculty</a>
      </div>
    </div>
    <div class="photo">
      <img src="/assets/img/hero-networking.jpg" alt="Healthcare professionals at the J&J IBD Summit">
    </div>
  </div>
</section>

<!-- Key facts -->
<?= fact_bar([
    ['Dates', $SITE['dates'], true],
    ['Venue', $SITE['venue']],
    ['Format', 'In-person meeting'],
    ['Audience', 'Healthcare professionals'],
]) ?>

<!-- About (brief) -->
<section class="sci-section" id="about">
  <div class="wrap">
    <div class="sci-head"><span class="num">00</span><h2>About the Summit</h2></div>
    <p class="lead" style="max-width:none">The J&amp;J IBD Summit 2026 brings together leading gastroenterologists, specialists and IBD care teams from across the Gulf and beyond to advance collaboration, share the latest evidence, and shape the future of inflammatory bowel disease care. Across two days of expert-led science, the programme spans the IL-23 story, early intervention, treating to target, and complex real-world decisions in Crohn's disease and ulcerative colitis.</p>
  </div>
</section>

<!-- Programme preview -->
<section class="sci-section alt" id="programme-preview">
  <div class="wrap">
    <div class="sci-head"><span class="num">01</span><h2>Programme at a glance</h2><a class="more" href="/programme">Full programme <span class="arrow">→</span></a></div>
    <div class="prog">
      <div class="day">
        <div class="day-h"><span class="d">Day 1</span><span class="dl">3 July 2026</span></div>
        <div class="row"><span class="t">14:30</span><span class="s">The IBD Focus: challenges, opportunities &amp; what's next?</span></div>
        <div class="row"><span class="t">15:30</span><span class="s">Following the constellations: the IL-23 story in IBD</span></div>
        <div class="row"><span class="t">15:50</span><span class="s">Beyond the gut: IL-23 and the skin</span></div>
        <div class="row"><span class="t">16:10</span><span class="s">Completing the journey: IL-23 and the joints</span></div>
        <div class="row"><span class="t">16:45</span><span class="s">Breaking new grounds in ulcerative colitis</span></div>
        <div class="row"><span class="t">17:25</span><span class="s">The real-world IL-23 era in Middle Eastern UC</span></div>
      </div>
      <div class="day">
        <div class="day-h"><span class="d">Day 2</span><span class="dl">4 July 2026</span></div>
        <div class="row"><span class="t">09:00</span><span class="s">Reaching new heights in Crohn's disease</span></div>
        <div class="row"><span class="t">09:40</span><span class="s">Practical insights for IL-23 inhibitors in CD</span></div>
        <div class="row"><span class="t">10:20</span><span class="s">Towards personalized management</span></div>
        <div class="row"><span class="t">11:30</span><span class="s">Understanding perianal fistulizing CD</span></div>
        <div class="row"><span class="t">12:40</span><span class="s">Perianal fistulizing CD: multidisciplinary approach</span></div>
        <div class="row"><span class="t">13:55</span><span class="s">Closing &amp; summary</span></div>
      </div>
    </div>
  </div>
</section>

<!-- Nursing programme preview -->
<section class="sci-section" id="nursing-preview">
  <div class="wrap">
    <div class="sci-head"><span class="num">02</span><h2>Nursing programme at a glance</h2><a class="more" href="/nursing">Full nursing programme <span class="arrow">→</span></a></div>
    <p class="lead" style="max-width:none;margin-bottom:24px">A parallel two-day <a href="/nursing" style="color:var(--red);font-weight:700">IBD Nursing Training Programme</a> runs alongside the summit — a dedicated education track for nurses and IBD care teams.</p>
    <div class="prog">
      <div class="day">
        <div class="day-h"><span class="d">Day 1</span><span class="dl">Foundations</span></div>
        <div class="row"><span class="t">09:00</span><span class="s">Understanding IBD: Crohn's &amp; ulcerative colitis</span></div>
        <div class="row"><span class="t">10:15</span><span class="s">Crohn's disease management</span></div>
        <div class="row"><span class="t">11:15</span><span class="s">Ulcerative colitis management</span></div>
        <div class="row"><span class="t">13:15</span><span class="s">Disease activity, classifications &amp; monitoring</span></div>
        <div class="row"><span class="t">15:30</span><span class="s">The IBD nurse role in management</span></div>
        <div class="row"><span class="t">16:30</span><span class="s">Health maintenance in IBD</span></div>
      </div>
      <div class="day">
        <div class="day-h"><span class="d">Day 2</span><span class="dl">Advanced practice</span></div>
        <div class="row"><span class="t">09:00</span><span class="s">Medications in IBD: CD &amp; UC</span></div>
        <div class="row"><span class="t">10:15</span><span class="s">Biological safety and monitoring</span></div>
        <div class="row"><span class="t">11:15</span><span class="s">Patient adherence &amp; compliance</span></div>
        <div class="row"><span class="t">13:15</span><span class="s">Diet and nutrition in IBD</span></div>
        <div class="row"><span class="t">14:30</span><span class="s">IBD and surgery</span></div>
        <div class="row"><span class="t">15:30</span><span class="s">IBD management during pregnancy</span></div>
      </div>
    </div>
  </div>
</section>

<!-- Scientific themes -->
<section class="sci-section alt" id="themes">
  <div class="wrap">
    <div class="sci-head"><span class="num">03</span><h2>Scientific themes</h2></div>
    <div class="themes">
      <div class="theme"><span class="n">01</span><h3>The IL-23 story in IBD</h3><p>Mechanism, evidence, and the future of IL-23 inhibition.</p></div>
      <div class="theme"><span class="n">02</span><h3>Early intervention</h3><p>Acting early to change the course of disease.</p></div>
      <div class="theme"><span class="n">03</span><h3>Treating to target</h3><p>Mucosal healing and measurable inflammation control.</p></div>
      <div class="theme"><span class="n">04</span><h3>Ulcerative colitis</h3><p>Breaking new ground in UC management.</p></div>
      <div class="theme"><span class="n">05</span><h3>Crohn's disease</h3><p>Reaching new heights, including perianal fistulising disease.</p></div>
      <div class="theme"><span class="n">06</span><h3>Complex decisions</h3><p>Navigating real-life clinical scenarios and debate.</p></div>
    </div>
  </div>
</section>

<!-- Faculty -->
<section class="sci-section" id="faculty">
  <div class="wrap">
    <div class="sci-head"><span class="num">04</span><h2>Faculty</h2><a class="more" href="/faculty">Meet the faculty <span class="arrow">→</span></a></div>
    <div class="fac-line">
      <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="11" r="6"/><path d="M5 28c0-6 5-10 11-10s11 4 11 10"/></svg>
      <div>
        <h3>Chairs and speakers from across the Gulf and beyond</h3>
        <p>Meet the chairs and speakers shaping the gastro journey in IBD. <a href="/faculty" style="color:var(--red);font-weight:700">View the full faculty →</a></p>
      </div>
    </div>
  </div>
</section>

<!-- Venue -->
<section class="sci-section alt" id="venue">
  <div class="wrap">
    <div class="sci-head"><span class="num">05</span><h2>Venue</h2><a class="more" href="/venue">Venue &amp; getting there <span class="arrow">→</span></a></div>
    <div class="sci-split">
      <div>
        <h3>Marriott Creek Hotel, Dubai</h3>
        <p>A landmark hotel on Dubai Creek — host to the J&amp;J IBD Summit 2026.</p>
        <div class="meta-mini">
          <div><div class="k">Location</div><div class="vv">Jewel of the Creek, Port Saeed, Dubai, UAE</div></div>
          <div><div class="k">Dates</div><div class="vv">3–4 July 2026</div></div>
        </div>
      </div>
      <div class="media-frame"><img src="/assets/img/venue-exterior.jpg" alt="Marriott Creek Hotel — waterfront exterior on Dubai Creek"></div>
    </div>
  </div>
</section>

<?php $cta_id = 'contact'; require partial('cta'); ?>
<?php require partial('footer'); ?>
