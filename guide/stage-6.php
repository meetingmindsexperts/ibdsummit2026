<?php
require __DIR__ . '/../includes/bootstrap.php';

$title  = 'Stage 6 · Speak — The Gastro Journey Guide';
$desc   = 'Stage 6 of The Gastro Journey Guide: speaking with your healthcare professional — preparing questions, sharing changes, and agreeing next steps. Includes a glossary.';
$nav    = $GUIDE_NAV;
$active = 'guide';
$strip  = $PATIENT_STRIP;
$footer = $FOOTER_GUIDE;

require partial('head');
?>

<div class="wrap"><p class="crumbs"><a href="/">Home</a> · <a href="/guide/">The Gastro Journey Guide</a> · Stage 6</p></div>

<div class="stage-layout" id="maincontent" tabindex="-1">
  <aside class="stage-rail">
    <div class="pg">06</div>
    <div class="stg">Stage<b>6</b></div>
    <div class="vlabel">Speak</div>
    <div class="ji-rail" aria-hidden="true"><img class="ji-png" src="/assets/img/journey-icon-white.png" alt=""></div>
  </aside>

  <div class="stage-main">
    <div style="padding-bottom:8px">
      <p class="eyebrow">Stage 6 · The Gastro Journey Guide</p>
      <h1 class="display-xl" style="margin-top:8px">Speak</h1>
      <hr class="tab" style="margin-top:18px">
      <h2 class="display-m" style="color:var(--ink)">Better conversations, better care</h2>
      <p class="lead mt-s">Good conversations with your healthcare professional help you get the right support and plan the next steps together. A little preparation can make a big difference.</p>
      <div class="path-row mt-l">
        <div class="node"><div class="pin">01</div><h4>Prepare your questions</h4><p>Think about what you want to understand or discuss, and bring your list.</p></div>
        <div class="node"><div class="pin">02</div><h4>Share what has changed</h4><p>Your experience helps your healthcare professional understand your progress.</p></div>
        <div class="node"><div class="pin">03</div><h4>Agree what happens next</h4><p>Work together on a plan that's right for you.</p></div>
      </div>
      <figure class="guide-figure"><img src="/assets/img/guide/stage6-speak.jpg" alt="A patient talking with their healthcare professional"><figcaption>A little preparation helps you and your healthcare professional have a clear, productive conversation.</figcaption></figure>
      <p class="pullquote">"I want to work together to manage my condition — what do you think are the best next steps for me?"</p>
    </div>

    <article class="topic" id="speak-well">
      <p class="eyebrow">01 · Speak</p>
      <h2>Making the most of your appointment</h2>
      <hr class="tab">
      <p class="lead">A few simple steps can help you and your healthcare professional have a clear, productive conversation.</p>
      <div class="blocks cols-3 grid">
        <div class="factline"><h4>Prepare your questions</h4><p>Write down questions beforehand. Ask about your condition, tests, treatment options, and daily life — and bring the list so you don't forget.</p></div>
        <div class="factline"><h4>Share what has changed</h4><p>Share your symptoms and how often they happen, what's getting better or worse, and how it affects your daily life, work, and activities.</p></div>
        <div class="factline"><h4>Agree what happens next</h4><p>Discuss the plan, treatments, and next steps; make sure you understand what to do and when, and how to reach your team.</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h22v14H13l-6 5V21H5z"/><path d="M11 11h10M11 16h7"/></svg><div><h4>Conversation starter</h4><p>"I want to work together to manage my condition. What do you think are the best next steps for me?"</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>You're a partner in your care</h4><p>Your insight helps your healthcare team support you better.</p></div></div>
      </div>
    </article>

    <article class="topic" id="five-questions">
      <p class="eyebrow">02 · Speak</p>
      <h2>Your next appointment: 5 questions to bring</h2>
      <hr class="tab">
      <p class="lead">These questions can help you have a clear and productive conversation with your healthcare professional.</p>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>1 · What should we measure?</h4><p>What should we measure to understand how my IBD is doing?</p></div>
        <div class="factline"><h4>2 · What should I watch for?</h4><p>What signs or symptoms should I watch between visits?</p></div>
        <div class="factline"><h4>3 · How do they relate?</h4><p>How do my symptoms and inflammation relate to each other?</p></div>
        <div class="factline"><h4>4 · What goals matter now?</h4><p>What treatment goals are most important for me right now?</p></div>
        <div class="factline"><h4>5 · What's next?</h4><p>What should I do next before my next appointment?</p></div>
      </div>
      <div class="callouts">
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M12 17l2 2 5-5"/></svg><div><h4>Bring with you</h4><p>Recent test results, symptom notes, your medicine list, and questions for your healthcare professional.</p></div></div>
        <div class="co"><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg><div><h4>Keep checking in</h4><p>Keep talking, keep checking in, and keep focusing on what matters most to you.</p></div></div>
      </div>
    </article>

    <article class="topic" id="glossary">
      <p class="eyebrow">Reference</p>
      <h2>Glossary</h2>
      <hr class="tab">
      <p class="lead">Understanding key terms can help you feel more confident when talking with your healthcare professional. Ask if any term is unclear.</p>
      <div class="blocks cols-2 grid">
        <div class="factline"><h4>IBD</h4><p>Inflammatory bowel disease — conditions that cause long-term inflammation in the digestive tract.</p></div>
        <div class="factline"><h4>Crohn's disease</h4><p>A type of IBD that can affect any part of the digestive tract, often the small intestine and colon.</p></div>
        <div class="factline"><h4>Ulcerative colitis</h4><p>A type of IBD affecting the colon and rectum, where inflammation is limited to the inner lining.</p></div>
        <div class="factline"><h4>Flare</h4><p>A period when symptoms get worse, such as more diarrhoea, pain, or tiredness.</p></div>
        <div class="factline"><h4>Remission</h4><p>A period when symptoms improve or go away and inflammation is reduced.</p></div>
        <div class="factline"><h4>Inflammation</h4><p>Swelling and irritation in the body's tissues — in IBD, in the digestive tract.</p></div>
        <div class="factline"><h4>Biomarker</h4><p>A substance in blood, stool, or tissue that can show if inflammation is present or how active the disease is.</p></div>
        <div class="factline"><h4>Endoscopy</h4><p>A procedure using a thin, flexible camera to look inside the digestive tract.</p></div>
        <div class="factline"><h4>Histology</h4><p>The study of tissue under a microscope; samples may be taken during endoscopy.</p></div>
        <div class="factline"><h4>Treatment goal</h4><p>The target agreed with your team — reducing symptoms, improving quality of life, preventing flares.</p></div>
        <div class="factline"><h4>Monitoring</h4><p>Regular checks and tests to understand how your condition is doing and if treatment is working.</p></div>
        <div class="factline"><h4>Healthcare professional</h4><p>A trained expert who supports you, answers questions, and helps plan your care.</p></div>
      </div>
    </article>

    <div class="disclaimer">
      <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
      <span>This guide is for educational purposes only and does not replace professional medical advice, diagnosis, or treatment. Never change or stop a treatment without speaking to your healthcare professional first. Sources include the Crohn's &amp; Colitis Foundation, ECCO, and NICE patient information. Some images were created using AI for illustrative purposes only.</span>
    </div>

    <nav class="stage-nav">
      <a href="/guide/stage-5">← Stage 5 · Live</a>
      <a href="/guide/#stages">All stages →</a>
    </nav>
  </div>
</div>

<?php require partial('cta_guide'); ?>
<?php require partial('footer'); ?>
