<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Urban Plate — Seasonal Kitchen &amp; Dining Room</title>
<meta name="description" content="Urban Plate is a seasonal neighbourhood kitchen serving chef-led plates built on local produce. Explore the menu, nutrition information, our chef and book a table.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300..800;1,9..144,300..800&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
<style>
:root{
  --ink:#1c1f1a; --olive:#2f3b2a; --moss:#56684a; --cream:#f4efe4; --paper:#fbf8f2;
  --tomato:#d9482b; --saffron:#e7a73b; --line:rgba(28,31,26,.14); --muted:#5f6359;
  --nav:88px; --ease:cubic-bezier(.2,.7,.2,1);
}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:"DM Sans",system-ui,sans-serif;background:var(--paper);color:var(--ink);line-height:1.6;-webkit-font-smoothing:antialiased;overflow-x:hidden}
img{display:block;width:100%;height:100%;object-fit:cover}
a{color:inherit}
h1,h2,h3,h4{font-family:"Fraunces",Georgia,serif;font-weight:400;line-height:1.02;letter-spacing:-.02em}
em{font-style:italic;color:var(--tomato)}
.eyebrow{font-size:.74rem;letter-spacing:.22em;text-transform:uppercase;font-weight:700;color:var(--moss);display:flex;align-items:center;gap:.8rem}
.eyebrow::before{content:"";width:32px;height:1px;background:currentColor}
.btn{display:inline-flex;align-items:center;gap:.6rem;padding:1rem 1.6rem;border-radius:999px;font-weight:700;font-size:.92rem;text-decoration:none;border:1.5px solid var(--ink);cursor:pointer;transition:.35s var(--ease);background:none;font-family:inherit}
.btn-solid{background:var(--ink);color:var(--cream)}
.btn-solid:hover{background:var(--tomato);border-color:var(--tomato);transform:translateY(-2px)}
.btn-ghost:hover{background:var(--ink);color:var(--cream)}
.btn .arr{transition:transform .35s var(--ease)}
.btn:hover .arr{transform:translateX(4px)}

