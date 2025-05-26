<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Learn about SOFIN NETWORK's journey since 2020 in building meaningful connections and spreading love across the country through community engagement and charitable actions.">
    <meta name="keywords" content="SOFIN NETWORK, community connection, social impact, charitable actions, network expansion, better society, volunteer activities, corporate social responsibility">
    <meta name="author" content="SOFIN NETWORK">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Our Journey of Connection & Compassion | SOFIN NETWORK">
    <meta property="og:description" content="Learn about SOFIN NETWORK's journey since 2020 in building meaningful connections and spreading love across the country through community engagement and charitable actions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sofin.network/public/connect">
    <meta property="og:image" content="https://sofin.network/images/thumnail.jpeg">
    <meta property="og:site_name" content="SOFIN NETWORK">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@sofin_network">
    <meta name="twitter:title" content="Our Journey of Connection & Compassion | SOFIN NETWORK">
    <meta name="twitter:description" content="Learn about SOFIN NETWORK's journey since 2020 in building meaningful connections and spreading love across the country through community engagement and charitable actions.">
    <meta name="twitter:image" content="https://sofin.network/images/thumnail.jpeg">

    <!-- Favicon & Title -->
    <title>Our Journey of Connection & Compassion | SOFIN NETWORK</title>



    
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

        /* Enhanced Light Mode Colors */
        html.light-mode {
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
            --text-light: #1a1a1a;
            --text-dark: #000000;
            --text-muted: rgba(60, 60, 60, 0.9);
            --dark-bg: #f8f9fa;
            --dark-card: rgba(255, 255, 255, 0.85);
            --glass-bg: rgba(255, 255, 255, 0.8);
            --glass-border: rgba(107, 91, 149, 0.15);
            --glass-shadow: 0 8px 32px 0 rgba(107, 91, 149, 0.1);
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

        .optimized-element,
        .hero-section,
        .connection-card,
        .charity-item,
        .partnership-card,
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

        /* Light Mode Body Background */
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
            background-color: #f8f9fa;
        }

        /* Dark mode background */
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

        /* Light Mode animated background */
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

        /* Animated background for dark mode*/
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

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-1);
            opacity: 0.1;
            z-index: 1;
        }

        /* Light Mode Hero Overlay */
        html.light-mode .hero-overlay {
            background: var(--gradient-1);
            opacity: 0.02;
        }

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
            z-index: 0;
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

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            max-width: 900px;
            margin: 0 auto;
            padding: 0 20px;
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
        .section {
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

        /* COMMUNITY IMPACT SECTION */
        .community-impact {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 60px;
            margin: 40px 0;
            border: 1px solid var(--glass-border);
            box-shadow: var(--glass-shadow);
        }

        html.light-mode .community-impact {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(107, 91, 149, 0.12);
            box-shadow: 0 8px 32px rgba(107, 91, 149, 0.1);
        }

        .impact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }

        .impact-item {
            text-align: center;
            position: relative;
        }

        .impact-number {
            font-size: 4rem;
            font-weight: 900;
            color: var(--color-7);
            text-shadow: 0 0 20px rgba(86, 207, 225, 0.5);
            margin-bottom: 15px;
            font-family: var(--heading-font);
        }

        html.light-mode .impact-number {
            text-shadow: 0 0 15px rgba(79, 175, 219, 0.3);
        }

        .impact-label {
            font-size: 1.3rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        /* CHARITY ACTIVITIES STYLES - ENHANCED */
        .charity-masonry {
            columns: 3;
            column-gap: 30px;
            margin-top: 60px;
        }

        .charity-card {
            display: flex; /* Use flexbox */
            flex-direction: column; /* Stack children vertically */
            justify-content: space-between; /* Space out content */
            height: 400px; /* Set a fixed height for all cards */
            break-inside: avoid;
            margin-bottom: 30px;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            overflow: hidden;
            transition: var(--transition);
            box-shadow: var(--glass-shadow);
        }

        html.light-mode .charity-card {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(107, 91, 149, 0.12);
            box-shadow: 0 8px 32px rgba(107, 91, 149, 0.1);
        }

        .charity-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(116, 0, 184, 0.3);
        }

        html.light-mode .charity-card:hover {
            box-shadow: 0 25px 50px rgba(139, 125, 168, 0.15);
        }

        .charity-image-wrapper {
            height: 200px; /* Set a fixed height for the image wrapper */
            overflow: hidden; /* Hide overflow */
        }

        .charity-image {
            width: 100%; /* Make image take full width */
            height: 100%; /* Make image take full height */
            object-fit: cover; /* Maintain aspect ratio */
        }

        .charity-card:hover .charity-image {
            transform: scale(1.1);
        }

        .charity-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.8));
            opacity: 0;
            transition: var(--transition);
            display: flex;
            align-items: flex-end;
            padding: 20px;
        }

        .charity-card:hover .charity-overlay {
            opacity: 1;
        }

        .charity-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--gradient-2);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.85rem;
            color: #ffffff;
            font-weight: 600;
        }

        .charity-content {
            flex-grow: 1; /* Allow content to grow and fill space */
            display: flex;
            flex-direction: column; /* Stack content vertically */
            justify-content: space-between; /* Space out content */
            padding: 25px;
        }

        .charity-title {
            font-size: 1.3rem;
            margin-bottom: 12px;
            color: var(--text-light);
            font-weight: 600;
            line-height: 1.4;
        }

        .charity-description {
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .charity-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid var(--glass-border);
            padding-top: 15px;
        }

        html.light-mode .charity-meta {
            border-top: 1px solid rgba(107, 91, 149, 0.12);
        }

        .charity-participants {
            display: flex;
            align-items: center;
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .charity-participants i {
            margin-right: 8px;
            color: var(--color-8);
        }

        /* STORY SECTION */
        .story-container {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 60px;
            margin: 60px 0;
            border: 1px solid var(--glass-border);
            box-shadow: var(--glass-shadow);
            position: relative;
            overflow: hidden;
        }

        html.light-mode .story-container {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(107, 91, 149, 0.12);
            box-shadow: 0 8px 32px rgba(107, 91, 149, 0.1);
        }

        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .story-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: var(--text-muted);
        }

        .story-highlight {
            font-size: 2rem;
            color: var(--color-7);
            font-family: var(--accent-font);
            margin-bottom: 20px;
            text-shadow: 0 0 20px rgba(86, 207, 225, 0.5);
        }

        html.light-mode .story-highlight {
            text-shadow: 0 0 15px rgba(79, 175, 219, 0.3);
        }

        .story-image {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
        }

        .story-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .story-container:hover .story-image img {
            transform: scale(1.05);
        }

        /* CONNECTION MAP SECTION */
        .connection-map {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 60px;
            margin: 60px 0;
            border: 1px solid var(--glass-border);
            box-shadow: var(--glass-shadow);
            text-align: center;
        }

        html.light-mode .connection-map {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(107, 91, 149, 0.12);
            box-shadow: 0 8px 32px rgba(107, 91, 149, 0.1);
        }

        .map-container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 40px auto;
            height: 500px;
            background: var(--dark-card);
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        html.light-mode .map-container {
            background: rgba(255, 255, 255, 0.7);
        }

        .connection-points {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .connection-point {
            position: absolute;
            width: 15px;
            height: 15px;
            background: var(--color-7);
            border-radius: 50%;
            box-shadow: 0 0 20px var(--color-7);
            animation: pulse 2s infinite;
        }

        .connection-point::before {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            width: 23px;
            height: 23px;
            border: 2px solid var(--color-9);
            border-radius: 50%;
            opacity: 0.5;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        .connection-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .connection-stat {
            text-align: center;
        }

        .connection-stat-number {
            font-size: 2.5rem;
            font-weight: 900;
            color: var(--color-8);
            margin-bottom: 10px;
            text-shadow: 0 0 15px rgba(100, 223, 223, 0.5);
        }

        html.light-mode .connection-stat-number {
            text-shadow: 0 0 10px rgba(81, 188, 212, 0.3);
        }

        .connection-stat-label {
            color: var(--text-muted);
            font-size: 1rem;
        }

        /* FLOATING CARDS SECTION */
        .floating-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 60px;
        }

        .floating-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            padding: 40px;
            text-align: center;
            transition: var(--transition);
            box-shadow: var(--glass-shadow);
            position: relative;
            overflow: hidden;
            animation: float 6s ease-in-out infinite;
        }

        html.light-mode .floating-card {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(107, 91, 149, 0.12);
            box-shadow: 0 8px 32px rgba(107, 91, 149, 0.1);
        }

        .floating-card:nth-child(2) {
            animation-delay: -2s;
        }

        .floating-card:nth-child(3) {
            animation-delay: -4s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .floating-card:hover {
            transform: translateY(-30px);
            box-shadow: 0 25px 50px rgba(116, 0, 184, 0.3);
        }

        html.light-mode .floating-card:hover {
            box-shadow: 0 25px 50px rgba(139, 125, 168, 0.15);
        }

        .floating-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-3);
        }

        .floating-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 30px;
            background: var(--gradient-1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: #ffffff;
            box-shadow: 0 10px 30px rgba(116, 0, 184, 0.3);
            position: relative;
        }

        .floating-icon::after {
            content: '';
            position: absolute;
            top: 50px;
            left: 50px;
            width: 110px;
            height: 110px;
            border: 2px dashed var(--color-6);
            border-radius: 50%;
            animation: rotate 10s linear infinite;
        }

        .floating-title {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--text-light);
            font-weight: 600;
        }

        .floating-description {
            color: var(--text-muted);
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .floating-link {
            color: var(--color-7);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: var(--transition);
            position: relative;
        }

        .floating-link::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-3);
            transition: var(--transition);
        }

        .floating-link:hover::before {
            width: 100%;
        }

        .floating-link i {
            margin-left: 8px;
            transition: var(--transition);
        }

        .floating-link:hover {
            color: var(--color-9);
            text-shadow: 0 0 10px rgba(114, 239, 221, 0.6);
        }

        .floating-link:hover i {
            transform: translateX(10px);
        }

        html.light-mode .floating-link:hover {
            text-shadow: 0 0 8px rgba(102, 217, 239, 0.3);
        }

        /* TESTIMONIAL SECTION */
        .testimonial-slider {
            max-width: 800px;
            margin: 60px auto;
            position: relative;
        }

        .testimonial-item {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            padding: 50px;
            text-align: center;
            border: 1px solid var(--glass-border);
            box-shadow: var(--glass-shadow);
        }

        html.light-mode .testimonial-item {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(107, 91, 149, 0.12);
            box-shadow: 0 8px 32px rgba(107, 91, 149, 0.1);
        }

        .testimonial-quote {
            font-size: 1.5rem;
            font-style: italic;
            color: var(--text-muted);
            margin-bottom: 30px;
            position: relative;
        }

        .testimonial-quote::before,
        .testimonial-quote::after {
            content: '"';
            font-size: 4rem;
            color: var(--color-7);
            position: absolute;
            opacity: 0.5;
        }

        .testimonial-quote::before {
            top: -20px;
            left: -30px;
        }

        .testimonial-quote::after {
            bottom: -40px;
            right: -30px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 30px;
        }

        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--gradient-2);
            margin-right: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.5rem;
        }

        .testimonial-info h4 {
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .testimonial-info p {
            color: var(--text-muted);
            font-size: 0.9rem;
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

        html.light-mode .progress-bar {
            box-shadow: 0 0 8px rgba(106, 75, 165, 0.3);
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

        /* FOOTER */
        .footer {
            background: linear-gradient(135deg, var(--dark-bg) 0%, #190040 50%, var(--dark-bg) 100%);
            padding: 60px 0 20px;
            position: relative;
            margin-top: 100px;
        }

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

        html.light-mode .footer-social a {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(106, 75, 165, 0.15);
        }

        .footer-social a:hover {
            background: var(--gradient-3);
            color: var(--text-dark);
            transform: translateY(-5px);
        }

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
            .charity-masonry {
                columns: 1;
            }
            .floating-cards {
                grid-template-columns: 1fr;
            }
            .story-content {
                grid-template-columns: 1fr;
            }
            .map-container {
                height: 300px;
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
        <div class="container">
            <div class="hero-content">
                <p class="hero-subtitle vi">Xây Dựng Cầu Nối Toàn Cầu</p>
                <p class="hero-subtitle en">Building Global Bridges</p>

                <h1 class="hero-title">
                    <div class="main-text vi">Kết Nối<br>Vì Tương Lai<br>Tốt Đẹp</div>
                    <div class="main-text en">Connect<br>For A Better<br>Future</div>
                </h1>

                <p class="hero-description vi">
                    Cùng SOFIN NETWORK tạo ra những kết nối ý nghĩa, xây dựng cộng đồng mạnh mẽ và lan tỏa những giá trị tích cực đến mọi miền đất nước.
                </p>
                <p class="hero-description en">
                    Join SOFIN NETWORK in creating meaningful connections, building strong communities and spreading positive values throughout the country.
                </p>

                <div class="hero-buttons">
                    <a href="#community" class="btn-primary-custom">
                        <span class="vi">Tham Gia Cộng Đồng</span>
                        <span class="en">Join Community</span>
                    </a>
                    <a href="#impact" class="btn-outline-custom">
                        <span class="vi">Xem Tác Động</span>
                        <span class="en">See Impact</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Impact Section -->
    <section class="section" id="impact">
        <div class="container">
            <h2 class="section-title reveal vi">Tác Động Cộng Đồng</h2>
            <h2 class="section-title reveal en">Community Impact</h2>
            <div class="community-impact reveal">
                <p class="text-center vi" style="font-size: 1.5rem; color: var(--text-muted); margin-bottom: 40px;">
                    Con số ấn tượng về những đóng góp của SOFIN NETWORK cho cộng đồng
                </p>
                <p class="text-center en" style="font-size: 1.5rem; color: var(--text-muted); margin-bottom: 40px;">
                    Impressive numbers about SOFIN NETWORK's contributions to the community
                </p>
                <div class="impact-grid">
                    <div class="impact-item reveal">
                        <div class="impact-number" data-count="50000">50,000</div>
                        <div class="impact-label vi">Người Được Hỗ Trợ</div>
                        <div class="impact-label en">People Helped</div>
                    </div>
                    <div class="impact-item reveal">
                        <div class="impact-number" data-count="100">100</div>
                        <div class="impact-label vi">Dự Án Thiện Nguyện</div>
                        <div class="impact-label en">Charity Projects</div>
                    </div>
                    <div class="impact-item reveal">
                        <div class="impact-number" data-count="1000">1,000</div>
                        <div class="impact-label vi">Tình Nguyện Viên</div>
                        <div class="impact-label en">Volunteers</div>
                    </div>
                    <!-- <div class="impact-item reveal">
                        <div class="impact-number" data-count="63">0</div>
                        <div class="impact-label vi">Tỉnh Thành</div>
                        <div class="impact-label en">Provinces</div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Charity Activities Section -->
    <section class="section" id="charity">
        <div class="container">
            <h2 class="section-title reveal vi">Hoạt Động Thiện Nguyện</h2>
            <h2 class="section-title reveal en">Charity Activities</h2>
            <p class="section-subtitle reveal vi">
                Những hành động thiện nguyện lan tỏa yêu thương và hy vọng đến mọi miền đất nước
            </p>
            <p class="section-subtitle reveal en">
                Charity actions spreading love and hope throughout the country
            </p>

            <div class="charity-masonry">
                <div class="charity-card reveal">
                    <div class="charity-image-wrapper">
                        <img src="../images/15.jpg" alt="Xây dựng trường học" class="charity-image">
                        <div class="charity-overlay">
                            <div class="charity-participants">
                                <i class="fas fa-users"></i>
                                <span>1000+ <span class="vi">người tham gia</span><span class="en">participants</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="charity-tag vi">Giáo Dục</div>
                    <div class="charity-tag en">Education</div> -->
                    <div class="charity-content">
                        <h3 class="charity-title vi">Chung Tay Vì Miền Trung</h3>
                        <h3 class="charity-title en">Together for Central Vietnam</h3>
                        <p class="charity-description vi">
                            Lan tỏa hy vọng qua hoạt động cứu trợ thiên tai ý nghĩa.
                        </p>
                        <p class="charity-description en">
                            Spreading hope through heartfelt disaster relief efforts.
                        </p>
                        <div class="charity-meta">
                            <div class="charity-participants">
                                <i class="fas fa-calendar"></i>
                                <span>2024</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="charity-card reveal">
                    <div class="charity-image-wrapper">
                        <img src="../images/ketnoi/2.jpg" alt="Chương trình sữa học đường" class="charity-image">
                        <div class="charity-overlay">
                            <div class="charity-participants">
                                <i class="fas fa-users"></i>
                                <span>5000+ <span class="vi">trẻ em</span><span class="en">children</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="charity-tag vi">Dinh Dưỡng</div>
                    <div class="charity-tag en">Nutrition</div> -->
                    <div class="charity-content">
                        <h3 class="charity-title vi">Chương Trình Sữa Học Đường</h3>
                        <h3 class="charity-title en">School Milk Program</h3>
                        <p class="charity-description vi">
                            Cung cấp sữa miễn phí cho 5000 trẻ em trong 50 trường học, đảm bảo dinh dưỡng cho các em.
                        </p>
                        <p class="charity-description en">
                            Provided free milk to 5000 children in 50 schools, ensuring proper nutrition for them.
                        </p>
                        <div class="charity-meta">
                            <div class="charity-participants">
                                <i class="fas fa-calendar"></i>
                                <span>2024</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="charity-card reveal">
                    <div class="charity-image-wrapper">
                        <img src="../images/ketnoi/2.jpg" alt="Khám bệnh miễn phí" class="charity-image">
                        <div class="charity-overlay">
                            <div class="charity-participants">
                                <i class="fas fa-users"></i>
                                <span>2000+ <span class="vi">người</span><span class="en">people</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="charity-tag vi">Y Tế</div>
                    <div class="charity-tag en">Healthcare</div> -->
                    <div class="charity-content">
                        <h3 class="charity-title vi">Khám Bệnh Miễn Phí</h3>
                        <h3 class="charity-title en">Free Medical Check-ups</h3>
                        <p class="charity-description vi">
                            Tổ chức khám bệnh miễn phí cho người nghèo tại 10 tỉnh thành, tặng thuốc và tư vấn sức khỏe.
                        </p>
                        <p class="charity-description en">
                            Organized free medical check-ups for the poor in 10 provinces, providing medicine and health consultation.
                        </p>
                        <div class="charity-meta">
                            <div class="charity-participants">
                                <i class="fas fa-calendar"></i>
                                <span>2024</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="charity-card reveal">
                    <div class="charity-image-wrapper">
                        <img src="../images/ketnoi/1.webp" alt="Nhà tình nghĩa" class="charity-image">
                        <div class="charity-overlay">
                            <div class="charity-participants">
                                <i class="fas fa-users"></i>
                                <span>100+ <span class="vi">gia đình</span><span class="en">families</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="charity-tag vi">Nhà Ở</div>
                    <div class="charity-tag en">Housing</div> -->
                    <div class="charity-content">
                        <h3 class="charity-title vi">Xây Nhà Tình Nghĩa</h3>
                        <h3 class="charity-title en">Building Houses of Love</h3>
                        <p class="charity-description vi">
                            Xây dựng 100 ngôi nhà tình nghĩa cho các gia đình khó khăn, mang lại nơi ở ấm áp.
                        </p>
                        <p class="charity-description en">
                            Built 100 houses of love for disadvantaged families, providing warm homes.
                        </p>
                        <div class="charity-meta">
                            <div class="charity-participants">
                                <i class="fas fa-calendar"></i>
                                <span>2023-2024</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="charity-card reveal">
                    <div class="charity-image-wrapper">
                        <img src="../images/ketnoi/1.webp" alt="Học bổng" class="charity-image">
                        <div class="charity-overlay">
                            <div class="charity-participants">
                                <i class="fas fa-users"></i>
                                <span>1000+ <span class="vi">sinh viên</span><span class="en">students</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="charity-tag vi">Học Bổng</div>
                    <div class="charity-tag en">Scholarship</div> -->
                    <div class="charity-content">
                        <h3 class="charity-title vi">Học Bổng "Ước Mơ Vươn Xa"</h3>
                        <h3 class="charity-title en">"Dreams Soar High" Scholarship</h3>
                        <p class="charity-description vi">
                            Trao 1000 suất học bổng toàn phần cho sinh viên nghèo vượt khó, hỗ trợ hoàn thành đại học.
                        </p>
                        <p class="charity-description en">
                            Awarded 1000 full scholarships to disadvantaged students, supporting them to complete university.
                        </p>
                        <div class="charity-meta">
                            <div class="charity-participants">
                                <i class="fas fa-calendar"></i>
                                <span class="vi">Hàng năm</span>
                                <span class="en">Annually</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="charity-card reveal">
                    <div class="charity-image-wrapper">
                        <img src="../images/ketnoi/1.webp" alt="Bảo vệ môi trường" class="charity-image">
                        <div class="charity-overlay">
                            <div class="charity-participants">
                                <i class="fas fa-users"></i>
                                <span>5000+ <span class="vi">tình nguyện viên</span><span class="en">volunteers</span></span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="charity-tag vi">Môi Trường</div>
                    <div class="charity-tag en">Environment</div> -->
                    <div class="charity-content">
                        <h3 class="charity-title vi">Bảo Vệ Môi Trường Xanh</h3>
                        <h3 class="charity-title en">Green Environment Protection</h3>
                        <p class="charity-description vi">
                            Trồng 100,000 cây xanh và dọn dẹp 50 bãi biển, chung tay bảo vệ môi trường.
                        </p>
                        <p class="charity-description en">
                            Planted 100,000 trees and cleaned 50 beaches, joining hands to protect the environment.
                        </p>
                        <div class="charity-meta">
                            <div class="charity-participants">
                                <i class="fas fa-calendar"></i>
                                <span>2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="section">
        <div class="container">
            <div class="story-container reveal">
                <div class="story-content">
                    <div>
                        <div class="story-highlight vi">"Hành trình kết nối"</div>
                        <div class="story-highlight en">"Journey of Connection"</div>
                        <p class="story-text vi">
                            Từ những bước chân đầu tiên vào năm 2020, SOFIN NETWORK đã không ngừng mở rộng mạng lưới kết nối, 
                            lan tỏa tình yêu thương đến mọi miền đất nước. Chúng tôi tin rằng mỗi kết nối nhỏ đều có thể 
                            tạo ra những thay đổi lớn, mỗi hành động thiện nguyện đều góp phần xây dựng một xã hội tốt đẹp hơn.
                        </p>
                        <p class="story-text en">
                            Since our first steps in 2020, SOFIN NETWORK has continuously expanded its network of connections, 
                            spreading love throughout the country. We believe that every small connection can create big changes, 
                            every charitable action contributes to building a better society.
                        </p>
                    </div>
                    <div class="story-image">
                        <img src="../images/ketnoi/1.webp" alt="Hành trình kết nối" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Connection Map Section -->
    <section class="section" id="network">
        <div class="container">
            <h2 class="section-title reveal vi">Mạng Lưới Kết Nối</h2>
            <h2 class="section-title reveal en">Connection Network</h2>
            <div class="connection-map reveal">
                <p class="vi" style="font-size: 1.3rem; color: var(--text-muted); margin-bottom: 40px;">
                    SOFIN NETWORK hiện diện khắp 63 tỉnh thành với hơn 500 điểm kết nối
                </p>
                <p class="en" style="font-size: 1.3rem; color: var(--text-muted); margin-bottom: 40px;">
                    SOFIN NETWORK is present in all 63 provinces with over 500 connection points
                </p>
                <div class="map-container">
                    <div class="connection-points" id="connection-points">
                        <!-- Connection points will be generated by JavaScript -->
                    </div>
                    <div style="font-size: 3rem; color: var(--color-7); opacity: 0.5;">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
                <div class="connection-stats">
                    <!-- <div class="connection-stat reveal">
                        <div class="connection-stat-number" data-count="63">0</div>
                        <div class="connection-stat-label vi">Tỉnh Thành</div>
                        <div class="connection-stat-label en">Provinces</div>
                    </div> -->
                    <div class="connection-stat reveal">
                        <div class="connection-stat-number" data-count="500">0+</div>
                        <div class="connection-stat-label vi">Điểm Kết Nối</div>
                        <div class="connection-stat-label en">Connection Points</div>
                    </div>
                    <div class="connection-stat reveal">
                        <div class="connection-stat-number" data-count="1000000">0+</div>
                        <div class="connection-stat-label vi">Người Được Kết Nối</div>
                        <div class="connection-stat-label en">People Connected</div>
                    </div>
                    <div class="connection-stat reveal">
                        <div class="connection-stat-number" data-count="24">24/7</div>
                        <div class="connection-stat-label vi">Hoạt Động</div>
                        <div class="connection-stat-label en">Active</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Floating Cards Section -->
    <section class="section" id="community">
        <div class="container">
            <h2 class="section-title reveal vi">Cách Tham Gia</h2>
            <h2 class="section-title reveal en">How to Participate</h2>
            <p class="section-subtitle reveal vi">
                Nhiều cách để bạn có thể tham gia và đóng góp cho cộng đồng SOFIN NETWORK
            </p>
            <p class="section-subtitle reveal en">
                Many ways you can participate and contribute to the SOFIN NETWORK community
            </p>

            <div class="floating-cards">
                <div class="floating-card reveal">
                    <div class="floating-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="floating-title vi">Tình Nguyện Viên</h3>
                    <h3 class="floating-title en">Volunteer</h3>
                    <p class="floating-description vi">
                        Trở thành tình nguyện viên, tham gia các hoạt động thiện nguyện ý nghĩa và lan tỏa tình yêu thương.
                    </p>
                    <p class="floating-description en">
                        Become a volunteer, participate in meaningful charity activities and spread love.
                    </p>
                    <a href="#community" class="floating-link">
                        <span class="vi">Đăng ký ngay</span>
                        <span class="en">Register now</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="floating-card reveal">
                    <div class="floating-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="floating-title vi">Quyên Góp</h3>
                    <h3 class="floating-title en">Donation</h3>
                    <p class="floating-description vi">
                        Đóng góp tài chính để hỗ trợ các dự án thiện nguyện, mỗi đồng góp đều tạo ra giá trị to lớn.
                    </p>
                    <p class="floating-description en">
                        Make financial contributions to support charity projects, every donation creates great value.
                    </p>
                    <a href="#" class="floating-link">
                        <span class="vi">Quyên góp</span>
                        <span class="en">Donate</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="floating-card reveal">
                    <div class="floating-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h3 class="floating-title vi">Chia Sẻ</h3>
                    <h3 class="floating-title en">Share</h3>
                    <p class="floating-description vi">
                        Chia sẻ các hoạt động của chúng tôi trên mạng xã hội để lan tỏa thông điệp tích cực.
                    </p>
                    <p class="floating-description en">
                        Share our activities on social media to spread positive messages.
                    </p>
                    <a href="#" class="floating-link">
                        <span class="vi">Chia sẻ ngay</span>
                        <span class="en">Share now</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="floating-card reveal">
                    <div class="floating-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="floating-title vi">Đối Tác</h3>
                    <h3 class="floating-title en">Partner</h3>
                    <p class="floating-description vi">
                        Trở thành đối tác của SOFIN NETWORK để cùng thực hiện các dự án có tác động tích cực.
                    </p>
                    <p class="floating-description en">
                        Become a partner of SOFIN NETWORK to implement projects with positive impact.
                    </p>
                    <a href="#" class="floating-link">
                        <span class="vi">Hợp tác</span>
                        <span class="en">Collaborate</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="floating-card reveal">
                    <div class="floating-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="floating-title vi">Ý Tưởng</h3>
                    <h3 class="floating-title en">Ideas</h3>
                    <p class="floating-description vi">
                        Chia sẻ ý tưởng sáng tạo cho các dự án thiện nguyện mới, cùng nhau xây dựng tương lai tốt đẹp.
                    </p>
                    <p class="floating-description en">
                        Share creative ideas for new charity projects, building a better future together.
                    </p>
                    <a href="#" class="floating-link">
                        <span class="vi">Gửi ý tưởng</span>
                        <span class="en">Submit idea</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="floating-card reveal">
                    <div class="floating-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="floating-title vi">Cộng Đồng</h3>
                    <h3 class="floating-title en">Community</h3>
                    <p class="floating-description vi">
                        Tham gia cộng đồng trực tuyến, kết nối với những người cùng chí hướng và chia sẻ kinh nghiệm.
                    </p>
                    <p class="floating-description en">
                        Join the online community, connect with like-minded people and share experiences.
                    </p>
                    <a href="#" class="floating-link">
                        <span class="vi">Tham gia</span>
                        <span class="en">Join</span>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title reveal vi">Lời Cảm Ơn</h2>
            <h2 class="section-title reveal en">Testimonials</h2>
            <div class="testimonial-slider reveal">
                <div class="testimonial-item">
                    <div class="testimonial-quote vi">
                        SOFIN NETWORK đã mang đến hy vọng cho gia đình tôi. Nhờ có chương trình học bổng, con tôi có thể tiếp tục việc học mà không lo về chi phí.
                    </div>
                    <div class="testimonial-quote en">
                        SOFIN NETWORK has brought hope to my family. Thanks to the scholarship program, my child can continue studying without worrying about costs.
                    </div>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="testimonial-info">
                            <h4>Nguyễn Thị Lan</h4>
                            <p class="vi">Phụ huynh học sinh</p>
                            <p class="en">Student's Parent</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
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
                            <a href="../index.php">
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
                            <a href="../page2/education.php">
                                <span class="vi">Đào Tạo</span>
                                <span class="en">Training</span>
                            </a>
                        </li>
                        <li>
                            <a href="../page2/content_distribution.php">
                                <span class="vi">Phân Phối Nội Dung</span>
                                <span class="en">Content Distribution</span>
                            </a>
                        </li>
                        <li>
                            <a href="../page2/connect.php">
                                <span class="vi">Kết Nối</span>
                                <span class="en">Connect</span>
                            </a>
                        </li>
                        <li>
                            <a href="../page2/contact.php">
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

        // Initialize all functions when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
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
            }, 500);

            // Create Loader Logo Dots
            function createLoaderLogoDots() {
                const loaderDots = document.getElementById('loader-dots');
                if (loaderDots) {
                    const numberOfDots = 20;
                    for (let i = 0; i < numberOfDots; i++) {
                        const dot = document.createElement('div');
                        dot.className = 'loader-logo-dot';
                        const angle = (i / numberOfDots) * Math.PI * 2;
                        const radius = 80;
                        const x = Math.cos(angle) * radius;
                        const y = Math.sin(angle) * radius;
                        dot.style.left = `${x + 125}px`;
                        dot.style.top = `${y + 125}px`;
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
                        dot.style.left = `${x + 125}px`;
                        dot.style.top = `${y + 125}px`;
                        requestAnimationFrame(orbitAnimation);
                    }
                    requestAnimationFrame(orbitAnimation);
                }
                animateOrbit('loader-orbit-1', 90, 5000, 0, true);
                animateOrbit('loader-orbit-2', 100, 7000, 2000, false);
                animateOrbit('loader-orbit-3', 110, 9000, 4000, true);
            }

            // Initialize dots functions
            createLogoDots();
            animateOrbitingDots();

            // Initialize connection points on map
            createConnectionPoints();

            // Theme Switch
            const themeSwitch = document.getElementById('theme-switch');
            const themeSwitchIcon = themeSwitch.querySelector('i');

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
                const cards = document.querySelectorAll('.charity-card, .floating-card');

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

            // Counter Animation
            const counters = document.querySelectorAll('.impact-number, .connection-stat-number');
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
                            if (counter.textContent.includes('/7')) {
                                counter.textContent = '24/7';
                            } else {
                                counter.textContent = new Intl.NumberFormat('en-US').format(Math.floor(current)) + (target >= 1000 ? '+' : '');
                            }
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

            // Initialize testimonial slider
            initTestimonialSlider();

            // Newsletter Form Handler
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

            console.log('SOFIN NETWORK - Connect Page initialized successfully!');
        });

        // Logo Dots Function
        function createLogoDots() {
            const logoDots = document.getElementById('logo-dots');
            if (logoDots) {
                const numberOfDots = 12;
                const fragment = document.createDocumentFragment();

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

        // Enhanced Orbiting Dots Function
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

        // Create Connection Points
        function createConnectionPoints() {
            const connectionPoints = document.getElementById('connection-points');
            if (connectionPoints) {
                const points = [
                    { top: '20%', left: '25%' },
                    { top: '15%', left: '45%' },
                    { top: '30%', left: '35%' },
                    { top: '25%', left: '55%' },
                    { top: '40%', left: '30%' },
                    { top: '35%', left: '65%' },
                    { top: '50%', left: '40%' },
                    { top: '45%', left: '70%' },
                    { top: '60%', left: '35%' },
                    { top: '55%', left: '60%' },
                    { top: '70%', left: '45%' },
                    { top: '75%', left: '25%' },
                    { top: '80%', left: '55%' },
                    { top: '65%', left: '75%' },
                    { top: '85%', left: '40%' }
                ];

                points.forEach((point, index) => {
                    const dot = document.createElement('div');
                    dot.className = 'connection-point';
                    dot.style.top = point.top;
                    dot.style.left = point.left;
                    dot.style.animationDelay = `${index * 0.2}s`;
                    connectionPoints.appendChild(dot);
                });
            }
        }

        // Initialize Testimonial Slider
        function initTestimonialSlider() {
            const testimonials = [
                {
                    quote: {
                        vi: "SOFIN NETWORK đã mang đến hy vọng cho gia đình tôi. Nhờ có chương trình học bổng, con tôi có thể tiếp tục việc học mà không lo về chi phí.",
                        en: "SOFIN NETWORK has brought hope to my family. Thanks to the scholarship program, my child can continue studying without worrying about costs."
                    },
                    author: "Nguyễn Thị Lan",
                    position: {
                        vi: "Phụ huynh học sinh",
                        en: "Student's Parent"
                    }
                },
                {
                    quote: {
                        vi: "Chương trình khám bệnh miễn phí của SOFIN NETWORK đã giúp tôi phát hiện và điều trị bệnh kịp thời. Tôi rất biết ơn sự quan tâm của tổ chức.",
                        en: "SOFIN NETWORK's free medical program helped me detect and treat my illness in time. I'm very grateful for the organization's care."
                    },
                    author: "Trần Văn Hoàng",
                    position: {
                        vi: "Nông dân",
                        en: "Farmer"
                    }
                },
                {
                    quote: {
                        vi: "Trở thành tình nguyện viên của SOFIN NETWORK là một trong những quyết định tốt nhất của tôi. Mỗi hoạt động đều mang lại ý nghĩa sâu sắc.",
                        en: "Becoming a volunteer for SOFIN NETWORK is one of the best decisions I've made. Every activity brings deep meaning."
                    },
                    author: "Lê Minh Anh",
                    position: {
                        vi: "Tình nguyện viên",
                        en: "Volunteer"
                    }
                }
            ];

            let currentIndex = 0;
            const testimonialSlider = document.querySelector('.testimonial-slider');
            
            function updateTestimonial() {
                const item = testimonials[currentIndex];
                const lang = document.documentElement.lang || 'vi';
                
                const testimonialItem = testimonialSlider.querySelector('.testimonial-item');
                const quote = testimonialItem.querySelector('.testimonial-quote.vi, .testimonial-quote.en');
                const author = testimonialItem.querySelector('.testimonial-info h4');
                const position = testimonialItem.querySelector('.testimonial-info p');
                
                if (quote) {
                    quote.textContent = item.quote[lang];
                }
                if (author) {
                    author.textContent = item.author;
                }
                if (position) {
                    position.textContent = item.position[lang];
                }
            }
            
            // Auto-rotate testimonials
            setInterval(() => {
                currentIndex = (currentIndex + 1) % testimonials.length;
                updateTestimonial();
            }, 5000);
            
            // Update when language changes
            document.addEventListener('languageChanged', updateTestimonial);
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