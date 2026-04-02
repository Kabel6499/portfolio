<!DOCTYPE html>
<html lang="de" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Florian – Web Developer</title>
  <meta name="description" content="Portfolio von Florian – Full-Stack Webentwickler aus Deutschland.">
  <meta name="author" content="Florian">
  <meta property="og:title" content="Florian – Web Developer">
  <meta property="og:description" content="Full-Stack Webentwickler – saubere, performante Webanwendungen.">
  <meta property="og:type" content="website">
  <link rel="stylesheet" href="css/style.css">
  <!-- Minimal inline favicon -->
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💻</text></svg>">
</head>
<body>

<!-- ============================================================
     HEADER
     ============================================================ -->
<header>
  <div class="wrap">
    <div class="header-logo">
      <a href="#home">Florian</a>
    </div>
    <div class="header-controls">
      <!-- Language toggle -->
      <button class="ctrl-btn lang-btn" data-lang="de" title="Deutsch">DE</button>
      <button class="ctrl-btn lang-btn" data-lang="en" title="English">EN</button>

      <div class="ctrl-sep" aria-hidden="true"></div>

      <!-- Theme toggle (populated by JS) -->
      <button class="ctrl-btn" id="theme-btn" aria-label="Toggle theme"></button>
    </div>
  </div>
</header>

<!-- ============================================================
     MAIN
     ============================================================ -->
