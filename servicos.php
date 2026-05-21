<style>
  .servicos {
    padding: 6rem 0;
    border-bottom: 0.5px solid var(--border);
  }

  .servicos-header {
    margin-bottom: 3rem;
  }

  .servicos-header p {
    font-size: 0.95rem;
    color: var(--text-muted);
    max-width: 480px;
    line-height: 1.7;
    margin-top: 0.75rem;
  }

  .acc-list {
    border: 0.5px solid var(--border-hover);
    border-radius: var(--radius);
    overflow: hidden;
  }

  .acc-item {
    border-bottom: 0.5px solid var(--border);
  }
  .acc-item:last-child { border-bottom: none; }

  .acc-trigger {
    width: 100%;
    background: var(--bg2);
    border: none;
    padding: 1.1rem 1.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    transition: background 0.2s;
    gap: 1rem;
    font-family: var(--font);
  }
  .acc-trigger:hover { background: var(--bg3); }
  .acc-trigger.open { background: var(--bg3); }

  .acc-trigger-left {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex: 1;
  }

  .acc-icon {
    width: 34px;
    height: 34px;
    background: var(--accent-dim);
    border: 0.5px solid var(--accent-border);
    border-radius: var(--radius-sm);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.9rem;
    color: var(--accent);
    flex-shrink: 0;
  }

  .acc-icon svg {
    width: 16px;
    height: 16px;
    flex-shrink: 0;
  }

  .acc-name {
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--text);
    letter-spacing: -0.01em;
  }

  .acc-badge {
    background: var(--accent-dim);
    border: 0.5px solid var(--accent-border);
    border-radius: 99px;
    padding: 0.15rem 0.6rem;
    font-size: 0.65rem;
    font-weight: 500;
    color: var(--accent);
    letter-spacing: 0.04em;
  }

  .acc-chevron {
    width: 18px;
    height: 18px;
    color: var(--text-dim);
    transition: transform 0.3s cubic-bezier(0.4,0,0.2,1);
    flex-shrink: 0;
  }
  .acc-trigger.open .acc-chevron { transform: rotate(180deg); color: var(--accent); }

  .acc-body {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s cubic-bezier(0.4,0,0.2,1);
    background: var(--bg);
  }
  .acc-body.open { max-height: 700px; }

  .acc-body-inner {
    padding: 1.5rem;
    border-top: 0.5px solid var(--border);
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    gap: 1.5rem;
  }

  .acc-col {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }

  .acc-col + .acc-col {
    border-left: 0.5px solid var(--border);
    padding-left: 1.5rem;
  }

  .acc-section-label {
    font-size: 0.65rem;
    font-weight: 500;
    color: var(--text-dim);
    letter-spacing: 0.1em;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
  }

  .acc-desc-text {
    font-size: 0.82rem;
    color: var(--text-muted);
    line-height: 1.65;
    margin: 0;
  }

  .acc-items {
    display: flex;
    flex-direction: column;
    gap: 0.4rem;
  }

  .acc-item-row {
    display: flex;
    align-items: flex-start;
    gap: 0.5rem;
    font-size: 0.8rem;
    color: var(--text-muted);
    line-height: 1.4;
  }

  .acc-dot {
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: var(--accent);
    margin-top: 0.45rem;
    flex-shrink: 0;
    opacity: 0.5;
  }

  .rosa { color: var(--accent); font-weight: 700; }

  .acc-divider {
    width: 100%;
    height: 1.5px;
    background: linear-gradient(90deg, var(--accent), rgba(230,183,211,0.15));
    border-radius: 99px;
    margin-top: auto;
  }

  .acc-price-label {
    font-size: 0.65rem;
    color: var(--text-dim);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 0.2rem;
  }

  .acc-price-value {
    font-size: 2rem;
    font-weight: 800;
    color: var(--text);
    letter-spacing: -0.03em;
    line-height: 1;
  }

  .acc-prazo-block {
    font-size: 0.72rem;
    color: var(--text-dim);
    margin-top: 0.25rem;
    margin-bottom: 0.75rem;
  }
  .acc-prazo-block strong { color: var(--text-muted); font-weight: 500; }

  .btn-acc {
    background: var(--accent);
    color: #1a1018;
    font-family: var(--font);
    font-size: 0.82rem;
    font-weight: 600;
    padding: 0.75rem 1.5rem;
    border-radius: 99px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: fit-content;
    position: relative;
    overflow: hidden;
    transform: translateZ(0);
    transition: transform 0.25s cubic-bezier(.16,1,.3,1), box-shadow 0.25s;
    border: none;
    cursor: pointer;
  }
  .btn-acc:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(230,183,211,0.36); }

  @keyframes btnShimmer {
    to { transform: skewX(-15deg) translateX(350%); }
  }

  .btn-acc::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transform: skewX(-15deg) translateX(-150%);
    pointer-events: none;
  }
  .btn-acc:hover::before { animation: btnShimmer 0.55s cubic-bezier(.4,0,.2,1) forwards; }

  @media (max-width: 768px) {
    .acc-body-inner { grid-template-columns: 1fr; }
    .acc-col + .acc-col { border-left: none; padding-left: 0; border-top: 0.5px solid var(--border); padding-top: 1rem; }
  }
