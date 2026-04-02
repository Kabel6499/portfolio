<!DOCTYPE html>
<html lang="de" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Florian – Portfolio</title>
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

<div class="hero-content">
        <h1>
          <span data-en="Hi, I'm Florian" data-de="Hallo, ich bin Florian">Hallo, ich bin Florian</span>
          <span class="hero-wave" aria-hidden="true">👋</span>
        </h1>

        <p class="hero-subtitle" data-i18n="hero_subtitle">Developer & more</p>

        <p class="hero-bio" data-i18n="hero_bio">
          Ich habe es mir zur Aufgabe gemacht mit den Anwendungen, welche ich entwickle den Alltag
          von Menschen zu verbessern. Dabei geht es um Web-Apps, iOS-Apps oder auch Shell Anwendungen
        </p>

        <div class="hero-links">
          <!-- GitHub -->
          <a class="hero-link" href="https://github.com/Kabel6499" target="_blank" rel="noopener noreferrer">
            <svg viewBox="0 0 24 24" fill="currentColor" width="15" height="15" aria-hidden="true"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
            <span data-i18n="hero_github">GitHub</span>
          </a>

          <!-- Email -->
          <a class="hero-link" href="mailto:florian@kabel6499.de">
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
              <p class="project-name" data-en="VoxGo" data-de="VoxGo">VoxGo</p>
              <p class="project-short"
                 data-en="Create interactive and unique presentations with e.g. live word clouds or quizzes."
                 data-de="Erstelle interaktive und einzigartige Präsentation mit z.B. Wortwolken oder Quizes.">
                Erstelle interaktive und einzigartige Präsentation mit z.B. Wortwolken oder Quizes.
              </p>
            </div>
            <div class="project-meta">
              <span class="project-year">2026</span>
              <span class="project-chevron" aria-hidden="true">▸</span>
            </div>
          </button>
          <div class="project-more">
            <p class="project-long-desc"
               data-en="Interactive live word clouds and quizzes for unforgettable presentations. Engage your audience in real time directly from the browser."
               data-de="Interaktive Live-Wortwolken und Quizze für unvergessliche Präsentationen">
              Interaktive Live-Wortwolken und Quizze für unvergessliche Präsentationen
            </p>
            <div class="project-tags">
              <span class="tag">NodeJS</span>
              <span class="tag">MariaDB</span>
            </div>
            <div class="project-actions">
              <a href="https://github.com/Kabel6499/VoxGo" target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg viewBox="0 0 24 24" fill="currentColor" width="13" height="13" aria-hidden="true"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                <span data-i18n="project_gh">GitHub</span>
              </a>
              <a href="https://voxgo.de" target="_blank" rel="noopener noreferrer" class="btn-action">
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
              <p class="project-name" data-en="Pelican Panel Installer" data-de="Pelican Panel Installer">Pelican Panel Installer</p>
              <p class="project-short"
                 data-en="Install the Pelican Panel easily via a TUI installer."
                 data-de="Installiere das Pelican einfach über TUI.">
                Installiere das Pelican einfach über TUI.
              </p>
            </div>
            <div class="project-meta">
              <span class="project-year">2026</span>
              <span class="project-chevron" aria-hidden="true">▸</span>
            </div>
          </button>
          <div class="project-more">
            <p class="project-long-desc"
               data-en="Install Pelican Panel and Wings easily and user-friendly via a Whiptail-based TUI. Supports both IP and domain-based installation."
               data-de="Installiere das Pelican Panel und Wings einfach und benutzerfreudnlich über ein Whiptail basiertes TUI. Es unterstützt IP sowie Domain Installation.">
              Installiere das Pelican Panel und Wings einfach und benutzerfreundlich über ein Whiptail basiertes TUI. Es unterstützt IP sowie Domain Installation.
            </p>
            <div class="project-tags">
              <span class="tag">Whiptail</span>
              <span class="tag">MySQL Support</span>
              <span class="tag">Domain or IP Installation</span>
            </div>
            <div class="project-actions">
              <a href="https://github.com/pelican" target="_blank" rel="noopener noreferrer" class="btn-action">
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
              <p class="project-name" data-en="JustCreators" data-de="JustCreators">JustCreators</p>
              <p class="project-short"
                 data-en="JustCreators is the perfect solution to grow on social media as a small creator."
                 data-de="JustCreators ist die perfekte Lösung um auf Social Media als kleiner Creator zu wachsen.">
                JustCreators ist die perfekte Lösung um auf Social Media als kleiner Creator zu wachsen.
              </p>
            </div>
            <div class="project-meta">
              <span class="project-year">Ongoing</span>
              <span class="project-chevron" aria-hidden="true">▸</span>
            </div>
          </button>
          <div class="project-more">
            <p class="project-long-desc"
               data-en="JustCreators is the perfect solution to grow on social media as a small creator. We provide you with a content plan to perfectly fill your channels on Twitch or YouTube."
               data-de="JustCreators ist die perfekte Lösung um auf Social Media als kleiner Creator zu wachsen. Wir stellen dir einen Content Plan um deine Kanäle auf Twitch oder YouTube perfekt zu füllen.">
              JustCreators ist die perfekte Lösung um auf Social Media als kleiner Creator zu wachsen. Wir stellen dir einen Content Plan um deine Kanäle auf Twitch oder YouTube perfekt zu füllen.
            </p>
            <div class="project-tags">
              <span class="tag">Minecraft</span>
              <span class="tag">Paper</span>
              <span class="tag">Discord</span>
            </div>
            <div class="project-actions">
              <a href="https://github.com/just-creators" target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg viewBox="0 0 24 24" fill="currentColor" width="13" height="13" aria-hidden="true"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0 1 12 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                <span data-i18n="project_gh">GitHub</span>
              </a>
              <a href="https://just-creators.de" target="_blank" rel="noopener noreferrer" class="btn-action">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="13" height="13" aria-hidden="true"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                <span data-i18n="project_live">Mehr Infos</span>
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
          <img src="https://cdn.simpleicons.org/python/3776AB" alt="Python" width="30" height="30" loading="lazy">
          <span class="tech-name">Python</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/mariadb/C0765A" alt="MariaDB" width="30" height="30" loading="lazy">
          <span class="tech-name">MariaDB</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/nodedotjs/339933" alt="Node.js" width="30" height="30" loading="lazy">
          <span class="tech-name">Node.js</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/mysql/4479A1" alt="MySQL" width="30" height="30" loading="lazy">
          <span class="tech-name">MySQL</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/ubuntu/E95420" alt="Ubuntu" width="30" height="30" loading="lazy">
          <span class="tech-name">Ubuntu</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/git/F05032" alt="Git" width="30" height="30" loading="lazy">
          <span class="tech-name">Git</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/github/e6edf3" alt="GitHub" width="30" height="30" loading="lazy">
          <span class="tech-name">GitHub</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/insomnia/4000BF" alt="Insomnia" width="30" height="30" loading="lazy">
          <span class="tech-name">Insomnia</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/termius/3D8AF7" alt="Termius" width="30" height="30" loading="lazy">
          <span class="tech-name">Termius</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/wordpress/21759B" alt="WordPress" width="30" height="30" loading="lazy">
          <span class="tech-name">WordPress</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/gnubash/4EAA25" alt="Bash" width="30" height="30" loading="lazy">
          <span class="tech-name">Bash</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/docker/2496ED" alt="Docker" width="30" height="30" loading="lazy">
          <span class="tech-name">Docker</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/linux/FCC624" alt="Linux" width="30" height="30" loading="lazy">
          <span class="tech-name">Linux</span>
        </div>

        <div class="tech-item">
          <img src="https://cdn.simpleicons.org/raspberrypi/A22846" alt="Raspberry Pi" width="30" height="30" loading="lazy">
          <span class="tech-name">Raspberry Pi</span>
        </div>

      </div><!-- /tech-grid -->
    </section>


<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer>
  <div class="wrap">
    <p class="footer-copy">
      Made with <3 by Florian
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
