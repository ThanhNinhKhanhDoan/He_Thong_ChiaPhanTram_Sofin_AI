<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sofin AI - Cập nhật hệ thống</title>
    <style>
        :root {
            --primary-color: #ff0000;
            --secondary-color: #990000;
            --background-color: #000000;
            --text-color: #ffffff;
            --progress-height: 8px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .container {
            width: 90%;
            max-width: 500px;
            padding: 2rem;
            border-radius: 20px;
            background: rgba(30, 30, 30, 0.8);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            position: relative;
            z-index: 1;
        }

        h1 {
            margin-bottom: 1.5rem;
            font-weight: 600;
            font-size: 1.8rem;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .progress-container {
            width: 100%;
            height: var(--progress-height);
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            margin: 1.5rem 0;
            position: relative;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            border-radius: 50px;
            position: relative;
            transition: width 1s ease;
        }

        .progress-bar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.4),
                transparent
            );
            animation: shimmer 2s infinite;
        }

        .percentage {
            font-size: 3rem;
            font-weight: 700;
            margin: 1rem 0;
            position: relative;
            display: inline-block;
        }

        .percentage::after {
            content: "%";
            font-size: 1.5rem;
            position: absolute;
            top: 0.5rem;
            right: -1.5rem;
            opacity: 0.8;
        }

        .logo {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: 2px;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, #ff3d00, #ff0000, #ff3d00);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
            animation: pulse 2s infinite;
            position: relative;
            display: inline-block;
        }
        
        .logo::after {
            content: "AI";
            position: relative;
            margin-left: 5px;
            font-weight: 400;
            font-style: italic;
            color: #ffffff;
            text-shadow: 0 0 15px #ff0000;
        }
        
        @keyframes pulse {
            0% {
                text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
            }
            50% {
                text-shadow: 0 0 20px rgba(255, 0, 0, 0.8), 0 0 30px rgba(255, 0, 0, 0.5);
            }
            100% {
                text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
            }
        }

        .logo-container {
            margin-bottom: 1rem;
            position: relative;
        }
        
        .logo-container::before {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 2px;
            background: linear-gradient(to right, transparent, #ff0000, transparent);
        }

        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
            opacity: 0;
            animation: float 3s infinite ease-in-out;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 0;
            }
            50% {
                opacity: 0.5;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="particles"></div>
    <div class="container">
        <div class="logo-container">
            <div class="logo">Sofin</div>
        </div>
        <h1>Đang cập nhật dữ liệu hệ thống</h1>
        
        <div class="progress-container">
            <div class="progress-bar"></div>
        </div>
        
        <div class="percentage">0</div>
    </div>

    <script>
        async function update() {
            const is_update = await window.core_updates.update_apps()
            if (is_update == "Sofin_AI") {
                return await window.core_updates.sofin_install()
            } else {
                if (is_update.length < 1) {
                    window.location.href = "http://localhost/";
                } else {
                    window.location.href = "http://localhost/error.php"
                }
            }
        }
        update()




        document.addEventListener('DOMContentLoaded', function() {
            // Tạo hiệu ứng hạt
            const particlesContainer = document.querySelector('.particles');
            const numParticles = 25;
            
            for (let i = 0; i < numParticles; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Kích thước ngẫu nhiên
                const size = Math.random() * 10 + 5;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                
                // Vị trí ngẫu nhiên
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Thời gian hoạt ảnh ngẫu nhiên
                const duration = Math.random() * 10 + 5;
                particle.style.animationDuration = `${duration}s`;
                
                // Độ trễ ngẫu nhiên
                const delay = Math.random() * 5;
                particle.style.animationDelay = `${delay}s`;
                
                particlesContainer.appendChild(particle);
            }

            // Lấy các phần tử DOM
            const progressBar = document.querySelector('.progress-bar');
            const percentageDisplay = document.querySelector('.percentage');
            
            // Thời gian tổng cộng là 10 phút (600 giây)
            const totalTime = 10 * 60; // 10 phút
            
            let intervalId = null;
            let currentTime = 0;
            let isRunning = false;
            
            // Hàm cập nhật giao diện
            function updateUI() {
                // Tính toán phần trăm, giới hạn ở 99%
                const percentage = Math.min(Math.floor((currentTime / totalTime) * 100), 99);
                
                // Cập nhật thanh tiến trình
                progressBar.style.width = `${percentage}%`;
                
                // Cập nhật hiển thị phần trăm
                percentageDisplay.textContent = percentage;
            }
            
            // Hàm bắt đầu đếm thời gian
            function startTimer() {
                if (isRunning) return;
                
                isRunning = true;
                
                // Cập nhật UI ngay lập tức để hiển thị 0%
                updateUI();
                
                intervalId = setInterval(() => {
                    currentTime++;
                    
                    // Dừng khi đạt 10 phút
                    if (currentTime >= totalTime) {
                        stopTimer();
                        percentageDisplay.textContent = "99";
                        progressBar.style.width = "99%";
                    } else {
                        updateUI();
                    }
                }, 1000);
            }
            
            // Hàm dừng đếm thời gian
            function stopTimer() {
                clearInterval(intervalId);
                isRunning = false;
            }
            
            // Tự động bắt đầu khi tải trang
            startTimer();
            
            // Khởi tạo giao diện ban đầu
            updateUI();
        });
    </script>
</body>
</html>