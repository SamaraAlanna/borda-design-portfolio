<style>
  footer { border-top: 0.5px solid var(--border); padding: 2rem 0; }
  .footer-inner { max-width: var(--max-width); margin: 0 auto; padding: 0 2.5rem; display: flex; align-items: center; justify-content: space-between; }
  .footer-copy { font-size: 0.78rem; color: var(--text-dim); }
  .footer-links { display: flex; gap: 1.5rem; }
  .footer-links a { font-size: 0.78rem; color: var(--text-dim); text-decoration: none; transition: color 0.2s; }
  .footer-links a:hover { color: var(--accent); }

  @media (max-width: 600px) {
    .footer-inner { flex-direction: column; gap: 1rem; text-align: center; }
    .footer-links { flex-wrap: wrap; justify-content: center; }
  }
</style>

<footer>
  <div class="footer-inner">
    <p class="footer-copy">© 2025 Samara Alanna.</p>
    <div class="footer-links">
      <a href="#" target="_blank">Instagram</a>
      <a href="#" target="_blank">LinkedIn</a>
      <a href="#" target="_blank">Behance</a>
      <a href="https://wa.me/5541920058670" target="_blank">WhatsApp</a>
    </div>
  </div>
</footer>

<script>
function smoothScrollTo(target, duration, center) {
  var navHeight = document.querySelector('nav').offsetHeight;
  var viewportHeight = window.innerHeight;
  var sectionHeight = target.offsetHeight;
  var topPos = target.getBoundingClientRect().top + window.pageYOffset;
  var offset;

  if (center && sectionHeight < viewportHeight - navHeight) {
    offset = (viewportHeight - navHeight - sectionHeight) / 2 + navHeight;
  } else {
    offset = navHeight;
  }

  var targetPos = topPos - offset;
  var startPos = window.pageYOffset;
  var distance = targetPos - startPos;
  var startTime = null;

  function step(currentTime) {
    if (!startTime) startTime = currentTime;
    var elapsed = currentTime - startTime;
    var progress = Math.min(elapsed / duration, 1);
    var ease = progress < 0.5
      ? 4 * progress * progress * progress
      : 1 - Math.pow(-2 * progress + 2, 3) / 2;
    window.scrollTo(0, startPos + distance * ease);
    if (elapsed < duration) requestAnimationFrame(step);
  }

  requestAnimationFrame(step);
}

