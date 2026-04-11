<?php
session_start();
if(!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Packages - Travel Go Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/admin-style.css">
</head>
<body>
    <div class="admin-wrapper">
        <!-- Sidebar -->
        <nav class="admin-sidebar">
            <div class="sidebar-header">
                <h3><i class="fas fa-compass"></i> Travel Go</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="manage-bookings.php"><i class="fas fa-calendar-check"></i> Bookings</a></li>
                <li class="active"><a href="manage-packages.php"><i class="fas fa-box"></i> Packages</a></li>
                <li><a href="manage-destinations.php"><i class="fas fa-map-marker"></i> Destinations</a></li>
                <li><a href="manage-users.php"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="manage-inquiries.php"><i class="fas fa-envelope"></i> Inquiries</a></li>
                <li><a href="settings.php"><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="admin-main">
            <div class="admin-header">
                <h2>Manage Packages</h2>
                <div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPackageModal">
                        <i class="fas fa-plus"></i> Add New Package
                    </button>
                </div>
            </div>

            <!-- Search and Filter -->
            <div class="card">
                <div class="row g-3">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Search packages...">
                    </div>
                    <div class="col-md-2">
                        <select class="form-control">
                            <option>All Destinations</option>
                            <option>Goa</option>
                            <option>Manali</option>
                            <option>Kerala</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control">
                            <option>All Status</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select class="form-control">
                            <option>Sort By</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest First</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary w-100"><i class="fas fa-search"></i> Apply Filters</button>
                    </div>
                </div>
            </div>

            <!-- Packages Table -->
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Package Name</th>
                                <th>Destination</th>
                                <th>Duration</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Rating</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="../assets/images/packages/goa.jpg" style="width:50px; height:50px; border-radius:5px;"></td>
                                <td><strong>Magical Goa</strong></td>
                                <td>Goa</td>
                                <td>5N/6D</td>
                                <td>₹15,999</td>
                                <td>₹13,999</td>
                                <td>4.5 <i class="fas fa-star" style="color: #fbbf24;"></i></td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="../assets/images/packages/manali.jpg" style="width:50px; height:50px; border-radius:5px;"></td>
                                <td><strong>Manali Winter</strong></td>
                                <td>Manali</td>
                                <td>4N/5D</td>
                                <td>₹12,499</td>
                                <td>₹10,999</td>
                                <td>5.0 <i class="fas fa-star" style="color: #fbbf24;"></i></td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="../assets/images/packages/kerala.jpg" style="width:50px; height:50px; border-radius:5px;"></td>
                                <td><strong>Kerala Backwaters</strong></td>
                                <td>Kerala</td>
                                <td>6N/7D</td>
                                <td>₹18,999</td>
                                <td>₹16,999</td>
                                <td>4.0 <i class="fas fa-star" style="color: #fbbf24;"></i></td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Add Package Modal -->
    <div class="modal fade" id="addPackageModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Package</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Package Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Destination</label>
                                <select class="form-control">
                                    <option>Select Destination</option>
                                    <option>Goa</option>
                                    <option>Manali</option>
                                    <option>Kerala</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Duration</label>
                                <input type="text" class="form-control" placeholder="e.g., 5N/6D">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" placeholder="₹">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Discount Price</label>
                                <input type="number" class="form-control" placeholder="₹">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Inclusions</label>
                                <textarea class="form-control" rows="3" placeholder="Hotel, Meals, Sightseeing..."></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Exclusions</label>
                                <textarea class="form-control" rows="3" placeholder="Flight, Personal expenses..."></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Package Image</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Rating</label>
                                <input type="number" step="0.1" class="form-control" placeholder="4.5">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-control">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Save Package</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>            