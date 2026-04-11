<?php
// file: assets/pages/booking.php
// Booking summary & passenger details page (integrates both image specs)
// This page expects: itinerary data via session/GET or uses demo placeholders

// Start session if needed for real data (for demo we use static values)
session_start();

// Simulate incoming flight selection (from search page)
$flight = [
    'from'      => 'New Delhi (DEL)',
    'to'        => 'Bengaluru (BLR)',
    'airline'   => 'Akasa Air',
    'flight_no' => 'QP 1812',
    'depart'    => '23:10',
    'arrival'   => '02:00',
    'duration'  => '02h 50m',
    'date'      => 'Sat, Mar 21',
    'price'     => '7,755',
    'stops'     => 'Non Stop'
];

// Activity data (Burj Khalifa)
$activity = [
    'title'       => 'At The Top, Burj Khalifa',
    'description' => 'The Burj Khalifa stands in Downtown Dubai as the world\'s tallest tower, completed in 2010. At The Top provides access to observatories.',
    'duration'    => '30 Minutes',
    'suitable'    => 'Adults and Child',
    'price'       => '3,387 per Adult'
];

// VISA / bank offers displayed in summary
$offers = [
    'VISA Exclusive: Free Seat with VISA Signature...',
    'IDFC FIRST Bank: Flat 10% Instant Discount',
    'HSBC Credit Card: Flat 12% OFF using MMTHSBC'
];

