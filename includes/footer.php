<?php
/**
 * footer.php — site footer + closing tags + scripts.
 *
 * Expected variable:
 *   $footer  array  footer config (defaults to $FOOTER_MAIN)
 */
if (!defined('IBD_APP')) { http_response_code(403); exit('Forbidden'); }

$footer = $footer ?? $FOOTER_MAIN;
?>
<footer class="site-footer">
  <div class="wrap footer-top">
    <div>
      <img class="brand-logo" src="<?= e($footer['logo']) ?>" alt="Johnson &amp; Johnson Innovative Medicine">
      <p><?= e($footer['intro']) ?></p>
    </div>
    <?php foreach ($footer['cols'] as $col): ?>
    <div><h4><?= $col[0] ?></h4><?php foreach ($col[1] as $link): ?><a href="<?= e($link[1]) ?>"><?= e($link[0]) ?></a><?php endforeach; ?></div>
    <?php endforeach; ?>
  </div>
  <div class="wrap footer-bottom">
    <span><?= e($footer['bottom_left']) ?></span>
    <span><?= $footer['bottom_right'] ?></span>
  </div>
</footer>
<script src="/assets/js/site.js?v=<?= ASSET_VER ?>"></script>
</body>
</html>
