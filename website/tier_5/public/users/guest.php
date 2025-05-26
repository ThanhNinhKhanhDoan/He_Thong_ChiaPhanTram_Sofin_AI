<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập | Đăng Ký</title>
    <link rel="stylesheet" href="<?=asset("/users/style.css")?>">
    
</head>
<body>
    <div class="background">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>

    <div class="container">
        <div class="tabs">
            <div class="tab-btn active" data-tab="login">Đăng Nhập</div>
            <div class="tab-btn" data-tab="register">Đăng Ký</div>
        </div>

        <!-- Đăng nhập -->
        <div class="tab-content active" id="login">
            <div class="message error" id="login-error">
                Tên đăng nhập hoặc mật khẩu không đúng!
            </div>
            
            <form id="login-form">
                <div class="input-group">
                    <label for="login-email">Email hoặc tên đăng nhập</label>
                    <input type="text" id="login-email" class="input-field" placeholder="Nhập email hoặc tên đăng nhập" required>
                </div>
                
                <div class="input-group with-icon">
                    <label for="login-password">Mật khẩu</label>
                    <input type="password" id="login-password" class="input-field" placeholder="Nhập mật khẩu" required>
                    <div class="input-icon toggle-password">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                        </svg>
                    </div>
                </div>
                
                <div class="form-footer">
                    <div class="remember-me">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" class="checkbox" id="remember-me">
                            <span class="checkmark"></span>
                        </label>
                        <span class="checkbox-label">Ghi nhớ đăng nhập</span>
                    </div>
                </div>
                
                <button type="submit" class="btn" id="login-btn">
                    Đăng Nhập
                    <div class="loader"></div>
                </button>
                
                <div class="forgot-password-container">
                    <a href="#" id="forgot-trigger">Quên mật khẩu?</a>
                </div>
            </form>
            
            <!-- Form quên mật khẩu (mở rộng khi cần) -->
            <div class="forgot-form-container" id="forgot-container">
                <div class="message success" id="forgot-success">
                    Hướng dẫn đặt lại mật khẩu đã được gửi đến email của bạn.
                </div>
                
                <form id="forgot-form">
                    <div class="input-group">
                        <label for="forgot-email">Email</label>
                        <input type="email" id="forgot-email" class="input-field" placeholder="Nhập địa chỉ email đã đăng ký" required>
                    </div>
                    
                    <div class="forgot-actions">
                        <button type="button" class="btn-secondary" id="forgot-cancel">
                            Hủy
                        </button>
                        <button type="submit" class="btn btn-small" id="forgot-btn">
                            Khôi phục
                            <div class="loader"></div>
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="or-divider">
                <span>hoặc</span>
            </div>
            
            <div class="social-login">
                <div class="social-btn">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
                    </svg>
                </div>
                <div class="social-btn">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,2A10,10 0 0,0 2,12C2,16.42 4.87,20.17 8.84,21.5C9.34,21.58 9.5,21.27 9.5,21C9.5,20.77 9.5,20.14 9.5,19.31C6.73,19.91 6.14,17.97 6.14,17.97C5.68,16.81 5.03,16.5 5.03,16.5C4.12,15.88 5.1,15.9 5.1,15.9C6.1,15.97 6.63,16.93 6.63,16.93C7.5,18.45 8.97,18 9.54,17.76C9.63,17.11 9.89,16.67 10.17,16.42C7.95,16.17 5.62,15.31 5.62,11.5C5.62,10.39 6,9.5 6.65,8.79C6.55,8.54 6.2,7.5 6.75,6.15C6.75,6.15 7.59,5.88 9.5,7.17C10.29,6.95 11.15,6.84 12,6.84C12.85,6.84 13.71,6.95 14.5,7.17C16.41,5.88 17.25,6.15 17.25,6.15C17.8,7.5 17.45,8.54 17.35,8.79C18,9.5 18.38,10.39 18.38,11.5C18.38,15.32 16.04,16.16 13.81,16.41C14.17,16.72 14.5,17.33 14.5,18.26C14.5,19.6 14.5,20.68 14.5,21C14.5,21.27 14.66,21.59 15.17,21.5C19.14,20.16 22,16.42 22,12A10,10 0 0,0 12,2Z" />
                    </svg>
                </div>
                <div class="social-btn">
                    <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M21.35,11.1H12.18V13.83H18.69C18.36,17.64 15.19,19.27 12.19,19.27C8.36,19.27 5,16.25 5,12C5,7.9 8.2,4.73 12.2,4.73C15.29,4.73 17.1,6.7 17.1,6.7L19,4.72C19,4.72 16.56,2 12.1,2C6.42,2 2.03,6.8 2.03,12C2.03,17.05 6.16,22 12.25,22C17.6,22 21.5,18.33 21.5,12.91C21.5,11.76 21.35,11.1 21.35,11.1V11.1Z" />
                    </svg>
                </div>
            </div>
            
            <div class="signup-link">
                Chưa có tài khoản? <a href="#" class="tab-link" data-tab="register">Đăng ký ngay</a>
            </div>
        </div>

        <!-- Đăng ký -->
        <div class="tab-content" id="register">
            <div class="message success" id="register-success">
                Đăng ký thành công! Vui lòng kiểm tra email để xác nhận tài khoản.
            </div>
            
            <form id="register-form">
                <div class="input-group">
                    <label for="register-fullname">Họ và tên</label>
                    <input type="text" id="register-fullname" class="input-field" placeholder="Nhập họ và tên" required>
                </div>
                
                <div class="input-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" class="input-field" placeholder="Nhập địa chỉ email" required>
                </div>
                
                <div class="input-group with-icon">
                    <label for="register-password">Mật khẩu</label>
                    <input type="password" id="register-password" class="input-field" placeholder="Tạo mật khẩu" required>
                    <div class="input-icon toggle-password">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                        </svg>
                    </div>
                    <div class="password-strength">
                        <div class="strength-meter" id="strength-meter"></div>
                    </div>
                    <div class="strength-text" id="strength-text"></div>
                </div>
                
                <div class="input-group with-icon">
                    <label for="register-confirm">Nhập lại mật khẩu</label>
                    <input type="password" id="register-confirm" class="input-field" placeholder="Nhập lại mật khẩu" required>
                    <div class="input-icon toggle-password">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                        </svg>
                    </div>
                </div>
                
                <button type="submit" class="btn" id="register-btn">
                    Đăng Ký
                    <div class="loader"></div>
                </button>
            </form>
            
            <div class="signup-link">
                Đã có tài khoản? <a href="#" class="tab-link" data-tab="login">Đăng nhập</a>
            </div>
        </div>
    </div>
    <script src="<?=asset("/jquery/jquery-3.7.1.min.js")?>"></script>
    <!--<script src="<?=asset("/users/script.js")?>"></script>-->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Tab switching
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');
        const tabLinks = document.querySelectorAll('.tab-link');
        
        function switchTab(tabId) {
            // Update tab buttons
            tabBtns.forEach(btn => {
                if (btn.dataset.tab === tabId) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
            
            // Update tab contents with animation
            tabContents.forEach(content => {
                if (content.id === tabId) {
                    content.style.display = 'block';
                    setTimeout(() => {
                        content.classList.add('active');
                    }, 10);
                } else {
                    content.classList.remove('active');
                    setTimeout(() => {
                        content.style.display = 'none';
                    }, 300);
                }
            });
            
            // Hide forgot password form when switching tabs
            document.getElementById('forgot-container').classList.remove('active');
        }
        
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                switchTab(btn.dataset.tab);
            });
        });
        
        tabLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                switchTab(link.dataset.tab);
            });
        });
        
        // Toggle forgot password form
        const forgotTrigger = document.getElementById('forgot-trigger');
        const forgotContainer = document.getElementById('forgot-container');
        const forgotCancel = document.getElementById('forgot-cancel');
        
        forgotTrigger.addEventListener('click', (e) => {
            e.preventDefault();
            forgotContainer.classList.toggle('active');
            
            // Scroll to the forgot form
            if (forgotContainer.classList.contains('active')) {
                setTimeout(() => {
                    forgotContainer.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 300);
            }
        });
        
        forgotCancel.addEventListener('click', () => {
            forgotContainer.classList.remove('active');
        });
        
        // Toggle password visibility
        const toggleButtons = document.querySelectorAll('.toggle-password');
        
        toggleButtons.forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const type = input.getAttribute('type');
                
                if (type === 'password') {
                    input.setAttribute('type', 'text');
                    this.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="currentColor" d="M12 7c2.76 0 5 2.24 5 5 0 .65-.13 1.26-.36 1.83l2.92 2.92c1.51-1.26 2.7-2.89 3.43-4.75-1.73-4.39-6-7.5-11-7.5-1.4 0-2.74.25-3.98.7l2.16 2.16C10.74 7.13 11.35 7 12 7zM2 4.27l2.28 2.28.46.46C3.08 8.3 1.78 10.02 1 12c1.73 4.39 6 7.5 11 7.5 1.55 0 3.03-.3 4.38-.84l.42.42L19.73 22 21 20.73 3.27 3 2 4.27zM7.53 9.8l1.55 1.55c-.05.21-.08.43-.08.65 0 1.66 1.34 3 3 3 .22 0 .44-.03.65-.08l1.55 1.55c-.67.33-1.41.53-2.2.53-2.76 0-5-2.24-5-5 0-.79.2-1.53.53-2.2zm4.31-.78l3.15 3.15.02-.16c0-1.66-1.34-3-3-3l-.17.01z"/>
                        </svg>
                    `;
                } else {
                    input.setAttribute('type', 'password');
                    this.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="currentColor" d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
                        </svg>
                    `;
                }
            });
        });
        
        // Password strength meter
        const passwordInput = document.getElementById('register-password');
        const strengthMeter = document.getElementById('strength-meter');
        const strengthText = document.getElementById('strength-text');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            let tips = [];
            
            if (password.length > 0) {
                // Length check
                if (password.length < 8) {
                    tips.push("quá ngắn");
                } else {
                    strength += 1;
                }
                
                // Character type checks
                if (/[A-Z]/.test(password)) strength += 1;
                else tips.push("thêm chữ hoa");
                
                if (/[a-z]/.test(password)) strength += 1;
                else tips.push("thêm chữ thường");
                
                if (/[0-9]/.test(password)) strength += 1;
                else tips.push("thêm số");
                
                if (/[^A-Za-z0-9]/.test(password)) strength += 1;
                else tips.push("thêm ký tự đặc biệt");
                
                // Update the strength meter
                strengthMeter.className = '';
                
                if (strength < 2) {
                    strengthMeter.classList.add('weak');
                    strengthText.textContent = 'Yếu' + (tips.length ? ` (${tips.join(", ")})` : '');
                    strengthText.style.color = '#ff3d41';
                } else if (strength < 4) {
                    strengthMeter.classList.add('medium');
                    strengthText.textContent = 'Trung bình' + (tips.length ? ` (${tips.join(", ")})` : '');
                    strengthText.style.color = '#ffc107';
                } else {
                    strengthMeter.classList.add('strong');
                    strengthText.textContent = 'Mạnh';
                    strengthText.style.color = '#00c851';
                }
            } else {
                strengthMeter.className = '';
                strengthMeter.style.width = '0';
                strengthText.textContent = '';
            }
        });
        
        // Form submissions with animations
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const forgotForm = document.getElementById('forgot-form');
        
        const loginBtn = document.getElementById('login-btn');
        const registerBtn = document.getElementById('register-btn');
        const forgotBtn = document.getElementById('forgot-btn');
        
        const loginError = document.getElementById('login-error');
        const registerSuccess = document.getElementById('register-success');
        const forgotSuccess = document.getElementById('forgot-success');
        
        // Simulate login - in a real app, you would make an API call here
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get input values
            const username = document.getElementById('login-email').value;
            const password = document.getElementById('login-password').value;
            
            // Show loading state
            loginBtn.classList.add('loading');
            
            // Simulate API call
            setTimeout(() => {
                loginBtn.classList.remove('loading');
                
                $.ajax({
                    url : '<?=set_route_to_link(["backend","profiles","login"])?>',
                    type : 'POST',
                    data : {
                        email: $("#login-email").val(),
                        password: $("#login-password").val()
                    },
                    success : function(datas) {
                        if (datas['stt'] == true) {
                            
                            const successMessage = document.createElement('div');
                            successMessage.className = 'message success show';
                            successMessage.textContent = 'Đăng nhập thành công! Đang chuyển hướng...';
                            
                            // Insert the success message before the form
                            loginForm.parentNode.insertBefore(successMessage, loginForm);
                            
                            // Add a success animation to the form container
                            document.querySelector('.container').classList.add('success-animation');
                            
                            // Redirect to homepage after delay with fade-out effect
                            setTimeout(() => {
                                // Add fade-out animation to the entire body
                                document.body.classList.add('fade-out');
                                
                                // Wait for fade animation to complete before redirect
                                setTimeout(() => {
                                    window.location.href = '<?=set_route_to_link(["public","home","index"])?>'; // Change this to your homepage URL
                                }, 500);
                            }, 500);
                            
                        } else {
                            
                            // Failure: Show error message
                            loginError.classList.add('show');
                            
                            // Add shake animation
                            loginForm.classList.add('shake');
                            setTimeout(() => {
                                loginForm.classList.remove('shake');
                            }, 500);
                            
                            // Hide error after 3 seconds
                            setTimeout(() => {
                                loginError.classList.remove('show');
                            }, 3000);
                            
                        }
                    }
                });
                
            }, 1500);
        });
        
        // Simulate registration
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Check if passwords match
            const password = document.getElementById('register-password').value;
            const confirm = document.getElementById('register-confirm').value;
            
            if (password !== confirm) {
                alert('Mật khẩu không khớp!');
                return;
            }
            
            // Show loading state
            registerBtn.classList.add('loading');
            
            // Simulate API call
            setTimeout(() => {
                // For demo, let's show a success message
                registerBtn.classList.remove('loading');
                registerSuccess.classList.add('show');
                
                // Reset form
                registerForm.reset();
                
                // Hide success message and go to login tab after 3 seconds
                setTimeout(() => {
                    registerSuccess.classList.remove('show');
                    switchTab('login');
                }, 3000);
            }, 1500);
        });
        
        // Simulate password recovery
        forgotForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            forgotBtn.classList.add('loading');
            
            // Simulate API call
            setTimeout(() => {
                // For demo, let's show a success message
                forgotBtn.classList.remove('loading');
                forgotSuccess.classList.add('show');
                
                // Reset form
                forgotForm.reset();
                
                // Hide success message and forgot form after 3 seconds
                setTimeout(() => {
                    forgotSuccess.classList.remove('show');
                    forgotContainer.classList.remove('active');
                }, 3000);
            }, 1500);
        });
        
        // Add background animation
        function animateBackground() {
            const circles = document.querySelectorAll('.circle');
            
            circles.forEach((circle, index) => {
                const speed = 0.5 + (index * 0.1);
                circle.style.animation = `float ${15 + index * 5}s infinite ease-in-out`;
            });
        }
        
        animateBackground();
        
        // Add floating particles effect
        function createParticles() {
            const particlesContainer = document.createElement('div');
            particlesContainer.className = 'particles-container';
            particlesContainer.style.position = 'absolute';
            particlesContainer.style.top = '0';
            particlesContainer.style.left = '0';
            particlesContainer.style.width = '100%';
            particlesContainer.style.height = '100%';
            particlesContainer.style.overflow = 'hidden';
            particlesContainer.style.zIndex = '-1';
            document.body.appendChild(particlesContainer);
            
            for (let i = 0; i < 20; i++) {
                const particle = document.createElement('div');
                
                // Random size between 2px and 6px
                const size = Math.random() * 4 + 2;
                
                // Style the particle
                particle.style.position = 'absolute';
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.background = `rgba(255, 255, 255, ${Math.random() * 0.2 + 0.1})`;
                particle.style.borderRadius = '50%';
                
                // Random position
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                
                // Animation
                const duration = Math.random() * 20 + 10;
                particle.style.animation = `floatParticle ${duration}s infinite linear`;
                
                // Add to container
                particlesContainer.appendChild(particle);
            }
        }
        
        createParticles();
        
        // Add interactive button effects
        const buttons = document.querySelectorAll('.btn, .btn-secondary');
        
        buttons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
                this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.3)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.2)';
            });
            
            button.addEventListener('mousedown', function() {
                this.style.transform = 'translateY(-1px)';
                this.style.boxShadow = '0 8px 15px rgba(0, 0, 0, 0.25)';
            });
            
            button.addEventListener('mouseup', function() {
                this.style.transform = 'translateY(-3px)';
                this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.3)';
            });
        });
        
        // Social button hover effect
        const socialButtons = document.querySelectorAll('.social-btn');
        
        socialButtons.forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.3)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'none';
            });
        });
        
        // Input field focus animation
        const inputFields = document.querySelectorAll('.input-field');
        
        inputFields.forEach(field => {
            field.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
                this.parentElement.style.transition = 'transform 0.3s ease';
            });
            
            field.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    });
    </script>
    
</body>
</html>