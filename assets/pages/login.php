<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travel Go - Login or Register</title>
  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    /* Fixed Background Image - Only ONE definition */
    body {
      background: url('https://images.pexels.com/photos/672358/pexels-photo-672358.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat fixed;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
      position: relative;
    }

    /* Dark Overlay - Makes form readable */
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.6);
      z-index: 0;
    }

    /* Main Container */
    .auth-container {
      max-width: 1200px;
      width: 100%;
      min-height: 600px;
      background: white;
      border-radius: 40px;
      box-shadow: 0 30px 60px rgba(0,0,0,0.3);
      display: flex;
      overflow: hidden;
      animation: slideIn 0.5s ease;
      position: relative;
      z-index: 1;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Left Side - Branding */
    .brand-side {
      flex: 1;
      background: linear-gradient(145deg, #0066ff, #0044cc);
      padding: 3rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    .brand-side::before {
      content: '';
      position: absolute;
      top: -50%;
      right: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
      animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }

    .brand-logo {
      position: relative;
      z-index: 1;
      color: white;
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .brand-logo i {
      font-size: 3rem;
      background: white;
      color: #0066ff;
      padding: 1rem;
      border-radius: 20px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .brand-content {
      position: relative;
      z-index: 1;
      color: white;
    }

    .brand-content h2 {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 1rem;
      line-height: 1.3;
    }

    .brand-content p {
      font-size: 1.1rem;
      opacity: 0.9;
      margin-bottom: 2rem;
      line-height: 1.6;
    }

    .feature-list {
      list-style: none;
      margin-top: 2rem;
    }

    .feature-list li {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1.2rem;
      color: white;
      font-size: 1rem;
    }

    .feature-list li i {
      width: 30px;
      height: 30px;
      background: rgba(255,255,255,0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.9rem;
    }

    /* Right Side - Forms */
    .form-side {
      flex: 1;
      padding: 3rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: white;
    }

    .form-header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .form-header h2 {
      font-size: 2rem;
      color: #0f172a;
      margin-bottom: 0.5rem;
    }

    .form-header p {
      color: #64748b;
      font-size: 0.95rem;
    }

    /* Tab Switcher */
    .tab-switcher {
      display: flex;
      background: #f1f5f9;
      border-radius: 60px;
      padding: 0.5rem;
      margin-bottom: 2rem;
      position: relative;
    }

    .tab-btn {
      flex: 1;
      padding: 1rem;
      border: none;
      background: transparent;
      border-radius: 60px;
      font-weight: 600;
      font-size: 1rem;
      color: #64748b;
      cursor: pointer;
      transition: 0.3s;
      position: relative;
      z-index: 1;
    }

    .tab-btn.active {
      color: white;
    }

    .tab-slider {
      position: absolute;
      top: 0.5rem;
      bottom: 0.5rem;
      width: calc(50% - 0.5rem);
      background: linear-gradient(95deg, #0066ff, #0044cc);
      border-radius: 60px;
      transition: 0.3s ease;
      z-index: 0;
    }

    .tab-slider.login {
      left: 0.5rem;
    }

    .tab-slider.register {
      left: calc(50% + 0rem);
    }

    /* Forms */
    .auth-form {
      display: none;
      animation: fadeIn 0.5s ease;
    }

    .auth-form.active {
      display: block;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateX(20px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .input-group {
      margin-bottom: 1.5rem;
      position: relative;
    }

    .input-group label {
      display: block;
      font-size: 0.85rem;
      font-weight: 600;
      color: #334155;
      margin-bottom: 0.5rem;
    }

    .input-wrapper {
      position: relative;
      display: flex;
      align-items: center;
    }

    .input-wrapper i {
      position: absolute;
      left: 1.2rem;
      color: #94a3b8;
      font-size: 1.1rem;
      transition: 0.2s;
    }

    .input-wrapper input {
      width: 100%;
      padding: 1rem 1rem 1rem 3rem;
      border: 2px solid #e2e8f0;
      border-radius: 16px;
      font-size: 1rem;
      transition: 0.2s;
      background: #f8fafc;
    }

    .input-wrapper input:focus {
      outline: none;
      border-color: #0066ff;
      background: white;
      box-shadow: 0 0 0 4px rgba(0,102,255,0.1);
    }

    .input-wrapper input:focus + i {
      color: #0066ff;
    }

    .toggle-password {
      position: absolute;
      right: 1.2rem;
      cursor: pointer;
      color: #94a3b8;
      transition: 0.2s;
    }

    .toggle-password:hover {
      color: #0066ff;
    }

    /* Password Strength */
    .password-strength {
      margin-top: 0.5rem;
      display: flex;
      gap: 0.5rem;
    }

    .strength-bar {
      height: 4px;
      flex: 1;
      background: #e2e8f0;
      border-radius: 4px;
      transition: 0.2s;
    }

    .strength-bar.weak {
      background: #ef4444;
    }

    .strength-bar.medium {
      background: #f59e0b;
    }

    .strength-bar.strong {
      background: #10b981;
    }

    .strength-text {
      font-size: 0.75rem;
      color: #64748b;
      margin-top: 0.3rem;
    }

    /* Checkbox */
    .checkbox-group {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin: 1rem 0;
    }

    .checkbox-group input[type="checkbox"] {
      width: 18px;
      height: 18px;
      accent-color: #0066ff;
    }

    .checkbox-group label {
      font-size: 0.85rem;
      color: #334155;
    }

    .checkbox-group a {
      color: #0066ff;
      text-decoration: none;
      font-weight: 600;
    }

    /* Buttons */
    .auth-btn {
      width: 100%;
      padding: 1.2rem;
      background: linear-gradient(95deg, #0066ff, #0044cc);
      border: none;
      border-radius: 60px;
      color: white;
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 10px 20px rgba(0,102,255,0.3);
      margin: 1.5rem 0;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }

    .auth-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 30px rgba(0,102,255,0.4);
    }

    .auth-btn i {
      font-size: 1.2rem;
    }

    /* Social Login */
    .social-login {
      margin-top: 2rem;
    }

    .divider {
      text-align: center;
      position: relative;
      margin: 1.5rem 0;
    }

    .divider::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      height: 1px;
      background: #e2e8f0;
    }

    .divider span {
      background: white;
      padding: 0 1rem;
      color: #64748b;
      font-size: 0.85rem;
      position: relative;
      z-index: 1;
    }

    .social-icons {
      display: flex;
      justify-content: center;
      gap: 1rem;
    }

    .social-icon {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: #f1f5f9;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #334155;
      text-decoration: none;
      transition: 0.2s;
      font-size: 1.3rem;
    }

    .social-icon:hover {
      background: #0066ff;
      color: white;
      transform: translateY(-3px);
    }

    /* Error Messages */
    .error-message {
      color: #ef4444;
      font-size: 0.75rem;
      margin-top: 0.3rem;
      display: none;
    }

    .input-wrapper.error input {
      border-color: #ef4444;
    }

    .input-wrapper.error i {
      color: #ef4444;
    }

    /* Success Message */
    .success-message {
      background: #10b981;
      color: white;
      padding: 1rem;
      border-radius: 12px;
      margin-bottom: 1rem;
      display: none;
      align-items: center;
      gap: 0.5rem;
    }

    .success-message i {
      font-size: 1.2rem;
    }

    /* Loading Spinner */
    .spinner {
      display: none;
      width: 20px;
      height: 20px;
      border: 3px solid white;
      border-top-color: transparent;
      border-radius: 50%;
      animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
      to { transform: rotate(360deg); }
    }

    /* Alternative Background Images (Choose ONE) - Commented out */
    /* 
    Option 1: Beach Sunset
    body { background: url('https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat fixed; }
    
    Option 2: Mountains
    body { background: url('https://images.pexels.com/photos/417344/pexels-photo-417344.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat fixed; }
    
    Option 3: City Skyline
    body { background: url('https://images.pexels.com/photos/373290/pexels-photo-373290.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat fixed; }
    
    Option 4: Tropical Paradise
    body { background: url('https://images.pexels.com/photos/2166553/pexels-photo-2166553.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat fixed; }
    
    Option 5: Travel Abstract
    body { background: url('https://images.pexels.com/photos/924824/pexels-photo-924824.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat fixed; }
    */

    /* Responsive */
    @media (max-width: 968px) {
      .auth-container {
        flex-direction: column;
        max-width: 500px;
      }

      .brand-side {
        padding: 2rem;
        text-align: center;
      }

      .brand-logo {
        justify-content: center;
      }

      .feature-list li {
        justify-content: center;
      }

      .brand-content h2 {
        font-size: 1.8rem;
      }
    }

    @media (max-width: 480px) {
      body {
        padding: 1rem;
      }

      .form-side {
        padding: 2rem 1.5rem;
      }

      .brand-side {
        padding: 1.5rem;
      }

      .brand-logo i {
        font-size: 2rem;
        padding: 0.8rem;
      }

      .tab-switcher {
        padding: 0.3rem;
      }

      .tab-btn {
        padding: 0.8rem;
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>
  <div class="auth-container">
    <!-- Left Side - Branding -->
    <div class="brand-side">
      <div class="brand-logo">
        <i class="fas fa-compass"></i>
        <span>TravelGo</span>
      </div>
      <div class="brand-content">
        <h2>Welcome Back! 👋</h2>
        <p>Your journey begins here. Login to access exclusive deals, manage bookings, and explore amazing destinations.</p>
        
        <ul class="feature-list">
          <li>
            <i class="fas fa-check"></i>
            <span>Access your bookings & trip history</span>
          </li>
          <li>
            <i class="fas fa-check"></i>
            <span>Save your favorite destinations</span>
          </li>
          <li>
            <i class="fas fa-check"></i>
            <span>Get exclusive member discounts</span>
          </li>
          <li>
            <i class="fas fa-check"></i>
            <span>Manage your preferences & wallet</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Right Side - Forms -->
    <div class="form-side">
      <div class="form-header">
        <h2 id="formTitle">Login to TravelGo</h2>
        <p id="formSubtitle">Welcome back! Please enter your details</p>
      </div>

      <!-- Tab Switcher -->
      <div class="tab-switcher">
        <div class="tab-slider login" id="tabSlider"></div>
        <button class="tab-btn active" id="loginTab" onclick="switchTab('login')">Login</button>
        <button class="tab-btn" id="registerTab" onclick="switchTab('register')">Register</button>
      </div>

      <!-- Success Message -->
      <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle"></i>
        <span id="successText"></span>
      </div>

      <!-- Login Form -->
      <form class="auth-form active" id="loginForm" onsubmit="handleLogin(event)">
        <div class="input-group">
          <label>Email Address</label>
          <div class="input-wrapper" id="loginEmailWrapper">
            <i class="fas fa-envelope"></i>
            <input type="email" id="loginEmail" placeholder="Enter your email" value="user@example.com">
          </div>
          <div class="error-message" id="loginEmailError">Please enter a valid email</div>
        </div>

        <div class="input-group">
          <label>Password</label>
          <div class="input-wrapper" id="loginPasswordWrapper">
            <i class="fas fa-lock"></i>
            <input type="password" id="loginPassword" placeholder="Enter your password" value="password123">
            <i class="fas fa-eye toggle-password" onclick="togglePassword('loginPassword')"></i>
          </div>
          <div class="error-message" id="loginPasswordError">Password must be at least 6 characters</div>
        </div>

        <div class="checkbox-group">
          <input type="checkbox" id="rememberMe">
          <label for="rememberMe">Remember me for 30 days</label>
        </div>

        <button type="submit" class="auth-btn" id="loginBtn">
          <span>Login</span>
          <span class="spinner" id="loginSpinner"></span>
        </button>

        <div style="text-align: center;">
          <a href="#" style="color: #0066ff; text-decoration: none; font-size: 0.9rem;">Forgot password?</a>
        </div>
      </form>

      <!-- Register Form -->
      <form class="auth-form" id="registerForm" onsubmit="handleRegister(event)">
        <div class="input-group">
          <label>Full Name</label>
          <div class="input-wrapper" id="registerNameWrapper">
            <i class="fas fa-user"></i>
            <input type="text" id="registerName" placeholder="Enter your full name">
          </div>
          <div class="error-message" id="registerNameError">Please enter your name</div>
        </div>

        <div class="input-group">
          <label>Email Address</label>
          <div class="input-wrapper" id="registerEmailWrapper">
            <i class="fas fa-envelope"></i>
            <input type="email" id="registerEmail" placeholder="Enter your email">
          </div>
          <div class="error-message" id="registerEmailError">Please enter a valid email</div>
        </div>

        <div class="input-group">
          <label>Phone Number</label>
          <div class="input-wrapper" id="registerPhoneWrapper">
            <i class="fas fa-phone"></i>
            <input type="tel" id="registerPhone" placeholder="Enter your phone number">
          </div>
          <div class="error-message" id="registerPhoneError">Please enter a valid 10-digit number</div>
        </div>

        <div class="input-group">
          <label>Password</label>
          <div class="input-wrapper" id="registerPasswordWrapper">
            <i class="fas fa-lock"></i>
            <input type="password" id="registerPassword" placeholder="Create a password">
            <i class="fas fa-eye toggle-password" onclick="togglePassword('registerPassword')"></i>
          </div>
          <div class="password-strength">
            <div class="strength-bar" id="strength1"></div>
            <div class="strength-bar" id="strength2"></div>
            <div class="strength-bar" id="strength3"></div>
          </div>
          <div class="strength-text" id="strengthText">Weak password</div>
          <div class="error-message" id="registerPasswordError">Password must be at least 6 characters</div>
        </div>

        <div class="input-group">
          <label>Confirm Password</label>
          <div class="input-wrapper" id="registerConfirmWrapper">
            <i class="fas fa-lock"></i>
            <input type="password" id="registerConfirm" placeholder="Confirm your password">
            <i class="fas fa-eye toggle-password" onclick="togglePassword('registerConfirm')"></i>
          </div>
          <div class="error-message" id="registerConfirmError">Passwords do not match</div>
        </div>

        <div class="checkbox-group">
          <input type="checkbox" id="termsCheck">
          <label for="termsCheck">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
        </div>

        <button type="submit" class="auth-btn" id="registerBtn">
          <span>Create Account</span>
          <span class="spinner" id="registerSpinner"></span>
        </button>
      </form>

      <!-- Social Login -->
      <div class="social-login">
        <div class="divider">
          <span>Or continue with</span>
        </div>
        <div class="social-icons">
          <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-apple"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-x-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>

  <script>
    // ===== TAB SWITCHING =====
    function switchTab(tab) {
      const loginTab = document.getElementById('loginTab');
      const registerTab = document.getElementById('registerTab');
      const loginForm = document.getElementById('loginForm');
      const registerForm = document.getElementById('registerForm');
      const tabSlider = document.getElementById('tabSlider');
      const formTitle = document.getElementById('formTitle');
      const formSubtitle = document.getElementById('formSubtitle');

      if (tab === 'login') {
        loginTab.classList.add('active');
        registerTab.classList.remove('active');
        loginForm.classList.add('active');
        registerForm.classList.remove('active');
        tabSlider.classList.remove('register');
        tabSlider.classList.add('login');
        formTitle.textContent = 'Login to TravelGo';
        formSubtitle.textContent = 'Welcome back! Please enter your details';
      } else {
        registerTab.classList.add('active');
        loginTab.classList.remove('active');
        registerForm.classList.add('active');
        loginForm.classList.remove('active');
        tabSlider.classList.remove('login');
        tabSlider.classList.add('register');
        formTitle.textContent = 'Create an Account';
        formSubtitle.textContent = 'Join us to start your journey';
      }
    }

    // ===== TOGGLE PASSWORD VISIBILITY =====
    function togglePassword(inputId) {
      const input = document.getElementById(inputId);
      const icon = input.nextElementSibling;
      
      if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    }

    // ===== PASSWORD STRENGTH CHECKER =====
    document.getElementById('registerPassword').addEventListener('input', function() {
      const password = this.value;
      const strength1 = document.getElementById('strength1');
      const strength2 = document.getElementById('strength2');
      const strength3 = document.getElementById('strength3');
      const strengthText = document.getElementById('strengthText');

      // Reset all
      strength1.classList.remove('weak', 'medium', 'strong');
      strength2.classList.remove('weak', 'medium', 'strong');
      strength3.classList.remove('weak', 'medium', 'strong');

      if (password.length === 0) {
        strengthText.textContent = 'Enter password';
        return;
      }

      let strength = 0;
      
      // Length check
      if (password.length >= 8) strength++;
      
      // Contains number
      if (/\d/.test(password)) strength++;
      
      // Contains special character
      if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength++;

      // Update strength bars
      if (strength === 0) {
        strength1.classList.add('weak');
        strengthText.textContent = 'Weak password';
      } else if (strength === 1) {
        strength1.classList.add('weak');
        strengthText.textContent = 'Weak password';
      } else if (strength === 2) {
        strength1.classList.add('medium');
        strength2.classList.add('medium');
        strengthText.textContent = 'Medium password';
      } else {
        strength1.classList.add('strong');
        strength2.classList.add('strong');
        strength3.classList.add('strong');
        strengthText.textContent = 'Strong password';
      }
    });

    // ===== SHOW ERROR =====
    function showError(elementId, wrapperId, show) {
      const errorElement = document.getElementById(elementId);
      const wrapper = document.getElementById(wrapperId);
      
      if (show) {
        errorElement.style.display = 'block';
        wrapper.classList.add('error');
      } else {
        errorElement.style.display = 'none';
        wrapper.classList.remove('error');
      }
    }

    // ===== SHOW SUCCESS =====
    function showSuccess(message) {
      const successDiv = document.getElementById('successMessage');
      const successText = document.getElementById('successText');
      
      successText.textContent = message;
      successDiv.style.display = 'flex';
      
      setTimeout(() => {
        successDiv.style.display = 'none';
      }, 3000);
    }

    // ===== SET LOADING =====
    function setLoading(buttonId, spinnerId, isLoading) {
      const button = document.getElementById(buttonId);
      const spinner = document.getElementById(spinnerId);
      const buttonText = button.querySelector('span:first-child');

      if (isLoading) {
        buttonText.style.display = 'none';
        spinner.style.display = 'inline-block';
        button.disabled = true;
      } else {
        buttonText.style.display = 'inline';
        spinner.style.display = 'none';
        button.disabled = false;
      }
    }

    // ===== HANDLE LOGIN =====
    function handleLogin(event) {
      event.preventDefault();
      
      const email = document.getElementById('loginEmail').value.trim();
      const password = document.getElementById('loginPassword').value.trim();
      let isValid = true;

      // Validate email
      if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showError('loginEmailError', 'loginEmailWrapper', true);
        isValid = false;
      } else {
        showError('loginEmailError', 'loginEmailWrapper', false);
      }

      // Validate password
      if (!password || password.length < 6) {
        showError('loginPasswordError', 'loginPasswordWrapper', true);
        isValid = false;
      } else {
        showError('loginPasswordError', 'loginPasswordWrapper', false);
      }

      if (isValid) {
        setLoading('loginBtn', 'loginSpinner', true);
        
        // Simulate API call
        setTimeout(() => {
          setLoading('loginBtn', 'loginSpinner', false);
          showSuccess('Login successful! Redirecting...');
          
          // Redirect after 2 seconds
          setTimeout(() => {
            window.location.href = 'index.php';
          }, 2000);
        }, 1500);
      }
    }

    // ===== HANDLE REGISTER =====
    function handleRegister(event) {
      event.preventDefault();
      
      const name = document.getElementById('registerName').value.trim();
      const email = document.getElementById('registerEmail').value.trim();
      const phone = document.getElementById('registerPhone').value.trim();
      const password = document.getElementById('registerPassword').value.trim();
      const confirm = document.getElementById('registerConfirm').value.trim();
      const terms = document.getElementById('termsCheck').checked;
      
      let isValid = true;

      // Validate name
      if (!name) {
        showError('registerNameError', 'registerNameWrapper', true);
        isValid = false;
      } else {
        showError('registerNameError', 'registerNameWrapper', false);
      }

      // Validate email
      if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showError('registerEmailError', 'registerEmailWrapper', true);
        isValid = false;
      } else {
        showError('registerEmailError', 'registerEmailWrapper', false);
      }

      // Validate phone (Indian 10-digit number)
      if (!phone || !/^[6-9]\d{9}$/.test(phone)) {
        showError('registerPhoneError', 'registerPhoneWrapper', true);
        isValid = false;
      } else {
        showError('registerPhoneError', 'registerPhoneWrapper', false);
      }

      // Validate password
      if (!password || password.length < 6) {
        showError('registerPasswordError', 'registerPasswordWrapper', true);
        isValid = false;
      } else {
        showError('registerPasswordError', 'registerPasswordWrapper', false);
      }

      // Validate confirm password
      if (password !== confirm) {
        showError('registerConfirmError', 'registerConfirmWrapper', true);
        isValid = false;
      } else {
        showError('registerConfirmError', 'registerConfirmWrapper', false);
      }

      // Validate terms
      if (!terms) {
        alert('Please accept Terms of Service and Privacy Policy');
        isValid = false;
      }

      if (isValid) {
        setLoading('registerBtn', 'registerSpinner', true);
        
        // Simulate API call
        setTimeout(() => {
          setLoading('registerBtn', 'registerSpinner', false);
          showSuccess('Account created successfully! Please login.');
          
          // Switch to login tab after 2 seconds
          setTimeout(() => {
            switchTab('login');
          }, 2000);
        }, 1500);
      }
    }

    // ===== CLOSE MODALS ON OUTSIDE CLICK (if any) =====
    window.addEventListener('click', function(event) {
      // Add any modal closing logic if needed
    });
  </script>
</body>
</html>