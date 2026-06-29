<?php
require __DIR__ . '/../includes/bootstrap.php';

$title  = 'Stage 1 · Understand — The Gastro Journey Guide';
$desc   = 'Stage 1 of The Gastro Journey Guide: start with the basics of IBD — what it is, Crohn\'s vs ulcerative colitis, IBD vs IBS, and IBD in the Gulf.';
$nav    = $GUIDE_NAV;
$active = 'guide';
$strip  = $PATIENT_STRIP;
$footer = $FOOTER_GUIDE;

require partial('head');
?>

<div class="wrap"><p class="crumbs"><a href="/">Home</a> · <a href="/guide/">The Gastro Journey Guide</a> · Stage 1</p></div>

<div class="stage-layout" id="maincontent" tabindex="-1">
  <!-- Red rail -->
  <aside class="stage-rail">
    <div class="pg">01</div>
    <div class="stg">Stage<b>1</b></div>
    <div class="vlabel">Understand</div>
    <div class="ji-rail" aria-hidden="true">
      <img class="ji-png" src="/assets/img/journey-icon-white.png" alt="">
    </div>
  </aside>

  <!-- Content -->
  <div class="stage-main">

    <!-- Stage intro -->
    <div style="padding-bottom:8px">
      <p class="eyebrow">Stage 1 · The Gastro Journey Guide</p>
      <h1 class="display-xl" style="margin-top:8px">Understand</h1>
      <hr class="tab" style="margin-top:18px">
      <h2 class="display-m" style="color:var(--ink)">Start with the basics of IBD</h2>
      <p class="lead mt-s">This section explains what inflammatory bowel disease (IBD) is, how Crohn's disease and ulcerative colitis can differ, and what we know about IBD in the Gulf — a foundation for better conversations with your care team.</p>
      <div class="path-row mt-l">
        <div class="node"><div class="pin">01</div><h4>What is IBD?</h4><p>Understand the basics of inflammatory bowel disease and why it happens.</p></div>
        <div class="node"><div class="pin">02</div><h4>Crohn's &amp; UC</h4><p>Explore the two main types of IBD and how they can be different.</p></div>
        <div class="node"><div class="pin">03</div><h4>IBD in the Gulf</h4><p>Look at IBD in our region — what the data shows and what factors may play a role.</p></div>
      </div>
    </div>

    <!-- Topic 1: What is IBD -->
    <article class="topic" id="what-is-ibd">
      <p class="eyebrow">01 · Understand</p>
      <h2>What is IBD?</h2>
      <hr class="tab">
      <p class="lead">Inflammatory bowel disease (IBD) is a long-term condition in which the body's immune system causes inflammation in the digestive tract.</p>
      <figure class="guide-figure"><img src="/assets/img/guide/stage1-tract.jpg" alt="Illustration of the human digestive tract within a body outline"><figcaption>IBD can affect different parts of the digestive tract — most often the small intestine, colon, or both.</figcaption></figure>
      <div class="blocks cols-3 grid">
        <div class="factline"><h4>Where it happens</h4><p>IBD can affect different parts of the digestive tract — most commonly the small intestine, large intestine (colon), or both.</p></div>
        <div class="factline"><h4>What inflammation means</h4><p>Inflammation can cause symptoms such as abdominal pain, diarrhoea, and fatigue. Symptoms can come and go, and may vary from person to person.</p></div>
        <div class="factline"><h4>Why it matters</h4><p>Understanding IBD is the first step to managing your condition and working with your care team to improve your quality of life.</p></div>
      </div>
      <div class="callouts">
        <div class="co">
          <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 3a9 9 0 0 0-5 16.5V23h10v-3.5A9 9 0 0 0 16 3z"/><path d="M13 27h6M14 30h4"/></svg>
          <div><h4>Key takeaway</h4><p>IBD is a chronic condition, but with the right information and support, many people find ways to manage it and live meaningful lives.</p></div>
        </div>
        <div class="co">
          <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h22v14H13l-6 5V21H5z"/><circle cx="12" cy="14" r="1.3"/><circle cx="16" cy="14" r="1.3"/><circle cx="20" cy="14" r="1.3"/></svg>
          <div><h4>Talk with your healthcare professional</h4><p>They can help you understand your condition and answer any questions you may have.</p></div>
        </div>
      </div>
    </article>

    <!-- Topic 2: IBD is not IBS -->
    <article class="topic" id="ibd-vs-ibs">
      <p class="eyebrow">01 · Understand</p>
      <h2>IBD is not IBS</h2>
      <hr class="tab">
      <p class="lead">IBD and IBS can cause digestive symptoms, but they are different conditions. Understanding the difference can help you have clearer conversations with your care team.</p>
      <div class="compare">
        <div class="col">
          <h3><svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5c-3 0-5 2-5 6s2 5 2 9 1 6 4 6M21 5c3 0 5 2 5 6s-2 5-2 9-1 6-4 6"/></svg> IBD <span class="muted" style="font-size:.8rem;font-weight:400">— Inflammatory Bowel Disease</span></h3>
          <ul>
            <li><b>Inflammation</b> — IBD involves inflammation in the digestive tract.</li>
            <li><b>Long-term condition</b> — a chronic condition that can cause flare-ups and periods of remission.</li>
            <li><b>Potential complications</b> — can lead to complications if not properly managed.</li>
            <li><b>May need medical treatment</b> — often requires medications and ongoing care.</li>
            <li><b>Needs specialist care</b> — managed by a gastroenterologist or IBD care team.</li>
          </ul>
        </div>
        <div class="col" style="background:var(--white)">
          <h3 style="color:var(--wg06)"><svg class="ic" style="color:var(--wg06)" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5c-3 0-5 2-5 6s2 5 2 9 1 6 4 6M21 5c3 0 5 2 5 6s-2 5-2 9-1 6-4 6"/></svg> IBS <span class="muted" style="font-size:.8rem;font-weight:400">— Irritable Bowel Syndrome</span></h3>
          <ul style="--red:var(--wg05)">
            <li><b>No inflammation</b> — IBS does not cause inflammation in the digestive tract.</li>
            <li><b>Long-term functional disorder</b> — affects how the intestines work, not their structure.</li>
            <li><b>Does not cause complications</b> — not linked to inflammation-related complications.</li>
            <li><b>Managed with lifestyle changes</b> — diet, stress management, and other strategies.</li>
            <li><b>Managed in primary care</b> — usually with or without specialist input.</li>
          </ul>
        </div>
      </div>
      <div class="callouts">
        <div class="co">
          <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h22v14H13l-6 5V21H5z"/><path d="M11 14h10"/></svg>
          <div><h4>Important to know</h4><p>Only a healthcare professional can diagnose the cause of your symptoms and recommend the right next steps for you.</p></div>
        </div>
        <div class="co">
          <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg>
          <div><h4>Talk with your healthcare professional</h4><p>If you're unsure whether your symptoms point to IBD or IBS, your care team can guide testing and diagnosis.</p></div>
        </div>
      </div>
    </article>

    <!-- Topic 3: Crohn's & UC -->
    <article class="topic" id="crohns-uc">
      <p class="eyebrow">02 · Understand</p>
      <h2>Crohn's disease and ulcerative colitis</h2>
      <hr class="tab">
      <p class="lead">IBD includes two main types. They can affect different parts of the digestive tract.</p>
      <div class="compare">
        <div class="col">
          <h3>Crohn's disease</h3>
          <p style="font-size:.95rem;color:#3a3a3a;margin-bottom:10px">Crohn's disease can affect any part of the digestive tract, from the mouth to the anus.</p>
          <img class="guide-fig" src="/assets/img/guide/anat-crohns.jpg" alt="Illustration of the digestive tract showing patchy inflammation in Crohn's disease">
          <ul>
            <li>Can affect the small intestine, colon, or both.</li>
            <li>Inflammation occurs in patches.</li>
            <li>Can involve deeper layers of the bowel wall.</li>
          </ul>
        </div>
        <div class="col">
          <h3>Ulcerative colitis</h3>
          <p style="font-size:.95rem;color:#3a3a3a;margin-bottom:10px">Ulcerative colitis only affects the large intestine (colon) and rectum.</p>
          <img class="guide-fig" src="/assets/img/guide/anat-uc.jpg" alt="Illustration of the digestive tract showing continuous inflammation in the colon and rectum in ulcerative colitis">
          <ul>
            <li>Affects the colon and rectum only.</li>
            <li>Inflammation is continuous.</li>
            <li>Typically affects the inner layer of the bowel.</li>
          </ul>
        </div>
      </div>
      <p class="pullquote">"Crohn's disease is unpredictable — but it is not unmanageable."</p>
      <h3 style="margin-top:6px">Crohn's disease behaviour patterns</h3>
      <table class="dtable">
        <thead><tr><th>Behaviour pattern</th><th>What it means</th></tr></thead>
        <tbody>
          <tr><td><b>B1 — Inflammatory</b></td><td>Inflammation only, with no structural damage yet.</td></tr>
          <tr><td><b>B2 — Stricturing</b></td><td>Scar tissue narrows the bowel.</td></tr>
          <tr><td><b>B3 — Penetrating</b></td><td>Inflammation creates fistulas or abscesses.</td></tr>
        </tbody>
      </table>
      <div class="callouts">
        <div class="co">
          <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h22v14H13l-6 5V21H5z"/><path d="M11 14h10"/></svg>
          <div><h4>Important to know</h4><p>Both are long-term (chronic) conditions. Understanding the difference can help you have clearer conversations with your care team.</p></div>
        </div>
        <div class="co">
          <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg>
          <div><h4>Talk with your healthcare professional</h4><p>They can help answer your questions and guide your next steps.</p></div>
        </div>
      </div>
    </article>

    <!-- Topic 4: IBD in the Gulf -->
    <article class="topic" id="ibd-gulf">
      <p class="eyebrow">03 · Understand</p>
      <h2>IBD in the Gulf</h2>
      <hr class="tab">
      <p class="lead">IBD affects people and families across the Gulf. Greater awareness can help people recognise ongoing symptoms and have timely conversations with their healthcare professional.</p>
      <div class="blocks cols-3 grid">
        <div class="factline"><h4>Awareness is growing</h4><p>More people are talking about IBD and long-term digestive symptoms. Awareness can help reduce delays in seeking support.</p></div>
        <div class="factline"><h4>Symptoms can affect daily life</h4><p>IBD may impact school, work, family life, travel, and overall wellbeing. Everyone's experience can be different.</p></div>
        <div class="factline"><h4>Early conversations matter</h4><p>If symptoms continue or change, speaking with a healthcare professional can help guide the next steps.</p></div>
      </div>
      <div class="callouts">
        <div class="co">
          <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 7h22v14H13l-6 5V21H5z"/><path d="M11 14h10"/></svg>
          <div><h4>Important to know</h4><p>Only a healthcare professional can assess symptoms, request tests, and explain what they may mean.</p></div>
        </div>
        <div class="co">
          <svg class="ic" viewBox="0 0 32 32" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M7 4h13l6 6v18H7z"/><path d="M19 4v6h6M12 17l2 2 5-5"/></svg>
          <div><h4>Talk with your healthcare professional</h4><p>Bring up any ongoing symptoms — they can help you understand your options.</p></div>
        </div>
      </div>
    </article>

    <!-- Disclaimer -->
    <div class="disclaimer">
      <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 8.5 8 11 4.6-2.5 8-6 8-11V5l-8-3z"/><path d="m9 12 2 2 4-4"/></svg>
      <span>This guide is for educational purposes only and does not replace medical advice. Always talk with your healthcare professional about your condition and treatment.</span>
    </div>

    <!-- Prev / next -->
    <nav class="stage-nav">
      <a href="/guide/">← All stages</a>
      <a href="/guide/stage-2">Stage 2 · Recognize →</a>
    </nav>
  </div>
</div>

<?php require partial('cta_guide'); ?>
<?php require partial('footer'); ?>
