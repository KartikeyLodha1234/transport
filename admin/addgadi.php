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
        <button type="button" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#addVehicleModal">
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
                    Showing <span class="fw-semibold" id="showingStart">1-5</span> of <span class="fw-semibold" id="totalCount">42</span> vehicles
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
<!-- ADD VEHICLE MODAL - FIXED -->
<!-- ========================================== -->
<div class="modal fade" id="addVehicleModal" tabindex="-1" aria-labelledby="addVehicleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold" id="addVehicleModalLabel">
                    <i class="bi bi-truck me-2"></i>Add New Vehicle
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form id="addVehicleForm" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="ownerName" class="form-label fw-semibold">
                                <i class="bi bi-person me-1 text-primary"></i>Company Owner
                            </label>
                            <input type="text" class="form-control" id="ownerName" placeholder="Enter owner name" required>
                            <div class="invalid-feedback">Please enter owner name.</div>
                        </div>
                        <div class="col-md-6">
                            <label for="truckModel" class="form-label fw-semibold">
                                <i class="bi bi-truck me-1 text-primary"></i>Truck Model
                            </label>
                            <input type="text" class="form-control" id="truckModel" placeholder="e.g., Tata Ace" required>
                            <div class="invalid-feedback">Please enter truck model.</div>
                        </div>
                        <div class="col-md-4">
                            <label for="modelYear" class="form-label fw-semibold">
                                <i class="bi bi-calendar me-1 text-primary"></i>Model Year
                            </label>
                            <input type="number" class="form-control" id="modelYear" placeholder="YYYY" min="2000" max="2026" required>
                            <div class="invalid-feedback">Please enter valid year (2000-2026).</div>
                        </div>
                        <div class="col-md-4">
                            <label for="numberPlate" class="form-label fw-semibold">
                                <i class="bi bi-hash me-1 text-primary"></i>Number Plate
                            </label>
                            <input type="text" class="form-control text-uppercase" id="numberPlate" placeholder="RJ06PA6666" required>
                            <div class="invalid-feedback">Please enter number plate.</div>
                        </div>
                        <div class="col-md-4">
                            <label for="vehicleStatus" class="form-label fw-semibold">
                                <i class="bi bi-circle me-1 text-primary"></i>Status
                            </label>
                            <select class="form-select" id="vehicleStatus" required>
                                <option value="">Select Status</option>
                                <option value="In Transit">In Transit</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="Loading">Loading</option>
                                <option value="Delivered">Delivered</option>
                                <option value="Critical">Critical</option>
                            </select>
                            <div class="invalid-feedback">Please select a status.</div>
                        </div>
                        <div class="col-12">
                            <label for="vehicleNotes" class="form-label fw-semibold">
                                <i class="bi bi-sticky me-1 text-primary"></i>Additional Notes
                            </label>
                            <textarea class="form-control" id="vehicleNotes" rows="2" placeholder="Any special notes about this vehicle..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-lg me-1"></i>Cancel
                </button>
                <button type="button" class="btn btn-primary" onclick="saveVehicle()">
                    <i class="bi bi-check-lg me-2"></i>Add Vehicle
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    // ========== SEARCH FUNCTIONALITY ==========
    const searchInput = document.getElementById('vehicleSearch');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase().trim();
            const rows = document.querySelectorAll('#vehicleTableBody tr');
            let visibleCount = 0;
            
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });
            
            // Update count
            const totalSpan = document.getElementById('totalCount');
            if (totalSpan) {
                totalSpan.textContent = visibleCount;
            }
        });
    }
    
    // ========== STATUS BADGE COLORS ==========
    const statusColors = {
        'In Transit': 'success',
        'Maintenance': 'warning',
        'Loading': 'info',
        'Delivered': 'success',
        'Critical': 'danger'
    };
    
    document.querySelectorAll('#vehicleTableBody tr').forEach(row => {
        const statusCell = row.querySelector('td:nth-child(6)');
        if (statusCell) {
            const badge = statusCell.querySelector('.badge');
            if (badge) {
                const statusText = badge.textContent.trim();
                const color = statusColors[statusText] || 'secondary';
                badge.className = `badge bg-${color} bg-opacity-10 text-${color} rounded-pill px-3 py-2 d-inline-flex align-items-center`;
            }
        }
    });
});

// ========== ACTION FUNCTIONS ==========
function viewVehicle(vehicleId) {
    alert(`📋 Viewing details for vehicle: ${vehicleId}`);
}

function editVehicle(vehicleId) {
    alert(`✏️ Editing vehicle: ${vehicleId}`);
}

function deleteVehicle(vehicleId) {
    if (confirm(`Are you sure you want to delete vehicle: ${vehicleId}?`)) {
        // Find and remove the row
        const rows = document.querySelectorAll('#vehicleTableBody tr');
        rows.forEach(row => {
            if (row.textContent.includes(vehicleId)) {
                row.remove();
                updateSerialNumbers();
                updateCount();
                alert(`🗑️ Vehicle ${vehicleId} deleted successfully!`);
            }
        });
    }
}

function updateSerialNumbers() {
    const rows = document.querySelectorAll('#vehicleTableBody tr');
    rows.forEach((row, index) => {
        const srNo = row.querySelector('td:first-child span');
        if (srNo) {
            const num = String(index + 1).padStart(3, '0');
            srNo.textContent = `#${num}`;
        }
    });
}

