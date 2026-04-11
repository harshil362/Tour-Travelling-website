<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Visa - Travel Go | Apply for Visa Online</title>
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

    /* Visa Container */
    .visa-container {
      max-width: 1300px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    /* Hero Section */
    .hero-section {
      text-align: center;
      margin: 3rem 0 2rem;
    }
    .hero-section h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: #0f172a;
      margin-bottom: 0.5rem;
    }
    .hero-section p {
      color: #64748b;
      font-size: 1.1rem;
    }

    /* Search Card */
    .search-card {
      background: white;
      border-radius: 24px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.08);
      padding: 2rem;
      margin: 2rem 0 3rem;
    }

    .search-row {
      display: flex;
      align-items: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .search-field {
      flex: 1;
      min-width: 200px;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 16px;
      padding: 0.8rem 1.2rem;
      cursor: pointer;
      transition: 0.2s;
    }
    .search-field:hover {
      border-color: #0066ff;
    }
    .search-field label {
      font-size: 0.7rem;
      text-transform: uppercase;
      color: #64748b;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 5px;
      margin-bottom: 4px;
    }
    .search-field .field-value {
      font-weight: 600;
      font-size: 1rem;
      color: #0f172a;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .search-field .field-value i {
      color: #94a3b8;
    }

    .search-btn-large {
      background: linear-gradient(95deg, #0066ff, #0044cc);
      color: white;
      border: none;
      padding: 1rem 3rem;
      border-radius: 60px;
      font-weight: 700;
      font-size: 1.3rem;
      cursor: pointer;
      transition: 0.2s;
      box-shadow: 0 10px 20px rgba(0,102,255,0.3);
      white-space: nowrap;
    }
    .search-btn-large:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 25px rgba(0,102,255,0.4);
    }

    /* Section Title */
    .section-title {
      font-size: 2rem;
      font-weight: 700;
      color: #0f172a;
      margin: 3rem 0 1.5rem;
    }

    /* Countries Grid */
    .countries-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
      margin: 2rem 0;
    }

    .country-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.04);
      border: 1px solid #edf2f7;
      transition: 0.2s;
    }
    .country-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(0,102,255,0.08);
    }

    .country-header {
      padding: 1.2rem 1.2rem 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.8rem;
    }
    .country-flag {
      font-size: 2rem;
    }
    .country-name {
      font-weight: 700;
      font-size: 1.2rem;
    }
    .visa-type {
      background: #e6f0ff;
      color: #0066ff;
      font-size: 0.7rem;
      font-weight: 600;
      padding: 0.2rem 0.6rem;
      border-radius: 20px;
      margin-left: auto;
    }
    .info-badge {
      color: #94a3b8;
      font-size: 0.8rem;
      cursor: help;
    }

    .country-details {
      padding: 0.5rem 1.2rem 1.2rem;
    }
    .detail-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 0.5rem;
      font-size: 0.85rem;
    }
    .detail-item i {
      color: #0066ff;
      font-size: 0.8rem;
    }
    .stats {
      color: #64748b;
      font-size: 0.8rem;
      margin: 0.8rem 0;
    }
    .stats span {
      font-weight: 600;
      color: #0f172a;
    }

    .price-section {
      border-top: 1px solid #edf2f7;
      padding: 1rem 1.2rem;
      background: #f8fafc;
    }
    .price {
      font-weight: 700;
      font-size: 1.1rem;
      color: #0066ff;
    }
    .price small {
      font-size: 0.7rem;
      color: #64748b;
      font-weight: 400;
    }
    .service-fee {
      font-size: 0.7rem;
      color: #64748b;
    }
    .voucher {
      color: #0066ff;
      font-size: 0.75rem;
      font-weight: 600;
      margin-top: 0.3rem;
      cursor: pointer;
    }

    /* Europe Section */
    .europe-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #0f172a;
      margin: 3rem 0 1.5rem;
    }

    .europe-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
      margin: 2rem 0;
    }

    .europe-card {
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.04);
      border: 1px solid #edf2f7;
    }
    .europe-card img {
      width: 100%;
      height: 160px;
      object-fit: cover;
    }
    .europe-content {
      padding: 1.2rem;
    }
    .europe-content h3 {
      font-weight: 700;
      margin-bottom: 0.5rem;
    }
    .appointment-text {
      font-size: 0.85rem;
      color: #64748b;
      margin-bottom: 0.8rem;
    }
    .weather {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 1rem;
    }
    .weather i {
      color: #f59e0b;
    }
    .weather-temp {
      font-weight: 600;
    }
    .weather-desc {
      font-size: 0.8rem;
      color: #64748b;
    }
    .search-mini {
      background: #f1f5f9;
      color: #334155;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 30px;
      font-weight: 500;
      width: 100%;
      cursor: pointer;
    }

    /* Dropdown Modal */
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
    }
    .close-modal {
      font-size: 1.8rem;
      cursor: pointer;
      color: #64748b;
    }
    .dropdown-item {
      padding: 1rem;
      border-bottom: 1px solid #f1f5f9;
      cursor: pointer;
      transition: 0.2s;
      display: flex;
      align-items: center;
      gap: 0.8rem;
    }
    .dropdown-item:hover {
      background: #e6f0ff;
      color: #0066ff;
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
    .footer-col h5 { color: white; margin-bottom: 1.2rem; }
    .footer-col ul { list-style: none; }
    .footer-col li { margin-bottom: 0.7rem; }
    .footer-col a { color: #94a3b8; text-decoration: none; font-size: 0.85rem; }
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
      margin-top: 3rem;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .countries-grid, .europe-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 768px) {
      .countries-grid, .europe-grid {
        grid-template-columns: 1fr;
      }
      .search-row {
        flex-direction: column;
      }
      .hero-section h1 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body>

  <!-- INCLUDE HEADER -->
  <?php include 'header.php'; ?>

  <div class="visa-container">

    <!-- Hero Section -->
    <div class="hero-section">
      <h1>Apply for a Visa: On Time, Powered by Experts</h1>
    </div>

    <!-- Search Card -->
    <div class="search-card">
      <div class="search-row">
        <div class="search-field" id="destinationField">
          <label><i class="fas fa-globe"></i> SELECT DESTINATION</label>
          <div class="field-value" id="destinationValue">
            Where are you going? <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <div class="search-field" id="departDateField">
          <label><i class="far fa-calendar-alt"></i> DATE OF DEPARTURE</label>
          <div class="field-value" id="departDateValue">
            Select Date <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <div class="search-field" id="returnDateField">
          <label><i class="far fa-calendar-alt"></i> DATE OF RETURN</label>
          <div class="field-value" id="returnDateValue">
            Select Date <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <button class="search-btn-large" id="searchVisaBtn">
          <i class="fas fa-search"></i> SEARCH
        </button>
      </div>
    </div>

    <!-- DESTINATION MODAL -->
    <div class="dropdown-modal" id="destinationModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3>Select Destination</h3>
          <span class="close-modal" id="closeDestinationModal">&times;</span>
        </div>
        <div class="dropdown-item" data-dest="United Arab Emirates">🇦🇪 United Arab Emirates</div>
        <div class="dropdown-item" data-dest="Thailand">🇹🇭 Thailand</div>
        <div class="dropdown-item" data-dest="Vietnam">🇻🇳 Vietnam</div>
        <div class="dropdown-item" data-dest="Indonesia">🇮🇩 Indonesia</div>
        <div class="dropdown-item" data-dest="France">🇫🇷 France</div>
        <div class="dropdown-item" data-dest="Spain">🇪🇸 Spain</div>
        <div class="dropdown-item" data-dest="Finland">🇫🇮 Finland</div>
        <div class="dropdown-item" data-dest="Germany">🇩🇪 Germany</div>
      </div>
    </div>

    <!-- DATE MODAL -->
    <div class="dropdown-modal" id="dateModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3 id="dateModalTitle">Select Date</h3>
          <span class="close-modal" id="closeDateModal">&times;</span>
        </div>
        <div class="month-header" style="display:flex; justify-content:space-between; margin:1rem 0;">
          <button class="guest-btn" id="prevMonth">&lt;</button>
          <span id="currentMonth">March 2026</span>
          <button class="guest-btn" id="nextMonth">&gt;</button>
        </div>
        <div class="calendar-grid" id="calendarGrid" style="display:grid; grid-template-columns:repeat(7,1fr); gap:5px;"></div>
      </div>
    </div>

    <!-- Most-visited Countries -->
    <h2 class="section-title">Most-visited Countries</h2>
    
    <div class="countries-grid">
      <!-- UAE -->
      <div class="country-card">
        <div class="country-header">
          <span class="country-flag">🇦🇪</span>
          <span class="country-name">United Arab Emirates</span>
          <span class="visa-type">E-VISA</span>
          <span class="info-badge">ⓘ</span>
        </div>
        <div class="country-details">
          <div class="detail-item"><i class="fas fa-calendar-check"></i> Get your visa by 24 Mar</div>
          <div class="detail-item"><i class="fas fa-bolt"></i> Quick & Easy Process</div>
          <div class="stats"><span>100k+</span> Visas Processed</div>
        </div>
        <div class="price-section">
          <div class="price">₹ 6,950 <small>per adult</small></div>
          <div class="service-fee">+ ₹ 949 service fees</div>
          <div class="voucher">Get ₹250 MMT Tours & Attractions Voucher →</div>
        </div>
      </div>

      <!-- Thailand -->
      <div class="country-card">
        <div class="country-header">
          <span class="country-flag">🇹🇭</span>
          <span class="country-name">Thailand</span>
          <span class="visa-type">DAC</span>
          <span class="info-badge">ⓘ</span>
        </div>
        <div class="country-details">
          <div class="detail-item"><i class="fas fa-calendar-check"></i> Get your visa by 20 Mar</div>
          <div class="detail-item"><i class="fas fa-passport"></i> Mandatory for Indians</div>
          <div class="stats"><span>20k+</span> DACs Processed</div>
        </div>
        <div class="price-section">
          <div class="price">₹ 0 <small>per adult</small></div>
          <div class="service-fee">+ ₹ 199 service fees</div>
          <div class="voucher">Get ₹250 MMT Tours & Attractions Voucher →</div>
        </div>
      </div>

      <!-- Vietnam -->
      <div class="country-card">
        <div class="country-header">
          <span class="country-flag">🇻🇳</span>
          <span class="country-name">Vietnam</span>
          <span class="visa-type">E-VISA</span>
          <span class="info-badge">ⓘ</span>
        </div>
        <div class="country-details">
          <div class="detail-item"><i class="fas fa-calendar-check"></i> Get your visa by 24 Mar</div>
          <div class="detail-item"><i class="fas fa-bolt"></i> Quick & Easy Process</div>
          <div class="stats"><span>20k+</span> Visas Processed</div>
        </div>
        <div class="price-section">
          <div class="price">₹ 2,300 <small>per adult</small></div>
          <div class="service-fee">+ ₹ 899 service fees</div>
          <div class="voucher">Get ₹250 MMT Tours & Attractions Voucher →</div>
        </div>
      </div>

      <!-- Indonesia -->
      <div class="country-card">
        <div class="country-header">
          <span class="country-flag">🇮🇩</span>
          <span class="country-name">Indonesia</span>
          <span class="visa-type">EVOA</span>
          <span class="info-badge">ⓘ</span>
        </div>
        <div class="country-details">
          <div class="detail-item"><i class="fas fa-calendar-check"></i> Get your visa by 20 Mar</div>
          <div class="detail-item"><i class="fas fa-bolt"></i> Quick & Easy Process</div>
          <div class="stats"><span>15k+</span> Visas Processed</div>
        </div>
        <div class="price-section">
          <div class="price">₹ 2,800 <small>per adult</small></div>
          <div class="service-fee">+ ₹ 899 service fees</div>
          <div class="voucher">Get ₹250 MMT Tours & Attractions Voucher →</div>
        </div>
      </div>
    </div>

    <!-- Visit Europe! -->
    <h2 class="europe-title">Visit Europe!</h2>

    <div class="europe-grid">
      <!-- France -->
      <div class="europe-card">
        <img src="https://images.pexels.com/photos/460672/pexels-photo-460672.jpeg?auto=compress&cs=tinysrgb&w=400" alt="France">
        <div class="europe-content">
          <h3>France</h3>
          <div class="appointment-text">Know your appointment date by</div>
          <div class="weather">
            <i class="fas fa-cloud-sun"></i>
            <span class="weather-temp">₹ 22°C</span>
            <span class="weather-desc">Partly cloudy</span>
          </div>
          <button class="search-mini" onclick="alert('Searching visa for France')">Search</button>
        </div>
      </div>

      <!-- Spain -->
      <div class="europe-card">
        <img src="https://images.pexels.com/photos/161899/prague-czech-republic-praha-castle-161899.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Spain">
        <div class="europe-content">
          <h3>Spain</h3>
          <div class="appointment-text">Know your appointment date by</div>
          <div class="weather">
            <i class="fas fa-cloud-sun"></i>
            <span class="weather-temp">₹ 24°C</span>
            <span class="weather-desc">Sunny</span>
          </div>
          <button class="search-mini" onclick="alert('Searching visa for Spain')">Search</button>
        </div>
      </div>

      <!-- Finland -->
      <div class="europe-card">
        <img src="https://images.pexels.com/photos/161860/helsinki-finland-cathedral-church-161860.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Finland">
        <div class="europe-content">
          <h3>Finland</h3>
          <div class="appointment-text">Know your appointment date by</div>
          <div class="weather">
            <i class="fas fa-snowflake"></i>
            <span class="weather-temp">₹ -2°C</span>
            <span class="weather-desc">Snowy</span>
          </div>
          <button class="search-mini" onclick="alert('Searching visa for Finland')">Search</button>
        </div>
      </div>

      <!-- Germany -->
      <div class="europe-card">
        <img src="https://images.pexels.com/photos/532826/pexels-photo-532826.jpeg?auto=compress&cs=tinysrgb&w=400" alt="Germany">
        <div class="europe-content">
          <h3>Germany</h3>
          <div class="appointment-text">Know your appointment date by</div>
          <div class="weather">
            <i class="fas fa-cloud"></i>
            <span class="weather-temp">₹ 18°C</span>
            <span class="weather-desc">Cloudy</span>
          </div>
          <button class="search-mini" onclick="alert('Searching visa for Germany')">Search</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
   <?php include '../includes/footer.php' ?>

  <script>
    // ===== MODALS SETUP =====
    const destModal = document.getElementById('destinationModal');
    const dateModal = document.getElementById('dateModal');
    const destField = document.getElementById('destinationField');
    const departField = document.getElementById('departDateField');
    const returnField = document.getElementById('returnDateField');
    const destValue = document.getElementById('destinationValue');
    const departValue = document.getElementById('departDateValue');
    const returnValue = document.getElementById('returnDateValue');

    let currentDateModal = 'depart';
    let currentMonth = 2; // March
    let currentYear = 2026;
    let selectedDay = 19;

    // Open modals
    destField.addEventListener('click', () => destModal.classList.add('active'));
    departField.addEventListener('click', () => {
      currentDateModal = 'depart';
      document.getElementById('dateModalTitle').textContent = 'Select Departure Date';
      dateModal.classList.add('active');
      generateCalendar();
    });
    returnField.addEventListener('click', () => {
      currentDateModal = 'return';
      document.getElementById('dateModalTitle').textContent = 'Select Return Date';
      dateModal.classList.add('active');
      generateCalendar();
    });

    // Close modals
    document.getElementById('closeDestinationModal').addEventListener('click', () => destModal.classList.remove('active'));
    document.getElementById('closeDateModal').addEventListener('click', () => dateModal.classList.remove('active'));

    // Select destination
    document.querySelectorAll('#destinationModal .dropdown-item').forEach(item => {
      item.addEventListener('click', function() {
        destValue.innerHTML = `${this.dataset.dest} <i class="fas fa-chevron-down"></i>`;
        destModal.classList.remove('active');
      });
    });

    // Calendar functions
    function generateCalendar() {
      const calendarGrid = document.getElementById('calendarGrid');
      const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
      document.getElementById('currentMonth').textContent = `${monthNames[currentMonth]} ${currentYear}`;
      
      let html = '';
      const days = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];
      
      days.forEach(day => {
        html += `<div style="font-weight:600; text-align:center;">${day}</div>`;
      });
      
      const firstDay = new Date(currentYear, currentMonth, 1).getDay();
      const adjustedFirstDay = firstDay === 0 ? 6 : firstDay - 1;
      
      for (let i = 0; i < adjustedFirstDay; i++) {
        html += '<div></div>';
      }
      
      const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
      for (let i = 1; i <= daysInMonth; i++) {
        const isSelected = (i === selectedDay && currentMonth === 2 && currentYear === 2026) ? 'selected' : '';
        html += `<div class="calendar-day ${isSelected}" style="padding:0.8rem; text-align:center; cursor:pointer; border-radius:50%;" onclick="selectDate(${i})">${i}</div>`;
      }
      
      calendarGrid.innerHTML = html;
    }

    window.selectDate = (day) => {
      selectedDay = day;
      const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
      const month = monthNames[currentMonth];
      const dateStr = `${day} ${month} ${currentYear}`;
      
      if (currentDateModal === 'depart') {
        departValue.innerHTML = `${dateStr} <i class="fas fa-chevron-down"></i>`;
      } else {
        returnValue.innerHTML = `${dateStr} <i class="fas fa-chevron-down"></i>`;
      }
      
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

    // Close modals on outside click
    window.addEventListener('click', (e) => {
      if (e.target === destModal) destModal.classList.remove('active');
      if (e.target === dateModal) dateModal.classList.remove('active');
    });

    // Search button
    document.getElementById('searchVisaBtn').addEventListener('click', function() {
      const dest = destValue.innerHTML.split(' <')[0];
      const depart = departValue.innerHTML.split(' <')[0];
      const ret = returnValue.innerHTML.split(' <')[0];
      
      if (dest === 'Where are you going?' || depart === 'Select Date' || ret === 'Select Date') {
        alert('Please select all fields');
      } else {
        alert(`Searching Visa:\nDestination: ${dest}\nDeparture: ${depart}\nReturn: ${ret}`);
      }
    });

    // Voucher clicks
    document.querySelectorAll('.voucher').forEach(voucher => {
      voucher.addEventListener('click', function() {
        alert('Voucher offer details');
      });
    });
  </script>
</body>
</html>