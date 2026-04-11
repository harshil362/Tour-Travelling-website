<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Premium Footer</title>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>

/* 🌌 FOOTER */
footer {
  position: relative;
  overflow: hidden;
  padding: 3rem 2rem;
  color: #ffffff;
}

/* 🎥 FULL GIF BACKGROUND */
.footer-bg-gif {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

/* 🌑 OVERLAY */
.footer-overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.65);
  top: 0;
  left: 0;
  z-index: 1;
}

/* ☁️ CLOUDS */
.cloud {
  position: absolute;
  top: 20%;
  width: 200px;
  opacity: 0.5;
  animation: cloudMove 60s linear infinite;
  z-index: 2;
}

.cloud2 {
  top: 50%;
  width: 250px;
  animation-duration: 90s;
}

@keyframes cloudMove {
  0% { left: -250px; }
  100% { left: 110%; }
}

/* 📦 CONTENT */
.footer-grid,
.newsletter,
.social-icons,
.payments,
.copyright {
  position: relative;
  z-index: 3;
}

/* GRID */
.footer-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 2rem;
}

/* GLASS STYLE */
.footer-col {
  background: rgba(255,255,255,0.05);
  padding: 15px;
  border-radius: 12px;
  backdrop-filter: blur(8px);
  transition: 0.3s;
}

.footer-col:hover {
  transform: translateY(-5px);
}

/* TEXT */
.footer-col h5 {
  color: #fff;
  margin-bottom: 10px;
}

.footer-col p,
.footer-col a {
  color: #ddd;
  font-size: 0.9rem;
  text-decoration: none;
  display: block;
  margin-bottom: 6px;
}

.footer-col i {
  margin-right: 8px;
  color: #60a5fa;
}

.footer-col a:hover {
  color: #fff;
}

/* NEWSLETTER */
.newsletter {
  text-align: center;
  margin-top: 2rem;
}

.newsletter input {
  padding: 10px;
  border-radius: 20px;
  border: none;
  margin-right: 10px;
}

.newsletter button {
  padding: 10px 20px;
  border-radius: 20px;
  background: #2563eb;
  color: white;
  border: none;
  cursor: pointer;
}

/* SOCIAL */
.social-icons {
  display: flex;
  justify-content: center;
  gap: 1rem;
  margin-top: 2rem;
}

.social-icons a {
  font-size: 18px;
  color: white;
  background: rgba(255,255,255,0.1);
  padding: 10px;
  border-radius: 50%;
  transition: 0.3s;
}

.social-icons a:hover {
  background: #2563eb;
  transform: scale(1.2);
}

/* PAYMENT */
.payments {
  text-align: center;
  margin-top: 1rem;
}

/* COPYRIGHT */
.copyright {
  text-align: center;
  margin-top: 1.5rem;
}

</style>
</head>

<body>

<footer>

  <!-- 🎥 GIF BACKGROUND -->
  <img src="https://giffiles.alphacoders.com/219/2190.gif" class="footer-bg-gif">

  <!-- 🌑 OVERLAY -->
  <div class="footer-overlay"></div>

  <!-- ☁️ CLOUDS -->
  <img src="https://cdn-icons-png.flaticon.com/512/414/414927.png" class="cloud">
  <img src="https://cdn-icons-png.flaticon.com/512/414/414927.png" class="cloud cloud2">

  <div class="footer-grid">

    <!-- Company -->
    <div class="footer-col">
      <h5>Company</h5>
      <a href="/Travel_Go/assets/pages/about.php">
        <i class="fas fa-building"></i> About Us
      </a>
      <p><i class="fas fa-briefcase"></i> Careers</p>
    </div>

    <!-- Support -->
    <div class="footer-col">
      <h5>Support</h5>
      <a href="/Travel_Go/assets/pages/contact.php">
        <i class="fas fa-headset"></i> Contact Us
      </a>
      <p><i class="fas fa-question-circle"></i> FAQ</p>
    </div>

    <!-- Services -->
    <div class="footer-col">
      <h5>Services</h5>
      <p><i class="fas fa-plane"></i> Flights</p>
      <p><i class="fas fa-hotel"></i> Hotels</p>
      <p><i class="fas fa-train"></i> Trains</p>
      <p><i class="fas fa-bus"></i> Buses</p>
      <p><i class="fas fa-taxi"></i> Cabs</p>
    </div>

    <!-- Contact -->
    <div class="footer-col">
      <h5>Contact</h5>
      <p><i class="fas fa-phone"></i> +91 9876543210</p>
      <p><i class="fas fa-envelope"></i> support@travelgo.com</p>
      <p><i class="fas fa-map-marker-alt"></i> Gujarat, India</p>
    </div>

  </div>

  <!-- Newsletter -->
  <div class="newsletter">
    <h4>Subscribe</h4>
    <input type="email" placeholder="Enter email">
    <button>Subscribe</button>
  </div>

  <!-- Social -->
  <div class="social-icons">
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-x-twitter"></i></a>
  </div>

  <!-- Payment -->
  <div class="payments">
    💳 Visa | MasterCard | UPI | Paytm
  </div>

  <!-- Copyright -->
  <div class="copyright">
    © 2025 TravelGo · All rights reserved.
  </div>

</footer>

</body>
</html>