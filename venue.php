<?php
require __DIR__ . '/includes/bootstrap.php';

$title  = 'Venue — J&J IBD Summit 2026';
$desc   = 'Venue for the J&J IBD Summit 2026 — Marriott Creek Hotel, Dubai, UAE.';
$active = 'venue';

require partial('head');
?>

<section class="sci-section" id="maincontent" tabindex="-1" style="padding-block:clamp(36px,5vw,64px) clamp(18px,2.5vw,28px)">
  <div class="wrap">
    <p class="eyebrow">J&amp;J IBD Summit 2026</p>
    <h1 class="display-l" style="color:var(--red);margin-top:10px">Venue</h1>
    <p class="lead mt-s">Marriott Creek Hotel, Dubai — a landmark hotel on Dubai Creek, host to two days of expert-led science.</p>
  </div>
</section>

<?= fact_bar([
    ['Venue', $SITE['venue'], true],
    ['Area', 'Deira (Jewel of the Creek), Dubai'],
    ['Dates', $SITE['dates']],
    ['Nearest metro', 'Deira City Centre (Green Line)'],
], 'Venue information') ?>

<section class="sci-section">
  <div class="wrap">
    <div class="sci-head"><span class="num">01</span><h2>Overview</h2></div>
    <div class="sci-split">
      <div>
        <h3>Marriott Creek Hotel, Dubai</h3>
        <p>The Marriott Creek Hotel sits on Dubai Creek, moments from Deira City Centre and minutes from Downtown Dubai. A dedicated conference floor with state-of-the-art meeting rooms — alongside restaurants and lounges, an outdoor pool, gym and spa — makes it a fitting home for the J&amp;J IBD Summit 2026.</p>
        <div class="meta-mini">
          <div><div class="k">Address</div><div class="vv">Jewel of the Creek, Port Saeed, Dubai, UAE</div></div>
          <div><div class="k">Format</div><div class="vv">In-person · Healthcare professionals</div></div>
        </div>
      </div>
      <div class="media-frame"><img src="/assets/img/venue-exterior.jpg" alt="Marriott Creek Hotel — waterfront exterior on Dubai Creek"></div>
    </div>
    <div class="media-frame venue-wide"><img src="/assets/img/venue-room.jpg" alt="Conference and meeting space at the Marriott Creek Hotel"></div>
  </div>
</section>

<section class="sci-section alt">
  <div class="wrap">
    <div class="sci-head"><span class="num">02</span><h2>Getting there</h2></div>
    <div class="info-grid">
      <div class="item">
        <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18l26-9-7 12-6 1-3 6-2-7z"/></svg>
        <h3>By air</h3><p>Dubai International Airport (DXB) is roughly 10 minutes by car. Al Maktoum International (DWC) and Sharjah International also serve the city.</p>
      </div>
      <div class="item">
        <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M6 20l2-8a3 3 0 0 1 3-2h10a3 3 0 0 1 3 2l2 8M6 20h20v5a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1v-2H11v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1z"/><circle cx="10" cy="23" r="1"/><circle cx="22" cy="23" r="1"/></svg>
        <h3>By car</h3><p>Beside Deira City Centre in the Jewel of the Creek. Valet and on-site parking are available at the hotel.</p>
      </div>
      <div class="item">
        <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><rect x="8" y="5" width="16" height="18" rx="3"/><path d="M8 12h16M12 27l-2 2M20 27l2 2"/><circle cx="12" cy="18" r="1"/><circle cx="20" cy="18" r="1"/></svg>
        <h3>By metro</h3><p>Deira City Centre station (Green Line) is the nearest stop, a short ride or taxi from the venue.</p>
      </div>
    </div>
  </div>
</section>

<?php require partial('cta'); ?>
<?php require partial('footer'); ?>
