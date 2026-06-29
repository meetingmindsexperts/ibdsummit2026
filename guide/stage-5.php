<?php
require __DIR__ . '/../includes/bootstrap.php';

$title  = 'Stage 5 · Live — The Gastro Journey Guide';
$desc   = 'Stage 5 of The Gastro Journey Guide: living well with IBD — daily routines, food, travel and Ramadan planning, and support and wellbeing.';
$nav    = $GUIDE_NAV;
$active = 'guide';
$strip  = $PATIENT_STRIP;
$footer = $FOOTER_GUIDE;

require partial('head');
?>

<div class="wrap"><p class="crumbs"><a href="/">Home</a> · <a href="/guide/">The Gastro Journey Guide</a> · Stage 5</p></div>

<div class="stage-layout" id="maincontent" tabindex="-1">
  <aside class="stage-rail">
    <div class="pg">05</div>
    <div class="stg">Stage<b>5</b></div>
    <div class="vlabel">Live</div>
    <div class="ji-rail" aria-hidden="true"><img class="ji-png" src="/assets/img/journey-icon-white.png" alt=""></div>
  </aside>

  <div class="stage-main">
    <div style="padding-bottom:8px">
      <p class="eyebrow">Stage 5 · The Gastro Journey Guide</p>
      <h1 class="display-xl" style="margin-top:8px">Live</h1>
      <hr class="tab" style="margin-top:18px">
      <h2 class="display-m" style="color:var(--ink)">Living well, day to day</h2>
      <p class="lead mt-s">Living well is about more than appointments and test results. Here are ideas and practical tips to help you manage daily life, plan ahead, and look after your wellbeing. Small steps can make a big difference.</p>
      <div class="path-row mt-l">
        <div class="node"><div class="pin">01</div><h4>Daily routines</h4><p>Simple ways to build routines that support work, school, and family.</p></div>
        <div class="node"><div class="pin">02</div><h4>Food, travel &amp; Ramadan</h4><p>Practical tips for eating well, travelling safely, and planning ahead during Ramadan.</p></div>
        <div class="node"><div class="pin">03</div><h4>Support &amp; wellbeing</h4><p>Ideas to manage stress, seek support, and look after your mental and emotional health.</p></div>
      </div>
      <figure class="guide-figure"><img src="/assets/img/guide/stage5-living.jpg" alt="A person going about daily life while managing IBD"><figcaption>Small choices today can help you feel more prepared for everyday life.</figcaption></figure>
      <p class="pullquote">"You don't have to put life on hold — small steps help you move forward, one day at a time."</p>
    </div>

    <article class="topic" id="daily-routines">
      <p class="eyebrow">01 · Live</p>
      <h2>Daily routines</h2>
      <hr class="tab">
      <p class="lead">Daily routines can help you notice patterns, prepare for appointments, and bring useful information to your healthcare professional. A routine doesn't need to be perfect — it only needs to help.</p>
      <figure class="guide-figure"><img src="/assets/img/guide/stage5-routines.jpg" alt="A person preparing their bag at home as part of a daily routine"><figcaption>Small daily routines can make managing IBD feel more manageable.</figcaption></figure>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>Plan your day</h4><p>Choose one or two practical priorities and note anything you may need to prepare.</p></div>
        <div class="factline"><h4>Keep notes nearby</h4><p>Use a notebook or phone to record symptoms, questions, test results, or changes you notice.</p></div>
        <div class="factline"><h4>Prepare for appointments</h4><p>Bring your notes, recent test results, and questions to help guide the conversation.</p></div>
        <div class="factline"><h4>Notice what changes</h4><p>Watch patterns across good days and difficult days, and share what you notice.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a9 9 0 0 0-5 16.5V23h10v-3.5A9 9 0 0 0 16 3z"/><path d="M13 27h6M14 30h4"/></svg><div><h4>Progress, not perfection</h4><p>Celebrate progress, be patient with yourself, and keep moving forward — one day at a time.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>Talk with your healthcare professional</h4><p>Share what your routine reveals — it helps personalise your care.</p></div></div>
      </div>
    </article>

    <article class="topic" id="food-travel">
      <p class="eyebrow">02 · Live</p>
      <h2>Food, travel &amp; Ramadan planning</h2>
      <hr class="tab">
      <p class="lead">Daily life includes many situations that may need a little extra planning. Thinking ahead can help you feel more prepared and support better conversations with your healthcare professional.</p>
      <div class="blocks cols-3 grid">
        <div class="factline"><h4>Food and meals</h4><p>Notice what foods and drinks work well for you, plan regular meals to avoid long gaps, and talk to your team or dietitian with questions.</p></div>
        <div class="factline"><h4>Travel and activities</h4><p>Check travel insurance, keep a list of your medicines, carry a doctor's letter if needed, and plan rest stops.</p></div>
        <div class="factline"><h4>Ramadan planning</h4><p>If considering fasting, plan ahead and discuss early — every situation is different, so medical advice is important.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a9 9 0 0 0-5 16.5V23h10v-3.5A9 9 0 0 0 16 3z"/><path d="M13 27h6M14 30h4"/></svg><div><h4>Plan ahead with confidence</h4><p>Small steps today can make a big difference tomorrow.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M11 14h10"/></svg><div><h4>Write it down</h4><p>Note ideas, questions, and people you can speak to, so you feel more prepared.</p></div></div>
      </div>
    </article>

    <article class="topic" id="support-wellbeing">
      <p class="eyebrow">03 · Live</p>
      <h2>Support and wellbeing</h2>
      <hr class="tab">
      <p class="lead">You don't have to manage things on your own. Talking with people you trust and sharing how you feel can make a big difference in daily life.</p>
      <div class="blocks cols-3 grid">
        <div class="factline"><h4>People who can help</h4><p>Family or close friends, your healthcare professional, patient support groups, or a trusted colleague.</p></div>
        <div class="factline"><h4>What to share</h4><p>How you feel physically and emotionally, what helps and what's difficult, upcoming appointments, and any worries.</p></div>
        <div class="factline"><h4>When to ask for support</h4><p>If you feel overwhelmed, have trouble sleeping or concentrating, notice mood changes for several days, or need practical help.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="12" r="4"/><circle cx="22" cy="13" r="3"/><path d="M4 26c0-4 3-6 7-6s7 2 7 6M19 26c0-3 1.5-5 5-5s4 2 4.5 4"/></svg><div><h4>Who can I speak to?</h4><p>It may help to write down names and contact numbers of people you can talk to when you need support.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>It's okay to ask for help</h4><p>Lean on the people who understand and encourage you.</p></div></div>
      </div>
    </article>

    <div class="disclaimer">
      <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
      <span>This guide is for educational purposes only and does not replace medical advice. Always talk with your healthcare professional about your condition and treatment.</span>
    </div>

    <nav class="stage-nav">
      <a href="/guide/stage-4">← Stage 4 · Track</a>
      <a href="/guide/stage-6">Stage 6 · Speak →</a>
    </nav>
  </div>
</div>

<?php require partial('cta_guide'); ?>
<?php require partial('footer'); ?>
