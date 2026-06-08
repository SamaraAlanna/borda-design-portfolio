# Borda Design — Portfólio Web

Site institucional e portfólio do estúdio Borda Design, desenvolvido do zero por Samara Alanna.

🔗 [bordadesign.com.br](https://bordadesign.com.br)

---

## Sobre o projeto

Este projeto foi construído como portfólio pessoal e vitrine de serviços do estúdio Borda Design. O objetivo era criar uma landing page profissional que comunicasse identidade de marca, serviços e processo de forma clara, estratégica e com boa experiência de usuário.

Todo o processo passou pelo Figma antes do código — desde o sitemap até o design system.

---

## Stack

- **HTML5** — estrutura semântica
- **CSS3** — variáveis nativas, Flexbox, Grid, animações
- **JavaScript Vanilla (ES6+)** — sem frameworks
- **PHP** — estrutura modular com includes por seção
- **GitHub Actions** — deploy automatizado via FTP

---

## Estrutura do projeto

```
borda-design-portfolio/
├── index.php           # Entrada principal
├── header.php          # Nav com tema dark/light, i18n e menu mobile
├── hero.php            # Seção hero com animações de entrada
├── marquee.php         # Ticker de skills
├── sobre.php           # Bio e cards de áreas
├── projetos.php        # Grid de projetos
├── quiz.php            # Quiz de recomendação de serviços
├── servicos.php        # Carrossel com accordions por card
├── faq.php             # FAQ agrupado por categoria
├── cta.php             # Seção de contato
├── footer.php          # Footer + scripts globais
├── style.css           # Design system centralizado
├── translations.js     # Sistema de i18n PT/EN
├── favicon.png         # Favicon 512px
├── robots.txt          # Configuração de indexação
├── sitemap.xml         # Sitemap para SEO
├── .htaccess           # Redirect HTTPS + portfoliosamara → bordadesign
└── uploads/            # Imagens e arquivos
```

---

## Funcionalidades

**Interatividade**
- Quiz interativo com lógica de recomendação de serviços baseada em perfil e orçamento
- Carrossel horizontal com scroll snap e indicador de swipe no mobile
- Accordions animados dentro dos cards de serviços
- FAQ agrupado por categoria com accordions

**Tema e idioma**
- Dark/light mode com persistência via `localStorage`
- Internacionalização PT/EN em tempo real sem reload de página
- CV para download que alterna automaticamente conforme o idioma

**Animações e efeitos**
- Scroll reveal com `IntersectionObserver`
- Efeito tilt 3D com rastreamento de cursor via `requestAnimationFrame`
- Grain texture em SVG para profundidade visual
- Animações de entrada no hero

**Mobile**
- Layout totalmente responsivo (desktop, tablet e mobile)
- Menu sanduíche com dropdown fixo sobreposto ao conteúdo
- Scroll snap no carrossel de serviços
- Testado em iPhone 11

**WhatsApp**
- Botão flutuante com mensagem pré-preenchida
- Botões de serviço com mensagens específicas por tipo de serviço

**SEO**
- Meta tags completas com Open Graph e Twitter Cards
- Schema JSON-LD (Organization e WebSite)
- Google Search Console verificado e indexado
- Google Business Profile configurado
- sitemap.xml e robots.txt

---

## Design System

Todas as variáveis estão centralizadas no `style.css`:

```css
:root {
  /* Tema dark (padrão) */
  --bg:            #0c0c0b;
  --bg2:           #111110;
  --bg3:           #171716;
  --text:          #f0ede8;
  --text-muted:    #8a8680;
  --text-dim:      #4a4845;
  --accent:        #e6b7d3;

  /* Tipografia */
  --font:          'DM Sans', sans-serif;
  --text-xs:       0.75rem;
  --text-sm:       0.82rem;
  --text-base:     0.92rem;
  --text-md:       1.05rem;
  --text-lg:       1.15rem;

  /* Layout */
  --radius:        12px;
  --radius-sm:     8px;
}

[data-theme="light"] {
  --bg:            #f5f2ee;
  --text:          #1a1815;
  --accent:        #c4799a;
  /* ... */
}
```

---

## Deploy

O deploy é feito automaticamente via GitHub Actions a cada push na branch `main`, com integração FTP direta para o servidor na Hostgator.

```yaml
# .github/workflows/deploy.yml
on:
  push:
    branches: [main]
```

---

## Contato

**Samara Alanna** — UX/UI Designer e Desenvolvedora Full Stack

- [bordadesign.com.br](https://bordadesign.com.br)
- [linkedin.com/in/samaraalanna](https://www.linkedin.com/in/samaraalanna)
- [behance.net/samaraalanna](https://www.behance.net/samaraalanna)
- [instagram.com/bordadesignn](https://www.instagram.com/bordadesignn)
- [WhatsApp](https://wa.me/5541920058670)
