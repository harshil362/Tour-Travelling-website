<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Train Booking - Travel Go | Book Train Tickets Online</title>
  <!-- Font Awesome 5 -->
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
      background-color: #f0f5ff;
      color: #1e293b;
    }

    /* Main Container */
    .train-container {
      max-width: 1300px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    /* ===== CONSISTENT ACTION BAR (Already in header, but keeping for reference) ===== */
    /* Action bar will come from header.php */

    /* Booking Card */
    .booking-card {
      background: white;
      border-radius: 32px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.08);
      overflow: hidden;
      margin: 2rem 0;
    }

    /* Tabs */
    .train-tabs {
      display: flex;
      background: #f8fafc;
      border-bottom: 1px solid #e2e8f0;
      padding: 0 2rem;
      gap: 2rem;
    }
    .train-tab {
      padding: 1.2rem 0;
      font-weight: 600;
      font-size: 1rem;
      color: #64748b;
      cursor: pointer;
      border-bottom: 3px solid transparent;
      transition: 0.2s;
    }
    .train-tab.active {
      color: #2563eb;
      border-bottom-color: #2563eb;
    }

    /* Booking Form */
    .booking-form {
      padding: 2rem;
    }

    .input-row {
      display: flex;
      gap: 1rem;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
    }

    .input-field {
      flex: 1;
      min-width: 200px;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 20px;
      padding: 0.8rem 1.2rem;
      transition: 0.2s;
      cursor: pointer;
    }
    .input-field:hover {
      border-color: #2563eb;
    }
    .input-field label {
      font-size: 0.7rem;
      text-transform: uppercase;
      color: #64748b;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 5px;
      margin-bottom: 4px;
    }
    .input-field .field-value {
      font-weight: 600;
      font-size: 1rem;
      color: #0f172a;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .input-field .field-value i {
      color: #94a3b8;
      font-size: 0.9rem;
    }

    /* Class Dropdown */
    .class-dropdown {
      flex: 1;
      min-width: 200px;
      position: relative;
    }
    .dropdown-header {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 20px;
      padding: 0.8rem 1.2rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .dropdown-header label {
      font-size: 0.7rem;
      text-transform: uppercase;
      color: #64748b;
      font-weight: 600;
      display: block;
    }
    .dropdown-header .selected-class {
      font-weight: 600;
      font-size: 1rem;
      color: #0f172a;
    }
    .dropdown-header i {
      color: #94a3b8;
    }
    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 0;
      right: 0;
      background: white;
      border: 1px solid #e2e8f0;
      border-radius: 16px;
      margin-top: 5px;
      max-height: 300px;
      overflow-y: auto;
      z-index: 10;
      display: none;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .dropdown-menu.show {
      display: block;
    }
    .dropdown-item {
      padding: 0.8rem 1.2rem;
      cursor: pointer;
      transition: 0.2s;
      border-bottom: 1px solid #f1f5f9;
    }
    .dropdown-item:hover {
      background: #eef2ff;
      color: #2563eb;
    }
    .dropdown-item:last-child {
      border-bottom: none;
    }

    /* Search Button */
    .search-btn {
      background: linear-gradient(95deg, #2563eb, #3b82f6);
      color: white;
      border: none;
      padding: 1.2rem 3rem;
      border-radius: 60px;
      font-weight: 700;
      font-size: 1.2rem;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 10px 20px rgba(37,99,235,0.3);
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
      display: block;
    }
    .search-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 30px rgba(37,99,235,0.4);
    }

    /* Offers Section */
    .offers-section {
      margin: 3rem 0;
    }
    .offers-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
    }
    .offers-title {
      font-size: 2rem;
      font-weight: 700;
      color: #0f172a;
    }
    .offers-tabs {
      display: flex;
      gap: 1.5rem;
      flex-wrap: wrap;
    }
    .offer-tab {
      padding: 0.5rem 0;
      font-weight: 500;
      color: #64748b;
      cursor: pointer;
      border-bottom: 3px solid transparent;
      white-space: nowrap;
    }
    .offer-tab.active {
      color: #2563eb;
      border-bottom-color: #2563eb;
    }

    /* Horizontal Scroll Cards */
    .offers-scroll {
      display: flex;
      gap: 1.5rem;
      overflow-x: auto;
      padding: 1rem 0 2rem;
      scroll-snap-type: x mandatory;
    }
    .offer-card {
      min-width: 350px;
      background: white;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0,0,0,0.04);
      border: 1px solid #edf2f7;
      display: flex;
      scroll-snap-align: start;
      transition: 0.2s;
    }
    .offer-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 35px rgba(37,99,235,0.1);
    }

    .offer-img {
      width: 120px;
      background-size: cover;
      background-position: center;
      position: relative;
    }
    .offer-content {
      padding: 1.2rem;
      flex: 1;
    }
    .offer-content h4 {
      font-weight: 700;
      margin-bottom: 0.3rem;
      color: #0f172a;
    }
    .offer-content p {
      font-size: 0.8rem;
      color: #64748b;
      margin-bottom: 0.8rem;
      line-height: 1.4;
    }
    .offer-code {
      background: #eef2ff;
      color: #2563eb;
      font-weight: 600;
      font-size: 0.75rem;
      padding: 0.3rem 1rem;
      border-radius: 30px;
      display: inline-block;
      margin-bottom: 0.8rem;
    }
    .offer-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .view-details {
      color: #2563eb;
      font-weight: 600;
      font-size: 0.8rem;
      cursor: pointer;
    }
    .tc {
      color: #94a3b8;
      font-size: 0.7rem;
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
    @media (max-width: 768px) {
      .train-tabs {
        padding: 0 1rem;
        gap: 1rem;
      }
      .offers-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
      }
      .offer-card {
        min-width: 280px;
      }
    }

    /* Validation */
    .error-shake {
      animation: shake 0.3s;
      border-color: #dc2626 !important;
    }
    @keyframes shake {
      0%,100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      75% { transform: translateX(5px); }
    }
  </style>
