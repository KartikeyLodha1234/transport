<?php
include("./includes/header.php");
?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-4 gap-3">
        <div>
            <h2 class="fw-bold mb-1">
                <i class="bi bi-truck text-primary me-2"></i>Vehicle Fleet Directory
            </h2>
            <p class="text-muted mb-0">Monitor tactical fleet asset distributions and status configurations.</p>
        </div>
        <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal"
            data-bs-target="#addVehicleModal">
            <i class="bi bi-plus-lg me-2"></i>Add Vehicle
        </button>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 bg-primary bg-opacity-10 text-primary rounded-3 me-3">
                        <i class="bi bi-truck fs-3"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle text-muted mb-1 fw-normal">Total Vehicles</h6>
                        <h3 class="card-title mb-0 fw-bold">42</h3>
                        <small class="text-muted">+3 this month</small>
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
                        <h6 class="card-subtitle text-muted mb-1 fw-normal">Active Vehicles</h6>
                        <h3 class="card-title mb-0 fw-bold">38</h3>
                        <small class="text-success"><i class="bi bi-arrow-up"></i> 90% utilization</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="flex-shrink-0 p-3 bg-warning bg-opacity-10 text-warning rounded-3 me-3">
                        <i class="bi bi-tools fs-3"></i>
                    </div>
                    <div>
                        <h6 class="card-subtitle text-muted mb-1 fw-normal">Under Maintenance</h6>
                        <h3 class="card-title mb-0 fw-bold">3</h3>
                        <small class="text-warning">2 in service</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-3">
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

    <!-- Vehicle Table -->
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
                            <input type="text" class="form-control border-start-0" placeholder="Search vehicles..."
                                id="vehicleSearch">
                        </div>

                        <div class="d-flex gap-2 w-100 w-sm-auto justify-content-start justify-content-sm-end">
                            <button class="btn btn-sm btn-outline-secondary d-inline-flex align-items-center gap-1"
                                onclick="filterTable()">
                                <i class="bi bi-funnel"></i>Filter
                            </button>
                            <button class="btn btn-sm btn-outline-secondary d-inline-flex align-items-center gap-1"
                                onclick="exportTable()">
                                <i class="bi bi-download"></i>Export
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="vehicleTable">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 70px;">Sr. No</th>
                            <th>Company Owner</th>
                            <th>Truck Model</th>
                            <th>Model Year</th>
                            <th>Number Plate</th>
                            <th>Status</th>
                            <th style="text-align: center; width: 180px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="vehicleTableBody">
                        <tr>
                            <td><span class="fw-semibold text-muted">#001</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Kartikey+Lodha&background=0D6EFD&color=fff&size=32"
                                        class="rounded-circle me-2" width="32" height="32" alt="">
                                    <span class="fw-semibold">Kartikey Lodha</span>
                                </div>
                            </td>
                            <td>TRK-4022</td>
                            <td><span class="text-muted">2002</span></td>
                            <td><code class="bg-light px-2 py-1 rounded text-uppercase">RJ06PA6666</code></td>
                            <td>
                                <span
                                    class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2 d-inline-flex align-items-center">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 0.4rem;"></i>
                                    In Transit
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <button class="btn btn-outline-primary" title="View Details"
                                        onclick="viewVehicle('TRK-4022')">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-outline-warning" title="Edit"
                                        onclick="editVehicle('TRK-4022')">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button class="btn btn-outline-danger" title="Delete"
                                        onclick="deleteVehicle('TRK-4022')">
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
                            <td>Tata Ace</td>
                            <td><span class="text-muted">2021</span></td>
                            <td><code class="bg-light px-2 py-1 rounded text-uppercase">RJ12AB1234</code></td>
                            <td>
                                <span
                                    class="badge bg-warning bg-opacity-10 text-warning rounded-pill px-3 py-2 d-inline-flex align-items-center">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 0.4rem;"></i>
                                    Maintenance
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <button class="btn btn-outline-primary" title="View Details"><i
                                            class="bi bi-eye"></i></button>
                                    <button class="btn btn-outline-warning" title="Edit"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger" title="Delete"><i
                                            class="bi bi-trash3"></i></button>
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
                            <td>Ashok Leyland</td>
                            <td><span class="text-muted">2023</span></td>
                            <td><code class="bg-light px-2 py-1 rounded text-uppercase">HR26CD5678</code></td>
                            <td>
                                <span
                                    class="badge bg-info bg-opacity-10 text-info rounded-pill px-3 py-2 d-inline-flex align-items-center">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 0.4rem;"></i>
                                    Loading
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <button class="btn btn-outline-primary" title="View Details"><i
                                            class="bi bi-eye"></i></button>
                                    <button class="btn btn-outline-warning" title="Edit"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger" title="Delete"><i
                                            class="bi bi-trash3"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="fw-semibold text-muted">#004</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Sanjay+Dutt&background=DC3545&color=fff&size=32"
                                        class="rounded-circle me-2" width="32" height="32" alt="">
                                    <span class="fw-semibold">Sanjay Dutt</span>
                                </div>
                            </td>
                            <td>Mahindra Bolero</td>
                            <td><span class="text-muted">2022</span></td>
                            <td><code class="bg-light px-2 py-1 rounded text-uppercase">MH04EF9012</code></td>
                            <td>
                                <span
                                    class="badge bg-danger bg-opacity-10 text-danger rounded-pill px-3 py-2 d-inline-flex align-items-center">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 0.4rem;"></i>
                                    Critical
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <button class="btn btn-outline-primary" title="View Details"><i
                                            class="bi bi-eye"></i></button>
                                    <button class="btn btn-outline-warning" title="Edit"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger" title="Delete"><i
                                            class="bi bi-trash3"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="fw-semibold text-muted">#005</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name=Vikram+Singh&background=0DCAF0&color=fff&size=32"
                                        class="rounded-circle me-2" width="32" height="32" alt="">
                                    <span class="fw-semibold">Vikram Singh</span>
                                </div>
                            </td>
                            <td>Eicher Pro</td>
                            <td><span class="text-muted">2024</span></td>
                            <td><code class="bg-light px-2 py-1 rounded text-uppercase">DL09GH3456</code></td>
                            <td>
                                <span
                                    class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2 d-inline-flex align-items-center">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 0.4rem;"></i>
                                    Delivered
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2 justify-content-center align-items-center">
                                    <button class="btn btn-outline-primary" title="View Details"><i
                                            class="bi bi-eye"></i></button>
                                    <button class="btn btn-outline-warning" title="Edit"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-outline-danger" title="Delete"><i
                                            class="bi bi-trash3"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top flex-wrap gap-2">
                <div class="small text-muted">
                    Showing <span class="fw-semibold" id="showingStart">1-5</span> of <span class="fw-semibold"
                        id="totalCount">42</span> vehicles
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>

