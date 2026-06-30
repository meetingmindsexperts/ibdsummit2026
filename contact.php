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
    <p class="lead mt-s">Questions about the J&amp;J IBD Summit 2026 — programme, registration, venue or press? Email the organising team and we'll get back to you.</p>
  </div>
</section>

<section class="sci-section" style="padding-top:clamp(20px,3vw,36px)">
  <div class="wrap">
    <div class="contact-cols">
      <div>
        <div class="sci-head"><span class="num">01</span><h2>Get in touch</h2></div>
        <p class="lead" style="max-width:46ch">The fastest way to reach us is by email. Drop the organising team a message about anything related to the summit and we'll respond as soon as we can.</p>
        <p class="mt-m"><a class="btn" href="mailto:<?= e($SITE['email']) ?>?subject=<?= rawurlencode('J&J IBD Summit 2026 enquiry') ?>">Email the organising team <span class="arrow">→</span></a></p>
        <p class="form-note">Or write to us directly at <a href="mailto:<?= e($SITE['email']) ?>" style="color:var(--red);font-weight:700"><?= e($SITE['email']) ?></a>.</p>
      </div>
      <div>
        <div class="contact-card">
          <h3>Organising team</h3>
          <div class="ci"><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg><div><div class="k">Email</div><div class="v"><a href="mailto:<?= e($SITE['email']) ?>" style="color:inherit"><?= e($SITE['email']) ?></a></div></div></div>
          <div class="ci"><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s7-5.5 7-11a7 7 0 1 0-14 0c0 5.5 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg><div><div class="k">Venue</div><div class="v">Marriott Marquis Dubai Creek, Deira</div></div></div>
          <div class="ci"><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="17" rx="2"/><path d="M3 9h18M8 2v4M16 2v4"/></svg><div><div class="k">Dates</div><div class="v"><?= e($SITE['dates']) ?></div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $cta_heading = 'Ready to join us in Dubai?'; require partial('cta'); ?>
<?php require partial('footer'); ?>
