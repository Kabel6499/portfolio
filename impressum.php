<!DOCTYPE html>
<html lang="de" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title data-i18n-title="impressum_title">Impressum – Florian</title>
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💻</text></svg>">
</head>
<body>

<!-- Header -->
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
      <a class="back-link" href="/">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="14" height="14" aria-hidden="true"><polyline points="15 18 9 12 15 6"/></svg>
        <span data-en="Back" data-de="Zurück">Zurück</span>
      </a>
      <h1 class="page-title" data-en="Imprint" data-de="Impressum">Impressum</h1>
    </div>

    <div class="page-content">

      <!-- ======================================================
           GERMAN VERSION (de)
           ====================================================== -->
      <div id="content-de">
        <h2>Angaben gemäß § 5 DDG</h2>
        <p>
          Florian Rogosch<br>
          Heugarten 12<br>
          58093 Hagen<br>
          Deutschland
        </p>

        <h2>Kontakt</h2>
        <p>
          E-Mail: <a href="mailto:florian@kabel6499.de">florian@kabel6499.de</a><br>
          <!-- Telefon: +49 (0) XXX XXXXXXX -->
        </p>

        <h2>Verantwortlich für den Inhalt nach § 18 Abs. 2 MStV</h2>
        <p>
          Florian Rogosch<br>
          Heugarten 12<br>
          58093 Hagen<br>
          Deutschland
        </p>

        <h2>Haftungsausschluss</h2>

        <h2>Haftung für Inhalte</h2>
        <p>
          Die Inhalte unserer Seiten wurden mit größter Sorgfalt erstellt. Für die Richtigkeit, Vollständigkeit und Aktualität der Inhalte können wir jedoch keine Gewähr übernehmen.
        </p>

        <h2>Haftung für Links</h2>
        <p>
          Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.
        </p>
      </div>

      <!-- ======================================================
           ENGLISH VERSION (en) – hidden by default, shown by JS
           ====================================================== -->
      <div id="content-en" style="display:none">
        <h2>Information pursuant to § 5 TMG (German Telemedia Act)</h2>
        <p>
          Florian [LAST NAME]<br>
          [STREET AND NUMBER]<br>
          [ZIP CODE] [CITY]<br>
          Germany
        </p>

        <h2>Contact</h2>
        <p>
          Email: <a href="mailto:deine@email.de">deine@email.de</a>
        </p>

        <h2>Responsible for content pursuant to § 55 para. 2 RStV</h2>
        <p>
          Florian [LAST NAME]<br>
          [STREET AND NUMBER]<br>
          [ZIP CODE] [CITY]
        </p>

        <h2>Disclaimer</h2>

        <h2>Liability for Content</h2>
        <p>
          As a service provider, we are responsible for our own content on these pages in accordance with
          § 7 para. 1 TMG. However, according to §§ 8 to 10 TMG, we are not obligated as a service provider
          to monitor transmitted or stored third-party information or to research circumstances that indicate
          illegal activity.
        </p>
        <p>
          Obligations to remove or block the use of information under general laws remain unaffected. However,
          liability in this regard is only possible from the point in time at which a concrete infringement of
          the law becomes known. Upon becoming aware of corresponding infringements, we will immediately remove
          this content.
        </p>

        <h2>Liability for Links</h2>
        <p>
          Our offer contains links to external websites of third parties, on whose contents we have no influence.
          Therefore, we cannot assume any liability for these external contents. The respective provider or
          operator of the pages is always responsible for the contents of the linked pages.
        </p>

        <h2>Copyright</h2>
        <p>
          The content and works created by the site operators on these pages are subject to German copyright law.
          Duplication, processing, distribution, or any form of commercialization of such material beyond the
          scope of the copyright law shall require the prior written consent of its respective author.
        </p>
      </div>

    </div><!-- /page-content -->
  </div><!-- /wrap -->
</main>

<!-- Footer -->
<footer>
  <div class="wrap">
    <p class="footer-copy">
      Made with <3 by Florian
    </p>
    <ul class="footer-links">
      <li><a href="https://kabel6499.de/impressum" target="_blank" rel="noopener noreferrer" data-i18n="footer_impressum">Impressum</a></li>
      <li><a href="datenschutz" data-i18n="footer_privacy">Datenschutz</a></li>
    </ul>
  </div>
</footer>

<script src="js/main.js"></script>
<script>
  // Toggle DE/EN content blocks on this page
  document.addEventListener('DOMContentLoaded', () => {
    function updatePageContent() {
      const l = localStorage.getItem('lang') || 'de';
      const de = document.getElementById('content-de');
      const en = document.getElementById('content-en');
      if (!de || !en) return;
      de.style.display = l === 'de' ? '' : 'none';
      en.style.display = l === 'en' ? '' : 'none';
    }
    updatePageContent();
    // Re-run when language buttons are clicked
    document.querySelectorAll('.lang-btn').forEach(btn => {
      btn.addEventListener('click', () => setTimeout(updatePageContent, 10));
    });
  });
</script>
</body>
</html>
