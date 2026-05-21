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
(function() {
  var css = document.createElement('style');
  css.textContent = [
    '@keyframes heroUp{from{opacity:0;transform:translateY(18px)}to{opacity:1;transform:none}}',
    '.hero-badge  {animation:heroUp .7s cubic-bezier(.16,1,.3,1) .1s  both}',
    '.hero h1     {animation:heroUp .7s cubic-bezier(.16,1,.3,1) .25s both}',
    '.hero-desc   {animation:heroUp .7s cubic-bezier(.16,1,.3,1) .4s  both}',
    '.hero-actions{animation:heroUp .7s cubic-bezier(.16,1,.3,1) .55s both}',
    '.reveal{opacity:0;transform:translateY(22px);transition:opacity .6s cubic-bezier(.16,1,.3,1),transform .6s cubic-bezier(.16,1,.3,1)}',
    '.reveal.in-view{opacity:1;transform:none}'
  ].join('');
  document.head.appendChild(css);

  var singles = [
    '.section-label',
    '.section-title',
    '.sobre-text p',
    '.btn-cv',
    '.servicos-header p',
    '.section-header > a',
    '.cta-eyebrow',
    '.cta h2',
    '.cta p',
    '.cta-actions'
  ];

  singles.forEach(function(sel) {
    document.querySelectorAll(sel).forEach(function(el) {
      el.classList.add('reveal');
    });
  });

  document.querySelectorAll('.area-card, .project-card, .servico-card, .step').forEach(function(el) {
    el.classList.add('reveal');
    var idx = Array.from(el.parentElement.children).indexOf(el);
    el.style.transitionDelay = (idx * 80) + 'ms';
  });

  var obs = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting) { e.target.classList.add('in-view'); obs.unobserve(e.target); }
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });

  document.querySelectorAll('.reveal').forEach(function(el) { obs.observe(el); });
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