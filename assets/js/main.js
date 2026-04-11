$(document).ready(function() {
    // Initialize Owl Carousel for packages
    $('.packages-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    
    // Sticky header on scroll
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.main-nav').addClass('sticky');
        } else {
            $('.main-nav').removeClass('sticky');
        }
    });
    
    // Smooth scroll for anchor links
    $('a[href*="#"]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 500);
    });
    
    // Fare tag selection
    $('.fare-tag').click(function() {
        $(this).toggleClass('active');
    });
    
    // Date picker enhancement
    $('input[type="date"]').each(function() {
        if (!$(this).val()) {
            var today = new Date().toISOString().split('T')[0];
            $(this).attr('min', today);
        }
    });
    
    // Search form validation
    $('.search-btn').click(function(e) {
        e.preventDefault();
        // Add your form validation logic here
        alert('Search functionality will be implemented with backend');
    });
    
    // Gallery lightbox effect
    $('.gallery-item').click(function() {
        // Add lightbox functionality
        var imgSrc = $(this).find('img').attr('src');
        // You can integrate a lightbox plugin here
    });
    
    // Mobile menu enhancement
    $('.navbar-toggler').click(function() {
        $('.main-nav').toggleClass('mobile-open');
    });
    
    // Currency converter placeholder
    $('.currency-select').change(function() {
        // Add currency conversion logic
        console.log('Currency changed to: ' + $(this).val());
    });
    
    // Language selector
    $('.language-select').change(function() {
        // Add language translation logic
        console.log('Language changed to: ' + $(this).val());
    });
});