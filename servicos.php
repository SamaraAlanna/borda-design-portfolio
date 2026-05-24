<style>
.card-acc { border: 0.5px solid var(--accent-border) !important; }
.card-acc-trigger { background: var(--accent-dim) !important; }
.card-acc-label { color: var(--accent) !important; }
.card-acc-chevron { color: var(--accent) !important; }
</style>
<section class="servicos" id="servicos">
  <div class="container">
    <div class="servicos-header">
      <div class="section-label" data-i18n="servicos.label">Serviços</div>
      <div class="servicos-header-row">
        <h2 class="section-title" data-i18n="servicos.title">O que posso fazer pelo seu negócio</h2>
        <a href="#quiz" class="btn-quiz-header" data-i18n="servicos.quiz.btn">Não sei qual serviço escolher</a>
      </div>
      <p data-i18n="servicos.desc">Cada projeto é desenvolvido de forma personalizada, pensando no visual, na experiência e no que realmente faz sentido para o seu negócio.</p>
    </div>

    <div class="servicos-carousel-wrapper">
      <div class="swipe-hint" id="swipeHint">
        <span data-i18n="servicos.swipe">Deslize para ver mais</span>
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
      </div>
      <button class="carousel-btn" id="srv-prev" aria-label="Anterior"><svg style="display:block;" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg></button>
      <div class="servicos-grid">

        <!-- SUPORTE MENSAL -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <span class="servico-badge-blue">Recomendado</span>
          </div>
          <h3 data-i18n="srv.suporte.title">Suporte Mensal</h3>
          <p data-i18n="srv.suporte.desc">Mantenha seu site sempre atualizado e funcionando. Atualizações, ajustes e correções sem preocupação.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.incluso">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.suporte.i1">Atualizações de texto e imagens</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.suporte.i2">Pequenos ajustes de layout</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.suporte.i3">Correção de bugs</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.suporte.i4" data-i18n-html="1">Atualizações <span class="rosa">ilimitadas</span></span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.suporte.i5">Suporte via WhatsApp</span></div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.recomendado">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.suporte.r1">Clientes com site já entregue</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.suporte.r2">Quem quer manter o site sempre atualizado</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.suporte.r3">Negócios em crescimento</span></div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label" data-i18n="servicos.preco.mensal">Mensalidade</div>
              <div class="servico-price">R$400</div>
              <div class="servico-prazo" data-i18n="srv.suporte.prazo">Contrato mensal renovável</div>
            </div>
            <a href="https://wa.me/5541920058670?text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20tenho%20interesse%20no%20Suporte%20Mensal!" class="btn-servico" target="_blank" data-i18n="servicos.btn.solicitar">Solicitar serviço</a>
          </div>
        </div>

        <!-- SITE PERSONALIZADO -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
            </div>
            <span class="servico-badge">Mais pedido</span>
          </div>
          <h3 data-i18n="srv.personalizado.title">Site Personalizado</h3>
          <p data-i18n="srv.personalizado.desc">Solução completa sob medida para o seu negócio, desenvolvida do zero com foco em estratégia e escalabilidade.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.incluso">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.personalizado.i1">Design exclusivo</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.personalizado.i2">Desenvolvimento completo</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.personalizado.i3">Responsivo + SEO básico</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.personalizado.i4">Integrações com WhatsApp e redes sociais</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.personalizado.i5" data-i18n-html="1">Páginas + revisões <span class="rosa">ilimitadas</span></span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.personalizado.i6">Suporte via WhatsApp</span></div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.recomendado">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.personalizado.r1">Marcas</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.personalizado.r2">Empresas</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.personalizado.r3">Profissionais autônomos</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.personalizado.r4">Marcas pessoais</span></div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label" data-i18n="servicos.preco.label">A partir de</div>
              <div class="servico-price">R$6.000</div>
              <div class="servico-prazo" data-i18n="srv.personalizado.prazo">Prazo: 30–60 dias úteis</div>
            </div>
            <a href="https://wa.me/5541920058670?text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20tenho%20interesse%20no%20Site%20Personalizado!" class="btn-servico" target="_blank" data-i18n="servicos.btn.solicitar">Solicitar serviço</a>
          </div>
        </div>

        <!-- IDENTIDADE VISUAL -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            </div>
          </div>
          <h3 data-i18n="srv.identidade.title">Identidade Visual</h3>
          <p data-i18n="srv.identidade.desc">Personalidade para sua marca em todos os pontos de contato com o público, fortalecendo seu posicionamento visual.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.incluso">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.i1">Logotipo + variações</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.i2">Paleta de cores + tipografia</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.i3">Ícones organizados</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.i4">Mockup de aplicação</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.i5">Manual de marca</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.i6">Arquivos em AI, PDF e PNG</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.i7" data-i18n-html="1">Revisões <span class="rosa">ilimitadas</span></span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.i8">Suporte via WhatsApp</span></div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.recomendado">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.r1">Marcas</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.r2">Empresas</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.r3">Profissionais autônomos</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.identidade.r4">Marcas pessoais</span></div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label" data-i18n="servicos.preco.label">A partir de</div>
              <div class="servico-price">R$400</div>
              <div class="servico-prazo" data-i18n="srv.identidade.prazo">Prazo: 10–14 dias úteis</div>
            </div>
            <a href="https://wa.me/5541920058670?text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20tenho%20interesse%20na%20Identidade%20Visual!" class="btn-servico" target="_blank" data-i18n="servicos.btn.solicitar">Solicitar serviço</a>
          </div>
        </div>

        <!-- SITE ACESSÍVEL -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </div>
          </div>
          <h3 data-i18n="srv.acessivel.title">Site Acessível</h3>
          <p data-i18n="srv.acessivel.desc">Site profissional desenvolvido em plataforma visual, com design personalizado e qualidade sem grande investimento.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.incluso">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.acessivel.i1">WordPress, Shopify ou Nuvemshop</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.acessivel.i2">Design personalizado</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.acessivel.i3">Responsivo + SEO básico</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.acessivel.i4">Integrações com WhatsApp e redes sociais</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.acessivel.i5" data-i18n-html="1">Ajustes <span class="rosa">ilimitados</span></span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.acessivel.i6">Suporte via WhatsApp</span></div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.recomendado">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.acessivel.r1">Pequenos negócios</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.acessivel.r2">Pequenos empreendedores</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.acessivel.r3">Quem está começando</span></div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label" data-i18n="servicos.preco.label">A partir de</div>
              <div class="servico-price">R$800</div>
              <div class="servico-prazo" data-i18n="srv.acessivel.prazo">Prazo: 7–10 dias úteis</div>
            </div>
            <a href="https://wa.me/5541920058670?text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20tenho%20interesse%20no%20Site%20Acess%C3%ADvel!" class="btn-servico" target="_blank" data-i18n="servicos.btn.solicitar">Solicitar serviço</a>
          </div>
        </div>

        <!-- LANDING PAGE -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
            </div>
          </div>
          <h3 data-i18n="srv.landing.title">Landing Page</h3>
          <p data-i18n="srv.landing.desc">Página focada em converter visitantes em clientes, com design estratégico e código otimizado.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.incluso">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.landing.i1">Design exclusivo</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.landing.i2">Desenvolvimento completo</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.landing.i3">Responsivo</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.landing.i4">1 página · 1 rodada de ajustes</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.landing.i5">Suporte via WhatsApp</span></div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.recomendado">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.landing.r1">Empresas · Lançamentos</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.landing.r2">Produtos digitais</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.landing.r3">Profissionais autônomos</span></div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label" data-i18n="servicos.preco.label">A partir de</div>
              <div class="servico-price">R$1.200</div>
              <div class="servico-prazo" data-i18n="srv.landing.prazo">Prazo: 15–20 dias úteis</div>
            </div>
            <a href="https://wa.me/5541920058670?text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20tenho%20interesse%20na%20Landing%20Page!" class="btn-servico" target="_blank" data-i18n="servicos.btn.solicitar">Solicitar serviço</a>
          </div>
        </div>

        <!-- LOJA VIRTUAL -->
        <div class="servico-card">
          <div class="servico-card-top">
            <div class="servico-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            </div>
          </div>
          <h3 data-i18n="srv.loja.title">Loja Virtual</h3>
          <p data-i18n="srv.loja.desc">E-commerce completo para vender online com design estratégico, experiência de compra fluida e credibilidade.</p>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.incluso">O que está incluso</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.loja.i1">Design exclusivo</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.loja.i2">Loja completa com carrinho e checkout</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.loja.i3">Integração com meios de pagamento</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.loja.i4">Responsivo + SEO básico</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.loja.i5">Integrações com redes sociais</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.loja.i6" data-i18n-html="1">Páginas + revisões <span class="rosa">ilimitadas</span></span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.loja.i7">Suporte via WhatsApp</span></div>
              </div>
            </div>
          </div>
          <div class="card-acc">
            <button class="card-acc-trigger" onclick="toggleCard(this)">
              <span class="card-acc-label" data-i18n="servicos.acc.recomendado">Recomendado para</span>
              <svg class="card-acc-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
            </button>
            <div class="card-acc-body">
              <div class="card-acc-inner">
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.loja.r1">Lojas</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.loja.r2">Marcas</span></div>
                <div class="card-acc-item"><div class="card-acc-dot"></div><span data-i18n="srv.loja.r3">Produtos digitais</span></div>
              </div>
            </div>
          </div>
          <div class="servico-footer">
            <div>
              <div class="servico-price-label" data-i18n="servicos.preco.label">A partir de</div>
              <div class="servico-price">R$4.000</div>
              <div class="servico-prazo" data-i18n="srv.loja.prazo">Prazo: 30–45 dias úteis</div>
            </div>
            <a href="https://wa.me/5541920058670?text=Ol%C3%A1%2C%20vim%20pelo%20site%20e%20tenho%20interesse%20na%20Loja%20Virtual!" class="btn-servico" target="_blank" data-i18n="servicos.btn.solicitar">Solicitar serviço</a>
          </div>
        </div>

      </div>
      <button class="carousel-btn" id="srv-next" aria-label="Próximo"><svg style="display:block;" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg></button>
    </div>
  </div>
