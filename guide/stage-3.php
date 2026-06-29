<?php
require __DIR__ . '/../includes/bootstrap.php';

$title  = 'Stage 3 · Aim deeper — The Gastro Journey Guide';
$desc   = 'Stage 3 of The Gastro Journey Guide: looking deeper at what remission can mean, what your care team measures, and questions about treatment goals.';
$nav    = $GUIDE_NAV;
$active = 'guide';
$strip  = $PATIENT_STRIP;
$footer = $FOOTER_GUIDE;

require partial('head');
?>

<div class="wrap"><p class="crumbs"><a href="/">Home</a> · <a href="/guide/">The Gastro Journey Guide</a> · Stage 3</p></div>

<div class="stage-layout" id="maincontent" tabindex="-1">
  <aside class="stage-rail">
    <div class="pg">03</div>
    <div class="stg">Stage<b>3</b></div>
    <div class="vlabel">Aim deeper</div>
    <div class="ji-rail" aria-hidden="true"><img class="ji-png" src="/assets/img/journey-icon-white.png" alt=""></div>
  </aside>

  <div class="stage-main">
    <div style="padding-bottom:8px">
      <p class="eyebrow">Stage 3 · The Gastro Journey Guide</p>
      <h1 class="display-xl" style="margin-top:8px">Aim deeper</h1>
      <hr class="tab" style="margin-top:18px">
      <h2 class="display-m" style="color:var(--ink)">Looking beyond how you feel</h2>
      <p class="lead mt-s">When symptoms improve, it's important to look deeper. This stage explores how remission can be described, what tests and measures may be reviewed, and the questions that help guide the right next steps with your care team.</p>
      <div class="path-row mt-l">
        <div class="node"><div class="pin">01</div><h4>What remission can mean</h4><p>Remission in IBD can be described in different ways — clinical, biomarker, endoscopic, and histologic.</p></div>
        <div class="node"><div class="pin">02</div><h4>What your care team may measure</h4><p>Symptoms, blood and stool tests, endoscopy or imaging, and other information.</p></div>
        <div class="node"><div class="pin">03</div><h4>Questions to explore together</h4><p>Talking about what matters most to you helps your care team understand your goals.</p></div>
      </div>
      <figure class="guide-figure"><img src="/assets/img/guide/stage3-colon.jpg" alt="Illustration of the large intestine (colon)"><figcaption>Remission can be looked at on several levels — from how you feel to healing seen inside the bowel.</figcaption></figure>
      <p class="pullquote">"Remission is more than feeling better — it can mean healing you cannot always feel."</p>
    </div>

    <article class="topic" id="what-remission-means">
      <p class="eyebrow">01 · Aim deeper</p>
      <h2>What remission can mean</h2>
      <hr class="tab">
      <p class="lead">Remission in IBD can be described in different ways — it's not just about how you feel. Your healthcare professional may look at several levels of information together to understand your condition more completely.</p>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>How you feel</h4><p>Looking at your symptoms, daily activities, and overall wellbeing.</p></div>
        <div class="factline"><h4>What tests show</h4><p>Reviewing blood tests, stool tests, and other biomarkers of inflammation.</p></div>
        <div class="factline"><h4>What scopes or imaging show</h4><p>Examining the inside of your bowel, or using imaging to assess the bowel wall.</p></div>
        <div class="factline"><h4>What microscopic healing means</h4><p>In some cases, a biopsy can show how inflamed or healed the bowel lining is.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a9 9 0 0 0-5 16.5V23h10v-3.5A9 9 0 0 0 16 3z"/><path d="M13 27h6M14 30h4"/></svg><div><h4>A fuller picture</h4><p>These different levels help your care team understand your condition more completely and guide conversations about your care.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>Talk with your healthcare professional</h4><p>Ask what remission means for you — they can explain which measures they use and why they matter.</p></div></div>
      </div>
    </article>

    <article class="topic" id="types-of-remission">
      <p class="eyebrow">02 · Aim deeper</p>
      <h2>Clinical, biomarker, endoscopic &amp; histologic remission</h2>
      <hr class="tab">
      <p class="lead">You may hear different types of remission — each looks at your condition in a different way. Your healthcare professional considers all of these, together with your symptoms and overall health.</p>
      <figure class="guide-figure"><img src="/assets/img/guide/stage3-histology.jpg" alt="Microscopic illustration of bowel-lining cells"><figcaption>Histologic remission looks at healing in the bowel lining under a microscope.</figcaption></figure>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>Clinical remission</h4><p>Looks at how you feel — fewer symptoms and improved daily life (less abdominal pain, fewer bowel symptoms, better wellbeing).</p></div>
        <div class="factline"><h4>Biomarker remission</h4><p>Looks at signs of inflammation in blood or stool tests (e.g. calprotectin); lower levels may suggest the condition is under control.</p></div>
        <div class="factline"><h4>Endoscopic remission</h4><p>Looks inside the bowel with a scope — little or no visible inflammation, with the lining appearing more normal.</p></div>
        <div class="factline"><h4>Histologic remission</h4><p>Looks at a tissue sample under a microscope — minimal or no inflammatory cells, indicating healing at a microscopic level.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h22v14H13l-6 5V21H5z"/><path d="M11 14h10"/></svg><div><h4>Important to know</h4><p>These different types of remission help your team make informed decisions. Your treatment goals are personal and may change over time.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>Talk with your healthcare professional</h4><p>Always discuss what's right for you.</p></div></div>
      </div>
    </article>

    <article class="topic" id="treatment-goals">
      <p class="eyebrow">03 · Aim deeper</p>
      <h2>Questions about treatment goals</h2>
      <hr class="tab">
      <p class="lead">There's no one-size-fits-all goal — what matters most can be different for everyone. These questions can help you start a conversation about your goals for care.</p>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>What are realistic goals right now?</h4><p>What improvements should we look for together?</p></div>
        <div class="factline"><h4>How will we know it's working?</h4><p>What signs or tests will help — and how often should we review them?</p></div>
        <div class="factline"><h4>What would success look like?</h4><p>If my condition is improving, how will we know if my goals have been reached?</p></div>
        <div class="factline"><h4>How might goals change over time?</h4><p>What factors could affect them — and what are my options if goals aren't met?</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M11 14h10M11 19h7"/></svg><div><h4>Notes for your next appointment</h4><p>Write down what's important to you so you can have a helpful conversation.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>A partnership</h4><p>Your healthcare professional is your partner. Together, you can set goals that are right for you.</p></div></div>
      </div>
    </article>

    <div class="disclaimer">
      <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
      <span>This guide is for educational purposes only and does not replace medical advice. Always talk with your healthcare professional about your condition and treatment.</span>
    </div>

    <nav class="stage-nav">
      <a href="/guide/stage-2">← Stage 2 · Recognize</a>
      <a href="/guide/stage-4">Stage 4 · Track →</a>
    </nav>
  </div>
</div>

<?php require partial('cta_guide'); ?>
<?php require partial('footer'); ?>
