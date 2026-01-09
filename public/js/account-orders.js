// Account Orders Functions
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
    
    // Mock orders data with proper images
    const mockOrders = [
        {
            id: 1,
            orderNumber: 'ORD-2024-001',
            date: '2024-01-15',
            items: [
                { name: 'Floral Print Anarkali Kurti', quantity: 1, price: 2499, image: '/images/productimg8.webp' },
                { name: 'Embroidered Straight Cut Kurti', quantity: 1, price: 2799, image: '/images/productimg3.webp' }
            ],
            total: 5298,
            status: 'Delivered',
            trackingNumber: 'TRK123456789'
        },
        {
            id: 2,
            orderNumber: 'ORD-2024-002',
            date: '2024-01-20',
            items: [
                { name: 'Printed A-Line Kurti', quantity: 1, price: 2799, image: '/images/productimg5.webp' }
            ],
            total: 2799,
            status: 'Shipped',
            trackingNumber: 'TRK987654321'
        },
        {
            id: 3,
            orderNumber: 'ORD-2024-003',
            date: '2024-01-25',
            items: [
                { name: 'Designer Cotton Kurta Set', quantity: 2, price: 1690, image: '/images/productimg11.webp' },
                { name: 'Women Tops', quantity: 1, price: 1299, image: '/images/productimg2.jpg' }
            ],
            total: 4679,
            status: 'Processing',
            trackingNumber: null
        }
    ];
    
    // Display orders
    const ordersList = document.getElementById('orders-list');
    if (ordersList) {
        if (mockOrders.length === 0) {
            ordersList.innerHTML = '<div class="bg-white rounded-xl shadow-lg p-12 text-center"><p class="text-gray-500">No orders yet</p></div>';
        } else {
            ordersList.innerHTML = mockOrders.map(order => {
                const statusColors = {
                    'Delivered': 'bg-green-100 text-green-700',
                    'Shipped': 'bg-blue-100 text-blue-700',
                    'Processing': 'bg-yellow-100 text-yellow-700',
                    'Cancelled': 'bg-red-100 text-red-700'
                };
                return `
                    <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 pb-4 border-b border-gray-200">
                            <div>
                                <p class="font-semibold text-[#654321] mb-1">${order.orderNumber}</p>
                                <p class="text-sm text-gray-500">Placed on ${new Date(order.date).toLocaleDateString()}</p>
                            </div>
                            <span class="px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-xs font-medium ${statusColors[order.status] || 'bg-gray-100 text-gray-700'} mt-2 sm:mt-0 inline-block whitespace-nowrap">${order.status}</span>
                        </div>
                        <div class="space-y-3 mb-4">
                            ${order.items.map(item => `
                                <div class="flex gap-4">
                                    <img src="${item.image}" alt="${item.name}" class="w-16 h-16 sm:w-20 sm:h-20 object-cover rounded-lg flex-shrink-0">
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-[#654321] mb-1">${item.name}</p>
                                        <p class="text-sm text-gray-500">Quantity: ${item.quantity}</p>
                                        <p class="font-semibold text-[#8B4513] mt-1">₹${item.price.toLocaleString()}</p>
                                    </div>
                                </div>
                            `).join('')}
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between pt-4 border-t border-gray-200">
                            <div class="mb-3 sm:mb-0">
                                <p class="text-sm text-gray-500">Total Amount</p>
                                <p class="text-xl font-bold text-[#8B4513]">₹${order.total.toLocaleString()}</p>
                            </div>
                            <div class="flex gap-2">
                                ${order.trackingNumber ? `<a href="/account/orders/${order.id}/track" class="px-4 py-2 border border-[#8B4513] text-[#8B4513] rounded-lg hover:bg-[#F5F1EB] transition-colors text-sm">Track Order</a>` : ''}
                                <a href="/account/orders/${order.id}" class="px-4 py-2 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors text-sm">View Details</a>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
        }
    }
});

