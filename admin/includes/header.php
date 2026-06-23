
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kartikey Transport - Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="css/style.css" >
<script src="js/script.js"></script>
    <style>
    
    </style>
</head>

<body class="bg-light">

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" id="sidebar">
        <a href="index.php" class="d-flex align-items-center mb-3 text-white text-decoration-none">
            <span class="fs-4 fw-semibold">🚛 Kartikey Transport</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link active" aria-current="page">
                    <i class="bi bi-house me-2"></i> Overview
                </a>
            </li>
            <li>
                <a href="live-map.php" class="nav-link text-white">
                    <i class="bi bi-speedometer2 me-2"></i> Live Shipment Map
                </a>
            </li>
            <li>
                <a href="fleetstatus.php" class="nav-link text-white">
                    <i class="bi bi-table me-2"></i> Fleet Status
                </a>
            </li>
            <hr>
            <li>
                <a href="shipment.php" class="nav-link text-white">
                    <i class="bi bi-grid me-2"></i> All Shipments
                </a>
            </li>
            <li>
                <a href="track.php" class="nav-link text-white">
                    <i class="bi bi-grid me-2"></i> Track Shipments
                </a>
            </li>
             <li>
                <a href="dealyed.php" class="nav-link text-white">
                    <i class="bi bi-grid me-2"></i> Dealyed Shipments
                </a>
            </li>
            <hr>
              <li>
                <a href="addgadi.php" class="nav-link text-white">
                    <i class="bi bi-grid me-2"></i> Vechile List
                </a>
            </li>
               <li>
                <a href="driverlist.php" class="nav-link text-white">
                    <i class="bi bi-grid me-2"></i> Driver List
                </a>
            </li>
        </ul>
        <hr>
        <div class="small text-white-50">
            <i class="bi bi-dot me-1"></i> System Online
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark px-3 sticky-top">
            <div class="container-fluid">
                <!-- Mobile menu toggle -->
                <button class="btn btn-dark d-md-none me-2" type="button" id="sidebarToggle">
                    <i class="bi bi-list fs-5"></i>
                </button>
                
                <a class="navbar-brand d-md-none" href="#">Kartikey Transport</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-3">
                            <a href="#" class="nav-link position-relative">
                                <i class="bi bi-bell fs-5"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    3
                                    <span class="visually-hidden">unread notifications</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#"
                                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=0D6EFD&color=fff&size=32" 
                                     alt="User" width="32" height="32" class="rounded-circle me-2">
                                <strong>John Doe</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end text-small shadow">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Sign out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
