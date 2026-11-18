<?php
require __DIR__ . '/config.php';
require __DIR__ . '/includes/data.php';
$page_title = 'Terms of Use — ' . SITE['name'];
$page_desc  = 'Terms of use for the ' . SITE['name'] . ' website and reservations.';
require __DIR__ . '/includes/header.php';
?>
<main id="top">
<article class="legal-page">
<p class="eyebrow">Legal</p>
<h1>Terms of Use</h1>
<p class="upd">Last updated: <?= e(SITE['legal_updated']) ?></p>

<p>By using the <?= e(SITE['name']) ?> website you agree to these terms. If you don't agree, please don't use the site.</p>

<h2>Menu, prices and availability</h2>
<p>Our menu changes with the seasons. Dishes, ingredients, prices and photos on this website are for illustration and may differ from what is served on the day. The printed menu in the restaurant is the final reference.</p>

<h2>Reservations</h2>
<p>Submitting the reservation form is a request, not a confirmed booking. A table is confirmed only once you receive a confirmation from us. We do not charge a fee or ask for payment details to request a reservation. Please give at least 24 hours' notice if you need to cancel or change your booking.</p>

<h2>Nutrition and allergen information</h2>
<p>Nutrition values are estimates based on standard recipes and may vary. They are provided for general information only and are not medical, health or dietary advice. Our kitchen handles common allergens (including gluten, dairy, eggs, nuts, sesame and fish), so we cannot guarantee that any dish is free of them. Always tell our team about allergies before ordering.</p>

<h2>Website content</h2>
<p>Text and design on this site belong to <?= e(SITE['name']) ?>. Photographs are used under licence from Unsplash. You may not copy or reuse site content for commercial purposes without permission.</p>

<h2>Links to other sites</h2>
<p>We are not responsible for the content or practices of other websites we link to.</p>

<h2>Liability</h2>
<p>We work to keep this site accurate and available, but it is provided "as is". To the extent permitted by law, we are not liable for any loss arising from use of the site.</p>

<h2>Changes</h2>
<p>We may update these terms at any time. The date above shows the latest version.</p>

<h2>Contact</h2>
<p><?= e(SITE['name']) ?>, <?= e(implode(', ', SITE['address'])) ?><br>
Email: <a href="mailto:<?= e(SITE['email']) ?>"><?= e(SITE['email']) ?></a> · Phone: <a href="tel:<?= e(SITE['phone_link']) ?>"><?= e(SITE['phone']) ?></a></p>
</article>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