<!-- ========================================== -->
<!-- ADD VEHICLE MODAL - ENHANCED -->
<!-- ========================================== -->
<div class="modal fade" id="addVehicleModal" tabindex="-1" aria-labelledby="addVehicleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header border-0 pt-4 pb-0 px-4">
                <div>
                    <h5 class="modal-title fw-bold fs-4" id="addVehicleModalLabel">
                        <i class="bi bi-truck text-primary me-2"></i>Add New Vehicle
                    </h5>
                    <p class="text-muted small mb-0 mt-1">Enter the details for the new vehicle to add it to your fleet.
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4 pb-0">
                <form id="addVehicleForm" novalidate>
                    <div class="row g-4">

                        <!-- Vehicle ID -->
                        <div class="col-md-6">
                            <label for="vehicleId" class="form-label fw-semibold">
                                <i class="bi bi-hash text-primary me-1"></i>Vehicle ID
                            </label>
                            <input type="text" class="form-control" id="vehicleId" placeholder="e.g., TRK-004" required>
                            <div class="invalid-feedback">Please enter Vehicle ID.</div>
                            <div class="form-text">Unique identifier for this vehicle.</div>
                        </div>

                        <!-- Type -->
                        <div class="col-md-6">
                            <label for="vehicleType" class="form-label fw-semibold">
                                <i class="bi bi-truck-front text-primary me-1"></i>Type
                            </label>
                            <select class="form-select" id="vehicleType" required>
                                <option value="">Select type</option>
                                <option value="Truck">🚛 Truck</option>
                                <option value="Van">🚐 Tempo</option>
                                <option value="Car">🚗 Commerical Tempo</option>
                                <option value="Forklift">🏗️ Forklift</option>
                                <option value="Trailer">🚛 Trailer</option>
                            </select>
                            <div class="invalid-feedback">Please select a vehicle type.</div>
                        </div>

                        <!-- Make -->
                        <div class="col-md-4">
                            <label for="vehicleMake" class="form-label fw-semibold">
                                <i class="bi bi-building text-primary me-1"></i>Make
                            </label>
                            <input type="text" class="form-control" id="vehicleMake" placeholder="e.g., Freightliner"
                                required>
                            <div class="invalid-feedback">Please enter vehicle make.</div>
                        </div>

                        <!-- Model -->
                        <div class="col-md-4">
                            <label for="vehicleModel" class="form-label fw-semibold">
                                <i class="bi bi-tag text-primary me-1"></i>Model
                            </label>
                            <input type="text" class="form-control" id="vehicleModel" placeholder="e.g., Cascadia"
                                required>
                            <div class="invalid-feedback">Please enter vehicle model.</div>
                        </div>

                        <!-- Year -->
                        <div class="col-md-4">
                            <label for="modelYear" class="form-label fw-semibold">
                                <i class="bi bi-calendar text-primary me-1"></i>Year
                            </label>
                            <input type="number" class="form-control" id="modelYear" placeholder="e.g., 2023" min="2000"
                                max="2026" required>
                            <div class="invalid-feedback">Please enter a valid year (2000-2026).</div>
                        </div>

                        <!-- License Plate -->
                        <div class="col-md-6">
                            <label for="numberPlate" class="form-label fw-semibold">
                                <i class="bi bi-credit-card text-primary me-1"></i>License Plate
                            </label>
                            <input type="text" class="form-control text-uppercase" id="numberPlate"
                                placeholder="e.g., TRK-004-NY" required>
                            <div class="invalid-feedback">Please enter license plate.</div>
                            <div class="form-text">Vehicle registration number.</div>
                        </div>

                        <div class="col-md-6">
                            <label for="pucNumber" class="form-label fw-semibold">
                                <i class="bi bi-file-earmark-check text-primary me-1"></i>PUC Certificate Number
                            </label>
                            <input type="text" class="form-control text-uppercase" id="pucNumber"
                                placeholder="e.g., RJ06-PUC-12345" required>
                            <div class="invalid-feedback">Please enter PUC Certificate Number.</div>
                        </div>

                        <div class="col-md-6">
                            <label for="pucExpiry" class="form-label fw-semibold">
                                <i class="bi bi-calendar-date text-primary me-1"></i>PUC Expiry Date
                            </label>
                            <input type="date" class="form-control" id="pucExpiry" required>
                            <div class="invalid-feedback">Please select PUC expiration date.</div>
                        </div>

                        <div class="col-md-6">
                            <label for="uploadPuc" class="form-label fw-semibold text-dark">
                                <i class="bi bi-cloud-arrow-up text-primary me-1"></i>Upload PUC Document Copy
                            </label>
                            <input type="file" class="form-control" id="uploadPuc" accept=".jpg,.jpeg,.png,.pdf"
                                required>
                            <div class="small text-muted mt-1">Accepted formats: JPG, PNG, PDF (Max 5MB)</div>
                            <div class="invalid-feedback">Please upload valid PUC verification document.</div>
                        </div>

                        <!-- Notes -->
                        <div class="col-12">
                            <label for="vehicleNotes" class="form-label fw-semibold">
                                <i class="bi bi-sticky text-primary me-1"></i>Notes
                            </label>
                            <textarea class="form-control" id="vehicleNotes" rows="2"
                                placeholder="Additional notes about the vehicle..."></textarea>
                            <div class="form-text">Optional: Add any special notes or remarks.</div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="modal-footer border-0 px-4 pb-4 pt-3">
                <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg me-1"></i>Cancel
                </button>
                <button type="button" class="btn btn-primary px-4" onclick="saveVehicle()">
                    <i class="bi bi-check-lg me-2"></i>Add Vehicle
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS if not already included -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include("./includes/footer.php"); ?>