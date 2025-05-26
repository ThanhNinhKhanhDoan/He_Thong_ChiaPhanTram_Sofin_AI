<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <meta name="description" content="SOFIN NETWORK offers advanced digital content distribution and monetization solutions using AI technology. Automate video, music, and podcast distribution across hundreds of platforms with copyright protection and revenue optimization.">
    <meta name="keywords" content="content distribution, digital content monetization, AI-powered video distribution, podcast distribution, music royalties, content copyright protection, SOFIN NETWORK, automated content publishing, streaming platform integration">
    <meta name="author" content="SOFIN NETWORK">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Content Distribution & Monetization by SOFIN NETWORK">
    <meta property="og:description" content="SOFIN NETWORK offers advanced digital content distribution and monetization solutions using AI technology. Automate video, music, and podcast distribution across hundreds of platforms with copyright protection and revenue optimization.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sofin.network/public/content-distribution">
    <meta property="og:image" content="https://sofin.network/images/thumnail.jpeg">
    <meta property="og:site_name" content="SOFIN NETWORK">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@sofin_network">
    <meta name="twitter:title" content="Content Distribution & Monetization by SOFIN NETWORK">
    <meta name="twitter:description" content="SOFIN NETWORK offers advanced digital content distribution and monetization solutions using AI technology. Automate video, music, and podcast distribution across hundreds of platforms with copyright protection and revenue optimization.">
    <meta name="twitter:image" content="https://sofin.network/images/thumnail.jpeg">

    <!-- Favicon & Title -->
    <title>Content Distribution & Monetization Solutions | SOFIN NETWORK</title>

    
    <link rel="icon" type="image/png" href="<?= asset("/style/acom-all/img/favicon/favicon-196x196.png") ?>" sizes="196x196">
    <link rel="icon" type="image/png" href="<?= asset("/style/acom-all/img/favicon/favicon-96x96.png") ?>" sizes="96x96">
    <link rel="icon" type="image/png" href="<?= asset("/style/acom-all/img/favicon/favicon-32x32.png") ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?= asset("/style/acom-all/img/favicon/favicon-16x16.png") ?>" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= asset("/style/acom-all/img/favicon/favicon-128.png") ?>" sizes="128x128">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Cormorant+Garamond:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&family=Josefin+Sans:wght@300;400;500;600;700&family=Cinzel:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Color Palette */
            --color-1: #7400b8;
            --color-2: #6930c3;
            --color-3: #5e60ce;
            --color-4: #5390d9;
            --color-5: #4ea8de;
            --color-6: #48bfe3;
            --color-7: #56cfe1;
            --color-8: #64dfdf;
            --color-9: #72efdd;
            --color-10: #80ffdb;
            --text-light: #ffffff;
            --text-dark: #1a1a1a;
            --text-muted: rgba(255, 255, 255, 0.8);
            --dark-bg: #0d0221;
            --dark-card: rgba(255, 255, 255, 0.05);
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
            --glass-shadow: 0 8px 32px 0 rgba(116, 0, 184, 0.37);
            --gradient-1: linear-gradient(135deg, var(--color-1), var(--color-3));
            --gradient-2: linear-gradient(135deg, var(--color-3), var(--color-6));
            --gradient-3: linear-gradient(135deg, var(--color-6), var(--color-10));
            --gradient-4: linear-gradient(135deg, var(--color-1), var(--color-10));
            --gradient-5: linear-gradient(45deg, var(--color-1), var(--color-3), var(--color-6), var(--color-10));
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            /* Font Variables */
            --heading-font: 'Playfair Display', serif;
            --body-font: 'Cormorant Garamond', serif;
            --accent-font: 'Dancing Script', cursive;
            --nav-font: 'Josefin Sans', sans-serif;
            --logo-font: 'Cinzel', serif;
        }

        /* Light Mode Colors */
        html.light-mode {
            --color-1: #6a11cb;
            --color-2: #2575fc;
            --color-3: #4facfe;
            --color-4: #00f2fe;
            --color-5: #4158d0;
            --color-6: #c850c0;
            --color-7: #ffcc70;
            --color-8: #4facfe;
            --color-9: #2575fc;
            --color-10: #6a11cb;
            --text-light: #1a1a1a;
            --text-dark: #ffffff;
            --text-muted: rgba(0, 0, 0, 0.75);
            --dark-bg: #f8f9ff;
            --dark-card: rgba(0, 0, 0, 0.05);
            --glass-bg: rgba(255, 255, 255, 0.9);
            --glass-border: rgba(106, 17, 203, 0.1);
            --glass-shadow: 0 8px 32px 0 rgba(106, 17, 203, 0.2);
        }

        /* PERFORMANCE OPTIMIZATIONS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Force GPU acceleration for smooth scrolling */
        .optimized-element,
        .hero-section,
        .service-card,
        .partner-type-card,
        .process-step,
        .content-showcase,
        .navbar,
        .logo-circle,
        .orbiting-dot {
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            will-change: transform;
        }

        /* LOADER CSS */
        .loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: var(--dark-bg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .loader-logo-container {
            position: relative;
            width: 250px;
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .loader-logo-circle {
            position: absolute;
            border-radius: 50%;
            border: 2px solid transparent;
            box-sizing: border-box;
            opacity: 0.7;
            pointer-events: none;
            filter: drop-shadow(0 0 10px rgba(116, 0, 184, 0.5));
        }

        .loader-circle-1 {
            width: 80px;
            height: 80px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-image: linear-gradient(45deg, var(--color-1), var(--color-3)) 1;
            animation: rotate 6s linear infinite;
        }

        .loader-circle-2 {
            width: 120px;
            height: 120px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-image: linear-gradient(135deg, var(--color-3), var(--color-6)) 1;
            animation: rotate 10s linear infinite reverse;
        }

        .loader-circle-3 {
            width: 160px;
            height: 160px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-image: linear-gradient(225deg, var(--color-6), var(--color-10)) 1;
            animation: rotate 14s linear infinite;
        }

        .loader-circle-4 {
            width: 200px;
            height: 200px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-image: linear-gradient(315deg, var(--color-1), var(--color-10)) 1;
            animation: rotate 18s linear infinite reverse;
        }

        .loader-logo-text {
            position: relative;
            z-index: 15;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: pulseLogo 2s ease-in-out infinite alternate;
            filter: drop-shadow(0 0 20px rgba(116, 0, 184, 0.6));
        }

        .loader-logo-main {
            font-family: var(--logo-font);
            font-size: 3.5rem;
            font-weight: 900;
            letter-spacing: 4px;
            background: linear-gradient(90deg, var(--color-1), var(--color-3), var(--color-6), var(--color-10));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            background-size: 300% 100%;
            animation: gradientShift 8s ease infinite;
            line-height: 1;
        }

        .loader-logo-tagline {
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: 4px;
            color: var(--color-7);
            margin-top: 5px;
            opacity: 0.9;
            text-transform: uppercase;
            font-family: var(--nav-font);
        }

        .loader-dots-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .loader-logo-dot {
            position: absolute;
            width: 6px;
            height: 6px;
            background-color: var(--color-7);
            border-radius: 50%;
            box-shadow: 0 0 8px var(--color-7);
            animation: sparkle 2s infinite alternate;
            opacity: 0.8;
            pointer-events: none;
        }

        .loader-orbiting-dot {
            position: absolute;
            width: 8px;
            height: 8px;
            background: var(--color-10);
            border-radius: 50%;
            box-shadow: 0 0 15px var(--color-10);
            transform-origin: center;
            opacity: 0.8;
            pointer-events: none;
            z-index: 3;
        }

        .loader {
            position: relative;
            width: 100px;
            height: 8px;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            overflow: hidden;
        }

        .loader::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, var(--color-1), var(--color-6), var(--color-10));
            animation: loading 3s infinite;
            border-radius: 4px;
        }

        @keyframes loading {
            0% { width: 0; }
            50% { width: 100%; }
            100% { width: 100%; }
        }

        @keyframes rotate {
            from { transform: translate(-50%, -50%) rotate(0deg); }
            to { transform: translate(-50%, -50%) rotate(360deg); }
        }

        @keyframes pulseLogo {
            0% {
                transform: scale(1);
                filter: brightness(1);
            }
            100% {
                transform: scale(1.05);
                filter: brightness(1.2);
            }
        }

        @keyframes sparkle {
            0% {
                transform: scale(1);
                box-shadow: 0 0 8px var(--color-7);
            }
            100% {
                transform: scale(1.5);
                box-shadow: 0 0 20px var(--color-9);
            }
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Main CSS */
        body {
            font-family: var(--body-font);
            background-color: var(--dark-bg);
            color: var(--text-light);
            overflow-x: hidden;
            font-weight: 400;
            line-height: 1.6;
            font-size: 1.1rem;
            scroll-behavior: smooth;
            padding-top: 0;
        }

        /* Optimized background */
        body {
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(116, 0, 184, 0.3) 0%, transparent 40%),
                radial-gradient(circle at 80% 40%, rgba(94, 96, 206, 0.3) 0%, transparent 40%),
                radial-gradient(circle at 40% 70%, rgba(72, 191, 227, 0.3) 0%, transparent 40%),
                radial-gradient(circle at 70% 90%, rgba(128, 255, 219, 0.3) 0%, transparent 40%);
            background-size: 100% 100%;
            background-attachment: fixed;
            position: relative;
            min-height: 100vh;
        }

        /* Optimized animated background */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(2px 2px at 20% 30%, rgba(116, 0, 184, 0.8), transparent),
                radial-gradient(2px 2px at 40% 70%, rgba(72, 191, 227, 0.8), transparent),
                radial-gradient(1px 1px at 90% 40%, rgba(128, 255, 219, 0.8), transparent);
            background-size: 200px 200px, 150px 150px, 100px 100px;
            animation: moveBackground 20s infinite linear;
            z-index: -2;
            transform: translateZ(0);
        }

        @keyframes moveBackground {
            0% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }

        html.light-mode body {
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(106, 17, 203, 0.2) 0%, transparent 40%),
                radial-gradient(circle at 80% 40%, rgba(37, 117, 252, 0.2) 0%, transparent 40%),
                radial-gradient(circle at 40% 70%, rgba(79, 172, 254, 0.2) 0%, transparent 40%),
                radial-gradient(circle at 70% 90%, rgba(200, 80, 192, 0.2) 0%, transparent 40%);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--heading-font);
            font-weight: 700;
            letter-spacing: 0.5px;
            line-height: 1.3;
            margin-bottom: 0;
        }

        /* OPTIMIZED LOGO SECTION */
        .logo-container {
            position: relative;
            width: 160px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: var(--transition);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            position: relative;
            z-index: 10;
            font-family: var(--heading-font);
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-light);
            letter-spacing: 2px;
            transition: var(--transition);
            text-decoration: none;
        }

        .navbar-brand:hover {
            color: var(--text-light);
        }

        .logo-text {
            position: relative;
            z-index: 15;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            filter: drop-shadow(0 0 20px rgba(116, 0, 184, 0.6));
        }

        .logo-main {
            font-family: var(--logo-font);
            font-size: 1.8rem;
            font-weight: 900;
            letter-spacing: 2px;
            background: linear-gradient(90deg, var(--color-1), var(--color-3), var(--color-6), var(--color-10));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            background-size: 300% 100%;
            animation: gradientShift 8s ease infinite;
            line-height: 1;
        }

        .logo-tagline {
            font-size: 0.65rem;
            font-weight: 500;
            letter-spacing: 3px;
            color: var(--color-7);
            margin-top: 2px;
            opacity: 0.9;
            text-transform: uppercase;
            font-family: var(--nav-font);
        }

        .logo-circle {
            position: absolute;
            border-radius: 50%;
            border: 1px solid transparent;
            box-sizing: border-box;
            opacity: 0.7;
            pointer-events: none;
            filter: drop-shadow(0 0 10px rgba(116, 0, 184, 0.5));
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .circle-1 {
            width: 25px;
            height: 25px;
            border-image: linear-gradient(45deg, var(--color-1), var(--color-3)) 1;
            animation: rotate 8s linear infinite;
        }

        .circle-2 {
            width: 40px;
            height: 40px;
            border-image: linear-gradient(135deg, var(--color-3), var(--color-6)) 1;
            animation: rotate 12s linear infinite reverse;
        }

        .circle-3 {
            width: 55px;
            height: 55px;
            border-image: linear-gradient(225deg, var(--color-6), var(--color-10)) 1;
            animation: rotate 16s linear infinite;
        }

        .logo-dot {
            position: absolute;
            width: 4px;
            height: 4px;
            background-color: var(--color-7);
            border-radius: 50%;
            box-shadow: 0 0 10px var(--color-7);
            opacity: 0.8;
            pointer-events: none;
            animation: sparkle 2s ease-in-out infinite alternate;
        }

        .orbiting-dot {
            position: absolute;
            width: 5px;
            height: 5px;
            background: var(--color-10);
            border-radius: 50%;
            box-shadow: 0 0 15px var(--color-10);
            transform-origin: center;
            opacity: 0.8;
            pointer-events: none;
            z-index: 3;
        }

        /* OPTIMIZED NAVBAR */
        .navbar {
            padding: 20px 0;
            transition: var(--transition);
            position: fixed;
            width: 100%;
            z-index: 1030;
            top: 0;
            left: 0;
            right: 0;
            background: transparent;
        }

        .navbar.scrolled {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 15px 0;
            box-shadow: var(--glass-shadow);
            border-bottom: 1px solid var(--glass-border);
        }

        .nav-link {
            font-family: var(--nav-font);
            font-weight: 500;
            margin: 0 15px;
            padding: 10px 0;
            position: relative;
            color: var(--text-light) !important;
            font-size: 1rem;
            letter-spacing: 0.5px;
            transition: var(--transition);
            text-decoration: none;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-3);
            transition: var(--transition);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--color-8) !important;
            text-shadow: 0 0 10px rgba(84, 144, 217, 0.6);
        }

        /* HERO SECTION */
        .hero-section {
            height: 100vh;
            min-height: 600px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            padding-bottom: -2px;
            /* padding-bottom: 150px; */
            /* padding-right: 900px; */
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-4);
            opacity: 0.15;
            z-index: 1;
        }

        /* Hero Slideshow */
        .hero-slideshow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .hero-slide.active {
            opacity: 1;
        }

        .hero-slide-1 {
            background-image: linear-gradient(rgba(13, 2, 33, 0.5), rgba(13, 2, 33, 0.5)), url('../images/phanphoinoidung/1.jpg');
        }

        .hero-slide-2 {
            background-image: linear-gradient(rgba(13, 2, 33, 0.5), rgba(13, 2, 33, 0.5)), url('../images/phanphoinoidung/2.png');
        }

        .hero-slide-3 {
            background-image: linear-gradient(rgba(13, 2, 33, 0.5), rgba(13, 2, 33, 0.5)), url('../images/phanphoinoidung/3.jpg');
        }

        .hero-slide-4 {
            background-image: linear-gradient(rgba(13, 2, 33, 0.5), rgba(13, 2, 33, 0.5)), url('../images/phanphoinoidung/4.png');
        }

        .hero-slide-5 {
            background-image: linear-gradient(rgba(13, 2, 33, 0.5), rgba(13, 2, 33, 0.5)), url('../images/phanphoinoidung/5.jpg');
        }

        .hero-slide-controls {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
            z-index: 5;
        }

        .hero-slide-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .hero-slide-dot.active {
            background: var(--color-7);
            transform: scale(1.2);
            border-color: rgba(255, 255, 255, 0.5);
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 30% 20%, rgba(116, 0, 184, 0.3) 1px, transparent 1px),
                radial-gradient(circle at 70% 80%, rgba(128, 255, 219, 0.3) 1px, transparent 1px),
                radial-gradient(circle at 40% 60%, rgba(72, 191, 227, 0.3) 1px, transparent 1px);
            background-size: 80px 80px, 100px 100px, 60px 60px;
            animation: Float 10s ease-in-out infinite;
            z-index: 1;
        }

        @keyframes Float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* I'll add a style block to modify the hero content positioning */
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
            margin-top: 150px; /* Add margin to push content down */
        }

        .hero-subtitle {
            font-family: var(--accent-font);
            font-size: 2.8rem;
            margin-bottom: 1rem;
            color: var(--color-7);
            font-weight: 500;
            animation: fadeInUp 1s ease;
            text-shadow: 0 0 20px rgba(86, 207, 225, 0.5);
        }

        .hero-title {
            font-size: 5rem; /* Make hero title slightly larger for better visibility */
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.2s both;
            text-shadow: 0 0 30px rgba(0, 0, 0, 0.5); /* Add shadow for better readability */
        }

        .hero-title .main-text {
            background: linear-gradient(90deg, var(--color-1), var(--color-3), var(--color-6), var(--color-8), var(--color-10), var(--color-8), var(--color-6), var(--color-3), var(--color-1));
            background-size: 300% 100%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: flowingGradient 3s ease-in-out infinite;
            font-size: 5rem; /* Increase from 4.8rem */
            font-weight: 700;
            line-height: 1.1;
            filter: drop-shadow(0 0 20px rgba(116, 0, 184, 0.5));
        }

        @keyframes flowingGradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .hero-description {
            font-size: 1.6rem;
            margin-bottom: 3rem;
            color: var(--text-muted);
            animation: fadeInUp 1s ease 0.4s both;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        .hero-buttons {
            animation: fadeInUp 1s ease 0.6s both;
            display: flex;
            font-size: 13px;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 4rem;
        }

        .btn-primary-custom,
        .btn-outline-custom {
            border: none;
            padding: 15px 40px;
            border-radius: 50px;
            font-weight: 600;
            font-family: var(--nav-font);
            letter-spacing: 1px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
            white-space: nowrap;
        }

        .btn-primary-custom {
            background: var(--gradient-3);
            color: var(--text-dark);
            box-shadow: 0 10px 30px rgba(84, 144, 217, 0.4);
        }

        .btn-primary-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(84, 144, 217, 0.6);
            color: var(--text-dark);
        }

        .btn-outline-custom {
            background: transparent;
            border: 2px solid var(--color-6);
            color: var(--color-6);
        }

        .btn-outline-custom:hover {
            color: var(--text-dark);
            border-color: transparent;
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(72, 191, 227, 0.4);
            background: var(--gradient-3);
        }

        /* FLOATING BUTTONS */
        .theme-switch,
        .language-switch,
        .scroll-to-top {
            position: fixed;
            z-index: 1040;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: var(--transition);
            overflow: hidden;
            border: none;
        }

        .theme-switch {
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: var(--gradient-1);
            color: var(--text-light);
            box-shadow: 0 5px 15px rgba(116, 0, 184, 0.4);
        }

        .language-switch {
            bottom: 100px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: var(--gradient-2);
            color: var(--text-light);
            box-shadow: 0 5px 15px rgba(105, 48, 195, 0.4);
        }

        .scroll-to-top {
            bottom: 30px;
            left: 30px;
            width: 50px;
            height: 50px;
            background: var(--gradient-2);
            color: white;
            display: none;
            opacity: 0;
            transform: translateY(20px);
            box-shadow: 0 4px 15px rgba(105, 48, 195, 0.3);
        }

        .scroll-to-top.show {
            display: flex;
            opacity: 1;
            transform: translateY(0);
        }

        .theme-switch:hover,
        .language-switch:hover,
        .scroll-to-top:hover {
            transform: translateY(-5px) scale(1.1);
        }

        .theme-switch:hover {
            box-shadow: 0 10px 20px rgba(116, 0, 184, 0.6);
        }

        .language-switch:hover {
            box-shadow: 0 10px 20px rgba(105, 48, 195, 0.6);
        }

        .scroll-to-top:hover {
            box-shadow: 0 8px 25px rgba(105, 48, 195, 0.5);
        }

        /* SECTIONS */
        .content-services-section,
        .partnerships-section,
        .content-process-section,
        .content-showcase-section,
        .benefits-section {
            padding: 100px 0;
            position: relative;
        }

        .section-title {
            font-size: 3.5rem;
            text-align: center;
            margin-bottom: 2rem;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            background-size: 200% 200%;
            animation: gradientShift 4s ease infinite;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--gradient-3);
            border-radius: 2px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: var(--text-muted);
            margin-bottom: 4rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        /* CARDS */
        .service-card,
        .partner-type-card,
        .process-step,
        .benefit-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            transition: var(--transition);
            box-shadow: var(--glass-shadow);
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .service-card {
            padding: 40px;
            height: 100%;
            text-align: center;
        }

        .partner-type-card {
            padding: 40px;
            height: 100%;
        }

        .process-step {
            padding: 50px 40px;
            text-align: center;
        }

        .benefit-card {
            padding: 40px;
            height: 100%;
            text-align: center;
        }

        .service-card:hover,
        .partner-type-card:hover,
        .process-step:hover,
        .benefit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(116, 0, 184, 0.4);
        }

        /* ICONS */
        .service-icon,
        .partner-type-icon,
        .process-icon,
        .benefit-icon {
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            transition: var(--transition);
            flex-shrink: 0;
        }

        .service-icon {
            width: 100px;
            height: 100px;
            font-size: 3rem;
            color: var(--color-7);
            background: var(--gradient-2);
            margin: 0 auto 30px;
        }

        .partner-type-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            font-size: 2.5rem;
            color: var(--color-4);
            background: var(--gradient-3);
        }

        .process-icon {
            width: 100px;
            height: 100px;
            font-size: 3rem;
            color: var(--color-7);
            background: var(--gradient-1);
            margin: 0 auto 30px;
            position: relative;
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            font-size: 2.5rem;
            /* color: var(--color-8); */
            background: var(--gradient-3);
            margin: 0 auto 25px;
        }

        /* SPECIAL STYLING FOR CONTENT DISTRIBUTION PAGE */
        .distribution-platform {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            transition: var(--transition);
            border: 1px solid var(--glass-border);
        }

        .distribution-platform:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(72, 191, 227, 0.3);
        }

        .platform-logo {
            width: 60px;
            height: 60px;
            background: var(--gradient-3);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: var(--text-dark);
            margin-bottom: 15px;
        }

        .content-showcase {
            background: var(--glass-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--glass-shadow);
            transition: var(--transition);
        }

        .content-showcase:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(116, 0, 184, 0.4);
        }

        .content-image {
            width: 100%;
            height: 370px;
            background: var(--gradient-4);
            position: relative;
            overflow: hidden;
        }

        .content-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(116, 0, 184, 0.2), rgba(72, 191, 227, 0.2));
            z-index: 1;
        }

        .content-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .content-info {
            padding: 20px;
        }

        .content-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--text-light);
            text-align: center;
        }

        .content-description {
            color: #c6ff92;
            font-size: 1.2rem;
            margin-bottom: 20px;
            line-height: 1.7;
            text-align: center;
        }

        .content-stats {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .stat-item {
            background: rgba(116, 0, 184, 0.2);
            padding: 10px 16px;
            border-radius: 25px;
            font-size: 0.9rem;
            color: var(--color-7);
        }

        /* PROGRESS BAR */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: var(--gradient-5);
            z-index: 1050;
            transition: width 0.1s linear;
            box-shadow: 0 0 10px rgba(116, 0, 184, 0.5);
        }

        /* CUSTOM CURSOR */
        .cursor,
        .cursor-follower {
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            border-radius: 50%;
            transition: all 0.1s ease;
        }

        .cursor {
            width: 20px;
            height: 20px;
            background-color: rgba(128, 255, 219, 0.8);
            mix-blend-mode: difference;
            transform: translate(-50%, -50%);
        }

        .cursor-follower {
            width: 40px;
            height: 40px;
            border: 2px solid rgba(128, 255, 219, 0.5);
            transform: translate(-50%, -50%);
        }

        .cursor.active {
            width: 40px;
            height: 40px;
            background-color: rgba(116, 0, 184, 0.8);
        }

        .cursor-follower.active {
            width: 80px;
            height: 80px;
            border-color: rgba(116, 0, 184, 0.5);
        }

        /* LANGUAGE HANDLING */
        .vi, .en {
            display: none;
        }

        html[lang="vi"] .vi {
            display: block;
        }

        html[lang="en"] .en {
            display: block;
        }

        span.vi, span.en {
            display: none;
        }

        html[lang="vi"] span.vi {
            display: inline;
        }

        html[lang="en"] span.en {
            display: inline;
        }

        /* ANIMATIONS */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
            will-change: opacity, transform;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* SPECIFIC CONTENT STYLING */
        .content-platform-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .platform-feature {
            background: var(--glass-bg);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            border: 1px solid var(--glass-border);
            transition: var(--transition);
        }

        .platform-feature:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(72, 191, 227, 0.3);
        }

        .feature-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--color-8);
            margin-bottom: 10px;
        }

        /* TIMELINE STYLES */
        .timeline {
            position: relative;
            padding: 30px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 4px;
            height: 100%;
            background: var(--gradient-3);
            transform: translateX(-50%);
        }

        .timeline-item {
            position: relative;
            width: 50%;
            padding: 20px;
            box-sizing: border-box;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
            padding-right: 40px;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
            padding-left: 40px;
        }

        .timeline-content {
            background: var(--glass-bg);
            padding: 30px;
            border-radius: 20px;
            position: relative;
            border: 1px solid var(--glass-border);
            transition: var(--transition);
        }

        .timeline-content:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 30px rgba(116, 0, 184, 0.3);
        }

        .timeline-content::before {
            content: '';
            position: absolute;
            top: 30px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--gradient-3);
            transform: translateY(-50%);
        }

        .timeline-item:nth-child(odd) .timeline-content::before {
            right: -30px;
        }

        .timeline-item:nth-child(even) .timeline-content::before {
            left: -30px;
        }

        /* FOOTER CSS */
        .footer {
            background: linear-gradient(135deg, var(--dark-bg) 0%, #190040 50%, var(--dark-bg) 100%);
            padding: 60px 0 20px;
            position: relative;
            margin-top: 100px;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--color-7), transparent);
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-main {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 400px;
            gap: 40px;
            margin-bottom: 40px;
            align-items: start;
        }

        .footer-logo-section {
            padding-right: 20px;
        }

        .footer-description {
            color: var(--text-muted);
            margin-bottom: 25px;
            font-size: 1rem;
            line-height: 1.8;
        }

        .footer-social {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .footer-social a {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--text-light);
            text-decoration: none;
            font-size: 1.2rem;
            transition: var(--transition);
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
        }

        .footer-social a:hover {
            background: var(--gradient-3);
            color: var(--text-dark);
            transform: translateY(-5px);
        }

        .footer-links-section h6 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 25px;
            color: var(--text-light);
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links-section h6::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--gradient-3);
        }

        .footer-links-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links-list li {
            margin-bottom: 12px;
        }

        .footer-links-list a {
            color: var(--text-muted);
            text-decoration: none;
            transition: var(--transition);
            display: inline-block;
            font-size: 1rem;
        }

        .footer-links-list a:hover {
            color: var(--color-7);
            transform: translateX(5px);
        }

        .footer-newsletter {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 30px;
            box-shadow: var(--glass-shadow);
        }

        .footer-newsletter h6 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-light);
            position: relative;
            padding-bottom: 10px;
        }

        .footer-newsletter h6::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--gradient-3);
        }

        .footer-newsletter p {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .footer-newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .footer-newsletter-form input {
            padding: 12px 16px;
            border-radius: 25px;
            border: 1px solid var(--glass-border);
            background: var(--glass-bg);
            color: var(--text-light);
            font-size: 1rem;
            transition: var(--transition);
        }

        .footer-newsletter-form input::placeholder {
            color: var(--text-muted);
        }

        .footer-newsletter-form input:focus {
            outline: none;
            border-color: var(--color-6);
            box-shadow: 0 0 10px rgba(72, 191, 227, 0.4);
        }

        .footer-newsletter-form button {
            padding: 12px 24px;
            border-radius: 25px;
            border: none;
            background: var(--gradient-3);
            color: var(--text-dark);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-size: 1rem;
        }

        .footer-newsletter-form button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(72, 191, 227, 0.4);
        }


        .footer-divider {
            height: 1px;
            background: var(--glass-border);
            margin: 40px 0 30px;
        }

        .footer-bottom {
            color: var(--text-muted);
            font-size: 0.95rem;
            font-family: var(--body-font);
        }
        
        .footer-bottom a {
            color: var(--color-8);
            transition: var(--transition);
        }
        
        .footer-bottom a:hover {
            color: var(--color-9);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hero-title,
            .hero-title .main-text {
                font-size: 3.5rem; /* Smaller font on mobile */
            }
            .section-title {
                font-size: 2.5rem;
            }
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            .timeline::before {
                left: 30px;
            }
            .timeline-item,
            .timeline-item:nth-child(odd),
            .timeline-item:nth-child(even) {
                width: 100%;
                left: 0;
                padding-left: 60px;
                padding-right: 20px;
            }
            .timeline-content::before {
                left: -30px !important;
            }
            .footer-main {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .footer-bottom {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            .scroll-to-top {
                bottom: 20px;
                left: 20px;
                width: 45px;
                height: 45px;
            }
            .theme-switch {
                bottom: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
            }
            .language-switch {
                bottom: 80px;
                right: 20px;
                width: 50px;
                height: 50px;
            }
            .cursor, .cursor-follower {
                display: none !important;
            }
        }

        /* SCROLL BEHAVIOR */
        html {
            scroll-behavior: smooth;
        }

        body {
            scroll-behavior: smooth;
        }

        /* OPTIMIZATION: Pause animations when not in view */
        .logo-container:not(.in-view) .logo-circle,
        .logo-container:not(.in-view) .orbiting-dot {
            animation-play-state: paused;
        }

        .logo-container.in-view .logo-circle,
        .logo-container.in-view .orbiting-dot {
            animation-play-state: running;
        }

                /* Add this to the existing styles */
        .content-image a {
            display: block;
            width: 100%;
            height: 100%;
            cursor: pointer;
            position: relative;
            /* position: fixed; */
            z-index: 10;
        }
        
        .content-image a:hover {
            opacity: 0.9;
        }
        
        .content-image a:active {
            opacity: 0.7;
        }
        
        /* Make sure the image fills the container properly */
        .content-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
    </style>
</head>

<body>
    <!-- Loader with SOFIN Logo -->
    <div class="loader-wrapper">
        <div class="loader-logo-container">
            <div class="loader-logo-circle loader-circle-1"></div>
            <div class="loader-logo-circle loader-circle-2"></div>
            <div class="loader-logo-circle loader-circle-3"></div>
            <div class="loader-logo-circle loader-circle-4"></div>

            <div class="loader-dots-container" id="loader-dots"></div>
            <div class="loader-orbiting-dot" id="loader-orbit-1"></div>
            <div class="loader-orbiting-dot" id="loader-orbit-2"></div>
            <div class="loader-orbiting-dot" id="loader-orbit-3"></div>

            <div class="loader-logo-text">
                <div class="loader-logo-main">SOFIN</div>
                <div class="loader-logo-tagline">NETWORK</div>
            </div>
        </div>
        <div class="loader"></div>
    </div>

    <!-- Custom Cursor -->
    <div class="cursor"></div>
    <div class="cursor-follower"></div>

    <!-- Progress Bar -->
    <div class="progress-bar"></div>

    <!-- Theme Switch -->
    <div class="theme-switch" id="theme-switch">
        <i class="fas fa-sun"></i>
    </div>

    <!-- Language Switch -->
    <div class="language-switch" id="language-switch">
        <span class="current-lang">VI</span>
    </div>

    <!-- Scroll to Top Button -->
    <button class="scroll-to-top" id="scroll-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?=set_route_to_link([])?>">
                <div class="logo-container">
                    <div class="logo-dots" id="logo-dots"></div>
                    <div class="orbiting-dot" id="orbit-dot-1"></div>
                    <div class="orbiting-dot" id="orbit-dot-2"></div>
                    <div class="logo-text">
                        <div class="logo-main">SOFIN</div>
                        <div class="logo-tagline">NETWORK</div>
                    </div>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?=$menus?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <!-- Hero Slideshow -->
        <div class="hero-slideshow">
            <div class="hero-slide hero-slide-1 active"></div>
            <div class="hero-slide hero-slide-2"></div>
            <div class="hero-slide hero-slide-3"></div>
            <div class="hero-slide hero-slide-4"></div>
            <div class="hero-slide hero-slide-5"></div>
        </div>
        <!-- Slide Controls -->
        <div class="hero-slide-controls">
            <div class="hero-slide-dot active" data-slide="1"></div>
            <div class="hero-slide-dot" data-slide="2"></div>
            <div class="hero-slide-dot" data-slide="3"></div>
            <div class="hero-slide-dot" data-slide="4"></div>
            <div class="hero-slide-dot" data-slide="5"></div>
        </div>
        <div class="container">
            <div class="hero-content">

                <p class="hero-subtitle vi">Phân Phối & Khai Thác</p>
                <p class="hero-subtitle en">Distribution & Monetization</p>


                <h1 class="hero-title">
                    <span class="main-text vi">Phân Phối Nội Dung<br>Thông Minh</span>
                    <span class="main-text en">Intelligent Content<br>Distribution</span>
                </h1>

                <p class="hero-description vi">
                    Giải pháp hiệu quả cho phân phối và khai thác nội dung số.
                </p>
                <p class="hero-description en">
                    Effective solutions for digital content distribution and monetization.
                </p>

                <div class="hero-buttons">
                    <a href="#services" class="btn-primary-custom">
                        <span class="vi">Khám Phá Dịch Vụ</span>
                        <span class="en">Explore Services</span>
                    </a>
                    <a href="#partnerships" class="btn-outline-custom">
                        <span class="vi">Hợp Tác Với Chúng Tôi</span>
                        <span class="en">Partner With Us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <!-- Content Showcase Section -->
    <section class="content-showcase-section" id="showcase">
        <div class="container">
            <!-- <h2 class="section-title reveal vi">Thành Công Tiêu Biểu</h2> -->
            <h2 class="section-title reveal vi">Dự Án Nổi Bật</h2>
            <h2 class="section-title reveal en">Featured Projects</h2>
            <p class="section-subtitle reveal vi">
                Những dự án phân phối nội dung thành công với hàng triệu lượt xem và doanh thu đáng kể.
            </p>
            <p class="section-subtitle reveal en">
                Successful content distribution projects with millions of views and significant revenue.
            </p>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="content-showcase reveal">
                        <div class="content-image">
                            <a href="https://www.youtube.com/watch?v=o6SB8H0XTb0&list=PLmKMbzOLNaXxwx2zK7AqLCbiFrQmNBUda" target="_blank">
                                <img src="../images/phanphoinoidung/1.jpg" alt="ALBUM KHU VƯỜN TÌNH" />
                            </a>
                        </div>
                        <div class="content-info">
                            <h4 class="content-title vi">ALBUM KHU VƯỜN TÌNH</h4>
                            <h4 class="content-title en">LOVE GARDEN ALBUM</h4>
                            <p class="content-description vi">
                                Tăng Duy Tân.
                            </p>
                            <p class="content-description en">
                                Tăng Duy Tân.
                            </p>
                            <div class="content-stats">
                                <span class="stat-item vi">50M lượt xem</span>
                                <span class="stat-item en">50M views</span>
                                <span class="stat-item vi">15 nền tảng</span>
                                <span class="stat-item en">15 platforms</span>
                                <span class="stat-item vi">$120K doanh thu</span>
                                <span class="stat-item en">$120K revenue</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="content-showcase reveal">
                        <div class="content-image">
                            <a href="https://www.youtube.com/watch?v=FdhLu5aXcDI" target="_blank">
                                <img src="../images/phanphoinoidung/2.png" alt="Podcast 'IKIGAI'" />
                            </a>
                        </div>
                        <div class="content-info">
                            <h4 class="content-title vi">IKIGAI</h4>
                            <h4 class="content-title en">IKIGAI</h4>
                            <p class="content-description vi">
                                Tăng Duy Tân x Bích Phương x 2pillz
                            </p>
                            <p class="content-description en">
                                Tăng Duy Tân x Bích Phương x 2pillz
                            </p>
                            <div class="content-stats">
                                <span class="stat-item vi">10M downloads</span>
                                <span class="stat-item en">10M downloads</span>
                                <span class="stat-item vi">200 tập</span>
                                <span class="stat-item en">200 episodes</span>
                                <span class="stat-item vi">$45K doanh thu</span>
                                <span class="stat-item en">$45K revenue</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="content-showcase reveal">
                        <div class="content-image">
                            <a href="https://www.youtube.com/watch?v=0tFUfuEhh28" target="_blank">
                                <img src="../images/phanphoinoidung/3.jpg" alt="Series 'Khởi Nghiệp Tech'" />
                            </a>
                        </div>
                        <div class="content-info">
                            <h4 class="content-title vi">HIDE THIS LOVE</h4>
                            <h4 class="content-title en">HIDE THIS LOVE</h4>
                            <p class="content-description vi">
                                ATBA
                            </p>
                            <p class="content-description en">
                                ATBA
                            </p>
                            <div class="content-stats">
                                <span class="stat-item vi">30M lượt xem</span>
                                <span class="stat-item en">30M views</span>
                                <span class="stat-item vi">24 tập</span>
                                <span class="stat-item en">24 episodes</span>
                                <span class="stat-item vi">$180K doanh thu</span>
                                <span class="stat-item en">$180K revenue</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="content-showcase reveal">
                        <div class="content-image">
                            <a href="https://www.youtube.com/watch?v=IyHPWIQM_As" target="_blank">
                                <img src="../images/phanphoinoidung/4.png" alt="MV 'Đi Về Đâu' - Onionn" />
                            </a>
                        </div>
                        <div class="content-info">
                            <h4 class="content-title vi">NẠP SUSU, VẼ HÈ KỲ THÚ</h4>
                            <h4 class="content-title en">NẠP SUSU, VẼ HÈ KỲ THÚ</h4>
                            <p class="content-description vi">
                                Tăng Duy Tân x Vinamilk
                            </p>
                            <p class="content-description en">
                                Tăng Duy Tân x Vinamilk
                            </p>
                            <div class="content-stats">
                                <span class="stat-item vi">50M lượt xem</span>
                                <span class="stat-item en">50M views</span>
                                <span class="stat-item vi">15 nền tảng</span>
                                <span class="stat-item en">15 platforms</span>
                                <span class="stat-item vi">$120K doanh thu</span>
                                <span class="stat-item en">$120K revenue</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="content-showcase reveal">
                        <div class="content-image">
                            <a href="https://www.youtube.com/watch?v=fGqrHMfYYYg" target="_blank">
                                <img src="../images/phanphoinoidung/5.jpg" alt="Podcast 'Tech Talk Vietnam'" />
                            </a>
                        </div>
                        <div class="content-info">
                            <h4 class="content-title vi">CHẤT RIÊNG RẤT NGẦU</h4>
                            <h4 class="content-title en">CHẤT RIÊNG RẤT NGẦU"</h4>
                            <p class="content-description vi">
                                Tăng Duy Tân x VF3
                            </p>
                            <p class="content-description en">
                                Tăng Duy Tân x VF3
                            </p>
                            <div class="content-stats">
                                <span class="stat-item vi">10M downloads</span>
                                <span class="stat-item en">10M downloads</span>
                                <span class="stat-item vi">200 tập</span>
                                <span class="stat-item en">200 episodes</span>
                                <span class="stat-item vi">$45K doanh thu</span>
                                <span class="stat-item en">$45K revenue</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="content-showcase reveal">
                        <div class="content-image">
                            <a href="https://www.youtube.com/watch?v=2IFvhJ0RGRY" target="_blank">
                                <img src="../images/phanphoinoidung/6.jpg" alt="Series 'Khởi Nghiệp Tech'" />
                            </a>
                        </div>
                        <div class="content-info">
                            <h4 class="content-title vi">VÀ EM CÓ BIẾT TÌNH YÊU LÀ GÌ</h4>
                            <h4 class="content-title en">VÀ EM CÓ BIẾT TÌNH YÊU LÀ GÌ</h4>
                            <p class="content-description vi">
                                Long Kai x Ngọc Sâm
                            </p>
                            <p class="content-description en">
                                Long Kai x Ngọc Sâm
                            </p>
                            <div class="content-stats">
                                <span class="stat-item vi">30M lượt xem</span>
                                <span class="stat-item en">30M views</span>
                                <span class="stat-item vi">24 tập</span>
                                <span class="stat-item en">24 episodes</span>
                                <span class="stat-item vi">$180K doanh thu</span>
                                <span class="stat-item en">$180K revenue</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>











    <!-- Content Services Section -->
    <section class="content-services-section" id="services">
        <div class="container">
            <h2 class="section-title reveal vi">Dịch Vụ Phân Phối Nội Dung</h2>
            <h2 class="section-title reveal en">Content Distribution Services</h2>
            <p class="section-subtitle reveal vi">
                Cung cấp giải pháp phân phối nội dung toàn diện từ video, âm nhạc đến podcast với công nghệ AI tiên tiến.
            </p>
            <p class="section-subtitle reveal en">
                Providing comprehensive content distribution solutions from video, music to podcasts with advanced AI technology.
            </p>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card reveal">
                        <div class="service-icon">
                            <i class="fas fa-film"></i>
                        </div>
                        <h3 class="vi">Phân Phối Video Thông Minh</h3>
                        <h3 class="en">Smart Video Distribution</h3>
                        <p class="vi">
                            Hệ thống phân phối video tự động tới hàng trăm nền tảng với tối ưu hóa chất lượng và metadata.
                        </p>
                        <p class="en">
                            Automated video distribution system to hundreds of platforms with quality and metadata optimization.
                        </p>
                        <div class="platform-feature">
                            <h5 class="feature-title vi">Nền tảng hỗ trợ:</h5>
                            <h5 class="feature-title en">Supported platforms:</h5>
                            <span class="vi">YouTube, TikTok, Facebook, Instagram, Twitter, LinkedIn, Vimeo</span>
                            <span class="en">YouTube, TikTok, Facebook, Instagram, Twitter, LinkedIn, Vimeo</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card reveal">
                        <div class="service-icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <h3 class="vi">Phân Phối Âm Nhạc</h3>
                        <h3 class="en">Music Distribution</h3>
                        <p class="vi">
                            Kết nối với các nền tảng streaming lớn, quản lý bản quyền và tối ưu hóa doanh thu từ âm nhạc.
                        </p>
                        <p class="en">
                            Connect with major streaming platforms, manage royalties and optimize music revenue.
                        </p>
                        <div class="platform-feature">
                            <h5 class="feature-title vi">Nền tảng hỗ trợ:</h5>
                            <h5 class="feature-title en">Supported platforms:</h5>
                            <span class="vi">Spotify, Apple Music, Zing MP3, NhacCuaTui, SoundCloud</span>
                            <span class="en">Spotify, Apple Music, Zing MP3, NhacCuaTui, SoundCloud</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card reveal">
                        <div class="service-icon">
                            <i class="fas fa-microphone"></i>
                        </div>
                        <h3 class="vi">Podcast & Audio</h3>
                        <h3 class="en">Podcast & Audio</h3>
                        <p class="vi">
                            Phân phối podcast và nội dung audio tới các nền tảng hàng đầu với analytics chi tiết.
                        </p>
                        <p class="en">
                            Distribute podcasts and audio content to top platforms with detailed analytics.
                        </p>
                        <div class="platform-feature">
                            <h5 class="feature-title vi">Nền tảng hỗ trợ:</h5>
                            <h5 class="feature-title en">Supported platforms:</h5>
                            <span class="vi">Apple Podcasts, Spotify, Google Podcasts, Audible</span>
                            <span class="en">Apple Podcasts, Spotify, Google Podcasts, Audible</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card reveal">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 class="vi">Monetization Analytics</h3>
                        <h3 class="en">Monetization Analytics</h3>
                        <p class="vi">
                            Theo dõi và phân tích hiệu suất nội dung, doanh thu từ các nền tảng với dashboard trực quan.
                        </p>
                        <p class="en">
                            Track and analyze content performance, revenue from platforms with intuitive dashboard.
                        </p>
                        <div class="platform-feature">
                            <h5 class="feature-title vi">Tính năng nổi bật:</h5>
                            <h5 class="feature-title en">Key features:</h5>
                            <span class="vi">Real-time analytics, Báo cáo doanh thu, Cross-platform tracking</span>
                            <span class="en">Real-time analytics, Revenue reports, Cross-platform tracking</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card reveal">
                        <div class="service-icon">
                            <i class="fas fa-copyright"></i>
                        </div>
                        <h3 class="vi">Quản Lý Bản Quyền</h3>
                        <h3 class="en">Copyright Management</h3>
                        <p class="vi">
                            Bảo vệ và quản lý bản quyền nội dung với công nghệ blockchain và AI fingerprinting.
                        </p>
                        <p class="en">
                            Protect and manage content copyrights with blockchain technology and AI fingerprinting.
                        </p>
                        <div class="platform-feature">
                            <h5 class="feature-title vi">Công nghệ:</h5>
                            <h5 class="feature-title en">Technology:</h5>
                            <span class="vi">Blockchain Registry, AI Content ID, Automatic Claim</span>
                            <span class="en">Blockchain Registry, AI Content ID, Automatic Claim</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card reveal">
                        <div class="service-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="vi">Tối Ưu Hóa AI</h3>
                        <h3 class="en">AI Optimization</h3>
                        <p class="vi">
                            Sử dụng AI để tối ưu hóa tiêu đề, mô tả, hashtag và timing đăng tải cho hiệu quả tối đa.
                        </p>
                        <p class="en">
                            Use AI to optimize titles, descriptions, hashtags and posting timing for maximum effectiveness.
                        </p>
                        <div class="platform-feature">
                            <h5 class="feature-title vi">AI Features:</h5>
                            <h5 class="feature-title en">AI Features:</h5>
                            <span class="vi">Smart SEO, Auto-tagging, Trend Analysis</span>
                            <span class="en">Smart SEO, Auto-tagging, Trend Analysis</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Types Section -->
    <section class="partnerships-section" id="partnerships">
        <div class="container">
            <h2 class="section-title reveal vi">Mô Hình Hợp Tác</h2>
            <h2 class="section-title reveal en">Partnership Models</h2>
            <p class="section-subtitle reveal vi">
                Với nhiều hình thức hợp tác linh hoạt phù hợp với từng đối tác từ cá nhân đến doanh nghiệp lớn.
            </p>
            <p class="section-subtitle reveal en">
                With flexible partnership forms suitable for each partner from individuals to large enterprises.
            </p>

            <div class="row">
                <!-- Music Producers -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="partner-type-card reveal">
                        <div class="partner-type-icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <h3 class="vi">Nhà Sản Xuất Âm Nhạc</h3>
                        <h3 class="en">Music Producers</h3>
                        <p class="vi">
                            Hợp tác với các studio âm nhạc, nhà sản xuất độc lập để phân phối và khai thác tác phẩm âm nhạc.
                        </p>
                        <p class="en">
                            Partner with music studios, independent producers to distribute and monetize musical works.
                        </p>
                        <ul class="list-unstyled mt-3">
                            <li class="vi">✓ Chia sẻ doanh thu theo tỷ lệ 70/30</li>
                            <li class="en">✓ Revenue share at 70/30 ratio</li>
                            <li class="vi">✓ Hỗ trợ marketing và promotion</li>
                            <li class="en">✓ Marketing and promotion support</li>
                            <li class="vi">✓ Phân tích xu hướng âm nhạc</li>
                            <li class="en">✓ Music trend analysis</li>
                        </ul>
                    </div>
                </div>

                <!-- Video Producers -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="partner-type-card reveal">
                        <div class="partner-type-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3 class="vi">Nhà Sản Xuất Video</h3>
                        <h3 class="en">Video Producers</h3>
                        <p class="vi">
                            Hợp tác với các công ty sản xuất video, filmmaker để phân phối nội dung video chuyên nghiệp.
                        </p>
                        <p class="en">
                            Partner with video production companies, filmmakers to distribute professional video content.
                        </p>
                        <ul class="list-unstyled mt-3">
                            <li class="vi">✓ Phân phối trên 50+ nền tảng</li>
                            <li class="en">✓ Distribution across 50+ platforms</li>
                            <li class="vi">✓ Tối ưu hóa chất lượng video</li>
                            <li class="en">✓ Video quality optimization</li>
                            <li class="vi">✓ Báo cáo hiệu suất chi tiết</li>
                            <li class="en">✓ Detailed performance reports</li>
                        </ul>
                    </div>
                </div>

                <!-- Content Creators -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="partner-type-card reveal">
                        <div class="partner-type-icon">
                            <i class="fas fa-user-astronaut"></i>
                        </div>
                        <h3 class="vi">Nhà Sáng Tạo Nội Dung</h3>
                        <h3 class="en">Content Creators</h3>
                        <p class="vi">
                            Hỗ trợ các YouTuber, TikToker, influencer mở rộng reach và tăng thu nhập từ nội dung.
                        </p>
                        <p class="en">
                            Support YouTubers, TikTokers, influencers to expand reach and increase content revenue.
                        </p>
                        <ul class="list-unstyled mt-3">
                            <li class="vi">✓ Tools quản lý multi-platform</li>
                            <li class="en">✓ Multi-platform management tools</li>
                            <li class="vi">✓ AI optimization cho engagement</li>
                            <li class="en">✓ AI optimization for engagement</li>
                            <li class="vi">✓ Hỗ trợ monetization</li>
                            <li class="en">✓ Monetization support</li>
                        </ul>
                    </div>
                </div>

                <!-- Media Companies -->
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="partner-type-card reveal">
                        <div class="partner-type-icon">
                            <i class="fas fa-broadcast-tower"></i>
                        </div>
                        <h3 class="vi">Công Ty Truyền Thông</h3>
                        <h3 class="en">Media Companies</h3>
                        <p class="vi">
                            Hợp tác với các công ty truyền thông, TV station để phân phối nội dung quy mô lớn.
                        </p>
                        <p class="en">
                            Partner with media companies, TV stations for large-scale content distribution.
                        </p>
                        <ul class="list-unstyled mt-3">
                            <li class="vi">✓ Giải pháp enterprise tùy chỉnh</li>
                            <li class="en">✓ Custom enterprise solutions</li>
                            <li class="vi">✓ API integration</li>
                            <li class="en">✓ API integration</li>
                            <li class="vi">✓ Dedicated account manager</li>
                            <li class="en">✓ Dedicated account manager</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Process Section -->
    <!-- <section class="content-process-section">
        <div class="container">
            <h2 class="section-title reveal vi">Quy Trình Phân Phối</h2>
            <h2 class="section-title reveal en">Distribution Process</h2>
            <p class="section-subtitle reveal vi">
                Quy trình phân phối nội dung được tối ưu hóa với công nghệ AI để đảm bảo hiệu quả và chất lượng cao nhất.
            </p>
            <p class="section-subtitle reveal en">
                Content distribution process optimized with AI technology to ensure highest efficiency and quality.
            </p>

            <div class="timeline">
                <div class="timeline-item reveal">
                    <div class="timeline-content">
                        <div class="process-icon">
                            <i class="fas fa-upload"></i>
                        </div>
                        <h3 class="vi">Upload & Kiểm Tra</h3>
                        <h3 class="en">Upload & Verification</h3>
                        <p class="vi">
                            Upload nội dung và tự động kiểm tra chất lượng, bản quyền với AI detection.
                        </p>
                        <p class="en">
                            Upload content and automatically check quality, copyright with AI detection.
                        </p>
                    </div>
                </div>

                <div class="timeline-item reveal">
                    <div class="timeline-content">
                        <div class="process-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h3 class="vi">Tối Ưu Hóa AI</h3>
                        <h3 class="en">AI Optimization</h3>
                        <p class="vi">
                            AI tự động tạo tiêu đề, mô tả, tags tối ưu cho từng nền tảng khác nhau.
                        </p>
                        <p class="en">
                            AI automatically generates optimized titles, descriptions, tags for each platform.
                        </p>
                    </div>
                </div>

                <div class="timeline-item reveal">
                    <div class="timeline-content">
                        <div class="process-icon">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <h3 class="vi">Phân Phối Tự Động</h3>
                        <h3 class="en">Automated Distribution</h3>
                        <p class="vi">
                            Hệ thống phân phối nội dung tới tất cả nền tảng đã chọn với timing tối ưu.
                        </p>
                        <p class="en">
                            System distributes content to all selected platforms with optimal timing.
                        </p>
                    </div>
                </div>

                <div class="timeline-item reveal">
                    <div class="timeline-content">
                        <div class="process-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h3 class="vi">Theo Dõi & Báo Cáo</h3>
                        <h3 class="en">Monitoring & Reporting</h3>
                        <p class="vi">
                            Real-time tracking hiệu suất, engagement và doanh thu từ tất cả nền tảng.
                        </p>
                        <p class="en">
                            Real-time tracking of performance, engagement and revenue from all platforms.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <h2 class="section-title reveal vi">Lợi Ích Hợp Tác</h2>
            <h2 class="section-title reveal en">Partnership Benefits</h2>
            <p class="section-subtitle reveal vi">
                Những lợi ích vượt trội khi hợp tác với SOFIN NETWORK trong việc phân phối và khai thác nội dung.
            </p>
            <p class="section-subtitle reveal en">
                Superior benefits when partnering with SOFIN NETWORK in content distribution and monetization.
            </p>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="benefit-card reveal">
                        <div class="benefit-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h4 class="vi">Gia Tăng Reach</h4>
                        <h4 class="en">Increased Reach</h4>
                        <p class="vi">
                            Mở rộng tầm với tới hàng triệu người dùng trên nhiều nền tảng khác nhau.
                        </p>
                        <p class="en">
                            Expand reach to millions of users across multiple platforms.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="benefit-card reveal">
                        <div class="benefit-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h4 class="vi">Tăng Doanh Thu</h4>
                        <h4 class="en">Revenue Growth</h4>
                        <p class="vi">
                            Tối ưu hóa doanh thu với chiến lược monetization đa dạng và hiệu quả.
                        </p>
                        <p class="en">
                            Optimize revenue with diverse and effective monetization strategies.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="benefit-card reveal">
                        <div class="benefit-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4 class="vi">Tiết Kiệm Thời Gian</h4>
                        <h4 class="en">Time Saving</h4>
                        <p class="vi">
                            Tự động hóa 90% quy trình phân phối, tiết kiệm hàng giờ làm việc mỗi ngày.
                        </p>
                        <p class="en">
                            Automate 90% of distribution process, saving hours of work daily.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="benefit-card reveal">
                        <div class="benefit-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="vi">Bảo Vệ Bản Quyền</h4>
                        <h4 class="en">Copyright Protection</h4>
                        <p class="vi">
                            Công nghệ AI bảo vệ nội dung khỏi vi phạm bản quyền trên toàn cầu.
                        </p>
                        <p class="en">
                            AI technology protects content from copyright infringement globally.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="footer-content">
            <div class="footer-main">
                <!-- Logo and Description -->
                <div class="footer-logo-section">
                    <div class="footer-logo-container">
                        <div class="logo-container" style="transform: scale(0.9); margin-left: -15px; margin-bottom: 20px;">
                            <div class="logo-circle circle-1"></div>
                            <div class="logo-circle circle-2"></div>
                            <div class="logo-circle circle-3"></div>
                            <div class="logo-dots footer-logo-dots"></div>
                            <div class="orbiting-dot footer-orbit-dot-1"></div>
                            <div class="orbiting-dot footer-orbit-dot-2"></div>
                            <div class="logo-text">
                                <div class="logo-main">SOFIN</div>
                                <div class="logo-tagline">NETWORK</div>
                            </div>
                        </div>
                    </div>
                    <p class="footer-description vi">
                        SOFIN NETWORK là đơn vị tiên phong trong lĩnh vực phát triển và ứng dụng công nghệ AI vào hoạt động kinh doanh. Chúng tôi cam kết mang đến các giải pháp thông minh, hiệu quả và phù hợp với nhu cầu thực tế của doanh nghiệp Việt Nam.
                    </p>
                    <p class="footer-description en">
                        SOFIN NETWORK is a pioneer in developing and applying AI technology to business operations. We are committed to providing smart, efficient solutions tailored to the practical needs of music and entertainment businesses.
                    </p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>

                <!-- Links -->
                <div class="footer-links-section">
                    <h6 class="vi">Liên Kết</h6>
                    <h6 class="en">Links</h6>
                    <ul class="footer-links-list">
                        <li>
                            <a href="index.php">
                                <span class="vi">Trang Chủ</span>
                                <span class="en">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="../page2/sofin_ai.php">
                                <span class="vi">SOFIN AI</span>
                                <span class="en">SOFIN AI</span>
                            </a>
                        </li>
                        <li>
                            <a href="dao_tao.php">
                                <span class="vi">Đào Tạo</span>
                                <span class="en">Training</span>
                            </a>
                        </li>
                        <li>
                            <a href="phan_phoi_noi_dung.php">
                                <span class="vi">Phân Phối Nội Dung</span>
                                <span class="en">Content Distribution</span>
                            </a>
                        </li>
                        <li>
                            <a href="ket_noi.php">
                                <span class="vi">Kết Nối</span>
                                <span class="en">Connect</span>
                            </a>
                        </li>
                        <li>
                            <a href="lien_he.php">
                                <span class="vi">Liên Hệ</span>
                                <span class="en">Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-links-section">
                    <h6 class="vi">Dịch Vụ</h6>
                    <h6 class="en">Services</h6>
                    <ul class="footer-links-list">
                        <li>
                            <a href="#">
                                <span class="vi">Tư Vấn AI</span>
                                <span class="en">AI Consulting</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="vi">Phát Triển Giải Pháp</span>
                                <span class="en">Solution Development</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="vi">Đào Tạo Nhân Lực</span>
                                <span class="en">Workforce Training</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="vi">Nghiên Cứu Thị Trường</span>
                                <span class="en">Market Research</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="vi">Tích Hợp Hệ Thống</span>
                                <span class="en">System Integration</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="footer-newsletter">
                    <h6 class="vi">Đăng Ký Nhận Tin</h6>
                    <h6 class="en">Subscribe Newsletter</h6>
                    <p class="vi">
                        Đăng ký để nhận thông tin mới nhất về công nghệ AI, sự kiện và các giải pháp mới từ SOFIN NETWORK.
                    </p>
                    <p class="en">
                        Subscribe to receive the latest information on AI technology, events and new solutions from SOFIN NETWORK.
                    </p>
                    <div class="footer-newsletter-form">
                        <input type="email" placeholder="Email của bạn" data-en-placeholder="Your email">
                        <button type="submit">
                            <span class="vi">ĐĂNG KÝ</span>
                            <span class="en">SUBSCRIBE</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Bottom row -->
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-6">
                        <p>© 2025 SOFIN NETWORK. <span class="vi">Đã đăng ký bản quyền. Thiết kế bởi</span><span class="en">All rights reserved. Designed by</span> <a href="">Sofin Dev</a>
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a class="vi">Điều Khoản Dịch Vụ | Chính Sách Bảo Mật</a>
                        <a class="en">Terms of Service | Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Slideshow functionality
        function initHeroSlideshow() {
            const slides = document.querySelectorAll('.hero-slide');
            const dots = document.querySelectorAll('.hero-slide-dot');
            let currentSlide = 0;
            let slideInterval;

            // Function to show a specific slide
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => {
                    slide.classList.remove('active');
                });
                
                // Deactivate all dots
                dots.forEach(dot => {
                    dot.classList.remove('active');
                });
                
                // Show the selected slide and activate corresponding dot
                slides[index].classList.add('active');
                dots[index].classList.add('active');
                
                currentSlide = index;
            }

            // Function to show next slide
            function nextSlide() {
                let nextIndex = currentSlide + 1;
                if (nextIndex >= slides.length) {
                    nextIndex = 0;
                }
                showSlide(nextIndex);
            }

            // Start automatic slideshow
            function startSlideshow() {
                slideInterval = setInterval(nextSlide, 6000); // Change slide every 6 seconds
            }

            // Stop automatic slideshow
            function stopSlideshow() {
                clearInterval(slideInterval);
            }

            // Add click event listeners to dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    stopSlideshow();
                    showSlide(index);
                    startSlideshow();
                });
            });

            // Start the slideshow
            startSlideshow();

            // Stop slideshow when page is not visible
            document.addEventListener('visibilitychange', function() {
                if (document.hidden) {
                    stopSlideshow();
                } else {
                    startSlideshow();
                }
            });
        }

        // Throttle function for performance optimization
        function throttle(func, delay = 16) {
            let timeoutId;
            let lastExecTime = 0;
            return function(...args) {
                const currentTime = Date.now();
                if (currentTime - lastExecTime > delay) {
                    func.apply(this, args);
                    lastExecTime = currentTime;
                } else {
                    clearTimeout(timeoutId);
                    timeoutId = setTimeout(() => {
                        func.apply(this, args);
                        lastExecTime = Date.now();
                    }, delay - (currentTime - lastExecTime));
                }
            };
        }

        // Smooth scrolling function
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                const headerHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = section.offsetTop - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        }

        // Initialize all functions when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize hero slideshow
            initHeroSlideshow();
            
            // Initialize loader functions
            createLoaderLogoDots();
            animateLoaderOrbits();

            // Hide Loader after page load
            setTimeout(function() {
                const loaderWrapper = document.querySelector('.loader-wrapper');
                if (loaderWrapper) {
                    loaderWrapper.style.opacity = '0';
                    loaderWrapper.style.visibility = 'hidden';
                }
            }, 1000);

            // Create Loader Logo Dots
            function createLoaderLogoDots() {
                const loaderDots = document.getElementById('loader-dots');
                if (loaderDots) {
                    const numberOfDots = 20;
                    for (let i = 0; i < numberOfDots; i++) {
                        const dot = document.createElement('div');
                        dot.className = 'loader-logo-dot';
                        // Calculate position on the circle
                        const angle = (i / numberOfDots) * Math.PI * 2;
                        const radius = 80; // Radius for loader dots
                        const x = Math.cos(angle) * radius;
                        const y = Math.sin(angle) * radius;
                        // Center the dots in the 250px container
                        dot.style.left = `${x + 125}px`; // 125 = 250/2
                        dot.style.top = `${y + 125}px`;
                        // Enhanced random animation with delay
                        const sparkleDelay = Math.random() * 2;
                        const sparkleDuration = 1.5 + Math.random() * 2;
                        dot.style.animation = `sparkle ${sparkleDuration}s infinite alternate ${sparkleDelay}s`;
                        loaderDots.appendChild(dot);
                    }
                }
            }

            // Animate Loader Orbiting Dots
            function animateLoaderOrbits() {
                function animateOrbit(dotId, radius, duration, delay, direction) {
                    const dot = document.getElementById(dotId);
                    if (!dot) return;
                    let startTime = null;
                    function orbitAnimation(timestamp) {
                        if (!startTime) startTime = timestamp;
                        const elapsed = timestamp - startTime;
                        const progress = ((elapsed + delay) % duration) / duration;
                        const angle = direction ? progress * Math.PI * 2 : -progress * Math.PI * 2;
                        const x = Math.cos(angle) * radius;
                        const y = Math.sin(angle) * radius;
                        // Center the orbiting dots in the container
                        dot.style.left = `${x + 125}px`;
                        dot.style.top = `${y + 125}px`;
                        requestAnimationFrame(orbitAnimation);
                    }
                    requestAnimationFrame(orbitAnimation);
                }
                // Start orbiting animations with different parameters
                animateOrbit('loader-orbit-1', 90, 5000, 0, true);
                animateOrbit('loader-orbit-2', 100, 7000, 2000, false);
                animateOrbit('loader-orbit-3', 110, 9000, 4000, true);
            }

            // Initialize dots functions
            createLogoDots();
            animateOrbitingDots();

            // Initialize custom cursor
            const cursor = document.querySelector('.cursor');
            const cursorFollower = document.querySelector('.cursor-follower');

            if (cursor && cursorFollower && window.innerWidth > 768) {
                const updateCursor = throttle((e) => {
                    cursor.style.left = e.clientX + 'px';
                    cursor.style.top = e.clientY + 'px';
                    cursorFollower.style.left = e.clientX + 'px';
                    cursorFollower.style.top = e.clientY + 'px';
                }, 16);

                document.addEventListener('mousemove', updateCursor);

                document.addEventListener('mousedown', function() {
                    cursor.classList.add('active');
                    cursorFollower.classList.add('active');
                });

                document.addEventListener('mouseup', function() {
                    cursor.classList.remove('active');
                    cursorFollower.classList.remove('active');
                });

                // Add active class to cursor when hovering over interactive elements
                const clickables = document.querySelectorAll('a, button, .service-card, .partner-type-card, .benefit-card, .content-showcase');

                clickables.forEach(item => {
                    item.addEventListener('mouseenter', function() {
                        cursor.classList.add('active');
                        cursorFollower.classList.add('active');
                    });
                    item.addEventListener('mouseleave', function() {
                        cursor.classList.remove('active');
                        cursorFollower.classList.remove('active');
                    });
                });
            }

            // Theme Switch
            const themeSwitch = document.getElementById('theme-switch');
            const themeSwitchIcon = themeSwitch.querySelector('i');

            // Check for saved theme
            if (localStorage.getItem('theme') === 'light') {
                document.documentElement.classList.add('light-mode');
                themeSwitchIcon.classList.remove('fa-sun');
                themeSwitchIcon.classList.add('fa-moon');
            }

            themeSwitch.addEventListener('click', function() {
                document.documentElement.classList.toggle('light-mode');
                if (document.documentElement.classList.contains('light-mode')) {
                    themeSwitchIcon.classList.remove('fa-sun');
                    themeSwitchIcon.classList.add('fa-moon');
                    localStorage.setItem('theme', 'light');
                } else {
                    themeSwitchIcon.classList.remove('fa-moon');
                    themeSwitchIcon.classList.add('fa-sun');
                    localStorage.setItem('theme', 'dark');
                }
            });

            // Language Switch
            const languageSwitch = document.getElementById('language-switch');
            const currentLang = languageSwitch.querySelector('.current-lang');

            // Set default to English
            document.documentElement.lang = 'en';
            currentLang.textContent = 'EN'; // Đặt nội dung nút chuyển đổi là 'EN'

            // Update placeholders function
            function updatePlaceholders() {
                const isEnglish = document.documentElement.lang === 'en';
                const inputElements = document.querySelectorAll('input[data-en-placeholder]');

                inputElements.forEach(input => {
                    const viPlaceholder = input.getAttribute('placeholder');
                    const enPlaceholder = input.getAttribute('data-en-placeholder');

                    if (isEnglish && enPlaceholder) {
                        input.setAttribute('placeholder', enPlaceholder);
                    } else if (!isEnglish) {
                        input.setAttribute('placeholder', 'Email của bạn');
                    }
                });
            }

            languageSwitch.addEventListener('click', function() {
                const isVietnamese = document.documentElement.lang === 'vi';
                document.documentElement.lang = isVietnamese ? 'en' : 'vi';
                currentLang.textContent = isVietnamese ? 'EN' : 'VI';
                updatePlaceholders();
            });

            // Initialize placeholders
            updatePlaceholders();







            // Optimized Navbar Scroll Effect
            const navbar = document.querySelector('.navbar');
            const handleScroll = throttle(() => {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }, 16);
            window.addEventListener('scroll', handleScroll, { passive: true });

            // Optimized Progress Bar Update
            const progressBar = document.querySelector('.progress-bar');
            const updateProgressBar = throttle(() => {
                const scrollTop = window.scrollY;
                const docHeight = document.body.scrollHeight - window.innerHeight;
                const scrollPercent = (scrollTop / docHeight) * 100;
                progressBar.style.width = Math.max(0, Math.min(100, scrollPercent)) + '%';
            }, 16);
            window.addEventListener('scroll', updateProgressBar, { passive: true });

            // Optimized Scroll to Top Button
            const scrollToTopBtn = document.getElementById('scroll-to-top');
            const toggleScrollToTop = throttle(() => {
                if (window.scrollY > 300) {
                    scrollToTopBtn.classList.add('show');
                } else {
                    scrollToTopBtn.classList.remove('show');
                }
            }, 100);
            window.addEventListener('scroll', toggleScrollToTop, { passive: true });

            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Optimized Reveal Animation with staggered delays
            const reveals = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            reveals.forEach(reveal => {
                revealObserver.observe(reveal);
            });

            // Optimized Smooth Scroll for all anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        const headerHeight = navbar.offsetHeight;
                        const targetPosition = target.offsetTop - headerHeight;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Optimized 3D Hover Effect for Cards (only on desktop)
            if (window.innerWidth > 768) {
                const cards = document.querySelectorAll('.service-card, .partner-type-card, .benefit-card, .content-showcase');

                cards.forEach(card => {
                    let isHovering = false;
                    
                    const handleMouseMove = throttle((e) => {
                        if (!isHovering) return;
                        const rect = card.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        const centerX = rect.width / 2;
                        const centerY = rect.height / 2;
                        const rotateX = (y - centerY) / 20;
                        const rotateY = (centerX - x) / 20;
                        // Use translate3d for hardware acceleration
                        card.style.transform = `translate3d(0, -5px, 0) perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                    }, 16);

                    card.addEventListener('mouseenter', function() {
                        isHovering = true;
                        this.style.transition = 'none';
                    });

                    card.addEventListener('mousemove', handleMouseMove);

                    card.addEventListener('mouseleave', function() {
                        isHovering = false;
                        this.style.transition = 'transform 0.3s ease';
                        this.style.transform = 'translate3d(0, 0, 0) perspective(1000px) rotateX(0deg) rotateY(0deg)';
                    });
                });
            }

            // Optimized Newsletter Form Handler
            const newsletterForm = document.querySelector('.footer-newsletter-form');
            const newsletterInput = newsletterForm.querySelector('input');
            const newsletterButton = newsletterForm.querySelector('button');

            function validateEmail(email) {
                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
            }

            newsletterButton.addEventListener('click', function(e) {
                e.preventDefault();
                const email = newsletterInput.value.trim();

                if (email && validateEmail(email)) {
                    // Simulate successful subscription
                    const originalText = this.innerHTML;
                    this.style.backgroundColor = '#10b981';
                    this.innerHTML = '<i class="fas fa-check"></i>';
                    this.disabled = true;
                    setTimeout(() => {
                        this.style.backgroundColor = '';
                        this.innerHTML = originalText;
                        this.disabled = false;
                        newsletterInput.value = '';
                    }, 2000);
                } else {
                    // Show error state
                    newsletterInput.style.borderColor = '#ef4444';
                    newsletterInput.style.animation = 'shake 0.5s ease-in-out';
                    setTimeout(() => {
                        newsletterInput.style.borderColor = '';
                        newsletterInput.style.animation = '';
                    }, 500);
                }
            });

            // Pause expensive animations when tab is not active
            document.addEventListener('visibilitychange', function() {
                const animations = document.querySelectorAll('[style*="animation"]');
                if (document.hidden) {
                    animations.forEach(el => {
                        el.style.animationPlayState = 'paused';
                    });
                } else {
                    animations.forEach(el => {
                        el.style.animationPlayState = 'running';
                    });
                }
            });

            // Logo animation visibility check
            const logoContainers = document.querySelectorAll('.logo-container');
            const logoVisibilityObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                    } else {
                        entry.target.classList.remove('in-view');
                    }
                });
            }, {
                threshold: 0.1
            });

            logoContainers.forEach(container => {
                logoVisibilityObserver.observe(container);
            });

            console.log('SOFIN NETWORK - Content Distribution page initialized successfully!');
        });

        // Logo Dots Function - Optimized
        function createLogoDots() {
            const logoDots = document.getElementById('logo-dots');
            if (logoDots) {
                const numberOfDots = 12;
                const fragment = document.createDocumentFragment();

                for (let i = 0; i < numberOfDots; i++) {
                    const dot = document.createElement('div');
                    dot.className = 'logo-dot';
                    // Calculate position on circle
                    const angle = (i / numberOfDots) * Math.PI * 2;
                    const radius = 22;
                    const x = Math.cos(angle) * radius;
                    const y = Math.sin(angle) * radius;
                    dot.style.left = `${x + 25}px`;
                    dot.style.top = `${y + 25}px`;
                    // Enhanced sparkle animation with random delays
                    dot.style.animation = `sparkle ${2 + Math.random() * 2}s infinite alternate ${Math.random() * 2}s`;
                    fragment.appendChild(dot);
                }

                logoDots.appendChild(fragment);

                // Create dots for footer logo
                const footerDots = document.querySelector('.footer-logo-dots');
                if (footerDots) {
                    const footerFragment = document.createDocumentFragment();
                    for (let i = 0; i < numberOfDots; i++) {
                        const dot = document.createElement('div');
                        dot.className = 'logo-dot';
                        const angle = (i / numberOfDots) * Math.PI * 2;
                        const radius = 22;
                        const x = Math.cos(angle) * radius;
                        const y = Math.sin(angle) * radius;
                        dot.style.left = `${x + 25}px`;
                        dot.style.top = `${y + 25}px`;
                        dot.style.animation = `sparkle ${2 + Math.random() * 2}s infinite alternate ${Math.random() * 2}s`;
                        footerFragment.appendChild(dot);
                    }
                    footerDots.appendChild(footerFragment);
                }
            }
        }

        // Enhanced Orbiting Dots Function - Optimized with RAF
        function animateOrbitingDots() {
            function animateOrbit(dotId, radius, duration, delay, direction) {
                const dot = document.getElementById(dotId);
                if (!dot) return;
                
                let startTime;
                function orbitAnimation(timestamp) {
                    if (!startTime) startTime = timestamp;
                    const elapsed = timestamp - startTime;
                    const progress = ((elapsed + delay) % duration) / duration;
                    const angle = direction ? progress * Math.PI * 2 : -progress * Math.PI * 2;
                    const x = Math.cos(angle) * radius;
                    const y = Math.sin(angle) * radius;
                    dot.style.transform = `translate(${x}px, ${y}px)`;
                    requestAnimationFrame(orbitAnimation);
                }
                requestAnimationFrame(orbitAnimation);
            }

            // Start orbiting animations
            animateOrbit('orbit-dot-1', 32, 8000, 0, true);
            animateOrbit('orbit-dot-2', 27, 10000, 3000, false);

            // Footer orbit dots animation
            const footerDot1 = document.querySelector('.footer-orbit-dot-1');
            const footerDot2 = document.querySelector('.footer-orbit-dot-2');

            if (footerDot1) {
                let startTime1;
                function animateFooterDot1(timestamp) {
                    if (!startTime1) startTime1 = timestamp;
                    const elapsed = timestamp - startTime1;
                    const progress = ((elapsed) % 8000) / 8000;
                    const angle = progress * Math.PI * 2;
                    const x = Math.cos(angle) * 32;
                    const y = Math.sin(angle) * 32;
                    footerDot1.style.transform = `translate(${x}px, ${y}px)`;
                    requestAnimationFrame(animateFooterDot1);
                }
                requestAnimationFrame(animateFooterDot1);
            }

            if (footerDot2) {
                let startTime2;
                function animateFooterDot2(timestamp) {
                    if (!startTime2) startTime2 = timestamp;
                    const elapsed = timestamp - startTime2;
                    const progress = ((elapsed + 4000) % 10000) / 10000;
                    const angle = -progress * Math.PI * 2;
                    const x = Math.cos(angle) * 27;
                    const y = Math.sin(angle) * 27;
                    footerDot2.style.transform = `translate(${x}px, ${y}px)`;
                    requestAnimationFrame(animateFooterDot2);
                }
                requestAnimationFrame(animateFooterDot2);
            }
        }

        // Add performance monitoring (optional)
        if ('performance' in window) {
            window.addEventListener('load', () => {
                const perfData = performance.getEntriesByType('navigation')[0];
                console.log(`Page load time: ${perfData.loadEventEnd - perfData.fetchStart}ms`);
            });
        }

        // Add shake animation CSS
        const shakeCSS = `
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-5px); }
                75% { transform: translateX(5px); }
            }
        `;
        const style = document.createElement('style');
        style.textContent = shakeCSS;
        document.head.appendChild(style);
    </script>
</body>
</html>