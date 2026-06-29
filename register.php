<?php
require __DIR__ . '/includes/bootstrap.php';

$title  = 'Register your interest — J&J IBD Summit 2026';
$desc   = 'Register your interest in the J&J IBD Summit 2026, 3–4 July 2026, Marriott Marquis Dubai Creek. For healthcare professionals.';
$active = 'register';

require partial('head');
?>

<section class="sci-section" id="maincontent" tabindex="-1" style="padding-block:clamp(36px,5vw,64px) clamp(18px,2.5vw,28px)">
  <div class="wrap">
    <p class="eyebrow">J&amp;J IBD Summit 2026</p>
    <h1 class="display-l" style="color:var(--red);margin-top:10px">Register your interest</h1>
    <p class="lead mt-s">Secure your place at the J&amp;J IBD Summit 2026. Registration is for healthcare professionals.</p>
  </div>
</section>

<?= fact_bar([
    ['Dates', $SITE['dates'], true],
    ['Venue', $SITE['venue']],
    ['Format', 'In-person meeting'],
    ['Audience', 'Healthcare professionals'],
]) ?>

<section class="sci-section">
  <div class="wrap">
    <div class="contact-cols">
      <div>
        <div class="sci-head"><span class="num">01</span><h2>Your details</h2></div>
        <!-- TODO: wire this form to your registration/CRM handler before launch (currently front-end demo). -->
        <form class="form" onsubmit="return false;" aria-label="Registration form">
          <div class="row2">
            <div class="field"><label for="r-first">First name <span class="req">*</span></label><input id="r-first" name="first" type="text" autocomplete="given-name" required></div>
            <div class="field"><label for="r-last">Last name <span class="req">*</span></label><input id="r-last" name="last" type="text" autocomplete="family-name" required></div>
          </div>
          <div class="row2">
            <div class="field"><label for="r-email">Email <span class="req">*</span></label><input id="r-email" name="email" type="email" autocomplete="email" required></div>
            <div class="field"><label for="r-phone">Mobile</label><input id="r-phone" name="phone" type="tel" autocomplete="tel"></div>
          </div>
          <div class="row2">
            <div class="field"><label for="r-role">Profession <span class="req">*</span></label>
              <select id="r-role" name="role" required>
                <option value="">Please select…</option><option>Physician / Consultant</option><option>Specialist registrar / Fellow</option><option>Nurse</option><option>Pharmacist</option><option>Researcher</option><option>Other HCP</option>
              </select>
            </div>
            <div class="field"><label for="r-specialty">Specialty</label>
              <select id="r-specialty" name="specialty">
                <option>Gastroenterology</option><option>Internal medicine</option><option>Colorectal surgery</option><option>Immunology</option><option>Dermatology</option><option>Other</option>
              </select>
            </div>
          </div>
          <div class="row2">
            <div class="field"><label for="r-org">Organisation / Institution</label><input id="r-org" name="org" type="text" autocomplete="organization"></div>
            <div class="field"><label for="r-country">Country</label><input id="r-country" name="country" type="text" autocomplete="country-name"></div>
          </div>
          <label class="consent"><input type="checkbox" required> I confirm I am a healthcare professional. <span class="req">*</span></label>
          <label class="consent"><input type="checkbox" required> I consent to Johnson &amp; Johnson Innovative Medicine contacting me about the J&amp;J IBD Summit 2026, in line with the privacy policy. <span class="req">*</span></label>
          <div class="form-actions"><button class="btn" type="submit">Submit registration <span class="arrow">→</span></button></div>
          <p class="form-note">This form is a front-end demo — connect it to your registration/CRM handler before launch.</p>
        </form>
      </div>
      <div>
        <div class="contact-card">
          <h3>Why attend</h3>
          <div class="ci"><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"/></svg><div><div class="v">Expert-led, evidence-based sessions across two days</div></div></div>
          <div class="ci"><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"/></svg><div><div class="v">The latest science on IL-23, early intervention &amp; treating to target</div></div></div>
          <div class="ci"><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"/></svg><div><div class="v">Case-based debate, panels and regional perspectives</div></div></div>
          <div class="ci"><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4L19 7"/></svg><div><div class="v">Connect with peers from across the Gulf and beyond</div></div></div>
          <p class="form-note" style="margin-top:18px"><a href="/programme" style="color:var(--red);font-weight:700">View the programme →</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require partial('footer'); ?>
