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
    <title>Manage Bookings - Travel Go Admin</title>
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
                <li class="active"><a href="manage-bookings.php"><i class="fas fa-calendar-check"></i> Bookings</a></li>
                <li><a href="manage-packages.php"><i class="fas fa-box"></i> Packages</a></li>
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
                <h2>Manage Bookings</h2>
                <div class="admin-user">
                    <span>Welcome, Admin</span>
                </div>
            </div>

            <!-- Search and Filter -->
            <div class="card">
                <div class="row g-3">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Search by name or ID...">
                    </div>
                    <div class="col-md-3">
                        <select class="form-control">
                            <option>All Status</option>
                            <option>Confirmed</option>
                            <option>Pending</option>
                            <option>Cancelled</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control">
                            <option>All Packages</option>
                            <option>Goa Package</option>
                            <option>Manali Package</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary w-100"><i class="fas fa-search"></i> Search</button>
                    </div>
                </div>
            </div>

            <!-- Bookings Table -->
            <div class="card">
                <div class="card-header">
                    <h3>All Bookings</h3>
                    <a href="export-bookings.php" class="btn btn-success btn-sm"><i class="fas fa-download"></i> Export</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Customer</th>
                                <th>Package</th>
                                <th>Travel Date</th>
                                <th>Travelers</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Payment</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#BK001</strong></td>
                                <td>
                                    <strong>Rahul Sharma</strong><br>
                                    <small>rahul@email.com</small>
                                </td>
                                <td>Magical Goa (5N/6D)</td>
                                <td>15 Mar 2026</td>
                                <td>2 Adults</td>
                                <td><strong>₹27,998</strong></td>
                                <td><span class="badge badge-success">Confirmed</span></td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#BK002</strong></td>
                                <td>
                                    <strong>Priya Patel</strong><br>
                                    <small>priya@email.com</small>
                                </td>
                                <td>Manali Winter (4N/5D)</td>
                                <td>18 Mar 2026</td>
                                <td>3 Adults, 1 Child</td>
                                <td><strong>₹43,996</strong></td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#BK003</strong></td>
                                <td>
                                    <strong>Amit Kumar</strong><br>
                                    <small>amit@email.com</small>
                                </td>
                                <td>Kerala Backwaters (6N/7D)</td>
                                <td>20 Mar 2026</td>
                                <td>2 Adults</td>
                                <td><strong>₹33,998</strong></td>
                                <td><span class="badge badge-success">Confirmed</span></td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#BK004</strong></td>
                                <td>
                                    <strong>Neha Singh</strong><br>
                                    <small>neha@email.com</small>
                                </td>
                                <td>Royal Rajasthan (7N/8D)</td>
                                <td>22 Mar 2026</td>
                                <td>4 Adults</td>
                                <td><strong>₹75,996</strong></td>
                                <td><span class="badge badge-danger">Cancelled</span></td>
                                <td><span class="badge badge-danger">Refunded</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="pagination-wrapper mt-4">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- Summary Cards -->
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(16,185,129,0.1); color: #10b981;">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>156</h3>
                            <p>Confirmed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(245,158,11,0.1); color: #f59e0b;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-info">
                            <h3>23</h3>
                            <p>Pending</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(239,68,68,0.1); color: #ef4444;">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>12</h3>
                            <p>Cancelled</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card">
                        <div class="stat-icon" style="background: rgba(79,70,229,0.1); color: #4f46e5;">
                            <i class="fas fa-rupee-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3>₹4,52,890</h3>
                            <p>Total Revenue</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>