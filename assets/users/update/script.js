document.addEventListener('DOMContentLoaded', function() {
    // Tab Navigation
    const menuItems = document.querySelectorAll('.menu-item');
    const tabContents = document.querySelectorAll('.tab-content');
    
    menuItems.forEach(item => {
        if (!item.classList.contains('logout-btn')) {
            item.addEventListener('click', function() {
                // Update active tab
                menuItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
                
                // Show corresponding content
                const tabId = this.getAttribute('data-tab');
                tabContents.forEach(content => {
                    content.classList.remove('active');
                    if (content.id === tabId) {
                        content.classList.add('active');
                        
                        // Update header title
                        const headerTitle = document.querySelector('.header h1');
                        if (tabId === 'basic-info') headerTitle.textContent = 'Thông Tin Cá Nhân';
                        else if (tabId === 'security') headerTitle.textContent = 'Bảo Mật Tài Khoản';
                        else if (tabId === 'api-settings') headerTitle.textContent = 'Thiết Lập API';
                        else if (tabId === 'notifications') headerTitle.textContent = 'Thiết Lập Thông Báo';
                    }
                });
            });
        }
    });
    
    // Avatar Upload
    const avatarImg = document.getElementById('user-avatar');
    const avatarUpload = document.getElementById('avatar-upload');
    const profileImage = document.querySelector('.profile-image');
    
    profileImage.addEventListener('click', function() {
        avatarUpload.click();
    });
    
    avatarUpload.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            
            reader.onload = function(e) {
                avatarImg.src = e.target.result;
                showAlert('success', 'Cập nhật ảnh đại diện thành công!');
            };
            
            reader.readAsDataURL(this.files[0]);
        }
    });
    
    // Toggle Password Visibility
    const toggleButtons = document.querySelectorAll('.toggle-password');
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const input = this.parentElement.querySelector('input');
            const icon = this.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
    
    // Password Strength Meter
    const passwordInput = document.getElementById('new-password');
    const strengthMeter = document.getElementById('strength-meter');
    const strengthText = document.getElementById('strength-text');
    
    if (passwordInput) {
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            if (password.length > 0) {
                // Check length
                if (password.length >= 8) strength += 1;
                
                // Check character types
                if (/[A-Z]/.test(password)) strength += 1;
                if (/[a-z]/.test(password)) strength += 1;
                if (/[0-9]/.test(password)) strength += 1;
                if (/[^A-Za-z0-9]/.test(password)) strength += 1;
                
                // Update strength meter
                strengthMeter.className = '';
                
                if (strength < 3) {
                    strengthMeter.classList.add('weak');
                    strengthText.textContent = 'Yếu';
                    strengthText.style.color = 'var(--error-color)';
                } else if (strength < 5) {
                    strengthMeter.classList.add('medium');
                    strengthText.textContent = 'Trung bình';
                    strengthText.style.color = 'var(--warning-color)';
                } else {
                    strengthMeter.classList.add('strong');
                    strengthText.textContent = 'Mạnh';
                    strengthText.style.color = 'var(--success-color)';
                }
            } else {
                strengthMeter.className = '';
                strengthMeter.style.width = '0';
                strengthText.textContent = '';
            }
        });
    }
    
    // Form Submissions
    const profileForm = document.getElementById('profile-form');
    const emailForm = document.getElementById('email-form');
    const passwordForm = document.getElementById('password-form');
    const notificationsForm = document.getElementById('notifications-form');
    
    if (profileForm) {
        profileForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Simulate API call
            setTimeout(() => {
                // Update sidebar name
                const fullname = document.getElementById('fullname').value;
                document.getElementById('sidebar-name').textContent = fullname;
                
                // Show success message
                showAlert('success', 'Thông tin cá nhân đã được cập nhật!');
                updateLastUpdated();
            }, 1000);
        });
    }
    
    if (emailForm) {
        emailForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Simulate API call
            setTimeout(() => {
                showAlert('success', 'Email đã được cập nhật thành công!');
                updateLastUpdated();
            }, 1000);
        });
    }
    
    if (passwordForm) {
        passwordForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const newPassword = document.getElementById('new-password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            
            if (newPassword !== confirmPassword) {
                showAlert('error', 'Mật khẩu xác nhận không khớp!');
                return;
            }
            
            // Simulate API call
            setTimeout(() => {
                showAlert('success', 'Mật khẩu đã được cập nhật thành công!');
                this.reset();
                updateLastUpdated();
            }, 1000);
        });
    }
    
    if (notificationsForm) {
        notificationsForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Simulate API call
            setTimeout(() => {
                showAlert('success', 'Thiết lập thông báo đã được cập nhật!');
                updateLastUpdated();
            }, 1000);
        });
    }
    
    // Two-Factor Authentication
    const enableTfaBtn = document.getElementById('enable-tfa-btn');
    const disableTfaBtn = document.getElementById('disable-tfa-btn');
    const cancelTfaBtn = document.getElementById('cancel-tfa-btn');
    const verifyTfaBtn = document.getElementById('verify-tfa-btn');
    const tfaDisabled = document.getElementById('tfa-disabled');
    const tfaEnabled = document.getElementById('tfa-enabled');
    const tfaSetup = document.getElementById('tfa-setup');
    
    if (enableTfaBtn) {
        enableTfaBtn.addEventListener('click', function() {
            tfaDisabled.classList.add('hidden');
            tfaSetup.classList.remove('hidden');
        });
    }
    
    if (cancelTfaBtn) {
        cancelTfaBtn.addEventListener('click', function() {
            tfaSetup.classList.add('hidden');
            tfaDisabled.classList.remove('hidden');
        });
    }
    
    if (verifyTfaBtn) {
        verifyTfaBtn.addEventListener('click', function() {
            const tfaCode = document.getElementById('tfa-code').value;
            
            if (!tfaCode || tfaCode.length !== 6) {
                showAlert('error', 'Vui lòng nhập mã xác thực 6 số!');
                return;
            }
            
            // Simulate verification
            setTimeout(() => {
                tfaSetup.classList.add('hidden');
                tfaEnabled.classList.remove('hidden');
                showAlert('success', 'Xác thực hai yếu tố đã được kích hoạt!');
                updateLastUpdated();
            }, 1000);
        });
    }
    
    if (disableTfaBtn) {
        disableTfaBtn.addEventListener('click', function() {
            // Simulate disabling 2FA
            setTimeout(() => {
                tfaEnabled.classList.add('hidden');
                tfaDisabled.classList.remove('hidden');
                showAlert('success', 'Xác thực hai yếu tố đã bị vô hiệu hóa!');
                updateLastUpdated();
            }, 1000);
        });
    }
    
    // Copy 2FA Secret Key
    const copySecretKeyBtn = document.getElementById('copy-secret-key');
    
    if (copySecretKeyBtn) {
        copySecretKeyBtn.addEventListener('click', function() {
            const secretKey = document.getElementById('tfa-secret-key').textContent;
            navigator.clipboard.writeText(secretKey.replace(/\s/g, ''))
                .then(() => {
                    this.innerHTML = '<i class="fas fa-check"></i>';
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-copy"></i>';
                    }, 2000);
                })
                .catch(() => {
                    showAlert('error', 'Không thể sao chép mã khóa bí mật!');
                });
        });
    }
    
    // Toggle API Key Visibility
    const toggleKeyBtn = document.getElementById('toggle-key-btn');
    
    if (toggleKeyBtn) {
        toggleKeyBtn.addEventListener('click', function() {
            const maskedKey = document.getElementById('api-key-masked');
            const actualKey = document.getElementById('api-key-actual');
            const icon = this.querySelector('i');
            
            if (maskedKey.classList.contains('hidden')) {
                maskedKey.classList.remove('hidden');
                actualKey.classList.add('hidden');
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                maskedKey.classList.add('hidden');
                actualKey.classList.remove('hidden');
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        });
    }
    
    // Copy API Key
    const copyApiKeyBtn = document.getElementById('copy-api-key');
    
    if (copyApiKeyBtn) {
        copyApiKeyBtn.addEventListener('click', function() {
            const actualKey = document.getElementById('api-key-actual').textContent;
            navigator.clipboard.writeText(actualKey)
                .then(() => {
                    this.innerHTML = '<i class="fas fa-check"></i>';
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-copy"></i>';
                    }, 2000);
                })
                .catch(() => {
                    showAlert('error', 'Không thể sao chép API Key!');
                });
        });
    }
    
    // Regenerate API Key
    const regenerateApiKeyBtn = document.getElementById('regenerate-api-key');
    const confirmApiRegenBtn = document.getElementById('confirm-api-regen');
    const cancelApiRegenBtn = document.getElementById('cancel-api-regen');
    const confirmApiModal = document.getElementById('confirm-api-modal');
    
    if (regenerateApiKeyBtn) {
        regenerateApiKeyBtn.addEventListener('click', function() {
            openModal(confirmApiModal);
        });
    }
    
    if (confirmApiRegenBtn) {
        confirmApiRegenBtn.addEventListener('click', function() {
            // Generate a new random API key
            const newApiKey = generateRandomApiKey();
            document.getElementById('api-key-actual').textContent = newApiKey;
            document.getElementById('api-key-created').textContent = getCurrentDate();
            
            closeModal(confirmApiModal);
            showAlert('success', 'API Key đã được tạo mới thành công!');
            updateLastUpdated();
        });
    }
    
    if (cancelApiRegenBtn) {
        cancelApiRegenBtn.addEventListener('click', function() {
            closeModal(confirmApiModal);
        });
    }
    
    // Add Funds Modal
    const addFundsBtn = document.getElementById('add-funds-button');
    const addFundsModal = document.getElementById('add-funds-modal');
    const cancelAddFundsBtn = document.getElementById('cancel-add-funds');
    const addFundsForm = document.getElementById('add-funds-form');
    
    if (addFundsBtn) {
        addFundsBtn.addEventListener('click', function() {
            openModal(addFundsModal);
        });
    }
    
    if (cancelAddFundsBtn) {
        cancelAddFundsBtn.addEventListener('click', function() {
            closeModal(addFundsModal);
        });
    }
    
    if (addFundsForm) {
        addFundsForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const amount = document.getElementById('amount').value;
            
            // Simulate payment processing
            closeModal(addFundsModal);
            showAlert('success', `Đã nạp thành công ${parseInt(amount).toLocaleString()} VNĐ vào tài khoản!`);
            
            // Update balance
            const currentBalance = document.getElementById('user-balance').textContent;
            const currentAmount = parseInt(currentBalance.replace(/[^\d]/g, ''));
            const newAmount = currentAmount + parseInt(amount);
            document.getElementById('user-balance').textContent = `${newAmount.toLocaleString()} VNĐ`;
        });
    }
    
    // Close Modals
    const closeModalBtns = document.querySelectorAll('.close-modal');
    
    closeModalBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const modal = this.closest('.modal');
            closeModal(modal);
        });
    });
    
    // Close Alerts
    const closeAlertBtns = document.querySelectorAll('.close-alert');
    
    closeAlertBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const alert = this.parentElement;
            alert.style.display = 'none';
        });
    });
    
    // Logout Button
    const logoutBtn = document.querySelector('.logout-btn');
    
    if (logoutBtn) {
        logoutBtn.addEventListener('click', function() {
            if (confirm('Bạn có chắc chắn muốn đăng xuất?')) {
                // Redirect to login page or perform logout action
                window.location.href = 'login.html';
            }
        });
    }
    
    // Helper Functions
    function showAlert(type, message) {
        const alertElement = type === 'success' 
            ? document.getElementById('success-alert') 
            : document.getElementById('error-alert');
        
        alertElement.querySelector('span').textContent = message;
        alertElement.style.display = 'flex';
        
        // Auto hide after 5 seconds
        setTimeout(() => {
            alertElement.style.display = 'none';
        }, 5000);
    }
    
    function updateLastUpdated() {
        const now = new Date();
        const formattedDate = `${padZero(now.getDate())}/${padZero(now.getMonth() + 1)}/${now.getFullYear()} ${padZero(now.getHours())}:${padZero(now.getMinutes())}`;
        document.getElementById('last-update-time').textContent = formattedDate;
    }
    
    function padZero(num) {
        return num.toString().padStart(2, '0');
    }
    
    function getCurrentDate() {
        const now = new Date();
        return `${padZero(now.getDate())}/${padZero(now.getMonth() + 1)}/${now.getFullYear()}`;
    }
    
    function generateRandomApiKey() {
        const uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            const r = Math.random() * 16 | 0;
            const v = c === 'x' ? r : (r & 0x3 | 0x8);
            return v.toString(16);
        });
        return uuid;
    }
    
    function openModal(modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
    
    function closeModal(modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Initialize tab content based on URL hash if present
    function initializeFromHash() {
        const hash = window.location.hash.substr(1);
        if (hash) {
            const tabMenuItem = document.querySelector(`.menu-item[data-tab="${hash}"]`);
            if (tabMenuItem) {
                tabMenuItem.click();
            }
        }
    }

    // Update URL hash when tab changes
    menuItems.forEach(item => {
        if (!item.classList.contains('logout-btn')) {
            item.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                window.location.hash = tabId;
            });
        }
    });

    // Initialize based on URL hash
    initializeFromHash();

    // Listen for hash changes
    window.addEventListener('hashchange', initializeFromHash);
});