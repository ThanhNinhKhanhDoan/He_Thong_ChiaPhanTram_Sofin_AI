<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Join SOFIN's Professional AI & Technology Training Program – a structured curriculum from basics to advanced, with real-world projects, mentorship, and job placement support.">
    <meta name="keywords" content="AI training program, machine learning course, professional tech education, AI certification, SOFIN education, deep learning training, NLP course, computer vision course">
    <meta name="author" content="SOFIN NETWORK">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="SOFIN Professional AI & Technology Training Program">
    <meta property="og:description" content="Join SOFIN's Professional AI & Technology Training Program – a structured curriculum from basics to advanced, with real-world projects, mentorship, and job placement support.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sofin.network/public/training">
    <meta property="og:image" content="https://sofin.network/images/thumnail.jpeg">
    <meta property="og:site_name" content="SOFIN NETWORK">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@sofin_network">
    <meta name="twitter:title" content="SOFIN Professional AI & Technology Training Program">
    <meta name="twitter:description" content="Join SOFIN's Professional AI & Technology Training Program – a structured curriculum from basics to advanced, with real-world projects, mentorship, and job placement support.">
    <meta name="twitter:image" content="https://sofin.network/images/thumnail.jpeg">

    <!-- Favicon & Title -->
    <title>SOFIN Professional AI & Technology Training Program</title>


    
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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Cormorant+Garamond:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&family=Josefin+Sans:wght@300;400;500;600;700&family=Cinzel:wght@400;500;600;700;800;900&family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
            --modern-font: 'Roboto', sans-serif;
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
        /* TRAINING SECTIONS - THIẾT KẾ MỚI */
        /* =================== */

        /* 1. LEARNING ROADMAP SECTION */
        .learning-roadmap-section {
            padding: 100px 0;
            background: 
                linear-gradient(135deg, rgba(116, 0, 184, 0.05) 0%, rgba(72, 191, 227, 0.05) 100%),
                radial-gradient(circle at 30% 40%, rgba(128, 255, 219, 0.1) 0%, transparent 60%);
            position: relative;
            overflow: hidden;
        }

        .learning-roadmap-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                linear-gradient(90deg, transparent 0%, rgba(116, 0, 184, 0.02) 50%, transparent 100%);
            z-index: 1;
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
            position: relative;
            z-index: 2;
        }

        .section-title {
            font-size: 3.5rem;
            font-family: var(--modern-font);
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--color-1), var(--color-3), var(--color-6));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            position: relative;
        }

        .section-title::before {
            content: '';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 6px;
            background: var(--gradient-3);
            border-radius: 3px;
        }

        .section-subtitle {
            font-size: 1.3rem;
            color: var(--text-muted);
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Roadmap Timeline */
        .roadmap-timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            z-index: 2;
        }

        .timeline-line {
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: var(--gradient-5);
            transform: translateX(-50%);
            border-radius: 2px;
            box-shadow: 0 0 20px rgba(116, 0, 184, 0.3);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 80px;
            display: flex;
            align-items: center;
        }

        .timeline-item:nth-child(odd) {
            flex-direction: row;
        }

        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }

        .timeline-item:nth-child(odd) .timeline-content {
            text-align: right;
            margin-right: 50px;
        }

        .timeline-item:nth-child(even) .timeline-content {
            text-align: left;
            margin-left: 50px;
        }

        .timeline-content {
            flex: 1;
            max-width: 500px;
        }

        .timeline-icon {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 80px;
            background: var(--gradient-3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: var(--text-dark);
            box-shadow: 0 10px 30px rgba(72, 191, 227, 0.4);
            border: 6px solid var(--dark-bg);
            z-index: 3;
        }

        .timeline-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            transition: var(--transition);
        }

        .timeline-card::before {
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

        .timeline-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(116, 0, 184, 0.2);
        }

        .timeline-card:hover::before {
            transform: scaleX(1);
        }

        .timeline-card h3 {
            font-size: 1.8rem;
            color: var(--text-light);
            margin-bottom: 15px;
            font-family: var(--modern-font);
        }

        .timeline-card p {
            color: var(--text-muted);
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .timeline-badge {
            display: inline-block;
            padding: 8px 20px;
            background: rgba(128, 255, 219, 0.2);
            color: var(--color-10);
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            border: 1px solid var(--color-10);
        }

        /* 2. ACHIEVEMENTS SECTION */
        .achievements-section {
            padding: 100px 0;
            background: 
                radial-gradient(ellipse at 20% 0%, rgba(116, 0, 184, 0.1) 0%, transparent 70%),
                radial-gradient(ellipse at 80% 100%, rgba(72, 191, 227, 0.1) 0%, transparent 70%);
            position: relative;
        }

        .achievements-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><polygon points="50,10 85,25 85,75 50,90 15,75 15,25" fill="none" stroke="rgba(86,207,225,0.08)" stroke-width="1"/></svg>');
            background-size: 80px 80px;
            animation: hexFloat 15s ease-in-out infinite;
            z-index: 1;
        }

        @keyframes hexFloat {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 80px;
            position: relative;
            z-index: 2;
        }

        .achievement-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            padding: 40px;
            text-align: center;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .achievement-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(116, 0, 184, 0.1), rgba(72, 191, 227, 0.1));
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .achievement-card:hover::before {
            opacity: 1;
        }

        .achievement-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 25px 50px rgba(116, 0, 184, 0.3);
        }

        .achievement-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 30px;
            background: var(--gradient-5);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            position: relative;
            z-index: 2;
        }

        .achievement-number {
            font-size: 4rem;
            font-weight: 900;
            background: var(--gradient-3);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
        }

        .achievement-label {
            font-size: 1.2rem;
            color: var(--text-light);
            font-weight: 600;
            margin-bottom: 10px;
            position: relative;
            z-index: 2;
        }

        .achievement-description {
            color: var(--text-muted);
            line-height: 1.6;
            position: relative;
            z-index: 2;
        }

        /* Counter Animation */
        @keyframes countUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .count-animated {
            animation: countUp 0.6s ease forwards;
        }

        /* 3. COMMITMENTS SECTION */
        .commitments-section {
            padding: 100px 0;
            background: 
                linear-gradient(180deg, rgba(13, 2, 33, 0.95) 0%, rgba(7, 1, 17, 0.95) 100%),
                radial-gradient(circle at 50% 50%, rgba(116, 0, 184, 0.15) 0%, transparent 70%);
            position: relative;
            overflow: hidden;
        }

        .commitments-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><defs><pattern id="commitment" patternUnits="userSpaceOnUse" width="60" height="60"><circle cx="30" cy="30" r="1" fill="rgba(86,207,225,0.1)"/><circle cx="10" cy="10" r="0.5" fill="rgba(128,255,219,0.1)"/><circle cx="50" cy="50" r="0.5" fill="rgba(116,0,184,0.1)"/></pattern></defs><rect width="100%" height="100%" fill="url(%23commitment)"/></svg>');
            animation: patternFlow 25s linear infinite;
            z-index: 1;
        }

        @keyframes patternFlow {
            0% { transform: translate(0, 0); }
            100% { transform: translate(60px, -60px); }
        }

        .commitments-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 50px;
            margin-top: 80px;
            position: relative;
            z-index: 2;
        }

        .commitment-card {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 2px solid transparent;
            border-radius: 30px;
            padding: 50px;
            position: relative;
            overflow: hidden;
            transition: var(--transition);
        }

        .commitment-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--color-1), var(--color-6), var(--color-10));
            z-index: -1;
            filter: blur(20px);
            opacity: 0.3;
            transition: opacity 0.3s ease;
        }

        .commitment-card:hover::before {
            opacity: 0.5;
        }

        .commitment-card:hover {
            border-color: var(--color-7);
            transform: translateY(-10px);
            box-shadow: 0 30px 60px rgba(86, 207, 225, 0.2);
        }

        .commitment-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .commitment-icon-lg {
            width: 120px;
            height: 120px;
            margin: 0 auto 25px;
            background: var(--gradient-3);
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            color: var(--text-dark);
            transition: var(--transition);
        }

        .commitment-card:hover .commitment-icon-lg {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 15px 30px rgba(72, 191, 227, 0.4);
        }

        .commitment-title {
            font-size: 2rem;
            color: var(--text-light);
            margin-bottom: 15px;
            font-family: var(--modern-font);
        }

        .commitment-description {
            color: var(--text-muted);
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .commitment-features {
            list-style: none;
            padding: 0;
        }

        .commitment-features li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: var(--text-light);
        }

        .commitment-features li::before {
            content: '✓';
            background: var(--gradient-3);
            color: var(--text-dark);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: bold;
        }

        /* 4. TRAINING ACTIVITIES SECTION */
        .training-activities-section {
            padding: 100px 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(116, 0, 184, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(72, 191, 227, 0.08) 0%, transparent 50%);
            position: relative;
        }

        .activities-showcase {
            position: relative;
            z-index: 2;
        }

        .activity-gallery {
            margin-top: 80px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .gallery-item {
            position: relative;
            border-radius: 25px;
            overflow: hidden;
            height: 300px;
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: var(--transition);
        }

        .gallery-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(116, 0, 184, 0.3), rgba(72, 191, 227, 0.3));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .gallery-item:hover::before {
            opacity: 1;
        }

        .gallery-item:hover .gallery-image {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            padding: 30px;
            color: white;
            transform: translateY(100%);
            transition: var(--transition);
            z-index: 2;
        }

        .gallery-item:hover .gallery-overlay {
            transform: translateY(0);
        }

        .gallery-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .gallery-description {
            font-size: 1rem;
            opacity: 0.9;
        }

        /* Activity Categories */
        .activity-categories {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .category-filter {
            padding: 12px 25px;
            background: transparent;
            border: 2px solid var(--color-6);
            color: var(--color-6);
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            font-family: var(--modern-font);
        }

        .category-filter:hover,
        .category-filter.active {
            background: var(--gradient-3);
            color: var(--text-dark);
            border-color: transparent;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(72, 191, 227, 0.4);
        }

        /* Activity Statistics */
        .activity-stats {
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            padding: 40px;
            margin-top: 60px;
            position: relative;
            overflow: hidden;
        }

        .activity-stats::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--gradient-5);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            text-align: center;
        }

        .stat-item {
            position: relative;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 900;
            background: var(--gradient-3);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: block;
            margin-bottom: 10px;
        }

        .stat-label {
            color: var(--text-light);
            font-weight: 600;
            font-size: 1.1rem;
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
            .section-title {
                font-size: 2.5rem;
            }
            .timeline-line {
                display: none;
            }
            .timeline-item:nth-child(odd),
            .timeline-item:nth-child(even) {
                flex-direction: column;
            }
            .timeline-item:nth-child(odd) .timeline-content,
            .timeline-item:nth-child(even) .timeline-content {
                text-align: center;
                margin: 30px 0 0 0;
                max-width: 100%;
            }
            .timeline-icon {
                position: relative;
                left: auto;
                transform: none;
                margin-bottom: 20px;
            }
            .roadmap-timeline {
                padding: 0 20px;
            }
            .achievements-grid,
            .commitments-grid {
                grid-template-columns: 1fr;
            }
            .gallery-grid {
                grid-template-columns: 1fr;
            }
            .activity-categories {
                flex-direction: column;
                align-items: center;
            }
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
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

        /* Optimization: Pause animations when not in view */
        .logo-container:not(.in-view) .logo-circle,
        .logo-container:not(.in-view) .orbiting-dot {
            animation-play-state: paused;
        }

        .logo-container.in-view .logo-circle,
        .logo-container.in-view .orbiting-dot {
            animation-play-state: running;
        }

        /* Video Gallery Items */
        .gallery-item.video-item {
            position: relative;
            overflow: hidden;
        }

        .gallery-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            transition: var(--transition);
        }

        .video-play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 3;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            opacity: 0.9;
            transition: all 0.3s ease;
        }

        .video-play-button i {
            color: white;
            font-size: 1.5rem;
            opacity: 0.9;
            transition: all 0.3s ease;
        }

        .video-play-button:hover {
            transform: translate(-50%, -50%) scale(1.1);
            background: var(--gradient-3);
            opacity: 1;
        }

        .video-play-button:hover i {
            opacity: 1;
        }

        .video-item.playing .video-play-button {
            opacity: 0;
            pointer-events: none;
        }

        .video-item.playing .gallery-overlay {
            opacity: 0;
            pointer-events: none;
        }

        .video-item.playing:hover .gallery-video {
            transform: scale(1);
        }

        .video-controls {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
            padding: 15px;
            z-index: 4;
            display: flex;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .video-item.playing:hover .video-controls {
            opacity: 1;
        }

        .video-pause {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .video-pause i {
            color: white;
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
                <p class="hero-subtitle vi">Chương Trình Đào Tạo Chuyên Nghiệp</p>
                <p class="hero-subtitle en">Professional Training Program</p>

                <h1 class="hero-title">
                    <div class="main-text vi">ĐÀO TẠO VỚI SOFIN</div>
                    <div class="main-text en">TRAINING WITH SOFIN</div>
                </h1>

                <p class="hero-description vi">
                    Nâng tầm kỹ năng với các khóa đào tạo AI và công nghệ hàng đầu, được thiết kế bởi đội ngũ chuyên gia giàu kinh nghiệm.
                </p>
                <p class="hero-description en">
                    Enhance your skills with top-tier AI and technology training courses, designed by our team of experienced experts.
                </p>

                <div class="hero-buttons">
                    <a href="#learning-roadmap" class="btn-primary-custom">
                        <span class="vi">Khám Phá Lộ Trình</span>
                        <span class="en">Explore Roadmap</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Learning Roadmap Section -->
    <section class="learning-roadmap-section" id="learning-roadmap">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title vi">Lộ Trình Học Tập</h2>
                <h2 class="section-title en">Learning Roadmap</h2>
                <p class="section-subtitle vi">
                    Chương trình đào tạo được thiết kế theo lộ trình bài bản, từ cơ bản đến nâng cao, 
                    giúp học viên phát triển kỹ năng một cách có hệ thống và hiệu quả.
                </p>
                <p class="section-subtitle en">
                    Our training program is systematically designed from basic to advanced levels, 
                    helping students develop skills systematically and effectively.
                </p>
            </div>

            <div class="roadmap-timeline reveal">
                <div class="timeline-line"></div>
                
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-play"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <h3 class="vi">Giai Đoạn 1: Nền Tảng</h3>
                            <h3 class="en">Phase 1: Foundation</h3>
                            <p class="vi">
                                Học viên sẽ được trang bị những kiến thức cơ bản về AI, Machine Learning và 
                                các công nghệ tiên tiến. Giai đoạn này tập trung vào việc xây dựng nền tảng 
                                vững chắc cho hành trình học tập.
                            </p>
                            <p class="en">
                                Students will be equipped with basic knowledge of AI, Machine Learning and 
                                advanced technologies. This phase focuses on building a solid foundation 
                                for the learning journey.
                            </p>
                            <span class="timeline-badge vi">2-3 tuần</span>
                            <span class="timeline-badge en">2-3 weeks</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <h3 class="vi">Giai Đoạn 2: Thực Hành</h3>
                            <h3 class="en">Phase 2: Practice</h3>
                            <p class="vi">
                                Áp dụng kiến thức đã học vào các dự án thực tế. Học viên sẽ làm việc với 
                                dữ liệu thật, xây dựng mô hình và triển khai giải pháp AI cụ thể.
                            </p>
                            <p class="en">
                                Apply learned knowledge to real projects. Students will work with real data, 
                                build models and deploy specific AI solutions.
                            </p>
                            <span class="timeline-badge vi">4-5 tuần</span>
                            <span class="timeline-badge en">4-5 weeks</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <h3 class="vi">Giai Đoạn 3: Chuyên Sâu</h3>
                            <h3 class="en">Phase 3: Specialization</h3>
                            <p class="vi">
                                Tập trung vào các lĩnh vực chuyên môn như Deep Learning, NLP, Computer Vision. 
                                Học viên sẽ chọn chuyên ngành phù hợp với mục tiêu nghề nghiệp.
                            </p>
                            <p class="en">
                                Focus on specialized areas like Deep Learning, NLP, Computer Vision. 
                                Students will choose specializations aligned with career goals.
                            </p>
                            <span class="timeline-badge vi">6-8 tuần</span>
                            <span class="timeline-badge en">6-8 weeks</span>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <h3 class="vi">Giai Đoạn 4: Dự Án Cuối</h3>
                            <h3 class="en">Phase 4: Capstone Project</h3>
                            <p class="vi">
                                Thực hiện dự án tổng hợp để chứng minh khả năng đã học. Được hướng dẫn 
                                bởi mentor và có cơ hội thuyết trình trước ban giám khảo.
                            </p>
                            <p class="en">
                                Complete a comprehensive project to demonstrate learned capabilities. 
                                Guided by mentors with opportunity to present to evaluation panel.
                            </p>
                            <span class="timeline-badge vi">3-4 tuần</span>
                            <span class="timeline-badge en">3-4 weeks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements Section -->
    <section class="achievements-section" id="achievements">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title vi">Thành Tích Đào Tạo</h2>
                <h2 class="section-title en">Training Achievements</h2>
                <p class="section-subtitle vi">
                    Những con số ấn tượng thể hiện chất lượng và hiệu quả của chương trình đào tạo SOFIN.
                </p>
                <p class="section-subtitle en">
                    Impressive numbers demonstrating the quality and effectiveness of SOFIN training programs.
                </p>
            </div>

            <div class="achievements-grid">
                <div class="achievement-card reveal">
                    <div class="achievement-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="achievement-number" data-target="5000">0</div>
                    <div class="achievement-label vi">Học Viên Tốt Nghiệp</div>
                    <div class="achievement-label en">Graduates</div>
                    <p class="achievement-description vi">
                        Số lượng học viên đã hoàn thành thành công chương trình đào tạo
                    </p>
                    <p class="achievement-description en">
                        Number of students who successfully completed training programs
                    </p>
                </div>

                <div class="achievement-card reveal">
                    <div class="achievement-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="achievement-number" data-target="98">0</div>
                    <div class="achievement-label vi">% Tỷ Lệ Thành Công</div>
                    <div class="achievement-label en">% Success Rate</div>
                    <p class="achievement-description vi">
                        Tỷ lệ học viên hoàn thành khóa học và đạt chứng chỉ
                    </p>
                    <p class="achievement-description en">
                        Percentage of students completing courses and achieving certification
                    </p>
                </div>

                <div class="achievement-card reveal">
                    <div class="achievement-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="achievement-number" data-target="92">0</div>
                    <div class="achievement-label vi">% Tìm Được Việc</div>
                    <div class="achievement-label en">% Job Placement</div>
                    <p class="achievement-description vi">
                        Tỷ lệ học viên tìm được việc làm trong vòng 6 tháng
                    </p>
                    <p class="achievement-description en">
                        Percentage of students finding employment within 6 months
                    </p>
                </div>

                <!-- <div class="achievement-card reveal">
                    <div class="achievement-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="achievement-number" data-target="4.9">0</div>
                    <div class="achievement-label vi">Điểm Đánh Giá</div>
                    <div class="achievement-label en">Rating Score</div>
                    <p class="achievement-description vi">
                        Điểm đánh giá trung bình từ học viên (trên thang điểm 5)
                    </p>
                    <p class="achievement-description en">
                        Average rating from students (out of 5)
                    </p>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Commitments Section -->
    <section class="commitments-section" id="commitments">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title vi">Cam Kết Của Chúng Tôi</h2>
                <h2 class="section-title en">Our Commitments</h2>
                <p class="section-subtitle vi">
                    SOFIN cam kết mang đến trải nghiệm học tập tốt nhất với chất lượng giảng dạy cao 
                    và đội ngũ hỗ trợ tận tâm.
                </p>
                <p class="section-subtitle en">
                    SOFIN is committed to providing the best learning experience with high teaching quality 
                    and dedicated support team.
                </p>
            </div>

                        <div class="commitments-grid">                <div class="commitment-card reveal">                    <div class="commitment-header">                        <div class="commitment-icon-lg">                            <i class="fas fa-shield-alt"></i>                        </div>                        <h3 class="commitment-title vi">Cam Kết Chất Lượng</h3>                        <h3 class="commitment-title en">Quality Assurance</h3>                    </div>                    <p class="commitment-description vi">                        Chúng tôi đảm bảo chương trình đào tạo luôn được cập nhật với những kiến thức                         và công nghệ mới nhất trong lĩnh vực AI.                    </p>                    <p class="commitment-description en">                        We ensure our training programs are always updated with the latest knowledge                         and technologies in the AI field.                    </p>                    <ul class="commitment-features vi">                        <li>Giảng viên giàu kinh nghiệm thực tế</li>                        <li>Chương trình học cập nhật liên tục</li>                        <li>Kiểm tra chất lượng định kỳ</li>                    </ul>                    <ul class="commitment-features en">                        <li>Experienced instructors with practical expertise</li>                        <li>Continuously updated curriculum</li>                        <li>Regular quality assessments</li>                    </ul>                </div>                <div class="commitment-card reveal">                    <div class="commitment-header">                        <div class="commitment-icon-lg">                            <i class="fas fa-users"></i>                        </div>                        <h3 class="commitment-title vi">Hỗ Trợ Tận Tâm</h3>                        <h3 class="commitment-title en">Dedicated Support</h3>                    </div>                    <p class="commitment-description vi">                        Đội ngũ hỗ trợ của chúng tôi luôn sẵn sàng giúp đỡ học viên trong suốt                         quá trình học tập và sau khi tốt nghiệp.                    </p>                    <p class="commitment-description en">                        Our support team is always ready to help students throughout their learning                         journey and after graduation.                    </p>                    <ul class="commitment-features vi">                        <li>Mentor 1-1 cho từng học viên</li>                        <li>Hỗ trợ 24/7 qua nhiều kênh</li>                        <li>Cộng đồng học viên năng động</li>                    </ul>                    <ul class="commitment-features en">                        <li>1-on-1 mentor for each student</li>                        <li>24/7 support through multiple channels</li>                        <li>Active student community</li>                    </ul>                </div>                <div class="commitment-card reveal">                    <div class="commitment-header">                        <div class="commitment-icon-lg">                            <i class="fas fa-handshake"></i>                        </div>                        <h3 class="commitment-title vi">Cam Kết Việc Làm</h3>                        <h3 class="commitment-title en">Job Placement Guarantee</h3>                    </div>                    <p class="commitment-description vi">                        Chúng tôi cam kết hỗ trợ học viên tìm kiếm cơ hội việc làm phù hợp                         thông qua mạng lưới đối tác doanh nghiệp rộng khắp.                    </p>                    <p class="commitment-description en">                        We guarantee support in finding suitable job opportunities through our                         extensive network of business partners.                    </p>                    <ul class="commitment-features vi">                        <li>Mạng lưới 500+ doanh nghiệp đối tác</li>                        <li>Tư vấn nghề nghiệp cá nhân hóa</li>                        <li>Hỗ trợ phỏng vấn và CV</li>                    </ul>                    <ul class="commitment-features en">                        <li>Network of 500+ partner companies</li>                        <li>Personalized career counseling</li>                        <li>Interview and CV support</li>                    </ul>                </div>            </div>
        </div>
    </section>

    <!-- Training Activities Section -->
    <section class="training-activities-section" id="activities">
        <div class="container">
            <div class="section-header reveal">
                <h2 class="section-title vi">Hoạt Động Đào Tạo</h2>
                <h2 class="section-title en">Training Activities</h2>
                <p class="section-subtitle vi">
                    Khám phá những hoạt động đa dạng và sinh động trong chương trình đào tạo của SOFIN.
                </p>
                <p class="section-subtitle en">
                    Explore the diverse and vibrant activities in SOFIN's training program.
                </p>
            </div>

            <div class="activities-showcase">
                <!-- <div class="activity-categories reveal">
                    <button class="category-filter active" data-category="all">
                        <span class="vi">Tất Cả</span>
                        <span class="en">All</span>
                    </button>
                    <button class="category-filter" data-category="classroom">
                        <span class="vi">Lớp Học</span>
                        <span class="en">Classroom</span>
                    </button>
                    <button class="category-filter" data-category="workshop">
                        <span class="vi">Workshop</span>
                        <span class="en">Workshop</span>
                    </button>
                    <button class="category-filter" data-category="project">
                        <span class="vi">Dự Án</span>
                        <span class="en">Project</span>
                    </button>
                    <button class="category-filter" data-category="event">
                        <span class="vi">Sự Kiện</span>
                        <span class="en">Event</span>
                    </button>
                </div> -->

                <div class="activity-gallery reveal">
                    <div class="gallery-grid" id="gallery-grid">
                        <div class="gallery-item" data-category="project">
                            <img src="../images/16.webp" alt="Lớp Học AI Cơ Bản" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title vi">Ký Kết Hợp Tác Chiến Lược</h3>
                                <h3 class="gallery-title en">Strategic Partnership Signing</h3>
                                <p class="gallery-description vi">Đánh dấu sự hợp tác ý nghĩa trong giáo dục và đổi mới sáng tạo.</p>
                                <p class="gallery-description en">Marking a meaningful partnership in education and innovation.</p>
                            </div>
                        </div>

                        <div class="gallery-item video-item" data-category="workshop">
                            <!-- <video class="gallery-video" poster="../images/18.jpg" muted> -->
                            <video class="gallery-video" poster="../images/18.jpg">
                                <source src="../images/18.mp4" type="video/mp4">
                            </video>
                            <div class="video-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="gallery-overlay">
                                <h3 class="gallery-title vi">Workshop Phiên Chợ Nông Sản</h3>
                                <h3 class="gallery-title en">Agri-Market Workshop</h3>
                                <p class="gallery-description vi">Chia sẻ giải pháp phát triển và kết nối phiên chợ nông sản.</p>
                                <p class="gallery-description en">Sharing solutions to grow and connect local agri-markets.</p>
                            </div>
                        </div>

                        <div class="gallery-item" data-category="workshop">
                            <img src="../images/13.jpg" alt="Dự Án Nhóm" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title vi">Dự Án Nhóm</h3>
                                <h3 class="gallery-title en">Team Project</h3>
                                <p class="gallery-description vi">Học viên làm việc nhóm để giải quyết bài toán thực tế</p>
                                <p class="gallery-description en">Students work in teams to solve real-world problems</p>
                            </div>
                        </div>



                        <div class="gallery-item video-item" data-category="event">
                            <video class="gallery-video" poster="../images/23.jpg">
                                <source src="../images/25.mp4" type="video/mp4">
                            </video>
                            <div class="video-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="gallery-overlay">
                                <h3 class="gallery-title vi">Đạo Tạo Tại TP HCM</h3>
                                <h3 class="gallery-title en">Training in HCM City</h3>
                                <p class="gallery-description vi">Đào tạo học viên sử dụng phần mềm Sofin AI</p>
                                <p class="gallery-description en">Training students using the Sofin AI software</p>
                            </div>
                        </div>



                        <div class="gallery-item video-item" data-category="event">
                            <!-- <video class="gallery-video" poster="../images/26.jpg"> -->
                            <video class="gallery-video" poster="">
                                <source src="../images/19.mp4" type="video/mp4">
                            </video>
                            <div class="video-play-button">
                                <i class="fas fa-play"></i>
                            </div>
                            <div class="gallery-overlay">
                                <h3 class="gallery-title vi">Gắn Kết Tại Vinh</h3>
                                <h3 class="gallery-title en">Together in Vinh</h3>
                                <p class="gallery-description vi">Buổi gặp gỡ ấm áp tại Vinh – nơi gia đình, nụ cười và sự gắn kết hòa làm một.</p>
                                <p class="gallery-description en">A heartwarming gathering in Vinh, where families, smiles, and connection come together.</p>
                            </div>
                        </div>


                        <div class="gallery-item" data-category="workshop">
                            <img src="../images/20.jpg" alt="DLivestream Kết Nối Thủ Công Mỹ Nghệ" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title vi">Livestream Kết Nối Thủ Công Mỹ Nghệ</h3>
                                <h3 class="gallery-title en">Craft Connection Livestream</h3>
                                <p class="gallery-description vi">Kết nối nhà làm nghề và người tiêu dùng qua livestream tương tác.</p>
                                <p class="gallery-description en">Connecting craft makers and consumers through live interaction.</p>
                            </div>
                        </div>



                        <div class="gallery-item video-item" data-category="classroom">
                            <img src="../images/22.png" alt="Thực Hành Coding" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title vi">Đào Tạo Livestream & Video Ngắn</h3>
                                <h3 class="gallery-title en">Livestream & Short Video Training</h3>
                                <p class="gallery-description vi">Đào tạo cùng Trang Cara về livestream và bán hàng bằng video ngắn.</p>
                                <p class="gallery-description en">Workshops with Trang Cara on livestreaming and short video sales.</p>
                            </div>
                        </div>

                        <div class="gallery-item" data-category="workshop">
                            <img src="../images/24.jpg" alt="Workshop Computer Vision" class="gallery-image">
                            <div class="gallery-overlay">
                                <h3 class="gallery-title vi">Bứt Phá Cùng Nhau tại Hà Nội</h3>
                                <h3 class="gallery-title en">Rise Together in Hanoi</h3>
                                <p class="gallery-description vi">Workshop bùng nổ tại Hà Nội – nơi ý chí hòa làm một, tinh thần cùng nhau bứt phá.</p>
                                <p class="gallery-description en">A high-energy workshop in Hanoi, where minds unite and spirits rise stronger together.</p>
                            </div>
                        </div>


                        




                    </div>
                </div>

                <div class="activity-stats reveal">
                    <div class="stats-grid">
                        <div class="stat-item">
                            <span class="stat-number" data-target="150">0</span>
                            <span class="stat-label vi">Hoạt Động/Năm</span>
                            <span class="stat-label en">Activities/Year</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="25">0</span>
                            <span class="stat-label vi">Workshop/Tháng</span>
                            <span class="stat-label en">Workshops/Month</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="500">0</span>
                            <span class="stat-label vi">Học Viên Tham Gia</span>
                            <span class="stat-label en">Participants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number" data-target="48">0</span>
                            <span class="stat-label vi">Dự Án Thực Tế</span>
                            <span class="stat-label en">Real Projects</span>
                        </div>
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
                const clickables = document.querySelectorAll('a, button, .timeline-card, .achievement-card, .commitment-card, .gallery-item, .category-filter');

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
                        const cards = entry.target.querySelectorAll('.timeline-card, .achievement-card, .commitment-card, .gallery-item');
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

            // Counter Animation for Achievement Numbers
            function animateCounter(element, target, duration = 2000) {
                const start = 0;
                const step = (target - start) / (duration / 16);
                let current = start;
                
                function updateCounter() {
                    current += step;
                    if (current < target) {
                        if (target % 1 === 0) {
                            element.textContent = Math.floor(current);
                        } else {
                            element.textContent = current.toFixed(1);
                        }
                        requestAnimationFrame(updateCounter);
                    } else {
                        element.textContent = target;
                    }
                }
                updateCounter();
            }

            // Trigger counter animation when achievement section is visible
            const achievementNumbers = document.querySelectorAll('.achievement-number');
            const achievementObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = parseFloat(entry.target.getAttribute('data-target'));
                        entry.target.classList.add('count-animated');
                        animateCounter(entry.target, target);
                        achievementObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            achievementNumbers.forEach(number => {
                achievementObserver.observe(number);
            });

            // Activity Gallery Filter
            const categoryFilters = document.querySelectorAll('.category-filter');
            const galleryItems = document.querySelectorAll('.gallery-item');

            categoryFilters.forEach(filter => {
                filter.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    
                    // Update active filter
                    categoryFilters.forEach(f => f.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter gallery items
                    galleryItems.forEach(item => {
                        const itemCategory = item.getAttribute('data-category');
                        if (category === 'all' || itemCategory === category) {
                            item.style.display = 'block';
                            item.style.animation = 'fadeInUp 0.6s ease forwards';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });

            // Activity Statistics Counter Animation
            const statNumbers = document.querySelectorAll('.stat-number');
            const statObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const target = parseFloat(entry.target.getAttribute('data-target'));
                        animateCounter(entry.target, target, 1500);
                        statObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.7 });

            statNumbers.forEach(number => {
                statObserver.observe(number);
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

            console.log('Training Page initialized successfully!');
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

        // Enhanced 3D hover effects for timeline cards
        if (window.innerWidth > 768) {
            const timelineCards = document.querySelectorAll('.timeline-card');
            
            timelineCards.forEach(card => {
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
                    
                    card.style.transform = `translateY(-10px) perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
                }, 16);

                card.addEventListener('mouseenter', function() {
                    isHovering = true;
                    this.style.transition = 'none';
                });

                card.addEventListener('mousemove', handleMouseMove);

                card.addEventListener('mouseleave', function() {
                    isHovering = false;
                    this.style.transition = 'all 0.3s ease';
                    this.style.transform = 'translateY(0) perspective(1000px) rotateX(0deg) rotateY(0deg)';
                });
            });
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

        // Enhanced gallery item animations
        const galleryItems = document.querySelectorAll('.gallery-item');
        const galleryObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'slideInUp 0.6s ease forwards';
                    galleryObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        galleryItems.forEach(item => {
            galleryObserver.observe(item);
        });

        // Add slideInUp animation CSS if not already present
        const galleryAnimCSS = `
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
        const galleryStyle = document.createElement('style');
        galleryStyle.textContent = galleryAnimCSS;
        document.head.appendChild(galleryStyle);

        // Enhanced accessibility features
        document.addEventListener('keydown', function(e) {
            // Enhanced keyboard navigation
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-navigation');
            }
            
            // Escape key to close overlays
            if (e.key === 'Escape') {
                const activeOverlays = document.querySelectorAll('.gallery-overlay:not([style*="transform: translateY(100%)"])');
                activeOverlays.forEach(overlay => {
                    overlay.style.transform = 'translateY(100%)';
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
            .keyboard-navigation .category-filter:focus,
            .keyboard-navigation .gallery-item:focus {
                outline: 3px solid var(--color-7);
                outline-offset: 2px;
            }
        `;
        const keyboardStyle = document.createElement('style');
        keyboardStyle.textContent = keyboardNavCSS;
        document.head.appendChild(keyboardStyle);

        // Enhanced print styles for training page
        const printCSS = `
            @media print {
                .theme-switch,
                .language-switch,
                .scroll-to-top,
                .gallery-grid,
                .loader-wrapper {
                    display: none !important;
                }
                
                .timeline-line {
                    display: block !important;
                    background: #000 !important;
                }
                
                .section-title,
                .achievement-number,
                .commitment-title {
                    color: #000 !important;
                    -webkit-print-color-adjust: exact;
                }
                
                .timeline-item {
                    page-break-inside: avoid;
                }
                
                .hero-section {
                    height: auto;
                    padding: 50px 0;
                }
            }
        `;
        const printStyle = document.createElement('style');
        printStyle.textContent = printCSS;
        document.head.appendChild(printStyle);

        // Enhanced mobile optimizations
        const isMobile = window.innerWidth <= 768;
        if (isMobile) {
            // Disable expensive animations on mobile
            document.documentElement.style.setProperty('--transition', 'all 0.2s ease');
            
            // Reduce particle density on mobile
            const particleElements = document.querySelectorAll('.learning-roadmap-section::before, .commitments-section::before');
            particleElements.forEach(el => {
                if (el.style) {
                    el.style.backgroundSize = '40px 40px';
                }
            });
            
            // Touch feedback for interactive elements
            document.addEventListener('touchstart', function(e) {
                const target = e.target;
                if (target.matches('button, .category-filter, .achievement-card, .commitment-card, .gallery-item')) {
                    target.style.transform = 'scale(0.95)';
                }
            });
            
            document.addEventListener('touchend', function(e) {
                const target = e.target;
                if (target.matches('button, .category-filter, .achievement-card, .commitment-card, .gallery-item')) {
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

        // Enhanced timeline animation with staggered reveals
        const timelineItems = document.querySelectorAll('.timeline-item');
        const timelineObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('timeline-visible');
                        entry.target.style.animation = 'timelineSlideIn 0.8s ease forwards';
                    }, index * 200);
                    timelineObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        timelineItems.forEach(item => {
            timelineObserver.observe(item);
        });

        // Add timeline animation styles
        const timelineAnimCSS = `
            @keyframes timelineSlideIn {
                from {
                    opacity: 0;
                    transform: translateX(-50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
            
            .timeline-item:nth-child(even) {
                animation-name: timelineSlideInRight;
            }
            
            @keyframes timelineSlideInRight {
                from {
                    opacity: 0;
                    transform: translateX(50px);
                }
                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }
        `;
        const timelineStyle = document.createElement('style');
        timelineStyle.textContent = timelineAnimCSS;
        document.head.appendChild(timelineStyle);

        // Enhanced parallax effect for background elements
        const parallaxElements = document.querySelectorAll('.learning-roadmap-section::before, .commitments-section::before, .training-activities-section::before');
        
        const updateParallax = throttle(() => {
            const scrolled = window.scrollY;
            const rate = scrolled * -0.3;
            
            parallaxElements.forEach((element, index) => {
                if (element && element.style) {
                    const speed = 0.2 + (index * 0.1);
                    element.style.transform = `translateY(${rate * speed}px)`;
                }
            });
        }, 16);

        window.addEventListener('scroll', updateParallax, { passive: true });

        // Enhanced gallery lightbox functionality
        galleryItems.forEach(item => {
            item.addEventListener('click', function() {
                const imageSrc = this.querySelector('.gallery-image').src;
                const title = this.querySelector('.gallery-title').textContent;
                const description = this.querySelector('.gallery-description').textContent;
                
                // Create lightbox
                const lightbox = document.createElement('div');
                lightbox.className = 'gallery-lightbox';
                lightbox.innerHTML = `
                    <div class="lightbox-overlay">
                        <div class="lightbox-content">
                            <div class="lightbox-image" style="background-image: url('${imageSrc}')"></div>
                            <div class="lightbox-info">
                                <h3>${title}</h3>
                                <p>${description}</p>
                            </div>
                            <button class="lightbox-close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                `;
                
                document.body.appendChild(lightbox);
                
                // Add lightbox styles
                const lightboxCSS = `
                    .gallery-lightbox {
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: rgba(0, 0, 0, 0.9);
                        z-index: 9999;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        opacity: 0;
                        animation: lightboxFadeIn 0.3s ease forwards;
                    }
                    
                    .lightbox-overlay {
                        position: relative;
                        max-width: 90%;
                        max-height: 90%;
                    }
                    
                    .lightbox-content {
                        background: var(--glass-bg);
                        backdrop-filter: blur(20px);
                        border-radius: 20px;
                        overflow: hidden;
                        position: relative;
                    }
                    
                    .lightbox-image {
                        width: 830px;
                        height: 400px;
                        background-size: cover;
                        background-position: center;
                    }
                    
                    .lightbox-info {
                        padding: 30px;
                        text-align: center;
                    }
                    
                    .lightbox-info h3 {
                        color: var(--text-light);
                        margin-bottom: 15px;
                    }
                    
                    .lightbox-info p {
                        color: var(--text-muted);
                    }
                    
                    .lightbox-close {
                        position: absolute;
                        top: 20px;
                        right: 20px;
                        background: transparent;
                        border: none;
                        color: white;
                        font-size: 1.5rem;
                        cursor: pointer;
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        transition: background 0.3s ease;
                    }
                    
                    .lightbox-close:hover {
                        background: rgba(255, 255, 255, 0.2);
                    }
                    
                    @keyframes lightboxFadeIn {
                        to { opacity: 1; }
                    }
                    
                    @media (max-width: 768px) {
                        .lightbox-image {
                            width: 100%;
                            height: 250px;
                        }
                    }
                `;
                
                if (!document.querySelector('#lightbox-styles')) {
                    const lightboxStyle = document.createElement('style');
                    lightboxStyle.id = 'lightbox-styles';
                    lightboxStyle.textContent = lightboxCSS;
                    document.head.appendChild(lightboxStyle);
                }
                
                // Close lightbox functionality
                const closeBtn = lightbox.querySelector('.lightbox-close');
                const closeLightbox = () => {
                    lightbox.style.animation = 'lightboxFadeOut 0.3s ease forwards';
                    setTimeout(() => {
                        document.body.removeChild(lightbox);
                    }, 300);
                };
                
                closeBtn.addEventListener('click', closeLightbox);
                lightbox.addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeLightbox();
                    }
                });
                
                // Add fadeOut animation
                const fadeOutCSS = `
                    @keyframes lightboxFadeOut {
                        to { opacity: 0; }
                    }
                `;
                lightboxStyle.textContent += fadeOutCSS;
            });
        });

        // Enhanced commitment card interactions
        const commitmentCards = document.querySelectorAll('.commitment-card');
        commitmentCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.background = 'rgba(255, 255, 255, 0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.background = 'var(--glass-bg)';
            });
        });

        // Dynamic background color changes based on section
        const sections = document.querySelectorAll('section');
        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const sectionId = entry.target.id;
                    switch(sectionId) {
                        case 'learning-roadmap':
                            document.documentElement.style.setProperty('--dynamic-color', 'var(--color-3)');
                            break;
                        case 'achievements':
                            document.documentElement.style.setProperty('--dynamic-color', 'var(--color-6)');
                            break;
                        case 'commitments':
                            document.documentElement.style.setProperty('--dynamic-color', 'var(--color-9)');
                            break;
                        case 'activities':
                            document.documentElement.style.setProperty('--dynamic-color', 'var(--color-1)');
                            break;
                        default:
                            document.documentElement.style.setProperty('--dynamic-color', 'var(--color-5)');
                    }
                }
            });
        }, { threshold: 0.5 });

        sections.forEach(section => {
            sectionObserver.observe(section);
        });

        // Enhanced loading states for dynamic content
        function showLoadingSpinner(element) {
            const spinner = document.createElement('div');
            spinner.className = 'loading-spinner';
            spinner.innerHTML = '<div class="spinner"></div>';
            element.appendChild(spinner);
            
            const spinnerCSS = `
                .loading-spinner {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100px;
                }
                
                .spinner {
                    width: 40px;
                    height: 40px;
                    border: 4px solid rgba(255, 255, 255, 0.1);
                    border-left: 4px solid var(--color-7);
                    border-radius: 50%;
                    animation: spin 1s linear infinite;
                }
                
                @keyframes spin {
                    to { transform: rotate(360deg); }
                }
            `;
            
            if (!document.querySelector('#spinner-styles')) {
                const spinnerStyle = document.createElement('style');
                spinnerStyle.id = 'spinner-styles';
                spinnerStyle.textContent = spinnerCSS;
                document.head.appendChild(spinnerStyle);
            }
        }

        function hideLoadingSpinner(element) {
            const spinner = element.querySelector('.loading-spinner');
            if (spinner) {
                spinner.remove();
            }
        }

        // Enhanced tooltip functionality
        function createTooltip(element, content) {
            const tooltip = document.createElement('div');
            tooltip.className = 'custom-tooltip';
            tooltip.textContent = content;
            document.body.appendChild(tooltip);
            
            const tooltipCSS = `
                .custom-tooltip {
                    position: absolute;
                    background: var(--glass-bg);
                    backdrop-filter: blur(10px);
                    border: 1px solid var(--glass-border);
                    border-radius: 8px;
                    padding: 8px 12px;
                    color: var(--text-light);
                    font-size: 0.9rem;
                    z-index: 9999;
                    opacity: 0;
                    pointer-events: none;
                    transition: opacity 0.3s ease;
                    max-width: 200px;
                    word-wrap: break-word;
                }
                
                .custom-tooltip.show {
                    opacity: 1;
                }
            `;
            
            if (!document.querySelector('#tooltip-styles')) {
                const tooltipStyle = document.createElement('style');
                tooltipStyle.id = 'tooltip-styles';
                tooltipStyle.textContent = tooltipCSS;
                document.head.appendChild(tooltipStyle);
            }
            
            return tooltip;
        }

        // Add tooltips to achievement cards
        const achievementCards = document.querySelectorAll('.achievement-card');
        achievementCards.forEach(card => {
            const label = card.querySelector('.achievement-label').textContent;
            const description = card.querySelector('.achievement-description').textContent;
            let tooltip = null;
            
            card.addEventListener('mouseenter', function(e) {
                tooltip = createTooltip(this, description);
                const rect = this.getBoundingClientRect();
                tooltip.style.left = rect.left + (rect.width / 2) - (tooltip.offsetWidth / 2) + 'px';
                tooltip.style.top = rect.bottom + 10 + 'px';
                tooltip.classList.add('show');
            });
            
            card.addEventListener('mouseleave', function() {
                if (tooltip) {
                    tooltip.classList.remove('show');
                    setTimeout(() => {
                        if (tooltip && tooltip.parentNode) {
                            tooltip.parentNode.removeChild(tooltip);
                        }
                    }, 300);
                }
            });
        });

        // Enhanced scroll animations for timeline
        const timelineCards = document.querySelectorAll('.timeline-card');
        const timelineCardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = '0s';
                    entry.target.style.animation = 'timelineCardFloat 0.8s ease forwards';
                }
            });
        }, { threshold: 0.5 });

        timelineCards.forEach(card => {
            timelineCardObserver.observe(card);
        });

        // Add timeline card animation
        const timelineCardCSS = `
            @keyframes timelineCardFloat {
                from {
                    opacity: 0;
                    transform: translateY(50px) scale(0.9);
                }
                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }
        `;
        const timelineCardStyle = document.createElement('style');
        timelineCardStyle.textContent = timelineCardCSS;
        document.head.appendChild(timelineCardStyle);

        // Enhanced button ripple effects
        function addRippleEffect(button) {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        }

        // Add ripple effect CSS
        const rippleCSS = `
            .ripple {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.2);
                transform: scale(0);
                animation: rippleEffect 0.6s linear;
                pointer-events: none;
            }
            
            @keyframes rippleEffect {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
        `;
        const rippleStyle = document.createElement('style');
        rippleStyle.textContent = rippleCSS;
        document.head.appendChild(rippleStyle);

        // Apply ripple effect to buttons
        const buttons = document.querySelectorAll('button, .btn-primary-custom, .category-filter');
        buttons.forEach(addRippleEffect);

        // Final initialization message
        console.log('🎓 SOFIN Training Page fully initialized with all enhanced features!');
        console.log('✅ All animations, interactions, and optimizations loaded successfully!');

        // Video functionality
        document.addEventListener('DOMContentLoaded', function() {
            const videoItems = document.querySelectorAll('.video-item');
            
            videoItems.forEach(item => {
                const video = item.querySelector('.gallery-video');
                const playButton = item.querySelector('.video-play-button');
                
                // Add video controls
                const videoControls = document.createElement('div');
                videoControls.className = 'video-controls';
                const pauseButton = document.createElement('div');
                pauseButton.className = 'video-pause';
                pauseButton.innerHTML = '<i class="fas fa-pause"></i>';
                videoControls.appendChild(pauseButton);
                item.appendChild(videoControls);
                
                // Play button click
                playButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    item.classList.add('playing');
                    video.play();
                });
                
                // Pause button click
                pauseButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    video.pause();
                    item.classList.remove('playing');
                });
                
                // Video click to pause
                video.addEventListener('click', function() {
                    if (video.paused) {
                        video.play();
                        item.classList.add('playing');
                    } else {
                        video.pause();
                        item.classList.remove('playing');
                    }
                });
                
                // End of video
                video.addEventListener('ended', function() {
                    item.classList.remove('playing');
                    video.currentTime = 0;
                });
                
                // Handle gallery item clicks differently for videos
                item.addEventListener('click', function(e) {
                    // Only handle gallery overlay when not clicking on video or controls
                    if (!e.target.closest('.gallery-video') && 
                        !e.target.closest('.video-play-button') && 
                        !e.target.closest('.video-controls')) {
                        
                        // Your existing lightbox code for image items can be adapted here
                        // Currently, we'll just play/pause the video
                        if (video.paused) {
                            video.play();
                            item.classList.add('playing');
                        } else {
                            video.pause();
                            item.classList.remove('playing');
                        }
                    }
                });
            });

            // Modified gallery filter to handle videos
            const categoryFilters = document.querySelectorAll('.category-filter');
            categoryFilters.forEach(filter => {
                filter.addEventListener('click', function() {
                    const category = this.getAttribute('data-category');
                    
                    // Update active filter
                    categoryFilters.forEach(f => f.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter gallery items and pause any playing videos
                    const galleryItems = document.querySelectorAll('.gallery-item');
                    galleryItems.forEach(item => {
                        const itemCategory = item.getAttribute('data-category');
                        
                        // Pause videos when filtering
                        const video = item.querySelector('.gallery-video');
                        if (video) {
                            video.pause();
                            item.classList.remove('playing');
                        }
                        
                        if (category === 'all' || itemCategory === category) {
                            item.style.display = 'block';
                            item.style.animation = 'fadeInUp 0.6s ease forwards';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>