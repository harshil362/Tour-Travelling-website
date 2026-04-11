<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - Travel Go | Your Trusted Travel Partner</title>
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

    /* About Container */
    .about-container {
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
      max-width: 700px;
      margin: 0 auto;
    }

    /* About Content */
    .about-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      margin: 4rem 0;
      align-items: center;
    }

    .about-text h2 {
      font-size: 2rem;
      font-weight: 700;
      color: #0f172a;
      margin-bottom: 1rem;
    }

    .about-text .highlight {
      color: #0066ff;
    }

    .about-text p {
      color: #475569;
      line-height: 1.8;
      margin-bottom: 1.5rem;
    }

    .about-image img {
      width: 100%;
      border-radius: 24px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    /* Stats Section */
    .stats-section {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
      margin: 4rem 0;
    }

    .stat-card {
      background: white;
      border-radius: 20px;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,0.05);
      border: 1px solid #edf2f7;
      transition: 0.2s;
    }

    .stat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0,102,255,0.1);
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 800;
      color: #0066ff;
      margin-bottom: 0.5rem;
    }

    .stat-label {
      color: #64748b;
      font-weight: 500;
    }

    /* Mission Vision Section */
    .mission-vision {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 2rem;
      margin: 4rem 0;
    }

    .mv-card {
      background: white;
      border-radius: 24px;
      padding: 2rem;
      text-align: center;
      box-shadow: 0 8px 25px rgba(0,0,0,0.05);
      border: 1px solid #edf2f7;
    }

    .mv-icon {
      width: 80px;
      height: 80px;
      background: linear-gradient(135deg, #0066ff, #0044cc);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
    }

    .mv-icon i {
      font-size: 2.5rem;
      color: white;
    }

    .mv-card h3 {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 1rem;
      color: #0f172a;
    }

    .mv-card p {
      color: #475569;
      line-height: 1.6;
    }

    /* Values Section */
    .values-section {
      margin: 4rem 0;
      text-align: center;
    }

    .values-section h2 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 2rem;
      color: #0f172a;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
    }

    .value-card {
      background: white;
      border-radius: 20px;
      padding: 2rem 1.5rem;
      text-align: center;
      transition: 0.2s;
      border: 1px solid #edf2f7;
    }

    .value-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,102,255,0.1);
    }

    .value-icon {
      width: 60px;
      height: 60px;
      background: #e6f0ff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1rem;
    }

    .value-icon i {
      font-size: 1.8rem;
      color: #0066ff;
    }

    .value-card h4 {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
      color: #0f172a;
    }

    .value-card p {
      font-size: 0.9rem;
      color: #64748b;
    }

    /* Team Section */
    .team-section {
      margin: 4rem 0;
      text-align: center;
    }

    .team-section h2 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 2rem;
      color: #0f172a;
    }

    .team-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
    }

    .team-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.05);
      border: 1px solid #edf2f7;
      transition: 0.2s;
    }

    .team-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 35px rgba(0,102,255,0.1);
    }

    .team-img {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }

    .team-info {
      padding: 1.5rem;
      text-align: center;
    }

    .team-info h4 {
      font-size: 1.2rem;
      font-weight: 700;
      margin-bottom: 0.3rem;
      color: #0f172a;
    }

    .team-info p {
      font-size: 0.9rem;
      color: #0066ff;
      margin-bottom: 0.5rem;
    }

    .team-info span {
      font-size: 0.8rem;
      color: #64748b;
    }

    /* Testimonials Section */
    .testimonials-section {
      margin: 4rem 0;
      text-align: center;
    }

    .testimonials-section h2 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 2rem;
      color: #0f172a;
    }

    .testimonials-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }

    .testimonial-card {
      background: white;
      border-radius: 20px;
      padding: 2rem;
      box-shadow: 0 8px 25px rgba(0,0,0,0.05);
      border: 1px solid #edf2f7;
    }

    .testimonial-text {
      font-style: italic;
      color: #475569;
      line-height: 1.6;
      margin-bottom: 1rem;
    }

    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 1rem;
      justify-content: center;
    }

    .testimonial-author img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }

    .testimonial-author h4 {
      font-size: 1rem;
      font-weight: 700;
      margin-bottom: 0.2rem;
    }

    .testimonial-author p {
      font-size: 0.8rem;
      color: #64748b;
    }

    .stars {
      color: #f59e0b;
      margin-bottom: 1rem;
    }

    /* CTA Section */
    .cta-section {
      background: linear-gradient(135deg, #0066ff, #0044cc);
      border-radius: 24px;
      padding: 3rem;
      text-align: center;
      margin: 4rem 0;
      color: white;
    }

    .cta-section h2 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .cta-section p {
      font-size: 1rem;
      margin-bottom: 1.5rem;
      opacity: 0.9;
    }

    .cta-btn {
      background: white;
      color: #0066ff;
      border: none;
      padding: 1rem 2.5rem;
      border-radius: 60px;
      font-weight: 700;
      font-size: 1rem;
      cursor: pointer;
      transition: 0.2s;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
    }

    .cta-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
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
      .stats-section,
      .values-grid,
      .team-grid,
      .testimonials-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 768px) {
      .about-content,
      .mission-vision {
        grid-template-columns: 1fr;
      }
      
      .stats-section,
      .values-grid,
      .team-grid,
      .testimonials-grid {
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
  </style>
</head>
<body>

  <!-- INCLUDE HEADER -->
  <?php include 'header.php'; ?>

  <div class="about-container">

    <!-- Hero Section -->
    <div class="hero-section">
      <h1>About Travel Go</h1>
      <p>Your trusted partner in creating unforgettable travel experiences since 2020</p>
    </div>

    <!-- About Content -->
    <div class="about-content">
      <div class="about-text">
        <h2>We Help You <span class="highlight">Explore the World</span></h2>
        <p>Travel Go is India's leading online travel platform, dedicated to making travel simple, affordable, and enjoyable for millions of customers. Founded in 2020 with a vision to revolutionize the travel industry, we have grown to become one of the most trusted names in travel booking.</p>
        <p>Our mission is to provide seamless, end-to-end travel solutions that cater to every traveler's unique needs. From flight and hotel bookings to customized holiday packages, bus tickets, and visa assistance, we offer a comprehensive range of services to make your journey memorable.</p>
        <p>With a passionate team of travel experts and cutting-edge technology, we ensure that every booking is smooth, secure, and hassle-free. Join millions of happy travelers who have chosen Travel Go for their adventures!</p>
      </div>
      <div class="about-image">
        <img src="https://images.pexels.com/photos/3184460/pexels-photo-3184460.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Travel Team">
      </div>
    </div>

    <!-- Stats Section -->
    <div class="stats-section">
      <div class="stat-card">
        <div class="stat-number">5M+</div>
        <div class="stat-label">Happy Customers</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">50K+</div>
        <div class="stat-label">Daily Bookings</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">100+</div>
        <div class="stat-label">Destinations</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">24/7</div>
        <div class="stat-label">Customer Support</div>
      </div>
    </div>

    <!-- Mission & Vision -->
    <div class="mission-vision">
      <div class="mv-card">
        <div class="mv-icon">
          <i class="fas fa-bullseye"></i>
        </div>
        <h3>Our Mission</h3>
        <p>To empower travelers with innovative technology and personalized services, making every journey seamless, affordable, and memorable. We strive to be the most trusted travel partner for millions of Indians.</p>
      </div>
      <div class="mv-card">
        <div class="mv-icon">
          <i class="fas fa-eye"></i>
        </div>
        <h3>Our Vision</h3>
        <p>To become the world's most loved travel platform, connecting people to incredible experiences across the globe, while fostering sustainable and responsible tourism.</p>
      </div>
    </div>

    <!-- Core Values -->
    <div class="values-section">
      <h2>Our Core Values</h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon">
            <i class="fas fa-heart"></i>
          </div>
          <h4>Customer First</h4>
          <p>We put our customers at the heart of everything we do</p>
        </div>
        <div class="value-card">
          <div class="value-icon">
            <i class="fas fa-lightbulb"></i>
          </div>
          <h4>Innovation</h4>
          <p>Constantly evolving to provide the best travel solutions</p>
        </div>
        <div class="value-card">
          <div class="value-icon">
            <i class="fas fa-handshake"></i>
          </div>
          <h4>Integrity</h4>
          <p>Honesty and transparency in all our dealings</p>
        </div>
        <div class="value-card">
          <div class="value-icon">
            <i class="fas fa-globe"></i>
          </div>
          <h4>Sustainability</h4>
          <p>Promoting responsible and eco-friendly travel</p>
        </div>
      </div>
    </div>

    <!-- Team Section -->
    <div class="team-section">
      <h2>Meet Our Leadership Team</h2>
      <div class="team-grid">
        <div class="team-card">
          <img class="team-img" src="https://randomuser.me/api/portraits/men/32.jpg" alt="CEO">
          <div class="team-info">
            <h4>Rajesh Sharma</h4>
            <p>Founder & CEO</p>
            <span>20+ years in travel industry</span>
          </div>
        </div>
        <div class="team-card">
          <img class="team-img" src="https://randomuser.me/api/portraits/women/44.jpg" alt="CTO">
          <div class="team-info">
            <h4>Priya Mehta</h4>
            <p>Chief Technology Officer</p>
            <span>Tech innovator & travel enthusiast</span>
          </div>
        </div>
        <div class="team-card">
          <img class="team-img" src="https://randomuser.me/api/portraits/men/45.jpg" alt="COO">
          <div class="team-info">
            <h4>Vikram Singh</h4>
            <p>Chief Operating Officer</p>
            <span>Operations & Strategy expert</span>
          </div>
        </div>
        <div class="team-card">
          <img class="team-img" src="https://randomuser.me/api/portraits/women/68.jpg" alt="CMO">
          <div class="team-info">
            <h4>Anjali Kapoor</h4>
            <p>Chief Marketing Officer</p>
            <span>Brand builder & storyteller</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonials -->
    <div class="testimonials-section">
      <h2>What Our Customers Say</h2>
      <div class="testimonials-grid">
        <div class="testimonial-card">
          <div class="stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="testimonial-text">"Travel Go made my Goa trip absolutely amazing! The hotel booking was seamless and the customer support was super helpful. Highly recommended!"</p>
          <div class="testimonial-author">
            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="User">
            <div>
              <h4>Rahul Verma</h4>
              <p>Delhi, India</p>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="testimonial-text">"Best travel platform ever! Booked my Thailand package and everything was perfectly organized. Will definitely use Travel Go for all future trips."</p>
          <div class="testimonial-author">
            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="User">
            <div>
              <h4>Neha Gupta</h4>
              <p>Mumbai, India</p>
            </div>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
          </div>
          <p class="testimonial-text">"Great discounts and amazing customer service. The app is super easy to use. Booked my flights and hotels in minutes!"</p>
          <div class="testimonial-author">
            <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="User">
            <div>
              <h4>Amit Patel</h4>
              <p>Bangalore, India</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section">
      <h2>Ready to Start Your Journey?</h2>
      <p>Join millions of happy travelers who trust Travel Go for their adventures</p>
      <button class="cta-btn" onclick="window.location.href='packages.php'">
        Explore Packages <i class="fas fa-arrow-right"></i>
      </button>
    </div>
  </div>

  <!-- Footer -->
 <?php include '../includes/footer.php' ?>
 
  <script>
    // CTA Button Click
    document.querySelector('.cta-btn').addEventListener('click', function() {
      window.location.href = 'packages.php';
    });
  </script>
</body>
</html>