<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'travel_go');

// Site configuration
define('SITE_NAME', 'Travel Go');
define('SITE_URL', 'http://localhost/travel-go');
define('SITE_EMAIL', 'info@travelgo.com');

// Paths
define('ASSETS_URL', SITE_URL . '/assets');
define('INCLUDES_PATH', dirname(__FILE__));

// Email configuration
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'your-email@gmail.com');
define('SMTP_PASS', 'your-password');

// Currency settings
define('DEFAULT_CURRENCY', 'INR');
define('CURRENCY_SYMBOL', '₹');  // ✅ YEH RAHEGA

// Pagination
define('ITEMS_PER_PAGE', 10);

// Session timeout (in seconds)
define('SESSION_TIMEOUT', 3600);

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Timezone
date_default_timezone_set('Asia/Kolkata');
?>