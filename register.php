<?php
require __DIR__ . '/includes/bootstrap.php';

$title  = 'Register your interest — J&J IBD Summit 2026';
$desc   = 'Register your interest in the J&J IBD Summit 2026, 3–4 July 2026, Marriott Creek Hotel, Dubai, UAE. For healthcare professionals.';
$active = 'register';

$result = process_form('register');

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
        <?= form_banner($result) ?>
        <form class="form" method="post" action="/register" aria-label="Registration form">
          <div class="hp" aria-hidden="true"><label>Leave this field empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>
          <div class="row2">
            <div class="field"><label for="r-first">First name <span class="req">*</span></label><input id="r-first" name="first" type="text" autocomplete="given-name" value="<?= e(form_value('first')) ?>" required></div>
            <div class="field"><label for="r-last">Last name <span class="req">*</span></label><input id="r-last" name="last" type="text" autocomplete="family-name" value="<?= e(form_value('last')) ?>" required></div>
          </div>
          <div class="row2">
            <div class="field"><label for="r-email">Email <span class="req">*</span></label><input id="r-email" name="email" type="email" autocomplete="email" value="<?= e(form_value('email')) ?>" required></div>
            <div class="field"><label for="r-phone">Mobile</label><input id="r-phone" name="phone" type="tel" autocomplete="tel" value="<?= e(form_value('phone')) ?>"></div>
          </div>
          <div class="row2">
            <div class="field"><label for="r-role">Profession <span class="req">*</span></label>
              <select id="r-role" name="role" required>
                <?php foreach (['' => 'Please select…','Physician / Consultant'=>'Physician / Consultant','Specialist registrar / Fellow'=>'Specialist registrar / Fellow','Nurse'=>'Nurse','Pharmacist'=>'Pharmacist','Researcher'=>'Researcher','Other HCP'=>'Other HCP'] as $val => $opt): ?>
                <option value="<?= e($val) ?>"<?= form_value('role') === $val ? ' selected' : '' ?>><?= e($opt) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="field"><label for="r-specialty">Specialty</label>
              <select id="r-specialty" name="specialty">
                <?php foreach (['Gastroenterology','Internal medicine','Colorectal surgery','Immunology','Dermatology','Other'] as $opt): ?>
                <option<?= form_value('specialty') === $opt ? ' selected' : '' ?>><?= e($opt) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="row2">
            <div class="field"><label for="r-org">Organisation / Institution</label><input id="r-org" name="org" type="text" autocomplete="organization" value="<?= e(form_value('org')) ?>"></div>
            <div class="field"><label for="r-country">Country</label><input id="r-country" name="country" type="text" autocomplete="country-name" value="<?= e(form_value('country')) ?>"></div>
          </div>
          <label class="consent"><input type="checkbox" name="consent_hcp" value="1" required> I confirm I am a healthcare professional. <span class="req">*</span></label>
          <label class="consent"><input type="checkbox" name="consent_contact" value="1" required> I consent to Johnson &amp; Johnson Innovative Medicine contacting me about the J&amp;J IBD Summit 2026, in line with the privacy policy. <span class="req">*</span></label>
          <div class="form-actions"><button class="btn" type="submit">Submit registration <span class="arrow">→</span></button></div>
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

<?php if (($result['status'] ?? '') === 'success' && GA_MEASUREMENT_ID !== ''): ?>
<!-- Registration conversion: fired once on the post-submit success page. -->
<script>
  if (typeof gtag === 'function') {
    gtag('event', 'sign_up', {
      method: 'website',
      event_category: 'registration',
      event_label: 'J&J IBD Summit 2026'
    });
  }
</script>
<?php endif; ?>

<?php require partial('footer'); ?>
