<?php
include("includes/header.php");
?>
        <div class="container-fluid py-4">
            
            <div class="mb-4">
                <h2 class="fw-bold mb-1">Fleet Status Dashboard</h2>
                <p class="text-muted mb-0">Real-time asset telemetry configurations, operational health metrics, and breakdown logs.</p>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-xl-3 col-sm-6">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-primary">
                        <div class="card-body">
                            <p class="text-muted small text-uppercase fw-semibold mb-1">Total Assets Index</p>
                            <h3 class="fw-bold text-dark mb-0">124 Trucks</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-sm-6">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-success">
                        <div class="card-body">
                            <p class="text-muted small text-uppercase fw-semibold mb-1">Available (Ready)</p>
                            <h3 class="fw-bold text-success mb-0">74 Active</h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-info">
                        <div class="card-body">
                            <p class="text-muted small text-uppercase fw-semibold mb-1">In Transit (On Duty)</p>
                            <h3 class="fw-bold text-info mb-0">35 Fleet</h3>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card h-100 shadow-sm border-0 border-start border-4 border-warning">
                        <div class="card-body">
                            <p class="text-muted small text-uppercase fw-semibold mb-1">Under Maintenance</p>
                            <h3 class="fw-bold text-warning mb-0">15 Workshop</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                
                <div class="col-lg-5">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">
                            <h4 class="fw-bold text-dark mb-4">Fleet Deployment Efficiency</h4>
                            
                            <div class="d-flex align-items-center flex-wrap gap-4 mb-2">
                                <div class="d-flex flex-column align-items-center justify-content-center bg-light rounded-circle border border-2 border-primary" style="width: 110px; height: 110px;">
                                    <span class="fs-3 fw-bold text-primary">88%</span>
                                    <small class="text-muted text-center" style="font-size: 0.75rem;">Utilization</small>
                                </div>
                                
                                <div class="flex-grow-1">
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between small fw-medium mb-1">
                                            <span class="text-muted">Available Assets</span>
                                            <span>60%</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-success" style="width: 60%"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between small fw-medium mb-1">
                                            <span class="text-muted">Active Deployment</span>
                                            <span>28%</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-info" style="width: 28%"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="d-flex justify-content-between small fw-medium mb-1">
                                            <span class="text-muted">Workshop Repair</span>
                                            <span>12%</span>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-warning" style="width: 12%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">
                            <h4 class="fw-bold text-dark mb-3">Critical Fleet Alerts</h4>
                            
                            <div class="d-flex flex-column gap-3">
                                
                                <div class="border rounded p-3 border-danger bg-danger-subtle">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge bg-dark text-white font-monospace py-1.5 px-2.5">
                                            <i class="bi bi-truck me-1"></i> TRK-4022
                                        </span>
                                        <small class="text-muted font-monospace fw-semibold">ALT-9082</small>
                                    </div>
                                    <p class="text-dark fw-medium mb-3">Engine Coolant Temperature Exceeded Critical Threshold (115°C)</p>
                                    <div class="d-flex justify-content-between align-items-center border-top pt-2 mt-2">
                                        <span class="small text-secondary fw-medium">
                                            <i class="bi bi-geo-alt-fill text-danger me-1"></i> NH-48, Near Jaipur Bypass
                                        </span>
                                        <span class="badge bg-danger text-white px-2.5 py-1.5 font-bold">Critical</span>
                                    </div>
                                </div>

                                <div class="border rounded p-3 border-warning bg-warning-subtle">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge bg-dark text-white font-monospace py-1.5 px-2.5">
                                            <i class="bi bi-truck me-1"></i> TRK-1092
                                        </span>
                                        <small class="text-muted font-monospace fw-semibold">ALT-1104</small>
                                    </div>
                                    <p class="text-dark fw-medium mb-3">Sudden Brake Pad Wear Sensor Telemetry Warning Triggered</p>
                                    <div class="d-flex justify-content-between align-items-center border-top pt-2 mt-2">
                                        <span class="small text-secondary fw-medium">
                                            <i class="bi bi-geo-alt-fill text-danger me-1"></i> Bhilwara Industrial Area
                                        </span>
                                        <span class="badge bg-warning text-dark px-2.5 py-1.5 font-bold">Warning</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       
        <script src="js/script.js"></script>
