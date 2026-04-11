* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f4f6f9;
}

.admin-wrapper {
    display: flex;
    min-height: 100vh;
}

/* Sidebar */
.admin-sidebar {
    width: 280px;
    background: linear-gradient(135deg, #4f46e5, #7c3aed);
    color: white;
    position: fixed;
    height: 100vh;
    overflow-y: auto;
}

.sidebar-header {
    padding: 25px;
    text-align: center;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}

.sidebar-header h3 {
    font-size: 24px;
    font-weight: 600;
}

.sidebar-menu {
    list-style: none;
    padding: 20px 0;
}

.sidebar-menu li {
    margin-bottom: 5px;
}

.sidebar-menu li a {
    display: block;
    padding: 12px 25px;
    color: rgba(255,255,255,0.8);
    text-decoration: none;
    transition: all 0.3s;
    font-size: 15px;
}

.sidebar-menu li a i {
    margin-right: 10px;
    width: 20px;
}

.sidebar-menu li:hover a,
.sidebar-menu li.active a {
    background: rgba(255,255,255,0.1);
    color: white;
    padding-left: 35px;
}

/* Main Content */
.admin-main {
    flex: 1;
    margin-left: 280px;
    padding: 20px;
}

.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.admin-header h2 {
    font-size: 24px;
    color: #333;
}

.admin-user {
    display: flex;
    align-items: center;
    gap: 15px;
}

/* Stats Cards */
.dashboard-stats {
    margin-bottom: 30px;
}

.stat-card {
    background: white;
    border-radius: 10px;
    padding: 25px;
    display: flex;
    align-items: center;
    gap: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.stat-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
}

.stat-card:nth-child(1) .stat-icon {
    background: rgba(79, 70, 229, 0.1);
    color: #4f46e5;
}

.stat-card:nth-child(2) .stat-icon {
    background: rgba(249, 115, 22, 0.1);
    color: #f97316;
}

.stat-card:nth-child(3) .stat-icon {
    background: rgba(16, 185, 129, 0.1);
    color: #10b981;
}

.stat-card:nth-child(4) .stat-icon {
    background: rgba(239, 68, 68, 0.1);
    color: #ef4444;
}

.stat-info h3 {
    font-size: 28px;
    margin-bottom: 5px;
    color: #333;
}

.stat-info p {
    color: #666;
    font-size: 14px;
    margin: 0;
}

/* Recent Section */
.recent-section {
    background: white;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.recent-section h3 {
    margin-bottom: 20px;
    color: #333;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table thead th {
    padding: 12px;
    background: #f8f9fa;
    color: #333;
    font-weight: 600;
    text-align: left;
}

.table tbody td {
    padding: 12px;
    border-bottom: 1px solid #eee;
}

.badge {
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 12px;
}

.badge.bg-success {
    background: #d1fae5;
    color: #10b981;
}

.badge.bg-warning {
    background: #fed7aa;
    color: #f97316;
}

.badge.bg-danger {
    background: #fee2e2;
    color: #ef4444;
}

.btn-view {
    color: #4f46e5;
    text-decoration: none;
}

.btn-view:hover {
    text-decoration: underline;
}
