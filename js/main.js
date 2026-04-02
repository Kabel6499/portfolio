/* ================================================
   main.js – Portfolio interactivity
   Theme, Language, Projects, Contact Form
   ================================================ */

'use strict';

/* ================================================================
   ACCENT COLOR — change this one value to update everything:
   CSS variables (buttons, borders, hover…) + all tech-stack icons
   ================================================================ */
const ACCENT = '458ee8';

function applyAccent() {
  // Update CSS custom property on :root (overrides both dark & light theme values)
  document.documentElement.style.setProperty('--accent', '#' + ACCENT);
}

/* ---- Translations -------------------------------------------- */
const translations = {
  en: {
    hero_title:         "Hi, I'm Florian",
    hero_subtitle:      "Developer & more",
    hero_bio:           "I have made it my mission to improve people's everyday lives with the applications I develop — whether web apps, iOS apps, or shell applications.",
    hero_github:        "GitHub",
    hero_linkedin:      "LinkedIn",
    hero_email:         "Email",
    hero_cv:            "Download CV",

    section_projects:   "Projects",
    section_stack:      "Tech Stack",
    section_contact:    "Contact",

    project_more:       "Details",
    project_gh:         "GitHub",
    project_live:       "Live Preview",

    contact_intro:      "Do you have a question or want to reach me about one of my projects? You can do that right here.",
    contact_form_title: "Send a message",

    label_name:         "Name",
    label_email:        "Email",
    label_subject:      "Subject",
    label_message:      "Message",

    ph_name:            "Your name",
    ph_email:           "your@email.com",
    ph_subject:         "What's this about?",
    ph_message:         "Your message…",

    btn_send:           "Send Message",
    sending:            "Sending…",
    success_msg:        "Message sent! I'll get back to you soon. ✓",
    error_msg:          "Something went wrong. Please try again or email me directly.",

    footer_copy:        "Made with <3 by Florian",
    footer_impressum:   "Imprint",
    footer_privacy:     "Privacy Policy",
  },

  de: {
    hero_title:         "Hallo, ich bin Florian",
    hero_subtitle:      "Developer & mehr",
    hero_bio:           "Ich habe es mir zur Aufgabe gemacht mit den Anwendungen, welche ich entwickle den Alltag von Menschen zu verbessern. Dabei geht es um Web-Apps, iOS-Apps oder auch Shell Anwendungen",
    hero_github:        "GitHub",
    hero_email:         "E-Mail",
    hero_cv:            "CV herunterladen",

    section_projects:   "Projekte",
    section_stack:      "Tech Stack",
    section_contact:    "Kontakt",

    project_more:       "Details",
    project_gh:         "GitHub",
    project_live:       "Live-Vorschau",

    contact_intro:      "Du hast eine Frage an mich oder möchtest mich wegen einer meiner Projekte kontaktieren, dann kannst du das hier tun",
    contact_form_title: "Nachricht senden",

    label_name:         "Name",
    label_email:        "E-Mail",
    label_subject:      "Betreff",
    label_message:      "Nachricht",

    ph_name:            "Dein Name",
    ph_email:           "deine@email.de",
    ph_subject:         "Worum geht es?",
    ph_message:         "Deine Nachricht…",

    btn_send:           "Nachricht senden",
    sending:            "Wird gesendet…",
    success_msg:        "Nachricht gesendet! Ich melde mich bald bei dir. ✓",
    error_msg:          "Etwas ist schiefgelaufen. Bitte versuche es erneut oder schreib mir direkt eine E-Mail.",

    footer_copy:        "Made with <3 by Florian",
    footer_impressum:   "Impressum",
    footer_privacy:     "Datenschutz",
  }
};

/* ---- State ---------------------------------------------------- */
let lang  = localStorage.getItem('lang')  || 'de';
let theme = localStorage.getItem('theme') || 'dark';

