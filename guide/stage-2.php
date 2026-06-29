<?php
require __DIR__ . '/../includes/bootstrap.php';

$title  = 'Stage 2 · Recognize — The Gastro Journey Guide';
$desc   = 'Stage 2 of The Gastro Journey Guide: recognising the signals your body sends — symptoms, changes, and why feeling better is not the whole story.';
$nav    = $GUIDE_NAV;
$active = 'guide';
$strip  = $PATIENT_STRIP;
$footer = $FOOTER_GUIDE;

require partial('head');
?>

<div class="wrap"><p class="crumbs"><a href="/">Home</a> · <a href="/guide/">The Gastro Journey Guide</a> · Stage 2</p></div>

<div class="stage-layout" id="maincontent" tabindex="-1">
  <aside class="stage-rail">
    <div class="pg">02</div>
    <div class="stg">Stage<b>2</b></div>
    <div class="vlabel">Recognize</div>
    <div class="ji-rail" aria-hidden="true"><img class="ji-png" src="/assets/img/journey-icon-white.png" alt=""></div>
  </aside>

  <div class="stage-main">
    <div style="padding-bottom:8px">
      <p class="eyebrow">Stage 2 · The Gastro Journey Guide</p>
      <h1 class="display-xl" style="margin-top:8px">Recognize</h1>
      <hr class="tab" style="margin-top:18px">
      <h2 class="display-m" style="color:var(--ink)">The signals your body sends</h2>
      <p class="lead mt-s">Understanding the signals your body sends — and what's happening beneath the surface — can help you take the next step in your journey.</p>
      <div class="path-row mt-l">
        <div class="node"><div class="pin">01</div><h4>Symptoms are signals</h4><p>Ongoing or recurring symptoms may be your body's way of asking for attention.</p></div>
        <div class="node"><div class="pin">02</div><h4>Feeling better isn't the whole story</h4><p>Symptoms may improve, but inflammation can still be active under the surface.</p></div>
        <div class="node"><div class="pin">03</div><h4>Symptom control vs. inflammation</h4><p>Managing symptoms matters — but treating inflammation is key to protecting your future.</p></div>
      </div>
      <p class="pullquote">"Symptoms are your body's way of asking for attention — even small ones are worth noticing."</p>
    </div>

    <article class="topic" id="symptoms-are-signals">
      <p class="eyebrow">01 · Recognize</p>
      <h2>Symptoms are signals</h2>
      <hr class="tab">
      <p class="lead">Ongoing or recurring symptoms can be your body's way of asking for attention. Noticing patterns and changes can help you and your healthcare professional have more meaningful conversations. You may not experience all of these — what matters is how they affect you.</p>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>Bathroom changes</h4><p>Diarrhoea, urgency, increased frequency, or blood in the stool.</p></div>
        <div class="factline"><h4>Stomach symptoms</h4><p>Abdominal pain, cramping, bloating, or a feeling of fullness.</p></div>
        <div class="factline"><h4>Impact on daily life</h4><p>Tiredness, low energy, poor appetite, or unexplained weight changes.</p></div>
        <div class="factline"><h4>General wellbeing</h4><p>Fever, night sweats, joint pain, or feeling generally unwell.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h22v14H13l-6 5V21H5z"/><path d="M11 14h10"/></svg><div><h4>Important to know</h4><p>Only a healthcare professional can assess your symptoms, request tests, and explain what they may mean.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>Talk with your healthcare professional</h4><p>Bring notes on what symptoms you had, when they started or changed, how often they occur, and what makes them better or worse.</p></div></div>
      </div>
    </article>

    <article class="topic" id="when-symptoms-change">
      <p class="eyebrow">02 · Recognize</p>
      <h2>When symptoms change</h2>
      <hr class="tab">
      <p class="lead">Changes in how you feel can provide important clues about what's happening inside. You know your body best — trust what you're experiencing, and don't ignore changes that persist or return.</p>
      <div class="blocks cols-3 grid">
        <div class="factline"><h4>1 · Notice the change</h4><p>Pay attention to new, worsening, or recurring symptoms, or patterns different from your usual.</p></div>
        <div class="factline"><h4>2 · Write it down</h4><p>Keep track of what you're experiencing — details help you and your care team see the bigger picture.</p></div>
        <div class="factline"><h4>3 · Talk it through</h4><p>Share what you noticed. This can help guide the right next steps for your care, together.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h22v14H13l-6 5V21H5z"/><path d="M11 14h10"/></svg><div><h4>Important to know</h4><p>Small details can make a big difference. Patterns over time are often more helpful than a single bad day.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>You are not alone</h4><p>Your healthcare team is there to listen, support, and work with you.</p></div></div>
      </div>
    </article>

    <article class="topic" id="feeling-better">
      <p class="eyebrow">03 · Recognize</p>
      <h2>Feeling better is not the whole story</h2>
      <hr class="tab">
      <p class="lead">When you have IBD, symptoms can improve — but that doesn't always mean inflammation is gone. Your healthcare team looks at more than how you feel to understand what's happening inside.</p>
      <figure class="guide-figure"><img src="/assets/img/guide/stage2-lining.jpg" alt="Illustration of inflamed cells in the bowel lining"><figcaption>Inflammation can still be active in the bowel lining even when symptoms have eased.</figcaption></figure>
      <div class="blocks cols-3 grid">
        <div class="factline"><h4>How you feel</h4><p>Your symptoms and how they affect your daily life are an important part of the conversation.</p></div>
        <div class="factline"><h4>What tests show</h4><p>Blood, stool, and other tests can show inflammation that you may not feel.</p></div>
        <div class="factline"><h4>What your bowel lining shows</h4><p>Your team may check the bowel lining to see if inflammation is still present and how it's changing.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a9 9 0 0 0-5 16.5V23h10v-3.5A9 9 0 0 0 16 3z"/><path d="M13 27h6M14 30h4"/></svg><div><h4>The full picture matters</h4><p>When symptoms, test results, and the bowel lining are considered together, you and your care team can have a more informed conversation.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>Keep talking</h4><p>Share how you feel and ask questions. Your insight helps your healthcare team personalise your care.</p></div></div>
      </div>
    </article>

    <article class="topic" id="what-is-measured">
      <p class="eyebrow">04 · Recognize</p>
      <h2>What your care team may measure</h2>
      <hr class="tab">
      <p class="lead">No single test tells the whole story. To understand how your IBD is behaving, your care team may look at several types of information together.</p>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>Symptoms &amp; daily experience</h4><p>How often you go, abdominal pain, urgency, tiredness, and how symptoms affect your day.</p></div>
        <div class="factline"><h4>Blood tests (such as CRP)</h4><p>These look for signs of inflammation in your body; results can change over time.</p></div>
        <div class="factline"><h4>Stool tests (e.g. faecal calprotectin)</h4><p>These look for inflammation in your digestive tract and can show changes you may not feel.</p></div>
        <div class="factline"><h4>Endoscopy / imaging (when needed)</h4><p>These let your team see inside the bowel and check for inflammation.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h22v14H13l-6 5V21H5z"/><path d="M11 14h10"/></svg><div><h4>Important to know</h4><p>Test results can vary from person to person, numbers alone don't tell the whole story, and only your healthcare professional can interpret your results.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>Keep talking</h4><p>Your questions help your care team help you.</p></div></div>
      </div>
    </article>

    <div class="disclaimer">
      <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
      <span>This guide is for educational purposes only and does not replace medical advice. Always talk with your healthcare professional about your condition and treatment.</span>
    </div>

    <nav class="stage-nav">
      <a href="/guide/stage-1">← Stage 1 · Understand</a>
      <a href="/guide/stage-3">Stage 3 · Aim deeper →</a>
    </nav>
  </div>
</div>

<?php require partial('cta_guide'); ?>
<?php require partial('footer'); ?>
