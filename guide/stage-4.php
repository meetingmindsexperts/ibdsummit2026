<?php
require __DIR__ . '/../includes/bootstrap.php';

$title  = 'Stage 4 · Track — The Gastro Journey Guide';
$desc   = 'Stage 4 of The Gastro Journey Guide: tracking your numbers, symptoms and flares, and medication and appointment notes to bring to your healthcare professional.';
$nav    = $GUIDE_NAV;
$active = 'guide';
$strip  = $PATIENT_STRIP;
$footer = $FOOTER_GUIDE;

require partial('head');
?>

<div class="wrap"><p class="crumbs"><a href="/">Home</a> · <a href="/guide/">The Gastro Journey Guide</a> · Stage 4</p></div>

<div class="stage-layout" id="maincontent" tabindex="-1">
  <aside class="stage-rail">
    <div class="pg">04</div>
    <div class="stg">Stage<b>4</b></div>
    <div class="vlabel">Track</div>
    <div class="ji-rail" aria-hidden="true"><img class="ji-png" src="/assets/img/journey-icon-white.png" alt=""></div>
  </aside>

  <div class="stage-main">
    <div style="padding-bottom:8px">
      <p class="eyebrow">Stage 4 · The Gastro Journey Guide</p>
      <h1 class="display-xl" style="margin-top:8px">Track</h1>
      <hr class="tab" style="margin-top:18px">
      <h2 class="display-m" style="color:var(--ink)">Bring useful information to your appointments</h2>
      <p class="lead mt-s">Tracking helps you bring useful information into your appointments. Keeping notes in one place can help you and your healthcare professional see patterns and make more informed decisions together over time.</p>
      <div class="path-row mt-l">
        <div class="node"><div class="pin">01</div><h4>Know your numbers</h4><p>Keep important test results and markers in one place to review together.</p></div>
        <div class="node"><div class="pin">02</div><h4>Symptom &amp; flare notes</h4><p>Track how you feel, any changes, and possible triggers over time.</p></div>
        <div class="node"><div class="pin">03</div><h4>Medication &amp; appointment notes</h4><p>List your medicines, appointments, and questions to discuss.</p></div>
      </div>
      <figure class="guide-figure"><img src="/assets/img/guide/stage4-journal.jpg" alt="A health-notes journal with checkboxes for results, symptoms and appointments"><figcaption>Keeping notes in one place helps you and your care team see patterns over time.</figcaption></figure>
      <p class="pullquote">"What you write down today can shape a clearer conversation tomorrow."</p>
      <p class="lead mt-m" style="font-size:1rem;color:var(--wg06)">Tip: the downloadable guide includes printable trackers you can fill in and bring with you.</p>
    </div>

    <article class="topic" id="know-your-numbers">
      <p class="eyebrow">01 · Track</p>
      <h2>Know your numbers</h2>
      <hr class="tab">
      <p class="lead">Tracking important test results and markers over time can help you and your healthcare professional see changes that matter. For each result, it helps to record:</p>
      <figure class="guide-figure"><img src="/assets/img/guide/stage4-tracker.jpg" alt="A printable tracker with columns for date, test results, symptoms, medications and questions"><figcaption>A simple tracker keeps your results, symptoms, medicines and questions in one place.</figcaption></figure>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>Test / marker</h4><p>For example CRP, faecal calprotectin, or other tests you've had.</p></div>
        <div class="factline"><h4>Date</h4><p>When the test was taken, so you can see changes over time.</p></div>
        <div class="factline"><h4>Result</h4><p>The value as recorded by your care team.</p></div>
        <div class="factline"><h4>What I want to ask</h4><p>Any questions you'd like to raise about the result.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M11 14h10"/></svg><div><h4>Ask what each result may mean</h4><p>Together you can look at the bigger picture across time — not just one number.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>Notes for my next appointment</h4><p>What would I like to understand better?</p></div></div>
      </div>
    </article>

    <article class="topic" id="symptom-notes">
      <p class="eyebrow">02 · Track</p>
      <h2>Symptom and flare notes</h2>
      <hr class="tab">
      <p class="lead">Notes about how you feel, any changes, and possible context can help you and your healthcare professional see patterns worth discussing. For each entry, it helps to capture:</p>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>When &amp; what changed</h4><p>The date, and what symptoms or changes you noticed.</p></div>
        <div class="factline"><h4>How often</h4><p>How frequently it happened.</p></div>
        <div class="factline"><h4>Possible trigger or context</h4><p>What was happening around that time.</p></div>
        <div class="factline"><h4>Impact on your day</h4><p>Work/school, family, sleep, travel, mood, or appetite.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a9 9 0 0 0-5 16.5V23h10v-3.5A9 9 0 0 0 16 3z"/><path d="M13 27h6M14 30h4"/></svg><div><h4>Patterns over time may be useful</h4><p>Bring your notes to appointments so your healthcare professional can review the bigger picture with you.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>Questions to ask</h4><p>Note anything you'd like to discuss at your next visit.</p></div></div>
      </div>
    </article>

    <article class="topic" id="medication-notes">
      <p class="eyebrow">03 · Track</p>
      <h2>Medication and appointment notes</h2>
      <hr class="tab">
      <p class="lead">Being prepared helps you and your healthcare professional make the most of your time together. Keep your medicine information, appointments, and questions in one place.</p>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>Medicines I take</h4><p>Including prescription medicines, over-the-counter products, and supplements — and how you take each.</p></div>
        <div class="factline"><h4>Changes since my last visit</h4><p>New or stopped medicines, dose changes, new symptoms, or health and life events.</p></div>
        <div class="factline"><h4>Upcoming appointments</h4><p>Dates, times, and purpose — plus any tests or scans that are scheduled.</p></div>
        <div class="factline"><h4>Questions I want to ask</h4><p>Write down questions in advance, and prioritise those that matter most to you.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M11 14h10M11 19h7"/></svg><div><h4>Bring this to your next appointment</h4><p>It can help you and your healthcare professional stay organised and focused on what matters most.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12l5-7h8l5 7-9 15z"/></svg><div><h4>Even small changes matter</h4><p>Sharing small changes can be important to your care.</p></div></div>
      </div>
    </article>

    <div class="disclaimer">
      <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
      <span>This guide is for educational purposes only and does not replace medical advice. Always talk with your healthcare professional about your condition and treatment.</span>
    </div>

    <nav class="stage-nav">
      <a href="/guide/stage-3">← Stage 3 · Aim deeper</a>
      <a href="/guide/stage-5">Stage 5 · Live →</a>
    </nav>
  </div>
</div>

<?php require partial('cta_guide'); ?>
<?php require partial('footer'); ?>