/* ---- SVG Icons ------------------------------------------------ */
const icons = {
  moon: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="13" height="13" aria-hidden="true"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>`,
  sun:  `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="13" height="13" aria-hidden="true"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>`,
  send: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="14" height="14" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>`,
};

/* ---- Theme ---------------------------------------------------- */
function applyTheme(t) {
  theme = t;
  document.documentElement.setAttribute('data-theme', t);
  localStorage.setItem('theme', t);
  updateThemeBtn();
}

function updateThemeBtn() {
  const btn = document.getElementById('theme-btn');
  if (!btn) return;
  const isDark = theme === 'dark';
  btn.innerHTML = isDark
    ? `${icons.moon} <span>Light</span>`
    : `${icons.sun}  <span>Dark</span>`;
  btn.title = isDark ? 'Switch to light mode' : 'Switch to dark mode';
}

/* ---- Language ------------------------------------------------- */
function applyLang(l) {
  lang = l;
  document.documentElement.lang = l;
  localStorage.setItem('lang', l);

  const tr = translations[l];

  /* data-i18n elements */
  document.querySelectorAll('[data-i18n]').forEach(el => {
    const key = el.dataset.i18n;
    if (tr[key] === undefined) return;
    el.textContent = tr[key];
  });

  /* placeholder inputs */
  document.querySelectorAll('[data-ph]').forEach(el => {
    const key = el.dataset.ph;
    if (tr[key] !== undefined) el.placeholder = tr[key];
  });

  /* bilingual content via data-en / data-de */
  document.querySelectorAll('[data-en]').forEach(el => {
    el.textContent = el.dataset[l] || el.dataset.en;
  });

  /* language buttons */
  document.querySelectorAll('.lang-btn').forEach(btn => {
    btn.classList.toggle('active', btn.dataset.lang === l);
  });

  /* update theme button label language too */
  updateThemeBtn();
}

/* ---- Projects ------------------------------------------------- */
function toggleProject(card) {
  const isOpen = card.classList.contains('open');
  document.querySelectorAll('.project-card.open').forEach(c => c.classList.remove('open'));
  if (!isOpen) card.classList.add('open');
}

// expose globally for onclick handlers in HTML
window.toggleProject = toggleProject;

/* ---- Contact Form -------------------------------------------- */
function initContactForm() {
  const form = document.getElementById('contact-form');
  if (!form) return;

  form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const btn   = form.querySelector('.btn-submit');
    const alert = document.getElementById('form-alert');
    const tr    = translations[lang];

    btn.disabled    = true;
    btn.textContent = tr.sending;
    alert.className = 'form-alert';

    try {
      const res  = await fetch('contact.php', { method: 'POST', body: new FormData(form) });
      const json = await res.json();

      if (json.success) {
        alert.className   = 'form-alert success';
        alert.textContent = tr.success_msg;
        form.reset();
      } else {
        throw new Error(json.message || '');
      }
    } catch (err) {
      alert.className   = 'form-alert error';
      alert.textContent = err.message || translations[lang].error_msg;
    } finally {
      btn.disabled  = false;
      btn.innerHTML = `${icons.send} <span data-i18n="btn_send">${translations[lang].btn_send}</span>`;
    }
  });
}

/* ---- Scroll Animations --------------------------------------- */
function initFadeIns() {
  const obs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.08 });

  document.querySelectorAll('.fade-in').forEach(el => obs.observe(el));
}

/* ---- Bootstrap ----------------------------------------------- */
document.addEventListener('DOMContentLoaded', () => {
  /* apply accent color, theme and language */
  applyAccent();
  applyTheme(theme);
  applyLang(lang);

  /* theme toggle */
  const themeBtn = document.getElementById('theme-btn');
  if (themeBtn) {
    themeBtn.addEventListener('click', () => applyTheme(theme === 'dark' ? 'light' : 'dark'));
  }

  /* language buttons */
  document.querySelectorAll('.lang-btn').forEach(btn => {
    btn.addEventListener('click', () => applyLang(btn.dataset.lang));
  });

  initContactForm();
  initFadeIns();
});