/* ─── Animations ─── */
(function () {

  /* ── CSS ── */
  var s = document.createElement('style');
  s.textContent =
    /* Cursor */
    '.c-dot{position:fixed;top:0;left:0;width:5px;height:5px;background:var(--accent);border-radius:50%;pointer-events:none;z-index:9999;transform:translate(-50%,-50%);transition:opacity .3s}' +
    '.c-ring{position:fixed;top:0;left:0;width:32px;height:32px;border:1.5px solid rgba(230,183,211,.28);border-radius:50%;pointer-events:none;z-index:9998;transform:translate(-50%,-50%);transition:width .35s,height .35s,border-color .35s}' +
    '.c-ring.hover{width:54px;height:54px;border-color:rgba(230,183,211,.55)}' +
    '.c-ring.click{width:18px;height:18px;border-color:var(--accent)}' +
    /* Scroll progress */
    '.scroll-prog{position:fixed;top:64px;left:0;right:0;height:2px;background:linear-gradient(90deg,var(--accent),rgba(230,183,211,.35));transform-origin:left;transform:scaleX(0);z-index:99;pointer-events:none}' +
    /* Hero entrance */
    '@keyframes heroUp{from{opacity:0;transform:translateY(30px);filter:blur(8px)}to{opacity:1;transform:none;filter:none}}' +
    '.hero-badge{animation:heroUp .85s cubic-bezier(.16,1,.3,1) .05s both}' +
    '.hero h1{animation:heroUp .9s cubic-bezier(.16,1,.3,1) .2s both}' +
    '.hero-desc{animation:heroUp .85s cubic-bezier(.16,1,.3,1) .38s both}' +
    '.hero-actions{animation:heroUp .85s cubic-bezier(.16,1,.3,1) .54s both}' +
    /* Scroll reveal */
    '.reveal{opacity:0;transform:translateY(36px) scale(.97);filter:blur(5px);transition:opacity .8s cubic-bezier(.16,1,.3,1),transform .8s cubic-bezier(.16,1,.3,1),filter .75s cubic-bezier(.16,1,.3,1)}' +
    '.reveal.in-view{opacity:1;transform:none;filter:none}' +
    /* Clip-path reveal for headings */
    '.clip-h{clip-path:inset(0 0 110% 0);transition:clip-path .85s cubic-bezier(.16,1,.3,1)}' +
    '.clip-h.in-view{clip-path:inset(0 0 0% 0)}' +
    /* Cursor-tracked glow */
    '.area-card,.project-card,.servico-card,.step{--gx:50%;--gy:50%}' +
    '.area-card::before,.servico-card::before{background:radial-gradient(circle at var(--gx) var(--gy),rgba(230,183,211,.22) 0%,transparent 62%)!important}' +
    '.project-card::before{content:"";position:absolute;inset:0;background:radial-gradient(circle at var(--gx) var(--gy),rgba(230,183,211,.12) 0%,transparent 60%);opacity:0;transition:opacity .3s;pointer-events:none;z-index:0}' +
    '.project-card:hover::before{opacity:1}';
  document.head.appendChild(s);

  /* ── Custom cursor ── */
  var dot  = document.createElement('div'); dot.className  = 'c-dot';
  var ring = document.createElement('div'); ring.className = 'c-ring';
  document.body.appendChild(dot);
  document.body.appendChild(ring);

  var mx = -200, my = -200, rx = -200, ry = -200;
  document.addEventListener('mousemove', function (e) {
    mx = e.clientX; my = e.clientY;
    dot.style.left = mx + 'px';
    dot.style.top  = my + 'px';
  });
  (function raf() {
    rx += (mx - rx) * 0.1;
    ry += (my - ry) * 0.1;
    ring.style.left = rx + 'px';
    ring.style.top  = ry + 'px';
    requestAnimationFrame(raf);
  })();
  document.querySelectorAll('a, button, .area-card, .project-card, .servico-card, .step').forEach(function (el) {
    el.addEventListener('mouseenter', function () { ring.classList.add('hover'); });
    el.addEventListener('mouseleave', function () { ring.classList.remove('hover'); });
  });
  document.addEventListener('mousedown', function () { ring.classList.add('click'); });
  document.addEventListener('mouseup',   function () { ring.classList.remove('click'); });

  /* ── Scroll progress bar ── */
  var prog = document.createElement('div');
  prog.className = 'scroll-prog';
  document.body.appendChild(prog);
  window.addEventListener('scroll', function () {
    var pct = window.scrollY / (document.documentElement.scrollHeight - window.innerHeight);
    prog.style.transform = 'scaleX(' + pct + ')';
  }, { passive: true });

  /* ── Reveal: labels, textos, ações ── */
  ['.section-label', '.btn-cv', '.sobre-text p', '.servicos-header p',
   '.section-header > a', '.cta-eyebrow', '.cta p', '.cta-actions'].forEach(function (sel) {
    document.querySelectorAll(sel).forEach(function (el) { el.classList.add('reveal'); });
  });

  /* ── Clip-path para títulos grandes ── */
  document.querySelectorAll('.section-title, .processo h2, .cta h2').forEach(function (el) {
    el.classList.add('clip-h');
  });

  /* ── Cards escalonados ── */
  document.querySelectorAll('.area-card, .project-card, .servico-card, .step').forEach(function (el) {
    el.classList.add('reveal');
    var idx = Array.from(el.parentElement.children).indexOf(el);
    el.style.transitionDelay = (idx * 110) + 'ms';
  });

  /* ── IntersectionObserver ── */
  var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('in-view'); obs.unobserve(e.target); }
    });
  }, { threshold: 0.07, rootMargin: '0px 0px -20px 0px' });
  document.querySelectorAll('.reveal, .clip-h').forEach(function (el) { obs.observe(el); });

  /* ── 3D tilt em cards ── */
  document.querySelectorAll('.area-card, .project-card').forEach(function (card) {
    card.addEventListener('mousemove', function (e) {
      var r = card.getBoundingClientRect();
      var x = (e.clientX - r.left) / r.width  - 0.5;
      var y = (e.clientY - r.top)  / r.height - 0.5;
      card.style.transition = 'transform 0.1s ease, background 0.25s, box-shadow 0.25s';
      card.style.transform  = 'perspective(700px) rotateY(' + (x * 9) + 'deg) rotateX(' + (-y * 9) + 'deg) scale(1.018)';
    });
    card.addEventListener('mouseleave', function () {
      card.style.transition = 'transform 0.55s cubic-bezier(.16,1,.3,1), background 0.25s, box-shadow 0.25s';
      card.style.transform  = '';
    });
  });

  /* ── Cursor glow dentro dos cards ── */
  document.querySelectorAll('.area-card, .project-card, .servico-card, .step').forEach(function (card) {
    card.addEventListener('mousemove', function (e) {
      var r = card.getBoundingClientRect();
      card.style.setProperty('--gx', (e.clientX - r.left) + 'px');
      card.style.setProperty('--gy', (e.clientY - r.top)  + 'px');
    });
  });

  /* ── Counter animado nos preços ── */
  document.querySelectorAll('.servico-price').forEach(function (el) {
    var orig = el.textContent.trim();
    var num  = parseInt(orig.replace(/\D/g, ''), 10);
    var done = false;
    var po = new IntersectionObserver(function (entries) {
      if (entries[0].isIntersecting && !done) {
        done = true; po.disconnect();
        var t0 = null, dur = 900;
        (function tick(t) {
          if (!t0) t0 = t;
          var p = Math.min((t - t0) / dur, 1);
          var e = 1 - Math.pow(1 - p, 3);
          el.textContent = 'R$' + Math.round(e * num).toLocaleString('pt-BR');
          if (p < 1) requestAnimationFrame(tick);
          else el.textContent = orig;
        })(performance.now());
      }
    }, { threshold: 0.5 });
    po.observe(el);
  });

})();

document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
  anchor.addEventListener('click', function(e) {
    var href = this.getAttribute('href');
    if (href === '#') return;
    var target = document.querySelector(href);
    if (!target) return;
    e.preventDefault();
    smoothScrollTo(target, 700, href === '#servicos');
  });
});
</script>