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
    
    // Load wallet balance
    loadWalletBalance();
    
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

function loadWalletBalance() {
    const walletBalance = parseFloat(localStorage.getItem('walletBalance') || '0');
    const walletBalanceDisplay = document.getElementById('wallet-balance-display');
    if (walletBalanceDisplay) {
        walletBalanceDisplay.textContent = '₹' + walletBalance.toLocaleString();
    }
}

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
    
    // If wallet is selected, update order summary
    if (method === 'account_wallet') {
        updateOrderSummaryWithWallet();
    } else {
        // Hide wallet discount if other method selected
        const walletDiscountRow = document.getElementById('wallet-discount-row');
        const walletInfo = document.getElementById('wallet-payment-info');
        const originalTotalRow = document.getElementById('original-total-row');
        if (walletDiscountRow) walletDiscountRow.classList.add('hidden');
        if (walletInfo) walletInfo.classList.add('hidden');
        if (originalTotalRow) originalTotalRow.classList.add('hidden');
        loadOrderSummary(); // Reload without wallet discount
    }
}

function updateOrderSummaryWithWallet() {
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    const walletBalance = parseFloat(localStorage.getItem('walletBalance') || '0');
    
    if (cart.length === 0) return;
    
    let subtotal = 0;
    cart.forEach(item => {
        subtotal += item.price * item.quantity;
    });
    
    const couponDiscount = parseFloat(localStorage.getItem('couponDiscount') || '0');
    const giftCard = JSON.parse(localStorage.getItem('selectedGiftCard') || 'null');
    const giftCardDiscount = giftCard ? Math.min(giftCard.balance, subtotal) : 0;
    
    const totalBeforeWallet = subtotal - couponDiscount - giftCardDiscount;
    const walletUsed = Math.min(walletBalance, totalBeforeWallet);
    const finalTotal = Math.max(0, totalBeforeWallet - walletUsed);
    
    // Update display
    const subtotalEl = document.getElementById('subtotal');
    const totalEl = document.getElementById('total');
    const walletDiscountRow = document.getElementById('wallet-discount-row');
    const walletDiscountAmount = document.getElementById('wallet-discount-amount');
    const originalTotalRow = document.getElementById('original-total-row');
    const originalTotal = document.getElementById('original-total');
    const walletInfo = document.getElementById('wallet-payment-info');
    const walletUsedAmount = document.getElementById('wallet-used-amount');
    const walletRemainingAmount = document.getElementById('wallet-remaining-amount');
    
    if (subtotalEl) subtotalEl.textContent = 'Rs. ' + subtotal.toLocaleString();
    
    if (walletUsed > 0) {
        if (walletDiscountRow) walletDiscountRow.classList.remove('hidden');
        if (walletDiscountAmount) walletDiscountAmount.textContent = '-Rs. ' + walletUsed.toLocaleString();
        if (originalTotalRow) originalTotalRow.classList.remove('hidden');
        if (originalTotal) {
            originalTotal.textContent = 'Rs. ' + totalBeforeWallet.toLocaleString();
        }
        
        // Show wallet info
        if (walletInfo) {
            walletInfo.classList.remove('hidden');
            if (walletUsedAmount) {
                walletUsedAmount.textContent = `Using ₹${walletUsed.toLocaleString()} from wallet`;
            }
            if (walletRemainingAmount) {
                if (finalTotal > 0) {
                    walletRemainingAmount.textContent = `Remaining: ₹${finalTotal.toLocaleString()} to be paid via other method`;
                } else {
                    walletRemainingAmount.textContent = 'Full amount covered by wallet!';
                    walletRemainingAmount.classList.add('text-green-700');
                }
            }
        }
    } else {
        if (walletDiscountRow) walletDiscountRow.classList.add('hidden');
        if (originalTotalRow) originalTotalRow.classList.add('hidden');
        if (walletInfo) walletInfo.classList.add('hidden');
    }
    
    if (totalEl) totalEl.textContent = 'Rs. ' + finalTotal.toLocaleString();
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
    
    const couponDiscount = parseFloat(localStorage.getItem('couponDiscount') || '0');
    const giftCard = JSON.parse(localStorage.getItem('selectedGiftCard') || 'null');
    const giftCardDiscount = giftCard ? Math.min(giftCard.balance, subtotal) : 0;
    const finalTotal = subtotal - couponDiscount - giftCardDiscount;
    
    if (subtotalEl) subtotalEl.textContent = 'Rs. ' + subtotal.toLocaleString();
    if (totalEl) totalEl.textContent = 'Rs. ' + Math.max(0, finalTotal).toLocaleString();
    
    // Check if wallet is selected and update accordingly
    const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
    if (selectedMethod && selectedMethod.value === 'account_wallet') {
        updateOrderSummaryWithWallet();
    }
}

