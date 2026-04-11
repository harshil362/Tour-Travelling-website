<?php
$page_title = "Destinations - Travel Go";

// Sample destinations data
$destinations = [
    [
        'id' => 1,
        'name' => 'Goa',
        'country' => 'India',
        'description' => 'Beautiful beaches, vibrant nightlife, and Portuguese architecture',
        'image' => 'assets/images/destinations/goa.jpg',
        'packages' => 24,
        'rating' => 4.7
    ],
    [
        'id' => 2,
        'name' => 'Manali',
        'country' => 'India',
        'description' => 'Snow-capped mountains, adventure sports, and scenic valleys',
        'image' => 'assets/images/destinations/manali.jpg',
        'packages' => 18,
        'rating' => 4.8
    ],
    [
        'id' => 3,
        'name' => 'Kerala',
        'country' => 'India',
        'description' => 'Backwaters, ayurveda, and lush green landscapes',
        'image' => 'assets/images/destinations/kerala.jpg',
        'packages' => 32,
        'rating' => 4.9
    ],
    [
        'id' => 4,
        'name' => 'Jaipur',
        'country' => 'India',
        'description' => 'Royal palaces, forts, and vibrant culture',
        'image' => 'assets/images/destinations/jaipur.jpg',
        'packages' => 21,
        'rating' => 4.6
    ],
    [
        'id' => 5,
        'name' => 'Ladakh',
        'country' => 'India',
        'description' => 'Breathtaking landscapes, Buddhist monasteries, and adventure',
        'image' => 'assets/images/destinations/ladakh.jpg',
        'packages' => 15,
        'rating' => 4.9
    ],
    [
        'id' => 6,
        'name' => 'Andaman',
        'country' => 'India',
        'description' => 'Pristine beaches, water sports, and marine life',
        'image' => 'assets/images/destinations/andaman.jpg',
        'packages' => 12,
        'rating' => 4.7
    ]
];
?>

<main class="destinations-page">
    <!-- Page Header -->
    <section class="page-header" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/banners/destinations-bg.jpg')">
        <div class="container">
            <h1>Popular Destinations</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Destinations</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Destinations Grid -->
    <section class="destinations-grid-section py-5">
        <div class="container">
            <!-- Search and Filter -->
            <div class="row mb-4">
                <div class="col-md-8">
                    <div class="search-filter">
                        <input type="text" id="destinationSearch" class="form-control" placeholder="Search destinations...">
                    </div>
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="sortDestinations">
                        <option value="popular">Most Popular</option>
                        <option value="name">Alphabetical</option>
                        <option value="rating">Highest Rated</option>
                        <option value="packages">Most Packages</option>
                    </select>
                </div>
            </div>

            <!-- Destinations Grid -->
            <div class="row g-4" id="destinationsContainer">
                <?php foreach($destinations as $destination): ?>
                <div class="col-lg-4 col-md-6 destination-item">
                    <div class="destination-card">
                        <div class="destination-img">
                            <img src="<?php echo $destination['image']; ?>" alt="<?php echo $destination['name']; ?>">
                            <div class="destination-overlay">
                                <a href="#" class="btn-view">View Details</a>
                            </div>
                        </div>
                        <div class="destination-info">
                            <h3><?php echo $destination['name']; ?></h3>
                            <p class="location"><i class="fas fa-map-marker-alt"></i> <?php echo $destination['country']; ?></p>
                            <p class="description"><?php echo $destination['description']; ?></p>
                            <div class="destination-meta">
                                <span class="packages"><i class="fas fa-box"></i> <?php echo $destination['packages']; ?> Packages</span>
                                <span class="rating"><i class="fas fa-star"></i> <?php echo $destination['rating']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination-wrapper mt-5">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section py-5 bg-light">
        <div class="container">
            <h2 class="section-title">Why Choose Our Destinations</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="choose-card text-center">
                        <i class="fas fa-map-marked-alt"></i>
                        <h4>Curated Experiences</h4>
                        <p>Hand-picked destinations with unique experiences</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="choose-card text-center">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Safe Travel</h4>
                        <p>Verified accommodations and guided tours</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="choose-card text-center">
                        <i class="fas fa-clock"></i>
                        <h4>24/7 Support</h4>
                        <p>Round-the-clock assistance during your trip</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Simple search functionality
document.getElementById('destinationSearch').addEventListener('keyup', function() {
    let searchText = this.value.toLowerCase();
    let destinations = document.getElementsByClassName('destination-item');
    
    Array.from(destinations).forEach(function(destination) {
        let title = destination.querySelector('h3').textContent.toLowerCase();
        if(title.includes(searchText)) {
            destination.style.display = 'block';
        } else {
            destination.style.display = 'none';
        }
    });
});

// Sort functionality
document.getElementById('sortDestinations').addEventListener('change', function() {
    let sortBy = this.value;
    let container = document.getElementById('destinationsContainer');
    let items = Array.from(document.getElementsByClassName('destination-item'));
    
    items.sort(function(a, b) {
        if(sortBy === 'name') {
            return a.querySelector('h3').textContent.localeCompare(b.querySelector('h3').textContent);
        } else if(sortBy === 'rating') {
            let ratingA = parseFloat(a.querySelector('.rating').textContent);
            let ratingB = parseFloat(b.querySelector('.rating').textContent);
            return ratingB - ratingA;
        } else if(sortBy === 'packages') {
            let packagesA = parseInt(a.querySelector('.packages').textContent);
            let packagesB = parseInt(b.querySelector('.packages').textContent);
            return packagesB - packagesA;
        }
    });
    
    items.forEach(item => container.appendChild(item));
});
</script>