// ============================================
// FLEET STATUS PAGE - MAIN APPLICATION SCRIPT
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    
    console.log('🚛 Fleet Status Dashboard initialized');
    
    // ==========================================
    // 1. SIDEBAR TOGGLE (Mobile)
    // ==========================================
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    
    function toggleSidebar() {
        if (sidebar) {
            sidebar.classList.toggle('show');
            if (sidebarOverlay) {
                sidebarOverlay.classList.toggle('show');
            }
            document.body.style.overflow = sidebar.classList.contains('show') ? 'hidden' : '';
        }
    }
    
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            toggleSidebar();
        });
    }
    
    // Close sidebar on overlay click
    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', function() {
            if (sidebar && sidebar.classList.contains('show')) {
                toggleSidebar();
            }
        });
    }
    
    // Close sidebar on outside click (mobile)
    document.addEventListener('click', function(event) {
        if (window.innerWidth <= 768 && sidebar) {
            if (!sidebar.contains(event.target) && 
                sidebarToggle && !sidebarToggle.contains(event.target)) {
                sidebar.classList.remove('show');
                if (sidebarOverlay) {
                    sidebarOverlay.classList.remove('show');
                }
                document.body.style.overflow = '';
            }
        }
    });
    
    // Close sidebar on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && window.innerWidth <= 768) {
            if (sidebar && sidebar.classList.contains('show')) {
                toggleSidebar();
            }
        }
    });

    // ==========================================
    // 2. SEARCH FUNCTIONALITY (Table)
    // ==========================================
    const searchInput = document.getElementById('vehicleSearch');
    const vehicleTable = document.getElementById('vehicleTable');
    
    if (searchInput && vehicleTable) {
        searchInput.addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase().trim();
            const rows = vehicleTable.querySelectorAll('tbody tr');
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
            
            // Update visible count in footer
            const countSpan = document.querySelector('.showing-count');
            if (countSpan) {
                countSpan.textContent = visibleCount;
            }
            
            console.log(`🔍 Search: "${searchTerm}" | Found ${visibleCount} vehicles`);
        });
        
        // Clear search with Escape key
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                this.value = '';
                this.dispatchEvent(new Event('keyup'));
                this.blur();
            }
        });
    }

    // ==========================================
    // 3. STATUS BADGE COLORS (Auto-apply)
    // ==========================================
    const statusColors = {
        'In Transit': 'success',
        'Maintenance': 'warning',
        'Loading': 'info',
        'Delivered': 'success',
        'Critical': 'danger',
        'On Time': 'success',
        'Delayed': 'warning',
        'Pending': 'info'
    };
    
    // Apply status colors to all badges
    document.querySelectorAll('.status-badge, #vehicleTable .badge').forEach(badge => {
        const statusText = badge.textContent.trim();
        const color = statusColors[statusText] || 'secondary';
        // Remove existing color classes
        badge.className = badge.className.split(' ')
            .filter(cls => !cls.startsWith('bg-') && !cls.startsWith('text-'))
            .join(' ');
        // Add new color classes
        badge.classList.add(`bg-${color}`, `bg-opacity-10`, `text-${color}`, 'rounded-pill', 'px-3', 'py-2');
    });

    // ==========================================
    // 4. ACTION BUTTONS
    // ==========================================
    
    // View Vehicle
    window.viewVehicle = function(vehicleId) {
        Swal.fire({
            title: 'Vehicle Details',
            html: `
                <div class="text-start">
                    <p><strong>Vehicle ID:</strong> ${vehicleId}</p>
                    <p><strong>Owner:</strong> Kartikey Lodha</p>
                    <p><strong>Model:</strong> TRK-4022</p>
                    <p><strong>Year:</strong> 2002</p>
                    <p><strong>Plate:</strong> RJ06PA6666</p>
                    <p><strong>Status:</strong> <span class="badge bg-success">In Transit</span></p>
                </div>
            `,
            confirmButtonText: 'Close',
            confirmButtonColor: '#0d6efd'
        });
    };
    
    // Edit Vehicle
    window.editVehicle = function(vehicleId) {
        Swal.fire({
            title: 'Edit Vehicle',
            html: `
                <form id="editVehicleForm">
                    <div class="mb-3">
                        <label class="form-label">Owner Name</label>
                        <input type="text" class="form-control" value="Kartikey Lodha">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Truck Model</label>
                        <input type="text" class="form-control" value="TRK-4022">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Number Plate</label>
                        <input type="text" class="form-control text-uppercase" value="RJ06PA6666">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option selected>In Transit</option>
                            <option>Maintenance</option>
                            <option>Loading</option>
                            <option>Delivered</option>
                            <option>Critical</option>
                        </select>
                    </div>
                </form>
            `,
            confirmButtonText: 'Save Changes',
            cancelButtonText: 'Cancel',
            showCancelButton: true,
            confirmButtonColor: '#0d6efd',
            cancelButtonColor: '#6c757d',
            preConfirm: () => {
                return new Promise((resolve) => {
                    setTimeout(() => {
                        resolve(true);
                    }, 1000);
                });
            }
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    icon: 'success',
                    title: 'Vehicle Updated!',
                    text: `${vehicleId} has been updated successfully.`,
                    timer: 2000,
                    showConfirmButton: false
                });
            }
        });
    };
    
    // Delete Vehicle
    window.deleteVehicle = function(vehicleId) {
        Swal.fire({
            title: 'Delete Vehicle',
            text: `Are you sure you want to delete vehicle ${vehicleId}?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Yes, Delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Find and remove the row
                const rows = document.querySelectorAll('#vehicleTable tbody tr');
                rows.forEach(row => {
                    if (row.textContent.includes(vehicleId)) {
                        row.remove();
                    }
                });
                
                // Update sr. no
                updateSerialNumbers();
                
                Swal.fire({
                    icon: 'success',
                    title: 'Deleted!',
                    text: `${vehicleId} has been deleted.`,
                    timer: 2000,
                    showConfirmButton: false
                });
            }
        });
    };
    
    // Update serial numbers after deletion
    function updateSerialNumbers() {
        const rows = document.querySelectorAll('#vehicleTable tbody tr');
        rows.forEach((row, index) => {
            const srNo = row.querySelector('td:first-child span');
            if (srNo) {
                srNo.textContent = index + 1;
            }
        });
    }

    // ==========================================
    // 5. ADD VEHICLE - Save Function
    // ==========================================
    window.saveVehicle = function() {
        const form = document.getElementById('addVehicleForm');
        if (!form) return;
        
        if (form.checkValidity()) {
            // Get form data
            const owner = document.getElementById('ownerName')?.value || '';
            const model = document.getElementById('truckModel')?.value || '';
            const year = document.getElementById('modelYear')?.value || '';
            const plate = document.getElementById('numberPlate')?.value || '';
            const status = document.getElementById('vehicleStatus')?.value || 'In Transit';
            const notes = document.getElementById('vehicleNotes')?.value || '';
            
            // Show success message
            Swal.fire({
                icon: 'success',
                title: 'Vehicle Added!',
                html: `
                    <div class="text-start">
                        <p><strong>Owner:</strong> ${owner}</p>
                        <p><strong>Model:</strong> ${model}</p>
                        <p><strong>Year:</strong> ${year}</p>
                        <p><strong>Plate:</strong> ${plate}</p>
                        <p><strong>Status:</strong> ${status}</p>
                    </div>
                `,
                confirmButtonText: 'OK',
                confirmButtonColor: '#0d6efd'
            });
            
            // Close modal
            const modal = document.getElementById('addVehicleModal');
            if (modal) {
                const bsModal = bootstrap.Modal.getInstance(modal);
                if (bsModal) {
                    bsModal.hide();
                }
            }
            
            // Reset form
            form.reset();
            
            // Reload to show new vehicle (or dynamically add it)
            setTimeout(() => {
                // In production, you'd add the row dynamically
                // window.location.reload();
            }, 1000);
            
        } else {
            form.reportValidity();
        }
    };

    // ==========================================
    // 6. FILTER & EXPORT BUTTONS
    // ==========================================
    window.filterTable = function() {
        Swal.fire({
            title: 'Filter Vehicles',
            html: `
                <div class="text-start">
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" id="filterStatus">
                            <option value="all">All Status</option>
                            <option value="In Transit">In Transit</option>
                            <option value="Maintenance">Maintenance</option>
                            <option value="Loading">Loading</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Critical">Critical</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Model Year</label>
                        <select class="form-select">
                            <option value="all">All Years</option>
                            <option>2024</option>
                            <option>2023</option>
                            <option>2022</option>
                            <option>2021</option>
                            <option>2020</option>
                        </select>
                    </div>
                </div>
            `,
            confirmButtonText: 'Apply Filter',
            cancelButtonText: 'Clear',
            showCancelButton: true,
            confirmButtonColor: '#0d6efd',
            cancelButtonColor: '#6c757d',
            preConfirm: () => {
                const status = document.getElementById('filterStatus')?.value || 'all';
                const rows = document.querySelectorAll('#vehicleTable tbody tr');
                let visibleCount = 0;
                
                rows.forEach(row => {
                    const statusCell = row.querySelector('td:nth-child(6) .badge');
                    if (statusCell) {
                        const rowStatus = statusCell.textContent.trim();
                        if (status === 'all' || rowStatus === status) {
                            row.style.display = '';
                            visibleCount++;
                        } else {
                            row.style.display = 'none';
                        }
                    }
                });
                
                // Update count
                const countSpan = document.querySelector('.showing-count');
                if (countSpan) {
                    countSpan.textContent = visibleCount;
                }
                
                return { status, visibleCount };
            }
        }).then((result) => {
            if (result.isConfirmed && result.value) {
                console.log(`Filter applied: ${result.value.status} | Showing ${result.value.visibleCount} vehicles`);
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // Clear filter - show all
                const rows = document.querySelectorAll('#vehicleTable tbody tr');
                rows.forEach(row => row.style.display = '');
                const countSpan = document.querySelector('.showing-count');
                if (countSpan) {
                    countSpan.textContent = rows.length;
                }
            }
        });
    };
    
    window.exportTable = function() {
        Swal.fire({
            title: 'Export Data',
            text: 'Choose export format:',
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#0d6efd',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'CSV',
            cancelButtonText: 'Excel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Export as CSV
                exportAsCSV();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // Export as Excel (simulated)
                Swal.fire({
                    icon: 'success',
                    title: 'Excel Export',
                    text: 'Excel file downloaded successfully!',
                    timer: 2000,
                    showConfirmButton: false
                });
            }
        });
    };
    
    function exportAsCSV() {
        const table = document.getElementById('vehicleTable');
        if (!table) return;
        
        let csv = [];
        // Get headers
        const headers = table.querySelectorAll('thead th');
        let headerRow = [];
        headers.forEach(th => {
            headerRow.push(th.textContent.trim());
        });
        csv.push(headerRow.join(','));
        
        // Get data
        const rows = table.querySelectorAll('tbody tr');
        rows.forEach(row => {
            const rowData = [];
            const cells = row.querySelectorAll('td');
            cells.forEach((cell, index) => {
                // Skip action buttons (last column)
                if (index < cells.length - 1) {
                    let text = cell.textContent.trim();
                    // Clean up text (remove extra spaces, newlines)
                    text = text.replace(/\s+/g, ' ');
                    rowData.push(`"${text}"`);
                }
            });
            csv.push(rowData.join(','));
        });
        
        // Download
        const blob = new Blob([csv.join('\n')], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = `fleet-vehicles-${new Date().toISOString().split('T')[0]}.csv`;
        a.click();
        window.URL.revokeObjectURL(url);
        
        Swal.fire({
            icon: 'success',
            title: 'CSV Exported!',
            text: 'File downloaded successfully.',
            timer: 1500,
            showConfirmButton: false
        });
    }

    // ==========================================
    // 7. KEYBOARD SHORTCUTS
    // ==========================================
    document.addEventListener('keydown', function(e) {
        // Ctrl+F or / for search focus
        if ((e.ctrlKey && e.key === 'f') || (e.key === '/' && !e.ctrlKey && !e.metaKey)) {
            e.preventDefault();
            if (searchInput) {
                searchInput.focus();
                searchInput.select();
            }
        }
        
        // Escape to clear search
        if (e.key === 'Escape' && document.activeElement === searchInput) {
            searchInput.value = '';
            searchInput.dispatchEvent(new Event('keyup'));
            searchInput.blur();
        }
    });

    // ==========================================
    // 8. PAGINATION (Optional)
    // ==========================================
    const paginationLinks = document.querySelectorAll('.pagination .page-link');
    paginationLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            if (this.parentElement.classList.contains('disabled')) return;
            
            // Remove active from all
            document.querySelectorAll('.pagination .page-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Add active to current
            this.parentElement.classList.add('active');
            
            console.log(`📄 Page ${this.textContent} clicked`);
        });
    });

    // ==========================================
    // 9. NOTIFICATION BELL
    // ==========================================
    const notificationBtn = document.querySelector('.notification-btn');
    if (notificationBtn) {
        notificationBtn.addEventListener('click', function() {
            Swal.fire({
                title: 'Notifications',
                html: `
                    <div class="text-start">
                        <div class="border-bottom pb-2 mb-2">
                            <p class="mb-1"><strong>🚛 Vehicle TRK-4022</strong></p>
                            <p class="text-muted small mb-0">Status changed to "In Transit"</p>
                            <span class="text-muted small">2 mins ago</span>
                        </div>
                        <div class="border-bottom pb-2 mb-2">
                            <p class="mb-1"><strong>⚠️ Maintenance Alert</strong></p>
                            <p class="text-muted small mb-0">Vehicle RJ12AB1234 due for service</p>
                            <span class="text-muted small">1 hour ago</span>
                        </div>
                        <div>
                            <p class="mb-1"><strong>📦 New Shipment</strong></p>
                            <p class="text-muted small mb-0">Shipment #TRK-8910 assigned to your fleet</p>
                            <span class="text-muted small">3 hours ago</span>
                        </div>
                    </div>
                `,
                confirmButtonText: 'Mark All Read',
                confirmButtonColor: '#0d6efd',
                showCancelButton: true,
                cancelButtonText: 'Close',
                cancelButtonColor: '#6c757d'
            });
        });
    }

    // ==========================================
    // 10. ADD VEHICLE MODAL - Reset on close
    // ==========================================
    const addVehicleModal = document.getElementById('addVehicleModal');
    if (addVehicleModal) {
        addVehicleModal.addEventListener('hidden.bs.modal', function() {
            const form = document.getElementById('addVehicleForm');
            if (form) {
                form.reset();
                form.classList.remove('was-validated');
            }
        });
    }

    console.log('✅ Fleet Status Dashboard ready!');
    console.log(`📊 ${document.querySelectorAll('#vehicleTable tbody tr').length} vehicles loaded`);
    
}); // End DOMContentLoaded
