// Order Detail Page Functions
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
    const orderId = parseInt(pathParts[pathParts.length - 1]);
    
    // Mock order data
    const mockOrders = {
        1: {
            id: 1,
            orderNumber: 'ORD-2024-001',
            date: '2024-01-15',
            items: [
                { name: 'Floral Print Anarkali Kurti', quantity: 1, price: 2499, image: '/images/productimg8.webp', size: 'M' },
                { name: 'Embroidered Straight Cut Kurti', quantity: 1, price: 2799, image: '/images/productimg3.webp', size: 'L' }
            ],
            total: 5298,
            status: 'Delivered',
            trackingNumber: 'TRK123456789',
            shippingAddress: {
                name: 'User',
                address: '123, Main Street, Near City Mall',
                city: 'Mumbai',
                state: 'Maharashtra',
                pincode: '400001',
                phone: '+91 9876543210'
            },
            paymentMethod: 'Cash on Delivery',
            deliveryDate: '2024-01-18'
        },
        2: {
            id: 2,
            orderNumber: 'ORD-2024-002',
            date: '2024-01-20',
            items: [
                { name: 'Printed A-Line Kurti', quantity: 1, price: 2799, image: '/images/productimg5.webp', size: 'M' }
            ],
            total: 2799,
            status: 'Shipped',
            trackingNumber: 'TRK987654321',
            shippingAddress: {
                name: 'User',
                address: '456, Park Avenue, Block A',
                city: 'Delhi',
                state: 'Delhi',
                pincode: '110001',
                phone: '+91 9876543211'
            },
            paymentMethod: 'UPI',
            deliveryDate: '2024-01-25'
        },
        3: {
            id: 3,
            orderNumber: 'ORD-2024-003',
            date: '2024-01-25',
            items: [
                { name: 'Designer Cotton Kurta Set', quantity: 2, price: 1690, image: '/images/productimg11.webp', size: 'M' },
                { name: 'Women Tops', quantity: 1, price: 1299, image: '/images/productimg2.jpg', size: 'S' }
            ],
            total: 4679,
            status: 'Processing',
            trackingNumber: null,
            shippingAddress: {
                name: 'User',
                address: '789, Garden Street',
                city: 'Bangalore',
                state: 'Karnataka',
                pincode: '560001',
                phone: '+91 9876543212'
            },
            paymentMethod: 'Credit Card',
            deliveryDate: null
        }
    };
    
    const order = mockOrders[orderId];
    
    if (!order) {
        document.getElementById('order-detail-content').innerHTML = '<div class="bg-white rounded-xl shadow-lg p-12 text-center"><p class="text-gray-500">Order not found</p></div>';
        return;
    }
    
    const statusColors = {
        'Delivered': 'bg-green-100 text-green-700',
        'Shipped': 'bg-blue-100 text-blue-700',
        'Processing': 'bg-yellow-100 text-yellow-700',
        'Cancelled': 'bg-red-100 text-red-700'
    };
    
    const content = document.getElementById('order-detail-content');
    if (content) {
        content.innerHTML = `
            <!-- Order Summary -->
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 mb-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 pb-4 border-b border-gray-200">
                    <div>
                        <p class="font-semibold text-[#654321] text-lg mb-1">${order.orderNumber}</p>
                        <p class="text-sm text-gray-500">Placed on ${new Date(order.date).toLocaleDateString()}</p>
                    </div>
                    <span class="px-3 py-1 rounded-full text-sm font-medium ${statusColors[order.status] || 'bg-gray-100 text-gray-700'} mt-2 sm:mt-0">${order.status}</span>
                </div>
                
                <!-- Order Items with Images -->
                <div class="space-y-4 mb-6">
                    <h3 class="font-semibold text-[#654321] mb-3">Order Items</h3>
                    ${order.items.map(item => `
                        <div class="flex gap-4 p-4 border border-gray-200 rounded-lg">
                            <img src="${item.image}" alt="${item.name}" class="w-24 h-24 sm:w-32 sm:h-32 object-cover rounded-lg flex-shrink-0">
                            <div class="flex-1 min-w-0">
                                <h4 class="font-semibold text-[#654321] mb-2">${item.name}</h4>
                                <p class="text-sm text-gray-500 mb-1">Size: ${item.size}</p>
                                <p class="text-sm text-gray-500 mb-2">Quantity: ${item.quantity}</p>
                                <p class="font-bold text-[#8B4513] text-lg">₹${item.price.toLocaleString()}</p>
                            </div>
                        </div>
                    `).join('')}
                </div>
                
                <!-- Order Summary -->
                <div class="border-t border-gray-200 pt-4">
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Subtotal</span>
                        <span class="font-semibold text-[#654321]">₹${order.total.toLocaleString()}</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span class="text-gray-600">Shipping</span>
                        <span class="font-semibold text-green-600">Free</span>
                    </div>
                    <div class="flex justify-between pt-2 border-t border-gray-200">
                        <span class="text-lg font-bold text-[#654321]">Total</span>
                        <span class="text-lg font-bold text-[#8B4513]">₹${order.total.toLocaleString()}</span>
                    </div>
                </div>
            </div>
            
            <!-- Shipping Address -->
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 mb-6">
                <h3 class="font-semibold text-[#654321] mb-4">Shipping Address</h3>
                <div class="text-gray-600">
                    <p class="font-medium text-[#654321] mb-1">${order.shippingAddress.name}</p>
                    <p>${order.shippingAddress.address}</p>
                    <p>${order.shippingAddress.city}, ${order.shippingAddress.state} - ${order.shippingAddress.pincode}</p>
                    <p class="mt-2">Phone: ${order.shippingAddress.phone}</p>
                </div>
            </div>
            
            <!-- Payment & Delivery -->
            <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 mb-6">
                <h3 class="font-semibold text-[#654321] mb-4">Payment & Delivery</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-500 mb-1">Payment Method</p>
                        <p class="font-semibold text-[#654321]">${order.paymentMethod}</p>
                    </div>
                    ${order.deliveryDate ? `
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Expected Delivery</p>
                            <p class="font-semibold text-[#654321]">${new Date(order.deliveryDate).toLocaleDateString()}</p>
                        </div>
                    ` : ''}
                    ${order.trackingNumber ? `
                        <div class="sm:col-span-2">
                            <p class="text-sm text-gray-500 mb-1">Tracking Number</p>
                            <p class="font-semibold text-[#654321]">${order.trackingNumber}</p>
                            <a href="/account/orders/${order.id}/track" class="mt-2 inline-block px-4 py-2 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors text-sm">
                                Track Order
                            </a>
                        </div>
                    ` : ''}
                </div>
            </div>
        `;
    }
});
