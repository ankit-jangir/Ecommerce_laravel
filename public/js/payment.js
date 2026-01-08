// Payment Page Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        showToast('Please login to continue', 'error');
        setTimeout(() => {
            window.location.href = '/login';
        }, 1500);
        return;
    }
    
    // Load order summary
    loadOrderSummary();
    
    // Load checkout data
    const checkoutData = JSON.parse(localStorage.getItem('checkoutData') || '{}');
    if (checkoutData.deliveryType) {
        document.getElementById('delivery-type-display').textContent = `Delivery Type: ${checkoutData.deliveryType.charAt(0).toUpperCase() + checkoutData.deliveryType.slice(1)}`;
    }
    if (checkoutData.delivery_date) {
        const date = new Date(checkoutData.delivery_date);
        document.getElementById('delivery-date-display').textContent = `Delivery Date: ${date.toLocaleDateString('en-US', { weekday: 'short', day: 'numeric', month: 'short' })}`;
    }
});

function selectPaymentMethod(method) {
    document.querySelectorAll('.payment-method-card').forEach(card => {
        card.classList.remove('border-[#8B4513]', 'bg-[#F5F1EB]');
        card.classList.add('border-gray-200');
    });
    
    const selectedCard = event.target.closest('.payment-method-card');
    if (selectedCard) {
        selectedCard.classList.add('border-[#8B4513]', 'bg-[#F5F1EB]');
        selectedCard.classList.remove('border-gray-200');
    }
}

function loadOrderSummary() {
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    const orderItems = document.getElementById('order-items');
    const subtotalEl = document.getElementById('subtotal');
    const totalEl = document.getElementById('total');
    
    if (cart.length === 0) {
        if (orderItems) orderItems.innerHTML = '<p class="text-gray-500 text-center py-4">No items</p>';
        return;
    }
    
    let subtotal = 0;
    
    if (orderItems) {
        orderItems.innerHTML = cart.map(item => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;
            return `
                <div class="flex gap-4">
                    <img src="${item.image || 'https://via.placeholder.com/80'}" alt="${item.name}" class="w-20 h-20 object-cover rounded-lg">
                    <div class="flex-1">
                        <h4 class="font-semibold text-[#654321] text-sm mb-1">${item.name}</h4>
                        <p class="text-xs text-gray-500 mb-1">Size: ${item.size}</p>
                        <p class="text-sm font-semibold text-[#654321]">Qty: ${item.quantity} x Rs. ${item.price.toLocaleString()}</p>
                    </div>
                </div>
            `;
        }).join('');
    }
    
    const discount = parseFloat(localStorage.getItem('couponDiscount') || '0');
    const finalTotal = subtotal - discount;
    
    if (subtotalEl) subtotalEl.textContent = 'Rs. ' + subtotal.toLocaleString();
    if (totalEl) totalEl.textContent = 'Rs. ' + Math.max(0, finalTotal).toLocaleString();
}

function placeOrder() {
    const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
    
    if (!selectedMethod) {
        showToast('Please select a payment method', 'error');
        return;
    }
    
    // Show loading
    showToast('Processing your order...', 'success');
    
    // Simulate order processing
    setTimeout(() => {
        // Clear cart
        localStorage.removeItem('cart');
        localStorage.removeItem('couponDiscount');
        localStorage.removeItem('appliedCoupon');
        localStorage.removeItem('checkoutData');
        
        // Show confirmation modal
        const modal = document.getElementById('order-confirm-modal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
        
        // Update cart count
        if (window.cartManager) {
            window.cartManager.updateCartUI();
        }
    }, 1500);
}

// Close modal on outside click
document.addEventListener('click', (e) => {
    const modal = document.getElementById('order-confirm-modal');
    if (modal && e.target === modal) {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
});

