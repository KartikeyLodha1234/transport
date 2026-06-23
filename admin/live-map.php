<?php
// This should be at the VERY TOP of your file before any HTML output
include("includes/header.php");
?>

<div class="container-fluid py-4">
    <!-- Page Header -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-1">
                <i class="bi bi-map text-primary me-2"></i>Live Shipment Fleet Map
            </h2>
            <p class="text-muted mb-0">Real-time GPS telemetry tracks and route tracking management.</p>
        </div>
        <div class="btn-toolbar">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-arrow-repeat me-1"></i> Refresh
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-funnel me-1"></i> Filter
                </button>
            </div>
            <button type="button" class="btn btn-sm btn-primary">
                <i class="bi bi-plus-lg me-1"></i> Add Vehicle
            </button>
        </div>
    </div>

    <div class="row g-4">
        
        <!-- Left Panel: Vehicle List -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-header bg-white border-0 pt-3 pb-0">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="fw-semibold mb-0">
                            <i class="bi bi-truck me-2"></i>Active Vehicles
                            <span class="badge bg-primary rounded-pill ms-2">4</span>
                        </h6>
                        <span class="text-muted small">
                            <i class="bi bi-circle-fill text-success me-1" style="font-size: 0.5rem;"></i> Live
                        </span>
                    </div>
                </div>
                <div class="card-body d-flex flex-column" style="max-height: 650px;">
                    
                    <!-- Search Bar -->
                    <div class="input-group mb-3">
                        <span class="input-group-text bg-white border-end-0 text-muted">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 ps-0" 
                               placeholder="Search active trucks, routes..." id="vehicleSearch">
                        <button class="btn btn-outline-secondary border-start-0" type="button" id="clearSearch" style="display: none;">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>

                    <!-- Status Filters -->
                    <div class="d-flex gap-2 mb-3 flex-wrap">
                        <button class="btn btn-sm btn-outline-secondary active filter-btn" data-status="all">All</button>
                        <button class="btn btn-sm btn-outline-success filter-btn" data-status="ontime">
                            <i class="bi bi-check-circle me-1"></i>On Time
                        </button>
                        <button class="btn btn-sm btn-outline-warning filter-btn" data-status="delayed">
                            <i class="bi bi-clock me-1"></i>Delayed
                        </button>
                        <button class="btn btn-sm btn-outline-danger filter-btn" data-status="critical">
                            <i class="bi bi-exclamation-triangle me-1"></i>Critical
                        </button>
                    </div>

                    <!-- Vehicle List -->
                    <div class="overflow-auto pe-1 flex-grow-1" style="max-height: 450px;" id="vehicleList">
                        <div class="list-group gap-2">
                            
                            <!-- Vehicle Item 1 - Active -->
                            <div class="list-group-item list-group-item-action active border-0 rounded p-3 vehicle-item" 
                                 data-status="ontime" data-vehicle="TRK-4022">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="bi bi-truck fs-4"></i>
                                            </div>
                                            <div>
                                                <div class="fw-bold fs-5">TRK-4022</div>
                                                <div class="small text-white-50">
                                                    <i class="bi bi-geo-alt-fill me-1"></i> Mumbai → Delhi
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small opacity-75 mt-2">
                                            <i class="bi bi-person me-1"></i> Driver: Rajesh Kumar
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-light text-success fw-semibold px-3 py-2">On Time</span>
                                        <div class="small text-white-50 mt-1">ETA: 4 hrs</div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar bg-success" style="width: 65%;"></div>
                                    </div>
                                    <div class="d-flex justify-content-between small text-white-50 mt-1">
                                        <span>Mumbai</span>
                                        <span>65%</span>
                                        <span>Delhi</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Vehicle Item 2 - Delayed -->
                            <div class="list-group-item list-group-item-action border shadow-sm rounded p-3 vehicle-item" 
                                 data-status="delayed" data-vehicle="TRK-8819">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="bi bi-truck fs-4 text-warning"></i>
                                            </div>
                                            <div>
                                                <div class="fw-bold text-dark fs-5">TRK-8819</div>
                                                <div class="small text-muted">
                                                    <i class="bi bi-geo-alt me-1"></i> Jaipur → Udaipur
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small text-muted mt-2">
                                            <i class="bi bi-person me-1"></i> Driver: Amit Sharma
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-warning-subtle text-warning fw-semibold px-3 py-2">Delayed</span>
                                        <div class="small text-danger mt-1">+2 hrs delay</div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar bg-warning" style="width: 40%;"></div>
                                    </div>
                                    <div class="d-flex justify-content-between small text-muted mt-1">
                                        <span>Jaipur</span>
                                        <span>40%</span>
                                        <span>Udaipur</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Vehicle Item 3 - On Time -->
                            <div class="list-group-item list-group-item-action border shadow-sm rounded p-3 vehicle-item" 
                                 data-status="ontime" data-vehicle="TRK-1092">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="bi bi-truck fs-4 text-success"></i>
                                            </div>
                                            <div>
                                                <div class="fw-bold text-dark fs-5">TRK-1092</div>
                                                <div class="small text-muted">
                                                    <i class="bi bi-geo-alt me-1"></i> Ahmedabad → Bhilwara
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small text-muted mt-2">
                                            <i class="bi bi-person me-1"></i> Driver: Vikram Singh
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-success-subtle text-success fw-semibold px-3 py-2">On Time</span>
                                        <div class="small text-muted mt-1">ETA: 2 hrs</div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar bg-success" style="width: 75%;"></div>
                                    </div>
                                    <div class="d-flex justify-content-between small text-muted mt-1">
                                        <span>Ahmedabad</span>
                                        <span>75%</span>
                                        <span>Bhilwara</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Vehicle Item 4 - Critical -->
                            <div class="list-group-item list-group-item-action border shadow-sm rounded p-3 vehicle-item" 
                                 data-status="critical" data-vehicle="TRK-5541">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <div class="me-2">
                                                <i class="bi bi-truck fs-4 text-danger"></i>
                                            </div>
                                            <div>
                                                <div class="fw-bold text-dark fs-5">TRK-5541</div>
                                                <div class="small text-muted">
                                                    <i class="bi bi-geo-alt me-1"></i> Delhi → Chandigarh
                                                </div>
                                            </div>
                                        </div>
                                        <div class="small text-muted mt-2">
                                            <i class="bi bi-person me-1"></i> Driver: Sanjay Dutt
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <span class="badge bg-danger-subtle text-danger fw-semibold px-3 py-2">Critical</span>
                                        <div class="small text-danger mt-1">⚠️ Mechanical</div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar bg-danger" style="width: 25%;"></div>
                                    </div>
                                    <div class="d-flex justify-content-between small text-muted mt-1">
                                        <span>Delhi</span>
                                        <span>25%</span>
                                        <span>Chandigarh</span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!-- Vehicle Stats -->
                    <div class="mt-3 pt-3 border-top">
                        <div class="row text-center g-2">
                            <div class="col-4">
                                <div class="small text-muted">On Time</div>
                                <div class="fw-bold text-success">2</div>
                            </div>
                            <div class="col-4">
                                <div class="small text-muted">Delayed</div>
                                <div class="fw-bold text-warning">1</div>
                            </div>
                            <div class="col-4">
                                <div class="small text-muted">Critical</div>
                                <div class="fw-bold text-danger">1</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Right Panel: Map -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow-sm border-0 h-100 d-flex flex-column">
                
                <!-- Map Canvas -->
                <div class="card-body position-relative bg-dark d-flex align-items-center justify-content-center border-0 rounded-top" 
                     style="min-height: 450px; background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);">
                    
                    <!-- Animated Map Elements -->
                    <div class="position-relative" style="width: 100%; height: 100%;">
                        
                        <!-- Grid Lines -->
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; 
                                    background-image: 
                                        linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
                                        linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
                                    background-size: 30px 30px;">
                        </div>
                        
                        <!-- Route Path Animation -->
                        <svg style="position: absolute; top: 20%; left: 10%; width: 80%; height: 60%;">
                            <defs>
                                <linearGradient id="routeGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#0d6efd" stop-opacity="0.8"/>
                                    <stop offset="50%" stop-color="#0d6efd" stop-opacity="0.4"/>
                                    <stop offset="100%" stop-color="#0d6efd" stop-opacity="0.8"/>
                                </linearGradient>
                                <marker id="arrowhead" markerWidth="10" markerHeight="7" refX="10" refY="3.5" orient="auto">
                                    <polygon points="0 0, 10 3.5, 0 7" fill="#0d6efd"/>
                                </marker>
                            </defs>
                            <path d="M 50 80 Q 150 20, 250 60 Q 350 100, 450 50 Q 550 20, 650 70" 
                                  stroke="url(#routeGradient)" stroke-width="3" fill="none"
                                  stroke-dasharray="8 4" stroke-linecap="round"/>
                            <!-- Moving dot -->
                            <circle r="6" fill="#0d6efd">
                                <animateMotion dur="4s" repeatCount="indefinite" 
                                    path="M 50 80 Q 150 20, 250 60 Q 350 100, 450 50 Q 550 20, 650 70"/>
                            </circle>
                        </svg>
                        
                        <!-- Start Point -->
                        <div style="position: absolute; bottom: 15%; left: 8%;">
                            <div style="width: 16px; height: 16px; background: #28a745; border-radius: 50%; 
                                        box-shadow: 0 0 20px rgba(40,167,69,0.5);"></div>
                            <div class="text-white-50 small mt-1">Mumbai</div>
                        </div>
                        
                        <!-- End Point -->
                        <div style="position: absolute; top: 15%; right: 8%;">
                            <div style="width: 16px; height: 16px; background: #dc3545; border-radius: 50%; 
                                        box-shadow: 0 0 20px rgba(220,53,69,0.5);"></div>
                            <div class="text-white-50 small mt-1">Delhi</div>
                        </div>
                        
                        <!-- Vehicle Position (animated) -->
                        <div style="position: absolute; top: 40%; left: 45%;" class="vehicle-marker">
                            <div style="width: 24px; height: 24px; background: #ffc107; border-radius: 50%; 
                                        box-shadow: 0 0 30px rgba(255,193,7,0.6), 0 0 60px rgba(255,193,7,0.3);
                                        display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-truck-fill text-dark" style="font-size: 12px;"></i>
                            </div>
                            <div class="text-white small fw-semibold mt-1 text-center">TRK-4022</div>
                            <div style="position: absolute; top: 50%; left: 50%; width: 60px; height: 60px; 
                                        border: 2px solid rgba(255,193,7,0.3); border-radius: 50%; 
                                        animation: pulse-ring 2s ease-out infinite; 
                                        transform: translate(-50%, -50%);"></div>
                        </div>
                        
                        <!-- Map Status -->
                        <div style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
                            <span class="badge bg-dark border border-secondary text-white-50 py-2 px-3">
                                <i class="bi bi-circle-fill text-success me-1" style="font-size: 0.5rem;"></i>
                                Live Tracking • 4 Vehicles Active
                            </span>
                        </div>
                        
                        <!-- Center Text -->
                        <div class="text-center text-white position-absolute top-50 start-50 translate-middle" 
                             style="z-index: 2; opacity: 0.3; pointer-events: none;">
                            <i class="bi bi-map display-1"></i>
                        </div>
                    </div>
                    
                </div>

                <!-- Vehicle Details Footer -->
                <div class="card-footer bg-white border-top p-3">
                    <div class="row align-items-center g-3">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center">
                                <div class="me-3">
                                    <i class="bi bi-truck text-primary fs-2"></i>
                                </div>
                                <div>
                                    <div class="fw-bold">TRK-4022</div>
                                    <div class="small text-muted">Rajesh Kumar</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row text-center g-2">
                                <div class="col-4">
                                    <div class="small text-muted text-uppercase">Speed</div>
                                    <div class="fw-bold">68 <span class="small fw-normal">km/h</span></div>
                                </div>
                                <div class="col-4">
                                    <div class="small text-muted text-uppercase">ETA</div>
                                    <div class="fw-bold text-success">4 <span class="small fw-normal">hrs</span></div>
                                </div>
                                <div class="col-4">
                                    <div class="small text-muted text-uppercase">Load</div>
                                    <div class="fw-bold">14 <span class="small fw-normal">tons</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Animation Keyframes -->
