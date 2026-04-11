<?php
// pages/header.php - TravelGo Header Component
?>
<!-- header / navbar -->
 <style>
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
    ::-webkit-scrollbar {
      width: 8px;
      height: 6px;
    }

    ::-webkit-scrollbar-track {
      background: #f1f5f9;
    }

    ::-webkit-scrollbar-thumb {
      background: #94a3b8;
      border-radius: 12px;
    }

    /* header / navbar */
    .navbar {
      background-color: #ffffff;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
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
    }

    .menu-items a {
      text-decoration: none;
      color: #334155;
      font-size: 0.95rem;
      display: flex;
      align-items: center;
      gap: 6px;
      transition: color 0.2s;
    }

    .menu-items a i {
      color: #64748b;
      font-size: 1rem;
    }

    .menu-items a:hover {
      color: #2563eb;
    }

    .menu-items a:hover i {
      color: #2563eb;
    }

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
      box-shadow: 0 6px 12px rgba(37, 99, 235, 0.2);
      transition: 0.2s;
    }

    .login-btn:hover {
      background: #1d4ed8;
      box-shadow: 0 8px 16px rgba(37, 99, 235, 0.3);
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

 </style>
<header>
  <div class="navbar">
    <div class="nav-left">
      <div class="logo"><i class="fas fa-compass"></i> TravelGo</div>
      <div class="menu-items">
        <a href="/Travel_Go/assets/index.php"><i class="fas fa-plane"></i>Flights</a>
        <a href="/Travel_Go/assets/pages/hotels.php"><i class="fas fa-hotel"></i> Hotels</a>
        <a href="/Travel_Go/assets/pages/villas.php"><i class="fas fa-home"></i> Villas</a> 
        <a href="/Travel_Go/assets/pages/packages.php"><i class="fas fa-umbrella-beach"></i> Packages</a>
        <a href="/Travel_Go/assets/pages/trains.php"><i class="fas fa-train"></i> Trains</a>
        <a href="/Travel_Go/assets/pages/bus.php"><i class="fas fa-bus"></i> Buses</a>
        <a href="/Travel_Go/assets/pages/cabs.php"><i class="fas fa-taxi"></i> Cabs</a>
        <a href="/Travel_Go/assets/pages/visa.php"><i class="fas fa-passport"></i> Visa</a>
        <a href="/Travel_Go/assets/includes/offer.php"><i class="fas fa-tags"></i> Offers</a>
      </div>
    </div>
    <div class="nav-right">
      <div class="lang-currency">
        <select>
          <option>INR</option><option>USD</option><option>EUR</option>
        </select>
        <select>
          <option>English</option><option>हिंदी</option>
        </select>
      </div>
      <a href="/Travel_Go/assets/pages/login.php" class="login-btn"><i class="far fa-user-circle"></i> Login / Register</a>
    </div>
  </div>
</header>