// Helper to display price in ₹
function indian_currency($num) {
    return '₹' . number_format(floatval(str_replace(',', '', $num)), 0);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Go - Booking · Flight + Burj Khalifa</title>
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', 'Roboto', sans-serif; }
        body { background: #f2f5f9; color: #1e293b; }
        .navbar {
            background: #fff; padding: 0.75rem 2rem; display: flex; align-items: center;
            justify-content: space-between; box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        }
        .logo { font-size: 1.8rem; font-weight: 700; color: #2563eb; letter-spacing: -0.5px; }
        .logo i { color: #3b82f6; margin-right: 6px; }
        .menu-items a { text-decoration: none; color: #334155; margin: 0 1rem; font-weight: 500; }
        .login-btn {
            background: linear-gradient(145deg, #2563eb, #1d4ed8); color: white;
            padding: 0.5rem 1.2rem; border-radius: 40px; font-weight: 500;
            text-decoration: none; display: inline-flex; align-items: center; gap: 6px;
        }

        /* main container */
        .booking-container { max-width: 1300px; margin: 2rem auto; padding: 0 2rem; display: flex; flex-wrap: wrap; gap: 2rem; }

        /* left column: flight summary + passenger form */
        .left-col { flex: 2; min-width: 320px; }
        .right-col { flex: 1.2; min-width: 300px; }

        /* cards */
        .card { background: white; border-radius: 28px; box-shadow: 0 12px 30px rgba(0,0,0,0.05); padding: 1.8rem 2rem; margin-bottom: 2rem; }
        .card-title { font-size: 1.6rem; font-weight: 700; margin-bottom: 1.2rem; display: flex; align-items: center; gap: 8px; }
        .card-title i { color: #2563eb; }

        /* flight pill */
        .flight-path {
            background: #f8fafc; border-radius: 40px; padding: 1.2rem 1.8rem;
            display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between;
            border: 1px solid #e9eef3; margin-bottom: 1.5rem;
        }
        .airline-lg { font-weight: 700; font-size: 1.2rem; }
        .code { color: #2563eb; font-weight: 600; }
        .time-detail { display: flex; gap: 2.5rem; align-items: center; }
        .time-block { text-align: center; }
        .time-large { font-size: 2rem; font-weight: 600; line-height: 1.2; }
        .city-code { color: #64748b; font-weight: 500; }
        .duration { background: #e6edf8; border-radius: 60px; padding: 0.4rem 1.2rem; font-weight: 500; color: #2563eb; }

        .stops-badge {
            background: #cffafe; color: #0891b2; border-radius: 40px; padding: 0.2rem 1rem;
            font-weight: 600; font-size: 0.9rem; display: inline-block;
        }

        /* price display */
        .price-large { font-size: 2.5rem; font-weight: 700; color: #2563eb; }
        .original-price { text-decoration: line-through; color: #94a3b8; margin-right: 10px; }

        /* filter tags (from image1) */
        .filter-chips { display: flex; flex-wrap: wrap; gap: 0.8rem; margin: 1.5rem 0; }
        .chip {
            background: #f1f5f9; border-radius: 40px; padding: 0.4rem 1.2rem; font-size: 0.9rem;
            font-weight: 500; border: 1px solid transparent;
        }
        .chip.nonstop { background: #2563eb; color: white; }
        .chip i { margin-right: 4px; }

        /* form */
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin: 1.2rem 0; }
        .form-group { margin-bottom: 1rem; }
        .form-group label { font-weight: 500; color: #334155; display: block; margin-bottom: 4px; }
        .form-control {
            width: 100%; padding: 0.8rem 1.2rem; border: 1px solid #e2e8f0; border-radius: 40px;
            font-size: 1rem; background: #f8fafc; transition: 0.2s;
        }
        .form-control:focus { border-color: #2563eb; outline: none; background: white; }

        .continue-btn {
            background: linear-gradient(95deg, #2563eb, #3b82f6); border: none; color: white;
            font-weight: 700; font-size: 1.4rem; padding: 1rem; border-radius: 60px;
            width: 100%; cursor: pointer; border: 2px solid white; box-shadow: 0 10px 20px rgba(37,99,235,0.3);
            transition: 0.2s; margin-top: 1rem;
        }
        .continue-btn:hover { background: #1d4ed8; transform: scale(1.02); }

        /* right col – activity card */
        .activity-card {
            background: white; border-radius: 32px; overflow: hidden; box-shadow: 0 20px 30px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }
        .activity-img {
            background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.2)), url('https://images.pexels.com/photos/739987/burj-khalifa-dubai-night-739987.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2') center/cover;
            height: 200px;
        }
        .activity-content { padding: 1.8rem 2rem; }
        .activity-title { font-size: 1.8rem; font-weight: 700; margin-bottom: 10px; }
        .activity-meta { display: flex; gap: 1.5rem; color: #475569; font-weight: 500; margin: 0.8rem 0; }
        .activity-desc { color: #334155; margin: 1rem 0; line-height: 1.6; }

        .offer-strip {
            background: #f0f7ff; border-radius: 24px; padding: 1.2rem 1.5rem; border: 1px solid #b9d6fd;
            display: flex; align-items: center; gap: 1rem; margin: 1.5rem 0; flex-wrap: wrap;
        }
        .offer-strip i { font-size: 2rem; color: #2563eb; }

        .price-tag { font-size: 2rem; font-weight: 700; color: #2563eb; }
        .note { color: #64748b; font-size: 0.9rem; }

        /* buttons from image1 */
        .action-buttons { display: flex; gap: 1rem; margin: 1rem 0; flex-wrap: wrap; }
        .btn-outline {
            background: transparent; border: 2px solid #2563eb; color: #2563eb;
            border-radius: 40px; padding: 0.7rem 1.8rem; font-weight: 600; cursor: pointer;
            transition: 0.2s; display: inline-flex; align-items: center; gap: 8px;
        }
        .btn-outline:hover { background: #2563eb; color: white; }
        .btn-filled { background: #2563eb; border: none; color: white; border-radius: 40px; padding: 0.7rem 2rem; font-weight: 600; }

        /* responsive */
        @media (max-width: 900px) { .booking-container { flex-direction: column; } }
    </style>
</head>
<body>
    <!-- header (same as index) -->
    <nav class="navbar">
        <div class="logo"><i class="fas fa-compass"></i> Travel Go</div>
        <div class="menu-items">
            <a href="/index.php"><i class="fas fa-plane"></i> Flights</a>
            <a href="#"><i class="fas fa-hotel"></i> Hotels</a>
            <a href="#"><i class="fas fa-train"></i> Trains</a>
        </div>
        <div><a href="../pages/login.php" class="login-btn"><i class="fas fa-user-circle"></i> Sign in</a></div>
    </nav>

    <!-- main booking grid -->
    <div class="booking-container">
        <!-- LEFT COLUMN: FLIGHT + passenger form -->
        <div class="left-col">
            <!-- FLIGHT SELECTION CARD (matching image 1) -->
            <div class="card">
                <div class="card-title"><i class="fas fa-check-circle" style="color:#22c55e;"></i> Your flight</div>

                <!-- Applied filters / Popular filters chips (from image) -->
                <div class="filter-chips">
                    <span class="chip nonstop"><i class="fas fa-circle"></i> NON STOP · ₹7,755</span>
                    <span class="chip"><i class="fas fa-exchange-alt"></i> 1 Stop · ₹8,066</span>
                    <span class="chip"><i class="fas fa-wallet"></i> Refundable Fares · ₹7,755</span>
                    <span class="chip"><i class="fas fa-tag"></i> Air India Express · ₹7,897</span>
                </div>

                <!-- Main flight detail (from Delhi to Bengaluru) -->
                <div class="flight-path">
                    <div>
                        <span class="airline-lg"><i class="fas fa-fighter-jet" style="color:#2563eb;"></i> <?= $flight['airline'] ?> · <?= $flight['flight_no'] ?></span>
                        <div><span class="code"><?= $flight['from'] ?></span>  <i class="fas fa-arrow-right"></i>  <span class="code"><?= $flight['to'] ?></span></div>
                    </div>
                    <div class="time-detail">
                        <div class="time-block">
                            <div class="time-large"><?= $flight['depart'] ?></div>
                            <div class="city-code">DEL</div>
                        </div>
                        <div class="duration"><i class="far fa-clock"></i> <?= $flight['duration'] ?></div>
                        <div class="time-block">
                            <div class="time-large"><?= $flight['arrival'] ?></div>
                            <div class="city-code">BLR</div>
                        </div>
                    </div>
                    <div class="stops-badge"><i class="fas fa-minus-circle"></i> <?= $flight['stops'] ?></div>
                </div>

                <!-- Date & Price row (like table in image) -->
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                    <div>
                        <span style="background: #e6edf8; padding:0.3rem 1.2rem; border-radius:40px; font-weight:500;">
                            <i class="far fa-calendar-alt"></i> <?= $flight['date'] ?> · Depart
                        </span>
                        <!-- extra dates hint -->
                        <span style="margin-left: 1rem; color:#64748b;">Fri, Mar 20 ₹7,694 · Sat, Mar 21 ₹7,755 · Sun ₹8,574</span>
                    </div>
                    <div>
                        <span class="original-price">₹8,574</span>
                        <span class="price-large">₹<?= $flight['price'] ?></span>
                    </div>
                </div>

                <!-- Offers & discount (VISA, IDFC, HSBC) -->
                <div class="offer-strip">
                    <i class="fab fa-cc-visa"></i>
                    <div><strong>VISA Exclusive Offer</strong> · Free Seat with VISA Signature... <span style="color:#2563eb;">+2 more</span></div>
                </div>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 0.5rem;">
                    <span><i class="fas fa-percent" style="color:#2563eb;"></i> Flat 10% IDFC FIRST</span>
                    <span><i class="fas fa-tag"></i> FLAT 12% OFF HSBC (code: MMTHSBC)</span>
                </div>

                <!-- View Flight Details & Add to compare (buttons from image) -->
                <div class="action-buttons">
                    <button class="btn-outline"><i class="fas fa-chevron-circle-down"></i> View Flight Details</button>
                    <button class="btn-outline"><i class="fas fa-plus-circle"></i> Add to compare</button>
                    <span style="margin-left: auto; background: #f1f5f9; padding: 0.4rem 1.2rem; border-radius: 40px;">
                        <i class="fas fa-tag"></i> FLAT ₹165 OFF with MMTSUPER
                    </span>
                </div>
            </div>

            <!-- PASSENGER DETAILS FORM (similar to booking page flow) -->
            <div class="card">
                <div class="card-title"><i class="fas fa-user-pen"></i> Traveller details</div>
                <form id="bookingForm" onsubmit="event.preventDefault(); alert('Booking confirmed (demo)');">
                    <div class="form-row">
                        <div class="form-group">
                            <label>First name <span style="color:#ef4444;">*</span></label>
                            <input class="form-control" placeholder="John" value="John">
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input class="form-control" placeholder="Doe" value="Doe">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" placeholder="john@example.com" value="john.doe@travel.com">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input class="form-control" placeholder="+91 98765 43210" value="+91 98765 43210">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Date of birth (optional)</label>
                        <input class="form-control" type="date" value="1990-01-01">
                    </div>

                    <!-- Add-on: Meet & Greet / Elevate experience (from image) -->
                    <div style="background:#f8fafc; border-radius: 24px; padding: 1rem; margin: 1.5rem 0;">
                        <h4><i class="fas fa-star" style="color:#f59e0b;"></i> Elevate your travel experience</h4>
                        <div style="display: flex; gap: 1.2rem; margin-top: 0.8rem; flex-wrap: wrap;">
                            <label><input type="radio" name="meetGreet"> Wed, Mar 24 · ₹7,608</label>
                            <label><input type="radio" name="meetGreet"> Thu, Mar 25 · ₹7,467</label>
                            <label><input type="radio" name="meetGreet"> Fri, Mar 26 · ₹7,608</label>
                        </div>
                        <p class="note"><i class="fas fa-info-circle"></i> Meet and Greet & priority service</p>
                    </div>

                    <button class="continue-btn" type="submit"><i class="fas fa-lock"></i> CONTINUE · Pay ₹<?= $flight['price'] ?> + activity</button>
                </form>
            </div>
        </div>

        <!-- RIGHT COLUMN: Activity (Burj Khalifa) & price summary -->
        <div class="right-col">
            <!-- Burj Khalifa card – gallery image 2 & 3 style -->
            <div class="activity-card">
                <div class="activity-img"></div>
                <div class="activity-content">
                    <div class="activity-title"><?= $activity['title'] ?></div>
                    <div class="activity-meta">
                        <span><i class="far fa-clock"></i> <?= $activity['duration'] ?></span>
                        <span><i class="fas fa-child"></i> <?= $activity['suitable'] ?></span>
                    </div>
                    <div class="activity-desc">
                        <strong>About</strong> · ACTIVITY OPTIONS<br>
                        <?= $activity['description'] ?> 
                    </div>
                    <!-- pricing from image2: Starting From ₹3,387 per Adult -->
                    <div style="background: #2563eb10; border-radius: 28px; padding: 1rem; border: 1px solid #2563eb30; margin: 1rem 0;">
                        <span style="font-size: 1rem;">Starting From</span>
                        <span class="price-large" style="font-size: 2.2rem;">₹<?= $activity['price'] ?></span>
                    </div>

                    <!-- Add this activity? toggle -->
                    <label style="display: flex; align-items: center; gap: 12px; margin: 1.5rem 0;">
                        <input type="checkbox" checked> <span>Add this activity to my trip</span>
                    </label>

                    <!-- combined price summary -->
                    <div style="border-top: 1px dashed #cbd5e1; padding-top: 1.2rem;">
                        <div style="display: flex; justify-content: space-between;">
                            <span>Flight (1 adult)</span> <span>₹<?= $flight['price'] ?></span>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-top: 0.4rem;">
                            <span>Burj Khalifa ticket</span> <span>₹3,387</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; font-weight: 700; font-size: 1.4rem; margin-top: 1rem;">
                            <span>Total</span> <span>₹<?= number_format(floatval(str_replace(',', '', $flight['price'])) + 3387, 0) ?></span>
                        </div>
                        <p class="note"><i class="fas fa-shield-alt"></i> Inclusive of taxes & fees</p>
                    </div>
                </div>
            </div>

            <!-- additional offer card (from image: gallery image 2 bottom) -->
            <div style="background: linear-gradient(145deg, #ffffff, #f8fafc); border-radius: 28px; padding: 1.5rem; box-shadow: 0 4px 12px rgba(0,0,0,0.02);">
                <h4><i class="fas fa-gem" style="color:#2563eb;"></i> VISA Signature exclusive</h4>
                <p style="margin: 0.7rem 0;">Free seat selection & complimentary lounge</p>
                <div style="display: flex; gap: 10px;">
                    <button class="btn-filled"><i class="fas fa-ticket-alt"></i> Select</button>
                    <button class="btn-outline" style="border-color:#94a3b8;">Continue without</button>
                </div>
            </div>

            <!-- mini compare (from first image "Add to compare") -->
            <div style="margin-top: 1.5rem; text-align: right; color:#475569;">
                <i class="fas fa-balance-scale"></i> Comparing flights? <a href="#" style="color:#2563eb;">View compare</a>
            </div>
        </div>
    </div>

    <!-- simple footer -->
  <?php include '../includes/footer.php'?>

    <script>
        // small interactions: fare chip hover, simulate continue
        document.querySelectorAll('.btn-outline, .btn-filled').forEach(btn => {
            btn.addEventListener('click', (e) => e.preventDefault());
        });
        // Continue button already demo alert
    </script>
</body>
</html>