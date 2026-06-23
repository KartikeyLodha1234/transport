<?php
// This should be at the VERY TOP of your file before any HTML output
include("includes/header.php");
?>
<!-- Page Content -->
<div class="container-fluid p-4">

    <!-- Page Header -->
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-3 mb-4 border-bottom">
        <div>
            <h1 class="h2 mb-1">Overview Dashboard</h1>
            <p class="text-muted mb-0">Real-time summary of your fleet operations</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-share me-1"></i> Share
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-download me-1"></i> Export
                </button>
            </div>
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#newShipmentModal">
                <i class="bi bi-plus-lg me-1"></i> New Shipment
            </button>
        </div>
    </div>

    <!-- Analytics Cards Row -->
    <div class="row g-4 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 bg-primary bg-opacity-10 text-primary rounded-3 me-3">
                        <i class="bi bi-truck fs-3"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle text-muted mb-1 fw-normal">Active Shipments</h6>
                        <h3 class="card-title mb-0 fw-bold">42</h3>
                        <small class="text-success"><i class="bi bi-arrow-up"></i> 12% from yesterday</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 bg-success bg-opacity-10 text-success rounded-3 me-3">
                        <i class="bi bi-check-circle fs-3"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle text-muted mb-1 fw-normal">Vehicles En Route</h6>
                        <h3 class="card-title mb-0 fw-bold">38 <span class="fs-6 text-muted fw-normal">/ 45</span></h3>
                        <small class="text-muted">84% utilization</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 bg-danger bg-opacity-10 text-danger rounded-3 me-3">
                        <i class="bi bi-exclamation-triangle fs-3"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle text-muted mb-1 fw-normal">Alerts / Delays</h6>
                        <h3 class="card-title mb-0 fw-bold text-danger">3</h3>
                        <small class="text-danger"><i class="bi bi-arrow-up"></i> 2 new today</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 bg-warning bg-opacity-10 text-warning rounded-3 me-3">
                        <i class="bi bi-box-seam fs-3"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle text-muted mb-1 fw-normal">Delivered Today</h6>
                        <h3 class="card-title mb-0 fw-bold">18</h3>
                        <small class="text-success"><i class="bi bi-arrow-up"></i> 5 more than yesterday</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Secondary Content Row -->
    <div class="row g-4">
        <div class="col-12 col-xl-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pt-3 pb-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 fw-semibold">Recent Shipments</h5>
                    <a href="shipment.php" class="btn btn-sm btn-link text-decoration-none p-0">
                        View All <i class="bi bi-chevron-right ms-1"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Destination</th>
                                    <th>Driver</th>
                                    <th>Status</th>
                                    <th>ETA</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="fw-semibold">#TRK-8902</span></td>
                                    <td>Mumbai Hub</td>
                                    <td>
                                        <img src="https://ui-avatars.com/api/?name=Rajesh+Kumar&background=6C757D&color=fff&size=24"
                                            class="rounded-circle me-1" width="24" height="24" alt="">
                                        Rajesh Kumar
                                    </td>
                                    <td><span
                                            class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2">In
                                            Transit</span></td>
                                    <td><span class="fw-medium">14:30 PM</span></td>
                                    <td class="text-end">
                                        <a href="#" class="text-muted"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="fw-semibold">#TRK-8903</span></td>
                                    <td>Delhi Terminus</td>
                                    <td>
                                        <img src="https://ui-avatars.com/api/?name=Amit+Singh&background=6C757D&color=fff&size=24"
                                            class="rounded-circle me-1" width="24" height="24" alt="">
                                        Amit Singh
                                    </td>
                                    <td><span
                                            class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-3 py-2">Delayed</span>
                                    </td>
                                    <td><span class="fw-medium text-danger">17:45 PM</span></td>
                                    <td class="text-end">
                                        <a href="#" class="text-muted"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="fw-semibold">#TRK-8904</span></td>
                                    <td>Bangalore WH</td>
                                    <td>
                                        <img src="https://ui-avatars.com/api/?name=Vijay+Yadav&background=6C757D&color=fff&size=24"
                                            class="rounded-circle me-1" width="24" height="24" alt="">
                                        Vijay Yadav
                                    </td>
                                    <td><span
                                            class="badge bg-info bg-opacity-10 text-info rounded-pill px-3 py-2">Loading</span>
                                    </td>
                                    <td><span class="fw-medium">Tomorrow</span></td>
                                    <td class="text-end">
                                        <a href="#" class="text-muted"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="fw-semibold">#TRK-8905</span></td>
                                    <td>Chennai Port</td>
                                    <td>
                                        <img src="https://ui-avatars.com/api/?name=Suresh+Reddy&background=6C757D&color=fff&size=24"
                                            class="rounded-circle me-1" width="24" height="24" alt="">
                                        Suresh Reddy
                                    </td>
                                    <td><span
                                            class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2">Delivered</span>
                                    </td>
                                    <td><span class="fw-medium text-success">09:15 AM</span></td>
                                    <td class="text-end">
                                        <a href="#" class="text-muted"><i class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-header bg-white border-0 pt-3 pb-0 d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0 fw-semibold">Live System Logs</h5>
                    <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1">
                        <span class="spinner-grow spinner-grow-sm me-1" role="status"
                            style="width: 0.5rem; height: 0.5rem;"></span>
                        Live
                    </span>
                </div>
                <div class="card-body">
                    <div class="log-list">
                        <ul class="list-group list-group-flush small">
                            <li class="list-group-item px-0 py-3 d-flex align-items-start border-0 border-bottom">
                                <i class="bi bi-circle-fill text-success mt-1 me-3 fs-6 flex-shrink-0"></i>
                                <div>
                                    <div class="fw-semibold">Shipment #TRK-8901 Delivered</div>
                                    <span class="text-muted">Cleared terminal gateway • 10 mins ago</span>
                                </div>
                            </li>
                            <li class="list-group-item px-0 py-3 d-flex align-items-start border-0 border-bottom">
                                <i class="bi bi-circle-fill text-danger mt-1 me-3 fs-6 flex-shrink-0"></i>
                                <div>
                                    <div class="fw-semibold">Route Hazard Alert</div>
                                    <span class="text-muted">Heavy traffic delay on NH-48 for #TRK-8903 • 34 mins
                                        ago</span>
                                </div>
                            </li>
                            <li class="list-group-item px-0 py-3 d-flex align-items-start border-0 border-bottom">
                                <i class="bi bi-circle-fill text-primary mt-1 me-3 fs-6 flex-shrink-0"></i>
                                <div>
                                    <div class="fw-semibold">New Dispatch Scheduled</div>
                                    <span class="text-muted">Assigned Driver Vijay Yadav • 1 hour ago</span>
                                </div>
                            </li>
                            <li class="list-group-item px-0 py-3 d-flex align-items-start border-0 border-bottom">
                                <i class="bi bi-circle-fill text-success mt-1 me-3 fs-6 flex-shrink-0"></i>
                                <div>
                                    <div class="fw-semibold">Vehicle #VH-203 Maintained</div>
                                    <span class="text-muted">Service completed at workshop • 2 hours ago</span>
                                </div>
                            </li>
                            <li class="list-group-item px-0 py-3 d-flex align-items-start border-0">
                                <i class="bi bi-circle-fill text-warning mt-1 me-3 fs-6 flex-shrink-0"></i>
                                <div>
                                    <div class="fw-semibold">Fuel Alert: Vehicle #VH-198</div>
                                    <span class="text-muted">Low fuel level detected • 3 hours ago</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("includes/footer.php");
    ?>
</div>
</div>

<!-- New Shipment Modal -->
<div class="modal fade" id="newShipmentModal" tabindex="-1" aria-labelledby="newShipmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newShipmentModalLabel">Create New Shipment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="destination" class="form-label">Destination</label>
                        <input type="text" class="form-control" id="destination" placeholder="Enter destination">
                    </div>
                    <div class="mb-3">
                        <label for="driver" class="form-label">Assign Driver</label>
                        <select class="form-select" id="driver">
                            <option selected>Select driver...</option>
                            <option value="1">Rajesh Kumar</option>
                            <option value="2">Amit Singh</option>
                            <option value="3">Vijay Yadav</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="vehicle" class="form-label">Vehicle</label>
                        <select class="form-select" id="vehicle">
                            <option selected>Select vehicle...</option>
                            <option value="1">VH-201 - Tata Ace</option>
                            <option value="2">VH-202 - Ashok Leyland</option>
                            <option value="3">VH-203 - Mahindra Bolero</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="eta" class="form-label">Expected Delivery</label>
                        <input type="datetime-local" class="form-control" id="eta">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Create Shipment</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script src="js/script.js">
</script>
</body>

</html>