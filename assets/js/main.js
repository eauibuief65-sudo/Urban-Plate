/* Urban Plate — front-end interactions */
(function () {
  const $ = (s, r = document) => r.querySelector(s);
  const $$ = (s, r = document) => [...r.querySelectorAll(s)];

  // Scroll progress + active side-nav link
  const prog = $('#progress');
  const links = $$('.side ul a');
  const secs = links.map(a => { const h = a.getAttribute('href'); const id = h.split('#')[1]; return id ? document.getElementById(id) : null; });
  const onScroll = () => {
    const h = document.documentElement;
    if (prog) prog.style.height = (h.scrollTop / Math.max(1, h.scrollHeight - h.clientHeight) * 100) + '%';
    let cur = -1;
    secs.forEach((s, i) => { if (s && s.getBoundingClientRect().top < innerHeight * .4) cur = i; });
    links.forEach((a, i) => a.classList.toggle('active', i === cur));
  };
  addEventListener('scroll', onScroll, { passive: true }); onScroll();

  // Mobile menu
  const mb = $('#menuBtn'), mn = $('#mnav');
  if (mb && mn) {
    mb.onclick = () => { const o = mn.classList.toggle('open'); mb.setAttribute('aria-expanded', o); mb.textContent = o ? 'Close' : 'Menu'; };
    $$('a', mn).forEach(a => a.addEventListener('click', () => { mn.classList.remove('open'); mb.textContent = 'Menu'; mb.setAttribute('aria-expanded', false); }));
  }

  // Reveal on scroll
  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } }), { threshold: .12 });
    $$('.rv').forEach(el => io.observe(el));
  } else {
    $$('.rv').forEach(el => el.classList.add('in'));
  }

  // Nutrition tabs (data comes from PHP via window.UP_NUTRITION)
  const N = window.UP_NUTRITION || {};
  const esc = s => String(s).replace(/[&<>"']/g, c => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[c]));
  const animateBars = () => setTimeout(() => $$('#nFacts i').forEach(i => i.style.width = i.dataset.w + '%'), 60);
  function showN(k) {
    const d = N[k]; if (!d) return;
    $('#nName').textContent = d.name; $('#nSub').textContent = d.sub; $('#nKcal').textContent = '≈ ' + d.kcal + ' kcal';
    const im = $('#nImg'); im.src = 'https://images.unsplash.com/' + d.img + '?w=1000&q=80'; im.alt = d.name;
    $('#nFacts').innerHTML = d.facts.map(([l, v, p]) => `<div class="fact"><span>${esc(l)}</span><b>${esc(v)}</b><div class="bar"><i data-w="${+p}"></i></div></div>`).join('') +
      '<div class="fact" style="font-size:.78rem;color:var(--muted)"><span>Bars show approx. % of a 2,000 kcal daily reference intake</span></div>';
    $('#nAll').innerHTML = Object.entries(d.allergens).map(([n, y]) => `<span class="${y ? 'yes' : ''}">${y ? 'Contains' : 'No'} ${esc(n.toLowerCase())}</span>`).join('');
    animateBars();
  }
  $$('.tabs button').forEach(b => b.addEventListener('click', () => {
    $$('.tabs button').forEach(x => { x.classList.remove('on'); x.setAttribute('aria-selected', 'false'); });
    b.classList.add('on'); b.setAttribute('aria-selected', 'true'); showN(b.dataset.k);
  }));
  const firstTab = $('.tabs button.on'); if (firstTab) showN(firstTab.dataset.k);

  // FAQ accordion
  $$('.qa button').forEach(b => b.addEventListener('click', () => {
    const qa = b.parentElement, open = qa.classList.contains('open');
    $$('.qa').forEach(q => { q.classList.remove('open'); $('button', q).setAttribute('aria-expanded', 'false'); });
    if (!open) { qa.classList.add('open'); b.setAttribute('aria-expanded', 'true'); }
  }));

  // Guest picker → hidden input
  const g = $('#guests'), gi = $('#rGuests');
  if (g && gi) $$('button', g).forEach(b => b.addEventListener('click', () => {
    $$('button', g).forEach(x => x.classList.remove('on')); b.classList.add('on'); gi.value = b.textContent.trim();
  }));

  // Light client-side check before the server validates
  const form = $('#resForm');
  if (form) form.addEventListener('submit', e => {
    if (!form.checkValidity()) {
      e.preventDefault();
      let m = $('.form-msg.client', form);
      if (!m) { m = document.createElement('div'); m.className = 'form-msg error show client'; m.setAttribute('role', 'alert'); form.appendChild(m); }
      m.textContent = 'Please complete all required fields and accept the privacy notice.';
      const bad = form.querySelector(':invalid'); if (bad) bad.focus();
    }
  });

  // Cookie notice — choice stored in a first-party cookie so PHP can read it
  const ck = $('#cookie');
  if (ck) {
    if (!/(?:^|;\s*)up_cookie=/.test(document.cookie)) setTimeout(() => ck.classList.add('show'), 1200);
    $$('button', ck).forEach(b => b.addEventListener('click', () => {
      document.cookie = 'up_cookie=' + b.dataset.c + ';path=/;max-age=' + 60 * 60 * 24 * 180 + ';SameSite=Lax';
      ck.classList.remove('show');
    }));
  }
})();