</section>

<script>
function toggleCard(btn) {
  var body = btn.nextElementSibling;
  var isOpen = btn.classList.contains('open');

  // Fecha todos os accordions de OUTROS cards
  document.querySelectorAll('.servico-card').forEach(function(card) {
    if (card !== btn.closest('.servico-card')) {
      card.querySelectorAll('.card-acc-trigger.open').forEach(function(b) {
        b.classList.remove('open');
        b.nextElementSibling.classList.remove('open');
      });
    }
  });

  // Abre ou fecha o accordion clicado
  btn.classList.toggle('open', !isOpen);
  body.classList.toggle('open', !isOpen);
}

(function() {
  var grid = document.querySelector('.servicos-grid');
  document.getElementById('srv-prev').addEventListener('click', function() {
    var card = grid.querySelector('.servico-card');
    grid.scrollBy({ left: -(card.offsetWidth + 1), behavior: 'smooth' });
  });
  document.getElementById('srv-next').addEventListener('click', function() {
    var card = grid.querySelector('.servico-card');
    grid.scrollBy({ left: card.offsetWidth + 1, behavior: 'smooth' });
  });
})();

document.querySelector('.servicos-grid').addEventListener('scroll', function() {
  var hint = document.getElementById('swipeHint');
  if (hint) hint.style.display = 'none';
}, { once: true });
</script>
