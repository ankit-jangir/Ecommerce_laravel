// Checkout Page Functions
function showToast(message, type = 'info') {
    alert(message);
}

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
    
    // Function to handle checkout submission
    function handleCheckoutSubmit() {
        const form = document.getElementById('checkout-form');
        if (!form) {
            console.error('Checkout form not found');
            if (typeof showToast === 'function') {
                showToast('Form not found. Please refresh the page.', 'error');
            }
            return false;
        }
        
        // Check if delivery type is selected
        // Use querySelectorAll and check for the class manually since brackets in class names need escaping
        const deliveryTypeButtons = document.querySelectorAll('.delivery-type-btn');
        let selectedDeliveryType = null;
        deliveryTypeButtons.forEach(btn => {
            if (btn.classList.contains('bg-[#F5F1EB]')) {
                selectedDeliveryType = btn;
            }
        });
        
        if (!selectedDeliveryType) {
            if (typeof showToast === 'function') {
                showToast('Please select a delivery type', 'error');
            } else {
                alert('Please select a delivery type');
            }
            return false;
        }
        
        // Validate form fields
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;
        let firstInvalidField = null;
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                isValid = false;
                if (!firstInvalidField) firstInvalidField = field;
                field.classList.add('border-red-500');
            } else {
                field.classList.remove('border-red-500');
            }
        });
        
        // Validate phone number
        const phoneField = form.querySelector('[name="phone"]');
        if (phoneField && phoneField.value) {
            const phonePattern = /^[0-9]{10}$/;
            if (!phonePattern.test(phoneField.value)) {
                isValid = false;
                if (!firstInvalidField) firstInvalidField = phoneField;
                phoneField.classList.add('border-red-500');
                if (typeof showToast === 'function') {
                    showToast('Please enter a valid 10-digit phone number', 'error');
                }
            }
        }
        
        // Validate pincode
        const pincodeField = form.querySelector('[name="pincode"]');
        if (pincodeField && pincodeField.value) {
            const pincodePattern = /^[0-9]{6}$/;
            if (!pincodePattern.test(pincodeField.value)) {
                isValid = false;
                if (!firstInvalidField) firstInvalidField = pincodeField;
                pincodeField.classList.add('border-red-500');
                if (typeof showToast === 'function') {
                    showToast('Please enter a valid 6-digit pincode', 'error');
                }
            }
        }
        
        // Validate email
        const emailField = form.querySelector('[name="email"]');
        if (emailField && emailField.value) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(emailField.value)) {
                isValid = false;
                if (!firstInvalidField) firstInvalidField = emailField;
                emailField.classList.add('border-red-500');
                if (typeof showToast === 'function') {
                    showToast('Please enter a valid email address', 'error');
                }
            }
        }
        
        if (!isValid) {
            if (firstInvalidField) {
                firstInvalidField.scrollIntoView({ behavior: 'smooth', block: 'center' });
                firstInvalidField.focus();
            }
            if (typeof showToast === 'function') {
                showToast('Please fill all required fields correctly', 'error');
            }
            return false;
        }
        
        // Native form validation
        if (!form.checkValidity()) {
            form.reportValidity();
            return false;
        }
        
        const formData = new FormData(form);
        const deliveryType = selectedDeliveryType ? selectedDeliveryType.id.replace('delivery-', '') : 'home';
        
        // Store checkout data
        const checkoutData = {
            deliveryType: deliveryType,
            ...Object.fromEntries(formData)
        };
        localStorage.setItem('checkoutData', JSON.stringify(checkoutData));
        
        // Show loading state
        const submitBtn = document.getElementById('continue-payment-btn') || form.querySelector('button[type="submit"]');
        const continueText = document.getElementById('continue-payment-text');
        if (submitBtn) {
            submitBtn.disabled = true;
            if (continueText) {
                continueText.innerHTML = '<span class="flex items-center justify-center gap-2"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Processing...</span>';
            } else {
                submitBtn.innerHTML = '<span class="flex items-center justify-center gap-2"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Processing...</span>';
            }
        }
        
        // Redirect to payment - use multiple methods to ensure it works
        setTimeout(function() {
            console.log('Redirecting to payment page...');
            if (window.location.pathname !== '/payment') {
                window.location.href = '/payment';
            }
        }, 500);
        
        return false;
    }
    
    // Make function globally accessible first
    window.handleCheckoutSubmit = handleCheckoutSubmit;
    
        // Handle form submission
        if (form) {
            // Handle submit button click
            const submitBtn = document.getElementById('continue-payment-btn') || form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Continue payment button clicked');
                    handleCheckoutSubmit();
                }, false);
            }
            
            // Also handle form submit event
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                e.stopPropagation();
                console.log('Form submitted');
                handleCheckoutSubmit();
            }, false);
        }
    
    // Set default delivery type and load address (without toast)
    selectDeliveryType('home');
    loadAddressForDeliveryType('home', false);
    
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
    
    // Load address for selected type (with toast when user manually selects)
    loadAddressForDeliveryType(type, true);
}

