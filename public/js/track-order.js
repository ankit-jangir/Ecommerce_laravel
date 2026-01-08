// Track Order Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    // Update sidebar user info
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    // Get order ID from URL
    const pathParts = window.location.pathname.split('/');
    const orderId = parseInt(pathParts[pathParts.length - 2]);
    
    // Mock tracking data
    const trackingData = {
        1: {
            orderNumber: 'ORD-2024-001',
            trackingNumber: 'TRK123456789',
            status: 'Delivered',
            timeline: [
                { date: '2024-01-18', time: '14:30', status: 'Delivered', location: 'Mumbai, Maharashtra', description: 'Your order has been delivered successfully.' },
                { date: '2024-01-17', time: '10:15', status: 'Out for Delivery', location: 'Mumbai, Maharashtra', description: 'Your order is out for delivery.' },
                { date: '2024-01-16', time: '08:00', status: 'Shipped', location: 'Mumbai Warehouse', description: 'Your order has been shipped.' },
                { date: '2024-01-15', time: '16:45', status: 'Order Confirmed', location: 'Processing Center', description: 'Your order has been confirmed and is being processed.' }
            ]
        },
        2: {
            orderNumber: 'ORD-2024-002',
            trackingNumber: 'TRK987654321',
            status: 'Shipped',
            timeline: [
                { date: '2024-01-22', time: '09:00', status: 'Shipped', location: 'Delhi Warehouse', description: 'Your order has been shipped.' },
                { date: '2024-01-21', time: '14:30', status: 'Processing', location: 'Processing Center', description: 'Your order is being processed.' },
                { date: '2024-01-20', time: '18:20', status: 'Order Confirmed', location: 'Processing Center', description: 'Your order has been confirmed.' }
            ]
        }
    };
    
    const tracking = trackingData[orderId];
    
    if (!tracking) {
        document.getElementById('track-order-content').innerHTML = '<p class="text-gray-500 text-center py-8">Tracking information not available</p>';
        return;
    }
    
    const content = document.getElementById('track-order-content');
    if (content) {
        content.innerHTML = `
            <div class="mb-6">
                <p class="text-sm text-gray-500 mb-1">Order Number</p>
                <p class="font-semibold text-[#654321] text-lg">${tracking.orderNumber}</p>
            </div>
            <div class="mb-6">
                <p class="text-sm text-gray-500 mb-1">Tracking Number</p>
                <p class="font-semibold text-[#654321] text-lg">${tracking.trackingNumber}</p>
            </div>
            <div class="border-t border-gray-200 pt-6">
                <h3 class="font-semibold text-[#654321] mb-4">Tracking Timeline</h3>
                <div class="space-y-6">
                    ${tracking.timeline.map((step, index) => {
                        const statusColors = {
                            'Delivered': 'bg-green-500',
                            'Shipped': 'bg-blue-500',
                            'Out for Delivery': 'bg-orange-500',
                            'Processing': 'bg-yellow-500',
                            'Order Confirmed': 'bg-gray-500'
                        };
                        return `
                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-4 h-4 rounded-full ${statusColors[step.status] || 'bg-gray-400'} ${index === 0 ? 'ring-4 ring-' + (statusColors[step.status] || 'bg-gray-400').replace('bg-', '') + '/20' : ''}"></div>
                                    ${index < tracking.timeline.length - 1 ? '<div class="w-0.5 h-full bg-gray-300 mt-2"></div>' : ''}
                                </div>
                                <div class="flex-1 pb-6">
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                                        <p class="font-semibold text-[#654321]">${step.status}</p>
                                        <p class="text-sm text-gray-500">${new Date(step.date).toLocaleDateString()} at ${step.time}</p>
                                    </div>
                                    <p class="text-sm text-gray-600 mb-1">${step.location}</p>
                                    <p class="text-sm text-gray-500">${step.description}</p>
                                </div>
                            </div>
                        `;
                    }).join('')}
                </div>
            </div>
        `;
    }
});
