<?php $base = ($is_home ?? false) ? '' : 'index.php'; ?>
<footer>
  <div class="wrap" style="margin-left:var(--nav)">
    <div class="foot-big">Urban <em>Plate</em></div>
    <div class="foot-grid">
      <div><h5>Visit</h5><p><?= e(SITE['name']) ?><br><?= e(SITE['address'][0]) ?><br><?= e(SITE['address'][1]) ?></p></div>
      <div><h5>Contact</h5>
        <a href="tel:<?= e(SITE['phone_link']) ?>"><?= e(SITE['phone']) ?></a>
        <a href="mailto:<?= e(SITE['email']) ?>"><?= e(SITE['email']) ?></a></div>
      <div><h5>Explore</h5>
        <a href="<?= $base ?>#menu">Menu</a><a href="<?= $base ?>#nutrition">Nutrition</a>
        <a href="<?= $base ?>#journal">Journal</a><a href="<?= $base ?>#reserve">Reservations</a></div>
      <div><h5>Legal</h5>
        <a href="privacy.php">Privacy Policy</a><a href="terms.php">Terms of Use</a><a href="privacy.php#cookies">Cookie Policy</a></div>
    </div>
    <div class="legal">
      <span>© <?= date('Y') ?> <?= e(SITE['name']) ?>. All rights reserved.</span>
      <span>Photography: Unsplash<a href="privacy.php">Privacy</a><a href="terms.php">Terms</a></span>
    </div>
  </div>
</footer>

<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice">
  <p>We use only essential cookies to make this site work. With your permission we may also use analytics cookies to understand how the site is used. See our <a href="privacy.php#cookies">Cookie Policy</a>.</p>
  <div style="display:flex;gap:.5rem">
    <button class="btn btn-solid" data-c="all">Accept</button>
    <button class="btn btn-ghost" data-c="essential">Essential only</button>
  </div>
</div>

<?php if (!empty($nutrition_json)): ?>
<script>window.UP_NUTRITION = <?= $nutrition_json ?>;</script>
<?php endif; ?>
<script src="assets/js/main.js" defer></script>
</body>
</html>
