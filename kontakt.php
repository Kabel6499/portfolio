<?php
declare(strict_types=1);

$contactApiBearer = '';
$envFile = '/root/portfolio/.env';

if (file_exists($envFile)) {
  foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
    $line = trim($line);
    if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
      continue;
    }

    [$key, $value] = explode('=', $line, 2);
    if (trim($key) !== 'CONTACT_API_BEARER') {
      continue;
    }

    $value = trim($value);
    if (
      (str_starts_with($value, '"') && str_ends_with($value, '"')) ||
      (str_starts_with($value, "'") && str_ends_with($value, "'"))
    ) {
      $value = substr($value, 1, -1);
    }

    $contactApiBearer = $value;
    break;
  }
}
?>
<!DOCTYPE html>
<html lang="de" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontakt – Florian</title>
  <meta name="description" content="Kontaktformular – schreib Florian eine Nachricht.">
  <meta name="contact-api-bearer" content="<?php echo htmlspecialchars($contactApiBearer, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💻</text></svg>">
</head>
<body>


<header>
  <div class="wrap">
    <div class="header-logo">
      <a href="/">Florian</a>
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
      <a class="back-link" href="/#contact">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="14" height="14" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
        <span data-en="Back" data-de="Zurück">Zurück</span>
      </a>
      <h1 class="page-title" data-en="Contact" data-de="Kontakt">Kontakt</h1>
    </div>

    
    <p class="contact-intro" style="margin-bottom:2rem;" data-i18n="contact_intro">
      Du hast eine Frage an mich oder möchtest mich wegen einer meiner Projekte kontaktieren, dann kannst du das hier tun!
    </p>

    
    <div class="contact-form-wrap" style="margin-top:2rem;">
      <h3 data-i18n="contact_form_title">Nachricht senden</h3>
      <div id="form-alert" class="form-alert" role="alert" aria-live="polite"></div>

      <form class="form" id="contact-form" novalidate>
        
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

  </div>
</main>

<footer>
  <div class="wrap">
    <p class="footer-copy">
      Made with <3 by Florian
    <ul class="footer-links">
      <li><a href="https://kabel6499.de/impressum" data-i18n="footer_impressum">Impressum</a></li>
      <li><a href="datenschutz" data-i18n="footer_privacy">Datenschutz</a></li>
    </ul>
  </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