/* ---------- Side navigation ---------- */
.side{position:fixed;inset:0 auto 0 0;width:var(--nav);background:var(--olive);color:var(--cream);z-index:50;display:flex;flex-direction:column;align-items:center;justify-content:space-between;padding:1.6rem 0}
.logo{font-family:"Fraunces";font-size:1.05rem;text-decoration:none;text-align:center;line-height:1}
.logo b{display:block;width:44px;height:44px;border-radius:50%;background:var(--tomato);margin:0 auto .5rem;display:grid;place-items:center;font-style:italic;font-weight:600;font-size:1.3rem}
.side ul{list-style:none;display:flex;flex-direction:column;gap:1.3rem}
.side ul a{writing-mode:vertical-rl;transform:rotate(180deg);text-decoration:none;font-size:.72rem;letter-spacing:.2em;text-transform:uppercase;opacity:.55;transition:.3s;position:relative;padding:.2rem 0}
.side ul a:hover,.side ul a.active{opacity:1;color:var(--saffron)}
.side ul a.active::after{content:"";position:absolute;right:-12px;top:50%;width:5px;height:5px;border-radius:50%;background:var(--saffron);transform:translateY(-50%)}
.side .book{writing-mode:vertical-rl;transform:rotate(180deg);background:var(--tomato);color:#fff;text-decoration:none;padding:1.1rem .6rem;border-radius:999px;font-size:.72rem;letter-spacing:.18em;text-transform:uppercase;font-weight:700;transition:.3s}
.side .book:hover{background:var(--saffron);color:var(--ink)}
.progress{position:absolute;right:0;top:0;width:3px;background:var(--saffron);height:0}
.topbar{display:none}

main{margin-left:var(--nav)}
section{position:relative}
.wrap{padding:0 clamp(1.4rem,5vw,5rem)}

/* ---------- Hero ---------- */
.hero{display:grid;grid-template-columns:1.05fr 1fr;min-height:100vh}
.hero-text{padding:clamp(2rem,5vw,4.5rem);display:flex;flex-direction:column;justify-content:space-between;gap:2rem;background:var(--cream)}
.hero-top{display:flex;justify-content:space-between;font-size:.78rem;letter-spacing:.14em;text-transform:uppercase;color:var(--muted)}
.hero h1{font-size:clamp(3.4rem,8.4vw,8.6rem);font-weight:300}
.hero h1 span{display:block;overflow:hidden}
.hero h1 span i{display:block;font-style:normal;transform:translateY(105%);animation:rise 1.1s var(--ease) forwards}
.hero h1 span:nth-child(2) i{animation-delay:.12s}
.hero h1 span:nth-child(3) i{animation-delay:.24s}
@keyframes rise{to{transform:none}}
.hero p.lead{max-width:30rem;font-size:1.08rem;color:var(--muted);margin:1.6rem 0 2rem}
.hero-ctas{display:flex;gap:.8rem;flex-wrap:wrap}
.hero-meta{display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid var(--line);padding-top:1.4rem;gap:1rem}
.hero-meta b{font-family:"Fraunces";font-size:1.5rem;font-weight:400;display:block}
.hero-meta small{color:var(--muted);font-size:.8rem}
.hero-media{position:relative;overflow:hidden;display:grid;grid-template-rows:1.4fr 1fr;grid-template-columns:1fr 1fr;gap:6px;background:var(--ink)}
.hero-media figure{overflow:hidden;position:relative}
.hero-media figure:first-child{grid-column:1/3}
.hero-media img{transform:scale(1.15);animation:zoomout 1.8s var(--ease) forwards;transition:transform 1.2s var(--ease)}
.hero-media figure:hover img{transform:scale(1.06)}
@keyframes zoomout{to{transform:scale(1)}}
.stamp{position:absolute;left:-58px;top:50%;width:116px;height:116px;border-radius:50%;background:var(--saffron);z-index:3;display:grid;place-items:center;transform:translateY(-50%)}
.stamp svg{position:absolute;inset:0;animation:spin 18s linear infinite}
.stamp span{font-family:"Fraunces";font-size:2rem;font-style:italic}
@keyframes spin{to{transform:rotate(360deg)}}
.hero-wrap{position:relative}

/* ---------- Marquee ---------- */
.marquee{background:var(--ink);color:var(--cream);overflow:hidden;padding:1.1rem 0;white-space:nowrap}
.marquee div{display:inline-flex;gap:3rem;animation:mq 28s linear infinite;font-family:"Fraunces";font-size:1.6rem;font-style:italic}
.marquee span::after{content:"✺";color:var(--tomato);margin-left:3rem;font-style:normal}
@keyframes mq{to{transform:translateX(-50%)}}

/* ---------- Section heads ---------- */
.sec{padding:clamp(5rem,10vw,9rem) 0}
.head{display:grid;grid-template-columns:auto 1fr auto;align-items:end;gap:2rem;margin-bottom:3.5rem}
.head .num{font-family:"Fraunces";font-size:clamp(4rem,9vw,8rem);line-height:.8;color:transparent;-webkit-text-stroke:1px var(--ink);opacity:.35}
.head h2{font-size:clamp(2.4rem,5vw,4.6rem)}
.head p{max-width:22rem;color:var(--muted);font-size:.98rem}

/* ---------- Featured dishes ---------- */
.dishes{display:grid;grid-template-columns:repeat(12,1fr);gap:1.4rem}
.dish{position:relative;border-radius:22px;overflow:hidden;background:var(--ink);color:var(--cream);min-height:360px;cursor:pointer;isolation:isolate}
.dish:nth-child(1){grid-column:span 7;min-height:560px}
.dish:nth-child(2){grid-column:span 5}
.dish:nth-child(3){grid-column:span 4}
.dish:nth-child(4){grid-column:span 4}
.dish:nth-child(5){grid-column:span 4}
.dish:nth-child(2),.dish:nth-child(5){margin-top:4rem}
.dish img{position:absolute;inset:0;z-index:-2;transition:transform 1s var(--ease),filter .6s}
.dish::after{content:"";position:absolute;inset:0;z-index:-1;background:linear-gradient(180deg,transparent 35%,rgba(16,18,14,.88))}
.dish:hover img{transform:scale(1.08) rotate(.6deg);filter:saturate(1.15)}
.dish .tag{position:absolute;top:1.1rem;left:1.1rem;background:var(--cream);color:var(--ink);font-size:.7rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;padding:.4rem .8rem;border-radius:999px}
.dish .body{position:absolute;left:0;right:0;bottom:0;padding:1.6rem}
.dish h3{font-size:clamp(1.5rem,2.4vw,2.3rem);margin-bottom:.4rem}
.dish .row{display:flex;justify-content:space-between;align-items:center;gap:1rem;font-size:.86rem;opacity:.85}
.dish .price{font-family:"Fraunces";font-size:1.4rem;color:var(--saffron)}
.dish .more{max-height:0;overflow:hidden;opacity:0;transition:.6s var(--ease);font-size:.9rem}
.dish:hover .more,.dish:focus-within .more{max-height:120px;opacity:1;margin-top:.7rem}
.chips{display:flex;gap:.4rem;flex-wrap:wrap;margin-top:.7rem}
.chips span{border:1px solid rgba(244,239,228,.4);padding:.2rem .6rem;border-radius:999px;font-size:.7rem}

/* ---------- How it works ---------- */
.how{background:var(--olive);color:var(--cream)}
.how .head .num{-webkit-text-stroke-color:var(--cream)}
.how .head p,.how .eyebrow{color:rgba(244,239,228,.7)}
.steps{display:grid;grid-template-columns:repeat(4,1fr);border-top:1px solid rgba(244,239,228,.2)}
.step{padding:2.4rem 1.8rem 2.4rem 0;border-right:1px solid rgba(244,239,228,.2);position:relative;transition:.5s var(--ease)}
.step:last-child{border-right:0}
.step + .step{padding-left:1.8rem}
.step .ic{width:62px;height:62px;border-radius:50%;border:1px solid rgba(244,239,228,.35);display:grid;place-items:center;margin-bottom:1.6rem;transition:.5s var(--ease)}
.step:hover .ic{background:var(--saffron);border-color:var(--saffron);color:var(--ink);transform:rotate(-12deg) scale(1.08)}
.step small{font-size:.72rem;letter-spacing:.2em;color:var(--saffron)}
.step h3{font-size:1.75rem;margin:.4rem 0 .8rem}
.step p{font-size:.93rem;opacity:.75}
.how-band{display:grid;grid-template-columns:1fr 1.3fr;gap:1.4rem;margin-top:4rem}
.how-band figure{border-radius:22px;overflow:hidden;height:340px}
.how-band figure img{transition:transform 1.2s var(--ease)}
.how-band figure:hover img{transform:scale(1.06)}

/* ---------- Nutrition ---------- */
.nutri-grid{display:grid;grid-template-columns:1fr 1.15fr;gap:clamp(2rem,5vw,5rem);align-items:start}
.nutri-img{position:sticky;top:2rem;border-radius:300px 300px 22px 22px;overflow:hidden;height:620px}
.tabs{display:flex;gap:.5rem;flex-wrap:wrap;margin-bottom:2rem}
.tabs button{font-family:inherit;font-size:.86rem;font-weight:500;padding:.6rem 1.1rem;border-radius:999px;border:1px solid var(--line);background:none;cursor:pointer;transition:.3s}
.tabs button.on,.tabs button:hover{background:var(--ink);color:var(--cream);border-color:var(--ink)}
.panel h3{font-size:2.4rem;margin-bottom:.4rem}
.panel .sub{color:var(--muted);margin-bottom:1.8rem}
.facts{border:2px solid var(--ink);border-radius:16px;padding:1.4rem 1.6rem;background:#fff}
.facts .ttl{font-family:"Fraunces";font-size:1.6rem;border-bottom:8px solid var(--ink);padding-bottom:.5rem;margin-bottom:.6rem;display:flex;justify-content:space-between;align-items:baseline}
.facts .ttl small{font-family:"DM Sans";font-size:.8rem;color:var(--muted)}
.fact{display:grid;grid-template-columns:1fr auto;gap:.3rem 1rem;padding:.6rem 0;border-bottom:1px solid var(--line);font-size:.95rem}
.fact:last-child{border:0}
.bar{grid-column:1/3;height:6px;background:var(--cream);border-radius:9px;overflow:hidden}
.bar i{display:block;height:100%;width:0;background:var(--moss);border-radius:9px;transition:width 1.2s var(--ease)}
.allergen{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:1.4rem}
.allergen span{font-size:.78rem;padding:.35rem .8rem;border-radius:999px;background:var(--cream)}
.allergen span.yes{background:#fbe1d9;color:#8c2a16}
.note{font-size:.8rem;color:var(--muted);margin-top:1.2rem;border-left:3px solid var(--saffron);padding-left:.9rem}

/* ---------- Chef ---------- */
.chef{background:var(--cream)}
.chef-grid{display:grid;grid-template-columns:repeat(12,1fr);gap:1.4rem;align-items:center}
.chef-a{grid-column:1/6;height:640px;border-radius:22px;overflow:hidden;position:relative}
.chef-b{grid-column:5/8;grid-row:1;align-self:end;height:280px;border-radius:22px;overflow:hidden;border:8px solid var(--cream);z-index:2;transform:translateY(60px)}
.chef-txt{grid-column:8/13}
.chef-txt blockquote{font-family:"Fraunces";font-size:clamp(1.6rem,2.6vw,2.4rem);line-height:1.2;font-style:italic;margin:1.4rem 0}
.chef-txt p{color:var(--muted);margin-bottom:1rem}
.sig{display:flex;align-items:center;gap:1rem;margin-top:1.8rem;padding-top:1.4rem;border-top:1px solid var(--line)}
.sig b{font-family:"Fraunces";font-size:1.4rem;font-weight:400}
.sig small{display:block;color:var(--muted)}
.chef-list{list-style:none;display:grid;grid-template-columns:1fr 1fr;gap:.6rem 1.4rem;margin-top:1.4rem;font-size:.92rem}
.chef-list li::before{content:"— ";color:var(--tomato)}
.chef img,.gallery img,.journal img{transition:transform 1.2s var(--ease)}
.chef-a:hover img,.chef-b:hover img{transform:scale(1.06)}

/* ---------- Gallery ---------- */
.gallery{display:grid;grid-template-columns:repeat(6,1fr);grid-auto-rows:160px;gap:.8rem}
.gallery figure{overflow:hidden;border-radius:16px;position:relative}
.gallery figure:nth-child(1){grid-column:span 3;grid-row:span 3}
.gallery figure:nth-child(2){grid-column:span 2;grid-row:span 2}
.gallery figure:nth-child(3){grid-column:span 1;grid-row:span 2}
.gallery figure:nth-child(4){grid-column:span 1;grid-row:span 2}
.gallery figure:nth-child(5){grid-column:span 2;grid-row:span 2}
.gallery figure:nth-child(6){grid-column:span 2;grid-row:span 2}
.gallery figure:nth-child(7){grid-column:span 2;grid-row:span 2}
.gallery figure:nth-child(8){grid-column:span 2;grid-row:span 2}
.gallery figcaption{position:absolute;left:.8rem;bottom:.8rem;background:var(--paper);font-size:.74rem;padding:.3rem .7rem;border-radius:999px;transform:translateY(140%);transition:.5s var(--ease)}
.gallery figure:hover img{transform:scale(1.1)}
.gallery figure:hover figcaption{transform:none}

/* ---------- Journal ---------- */
.journal-grid{display:grid;grid-template-columns:1.4fr 1fr;gap:2.4rem}
.post{text-decoration:none;display:block}
.post .ph{overflow:hidden;border-radius:18px;margin-bottom:1.2rem}
.post.big .ph{height:520px}
.post .ph{height:220px}
.post:hover img{transform:scale(1.07)}
.post .meta{font-size:.75rem;letter-spacing:.16em;text-transform:uppercase;color:var(--moss);font-weight:700}
.post h3{font-size:1.65rem;margin:.5rem 0;transition:color .3s}
.post.big h3{font-size:clamp(2rem,3.4vw,3rem)}
.post:hover h3{color:var(--tomato)}
.post p{color:var(--muted);font-size:.95rem}
.side-posts{display:grid;gap:2rem}
.side-posts .post{display:grid;grid-template-columns:180px 1fr;gap:1.2rem;align-items:center}
.side-posts .post .ph{height:150px;margin:0}
.side-posts h3{font-size:1.35rem}

/* ---------- FAQ ---------- */
.faq{background:var(--ink);color:var(--cream)}
.faq .head .num{-webkit-text-stroke-color:var(--cream)}
.faq .head p,.faq .eyebrow{color:rgba(244,239,228,.65)}
.faq-grid{display:grid;grid-template-columns:1fr 1.6fr;gap:4rem}
.faq-card{background:var(--tomato);border-radius:22px;padding:2rem;align-self:start;position:sticky;top:2rem}
.faq-card h3{font-size:2rem;margin-bottom:.8rem}
.faq-card p{opacity:.9;margin-bottom:1.4rem}
.faq-card .btn{border-color:var(--cream);color:var(--cream)}
.faq-card .btn:hover{background:var(--cream);color:var(--tomato)}
.qa{border-bottom:1px solid rgba(244,239,228,.18)}
.qa button{width:100%;background:none;border:0;color:inherit;text-align:left;font-family:"Fraunces";font-size:clamp(1.2rem,2vw,1.6rem);padding:1.6rem 0;display:flex;justify-content:space-between;gap:1rem;cursor:pointer;transition:color .3s}
.qa button:hover{color:var(--saffron)}
.qa .pm{flex:none;width:36px;height:36px;border-radius:50%;border:1px solid rgba(244,239,228,.35);position:relative;transition:.4s var(--ease)}
.qa .pm::before,.qa .pm::after{content:"";position:absolute;left:50%;top:50%;width:12px;height:1.5px;background:currentColor;transform:translate(-50%,-50%);transition:.4s var(--ease)}
.qa .pm::after{transform:translate(-50%,-50%) rotate(90deg)}
.qa.open .pm{background:var(--saffron);border-color:var(--saffron);color:var(--ink);transform:rotate(180deg)}
.qa.open .pm::after{transform:translate(-50%,-50%) rotate(0)}
.qa .ans{display:grid;grid-template-rows:0fr;transition:grid-template-rows .5s var(--ease)}
.qa.open .ans{grid-template-rows:1fr}
.qa .ans>div{overflow:hidden}
.qa .ans p{padding-bottom:1.6rem;opacity:.75;max-width:40rem}

/* ---------- Reservation ---------- */
.reserve-grid{display:grid;grid-template-columns:1fr 1.1fr;border-radius:28px;overflow:hidden;background:var(--cream)}
.reserve-img{position:relative;min-height:640px}
.reserve-img .hours{position:absolute;left:1.6rem;bottom:1.6rem;right:1.6rem;background:rgba(251,248,242,.94);backdrop-filter:blur(8px);border-radius:18px;padding:1.4rem}
.hours h4{font-size:1.3rem;margin-bottom:.6rem}
.hours div{display:flex;justify-content:space-between;font-size:.9rem;padding:.25rem 0;border-bottom:1px dashed var(--line)}
.hours div:last-child{border:0}
.reserve-form{padding:clamp(2rem,4vw,3.6rem)}
.reserve-form h2{font-size:clamp(2.2rem,4vw,3.6rem);margin:1rem 0 .6rem}
.reserve-form>p{color:var(--muted);margin-bottom:2rem}
.fgrid{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
.f{display:flex;flex-direction:column;gap:.35rem}
.f.full{grid-column:1/3}
.f label{font-size:.74rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase}
.f input,.f select,.f textarea{font-family:inherit;font-size:1rem;padding:.9rem 1rem;border-radius:12px;border:1px solid var(--line);background:var(--paper);transition:.3s;color:var(--ink)}
.f input:focus,.f select:focus,.f textarea:focus{outline:none;border-color:var(--moss);box-shadow:0 0 0 4px rgba(86,104,74,.15)}
.guests{display:flex;gap:.4rem;flex-wrap:wrap}
.guests button{width:46px;height:46px;border-radius:50%;border:1px solid var(--line);background:var(--paper);font-family:inherit;font-size:.95rem;cursor:pointer;transition:.3s}
.guests button:hover{border-color:var(--ink)}
.guests button.on{background:var(--ink);color:var(--cream);border-color:var(--ink)}
.consent{display:flex;gap:.7rem;align-items:flex-start;font-size:.85rem;color:var(--muted);margin:1.2rem 0 1.4rem}
.consent input{margin-top:.25rem;accent-color:var(--moss)}
.form-msg{margin-top:1rem;padding:1rem;border-radius:12px;background:#e3ead9;display:none;font-size:.92rem}
.form-msg.show{display:block;animation:fade .5s}
@keyframes fade{from{opacity:0;transform:translateY(8px)}}

/* ---------- Footer ---------- */
footer{background:var(--olive);color:var(--cream);padding:5rem 0 2rem;margin-top:0}
.foot-big{font-family:"Fraunces";font-size:clamp(4rem,14vw,13rem);line-height:.85;letter-spacing:-.04em;font-weight:300}
.foot-big em{color:var(--saffron)}
.foot-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:2rem;margin:4rem 0 3rem;padding-top:3rem;border-top:1px solid rgba(244,239,228,.2)}
.foot-grid h5{font-size:.74rem;letter-spacing:.2em;text-transform:uppercase;margin-bottom:1rem;color:var(--saffron)}
.foot-grid p,.foot-grid a{font-size:.92rem;opacity:.8;text-decoration:none;display:block;margin-bottom:.4rem}
.foot-grid a:hover{opacity:1;color:var(--saffron)}
.legal{display:flex;justify-content:space-between;flex-wrap:wrap;gap:1rem;font-size:.8rem;opacity:.6}
.legal a{margin-left:1.2rem}

/* ---------- Cookie banner ---------- */
.cookie{position:fixed;right:1.4rem;bottom:1.4rem;max-width:380px;background:var(--paper);border:1px solid var(--line);border-radius:18px;padding:1.3rem;box-shadow:0 20px 50px rgba(0,0,0,.15);z-index:60;font-size:.86rem;transform:translateY(140%);transition:.6s var(--ease)}
.cookie.show{transform:none}
.cookie p{margin-bottom:1rem;color:var(--muted)}
.cookie .btn{padding:.6rem 1.1rem;font-size:.82rem}

/* ---------- Reveal ---------- */
.rv{opacity:0;transform:translateY(40px);transition:opacity 1s var(--ease),transform 1s var(--ease)}
.rv.in{opacity:1;transform:none}
.rv-d1{transition-delay:.1s}.rv-d2{transition-delay:.2s}.rv-d3{transition-delay:.3s}

/* ---------- Responsive ---------- */
@media (max-width:1100px){
  .hero,.nutri-grid,.faq-grid,.reserve-grid,.journal-grid{grid-template-columns:1fr}
  .hero-media{min-height:70vh}
  .stamp{left:auto;right:1.4rem;top:1.4rem;transform:none;width:96px;height:96px}
  .steps{grid-template-columns:1fr 1fr}
  .step{border-bottom:1px solid rgba(244,239,228,.2)}
  .step + .step{padding-left:0}
  .step:nth-child(even){padding-left:1.8rem}
  .nutri-img{position:relative;height:380px;border-radius:22px}
  .chef-a{grid-column:1/8}.chef-b{grid-column:6/10}.chef-txt{grid-column:1/13;margin-top:4rem}
  .foot-grid{grid-template-columns:1fr 1fr}
  .faq-card{position:relative;top:0}
}
@media (max-width:760px){
  :root{--nav:0px}
  .side{display:none}
  .topbar{display:flex;position:sticky;top:0;z-index:50;background:var(--olive);color:var(--cream);justify-content:space-between;align-items:center;padding:.9rem 1.2rem}
  .topbar .logo{display:flex;align-items:center;gap:.6rem;font-size:1.2rem}
  .topbar .logo b{margin:0;width:34px;height:34px;font-size:1rem}
  .menu-btn{background:none;border:1px solid rgba(244,239,228,.4);color:inherit;border-radius:999px;padding:.5rem 1rem;font-family:inherit;cursor:pointer}
  .mnav{position:fixed;inset:60px 0 0 0;background:var(--olive);z-index:49;display:flex;flex-direction:column;padding:2rem 1.4rem;gap:1.2rem;transform:translateX(100%);transition:.5s var(--ease)}
  .mnav.open{transform:none}
  .mnav a{color:var(--cream);font-family:"Fraunces";font-size:2rem;text-decoration:none}
  .head{grid-template-columns:1fr}
  .head .num{font-size:3.4rem}
  .dish{grid-column:1/-1!important;margin-top:0!important;min-height:380px!important}
  .steps{grid-template-columns:1fr}
  .step:nth-child(even){padding-left:0}
  .step{border-right:0}
  .how-band{grid-template-columns:1fr}
  .chef-a,.chef-b,.chef-txt{grid-column:1/-1;grid-row:auto;transform:none}
  .chef-a{height:420px}.chef-b{display:none}
  .gallery{grid-template-columns:1fr 1fr;grid-auto-rows:150px}
  .gallery figure{grid-column:span 1!important;grid-row:span 1!important}
  .gallery figure:nth-child(1){grid-column:span 2!important;grid-row:span 2!important}
  .side-posts .post{grid-template-columns:1fr}
  .side-posts .post .ph{height:200px}
  .post.big .ph{height:320px}
  .fgrid{grid-template-columns:1fr}.f.full{grid-column:1}
  .reserve-img{min-height:420px}
  .foot-grid{grid-template-columns:1fr}
  .hero-meta{grid-template-columns:1fr 1fr 1fr}
  .cookie{left:1rem;right:1rem;max-width:none}
}
@media (prefers-reduced-motion:reduce){
  *,*::before,*::after{animation:none!important;transition:none!important}
  .rv{opacity:1;transform:none}
  .hero h1 span i{transform:none}
}
</style>
</head>
<body>

<!-- Sticky side navigation (desktop) -->
<aside class="side" aria-label="Main navigation">
  <a href="#top" class="logo"><b>U</b>Urban<br>Plate</a>
  <ul>
    <li><a href="#menu">Menu</a></li>
    <li><a href="#how">How</a></li>
    <li><a href="#nutrition">Nutrition</a></li>
    <li><a href="#chef">Chef</a></li>
    <li><a href="#journal">Journal</a></li>
    <li><a href="#faq">FAQ</a></li>
  </ul>
  <a href="#reserve" class="book">Book a table</a>
  <span class="progress" id="progress"></span>
</aside>

<!-- Mobile top bar -->
<header class="topbar">
  <a href="#top" class="logo"><b>U</b>Urban Plate</a>
  <button class="menu-btn" id="menuBtn" aria-expanded="false" aria-controls="mnav">Menu</button>
</header>
<nav class="mnav" id="mnav" aria-label="Mobile navigation">
  <a href="#menu">Menu</a><a href="#how">How it works</a><a href="#nutrition">Nutrition</a>
  <a href="#chef">Chef</a><a href="#journal">Journal</a><a href="#faq">FAQ</a><a href="#reserve">Book a table</a>
</nav>

<main id="top">

<!-- HERO -->
<section class="hero">
  <div class="hero-text">
    <div class="hero-top"><span>Seasonal Kitchen</span><span>Issue Nº 11 — Autumn</span></div>
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
      <figure><img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1400&q=80" alt="Plated seasonal dish with roasted vegetables"></figure>
      <figure><img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=800&q=80" alt="Colourful grain bowl with fresh greens"></figure>
      <figure><img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&q=80" alt="Warmly lit restaurant dining room"></figure>
    </div>
  </div>
</section>

<div class="marquee" aria-hidden="true"><div>
  <span>Wood-fired vegetables</span><span>House-made pasta</span><span>Market fish</span><span>Natural sourdough</span><span>Seasonal desserts</span>
  <span>Wood-fired vegetables</span><span>House-made pasta</span><span>Market fish</span><span>Natural sourdough</span><span>Seasonal desserts</span>
</div></div>

<!-- FEATURED DISHES -->
<section class="sec wrap" id="menu">
  <div class="head rv">
    <span class="num">01</span>
    <div><p class="eyebrow">Featured plates</p><h2>This week on <em>the pass</em></h2></div>
    <p>A rotating edit of five plates from our current menu. Hover a card for ingredients and dietary notes.</p>
  </div>
  <div class="dishes">
    <article class="dish rv" tabindex="0">
      <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?w=1400&q=80" alt="Seared salmon with herbs and lemon">
      <span class="tag">Chef's pick</span>
      <div class="body">
        <h3>Charred salmon, citrus &amp; herb oil</h3>
        <div class="row"><span>Market fish · Main</span><span class="price">$28</span></div>
        <div class="more">Line-caught salmon, blood orange, fennel shavings, green herb oil, toasted seeds.
          <div class="chips"><span>Gluten-free</span><span>High protein</span></div></div>
      </div>
    </article>
    <article class="dish rv rv-d1" tabindex="0">
      <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=1000&q=80" alt="Vegetable and grain bowl">
      <span class="tag">Plant-based</span>
      <div class="body">
        <h3>Market grain bowl</h3>
        <div class="row"><span>Bowls · Lunch</span><span class="price">$17</span></div>
        <div class="more">Farro, roasted squash, pickled onion, avocado, tahini–lemon dressing.
          <div class="chips"><span>Vegan</span><span>Dairy-free</span></div></div>
      </div>
    </article>
    <article class="dish rv" tabindex="0">
      <img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?w=900&q=80" alt="Fresh pasta in tomato sauce">
      <span class="tag">House-made</span>
      <div class="body">
        <h3>Hand-cut tagliatelle</h3>
        <div class="row"><span>Pasta · Main</span><span class="price">$22</span></div>
        <div class="more">Slow tomato sugo, basil, aged parmesan, cracked pepper.
          <div class="chips"><span>Vegetarian</span></div></div>
      </div>
    </article>
    <article class="dish rv rv-d1" tabindex="0">
      <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=900&q=80" alt="Grilled skewers over open flame">
      <span class="tag">Wood-fired</span>
      <div class="body">
        <h3>Fire-grilled skewers</h3>
        <div class="row"><span>Grill · Sharing</span><span class="price">$19</span></div>
        <div class="more">Free-range chicken thigh, smoked paprika, garlic yoghurt, charred lemon.
          <div class="chips"><span>Gluten-free</span></div></div>
      </div>
    </article>
    <article class="dish rv rv-d2" tabindex="0">
      <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=900&q=80" alt="Fresh seasonal salad plate">
      <span class="tag">Light</span>
      <div class="body">
        <h3>Garden plate</h3>
        <div class="row"><span>Starters</span><span class="price">$14</span></div>
        <div class="more">Heirloom leaves, shaved radish, soft egg, mustard vinaigrette.
          <div class="chips"><span>Vegetarian</span><span>Gluten-free</span></div></div>
      </div>
    </article>
  </div>
  <p class="note" style="margin-top:2rem">Prices and dishes change with the season and may differ from what's shown. Please check the printed menu on the day of your visit.</p>
</section>

<!-- HOW IT WORKS -->
<section class="how sec" id="how">
  <div class="wrap">
    <div class="head rv">
      <span class="num">02</span>
      <div><p class="eyebrow">How it works</p><h2>From market to <em>plate</em></h2></div>
      <p>No secrets — just a simple, repeatable way of cooking that keeps the food fresh and the menu honest.</p>
    </div>
    <div class="steps">
      <div class="step rv">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path d="M3 7h18l-2 12H5L3 7Z"/><path d="M8 7a4 4 0 0 1 8 0"/></svg></div>
        <small>STEP 01</small><h3>Source</h3>
        <p>Each week we buy from nearby growers, fishers and bakers — whatever is at its best.</p>
      </div>
      <div class="step rv rv-d1">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path d="M4 20 20 4"/><path d="M14 4h6v6"/><circle cx="7" cy="17" r="3"/></svg></div>
        <small>STEP 02</small><h3>Write</h3>
        <p>The chef builds a short menu around the haul. Fewer dishes, done properly.</p>
      </div>
      <div class="step rv rv-d2">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><path d="M12 3c2 4-2 5 0 9 1-2 3-2 3-2 2 3 1 8-3 9-4 0-6-3-5-6 0-3 3-5 5-10Z"/></svg></div>
        <small>STEP 03</small><h3>Cook</h3>
        <p>Wood-fire, slow braises and fresh pasta — everything made in our open kitchen.</p>
      </div>
      <div class="step rv rv-d3">
        <div class="ic"><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.6" viewBox="0 0 24 24"><circle cx="12" cy="13" r="7"/><path d="M5 13h14M12 3v3"/></svg></div>
        <small>STEP 04</small><h3>Share</h3>
        <p>Plates arrive when they're ready, built for the table to share and talk over.</p>
      </div>
    </div>
    <div class="how-band">
      <figure class="rv"><img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?w=900&q=80" alt="Fresh vegetables at a market"></figure>
      <figure class="rv rv-d1"><img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=1200&q=80" alt="Cooks preparing food in a kitchen"></figure>
    </div>
  </div>
</section>

<!-- NUTRITION -->
<section class="sec wrap" id="nutrition">
  <div class="head rv">
    <span class="num">03</span>
    <div><p class="eyebrow">Nutrition &amp; information</p><h2>Know what's <em>on your fork</em></h2></div>
    <p>Approximate nutrition and allergen details for our core dishes, so you can choose with confidence.</p>
  </div>
  <div class="nutri-grid">
    <div class="nutri-img rv"><img id="nImg" src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?w=1000&q=80" alt="Selected dish"></div>
    <div class="rv rv-d1">
      <div class="tabs" role="tablist">
        <button class="on" data-k="salmon" role="tab">Charred salmon</button>
        <button data-k="bowl" role="tab">Grain bowl</button>
        <button data-k="pasta" role="tab">Tagliatelle</button>
        <button data-k="skewers" role="tab">Skewers</button>
      </div>
      <div class="panel">
        <h3 id="nName">Charred salmon</h3>
        <p class="sub" id="nSub">Line-caught salmon, blood orange, fennel, herb oil.</p>
        <div class="facts">
          <div class="ttl">Per serving <small id="nKcal">≈ 540 kcal</small></div>
          <div id="nFacts"></div>
        </div>
        <div class="allergen" id="nAll"></div>
        <p class="note">Values are estimates based on standard recipes and portion sizes and may vary. This information is for general guidance only and is not medical or dietary advice. If you have a food allergy or intolerance, please speak to our team before ordering — our kitchen handles common allergens and we cannot guarantee any dish is allergen-free.</p>
      </div>
    </div>
  </div>
</section>

<!-- CHEF -->
<section class="chef sec" id="chef">
  <div class="wrap">
    <div class="head rv">
      <span class="num">04</span>
      <div><p class="eyebrow">Chef spotlight</p><h2>The hands behind <em>the menu</em></h2></div>
      <p>Meet the person who writes the menu every Monday morning.</p>
    </div>
    <div class="chef-grid">
      <div class="chef-a rv"><img src="https://images.unsplash.com/photo-1577219491135-ce391730fbaf?w=1000&q=80" alt="Head chef in the kitchen"></div>
      <div class="chef-b rv rv-d2"><img src="https://images.unsplash.com/photo-1466637574441-749b8f19452f?w=700&q=80" alt="Fresh herbs being prepared"></div>
      <div class="chef-txt rv rv-d1">
        <p class="eyebrow">Head Chef</p>
        <blockquote>"I don't decide the menu. The season does — I just listen carefully."</blockquote>
        <p>Our head chef trained in busy city kitchens before opening Urban Plate with one idea: cook less, cook better. The menu is built around vegetables first, with fish and meat as supporting characters.</p>
        <p>Expect bright acidity, a lot of fire, and plates that change week to week as the markets do.</p>
        <ul class="chef-list">
          <li>Vegetable-forward cooking</li><li>Whole-animal butchery</li>
          <li>Fresh pasta daily</li><li>Low-waste kitchen</li>
        </ul>
        <div class="sig"><div><b>Chef Arin Vale</b><small>Head Chef &amp; co-founder</small></div></div>
      </div>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section class="sec wrap" id="gallery">
  <div class="head rv">
    <span class="num">05</span>
    <div><p class="eyebrow">Inside the room</p><h2>A table, <em>a mood</em></h2></div>
    <p>Candlelight, an open kitchen and plates made for passing around.</p>
  </div>
  <div class="gallery">
    <figure class="rv"><img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=1200&q=80" alt="Elegant restaurant table setting"><figcaption>Main dining room</figcaption></figure>
    <figure class="rv rv-d1"><img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=800&q=80" alt="Overhead flat lay of several dishes"><figcaption>Sharing plates</figcaption></figure>
    <figure class="rv rv-d2"><img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600&q=80" alt="Wood-fired flatbread"><figcaption>Wood oven</figcaption></figure>
    <figure class="rv rv-d3"><img src="https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?w=600&q=80" alt="Plated small dish"><figcaption>Small plates</figcaption></figure>
    <figure class="rv"><img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?w=800&q=80" alt="Diners at a restaurant in the evening"><figcaption>Evening service</figcaption></figure>
    <figure class="rv rv-d1"><img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=800&q=80" alt="Sliced grilled steak"><figcaption>From the grill</figcaption></figure>
    <figure class="rv rv-d2"><img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?w=800&q=80" alt="Weekend brunch plate"><figcaption>Weekend brunch</figcaption></figure>
    <figure class="rv rv-d3"><img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?w=800&q=80" alt="Restaurant bar area"><figcaption>The bar</figcaption></figure>
  </div>
</section>

<!-- JOURNAL -->
<section class="sec wrap" id="journal" style="padding-top:0">
  <div class="head rv">
    <span class="num">06</span>
    <div><p class="eyebrow">Food journal</p><h2>Notes from <em>the kitchen</em></h2></div>
    <p>Recipes, market reports and the thinking behind our plates.</p>
  </div>
  <div class="journal-grid">
    <a href="#journal" class="post big rv">
      <div class="ph"><img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?w=1400&q=80" alt="Seasonal produce on a table"></div>
      <span class="meta">Market report · 6 min read</span>
      <h3>What autumn tastes like: squash, pears and the first frost</h3>
      <p>A walk through this month's market haul and how each ingredient finds its way onto the menu.</p>
    </a>
    <div class="side-posts">
      <a href="#journal" class="post rv rv-d1">
        <div class="ph"><img src="https://images.unsplash.com/photo-1473093295043-cdd812d0e601?w=600&q=80" alt="Fresh pasta"></div>
        <div><span class="meta">Technique · 4 min</span><h3>Why we roll our pasta by hand every morning</h3></div>
      </a>
      <a href="#journal" class="post rv rv-d2">
        <div class="ph"><img src="https://images.unsplash.com/photo-1466637574441-749b8f19452f?w=600&q=80" alt="Chopped herbs"></div>
        <div><span class="meta">At home · 5 min</span><h3>Five herb oils to brighten any weeknight dinner</h3></div>
      </a>
      <a href="#journal" class="post rv rv-d3">
        <div class="ph"><img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=600&q=80" alt="Kitchen team at work"></div>
        <div><span class="meta">Behind the pass · 3 min</span><h3>Our low-waste kitchen: small habits, big difference</h3></div>
      </a>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq sec" id="faq">
  <div class="wrap">
    <div class="head rv">
      <span class="num">07</span>
      <div><p class="eyebrow">Questions</p><h2>Good to <em>know</em></h2></div>
      <p>Everything you might want to ask before you visit.</p>
    </div>
    <div class="faq-grid">
      <div class="faq-card rv">
        <h3>Still curious?</h3>
        <p>Our team is happy to help with dietary needs, larger groups or anything else.</p>
        <a href="mailto:hello@urbanplate.example" class="btn">Email us <span class="arr">→</span></a>
      </div>
      <div class="rv rv-d1" id="faqList">
        <div class="qa open"><button aria-expanded="true">Do I need a reservation?<span class="pm"></span></button><div class="ans"><div><p>We recommend booking, especially Friday and Saturday evenings. We also keep a few tables and bar seats for walk-ins each service.</p></div></div></div>
        <div class="qa"><button aria-expanded="false">Can you cater for allergies and dietary needs?<span class="pm"></span></button><div class="ans"><div><p>Yes — most dishes can be adapted for vegetarian, vegan or gluten-free diets. Please tell us about allergies when booking and remind your server on arrival. Our kitchen handles common allergens, so we can't guarantee any dish is completely free of them.</p></div></div></div>
        <div class="qa"><button aria-expanded="false">How often does the menu change?<span class="pm"></span></button><div class="ans"><div><p>A few dishes change every week depending on what our suppliers bring in, and the full menu turns over with each season.</p></div></div></div>
        <div class="qa"><button aria-expanded="false">Do you take large group bookings?<span class="pm"></span></button><div class="ans"><div><p>We seat groups of up to 12 in the main room. For larger parties or private dining, please email us and we'll put together a set menu.</p></div></div></div>
        <div class="qa"><button aria-expanded="false">What is your cancellation policy?<span class="pm"></span></button><div class="ans"><div><p>Please let us know at least 24 hours in advance if your plans change. We don't take card details or charge any fee to make a reservation online.</p></div></div></div>
        <div class="qa"><button aria-expanded="false">Is the restaurant accessible?<span class="pm"></span></button><div class="ans"><div><p>Our dining room is step-free with an accessible restroom. Let us know if you need anything specific and we'll arrange it.</p></div></div></div>
      </div>
    </div>
  </div>
</section>

<!-- RESERVATION -->
<section class="sec wrap" id="reserve">
  <div class="reserve-grid rv">
    <div class="reserve-img">
      <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=1200&q=80" alt="Set restaurant table ready for guests">
      <div class="hours">
        <h4>Opening hours</h4>
        <div><span>Monday</span><span>Closed</span></div>
        <div><span>Tue – Thu</span><span>12:00 – 22:00</span></div>
        <div><span>Fri – Sat</span><span>12:00 – 23:00</span></div>
        <div><span>Sunday</span><span>11:00 – 21:00</span></div>
      </div>
    </div>
    <form class="reserve-form" id="resForm" novalidate>
      <p class="eyebrow">Reservations</p>
      <h2>Save your <em>seat</em></h2>
      <p>Send a request and our team will confirm your table by email. No payment is required to book.</p>
      <div class="fgrid">
        <div class="f"><label for="rName">Full name</label><input id="rName" name="name" required autocomplete="name"></div>
        <div class="f"><label for="rEmail">Email</label><input id="rEmail" name="email" type="email" required autocomplete="email"></div>
        <div class="f"><label for="rDate">Date</label><input id="rDate" name="date" type="date" required></div>
        <div class="f"><label for="rTime">Time</label>
          <select id="rTime" name="time" required><option value="">Select</option><option>12:00</option><option>13:00</option><option>14:00</option><option>18:00</option><option>19:00</option><option>20:00</option><option>21:00</option></select></div>
        <div class="f full"><label>Guests</label>
          <div class="guests" id="guests"><button type="button">1</button><button type="button" class="on">2</button><button type="button">3</button><button type="button">4</button><button type="button">5</button><button type="button">6</button><button type="button">7+</button></div></div>
        <div class="f full"><label for="rNote">Notes (optional)</label><textarea id="rNote" name="notes" rows="3" placeholder="Allergies, occasion, seating preference…"></textarea></div>
      </div>
      <label class="consent"><input type="checkbox" id="rConsent" required> I agree that Urban Plate may use my details to handle this reservation, as described in the <a href="privacy.html">Privacy Policy</a>.</label>
      <button class="btn btn-solid" type="submit">Request reservation <span class="arr">→</span></button>
      <div class="form-msg" id="formMsg" role="status"></div>
    </form>
  </div>
</section>

</main>

<footer>
  <div class="wrap" style="margin-left:var(--nav)">
    <div class="foot-big">Urban <em>Plate</em></div>
    <div class="foot-grid">
      <div><h5>Visit</h5><p>Urban Plate<br>123 Market Street<br>Your City, 00000</p></div>
      <div><h5>Contact</h5><a href="tel:+10000000000">+1 (000) 000-0000</a><a href="mailto:hello@urbanplate.example">hello@urbanplate.example</a></div>
      <div><h5>Explore</h5><a href="#menu">Menu</a><a href="#nutrition">Nutrition</a><a href="#journal">Journal</a><a href="#reserve">Reservations</a></div>
      <div><h5>Legal</h5><a href="privacy.html">Privacy Policy</a><a href="terms.html">Terms of Use</a><a href="privacy.html#cookies">Cookie Policy</a></div>
    </div>
    <div class="legal"><span>© <span id="yr"></span> Urban Plate. All rights reserved.</span><span>Photography: Unsplash<a href="privacy.html">Privacy</a><a href="terms.html">Terms</a></span></div>
  </div>
</footer>

<div class="cookie" id="cookie" role="dialog" aria-label="Cookie notice">
  <p>We use only essential cookies to make this site work. With your permission we may also use analytics cookies to understand how the site is used. See our <a href="privacy.html#cookies">Cookie Policy</a>.</p>
  <div style="display:flex;gap:.5rem"><button class="btn btn-solid" data-c="all">Accept</button><button class="btn btn-ghost" data-c="essential">Essential only</button></div>
</div>

<script>
// Year
document.getElementById('yr').textContent = new Date().getFullYear();

// Scroll progress + active nav
const prog = document.getElementById('progress');
const links = [...document.querySelectorAll('.side ul a')];
const secs = links.map(a => document.querySelector(a.getAttribute('href')));
addEventListener('scroll', () => {
  const h = document.documentElement;
  prog.style.height = (h.scrollTop / (h.scrollHeight - h.clientHeight) * 100) + '%';
  let cur = -1;
  secs.forEach((s, i) => { if (s && s.getBoundingClientRect().top < innerHeight * .4) cur = i; });
  links.forEach((a, i) => a.classList.toggle('active', i === cur));
}, {passive:true});

// Mobile menu
const mb = document.getElementById('menuBtn'), mn = document.getElementById('mnav');
mb.onclick = () => { const o = mn.classList.toggle('open'); mb.setAttribute('aria-expanded', o); mb.textContent = o ? 'Close' : 'Menu'; };
mn.querySelectorAll('a').forEach(a => a.onclick = () => { mn.classList.remove('open'); mb.textContent = 'Menu'; });

// Reveal on scroll
const io = new IntersectionObserver(es => es.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } }), {threshold:.12});
document.querySelectorAll('.rv').forEach(el => io.observe(el));

// Nutrition tabs
const N = {
  salmon:{name:'Charred salmon',sub:'Line-caught salmon, blood orange, fennel, herb oil.',kcal:540,img:'photo-1467003909585-2f8a72700288',
    f:[['Protein','38 g',76],['Carbohydrates','14 g',18],['Fat','36 g',52],['Fibre','4 g',16],['Sodium','480 mg',21]],a:{Fish:1,Gluten:0,Dairy:0,Nuts:0,Sesame:1,Eggs:0}},
  bowl:{name:'Market grain bowl',sub:'Farro, roasted squash, avocado, tahini–lemon.',kcal:610,img:'photo-1512621776951-a57141f2eefd',
    f:[['Protein','17 g',34],['Carbohydrates','72 g',26],['Fat','28 g',40],['Fibre','14 g',56],['Sodium','390 mg',17]],a:{Fish:0,Gluten:1,Dairy:0,Nuts:0,Sesame:1,Eggs:0}},
  pasta:{name:'Hand-cut tagliatelle',sub:'Slow tomato sugo, basil, aged parmesan.',kcal:680,img:'photo-1473093295043-cdd812d0e601',
    f:[['Protein','24 g',48],['Carbohydrates','88 g',32],['Fat','24 g',34],['Fibre','6 g',24],['Sodium','620 mg',27]],a:{Fish:0,Gluten:1,Dairy:1,Nuts:0,Sesame:0,Eggs:1}},
  skewers:{name:'Fire-grilled skewers',sub:'Chicken thigh, smoked paprika, garlic yoghurt.',kcal:470,img:'photo-1555939594-58d7cb561ad1',
    f:[['Protein','42 g',84],['Carbohydrates','9 g',3],['Fat','29 g',41],['Fibre','2 g',8],['Sodium','560 mg',24]],a:{Fish:0,Gluten:0,Dairy:1,Nuts:0,Sesame:0,Eggs:0}}
};
function showN(k){
  const d = N[k];
  nName.textContent = d.name; nSub.textContent = d.sub; nKcal.textContent = '≈ ' + d.kcal + ' kcal';
  nImg.src = 'https://images.unsplash.com/' + d.img + '?w=1000&q=80'; nImg.alt = d.name;
  nFacts.innerHTML = d.f.map(([l,v,p]) => `<div class="fact"><span>${l}</span><b>${v}</b><div class="bar"><i data-w="${p}"></i></div></div>`).join('') +
    '<div class="fact" style="font-size:.78rem;color:var(--muted)"><span>Bars show approx. % of a 2,000 kcal daily reference intake</span></div>';
  nAll.innerHTML = Object.entries(d.a).map(([n,y]) => `<span class="${y?'yes':''}">${y?'Contains':'No'} ${n.toLowerCase()}</span>`).join('');
  requestAnimationFrame(() => setTimeout(() => nFacts.querySelectorAll('i').forEach(i => i.style.width = i.dataset.w + '%'), 60));
}
document.querySelectorAll('.tabs button').forEach(b => b.onclick = () => {
  document.querySelectorAll('.tabs button').forEach(x => x.classList.remove('on')); b.classList.add('on'); showN(b.dataset.k);
});
showN('salmon');

// FAQ accordion
document.querySelectorAll('.qa button').forEach(b => b.onclick = () => {
  const qa = b.parentElement, open = qa.classList.contains('open');
  document.querySelectorAll('.qa').forEach(q => { q.classList.remove('open'); q.querySelector('button').setAttribute('aria-expanded', false); });
  if (!open) { qa.classList.add('open'); b.setAttribute('aria-expanded', true); }
});

// Reservation form
const g = document.getElementById('guests');
g.querySelectorAll('button').forEach(b => b.onclick = () => { g.querySelectorAll('button').forEach(x => x.classList.remove('on')); b.classList.add('on'); });
const rDate = document.getElementById('rDate'); rDate.min = new Date().toISOString().split('T')[0];
document.getElementById('resForm').onsubmit = e => {
  e.preventDefault();
  const f = e.target, msg = document.getElementById('formMsg');
  if (!f.checkValidity()) { msg.style.background = '#fbe1d9'; msg.textContent = 'Please complete all required fields and accept the privacy notice.'; msg.classList.add('show'); return; }
  const guests = g.querySelector('.on').textContent;
  msg.style.background = '#e3ead9';
  msg.textContent = `Thank you, ${f.name.value.split(' ')[0]}! Your request for ${guests} on ${f.date.value} at ${f.time.value} has been received. We'll email you to confirm.`;
  msg.classList.add('show'); f.reset(); g.querySelectorAll('button').forEach((x,i) => x.classList.toggle('on', i === 1));
};

// Cookie banner
const ck = document.getElementById('cookie');
let ckSet = null; try { ckSet = localStorage.getItem('up_cookie'); } catch(e) {}
if (!ckSet) setTimeout(() => ck.classList.add('show'), 1200);
ck.querySelectorAll('button').forEach(b => b.onclick = () => { try { localStorage.setItem('up_cookie', b.dataset.c); } catch(e) {} ck.classList.remove('show'); });
</script>
</body>
</html>
