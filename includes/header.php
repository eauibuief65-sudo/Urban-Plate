<?php
/** @var string $page_title  @var string $page_desc  @var bool $is_home */
$page_title = $page_title ?? SITE['name'] . ' — ' . SITE['tagline'];
$page_desc  = $page_desc ?? SITE['description'];
$is_home    = $is_home ?? false;
$base       = $is_home ? '' : 'index.php';   // section links point back to home on inner pages
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($page_title) ?></title>
<meta name="description" content="<?= e($page_desc) ?>">
<meta property="og:title" content="<?= e($page_title) ?>">
<meta property="og:description" content="<?= e($page_desc) ?>">
<meta property="og:type" content="website">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300..800;1,9..144,300..800&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
<script type="application/ld+json">
<?= json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Restaurant',
    'name' => SITE['name'],
    'description' => SITE['description'],
    'telephone' => SITE['phone'],
    'email' => SITE['email'],
    'address' => ['@type' => 'PostalAddress', 'streetAddress' => SITE['address'][0], 'addressLocality' => SITE['address'][1]],
    'servesCuisine' => 'Seasonal',
    'acceptsReservations' => true,
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>

</script>
</head>
<body>

<aside class="side" aria-label="Main navigation">
  <a href="<?= $base ?: '#top' ?>" class="logo"><b>U</b>Urban<br>Plate</a>
  <ul>
    <?php foreach ($nav as $id => $label): ?>
      <li><a href="<?= $base ?>#<?= $id ?>"><?= e($label) ?></a></li>
    <?php endforeach; ?>
  </ul>
  <a href="<?= $base ?>#reserve" class="book">Book a table</a>
  <span class="progress" id="progress"></span>
</aside>

<header class="topbar">
  <a href="<?= $base ?: '#top' ?>" class="logo"><b>U</b><?= e(SITE['name']) ?></a>
  <button class="menu-btn" id="menuBtn" aria-expanded="false" aria-controls="mnav">Menu</button>
</header>
<nav class="mnav" id="mnav" aria-label="Mobile navigation">
  <?php foreach ($nav as $id => $label): ?>
    <a href="<?= $base ?>#<?= $id ?>"><?= $id === 'how' ? 'How it works' : e($label) ?></a>
  <?php endforeach; ?>
  <a href="<?= $base ?>#reserve">Book a table</a>
</nav>