</style>

<section class="servicos" id="servicos">
  <div class="container">
    <div class="servicos-header">
      <div class="section-label">Serviços</div>
      <h2 class="section-title">O que posso fazer pelo seu negócio</h2>
      <p>Cada projeto é desenvolvido de forma personalizada, pensando no visual, na experiência e no que realmente faz sentido para o seu negócio.</p>
    </div>

    <div class="acc-list">

      <!-- IDENTIDADE VISUAL -->
      <div class="acc-item">
        <button class="acc-trigger" onclick="toggleAcc(this)">
          <div class="acc-trigger-left">
            <div class="acc-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            </div>
            <div style="display:flex;align-items:center;gap:0.75rem">
              <span class="acc-name">Identidade Visual</span>
              <span class="acc-badge">Mais pedido</span>
            </div>
          </div>
          <svg class="acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="acc-body">
          <div class="acc-body-inner">
            <div class="acc-col">
              <div>
                <div class="acc-section-label">Descrição</div>
                <p class="acc-desc-text">Personalidade e consistência para sua marca. A identidade visual é responsável por dar reconhecimento e valor em todos os pontos de contato com o público.</p>
              </div>
              <div class="acc-divider"></div>
              <div>
                <div class="acc-price-label">A partir de</div>
                <div class="acc-price-value">R$400</div>
                <div class="acc-prazo-block">Prazo: <strong>10 a 14 dias úteis</strong></div>
                <a href="https://wa.me/5541920058670" class="btn-acc" target="_blank">Solicitar serviço</a>
              </div>
            </div>
            <div class="acc-col">
              <div class="acc-section-label">O que está incluso</div>
              <div class="acc-items">
                <div class="acc-item-row"><div class="acc-dot"></div>Logotipo + variações</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Paleta de cores + tipografia</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Ícones organizados</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Mockup de aplicação</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Manual de marca</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Arquivos em AI, PDF e PNG</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Ajustes e revisões <span class="rosa">ilimitadas</span></div>
              </div>
            </div>
            <div class="acc-col">
              <div class="acc-section-label">Recomendado para</div>
              <div class="acc-items">
                <div class="acc-item-row"><div class="acc-dot"></div>Marcas</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Empresas</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Profissionais autônomos</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Marcas pessoais</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- LANDING PAGE -->
      <div class="acc-item">
        <button class="acc-trigger" onclick="toggleAcc(this)">
          <div class="acc-trigger-left">
            <div class="acc-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
            </div>
            <div style="display:flex;align-items:center;gap:0.75rem">
              <span class="acc-name">Landing Page</span>
            </div>
          </div>
          <svg class="acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="acc-body">
          <div class="acc-body-inner">
            <div class="acc-col">
              <div>
                <div class="acc-section-label">Descrição</div>
                <p class="acc-desc-text">Página focada em converter visitantes em clientes. Design estratégico e código otimizado — como esta página que você está navegando agora.</p>
              </div>
              <div class="acc-divider"></div>
              <div>
                <div class="acc-price-label">A partir de</div>
                <div class="acc-price-value">R$1.200</div>
                <div class="acc-prazo-block">Prazo: <strong>15 a 20 dias úteis</strong></div>
                <a href="https://wa.me/5541920058670" class="btn-acc" target="_blank">Solicitar serviço</a>
              </div>
            </div>
            <div class="acc-col">
              <div class="acc-section-label">O que está incluso</div>
              <div class="acc-items">
                <div class="acc-item-row"><div class="acc-dot"></div>Design exclusivo</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Desenvolvimento completo</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Responsivo</div>
                <div class="acc-item-row"><div class="acc-dot"></div>1 página</div>
                <div class="acc-item-row"><div class="acc-dot"></div>1 rodada de ajustes</div>
              </div>
            </div>
            <div class="acc-col">
              <div class="acc-section-label">Recomendado para</div>
              <div class="acc-items">
                <div class="acc-item-row"><div class="acc-dot"></div>Empresas</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Lançamentos</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Produtos digitais</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Profissionais autônomos</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SITE ACESSÍVEL -->
      <div class="acc-item">
        <button class="acc-trigger" onclick="toggleAcc(this)">
          <div class="acc-trigger-left">
            <div class="acc-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </div>
            <div style="display:flex;align-items:center;gap:0.75rem">
              <span class="acc-name">Site Acessível</span>
            </div>
          </div>
          <svg class="acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="acc-body">
          <div class="acc-body-inner">
            <div class="acc-col">
              <div>
                <div class="acc-section-label">Descrição</div>
                <p class="acc-desc-text">Site profissional desenvolvido em plataforma visual. A solução ideal para quem quer estar online com qualidade sem precisar de um grande investimento.</p>
              </div>
              <div class="acc-divider"></div>
              <div>
                <div class="acc-price-label">A partir de</div>
                <div class="acc-price-value">R$800</div>
                <div class="acc-prazo-block">Prazo: <strong>7 a 10 dias úteis</strong></div>
                <a href="https://wa.me/5541920058670" class="btn-acc" target="_blank">Solicitar serviço</a>
              </div>
            </div>
            <div class="acc-col">
              <div class="acc-section-label">O que está incluso</div>
              <div class="acc-items">
                <div class="acc-item-row"><div class="acc-dot"></div>WordPress + Elementor, Shopify ou Nuvemshop</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Design personalizado na plataforma</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Responsivo + SEO básico</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Integrações com WhatsApp e redes sociais</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Ajustes <span class="rosa">ilimitados</span></div>
              </div>
            </div>
            <div class="acc-col">
              <div class="acc-section-label">Recomendado para</div>
              <div class="acc-items">
                <div class="acc-item-row"><div class="acc-dot"></div>Pequenos negócios</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Pequenos empreendedores</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Quem está começando</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- LOJA VIRTUAL -->
      <div class="acc-item">
        <button class="acc-trigger" onclick="toggleAcc(this)">
          <div class="acc-trigger-left">
            <div class="acc-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            </div>
            <div style="display:flex;align-items:center;gap:0.75rem">
              <span class="acc-name">Loja Virtual</span>
            </div>
          </div>
          <svg class="acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="acc-body">
          <div class="acc-body-inner">
            <div class="acc-col">
              <div>
                <div class="acc-section-label">Descrição</div>
                <p class="acc-desc-text">E-commerce completo para vender online com credibilidade. Experiência de compra simples, organizada e profissional.</p>
              </div>
              <div class="acc-divider"></div>
              <div>
                <div class="acc-price-label">A partir de</div>
                <div class="acc-price-value">R$4.000</div>
                <div class="acc-prazo-block">Prazo: <strong>30 a 45 dias úteis</strong></div>
                <a href="https://wa.me/5541920058670" class="btn-acc" target="_blank">Solicitar serviço</a>
              </div>
            </div>
            <div class="acc-col">
              <div class="acc-section-label">O que está incluso</div>
              <div class="acc-items">
                <div class="acc-item-row"><div class="acc-dot"></div>Design exclusivo</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Loja completa com carrinho e checkout</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Integração com meios de pagamento</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Responsivo + SEO básico</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Integrações com redes sociais</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Páginas + revisões <span class="rosa">ilimitadas</span></div>
              </div>
            </div>
            <div class="acc-col">
              <div class="acc-section-label">Recomendado para</div>
              <div class="acc-items">
                <div class="acc-item-row"><div class="acc-dot"></div>Lojas</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Marcas</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Produtos digitais</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SITE PERSONALIZADO -->
      <div class="acc-item">
        <button class="acc-trigger" onclick="toggleAcc(this)">
          <div class="acc-trigger-left">
            <div class="acc-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
            </div>
            <div style="display:flex;align-items:center;gap:0.75rem">
              <span class="acc-name">Site Personalizado</span>
            </div>
          </div>
          <svg class="acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="acc-body">
          <div class="acc-body-inner">
            <div class="acc-col">
              <div>
                <div class="acc-section-label">Descrição</div>
                <p class="acc-desc-text">Solução completa sob medida para o seu negócio. Desenvolvido do zero para atender suas necessidades de forma estratégica e escalável.</p>
              </div>
              <div class="acc-divider"></div>
              <div>
                <div class="acc-price-label">A partir de</div>
                <div class="acc-price-value">R$6.000</div>
                <div class="acc-prazo-block">Prazo: <strong>30 a 60 dias úteis</strong></div>
                <a href="https://wa.me/5541920058670" class="btn-acc" target="_blank">Solicitar serviço</a>
              </div>
            </div>
            <div class="acc-col">
              <div class="acc-section-label">O que está incluso</div>
              <div class="acc-items">
                <div class="acc-item-row"><div class="acc-dot"></div>Design exclusivo</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Desenvolvimento completo</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Responsivo + SEO básico</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Integrações com WhatsApp e redes sociais</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Páginas + revisões <span class="rosa">ilimitadas</span></div>
              </div>
            </div>
            <div class="acc-col">
              <div class="acc-section-label">Recomendado para</div>
              <div class="acc-items">
                <div class="acc-item-row"><div class="acc-dot"></div>Marcas</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Empresas</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Profissionais autônomos</div>
                <div class="acc-item-row"><div class="acc-dot"></div>Marcas pessoais</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
function toggleAcc(btn) {
  var body = btn.nextElementSibling;
  var isOpen = btn.classList.contains('open');
  document.querySelectorAll('.acc-trigger.open').forEach(function(b) {
    b.classList.remove('open');
    b.nextElementSibling.classList.remove('open');
  });
  if (!isOpen) {
    btn.classList.add('open');
    body.classList.add('open');
  }
}
</script>
