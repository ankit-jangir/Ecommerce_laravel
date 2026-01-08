// Account Returns Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    // Mock returns data
    const mockReturns = [
        {
            id: 1,
            orderNumber: 'ORD-2024-001',
            productName: 'Floral Print Anarkali Kurti',
            reason: 'Size too small',
            status: 'Processing',
            requestedDate: '2024-01-20',
            returnType: 'Exchange'
        },
        {
            id: 2,
            orderNumber: 'ORD-2024-002',
            productName: 'Embroidered Straight Cut Kurti',
            reason: 'Color mismatch',
            status: 'Approved',
            requestedDate: '2024-01-18',
            returnType: 'Return'
        }
    ];
    
    const returnsList = document.getElementById('returns-list');
    if (returnsList) {
        if (mockReturns.length === 0) {
            returnsList.innerHTML = '<div class="bg-white rounded-xl shadow-lg p-12 text-center"><p class="text-gray-500">No return requests</p></div>';
        } else {
            returnsList.innerHTML = mockReturns.map(ret => {
                const statusColors = {
                    'Processing': 'bg-yellow-100 text-yellow-700',
                    'Approved': 'bg-green-100 text-green-700',
                    'Rejected': 'bg-red-100 text-red-700',
                    'Completed': 'bg-blue-100 text-blue-700'
                };
                return `
                    <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 pb-4 border-b border-gray-200">
                            <div>
                                <p class="font-semibold text-[#654321] mb-1">${ret.orderNumber}</p>
                                <p class="text-sm text-gray-500">${ret.productName}</p>
                            </div>
                            <span class="px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-medium ${statusColors[ret.status] || 'bg-gray-100 text-gray-700'} mt-2 sm:mt-0 inline-block">${ret.status}</span>
                        </div>
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Type:</span>
                                <span class="font-semibold text-[#654321]">${ret.returnType}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Reason:</span>
                                <span class="font-semibold text-[#654321]">${ret.reason}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Requested:</span>
                                <span class="font-semibold text-[#654321]">${new Date(ret.requestedDate).toLocaleDateString()}</span>
                            </div>
                        </div>
                        <a href="/account/returns/${ret.id}/track" class="block w-full px-4 py-2 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors text-sm text-center">Track Return</a>
                    </div>
                `;
            }).join('');
        }
    }
});

// updateSidebarUser is defined in useraccount-sidebar.js

