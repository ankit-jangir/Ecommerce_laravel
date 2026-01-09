// Account Coupons Functions
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
    
    // Mock coupons data - All available coupons
    const mockCoupons = [
        {
            code: 'WELCOME20',
            discount: 20,
            type: 'percentage',
            minPurchase: 500,
            validUntil: '2024-12-31',
            status: 'active',
            description: 'Welcome offer for new users'
        },
        {
            code: 'SAVE10',
            discount: 10,
            type: 'percentage',
            minPurchase: 1000,
            validUntil: '2024-12-31',
            status: 'active',
            description: 'Save 10% on orders above ₹1000'
        },
        {
            code: 'FLAT500',
            discount: 500,
            type: 'flat',
            minPurchase: 2000,
            validUntil: '2024-12-31',
            status: 'active',
            description: 'Flat ₹500 off on orders above ₹2000'
        },
        {
            code: 'SUMMER30',
            discount: 30,
            type: 'percentage',
            minPurchase: 1500,
            validUntil: '2024-03-31',
            status: 'expired',
            description: 'Summer special offer'
        }
    ];
    
    // Display coupons
    const couponsList = document.getElementById('coupons-list');
    if (couponsList) {
        if (mockCoupons.length === 0) {
            couponsList.innerHTML = '<div class="col-span-full bg-white rounded-xl shadow-lg p-12 text-center"><p class="text-gray-500">No coupons available</p></div>';
        } else {
            couponsList.innerHTML = mockCoupons.map(coupon => {
                const isExpired = new Date(coupon.validUntil) < new Date();
                const statusClass = coupon.status === 'active' && !isExpired ? 'border-green-500 bg-green-50' : 'border-gray-300 bg-gray-50';
                return `
                    <div class="bg-white rounded-xl shadow-lg p-6 border-2 ${statusClass}">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <p class="text-2xl font-bold text-[#654321] mb-1">${coupon.code}</p>
                                <p class="text-sm text-gray-500">${coupon.type === 'percentage' ? coupon.discount + '% OFF' : '₹' + coupon.discount + ' OFF'}</p>
                            </div>
                            ${isExpired || coupon.status === 'expired' ? '<span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs font-medium">Expired</span>' : '<span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">Active</span>'}
                        </div>
                        <div class="space-y-2 text-sm text-gray-600 mb-4">
                            <p class="text-xs text-gray-500">${coupon.description || ''}</p>
                            <p>Min. Purchase: ₹${coupon.minPurchase.toLocaleString()}</p>
                            <p>Valid until: ${new Date(coupon.validUntil).toLocaleDateString()}</p>
                        </div>
                        <div class="flex gap-2">
                            <button id="copy-btn-${coupon.code}" onclick="copyCouponCode('${coupon.code}', this)" class="flex-1 px-4 py-2 border border-[#8B4513] text-[#8B4513] rounded-lg hover:bg-[#F5F1EB] transition-all text-sm font-medium">
                                Copy Code
                            </button>
                            ${isExpired || coupon.status === 'expired' ? '' : 
                            '<button onclick="applyCouponFromPage(\'' + coupon.code + '\')" class="flex-1 px-4 py-2 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors text-sm font-medium">Use Now</button>'
                            }
                        </div>
                    </div>
                `;
            }).join('');
        }
    }
});

function copyCouponCode(code, button) {
    navigator.clipboard.writeText(code).then(() => {
        // Change button text and style
        if (button) {
            const originalText = button.textContent;
            button.textContent = 'Copied';
            button.classList.remove('border-[#8B4513]', 'text-[#8B4513]', 'hover:bg-[#F5F1EB]');
            button.classList.add('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
            
            // Reset after 2 seconds
            setTimeout(() => {
                button.textContent = originalText;
                button.classList.remove('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
                button.classList.add('border-[#8B4513]', 'text-[#8B4513]', 'hover:bg-[#F5F1EB]');
            }, 2000);
        }
        
        if (typeof showToast === 'function') {
            showToast('Coupon code copied!', 'success');
        } else {
            alert('Coupon code copied: ' + code);
        }
    }).catch(() => {
        if (typeof showToast === 'function') {
            showToast('Failed to copy code', 'error');
        }
    });
}

function applyCouponFromPage(code) {
    // Store coupon for checkout
    localStorage.setItem('pendingCoupon', code);
    
    if (typeof showToast === 'function') {
        showToast(`Coupon ${code} will be applied at checkout`, 'success');
    }
    
    // Redirect to checkout if cart has items, otherwise redirect to shop
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    if (cart.length > 0) {
        setTimeout(() => {
            window.location.href = '/checkout';
        }, 1000);
    } else {
        if (typeof showToast === 'function') {
            showToast('Add items to cart first', 'info');
        }
        setTimeout(() => {
            window.location.href = '/shop';
        }, 1500);
    }
}

