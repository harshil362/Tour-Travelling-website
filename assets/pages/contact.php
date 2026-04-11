<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Travel Go | Get in Touch</title>
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

    body {
      background-color: #f8fafc;
      color: #1e293b;
    }

    /* Contact Container */
    .contact-container {
      max-width: 1300px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    /* Hero Section */
    .hero-section {
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                  url('https://images.pexels.com/photos/672358/pexels-photo-672358.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat;
      border-radius: 30px;
      padding: 5rem 3rem;
      margin: 2rem 0;
      color: white;
      text-align: center;
      position: relative;
    }

    .hero-section h1 {
      font-size: 3.5rem;
      font-weight: 800;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .hero-section p {
      font-size: 1.2rem;
      opacity: 0.95;
      max-width: 600px;
      margin: 0 auto;
    }

    /* Contact Info Cards */
    .contact-info-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
      margin: 3rem 0;
    }

    .info-card {
      background: white;
      border-radius: 20px;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,0.05);
      border: 1px solid #edf2f7;
      transition: 0.2s;
    }

    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0,102,255,0.1);
      border-color: #0066ff20;
    }

    .info-icon {
      width: 70px;
      height: 70px;
      background: linear-gradient(135deg, #0066ff, #0044cc);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
    }

    .info-icon i {
      font-size: 2rem;
      color: white;
    }

    .info-card h3 {
      font-size: 1.3rem;
      font-weight: 700;
      margin-bottom: 1rem;
      color: #0f172a;
    }

    .info-card p {
      color: #64748b;
      line-height: 1.6;
      margin-bottom: 0.5rem;
    }

    .info-card a {
      color: #0066ff;
      text-decoration: none;
      font-weight: 500;
    }

    .info-card a:hover {
      text-decoration: underline;
    }

    /* Main Contact Section */
    .contact-main {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
      margin: 3rem 0;
    }

    /* Contact Form */
    .contact-form-section {
      background: white;
      border-radius: 24px;
      padding: 2rem;
      box-shadow: 0 8px 25px rgba(0,0,0,0.05);
      border: 1px solid #edf2f7;
    }

    .section-title {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      color: #0f172a;
      position: relative;
      padding-bottom: 0.8rem;
    }

    .section-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 4px;
      background: linear-gradient(95deg, #0066ff, #0044cc);
      border-radius: 2px;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: #334155;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 0.8rem 1rem;
      border: 2px solid #e2e8f0;
      border-radius: 12px;
      font-size: 1rem;
      transition: 0.2s;
      background: #f8fafc;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: #0066ff;
      background: white;
      box-shadow: 0 0 0 3px rgba(0,102,255,0.1);
    }

    .form-group textarea {
      resize: vertical;
      min-height: 120px;
    }

    .submit-btn {
      background: linear-gradient(95deg, #0066ff, #0044cc);
      color: white;
      border: none;
      padding: 1rem 2rem;
      border-radius: 60px;
      font-weight: 700;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.2s;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
    }

    .submit-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(0,102,255,0.3);
    }

    /* Map Section */
    .map-section {
      background: white;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.05);
      border: 1px solid #edf2f7;
    }

    .map-section iframe {
      width: 100%;
      height: 100%;
      min-height: 400px;
      border: none;
    }

    /* Social Section */
    .social-section {
      margin: 3rem 0;
      text-align: center;
    }

    .social-section h2 {
      font-size: 1.8rem;
      font-weight: 700;
      margin-bottom: 2rem;
      color: #0f172a;
    }

    .social-grid {
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      flex-wrap: wrap;
    }

    .social-card {
      width: 80px;
      height: 80px;
      background: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.2s;
      box-shadow: 0 8px 20px rgba(0,0,0,0.05);
      border: 1px solid #edf2f7;
      text-decoration: none;
    }

    .social-card i {
      font-size: 2rem;
      color: #64748b;
      transition: 0.2s;
    }

    .social-card:hover {
      transform: translateY(-5px);
      background: #0066ff;
    }

    .social-card:hover i {
      color: white;
    }

    .whatsapp-card {
      background: #25D366;
      border: none;
    }

    .whatsapp-card i {
      color: white;
    }

    .whatsapp-card:hover {
      background: #128C7E;
      transform: translateY(-5px);
    }

    /* Footer */
    footer {
      background: #0b1120;
      color: #cbd5e1;
      padding: 4rem 2rem 2rem;
      margin-top: 4rem;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px,1fr));
      gap: 3rem;
      max-width: 1300px;
      margin: 0 auto;
    }

    .footer-col h5 {
      color: white;
      margin-bottom: 1.2rem;
      font-size: 1rem;
      font-weight: 600;
    }

    .footer-col ul {
      list-style: none;
    }

    .footer-col li {
      margin-bottom: 0.7rem;
    }

    .footer-col a {
      color: #94a3b8;
      text-decoration: none;
      font-size: 0.85rem;
      transition: 0.2s;
    }

    .footer-col a:hover {
      color: white;
    }

    .copyright {
      text-align: center;
      border-top: 1px solid #1e2b3c;
      padding-top: 2rem;
      margin-top: 3rem;
      color: #64748b;
      font-size: 0.85rem;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .contact-info-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .contact-main {
        grid-template-columns: 1fr;
      }
      
      .contact-info-grid {
        grid-template-columns: 1fr;
      }
      
      .hero-section h1 {
        font-size: 2.5rem;
      }
      
      .hero-section p {
        font-size: 1rem;
      }
      
      .hero-section {
        padding: 3rem 1.5rem;
      }
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

    .error-message {
      background: #ef4444;
      color: white;
      padding: 1rem;
      border-radius: 12px;
      margin-bottom: 1rem;
      display: none;
      align-items: center;
      gap: 0.5rem;
    }
  </style>
</head>
<body>

  <!-- INCLUDE HEADER -->
  <?php include 'header.php'; ?>

  <div class="contact-container">

    <!-- Hero Section -->
    <div class="hero-section">
      <h1>Get in Touch</h1>
      <p>Have questions about your travel plans? We're here to help you create unforgettable journeys</p>
    </div>

    <!-- Contact Info Cards -->
    <div class="contact-info-grid">
      <!-- Phone -->
      <div class="info-card">
        <div class="info-icon">
          <i class="fas fa-phone-alt"></i>
        </div>
        <h3>Phone Support</h3>
        <p>24/7 Customer Support</p>
        <p><a href="tel:+911234567890">+91 12345 67890</a></p>
        <p><a href="tel:+911234567891">+91 12345 67891</a></p>
      </div>

      <!-- Email -->
      <div class="info-card">
        <div class="info-icon">
          <i class="fas fa-envelope"></i>
        </div>
        <h3>Email Us</h3>
        <p>For general inquiries</p>
        <p><a href="mailto:support@travelgo.com">support@travelgo.com</a></p>
        <p><a href="mailto:booking@travelgo.com">booking@travelgo.com</a></p>
      </div>

      <!-- Address -->
      <div class="info-card">
        <div class="info-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <h3>Office Address</h3>
        <p>TravelGo Headquarters</p>
        <p>Cyber City, Gurugram</p>
        <p>Haryana, India - 122002</p>
      </div>
    </div>

    <!-- Main Contact Section -->
    <div class="contact-main">
      <!-- Contact Form -->
      <div class="contact-form-section">
        <h2 class="section-title">Send us a Message</h2>
        
        <div class="success-message" id="successMessage">
          <i class="fas fa-check-circle"></i>
          <span id="successText"></span>
        </div>
        
        <div class="error-message" id="errorMessage">
          <i class="fas fa-exclamation-circle"></i>
          <span id="errorText"></span>
        </div>

        <form id="contactForm" onsubmit="handleContact(event)">
          <div class="form-group">
            <label>Full Name *</label>
            <input type="text" id="fullName" placeholder="Enter your full name" required>
          </div>

          <div class="form-group">
            <label>Email Address *</label>
            <input type="email" id="email" placeholder="Enter your email address" required>
          </div>

          <div class="form-group">
            <label>Phone Number</label>
            <input type="tel" id="phone" placeholder="Enter your phone number">
          </div>

          <div class="form-group">
            <label>Subject *</label>
            <select id="subject" required>
              <option value="">Select Subject</option>
              <option value="Booking">Booking Inquiry</option>
              <option value="Cancellation">Cancellation / Refund</option>
              <option value="Support">Technical Support</option>
              <option value="Feedback">Feedback / Suggestion</option>
              <option value="Partnership">Partnership / Collaboration</option>
              <option value="Other">Other</option>
            </select>
          </div>

          <div class="form-group">
            <label>Message *</label>
            <textarea id="message" placeholder="Write your message here..." required></textarea>
          </div>

          <button type="submit" class="submit-btn" id="submitBtn">
            <span>Send Message</span>
            <i class="fas fa-paper-plane"></i>
            <span class="spinner" id="submitSpinner"></span>
          </button>
        </form>
      </div>

      <!-- Google Map -->
      <div class="map-section">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.1552369147996!2d77.09029707549326!3d28.47663999034029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d18f1f0f3f3f3%3A0x3f3f3f3f3f3f3f3f!2sCyber%20City%2C%20Gurugram%2C%20Haryana!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </div>

    <!-- Social Links Section -->
    <div class="social-section">
      <h2>Connect With Us</h2>
      <div class="social-grid">
        <a href="#" class="social-card"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social-card"><i class="fab fa-instagram"></i></a>
        <a href="#" class="social-card"><i class="fab fa-x-twitter"></i></a>
        <a href="#" class="social-card"><i class="fab fa-youtube"></i></a>
        <a href="#" class="social-card"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="social-card whatsapp-card"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include '../includes/footer.php' ?>

  <style>
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
  </style>

  <script>
    // ===== HANDLE CONTACT FORM SUBMISSION =====
    function handleContact(event) {
      event.preventDefault();
      
      const name = document.getElementById('fullName').value.trim();
      const email = document.getElementById('email').value.trim();
      const phone = document.getElementById('phone').value.trim();
      const subject = document.getElementById('subject').value;
      const message = document.getElementById('message').value.trim();
      
      let isValid = true;
      let errorMsg = '';

      // Validate name
      if (!name) {
        isValid = false;
        errorMsg = 'Please enter your name';
      }
      
      // Validate email
      if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        isValid = false;
        errorMsg = 'Please enter a valid email address';
      }
      
      // Validate subject
      if (!subject) {
        isValid = false;
        errorMsg = 'Please select a subject';
      }
      
      // Validate message
      if (!message || message.length < 10) {
        isValid = false;
        errorMsg = 'Please enter a message (minimum 10 characters)';
      }
      
      const submitBtn = document.getElementById('submitBtn');
      const spinner = document.getElementById('submitSpinner');
      const btnText = submitBtn.querySelector('span:first-child');
      const btnIcon = submitBtn.querySelector('i');
      
      if (isValid) {
        // Show loading
        btnText.style.display = 'none';
        btnIcon.style.display = 'none';
        spinner.style.display = 'inline-block';
        submitBtn.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
          // Hide loading
          btnText.style.display = 'inline';
          btnIcon.style.display = 'inline';
          spinner.style.display = 'none';
          submitBtn.disabled = false;
          
          // Show success message
          const successDiv = document.getElementById('successMessage');
          const successText = document.getElementById('successText');
          successText.textContent = 'Thank you for contacting us! We will get back to you within 24 hours.';
          successDiv.style.display = 'flex';
          
          // Clear form
          document.getElementById('contactForm').reset();
          
          // Hide success message after 5 seconds
          setTimeout(() => {
            successDiv.style.display = 'none';
          }, 5000);
        }, 1500);
      } else {
        // Show error message
        const errorDiv = document.getElementById('errorMessage');
        const errorText = document.getElementById('errorText');
        errorText.textContent = errorMsg;
        errorDiv.style.display = 'flex';
        
        // Hide error after 3 seconds
        setTimeout(() => {
          errorDiv.style.display = 'none';
        }, 3000);
      }
    }
    
    // ===== WHATSAPP CLICK =====
    document.querySelector('.whatsapp-card').addEventListener('click', function(e) {
      e.preventDefault();
      const phone = '911234567890';
      const message = encodeURIComponent('Hello! I need assistance with my travel booking.');
      window.open(`https://wa.me/${phone}?text=${message}`, '_blank');
    });
    
    // ===== SOCIAL CARDS CLICK =====
    document.querySelectorAll('.social-card:not(.whatsapp-card)').forEach(card => {
      card.addEventListener('click', function(e) {
        e.preventDefault();
        const platform = this.querySelector('i').classList[1];
        alert(`Connect with us on ${platform.replace('fa-', '').replace('-', ' ')}`);
      });
    });
  </script>
</body>
</html>