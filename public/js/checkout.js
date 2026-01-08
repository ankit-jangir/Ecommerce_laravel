// Checkout Page Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        showToast('Please login to checkout', 'error');
        setTimeout(() => {
            window.location.href = '/login';
        }, 1500);
        return;
    }
    
    // Load cart items
    loadCartItems();
    
    // Check for pending coupon (from account page)
    const pendingCoupon = localStorage.getItem('pendingCoupon');
    if (pendingCoupon) {
        const couponInput = document.getElementById('coupon-code');
        if (couponInput) {
            couponInput.value = pendingCoupon;
            // Auto apply the coupon after a short delay
            setTimeout(() => {
                applyCoupon();
                localStorage.removeItem('pendingCoupon');
            }, 500);
        }
    }
    
    // Pre-fill form with user data
    const form = document.getElementById('checkout-form');
    if (form && currentUser) {
        const nameParts = (currentUser.name || '').split(' ');
        form.querySelector('[name="first_name"]').value = nameParts[0] || '';
        form.querySelector('[name="last_name"]').value = nameParts.slice(1).join(' ') || '';
        form.querySelector('[name="email"]').value = currentUser.email || '';
    }
    
    // Handle form submission
    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Validate form
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }
            
            const formData = new FormData(form);
            const deliveryType = document.querySelector('.delivery-type-btn.bg-[#F5F1EB]')?.id.replace('delivery-', '') || 'home';
            
            // Store checkout data
            const checkoutData = {
                deliveryType: deliveryType,
                ...Object.fromEntries(formData)
            };
            localStorage.setItem('checkoutData', JSON.stringify(checkoutData));
            
            // Redirect to payment
            window.location.href = '/payment';
        });
    }
    
    // Set default delivery type
    selectDeliveryType('home');
    
    // Set default delivery date (2 days from today)
    const deliveryDateInput = document.getElementById('delivery-date');
    if (deliveryDateInput) {
        const today = new Date();
        const twoDaysLater = new Date(today);
        twoDaysLater.setDate(today.getDate() + 2);
        const minDate = twoDaysLater.toISOString().split('T')[0];
        deliveryDateInput.min = minDate;
        deliveryDateInput.value = minDate;
    }
    
    // Show welcome coupon for new users
    const isNewUser = localStorage.getItem('isNewUser') === 'true';
    const welcomeCouponSection = document.getElementById('welcome-coupon-section');
    if (welcomeCouponSection && isNewUser) {
        welcomeCouponSection.classList.remove('hidden');
    }
});

function applyWelcomeCoupon() {
    const couponInput = document.getElementById('coupon-code');
    if (couponInput) {
        couponInput.value = 'WELCOME20';
        applyCoupon();
        // Remove new user flag after using welcome coupon
        localStorage.removeItem('isNewUser');
        const welcomeCouponSection = document.getElementById('welcome-coupon-section');
        if (welcomeCouponSection) {
            welcomeCouponSection.classList.add('hidden');
        }
    }
}

function selectDeliveryType(type) {
    document.querySelectorAll('.delivery-type-btn').forEach(btn => {
        btn.classList.remove('bg-[#F5F1EB]', 'border-[#8B4513]');
        btn.classList.add('border-gray-200');
    });
    
    const selectedBtn = document.getElementById(`delivery-${type}`);
    if (selectedBtn) {
        selectedBtn.classList.add('bg-[#F5F1EB]', 'border-[#8B4513]');
        selectedBtn.classList.remove('border-gray-200');
    }
}

function loadCartItems() {
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    const orderItems = document.getElementById('order-items');
    const subtotalEl = document.getElementById('subtotal');
    const totalEl = document.getElementById('total');
    
    if (cart.length === 0) {
        if (orderItems) orderItems.innerHTML = '<p class="text-gray-500 text-center py-4">Cart is empty</p>';
        if (subtotalEl) subtotalEl.textContent = 'Rs. 0';
        if (totalEl) totalEl.textContent = 'Rs. 0';
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
    
    const couponDiscount = parseFloat(localStorage.getItem('couponDiscount') || '0');
    const giftCard = JSON.parse(localStorage.getItem('selectedGiftCard') || 'null');
    const giftCardDiscount = giftCard ? Math.min(giftCard.balance, subtotal) : 0;
    const finalTotal = subtotal - couponDiscount - giftCardDiscount;
    
    if (subtotalEl) subtotalEl.textContent = 'Rs. ' + subtotal.toLocaleString();
    if (totalEl) totalEl.textContent = 'Rs. ' + Math.max(0, finalTotal).toLocaleString();
    
    // Show applied gift card if any
    if (giftCard) {
        const orderItems = document.getElementById('order-items');
        if (orderItems && !orderItems.querySelector('.gift-card-applied')) {
            const giftCardInfo = document.createElement('div');
            giftCardInfo.className = 'gift-card-applied p-3 bg-green-50 border border-green-200 rounded-lg mb-4';
            giftCardInfo.innerHTML = `
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-green-700">Gift Card Applied</p>
                        <p class="text-xs text-green-600">${giftCard.code} - ₹${giftCardDiscount.toLocaleString()} off</p>
                    </div>
                    <button onclick="removeGiftCard()" class="text-red-500 hover:text-red-700">
                        <i class="fi fi-rr-cross text-sm"></i>
                    </button>
                </div>
            `;
            orderItems.appendChild(giftCardInfo);
        }
    }
}

function applyCoupon() {
    const couponCode = document.getElementById('coupon-code')?.value.trim() || '';
    
    if (!couponCode) {
        showToast('Please enter a coupon code', 'error');
        return;
    }
    
    // Mock coupon validation
    const validCoupons = {
        'SAVE10': { type: 'percentage', value: 10, minPurchase: 1000 },
        'WELCOME20': { type: 'percentage', value: 20, minPurchase: 500 },
        'FLAT500': { type: 'flat', value: 500, minPurchase: 2000 }
    };
    
    if (validCoupons[couponCode]) {
        const cart = JSON.parse(localStorage.getItem('cart') || '[]');
        const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        const coupon = validCoupons[couponCode];
        
        if (subtotal < coupon.minPurchase) {
            showToast(`Minimum purchase of ₹${coupon.minPurchase.toLocaleString()} required`, 'error');
            return;
        }
        
        const discount = coupon.type === 'percentage' ? (subtotal * coupon.value / 100) : coupon.value;
        localStorage.setItem('couponDiscount', discount.toString());
        localStorage.setItem('appliedCoupon', couponCode);
        showToast(`Coupon applied! You saved ₹${discount.toLocaleString()}`, 'success');
        loadCartItems();
    } else {
        showToast('Invalid coupon code', 'error');
    }
}

function removeGiftCard() {
    localStorage.removeItem('selectedGiftCard');
    showToast('Gift card removed', 'success');
    loadCartItems();
}

function removeCoupon() {
    localStorage.removeItem('couponDiscount');
    localStorage.removeItem('appliedCoupon');
    const couponInput = document.getElementById('coupon-code');
    if (couponInput) couponInput.value = '';
    showToast('Coupon removed', 'success');
    loadCartItems();
}