<main>
  <div class="wrap">

    <!-- --------------------------------------------------------
         HERO
         -------------------------------------------------------- -->
    <section class="hero fade-in" id="home" aria-label="Introduction">

      <!-- Replace emoji with <img src="assets/avatar.jpg" alt="Florian"> once you have a photo -->
      <div class="hero-avatar" aria-hidden="true">👨‍💻</div>

      <div class="hero-content">
        <h1>
          <span data-en="Hi, I'm Florian" data-de="Hallo, ich bin Florian">Hallo, ich bin Florian</span>
          <span class="hero-wave" aria-hidden="true">👋</span>
        </h1>

        <p class="hero-subtitle" data-i18n="hero_subtitle">Full-Stack Webentwickler</p>

        <p class="hero-bio" data-i18n="hero_bio">
          Ich entwickle saubere, performante Webanwendungen — vom Konzept bis zum Deployment.
          Ansässig in Deutschland, offen für Freelance-Projekte und Kooperationen.
        </p>

        <div class="hero-links">
          <!-- GitHub -->
          <a class="hero-link" href="https://github.com/DEIN-USERNAME" target="_blank" rel="noopener noreferrer">
            <svg viewBox="0 0 24 24" fill="currentColor" width="15" height="15" aria-hidden="true"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
            <span data-i18n="hero_github">GitHub</span>
          </a>

          <!-- Email -->
          <a class="hero-link" href="mailto:deine@email.de">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="15" height="15" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            <span data-i18n="hero_email">E-Mail</span>
          </a>

        </div>
      </div>
    </section>

    <!-- --------------------------------------------------------
         PROJECTS
         -------------------------------------------------------- -->
    <section id="projects" class="fade-in" aria-label="Projects">
      <p class="section-label" data-i18n="section_projects">Projekte</p>

      <div class="projects-list">

        <!-- Project 1 -->
        <div class="project-card">
          <button class="project-trigger" onclick="toggleProject(this.closest('.project-card'))" aria-expanded="false">
            <div class="project-info">
              <p class="project-name" data-en="Portfolio Website" data-de="Portfolio-Website">Portfolio-Website</p>
              <p class="project-short"
                 data-en="Personal portfolio built with PHP, vanilla CSS and JavaScript."
                 data-de="Persönliches Portfolio gebaut mit PHP, reinem CSS und JavaScript.">
                Persönliches Portfolio gebaut mit PHP, reinem CSS und JavaScript.
              </p>
            </div>
            <div class="project-meta">
              <span class="project-year">2025</span>
              <span class="project-chevron" aria-hidden="true">▸</span>
            </div>
          </button>
          <div class="project-more">
            <p class="project-long-desc"
               data-en="A clean, minimal portfolio designed after victrme's portfolio. Features dark mode, an EN/DE language switcher, a contact form powered by PHPMailer, as well as a legal imprint and privacy policy — all without any frontend framework."
               data-de="Ein sauberes, minimalistisches Portfolio nach dem Vorbild von victrme. Enthält Darkmode, einen EN/DE-Sprachumschalter, ein Kontaktformular via PHPMailer, Impressum und Datenschutz — komplett ohne Frontend-Framework.">
              Ein sauberes, minimalistisches Portfolio nach dem Vorbild von victrme. Enthält Darkmode, einen EN/DE-Sprachumschalter, ein Kontaktformular via PHPMailer, Impressum und Datenschutz — komplett ohne Frontend-Framework.
            </p>
            <div class="project-tags">
              <span class="tag">HTML</span>
              <span class="tag">CSS</span>
              <span class="tag">JavaScript</span>
              <span class="tag">PHP</span>
              <span class="tag">PHPMailer</span>
            </div>
            <div class="project-actions">
              <a href="https://github.com/DEIN-USERNAME/portfolio" target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg viewBox="0 0 24 24" fill="currentColor" width="13" height="13" aria-hidden="true"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                <span data-i18n="project_gh">GitHub</span>
              </a>
              <a href="https://DEINE-DOMAIN.de" target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="13" height="13" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                <span data-i18n="project_live">Live-Vorschau</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="project-card">
          <button class="project-trigger" onclick="toggleProject(this.closest('.project-card'))" aria-expanded="false">
            <div class="project-info">
              <p class="project-name" data-en="E-Commerce Platform" data-de="E-Commerce-Plattform">E-Commerce-Plattform</p>
              <p class="project-short"
                 data-en="Full-stack online shop with cart, checkout and admin panel."
                 data-de="Full-Stack-Online-Shop mit Warenkorb, Checkout und Admin-Panel.">
                Full-Stack-Online-Shop mit Warenkorb, Checkout und Admin-Panel.
              </p>
            </div>
            <div class="project-meta">
              <span class="project-year">2024</span>
              <span class="project-chevron" aria-hidden="true">▸</span>
            </div>
          </button>
          <div class="project-more">
            <p class="project-long-desc"
               data-en="A complete e-commerce solution built with PHP and MySQL. Features include user authentication, a shopping cart, Stripe payment integration, an order management system and a responsive admin dashboard."
               data-de="Eine vollständige E-Commerce-Lösung mit PHP und MySQL. Enthält Benutzerauthentifizierung, Warenkorb, Stripe-Zahlungsintegration, Auftragsverwaltung und ein responsives Admin-Dashboard.">
              Eine vollständige E-Commerce-Lösung mit PHP und MySQL. Enthält Benutzerauthentifizierung, Warenkorb, Stripe-Zahlungsintegration, Auftragsverwaltung und ein responsives Admin-Dashboard.
            </p>
            <div class="project-tags">
              <span class="tag">PHP</span>
              <span class="tag">MySQL</span>
              <span class="tag">JavaScript</span>
              <span class="tag">CSS</span>
              <span class="tag">Stripe</span>
            </div>
            <div class="project-actions">
              <a href="https://github.com/DEIN-USERNAME/shop" target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg viewBox="0 0 24 24" fill="currentColor" width="13" height="13" aria-hidden="true"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                <span data-i18n="project_gh">GitHub</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="project-card">
          <button class="project-trigger" onclick="toggleProject(this.closest('.project-card'))" aria-expanded="false">
            <div class="project-info">
              <p class="project-name" data-en="Task Manager App" data-de="Aufgaben-Manager">Aufgaben-Manager</p>
              <p class="project-short"
                 data-en="React-based task management app with drag-and-drop and real-time sync."
                 data-de="React-basierte Aufgaben-App mit Drag-and-Drop und Echtzeit-Synchronisierung.">
                React-basierte Aufgaben-App mit Drag-and-Drop und Echtzeit-Synchronisierung.
              </p>
            </div>
            <div class="project-meta">
              <span class="project-year">2024</span>
              <span class="project-chevron" aria-hidden="true">▸</span>
            </div>
          </button>
          <div class="project-more">
            <p class="project-long-desc"
               data-en="A productivity app built with React and TypeScript. Users can create boards, add tasks, drag cards between columns and collaborate in real time via WebSocket. Data is persisted in a Node.js + PostgreSQL backend."
               data-de="Eine Produktivitäts-App mit React und TypeScript. Nutzer können Boards erstellen, Aufgaben anlegen, Karten per Drag-and-Drop verschieben und in Echtzeit via WebSocket zusammenarbeiten. Die Daten werden in einem Node.js- + PostgreSQL-Backend gespeichert.">
              Eine Produktivitäts-App mit React und TypeScript. Nutzer können Boards erstellen, Aufgaben anlegen, Karten per Drag-and-Drop verschieben und in Echtzeit via WebSocket zusammenarbeiten.
            </p>
            <div class="project-tags">
              <span class="tag">React</span>
              <span class="tag">TypeScript</span>
              <span class="tag">Node.js</span>
              <span class="tag">PostgreSQL</span>
              <span class="tag">WebSocket</span>
            </div>
            <div class="project-actions">
              <a href="https://github.com/DEIN-USERNAME/taskmanager" target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg viewBox="0 0 24 24" fill="currentColor" width="13" height="13" aria-hidden="true"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                <span data-i18n="project_gh">GitHub</span>
              </a>
              <a href="https://tasks.DEINE-DOMAIN.de" target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="13" height="13" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                <span data-i18n="project_live">Live-Vorschau</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Project 4 -->
        <div class="project-card">
          <button class="project-trigger" onclick="toggleProject(this.closest('.project-card'))" aria-expanded="false">
            <div class="project-info">
              <p class="project-name" data-en="Weather Dashboard" data-de="Wetter-Dashboard">Wetter-Dashboard</p>
              <p class="project-short"
                 data-en="Weather app consuming OpenWeatherMap API with 5-day forecast."
                 data-de="Wetter-App mit OpenWeatherMap-API und 5-Tage-Vorhersage.">
                Wetter-App mit OpenWeatherMap-API und 5-Tage-Vorhersage.
              </p>
            </div>
            <div class="project-meta">
              <span class="project-year">2023</span>
              <span class="project-chevron" aria-hidden="true">▸</span>
            </div>
          </button>
          <div class="project-more">
            <p class="project-long-desc"
               data-en="A weather web app using the OpenWeatherMap API. Shows current conditions, hourly and 5-day forecasts, humidity and wind speed. Search by city or use geolocation. Built with vanilla JS, no frameworks."
               data-de="Eine Wetter-Webanwendung mit der OpenWeatherMap-API. Zeigt aktuelle Bedingungen, stündliche und 5-Tage-Vorhersagen, Luftfeuchtigkeit und Windgeschwindigkeit. Suche nach Stadt oder per Geolocation. Gebaut mit reinem JS ohne Frameworks.">
              Eine Wetter-Webanwendung mit der OpenWeatherMap-API. Zeigt aktuelle Bedingungen, 5-Tage-Vorhersagen, Luftfeuchtigkeit und Windgeschwindigkeit.
            </p>
            <div class="project-tags">
              <span class="tag">JavaScript</span>
              <span class="tag">CSS</span>
              <span class="tag">REST API</span>
              <span class="tag">Geolocation</span>
            </div>
            <div class="project-actions">
              <a href="https://github.com/DEIN-USERNAME/weather" target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg viewBox="0 0 24 24" fill="currentColor" width="13" height="13" aria-hidden="true"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                <span data-i18n="project_gh">GitHub</span>
              </a>
              <a href="https://weather.DEINE-DOMAIN.de" target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="13" height="13" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                <span data-i18n="project_live">Live-Vorschau</span>
              </a>
            </div>
          </div>
        </div>

      </div><!-- /projects-list -->
    </section>

    <!-- --------------------------------------------------------
         TECH STACK
         -------------------------------------------------------- -->
    <section id="stack" class="fade-in" aria-label="Tech Stack">
      <p class="section-label" data-i18n="section_stack">Tech Stack</p>

      <div class="tech-grid">
        <!-- Using Simple Icons CDN: https://simpleicons.org -->

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/html5/e34f26" alt="HTML5" width="30" height="30" loading="lazy">
          <span class="tech-name">HTML5</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/css3/1572b6" alt="CSS3" width="30" height="30" loading="lazy">
          <span class="tech-name">CSS3</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/javascript/f7df1e" alt="JavaScript" width="30" height="30" loading="lazy">
          <span class="tech-name">JavaScript</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/typescript/3178c6" alt="TypeScript" width="30" height="30" loading="lazy">
          <span class="tech-name">TypeScript</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/react/61dafb" alt="React" width="30" height="30" loading="lazy">
          <span class="tech-name">React</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/php/777bb4" alt="PHP" width="30" height="30" loading="lazy">
          <span class="tech-name">PHP</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/nodedotjs/339933" alt="Node.js" width="30" height="30" loading="lazy">
          <span class="tech-name">Node.js</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/mysql/4479a1" alt="MySQL" width="30" height="30" loading="lazy">
          <span class="tech-name">MySQL</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/postgresql/4169e1" alt="PostgreSQL" width="30" height="30" loading="lazy">
          <span class="tech-name">PostgreSQL</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/git/f05032" alt="Git" width="30" height="30" loading="lazy">
          <span class="tech-name">Git</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/github/cccccc" alt="GitHub" width="30" height="30" loading="lazy">
          <span class="tech-name">GitHub</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/docker/2496ed" alt="Docker" width="30" height="30" loading="lazy">
          <span class="tech-name">Docker</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/linux/fcc624" alt="Linux" width="30" height="30" loading="lazy">
          <span class="tech-name">Linux</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/figma/f24e1e" alt="Figma" width="30" height="30" loading="lazy">
          <span class="tech-name">Figma</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/visualstudiocode/007acc" alt="VS Code" width="30" height="30" loading="lazy">
          <span class="tech-name">VS Code</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/composer/885630" alt="Composer" width="30" height="30" loading="lazy">
          <span class="tech-name">Composer</span>
        </div>

      </div><!-- /tech-grid -->
    </section>

    <!-- --------------------------------------------------------
         CONTACT
         -------------------------------------------------------- -->
    <section id="contact" class="fade-in" aria-label="Contact">
      <p class="section-label" data-i18n="section_contact">Kontakt</p>

      <p class="contact-intro" data-i18n="contact_intro">
        Interesse an einer Zusammenarbeit oder eine Frage? Schreib mir gerne — ich antworte in der Regel innerhalb von 24 Stunden.
      </p>

      <ul class="contact-socials">
        <li>
          <a href="mailto:deine@email.de">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="15" height="15" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            deine@email.de
          </a>
        </li>
        <li>
          <a href="https://github.com/DEIN-USERNAME" target="_blank" rel="noopener noreferrer">
            <svg viewBox="0 0 24 24" fill="currentColor" width="15" height="15" aria-hidden="true"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
            GitHub
          </a>
        </li>
      </ul>

      <a class="btn-action" href="kontakt.php" style="display:inline-flex;margin-top:0.5rem;font-size:0.9em;padding:0.55rem 1.2rem;">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="14" height="14" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
        <span data-en="Open contact form" data-de="Kontaktformular öffnen">Kontaktformular öffnen</span>
      </a>
    </section>

  </div><!-- /wrap -->
</main>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer>
  <div class="wrap">
    <p class="footer-copy">
      Made with ♥ by Florian &nbsp;&middot;&nbsp;
      <img src="https://cdn.simpleicons.org/visualstudiocode/007acc" alt="VS Code" width="13" height="13" style="display:inline;vertical-align:middle;margin-top:-2px">
      VS Code
    </p>
    <ul class="footer-links">
      <li><a href="https://kabel6499.de/impressum" target="_blank" rel="noopener noreferrer" data-i18n="footer_impressum">Impressum</a></li>
      <li><a href="datenschutz.php" data-i18n="footer_privacy">Datenschutz</a></li>
    </ul>
  </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