function placeOrder() {
    const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
    
    if (!selectedMethod) {
        if (typeof showToast === 'function') {
            showToast('Please select a payment method', 'error');
        }
        return;
    }
    
    // Show loading on button
    const placeOrderBtn = document.getElementById('place-order-btn') || document.querySelector('button[onclick*="placeOrder"]');
    const originalText = placeOrderBtn ? placeOrderBtn.innerHTML : '';
    if (placeOrderBtn) {
        placeOrderBtn.disabled = true;
        placeOrderBtn.innerHTML = '<span class="flex items-center justify-center gap-2"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Processing...</span>';
    }
    
    // Show loading toast
    if (typeof showToast === 'function') {
        showToast('Processing your order...', 'success');
    }
    
    // Simulate order processing
    setTimeout(() => {
        const paymentMethod = selectedMethod.value;
        
        // If wallet payment, deduct from wallet
        if (paymentMethod === 'account_wallet') {
            const cart = JSON.parse(localStorage.getItem('cart') || '[]');
            let subtotal = 0;
            cart.forEach(item => {
                subtotal += item.price * item.quantity;
            });
            
            const couponDiscount = parseFloat(localStorage.getItem('couponDiscount') || '0');
            const giftCard = JSON.parse(localStorage.getItem('selectedGiftCard') || 'null');
            const giftCardDiscount = giftCard ? Math.min(giftCard.balance, subtotal) : 0;
            const totalBeforeWallet = subtotal - couponDiscount - giftCardDiscount;
            
            const walletBalance = parseFloat(localStorage.getItem('walletBalance') || '0');
            const walletUsed = Math.min(walletBalance, totalBeforeWallet);
            const newWalletBalance = walletBalance - walletUsed;
            
            // Update wallet balance
            localStorage.setItem('walletBalance', newWalletBalance.toString());
            
            // Add transaction to wallet history
            let transactions = JSON.parse(localStorage.getItem('walletTransactions') || '[]');
            transactions.unshift({
                id: transactions.length > 0 ? Math.max(...transactions.map(t => t.id)) + 1 : 1,
                type: 'debit',
                amount: walletUsed,
                method: 'Wallet',
                status: 'completed',
                date: new Date().toISOString().split('T')[0],
                time: 'Just now',
                description: `Used for order payment`
            });
            localStorage.setItem('walletTransactions', JSON.stringify(transactions));
            
            showToast(`₹${walletUsed.toLocaleString()} deducted from wallet`, 'success');
        }
        
        // Clear cart
        localStorage.removeItem('cart');
        localStorage.removeItem('couponDiscount');
        localStorage.removeItem('appliedCoupon');
        localStorage.removeItem('selectedGiftCard');
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
        
        // Update wallet balance display if still on page
        loadWalletBalance();
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

// Make functions globally accessible
window.selectPaymentMethod = selectPaymentMethod;
window.updateOrderSummaryWithWallet = updateOrderSummaryWithWallet;