function loadAddressForDeliveryType(type, showToastMessage = false) {
    const addresses = JSON.parse(localStorage.getItem('addresses') || '[]');
    const address = addresses.find(addr => addr.type === type);
    const form = document.getElementById('checkout-form');
    
    if (!form) return;
    
    if (address) {
        // Auto-fill form with address
        const nameParts = (address.name || '').split(' ');
        form.querySelector('[name="first_name"]').value = nameParts[0] || '';
        form.querySelector('[name="last_name"]').value = nameParts.slice(1).join(' ') || '';
        form.querySelector('[name="phone"]').value = address.phone || '';
        form.querySelector('[name="address"]').value = address.address1 + (address.address2 ? ', ' + address.address2 : '');
        form.querySelector('[name="city"]').value = address.city || '';
        form.querySelector('[name="state"]').value = address.state || '';
        form.querySelector('[name="pincode"]').value = address.pincode || '';
        
        // Only show toast if explicitly requested (when user manually selects)
        if (showToastMessage && typeof showToast === 'function') {
            showToast(`${type.charAt(0).toUpperCase() + type.slice(1)} address loaded`, 'success');
        }
    } else {
        // Clear form if no address found
        if (type === 'office' || type === 'other') {
            // Only clear if office/other and no address exists
            form.querySelector('[name="phone"]').value = '';
            form.querySelector('[name="address"]').value = '';
            form.querySelector('[name="city"]').value = '';
            form.querySelector('[name="state"]').value = '';
            form.querySelector('[name="pincode"]').value = '';
        }
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
    const appliedCoupon = localStorage.getItem('appliedCoupon');
    const giftCard = JSON.parse(localStorage.getItem('selectedGiftCard') || 'null');
    const giftCardDiscount = giftCard ? Math.min(giftCard.balance, subtotal) : 0;
    const finalTotal = subtotal - couponDiscount - giftCardDiscount;
    
    if (subtotalEl) subtotalEl.textContent = 'Rs. ' + subtotal.toLocaleString();
    if (totalEl) totalEl.textContent = 'Rs. ' + Math.max(0, finalTotal).toLocaleString();
    
    // Show coupon discount
    const couponDiscountRow = document.getElementById('coupon-discount-row');
    const couponDiscountAmount = document.getElementById('coupon-discount-amount');
    const couponSavedText = document.getElementById('coupon-saved-text');
    const originalTotalText = document.getElementById('original-total-text');
    
    if (couponDiscount > 0 && appliedCoupon) {
        if (couponDiscountRow) couponDiscountRow.classList.remove('hidden');
        if (couponDiscountAmount) couponDiscountAmount.textContent = '-Rs. ' + couponDiscount.toLocaleString();
        if (couponSavedText) couponSavedText.textContent = 'You saved Rs. ' + couponDiscount.toLocaleString();
        if (originalTotalText) {
            originalTotalText.textContent = 'Rs. ' + subtotal.toLocaleString();
            originalTotalText.classList.remove('hidden');
        }
    } else {
        if (couponDiscountRow) couponDiscountRow.classList.add('hidden');
        if (originalTotalText) originalTotalText.classList.add('hidden');
    }
    
    // Show gift card discount
    const giftCardDiscountRow = document.getElementById('gift-card-discount-row');
    const giftCardDiscountAmount = document.getElementById('gift-card-discount-amount');
    
    if (giftCardDiscount > 0) {
        if (giftCardDiscountRow) giftCardDiscountRow.classList.remove('hidden');
        if (giftCardDiscountAmount) giftCardDiscountAmount.textContent = '-Rs. ' + giftCardDiscount.toLocaleString();
    } else {
        if (giftCardDiscountRow) giftCardDiscountRow.classList.add('hidden');
    }
    
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

