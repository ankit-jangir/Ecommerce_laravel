// Authentication Functions (Static)
document.addEventListener('DOMContentLoaded', function() {
    // Password Toggle
    const togglePassword = (inputId, iconId) => {
        const input = document.getElementById(inputId);
        const icon = document.getElementById(iconId);
        if (input && icon) {
            icon.addEventListener('click', () => {
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                icon.classList.toggle('fi-rr-eye');
                icon.classList.toggle('fi-rr-eye-crossed');
            });
        }
    };

    // Login Password Toggle
    togglePassword('login-password', 'login-eye-icon');
    
    // Register Password Toggle
    togglePassword('register-password', 'register-eye-icon');
    togglePassword('register-password-confirm', 'register-confirm-eye-icon');

    // Initialize fixed user
    const fixedUser = {
        id: 1,
        name: 'User',
        email: 'user@gmail.com',
        password: 'user@123',
        avatar: null
    };
    
    // Store fixed user if not exists
    const users = JSON.parse(localStorage.getItem('users') || '[]');
    const existingUser = users.find(u => u.email === fixedUser.email);
    if (!existingUser) {
        users.push(fixedUser);
        localStorage.setItem('users', JSON.stringify(users));
    } else {
        // Update password if changed
        const userIndex = users.findIndex(u => u.email === fixedUser.email);
        if (userIndex !== -1) {
            users[userIndex].password = fixedUser.password;
            localStorage.setItem('users', JSON.stringify(users));
        }
    }

    // Login Form
    const loginForm = document.getElementById('login-form');
    if (loginForm) {
        loginForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = document.getElementById('login-email').value;
            const password = document.getElementById('login-password').value;

            // Check fixed user credentials
            if (email === 'user@gmail.com' && password === 'user@123') {
                // Store logged in user
                localStorage.setItem('currentUser', JSON.stringify({
                    id: fixedUser.id,
                    name: fixedUser.name,
                    email: fixedUser.email,
                    avatar: fixedUser.avatar || null
                }));
                
                showToast('Login successful!', 'success');
                setTimeout(() => {
                    updateUserUI();
                    window.location.href = window.location.origin + '/';
                }, 1000);
            } else {
                showToast('Invalid email or password', 'error');
            }
        });
    }

    // Register Form
    const registerForm = document.getElementById('register-form');
    if (registerForm) {
        registerForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const name = document.getElementById('register-name').value;
            const surname = document.getElementById('register-surname').value;
            const email = document.getElementById('register-email').value;
            const password = document.getElementById('register-password').value;
            const passwordConfirm = document.getElementById('register-password-confirm').value;

            if (password !== passwordConfirm) {
                showToast('Passwords do not match', 'error');
                return;
            }

            // Get existing users
            const users = JSON.parse(localStorage.getItem('users') || '[]');
            
            // Check if user exists (but allow fixed user email)
            if (email === 'user@gmail.com') {
                showToast('This email is already registered', 'error');
                return;
            }
            
            if (users.find(u => u.email === email)) {
                showToast('Email already registered', 'error');
                return;
            }

            // Add new user
            const newUser = {
                id: Date.now(),
                name: name + ' ' + surname,
                surname: surname,
                email: email,
                password: password,
                avatar: null
            };
            users.push(newUser);
            localStorage.setItem('users', JSON.stringify(users));

            // Auto login
            localStorage.setItem('currentUser', JSON.stringify({
                id: newUser.id,
                name: newUser.name,
                email: newUser.email,
                avatar: null
            }));
            
            // Mark as new user for welcome coupon
            localStorage.setItem('isNewUser', 'true');

            showToast('Account created successfully! Welcome coupon available!', 'success');
            setTimeout(() => {
                if (typeof updateUserUI === 'function') updateUserUI();
                window.location.href = '/account/dashboard';
            }, 1000);
        });
    }

    // Forgot Password Form
    const forgotPasswordForm = document.getElementById('forgot-password-form');
    if (forgotPasswordForm) {
        forgotPasswordForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = document.getElementById('forgot-email').value;
            
            // Fixed OTP: 123456
            const otp = '123456';
            
            // Store OTP in localStorage (for demo)
            localStorage.setItem('otp_' + email, otp);
            localStorage.setItem('otp_email', email);
            
            // Hide email form and show OTP section
            forgotPasswordForm.classList.add('hidden');
            const otpSection = document.getElementById('otp-section');
            const formTitle = document.getElementById('form-title');
            const formSubtitle = document.getElementById('form-subtitle');
            const otpEmailDisplay = document.getElementById('otp-email-display');
            
            if (otpSection) {
                otpSection.classList.remove('hidden');
            }
            if (formTitle) {
                formTitle.textContent = 'Verify OTP';
            }
            if (formSubtitle) {
                formSubtitle.textContent = 'Enter the 6-digit OTP sent to your email';
            }
            if (otpEmailDisplay) {
                otpEmailDisplay.textContent = email;
                otpEmailDisplay.classList.remove('hidden');
            }
            
            showToast('OTP sent to your email', 'success');
        });
    }

    // OTP Verification
    const otpVerifyForm = document.getElementById('otp-verify-form');
    if (otpVerifyForm) {
        otpVerifyForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = localStorage.getItem('otp_email');
            const storedOtp = localStorage.getItem('otp_' + email);
            const otpInputs = document.querySelectorAll('.otp-digit');
            const enteredOtp = Array.from(otpInputs).map(input => input.value).join('');

            if (enteredOtp === storedOtp) {
                showToast('OTP verified successfully!', 'success');
                // Hide OTP section and show reset password form
                const otpSection = document.getElementById('otp-section');
                const resetPasswordSection = document.getElementById('reset-password-section');
                const formTitle = document.getElementById('form-title');
                const formSubtitle = document.getElementById('form-subtitle');
                
                if (otpSection) otpSection.classList.add('hidden');
                if (resetPasswordSection) resetPasswordSection.classList.remove('hidden');
                if (formTitle) formTitle.textContent = 'Reset Password';
                if (formSubtitle) formSubtitle.textContent = 'Enter your new password';
            } else {
                showToast('Invalid OTP', 'error');
            }
        });

        // Auto-focus next input
        const otpInputs = document.querySelectorAll('.otp-digit');
        otpInputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                if (e.target.value && index < otpInputs.length - 1) {
                    otpInputs[index + 1].focus();
                }
            });
            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && !e.target.value && index > 0) {
                    otpInputs[index - 1].focus();
                }
            });
        });
    }

    // Resend OTP
    const resendOtpBtn = document.getElementById('resend-otp');
    if (resendOtpBtn) {
        resendOtpBtn.addEventListener('click', () => {
            const email = localStorage.getItem('otp_email');
            const otp = '123456'; // Fixed OTP
            localStorage.setItem('otp_' + email, otp);
            showToast('OTP sent to your email', 'success');
        });
    }

    // Reset Password Toggle
    togglePassword('reset-password', 'reset-eye-icon');
    togglePassword('reset-password-confirm', 'reset-confirm-eye-icon');

    // Reset Password Form
    const resetPasswordForm = document.getElementById('reset-password-form');
    if (resetPasswordForm) {
        resetPasswordForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const password = document.getElementById('reset-password').value;
            const passwordConfirm = document.getElementById('reset-password-confirm').value;
            const email = localStorage.getItem('otp_email');

            if (password !== passwordConfirm) {
                showToast('Passwords do not match', 'error');
                return;
            }

            // Update user password in localStorage
            const users = JSON.parse(localStorage.getItem('users') || '[]');
            const userIndex = users.findIndex(u => u.email === email);
            if (userIndex !== -1) {
                users[userIndex].password = password;
                localStorage.setItem('users', JSON.stringify(users));
            }

            showToast('Password reset successfully!', 'success');
            setTimeout(() => {
                window.location.href = '/login';
            }, 1000);
        });
    }
});

