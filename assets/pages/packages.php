<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Goa Packages - Travel Go | Holiday Packages</title>
  <!-- Font Awesome 6 (latest) -->
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
      background-color: #f0f4fa;
      color: #1e293b;
    }

    /* Header styles */
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
      color: #0066ff;
      letter-spacing: -0.5px;
    }
    .logo i {
      color: #0066ff;
      margin-right: 6px;
    }

    .menu-items {
      display: flex;
      gap: 1.5rem;
      font-weight: 500;
      overflow-x: auto;
    }
    .menu-items a {
      text-decoration: none;
      color: #334155;
      font-size: 0.95rem;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: color 0.2s;
      white-space: nowrap;
    }
    .menu-items a i { color: #64748b; }
    .menu-items a:hover { color: #0066ff; }
    .menu-items a:hover i { color: #0066ff; }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 1.8rem;
    }
    
    .login-btn {
      background: linear-gradient(145deg, #0066ff, #0044cc);
      color: white !important;
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      font-weight: 500;
      text-decoration: none;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 6px;
      box-shadow: 0 6px 12px rgba(0,102,255,0.2);
    }

    .lang-currency {
      display: flex;
      gap: 0.8rem;
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

    /* Packages Container */
    .packages-container {
      max-width: 1400px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    /* ===== STICKY SEARCH BAR ===== */
    .sticky-search {
      position: sticky;
      top: 80px;
      z-index: 40;
      background: linear-gradient(135deg, #0a1a2f 0%, #0b1e33 100%);
      border-radius: 60px;
      padding: 0.8rem 1.5rem;
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      gap: 1rem;
      flex-wrap: wrap;
      box-shadow: 0 15px 35px rgba(0,0,0,0.2);
      border: 1px solid rgba(255,255,255,0.1);
    }

    .search-item {
      display: flex;
      align-items: center;
      gap: 0.8rem;
      flex: 1;
      min-width: 170px;
      background: rgba(255,255,255,0.05);
      border-radius: 40px;
      padding: 0.4rem 1rem;
      border: 1px solid rgba(255,255,255,0.1);
      cursor: pointer;
      transition: 0.2s;
    }
    .search-item:hover {
      background: rgba(255,255,255,0.1);
      border-color: rgba(255,255,255,0.3);
    }
    .search-item .label {
      color: #94a3b8;
      font-size: 0.75rem;
      font-weight: 500;
      letter-spacing: 0.3px;
    }
    .search-item .value {
      color: white;
      font-weight: 600;
      font-size: 0.9rem;
      background: rgba(255,255,255,0.15);
      padding: 0.3rem 1rem;
      border-radius: 30px;
      flex: 1;
      text-align: center;
    }
    .search-btn-small {
      background: linear-gradient(95deg, #0066ff, #0044cc);
      color: white;
      border: none;
      padding: 0.7rem 2rem;
      border-radius: 40px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 8px 15px rgba(0,102,255,0.3);
    }
    .search-btn-small:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 20px rgba(0,102,255,0.4);
    }
    .explore-btn {
      background: transparent;
      color: white;
      border: 1px solid rgba(255,255,255,0.3);
      padding: 0.7rem 1.5rem;
      border-radius: 40px;
      font-weight: 500;
      cursor: pointer;
      transition: 0.2s;
    }
    .explore-btn:hover {
      background: rgba(255,255,255,0.1);
    }

    /* Dropdown Modal Styles */
    .dropdown-modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 1000;
      justify-content: center;
      align-items: center;
    }

    .dropdown-modal.active {
      display: flex;
    }

    .dropdown-modal-content {
      background: white;
      border-radius: 24px;
      padding: 2rem;
      max-width: 400px;
      width: 90%;
      max-height: 80vh;
      overflow-y: auto;
      box-shadow: 0 25px 50px rgba(0,0,0,0.3);
    }

    .dropdown-modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
    }

    .dropdown-modal-header h3 {
      font-size: 1.3rem;
      color: #0f172a;
    }

    .close-modal {
      font-size: 1.8rem;
      cursor: pointer;
      color: #64748b;
      transition: 0.2s;
    }

    .close-modal:hover {
      color: #0066ff;
    }

    .dropdown-item {
      padding: 1rem;
      border-bottom: 1px solid #f1f5f9;
      cursor: pointer;
      transition: 0.2s;
      font-weight: 500;
    }

    .dropdown-item:hover {
      background: #e6f0ff;
      color: #0066ff;
      border-radius: 8px;
    }

    .dropdown-item:last-child {
      border-bottom: none;
    }

    /* Guest Modal Specific */
    .guest-section {
      margin-bottom: 1.5rem;
      padding-bottom: 1.5rem;
      border-bottom: 1px solid #e2e8f0;
    }

    .guest-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1rem;
    }

    .guest-label {
      font-weight: 600;
    }

    .guest-controls {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .guest-btn {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      border: 1px solid #e2e8f0;
      background: white;
      font-size: 1.2rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: 0.2s;
    }

    .guest-btn:hover {
      background: #0066ff;
      color: white;
      border-color: #0066ff;
    }

    .guest-count {
      font-weight: 600;
      min-width: 30px;
      text-align: center;
    }

    .apply-btn {
      background: linear-gradient(95deg, #0066ff, #0044cc);
      color: white;
      border: none;
      padding: 1rem;
      border-radius: 40px;
      font-weight: 600;
      width: 100%;
      cursor: pointer;
      font-size: 1rem;
      margin-top: 1rem;
      transition: 0.2s;
    }

    .apply-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(0,102,255,0.3);
    }

    /* Calendar Styles */
    .month-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 1rem 0;
    }

    .calendar-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 5px;
      margin: 1rem 0;
    }

    .calendar-day {
      padding: 0.8rem;
      text-align: center;
      cursor: pointer;
      border-radius: 50%;
      transition: 0.2s;
    }

    .calendar-day:hover {
      background: #e6f0ff;
      color: #0066ff;
    }

    .calendar-day.selected {
      background: #0066ff;
      color: white;
    }

    /* Hero Section */
    .hero-section {
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), 
                  url('https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat;
      border-radius: 30px;
      padding: 5rem 3rem;
      margin: 2rem 0;
      color: white;
      position: relative;
      overflow: hidden;
    }
    .hero-section::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100px;
      background: linear-gradient(to top, rgba(0,0,0,0.3), transparent);
    }
    .hero-section h1 {
      font-size: 4rem;
      font-weight: 800;
      margin-bottom: 0.5rem;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }
    .hero-section p {
      font-size: 1.3rem;
      opacity: 0.95;
      font-weight: 300;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    /* Tabs */
    .packages-tabs {
      display: flex;
      gap: 2rem;
      border-bottom: 2px solid #e2e8f0;
      padding-bottom: 0.8rem;
      margin: 2rem 0 1.5rem;
      flex-wrap: wrap;
    }
    .package-tab {
      padding: 0.5rem 0;
      font-weight: 600;
      color: #64748b;
      cursor: pointer;
      border-bottom: 3px solid transparent;
      white-space: nowrap;
      transition: 0.2s;
      font-size: 0.95rem;
    }
    .package-tab.active {
      color: #0066ff;
      border-bottom-color: #0066ff;
    }
    .package-tab:hover {
      color: #0066ff;
    }

    /* Main Content Grid */
    .main-content {
      display: grid;
      grid-template-columns: 300px 1fr;
      gap: 2rem;
      margin: 2rem 0;
    }

    /* Filters Sidebar */
    .filters-sidebar {
      background: white;
      border-radius: 24px;
      padding: 1.8rem;
      height: fit-content;
      box-shadow: 0 8px 25px rgba(0,0,0,0.05);
      border: 1px solid #edf2f7;
    }

    .filter-section {
      padding: 1.5rem 0;
      border-bottom: 1px solid #edf2f7;
    }
    .filter-section:last-child {
      border-bottom: none;
      padding-bottom: 0.5rem;
    }
    .filter-title {
      font-weight: 700;
      margin-bottom: 1.2rem;
      color: #0f172a;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 1rem;
    }
    .filter-title i {
      color: #94a3b8;
      cursor: pointer;
      font-size: 0.9rem;
    }

    .duration-btns {
      display: flex;
      gap: 1rem;
    }
    .duration-btn {
      background: #f1f5f9;
      padding: 0.6rem 1.8rem;
      border-radius: 40px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
      color: #475569;
      border: 1px solid transparent;
    }
    .duration-btn:hover {
      background: #e2e8f0;
    }
    .duration-btn.active {
      background: #0066ff;
      color: white;
    }

    .filter-option {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 1rem;
      font-size: 0.9rem;
    }
    .filter-option input[type="checkbox"] {
      width: 18px;
      height: 18px;
      accent-color: #0066ff;
    }
    .filter-count {
      color: #94a3b8;
      margin-left: auto;
      font-size: 0.85rem;
    }

    .budget-slider {
      margin: 1.5rem 0 1rem;
    }
    .budget-input {
      width: 100%;
      height: 5px;
      border-radius: 10px;
      background: #e2e8f0;
      accent-color: #0066ff;
    }
    .budget-values {
      display: flex;
      justify-content: space-between;
      margin: 0.8rem 0;
      color: #0066ff;
      font-weight: 600;
      font-size: 0.9rem;
    }

    .price-checkboxes {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 0.8rem;
      margin-top: 1rem;
    }

    /* Date Range */
    .date-range {
      background: #f8fafc;
      border-radius: 16px;
      padding: 1.2rem;
    }
    .date-item {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1rem;
    }
    .date-item .label {
      color: #64748b;
      font-size: 0.8rem;
      min-width: 90px;
      font-weight: 500;
    }
    .date-item .value {
      font-weight: 600;
      color: #0f172a;
      font-size: 0.9rem;
    }

    /* Right Side */
    .results-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .results-tabs {
      display: flex;
      gap: 0.8rem;
      flex-wrap: wrap;
    }
    .result-tab {
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      font-weight: 500;
      cursor: pointer;
      background: #f1f5f9;
      color: #475569;
      transition: 0.2s;
      font-size: 0.9rem;
    }
    .result-tab.active {
      background: #0066ff;
      color: white;
    }
    .sort-dropdown {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      background: white;
      padding: 0.3rem 1rem 0.3rem 1.2rem;
      border-radius: 40px;
      border: 1px solid #e2e8f0;
    }
    .sort-dropdown span {
      color: #64748b;
      font-size: 0.9rem;
    }
    .sort-dropdown select {
      padding: 0.4rem 0.5rem;
      border-radius: 30px;
      border: none;
      background: transparent;
      font-weight: 600;
      color: #0f172a;
      outline: none;
    }

    /* Package Cards */
    .packages-grid {
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }

    .package-card {
      background: white;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0,0,0,0.05);
      border: 1px solid #edf2f7;
      display: flex;
      transition: all 0.3s ease;
    }
    .package-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 35px rgba(0,102,255,0.1);
      border-color: #0066ff20;
    }

    .package-img {
      width: 280px;
      background-size: cover;
      background-position: center;
      position: relative;
    }
    .package-badge {
      position: absolute;
      top: 15px;
      left: 15px;
      background: linear-gradient(135deg, #f97316, #f59e0b);
      color: white;
      padding: 0.4rem 1.2rem;
      border-radius: 40px;
      font-size: 0.8rem;
      font-weight: 700;
      box-shadow: 0 4px 10px rgba(249,115,22,0.3);
    }
    .duration-badge {
      position: absolute;
      bottom: 15px;
      left: 15px;
      background: rgba(0,0,0,0.8);
      color: white;
      padding: 0.4rem 1.2rem;
      border-radius: 40px;
      font-size: 0.8rem;
      font-weight: 600;
      backdrop-filter: blur(5px);
    }

    .package-info {
      padding: 1.8rem;
      flex: 1;
    }
    .package-title {
      font-weight: 700;
      font-size: 1.3rem;
      margin-bottom: 0.5rem;
      color: #0f172a;
    }
    .package-location {
      color: #64748b;
      font-size: 0.9rem;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .package-location i {
      color: #0066ff;
    }

    .features-list {
      display: flex;
      flex-wrap: wrap;
      gap: 0.8rem;
      margin: 1.2rem 0;
    }
    .feature-item {
      background: #f8fafc;
      padding: 0.4rem 1.2rem;
      border-radius: 40px;
      font-size: 0.8rem;
      color: #475569;
      display: flex;
      align-items: center;
      gap: 6px;
      border: 1px solid #edf2f7;
    }
    .feature-item i {
      color: #0066ff;
      font-size: 0.7rem;
    }

    .package-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 1.5rem;
    }
    .price {
      font-weight: 800;
      font-size: 1.6rem;
      color: #0066ff;
      line-height: 1.2;
    }
    .price small {
      font-size: 0.8rem;
      color: #64748b;
      font-weight: 500;
    }
    .price-total {
      color: #64748b;
      font-size: 0.8rem;
      margin-top: 0.2rem;
    }
    .view-details-btn {
      background: linear-gradient(95deg, #0066ff, #0044cc);
      color: white;
      border: none;
      padding: 0.8rem 2.2rem;
      border-radius: 40px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 8px 15px rgba(0,102,255,0.2);
      font-size: 0.9rem;
    }
    .view-details-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 20px rgba(0,102,255,0.3);
    }

    .customise-trip {
      text-align: right;
      margin: 2rem 0;
      color: #0066ff;
      font-weight: 600;
      cursor: pointer;
      display: inline-block;
      padding: 0.5rem 1.5rem;
      background: white;
      border-radius: 40px;
      border: 1px solid #0066ff20;
      transition: 0.2s;
    }
    .customise-trip:hover {
      background: #0066ff;
      color: white;
      border-color: #0066ff;
    }
    .customise-trip i {
      margin-right: 0.5rem;
    }

    /* Info Cards */
    .info-cards {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
      margin: 2.5rem 0;
    }
    .info-card {
      background: white;
      border-radius: 20px;
      padding: 1.5rem;
      display: flex;
      align-items: center;
      gap: 1.2rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.03);
      border: 1px solid #edf2f7;
      transition: 0.2s;
    }
    .info-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(0,102,255,0.08);
    }
    .info-card i {
      font-size: 2.5rem;
      color: #0066ff;
      background: #e6f0ff;
      padding: 1rem;
      border-radius: 50%;
    }
    .info-card h4 {
      font-weight: 700;
      margin-bottom: 0.3rem;
    }
    .info-card p {
      color: #64748b;
      font-size: 0.9rem;
    }
    .premium-badge {
      background: linear-gradient(135deg, #f59e0b, #f97316);
      color: white;
      padding: 0.3rem 1rem;
      border-radius: 30px;
      font-weight: 700;
      font-size: 0.75rem;
      display: inline-block;
      margin-top: 0.5rem;
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
      grid-template-columns: repeat(auto-fit, minmax(160px,1fr));
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
    .footer-col ul { list-style: none; }
    .footer-col li { margin-bottom: 0.7rem; }
    .footer-col a { 
      color: #94a3b8; 
      text-decoration: none; 
      font-size: 0.85rem;
      transition: 0.2s;
    }
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
      transition: 0.2s;
    }
    .social-icons a:hover {
      background: #0066ff;
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
      .main-content {
        grid-template-columns: 1fr;
      }
      .package-card {
        flex-direction: column;
      }
      .package-img {
        width: 100%;
        height: 250px;
      }
      .hero-section h1 {
        font-size: 3rem;
      }
    }
    @media (max-width: 768px) {
      .sticky-search {
        flex-direction: column;
        align-items: stretch;
      }
      .info-cards {
        grid-template-columns: 1fr;
      }
      .hero-section {
        padding: 3rem 1.5rem;
      }
      .hero-section h1 {
        font-size: 2.5rem;
      }
    }
  </style>
</head>
<body>

  <!-- INCLUDE HEADER -->
  <?php include 'header.php'; ?>

  <div class="packages-container">

    <!-- ===== STICKY SEARCH BAR WITH SELECT OPTIONS ===== -->
    <div class="sticky-search" id="stickySearch">
      <div class="search-item" id="fromSelector">
        <span class="label">STARTING FROM</span>
        <span class="value" id="stickyFrom">New Delhi</span>
      </div>
      <div class="search-item" id="toSelector">
        <span class="label">GOING TO</span>
        <span class="value" id="stickyTo">Goa</span>
      </div>
      <div class="search-item" id="dateSelector">
        <span class="label">STARTING DATE</span>
        <span class="value" id="stickyDate">19 Mar 2026</span>
      </div>
      <div class="search-item" id="guestsSelector">
        <span class="label">ROOMS & GUESTS</span>
        <span class="value" id="stickyGuests">2 Adults, 1 Room</span>
      </div>
      <button class="search-btn-small" id="modifySearch"><i class="fas fa-search"></i> SEARCH</button>
      <button class="explore-btn">EXPLORE</button>
    </div>

    <!-- FROM CITY MODAL -->
    <div class="dropdown-modal" id="fromModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3>Select Departure City</h3>
          <span class="close-modal" id="closeFromModal">&times;</span>
        </div>
        <div class="dropdown-item" data-city="New Delhi">New Delhi</div>
        <div class="dropdown-item" data-city="Mumbai">Mumbai</div>
        <div class="dropdown-item" data-city="Bangalore">Bangalore</div>
        <div class="dropdown-item" data-city="Chennai">Chennai</div>
        <div class="dropdown-item" data-city="Kolkata">Kolkata</div>
        <div class="dropdown-item" data-city="Hyderabad">Hyderabad</div>
        <div class="dropdown-item" data-city="Pune">Pune</div>
        <div class="dropdown-item" data-city="Ahmedabad">Ahmedabad</div>
        <div class="dropdown-item" data-city="Jaipur">Jaipur</div>
      </div>
    </div>

    <!-- TO CITY MODAL -->
    <div class="dropdown-modal" id="toModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3>Select Destination City</h3>
          <span class="close-modal" id="closeToModal">&times;</span>
        </div>
        <div class="dropdown-item" data-city="Goa">Goa</div>
        <div class="dropdown-item" data-city="Kerala">Kerala</div>
        <div class="dropdown-item" data-city="Manali">Manali</div>
        <div class="dropdown-item" data-city="Shimla">Shimla</div>
        <div class="dropdown-item" data-city="Ladakh">Ladakh</div>
        <div class="dropdown-item" data-city="Rajasthan">Rajasthan</div>
        <div class="dropdown-item" data-city="Thailand">Thailand</div>
        <div class="dropdown-item" data-city="Dubai">Dubai</div>
        <div class="dropdown-item" data-city="Maldives">Maldives</div>
        <div class="dropdown-item" data-city="Bali">Bali</div>
        <div class="dropdown-item" data-city="Singapore">Singapore</div>
      </div>
    </div>

    <!-- DATE MODAL -->
    <div class="dropdown-modal" id="dateModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3>Select Departure Date</h3>
          <span class="close-modal" id="closeDateModal">&times;</span>
        </div>
        <div class="month-header">
          <button class="guest-btn" id="prevMonth">&lt;</button>
          <span id="currentMonth">March 2026</span>
          <button class="guest-btn" id="nextMonth">&gt;</button>
        </div>
        <div class="calendar-grid" id="calendarGrid">
          <!-- Calendar will be generated by JS -->
        </div>
      </div>
    </div>

    <!-- GUESTS MODAL -->
    <div class="dropdown-modal" id="guestsModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3>Select Rooms & Guests</h3>
          <span class="close-modal" id="closeGuestsModal">&times;</span>
        </div>

        <!-- Adults -->
        <div class="guest-section">
          <div class="guest-row">
            <span class="guest-label">Adults <span style="font-size:0.7rem; color:#64748b;">(16+ Years)</span></span>
            <div class="guest-controls">
              <button class="guest-btn" id="adultMinus">-</button>
              <span class="guest-count" id="adultCount">2</span>
              <button class="guest-btn" id="adultPlus">+</button>
            </div>
          </div>
        </div>

        <!-- Children -->
        <div class="guest-section">
          <div class="guest-row">
            <span class="guest-label">Children <span style="font-size:0.7rem; color:#64748b;">(0-17 Years)</span></span>
            <div class="guest-controls">
              <button class="guest-btn" id="childMinus">-</button>
              <span class="guest-count" id="childCount">0</span>
              <button class="guest-btn" id="childPlus">+</button>
            </div>
          </div>
        </div>

        <!-- Rooms -->
        <div class="guest-section">
          <div class="guest-row">
            <span class="guest-label">Rooms</span>
            <div class="guest-controls">
              <button class="guest-btn" id="roomMinus">-</button>
              <span class="guest-count" id="roomCount">1</span>
              <button class="guest-btn" id="roomPlus">+</button>
            </div>
          </div>
        </div>

        <button class="apply-btn" id="applyGuests">APPLY</button>
      </div>
    </div>

    <!-- Hero Section -->
    <div class="hero-section">
      <h1>Goa Packages</h1>
      <p>Experience pristine beaches & breathtaking sunsets</p>
    </div>

    <!-- Tabs -->
    <div class="packages-tabs">
      <span class="package-tab active" data-tab="all">ALL PACKAGES (87)</span>
      <span class="package-tab" data-tab="honeymoon">HONEYMOON (7)</span>
      <span class="package-tab" data-tab="beach">BEACH SIDE STAYS (6)</span>
      <span class="package-tab" data-tab="hotel">HOTEL DEALS (19)</span>
      <span class="package-tab" data-tab="north">NORTH GOA (12)</span>
      <span class="package-tab" data-tab="south">SOUTH GOA (8)</span>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <!-- Left Sidebar Filters -->
      <div class="filters-sidebar">
        <!-- Duration -->
        <div class="filter-section">
          <div class="filter-title">
            Duration (in Nights)
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="duration-btns">
            <span class="duration-btn active">1N</span>
            <span class="duration-btn">2N</span>
            <span class="duration-btn">3N</span>
            <span class="duration-btn">4N</span>
            <span class="duration-btn">5N+</span>
          </div>
        </div>

        <!-- Flights -->
        <div class="filter-section">
          <div class="filter-title">Flights</div>
          <div class="filter-option">
            <input type="checkbox" checked> With Flight <span class="filter-count">(75)</span>
          </div>
          <div class="filter-option">
            <input type="checkbox"> Without Flight <span class="filter-count">(87)</span>
          </div>
        </div>

        <!-- Budget -->
        <div class="filter-section">
          <div class="filter-title">Budget (per person)</div>
          <div class="budget-slider">
            <input type="range" min="0" max="75000" value="30000" class="budget-input" id="budgetSlider">
            <div class="budget-values">
              <span>₹0</span>
              <span>₹37,500</span>
              <span>₹75,000</span>
            </div>
          </div>
          <div class="price-checkboxes">
            <div class="filter-option"><input type="checkbox"> &lt; ₹15,000</div>
            <div class="filter-option"><input type="checkbox"> ₹15k - ₹20k</div>
            <div class="filter-option"><input type="checkbox"> ₹20k - ₹30k</div>
            <div class="filter-option"><input type="checkbox"> &gt; ₹30,000</div>
          </div>
        </div>

        <!-- Date Range -->
        <div class="filter-section">
          <div class="filter-title">Date Range</div>
          <div class="date-range">
            <div class="date-item">
              <span class="label">FROM</span>
              <span class="value" id="filterFrom">New Delhi</span>
            </div>
            <div class="date-item">
              <span class="label">TO</span>
              <span class="value" id="filterTo">Goa</span>
            </div>
            <div class="date-item">
              <span class="label">DATE</span>
              <span class="value" id="filterDate">Sat, 10 Jan 2026</span>
            </div>
          </div>
        </div>

        <!-- Hotel Category -->
        <div class="filter-section">
          <div class="filter-title">Hotel Category</div>
          <div class="filter-option"><input type="checkbox"> 3 Star <span class="filter-count">(23)</span></div>
          <div class="filter-option"><input type="checkbox"> 4 Star <span class="filter-count">(45)</span></div>
          <div class="filter-option"><input type="checkbox"> 5 Star <span class="filter-count">(19)</span></div>
          <div class="filter-option"><input type="checkbox"> Resort <span class="filter-count">(31)</span></div>
        </div>
      </div>

      <!-- Right Side - Package Cards -->
      <div>
        <!-- Results Header -->
        <div class="results-header">
          <div class="results-tabs" id="resultsTabs">
            <span class="result-tab active">ALL PACKAGES (87)</span>
            <span class="result-tab">HONEYMOON (7)</span>
            <span class="result-tab">BEACH SIDE (6)</span>
            <span class="result-tab">HOTEL DEALS (19)</span>
            <span class="result-tab">NORTH GOA (12)</span>
          </div>
          <div class="sort-dropdown">
            <span>Sorted by:</span>
            <select id="sortSelect">
              <option>Popular</option>
              <option>Price Low to High</option>
              <option>Price High to Low</option>
              <option>Duration</option>
            </select>
          </div>
        </div>

        <!-- Package Cards Grid -->
        <div class="packages-grid" id="packagesGrid">
          <!-- Packages will be dynamically loaded here -->
        </div>

        <!-- Customise my trip -->
        <div class="customise-trip" id="customiseTrip">
          <i class="fas fa-plus-circle"></i> Customise my trip
        </div>

        <!-- Info Cards -->
        <div class="info-cards">
          <div class="info-card">
            <i class="fas fa-cloud-sun"></i>
            <div>
              <h4>Weather Information</h4>
              <p>Sunny, 32°C in Goa • Perfect beach weather</p>
            </div>
          </div>
          <div class="info-card">
            <i class="fas fa-crown"></i>
            <div>
              <h4>MMT Premium</h4>
              <p>Get exclusive benefits & free upgrades</p>
              <span class="premium-badge">PREMIUM</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include '../includes/footer.php' ?>

  <script>
    // ===== PACKAGES DATA ARRAY =====
    const packagesData = [
      {
        id: 1,
        title: "Romantic Beachfront Goa Retreat",
        duration: "4N/5D",
        nights: "4N Goa",
        image: "https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=400",
        badge: "HOTEL DEAL",
        features: ["3 Star Hotel", "Selected Meals", "North Goa Sightseeing"],
        price: 8833,
        totalPrice: 17666,
        category: "hotel"
      },
      {
        id: 2,
        title: "Grand Horizon Luxury Goa",
        duration: "3N/4D",
        nights: "3N Goa",
        image: "https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=400",
        badge: "LUXURY",
        features: ["4 Star Hotel", "1 Activity", "Airport Pickup & Drop", "Selected Meals"],
        price: 9491,
        totalPrice: 18982,
        category: "luxury"
      },
      {
        id: 3,
        title: "Sunset Beach Honeymoon Special",
        duration: "5N/6D",
        nights: "5N Goa",
        image: "https://images.pexels.com/photos/161758/governor-s-mansion-montgomery-alabama-grand-staircase-161758.jpeg?auto=compress&cs=tinysrgb&w=400",
        badge: "HONEYMOON",
        features: ["5 Star Hotel", "Candlelight Dinner", "Sunset Cruise", "Spa Session"],
        price: 15299,
        totalPrice: 30598,
        category: "honeymoon"
      },
      {
        id: 4,
        title: "Goa Family Fun Package",
        duration: "4N/5D",
        nights: "4N Goa",
        image: "https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=400",
        badge: "FAMILY",
        features: ["3 Star Hotel", "All Meals", "Water Park Tickets", "Sightseeing"],
        price: 7299,
        totalPrice: 29196,
        category: "family"
      },
      {
        id: 5,
        title: "North Goa Adventure Tour",
        duration: "3N/4D",
        nights: "3N Goa",
        image: "https://images.pexels.com/photos/2034335/pexels-photo-2034335.jpeg?auto=compress&cs=tinysrgb&w=400",
        badge: "ADVENTURE",
        features: ["2 Star Hotel", "Breakfast", "Water Sports", "Nightlife Tour"],
        price: 5499,
        totalPrice: 10998,
        category: "adventure"
      }
    ];

    // ===== LOAD DATA FROM localStorage =====
    window.addEventListener('load', function() {
      // Get data from localStorage
      const fromCity = localStorage.getItem('holidayFrom') || 'New Delhi';
      const toCity = localStorage.getItem('holidayTo') || 'Goa';
      const date = localStorage.getItem('holidayDate') || '19 Mar 2026';
      const guests = localStorage.getItem('holidayGuests') || '2 Adults, 1 Room';

      // Update sticky search bar
      document.getElementById('stickyFrom').textContent = fromCity;
      document.getElementById('stickyTo').textContent = toCity;
      document.getElementById('stickyDate').textContent = date;
      document.getElementById('stickyGuests').textContent = guests;

      // Update filters
      document.getElementById('filterFrom').textContent = fromCity;
      document.getElementById('filterTo').textContent = toCity;
      
      // Format date for filter
      const dateObj = new Date(date);
      const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
      const dayName = days[dateObj.getDay()] || 'Sat';
      document.getElementById('filterDate').textContent = `${dayName}, ${date}`;

      // Update hero section
      document.querySelector('.hero-section h1').textContent = `${toCity} Packages`;
      
      // Render packages
      renderPackages(packagesData);
    });

    // ===== RENDER PACKAGES =====
    function renderPackages(packages) {
      const grid = document.getElementById('packagesGrid');
      grid.innerHTML = '';

      packages.forEach(pkg => {
        const featuresHTML = pkg.features.map(f => 
          `<span class="feature-item"><i class="fas fa-check-circle"></i> ${f}</span>`
        ).join('');

        const card = `
          <div class="package-card" data-category="${pkg.category}">
            <div class="package-img" style="background-image: url('${pkg.image}')">
              <span class="package-badge">${pkg.badge}</span>
              <span class="duration-badge">${pkg.duration}</span>
            </div>
            <div class="package-info">
              <h3 class="package-title">${pkg.title}</h3>
              <div class="package-location">
                <i class="fas fa-map-marker-alt"></i> ${pkg.nights}
              </div>
              <div class="features-list">
                ${featuresHTML}
              </div>
              <div class="package-footer">
                <div>
                  <div class="price">₹${pkg.price.toLocaleString()} <small>/ Person</small></div>
                  <div class="price-total">Total: ₹${pkg.totalPrice.toLocaleString()}</div>
                </div>
                <button class="view-details-btn" onclick="alert('Viewing ${pkg.title}')">VIEW DETAILS</button>
              </div>
            </div>
          </div>
        `;
        grid.innerHTML += card;
      });
    }

    // ===== TAB SWITCHING =====
    const tabs = document.querySelectorAll('.package-tab');
    tabs.forEach(tab => {
      tab.addEventListener('click', function() {
        tabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        
        const tabName = this.textContent.split(' ')[0];
        if (tabName === 'ALL') {
          renderPackages(packagesData);
        } else if (tabName === 'HONEYMOON') {
          const filtered = packagesData.filter(p => p.category === 'honeymoon');
          renderPackages(filtered);
        } else if (tabName === 'HOTEL') {
          const filtered = packagesData.filter(p => p.category === 'hotel');
          renderPackages(filtered);
        } else {
          renderPackages(packagesData);
        }
      });
    });

    // ===== RESULT TABS SWITCHING =====
    const resultTabs = document.querySelectorAll('.result-tab');
    resultTabs.forEach(tab => {
      tab.addEventListener('click', function() {
        resultTabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');
      });
    });

    // ===== SORTING =====
    document.getElementById('sortSelect').addEventListener('change', function() {
      const sortBy = this.value;
      let sorted = [...packagesData];
      
      if (sortBy === 'Price Low to High') {
        sorted.sort((a, b) => a.price - b.price);
      } else if (sortBy === 'Price High to Low') {
        sorted.sort((a, b) => b.price - a.price);
      }
      
      renderPackages(sorted);
    });

    // ===== BUDGET SLIDER =====
    const slider = document.getElementById('budgetSlider');
    slider.addEventListener('input', function() {
      const val = parseInt(this.value);
      const budgetValues = document.querySelector('.budget-values');
      if (val < 25000) {
        budgetValues.innerHTML = '<span>₹0</span><span>₹25,000</span><span>₹75,000</span>';
      } else if (val < 50000) {
        budgetValues.innerHTML = '<span>₹0</span><span>₹50,000</span><span>₹75,000</span>';
      } else {
        budgetValues.innerHTML = '<span>₹0</span><span>₹75,000</span><span>₹75,000</span>';
      }
    });

    // ===== FILTER CHECKBOXES =====
    document.querySelectorAll('.filter-option input[type="checkbox"]').forEach(cb => {
      cb.addEventListener('change', function() {
        const checkedCount = document.querySelectorAll('.filter-option input[type="checkbox"]:checked').length;
        if (checkedCount > 0) {
          const filtered = packagesData.filter(p => p.price < 10000);
          renderPackages(filtered);
        } else {
          renderPackages(packagesData);
        }
      });
    });

    // ===== DURATION BUTTONS =====
    document.querySelectorAll('.duration-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.duration-btn').forEach(b => {
          b.classList.remove('active');
          b.style.background = '#f1f5f9';
          b.style.color = '#475569';
        });
        this.classList.add('active');
        this.style.background = '#0066ff';
        this.style.color = 'white';
      });
    });

    // ===== SELECTOR MODALS =====
    // From City Modal
    const fromSelector = document.getElementById('fromSelector');
    const fromModal = document.getElementById('fromModal');
    const closeFromModal = document.getElementById('closeFromModal');
    const stickyFrom = document.getElementById('stickyFrom');

    fromSelector.addEventListener('click', () => {
      fromModal.classList.add('active');
    });

    closeFromModal.addEventListener('click', () => {
      fromModal.classList.remove('active');
    });

    document.querySelectorAll('#fromModal .dropdown-item').forEach(item => {
      item.addEventListener('click', function() {
        const city = this.dataset.city;
        stickyFrom.textContent = city;
        localStorage.setItem('holidayFrom', city);
        document.getElementById('filterFrom').textContent = city;
        fromModal.classList.remove('active');
      });
    });

    // To City Modal
    const toSelector = document.getElementById('toSelector');
    const toModal = document.getElementById('toModal');
    const closeToModal = document.getElementById('closeToModal');
    const stickyTo = document.getElementById('stickyTo');

    toSelector.addEventListener('click', () => {
      toModal.classList.add('active');
    });

    closeToModal.addEventListener('click', () => {
      toModal.classList.remove('active');
    });

    document.querySelectorAll('#toModal .dropdown-item').forEach(item => {
      item.addEventListener('click', function() {
        const city = this.dataset.city;
        stickyTo.textContent = city;
        localStorage.setItem('holidayTo', city);
        document.querySelector('.hero-section h1').textContent = `${city} Packages`;
        document.getElementById('filterTo').textContent = city;
        toModal.classList.remove('active');
      });
    });

    // Date Modal
    const dateSelector = document.getElementById('dateSelector');
    const dateModal = document.getElementById('dateModal');
    const closeDateModal = document.getElementById('closeDateModal');
    const stickyDate = document.getElementById('stickyDate');
    let currentMonth = 2; // March
    let currentYear = 2026;
    let selectedDay = 19;

    dateSelector.addEventListener('click', () => {
      dateModal.classList.add('active');
      generateCalendar();
    });

    closeDateModal.addEventListener('click', () => {
      dateModal.classList.remove('active');
    });

    function generateCalendar() {
      const calendarGrid = document.getElementById('calendarGrid');
      const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
      document.getElementById('currentMonth').textContent = `${monthNames[currentMonth]} ${currentYear}`;
      
      let html = '';
      const days = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];
      
      // Add day headers
      days.forEach(day => {
        html += `<div style="font-weight:600; text-align:center;">${day}</div>`;
      });
      
      // Get first day of month
      const firstDay = new Date(currentYear, currentMonth, 1).getDay();
      const adjustedFirstDay = firstDay === 0 ? 6 : firstDay - 1;
      
      // Add empty cells
      for (let i = 0; i < adjustedFirstDay; i++) {
        html += '<div></div>';
      }
      
      // Add days
      const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
      for (let i = 1; i <= daysInMonth; i++) {
        const isSelected = (i === selectedDay && currentMonth === 2 && currentYear === 2026) ? 'selected' : '';
        html += `<div class="calendar-day ${isSelected}" onclick="selectDate(${i})">${i}</div>`;
      }
      
      calendarGrid.innerHTML = html;
    }

    window.selectDate = (day) => {
      selectedDay = day;
      const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
      const month = monthNames[currentMonth];
      const dateStr = `${day} ${month} ${currentYear}`;
      stickyDate.textContent = dateStr;
      
      // Update day name for filter
      const dateObj = new Date(currentYear, currentMonth, day);
      const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
      const dayName = days[dateObj.getDay()];
      document.getElementById('filterDate').textContent = `${dayName}, ${dateStr}`;
      
      localStorage.setItem('holidayDate', dateStr);
      dateModal.classList.remove('active');
    };

    document.getElementById('prevMonth').addEventListener('click', () => {
      if (currentMonth === 0) {
        currentMonth = 11;
        currentYear--;
      } else {
        currentMonth--;
      }
      generateCalendar();
    });

    document.getElementById('nextMonth').addEventListener('click', () => {
      if (currentMonth === 11) {
        currentMonth = 0;
        currentYear++;
      } else {
        currentMonth++;
      }
      generateCalendar();
    });

    // Guests Modal
    const guestsSelector = document.getElementById('guestsSelector');
    const guestsModal = document.getElementById('guestsModal');
    const closeGuestsModal = document.getElementById('closeGuestsModal');
    const stickyGuests = document.getElementById('stickyGuests');

    let adults = 2;
    let children = 0;
    let rooms = 1;

    guestsSelector.addEventListener('click', () => {
      guestsModal.classList.add('active');
      // Set current values
      document.getElementById('adultCount').textContent = adults;
      document.getElementById('childCount').textContent = children;
      document.getElementById('roomCount').textContent = rooms;
    });

    closeGuestsModal.addEventListener('click', () => {
      guestsModal.classList.remove('active');
    });

    // Adult controls
    document.getElementById('adultPlus').addEventListener('click', () => {
      if (adults < 10) {
        adults++;
        document.getElementById('adultCount').textContent = adults;
      }
    });
    document.getElementById('adultMinus').addEventListener('click', () => {
      if (adults > 1) {
        adults--;
        document.getElementById('adultCount').textContent = adults;
      }
    });

    // Child controls
    document.getElementById('childPlus').addEventListener('click', () => {
      if (children < 5) {
        children++;
        document.getElementById('childCount').textContent = children;
      }
    });
    document.getElementById('childMinus').addEventListener('click', () => {
      if (children > 0) {
        children--;
        document.getElementById('childCount').textContent = children;
      }
    });

    // Room controls
    document.getElementById('roomPlus').addEventListener('click', () => {
      if (rooms < 5) {
        rooms++;
        document.getElementById('roomCount').textContent = rooms;
      }
    });
    document.getElementById('roomMinus').addEventListener('click', () => {
      if (rooms > 1) {
        rooms--;
        document.getElementById('roomCount').textContent = rooms;
      }
    });

    // Apply guests
    document.getElementById('applyGuests').addEventListener('click', () => {
      const guestsText = `${adults} Adult${adults > 1 ? 's' : ''}${children > 0 ? `, ${children} Child${children > 1 ? 'ren' : ''}` : ''}, ${rooms} Room${rooms > 1 ? 's' : ''}`;
      stickyGuests.textContent = guestsText;
      localStorage.setItem('holidayGuests', guestsText);
      guestsModal.classList.remove('active');
    });

    // Close modals when clicking outside
    window.addEventListener('click', (e) => {
      if (e.target === fromModal) fromModal.classList.remove('active');
      if (e.target === toModal) toModal.classList.remove('active');
      if (e.target === dateModal) dateModal.classList.remove('active');
      if (e.target === guestsModal) guestsModal.classList.remove('active');
    });

    // ===== MODIFY SEARCH =====
    document.getElementById('modifySearch').addEventListener('click', function() {
      window.location.href = 'holidays.php';
    });

    // ===== CUSTOMISE TRIP =====
    document.getElementById('customiseTrip').addEventListener('click', function() {
      alert('Customise your trip - Our travel experts will help you create the perfect package!');
    });
  </script>
</body>
</html>