<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Our Services | VOLT MASTER Engineering</title>
  <meta name="description"
    content="Professional electrical engineering services in the UK. We handle residential, commercial, and industrial projects with 24/7 emergency support.">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=DM+Sans:wght@300;400;500;600&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
    rel="stylesheet" />
  <style>
    :root {
      --gold: #f5a100;
      --gold-light: #ffc44d;
      --gold-dark: #c47d00;
      --black: #0a0a0a;
      --dark: #111111;
      --dark2: #1a1a1a;
      --white: #ffffff;
      --offwhite: #f5f2ee;
      --grey: #f0ede8;
      --text-dark: #1a1a1a;
      --text-muted: #6b6b6b;
      --text-light: #e8e4df;
      --text-muted-light: #aaa;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--white);
      color: var(--text-dark);
      overflow-x: hidden;
    }

    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      vertical-align: middle;
    }

    /* ── HEADER ── */
    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      background: rgba(10, 10, 10, 0.92);
      backdrop-filter: blur(20px);
      border-bottom: 1px solid rgba(245, 161, 0, 0.15);
      padding: 0 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 72px;
    }

    .logo {
      font-family: 'Playfair Display', serif;
      font-size: 20px;
      font-weight: 900;
      letter-spacing: 0.15em;
      color: var(--white);
      text-transform: uppercase;
      text-decoration: none;
    }

    .logo span {
      color: var(--gold);
    }

    nav {
      display: flex;
      gap: 36px;
      align-items: center;
    }

    nav a {
      font-size: 12px;
      font-weight: 500;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: rgba(255, 255, 255, 0.65);
      text-decoration: none;
      transition: color 0.3s;
    }

    nav a:hover,
    nav a.active {
      color: var(--gold);
    }

    .nav-cta {
      background: var(--gold);
      color: var(--black) !important;
      padding: 10px 24px;
      font-weight: 600 !important;
      letter-spacing: 0.08em !important;
      transition: all 0.3s !important;
    }

    .nav-cta:hover {
      background: var(--gold-light) !important;
      transform: translateY(-1px);
    }

    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
    }

    .hamburger span {
      width: 24px;
      height: 2px;
      background: white;
      display: block;
    }

    /* ── HERO ── */
    .hero {
      background: var(--black);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
      padding-top: 72px;
    }

    .hero-bg {
      position: absolute;
      inset: 0;
      background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1600&q=80');
      background-size: cover;
      background-position: center;
      opacity: 0.15;
      filter: grayscale(50%);
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(10, 10, 10, 0.97) 0%, rgba(10, 10, 10, 0.6) 50%, rgba(245, 161, 0, 0.06) 100%);
    }

    .hero::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 120px;
      background: var(--offwhite);
      clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
    }

    .hero-content {
      position: relative;
      z-index: 2;
      text-align: center;
      padding: 60px 20px;
      max-width: 900px;
      animation: fadeUp 1s ease both;
    }

    .breadcrumb {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-size: 11px;
      font-weight: 600;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 28px;
    }

    .breadcrumb span.sep {
      color: rgba(255, 255, 255, 0.3);
      font-size: 8px;
    }

    .breadcrumb span.cur {
      color: rgba(255, 255, 255, 0.5);
    }

    .hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(64px, 10vw, 120px);
      font-weight: 900;
      line-height: 0.9;
      color: var(--white);
      letter-spacing: -0.02em;
      margin-bottom: 28px;
    }

    .hero h1 em {
      color: var(--gold);
      font-style: italic;
      display: block;
    }

    .hero-divider {
      width: 80px;
      height: 3px;
      background: linear-gradient(90deg, transparent, var(--gold), transparent);
      margin: 0 auto 28px;
    }

    .hero-sub {
      font-size: 16px;
      color: rgba(255, 255, 255, 0.5);
      letter-spacing: 0.05em;
      line-height: 1.7;
      max-width: 520px;
      margin: 0 auto;
    }

    /* ── SHARED ── */
    section {
      position: relative;
    }

    .container {
      max-width: 1280px;
      margin: 0 auto;
    }

    .section-tag {
      display: inline-block;
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      padding: 6px 16px;
      border: 1.5px solid var(--gold);
      color: var(--gold-dark);
      margin-bottom: 20px;
    }

    .section-tag.light {
      color: var(--gold);
    }

    .section-heading {
      font-family: 'Playfair Display', serif;
      font-size: clamp(36px, 4vw, 54px);
      font-weight: 700;
      line-height: 1.1;
      color: var(--text-dark);
      margin-bottom: 20px;
    }

    .section-heading.white {
      color: var(--white);
    }

    .section-heading em {
      color: var(--gold);
      font-style: italic;
    }

    .body-text {
      font-size: 16px;
      line-height: 1.85;
      color: var(--text-muted);
      margin-bottom: 16px;
    }

    .body-text.light {
      color: rgba(255, 255, 255, 0.6);
    }

    .btn-primary {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: var(--gold);
      color: var(--black);
      padding: 14px 32px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      text-decoration: none;
      border: none;
      cursor: pointer;
      transition: all 0.3s;
    }

    .btn-primary:hover {
      background: var(--gold-dark);
      color: var(--white);
      transform: translateY(-2px);
      box-shadow: 0 12px 30px rgba(245, 161, 0, 0.3);
    }

    .btn-outline {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: transparent;
      color: var(--white);
      padding: 14px 32px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      text-decoration: none;
      border: 2px solid var(--gold);
      cursor: pointer;
      transition: all 0.3s;
    }

    .btn-outline:hover {
      background: var(--gold);
      color: var(--black);
      transform: translateY(-2px);
    }

    /* ── INTRO ── */
    .intro-section {
      background: var(--offwhite);
      padding: 120px 60px 100px;
      text-align: center;
    }

    .intro-section::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100px;
      background: var(--dark);
      clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
    }

    .intro-section p {
      max-width: 760px;
      margin: 0 auto;
      font-size: 17px;
      line-height: 1.9;
      color: var(--text-muted);
    }

    /* ── SERVICES GRID ── */
    .services-grid-section {
      background: var(--dark);
      padding: 130px 60px 120px;
    }

    .services-grid-section::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100px;
      background: var(--white);
      clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
    }

    .grid-header {
      text-align: center;
      max-width: 600px;
      margin: 0 auto 70px;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2px;
    }

    .service-card {
      background: var(--dark2);
      padding: 50px 40px;
      position: relative;
      overflow: hidden;
      transition: all 0.4s;
      cursor: pointer;
      border-bottom: 3px solid transparent;
    }

    .service-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: var(--gold);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s;
    }

    .service-card:hover::before {
      transform: scaleX(1);
    }

    .service-card:hover {
      background: #1e1e1e;
      transform: translateY(-4px);
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .service-icon {
      width: 64px;
      height: 64px;
      background: rgba(245, 161, 0, 0.1);
      border: 1px solid rgba(245, 161, 0, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 28px;
      transition: all 0.4s;
    }

    .service-card:hover .service-icon {
      background: var(--gold);
      border-color: var(--gold);
    }

    .service-icon .material-symbols-outlined {
      font-size: 30px;
      color: var(--gold);
      font-variation-settings: 'FILL' 1;
      transition: color 0.4s;
    }

    .service-card:hover .service-icon .material-symbols-outlined {
      color: var(--black);
    }

    .service-title {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 14px;
    }

    .service-desc {
      font-size: 14px;
      line-height: 1.8;
      color: rgba(255, 255, 255, 0.5);
      margin-bottom: 28px;
    }

    .service-link {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--gold);
      text-decoration: none;
      transition: gap 0.3s;
    }

    .service-link:hover {
      gap: 14px;
    }

    .service-num {
      position: absolute;
      top: 30px;
      right: 30px;
      font-family: 'Playfair Display', serif;
      font-size: 64px;
      font-weight: 900;
      color: rgba(255, 255, 255, 0.03);
      line-height: 1;
      transition: color 0.4s;
    }

    .service-card:hover .service-num {
      color: rgba(245, 161, 0, 0.06);
    }

    /* ── EMERGENCY CTA ── */
    .emergency-section {
      background: var(--white);
      padding: 120px 60px;
    }

    .emergency-section::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100px;
      background: var(--offwhite);
      clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
    }

    .emergency-inner {
      background: var(--black);
      position: relative;
      overflow: hidden;
      padding: 80px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 60px;
      flex-wrap: wrap;
    }

    .emergency-inner::before {
      content: '';
      position: absolute;
      inset: 0;
      background: url('https://images.unsplash.com/photo-1621905251918-48416bd8575a?w=1200&q=80');
      background-size: cover;
      background-position: center;
      opacity: 0.06;
    }

    .emerg-glow {
      position: absolute;
      top: 50%;
      left: 30%;
      transform: translate(-50%, -50%);
      width: 500px;
      height: 300px;
      background: radial-gradient(ellipse, rgba(245, 161, 0, 0.12) 0%, transparent 70%);
      pointer-events: none;
    }

    .emergency-text {
      position: relative;
      z-index: 1;
    }

    .emergency-badge {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 20px;
    }

    .emergency-badge .dot {
      width: 8px;
      height: 8px;
      background: var(--gold);
      border-radius: 50%;
      animation: pulse-dot 1.5s ease infinite;
    }

    @keyframes pulse-dot {

      0%,
      100% {
        transform: scale(1);
        opacity: 1;
      }

      50% {
        transform: scale(1.5);
        opacity: 0.6;
      }
    }

    .emergency-text h2 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(32px, 4vw, 52px);
      font-weight: 900;
      color: var(--white);
      line-height: 1.1;
      margin-bottom: 16px;
    }

    .emergency-text h2 em {
      color: var(--gold);
      font-style: italic;
    }

    .emergency-text p {
      font-size: 15px;
      color: rgba(255, 255, 255, 0.55);
      line-height: 1.8;
      max-width: 500px;
    }

    .emergency-actions {
      position: relative;
      z-index: 1;
      display: flex;
      flex-direction: column;
      gap: 14px;
      flex-shrink: 0;
    }

    .btn-emergency {
      display: flex;
      align-items: center;
      gap: 14px;
      background: var(--gold);
      color: var(--black);
      padding: 18px 36px;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      text-decoration: none;
      transition: all 0.3s;
      white-space: nowrap;
      border: none;
      cursor: pointer;
    }

    .btn-emergency:hover {
      background: var(--gold-light);
      transform: translateY(-2px);
      box-shadow: 0 15px 40px rgba(245, 161, 0, 0.3);
    }

    .btn-emergency .material-symbols-outlined {
      font-size: 22px;
      font-variation-settings: 'FILL' 1;
    }

    /* ── WHY CHOOSE US ── */
    .why-section {
      background: var(--offwhite);
      padding: 130px 60px 120px;
    }

    .why-section::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100px;
      background: var(--black);
      clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
    }

    .two-col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
    }

    .why-list {
      display: flex;
      flex-direction: column;
      gap: 36px;
      margin-top: 36px;
    }

    .why-item {
      display: flex;
      gap: 20px;
      align-items: flex-start;
    }

    .why-icon {
      width: 52px;
      height: 52px;
      flex-shrink: 0;
      background: var(--white);
      border: 2px solid rgba(245, 161, 0, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s;
    }

    .why-item:hover .why-icon {
      background: var(--gold);
      border-color: var(--gold);
    }

    .why-icon .material-symbols-outlined {
      font-size: 24px;
      color: var(--gold);
      font-variation-settings: 'FILL' 1;
      transition: color 0.3s;
    }

    .why-item:hover .why-icon .material-symbols-outlined {
      color: var(--black);
    }

    .why-item h4 {
      font-size: 16px;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 6px;
    }

    .why-item p {
      font-size: 14px;
      line-height: 1.75;
      color: var(--text-muted);
    }

    .why-img-wrap {
      position: relative;
    }

    .corner-tl {
      position: absolute;
      top: -16px;
      left: -16px;
      width: 60px;
      height: 60px;
      border-top: 4px solid var(--gold);
      border-left: 4px solid var(--gold);
      z-index: 1;
    }

    .corner-br {
      position: absolute;
      bottom: -16px;
      right: -16px;
      width: 60px;
      height: 60px;
      border-bottom: 4px solid var(--gold);
      border-right: 4px solid var(--gold);
      z-index: 1;
    }

    .why-img-wrap img {
      width: 100%;
      height: 600px;
      object-fit: cover;
      display: block;
      filter: grayscale(15%);
      transition: filter 0.5s;
    }

    .why-img-wrap:hover img {
      filter: grayscale(0%);
    }

    /* ── FAQ ── */
    .faq-section {
      background: var(--black);
      padding: 130px 60px 120px;
    }

    .faq-section::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100px;
      background: var(--offwhite);
      clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
    }

    .faq-header {
      text-align: center;
      max-width: 600px;
      margin: 0 auto 60px;
    }

    .faq-list {
      max-width: 860px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 3px;
    }

    .faq-item {
      background: var(--dark2);
      border-left: 3px solid transparent;
      transition: all 0.3s;
      overflow: hidden;
    }

    .faq-item.open {
      border-left-color: var(--gold);
    }

    .faq-question {
      width: 100%;
      background: none;
      border: none;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 30px;
      text-align: left;
    }

    .faq-q-text {
      font-size: 16px;
      font-weight: 600;
      color: var(--white);
      flex: 1;
      padding-right: 20px;
      line-height: 1.5;
      font-family: 'DM Sans', sans-serif;
    }

    .faq-icon {
      width: 36px;
      height: 36px;
      background: rgba(245, 161, 0, 0.1);
      border: 1px solid rgba(245, 161, 0, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      transition: all 0.3s;
    }

    .faq-item.open .faq-icon {
      background: var(--gold);
      border-color: var(--gold);
    }

    .faq-icon .material-symbols-outlined {
      color: var(--gold);
      font-size: 18px;
      transition: color 0.3s;
    }

    .faq-item.open .faq-icon .material-symbols-outlined {
      color: var(--black);
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, padding 0.3s ease;
      padding: 0 30px;
    }

    .faq-item.open .faq-answer {
      max-height: 200px;
      padding: 0 30px 24px;
    }

    .faq-answer p {
      font-size: 14px;
      line-height: 1.85;
      color: rgba(255, 255, 255, 0.5);
      border-top: 1px solid rgba(255, 255, 255, 0.06);
      padding-top: 16px;
    }

    /* ── FINAL CTA ── */
    .final-cta {
      background: var(--offwhite);
      padding: 140px 60px 120px;
      text-align: center;
    }

    .final-cta::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 4px;
      background: linear-gradient(90deg, transparent, var(--gold), transparent);
    }

    .final-cta h2 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(40px, 5vw, 64px);
      font-weight: 900;
      color: var(--text-dark);
      line-height: 1.1;
      margin-bottom: 20px;
      margin-top: 20px;
    }

    .final-cta h2 em {
      color: var(--gold);
      font-style: italic;
    }

    .final-cta p {
      font-size: 16px;
      color: var(--text-muted);
      line-height: 1.8;
      margin-bottom: 40px;
      max-width: 560px;
      margin-left: auto;
      margin-right: auto;
    }

    .cta-btns {
      display: flex;
      gap: 16px;
      justify-content: center;
      flex-wrap: wrap;
    }

    /* ── FOOTER ── */
    footer {
      background: var(--black);
      border-top: 1px solid rgba(245, 161, 0, 0.1);
      padding: 70px 60px 30px;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr 1.5fr;
      gap: 60px;
      max-width: 1280px;
      margin: 0 auto 60px;
    }

    .footer-logo {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 900;
      letter-spacing: 0.12em;
      color: var(--white);
      text-transform: uppercase;
      margin-bottom: 16px;
      display: block;
    }

    .footer-logo span {
      color: var(--gold);
    }

    .footer-about {
      font-size: 13px;
      color: rgba(255, 255, 255, 0.45);
      line-height: 1.8;
    }

    .footer-col h4 {
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.25em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 1px solid rgba(245, 161, 0, 0.2);
    }

    .footer-col a {
      display: block;
      font-size: 13px;
      color: rgba(255, 255, 255, 0.5);
      text-decoration: none;
      margin-bottom: 10px;
      transition: all 0.3s;
    }

    .footer-col a:hover {
      color: var(--gold);
      padding-left: 6px;
    }

    .footer-newsletter {
      display: flex;
      margin-top: 6px;
    }

    .footer-newsletter input {
      flex: 1;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-right: none;
      padding: 12px 16px;
      color: white;
      font-size: 13px;
      outline: none;
      font-family: 'DM Sans', sans-serif;
    }

    .footer-newsletter input::placeholder {
      color: rgba(255, 255, 255, 0.3);
    }

    .footer-newsletter button {
      background: var(--gold);
      border: none;
      cursor: pointer;
      padding: 12px 16px;
      color: black;
      transition: background 0.3s;
      font-family: 'DM Sans', sans-serif;
      font-weight: 700;
      font-size: 12px;
      letter-spacing: 0.1em;
    }

    .footer-newsletter button:hover {
      background: var(--gold-light);
    }

    .footer-bottom {
      max-width: 1280px;
      margin: 0 auto;
      padding-top: 24px;
      border-top: 1px solid rgba(255, 255, 255, 0.06);
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 11px;
      color: rgba(255, 255, 255, 0.25);
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }

    /* ── ANIMATIONS ── */
    @keyframes fadeUp {
      from {
        opacity: 0;
        transform: translateY(40px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .reveal {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .reveal.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .reveal-delay-1 {
      transition-delay: 0.1s;
    }

    .reveal-delay-2 {
      transition-delay: 0.2s;
    }

    .reveal-delay-3 {
      transition-delay: 0.3s;
    }

    .reveal-delay-4 {
      transition-delay: 0.4s;
    }

    .reveal-delay-5 {
      transition-delay: 0.5s;
    }

    .reveal-delay-6 {
      transition-delay: 0.6s;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 1024px) {
      header {
        padding: 0 30px;
      }

      .intro-section,
      .services-grid-section,
      .emergency-section,
      .why-section,
      .faq-section,
      .final-cta {
        padding-left: 30px;
        padding-right: 30px;
      }

      footer {
        padding: 60px 30px 30px;
      }

      .footer-grid {
        grid-template-columns: 1fr 1fr;
        gap: 40px;
      }

      .two-col {
        gap: 50px;
      }

      .services-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      nav {
        display: none;
      }

      nav.open {
        display: flex;
        flex-direction: column;
        position: fixed;
        top: 72px;
        left: 0;
        right: 0;
        background: rgba(10, 10, 10, 0.98);
        padding: 30px;
        gap: 20px;
        z-index: 99;
      }

      .hamburger {
        display: flex;
      }

      .services-grid {
        grid-template-columns: 1fr;
      }

      .two-col {
        grid-template-columns: 1fr;
      }

      .footer-grid {
        grid-template-columns: 1fr;
        gap: 30px;
      }

      .footer-bottom {
        flex-direction: column;
        gap: 10px;
        text-align: center;
      }

      .emergency-inner {
        padding: 40px 30px;
        flex-direction: column;
      }

      .why-img-wrap {
        order: -1;
      }

      .why-img-wrap img {
        height: 350px;
      }

      .intro-section,
      .services-grid-section,
      .emergency-section,
      .why-section,
      .faq-section,
      .final-cta {
        padding: 80px 20px;
      }

      footer {
        padding: 50px 20px 20px;
      }
    }

    @media (max-width: 480px) {
      .hero h1 {
        font-size: 52px;
      }
    }
  </style>
</head>

<body>

  <?php include 'includes/header-premium.php'; ?>

  <!-- HERO — BLACK -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <div class="breadcrumb">
        <span>Home</span>
        <span class="sep">▶</span>
        <span class="cur">Services</span>
      </div>
      <h1>Our<em>Services</em></h1>
      <div class="hero-divider"></div>
      <p class="hero-sub">Precision-engineered electrical solutions for residential, commercial, and industrial clients
        across the UK.</p>
    </div>
  </section>

  <!-- INTRO — OFFWHITE -->
  <section class="intro-section">
    <div class="container reveal">
      <span class="section-tag">What We Do</span>
      <h2 class="section-heading" style="margin-top:16px;">Professional <em>Electrical</em> Services</h2>
      <p>Volt Master Engineering delivers precision-engineered electrical solutions across the UK. From residential
        rewiring to large-scale industrial installations, our master electricians ensure your power systems are safe,
        efficient, and compliant with the highest industry standards.</p>
    </div>
  </section>

  <!-- SERVICES GRID — DARK -->
  <section class="services-grid-section">
    <div class="container">
      <div class="grid-header reveal">
        <span class="section-tag light">Our Expertise</span>
        <h2 class="section-heading white" style="margin-top:16px;">Everything We <em>Offer</em></h2>
      </div>
      <div class="services-grid">

        <div class="service-card reveal reveal-delay-1">
          <span class="service-num">01</span>
          <div class="service-icon">
            <span class="material-symbols-outlined">home</span>
          </div>
          <div class="service-title">Residential</div>
          <p class="service-desc">Complete domestic electrical solutions including full rewires, lighting design, and
            smart home integration for modern living spaces.</p>
          <a class="service-link" href="#">Learn More <span class="material-symbols-outlined"
              style="font-size:16px;">arrow_forward</span></a>
        </div>

        <div class="service-card reveal reveal-delay-2">
          <span class="service-num">02</span>
          <div class="service-icon">
            <span class="material-symbols-outlined">business</span>
          </div>
          <div class="service-title">Commercial</div>
          <p class="service-desc">High-performance electrical infrastructure for offices, retail spaces, and commercial
            hubs with minimal operational disruption.</p>
          <a class="service-link" href="#">Learn More <span class="material-symbols-outlined"
              style="font-size:16px;">arrow_forward</span></a>
        </div>

        <div class="service-card reveal reveal-delay-3">
          <span class="service-num">03</span>
          <div class="service-icon">
            <span class="material-symbols-outlined">factory</span>
          </div>
          <div class="service-title">Industrial</div>
          <p class="service-desc">Specialized power distribution and control systems for heavy industry, manufacturing
            plants, and processing facilities.</p>
          <a class="service-link" href="#">Learn More <span class="material-symbols-outlined"
              style="font-size:16px;">arrow_forward</span></a>
        </div>

        <div class="service-card reveal reveal-delay-1">
          <span class="service-num">04</span>
          <div class="service-icon">
            <span class="material-symbols-outlined">verified</span>
          </div>
          <div class="service-title">EICR Inspection</div>
          <p class="service-desc">Rigorous Electrical Installation Condition Reports to ensure full legal compliance and
            safety for landlords and homeowners.</p>
          <a class="service-link" href="#">Learn More <span class="material-symbols-outlined"
              style="font-size:16px;">arrow_forward</span></a>
        </div>

        <div class="service-card reveal reveal-delay-2">
          <span class="service-num">05</span>
          <div class="service-icon">
            <span class="material-symbols-outlined">solar_power</span>
          </div>
          <div class="service-title">Solar PV</div>
          <p class="service-desc">Future-proofing your property with professional solar photovoltaic installations and
            battery storage solutions.</p>
          <a class="service-link" href="#">Learn More <span class="material-symbols-outlined"
              style="font-size:16px;">arrow_forward</span></a>
        </div>

        <div class="service-card reveal reveal-delay-3">
          <span class="service-num">06</span>
          <div class="service-icon">
            <span class="material-symbols-outlined">emergency_home</span>
          </div>
          <div class="service-title">Emergency Callout</div>
          <p class="service-desc">24/7 rapid response for electrical emergencies, restoring power and safety to your
            premises within hours, day or night.</p>
          <a class="service-link" href="#">Learn More <span class="material-symbols-outlined"
              style="font-size:16px;">arrow_forward</span></a>
        </div>

      </div>
    </div>
  </section>

  <!-- EMERGENCY CTA — WHITE -->
  <section class="emergency-section">
    <div class="container">
      <div class="emergency-inner reveal">
        <div class="emerg-glow"></div>
        <div class="emergency-text">
          <div class="emergency-badge">
            <span class="dot"></span>
            Available 24/7
          </div>
          <h2>Need an <em>Emergency</em><br>Electrician?</h2>
          <p>Our rapid-response team is standing by around the clock to handle critical faults, power outages, and
            hazardous electrical failures. Don't wait — call us now.</p>
        </div>
        <div class="emergency-actions">
          <a class="btn-emergency" href="tel:+441234567890">
            <span class="material-symbols-outlined">call</span>
            Call Us Now
          </a>
          <a class="btn-outline" href="#"
            style="justify-content:center; color: var(--white); border-color: var(--gold);">Request a Callback</a>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US — OFFWHITE -->
  <section class="why-section">
    <div class="container">
      <div class="two-col">
        <div class="reveal">
          <span class="section-tag">Why Volt Master</span>
          <h2 class="section-heading" style="margin-top:16px;">Engineered for <em>Excellence</em></h2>
          <div class="why-list">
            <div class="why-item">
              <div class="why-icon"><span class="material-symbols-outlined">verified_user</span></div>
              <div>
                <h4>Fully Accredited Team</h4>
                <p>NICEIC approved contractors with over 20 years of technical expertise and a flawless safety record.
                </p>
              </div>
            </div>
            <div class="why-item">
              <div class="why-icon"><span class="material-symbols-outlined">schedule</span></div>
              <div>
                <h4>Reliable Scheduling</h4>
                <p>We respect your time. Punctuality and clear communication from first call to final sign-off.</p>
              </div>
            </div>
            <div class="why-item">
              <div class="why-icon"><span class="material-symbols-outlined">health_and_safety</span></div>
              <div>
                <h4>Safety First Approach</h4>
                <p>Rigorous testing on every project to guarantee long-term operational safety and compliance.</p>
              </div>
            </div>
            <div class="why-item">
              <div class="why-icon"><span class="material-symbols-outlined">price_check</span></div>
              <div>
                <h4>Transparent Pricing</h4>
                <p>No hidden costs. Detailed, fixed-price quotes provided before any work starts — ever.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="why-img-wrap reveal reveal-delay-2">
          <div class="corner-tl"></div>
          <div class="corner-br"></div>
          <img src="https://images.unsplash.com/photo-1621905251918-48416bd8575a?w=800&q=80"
            alt="Electrician working on industrial panel" />
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ — BLACK -->
  <section class="faq-section">
    <div class="container">
      <div class="faq-header reveal">
        <span class="section-tag light">Got Questions?</span>
        <h2 class="section-heading white" style="margin-top:16px;">Frequently <em>Asked</em></h2>
      </div>
      <div class="faq-list">

        <div class="faq-item open reveal reveal-delay-1">
          <button class="faq-question" onclick="toggleFaq(this)">
            <span class="faq-q-text">How often should I have my business electrics tested?</span>
            <div class="faq-icon"><span class="material-symbols-outlined">remove</span></div>
          </button>
          <div class="faq-answer">
            <p>Commercial premises generally require an EICR every 5 years, though certain high-traffic environments may
              need more frequent inspections to ensure continued compliance and safety.</p>
          </div>
        </div>

        <div class="faq-item reveal reveal-delay-2">
          <button class="faq-question" onclick="toggleFaq(this)">
            <span class="faq-q-text">Are you registered with any professional bodies?</span>
            <div class="faq-icon"><span class="material-symbols-outlined">add</span></div>
          </button>
          <div class="faq-answer">
            <p>Yes — we are NICEIC approved contractors, which means every electrician on our team meets rigorous
              standards of competency, safety, and ongoing professional development.</p>
          </div>
        </div>

        <div class="faq-item reveal reveal-delay-3">
          <button class="faq-question" onclick="toggleFaq(this)">
            <span class="faq-q-text">What areas do you cover for emergency callouts?</span>
            <div class="faq-icon"><span class="material-symbols-outlined">add</span></div>
          </button>
          <div class="faq-answer">
            <p>We cover all major cities and surrounding areas across the UK. Our rapid-response teams are strategically
              located to ensure a fast arrival time for any emergency situation.</p>
          </div>
        </div>

        <div class="faq-item reveal reveal-delay-4">
          <button class="faq-question" onclick="toggleFaq(this)">
            <span class="faq-q-text">Can you help with renewable energy installations?</span>
            <div class="faq-icon"><span class="material-symbols-outlined">add</span></div>
          </button>
          <div class="faq-answer">
            <p>Absolutely. Our Solar PV team is fully certified for photovoltaic installations and battery storage
              systems, helping both residential and commercial clients reduce their energy costs and carbon footprint.
            </p>
          </div>
        </div>

        <div class="faq-item reveal reveal-delay-5">
          <button class="faq-question" onclick="toggleFaq(this)">
            <span class="faq-q-text">Do you provide a warranty on your work?</span>
            <div class="faq-icon"><span class="material-symbols-outlined">add</span></div>
          </button>
          <div class="faq-answer">
            <p>Yes — all of our electrical installations and repairs come with a comprehensive workmanship warranty. We
              stand behind every project we complete, giving you total peace of mind.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FINAL CTA — OFFWHITE -->
  <section class="final-cta">
    <div class="container reveal">
      <span class="section-tag">Start Today</span>
      <h2>Ready to Power <em>Up?</em></h2>
      <p>From a single socket to a full industrial installation, our certified engineers are ready to deliver. Get your
        free, no-obligation quote today.</p>
      <div class="cta-btns">
        <a class="btn-primary" href="#">Get a Free Quote <span class="material-symbols-outlined"
            style="font-size:18px;">arrow_forward</span></a>
        <a class="btn-outline" style="color: var(--text-dark); border-color: var(--text-dark);" href="#">View Our
          Work</a>
      </div>
    </div>
  </section>

  <?php include 'includes/footer-premium.php'; ?>

  <script>
    function toggleFaq(btn) {
      const item = btn.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      // Close all
      document.querySelectorAll('.faq-item').forEach(f => {
        f.classList.remove('open');
        f.querySelector('.material-symbols-outlined').textContent = 'add';
      });
      // Open clicked if it was closed
      if (!isOpen) {
        item.classList.add('open');
        btn.querySelector('.material-symbols-outlined').textContent = 'remove';
      }
    }
  </script>
</body>

</html>