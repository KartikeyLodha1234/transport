<?php
include("./includes/header.php");
?>

<div class="container-fluid py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold mb-1">
                <i class="bi bi-person-badge text-primary me-2"></i>Driver Fleet Directory
            </h2>
            <p class="text-muted mb-0">Onboard operational operators and log transport authorizations into CargoMax index.</p>
        </div>
        <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#addDriverModal">
            <i class="bi bi-plus-lg me-2"></i>Add Driver
        </button>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 bg-primary bg-opacity-10 text-primary rounded-3 me-3">
                        <i class="bi bi-people fs-3"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle text-muted mb-1 fw-normal">Total Drivers</h6>
                        <h3 class="card-title mb-0 fw-bold">50</h3>
                        <small class="text-muted">+3 this month</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 bg-success bg-opacity-10 text-success rounded-3 me-3">
                        <i class="bi bi-check-circle fs-3"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle text-muted mb-1 fw-normal">Active Drivers</h6>
                        <h3 class="card-title mb-0 fw-bold">38</h3>
                        <small class="text-success"><i class="bi bi-arrow-up"></i> 90% utilization</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 bg-info bg-opacity-10 text-info rounded-3 me-3">
                        <i class="bi bi-graph-up-arrow fs-3"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle text-muted mb-1 fw-normal">Fleet Efficiency</h6>
                        <h3 class="card-title mb-0 fw-bold">94%</h3>
                        <small class="text-success"><i class="bi bi-arrow-up"></i> +5% from last month</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Driver Ledger Table -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0 pt-3 pb-2">
            <div class="row align-items-center g-3">
                <div class="col-12 col-md-auto">
                    <h5 class="fw-semibold mb-0">
                        <i class="bi bi-list-ul me-2"></i>Active Registry Ledger
                    </h5>
                </div>

                <div class="col-12 col-md-auto ms-auto">
                    <div class="d-flex align-items-center flex-wrap flex-sm-nowrap gap-2">
                        <div class="input-group input-group-sm flex-grow-1 flex-sm-grow-0"
                            style="min-width: 200px; max-width: 250px;">
                            <span class="input-group-text bg-white border-end-0 text-muted">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" placeholder="Search drivers..."
                                id="driverSearch">
                        </div>

                        <div class="d-flex gap-2 w-100 w-sm-auto justify-content-start justify-content-sm-end">
                            <button class="btn btn-sm btn-outline-secondary d-inline-flex align-items-center gap-1" onclick="filterTable()">
                                <i class="bi bi-funnel"></i>Filter
                            </button>
                            <button class="btn btn-sm btn-outline-secondary d-inline-flex align-items-center gap-1" onclick="exportTable()">
                                <i class="bi bi-download"></i>Export
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="driverTable">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 70px;">Sr. No</th>
                            <th>Driver Name</th>
                            <th>Phone Number</th>
                            <th>Date of Birth</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th style="text-align: center; width: 180px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="driverTableBody">
                        <tr>
                            <td><span class="fw-semibold text-muted">#001</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Kartikey+Lodha&background=0D6EFD&color=fff&size=32"
                                        class="rounded-circle me-2" width="32" height="32" alt="">
                                    <span class="fw-semibold">Kartikey Lodha</span>
                                </div>
                            </td>
                            <td>+91 98765 43210</td>
                            <td><span class="text-muted">18-05-2002</span></td>
                            <td>Bhilwara, Rajasthan</td>
                            <td>
                                <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2 d-inline-flex align-items-center">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 0.4rem;"></i>
                                    On Duty
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <button class="btn btn-outline-primary" title="View Details" onclick="viewDriver('001')">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-outline-warning" title="Edit" onclick="editDriver('001')">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-outline-danger" title="Delete" onclick="deleteDriver('001')">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="fw-semibold text-muted">#002</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Rajesh+Kumar&background=198754&color=fff&size=32"
                                        class="rounded-circle me-2" width="32" height="32" alt="">
                                    <span class="fw-semibold">Rajesh Kumar</span>
                                </div>
                            </td>
                            <td>+91 94140 12345</td>
                            <td><span class="text-muted">15-08-1995</span></td>
                            <td>Udaipur, Rajasthan</td>
                            <td>
                                <span class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-3 py-2 d-inline-flex align-items-center">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 0.4rem;"></i>
                                    Off Duty
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <button class="btn btn-outline-primary" title="View Details"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-outline-warning" title="Edit"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger" title="Delete"><i class="bi bi-trash3"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="fw-semibold text-muted">#003</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Amit+Singh&background=6F42C1&color=fff&size=32"
                                        class="rounded-circle me-2" width="32" height="32" alt="">
                                    <span class="fw-semibold">Amit Singh</span>
                                </div>
                            </td>
                            <td>+91 96100 56789</td>
                            <td><span class="text-muted">10-12-1992</span></td>
                            <td>Jaipur, Rajasthan</td>
                            <td>
                                <span class="badge bg-info bg-opacity-10 text-info rounded-pill px-3 py-2 d-inline-flex align-items-center">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 0.4rem;"></i>
                                    Standby
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <button class="btn btn-outline-primary" title="View Details"><i class="bi bi-eye"></i></button>
                                    <button class="btn btn-outline-warning" title="Edit"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger" title="Delete"><i class="bi bi-trash3"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top flex-wrap gap-2">
                <div class="small text-muted">
                    Showing <span class="fw-semibold" id="showingStart">1-3</span> of <span class="fw-semibold" id="totalCount">50</span> drivers
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>

