<?php
require __DIR__ . '/config.php';
require __DIR__ . '/includes/data.php';
require __DIR__ . '/includes/reservation.php';

$is_home = true;
$nutrition_json = json_encode($nutrition, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE);
$first_n = $nutrition[array_key_first($nutrition)];

/** Section heading helper */
function section_head(string $num, string $eyebrow, string $title_html, string $text): void
{ ?>
  <div class="head rv">
    <span class="num"><?= e($num) ?></span>
    <div><p class="eyebrow"><?= e($eyebrow) ?></p><h2><?= $title_html ?></h2></div>
    <p><?= e($text) ?></p>
  </div>
<?php }

$err = fn(string $k) => isset($res_errors[$k]) ? '<span class="err">' . e($res_errors[$k]) . '</span>' : '';
$errc = fn(string $k) => isset($res_errors[$k]) ? ' has-err' : '';

require __DIR__ . '/includes/header.php';
?>

<main id="top">

<!-- HERO -->
<section class="hero">
  <div class="hero-text">
    <div class="hero-top"><span>Seasonal Kitchen</span><span>Issue Nº <?= date('n') ?> — <?= e(['Winter','Winter','Spring','Spring','Spring','Summer','Summer','Summer','Autumn','Autumn','Autumn','Winter'][date('n') - 1]) ?></span></div>
    <div>
      <p class="eyebrow">Neighbourhood dining room</p>
      <h1><span><i>Food that</i></span><span><i>tells the <em>story</em></i></span><span><i>of the season.</i></span></h1>
      <p class="lead">Urban Plate is a chef-led kitchen cooking small, honest menus from local farms and markets. The menu changes with what's ripe — so every visit reads like a new chapter.</p>
      <div class="hero-ctas">
        <a href="#reserve" class="btn btn-solid">Reserve a table <span class="arr">→</span></a>
        <a href="#menu" class="btn btn-ghost">See this week's plates</a>
      </div>
    </div>
    <div class="hero-meta">
      <div><b>Tue–Sun</b><small>Lunch &amp; dinner</small></div>
      <div><b>Weekly</b><small>Menu changes</small></div>
      <div><b>Local</b><small>Seasonal produce</small></div>
    </div>
  </div>
  <div class="hero-wrap">
    <div class="stamp" aria-hidden="true">
      <svg viewBox="0 0 116 116"><defs><path id="c" d="M58,58 m-44,0 a44,44 0 1,1 88,0 a44,44 0 1,1 -88,0"/></defs><text font-size="10.5" letter-spacing="3.2" font-family="DM Sans" font-weight="700" fill="#1c1f1a"><textPath href="#c">FRESH · SEASONAL · LOCAL · CRAFTED ·</textPath></text></svg>
      <span>UP</span>
    </div>
    <div class="hero-media" style="height:100%">
      <figure><img src="<?= img('photo-1504674900247-0877df9cc836', 1400) ?>" alt="Plated seasonal dish with roasted vegetables"></figure>
      <figure><img src="<?= img('photo-1546069901-ba9599a7e63c', 800) ?>" alt="Colourful grain bowl with fresh greens"></figure>
      <figure><img src="<?= img('photo-1517248135467-4c7edcad34c4', 800) ?>" alt="Warmly lit restaurant dining room"></figure>
    </div>
  </div>
</section>

<div class="marquee" aria-hidden="true"><div>
  <?php foreach (array_merge($marquee, $marquee) as $m): ?><span><?= e($m) ?></span><?php endforeach; ?>
</div></div>

