<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Offers</title>
  <!-- Font Awesome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- Google Font: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #f3f6fc;
      color: #1a2634;
    }

    .offers-page {
      max-width: 1400px;
      margin: 2rem auto;
      padding: 0 1.8rem;
    }

    /* ----- HEADER + FILTERS ----- */
    .offers-header {
      margin-bottom: 2rem;
    }

    .offers-main-title {
      font-size: 2.8rem;
      font-weight: 700;
      color: #0b1e33;
      letter-spacing: -0.02em;
      margin-bottom: 0.5rem;
    }

    .filter-section {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 1.8rem;
      margin-top: 0.5rem;
      border-bottom: 1px solid #dae2ed;
      padding-bottom: 0.8rem;
    }

    .filter-tabs {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 1.5rem;
      font-weight: 500;
      color: #40526b;
    }

    .filter-tab {
      cursor: pointer;
      padding: 0.2rem 0;
      border-bottom: 3px solid transparent;
      transition: 0.15s;
      white-space: nowrap;
      font-size: 0.95rem;
    }

    .filter-tab.active {
      color: #0066ff;
      border-bottom: 3px solid #0066ff;
    }

    .more-link {
      display: flex;
      align-items: center;
      gap: 5px;
      color: #40526b;
      font-weight: 500;
    }

    /* ESCAPE row */
    .escape-row {
      display: flex;
      align-items: center;
      gap: 1.2rem;
      margin: 1.5rem 0 1.2rem 0;
      background: #ffffffd6;
      padding: 0.8rem 1.2rem;
      border-radius: 60px;
      width: fit-content;
      box-shadow: 0 4px 12px rgba(0,0,0,0.02);
    }
    .escape-item { font-weight: 700; font-size: 1.1rem; color: #1f2b3d; }
    .escape-item.light { font-weight: 500; color: #4f637f; }
    .escape-divider { width: 6px; height: 6px; background: #b5c6db; border-radius: 50%; }

    /* ----- OFFER GRID (4 columns) ----- */
    .offers-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.8rem;
      margin: 2rem 0 2.5rem;
    }

    .offer-card {
      background: white;
      border-radius: 26px;
      overflow: hidden;
      box-shadow: 0 12px 28px rgba(0,0,0,0.04);
      transition: 0.2s;
      border: 1px solid #e6edf6;
      display: flex;
      flex-direction: column;
      cursor: pointer;
    }
    .offer-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 32px -8px rgba(0,102,255,0.18);
    }

    /* image container */
    .offer-img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-bottom: 1px solid #eef2f6;
    }

    .offer-label {
      background: #e1ebfc;
      padding: 0.5rem 1.2rem;
      font-weight: 700;
      font-size: 0.9rem;
      letter-spacing: 0.4px;
      color: #0066ff;
      border-bottom: 1px solid #c9daf5;
    }
    .offer-label-gray {
      background: #edf2f8;
      color: #3e526b;
      border-bottom: 1px solid #d3deec;
    }
    .offer-label-mint {
      background: #dff0ec;
      color: #1b6b5e;
      border-bottom: 1px solid #c0e0da;
    }
    .offer-label-gold {
      background: #fef3d9;
      color: #a66907;
      border-bottom: 1px solid #f0dba8;
    }
    .offer-label-purple {
      background: #e9defa;
      color: #5e3c9e;
      border-bottom: 1px solid #d3c0f0;
    }

    .offer-content {
      padding: 1rem 1.2rem 1.2rem;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .offer-title {
      font-weight: 700;
      font-size: 1.1rem;
      line-height: 1.4;
      margin-bottom: 4px;
      color: #122b44;
    }

    .offer-desc {
      font-size: 0.8rem;
      color: #4f5f73;
      margin-bottom: 0.8rem;
      line-height: 1.5;
      flex: 1;
    }

    .book-now-btn {
      background: #0066ff;
      border: none;
      color: white;
      font-weight: 600;
      padding: 0.5rem 1.3rem;
      border-radius: 40px;
      font-size: 0.8rem;
      cursor: pointer;
      transition: 0.15s;
      box-shadow: 0 6px 14px rgba(0,102,255,0.2);
      width: fit-content;
      text-transform: uppercase;
      letter-spacing: 0.3px;
    }
    .book-now-btn:hover { background: #1d4ed8; }

    .big-highlight {
      font-size: 2rem;
      font-weight: 800;
      line-height: 1;
      margin: 0.2rem 0 0.1rem;
      color: #102b44;
    }

    /* expiry footer */
    .expiry-note {
      margin-top: 2rem;
      border-top: 1px dashed #b9cbdf;
      padding-top: 1.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .expiry-date {
      background: #e2ebf6;
      padding: 0.3rem 1.8rem;
      border-radius: 40px;
      color: #0066ff;
      font-weight: 600;
    }

    /* responsive */
    @media (max-width: 1100px) { .offers-grid { grid-template-columns: repeat(3, 1fr); } }
    @media (max-width: 800px) { .offers-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 500px) { .offers-grid { grid-template-columns: 1fr; } }
  </style>
</head>
<body>
<div class="offers-page">

  <!-- ===== HEADER ===== -->


    <!-- filter tabs (click to filter) -->
    <div class="filter-section">
      <div class="filter-tabs" id="filterTabsContainer">
        <span class="filter-tab active" data-filter="all">All Offers</span>
        <span class="filter-tab" data-filter="bank">Bank Offers</span>
        <span class="filter-tab" data-filter="flights">Flights</span>
        <span class="filter-tab" data-filter="hotels">Hotels</span>
        <span class="filter-tab" data-filter="holidays">Holidays</span>
        <span class="filter-tab" data-filter="trains">Trains</span>
        <span class="filter-tab" data-filter="cabs">Cabs</span>
        <span class="filter-tab" data-filter="bus">Bus</span>
        <span class="filter-tab" data-filter="forex">Forex</span>
        <span class="more-link">MORE <i class="fas fa-angle-down"></i></span>
      </div>
    </div>

    <!-- escape row (kept for design) -->
    <div class="escape-row">
      <span class="escape-item">ESCAPE</span>
      <span class="escape-divider"></span>
      <span class="escape-item light">A REHABOR</span>
      <span class="escape-divider"></span>
      <span class="escape-item">LONG WEEKEND</span>
    </div>
  </div>

  <!-- ===== OFFER GRID (each card has an image + label + category data) ===== -->
  <div class="offers-grid" id="offersGridContainer">

    <!-- CARD 1: INTL FLIGHTS (flights category) -->
    <div class="offer-card" data-category="flights">
      <img class="offer-img" src="https://images.pexels.com/photos/2694037/pexels-photo-2694037.jpeg?auto=compress&cs=tinysrgb&w=400" alt="flight offer">
      <div class="offer-label">INTL FLIGHTS</div>
      <div class="offer-content">
        <div class="offer-title">Up to 40% OFF* on Flights, Stays & More</div>
        <div class="offer-desc">Pause your routine & get travel-ready for April long weekend.</div>
        <!-- <button href="booking.php" class="book-now-btn">BOOK NOW</button>
         --><a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 2: T&C'S APPLY (bank category) - we assign bank -->
    <div class="offer-card" data-category="bank">
      <img class="offer-img" src="https://images.pexels.com/photos/2988232/pexels-photo-2988232.jpeg?auto=compress&cs=tinysrgb&w=400" alt="bank offer">
      <div class="offer-label offer-label-gray">T&C'S APPLY</div>
      <div class="offer-content">
        <div class="offer-title">Extra 10% cashback with HDFC Bank</div>
        <div class="offer-desc">On flight & hotel bookings. Use code HDFC10.</div>
        <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 3: HOLDINGS (holidays category) -->
    <div class="offer-card" data-category="holidays">
      <img class="offer-img" src="https://images.pexels.com/photos/1134166/pexels-photo-1134166.jpeg?auto=compress&cs=tinysrgb&w=400" alt="singapore">
      <div class="offer-label">HOLDINGS</div>
      <div class="offer-content">
        <div class="offer-title">Singapore: Get 1 FREE* Activity</div>
        <div class="offer-desc">on booking Disney Cruise Line Packages with us.</div>
        <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 4: T&C'S APPLY (cabs category) -->
    <div class="offer-card" data-category="cabs">
      <img class="offer-img" src="https://images.pexels.com/photos/210182/pexels-photo-210182.jpeg?auto=compress&cs=tinysrgb&w=400" alt="cab offer">
      <div class="offer-label offer-label-gray">T&C'S APPLY</div>
      <div class="offer-content">
        <div class="offer-title">Flat 20% off on airport cabs</div>
        <div class="offer-desc">Valid for outstation & local rides. Max discount ₹300.</div>
        <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 5: DOM MC (hotels category) -->
    <div class="offer-card" data-category="hotels">
      <img class="offer-img" src="https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?auto=compress&cs=tinysrgb&w=400" alt="hotel room">
      <div class="offer-label offer-label-mint">DOM MC</div>
      <div class="offer-content">
        <div class="offer-title">Extra 15% off on premium hotels</div>
        <div class="offer-desc">On stays above ₹5,000. Use code STAY15.</div>
      <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 6: INTL FLIGHTS (flights) Thailand -->
    <div class="offer-card" data-category="flights">
      <img class="offer-img" src="https://images.pexels.com/photos/1008155/pexels-photo-1008155.jpeg?auto=compress&cs=tinysrgb&w=400" alt="thailand">
      <div class="offer-label">INTL FLIGHTS</div>
      <div class="offer-content">
        <div class="offer-title">HEAD TO THAILAND FOR SONGKRAN</div>
        <div class="offer-desc">Up to 35% OFF* on flights, stays, packages & more!</div>
        <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 7: DOM HOTELS (hotels) -->
    <div class="offer-card" data-category="hotels">
      <img class="offer-img" src="https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=400" alt="taj hotel">
      <div class="offer-label">DOM HOTELS</div>
      <div class="offer-content">
        <div class="offer-title">Memorable Stays at the Taj</div>
        <div class="offer-desc">FLAT 10% savings* on breakfast-inclusive stays.</div>
        <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 8: T&C'S APPLY + Big (bank/forex) -->
    <div class="offer-card" data-category="forex">
      <img class="offer-img" src="https://images.pexels.com/photos/730564/pexels-photo-730564.jpeg?auto=compress&cs=tinysrgb&w=400" alt="forex">
      <div class="offer-label offer-label-gray">T&C'S APPLY</div>
      <div class="offer-content">
        <div class="big-highlight">Big</div>
        <div class="offer-desc">Zero markup on forex & international transfers.</div>
        <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 9: Bank Offer (extra) (bank) -->
    <div class="offer-card" data-category="bank">
      <img class="offer-img" src="https://images.pexels.com/photos/4968630/pexels-photo-4968630.jpeg?auto=compress&cs=tinysrgb&w=400" alt="credit card">
      <div class="offer-label offer-label-gold">BANK OFFER</div>
      <div class="offer-content">
        <div class="offer-title">ICICI Bank: 15% instant discount</div>
        <div class="offer-desc">On flight & hotel bookings. Min spend ₹5,000.</div>
        <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 10: Train Offer (trains) -->
    <div class="offer-card" data-category="trains">
      <img class="offer-img" src="https://images.pexels.com/photos/7256862/pexels-photo-7256862.jpeg?auto=compress&cs=tinysrgb&w=400" alt="train">
      <div class="offer-label offer-label-purple">TRAINS</div>
      <div class="offer-content">
        <div class="offer-title">₹100 off on train tickets</div>
        <div class="offer-desc">First 5,000 users. Use code TRAIN100.</div>
       <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 11: Bus offer (bus) -->
    <div class="offer-card" data-category="bus">
      <img class="offer-img" src="https://images.pexels.com/photos/1037913/pexels-photo-1037913.jpeg?auto=compress&cs=tinysrgb&w=400" alt="bus">
      <div class="offer-label offer-label-mint">BUS</div>
      <div class="offer-content">
        <div class="offer-title">20% cashback on bus tickets</div>
        <div class="offer-desc">Max ₹150. New users only.</div>
        <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>

    <!-- CARD 12: Forex (forex) -->
    <div class="offer-card" data-category="forex">
      <img class="offer-img" src="https://images.pexels.com/photos/534216/pexels-photo-534216.jpeg?auto=compress&cs=tinysrgb&w=400" alt="currency">
      <div class="offer-label offer-label-gray">FOREX</div>
      <div class="offer-content">
        <div class="offer-title">Best exchange rates + 0 commission</div>
        <div class="offer-desc">On all major currencies. Order online.</div>
        <a href="/Travel_Go/assets/includes/booking.php" class="book-now-btn">BOOK NOW</a>
      </div>
    </div>
  </div>

  <!-- ===== EXPIRY NOTE ===== -->
  <div class="expiry-note">
    <span style="font-weight: 500;">*Terms & Conditions apply</span>
    <span href="booking.php" class="expiry-date">Expires 31 Mar 26</span>
  </div>
</div>

<!-- filter + book now script -->
<script>
  (function() {
    // get all filter tabs and cards
    const tabs = document.querySelectorAll('.filter-tab[data-filter]');
    const cards = document.querySelectorAll('.offer-card');
    const grid = document.getElementById('offersGridContainer');

    // filter function
    function filterOffers(category) {
      cards.forEach(card => {
        const cardCat = card.getAttribute('data-category');
        if (category === 'all' || cardCat === category) {
          card.style.display = 'flex';  // show
        } else {
          card.style.display = 'none';   // hide
        }
      });
    }

    // add click event to each filter tab
    tabs.forEach(tab => {
      tab.addEventListener('click', function(e) {
        // remove active class from all tabs
        tabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');

        // get filter value
        const filterValue = this.getAttribute('data-filter');
        filterOffers(filterValue);
      });
    });

    // book now buttons alert

    // optional: card click (just for fun)
    cards.forEach(card => {
      card.addEventListener('click', () => {
        // you can add navigation later
      });
    });

    // initially show all (active tab is "All Offers")
  })();
</script>

<!-- notes: each card now has image and data-category for filtering -->
</body>
</html>