<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cabs - Travel Go | Book Outstation & Local Cabs</title>
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

    /* Cabs Container */
    .cabs-container {
      max-width: 1300px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    /* Location Header */
    .location-header {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin: 2rem 0 1.5rem;
    }
    .location-header h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: #0f172a;
    }
    .location-header span {
      color: #64748b;
      font-size: 1.1rem;
    }

    /* Add Stops Badge */
    .add-stops {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: #e6f0ff;
      color: #0066ff;
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      font-weight: 600;
      font-size: 0.9rem;
      margin: 1rem 0 2rem;
      cursor: pointer;
      border: 1px solid #0066ff20;
    }
    .add-stops i {
      font-size: 0.8rem;
    }
    .badge-new {
      background: #f97316;
      color: white;
      font-size: 0.6rem;
      padding: 0.2rem 0.5rem;
      border-radius: 20px;
      margin-left: 0.5rem;
    }

    /* Search Card */
    .search-card {
      background: white;
      border-radius: 24px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.08);
      padding: 2rem;
      margin: 2rem 0;
    }

    .trip-type {
      display: flex;
      gap: 2rem;
      margin-bottom: 2rem;
    }
    .trip-type label {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-weight: 600;
      color: #334155;
      cursor: pointer;
    }
    .trip-type input[type="radio"] {
      accent-color: #0066ff;
      width: 18px;
      height: 18px;
    }

    .location-row {
      display: grid;
      grid-template-columns: 1fr 0.8fr 1fr 1fr;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .field {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 16px;
      padding: 0.8rem 1.2rem;
      cursor: pointer;
      transition: 0.2s;
    }
    .field:hover {
      border-color: #0066ff;
    }
    .field label {
      font-size: 0.7rem;
      text-transform: uppercase;
      color: #64748b;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .field .field-value {
      font-weight: 600;
      font-size: 1rem;
      color: #0f172a;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .field .field-value i {
      color: #94a3b8;
    }

    .datetime-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
      margin-bottom: 1.5rem;
    }

    .search-btn-large {
      background: linear-gradient(95deg, #0066ff, #0044cc);
      color: white;
      border: none;
      padding: 1rem 2.5rem;
      border-radius: 60px;
      font-weight: 700;
      font-size: 1.3rem;
      cursor: pointer;
      transition: 0.2s;
      width: fit-content;
      box-shadow: 0 10px 20px rgba(0,102,255,0.3);
      margin: 1rem auto 0;
      display: block;
    }
    .search-btn-large:hover {
      transform: translateY(-2px);
      box-shadow: 0 15px 25px rgba(0,102,255,0.4);
    }

    /* Offers Section */
    .offers-section {
      margin: 3rem 0;
    }
    .section-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
    }
    .section-title {
      font-size: 2rem;
      font-weight: 700;
      color: #0f172a;
    }
    .view-all {
      color: #0066ff;
      font-weight: 600;
      cursor: pointer;
    }

    .offers-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.5rem;
    }

    .offer-card {
      background: white;
      border-radius: 20px;
      padding: 1.5rem;
      box-shadow: 0 8px 20px rgba(0,0,0,0.04);
      border: 1px solid #edf2f7;
      display: flex;
      flex-direction: column;
      gap: 1rem;
      transition: 0.2s;
    }
    .offer-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 30px rgba(0,102,255,0.08);
      border-color: #0066ff20;
    }

    .offer-tag {
      background: #e6f0ff;
      color: #0066ff;
      font-weight: 600;
      font-size: 0.75rem;
      padding: 0.3rem 1rem;
      border-radius: 30px;
      display: inline-block;
      width: fit-content;
    }
    .offer-card h3 {
      font-size: 1.1rem;
      font-weight: 700;
      color: #0f172a;
    }
    .offer-card p {
      color: #64748b;
      font-size: 0.9rem;
      line-height: 1.5;
    }
    .offer-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 0.5rem;
    }
    .book-now {
      background: #0066ff;
      color: white;
      border: none;
      padding: 0.5rem 1.5rem;
      border-radius: 40px;
      font-weight: 600;
      font-size: 0.8rem;
      cursor: pointer;
    }
    .tc {
      color: #94a3b8;
      font-size: 0.7rem;
    }
    .offer-highlight {
      font-size: 1.5rem;
      font-weight: 800;
      color: #0066ff;
      line-height: 1.2;
    }
    .offer-highlight small {
      font-size: 0.8rem;
      color: #64748b;
      font-weight: 400;
    }

    /* Featured Section */
    .featured-section {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border-radius: 20px;
      padding: 2rem;
      color: white;
      margin: 2rem 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1.5rem;
    }
    .featured-section h2 {
      font-size: 1.8rem;
      font-weight: 700;
    }
    .featured-section p {
      opacity: 0.9;
    }
    .featured-btn {
      background: white;
      color: #0066ff;
      border: none;
      padding: 0.8rem 2rem;
      border-radius: 40px;
      font-weight: 700;
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

    @media (max-width: 768px) {
      .location-row, .datetime-row {
        grid-template-columns: 1fr;
      }
      .offers-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- INCLUDE HEADER -->
  <?php include 'header.php'; ?>

  <div class="cabs-container">

    <!-- Location Header -->
    <div class="location-header">
      <h1>Mumbai</h1>
      <span>Pine</span>
    </div>

    <!-- Add Stops -->
    <div class="add-stops">
      <i class="fas fa-plus-circle"></i> Add Stops
      <span class="badge-new">new</span>
    </div>

    <!-- Search Card -->
    <div class="search-card">
      <div class="trip-type">
        <label><input type="radio" name="trip" value="outstation" checked> Outstation</label>
        <label><input type="radio" name="trip" value="local"> Local</label>
        <label><input type="radio" name="trip" value="airport"> Airport</label>
      </div>

      <div class="location-row">
        <div class="field" id="fromField">
          <label><i class="fas fa-map-marker-alt"></i> FROM</label>
          <div class="field-value" id="fromValue">
            Mumbai <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <div class="field" style="align-self:center; text-align:center; max-width:40px; background:transparent; border:none;">
          <i class="fas fa-exchange-alt fa-lg" style="color:#0066ff;"></i>
        </div>
        <div class="field" id="toField">
          <label><i class="fas fa-map-marker-alt"></i> TO</label>
          <div class="field-value" id="toValue">
            Pune <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <div class="field" id="carField">
          <label><i class="fas fa-car"></i> CAR TYPE</label>
          <div class="field-value" id="carValue">
            Sedan <i class="fas fa-chevron-down"></i>
          </div>
        </div>
      </div>

      <div class="datetime-row">
        <div class="field" id="pickupDateField">
          <label><i class="far fa-calendar-alt"></i> PICKUP DATE</label>
          <div class="field-value" id="pickupDateValue">
            19 Mar 2026 <i class="fas fa-chevron-down"></i>
          </div>
        </div>
        <div class="field" id="pickupTimeField">
          <label><i class="far fa-clock"></i> PICKUP TIME</label>
          <div class="field-value" id="pickupTimeValue">
            09:00 <i class="fas fa-chevron-down"></i>
          </div>
        </div>
      </div>

      <button class="search-btn-large" id="searchCabBtn">
        <i class="fas fa-search"></i> SEARCH
      </button>
    </div>

    <!-- FROM CITY MODAL -->
    <div class="dropdown-modal" id="fromModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3>Select Pickup City</h3>
          <span class="close-modal" id="closeFromModal">&times;</span>
        </div>
        <div class="dropdown-item" data-city="Mumbai">Mumbai</div>
        <div class="dropdown-item" data-city="Delhi">Delhi</div>
        <div class="dropdown-item" data-city="Bangalore">Bangalore</div>
        <div class="dropdown-item" data-city="Chennai">Chennai</div>
        <div class="dropdown-item" data-city="Kolkata">Kolkata</div>
        <div class="dropdown-item" data-city="Hyderabad">Hyderabad</div>
        <div class="dropdown-item" data-city="Pune">Pune</div>
        <div class="dropdown-item" data-city="Ahmedabad">Ahmedabad</div>
      </div>
    </div>

    <!-- TO CITY MODAL -->
    <div class="dropdown-modal" id="toModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3>Select Drop City</h3>
          <span class="close-modal" id="closeToModal">&times;</span>
        </div>
        <div class="dropdown-item" data-city="Pune">Pune</div>
        <div class="dropdown-item" data-city="Goa">Goa</div>
        <div class="dropdown-item" data-city="Lonavala">Lonavala</div>
        <div class="dropdown-item" data-city="Mahabaleshwar">Mahabaleshwar</div>
        <div class="dropdown-item" data-city="Nashik">Nashik</div>
        <div class="dropdown-item" data-city="Shirdi">Shirdi</div>
      </div>
    </div>

    <!-- CAR TYPE MODAL -->
    <div class="dropdown-modal" id="carModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3>Select Car Type</h3>
          <span class="close-modal" id="closeCarModal">&times;</span>
        </div>
        <div class="dropdown-item" data-car="Hatchback">Hatchback (Indica, Alto)</div>
        <div class="dropdown-item" data-car="Sedan">Sedan (Dzire, Etios)</div>
        <div class="dropdown-item" data-car="SUV">SUV (Innova, XUV)</div>
        <div class="dropdown-item" data-car="Premium">Premium (Mercedes, BMW)</div>
        <div class="dropdown-item" data-car="Tempo">Tempo Traveller</div>
      </div>
    </div>

    <!-- DATE MODAL -->
    <div class="dropdown-modal" id="dateModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3>Select Date</h3>
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

    <!-- TIME MODAL -->
    <div class="dropdown-modal" id="timeModal">
      <div class="dropdown-modal-content">
        <div class="dropdown-modal-header">
          <h3>Select Time</h3>
          <span class="close-modal" id="closeTimeModal">&times;</span>
        </div>
        <div class="time-grid" style="display:grid; grid-template-columns:repeat(3,1fr); gap:10px;">
          <div class="dropdown-item" data-time="00:00">12:00 AM</div>
          <div class="dropdown-item" data-time="01:00">1:00 AM</div>
          <div class="dropdown-item" data-time="02:00">2:00 AM</div>
          <div class="dropdown-item" data-time="03:00">3:00 AM</div>
          <div class="dropdown-item" data-time="04:00">4:00 AM</div>
          <div class="dropdown-item" data-time="05:00">5:00 AM</div>
          <div class="dropdown-item" data-time="06:00">6:00 AM</div>
          <div class="dropdown-item" data-time="07:00">7:00 AM</div>
          <div class="dropdown-item" data-time="08:00">8:00 AM</div>
          <div class="dropdown-item" data-time="09:00">9:00 AM</div>
          <div class="dropdown-item" data-time="10:00">10:00 AM</div>
          <div class="dropdown-item" data-time="11:00">11:00 AM</div>
          <div class="dropdown-item" data-time="12:00">12:00 PM</div>
          <div class="dropdown-item" data-time="13:00">1:00 PM</div>
          <div class="dropdown-item" data-time="14:00">2:00 PM</div>
          <div class="dropdown-item" data-time="15:00">3:00 PM</div>
          <div class="dropdown-item" data-time="16:00">4:00 PM</div>
          <div class="dropdown-item" data-time="17:00">5:00 PM</div>
          <div class="dropdown-item" data-time="18:00">6:00 PM</div>
          <div class="dropdown-item" data-time="19:00">7:00 PM</div>
          <div class="dropdown-item" data-time="20:00">8:00 PM</div>
          <div class="dropdown-item" data-time="21:00">9:00 PM</div>
          <div class="dropdown-item" data-time="22:00">10:00 PM</div>
          <div class="dropdown-item" data-time="23:00">11:00 PM</div>
        </div>
      </div>
    </div>

    <!-- Offers Section -->
      <section class="offers-section">
    <h2 class="section-title">
      <i class="fas fa-tags"></i> Offers
    </h2>
    <?php include '../includes/offer.php'; ?>
  </section>


    <!-- Featured Section -->
    

  <!-- Footer -->
   <?php include '../includes/footer.php' ?>


  <script>
    // ===== MODALS SETUP =====
    const fromModal = document.getElementById('fromModal');
    const toModal = document.getElementById('toModal');
    const carModal = document.getElementById('carModal');
    const dateModal = document.getElementById('dateModal');
    const timeModal = document.getElementById('timeModal');

    const fromField = document.getElementById('fromField');
    const toField = document.getElementById('toField');
    const carField = document.getElementById('carField');
    const pickupDateField = document.getElementById('pickupDateField');
    const pickupTimeField = document.getElementById('pickupTimeField');

    const fromValue = document.getElementById('fromValue');
    const toValue = document.getElementById('toValue');
    const carValue = document.getElementById('carValue');
    const pickupDateValue = document.getElementById('pickupDateValue');
    const pickupTimeValue = document.getElementById('pickupTimeValue');

    // Open modals
    fromField.addEventListener('click', () => fromModal.classList.add('active'));
    toField.addEventListener('click', () => toModal.classList.add('active'));
    carField.addEventListener('click', () => carModal.classList.add('active'));
    pickupDateField.addEventListener('click', () => dateModal.classList.add('active'));
    pickupTimeField.addEventListener('click', () => timeModal.classList.add('active'));

    // Close modals
    document.getElementById('closeFromModal').addEventListener('click', () => fromModal.classList.remove('active'));
    document.getElementById('closeToModal').addEventListener('click', () => toModal.classList.remove('active'));
    document.getElementById('closeCarModal').addEventListener('click', () => carModal.classList.remove('active'));
    document.getElementById('closeDateModal').addEventListener('click', () => dateModal.classList.remove('active'));
    document.getElementById('closeTimeModal').addEventListener('click', () => timeModal.classList.remove('active'));

    // Select from city
    document.querySelectorAll('#fromModal .dropdown-item').forEach(item => {
      item.addEventListener('click', function() {
        fromValue.innerHTML = `${this.dataset.city} <i class="fas fa-chevron-down"></i>`;
        fromModal.classList.remove('active');
      });
    });

    // Select to city
    document.querySelectorAll('#toModal .dropdown-item').forEach(item => {
      item.addEventListener('click', function() {
        toValue.innerHTML = `${this.dataset.city} <i class="fas fa-chevron-down"></i>`;
        toModal.classList.remove('active');
      });
    });

    // Select car type
    document.querySelectorAll('#carModal .dropdown-item').forEach(item => {
      item.addEventListener('click', function() {
        carValue.innerHTML = `${this.dataset.car} <i class="fas fa-chevron-down"></i>`;
        carModal.classList.remove('active');
      });
    });

    // Select time
    document.querySelectorAll('#timeModal .dropdown-item').forEach(item => {
      item.addEventListener('click', function() {
        pickupTimeValue.innerHTML = `${this.dataset.time} <i class="fas fa-chevron-down"></i>`;
        timeModal.classList.remove('active');
      });
    });

    // Calendar
    let currentMonth = 2; // March
    let currentYear = 2026;
    let selectedDay = 19;

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
      pickupDateValue.innerHTML = `${dateStr} <i class="fas fa-chevron-down"></i>`;
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

    generateCalendar();

    // Close modals on outside click
    window.addEventListener('click', (e) => {
      if (e.target === fromModal) fromModal.classList.remove('active');
      if (e.target === toModal) toModal.classList.remove('active');
      if (e.target === carModal) carModal.classList.remove('active');
      if (e.target === dateModal) dateModal.classList.remove('active');
      if (e.target === timeModal) timeModal.classList.remove('active');
    });

    // Search button
    document.getElementById('searchCabBtn').addEventListener('click', function() {
      const from = fromValue.innerHTML.split(' <')[0];
      const to = toValue.innerHTML.split(' <')[0];
      const car = carValue.innerHTML.split(' <')[0];
      const date = pickupDateValue.innerHTML.split(' <')[0];
      const time = pickupTimeValue.innerHTML.split(' <')[0];
      
      alert(`Searching Cabs:\nFrom: ${from}\nTo: ${to}\nCar: ${car}\nDate: ${date}\nTime: ${time}`);
    });

    // Book now buttons
    document.querySelectorAll('.book-now').forEach(btn => {
      btn.addEventListener('click', function() {
        alert('Booking cab - Proceed to payment');
      });
    });
  </script>
</body>
</html>