<style>
@keyframes pulse-ring {
    0% {
        transform: translate(-50%, -50%) scale(0.8);
        opacity: 1;
    }
    100% {
        transform: translate(-50%, -50%) scale(1.5);
        opacity: 0;
    }
}

.vehicle-marker {
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-8px); }
}

.vehicle-item {
    cursor: pointer;
    transition: all 0.2s ease;
}

.vehicle-item:hover:not(.active) {
    transform: translateX(4px);
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.vehicle-item.active {
    background: linear-gradient(135deg, #0d6efd, #0a58ca) !important;
    border-color: #0d6efd !important;
}

.filter-btn {
    transition: all 0.2s ease;
}

.filter-btn.active {
    background: #0d6efd;
    color: white;
    border-color: #0d6efd;
}

/* Hide scrollbar but keep functionality */
.overflow-auto::-webkit-scrollbar {
    width: 4px;
}

.overflow-auto::-webkit-scrollbar-track {
    background: transparent;
}

.overflow-auto::-webkit-scrollbar-thumb {
    background: #dee2e6;
    border-radius: 4px;
}

.overflow-auto::-webkit-scrollbar-thumb:hover {
    background: #c1c7cd;
}
</style>

<!-- JavaScript for interactivity -->
<script src="js/script.js">
</script>
