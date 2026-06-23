<?php
// header.php - Common header for all pages
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kartikey Transport - <?php echo isset($page_title) ? $page_title : 'Dashboard'; ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        
    </style>
</head>

<body>

    <!-- Sidebar Overlay (Mobile) -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- ========================================== -->
    <!-- SIDEBAR -->
    <!-- ========================================== -->
    <aside class="sidebar d-flex flex-column p-3" id="sidebar">
        
        <!-- Brand -->
        <a href="index.php" class="sidebar-brand">
            <div class="logo-icon">
                <i class="bi bi-truck"></i>
            </div>
            <div>
                <div class="brand-text">Kartikey</div>
                <div class="brand-subtext">Transport Logistics</div>
            </div>
        </a>

        <hr class="border-light opacity-25 my-3">

        <!-- Navigation -->
        <nav class="nav flex-column">
            <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                <i class="bi bi-house me-2"></i> Overview
                <span class="badge float-end">New</span>
            </a>
            <a href="live-map.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'live-map.php' ? 'active' : ''; ?>">
                <i class="bi bi-speedometer2 me-2"></i> Live Map
            </a>
            <a href="fleetstatus.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'fleetstatus.php' ? 'active' : ''; ?>">
                <i class="bi bi-table me-2"></i> Fleet Status
            </a>
            <a href="driver-dashboard.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'driver-dashboard.php' ? 'active' : ''; ?>">
                <i class="bi bi-person-badge me-2"></i> Driver Dashboard
            </a>
            <a href="shipment.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'shipment.php' ? 'active' : ''; ?>">
                <i class="bi bi-grid me-2"></i> All Shipments
            </a>
        </nav>

        <hr class="border-light opacity-25 my-3">

        <!-- Secondary Navigation -->
        <nav class="nav flex-column">
            <a href="#" class="nav-link">
                <i class="bi bi-gear me-2"></i> Settings
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-question-circle me-2"></i> Help Center
            </a>
        </nav>

        <!-- Sidebar Footer -->
        <div class="sidebar-footer">
            <div class="d-flex align-items-center text-white-50 small">
                <span class="status-dot me-2"></span>
                System Online
                <span class="ms-auto">v2.0</span>
            </div>
        </div>

    </aside>

    <!-- ========================================== -->
    <!-- MAIN CONTENT WRAPPER -->
    <!-- ========================================== -->
    <div class="main-content">

        <!-- ========================================== -->
        <!-- TOP NAVBAR -->
        <!-- ========================================== -->
        <nav class="top-navbar d-flex align-items-center justify-content-between">
            
            <!-- Left Side -->
            <div class="d-flex align-items-center">
                <!-- Mobile Toggle -->
                <button class="btn btn-link d-md-none text-dark p-0 me-3" id="sidebarToggle">
                    <i class="bi bi-list fs-4"></i>
                </button>
                
                <!-- Page Title (Dynamic) -->
                <span class="d-none d-sm-block fw-semibold text-muted small text-uppercase tracking-wide">
                    <?php 
                        $current_page = basename($_SERVER['PHP_SELF'], '.php');
                        echo ucwords(str_replace('-', ' ', $current_page));
                    ?>
                </span>
            </div>

            <!-- Right Side -->
            <div class="d-flex align-items-center gap-2">
                
                <!-- Notification Bell -->
                <button class="notification-btn" title="Notifications">
                    <i class="bi bi-bell fs-5"></i>
                    <span class="notif-badge">3</span>
                </button>

                <!-- User Dropdown -->
                <div class="dropdown">
                    <a href="#" class="user-dropdown-toggle dropdown-toggle" id="userDropdown" 
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://ui-avatars.com/api/?name=John+Doe&background=0D6EFD&color=fff&size=36" 
                             alt="User" width="36" height="36" class="rounded-circle">
                        <div class="d-none d-md-block">
                            <div class="user-name">John Doe</div>
                            <div class="user-role">Administrator</div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2" 
                        aria-labelledby="userDropdown" style="min-width: 200px;">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-person me-2"></i> My Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-gear me-2"></i> Settings
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-credit-card me-2"></i> Billing
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item text-danger" href="#">
                                <i class="bi bi-box-arrow-right me-2"></i> Sign Out
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>

        <!-- ========================================== -->
        <!-- PAGE CONTENT STARTS HERE -->
        <!-- ========================================== -->
        <div class="page-content"></div>