<?php
include("includes/header.php");
?>
<div class="container-fluid py-4">

    <div class="mb-4">
        <h2 class="fw-bold mb-1">All Cargo Shipments</h2>
        <p class="text-muted mb-0">Track, audit, and dispatch system-wide freight transactions.</p>
    </div>
    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#newShipmentModal">
        <i class="bi bi-plus-lg me-1"></i> New Shipment
    </button>
       <div class>
         <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
    </div>
        <?php
    include("includes/footer.php");
    ?>

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
</div>
 <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="js/script.js">
    </script>