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
    <title>Manage Destinations - Travel Go Admin</title>
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
                <li><a href="manage-packages.php"><i class="fas fa-box"></i> Packages</a></li>
                <li class="active"><a href="manage-destinations.php"><i class="fas fa-map-marker"></i> Destinations</a></li>
                <li><a href="manage-users.php"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="manage-inquiries.php"><i class="fas fa-envelope"></i> Inquiries</a></li>
                <li><a href="settings.php"><i class="fas fa-cog"></i> Settings</a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="admin-main">
            <div class="admin-header">
                <h2>Manage Destinations</h2>
                <div class="admin-user">
                    <span>Welcome, Admin</span>
                </div>
            </div>

            <!-- Add New Destination -->
            <div class="card">
                <div class="card-header">
                    <h3>Add New Destination</h3>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Destination Name</label>
                                    <input type="text" class="form-control" placeholder="e.g., Goa">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control" value="India">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Brief description..."></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-control">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary">Add Destination</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="preview-card">
                            <h4>Preview</h4>
                            <div class="destination-preview">
                                <img src="../assets/images/destinations/default.jpg" alt="Preview" style="width:100%; height:150px; object-fit:cover; border-radius:8px;">
                                <p class="mt-2"><strong>Goa, India</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Destinations List -->
            <div class="card">
                <div class="card-header">
                    <h3>All Destinations</h3>
                    <div>
                        <input type="text" class="form-control" placeholder="Search destinations..." style="width:250px;">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Destination</th>
                                <th>Country</th>
                                <th>Packages</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="../assets/images/destinations/goa.jpg" style="width:50px; height:50px; border-radius:5px;"></td>
                                <td><strong>Goa</strong></td>
                                <td>India</td>
                                <td>24 Packages</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="../assets/images/destinations/manali.jpg" style="width:50px; height:50px; border-radius:5px;"></td>
                                <td><strong>Manali</strong></td>
                                <td>India</td>
                                <td>18 Packages</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="../assets/images/destinations/kerala.jpg" style="width:50px; height:50px; border-radius:5px;"></td>
                                <td><strong>Kerala</strong></td>
                                <td>India</td>
                                <td>32 Packages</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="../assets/images/destinations/jaipur.jpg" style="width:50px; height:50px; border-radius:5px;"></td>
                                <td><strong>Jaipur</strong></td>
                                <td>India</td>
                                <td>21 Packages</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="../assets/images/destinations/ladakh.jpg" style="width:50px; height:50px; border-radius:5px;"></td>
                                <td><strong>Ladakh</strong></td>
                                <td>India</td>
                                <td>15 Packages</td>
                                <td><span class="badge badge-warning">Inactive</span></td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>