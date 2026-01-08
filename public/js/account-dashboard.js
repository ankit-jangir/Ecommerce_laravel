// Account Dashboard Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    // Update user info
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    const welcomeText = document.getElementById('welcome-text');
    if (welcomeText) welcomeText.textContent = `Welcome back, ${currentUser.name || 'User'}! 👋`;
    
    // Mock data
    const mockOrders = [
        { id: 1, orderNumber: 'ORD-2024-001', date: '2024-01-15', items: 2, total: 4998, status: 'Delivered' },
        { id: 2, orderNumber: 'ORD-2024-002', date: '2024-01-20', items: 1, total: 2799, status: 'Shipped' },
        { id: 3, orderNumber: 'ORD-2024-003', date: '2024-01-25', items: 3, total: 7497, status: 'Processing' }
    ];
    
    const totalOrders = mockOrders.length;
    const totalSpent = mockOrders.reduce((sum, order) => sum + order.total, 0);
    const wishlistCount = JSON.parse(localStorage.getItem('wishlist') || '[]').length;
    
    // Update summary
    const totalOrdersEl = document.getElementById('total-orders');
    const totalSpentEl = document.getElementById('total-spent');
    const wishlistCountEl = document.getElementById('wishlist-count');
    
    if (totalOrdersEl) totalOrdersEl.textContent = totalOrders;
    if (totalSpentEl) totalSpentEl.textContent = '₹' + totalSpent.toLocaleString();
    if (wishlistCountEl) wishlistCountEl.textContent = wishlistCount;
    
    // Display recent orders
    const recentOrdersEl = document.getElementById('recent-orders');
    if (recentOrdersEl) {
        if (mockOrders.length === 0) {
            recentOrdersEl.innerHTML = '<p class="text-center text-gray-500 py-8">No orders yet</p>';
        } else {
            recentOrdersEl.innerHTML = mockOrders.slice(0, 5).map(order => {
                const statusColors = {
                    'Delivered': 'bg-green-100 text-green-700',
                    'Shipped': 'bg-blue-100 text-blue-700',
                    'Processing': 'bg-yellow-100 text-yellow-700',
                    'Cancelled': 'bg-red-100 text-red-700'
                };
                return `
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="flex-1 mb-3 sm:mb-0">
                            <div class="flex items-center gap-3 mb-2">
                                <p class="font-semibold text-[#654321]">${order.orderNumber}</p>
                                <span class="px-2 py-1 rounded-full text-xs font-medium ${statusColors[order.status] || 'bg-gray-100 text-gray-700'}">${order.status}</span>
                            </div>
                            <p class="text-sm text-gray-500">${order.items} item(s) • ${new Date(order.date).toLocaleDateString()}</p>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-[#8B4513] text-lg">₹${order.total.toLocaleString()}</p>
                            <a href="/account/orders/${order.id}" class="text-sm text-[#8B4513] hover:underline">View Details</a>
                        </div>
                    </div>
                `;
            }).join('');
        }
    }
});

