<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Discover SOFIN AI by SOFIN NETWORK – advanced artificial intelligence software with superior data processing, fast performance, and flexible configuration for businesses.">
    <meta name="keywords" content="SOFIN AI, artificial intelligence, machine learning, automation software, data processing, business AI, intelligent automation, SOFIN NETWORK">
    <meta name="author" content="SOFIN NETWORK">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="SOFIN AI – Advanced Artificial Intelligence for Business Automation">
    <meta property="og:description" content="Discover SOFIN AI by SOFIN NETWORK – advanced artificial intelligence software with superior data processing, fast performance, and flexible configuration for businesses.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sofin.network/public/AI">
    <meta property="og:image" content="https://sofin.network/images/thumnail.jpeg">
    <meta property="og:site_name" content="SOFIN NETWORK">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@sofin_network">
    <meta name="twitter:title" content="SOFIN AI – Advanced Artificial Intelligence for Business Automation">
    <meta name="twitter:description" content="Discover SOFIN AI by SOFIN NETWORK – advanced artificial intelligence software with superior data processing, fast performance, and flexible configuration for businesses.">
    <meta name="twitter:image" content="https://sofin.network/images/thumnail.jpeg">

    <!-- Favicon & Title -->
    <title>SOFIN AI – Advanced Artificial Intelligence for Business Automation</title>

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
        .intro-section,
        .download-section,
        .specs-section,
        .navbar,
        .logo-circle,
        .orbiting-dot {
            transform: translateZ(0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            will-change: transform;
        }

        /* LOADER CSS - Giữ nguyên từ trang chủ */
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

        /* OPTIMIZED LOGO SECTION - Giữ nguyên từ trang chủ */
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

        /* OPTIMIZED NAVBAR - Giữ nguyên từ trang chủ */
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

        .hero-title {
            font-size: 4.5rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.2s both;
            text-shadow: 0 0 30px rgba(116, 0, 184, 0.5);
        }

        .hero-title .main-text {
            background: linear-gradient(90deg, var(--color-1), var(--color-3), var(--color-6), var(--color-8), var(--color-10), var(--color-8), var(--color-6), var(--color-3), var(--color-1));
            background-size: 300% 100%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: flowingGradient 3s ease-in-out infinite;
            filter: drop-shadow(0 0 20px rgba(116, 0, 184, 0.5));
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

        .hero-buttons {
            animation: fadeInUp 1s ease 0.6s both;
        }

        .btn-primary-custom {
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
            background: var(--gradient-3);
            color: var(--text-dark);
            box-shadow: 0 10px 30px rgba(84, 144, 217, 0.4);
        }

        .btn-primary-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(84, 144, 217, 0.6);
            color: var(--text-dark);
        }

        /* Custom Cursor */
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

        /* Progress Bar */
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

        /* =================== */
        /* PHẦN 1: INTRO SECTION - DESIGN MỚI */
        /* =================== */
        .intro-section {
            padding: 100px 0;
            background: 
                radial-gradient(circle at 10% 20%, rgba(116, 0, 184, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(72, 191, 227, 0.15) 0%, transparent 50%),
                linear-gradient(180deg, transparent 0%, rgba(13, 2, 33, 0.9) 100%);
            position: relative;
            overflow: hidden;
        }

        .intro-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" patternUnits="userSpaceOnUse" width="100" height="100"><circle cx="25" cy="25" r="1" fill="rgba(116,0,184,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(72,191,227,0.1)"/><circle cx="50" cy="10" r="0.5" fill="rgba(128,255,219,0.1)"/><circle cx="15" cy="65" r="0.5" fill="rgba(86,207,225,0.1)"/><circle cx="85" cy="35" r="0.5" fill="rgba(94,96,206,0.1)"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grain)"/></svg>');
            background-size: 80px 80px;
            opacity: 0.6;
            z-index: 1;
            animation: grain-move 20s linear infinite;
        }

        @keyframes grain-move {
            0% { transform: translate(0, 0); }
            100% { transform: translate(100px, -100px); }
        }

        .intro-content {
            position: relative;
            z-index: 2;
        }

        .section-title {
            font-size: 3.5rem;
            text-align: center;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, var(--color-1), var(--color-3), var(--color-6));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
            animation: shine 2s ease-in-out infinite alternate;
        }

        @keyframes shine {
            0% { filter: brightness(1); }
            100% { filter: brightness(1.2) drop-shadow(0 0 20px rgba(116, 0, 184, 0.5)); }
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
            box-shadow: 0 0 10px rgba(72, 191, 227, 0.5);
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: var(--text-muted);
            margin-bottom: 4rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-style: italic;
        }

        /* Video Container with New Design */
        .video-showcase {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-top: 80px;
        }

        .video-wrapper {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 
                0 20px 40px rgba(116, 0, 184, 0.3),
                0 10px 20px rgba(72, 191, 227, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            border: 2px solid var(--glass-border);
        }

        .video-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(116, 0, 184, 0.1), rgba(72, 191, 227, 0.1));
            z-index: 1;
            border-radius: 28px;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
            border-radius: 28px;
            overflow: hidden;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            z-index: 2;
        }

        .video-play-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
            z-index: 10;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .video-play-overlay:hover {
            background: rgba(255, 255, 255, 1);
            transform: translate(-50%, -50%) scale(1.1);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2);
        }

        .video-play-overlay .fas {
            font-size: 2rem;
            color: var(--color-1);
            margin-left: 4px;
        }

        /* Video Info with New Design */
        .video-info {
            padding: 0;
        }

        .video-info h3 {
            font-size: 2.5rem;
            color: var(--text-light);
            margin-bottom: 30px;
            font-family: var(--heading-font);
            position: relative;
        }

        .video-info h3::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -20px;
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, var(--color-1), var(--color-3));
            border-radius: 10px;
            opacity: 0.2;
            transform: rotate(12deg);
        }

        .video-description {
            font-size: 1.2rem;
            color: var(--text-muted);
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }

        .feature-card {
            padding: 20px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--gradient-3);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .feature-card:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--color-7);
            transform: translateY(-5px);
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card .icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--color-1), var(--color-3));
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .feature-card .icon .fas {
            font-size: 1.5rem;
            color: white;
        }

        .feature-card h4 {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 10px;
            font-weight: 600;
        }

        .feature-card p {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* =================== */
        /* PHẦN 2: DOWNLOAD SECTION - DESIGN MỚI */
        /* =================== */
        .download-section {
            padding: 100px 0;
            background: 
                linear-gradient(135deg, rgba(7, 1, 17, 0.95) 0%, rgba(13, 2, 33, 0.8) 50%, rgba(19, 3, 51, 0.95) 100%),
                radial-gradient(circle at 30% 20%, rgba(116, 0, 184, 0.1) 0%, transparent 60%),
                radial-gradient(circle at 70% 80%, rgba(72, 191, 227, 0.1) 0%, transparent 60%);
            position: relative;
            overflow: hidden;
        }

        .download-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--color-7), transparent);
        }

        .download-section::after {
            content: '';
            position: absolute;
            top: 50px;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:rgba(116,0,184,0.05);stop-opacity:1" /><stop offset="100%" style="stop-color:rgba(72,191,227,0.05);stop-opacity:1" /></linearGradient></defs><polygon points="50,0 100,50 50,100 0,50" fill="url(%23grad)"/></svg>');
            background-size: 200px 200px;
            animation: float-pattern 15s ease-in-out infinite;
            z-index: 1;
        }

        @keyframes float-pattern {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        .download-title-section {
            text-align: center;
            margin-bottom: 80px;
            position: relative;
            z-index: 2;
        }

        .download-title {
            font-size: 3rem;
            color: var(--text-light);
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--color-6), var(--color-10));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
        }

        .download-title::before {
            content: '⚡';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            animation: electric 2s ease-in-out infinite;
        }

        @keyframes electric {
            0%, 100% { opacity: 0.7; transform: translateX(-50%) rotate(0deg); }
            50% { opacity: 1; transform: translateX(-50%) rotate(15deg); }
        }

        .download-subtitle {
            font-size: 1.2rem;
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }

        /* Download Cars Grid */
        .download-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
            position: relative;
            z-index: 2;
        }

        .download-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            padding: 40px;
            text-align: center;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .download-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--gradient-3);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .download-card:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--color-6);
            transform: translateY(-10px);
        }

        .download-card:hover::before {
            transform: scaleX(1);
        }

        .os-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            position: relative;
            transition: var(--transition);
        }

        .os-icon.windows {
            background: linear-gradient(135deg, #0078d4, #00a1f1);
            color: white;
        }

        .os-icon.mac {
            background: linear-gradient(135deg, #1a1a1a, #4d4d4d);
            color: white;
        }

        .os-icon.linux {
            background: linear-gradient(135deg, #e95420, #fd7e14);
            color: white;
        }

        .download-card:hover .os-icon {
            transform: rotateY(15deg) scale(1.1);
        }

        .download-card h3 {
            font-size: 1.5rem;
            color: var(--text-light);
            margin-bottom: 15px;
        }

        .download-version {
            color: var(--color-7);
            font-size: 0.9rem;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .download-btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 15px;
            background: var(--gradient-3);
            color: var(--text-dark);
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .download-btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .download-btn:hover:before {
            left: 100%;
        }

        .download-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(72, 191, 227, 0.4);
        }

        /* Guides Section */
        .guides-section {
            position: relative;
            z-index: 2;
        }

        .guides-title {
            text-align: center;
            font-size: 2.5rem;
            color: var(--text-light);
            margin-bottom: 40px;
            position: relative;
        }

        .guides-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--gradient-2);
            border-radius: 2px;
        }

        .guides-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 35px;
        }

        .guide-item {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 35px;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .guide-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at center, rgba(116, 0, 184, 0.05) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .guide-item:hover::before {
            opacity: 1;
        }

        .guide-item:hover {
            border-color: var(--color-7);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(86, 207, 225, 0.2);
        }

        .guide-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            border-radius: 15px;
            background: linear-gradient(135deg, var(--color-3), var(--color-6));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
            transition: var(--transition);
        }

        .guide-item:hover .guide-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .guide-item h4 {
            font-size: 1.3rem;
            color: var(--text-light);
            margin-bottom: 15px;
            font-weight: 600;
        }

        .guide-item p {
            color: var(--text-muted);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .guide-link {
            color: var(--color-7);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: var(--transition);
        }

        .guide-link:hover {
            color: var(--color-8);
            text-shadow: 0 0 10px rgba(86, 207, 225, 0.5);
        }

        .guide-link .fas {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .guide-link:hover .fas {
            transform: translateX(5px);
        }

        /* =================== */
        /* PHẦN 3: SPECS SECTION - DESIGN MỚI */
        /* =================== */
        .specs-section {
            padding: 100px 0;
            background: 
                radial-gradient(ellipse at 20% 0%, rgba(116, 0, 184, 0.1) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 100%, rgba(72, 191, 227, 0.1) 0%, transparent 50%),
                linear-gradient(180deg, rgba(13, 2, 33, 0.9) 0%, rgba(7, 1, 17, 0.95) 100%);
            position: relative;
            overflow: hidden;
        }

        .specs-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><defs><pattern id="diamonds" patternUnits="userSpaceOnUse" width="40" height="40"><path d="M20 0L40 20L20 40L0 20Z" fill="none" stroke="rgba(86,207,225,0.05)" stroke-width="0.5"/></pattern></defs><rect width="100%" height="100%" fill="url(%23diamonds)"/></svg>');
            animation: diamond-move 30s linear infinite;
            z-index: 1;
        }

        @keyframes diamond-move {
            0% { transform: translate(0, 0); }
            100% { transform: translate(40px, 40px); }
        }

        .specs-content {
            position: relative;
            z-index: 2;
        }

        .specs-title-section {
            text-align: center;
            margin-bottom: 80px;
        }

        .specs-title {
            font-size: 3.5rem;
            background: linear-gradient(135deg, var(--color-1), var(--color-3), var(--color-6));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
            margin-bottom: 25px;
        }

        .specs-title::before {
            content: '⚙️';
            position: absolute;
            top: -30px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 2rem;
            animation: gear-spin 4s linear infinite;
        }

        @keyframes gear-spin {
            0% { transform: translateX(-50%) rotate(0deg); }
            100% { transform: translateX(-50%) rotate(360deg); }
        }

        .specs-subtitle {
            font-size: 1.3rem;
            color: var(--text-muted);
            max-width: 700px;
            margin: 0 auto;
        }

        /* Specs Comparison */
        .specs-comparison {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
            gap: 40px;
            margin-bottom: 80px;
        }

        .specs-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(20px);
            border: 2px solid transparent;
            border-radius: 25px;
            padding: 45px;
            position: relative;
            overflow: hidden;
            transition: var(--transition);
        }

        .specs-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--glass-border), transparent);
            border-radius: 25px;
            z-index: 1;
            transition: opacity 0.3s ease;
        }

        .specs-card.minimum {
            border-image: linear-gradient(135deg, var(--color-3), var(--color-6)) 1;
        }

        .specs-card.recommended {
            border-image: linear-gradient(135deg, var(--color-1), var(--color-10)) 1;
            background: rgba(255, 255, 255, 0.05);
        }

        .specs-card.recommended::after {
            content: '⭐ RECOMMENDED';
            position: absolute;
            top: 20px;
            right: 20px;
            background: var(--gradient-3);
            color: var(--text-dark);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 3;
        }

        .specs-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(116, 0, 184, 0.3);
        }

        .specs-card-header {
            text-align: center;
            margin-bottom: 35px;
            position: relative;
            z-index: 2;
        }

        .specs-card h3 {
            font-size: 2rem;
            margin-bottom: 15px;
            position: relative;
        }

        .specs-card.minimum h3 {
            color: var(--color-6);
        }

        .specs-card.recommended h3 {
            color: var(--color-10);
        }

        .specs-card-badge {
            display: inline-block;
            padding: 8px 20px;
            border-radius: 15px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .specs-card.minimum .specs-card-badge {
            background: rgba(72, 191, 227, 0.2);
            color: var(--color-6);
            border: 1px solid var(--color-6);
        }

        .specs-card.recommended .specs-card-badge {
            background: rgba(128, 255, 219, 0.2);
            color: var(--color-10);
            border: 1px solid var(--color-10);
        }

        /* Specs List */
        .specs-list {
            list-style: none;
            padding: 0;
            position: relative;
            z-index: 2;
        }

        .specs-item {
            padding: 20px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: grid;
            grid-template-columns: 40% 1fr;
            gap: 20px;
            align-items: center;
            transition: var(--transition);
        }

        .specs-item:last-child {
            border-bottom: none;
        }

        .specs-item:hover {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 10px;
            transform: translateX(5px);
        }

        .specs-label {
            display: flex;
            align-items: center;
            color: var(--color-7);
            font-weight: 600;
            font-size: 1rem;
        }

        .specs-label::before {
            content: '▶';
            margin-right: 10px;
            color: var(--color-3);
            font-size: 0.8rem;
        }

        .specs-value {
            color: var(--text-light);
            font-weight: 500;
            font-size: 1rem;
        }

        /* Order Section */
        .order-section {
            margin-top: 80px;
            padding: 60px;
            background: 
                linear-gradient(135deg, rgba(116, 0, 184, 0.1), rgba(72, 191, 227, 0.1)),
                radial-gradient(circle at center, rgba(255, 255, 255, 0.05) 0%, transparent 70%);
            border-radius: 30px;
            border: 2px solid transparent;
            background-clip: padding-box;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .order-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 30px;
            background: linear-gradient(135deg, var(--color-1), var(--color-6), var(--color-10));
            z-index: -1;
            filter: blur(20px);
            opacity: 0.3;
        }

        .order-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            background: var(--gradient-5);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
        }

        .order-title::before {
            content: '🚀';
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 2rem;
            animation: rocket 2s ease-in-out infinite;
        }

        @keyframes rocket {
            0%, 100% { transform: translateX(-50%) translateY(0); }
            50% { transform: translateX(-50%) translateY(-10px); }
        }

        .order-description {
            font-size: 1.2rem;
            color: var(--text-muted);
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .order-buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            max-width: 500px;
            margin: 0 auto;
        }

        .order-btn {
            padding: 18px 35px;
            border-radius: 15px;
            text-decoration: none;
            font-family: var(--nav-font);
            font-weight: 600;
            letter-spacing: 1px;
            transition: var(--transition);
            box-shadow: 0 8px 25px rgba(116, 0, 184, 0.2);
            position: relative;
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .order-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }

        .order-btn:hover::before {
            left: 100%;
        }

        .order-btn.primary {
            background: var(--gradient-3);
            color: var(--text-dark);
            border: none;
        }

        .order-btn.secondary {
            background: transparent;
            border: 2px solid var(--color-6);
            color: var(--color-6);
        }

        .order-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(116, 0, 184, 0.3);
        }

        .order-btn.primary:hover {
            color: var(--text-dark);
        }

        .order-btn.secondary:hover {
            background: var(--gradient-3);
            color: var(--text-dark);
            border-color: transparent;
        }

        .order-btn .fas {
            font-size: 1.2rem;
        }

        /* Footer - Giữ nguyên từ trang chủ */
        /* FOOTER */
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
                font-size: 3rem;
            }
            .section-title,
            .download-title,
            .specs-title {
                font-size: 2.5rem;
            }
            .video-showcase {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .video-wrapper {
                order: 2;
            }
            .video-info {
                order: 1;
                text-align: center;
            }
            .features-grid {
                grid-template-columns: 1fr;
            }
            .download-grid {
                grid-template-columns: 1fr;
            }
            .specs-comparison {
                grid-template-columns: 1fr;
            }
            .guides-grid {
                grid-template-columns: 1fr;
            }
            .order-buttons {
                flex-direction: column;
                align-items: center;
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
            .video-wrapper,
            .download-card,
            .specs-card,
            .feature-card,
            .guide-item {
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

        /* Optimization: Pause animations when not in view */
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
    <!-- Loader with SOFIN Logo - Giữ nguyên từ trang chủ -->
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

    <!-- Navbar - Giữ nguyên từ trang chủ -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?=set_route_to_link([])?>">
                <div class="logo-container">
                    <!-- <div class="logo-circle circle-1"></div>
                    <div class="logo-circle circle-2"></div>
                    <div class="logo-circle circle-3"></div> -->
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
                <p class="hero-subtitle vi">Trí Tuệ Nhân Tạo Tiên Tiến</p>
                <p class="hero-subtitle en">Advanced Artificial Intelligence</p>

                <h1 class="hero-title">
                    <div class="main-text vi">SOFIN AI</div>
                    <div class="main-text en">SOFIN AI</div>
                </h1>

                <p class="hero-description vi">
                    Phần mềm AI tự động thông minh, được phát triển bởi SOFIN NETWORK với công nghệ tiên tiến nhất.
                </p>
                <p class="hero-description en">
                    Intelligent AI automation software, developed by SOFIN NETWORK with the most advanced technology.
                </p>

                <div class="hero-buttons">
                    <a href="#intro" class="btn-primary-custom">
                        <span class="vi">Khám Phá Ngay</span>
                        <span class="en">Explore Now</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro-section" id="intro">
        <div class="intro-content">
            <div class="container">
                <h2 class="section-title reveal vi">Giới Thiệu SOFIN AI</h2>
                <h2 class="section-title reveal en">Introducing SOFIN AI</h2>
                <p class="section-subtitle reveal vi">
                    Phần mềm AI tự động thông minh với khả năng xử lý và phân tích dữ liệu vượt trội, mang đến hiệu quả tối ưu cho doanh nghiệp.
                </p>
                <p class="section-subtitle reveal en">
                    Intelligent AI automation software with superior data processing and analysis capabilities, delivering optimal efficiency for businesses.
                </p>

                <div class="video-showcase reveal">
                    <div class="video-wrapper">
                        <div class="video-container">
                            <!-- <iframe 
                                src="https://www.youtube.com/watch?v=ucyVLbhokgY&t=36s" 
                                title="SOFIN AI Introduction Video"
                                allowfullscreen>
                            </iframe> -->


                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Ye7Grbpyk-o?si=O7mKSr-HRoIwMqjS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="video-play-overlay" id="videoPlay">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>

                    <div class="video-info">
                        <h3 class="vi">Video Giới Thiệu Chuyên Nghiệp</h3>
                        <h3 class="en">Professional Introduction Video</h3>
                        <p class="video-description vi">
                            Khám phá sức mạnh của SOFIN AI qua video giới thiệu chuyên nghiệp. Tìm hiểu cách AI của chúng tôi cách mạng hóa quy trình làm việc và mang lại hiệu quả vượt trội cho doanh nghiệp.
                        </p>
                        <p class="video-description en">
                            Discover the power of SOFIN AI through our professional introduction video. Learn how our AI revolutionizes workflow and delivers superior efficiency for businesses.
                        </p>

                        <div class="features-grid">
                            <div class="feature-card">
                                <div class="icon">
                                    <i class="fas fa-brain"></i>
                                </div>
                                <h4 class="vi">AI Thông Minh</h4>
                                <h4 class="en">Smart AI</h4>
                                <p class="vi">Machine Learning tiên tiến</p>
                                <p class="en">Advanced Machine Learning</p>
                            </div>
                            <div class="feature-card">
                                <div class="icon">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <h4 class="vi">Hiệu Suất Cao</h4>
                                <h4 class="en">High Performance</h4>
                                <p class="vi">Xử lý nhanh chóng</p>
                                <p class="en">Fast Processing</p>
                            </div>
                            <div class="feature-card">
                                <div class="icon">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h4 class="vi">Bảo Mật</h4>
                                <h4 class="en">Security</h4>
                                <p class="vi">Dữ liệu an toàn</p>
                                <p class="en">Data Safety</p>
                            </div>
                            <div class="feature-card">
                                <div class="icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h4 class="vi">Tùy Chỉnh</h4>
                                <h4 class="en">Customizable</h4>
                                <p class="vi">Linh hoạt cấu hình</p>
                                <p class="en">Flexible Configuration</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section class="download-section" id="download">
        <div class="container">
            <div class="download-title-section">
                <h2 class="download-title vi">Tải Xuống & Hướng Dẫn</h2>
                <h2 class="download-title en">Download & Guides</h2>
                <p class="download-subtitle vi">
                    Chọn phiên bản phù hợp với hệ điều hành của bạn và bắt đầu trải nghiệm sức mạnh của AI.
                </p>
                <p class="download-subtitle en">
                    Choose the version that suits your operating system and start experiencing the power of AI.
                </p>
            </div>

            <div class="download-grid">
                <div class="download-card reveal">
                    <div class="os-icon windows">
                        <i class="fab fa-windows"></i>
                    </div>
                    <h3 class="vi">Windows</h3>
                    <h3 class="en">Windows</h3>
                    <div class="download-version">v3.2.1 (Latest)</div>
                    <a href="https://s3.cloudfly.vn/tools/SOFIN-AI-5.0.1-setup.exe" class="btn-custom w-100 text-center">
                        <button class="download-btn" data-os="windows">
                            
                            <i class="fas fa-download"></i>
                            <span class="vi">Tải xuống cho Windows</span>
                            <span class="en">Download for Windows</span>
                            
                        </button>
                    </a>
                </div>

                <div class="download-card reveal">
                    <div class="os-icon mac">
                        <i class="fab fa-apple"></i>
                    </div>
                    <h3 class="vi">macOS</h3>
                    <h3 class="en">macOS</h3>
                    <div class="download-version">v3.2.1 (Latest)</div>
                    <a href="https://s3.cloudfly.vn/tools/SOFIN-AI-5.0.1-setup.exe" class="btn-custom w-100 text-center">
                        <button class="download-btn" data-os="mac">
                            <i class="fas fa-download"></i>
                            <span class="vi">Tải xuống cho macOS</span>
                            <span class="en">Download for macOS</span>
                        </button>
                    </a>
                </div>

                <div class="download-card reveal">
                    <div class="os-icon linux">
                        <i class="fab fa-linux"></i>
                    </div>
                    <h3 class="vi">Linux</h3>
                    <h3 class="en">Linux</h3>
                    <div class="download-version">v3.2.1 (Latest)</div>
                    <a href="https://s3.cloudfly.vn/tools/SOFIN-AI-5.0.1-setup.exe" class="btn-custom w-100 text-center">
                        <button class="download-btn" data-os="linux">
                            <i class="fas fa-download"></i>
                            <span class="vi">Tải xuống cho Linux</span>
                            <span class="en">Download for Linux</span>
                        </button>
                    </a>
                </div>
            </div>

            <div class="guides-section">
                <h3 class="guides-title vi">Hướng Dẫn Chi Tiết</h3>
                <h3 class="guides-title en">Detailed Guides</h3>
                
                <div class="guides-grid">
                    <div class="guide-item reveal">
                        <div class="guide-icon">
                            <i class="fas fa-download"></i>
                        </div>
                        <h4 class="vi">Cài Đặt</h4>
                        <h4 class="en">Installation</h4>
                        <p class="vi">Hướng dẫn cài đặt từng bước cho mọi hệ điều hành</p>
                        <p class="en">Step-by-step installation guide for all operating systems</p>
                        <a href="#" class="guide-link">
                            <span class="vi">Xem hướng dẫn</span>
                            <span class="en">View guide</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="guide-item reveal">
                        <div class="guide-icon">
                            <i class="fas fa-play-circle"></i>
                        </div>
                        <h4 class="vi">Bắt Đầu</h4>
                        <h4 class="en">Getting Started</h4>
                        <p class="vi">Hướng dẫn sử dụng cơ bản cho người mới</p>
                        <p class="en">Basic usage guide for beginners</p>
                        <a href="#" class="guide-link">
                            <span class="vi">Xem hướng dẫn</span>
                            <span class="en">View guide</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="guide-item reveal">
                        <div class="guide-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4 class="vi">Cấu Hình</h4>
                        <h4 class="en">Configuration</h4>
                        <p class="vi">Tối ưu hóa cài đặt cho hiệu suất tốt nhất</p>
                        <p class="en">Optimize settings for best performance</p>
                        <a href="#" class="guide-link">
                            <span class="vi">Xem hướng dẫn</span>
                            <span class="en">View guide</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <div class="guide-item reveal">
                        <div class="guide-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <h4 class="vi">FAQ</h4>
                        <h4 class="en">FAQ</h4>
                        <p class="vi">Câu hỏi thường gặp và giải đáp</p>
                        <p class="en">Frequently asked questions and answers</p>
                        <a href="#" class="guide-link">
                            <span class="vi">Xem hướng dẫn</span>
                            <span class="en">View guide</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specs Section -->
    <section class="specs-section" id="specs">
        <div class="specs-content">
            <div class="container">
                <div class="specs-title-section">
                    <h2 class="specs-title reveal vi">Cấu Hình Hệ Thống</h2>
                    <h2 class="specs-title reveal en">System Requirements</h2>
                    <p class="specs-subtitle reveal vi">
                        Để đảm bảo SOFIN AI hoạt động tối ưu, hãy kiểm tra cấu hình máy tính của bạn phù hợp với yêu cầu.
                    </p>
                    <p class="specs-subtitle reveal en">
                        To ensure SOFIN AI operates optimally, please verify your computer specifications meet our requirements.
                    </p>
                </div>

                <div class="specs-comparison">
                    <div class="specs-card minimum reveal">
                        <div class="specs-card-header">
                            <h3 class="vi">Cấu Hình Tối Thiểu</h3>
                            <h3 class="en">Minimum Requirements</h3>
                            <div class="specs-card-badge vi">Cơ Bản</div>
                            <div class="specs-card-badge en">Basic</div>
                        </div>

                        <ul class="specs-list">
                            <li class="specs-item">
                                <div class="specs-label vi">Bộ xử lý</div>
                                <div class="specs-label en">Processor</div>
                                <div class="specs-value">Intel Core i5-8400 / AMD Ryzen 5 2600</div>
                            </li>
                            <li class="specs-item">
                                <div class="specs-label vi">Bộ nhớ RAM</div>
                                <div class="specs-label en">Memory</div>
                                <div class="specs-value">8 GB DDR4</div>
                            </li>
                            <li class="specs-item">
                                <div class="specs-label vi">Card đồ họa</div>
                                <div class="specs-label en">Graphics</div>
                                <div class="specs-value">NVIDIA GTX 1060 / AMD RX 580</div>
                            </li>
                            <li class="specs-item">
                                <div class="specs-label vi">Ổ cứng</div>
                                <div class="specs-label en">Storage</div>
                                <div class="specs-value">50 GB SSD / 100 GB HDD</div>
                            </li>
                            <li class="specs-item">
                                <div class="specs-label vi">Hệ điều hành</div>
                                <div class="specs-label en">OS</div>
                                <div class="specs-value">Windows 10 / macOS 10.14 / Ubuntu 18.04</div>
                            </li>
                        </ul>
                    </div>

                    <div class="specs-card recommended reveal">
                        <div class="specs-card-header">
                            <h3 class="vi">Cấu Hình Khuyến Nghị</h3>
                            <h3 class="en">Recommended Specifications</h3>
                            <div class="specs-card-badge vi">Tối Ưu</div>
                            <div class="specs-card-badge en">Optimal</div>
                        </div>

                        <ul class="specs-list">
                            <li class="specs-item">
                                <div class="specs-label vi">Bộ xử lý</div>
                                <div class="specs-label en">Processor</div>
                                <div class="specs-value">Intel Core i7-12700K / AMD Ryzen 7 5800X</div>
                            </li>
                            <li class="specs-item">
                                <div class="specs-label vi">Bộ nhớ RAM</div>
                                <div class="specs-label en">Memory</div>
                                <div class="specs-value">16-32 GB DDR4/DDR5</div>
                            </li>
                            <li class="specs-item">
                                <div class="specs-label vi">Card đồ họa</div>
                                <div class="specs-label en">Graphics</div>
                                <div class="specs-value">NVIDIA RTX 3070 / AMD RX 6700 XT</div>
                            </li>
                            <li class="specs-item">
                                <div class="specs-label vi">Ổ cứng</div>
                                <div class="specs-label en">Storage</div>
                                <div class="specs-value">500 GB NVMe SSD</div>
                            </li>
                            <li class="specs-item">
                                <div class="specs-label vi">Hệ điều hành</div>
                                <div class="specs-label en">OS</div>
                                <div class="specs-value">Windows 11 / macOS 13+ / Ubuntu 22.04+</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="order-section reveal">
                    <h3 class="order-title vi">Liên Hệ Đặt Hàng</h3>
                    <h3 class="order-title en">Contact for Orders</h3>
                    <p class="order-description vi">
                        Bạn cần tư vấn về cấu hình phù hợp hoặc muốn đặt license doanh nghiệp? Liên hệ ngay với chúng tôi để được hỗ trợ chuyên nghiệp.
                    </p>
                    <p class="order-description en">
                        Need advice on suitable configuration or want to order an enterprise license? Contact us immediately for professional support.
                    </p>
                    <div class="order-buttons">
                        <a href="#contact" class="order-btn primary">
                            <i class="fas fa-phone"></i>
                            <span class="vi">Liên Hệ Ngay</span>
                            <span class="en">Contact Now</span>
                        </a>
                        <a href="#consultation" class="order-btn secondary">
                            <i class="fas fa-comments"></i>
                            <span class="vi">Tư Vấn Miễn Phí</span>
                            <span class="en">Free Consultation</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer - Giữ nguyên từ trang chủ -->
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

        // Initialize all functions when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize loader functions
            createLoaderLogoDots();
            animateLoaderOrbits();

            // Initialize main logo functions
            createLogoDots();
            animateOrbitingDots();

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
                const clickables = document.querySelectorAll('a, button, .download-card, .guide-item, .specs-card, .order-btn');

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

            // Optimized Reveal Animation
            const reveals = document.querySelectorAll('.reveal');
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Add staggered animation for child elements
                        const cards = entry.target.querySelectorAll('.feature-card, .guide-item, .download-card');
                        cards.forEach((card, index) => {
                            setTimeout(() => {
                                card.style.animation = `fadeInUp 0.6s ease forwards`;
                                card.style.opacity = '0';
                                card.style.transform = 'translateY(30px)';
                                setTimeout(() => {
                                    card.style.opacity = '1';
                                    card.style.transform = 'translateY(0)';
                                }, 50);
                            }, index * 100);
                        });
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

            // Video Play Functionality
            const videoPlayOverlay = document.getElementById('videoPlay');
            const videoIframe = document.querySelector('.video-container iframe');

            if (videoPlayOverlay && videoIframe) {
                videoPlayOverlay.addEventListener('click', function() {
                    const src = videoIframe.src;
                    videoIframe.src = src + '&autoplay=1';
                    this.style.display = 'none';
                });
            }

            // Download Button Functionality
            document.querySelectorAll('.download-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const os = this.getAttribute('data-os');
                    const originalText = this.innerHTML;
                    
                    // Simulate download
                    this.innerHTML = `<i class="fas fa-spinner fa-spin"></i> <span class="vi">Đang tải...</span><span class="en">Downloading...</span>`;
                    this.disabled = true;
                    this.style.pointerEvents = 'none';
                    
                    setTimeout(() => {
                        this.innerHTML = `<i class="fas fa-check"></i> <span class="vi">Hoàn thành</span><span class="en">Completed</span>`;
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.disabled = false;
                            this.style.pointerEvents = 'auto';
                        }, 2000);
                    }, 3000);
                    
                    console.log(`Downloading for ${os}...`);
                });
            });

            // Order Button Functionality
            document.querySelectorAll('.order-btn').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    if (this.classList.contains('primary')) {
                        // Simulate calling
                        const originalText = this.innerHTML;
                        this.innerHTML = `<i class="fas fa-phone fa-ring"></i> <span class="vi">Đang kết nối...</span><span class="en">Connecting...</span>`;
                        this.style.pointerEvents = 'none';
                        
                        setTimeout(() => {
                            this.innerHTML = originalText;
                            this.style.pointerEvents = 'auto';
                            alert(document.documentElement.lang === 'vi' ? 
                                  'Chức năng gọi điện đang được phát triển.' : 
                                  'Call function is under development.');
                        }, 2000);
                    } else {
                        // Redirect to consultation form
                        window.open('#consultation', '_blank');
                    }
                });
            });

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

            console.log('SOFIN AI Page initialized successfully!');
        });

        // Logo Dots Function - Giữ nguyên từ trang chủ
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

        // Enhanced Orbiting Dots Function - Giữ nguyên từ trang chủ  
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

        // Enhanced 3D hover effects for performance
        if (window.innerWidth > 768) {
            const cards = document.querySelectorAll('.download-card, .specs-card, .guide-item, .feature-card');
            
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

        // Enhanced parallax effects for background elements
        const parallaxElements = document.querySelectorAll('.intro-section::before, .download-section::after, .specs-section::before');
        
        const updateParallax = throttle(() => {
            const scrolled = window.scrollY;
            const rate = scrolled * -0.5;
            
            parallaxElements.forEach(element => {
                if (element) {
                    element.style.transform = `translateY(${rate}px)`;
                }
            });
        }, 16);

        window.addEventListener('scroll', updateParallax, { passive: true });

        // Enhanced loading animation for cards
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const card = entry.target;
                    card.style.animationDelay = `${Math.random() * 0.3}s`;
                    card.classList.add('animate-in');
                    cardObserver.unobserve(card);
                }
            });
        }, observerOptions);

        // Observe all cards for animation
        document.querySelectorAll('.download-card, .guide-item, .feature-card, .specs-card').forEach(card => {
            cardObserver.observe(card);
        });

        // Add animate-in style
        const animateInCSS = `
            .animate-in {
                animation: slideInUp 0.6s ease forwards;
            }
            
            @keyframes slideInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        const animateStyle = document.createElement('style');
        animateStyle.textContent = animateInCSS;
        document.head.appendChild(animateStyle);

        // Enhanced video controls
        const video = document.querySelector('.video-container iframe');
        if (video) {
            const videoContainer = document.querySelector('.video-container');
            const playOverlay = document.querySelector('.video-play-overlay');
            
            // Add custom controls
            const controlsDiv = document.createElement('div');
            controlsDiv.className = 'video-custom-controls';
            controlsDiv.innerHTML = `
                <div class="video-controls-overlay">
                    <button class="video-control-btn fullscreen-btn">
                        <i class="fas fa-expand"></i>
                    </button>
                </div>
            `;
            videoContainer.appendChild(controlsDiv);
            
            // Fullscreen functionality
            const fullscreenBtn = document.querySelector('.fullscreen-btn');
            fullscreenBtn.addEventListener('click', () => {
                if (videoContainer.requestFullscreen) {
                    videoContainer.requestFullscreen();
                }
            });
        }

        // Enhanced mobile optimizations
        const isMobile = window.innerWidth <= 768;
        if (isMobile) {
            // Disable expensive animations on mobile
            document.documentElement.style.setProperty('--transition', 'none');
            
            // Reduce particle density on mobile
            const particleElements = document.querySelectorAll('.intro-section::before, .download-section::after');
            particleElements.forEach(el => {
                if (el) {
                    el.style.backgroundSize = '120px 120px, 100px 100px, 60px 60px';
                }
            });
            
            // Touch feedback for interactive elements
            document.addEventListener('touchstart', function(e) {
                const target = e.target;
                if (target.matches('button, .download-btn, .order-btn, .guide-link')) {
                    target.style.transform = 'scale(0.95)';
                }
            });
            
            document.addEventListener('touchend', function(e) {
                const target = e.target;
                if (target.matches('button, .download-btn, .order-btn, .guide-link')) {
                    setTimeout(() => {
                        target.style.transform = '';
                    }, 100);
                }
            });
        }

        // Enhanced error handling
        window.addEventListener('error', function(e) {
            console.error('Error caught:', e.error);
            // Graceful degradation for critical errors
            if (e.error && e.error.message.includes('animation')) {
                document.body.style.animation = 'none';
                console.log('Animations disabled due to error');
            }
        });

        // Clean up function for better memory management
        window.addEventListener('beforeunload', function() {
            // Clean up any running intervals or timeouts
            console.log('Cleaning up before page unload...');
        });

        // Advanced performance monitoring
        if ('PerformanceObserver' in window) {
            const observer = new PerformanceObserver((list) => {
                list.getEntries().forEach((entry) => {
                    if (entry.entryType === 'largest-contentful-paint') {
                        console.log('LCP:', entry.startTime);
                    }
                    if (entry.entryType === 'first-input') {
                        console.log('FID:', entry.processingStart - entry.startTime);
                    }
                });
            });
            
            observer.observe({entryTypes: ['largest-contentful-paint', 'first-input']});
        }

        // Enhanced accessibility features
        document.addEventListener('keydown', function(e) {
            // Enhanced keyboard navigation
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-navigation');
            }
            
            // Escape key to close overlays
            if (e.key === 'Escape') {
                const activeOverlays = document.querySelectorAll('.video-play-overlay:not([style*="display: none"])');
                activeOverlays.forEach(overlay => {
                    overlay.style.display = 'none';
                });
            }
        });

        document.addEventListener('mousedown', function() {
            document.body.classList.remove('keyboard-navigation');
        });

        // Add keyboard navigation styles
        const keyboardNavCSS = `
            .keyboard-navigation button:focus,
            .keyboard-navigation a:focus,
            .keyboard-navigation .download-btn:focus,
            .keyboard-navigation .order-btn:focus {
                outline: 3px solid var(--color-7);
                outline-offset: 2px;
            }
        `;
        const keyboardStyle = document.createElement('style');
        keyboardStyle.textContent = keyboardNavCSS;
        document.head.appendChild(keyboardStyle);

        // Enhanced print styles
        const printCSS = `
            @media print {
                .theme-switch,
                .language-switch,
                .scroll-to-top,
                .video-container,
                .loader-wrapper {
                    display: none !important;
                }
                
                .hero-section {
                    height: auto;
                    padding: 50px 0;
                }
                
                .section-title,
                .download-title,
                .specs-title {
                    color: #000 !important;
                    -webkit-print-color-adjust: exact;
                }
            }
        `;
        const printStyle = document.createElement('style');
        printStyle.textContent = printCSS;
        document.head.appendChild(printStyle);

        console.log('🚀 SOFIN AI Website fully initialized with enhanced features!');
    </script>
</body>
</html>