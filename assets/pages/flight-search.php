<?php
// file: search.php
// Search results page - Flight search results from New Delhi to Bengaluru
session_start();

// Get search parameters from URL (if any)
$from = isset($_GET['from']) ? $_GET['from'] : 'New Delhi';
$to = isset($_GET['to']) ? $_GET['to'] : 'Bengaluru';
$depart = isset($_GET['depart']) ? $_GET['depart'] : '2026-03-19';
$return = isset($_GET['return']) ? $_GET['return'] : '';
$tripType = isset($_GET['trip']) ? $_GET['trip'] : 'oneway';
$travellers = isset($_GET['travellers']) ? $_GET['travellers'] : '1_Economy';

// Format date for display
function formatDate($dateString) {
    $timestamp = strtotime($dateString);
    return date('D, d M', $timestamp);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Go - Flights from New Delhi to Bengaluru</title>
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: #f0f2f5; color: #1e293b; }
        
        /* navbar */
        .navbar {
            background: white; padding: 0.75rem 2rem; display: flex; align-items: center;
            justify-content: space-between; box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky; top: 0; z-index: 100;
        }
        .logo { font-size: 1.8rem; font-weight: 700; color: #2563eb; }
        .logo i { color: #3b82f6; margin-right: 6px; }
        .nav-menu { display: flex; gap: 1.5rem; }
        .nav-menu a { text-decoration: none; color: #4b5563; font-weight: 500; display: flex; align-items: center; gap: 5px; }
        .nav-menu a:hover { color: #2563eb; }
        .login-btn {
            background: linear-gradient(145deg, #2563eb, #1d4ed8); color: white;
            padding: 0.5rem 1.2rem; border-radius: 40px; text-decoration: none;
            display: flex; align-items: center; gap: 6px; font-weight: 500;
        }

        /* search summary bar */
        .search-summary {
            background: white; padding: 1rem 2rem; box-shadow: 0 2px 8px rgba(0,0,0,0.03);
            display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap;
            border-bottom: 1px solid #e5e7eb;
        }
        .route-info {
            display: flex; align-items: center; gap: 1.5rem; flex-wrap: wrap;
        }
        .route-badge {
            background: #e6edf8; padding: 0.5rem 1.5rem; border-radius: 40px;
            font-weight: 600; color: #2563eb;
        }
        .date-badge {
            background: #f3f4f6; padding: 0.5rem 1.2rem; border-radius: 40px;
            display: flex; align-items: center; gap: 8px;
        }
        .modify-btn {
            border: 1px solid #2563eb; color: #2563eb; background: white;
            padding: 0.5rem 1.5rem; border-radius: 40px; font-weight: 500;
            cursor: pointer; transition: 0.2s;
        }
        .modify-btn:hover { background: #2563eb; color: white; }

        /* main container - 2 column */
        .search-container {
            max-width: 1400px; margin: 2rem auto; padding: 0 2rem;
            display: grid; grid-template-columns: 280px 1fr; gap: 2rem;
        }

        /* FILTER SIDEBAR */
        .filter-sidebar {
            background: white; border-radius: 24px; padding: 1.5rem; height: fit-content;
            box-shadow: 0 4px 12px rgba(0,0,0,0.04);
        }
        .filter-title {
            font-size: 1.3rem; font-weight: 700; margin-bottom: 1.5rem;
            display: flex; align-items: center; gap: 8px;
        }
        .filter-section {
            margin-bottom: 2rem; border-bottom: 1px solid #edf2f7; padding-bottom: 1.5rem;
        }
        .filter-section h4 {
            font-size: 1rem; margin-bottom: 1rem; color: #374151;
            display: flex; align-items: center; gap: 5px;
        }
        .filter-option {
            display: flex; align-items: center; gap: 10px; margin-bottom: 0.8rem;
            padding: 0.3rem 0; cursor: pointer;
        }
        .filter-option input[type="checkbox"] {
            width: 18px; height: 18px; accent-color: #2563eb;
        }
        .filter-option .price-tag {
            margin-left: auto; color: #2563eb; font-weight: 600;
        }
        .filter-badge {
            background: #f1f5f9; border-radius: 20px; padding: 0.3rem 1rem;
            display: inline-block; margin-right: 0.5rem; margin-bottom: 0.5rem;
            font-size: 0.9rem; border: 1px solid #e2e8f0;
        }
        .filter-badge.active {
            background: #2563eb; color: white; border-color: #2563eb;
        }
        .stops-filter {
            display: flex; flex-direction: column; gap: 0.8rem;
        }
        .stop-item {
            display: flex; justify-content: space-between; align-items: center;
        }

        /* MAIN RESULTS */
        .results-header {
            display: flex; justify-content: space-between; align-items: center;
            margin-bottom: 1.5rem; flex-wrap: wrap;
        }
        .results-count {
            font-size: 1.2rem; font-weight: 500;
        }
        .sort-dropdown {
            background: white; padding: 0.5rem 1.2rem; border-radius: 40px;
            border: 1px solid #e2e8f0; display: flex; align-items: center; gap: 8px;
            cursor: pointer;
        }

        /* OFFER CARDS (VISA, etc) */
        .offer-card {
            background: white; border-radius: 24px; padding: 1.2rem 1.5rem;
            margin-bottom: 1.5rem; border: 1px solid #e2e8f0; box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        }
        .offer-title {
            display: flex; align-items: center; gap: 10px; margin-bottom: 1rem;
        }
        .offer-title i { font-size: 1.5rem; color: #2563eb; }
        .offer-title span { font-weight: 600; font-size: 1.1rem; }
        .offer-dates {
            display: flex; gap: 1.5rem; overflow-x: auto; padding: 0.5rem 0;
        }
        .date-price {
            text-align: center; min-width: 80px;
        }
        .date-price .day { font-weight: 600; }
        .date-price .price { color: #2563eb; font-weight: 700; }

        /* FLIGHT RESULT CARD */
        .flight-card {
            background: white; border-radius: 24px; padding: 1.5rem;
            margin-bottom: 1rem; border: 1px solid #e2e8f0; transition: 0.2s;
            display: flex; flex-direction: column; gap: 1rem;
        }
        .flight-card:hover { box-shadow: 0 8px 20px rgba(0,0,0,0.08); }
        .flight-main {
            display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;
        }
        .flight-airline {
            display: flex; align-items: center; gap: 12px; min-width: 160px;
        }
        .airline-logo {
            width: 40px; height: 40px; background: #e6edf8; border-radius: 50%;
            display: flex; align-items: center; justify-content: center; color: #2563eb;
        }
        .airline-name { font-weight: 600; }
        .flight-number { font-size: 0.85rem; color: #64748b; }
        
        .flight-timing {
            display: flex; align-items: center; gap: 1rem;
        }
        .time-block {
            text-align: center;
        }
        .time { font-size: 1.4rem; font-weight: 700; }
        .airport { color: #64748b; font-size: 0.9rem; }
        .duration {
            display: flex; flex-direction: column; align-items: center; color: #64748b;
        }
        .duration-line {
            width: 100px; height: 2px; background: #e2e8f0; margin: 0.3rem 0;
            position: relative;
        }
        .duration-line i {
            position: absolute; top: -6px; right: -6px; color: #2563eb; font-size: 0.8rem;
        }

        .stops-badge {
            background: #f1f5f9; padding: 0.3rem 1rem; border-radius: 40px;
            font-size: 0.85rem; font-weight: 500;
        }
        .stops-badge.nonstop { background: #cffafe; color: #0891b2; }

        .price-block {
            text-align: right;
        }
        .price {
            font-size: 1.8rem; font-weight: 700; color: #2563eb;
        }
        .original-price {
            text-decoration: line-through; color: #94a3b8; font-size: 0.9rem;
        }
        .view-btn {
            background: #2563eb; color: white; border: none; padding: 0.5rem 1.2rem;
            border-radius: 40px; font-weight: 500; cursor: pointer; margin-top: 0.3rem;
        }

        /* badge row like cheapest, nonstop first */
        .flight-tags {
            display: flex; gap: 0.5rem; margin-top: 0.5rem;
        }
        .tag {
            background: #f1f5f9; padding: 0.2rem 1rem; border-radius: 40px;
            font-size: 0.8rem; font-weight: 600; color: #4b5563;
        }
        .tag.cheapest { background: #dcfce7; color: #166534; }
        .tag.nonstop-first { background: #dbeafe; color: #1e40af; }

        /* quick picks */
        .quick-picks {
            display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem; margin: 1.5rem 0;
        }
        .pick-card {
            background: white; border-radius: 20px; padding: 1rem;
            text-align: center; border: 1px solid #e2e8f0;
        }
        .pick-price { font-size: 1.3rem; font-weight: 700; color: #2563eb; }

        /* footer */
        footer {
            background: #0b1120; color: #9aa9b9; padding: 2rem; margin-top: 3rem;
            text-align: center;
        }

        @media (max-width: 1024px) {
            .search-container { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
  <?php include'header.php' ?>

    <!-- SEARCH SUMMARY BAR -->
    <div class="search-summary">
        <div class="route-info">
            <div class="route-badge"><i class="fas fa-plane-departure"></i> <?= $from ?> → <?= $to ?></div>
            <div class="date-badge"><i class="far fa-calendar-alt"></i> <?= formatDate($depart) ?></div>
            <?php if($tripType == 'round' && $return): ?>
                <div class="date-badge"><i class="far fa-calendar-alt"></i> <?= formatDate($return) ?></div>
            <?php endif; ?>
            <div class="date-badge"><i class="fas fa-user-friends"></i> 1 Traveller, Economy</div>
        </div>
        <button class="modify-btn"><i class="fas fa-pencil-alt"></i> Modify</button>
    </div>

    <!-- MAIN SEARCH CONTAINER -->
    <div class="search-container">
        <!-- FILTER SIDEBAR (LEFT) -->
        <aside class="filter-sidebar">
            <div class="filter-title">
                <i class="fas fa-sliders-h"></i> Filters
            </div>

            <!-- APPLIED FILTERS -->
            <div class="filter-section">
                <h4><i class="fas fa-check-circle" style="color:#2563eb;"></i> Applied Filters</h4>
                <div>
                    <span class="filter-badge active">NONSTOP <i class="fas fa-times" style="margin-left:5px;"></i></span>
                </div>
            </div>

            <!-- POPULAR FILTERS -->
            <div class="filter-section">
                <h4>Popular Filters</h4>
                <div class="filter-option">
                    <input type="checkbox" checked> Non Stop <span class="price-tag">₹7,897</span>
                </div>
                <div class="filter-option">
                    <input type="checkbox"> Refundable Fares <span class="price-tag">₹7,897</span>
                </div>
                <div class="filter-option">
                    <input type="checkbox"> 1 Stop <span class="price-tag">₹8,066</span>
                </div>
                <div class="filter-option">
                    <input type="checkbox"> Air India Express <span class="price-tag">₹7,897</span>
                </div>
                <div style="margin-top: 0.5rem; color: #2563eb; cursor: pointer;">+1 more</div>
            </div>

            <!-- STOPS -->
            <div class="filter-section">
                <h4>Stops from New Delhi</h4>
                <div class="stop-item">
                    <span><i class="fas fa-circle" style="color:#2563eb; font-size:0.6rem;"></i> Non Stop</span>
                    <span class="price-tag">₹7,897</span>
                </div>
                <div class="stop-item">
                    <span><i class="fas fa-circle" style="color:#94a3b8; font-size:0.6rem;"></i> 1 Stop</span>
                    <span class="price-tag">₹8,066</span>
                </div>
            </div>

            <!-- AIRLINES -->
            <div class="filter-section">
                <h4>Airlines</h4>
                <div class="filter-option">
                    <input type="checkbox"> Air India Exp... <span class="price-tag">₹7,897</span>
                </div>
                <div class="filter-option">
                    <input type="checkbox"> Akasa Air <span class="price-tag">₹7,755</span>
                </div>
                <div class="filter-option">
                    <input type="checkbox"> IndiGo <span class="price-tag">₹8,066</span>
                </div>
            </div>

            <!-- DEPARTURE TIME -->
            <div class="filter-section">
                <h4>Departure from New Delhi</h4>
                <div class="filter-option">
                    <input type="checkbox"> Before 6 AM <span>5</span>
                </div>
                <div class="filter-option">
                    <input type="checkbox"> 6 AM - 12 PM <span>8</span>
                </div>
                <div class="filter-option">
                    <input type="checkbox"> 12 PM - 6 PM <span>12</span>
                </div>
                <div class="filter-option">
                    <input type="checkbox"> After 6 PM <span>7</span>
                </div>
            </div>
        </aside>

        <!-- MAIN RESULTS (RIGHT) -->
        <main>
            <div class="results-header">
                <div class="results-count"><i class="fas fa-plane"></i> 48 flights from New Delhi to Bengaluru</div>
                <div class="sort-dropdown">
                    <i class="fas fa-sort-amount-down"></i> Sort by: Lowest Fare
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>

            <!-- VISA EXCLUSIVE OFFER CARD (from image) -->
            <div class="offer-card">
                <div class="offer-title">
                    <i class="fab fa-cc-visa"></i>
                    <span>VISA Exclusive Offer</span>
                </div>
                <p style="color: #4b5563; margin-bottom: 0.8rem;">Free Seat with VISA Signature...</p>
                <div class="offer-dates">
                    <div class="date-price"><div class="day">Thu, Mar 19</div><div class="price">₹7,325</div></div>
                    <div class="date-price"><div class="day">Fri, Mar 20</div><div class="price">₹7,694</div></div>
                    <div class="date-price"><div class="day">Sat, Mar 21</div><div class="price">₹7,755</div></div>
                    <div class="date-price"><div class="day">Sun, Mar 22</div><div class="price">₹8,574</div></div>
                    <div class="date-price"><div class="day">Mon, Mar 23</div><div class="price">₹7,897</div></div>
                    <div class="date-price"><div class="day">Tue, Mar 24</div><div class="price">₹7,467</div></div>
                    <div class="date-price"><div class="day">Wed, Mar 25</div><div class="price">₹7,467</div></div>
                    <div class="date-price"><div class="day">Thu, Mar 26</div><div class="price">₹7,608</div></div>
                </div>
            </div>

            <!-- QUICK PICKS / TAGS (CHEAPEST, NON STOP FIRST, YOU MAY PREFER) -->
            <div class="quick-picks">
                <div class="pick-card">
                    <div class="tag cheapest" style="margin-bottom: 0.5rem;">CHEAPEST</div>
                    <div class="pick-price">₹7,897</div>
                    <div>02h 55m</div>
                </div>
                <div class="pick-card">
                    <div class="tag nonstop-first" style="margin-bottom: 0.5rem;">NON STOP FIRST</div>
                    <div class="pick-price">₹7,897</div>
                    <div>02h 55m</div>
                </div>
                <div class="pick-card">
                    <div class="tag" style="margin-bottom: 0.5rem;">YOU MAY PREFER</div>
                    <div class="pick-price">₹7,897</div>
                    <div>02h 55m</div>
                </div>
            </div>

            <!-- FLIGHTS sorted by lowest fares (from image) -->
            <div style="margin: 1.5rem 0 1rem 0;">
                <h3 style="font-size: 1.2rem;">Flights sorted by Lowest fares on this route</h3>
            </div>

            <!-- FLIGHT CARD 1 - Air India Express (matching image) -->
            <div class="flight-card">
                <div class="flight-main">
                    <div class="flight-airline">
                        <div class="airline-logo"><i class="fas fa-fighter-jet"></i></div>
                        <div>
                            <div class="airline-name">Air India Express</div>
                            <div class="flight-number">IX 1234</div>
                        </div>
                    </div>
                    <div class="flight-timing">
                        <div class="time-block">
                            <div class="time">21:10</div>
                            <div class="airport">DEL</div>
                        </div>
                        <div class="duration">
                            <div>02h 55m</div>
                            <div class="duration-line"><i class="fas fa-circle"></i></div>
                            <div>Non Stop</div>
                        </div>
                        <div class="time-block">
                            <div class="time">00:05</div>
                            <div class="airport">BLR</div>
                            <div style="font-size:0.8rem;">DAY</div>
                        </div>
                    </div>
                    <div class="stops-badge nonstop">NON STOP</div>
                    <div class="price-block">
                        <div class="price">₹7,897</div>
                        <div class="original-price">₹12,500</div>
                        <button class="view-btn" onclick="location.href='assets/pages/booking.php?flight=IX1234&price=7897'">View Flight Details</button>
                    </div>
                </div>
                <div class="flight-tags">
                    <span class="tag cheapest">CHEAPEST</span>
                    <span class="tag"><i class="fas fa-tag"></i> FLAT ₹165 OFF</span>
                </div>
            </div>

            <!-- FLIGHT CARD 2 - Akasa Air -->
            <div class="flight-card">
                <div class="flight-main">
                    <div class="flight-airline">
                        <div class="airline-logo"><i class="fas fa-fighter-jet"></i></div>
                        <div>
                            <div class="airline-name">Akasa Air</div>
                            <div class="flight-number">QP 1812</div>
                        </div>
                    </div>
                    <div class="flight-timing">
                        <div class="time-block">
                            <div class="time">23:10</div>
                            <div class="airport">DEL</div>
                        </div>
                        <div class="duration">
                            <div>02h 50m</div>
                            <div class="duration-line"><i class="fas fa-circle"></i></div>
                            <div>Non Stop</div>
                        </div>
                        <div class="time-block">
                            <div class="time">02:00</div>
                            <div class="airport">BLR</div>
                            <div style="font-size:0.8rem;">DAY</div>
                        </div>
                    </div>
                    <div class="stops-badge nonstop">NON STOP</div>
                    <div class="price-block">
                        <div class="price">₹7,755</div>
                        <button class="view-btn" onclick="location.href='assets/pages/booking.php?flight=QP1812&price=7755'">View Flight Details</button>
                    </div>
                </div>
                <div class="flight-tags">
                    <span class="tag"><i class="fas fa-bolt"></i> FASTEST</span>
                </div>
            </div>

            <!-- FLIGHT CARD 3 - 1 Stop Example -->
            <div class="flight-card">
                <div class="flight-main">
                    <div class="flight-airline">
                        <div class="airline-logo"><i class="fas fa-fighter-jet"></i></div>
                        <div>
                            <div class="airline-name">IndiGo</div>
                            <div class="flight-number">6E 234</div>
                        </div>
                    </div>
                    <div class="flight-timing">
                        <div class="time-block">
                            <div class="time">18:30</div>
                            <div class="airport">DEL</div>
                        </div>
                        <div class="duration">
                            <div>04h 15m</div>
                            <div class="duration-line"><i class="fas fa-circle"></i></div>
                            <div>1 Stop</div>
                        </div>
                        <div class="time-block">
                            <div class="time">22:45</div>
                            <div class="airport">BLR</div>
                        </div>
                    </div>
                    <div class="stops-badge">1 STOP (BOM)</div>
                    <div class="price-block">
                        <div class="price">₹8,066</div>
                        <button class="view-btn" onclick="location.href='assets/pages/booking.php?flight=6E234&price=8066'">View Flight Details</button>
                    </div>
                </div>
            </div>

            <!-- "Other Sort" section from image -->
            <div style="display: flex; justify-content: space-between; align-items: center; background: white; border-radius: 24px; padding: 1rem 1.5rem; margin-top: 1rem;">
                <div><i class="fas fa-chart-line" style="color:#2563eb;"></i> Other Sort Options</div>
                <div style="display: flex; gap: 2rem;">
                    <span>Price <i class="fas fa-arrow-up"></i></span>
                    <span>Duration</span>
                    <span>Departure</span>
                    <span>Arrival</span>
                </div>
                <div class="price" style="font-size:1.3rem;">₹7,897</div>
            </div>
        </main>
    </div>

    <!-- FOOTER -->
     <?php include '../includes/footer.php' ?>


    <script>
        // Simple interactive for modify button
        document.querySelector('.modify-btn').addEventListener('click', function() {
            window.location.href = 'index.php';
        });

        // View Flight Details buttons
        document.querySelectorAll('.view-btn').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                // navigation handled in onclick attribute
            });
        });
    </script>
</body>
</html>