function updateCount() {
    const rows = document.querySelectorAll('#vehicleTableBody tr');
    const totalSpan = document.getElementById('totalCount');
    if (totalSpan) {
        totalSpan.textContent = rows.length;
    }
}

// ========== SAVE VEHICLE - MODAL FORM ==========
function saveVehicle() {
    const form = document.getElementById('addVehicleForm');
    
    // Check form validity
    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
    }
    
    // Get form data
    const owner = document.getElementById('ownerName').value.trim();
    const model = document.getElementById('truckModel').value.trim();
    const year = document.getElementById('modelYear').value.trim();
    const plate = document.getElementById('numberPlate').value.trim().toUpperCase();
    const status = document.getElementById('vehicleStatus').value;
    const notes = document.getElementById('vehicleNotes').value.trim();
    
    // Get avatar color based on status
    const statusColors = {
        'In Transit': '0D6EFD',
        'Maintenance': 'FFC107',
        'Loading': '0DCAF0',
        'Delivered': '198754',
        'Critical': 'DC3545'
    };
    const avatarColor = statusColors[status] || '6C757D';
    
    // Create new row
    const tableBody = document.getElementById('vehicleTableBody');
    const newRow = document.createElement('tr');
    const srNo = tableBody.children.length + 1;
    const srNoFormatted = String(srNo).padStart(3, '0');
    
    // Status badge color mapping
    const badgeColors = {
        'In Transit': 'success',
        'Maintenance': 'warning',
        'Loading': 'info',
        'Delivered': 'success',
        'Critical': 'danger'
    };
    const badgeColor = badgeColors[status] || 'secondary';
    
    newRow.innerHTML = `
        <td><span class="fw-semibold text-muted">#${srNoFormatted}</span></td>
        <td>
            <div class="d-flex align-items-center">
                <img src="https://ui-avatars.com/api/?name=${encodeURIComponent(owner)}&background=${avatarColor}&color=fff&size=32"
                    class="rounded-circle me-2" width="32" height="32" alt="">
                <span class="fw-semibold">${owner}</span>
            </div>
        </td>
        <td>${model}</td>
        <td><span class="text-muted">${year}</span></td>
        <td><code class="bg-light px-2 py-1 rounded text-uppercase">${plate}</code></td>
        <td>
            <span class="badge bg-${badgeColor} bg-opacity-10 text-${badgeColor} rounded-pill px-3 py-2 d-inline-flex align-items-center">
                <i class="bi bi-circle-fill me-1" style="font-size: 0.4rem;"></i>
                ${status}
            </span>
        </td>
        <td>
            <div class="d-flex gap-2 justify-content-center align-items-center">
                <button class="btn btn-outline-primary" title="View Details" onclick="viewVehicle('${plate}')">
                    <i class="bi bi-eye"></i>
                </button>
                <button class="btn btn-outline-warning" title="Edit" onclick="editVehicle('${plate}')">
                    <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-outline-danger" title="Delete" onclick="deleteVehicle('${plate}')">
                    <i class="bi bi-trash3"></i>
                </button>
            </div>
        </td>
    `;
    
    // Add animation class
    newRow.style.animation = 'fadeInUp 0.5s ease';
    tableBody.prepend(newRow);
    
    // Update count
    updateCount();
    
    // Show success message
    const successAlert = document.createElement('div');
    successAlert.className = 'alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-4';
    successAlert.style.zIndex = '9999';
    successAlert.style.minWidth = '300px';
    successAlert.innerHTML = `
        <i class="bi bi-check-circle me-2"></i>
        <strong>Success!</strong> Vehicle ${plate} added successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    document.body.appendChild(successAlert);
    
    // Auto dismiss after 3 seconds
    setTimeout(() => {
        successAlert.remove();
    }, 3000);
    
    // Reset form and close modal
    form.reset();
    form.classList.remove('was-validated');
    
    const modal = bootstrap.Modal.getInstance(document.getElementById('addVehicleModal'));
    if (modal) {
        modal.hide();
    }
    
    console.log(`✅ Vehicle ${plate} added successfully!`);
}

// ========== FILTER FUNCTION ==========
function filterTable() {
    alert('🔍 Filter dialog would open here');
}

// ========== EXPORT FUNCTION ==========
function exportTable() {
    alert('📥 Exporting table data...');
}

// ========== KEYBOARD SHORTCUTS ==========
document.addEventListener('keydown', function(e) {
    // Ctrl+Shift+A to open Add Vehicle modal
    if (e.ctrlKey && e.shiftKey && e.key === 'A') {
        e.preventDefault();
        const modal = new bootstrap.Modal(document.getElementById('addVehicleModal'));
        modal.show();
    }
});
</script>

<style>
/* Fade In Animation */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Success Alert Styling */
.alert-success {
    background: #d1e7dd;
    border: none;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.12);
    padding: 1rem 1.5rem;
}

/* Modal Header Gradient */
.modal-header.bg-primary {
    background: linear-gradient(135deg, #0d6efd, #0a58ca) !important;
    border-radius: 0.5rem 0.5rem 0 0;
}

/* Form Focus */
.form-control:focus, .form-select:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .modal-dialog {
        margin: 0.5rem;
    }
    
    .modal-body {
        padding: 1rem;
    }
}
</style>

<!-- Include Bootstrap JS if not already included -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include("./includes/footer.php"); ?>