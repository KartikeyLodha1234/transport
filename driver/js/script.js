document.addEventListener('DOMContentLoaded', function() {
    
    // Update status button
    document.querySelector('.btn-outline-primary')?.addEventListener('click', function() {
        if (this.textContent.includes('Update Status')) {
            const statusOptions = ['In Transit', 'Loading', 'Delayed', 'Delivered'];
            const currentIndex = statusOptions.indexOf(this.textContent.trim());
            const nextIndex = (currentIndex + 1) % statusOptions.length;
            this.textContent = statusOptions[nextIndex];
            
            // Update badge
            const badge = document.querySelector('.badge.bg-success');
            if (badge) {
                badge.textContent = statusOptions[nextIndex];
                if (statusOptions[nextIndex] === 'Delivered') {
                    badge.className = 'badge bg-success rounded-pill px-3 py-2';
                } else if (statusOptions[nextIndex] === 'Delayed') {
                    badge.className = 'badge bg-warning rounded-pill px-3 py-2';
                }
            }
        }
    });
    
    // Quick action buttons
    document.querySelectorAll('.btn-outline-primary.d-flex, .btn-outline-warning.d-flex, .btn-outline-info.d-flex, .btn-outline-secondary.d-flex')
        .forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const text = this.querySelector('span')?.textContent?.trim() || 'Action';
                alert(`🚛 ${text} clicked! This would open the relevant page.`);
            });
        });
    
    // Performance chart period buttons
    document.querySelectorAll('.btn-group .btn-outline-secondary').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.btn-group .btn-outline-secondary').forEach(b => 
                b.classList.remove('active')
            );
            this.classList.add('active');
            
            // Update chart data (simulated)
            const heights = {
                'Week': [60, 80, 45, 95, 70, 55, 35],
                'Month': [70, 85, 60, 90, 75, 80, 65, 70, 55, 50, 85, 75, 80, 70, 60, 90, 85, 70, 65, 80, 75, 60, 85, 70, 90, 80, 75, 65, 70, 85],
                'Year': [65, 70, 75, 80, 85, 90, 95, 88, 82, 78, 72, 68]
            };
            
            const period = this.textContent.trim();
            const chartData = heights[period] || heights['Week'];
            
            // Update bars (simplified)
            const bars = document.querySelectorAll('.col-md-8 .bg-primary.bg-opacity-25 .bg-primary');
            bars.forEach((bar, index) => {
                if (index < chartData.length) {
                    const height = chartData[index];
                    bar.style.height = height + 'px';
                }
            });
        });
    });
    
    // Trip view buttons
    document.querySelectorAll('.btn-outline-primary .bi-eye').forEach(btn => {
        btn.closest('button')?.addEventListener('click', function(e) {
            e.stopPropagation();
            const row = this.closest('tr');
            const tripId = row?.querySelector('td:first-child')?.textContent?.trim() || 'Unknown';
            alert(`📋 Viewing details for trip ${tripId}`);
        });
    });
    
    console.log('🚛 Driver Dashboard loaded successfully!');
});