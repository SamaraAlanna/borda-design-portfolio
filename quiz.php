<section class="quiz" id="quiz">
  <div class="container">
    <div class="quiz-inner">
      <div class="quiz-header">
        <div class="section-label" data-i18n="quiz.label">Quiz</div>
        <h2 class="section-title" data-i18n="quiz.title">Que tal uma ajudinha?</h2>
        <p style="font-size:0.9rem; color:var(--text-muted); margin-top:0.5rem;" data-i18n="quiz.subtitle">Responda 2 perguntas e descubra o serviço ideal para você.</p>
      </div>

      <div class="quiz-progress">
        <div class="quiz-progress-dot active" id="qdot-0"></div>
        <div class="quiz-progress-dot" id="qdot-1"></div>
      </div>

      <!-- STEP 1 -->
      <div class="quiz-step active" id="qstep-0">
        <p class="quiz-question" data-i18n="quiz.q1">O que você precisa?</p>
        <div class="quiz-options">
          <button class="quiz-option" onclick="qAnswer(0, 'marca')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
            </div>
            <span data-i18n="quiz.opt1.1">Criar ou renovar minha marca</span>
          </button>
          <button class="quiz-option" onclick="qAnswer(0, 'site')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
            </div>
            <span data-i18n="quiz.opt1.2">Site</span>
          </button>
          <button class="quiz-option" onclick="qAnswer(0, 'loja')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            </div>
            <span data-i18n="quiz.opt1.3">Loja virtual</span>
          </button>
          <button class="quiz-option" onclick="qAnswer(0, 'suporte')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            </div>
            <span data-i18n="quiz.opt1.4">Suporte para o meu site</span>
          </button>
        </div>
      </div>

      <!-- STEP 2 -->
      <div class="quiz-step" id="qstep-1">
        <p class="quiz-question" data-i18n="quiz.q2">Qual é o seu orçamento?</p>
        <div class="quiz-options">
          <button class="quiz-option" onclick="qAnswer(1, 'baixo')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            <span data-i18n="quiz.opt2.1">Até R$1.000</span>
          </button>
          <button class="quiz-option" onclick="qAnswer(1, 'medio')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            <span data-i18n="quiz.opt2.2">Entre R$1.000 e R$3.000</span>
          </button>
          <button class="quiz-option" onclick="qAnswer(1, 'alto')">
            <div class="quiz-option-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
            </div>
            <span data-i18n="quiz.opt2.3">Acima de R$3.000</span>
          </button>
        </div>
      </div>

      <!-- RESULTADO -->
      <div class="quiz-result" id="qresult">
        <p class="quiz-result-title" id="qresult-title"></p>
        <div id="qresult-cards"></div>
        <div class="result-actions">
          <a href="#servicos" class="btn-quiz-primary">
            <span data-i18n="quiz.btn.info">Ver mais informações</span>
          </a>
          <button class="btn-restart" onclick="qRestart()" data-i18n="quiz.btn.restart">Refazer o quiz</button>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
var qAnswers = {};

var qServices = {
  marca: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>',
    name: 'Identidade Visual',
    price: 'A partir de R$400 · 10–14 dias úteis',
    desc: 'Personalidade e consistência para sua marca em todos os pontos de contato com o público.'
  },
  acessivel: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
    name: 'Site Acessível',
    price: 'A partir de R$800 · 7–10 dias úteis',
    desc: 'Site profissional desenvolvido em plataforma visual, com design personalizado e qualidade sem grande investimento.'
  },
  landing: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>',
    name: 'Landing Page',
    price: 'A partir de R$1.200 · 15–20 dias úteis',
    desc: 'Página focada em converter visitantes em clientes, com design estratégico, código otimizado e experiência pensada para resultados.'
  },
  personalizado: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
    name: 'Site Personalizado',
    price: 'A partir de R$6.000 · 30–60 dias úteis',
    desc: 'Solução completa sob medida para o seu negócio, desenvolvida do zero com foco em estratégia e escalabilidade.'
  },
  loja: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>',
    name: 'Loja Virtual',
    price: 'A partir de R$4.000 · 30–45 dias úteis',
    desc: 'E-commerce completo para vender online com design estratégico, experiência de compra fluida e credibilidade.'
  },
  suporte: {
    icon: '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
    name: 'Suporte Mensal',
    price: 'R$400/mês · Contrato mensal renovável',
    desc: 'Mantenha seu site sempre atualizado e funcionando. Atualizações, ajustes e correções sem preocupação.'
  }
};

function qAnswer(step, value) {
  qAnswers[step] = value;

  var opts = document.querySelectorAll('#qstep-' + step + ' .quiz-option');
  opts.forEach(function(o) { o.classList.remove('selected'); });
  event.currentTarget.classList.add('selected');

  setTimeout(function() {
    if (step === 0 && value === 'marca') {
      qShowResult([qServices.marca], 'Encontramos o serviço ideal para você!', null);
    } else if (step === 0 && value === 'suporte') {
      qShowResult([qServices.suporte], 'Encontramos o serviço ideal para você!', null);
    } else if (step === 0) {
      qGoToStep(1);
    } else {
      var need = qAnswers[0];
      var budget = value;
      var result = [];
      var note = null;

      if (need === 'site') {
        if (budget === 'baixo') {
          result = [qServices.acessivel];
        } else if (budget === 'medio') {
          result = [qServices.landing, qServices.acessivel];
        } else {
          result = [qServices.personalizado];
        }
      } else if (need === 'loja') {
        if (budget === 'baixo' || budget === 'medio') {
          result = [qServices.acessivel];
          note = 'A Loja Virtual começa em R$4.000. O Site Acessível é a opção mais próxima dentro do seu orçamento atual.';
        } else {
          result = [qServices.loja];
        }
      }

      qShowResult(result, result.length > 1 ? 'Encontramos mais de uma opção para você!' : 'Encontramos o serviço ideal para você!', note);
    }
  }, 300);
}

function qGoToStep(step) {
  document.querySelectorAll('.quiz-step').forEach(function(s) { s.classList.remove('active'); });
  document.getElementById('qstep-' + step).classList.add('active');
  document.querySelectorAll('.quiz-progress-dot').forEach(function(d, i) {
    d.classList.remove('active', 'done');
    if (i < step) d.classList.add('done');
    if (i === step) d.classList.add('active');
  });
}

function qShowResult(items, title, note) {
  document.querySelectorAll('.quiz-step').forEach(function(s) { s.classList.remove('active'); });
  document.querySelectorAll('.quiz-progress-dot').forEach(function(d) { d.classList.remove('active'); d.classList.add('done'); });
  document.getElementById('qresult-title').textContent = title;

  var html = '';
  items.forEach(function(s) {
    html += '<div class="result-card"><div class="result-card-top"><div class="result-icon">' + s.icon + '</div><div><p class="result-name">' + s.name + '</p><span class="result-price">' + s.price + '</span></div></div><p class="result-desc">' + s.desc + '</p></div>';
  });
  if (note) {
    html += '<div class="result-note">💡 ' + note + '</div>';
  }
  document.getElementById('qresult-cards').innerHTML = html;
  document.getElementById('qresult').classList.add('active');
}

function qRestart() {
  qAnswers = {};
  document.getElementById('qresult').classList.remove('active');
  document.querySelectorAll('.quiz-option').forEach(function(o) { o.classList.remove('selected'); });
  qGoToStep(0);
}
</script>