</head>
<body>

  <!-- INCLUDE HEADER (Already exists) -->
  <?php include 'header.php'; ?>

  <!-- Train Page Container -->
  <div class="train-container">

    <!-- Booking Card -->
    <div class="booking-card">
      <!-- Tabs -->
      <div class="train-tabs">
        <div class="train-tab active" data-tab="book">Book Train Tickets</div>
        <div class="train-tab" data-tab="pnr">Check PNR Status</div>
        <div class="train-tab" data-tab="live">Live Train Status</div>
      </div>

      <!-- Booking Form -->
      <div class="booking-form">
        <div class="input-row">
          <!-- From City -->
          <div class="input-field" id="fromField">
            <label><i class="fas fa-map-marker-alt"></i> FROM</label>
            <div class="field-value">
              <span id="fromValue">New Delhi</span>
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>

          <!-- To City -->
          <div class="input-field" id="toField">
            <label><i class="fas fa-map-marker-alt"></i> TO</label>
            <div class="field-value">
              <span id="toValue">Kanpur</span>
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>

          <!-- Travel Date -->
          <div class="input-field" id="dateField">
            <label><i class="far fa-calendar-alt"></i> TRAVEL DATE</label>
            <div class="field-value">
              <span id="dateValue">19 Mar, 2026</span>
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>

          <!-- Class Dropdown -->
          <div class="class-dropdown">
            <div class="dropdown-header" id="dropdownHeader">
              <div>
                <label><i class="fas fa-chair"></i> CLASS</label>
                <div class="selected-class" id="selectedClass">All Class</div>
              </div>
              <i class="fas fa-chevron-down"></i>
            </div>
            <div class="dropdown-menu" id="dropdownMenu">
              <div class="dropdown-item" data-class="All Class">All Class</div>
              <div class="dropdown-item" data-class="Sleeper Class">Sleeper Class</div>
              <div class="dropdown-item" data-class="Third AC">Third AC</div>
              <div class="dropdown-item" data-class="Second AC">Second AC</div>
              <div class="dropdown-item" data-class="First AC">First AC</div>
              <div class="dropdown-item" data-class="Second Seating">Second Seating</div>
              <div class="dropdown-item" data-class="Vistadome AC">Vistadome AC</div>
              <div class="dropdown-item" data-class="AC Chair Car">AC Chair Car</div>
            </div>
          </div>
        </div>

        <!-- Search Button -->
        <button class="search-btn" id="searchTrainBtn">
          <i class="fas fa-search"></i> SEARCH TRAINS
        </button>
      </div>
    </div>

    <!-- Offers Section -->
    <div class="offers-section">
      <div class="offers-header">
        <h2 class="offers-title">Offers</h2>
        <div class="offers-tabs">
          <span class="offer-tab active" data-offer="trains">Trains</span>
          <span class="offer-tab" data-offer="all">All Offers</span>
          <span class="offer-tab" data-offer="hotels">Hotels</span>
          <span class="offer-tab" data-offer="flights">Flights</span>
          <span class="offer-tab" data-offer="holidays">Holidays</span>
          <span class="offer-tab" data-offer="bus">Bus</span>
          <span class="offer-tab" data-offer="cabs">Cabs</span>
        </div>
      </div>

      <!-- Horizontal Scroll Cards -->
      <div class="offers-scroll" id="offersContainer">
        <!-- Card 1 -->
        <div class="offer-card">
          <div class="offer-img" style="background-image: url('https://images.pexels.com/photos/7256862/pexels-photo-7256862.jpeg?auto=compress&cs=tinysrgb&w=400')"></div>
          <div class="offer-content">
            <h4>Flat ₹100 off</h4>
            <p>On train tickets. Minimum order ₹500.</p>
            <span class="offer-code">Use Code: TRAIN100</span>
            <div class="offer-footer">
              <span class="view-details">VIEW DETAILS</span>
              <span class="tc">T&C APPLY</span>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="offer-card">
          <div class="offer-img" style="background-image: url('https://images.pexels.com/photos/2481182/pexels-photo-2481182.jpeg?auto=compress&cs=tinysrgb&w=400')"></div>
          <div class="offer-content">
            <h4>Bus Booking Offer</h4>
            <p>Get 15% cashback up to ₹150.</p>
            <span class="offer-code">Use Code: BUS15</span>
            <div class="offer-footer">
              <span class="view-details">VIEW DETAILS</span>
              <span class="tc">T&C APPLY</span>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="offer-card">
          <div class="offer-img" style="background-image: url('https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=400')"></div>
          <div class="offer-content">
            <h4>Hotel Special</h4>
            <p>Flat 25% off on stays above ₹2000.</p>
            <span class="offer-code">Use Code: HOTEL25</span>
            <div class="offer-footer">
              <span class="view-details">VIEW DETAILS</span>
              <span class="tc">T&C APPLY</span>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="offer-card">
          <div class="offer-img" style="background-image: url('https://images.pexels.com/photos/1008155/pexels-photo-1008155.jpeg?auto=compress&cs=tinysrgb&w=400')"></div>
          <div class="offer-content">
            <h4>Flight Discount</h4>
            <p>Get ₹500 off on international flights.</p>
            <span class="offer-code">Use Code: FLY500</span>
            <div class="offer-footer">
              <span class="view-details">VIEW DETAILS</span>
              <span class="tc">T&C APPLY</span>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="offer-card">
          <div class="offer-img" style="background-image: url('https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?auto=compress&cs=tinysrgb&w=400')"></div>
          <div class="offer-content">
            <h4>Holiday Package</h4>
            <p>Save up to ₹5000 on Goa packages.</p>
            <span class="offer-code">Use Code: GOA5K</span>
            <div class="offer-footer">
              <span class="view-details">VIEW DETAILS</span>
              <span class="tc">T&C APPLY</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
   <?php include '../includes/footer.php' ?>


  <script>
    // ===== TAB SWITCHING =====
    const trainTabs = document.querySelectorAll('.train-tab');
    trainTabs.forEach(tab => {
      tab.addEventListener('click', function() {
        trainTabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        
        const tabType = this.dataset.tab;
        if (tabType === 'book') {
          alert('Book Train Tickets selected');
        } else if (tabType === 'pnr') {
          alert('Check PNR Status selected');
        } else {
          alert('Live Train Status selected');
        }
      });
    });

    // ===== CLASS DROPDOWN =====
    const dropdownHeader = document.getElementById('dropdownHeader');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const selectedClass = document.getElementById('selectedClass');
    const dropdownItems = document.querySelectorAll('.dropdown-item');

    dropdownHeader.addEventListener('click', (e) => {
      e.stopPropagation();
      dropdownMenu.classList.toggle('show');
    });

    dropdownItems.forEach(item => {
      item.addEventListener('click', function() {
        selectedClass.textContent = this.dataset.class;
        dropdownMenu.classList.remove('show');
      });
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
      if (!dropdownHeader.contains(e.target)) {
        dropdownMenu.classList.remove('show');
      }
    });

    // ===== CITY SELECTION =====
    document.getElementById('fromField').addEventListener('click', () => {
      const city = prompt('Enter departure city:', 'New Delhi');
      if (city) document.getElementById('fromValue').textContent = city;
    });

    document.getElementById('toField').addEventListener('click', () => {
      const city = prompt('Enter destination city:', 'Kanpur');
      if (city) document.getElementById('toValue').textContent = city;
    });

    // ===== DATE PICKER =====
    document.getElementById('dateField').addEventListener('click', () => {
      const date = prompt('Enter travel date (DD MMM, YYYY):', '19 Mar, 2026');
      if (date) document.getElementById('dateValue').textContent = date;
    });

    // ===== OFFER TABS SWITCHING =====
    const offerTabs = document.querySelectorAll('.offer-tab');
    offerTabs.forEach(tab => {
      tab.addEventListener('click', function() {
        offerTabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        alert(`Showing ${this.textContent} offers`);
      });
    });

    // ===== SEARCH BUTTON VALIDATION =====
    document.getElementById('searchTrainBtn').addEventListener('click', (e) => {
      e.preventDefault();
      
      const from = document.getElementById('fromValue').textContent;
      const to = document.getElementById('toValue').textContent;
      const date = document.getElementById('dateValue').textContent;
      const trainClass = selectedClass.textContent;

      let valid = true;

      // Simple validation
      if (from === to) {
        valid = false;
        document.getElementById('fromField').classList.add('error-shake');
        document.getElementById('toField').classList.add('error-shake');
        setTimeout(() => {
          document.getElementById('fromField').classList.remove('error-shake');
          document.getElementById('toField').classList.remove('error-shake');
        }, 500);
      }

      if (valid) {
        alert(`Searching Trains:\nFrom: ${from}\nTo: ${to}\nDate: ${date}\nClass: ${trainClass}`);
      } else {
        alert('From and To cities cannot be the same!');
      }
    });

    // ===== VIEW DETAILS CLICK =====
    document.querySelectorAll('.view-details').forEach(btn => {
      btn.addEventListener('click', function() {
        const offerTitle = this.closest('.offer-content').querySelector('h4').textContent;
        alert(`Viewing details for: ${offerTitle}`);
      });
    });
  </script>
</body>
</html>