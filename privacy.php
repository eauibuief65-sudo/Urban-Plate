<?php
require __DIR__ . '/config.php';
require __DIR__ . '/includes/data.php';
$page_title = 'Privacy & Cookie Policy — ' . SITE['name'];
$page_desc  = 'How ' . SITE['name'] . ' collects, uses and protects your personal information, and how we use cookies.';
require __DIR__ . '/includes/header.php';
?>
<main id="top">
<article class="legal-page">
<p class="eyebrow">Legal</p>
<h1>Privacy &amp; Cookie Policy</h1>
<p class="upd">Last updated: <?= e(SITE['legal_updated']) ?></p>

<p>This policy explains how <?= e(SITE['name']) ?> ("we", "us") collects and uses personal information when you visit this website or request a reservation. We only collect what we need, and we never sell your personal information.</p>

<h2>Information we collect</h2>
<ul>
<li><strong>Reservation details</strong> you give us: name, email address, date, time, party size and any notes (for example allergies or an occasion).</li>
<li><strong>Messages</strong> you send us by email or phone.</li>
<li><strong>Technical data</strong> such as browser type and pages visited, collected through cookies only where you have agreed (see below).</li>
</ul>

<h2>How we use it</h2>
<ul>
<li>To handle, confirm and manage your reservation.</li>
<li>To meet dietary or accessibility requests you tell us about.</li>
<li>To answer your questions.</li>
<li>With your consent, to understand how our website is used so we can improve it.</li>
</ul>
<p>We do not send marketing emails unless you have separately opted in, and you can unsubscribe at any time.</p>

<h2>Sharing</h2>
<p>We share information only with service providers that help us run the restaurant and website (such as our hosting, booking or email provider), and only as needed for that purpose, or where the law requires it.</p>

<h2>How long we keep it</h2>
<p>Reservation information is kept for up to 12 months after your visit, unless we need it longer for legal reasons.</p>

<h2>Your rights</h2>
<p>Depending on where you live, you may have the right to access, correct or delete your personal information, or to object to how we use it. To make a request, email <a href="mailto:<?= e(SITE['email']) ?>"><?= e(SITE['email']) ?></a>.</p>

<h2 id="cookies">Cookies</h2>
<p>Cookies are small files stored in your browser. We use:</p>
<ul>
<li><strong>Essential cookies</strong> — needed for the site to work: a session cookie that protects the reservation form from misuse, and a cookie that remembers your cookie choice.</li>
<li><strong>Analytics cookies</strong> (optional) — only set if you choose "Accept". These help us count visits and see which pages are useful. If we use Google Analytics, information is processed by Google as described in <a href="https://policies.google.com/technologies/partner-sites" rel="noopener" target="_blank">How Google uses information from sites that use its services</a>.</li>
</ul>
<p>To change your choice, clear this site's cookies in your browser and the notice will appear again. You can also block cookies in your browser settings.</p>

<h2>Children</h2>
<p>This website is not directed at children under 13, and we do not knowingly collect their personal information.</p>

<h2>Changes</h2>
<p>We may update this policy from time to time. The date at the top shows when it was last changed.</p>

<h2>Contact</h2>
<p><?= e(SITE['name']) ?>, <?= e(implode(', ', SITE['address'])) ?><br>
Email: <a href="mailto:<?= e(SITE['email']) ?>"><?= e(SITE['email']) ?></a> · Phone: <a href="tel:<?= e(SITE['phone_link']) ?>"><?= e(SITE['phone']) ?></a></p>
</article>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
