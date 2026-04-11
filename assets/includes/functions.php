<?php
// CHECK - SESSION PEHLE SE ACTIVE HAI KYA?
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// YAHAN SE CONSTANTS HATAA DO - yeh config.php mein already hain
// define("CURRENCY","₹");        // ❌ HATAAO
// define("SITE_NAME","Travel Go"); // ❌ HATAAO

// Sanitize input data
function sanitize($data){
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check login
function isLoggedIn(){
    return isset($_SESSION['user_id']);
}

// Redirect
function redirect($url){
    header("Location: $url");
    exit();
}

// Format price
function formatPrice($price){
    return CURRENCY_SYMBOL . number_format($price,2); // CURRENCY_SYMBOL use karo
}

// Page titles
function getPageTitle($page){
    $titles = [
        'home'=>'Home - Travel Go',
        'destinations'=>'Destinations - Travel Go',
        'packages'=>'Tour Packages - Travel Go',
        'sightseeing'=>'Sightseeing - Travel Go',
        'contact'=>'Contact Us - Travel Go',
        'booking'=>'Book Your Trip - Travel Go'
    ];

    return $titles[$page] ?? SITE_NAME;
}
?>