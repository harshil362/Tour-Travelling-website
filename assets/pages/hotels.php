<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotels - Travel Go | Book Hotels, Resorts & Homestays</title>
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
    .menu-items a:hover { color: #2563eb; }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 1.8rem;
    }
    
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

    /* Hotel Page Specific Styles */
    .hotel-container {
      max-width: 1300px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    /* Top Action Bar - UPDATED */
    .action-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      flex-wrap: wrap;
      gap: 1rem;
      background: white;
      padding: 1rem 1.5rem;
      border-radius: 60px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
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
      transition: 0.2s;
    }
    .list-property:hover {
      background: #2563eb;
      color: white;
    }
    .list-property:hover i {
      color: white;
    }

    .grow-business {
      font-size: 0.85rem;
      color: #64748b;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .action-links {
      display: flex;
      align-items: center;
      gap: 1.5rem;
    }
    .action-links a {
      text-decoration: none;
      color: #334155;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .action-links a i {
      color: #2563eb;
    }

    /* Upto 4 Rooms Badge */
    .upto-rooms {
      display: flex;
      align-items: center;
      gap: 10px;
      background: #f1f5f9;
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
    }
    .upto-rooms span {
      font-weight: 600;
      color: #2563eb;
    }
    .group-deals {
      display: flex;
      align-items: center;
      gap: 8px;
      background: #2563eb;
      color: white;
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      font-size: 0.9rem;
    }
    .badge-new {
      background: #f97316;
      color: white;
      font-size: 0.7rem;
      padding: 2px 8px;
      border-radius: 20px;
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

    /* Hotel Search Card */
    .hotel-search-card {
      background: white;
      border-radius: 24px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.08);
      padding: 2rem;
      margin: 2rem 0;
    }

    .search-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .search-header h3 {
      font-size: 1.2rem;
      color: #2563eb;
    }
    .list-property-link {
      color: #2563eb;
      font-weight: 500;
      cursor: pointer;
      text-decoration: underline;
    }

    /* Search Form */
    .hotel-search-form {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1.5fr auto;
      gap: 1rem;
      align-items: center;
    }

    .search-field {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 16px;
      padding: 0.8rem 1.2rem;
      cursor: pointer;
      transition: 0.2s;
    }
    .search-field:hover {
      border-color: #2563eb;
    }

    .search-field label {
      font-size: 0.7rem;
      text-transform: uppercase;
      color: #64748b;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .search-field input, .search-field .field-value {
      width: 100%;
      border: none;
      background: transparent;
      font-weight: 500;
      font-size: 0.95rem;
      outline: none;
      color: #0f172a;
      cursor: pointer;
    }

    .price-range-selector {
      margin-top: 1rem;
      font-size: 0.85rem;
      color: #2563eb;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }
    .price-tag {
      background: #f1f5f9;
      padding: 0.4rem 1rem;
      border-radius: 30px;
      cursor: pointer;
      transition: 0.2s;
    }
    .price-tag:hover, .price-tag.active {
      background: #2563eb;
      color: white;
    }

    .search-btn-hotel {
      background: #2563eb;
      color: white;
      border: none;
      padding: 1rem 2rem;
      border-radius: 16px;
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      transition: 0.2s;
      white-space: nowrap;
      height: fit-content;
    }
    .search-btn-hotel:hover {
      background: #1d4ed8;
      transform: scale(1.02);
    }

    .last-search {
      margin-top: 1.5rem;
      font-size: 0.9rem;
      color: #64748b;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .last-search span {
      color: #2563eb;
      font-weight: 600;
      cursor: pointer;
      background: #e6f0ff;
      padding: 0.4rem 1.2rem;
      border-radius: 30px;
    }

    /* Modal for Rooms & Guests */
    .modal {
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

    .modal.active {
      display: flex;
    }

    .modal-content {
      background: white;
      border-radius: 24px;
      padding: 2rem;
      max-width: 450px;
      width: 90%;
      box-shadow: 0 30px 50px rgba(0,0,0,0.3);
    }

    .modal-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
    }
    .modal-header h3 {
      font-size: 1.3rem;
    }
    .close-modal {
      font-size: 1.8rem;
      cursor: pointer;
      color: #64748b;
    }

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
      background: #2563eb;
      color: white;
      border-color: #2563eb;
    }
    .guest-count {
      font-weight: 600;
      min-width: 30px;
      text-align: center;
    }

    .child-age-row {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-left: 2rem;
      margin-top: 0.5rem;
    }
    .child-age-select {
      padding: 0.4rem;
      border-radius: 8px;
      border: 1px solid #e2e8f0;
    }

    .pet-option {
      display: flex;
      align-items: center;
      gap: 10px;
      margin: 1.5rem 0;
    }
    .pet-option input {
      width: 18px;
      height: 18px;
    }

    .info-text {
      font-size: 0.8rem;
      color: #64748b;
      margin: 1rem 0;
      background: #f8fafc;
      padding: 0.8rem;
      border-radius: 12px;
    }

    .apply-btn {
      background: #2563eb;
      color: white;
      border: none;
      padding: 1rem;
      border-radius: 40px;
      font-weight: 600;
      width: 100%;
      cursor: pointer;
      font-size: 1rem;
    }
    .apply-btn:hover {
      background: #1d4ed8;
    }

    /* Date Picker Modal */
    .date-modal {
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
    .date-modal.active {
      display: flex;
    }
    .date-modal-content {
      background: white;
      border-radius: 24px;
      padding: 2rem;
      max-width: 500px;
      width: 90%;
    }
    .calendar-header {
      display: flex;
      justify-content: space-between;
      margin: 1rem 0;
    }
    .calendar-grid {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 5px;
    }
    .calendar-day {
      padding: 0.8rem;
      text-align: center;
      cursor: pointer;
      border-radius: 50%;
    }
    .calendar-day:hover {
      background: #e6f0ff;
    }
    .calendar-day.selected {
      background: #2563eb;
      color: white;
    }

    /* Rest of the styles remain same */
    .city-section {
      margin: 2.5rem 0;
    }
    .city-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
    }
    .city-header h3 {
      font-size: 1.5rem;
      font-weight: 700;
    }
    .city-header .dates {
      color: #2563eb;
      font-weight: 500;
      background: #e6f0ff;
      padding: 0.4rem 1.2rem;
      border-radius: 40px;
    }

    .hotel-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .hotel-item {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.04);
      border: 1px solid #edf2f7;
      display: flex;
      transition: 0.2s;
    }

    .hotel-item:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(37,99,235,0.1);
    }

    .hotel-img {
      width: 160px;
      min-height: 160px;
      background-size: cover;
      background-position: center;
      position: relative;
    }

    .hotel-img .rating {
      position: absolute;
      bottom: 10px;
      left: 10px;
      background: rgba(0,0,0,0.7);
      color: #ffd700;
      padding: 0.2rem 0.8rem;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: 600;
    }

    .hotel-info {
      padding: 1.2rem;
      flex: 1;
    }

    .hotel-name {
      font-weight: 700;
      font-size: 1.1rem;
      margin-bottom: 4px;
      color: #0f172a;
    }

    .hotel-location {
      font-size: 0.8rem;
      color: #64748b;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 4px;
    }

    .hotel-price {
      font-weight: 700;
      font-size: 1.3rem;
      color: #2563eb;
      margin: 10px 0 5px;
    }

    .hotel-price span {
      font-size: 0.8rem;
      color: #64748b;
      font-weight: 400;
    }

    .hotel-features {
      display: flex;
      gap: 1rem;
      font-size: 0.75rem;
      color: #475569;
    }

    .hotel-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
      margin: 2rem 0;
    }

    .hotel-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.04);
      border: 1px solid #edf2f7;
    }

    .hotel-card-img {
      height: 160px;
      background-size: cover;
      background-position: center;
    }

    .hotel-card-content {
      padding: 1.2rem;
    }

    .hotel-card-title {
      font-weight: 700;
      margin-bottom: 5px;
    }

    .hotel-card-price {
      font-weight: 700;
      color: #2563eb;
      font-size: 1.2rem;
    }

    .search-for-properties {
      text-align: center;
      margin: 3rem 0;
      font-size: 1.1rem;
      color: #64748b;
    }

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

    @media (max-width: 1024px) {
      .hotel-search-form {
        grid-template-columns: 1fr;
      }
      .hotel-grid {
        grid-template-columns: 1fr;
      }
      .hotel-row {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- INCLUDE HEADER -->
  <?php include 'header.php'; ?>

  <!-- Hotel Page Container -->
  <div class="hotel-container">

    <!-- Top Action Bar - UPDATED with proper styling -->
    <div class="action-bar">
      <div class="left-actions">
        <div class="list-property">
          <i class="fas fa-hotel"></i> List Your Property
        </div>
        <div class="grow-business">
          <i class="fas fa-chart-line"></i> Grow your business!
        </div>
      </div>
      <div class="action-links">
        <div class="upto-rooms">
          <i class="fas fa-layer-group"></i>
          <span>Upto 4 Rooms</span>
        </div>
        <div class="group-deals">
          <i class="fas fa-users"></i> Group Deals
          <span class="badge-new">New</span>
        </div>
      </div>
    </div>

    <!-- Main Tabs -->
    <div class="main-tabs">
      <div class="main-tab"><i class="fas fa-plane"></i> Flights</div>
      <div class="main-tab active"><i class="fas fa-hotel"></i> Hotels</div>
      <div class="main-tab"><i class="fas fa-home"></i> Villas & Homestays</div>
      <div class="main-tab"><i class="fas fa-layer-group"></i> Upto 4 Rooms</div>
      <div class="main-tab"><i class="fas fa-users"></i> Group Deals <span class="badge-new">New</span></div>
    </div>

    <!-- Hotel Search Card -->
    <div class="hotel-search-card">
      <div class="search-header">
        <h3><i class="fas fa-globe"></i> Book Domestic and International Property Online. To list your property <span class="list-property-link">Click Here</span></h3>
      </div>

      <div class="hotel-search-form">
        <!-- Location Field -->
        <div class="search-field" id="locationField">
          <label><i class="fas fa-map-marker-alt"></i> CITY, PROPERTY NAME OR LOCATION</label>
          <input type="text" id="locationInput" placeholder="Delhi" value="Delhi">
          <small style="color:#64748b;">India</small>
        </div>

        <!-- Check-In Field -->
        <div class="search-field" id="checkinField">
          <label><i class="far fa-calendar-alt"></i> CHECK-IN</label>
          <div class="field-value" id="checkinValue">19 Mar'26</div>
        </div>

        <!-- Check-Out Field -->
        <div class="search-field" id="checkoutField">
          <label><i class="far fa-calendar-alt"></i> CHECK-OUT</label>
          <div class="field-value" id="checkoutValue">20 Mar'26</div>
        </div>

        <!-- Rooms & Guests Field -->
        <div class="search-field" id="guestsField">
          <label><i class="fas fa-user-friends"></i> ROOMS & GUESTS</label>
          <div class="field-value" id="guestsValue">1 Room 2 Adults</div>
        </div>

        <!-- Search Button -->
        <button class="search-btn-hotel" id="searchBtn">
          <i class="fas fa-search"></i> SEARCH
        </button>
      </div>

      <!-- Price Range -->
      <div class="price-range-selector">
        <i class="fas fa-rupee-sign"></i> Price Per Night:
        <span class="price-tag active">₹0-₹1500</span>
        <span class="price-tag">₹1500-₹2500</span>
        <span class="price-tag">₹2500-₹5000</span>
        <span class="price-tag">₹5000+</span>
      </div>

      <!-- Last Search -->
      <div class="last-search">
        <i class="far fa-clock"></i> Last Search:
        <span><i class="fas fa-map-marker-alt"></i> Bangalore ⇄ 19 Mar - 22 Mar</span>
      </div>
    </div>

    <!-- Rooms & Guests Modal -->
    <div class="modal" id="guestsModal">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Select Rooms & Guests</h3>
          <span class="close-modal" id="closeModal">&times;</span>
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
          
          <!-- Child Age Selection (shown when children > 0) -->
          <div id="childAgesContainer" style="display: none;">
            <div class="info-text">
              Please provide right number of children along with their right age for best options and prices.
            </div>
            <div id="childAgeInputs"></div>
          </div>
        </div>

        <!-- Pet Option -->
        <div class="pet-option">
          <input type="checkbox" id="petCheckbox">
          <label for="petCheckbox">Are you travelling with pets?</label>
        </div>
        
        <div class="info-text">
          Selecting this option will show only pet-friendly properties. Please review the pet policies & applicable fees, if any.
        </div>

        <button class="apply-btn" id="applyGuests">APPLY</button>
      </div>
    </div>

    <!-- Date Picker Modal -->
    <div class="date-modal" id="dateModal">
      <div class="date-modal-content">
        <div class="modal-header">
          <h3 id="dateModalTitle">Select Date</h3>
          <span class="close-modal" id="closeDateModal">&times;</span>
        </div>
        <div class="calendar-header">
          <span id="currentMonth">March 2026</span>
          <div>
            <button class="guest-btn" id="prevMonth">&lt;</button>
            <button class="guest-btn" id="nextMonth">&gt;</button>
          </div>
        </div>
        <div class="calendar-grid" id="calendarGrid">
          <!-- Calendar will be generated by JS -->
        </div>
        <div style="display: flex; gap:1rem; margin-top:1.5rem;">
          <button class="apply-btn" id="applyDate">SELECT</button>
        </div>
      </div>
    </div>

    <!-- For your stay in Bangalore Section -->
    <div class="city-section">
      <div class="city-header">
        <h3>For your stay in Bangalore</h3>
        <div class="dates">
          <i class="far fa-calendar-alt"></i> Thu, 19 Mar 26 - Sun, 22 Mar 26
        </div>
      </div>

      <!-- First Row - 2 Hotels -->
      <div class="hotel-grid">
        <!-- Hotel 1 -->
        <div class="hotel-item">
          <div class="hotel-img" style="background-image: url('https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=400')">
            <div class="rating">★★★★☆</div>
          </div>
          <div class="hotel-info">
            <div class="hotel-name">The Chancery Pavilion Ashok Nagar</div>
            <div class="hotel-location"><i class="fas fa-map-marker-alt"></i> Ashok Nagar, Bangalore</div>
            <div class="hotel-price">₹5,750 <span>per night</span></div>
            <div class="hotel-features">
              <span><i class="fas fa-wifi"></i> Free WiFi</span>
              <span><i class="fas fa-parking"></i> Parking</span>
            </div>
          </div>
        </div>

        <!-- Hotel 2 -->
        <div class="hotel-item">
          <div class="hotel-img" style="background-image: url('https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=400')">
            <div class="rating">★★★★★</div>
          </div>
          <div class="hotel-info">
            <div class="hotel-name">Four Seasons Hotel Bengaluru at Embassy One</div>
            <div class="hotel-location"><i class="fas fa-map-marker-alt"></i> Embassy One, Bangalore</div>
            <div class="hotel-price">₹12,378 <span>per night</span></div>
            <div class="hotel-features">
              <span><i class="fas fa-swimming-pool"></i> Pool</span>
              <span><i class="fas fa-dumbbell"></i> Gym</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Second Row - 3 Hotels -->
      <div class="hotel-row">
        <!-- Hotel 3 -->
        <div class="hotel-card">
          <div class="hotel-card-img" style="background-image: url('https://images.pexels.com/photos/161758/governor-s-mansion-montgomery-alabama-grand-staircase-161758.jpeg?auto=compress&cs=tinysrgb&w=400')"></div>
          <div class="hotel-card-content">
            <div class="hotel-card-title">City Classic Bangalore</div>
            <div class="hotel-location"><i class="fas fa-map-marker-alt"></i> MG Road</div>
            <div class="hotel-card-price">₹3,304 <span>/night</span></div>
          </div>
        </div>

        <!-- Hotel 4 -->
        <div class="hotel-card">
          <div class="hotel-card-img" style="background-image: url('https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=400')"></div>
          <div class="hotel-card-content">
            <div class="hotel-card-title">Customer Support Center</div>
            <div class="hotel-location"><i class="fas fa-map-marker-alt"></i> 24/7 Assistance</div>
            <div class="hotel-card-price">How can I help you today</div>
          </div>
        </div>

        <!-- Hotel 5 -->
        <div class="hotel-card">
          <div class="hotel-card-img" style="background-image: url('https://images.pexels.com/photos/2034335/pexels-photo-2034335.jpeg?auto=compress&cs=tinysrgb&w=400')"></div>
          <div class="hotel-card-content">
            <div class="hotel-card-title">Wyndham, Hebbal Manayala Tech Park</div>
            <div class="hotel-location"><i class="fas fa-map-marker-alt"></i> Hebbal, Bangalore</div>
            <div class="hotel-card-price">Centre - An Acc Brand</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Search Text -->
    <div class="search-for-properties">
      <i class="fas fa-search"></i> Search for properties in India
    </div>
  </div>

  <!-- Footer -->
   <?php include '../includes/footer.php' ?>


  <script>
    // Room & Guest Modal Functionality
    const guestsModal = document.getElementById('guestsModal');
    const guestsField = document.getElementById('guestsField');
    const closeModal = document.getElementById('closeModal');
    
    // Guest counts
    let rooms = 1;
    let adults = 2;
    let children = 0;

    // Open modal
    guestsField.addEventListener('click', () => {
      guestsModal.classList.add('active');
    });

    // Close modal
    closeModal.addEventListener('click', () => {
      guestsModal.classList.remove('active');
    });

    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
      if (e.target === guestsModal) {
        guestsModal.classList.remove('active');
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
    const childAgesContainer = document.getElementById('childAgesContainer');
    document.getElementById('childPlus').addEventListener('click', () => {
      if (children < 5) {
        children++;
        document.getElementById('childCount').textContent = children;
        updateChildAges();
      }
    });
    document.getElementById('childMinus').addEventListener('click', () => {
      if (children > 0) {
        children--;
        document.getElementById('childCount').textContent = children;
        updateChildAges();
      }
    });

    function updateChildAges() {
      if (children > 0) {
        childAgesContainer.style.display = 'block';
        let html = '';
        for (let i = 0; i < children; i++) {
          html += `
            <div class="child-age-row">
              <span>Child ${i+1} Age:</span>
              <select class="child-age-select">
                <option>0-1 Years</option>
                <option>2-5 Years</option>
                <option>6-10 Years</option>
                <option>11-15 Years</option>
                <option>16-17 Years</option>
              </select>
            </div>
          `;
        }
        document.getElementById('childAgeInputs').innerHTML = html;
      } else {
        childAgesContainer.style.display = 'none';
      }
    }

    // Apply button
    document.getElementById('applyGuests').addEventListener('click', () => {
      const guestsText = `${rooms} Room${rooms > 1 ? 's' : ''} ${adults} Adult${adults > 1 ? 's' : ''}${children > 0 ? `, ${children} Child${children > 1 ? 'ren' : ''}` : ''}`;
      document.getElementById('guestsValue').textContent = guestsText;
      guestsModal.classList.remove('active');
    });

    // Date Picker Modal
    const dateModal = document.getElementById('dateModal');
    const checkinField = document.getElementById('checkinField');
    const checkoutField = document.getElementById('checkoutField');
    const closeDateModal = document.getElementById('closeDateModal');
    let currentDateField = 'checkin';

    checkinField.addEventListener('click', () => {
      currentDateField = 'checkin';
      document.getElementById('dateModalTitle').textContent = 'Select Check-In Date';
      dateModal.classList.add('active');
      generateCalendar();
    });

    checkoutField.addEventListener('click', () => {
      currentDateField = 'checkout';
      document.getElementById('dateModalTitle').textContent = 'Select Check-Out Date';
      dateModal.classList.add('active');
      generateCalendar();
    });

    closeDateModal.addEventListener('click', () => {
      dateModal.classList.remove('active');
    });

    window.addEventListener('click', (e) => {
      if (e.target === dateModal) {
        dateModal.classList.remove('active');
      }
    });

    function generateCalendar() {
      // Simple calendar for demo
      const calendarGrid = document.getElementById('calendarGrid');
      let html = '';
      const days = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];
      
      // Add day headers
      days.forEach(day => {
        html += `<div style="font-weight:600; text-align:center;">${day}</div>`;
      });
      
      // Add empty cells for start of month
      for (let i = 0; i < 6; i++) html += '<div></div>';
      
      // Add days
      for (let i = 1; i <= 31; i++) {
        html += `<div class="calendar-day" onclick="selectDate(${i})">${i}</div>`;
      }
      
      calendarGrid.innerHTML = html;
    }

    window.selectDate = (day) => {
      const month = 'Mar 26';
      if (currentDateField === 'checkin') {
        document.getElementById('checkinValue').textContent = `${day} ${month}`;
      } else {
        document.getElementById('checkoutValue').textContent = `${day} ${month}`;
      }
      dateModal.classList.remove('active');
    };

    document.getElementById('applyDate').addEventListener('click', () => {
      dateModal.classList.remove('active');
    });

    // Price tags
    document.querySelectorAll('.price-tag').forEach(tag => {
      tag.addEventListener('click', function() {
        document.querySelectorAll('.price-tag').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
      });
    });

    // Search button
    document.getElementById('searchBtn').addEventListener('click', () => {
      const location = document.getElementById('locationInput').value;
      const checkin = document.getElementById('checkinValue').textContent;
      const checkout = document.getElementById('checkoutValue').textContent;
      const guests = document.getElementById('guestsValue').textContent;
      
      alert(`Searching Hotels:\nLocation: ${location}\nCheck-in: ${checkin}\nCheck-out: ${checkout}\n${guests}`);
    });

    // Main tabs
    document.querySelectorAll('.main-tab').forEach(tab => {
      tab.addEventListener('click', function() {
        document.querySelectorAll('.main-tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>
</body>
</html>