<!-- ========================================== -->
<!-- ADD DRIVER MODAL - CLEAN & STRUCTURED -->
<!-- ========================================== -->
<div class="modal fade" id="addDriverModal" tabindex="-1" aria-labelledby="addDriverModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0 pt-4 pb-0 px-4">
                <div>
                    <h5 class="modal-title fw-bold fs-4" id="addDriverModalLabel">
                        <i class="bi bi-person-badge text-primary me-2"></i>Add New Driver
                    </h5>
                    <p class="text-muted small mb-0 mt-1">Enter credentials and account infrastructure mapping for the operational operator.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body px-4 pb-0">
                <form id="addDriverForm" novalidate>
                    <div class="row g-4">
                        
                        <!-- Full Name -->
                        <div class="col-md-6">
                            <label for="driverName" class="form-label fw-semibold">
                                <i class="bi bi-person text-primary me-1"></i>Full Name
                            </label>
                            <input type="text" class="form-control" id="driverName" 
                                   placeholder="e.g. Kartikey Lodha" required>
                            <div class="invalid-feedback">Please enter driver full name.</div>
                        </div>
                        
                        <!-- Phone Number -->
                        <div class="col-md-6">
                            <label for="driverPhone" class="form-label fw-semibold">
                                <i class="bi bi-telephone text-primary me-1"></i>Phone No.
                            </label>
                            <input type="tel" class="form-control" id="driverPhone" 
                                   placeholder="e.g. 9664153249" required>
                            <div class="invalid-feedback">Please enter phone number.</div>
                        </div>
                        
                        <!-- Email -->
                        <div class="col-md-4">
                            <label for="driverEmail" class="form-label fw-semibold">
                                <i class="bi bi-envelope text-primary me-1"></i>Email Address
                            </label>
                            <input type="email" class="form-control" id="driverEmail" 
                                   placeholder="e.g., driver@gmail.com" required>
                            <div class="invalid-feedback">Please enter a valid email.</div>
                        </div>
                        
                        <!-- Licence Number -->
                        <div class="col-md-4">
                            <label for="licenceNumber" class="form-label fw-semibold">
                                <i class="bi bi-card-text text-primary me-1"></i>Licence Number
                            </label>
                            <input type="text" class="form-control text-uppercase" id="licenceNumber" 
                                   placeholder="e.g., RJ06-2022001" required>
                            <div class="invalid-feedback">Please enter licence number.</div>
                        </div>
                        
                        <!-- Years of Experience -->
                        <div class="col-md-4">
                            <label for="experienceYears" class="form-label fw-semibold">
                                <i class="bi bi-star text-primary me-1"></i>Years of Experience
                            </label>
                            <input type="number" class="form-control" id="experienceYears" 
                                   placeholder="e.g., 5" min="0" max="50" required>
                            <div class="invalid-feedback">Please enter valid experience years.</div>
                        </div>
                        
                        <!-- Bank Name -->
                        <div class="col-md-6">
                            <label for="bankName" class="form-label fw-semibold">
                                <i class="bi bi-bank text-primary me-1"></i>Bank Name
                            </label>
                            <input type="text" class="form-control" id="bankName" 
                                   placeholder="e.g., AU Small Finance Bank" required>
                            <div class="invalid-feedback">Please enter Bank name.</div>
                        </div>
                        
                        <!-- Account Number -->
                        <div class="col-md-6">
                            <label for="accountNumber" class="form-label fw-semibold">
                                <i class="bi bi-credit-card-2-front text-primary me-1"></i>Account Number
                            </label>
                            <input type="text" class="form-control" id="accountNumber" 
                                   placeholder="Enter account number" required>
                            <div class="invalid-feedback">Please enter account number.</div>
                        </div>

                        <!-- IFSC Code -->
                        <div class="col-md-6">
                            <label for="ifscCode" class="form-label fw-semibold">
                                <i class="bi bi-qr-code text-primary me-1"></i>IFSC Code
                            </label>
                            <input type="text" class="form-control text-uppercase" id="ifscCode" 
                                   placeholder="e.g., AUBL0002101" required>
                            <div class="invalid-feedback">Please enter valid IFSC code.</div>
                        </div>

                        <!-- Password (FIXED & ADDED) -->
                        <div class="col-md-6">
                            <label for="driverPassword" class="form-label fw-semibold">
                                <i class="bi bi-shield-lock text-primary me-1"></i>Portal Password
                            </label>
                            <input type="password" class="form-control" id="driverPassword" 
                                   placeholder="Assign security password" required>
                            <div class="invalid-feedback">Please assign a strong password.</div>
                        </div>
      <div class="col-md-6">
                            <label for="driverPassword" class="form-label fw-semibold">
                                <i class="bi bi-shield-lock text-primary me-1"></i>Portal Password
                            </label>
                            <input type="password" class="form-control" id="driverPassword" 
                                   placeholder="Assign security password" required>
                            <div class="invalid-feedback">Please assign a strong password.</div>
                        </div>
                        <!-- Notes -->
                        <div class="col-12">
                            <label for="driverNotes" class="form-label fw-semibold">
                                <i class="bi bi-sticky text-primary me-1"></i>Internal Administration Remarks
                            </label>
                            <textarea class="form-control" id="driverNotes" rows="2" 
                                      placeholder="Optional notes regarding screening or medical clearances..."></textarea>
                        </div>
                        
                    </div>
                </form>
            </div>
            
            <div class="modal-footer border-0 px-4 pb-4 pt-3">
                <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg me-1"></i>Cancel
                </button>
                <button type="button" class="btn btn-primary px-4" onclick="saveDriver()">
                    <i class="bi bi-check-lg me-2"></i>Add Driver
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include("./includes/footer.php"); ?>