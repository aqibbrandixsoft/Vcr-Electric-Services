<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>About Us | VOLT MASTER Engineering</title>
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
            --text-muted-light: #999;
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
        }

<body>

<?php include 'includes/header-premium.php'; ?>
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
            background-image: url('https://images.unsplash.com/photo-1621905251918-48416bd8575a?w=1600&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.18;
            filter: grayscale(60%);
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(10, 10, 10, 0.95) 0%, rgba(10, 10, 10, 0.6) 50%, rgba(245, 161, 0, 0.08) 100%);
        }

        /* Gold diagonal stripe */
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
            color: rgba(255, 255, 255, 0.55);
            letter-spacing: 0.05em;
            line-height: 1.7;
            max-width: 500px;
            margin: 0 auto;
        }

        /* ── SECTION BASE ── */
        section {
            position: relative;
        }

        /* ── WHO WE ARE — LIGHT ── */
        .who-we-are {
            background: var(--offwhite);
            padding: 120px 60px;
        }

        .who-we-are::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: var(--dark);
            clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
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
            border-color: var(--gold);
        }

        .section-heading {
            font-family: 'Playfair Display', serif;
            font-size: clamp(36px, 4vw, 54px);
            font-weight: 700;
            line-height: 1.1;
            color: var(--text-dark);
            margin-bottom: 28px;
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
            margin-bottom: 18px;
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
            margin-top: 12px;
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
            margin-top: 12px;
        }

        .btn-outline:hover {
            background: var(--gold);
            color: var(--black);
            transform: translateY(-2px);
        }

        /* Image frame */
        .img-frame {
            position: relative;
        }

        .img-frame::before {
            content: '';
            position: absolute;
            top: -16px;
            left: -16px;
            width: calc(100% - 32px);
            height: calc(100% - 32px);
            border: 2px solid var(--gold);
            opacity: 0.25;
            z-index: 0;
            transition: all 0.5s;
        }

        .img-frame:hover::before {
            top: -8px;
            left: -8px;
            opacity: 0.5;
        }

        .img-frame img {
            width: 100%;
            aspect-ratio: 4/5;
            object-fit: cover;
            display: block;
            position: relative;
            z-index: 1;
            filter: grayscale(20%);
            transition: filter 0.6s;
        }

        .img-frame:hover img {
            filter: grayscale(0%);
        }

        .img-badge {
            position: absolute;
            bottom: -20px;
            right: -20px;
            z-index: 2;
            background: var(--gold);
            color: var(--black);
            padding: 24px 28px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        .img-badge .num {
            font-family: 'Playfair Display', serif;
            font-size: 42px;
            font-weight: 900;
            line-height: 1;
            display: block;
        }

        .img-badge .lbl {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            margin-top: 4px;
            display: block;
            opacity: 0.8;
        }

        /* ── STATS — DARK ── */
        .stats-section {
            background: var(--dark);
            padding: 120px 60px 100px;
        }

        .stats-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: var(--white);
            clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            text-align: center;
        }

        .stat-item {
            position: relative;
            padding: 40px 20px;
        }

        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 3px;
            background: var(--gold);
        }

        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: clamp(48px, 5vw, 72px);
            font-weight: 900;
            color: var(--gold);
            line-height: 1;
            display: block;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.5);
        }

        .stats-intro {
            text-align: center;
            margin-bottom: 70px;
        }

        /* ── MISSION — LIGHT ── */
        .mission-section {
            background: var(--white);
            padding: 120px 60px;
        }

        .mission-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: var(--black);
            clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
        }

        .mission-img-wrap {
            position: relative;
        }

        .mission-img-wrap img {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
            display: block;
            filter: grayscale(10%);
        }

        .mission-quote {
            position: absolute;
            bottom: 30px;
            right: -30px;
            background: var(--black);
            color: var(--white);
            padding: 28px 32px;
            max-width: 280px;
            border-left: 4px solid var(--gold);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.3);
        }

        .mission-quote .icon {
            color: var(--gold);
            font-size: 36px;
            margin-bottom: 12px;
            display: block;
        }

        .mission-quote p {
            font-size: 13px;
            line-height: 1.7;
            font-style: italic;
            color: rgba(255, 255, 255, 0.8);
        }

        .checklist {
            list-style: none;
            margin-top: 28px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .checklist li {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            font-size: 15px;
            font-weight: 500;
            color: var(--text-dark);
        }

        .checklist li .material-symbols-outlined {
            color: var(--gold);
            font-size: 22px;
            flex-shrink: 0;
            margin-top: 1px;
            font-variation-settings: 'FILL' 1;
        }

        /* ── TEAM — DARK ── */
        .team-section {
            background: var(--black);
            padding: 130px 60px 120px;
        }

        .team-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: var(--offwhite);
            clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
        }

        .section-header-center {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 80px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .team-card {
            background: var(--dark2);
            border: 1px solid rgba(245, 161, 0, 0.1);
            overflow: hidden;
            transition: all 0.4s;
            position: relative;
        }

        .team-card::before {
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

        .team-card:hover::before {
            transform: scaleX(1);
        }

        .team-card:hover {
            transform: translateY(-8px);
            border-color: rgba(245, 161, 0, 0.3);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
        }

        .team-img {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
            display: block;
            filter: grayscale(40%);
            transition: filter 0.5s;
        }

        .team-card:hover .team-img {
            filter: grayscale(0%);
        }

        .team-info {
            padding: 28px;
        }

        .team-name {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 6px;
        }

        .team-role {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 20px;
        }

        .team-socials {
            display: flex;
            gap: 12px;
        }

        .team-socials a {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid rgba(255, 255, 255, 0.12);
            color: rgba(255, 255, 255, 0.4);
            text-decoration: none;
            transition: all 0.3s;
            font-size: 18px;
        }

        .team-socials a:hover {
            border-color: var(--gold);
            color: var(--gold);
            background: rgba(245, 161, 0, 0.08);
        }

        /* ── VALUES — LIGHT ── */
        .values-section {
            background: var(--offwhite);
            padding: 130px 60px 120px;
        }

        .values-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: var(--dark);
            clip-path: polygon(0 60%, 100% 0%, 100% 100%, 0% 100%);
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2px;
            margin-top: 60px;
        }

        .value-card {
            background: var(--white);
            padding: 50px 36px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }

        .value-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--gold);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s;
        }

        .value-card:hover::after {
            transform: scaleX(1);
        }

        .value-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }

        .value-icon {
            width: 56px;
            height: 56px;
            background: var(--gold);
            color: var(--black);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            font-size: 28px;
        }

        .value-title {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 14px;
        }

        .value-desc {
            font-size: 14px;
            line-height: 1.8;
            color: var(--text-muted);
        }

        /* ── CTA — DARK ── */
        .cta-section {
            background: var(--dark);
            padding: 140px 60px 120px;
            text-align: center;
        }

        .cta-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }

        .cta-inner {
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .cta-glow {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 600px;
            height: 300px;
            background: radial-gradient(ellipse, rgba(245, 161, 0, 0.1) 0%, transparent 70%);
            pointer-events: none;
        }

        .cta-section h2 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(40px, 5vw, 64px);
            font-weight: 900;
            color: var(--white);
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .cta-section h2 em {
            color: var(--gold);
            font-style: italic;
        }

        .cta-section p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.55);
            line-height: 1.8;
            margin-bottom: 40px;
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
            transition: color 0.3s;
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

        /* ── RESPONSIVE ── */
        @media (max-width: 1024px) {
            header {
                padding: 0 30px;
            }

            .who-we-are,
            .mission-section,
            .stats-section,
            .team-section,
            .values-section,
            .cta-section {
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

            .mission-quote {
                right: 0;
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

            .two-col {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .two-col .order-first {
                order: -1;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .team-grid {
                grid-template-columns: 1fr;
                max-width: 400px;
                margin: 0 auto;
            }

            .values-grid {
                grid-template-columns: 1fr;
                gap: 2px;
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

            .img-badge {
                right: 0;
                bottom: -10px;
            }

            .mission-quote {
                position: relative;
                right: auto;
                bottom: auto;
                margin-top: 20px;
                max-width: 100%;
            }

            .who-we-are,
            .mission-section,
            .stats-section,
            .team-section,
            .values-section,
            .cta-section {
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

            .stats-grid {
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }

            .stat-num {
                font-size: 42px;
            }
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <header>
        <a class="logo" href="#">VOLT <span>MASTER</span></a>
        <nav id="mainNav">
            <a href="#">Home</a>
            <a href="#">Services</a>
            <a href="#" class="active">About Us</a>
            <a href="#">Gallery</a>
            <a href="#">Contact</a>
            <a href="#" class="nav-cta">Get a Quote</a>
        </nav>
        <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            <span></span><span></span><span></span>
        </div>
    </header>

    <!-- HERO — BLACK -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="breadcrumb">
                <span>Home</span>
                <span class="sep">▶</span>
                <span class="cur">About Us</span>
            </div>
            <h1>About<em>Us</em></h1>
            <div class="hero-divider"></div>
            <p class="hero-sub">25 years of mastery. Precision-engineered electrical solutions that power industries and
                homes alike.</p>
        </div>
    </section>

    <!-- WHO WE ARE — LIGHT/OFFWHITE -->
    <section class="who-we-are">
        <div class="container">
            <div class="two-col">
                <div class="reveal">
                    <span class="section-tag">About Us</span>
                    <h2 class="section-heading">Who We <em>Are</em></h2>
                    <p class="body-text">Volt Master Engineering represents the pinnacle of electrical mastery. Founded
                        on the principles of precision, safety, and unwavering reliability, we have spent decades
                        illuminating the industrial and residential landscapes of our city.</p>
                    <p class="body-text">Our approach is clinical. We don't just fix wires — we engineer solutions that
                        stand the test of time. Every project is handled with the meticulous care of a master craftsman,
                        ensuring your electrical infrastructure is a silent, powerful backbone to your operations.</p>
                    <p class="body-text">From complex industrial grid maintenance to sophisticated residential smart
                        systems, our team brings a level of expertise that sets the gold standard in the industry.</p>
                    <a class="btn-primary" href="#">Get a Quote <span class="material-symbols-outlined"
                            style="font-size:18px;">arrow_forward</span></a>
                </div>
                <div class="img-frame reveal reveal-delay-2">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=800&q=80"
                        alt="Electrician at work" />
                    <div class="img-badge">
                        <span class="num">25+</span>
                        <span class="lbl">Years of<br>Excellence</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS — DARK -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-intro reveal">
                <span class="section-tag light">Our Numbers</span>
                <h2 class="section-heading white" style="margin-top:16px; margin-bottom:0;">The <em>Results</em> Speak
                </h2>
            </div>
            <div class="stats-grid">
                <div class="stat-item reveal reveal-delay-1">
                    <span class="stat-num">25+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-item reveal reveal-delay-2">
                    <span class="stat-num">1.2k</span>
                    <span class="stat-label">Projects Completed</span>
                </div>
                <div class="stat-item reveal reveal-delay-3">
                    <span class="stat-num">980+</span>
                    <span class="stat-label">Happy Clients</span>
                </div>
                <div class="stat-item reveal reveal-delay-4">
                    <span class="stat-num">45</span>
                    <span class="stat-label">Certified Electricians</span>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION — WHITE -->
    <section class="mission-section">
        <div class="container">
            <div class="two-col">
                <div class="mission-img-wrap reveal order-first">
                    <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=800&q=80"
                        alt="Electrical schematics" />
                    <div class="mission-quote">
                        <span class="material-symbols-outlined icon"
                            style="font-variation-settings:'FILL' 1;">bolt</span>
                        <p>"Engineering safety into every circuit, powering the future with reliability."</p>
                    </div>
                </div>
                <div class="reveal reveal-delay-2">
                    <span class="section-tag">Our Mission</span>
                    <h2 class="section-heading">Our <em>Mission</em></h2>
                    <p class="body-text">Our mission is to redefine the standards of electrical engineering through
                        uncompromising quality and innovative safety protocols. We strive to be the invisible force that
                        powers progress while ensuring absolute peace of mind for every client.</p>
                    <p class="body-text">We are dedicated to sustainable energy solutions and the implementation of
                        next-generation electrical infrastructure that minimizes waste and maximizes efficiency.</p>
                    <ul class="checklist">
                        <li>
                            <span class="material-symbols-outlined">check_circle</span>
                            Upholding absolute safety compliance
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check_circle</span>
                            Delivering precise engineering mastery
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check_circle</span>
                            24/7 Emergency response excellence
                        </li>
                        <li>
                            <span class="material-symbols-outlined">check_circle</span>
                            Sustainable, next-gen energy solutions
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM — BLACK -->
    <section class="team-section">
        <div class="container">
            <div class="section-header-center reveal">
                <span class="section-tag light">The Experts</span>
                <h2 class="section-heading white" style="margin-top:16px;">Meet Our <em>Team</em></h2>
            </div>
            <div class="team-grid">
                <div class="team-card reveal reveal-delay-1">
                    <img class="team-img" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&q=80"
                        alt="Arthur Vance" />
                    <div class="team-info">
                        <div class="team-name">Arthur Vance</div>
                        <div class="team-role">Chief Master Electrician</div>
                        <div class="team-socials">
                            <a href="#"><span class="material-symbols-outlined" style="font-size:18px;">share</span></a>
                            <a href="#"><span class="material-symbols-outlined" style="font-size:18px;">link</span></a>
                            <a href="#"><span class="material-symbols-outlined" style="font-size:18px;">mail</span></a>
                        </div>
                    </div>
                </div>
                <div class="team-card reveal reveal-delay-2">
                    <img class="team-img" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=600&q=80"
                        alt="Elena Rodriguez" />
                    <div class="team-info">
                        <div class="team-name">Elena Rodriguez</div>
                        <div class="team-role">Project Director</div>
                        <div class="team-socials">
                            <a href="#"><span class="material-symbols-outlined" style="font-size:18px;">share</span></a>
                            <a href="#"><span class="material-symbols-outlined" style="font-size:18px;">link</span></a>
                            <a href="#"><span class="material-symbols-outlined" style="font-size:18px;">mail</span></a>
                        </div>
                    </div>
                </div>
                <div class="team-card reveal reveal-delay-3">
                    <img class="team-img" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600&q=80"
                        alt="Marcus Thorne" />
                    <div class="team-info">
                        <div class="team-name">Marcus Thorne</div>
                        <div class="team-role">Lead Industrial Specialist</div>
                        <div class="team-socials">
                            <a href="#"><span class="material-symbols-outlined" style="font-size:18px;">share</span></a>
                            <a href="#"><span class="material-symbols-outlined" style="font-size:18px;">link</span></a>
                            <a href="#"><span class="material-symbols-outlined" style="font-size:18px;">mail</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VALUES — LIGHT -->
    <section class="values-section">
        <div class="container">
            <div class="section-header-center reveal" style="margin-bottom:0;">
                <span class="section-tag">What We Stand For</span>
                <h2 class="section-heading" style="margin-top:16px;">Our Core <em>Values</em></h2>
            </div>
            <div class="values-grid">
                <div class="value-card reveal reveal-delay-1">
                    <div class="value-icon"><span class="material-symbols-outlined"
                            style="font-variation-settings:'FILL' 1; font-size:28px;">shield</span></div>
                    <div class="value-title">Safety First</div>
                    <p class="value-desc">Every decision, every circuit, every installation begins and ends with one
                        priority — the absolute safety of our clients and our team.</p>
                </div>
                <div class="value-card reveal reveal-delay-2">
                    <div class="value-icon"><span class="material-symbols-outlined"
                            style="font-variation-settings:'FILL' 1; font-size:28px;">precision_manufacturing</span>
                    </div>
                    <div class="value-title">Engineering Precision</div>
                    <p class="value-desc">We approach every project with clinical accuracy. No shortcuts, no compromises
                        — just master-level craftsmanship on every job.</p>
                </div>
                <div class="value-card reveal reveal-delay-3">
                    <div class="value-icon"><span class="material-symbols-outlined"
                            style="font-variation-settings:'FILL' 1; font-size:28px;">bolt</span></div>
                    <div class="value-title">Rapid Response</div>
                    <p class="value-desc">24/7 emergency availability. When power fails, we answer. Fast, decisive
                        action when it matters most to our clients.</p>
                </div>
                <div class="value-card reveal reveal-delay-1">
                    <div class="value-icon"><span class="material-symbols-outlined"
                            style="font-variation-settings:'FILL' 1; font-size:28px;">eco</span></div>
                    <div class="value-title">Sustainability</div>
                    <p class="value-desc">Forward-thinking solutions that minimize waste, reduce energy consumption, and
                        build infrastructure for the next generation.</p>
                </div>
                <div class="value-card reveal reveal-delay-2">
                    <div class="value-icon"><span class="material-symbols-outlined"
                            style="font-variation-settings:'FILL' 1; font-size:28px;">handshake</span></div>
                    <div class="value-title">Client Partnership</div>
                    <p class="value-desc">We build long-term relationships, not just electrical systems. Your peace of
                        mind is our ongoing commitment.</p>
                </div>
                <div class="value-card reveal reveal-delay-3">
                    <div class="value-icon"><span class="material-symbols-outlined"
                            style="font-variation-settings:'FILL' 1; font-size:28px;">workspace_premium</span></div>
                    <div class="value-title">Certified Excellence</div>
                    <p class="value-desc">Every member of our team is fully certified and continuously trained on the
                        latest industry standards and technologies.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA — DARK -->
    <section class="cta-section">
        <div class="cta-glow"></div>
        <div class="cta-inner">
            <div class="reveal">
                <span class="section-tag light">Ready to Start?</span>
                <h2 style="margin-top:20px;">Power Your <em>Future</em><br>With Us</h2>
                <p>From emergency call-outs to full industrial installations, our certified team is ready to deliver
                    precision electrical solutions that last.</p>
                <div class="cta-btns">
                    <a class="btn-primary" href="#">Get a Free Quote <span class="material-symbols-outlined"
                            style="font-size:18px;">arrow_forward</span></a>
                    <a class="btn-outline" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer-premium.php'; ?>
</body>
</html>