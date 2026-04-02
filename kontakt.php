<!DOCTYPE html>
<html lang="de" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontakt – Florian</title>
  <meta name="description" content="Kontaktformular – schreib Florian eine Nachricht.">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💻</text></svg>">
</head>
<body>

<!-- Header -->
<header>
  <div class="wrap">
    <div class="header-logo">
      <a href="index.php">Florian</a>
    </div>
    <div class="header-controls">
      <button class="ctrl-btn lang-btn" data-lang="de" title="Deutsch">DE</button>
      <button class="ctrl-btn lang-btn" data-lang="en" title="English">EN</button>
      <div class="ctrl-sep" aria-hidden="true"></div>
      <button class="ctrl-btn" id="theme-btn" aria-label="Toggle theme"></button>
    </div>
  </div>
</header>

<main>
  <div class="wrap">
    <div class="page-header">
      <a class="back-link" href="index.php#contact">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="14" height="14" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
        <span data-en="Back" data-de="Zurück">Zurück</span>
      </a>
      <h1 class="page-title" data-en="Contact" data-de="Kontakt">Kontakt</h1>
    </div>

    <!-- Intro -->
    <p class="contact-intro" style="margin-bottom:2rem;" data-i18n="contact_intro">
      Interesse an einer Zusammenarbeit oder eine Frage? Schreib mir gerne — ich antworte in der Regel innerhalb von 24 Stunden.
    </p>

    <!-- Quick social links -->
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

    <!-- Contact form -->
    <div class="contact-form-wrap" style="margin-top:2rem;">
      <h3 data-i18n="contact_form_title">Nachricht senden</h3>
      <div id="form-alert" class="form-alert" role="alert" aria-live="polite"></div>

      <form class="form" id="contact-form" novalidate>
        <!-- Honeypot spam protection -->
        <div class="hp-field" aria-hidden="true">
          <input type="text" name="website" tabindex="-1" autocomplete="off">
        </div>

        <div class="form-row">
          <div class="form-group">
            <label class="form-label" for="name" data-i18n="label_name">Name</label>
            <input
              class="form-input"
              type="text"
              id="name"
              name="name"
              required
              autocomplete="name"
              data-ph="ph_name"
              placeholder="Dein Name"
            >
          </div>
          <div class="form-group">
            <label class="form-label" for="email" data-i18n="label_email">E-Mail</label>
            <input
              class="form-input"
              type="email"
              id="email"
              name="email"
              required
              autocomplete="email"
              data-ph="ph_email"
              placeholder="deine@email.de"
            >
          </div>
        </div>

        <div class="form-group">
          <label class="form-label" for="subject" data-i18n="label_subject">Betreff</label>
          <input
            class="form-input"
            type="text"
            id="subject"
            name="subject"
            required
            data-ph="ph_subject"
            placeholder="Worum geht es?"
          >
        </div>

        <div class="form-group">
          <label class="form-label" for="message" data-i18n="label_message">Nachricht</label>
          <textarea
            class="form-input form-textarea"
            id="message"
            name="message"
            required
            data-ph="ph_message"
            placeholder="Deine Nachricht…"
          ></textarea>
        </div>

        <button class="btn-submit" type="submit">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="14" height="14" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          <span data-i18n="btn_send">Nachricht senden</span>
        </button>
      </form>
    </div>

  </div><!-- /wrap -->
</main>

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
