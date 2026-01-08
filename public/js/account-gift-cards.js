// Account Gift Cards Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    // Mock gift cards data
    const mockGiftCards = [
        {
            code: 'GIFT2024ABC',
            amount: 2000,
            balance: 1500,
            expiryDate: '2024-12-31',
            status: 'Active'
        },
        {
            code: 'GIFT2024XYZ',
            amount: 5000,
            balance: 5000,
            expiryDate: '2024-06-30',
            status: 'Active'
        },
        {
            code: 'GIFT2023OLD',
            amount: 1000,
            balance: 0,
            expiryDate: '2023-12-31',
            status: 'Expired'
        }
    ];
    
    const giftCardsList = document.getElementById('gift-cards-list');
    if (giftCardsList) {
        if (mockGiftCards.length === 0) {
            giftCardsList.innerHTML = '<div class="col-span-full bg-white rounded-xl shadow-lg p-12 text-center"><p class="text-gray-500">No gift cards available</p></div>';
        } else {
            giftCardsList.innerHTML = mockGiftCards.map(card => {
                const isExpired = new Date(card.expiryDate) < new Date();
                const isActive = card.status === 'Active' && !isExpired && card.balance > 0;
                const statusClass = isActive ? 'border-[#8B4513] bg-gradient-to-br from-[#8B4513] to-[#654321]' : 'border-gray-300 bg-gray-100';
                return `
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                        <div class="${statusClass} p-6 ${isActive ? 'text-white' : 'text-gray-600'}">
                            <p class="text-xs mb-2 ${isActive ? 'opacity-80' : 'opacity-60'}">Gift Card</p>
                            <p class="text-2xl font-bold mb-4">${card.code}</p>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-xs ${isActive ? 'opacity-80' : 'opacity-60'}">Balance</p>
                                    <p class="text-2xl font-bold">₹${card.balance.toLocaleString()}</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-xs ${isActive ? 'opacity-80' : 'opacity-60'}">Value</p>
                                    <p class="text-lg">₹${card.amount.toLocaleString()}</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-sm text-gray-600">Expires:</span>
                                <span class="text-sm font-semibold text-[#654321]">${new Date(card.expiryDate).toLocaleDateString()}</span>
                            </div>
                            ${isExpired || card.status === 'Expired' ? 
                                '<span class="px-2 py-1 bg-red-100 text-red-700 rounded text-xs font-medium">Expired</span>' : 
                                isActive ? 
                                '<div class="flex gap-2"><button onclick="copyGiftCardCode(\'' + card.code + '\')" class="flex-1 px-4 py-2 border border-[#8B4513] text-[#8B4513] rounded-lg hover:bg-[#F5F1EB] transition-colors text-sm font-medium">Copy Code</button><button onclick="useGiftCard(\'' + card.code + '\', ' + card.balance + ')" class="flex-1 px-4 py-2 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors text-sm font-medium">Use</button></div>' :
                                '<span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs font-medium">Inactive</span>'
                            }
                        </div>
                    </div>
                `;
            }).join('');
        }
    }
});

function copyGiftCardCode(code) {
    navigator.clipboard.writeText(code).then(() => {
        if (typeof showToast === 'function') {
            showToast('Gift card code copied!', 'success');
        } else {
            alert('Gift card code copied: ' + code);
        }
    });
}

function useGiftCard(code, balance) {
    // Store gift card for checkout
    localStorage.setItem('selectedGiftCard', JSON.stringify({ code, balance }));
    showToast(`Gift card ${code} applied! ₹${balance.toLocaleString()} will be deducted.`, 'success');
    // Redirect to checkout if on checkout page
    if (window.location.pathname.includes('/checkout')) {
        setTimeout(() => location.reload(), 1000);
    }
}

// updateSidebarUser is defined in useraccount-sidebar.js

