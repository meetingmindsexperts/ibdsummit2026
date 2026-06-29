<?php
require __DIR__ . '/includes/bootstrap.php';

$title  = 'Contact — J&J IBD Summit 2026';
$desc   = 'Contact the J&J IBD Summit 2026 organising team.';
$active = 'contact';

require partial('head');
?>

<section class="sci-section" id="maincontent" tabindex="-1" style="padding-block:clamp(36px,5vw,64px) clamp(18px,2.5vw,28px)">
  <div class="wrap">
    <p class="eyebrow">J&amp;J IBD Summit 2026</p>
    <h1 class="display-l" style="color:var(--red);margin-top:10px">Contact</h1>
    <p class="lead mt-s">Questions about the J&amp;J IBD Summit 2026? Send us a message and the organising team will get back to you.</p>
  </div>
</section>

<section class="sci-section" style="padding-top:clamp(20px,3vw,36px)">
  <div class="wrap">
    <div class="contact-cols">
      <div>
        <div class="sci-head"><span class="num">01</span><h2>Send a message</h2></div>
        <!-- Front-end demo only — not wired to a backend. Registrations go to Supabase via /register. -->
        <form class="form" onsubmit="return false;" aria-label="Contact form">
          <div class="row2">
            <div class="field"><label for="c-first">First name <span class="req">*</span></label><input id="c-first" name="first" type="text" autocomplete="given-name" required></div>
            <div class="field"><label for="c-last">Last name <span class="req">*</span></label><input id="c-last" name="last" type="text" autocomplete="family-name" required></div>
          </div>
          <div class="row2">
            <div class="field"><label for="c-email">Email <span class="req">*</span></label><input id="c-email" name="email" type="email" autocomplete="email" required></div>
            <div class="field"><label for="c-org">Organisation</label><input id="c-org" name="org" type="text" autocomplete="organization"></div>
          </div>
          <div class="field"><label for="c-subject">Subject</label>
            <select id="c-subject" name="subject">
              <option>General enquiry</option><option>Registration</option><option>Programme &amp; faculty</option><option>Venue &amp; travel</option><option>Press</option>
            </select>
          </div>
          <div class="field"><label for="c-msg">Message <span class="req">*</span></label><textarea id="c-msg" name="message" required></textarea></div>
          <label class="consent"><input type="checkbox" required> I confirm I am a healthcare professional and consent to being contacted about this enquiry.</label>
          <div class="form-actions"><button class="btn" type="submit">Send message <span class="arrow">→</span></button></div>
          <p class="form-note">This contact form is a front-end demo — connect it to your preferred handler if you want contact messages captured too.</p>
        </form>
      </div>
      <div>
        <div class="contact-card">
          <h3>Organising team</h3>
          <div class="ci"><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg><div><div class="k">Email</div><div class="v"><?= e($SITE['email']) ?></div></div></div>
          <div class="ci"><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s7-5.5 7-11a7 7 0 1 0-14 0c0 5.5 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg><div><div class="k">Venue</div><div class="v">Marriott Marquis Dubai Creek, Deira</div></div></div>
          <div class="ci"><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M3 9h18M8 2v4M16 2v4"/></svg><div><div class="k">Dates</div><div class="v"><?= e($SITE['dates']) ?></div></div></div>
          <p class="form-note" style="margin-top:18px">Contact details are placeholders — replace with the official organising-team address before launch.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $cta_heading = 'Ready to join us in Dubai?'; require partial('cta'); ?>
<?php require partial('footer'); ?>
