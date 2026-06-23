<?php
include("include/header.php");
?>

<div class="container-fluid py-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">
                <i class="bi bi-person-badge text-primary me-2"></i>Driver Dashboard
            </h2>
            <p class="text-muted mb-0">Manage your assigned trips, view schedules, and track performance.</p>
        </div>
        <div class="btn-toolbar">
            <div class="dropdown">
                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    <i class="bi bi-calendar3 me-1"></i> This Week
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Week</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Driver Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 p-2 bg-primary bg-opacity-10 text-primary rounded-3 me-3">
                            <i class="bi bi-truck fs-4"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0 small text-uppercase fw-semibold">Total Trips</h6>
                            <h3 class="fw-bold mb-0">142</h3>
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="badge bg-success bg-opacity-10 text-success">+12% this month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 p-2 bg-success bg-opacity-10 text-success rounded-3 me-3">
                            <i class="bi bi-check-circle fs-4"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0 small text-uppercase fw-semibold">Completed</h6>
                            <h3 class="fw-bold mb-0">98</h3>
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="badge bg-success bg-opacity-10 text-success">69% completion rate</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 p-2 bg-warning bg-opacity-10 text-warning rounded-3 me-3">
                            <i class="bi bi-clock fs-4"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0 small text-uppercase fw-semibold">On-Going</h6>
                            <h3 class="fw-bold mb-0">2</h3>
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="badge bg-warning bg-opacity-10 text-warning">In progress</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 p-2 bg-info bg-opacity-10 text-info rounded-3 me-3">
                            <i class="bi bi-star fs-4"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0 small text-uppercase fw-semibold">Rating</h6>
                            <h3 class="fw-bold mb-0">4.8 <span class="fs-6 text-muted">/5</span></h3>
                        </div>
                    </div>
                    <div class="mt-2">
                        <span class="text-warning">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Row -->
    <div class="row g-4">
        
        <!-- Left Column: Current Trip & Schedule -->
        <div class="col-xl-8">
            
            <!-- Current Trip Card -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 pt-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-semibold mb-0">
                            <i class="bi bi-geo-alt-fill text-danger me-2"></i>Current Trip
                        </h5>
                        <span class="badge bg-success rounded-pill px-3 py-2">
                            <span class="spinner-grow spinner-grow-sm me-1" style="width: 0.5rem; height: 0.5rem;"></span>
                            Live
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-md-8">
                            <!-- Trip Progress -->
                            <div class="mb-3">
                                <div class="d-flex justify-content-between mb-1">
                                    <span class="fw-semibold">Mumbai → Delhi</span>
                                    <span class="text-muted">65% completed</span>
                                </div>
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-success" style="width: 65%;"></div>
                                </div>
                            </div>
                            
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <div class="bg-primary bg-opacity-10 p-2 rounded">
                                                <i class="bi bi-geo-alt text-primary"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-muted">Pickup</div>
                                            <div class="fw-semibold">Mumbai Hub</div>
                                            <div class="small text-muted">08:00 AM</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <div class="bg-danger bg-opacity-10 p-2 rounded">
                                                <i class="bi bi-geo-alt text-danger"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-muted">Dropoff</div>
                                            <div class="fw-semibold">Delhi Terminus</div>
                                            <div class="small text-muted">04:30 PM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-3">
                                <div class="d-flex flex-wrap gap-3">
                                    <div>
                                        <span class="text-muted small">Vehicle:</span>
                                        <span class="fw-semibold">TRK-4022</span>
                                    </div>
                                    <div>
                                        <span class="text-muted small">Load:</span>
                                        <span class="fw-semibold">14 Tons</span>
                                    </div>
                                    <div>
                                        <span class="text-muted small">ETA:</span>
                                        <span class="fw-semibold text-success">4 hrs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light rounded-3 p-3 h-100 d-flex flex-column justify-content-center align-items-center">
                                <div class="display-6 fw-bold text-primary">68</div>
                                <div class="text-muted small">km/h</div>
                                <div class="mt-2">
                                    <span class="badge bg-info bg-opacity-10 text-info">
                                        <i class="bi bi-wifi me-1"></i> GPS Connected
                                    </span>
                                </div>
                                <button class="btn btn-outline-primary btn-sm mt-3 w-100">
                                    <i class="bi bi-arrow-up-circle me-1"></i> Update Status
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Upcoming Schedule -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 pt-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-semibold mb-0">
                            <i class="bi bi-calendar-event me-2"></i>Upcoming Schedule
                        </h5>
                        <a href="#" class="btn btn-sm btn-link text-decoration-none">View All</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Trip ID</th>
                                    <th>Route</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="fw-semibold">#TRK-8910</span></td>
                                    <td>Delhi → Jaipur</td>
                                    <td>Tomorrow, 06:00 AM</td>
                                    <td><span class="badge bg-warning bg-opacity-10 text-warning">Scheduled</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="fw-semibold">#TRK-8911</span></td>
                                    <td>Mumbai → Pune</td>
                                    <td>Tomorrow, 02:00 PM</td>
                                    <td><span class="badge bg-warning bg-opacity-10 text-warning">Scheduled</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="fw-semibold">#TRK-8912</span></td>
                                    <td>Ahmedabad → Surat</td>
                                    <td>Dec 28, 08:00 AM</td>
                                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Right Column: Driver Info & Quick Actions -->
        <div class="col-xl-4">
            
            <!-- Driver Profile -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body text-center">
                    <img src="https://ui-avatars.com/api/?name=Rajesh+Kumar&background=0D6EFD&color=fff&size=80" 
                         alt="Driver" class="rounded-circle mb-3" width="80" height="80">
                    <h5 class="fw-bold mb-0">Rajesh Kumar</h5>
                    <p class="text-muted small">Driver ID: DRV-0042</p>
                    
                    <div class="d-flex justify-content-center gap-4 my-3">
                        <div>
                            <div class="small text-muted">Experience</div>
                            <div class="fw-bold">8 years</div>
                        </div>
                        <div>
                            <div class="small text-muted">Trips</div>
                            <div class="fw-bold">142</div>
                        </div>
                        <div>
                            <div class="small text-muted">Rating</div>
                            <div class="fw-bold text-warning">4.8 ★</div>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary">
                            <i class="bi bi-telephone me-2"></i> Contact Dispatch
                        </button>
                        <button class="btn btn-outline-secondary">
                            <i class="bi bi-gear me-2"></i> Settings
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Quick Actions -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white border-0 pt-3">
                    <h5 class="fw-semibold mb-0">
                        <i class="bi bi-lightning-fill text-warning me-2"></i>Quick Actions
                    </h5>
                </div>
                <div class="card-body">
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-check-circle me-2"></i>Mark as Delivered</span>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="btn btn-outline-warning d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-exclamation-triangle me-2"></i>Report Issue</span>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="btn btn-outline-info d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-map me-2"></i>View Route</span>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                        <button class="btn btn-outline-secondary d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-file-text me-2"></i>View Documents</span>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Recent Alerts -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 pt-3">
                    <h5 class="fw-semibold mb-0">
                        <i class="bi bi-bell text-danger me-2"></i>Recent Alerts
                    </h5>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-start border-0 py-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-circle-fill text-warning me-2 mt-1" style="font-size: 0.5rem;"></i>
                                <div>
                                    <div class="fw-semibold">Traffic Delay</div>
                                    <div class="small text-muted">NH-48 heavy traffic ahead</div>
                                </div>
                            </div>
                            <span class="badge bg-warning bg-opacity-10 text-warning">10 mins</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start border-0 py-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-circle-fill text-success me-2 mt-1" style="font-size: 0.5rem;"></i>
                                <div>
                                    <div class="fw-semibold">Route Updated</div>
                                    <div class="small text-muted">Alternative route suggested</div>
                                </div>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success">1 hour</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start border-0 py-3">
                            <div class="d-flex align-items-start">
                                <i class="bi bi-circle-fill text-primary me-2 mt-1" style="font-size: 0.5rem;"></i>
                                <div>
                                    <div class="fw-semibold">Vehicle Maintenance</div>
                                    <div class="small text-muted">Service due in 500 km</div>
                                </div>
                            </div>
                            <span class="badge bg-primary bg-opacity-10 text-primary">2 hours</span>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Performance Chart Section -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 pt-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-semibold mb-0">
                            <i class="bi bi-graph-up me-2"></i>Performance Overview
                        </h5>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-secondary active">Week</button>
                            <button class="btn btn-outline-secondary">Month</button>
                            <button class="btn btn-outline-secondary">Year</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <!-- Simple bar chart visualization -->
                        <div class="col-md-8">
                            <div class="d-flex align-items-end justify-content-between" style="height: 150px;">
                                <div class="text-center">
                                    <div class="bg-primary bg-opacity-25 rounded" style="height: 80px; width: 40px;">
                                        <div class="bg-primary rounded" style="height: 60px; width: 40px;"></div>
                                    </div>
                                    <div class="small text-muted mt-1">Mon</div>
                                </div>
                                <div class="text-center">
                                    <div class="bg-primary bg-opacity-25 rounded" style="height: 100px; width: 40px;">
                                        <div class="bg-primary rounded" style="height: 80px; width: 40px;"></div>
                                    </div>
                                    <div class="small text-muted mt-1">Tue</div>
                                </div>
                                <div class="text-center">
                                    <div class="bg-primary bg-opacity-25 rounded" style="height: 60px; width: 40px;">
                                        <div class="bg-primary rounded" style="height: 45px; width: 40px;"></div>
                                    </div>
                                    <div class="small text-muted mt-1">Wed</div>
                                </div>
                                <div class="text-center">
                                    <div class="bg-primary bg-opacity-25 rounded" style="height: 120px; width: 40px;">
                                        <div class="bg-primary rounded" style="height: 95px; width: 40px;"></div>
                                    </div>
                                    <div class="small text-muted mt-1">Thu</div>
                                </div>
                                <div class="text-center">
                                    <div class="bg-primary bg-opacity-25 rounded" style="height: 90px; width: 40px;">
                                        <div class="bg-primary rounded" style="height: 70px; width: 40px;"></div>
                                    </div>
                                    <div class="small text-muted mt-1">Fri</div>
                                </div>
                                <div class="text-center">
                                    <div class="bg-primary bg-opacity-25 rounded" style="height: 70px; width: 40px;">
                                        <div class="bg-primary rounded" style="height: 55px; width: 40px;"></div>
                                    </div>
                                    <div class="small text-muted mt-1">Sat</div>
                                </div>
                                <div class="text-center">
                                    <div class="bg-primary bg-opacity-25 rounded" style="height: 50px; width: 40px;">
                                        <div class="bg-primary rounded" style="height: 35px; width: 40px;"></div>
                                    </div>
                                    <div class="small text-muted mt-1">Sun</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="bg-light rounded-3 p-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Average Trip Duration</span>
                                    <span class="fw-bold">4.2 hrs</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">On-Time Rate</span>
                                    <span class="fw-bold text-success">94%</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Fuel Efficiency</span>
                                    <span class="fw-bold">8.2 km/L</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span class="text-muted">Earnings This Week</span>
                                    <span class="fw-bold text-primary">₹24,500</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include("include/footer.php");
?>


<!-- JavaScript for interactivity -->
<script src="js/script.js">

</script>

