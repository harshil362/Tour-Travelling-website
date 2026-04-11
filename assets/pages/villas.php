<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Villas & Homestays - Travel Go | Book Villas, Apartments & Homestays</title>
  <!-- Font Awesome 5 (icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  
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

    /* Navbar Styles */
    .navbar {
      background-color: #ffffff;
      box-shadow: 0 4px 20px rgba(0,0,0,0.03);
      padding: 0.75rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      position: sticky;
      top: 0;
      z-index: 50;
    }

    .nav-left {
      display: flex;
      align-items: center;
      gap: 2.5rem;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: #2563eb;
      letter-spacing: -0.5px;
    }
    .logo i {
      color: #3b82f6;
      margin-right: 6px;
    }

    .menu-items {
      display: flex;
      gap: 1.5rem;
      font-weight: 500;
      overflow-x: auto;
      padding-bottom: 5px;
    }
    .menu-items a {
      text-decoration: none;
      color: #334155;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: color 0.2s;
      white-space: nowrap;
    }
    .menu-items a i { color: #64748b; font-size: 1rem; }
    .menu-items a:hover { color: #2563eb; }
    .menu-items a:hover i { color: #2563eb; }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }

    .top-links {
      display: flex;
      align-items: center;
      gap: 1.2rem;
      font-size: 0.85rem;
    }
    .top-links a {
      text-decoration: none;
      color: #334155;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .top-links a i { color: #2563eb; }

    .login-btn {
      background: linear-gradient(145deg, #2563eb, #1d4ed8);
      color: white !important;
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      font-weight: 500;
      text-decoration: none;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 6px;
      box-shadow: 0 6px 12px rgba(37,99,235,0.2);
    }

    .lang-currency select {
      border: 1px solid #e2e8f0;
      border-radius: 24px;
      padding: 0.4rem 1rem;
      font-size: 0.85rem;
      background-color: white;
      font-weight: 500;
      color: #1e293b;
      cursor: pointer;
      outline: none;
    }

    .badge-new {
      background: #f97316;
      color: white;
      font-size: 0.6rem;
      padding: 2px 6px;
      border-radius: 20px;
      margin-left: 4px;
    }

    /* Main Container */
    .villa-container {
      max-width: 1300px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    /* Top Action Bar */
    .action-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .left-actions {
      display: flex;
      align-items: center;
      gap: 2rem;
      flex-wrap: wrap;
    }

    .list-property {
      background: #e6f0ff;
      color: #2563eb;
      padding: 0.6rem 1.5rem;
      border-radius: 40px;
      font-weight: 600;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
    }

    .grow-business {
      font-size: 0.85rem;
      color: #64748b;
    }

    .biz-tag {
      display: flex;
      align-items: center;
      gap: 15px;
      background: #f1f5f9;
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
    }
    .biz-tag span {
      font-size: 0.85rem;
      font-weight: 600;
    }
    .biz-tag small {
      color: #2563eb;
      font-weight: 500;
    }

    .wishlist-icons {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }
    .wishlist-icons a {
      text-decoration: none;
      color: #334155;
      font-size: 0.85rem;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    /* Main Tabs */
    .main-tabs {
      display: flex;
      align-items: center;
      gap: 1.5rem;
      border-bottom: 2px solid #e2e8f0;
      padding-bottom: 0.8rem;
      margin: 1.5rem 0;
      flex-wrap: wrap;
    }

    .main-tab {
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 600;
      color: #475569;
      cursor: pointer;
      padding: 0.5rem 1rem;
      border-radius: 40px;
      white-space: nowrap;
    }

    .main-tab.active {
      background: #2563eb;
      color: white;
    }
    .main-tab.active i {
      color: white;
    }

    .main-tab i {
      color: #64748b;
      font-size: 1.1rem;
    }

    /* Hero Banner */
    .hero-banner {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      padding: 2rem;
      border-radius: 24px;
      margin: 2rem 0;
      text-align: center;
    }
    .hero-banner h2 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    /* Search Card */
    .search-card {
      background: white;
      border-radius: 24px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.08);
      padding: 2rem;
      margin-bottom: 2rem;
    }

    .search-form {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr auto;
      gap: 1rem;
      align-items: center;
    }

    .search-field {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 16px;
      padding: 0.8rem 1.2rem;
    }

    .search-field label {
      font-size: 0.7rem;
      text-transform: uppercase;
      color: #64748b;
      font-weight: 600;
      display: block;
    }

    .search-field input, .search-field select {
      width: 100%;
      border: none;
      background: transparent;
      font-weight: 500;
      font-size: 0.95rem;
      outline: none;
      color: #0f172a;
    }

    .price-range {
      margin-top: 1rem;
      font-size: 0.85rem;
      color: #2563eb;
      font-weight: 500;
    }

    .search-btn {
      background: #2563eb;
      color: white;
      border: none;
      padding: 1rem 2.5rem;
      border-radius: 16px;
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      transition: 0.2s;
      white-space: nowrap;
      height: fit-content;
    }

    .search-btn:hover {
      background: #1d4ed8;
    }

    /* Location Grid */
    .location-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 2rem 0 1.5rem;
    }
    .location-header h3 {
      font-size: 1.5rem;
      font-weight: 700;
    }
    .view-all {
      color: #2563eb;
      font-weight: 500;
      cursor: pointer;
    }

    .location-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
      margin-bottom: 3rem;
    }

    .location-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.04);
      border: 1px solid #edf2f7;
      transition: 0.2s;
      cursor: pointer;
    }

    .location-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(37,99,235,0.1);
    }

    .location-img {
      height: 160px;
      background-size: cover;
      background-position: center;
      position: relative;
    }

    .location-badge {
      position: absolute;
      top: 10px;
      right: 10px;
      background: rgba(255,255,255,0.9);
      padding: 0.3rem 1rem;
      border-radius: 20px;
      font-weight: 600;
      font-size: 0.8rem;
      color: #2563eb;
    }

    .location-info {
      padding: 1.2rem;
    }
    .location-info h4 {
      font-weight: 700;
      margin-bottom: 4px;
    }
    .location-info p {
      color: #64748b;
      font-size: 0.85rem;
    }

    /* Footer */
    footer {
      background: #0b1120;
      color: #cbd5e1;
      padding: 3rem 2rem 1.5rem;
      margin-top: 3rem;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px,1fr));
      gap: 2.5rem;
      max-width: 1300px;
      margin: 0 auto;
    }

    .footer-col h5 { color: white; margin-bottom: 1rem; }
    .footer-col ul { list-style: none; }
    .footer-col li { margin-bottom: 0.6rem; }
    .footer-col a { color: #9aa9b9; text-decoration: none; font-size: 0.9rem; }
    .footer-col a:hover { color: white; }

    .social-icons {
      display: flex;
      gap: 1rem;
      margin-top: 1rem;
    }
    .social-icons a {
      background: #1e2b3c;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
    }

    .copyright {
      text-align: center;
      border-top: 1px solid #1e2b3c;
      padding-top: 2rem;
      margin-top: 2.5rem;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .search-form {
        grid-template-columns: 1fr;
      }
      .location-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 768px) {
      .location-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Villas Page Container -->
  <div class="villa-container">

    <!-- Top Action Bar -->
    <div class="action-bar">
      <div class="left-actions">
        <div class="list-property">
          <i class="fas fa-hotel"></i> List Your Property
        </div>
        <div class="grow-business">
          <i class="fas fa-chart-line"></i> Grow your business!
        </div>
        <div class="biz-tag">
          <i class="fas fa-briefcase"></i>
          <span>Biz</span>
          <small>Introducing myBiz</small>
        </div>
      </div>
      <div class="wishlist-icons">
        <a href="#"><i class="far fa-heart"></i> Wishlist</a>
        <a href="#"><i class="fas fa-suitcase"></i> My Trips</a>
        <div class="lang-currency">
          <select>
            <option>INR</option>
          </select>
          <select>
            <option>English</option>
          </select>
        </div>
        <a href="#" class="login-btn"><i class="far fa-user-circle"></i> Login</a>
      </div>
    </div>

    <!-- Main Tabs -->
    <div class="main-tabs">
      <div class="main-tab"><i class="fas fa-plane"></i> Flights</div>
      <div class="main-tab active"><i class="fas fa-home"></i> Hotels</div>
      <div class="main-tab"><i class="fas fa-home"></i> Villas & Homestays <span class="badge-new">new</span></div>
      <div class="main-tab"><i class="fas fa-umbrella-beach"></i> Holiday Packages</div>
      <div class="main-tab"><i class="fas fa-train"></i> Trains</div>
      <div class="main-tab"><i class="fas fa-bus"></i> Buses</div>
      <div class="main-tab"><i class="fas fa-taxi"></i> Cabs</div>
      <div class="main-tab"><i class="fas fa-camera"></i> Tours & Attractions</div>
      <div class="main-tab"><i class="fas fa-passport"></i> Visa</div>
      <div class="main-tab"><i class="fas fa-ship"></i> Cruise</div>
      <div class="main-tab"><i class="fas fa-coins"></i> Forex</div>
      <div class="main-tab"><i class="fas fa-shield-alt"></i> Travel Insurance</div>
    </div>

    <!-- Hero Banner -->
    <div class="hero-banner">
      <h2>Book your ideal Homestay - Villas, Apartments & more.</h2>
    </div>

    <!-- Search Card -->
    <div class="search-card">
      <div class="search-form">
        <div class="search-field">
          <label><i class="fas fa-map-marker-alt"></i> CITY, PROPERTY NAME OR LOCATION</label>
          <input type="text" placeholder="Goa, India" value="Goa, India">
        </div>

        <div class="search-field">
          <label>CHECK-IN</label>
          <input type="text" placeholder="Select Date" value="19 Mar'26 Thursday">
        </div>

        <div class="search-field">
          <label>CHECK-OUT</label>
          <input type="text" placeholder="Select Date" value="20 Mar'26 Friday">
        </div>

        <div class="search-field">
          <label>GUESTS</label>
          <input type="text" placeholder="Add Adults & Children" value="2 Adults, 1 Child">
        </div>

        <button class="search-btn"><i class="fas fa-search"></i> SEARCH</button>
      </div>

      <div class="price-range">
        <i class="fas fa-rupee-sign"></i> Price Per Night: ₹0-₹1500, ₹1500-₹2500, ₹2500-₹5000, ₹5000+
      </div>
    </div>

    <!-- Location Grid -->
    <div class="location-header">
      <h3>Popular Homestay Destinations</h3>
      <span class="view-all">View All <i class="fas fa-arrow-right"></i></span>
    </div>

    <div class="location-grid">
      <!-- Goa -->
      <div class="location-card">
        <div class="location-img" style="background-image: url('https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=400')">
          <span class="location-badge">152 Properties</span>
        </div>
        <div class="location-info">
          <h4>Goa</h4>
          <p>Homestays - Villas & Apts</p>
        </div>
      </div>

      <!-- Mumbai -->
      <div class="location-card">
        <div class="location-img" style="background-image: url('https://images.pexels.com/photos/3757141/pexels-photo-3757141.jpeg?auto=compress&cs=tinysrgb&w=400')">
          <span class="location-badge">98 Properties</span>
        </div>
        <div class="location-info">
          <h4>Mumbai</h4>
          <p>Homestays - Villas & Apts</p>
        </div>
      </div>

      <!-- Delhi -->
      <div class="location-card">
        <div class="location-img" style="background-image: url('https://images.pexels.com/photos/7245413/pexels-photo-7245413.jpeg?auto=compress&cs=tinysrgb&w=400')">
          <span class="location-badge">76 Properties</span>
        </div>
        <div class="location-info">
          <h4>Delhi</h4>
          <p>Homestays - Villas & Apts</p>
        </div>
      </div>

      <!-- Mukteshwar -->
      <div class="location-card">
        <div class="location-img" style="background-image: url('https://images.pexels.com/photos/2387873/pexels-photo-2387873.jpeg?auto=compress&cs=tinysrgb&w=400')">
          <span class="location-badge">34 Properties</span>
        </div>
        <div class="location-info">
          <h4>Mukteshwar</h4>
          <p>Homestays - Villas & Apts</p>
        </div>
      </div>

      <!-- Gokarna -->
      <div class="location-card">
        <div class="location-img" style="background-image: url('https://images.pexels.com/photos/3225531/pexels-photo-3225531.jpeg?auto=compress&cs=tinysrgb&w=400')">
          <span class="location-badge">42 Properties</span>
        </div>
        <div class="location-info">
          <h4>Gokarna</h4>
          <p>Homestays - Villas & Apts</p>
        </div>
      </div>

      <!-- Coonoor -->
      <div class="location-card">
        <div class="location-img" style="background-image: url('https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&w=400')">
          <span class="location-badge">28 Properties</span>
        </div>
        <div class="location-info">
          <h4>Coonoor</h4>
          <p>Homestays - Villas & Apts</p>
        </div>
      </div>

      <!-- Kasol -->
      <div class="location-card">
        <div class="location-img" style="background-image: url('https://images.pexels.com/photos/450441/pexels-photo-450441.jpeg?auto=compress&cs=tinysrgb&w=400')">
          <span class="location-badge">31 Properties</span>
        </div>
        <div class="location-info">
          <h4>Kasol</h4>
          <p>Homestays - Villas & Apts</p>
        </div>
      </div>

      <!-- Malvan -->
      <div class="location-card">
        <div class="location-img" style="background-image: url('https://images.pexels.com/photos/1268880/pexels-photo-1268880.jpeg?auto=compress&cs=tinysrgb&w=400')">
          <span class="location-badge">23 Properties</span>
        </div>
        <div class="location-info">
          <h4>Malvan</h4>
          <p>Homestays - Villas & Apts</p>
        </div>
      </div>

      <!-- Jibhi -->
      <div class="location-card">
        <div class="location-img" style="background-image: url('https://images.pexels.com/photos/917510/pexels-photo-917510.jpeg?auto=compress&cs=tinysrgb&w=400')">
          <span class="location-badge">19 Properties</span>
        </div>
        <div class="location-info">
          <h4>Jibhi</h4>
          <p>Homestays - Villas & Apts</p>
        </div>
      </div>

      <!-- Additional row to match 10 destinations -->
      <div class="location-card">
        <div class="location-img" style="background-image: url('https://images.pexels.com/photos/2901209/pexels-photo-2901209.jpeg?auto=compress&cs=tinysrgb&w=400')">
          <span class="location-badge">45 Properties</span>
        </div>
        <div class="location-info">
          <h4>Manali</h4>
          <p>Homestays - Villas & Apts</p>
        </div>
      </div>
    </div>

    <!-- What are you looking for? section -->
    <div class="location-header">
      <h3>What are you looking for?</h3>
    </div>
    <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 3rem;">
      <span style="background: #e6f0ff; padding: 0.6rem 1.5rem; border-radius: 40px; color: #2563eb; font-weight: 500;">Beach Villas</span>
      <span style="background: #f1f5f9; padding: 0.6rem 1.5rem; border-radius: 40px; color: #334155; font-weight: 500;">Mountain Cabins</span>
      <span style="background: #f1f5f9; padding: 0.6rem 1.5rem; border-radius: 40px; color: #334155; font-weight: 500;">Luxury Villas</span>
      <span style="background: #f1f5f9; padding: 0.6rem 1.5rem; border-radius: 40px; color: #334155; font-weight: 500;">Budget Stays</span>
      <span style="background: #f1f5f9; padding: 0.6rem 1.5rem; border-radius: 40px; color: #334155; font-weight: 500;">Pet Friendly</span>
    </div>
  </div>

  <!-- Footer -->
  <?php include '../includes/footer.php' ?>


  <script>
    // Tab switching
    document.querySelectorAll('.main-tab').forEach(tab => {
      tab.addEventListener('click', function() {
        document.querySelectorAll('.main-tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
      });
    });

    // Search button
    document.querySelector('.search-btn').addEventListener('click', function() {
      alert('Searching for villas and homestays...');
    });
  </script>
</body>
</html>