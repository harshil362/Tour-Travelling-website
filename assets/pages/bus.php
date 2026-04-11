<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bus Results - Travel Go | Search Bus Tickets</title>
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

    /* Header styles (same as home page) */
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

    .lang-currency {
      display: flex;
      gap: 1rem;
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

    /* Results Container */
    .results-container {
      max-width: 1300px;
      margin: 2rem auto;
      padding: 0 2rem;
    }

    /* Sticky Search Bar */
    .sticky-search {
      position: sticky;
      top: 80px;
      z-index: 40;
      background: #0b1e33;
      border-radius: 60px;
      padding: 0.8rem 1.5rem;
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      gap: 1rem;
      flex-wrap: wrap;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }

    .search-summary {
      display: flex;
      align-items: center;
      gap: 1rem;
      flex: 1;
      flex-wrap: wrap;
    }
    .route-info {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      background: rgba(255,255,255,0.1);
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      color: white;
    }
    .route-info i {
      color: #94a3b8;
    }
    .date-info {
      background: rgba(255,255,255,0.1);
      padding: 0.5rem 1.2rem;
      border-radius: 40px;
      color: white;
    }

    .edit-fields {
      display: flex;
      align-items: center;
      gap: 0.8rem;
      flex-wrap: wrap;
    }
    .edit-field {
      background: white;
      border-radius: 40px;
      padding: 0.4rem 1rem;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }
    .edit-field i {
      color: #94a3b8;
    }
    .search-blue-btn {
      background: #2563eb;
      color: white;
      border: none;
      padding: 0.6rem 1.8rem;
      border-radius: 40px;
      font-weight: 600;
      cursor: pointer;
    }

    /* Offers Section */
    .offers-section {
      margin: 2rem 0;
    }
    .offers-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .offers-title {
      font-size: 1.8rem;
      font-weight: 700;
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
    }
    .offer-tab.active {
      color: #2563eb;
      border-bottom-color: #2563eb;
    }

    .offers-scroll {
      display: flex;
      gap: 1.5rem;
      overflow-x: auto;
      padding: 1rem 0 2rem;
    }

    .offer-card {
      min-width: 320px;
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0,0,0,0.04);
      border: 1px solid #edf2f7;
      display: flex;
    }
    .offer-img {
      width: 100px;
      background-size: cover;
      background-position: center;
    }
    .offer-content {
      padding: 1rem;
      flex: 1;
    }
    .offer-content h4 {
      font-size: 1rem;
      font-weight: 700;
    }
    .offer-content p {
      font-size: 0.8rem;
      color: #64748b;
    }
    .offer-code {
      background: #eef2ff;
      color: #2563eb;
      font-size: 0.7rem;
      padding: 0.2rem 0.8rem;
      border-radius: 20px;
      display: inline-block;
      margin: 0.5rem 0;
      font-weight: 600;
    }
    .offer-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .book-now {
      color: #2563eb;
      font-weight: 600;
      font-size: 0.8rem;
      cursor: pointer;
    }
    .tc {
      color: #94a3b8;
      font-size: 0.7rem;
    }

    /* Bus Results List */
    .results-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 2rem 0 1.5rem;
    }
    .results-count {
      font-weight: 600;
      color: #2563eb;
    }
    .sort-dropdown select {
      padding: 0.5rem 1.5rem;
      border-radius: 30px;
      border: 1px solid #e2e8f0;
      background: white;
    }

    .bus-list {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .bus-card {
      background: white;
      border-radius: 20px;
      padding: 1.5rem;
      box-shadow: 0 4px 12px rgba(0,0,0,0.04);
      border: 1px solid #edf2f7;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .bus-info {
      display: flex;
      align-items: center;
      gap: 2rem;
      flex-wrap: wrap;
    }
    .bus-operator {
      font-weight: 700;
      font-size: 1.1rem;
    }
    .bus-type {
      font-size: 0.8rem;
      color: #64748b;
    }
    .bus-rating {
      background: #22c55e;
      color: white;
      padding: 0.3rem 0.8rem;
      border-radius: 30px;
      font-size: 0.8rem;
      font-weight: 600;
    }

    .bus-timing {
      display: flex;
      align-items: center;
      gap: 2rem;
    }
    .time-block {
      text-align: center;
    }
    .time {
      font-weight: 700;
      font-size: 1.2rem;
    }
    .city {
      font-size: 0.8rem;
      color: #64748b;
    }
    .duration {
      color: #2563eb;
      font-weight: 500;
      font-size: 0.9rem;
    }

    .bus-price {
      text-align: right;
    }
    .price {
      font-weight: 700;
      font-size: 1.5rem;
      color: #2563eb;
    }
    .price small {
      font-size: 0.8rem;
      color: #64748b;
      font-weight: 400;
    }
    .view-seats {
      background: #2563eb;
      color: white;
      border: none;
      padding: 0.8rem 2rem;
      border-radius: 40px;
      font-weight: 600;
      margin-top: 0.5rem;
      cursor: pointer;
    }

    /* Footer (same as home page) */
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
    .footer-col a { color: #9aa9b9; text-decoration: none; font-size: 0.85rem; }

    .quick-links-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 0.8rem;
    }
    .quick-link {
      color: #9aa9b9;
      text-decoration: none;
      font-size: 0.8rem;
    }

    .copyright {
      text-align: center;
      border-top: 1px solid #1e2b3c;
      padding-top: 2rem;
      margin-top: 2.5rem;
    }

    .weather-info {
      background: #1e2b3c;
      padding: 0.5rem 1rem;
      border-radius: 30px;
      display: inline-block;
      margin-top: 1rem;
    }

    @media (max-width: 768px) {
      .bus-card {
        flex-direction: column;
        align-items: flex-start;
      }
      .bus-price {
        text-align: left;
        width: 100%;
      }
      .sticky-search {
        flex-direction: column;
        align-items: stretch;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
    <?php include 'header.php'; ?>



  <!-- Results Container -->
  <div class="results-container">

    <!-- Sticky Search Bar -->
    <div class="sticky-search" id="stickySearch">
      <div class="search-summary">
        <div class="route-info">
          <i class="fas fa-map-marker-alt"></i>
          <span id="displayFrom">Delhi, Delhi</span>
          <i class="fas fa-arrow-right"></i>
          <span id="displayTo">Kanpur, Uttar Pradesh</span>
        </div>
        <div class="date-info">
          <i class="far fa-calendar-alt"></i>
          <span id="displayDate">19 Mar'26</span>
          <span id="displayDay">Thursday</span>
        </div>
      </div>
      <div class="edit-fields">
        <div class="edit-field">
          <i class="fas fa-map-marker-alt"></i>
          <span id="editFrom">Delhi</span>
        </div>
        <div class="edit-field">
          <i class="fas fa-map-marker-alt"></i>
          <span id="editTo">Kanpur</span>
        </div>
        <div class="edit-field">
          <i class="far fa-calendar-alt"></i>
          <span id="editDate">19 Mar'26</span>
        </div>
        <button class="search-blue-btn" onclick="window.location.href='bus.php'">
          <i class="fas fa-search"></i> SEARCH
        </button>
      </div>
    </div>

    <!-- Offers Section -->
    <div class="offers-section">
      <div class="offers-header">
        <h2 class="offers-title">Offers</h2>
        <div class="offers-tabs">
          <span class="offer-tab active" data-offer="bus">Bus</span>
          <span class="offer-tab" data-offer="all">All Offers</span>
          <span class="offer-tab" data-offer="cabs">Cabs</span>
          <span class="offer-tab" data-offer="hotels">Hotels</span>
          <span class="offer-tab" data-offer="flights">Flights</span>
          <span class="offer-tab" data-offer="holidays">Holidays</span>
          <span class="offer-tab" data-offer="trains">Trains</span>
        </div>
      </div>

      <div class="offers-scroll" id="offersContainer">
        <!-- Offers loaded by JS -->
      </div>
    </div>

    <!-- Results Header -->
    <div class="results-header">
      <div class="results-count" id="resultsCount">Showing 12 buses</div>
      <div class="sort-dropdown">
        <span>Sorted By:</span>
        <select id="sortSelect">
          <option>Popular</option>
          <option>Price Low to High</option>
          <option>Price High to Low</option>
          <option>Departure</option>
          <option>Duration</option>
        </select>
      </div>
    </div>

    <!-- Bus List -->
    <div class="bus-list" id="busList">
      <!-- Buses will be loaded by JS -->
    </div>
  </div>

  <!-- Footer -->
    <?php include '../includes/footer.php' ?>

  <script>
    // ===== OFFERS DATA =====
    const offersData = [
      {
        id: 1,
        title: "Grab FLAT 8% OFF* on Buses",
        desc: "from Delhi, Uttar Pradesh & more",
        code: "MMTNORTH",
        img: "https://images.pexels.com/photos/2481182/pexels-photo-2481182.jpeg?auto=compress&cs=tinysrgb&w=400",
        category: "bus"
      },
      {
        id: 2,
        title: "TicketsToHappiness",
        desc: "Grab Up to 10% OFF* on Bus Bookings",
        code: "MEGABUS",
        img: "https://images.pexels.com/photos/7256862/pexels-photo-7256862.jpeg?auto=compress&cs=tinysrgb&w=400",
        category: "bus"
      },
      {
        id: 3,
        title: "Big Savings on Your Next Trip",
        desc: "Grab FLAT 10% OFF* on Flights and hotels",
        code: "FLY10",
        img: "https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=400",
        category: "flights"
      },
      {
        id: 4,
        title: "Hotel Special",
        desc: "Flat 15% off on stays above ₹2000",
        code: "HOTEL15",
        img: "https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=400",
        category: "hotels"
      },
      {
        id: 5,
        title: "Cab Discount",
        desc: "Get ₹100 off on first ride",
        code: "CAB100",
        img: "https://images.pexels.com/photos/210182/pexels-photo-210182.jpeg?auto=compress&cs=tinysrgb&w=400",
        category: "cabs"
      }
    ];

    // ===== BUS DATA =====
    const busData = [
      {
        id: 1,
        operator: "Hans Travels",
        type: "A/C Sleeper (2+1)",
        rating: 4.2,
        departure: "21:30",
        departureCity: "Delhi",
        arrival: "06:15",
        arrivalCity: "Kanpur",
        duration: "8h 45m",
        price: 899,
        seats: 28
      },
      {
        id: 2,
        operator: "UPSRTC",
        type: "Volvo A/C Semi-Sleeper",
        rating: 4.0,
        departure: "22:00",
        departureCity: "Delhi",
        arrival: "06:30",
        arrivalCity: "Kanpur",
        duration: "8h 30m",
        price: 749,
        seats: 15
      },
      {
        id: 3,
        operator: "SRM Travels",
        type: "A/C Sleeper (2+1)",
        rating: 4.5,
        departure: "23:15",
        departureCity: "Delhi",
        arrival: "08:00",
        arrivalCity: "Kanpur",
        duration: "8h 45m",
        price: 999,
        seats: 22
      },
      {
        id: 4,
        operator: "Parveen Travels",
        type: "Non A/C Seater",
        rating: 3.8,
        departure: "20:00",
        departureCity: "Delhi",
        arrival: "05:30",
        arrivalCity: "Kanpur",
        duration: "9h 30m",
        price: 599,
        seats: 8
      },
      {
        id: 5,
        operator: "Kaveri Travels",
        type: "A/C Sleeper (2+1)",
        rating: 4.3,
        departure: "21:45",
        departureCity: "Delhi",
        arrival: "06:00",
        arrivalCity: "Kanpur",
        duration: "8h 15m",
        price: 849,
        seats: 32
      },
      {
        id: 6,
        operator: "VRL Travels",
        type: "Volvo A/C Multi-Axle",
        rating: 4.6,
        departure: "22:30",
        departureCity: "Delhi",
        arrival: "06:45",
        arrivalCity: "Kanpur",
        duration: "8h 15m",
        price: 1099,
        seats: 18
      }
    ];

    // ===== LOAD DATA FROM localStorage =====
    window.addEventListener('load', function() {
      const from = localStorage.getItem('busFrom') || 'Delhi, Delhi';
      const to = localStorage.getItem('busTo') || 'Kanpur, Uttar Pradesh';
      const date = localStorage.getItem('busDate') || '19 Mar\'26';
      const day = localStorage.getItem('busDay') || 'Thursday';

      // Update display elements
      document.getElementById('displayFrom').textContent = from.split(',')[0];
      document.getElementById('displayTo').textContent = to.split(',')[0];
      document.getElementById('displayDate').textContent = date;
      document.getElementById('displayDay').textContent = day;

      document.getElementById('editFrom').textContent = from.split(',')[0];
      document.getElementById('editTo').textContent = to.split(',')[0];
      document.getElementById('editDate').textContent = date;

      // Render offers
      renderOffers('bus');
      
      // Render buses
      renderBuses(busData);
    });

    // ===== RENDER OFFERS =====
    function renderOffers(category = 'bus') {
      const container = document.getElementById('offersContainer');
      if (!container) return;
      
      container.innerHTML = '';
      
      const filtered = category === 'all' ? offersData : offersData.filter(o => o.category === category);
      
      filtered.forEach(offer => {
        const card = `
          <div class="offer-card">
            <div class="offer-img" style="background-image: url('${offer.img}')"></div>
            <div class="offer-content">
              <h4>${offer.title}</h4>
              <p>${offer.desc}</p>
              <span class="offer-code">Code: ${offer.code}</span>
              <div class="offer-footer">
                <span class="book-now" onclick="alert('Booking ${offer.title}')">BOOK NOW</span>
                <span class="tc">T&C's Apply</span>
              </div>
            </div>
          </div>
        `;
        container.innerHTML += card;
      });
    }

    // ===== RENDER BUSES =====
    function renderBuses(buses) {
      const container = document.getElementById('busList');
      document.getElementById('resultsCount').textContent = `Showing ${buses.length} buses`;
      
      container.innerHTML = '';
      
      buses.forEach(bus => {
        const card = `
          <div class="bus-card">
            <div class="bus-info">
              <div>
                <div class="bus-operator">${bus.operator}</div>
                <div class="bus-type">${bus.type}</div>
                <div class="bus-rating">${bus.rating} ★</div>
              </div>
              <div class="bus-timing">
                <div class="time-block">
                  <div class="time">${bus.departure}</div>
                  <div class="city">${bus.departureCity}</div>
                </div>
                <div class="duration">${bus.duration}</div>
                <div class="time-block">
                  <div class="time">${bus.arrival}</div>
                  <div class="city">${bus.arrivalCity}</div>
                </div>
              </div>
            </div>
            <div class="bus-price">
              <div class="price">₹${bus.price} <small>per seat</small></div>
              <div style="color:#22c55e; font-size:0.8rem;">${bus.seats} seats available</div>
              <button class="view-seats" onclick="alert('Viewing seats for ${bus.operator}')">VIEW SEATS</button>
            </div>
          </div>
        `;
        container.innerHTML += card;
      });
    }

    // ===== OFFER TABS =====
    document.querySelectorAll('.offer-tab').forEach(tab => {
      tab.addEventListener('click', function() {
        document.querySelectorAll('.offer-tab').forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        renderOffers(this.dataset.offer);
      });
    });

    // ===== SORTING =====
    document.getElementById('sortSelect').addEventListener('change', function() {
      const sortBy = this.value;
      let sorted = [...busData];
      
      if (sortBy === 'Price Low to High') {
        sorted.sort((a, b) => a.price - b.price);
      } else if (sortBy === 'Price High to Low') {
        sorted.sort((a, b) => b.price - a.price);
      } else if (sortBy === 'Departure') {
        sorted.sort((a, b) => a.departure.localeCompare(b.departure));
      } else if (sortBy === 'Duration') {
        sorted.sort((a, b) => a.duration.localeCompare(b.duration));
      }
      
      renderBuses(sorted);
    });
  </script>
</body>
</html>