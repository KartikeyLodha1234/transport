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
        <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#addvehicle">
    <i class="bi bi-plus-lg me-2"></i>Add Vehicle
</button>
    </div>

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
                            <button class="btn btn-sm btn-outline-secondary d-inline-flex align-items-center gap-1">
                                <i class="bi bi-funnel"></i>Filter
                            </button>
                            <button class="btn btn-sm btn-outline-secondary d-inline-flex align-items-center gap-1">
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
                    <tbody>
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
                    Showing <span class="fw-semibold">1-5</span> of <span class="fw-semibold">42</span> vehicles
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

<div class="modal fade" id="addVehicleModal" tabindex="-1" aria-labelledby="addVehicleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="addVehicleModalLabel">
                    <i class="bi bi-truck me-2 text-primary"></i>Add New Vehicle
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addVehicleForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="ownerName" class="form-label fw-semibold">Company Owner</label>
                            <input type="text" class="form-control" id="ownerName" placeholder="Enter owner name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="truckModel" class="form-label fw-semibold">Truck Model</label>
                            <input type="text" class="form-control" id="truckModel" placeholder="e.g., Tata Ace" required>
                        </div>
                        <div class="col-md-4">
                            <label for="modelYear" class="form-label fw-semibold">Model Year</label>
                            <input type="number" class="form-control" id="modelYear" placeholder="YYYY" min="2000" max="2026">
                        </div>
                        <div class="col-md-4">
                            <label for="numberPlate" class="form-label fw-semibold">Number Plate</label>
                            <input type="text" class="form-control text-uppercase" id="numberPlate" placeholder="RJ06PA6666" required>
                        </div>
                        <div class="col-md-4">
                            <label for="vehicleStatus" class="form-label fw-semibold">Status</label>
                            <select class="form-select" id="vehicleStatus">
                                <option value="In Transit">In Transit</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="Loading">Loading</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Critical">Critical</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="vehicleNotes" class="form-label fw-semibold">Additional Notes</label>
                            <textarea class="form-control" id="vehicleNotes" rows="2" placeholder="Any special notes about this vehicle..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="saveVehicle()">
                    <i class="bi bi-check-lg me-2"></i>Add Vehicle
                </button>
            </div>
        </div>
    </div>
</div>
<!-- 
<div class="modal fade" id="newShipmentModal" tabindex="-1" aria-labelledby="newShipmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="newShipmentModalLabel">Create New Shipment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="newShipmentForm">
                    <div class="mb-3">
                        <label for="destination" class="form-label fw-semibold">Destination</label>
                        <input type="text" class="form-control" id="destination" placeholder="Enter destination">
                    </div>
                    <div class="mb-3">
                        <label for="driver" class="form-label fw-semibold">Assign Driver</label>
                        <select class="form-select" id="driver">
                            <option selected>Select driver...</option>
                            <option value="1">Rajesh Kumar</option>
                            <option value="2">Amit Singh</option>
                            <option value="3">Vijay Yadav</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="vehicle" class="form-label fw-semibold">Vehicle</label>
                        <select class="form-select" id="vehicle">
                            <option selected>Select vehicle...</option>
                            <option value="1">VH-201 - Tata Ace</option>
                            <option value="2">VH-202 - Ashok Leyland</option>
                            <option value="3">VH-203 - Mahindra Bolero</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="eta" class="form-label fw-semibold">Expected Delivery</label>
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
</div> -->

<script src="js/script.js"></script>
<?php include("./includes/footer.php"); ?>  