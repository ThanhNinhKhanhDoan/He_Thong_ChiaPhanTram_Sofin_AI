<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Sofin - AI-powered personal finance assistant that helps you manage spending, saving, and investing smarter. Discover how AI transforms your financial life.">
    <meta name="keywords" content="AI finance, personal finance assistant, budget tracker, AI app, Sofin, smart finance, money saving, intelligent investing">
    <meta name="author" content="Sofin AI Team">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Sofin - Smart AI-Powered Personal Finance Assistant">
    <meta property="og:description" content="Sofin uses artificial intelligence to help you manage your finances effortlessly. Track spending, plan budgets, and invest smarter with Sofin.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sofin.network">
    <meta property="og:image" content="https://sofin.network/images/thumnail.jpeg">
    <meta property="og:site_name" content="Sofin AI">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@sofin_ai">
    <meta name="twitter:title" content="Sofin - Smart AI-Powered Personal Finance Assistant">
    <meta name="twitter:description" content="Sofin uses artificial intelligence to help you manage your finances effortlessly. Track spending, plan budgets, and invest smarter with Sofin.">
    <meta name="twitter:image" content="https://sofin.network/images/thumnail.jpeg">

    <!-- Favicon & Title -->
    <title>Sofin - Smart AI-Powered Personal Finance Assistant</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

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
            /* Dark Mode Color Palette */
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

        /* Enhanced Light Mode Colors - Balanced for readability */
        html.light-mode {
            /* Primary Colors - Still soft but with more contrast */
            --color-1: #6b5b95;
            --color-2: #7d6ca7;
            --color-3: #8d7dba;
            --color-4: #4a90c2;
            --color-5: #5ba3db;
            --color-6: #6bb6e5;
            --color-7: #4fc3f7;
            --color-8: #51bcd4;
            --color-9: #66d9ef;
            --color-10: #5cb85c;
            
            /* Text Colors - Much darker for better readability */
            --text-light: #1a1a1a;
            --text-dark: #000000;
            --text-muted: rgba(60, 60, 60, 0.9);
            
            /* Background Colors - Still soft but with enough contrast */
            --dark-bg: #f8f9fa;
            --dark-card: rgba(255, 255, 255, 0.85);
            
            /* Glass Effect - More transparent but borders more visible */
            --glass-bg: rgba(255, 255, 255, 0.8);
            --glass-border: rgba(107, 91, 149, 0.15);
            --glass-shadow: 0 8px 32px 0 rgba(107, 91, 149, 0.1);
            
            /* Light Mode Gradients - Softer transitions but still vibrant */
            --gradient-1: linear-gradient(135deg, var(--color-1), var(--color-3));
            --gradient-2: linear-gradient(135deg, var(--color-3), var(--color-6));
            --gradient-3: linear-gradient(135deg, var(--color-6), var(--color-10));
            --gradient-4: linear-gradient(135deg, var(--color-1), var(--color-10));
            --gradient-5: linear-gradient(45deg, var(--color-1), var(--color-3), var(--color-6), var(--color-10));
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
        .vision-mission-card,
        .business-area-card,
        .stats-card,
        .activity-item,
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

        /* Light Mode Body Background - Softer but still good contrast */
        html.light-mode body {
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(107, 91, 149, 0.04) 0%, transparent 50%),
                radial-gradient(circle at 80% 40%, rgba(125, 108, 167, 0.04) 0%, transparent 50%),
                radial-gradient(circle at 40% 70%, rgba(141, 125, 186, 0.04) 0%, transparent 50%),
                radial-gradient(circle at 70% 90%, rgba(107, 182, 229, 0.04) 0%, transparent 50%);
            background-size: 150% 150%;
            background-attachment: fixed;
            position: relative;
            min-height: 100vh;
            background-color: #f8f9fa; /* Fallback color */
        }

        /* Optimized dark mode background */
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

        /* Light Mode animated background - Even more subtle */
        html.light-mode body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(1px 1px at 20% 30%, rgba(139, 125, 168, 0.15), transparent),
                radial-gradient(1px 1px at 40% 70%, rgba(156, 195, 229, 0.15), transparent),
                radial-gradient(1px 1px at 90% 40%, rgba(156, 195, 229, 0.15), transparent);
            background-size: 400px 400px, 350px 350px, 300px 300px;
            animation: moveBackground 40s infinite linear;
            z-index: -2;
            transform: translateZ(0);
            opacity: 0.15;
        }

        /* Optimized animated background for dark mode*/
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

        /* Light Mode Logo Circle Adjustments */
        html.light-mode .logo-circle {
            filter: drop-shadow(0 0 5px rgba(139, 125, 168, 0.2));
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

        /* Light Mode Navbar Improvements */
        html.light-mode .navbar.scrolled {
            background: rgba(248, 249, 250, 0.95);
            backdrop-filter: blur(20px);
            box-shadow: 0 2px 20px rgba(139, 125, 168, 0.05);
            border-bottom: 1px solid rgba(139, 125, 168, 0.08);
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

        /* Light Mode Nav Link Text Shadow */
        html.light-mode .nav-link:hover,
        html.light-mode .nav-link.active {
            text-shadow: 0 0 8px rgba(139, 125, 168, 0.2);
        }

        /* HERO SECTION */
        .hero-section {
            height: 100vh;
            min-height: 600px;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding-top: 80px;
        }

        .hero-video-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .hero-video-background video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translateX(-50%) translateY(-50%);
            object-fit: cover;
            z-index: 0;
            transition: transform 0.5s ease;
            transform-origin: center center;
            animation: videoScale 20s ease-in-out infinite;
        }

        @keyframes videoScale {
            0%, 100% { transform: translateX(-50%) translateY(-50%) scale(1); }
            50% { transform: translateX(-50%) translateY(-50%) scale(1.05); }
        }

        /* Adjust overlay opacity to make video visible but not too bright */
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0.3; /* Adjusted opacity to let video shine through */
            background: linear-gradient(to bottom, rgba(13, 2, 33, 0.7), rgba(13, 2, 33, 0.5));
        }

        /* Light mode adjustments for video overlay */
        html.light-mode .hero-overlay {
            background: linear-gradient(to bottom, rgba(248, 249, 250, 0.7), rgba(248, 249, 250, 0.5));
            opacity: 0.4;
        }

        /* Ensure hero content stays above video */
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
            padding-top: 340px
        }

        /* Ensure hero section pattern stays on top of video but below overlay */
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(116, 0, 184, 0.4) 1px, transparent 1px),
                radial-gradient(circle at 80% 80%, rgba(128, 255, 219, 0.4) 1px, transparent 1px),
                radial-gradient(circle at 60% 30%, rgba(72, 191, 227, 0.4) 1px, transparent 1px);
            background-size: 50px 50px, 80px 80px, 40px 40px;
            animation: Float 10s ease-in-out infinite;
            z-index: 1;
        }

        /* Light Mode Hero Section Pattern */
        html.light-mode .hero-section::before {
            background-image: 
                radial-gradient(circle at 20% 20%, rgba(139, 125, 168, 0.08) 1px, transparent 1px),
                radial-gradient(circle at 80% 80%, rgba(156, 195, 229, 0.08) 1px, transparent 1px),
                radial-gradient(circle at 60% 30%, rgba(156, 195, 229, 0.08) 1px, transparent 1px);
            opacity: 0.3;
            background-size: 80px 80px, 100px 100px, 60px 60px;
        }

        @keyframes Float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* Make text more readable over video */
        .hero-title, .hero-subtitle, .hero-description {
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
        }

        html.light-mode .hero-title, 
        html.light-mode .hero-subtitle, 
        html.light-mode .hero-description {
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-family: var(--accent-font);
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--color-7);
            font-weight: 500;
            animation: fadeInUp 1s ease;
            text-shadow: 0 0 20px rgba(86, 207, 225, 0.5);
        }

        /* Light Mode Hero Subtitle */
        html.light-mode .hero-subtitle {
            text-shadow: 0 0 10px rgba(156, 195, 229, 0.15);
        }

        .hero-title {
            font-size: 4.5rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.2s both;
            text-shadow: 0 0 30px rgba(116, 0, 184, 0.5);
        }

        /* Light Mode Hero Title */
        html.light-mode .hero-title {
            text-shadow: 0 0 20px rgba(107, 91, 149, 0.15);
        }

        .hero-title .main-text {
            background: linear-gradient(90deg, var(--color-1), var(--color-3), var(--color-6), var(--color-8), var(--color-10), var(--color-8), var(--color-6), var(--color-3), var(--color-1));
            background-size: 300% 100%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: flowingGradient 3s ease-in-out infinite;
            font-size: 4.5rem;
            font-weight: 700;
            line-height: 1.1;
            filter: drop-shadow(0 0 20px rgba(116, 0, 184, 0.5));
        }

        /* Light Mode Main Text Filter */
        html.light-mode .hero-title .main-text {
            filter: drop-shadow(0 0 10px rgba(139, 125, 168, 0.08));
        }

        @keyframes flowingGradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .hero-description {
            font-size: 1.5rem;
            margin-bottom: 3rem;
            color: var(--text-muted);
            animation: fadeInUp 1s ease 0.4s both;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        /* Light Mode Hero Description */
        html.light-mode .hero-description {
            text-shadow: 0 0 2px rgba(139, 125, 168, 0.05);
        }

        .hero-buttons {
            animation: fadeInUp 1s ease 0.6s both;
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 4rem;
        }

        .btn-primary-custom,
        .btn-outline-custom {
            border: none;
            font-size: 14px;
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

        /* Light Mode Button Improvements */
        html.light-mode .btn-primary-custom {
            color: #ffffff;
        }

        html.light-mode .btn-primary-custom:hover {
            color: #ffffff;
        }

        html.light-mode .btn-outline-custom:hover {
            color: #ffffff;
        }

        /* SCROLL INDICATOR */
        .scroll-indicator {
            position: absolute;
            bottom: -15px;
            left: 46%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            animation: fadeInUp 1s ease 0.8s both;
            cursor: pointer;
        }

        .scroll-indicator .scroll-icon {
            width: 30px;
            height: 50px;
            border: 2px solid var(--color-7);
            border-radius: 30px;
            position: relative;
            display: flex;
            justify-content: center;
            padding-top: 10px;
            box-shadow: 0 0 20px rgba(86, 207, 225, 0.5);
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
        }

        /* Light Mode Scroll Indicator */
        html.light-mode .scroll-indicator .scroll-icon {
            box-shadow: 0 0 10px rgba(156, 195, 229, 0.15);
            background: rgba(255, 255, 255, 0.5);
        }

        .scroll-indicator .scroll-icon::before {
            content: '';
            width: 6px;
            height: 6px;
            background-color: var(--color-7);
            border-radius: 50%;
            animation: scrollMove 2s infinite;
            box-shadow: 0 0 10px var(--color-7);
        }

        @keyframes scrollMove {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            80% {
                transform: translateY(20px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 0;
            }
        }

        .scroll-indicator p {
            font-family: var(--nav-font);
            font-size: 0.8rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-top: 10px;
            color: var(--text-muted);
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

        /* Light Mode Floating Button Improvements */
        html.light-mode .theme-switch {
            color: #ffffff;
        }

        html.light-mode .language-switch {
            color: #ffffff;
        }

        /* SECTIONS */
        .vision-mission-section,
        .business-areas-section,
        .stats-section,
        .highlight-activities-section,
        .partners-section {
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
        .vision-mission-card,
        .business-area-card,
        .stats-card,
        .activity-item {
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

        /* Light Mode Card Improvements - Better readability */
        html.light-mode .vision-mission-card,
        html.light-mode .business-area-card,
        html.light-mode .stats-card,
        html.light-mode .activity-item {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(107, 91, 149, 0.12);
            box-shadow: 0 8px 32px rgba(107, 91, 149, 0.1);
        }

        .vision-mission-card {
            padding: 50px 40px;
            height: 100%;
            text-align: center;
        }

        .business-area-card {
            padding: 40px;
            height: 100%;
        }

        .stats-card {
            padding: 50px 30px;
            text-align: center;
        }

        .activity-item {
            height: 400px;
        }

        .vision-mission-card:hover,
        .business-area-card:hover,
        .stats-card:hover,
        .activity-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(116, 0, 184, 0.4);
        }

        /* Light Mode Card Hover */
        html.light-mode .vision-mission-card:hover,
        html.light-mode .business-area-card:hover,
        html.light-mode .stats-card:hover,
        html.light-mode .activity-item:hover {
            box-shadow: 0 20px 40px rgba(139, 125, 168, 0.12);
        }

        /* ICONS */
        .vision-mission-icon,
        .business-area-icon {
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            transition: var(--transition);
            flex-shrink: 0;
        }

        .vision-mission-icon {
            width: 100px;
            height: 100px;
            font-size: 3rem;
            color: var(--color-7);
            background: var(--gradient-2);
            margin: 0 auto 30px;
        }

        .business-area-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            font-size: 2.5rem;
            color: var(--color-4);
            background: var(--gradient-3);
        }

        /* Light Mode Icon Adjustments */
        html.light-mode .vision-mission-icon {
            color: #ffffff;
        }

        html.light-mode .business-area-icon {
            color: #ffffff;
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

        /* Light Mode Progress Bar */
        html.light-mode .progress-bar {
            box-shadow: 0 0 8px rgba(106, 75, 165, 0.3);
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

        /* Light Mode Cursor Adjustments */
        html.light-mode .cursor {
            background-color: rgba(106, 75, 165, 0.7);
            mix-blend-mode: multiply;
        }

        html.light-mode .cursor-follower {
            border-color: rgba(106, 75, 165, 0.4);
        }

        html.light-mode .cursor.active {
            background-color: rgba(106, 75, 165, 0.8);
        }

        html.light-mode .cursor-follower.active {
            border-color: rgba(106, 75, 165, 0.6);
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

        /* OPTIMIZED ACTIVITY IMAGES - Updated for IMG tags */
        .activity-image-container {
            width: 100%;
            height: 60%;
            position: relative;
            overflow: hidden;
            border-radius: 15px 15px 0 0;
            background-color: #1a1a1a;
        }

        /* Light Mode Activity Image Container */
        html.light-mode .activity-image-container {
            background-color: #f5f5f5;
        }

        .activity-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
            display: block;
            min-height: 240px;
        }

        .activity-image.lazy {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .activity-image.lazy.loaded {
            opacity: 1;
        }

        /* Loading spinner for images */
        .activity-image-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40px;
            height: 40px;
            border: 4px solid var(--color-7);
            border-radius: 50%;
            border-top-color: transparent;
            animation: imageSpinner 1s linear infinite;
            z-index: 1;
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .activity-image-container.loaded::before {
            opacity: 0;
        }

        @keyframes imageSpinner {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        /* Gradient overlay */
        .activity-image-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.7));
            z-index: 2;
        }

        /* Light Mode Activity Image Overlay */
        html.light-mode .activity-image-container::after {
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.5));
        }

        .activity-item:hover .activity-image {
            transform: scale(1.05);
        }

        .activity-content {
            padding: 30px;
            height: 40%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            z-index: 3;
        }

        .activity-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--text-light);
        }

        .activity-description {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.6;
        }

        .activity-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 60px;
        }

        /* BUSINESS AREAS */
        .business-area-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--text-light);
        }

        .business-area-description {
            color: var(--text-muted);
            margin-bottom: 25px;
            line-height: 1.8;
        }

        .business-area-link {
            color: var(--color-6);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: var(--transition);
            position: relative;
        }

        .business-area-link::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-3);
            transition: var(--transition);
        }

        .business-area-link:hover::before {
            width: 100%;
        }

        .business-area-link i {
            margin-left: 8px;
            transition: var(--transition);
        }

        .business-area-link:hover {
            color: var(--color-7);
            text-shadow: 0 0 10px rgba(86, 207, 225, 0.6);
        }

        .business-area-link:hover i {
            transform: translateX(10px);
        }

        /* Light Mode Business Area Link */
        html.light-mode .business-area-link:hover {
            text-shadow: 0 0 8px rgba(79, 175, 219, 0.3);
        }

        /* VISION MISSION */
        .vision-mission-title {
            font-size: 2rem;
            margin-bottom: 25px;
            color: var(--text-light);
        }

        .vision-mission-description {
            color: var(--text-muted);
            font-size: 1.2rem;
            line-height: 1.8;
        }

        /* STATISTICS */
        .stats-number {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--color-7);
            margin-bottom: 15px;
            font-family: var(--heading-font);
            text-shadow: 0 0 20px rgba(86, 207, 225, 0.5);
        }

        /* Light Mode Stats Number */
        html.light-mode .stats-number {
            text-shadow: 0 0 15px rgba(79, 175, 219, 0.3);
        }

        .stats-label {
            font-size: 1.2rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        /* PARTNERS */
        .partners-slider {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 60px;
        }

        .partner-logo {
            width: 200px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            transition: var(--transition);
            box-shadow: var(--glass-shadow);
            opacity: 0.7;
            position: relative;
            overflow: hidden;
        }

        /* Light Mode Partner Logo */
        html.light-mode .partner-logo {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(106, 75, 165, 0.1);
            box-shadow: 0 8px 32px rgba(106, 75, 165, 0.08);
        }

        .partner-logo:hover {
            opacity: 1;
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(105, 48, 195, 0.4);
        }

        /* Light Mode Partner Logo Hover */
        html.light-mode .partner-logo:hover {
            box-shadow: 0 20px 40px rgba(106, 75, 165, 0.15);
        }

        .partner-logo img {
            max-width: 150px;
            max-height: 80px;
            object-fit: contain;
            transition: var(--transition);
        }

        /* FOOTER */
        .footer {
            background: linear-gradient(135deg, var(--dark-bg) 0%, #190040 50%, var(--dark-bg) 100%);
            padding: 60px 0 20px;
            position: relative;
            margin-top: 100px;
        }

        /* Light Mode Footer */
        html.light-mode .footer {
            background: linear-gradient(135deg, #f5f5f7 0%, #e8e8ea 50%, #f5f5f7 100%);
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

        /* Light Mode Footer Border */
        html.light-mode .footer::before {
            background: linear-gradient(90deg, transparent, rgba(106, 75, 165, 0.3), transparent);
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

        /* Light Mode Footer Social */
        html.light-mode .footer-social a {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(106, 75, 165, 0.15);
        }

        .footer-social a:hover {
            background: var(--gradient-3);
            color: var(--text-dark);
            transform: translateY(-5px);
        }

        /* Light Mode Footer Social Hover */
        html.light-mode .footer-social a:hover {
            color: #ffffff;
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

        /* Light Mode Footer Newsletter */
        html.light-mode .footer-newsletter {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(106, 75, 165, 0.1);
            box-shadow: 0 8px 32px rgba(106, 75, 165, 0.1);
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

        /* Light Mode Newsletter Input */
        html.light-mode .footer-newsletter-form input {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(106, 75, 165, 0.2);
        }

        .footer-newsletter-form input::placeholder {
            color: var(--text-muted);
        }

        .footer-newsletter-form input:focus {
            outline: none;
            border-color: var(--color-6);
            box-shadow: 0 0 10px rgba(72, 191, 227, 0.4);
        }

        /* Light Mode Newsletter Input Focus */
        html.light-mode .footer-newsletter-form input:focus {
            box-shadow: 0 0 10px rgba(106, 75, 165, 0.3);
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

        /* Light Mode Newsletter Button */
        html.light-mode .footer-newsletter-form button {
            color: #ffffff;
        }

        html.light-mode .footer-newsletter-form button:hover {
            color: #ffffff;
        }

        .footer-divider {
            height: 1px;
            background: var(--glass-border);
            margin: 40px 0 30px;
        }

        /* Light Mode Footer Divider */
        html.light-mode .footer-divider {
            background: rgba(106, 75, 165, 0.15);
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
                font-size: 3rem;
            }
            .section-title {
                font-size: 2.5rem;
            }
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            .activity-gallery {
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            }
            .partners-slider {
                gap: 20px;
            }
            .partner-logo {
                width: 150px;
                height: 100px;
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
            
            /* Disable expensive animations on mobile */
            .activity-image,
            .vision-mission-card,
            .business-area-card {
                transition: none;
            }
            
            body::before {
                animation: none;
                transform: none;
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




        .pagination-container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
        }
        
        .pagination {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .page-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            color: var(--text-light);
            font-weight: 600;
            transition: var(--transition);
            cursor: pointer;
        }
        
        .page-btn.active {
            background: var(--gradient-3);
            color: var(--text-dark);
            border: none;
            box-shadow: 0 5px 15px rgba(72, 191, 227, 0.4);
        }
        
        html.light-mode .page-btn.active {
            color: #ffffff;
        }
        
        .page-btn:hover:not(.active) {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(72, 191, 227, 0.3);
        }
        
        .page-nav {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            color: var(--text-light);
            transition: var(--transition);
            cursor: pointer;
        }
        
        .page-nav:hover:not(.disabled) {
            background: var(--gradient-2);
            color: var(--text-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(105, 48, 195, 0.3);
        }
        
        html.light-mode .page-nav:hover:not(.disabled) {
            color: #ffffff;
        }
        
        .page-nav.disabled {
            opacity: 0.5;
            cursor: not-allowed;
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
        <div class="hero-video-background">
            <video autoplay muted loop playsinline id="hero-video">
                <source src="../images/31.mp4" type="video/mp4">
            </video>
        </div>
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <p class="hero-subtitle vi">Đột Phá Công Nghệ AI</p>
                <p class="hero-subtitle en">Revolutionary AI Technology</p>

                <h1 class="hero-title">
                    <div class="main-text vi">Nền Tảng Video Tự Động</div>
                    <div class="main-text en">Automatic Platform Video</div>
                </h1>

                <p class="hero-description vi">
                    "SOFIN NETWORK – Giải pháp AI & video tự động cho tương lai số."
                </p>
                <p class="hero-description en">
                    "SOFIN NETWORK – AI & automated video solutions for the digital future."
                </p>

                <div class="hero-buttons">
                    <a href="#vision" class="btn-primary-custom">
                        <span class="vi">Khám Phá Ngay</span>
                        <span class="en">Explore Now</span>
                    </a>
                    <a href="#contact" class="btn-outline-custom">
                        <span class="vi">Liên Hệ Tư Vấn</span>
                        <span class="en">Get Consultation</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section class="vision-mission-section" id="vision">
        <div class="container">
            <h2 class="section-title reveal vi">Tầm Nhìn & Sứ Mệnh</h2>
            <h2 class="section-title reveal en">Vision & Mission</h2>
            <p class="section-subtitle reveal vi">
                Chúng tôi hướng tới việc trở thành đơn vị tiên phong trong lĩnh vực AI và video tự động, mang lại giá trị bền vững cho xã hội.
            </p>
            <p class="section-subtitle reveal en">
                We aim to become a pioneer in AI and video automation, bringing sustainable value to society.
            </p>

            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="vision-mission-card reveal">
                        <div class="vision-mission-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="vision-mission-title vi">Tầm Nhìn</h3>
                        <h3 class="vision-mission-title en">Vision</h3>
                        <p class="vision-mission-description vi">
                            Tầm nhìn của chúng tôi là trở thành nền tảng hàng đầu trong việc cung cấp các giải pháp AI và tự động hóa video. Chúng tôi hướng tới việc vươn ra toàn cầu và đóng góp vào quá trình chuyển đổi số cho doanh nghiệp và xã hội.
                        </p>
                        <p class="vision-mission-description en">
                            Our vision is to become the leading platform providing AI and video automation solutions. We aim to go global and contribute to digital transformation for businesses and society.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="vision-mission-card reveal">
                        <div class="vision-mission-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="vision-mission-title vi">Sứ Mệnh</h3>
                        <h3 class="vision-mission-title en">Mission</h3>
                        <p class="vision-mission-description vi">
                            Nghiên cứu và phát triển các công nghệ AI, tự động hóa video tiên tiến nhất, cung cấp giải pháp tối ưu giúp khách hàng tăng hiệu quả và giảm chi phí vận hành.
                        </p>
                        <p class="vision-mission-description en">
                            Research and develop the most advanced AI and video automation technologies, providing optimal solutions to help customers increase efficiency and reduce operating costs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Areas Section -->
    <section class="business-areas-section" id="business-areas">
        <div class="container">
            <!-- Tiếp tục từ Business Areas Section -->
            <h2 class="section-title reveal vi">Lĩnh Vực Hoạt Động</h2>
            <h2 class="section-title reveal en">Business Areas</h2>
            <p class="section-subtitle reveal vi">
                SOFIN NETWORK tập trung vào các lĩnh vực công nghệ tiên tiến, mang đến giải pháp toàn diện cho doanh nghiệp hiện đại.
            </p>
            <p class="section-subtitle reveal en">
                SOFIN NETWORK focuses on advanced technology fields, providing comprehensive solutions for modern businesses.
            </p>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="business-area-card reveal">
                        <div class="business-area-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3 class="business-area-title vi">Trí Tuệ Nhân Tạo</h3>
                        <h3 class="business-area-title en">Artificial Intelligence</h3>
                        <p class="business-area-description vi">
                            Phát triển các giải pháp AI tiên tiến như nhận diện giọng nói, xử lý ngôn ngữ tự nhiên, thị giác máy tính và học máy để tự động hóa quy trình kinh doanh.
                        </p>
                        <p class="business-area-description en">
                            Developing advanced AI solutions such as speech recognition, natural language processing, computer vision and machine learning to automate business processes.
                        </p>
                        <a href="sofin_ai.php" class="business-area-link">
                            <span class="vi">Khám phá thêm</span>
                            <span class="en">Learn more</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="business-area-card reveal">
                        <div class="business-area-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <h3 class="business-area-title vi">Video Tự Động</h3>
                        <h3 class="business-area-title en">Automated Video</h3>
                        <p class="business-area-description vi">
                            Hệ thống sản xuất video tự động từ script, editing, render đến phân phối, tối ưu hóa quy trình sáng tạo nội dung video với chất lượng chuyên nghiệp.
                        </p>
                        <p class="business-area-description en">
                            Automated video production system from script, editing, rendering to distribution, optimizing video content creation process with professional quality.
                        </p>
                        <a href="#" class="business-area-link">
                            <span class="vi">Khám phá thêm</span>
                            <span class="en">Learn more</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="business-area-card reveal">
                        <div class="business-area-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="business-area-title vi">Tự Động Hóa</h3>
                        <h3 class="business-area-title en">Process Automation</h3>
                        <p class="business-area-description vi">
                            Giải pháp RPA (Robotic Process Automation) và AI automation, giúp doanh nghiệp tự động hóa các tác vụ repetitive và tăng hiệu suất.
                        </p>
                        <p class="business-area-description en">
                            RPA (Robotic Process Automation) and AI automation solutions, helping businesses automate repetitive tasks and increase efficiency.
                        </p>
                        <a href="#" class="business-area-link">
                            <span class="vi">Khám phá thêm</span>
                            <span class="en">Learn more</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="business-area-card reveal">
                        <div class="business-area-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h3 class="business-area-title vi">Cloud AI Services</h3>
                        <h3 class="business-area-title en">Cloud AI Services</h3>
                        <p class="business-area-description vi">
                            Nền tảng AI trên cloud với khả năng mở rộng linh hoạt, cung cấp API và microservices cho việc tích hợp AI vào ứng dụng.
                        </p>
                        <p class="business-area-description en">
                            Cloud-based AI platform with flexible scalability, providing APIs and microservices for AI integration into applications.
                        </p>
                        <a href="#" class="business-area-link">
                            <span class="vi">Khám phá thêm</span>
                            <span class="en">Learn more</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="business-area-card reveal">
                        <div class="business-area-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h3 class="business-area-title vi">AI Training Platform</h3>
                        <h3 class="business-area-title en">AI Training Platform</h3>
                        <p class="business-area-description vi">
                            Nền tảng đào tạo về AI và video automation, cung cấp khóa học thực hành từ cơ bản đến nâng cao cho doanh nghiệp.
                        </p>
                        <p class="business-area-description en">
                            AI and video automation training platform, providing hands-on courses from basic to advanced for businesses.
                        </p>
                        <a href="dao_tao.php" class="business-area-link">
                            <span class="vi">Khám phá thêm</span>
                            <span class="en">Learn more</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="business-area-card reveal">
                        <div class="business-area-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="business-area-title vi">AI Consulting</h3>
                        <h3 class="business-area-title en">AI Consulting</h3>
                        <p class="business-area-description vi">
                            Dịch vụ tư vấn chuyên sâu về triển khai AI trong doanh nghiệp, từ chiến lược, kiến trúc hệ thống đến implementation và maintenance.
                        </p>
                        <p class="business-area-description en">
                            In-depth consulting services for AI implementation in enterprises, from strategy, system architecture to implementation and maintenance.
                        </p>
                        <a href="#" class="business-area-link">
                            <span class="vi">Khám phá thêm</span>
                            <span class="en">Learn more</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stats-card reveal">
                        <div class="stats-number" data-count="500">0+</div>
                        <div class="stats-label vi">Khách Hàng Hài Lòng</div>
                        <div class="stats-label en">Happy Clients</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stats-card reveal">
                        <div class="stats-number" data-count="1200">0+</div>
                        <div class="stats-label vi">Dự Án Hoàn Thành</div>
                        <div class="stats-label en">Projects Completed</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stats-card reveal">
                        <div class="stats-number" data-count="50">0+</div>
                        <div class="stats-label vi">Chuyên Gia</div>
                        <div class="stats-label en">Experts</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="stats-card reveal">
                        <div class="stats-number" data-count="5">0</div>
                        <div class="stats-label vi">Năm Kinh Nghiệm</div>
                        <div class="stats-label en">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Highlight Activities Section -->
    <section class="highlight-activities-section" id="activities">
        <div class="container">
            <h2 class="section-title reveal vi">Hoạt Động Nổi Bật</h2>
            <h2 class="section-title reveal en">Highlight Activities</h2>
            <p class="section-subtitle reveal vi">
                Những hình ảnh về các dự án, sự kiện và thành tựu nổi bật của SOFIN NETWORK trong hành trình phát triển công nghệ AI.
            </p>
            <p class="section-subtitle reveal en">
                Images of outstanding projects, events and achievements of SOFIN NETWORK in the AI technology development journey.
            </p>

            <div class="activity-gallery" id="activity-gallery"></div>

            <div class="pagination-container">
                <div class="pagination" id="activities-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section" id="partners">
        <div class="container">
            <h2 class="section-title reveal vi">Đối Tác Chiến Lược</h2>
            <h2 class="section-title reveal en">Strategic Partners</h2>
            <p class="section-subtitle reveal vi">
                Chúng tôi tự hào hợp tác với các tập đoàn hàng đầu để mang đến những giải pháp AI và video automation tốt nhất.
            </p>
            <p class="section-subtitle reveal en">
                We are proud to partner with leading corporations to deliver the best AI and video automation solutions.
            </p>

            <div class="partners-slider">
                <div class="partner-logo reveal">
                    <img src="../images/logodoitac/1.webp" alt="Google AI">
                </div>
                <div class="partner-logo reveal">
                    <img src="../images/logodoitac/2.webp" alt="Microsoft">
                </div>
                <div class="partner-logo reveal">
                    <img src="../images/logodoitac/3.webp" alt="Amazon Web Services">
                </div>
                <div class="partner-logo reveal">
                    <img src="../images/logodoitac/4.webp" alt="NVIDIA">
                </div>
                <div class="partner-logo reveal">
                    <img src="../images/logodoitac/5.jpg" alt="Intel">
                </div>
                <div class="partner-logo reveal">
                    <img src="../images/logodoitac/6.webp" alt="Adobe">
                </div>
                <div class="partner-logo reveal">
                    <img src="../images/logodoitac/7.webp" alt="IBM">
                </div>
                <div class="partner-logo reveal">
                    <img src="../images/logodoitac/8.webp" alt="OpenAI">
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
                            <a href="inde.php">
                                <span class="vi">Trang Chủ</span>
                                <span class="en">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="sofin_ai.php">
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
            // Initialize loader functions
            createLoaderLogoDots();
            animateLoaderOrbits();

            // Hide Loader after page load
            // Giảm thời gian hiển thị loader
            setTimeout(function() {
                const loaderWrapper = document.querySelector('.loader-wrapper');
                if (loaderWrapper) {
                    loaderWrapper.style.opacity = '0';
                    loaderWrapper.style.visibility = 'hidden';
                }
            }, 500);

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
                const clickables = document.querySelectorAll('a, button, .vision-mission-card, .business-area-card, .activity-item, .partner-logo');

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
            currentLang.textContent = 'EN';

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

            // Updated Lazy Loading for Activity Images (IMG tags)
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        const container = img.closest('.activity-image-container');
                        
                        if (img.classList.contains('lazy')) {
                            // Add delay để tránh nhiều images load cùng lúc
                            setTimeout(() => {
                                // Load the image
                                const src = img.getAttribute('src');
                                
                                // Create a new image to preload
                                const imageLoader = new Image();
                                imageLoader.onload = function() {
                                    img.classList.add('loaded');
                                    img.classList.remove('lazy');
                                    if (container) {
                                        container.classList.add('loaded');
                                    }
                                };
                                imageLoader.onerror = function() {
                                    console.error('Failed to load image:', src);
                                    img.classList.remove('lazy');
                                    if (container) {
                                        container.classList.add('loaded');
                                    }
                                };
                                imageLoader.src = src;
                                
                                imageObserver.unobserve(img);
                            }, 100);
                        }
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '50px 0px'
            });

            // Apply lazy loading to activity images
            const activityImages = document.querySelectorAll('.activity-image.lazy');
            activityImages.forEach(img => {
                imageObserver.observe(img);
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
                const cards = document.querySelectorAll('.vision-mission-card, .business-area-card, .stats-card, .activity-item, .partner-logo');

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

            // Optimized Statistics Counter Animation
            const counters = document.querySelectorAll('.stats-number');
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = parseInt(entry.target.getAttribute('data-count'));
                        const counter = entry.target;
                        let current = 0;
                        const increment = target / 100;
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                            }
                            counter.textContent = Math.floor(current) + '+';
                        }, 20);
                        counterObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => {
                counterObserver.observe(counter);
            });

            // Optimized Partners Animation
            let partnerIndex = 0;
            const partners = document.querySelectorAll('.partner-logo');
            function animatePartners() {
                partners.forEach((partner, index) => {
                    partner.style.opacity = index === partnerIndex ? '1' : '0.7';
                    partner.style.transform = index === partnerIndex ? 'scale(1.05)' : 'scale(1)';
                });
                partnerIndex = (partnerIndex + 1) % partners.length;
            }
            // Start partner animation with interval
            if (partners.length > 0) {
                setInterval(animatePartners, 3000);
                animatePartners(); // Initial animation
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

            console.log('SOFIN NETWORK - Optimized Website initialized successfully!');
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










        //---------------------------------------------------------------------------------//

        //Phân Trang Hoạt Động Nổi Bật


        // Activities pagination script
        document.addEventListener('DOMContentLoaded', function() {
            // All activities data
            const allActivities = [
                {
                    image: "../images/10.jpg",
                    altVi: "Kết Nối Trong Từng Khoảnh Khắc",
                    altEn: "United in Sand & Sun",
                    titleVi: "Kết Nối Trong Từng Khoảnh Khắc",
                    titleEn: "United in Sand & Sun",
                    descriptionVi: "Khoảnh khắc team building rộn ràng dưới nắng, nơi tiếng cười và sự gắn kết lan tỏa trên bãi biển.",
                    descriptionEn: "Joyful team-building moments under the sun, where laughter and unity shine on the beach."
                },
                {
                    image: "../images/11.jpg",
                    altVi: "Vui Hội Trăng Rằm",
                    altEn: "Full Moon Festivities",
                    titleVi: "Vui Hội Trăng Rằm",
                    titleEn: "Full Moon Festivities",
                    descriptionVi: "Trung Thu rộn ràng với trẻ nhỏ, bóng bay và những khoảnh khắc ngập tràn niềm vui.",
                    descriptionEn: "A cheerful Mid-Autumn celebration with kids, balloons, and joyful moments."
                },
                {
                    image: "../images/5.jpeg",
                    altVi: "Hoạt Động Thể Thao Gắn Kết",
                    altEn: "Football Spirit Night",
                    titleVi: "Hoạt Động Thể Thao Gắn Kết",
                    titleEn: "Football Spirit Night",
                    descriptionVi: "Hoạt động thể thao sôi động, kết nối tinh thần đồng đội.",
                    descriptionEn: "A dynamic sports activity that builds unity and team spirit."
                },
                {
                    image: "../images/27.png",
                    altVi: "Year End Party",
                    altEn: "Year End Party",
                    titleVi: "Year End Party",
                    titleEn: "Year End Party",
                    descriptionVi: "Buổi họp mặt vui vẻ, tri ân những đồng hành cùng Sofin Network cuối năm.",
                    descriptionEn: "Happy launch, gratitude to those who accompanied Sofin Network at the end of the year."
                },
                {
                    image: "../images/13.jpg",
                    altVi: "Buổi Đào Tạo Chuyên Môn",
                    altEn: "Training Session",
                    titleVi: "Buổi Đào Tạo Chuyên Môn",
                    titleEn: "Training Session",
                    descriptionVi: "Buổi đào tạo chuyên sâu với sự tập trung và chia sẻ kiến thức từ cả đội ngũ.",
                    descriptionEn: "Focused minds and shared insights during an engaging team training session."
                },
                {
                    image: "../images/15.jpg",
                    altVi: "Chung Tay Vì Miền Trung",
                    altEn: "Together for Central Vietnam",
                    titleVi: "Chung Tay Vì Miền Trung",
                    titleEn: "Together for Central Vietnam",
                    descriptionVi: "Lan tỏa hy vọng qua hoạt động cứu trợ thiên tai ý nghĩa.",
                    descriptionEn: "Spreading hope through heartfelt disaster relief efforts."
                },
                // Add more activities as needed
                {
                    image: "../images/16.webp",
                    altVi: "Ký Kết Hợp Tác Chiến Lược",
                    altEn: "Strategic Partnership Signing",
                    titleVi: "Ký Kết Hợp Tác Chiến Lược",
                    titleEn: "Strategic Partnership Signing",
                    descriptionVi: "Đánh dấu sự hợp tác ý nghĩa trong giáo dục và đổi mới sáng tạo.",
                    descriptionEn: "Marking a meaningful partnership in education and innovation."
                },
                {
                    image: "../images/8.jpg",
                    altVi: "AI Hackathon 2024",
                    altEn: "AI Hackathon 2024",
                    titleVi: "AI Hackathon 2024",
                    titleEn: "AI Hackathon 2024",
                    descriptionVi: "Sự kiện lập trình AI kéo dài 48 giờ với hơn 30 đội tham gia từ khắp Đông Nam Á.",
                    descriptionEn: "48-hour AI programming event with over 30 teams participating from across Southeast Asia."
                },
                {
                    image: "../images/17.webp",
                    altVi: "Khởi Nghiệp Sớm – Thách Thức Hay Cơ Hội?",
                    altEn: "Early Startups – Challenge or Opportunity?",
                    titleVi: "Khởi Nghiệp Sớm – Thách Thức Hay Cơ Hội?",
                    titleEn: "Early Startups – Challenge or Opportunity?",
                    descriptionVi: "Talkshow về những khởi đầu táo bạo và cơ hội khởi nghiệp.",
                    descriptionEn: "A talkshow on bold beginnings and startup opportunities."
                },
                // {
                //     image: "../images/3.jpg",
                //     altVi: "Startup AI Awards 2024",
                //     altEn: "Startup AI Awards 2024",
                //     titleVi: "Startup AI Awards 2024",
                //     titleEn: "Startup AI Awards 2024",
                //     descriptionVi: "Đạt giải thưởng \"Best AI Innovation\" tại sự kiện công nghệ hàng đầu Việt Nam.",
                //     descriptionEn: "Won \"Best AI Innovation\" award at Vietnam's leading technology event."
                // },
                // {
                //     image: "../images/5.jpg",
                //     altVi: "Partnership với Tech Giants",
                //     altEn: "Partnership with Tech Giants",
                //     titleVi: "Partnership với Tech Giants",
                //     titleEn: "Partnership with Tech Giants",
                //     descriptionVi: "Ký kết hợp tác chiến lược với các tập đoàn công nghệ hàng đầu thế giới.",
                //     descriptionEn: "Signed strategic partnerships with leading global technology corporations."
                // },
                // {
                //     image: "../images/4.jpg",
                //     altVi: "AI Lab Mở Rộng",
                //     altEn: "AI Lab Expansion",
                //     titleVi: "AI Lab Mở Rộng",
                //     titleEn: "AI Lab Expansion",
                //     descriptionVi: "Khai trương phòng lab AI mới với trang thiết bị hiện đại nhất khu vực.",
                //     descriptionEn: "Opened new AI lab with the most modern equipment in the region."
                // },
            ];

            // Pagination configuration
            const itemsPerPage = 6;
            let currentPage = 1;
            const totalPages = Math.ceil(allActivities.length / itemsPerPage);

            // Function to render activities for the current page
            function renderActivities() {
                const activityGallery = document.getElementById('activity-gallery');
                activityGallery.innerHTML = '';
                
                // Calculate start and end indices for current page
                const startIndex = (currentPage - 1) * itemsPerPage;
                const endIndex = Math.min(startIndex + itemsPerPage, allActivities.length);
                
                // Get current page activities
                const currentActivities = allActivities.slice(startIndex, endIndex);
                
                // Create and append activity elements
                currentActivities.forEach(activity => {
                    const activityElement = document.createElement('div');
                    activityElement.className = 'activity-item reveal';
                    
                    activityElement.innerHTML = `
                        <div class="activity-image-container">
                            <img src="${activity.image}" alt="${activity.altEn}" class="activity-image lazy" loading="lazy">
                        </div>
                        <div class="activity-content">
                            <h3 class="activity-title vi">${activity.titleVi}</h3>
                            <h3 class="activity-title en">${activity.titleEn}</h3>
                            <p class="activity-description vi">${activity.descriptionVi}</p>
                            <p class="activity-description en">${activity.descriptionEn}</p>
                        </div>
                    `;
                    
                    activityGallery.appendChild(activityElement);
                });
                
                // Reinitialize lazy loading for new images
                const newActivityImages = document.querySelectorAll('.activity-image.lazy');
                if (window.imageObserver) {
                    newActivityImages.forEach(img => {
                        window.imageObserver.observe(img);
                    });
                }
                
                // Reinitialize reveal animation for new items
                const newReveals = activityGallery.querySelectorAll('.reveal');
                if (window.revealObserver) {
                    newReveals.forEach(reveal => {
                        window.revealObserver.observe(reveal);
                    });
                }
                
                // Update pagination UI
                updatePagination();
            }
            
            // Function to update pagination UI
            function updatePagination() {
                const paginationElement = document.getElementById('activities-pagination');
                paginationElement.innerHTML = '';
                
                // Previous button
                const prevBtn = document.createElement('div');
                prevBtn.className = `page-nav ${currentPage === 1 ? 'disabled' : ''}`;
                prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
                if (currentPage > 1) {
                    prevBtn.addEventListener('click', () => {
                        currentPage--;
                        renderActivities();
                        // Scroll to activities section top with offset
                        const activitiesSection = document.getElementById('activities');
                        const navbarHeight = document.querySelector('.navbar').offsetHeight;
                        window.scrollTo({
                            top: activitiesSection.offsetTop - navbarHeight - 20,
                            behavior: 'smooth'
                        });
                    });
                }
                paginationElement.appendChild(prevBtn);
                
                // Page number buttons
                for (let i = 1; i <= totalPages; i++) {
                    const pageBtn = document.createElement('div');
                    pageBtn.className = `page-btn ${i === currentPage ? 'active' : ''}`;
                    pageBtn.textContent = i;
                    pageBtn.addEventListener('click', () => {
                        if (i !== currentPage) {
                            currentPage = i;
                            renderActivities();
                            // Scroll to activities section top with offset
                            const activitiesSection = document.getElementById('activities');
                            const navbarHeight = document.querySelector('.navbar').offsetHeight;
                            window.scrollTo({
                                top: activitiesSection.offsetTop - navbarHeight - 20,
                                behavior: 'smooth'
                            });
                        }
                    });
                    paginationElement.appendChild(pageBtn);
                }
                
                // Next button
                const nextBtn = document.createElement('div');
                nextBtn.className = `page-nav ${currentPage === totalPages ? 'disabled' : ''}`;
                nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
                if (currentPage < totalPages) {
                    nextBtn.addEventListener('click', () => {
                        currentPage++;
                        renderActivities();
                        // Scroll to activities section top with offset
                        const activitiesSection = document.getElementById('activities');
                        const navbarHeight = document.querySelector('.navbar').offsetHeight;
                        window.scrollTo({
                            top: activitiesSection.offsetTop - navbarHeight - 20,
                            behavior: 'smooth'
                        });
                    });
                }
                paginationElement.appendChild(nextBtn);
            }
            
            // Store observer references to the window for access in renderActivities
            window.imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        const container = img.closest('.activity-image-container');
                        
                        if (img.classList.contains('lazy')) {
                            setTimeout(() => {
                                const src = img.getAttribute('src');
                                const imageLoader = new Image();
                                imageLoader.onload = function() {
                                    img.classList.add('loaded');
                                    img.classList.remove('lazy');
                                    if (container) {
                                        container.classList.add('loaded');
                                    }
                                };
                                imageLoader.onerror = function() {
                                    console.error('Failed to load image:', src);
                                    img.classList.remove('lazy');
                                    if (container) {
                                        container.classList.add('loaded');
                                    }
                                };
                                imageLoader.src = src;
                                
                                window.imageObserver.unobserve(img);
                            }, 100);
                        }
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '50px 0px'
            });
            
            window.revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        window.revealObserver.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });
            
            // Initial render
            renderActivities();
        });
    </script>
</body>
</html>