<!-- FEATURED DISHES -->
<section class="sec wrap" id="menu">
  <?php section_head('01', 'Featured plates', 'This week on <em>the pass</em>', 'A rotating edit of five plates from our current menu. Hover a card for ingredients and dietary notes.'); ?>
  <div class="dishes">
    <?php foreach ($dishes as $i => $d): ?>
    <article class="dish rv rv-d<?= $i % 3 ?>" tabindex="0">
      <img src="<?= img($d['img'], $i === 0 ? 1400 : 900) ?>" alt="<?= e($d['alt']) ?>" loading="lazy">
      <span class="tag"><?= e($d['tag']) ?></span>
      <div class="body">
        <h3><?= e($d['name']) ?></h3>
        <div class="row"><span><?= e($d['cat']) ?></span><span class="price"><?= e(SITE['currency']) . (int) $d['price'] ?></span></div>
        <div class="more"><?= e($d['desc']) ?>
          <div class="chips"><?php foreach ($d['chips'] as $c): ?><span><?= e($c) ?></span><?php endforeach; ?></div>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <p class="note" style="margin-top:2rem">Prices and dishes change with the season and may differ from what's shown. Please check the printed menu on the day of your visit.</p>
</section>

<!-- HOW IT WORKS -->
<section class="how sec" id="how">
  <div class="wrap">
    <?php section_head('02', 'How it works', 'From market to <em>plate</em>', 'No secrets — just a simple, repeatable way of cooking that keeps the food fresh and the menu honest.'); ?>
    <div class="steps">
      <?php foreach ($steps as $i => $s): ?>
      <div class="step rv rv-d<?= $i ?>">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><?= $s['icon'] ?></svg></div>
        <small>STEP <?= sprintf('%02d', $i + 1) ?></small><h3><?= e($s['title']) ?></h3>
        <p><?= e($s['text']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="how-band">
      <figure class="rv"><img src="<?= img('photo-1498837167922-ddd27525d352', 900) ?>" alt="Fresh vegetables at a market" loading="lazy"></figure>
      <figure class="rv rv-d1"><img src="<?= img('photo-1556910103-1c02745aae4d', 1200) ?>" alt="Cooks preparing food in a kitchen" loading="lazy"></figure>
    </div>
  </div>
</section>

<!-- NUTRITION -->
<section class="sec wrap" id="nutrition">
  <?php section_head('03', 'Nutrition & information', "Know what's <em>on your fork</em>", 'Approximate nutrition and allergen details for our core dishes, so you can choose with confidence.'); ?>
  <div class="nutri-grid">
    <div class="nutri-img rv"><img id="nImg" src="<?= img($first_n['img']) ?>" alt="<?= e($first_n['name']) ?>" loading="lazy"></div>
    <div class="rv rv-d1">
      <div class="tabs" role="tablist">
        <?php $k0 = array_key_first($nutrition); foreach ($nutrition as $k => $n): ?>
          <button class="<?= $k === $k0 ? 'on' : '' ?>" data-k="<?= e($k) ?>" role="tab" aria-selected="<?= $k === $k0 ? 'true' : 'false' ?>"><?= e($n['name']) ?></button>
        <?php endforeach; ?>
      </div>
      <div class="panel">
        <h3 id="nName"><?= e($first_n['name']) ?></h3>
        <p class="sub" id="nSub"><?= e($first_n['sub']) ?></p>
        <div class="facts">
          <div class="ttl">Per serving <small id="nKcal">≈ <?= (int) $first_n['kcal'] ?> kcal</small></div>
          <div id="nFacts">
            <?php foreach ($first_n['facts'] as [$l, $v, $p]): ?>
              <div class="fact"><span><?= e($l) ?></span><b><?= e($v) ?></b><div class="bar"><i data-w="<?= (int) $p ?>"></i></div></div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="allergen" id="nAll">
          <?php foreach ($first_n['allergens'] as $a => $y): ?>
            <span class="<?= $y ? 'yes' : '' ?>"><?= $y ? 'Contains' : 'No' ?> <?= e(strtolower($a)) ?></span>
          <?php endforeach; ?>
        </div>
        <p class="note">Values are estimates based on standard recipes and portion sizes and may vary. This information is for general guidance only and is not medical or dietary advice. If you have a food allergy or intolerance, please speak to our team before ordering — our kitchen handles common allergens and we cannot guarantee any dish is allergen-free.</p>
      </div>
    </div>
  </div>
</section>

<!-- CHEF -->
<section class="chef sec" id="chef">
  <div class="wrap">
    <?php section_head('04', 'Chef spotlight', 'The hands behind <em>the menu</em>', 'Meet the person who writes the menu every Monday morning.'); ?>
    <div class="chef-grid">
      <div class="chef-a rv"><img src="<?= img('photo-1577219491135-ce391730fbaf') ?>" alt="Head chef in the kitchen" loading="lazy"></div>
      <div class="chef-b rv rv-d2"><img src="<?= img('photo-1466637574441-749b8f19452f', 700) ?>" alt="Fresh herbs being prepared" loading="lazy"></div>
      <div class="chef-txt rv rv-d1">
        <p class="eyebrow">Head Chef</p>
        <blockquote>"<?= e($chef['quote']) ?>"</blockquote>
        <?php foreach ($chef['bio'] as $p): ?><p><?= e($p) ?></p><?php endforeach; ?>
        <ul class="chef-list"><?php foreach ($chef['skills'] as $s): ?><li><?= e($s) ?></li><?php endforeach; ?></ul>
        <div class="sig"><div><b><?= e($chef['name']) ?></b><small><?= e($chef['role']) ?></small></div></div>
      </div>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section class="sec wrap" id="gallery">
  <?php section_head('05', 'Inside the room', 'A table, <em>a mood</em>', 'Candlelight, an open kitchen and plates made for passing around.'); ?>
  <div class="gallery">
    <?php foreach ($gallery as $i => [$id, $alt, $cap, $w]): ?>
      <figure class="rv rv-d<?= $i % 4 ?>"><img src="<?= img($id, $w) ?>" alt="<?= e($alt) ?>" loading="lazy"><figcaption><?= e($cap) ?></figcaption></figure>
    <?php endforeach; ?>
  </div>
</section>

<!-- JOURNAL -->
<section class="sec wrap" id="journal" style="padding-top:0">
  <?php section_head('06', 'Food journal', 'Notes from <em>the kitchen</em>', 'Recipes, market reports and the thinking behind our plates.'); ?>
  <div class="journal-grid">
    <?php $lead = $journal[0]; ?>
    <a href="#journal" class="post big rv">
      <div class="ph"><img src="<?= img($lead['img'], 1400) ?>" alt="<?= e($lead['alt']) ?>" loading="lazy"></div>
      <span class="meta"><?= e($lead['meta']) ?></span>
      <h3><?= e($lead['title']) ?></h3>
      <p><?= e($lead['excerpt']) ?></p>
    </a>
    <div class="side-posts">
      <?php foreach (array_slice($journal, 1) as $i => $j): ?>
      <a href="#journal" class="post rv rv-d<?= $i + 1 ?>">
        <div class="ph"><img src="<?= img($j['img'], 600) ?>" alt="<?= e($j['alt']) ?>" loading="lazy"></div>
        <div><span class="meta"><?= e($j['meta']) ?></span><h3><?= e($j['title']) ?></h3></div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq sec" id="faq">
  <div class="wrap">
    <?php section_head('07', 'Questions', 'Good to <em>know</em>', 'Everything you might want to ask before you visit.'); ?>
    <div class="faq-grid">
      <div class="faq-card rv">
        <h3>Still curious?</h3>
        <p>Our team is happy to help with dietary needs, larger groups or anything else.</p>
        <a href="mailto:<?= e(SITE['email']) ?>" class="btn">Email us <span class="arr">→</span></a>
      </div>
      <div class="rv rv-d1" id="faqList">
        <?php foreach ($faqs as $i => [$q, $a]): ?>
        <div class="qa<?= $i === 0 ? ' open' : '' ?>">
          <button aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>"><?= e($q) ?><span class="pm"></span></button>
          <div class="ans"><div><p><?= e($a) ?></p></div></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- RESERVATION -->
<section class="sec wrap" id="reserve">
  <div class="reserve-grid rv">
    <div class="reserve-img">
      <img src="<?= img('photo-1414235077428-338989a2e8c0', 1200) ?>" alt="Set restaurant table ready for guests" loading="lazy">
      <div class="hours">
        <h4>Opening hours</h4>
        <?php foreach ($hours as [$day, $time]): ?><div><span><?= e($day) ?></span><span><?= e($time) ?></span></div><?php endforeach; ?>
      </div>
    </div>
    <form class="reserve-form" id="resForm" method="post" action="index.php#reserve" novalidate>
      <p class="eyebrow">Reservations</p>
      <h2>Save your <em>seat</em></h2>
      <p>Send a request and our team will confirm your table by email. No payment is required to book.</p>

      <input type="hidden" name="form" value="reservation">
      <input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
      <div class="hp" aria-hidden="true"><label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

      <div class="fgrid">
        <div class="f<?= $errc('name') ?>"><label for="rName">Full name</label>
          <input id="rName" name="name" required maxlength="80" autocomplete="name" value="<?= e($res_old['name']) ?>"><?= $err('name') ?></div>
        <div class="f<?= $errc('email') ?>"><label for="rEmail">Email</label>
          <input id="rEmail" name="email" type="email" required autocomplete="email" value="<?= e($res_old['email']) ?>"><?= $err('email') ?></div>
        <div class="f<?= $errc('date') ?>"><label for="rDate">Date</label>
          <input id="rDate" name="date" type="date" required min="<?= date('Y-m-d') ?>" value="<?= e($res_old['date']) ?>"><?= $err('date') ?></div>
        <div class="f<?= $errc('time') ?>"><label for="rTime">Time</label>
          <select id="rTime" name="time" required>
            <option value="">Select</option>
            <?php foreach ($time_slots as $t): ?><option<?= $res_old['time'] === $t ? ' selected' : '' ?>><?= e($t) ?></option><?php endforeach; ?>
          </select><?= $err('time') ?></div>
        <div class="f full<?= $errc('guests') ?>"><label>Guests</label>
          <input type="hidden" name="guests" id="rGuests" value="<?= e($res_old['guests']) ?>">
          <div class="guests" id="guests">
            <?php foreach ($guest_options as $g): ?><button type="button" class="<?= $res_old['guests'] === $g ? 'on' : '' ?>"><?= e($g) ?></button><?php endforeach; ?>
          </div><?= $err('guests') ?></div>
        <div class="f full<?= $errc('notes') ?>"><label for="rNote">Notes (optional)</label>
          <textarea id="rNote" name="notes" rows="3" maxlength="500" placeholder="Allergies, occasion, seating preference…"><?= e($res_old['notes']) ?></textarea><?= $err('notes') ?></div>
      </div>
      <label class="consent"><input type="checkbox" name="consent" value="1" id="rConsent" required<?= !empty($_POST['consent']) ? ' checked' : '' ?>> I agree that Urban Plate may use my details to handle this reservation, as described in the <a href="privacy.php">Privacy Policy</a>.</label>
      <?php if (isset($res_errors['consent'])): ?><p class="form-msg error show"><?= e($res_errors['consent']) ?></p><?php endif; ?>
      <button class="btn btn-solid" type="submit">Request reservation <span class="arr">→</span></button>

      <?php if (isset($res_errors['form'])): ?>
        <div class="form-msg error show" role="alert"><?= e($res_errors['form']) ?></div>
      <?php elseif ($res_errors): ?>
        <div class="form-msg error show" role="alert">Please check the highlighted fields.</div>
      <?php elseif ($res_flash): ?>
        <div class="form-msg show<?= $res_flash['ok'] ? '' : ' error' ?>" role="status"><?= e($res_flash['msg']) ?></div>
      <?php endif; ?>
    </form>
  </div>
</section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
