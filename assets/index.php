<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travel Go - Book Flights, Hotels, Trains, Buses & Cabs</title>
  <!-- Font Awesome 5 (icons) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- Google Fonts: Poppins + Roboto fallback -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet" />
  <style>
    /* style.css – fully integrated */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', 'Roboto', sans-serif;
    }

    body {
      background-color: #f2f5f9;
      line-height: 1.5;
      color: #1e293b;
    }

    /* modern scrollbar */
    ::-webkit-scrollbar { width: 8px; height: 6px; }
    ::-webkit-scrollbar-track { background: #f1f5f9; }
    ::-webkit-scrollbar-thumb { background: #94a3b8; border-radius: 12px; }

    /* header / navbar */
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
    .menu-items a i { color: #64748b; font-size: 1rem; }
    .menu-items a:hover { color: #2563eb; }
    .menu-items a:hover i { color: #2563eb; }

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
      transition: 0.2s;
    }
    .login-btn:hover { background: #1d4ed8; box-shadow: 0 8px 16px rgba(37,99,235,0.3); }

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

    /* hero with background image */
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)),
        url('https://images.pexels.com/photos/672358/pexels-photo-672358.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover no-repeat;
      min-height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem 1.5rem;
    }

    /* booking card – main focus */
    .booking-card {
      background: white;
      max-width: 1100px;
      width: 100%;
      border-radius: 32px;
      box-shadow: 0 30px 50px rgba(0, 0, 0, 0.25);
      overflow: hidden;
      backdrop-filter: blur(2px);
      transition: 0.3s;
    }

    /* tabs */
    .booking-tabs {
      display: flex;
      flex-wrap: wrap;
      background: #f8fafc;
      border-bottom: 1px solid #e9eef3;
      padding: 0.2rem 1.5rem 0 1.5rem;
      gap: 0.2rem;
    }

    .tab-item {
      padding: 1rem 1.8rem;
      font-weight: 600;
      font-size: 1rem;
      color: #64748b;
      cursor: pointer;
      border-bottom: 3px solid transparent;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: 0.15s;
    }

    .tab-item i {
      font-size: 1.2rem;
    }

    .tab-item.active {
      color: #2563eb;
      border-bottom: 3px solid #2563eb;
      background: white;
      border-radius: 16px 16px 0 0;
    }

    /* tab content */
    .tab-pane {
      padding: 1.8rem 2rem 2rem 2rem;
      display: none;
    }

    .tab-pane.active-pane {
      display: block;
    }

    /* trip type radios */
    .trip-type {
      display: flex;
      gap: 2.5rem;
      margin-bottom: 1.8rem;
    }

    .trip-type label {
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 500;
      color: #334155;
      cursor: pointer;
    }

    .trip-type input[type="radio"] {
      accent-color: #2563eb;
      width: 18px;
      height: 18px;
    }

    /* from/to row */
    .location-row {
      display: grid;
      grid-template-columns: 1fr 0.8fr 1fr 1fr 1.3fr;
      gap: 0.8rem;
      margin-bottom: 1.8rem;
    }

    .field {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 20px;
      padding: 0.6rem 1rem 0.6rem 1rem;
      transition: 0.2s;
    }

    .field:focus-within {
      border-color: #2563eb;
      background: white;
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .field label {
      font-size: 0.7rem;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: #64748b;
      font-weight: 600;
    }

    .field input,
    .field select {
      width: 100%;
      border: none;
      background: transparent;
      font-weight: 500;
      font-size: 1rem;
      outline: none;
      color: #0f172a;
    }

    .field input::placeholder {
      color: #94a3b8;
      font-weight: 400;
    }

    /* travellers & class row */
    .travellers-row {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      align-items: center;
      margin-bottom: 1.5rem;
    }

    .trav-class {
      display: flex;
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 40px;
      padding: 0.4rem 1rem;
      align-items: center;
      gap: 0.8rem;
      flex: 1 1 260px;
    }

    .trav-class i {
      color: #2563eb;
      font-size: 1.2rem;
    }

    .trav-class select {
      border: none;
      background: transparent;
      font-weight: 500;
      outline: none;
    }

    /* special fares */
    .fare-options {
      display: flex;
      flex-wrap: wrap;
      gap: 0.7rem;
      margin: 1.8rem 0 2rem 0;
    }

    .fare-chip {
      background: #f1f5f9;
      border-radius: 40px;
      padding: 0.5rem 1.3rem;
      font-size: 0.85rem;
      font-weight: 500;
      color: #334155;
      border: 1px solid transparent;
      cursor: pointer;
      transition: 0.15s;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }

    .fare-chip i {
      color: #2563eb;
    }

    .fare-chip:hover {
      background: #e6edf8;
      border-color: #2563eb;
      color: #2563eb;
    }

    .fare-chip.active-fare {
      background: #2563eb;
      color: white;
    }

    .fare-chip.active-fare i {
      color: white;
    }

    /* search button */
    .search-btn {
      background: linear-gradient(95deg, #2563eb, #3b82f6);
      border: none;
      color: white;
      font-weight: 700;
      font-size: 1.3rem;
      padding: 1rem;
      border-radius: 60px;
      width: 100%;
      border: 2px solid white;
      box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
      transition: 0.2s;
      cursor: pointer;
      letter-spacing: 1px;
    }

    .search-btn:hover {
      background: linear-gradient(95deg, #1d4ed8, #2563eb);
      transform: scale(1.02);
      box-shadow: 0 15px 25px rgba(37, 99, 235, 0.4);
    }

    /* offers section (horizontal scroll) */
    .offers-section {
      padding: 3rem 2rem;
      max-width: 1300px;
      margin: 0 auto;
    }

    .section-title {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .offers-scroll {
      display: flex;
      gap: 1.5rem;
      overflow-x: auto;
      padding: 0.5rem 0 2rem 0;
      scroll-snap-type: x mandatory;
    }

    .offer-card {
      min-width: 260px;
      background: white;
      border-radius: 28px;
      box-shadow: 0 12px 24px -8px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      scroll-snap-align: start;
      transition: 0.2s;
    }

    .offer-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 22px 30px -8px rgba(37, 99, 235, 0.15);
    }

    .offer-card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .offer-desc {
      padding: 1rem 1.2rem 1.5rem;
    }

    .offer-desc h4 {
      font-weight: 700;
      margin-bottom: 4px;
    }

    .offer-desc p {
      color: #64748b;
      font-size: 0.9rem;
      margin-bottom: 6px;
    }

    .offer-price {
      color: #2563eb;
      font-weight: 700;
      font-size: 1.3rem;
    }

    /* explore section */
    .explore-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 1rem;
      margin-top: 1.5rem;
    }

    .explore-card {
      background: white;
      border-radius: 32px;
      padding: 2rem 1rem;
      text-align: center;
      box-shadow: 0 6px 14px #e9eef3;
      font-weight: 600;
      transition: 0.2s;
      border: 1px solid #eef2f6;
      color: #1e293b;
      text-decoration: none;
    }

    .explore-card i {
      font-size: 2.4rem;
      color: #2563eb;
      margin-bottom: 8px;
      display: block;
    }

    .explore-card:hover {
      background: #2563eb;
      color: white;
    }

    .explore-card:hover i {
      color: white;
    }

    /* footer */
    footer {
      background: #0b1120;
      color: #cbd5e1;
      padding: 3rem 2rem 1.5rem;
      margin-top: 3rem;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 2.5rem;
      max-width: 1300px;
      margin: 0 auto;
    }

    .footer-col h5 {
      color: white;
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }

    .footer-col ul {
      list-style: none;
    }

    .footer-col li {
      margin-bottom: 0.6rem;
    }

    .footer-col a {
      color: #9aa9b9;
      text-decoration: none;
      font-size: 0.9rem;
    }

    .footer-col a:hover {
      color: white;
    }

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
      background: #2563eb;
    }

    .copyright {
      text-align: center;
      border-top: 1px solid #1e2b3c;
      padding-top: 2rem;
      margin-top: 2.5rem;
      font-size: 0.9rem;
    }

    /* responsive tweaks */
    @media (max-width: 1024px) {
      .location-row {
        grid-template-columns: 1fr 1fr;
      }
      .menu-items {
        display: none;
      }
    }

    @media (max-width: 680px) {
      .navbar {
        flex-direction: column;
        gap: 0.8rem;
      }
      .nav-left {
        flex-wrap: wrap;
        justify-content: center;
      }
      .booking-tabs {
        justify-content: center;
      }
      .trip-type {
        flex-wrap: wrap;
        gap: 1rem;
      }
    }

    /* validation style */
    .error-shake {
      animation: shake 0.3s;
      border-color: #dc2626 !important;
    }

    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      75% { transform: translateX(5px); }
    }

    /* Hotel, Train, Bus, Cabs specific styles */
    .two-col-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
    }
    
    .radio-group {
      display: flex;
      gap: 2rem;
      margin-bottom: 1rem;
    }
    
    .radio-group label {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-weight: 500;
    }
    
    .checkbox-group {
      display: flex;
      flex-wrap: wrap;
      gap: 1.5rem;
      margin: 1rem 0;
    }
    
    .checkbox-group label {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.9rem;
    }
  </style>
</head>

<body>

  <!-- INCLUDE HEADER -->
  <?php include 'pages/header.php'; ?> 

  <!-- hero + booking card -->
  <section class="hero">
    <div class="booking-card">
      <!-- tabs: flights, hotels, trains, buses, cabs -->
      <div class="booking-tabs" id="tabHeaders">
        <div class="tab-item active" data-tab="flights"><i class="fas fa-plane"></i> Flights</div>
        <div class="tab-item" data-tab="hotels"><i class="fas fa-hotel"></i> Hotels</div>
        <div class="tab-item" data-tab="trains"><i class="fas fa-train"></i> Trains</div>
        <div class="tab-item" data-tab="buses"><i class="fas fa-bus"></i> Buses</div>
        <div class="tab-item" data-tab="cabs"><i class="fas fa-taxi"></i> Cabs</div>
      </div>

      <!-- FLIGHTS TAB (active by default) -->
      <div class="tab-pane active-pane" id="flightsPane">
        <form id="flightSearchForm" action="pages/flight-search.php" method="GET">
          <div class="trip-type">
            <label><input type="radio" name="trip" value="oneway" checked> <span>One Way</span></label>
            <label><input type="radio" name="trip" value="round"> <span>Round Trip</span></label>
            <label><input type="radio" name="trip" value="multi"> <span>Multi City</span></label>
          </div>

          <div class="location-row">
            <div class="field">
              <label>FROM</label>
              <input type="text" placeholder="DEL - New Delhi" name="from" id="fromCity" value="DEL" required>
            </div>
            <div class="field" style="align-self:center; text-align:center; max-width:40px; background:transparent; border:none;">
              <i class="fas fa-exchange-alt fa-lg" style="color:#2563eb;"></i>
            </div>
            <div class="field">
              <label>TO</label>
              <input type="text" placeholder="BLR - Bengaluru" name="to" id="toCity" value="BLR" required>
            </div>
            <div class="field">
              <label>DEPARTURE</label>
              <input type="date" name="depart" id="departDate" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
            </div>
            <div class="field" id="returnField">
              <label>RETURN</label>
              <input type="date" name="return" id="returnDate" disabled>
            </div>
          </div>

          <div class="travellers-row">
            <div class="trav-class">
              <i class="fas fa-user-friends"></i>
              <select name="travellers" id="travellersClass">
                <option value="1_Economy">1 Traveller, Economy</option>
                <option value="2_Economy" selected>2 Travellers, Economy</option>
                <option value="1_Business">1 Traveller, Business</option>
                <option value="2_Premium">2 Travellers, Premium Economy</option>
              </select>
            </div>
          </div>

          <!-- special fares -->
          <div class="fare-options">
            <span class="fare-chip active-fare"><i class="fas fa-tag"></i> Regular</span>
            <span class="fare-chip"><i class="fas fa-graduation-cap"></i> Student</span>
            <span class="fare-chip"><i class="fas fa-shield-alt"></i> Armed Forces</span>
            <span class="fare-chip"><i class="fas fa-senior"></i> Senior Citizen</span>
            <span class="fare-chip"><i class="fas fa-briefcase"></i> Corporate</span>
            
          </div>

          <!-- search button -->
          <button type="submit" class="search-btn" id="searchFlightBtn">
            <i href="../pages/flight-search.php" class="fas fa-search"></i> SEARCH FLIGHTS
          </button>
        </form>
      </div>

      <!-- HOTELS TAB -->
      <div class="tab-pane" id="hotelsPane">
        <form id="hotelSearchForm" action="pages/hotel-search.php" method="GET">
          <div class="radio-group">
            <label><input type="radio" name="hotel_type" value="domestic" checked> Domestic</label>
            <label><input type="radio" name="hotel_type" value="international"> International</label>
          </div>

          <div class="location-row" style="grid-template-columns: 2fr 1fr 1fr 1fr;">
            <div class="field">
              <label><i class="fas fa-map-marker-alt"></i> CITY / HOTEL NAME</label>
              <input type="text" placeholder="Goa, Mumbai, Delhi..." name="city" value="Goa" required>
            </div>
            <div class="field">
              <label>CHECK-IN</label>
              <input type="date" name="checkin" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
            </div>
            <div class="field">
              <label>CHECK-OUT</label>
              <input type="date" name="checkout" value="<?php echo date('Y-m-d', strtotime('+3 days')); ?>" required>
            </div>
            <div class="field">
              <label>GUESTS</label>
              <select name="guests">
                <option value="1">1 Guest, 1 Room</option>
                <option value="2" selected>2 Guests, 1 Room</option>
                <option value="3">3 Guests, 1 Room</option>
                <option value="4">4 Guests, 2 Rooms</option>
              </select>
            </div>
          </div>

          <!-- Price Range -->
          <div class="checkbox-group">
            <label><input type="checkbox" name="price[]" value="0-1500"> ₹0 - ₹1500</label>
            <label><input type="checkbox" name="price[]" value="1500-2500"> ₹1500 - ₹2500</label>
            <label><input type="checkbox" name="price[]" value="2500-5000"> ₹2500 - ₹5000</label>
            <label><input type="checkbox" name="price[]" value="5000+"> ₹5000+</label>
          </div>

          <div class="fare-options" style="margin-top: 0.5rem;">
            <span class="fare-chip active-fare"><i class="fas fa-tag"></i> Regular</span>
            <span class="fare-chip"><i class="fas fa-hotel"></i> Resort</span>
            <span class="fare-chip"><i class="fas fa-home"></i> Homestay</span>
            <span class="fare-chip"><i class="fas fa-building"></i> Apartment</span>
          </div>

          <button type="submit" class="search-btn" style="font-size: 1.3rem;">
            <i class="fas fa-search"></i> SEARCH HOTELS
          </button>
        </form>
      </div>
      
      <!-- TRAINS TAB -->
      <div class="tab-pane" id="trainsPane">
        <form id="trainSearchForm" action="pages/train-search.php" method="GET">
          <div class="radio-group">
            <label><input type="radio" name="train_type" value="regular" checked> Regular</label>
            <label><input type="radio" name="train_type" value="premium"> Premium</label>
            <label><input type="radio" name="train_type" value="special"> Special Trains</label>
          </div>

          <div class="location-row" style="grid-template-columns: 1.5fr 1.5fr 1fr 1fr;">
            <div class="field">
              <label>FROM</label>
              <input type="text" placeholder="NDLS - New Delhi" name="from" value="NDLS" required>
            </div>
            <div class="field" style="align-self:center; text-align:center; max-width:40px; background:transparent; border:none;">
              <i class="fas fa-exchange-alt fa-lg" style="color:#2563eb;"></i>
            </div>
            <div class="field">
              <label>TO</label>
              <input type="text" placeholder="CNB - Kanpur" name="to" value="CNB" required>
            </div>
            <div class="field">
              <label>DATE</label>
              <input type="date" name="date" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
            </div>
          </div>

          <div class="travellers-row">
            <div class="trav-class">
              <i class="fas fa-user-friends"></i>
              <select name="class">
                <option value="all">All Class</option>
                <option value="sleeper">Sleeper Class</option>
                <option value="3ac">Third AC</option>
                <option value="2ac">Second AC</option>
                <option value="1ac">First AC</option>
                <option value="2s">Second Seating</option>
                <option value="cc">AC Chair Car</option>
              </select>
            </div>
          </div>

          <div class="checkbox-group">
            <label><input type="checkbox" name="concession" value="senior"> Senior Citizen</label>
            <label><input type="checkbox" name="concession" value="ladies"> Ladies</label>
            <label><input type="checkbox" name="concession" value="tatkal"> Tatkal</label>
            <label><input type="checkbox" name="concession" value="premium_tatkal"> Premium Tatkal</label>
          </div>

          <button type="submit" class="search-btn">
            <i class="fas fa-search"></i> SEARCH TRAINS
          </button>
        </form>
      </div>
      
      <!-- BUSES TAB -->
      <div class="tab-pane" id="busesPane">
        <form id="busSearchForm" action="pages/bus-search.php" method="GET">
          <div class="radio-group">
            <label><input type="radio" name="bus_type" value="all" checked> All Buses</label>
            <label><input type="radio" name="bus_type" value="ac"> A/C</label>
            <label><input type="radio" name="bus_type" value="non_ac"> Non A/C</label>
            <label><input type="radio" name="bus_type" value="sleeper"> Sleeper</label>
          </div>

          <div class="location-row" style="grid-template-columns: 1.5fr 0.8fr 1.5fr 1fr 1fr;">
            <div class="field">
              <label>FROM</label>
              <input type="text" placeholder="Delhi" name="from" value="Delhi" required>
            </div>
            <div class="field" style="align-self:center; text-align:center; max-width:40px; background:transparent; border:none;">
              <i class="fas fa-exchange-alt fa-lg" style="color:#2563eb;"></i>
            </div>
            <div class="field">
              <label>TO</label>
              <input type="text" placeholder="Kanpur" name="to" value="Kanpur" required>
            </div>
            <div class="field">
              <label>DATE</label>
              <input type="date" name="date" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
            </div>
            <div class="field">
              <label>RETURN</label>
              <input type="date" name="return" placeholder="Optional">
            </div>
          </div>

          <div class="travellers-row">
            <div class="trav-class">
              <i class="fas fa-user-friends"></i>
              <select name="passengers">
                <option value="1">1 Passenger</option>
                <option value="2" selected>2 Passengers</option>
                <option value="3">3 Passengers</option>
                <option value="4">4 Passengers</option>
              </select>
            </div>
          </div>

          <div class="checkbox-group">
            <label><input type="checkbox" name="amenities" value="wifi"> Wi-Fi</label>
            <label><input type="checkbox" name="amenities" value="water"> Water Bottle</label>
            <label><input type="checkbox" name="amenities" value="charging"> Charging Point</label>
            <label><input type="checkbox" name="amenities" value="movie"> Movie</label>
          </div>

          <button type="submit" class="search-btn">
            <i class="fas fa-search"></i> SEARCH BUSES
          </button>
        </form>
      </div>
      
      <!-- CABS TAB -->
      <div class="tab-pane" id="cabsPane">
        <form id="cabSearchForm" action="pages/cab-search.php" method="GET">
          <div class="radio-group">
            <label><input type="radio" name="cab_type" value="outstation" checked> Outstation</label>
            <label><input type="radio" name="cab_type" value="local"> Local</label>
            <label><input type="radio" name="cab_type" value="airport"> Airport Transfer</label>
          </div>

          <div class="two-col-grid">
            <div class="field">
              <label>FROM</label>
              <input type="text" placeholder="Pickup Location" name="from" value="Delhi" required>
            </div>
            <div class="field">
              <label>TO</label>
              <input type="text" placeholder="Drop Location" name="to" value="Agra" required>
            </div>
          </div>

          <div class="two-col-grid" style="margin: 1rem 0;">
            <div class="field">
              <label>PICKUP DATE</label>
              <input type="date" name="pickup_date" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
            </div>
            <div class="field">
              <label>PICKUP TIME</label>
              <input type="time" name="pickup_time" value="09:00" required>
            </div>
          </div>

          <div class="two-col-grid" style="margin: 1rem 0;">
            <div class="field">
              <label>RETURN DATE</label>
              <input type="date" name="return_date" value="<?php echo date('Y-m-d', strtotime('+3 days')); ?>">
            </div>
            <div class="field">
              <label>RETURN TIME</label>
              <input type="time" name="return_time" value="18:00">
            </div>
          </div>

          <div class="travellers-row">
            <div class="trav-class">
              <i class="fas fa-user-friends"></i>
              <select name="passengers">
                <option value="1">1 Passenger</option>
                <option value="2" selected>2 Passengers</option>
                <option value="3">3 Passengers</option>
                <option value="4">4 Passengers</option>
                <option value="5">5 Passengers</option>
              </select>
            </div>
            <div class="trav-class">
              <i class="fas fa-car"></i>
              <select name="car_type">
                <option value="hatchback">Hatchback</option>
                <option value="sedan">Sedan</option>
                <option value="suv">SUV</option>
                <option value="innova">Innova</option>
                <option value="luxury">Luxury</option>
              </select>
            </div>
          </div>

          <div class="checkbox-group">
            <label><input type="checkbox" name="trip_type" value="oneway"> One Way</label>
            <label><input type="checkbox" name="trip_type" value="roundtrip" checked> Round Trip</label>
            <label><input type="checkbox" name="extras" value="driver"> Driver Included</label>
            <label><input type="checkbox" name="extras" value="toll"> Toll Included</label>
          </div>

          <button type="submit" class="search-btn">
            <i class="fas fa-search"></i> SEARCH CABS
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Offers Section -->
  <section class="offers-section">
    <h2 class="section-title">
      <i class="fas fa-tags"></i> Offers
    </h2>
    <?php include 'includes/offer.php'; ?>
  </section>

  <!-- Extra: Explore more -->
  <section class="offers-section" style="padding-top:0;">
    <h2 class="section-title"><i class="fas fa-map-marked-alt"></i> Explore more</h2>
    <div class="explore-grid">
      <a href="#" class="explore-card"><i class="fas fa-map-signs"></i> Where2Go</a>
      <a href="#" class="explore-card"><i class="fas fa-route"></i> How2Go</a>
      <a href="#" class="explore-card"><i class="fas fa-clock"></i> Weekend trips</a>
      <a href="#" class="explore-card"><i class="fas fa-mountain"></i> Adventure</a>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../assets/includes/footer.php' ?>

  <!-- UPDATED SCRIPT.JS with tab switching for all tabs -->
  <script>
    (function() {
      // ----- TAB SWITCHING -----
      const tabs = document.querySelectorAll('.tab-item');
      const panes = {
        flights: document.getElementById('flightsPane'),
        hotels: document.getElementById('hotelsPane'),
        trains: document.getElementById('trainsPane'),
        buses: document.getElementById('busesPane'),
        cabs: document.getElementById('cabsPane')
      };

      function activateTab(tabId) {
        tabs.forEach(t => t.classList.remove('active'));
        Object.values(panes).forEach(p => p.classList.remove('active-pane'));

        const activeTab = Array.from(tabs).find(t => t.dataset.tab === tabId);
        if (activeTab) activeTab.classList.add('active');
        if (panes[tabId]) panes[tabId].classList.add('active-pane');
      }

      tabs.forEach(tab => {
        tab.addEventListener('click', (e) => {
          const tabId = tab.dataset.tab;
          activateTab(tabId);
          
          // Special handling for flights tab return date
          if (tabId === 'flights') {
            const roundTripRadio = document.querySelector('input[name="trip"][value="round"]');
            const returnInput = document.getElementById('returnDate');
            if (roundTripRadio) {
              returnInput.disabled = !roundTripRadio.checked;
            }
          }
        });
      });

      // ----- FLIGHT TRIP TYPE TOGGLE (return date enable) -----
      const onewayRadio = document.querySelector('input[name="trip"][value="oneway"]');
      const roundRadio = document.querySelector('input[name="trip"][value="round"]');
      const multiRadio = document.querySelector('input[name="trip"][value="multi"]');
      const returnDateField = document.getElementById('returnDate');

      function toggleReturnDate() {
        if (roundRadio && roundRadio.checked) {
          returnDateField.disabled = false;
          returnDateField.value = '<?php echo date('Y-m-d', strtotime('+7 days')); ?>';
        } else {
          returnDateField.disabled = true;
          returnDateField.value = '';
        }
      }
      
      if (onewayRadio && roundRadio && multiRadio) {
        onewayRadio.addEventListener('change', toggleReturnDate);
        roundRadio.addEventListener('change', toggleReturnDate);
        multiRadio.addEventListener('change', toggleReturnDate);
        toggleReturnDate();
      }

      // ----- fare chips active toggle (just visual) -----
      const fareChips = document.querySelectorAll('.fare-chip');
      fareChips.forEach(chip => {
        chip.addEventListener('click', function() {
          fareChips.forEach(c => c.classList.remove('active-fare'));
          this.classList.add('active-fare');
        });
      });

      // ----- FLIGHT FORM VALIDATION -----
      const flightForm = document.getElementById('flightSearchForm');
      if (flightForm) {
        flightForm.addEventListener('submit', function(e) {
          const from = document.getElementById('fromCity')?.value.trim();
          const to = document.getElementById('toCity')?.value.trim();
          const depart = document.getElementById('departDate')?.value;
          let valid = true;

          if (!from || !to || !depart) valid = false;
          else if (from.toLowerCase() === to.toLowerCase()) valid = false;

          if (roundRadio && roundRadio.checked) {
            const ret = document.getElementById('returnDate')?.value;
            if (!ret) valid = false;
          }

          if (!valid) {
            e.preventDefault();
            const fields = [document.getElementById('fromCity'), document.getElementById('toCity'), document.getElementById('departDate')];
            fields.forEach(f => {
              if (f) f.classList.add('error-shake');
              setTimeout(() => f.classList.remove('error-shake'), 500);
            });
            alert('Please fill all fields correctly (From/To should be different)');
          }
        });
      }

      // ----- HOTEL FORM VALIDATION -----
      const hotelForm = document.getElementById('hotelSearchForm');
      if (hotelForm) {
        hotelForm.addEventListener('submit', function(e) {
          const city = document.querySelector('input[name="city"]')?.value;
          const checkin = document.querySelector('input[name="checkin"]')?.value;
          const checkout = document.querySelector('input[name="checkout"]')?.value;
          
          if (!city || !checkin || !checkout) {
            e.preventDefault();
            alert('Please fill all hotel search fields');
          } else if (new Date(checkin) >= new Date(checkout)) {
            e.preventDefault();
            alert('Check-out date must be after check-in date');
          }
        });
      }

      // ----- TRAIN FORM VALIDATION -----
      const trainForm = document.getElementById('trainSearchForm');
      if (trainForm) {
        trainForm.addEventListener('submit', function(e) {
          const from = document.querySelector('input[name="from"]')?.value;
          const to = document.querySelector('input[name="to"]')?.value;
          
          if (!from || !to) {
            e.preventDefault();
            alert('Please fill all train search fields');
          } else if (from === to) {
            e.preventDefault();
            alert('From and To stations cannot be the same');
          }
        });
      }

      // ----- BUS FORM VALIDATION -----
      const busForm = document.getElementById('busSearchForm');
      if (busForm) {
        busForm.addEventListener('submit', function(e) {
          const from = document.querySelector('input[name="from"]')?.value;
          const to = document.querySelector('input[name="to"]')?.value;
          
          if (!from || !to) {
            e.preventDefault();
            alert('Please fill all bus search fields');
          }
        });
      }

      // ----- CAB FORM VALIDATION -----
      const cabForm = document.getElementById('cabSearchForm');
      if (cabForm) {
        cabForm.addEventListener('submit', function(e) {
          const from = document.querySelector('input[name="from"]')?.value;
          const to = document.querySelector('input[name="to"]')?.value;
          const pickupDate = document.querySelector('input[name="pickup_date"]')?.value;
          
          if (!from || !to || !pickupDate) {
            e.preventDefault();
            alert('Please fill all cab search fields');
          }
        });
      }

      // enable multi city note (just message)
      if (multiRadio) {
        multiRadio.addEventListener('change', function() {
          if (multiRadio.checked) {
            alert('Multi city demo: more fields would appear (simplified)');
          }
        });
      }
    })();
  </script>
  <noscript>JS enables tab switching & validation</noscript>
</body>
</html>