// Track Return Functions
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
    
    // Get return ID from URL
    const pathParts = window.location.pathname.split('/');
    const returnId = parseInt(pathParts[pathParts.length - 1]);
    
    // Mock return tracking data
    const returnTracking = {
        1: {
            returnNumber: 'RET-2024-001',
            orderNumber: 'ORD-2024-001',
            status: 'Processing',
            timeline: [
                { date: '2024-01-22', time: '10:00', status: 'Processing', description: 'Your return request is being processed.' },
                { date: '2024-01-20', time: '14:30', status: 'Return Requested', description: 'Return request has been submitted successfully.' }
            ]
        },
        2: {
            returnNumber: 'RET-2024-002',
            orderNumber: 'ORD-2024-002',
            status: 'Approved',
            timeline: [
                { date: '2024-01-19', time: '16:00', status: 'Approved', description: 'Your return request has been approved.' },
                { date: '2024-01-18', time: '11:20', status: 'Return Requested', description: 'Return request has been submitted successfully.' }
            ]
        }
    };
    
    const tracking = returnTracking[returnId];
    
    if (!tracking) {
        document.getElementById('track-return-content').innerHTML = '<p class="text-gray-500 text-center py-8">Return tracking information not available</p>';
        return;
    }
    
    const content = document.getElementById('track-return-content');
    if (content) {
        content.innerHTML = `
            <div class="mb-6">
                <p class="text-sm text-gray-500 mb-1">Return Number</p>
                <p class="font-semibold text-[#654321] text-lg">${tracking.returnNumber}</p>
            </div>
            <div class="mb-6">
                <p class="text-sm text-gray-500 mb-1">Order Number</p>
                <p class="font-semibold text-[#654321] text-lg">${tracking.orderNumber}</p>
            </div>
            <div class="mb-6">
                <p class="text-sm text-gray-500 mb-1">Status</p>
                <span class="px-3 py-1 rounded-full text-sm font-medium ${tracking.status === 'Approved' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700'}">${tracking.status}</span>
            </div>
            <div class="border-t border-gray-200 pt-6">
                <h3 class="font-semibold text-[#654321] mb-4">Return Timeline</h3>
                <div class="space-y-6">
                    ${tracking.timeline.map((step, index) => {
                        const statusColors = {
                            'Approved': 'bg-green-500',
                            'Processing': 'bg-yellow-500',
                            'Return Requested': 'bg-blue-500'
                        };
                        return `
                            <div class="flex gap-4">
                                <div class="flex flex-col items-center">
                                    <div class="w-4 h-4 rounded-full ${statusColors[step.status] || 'bg-gray-400'}"></div>
                                    ${index < tracking.timeline.length - 1 ? '<div class="w-0.5 h-full bg-gray-300 mt-2"></div>' : ''}
                                </div>
                                <div class="flex-1 pb-6">
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-2">
                                        <p class="font-semibold text-[#654321]">${step.status}</p>
                                        <p class="text-sm text-gray-500">${new Date(step.date).toLocaleDateString()} at ${step.time}</p>
                                    </div>
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
