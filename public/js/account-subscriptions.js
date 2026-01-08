// Account Subscriptions Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    // Mock subscriptions data
    const mockSubscriptions = [
        {
            id: 1,
            name: 'Monthly Kurti Box',
            plan: 'Monthly',
            price: 1999,
            nextDelivery: '2024-02-15',
            status: 'Active',
            items: ['Floral Print Anarkali', 'Embroidered Straight Cut']
        },
        {
            id: 2,
            name: 'Seasonal Collection',
            plan: 'Quarterly',
            price: 5499,
            nextDelivery: '2024-03-01',
            status: 'Active',
            items: ['Designer Cotton Kurta Set', 'Printed A-Line Kurti']
        }
    ];
    
    const subscriptionsList = document.getElementById('subscriptions-list');
    if (subscriptionsList) {
        if (mockSubscriptions.length === 0) {
            subscriptionsList.innerHTML = '<div class="bg-white rounded-xl shadow-lg p-12 text-center"><p class="text-gray-500">No active subscriptions</p></div>';
        } else {
            subscriptionsList.innerHTML = mockSubscriptions.map(sub => `
                <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6" data-subscription-id="${sub.id}">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-4 pb-4 border-b border-gray-200">
                        <div>
                            <h3 class="text-lg font-semibold text-[#654321] mb-1">${sub.name}</h3>
                            <p class="text-sm text-gray-500">${sub.plan} Plan</p>
                        </div>
                        <span class="status-badge px-2 sm:px-3 py-1 ${sub.status === 'Active' ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-700'} rounded-full text-xs sm:text-sm font-medium mt-2 sm:mt-0 inline-block">${sub.status}</span>
                    </div>
                    <div class="space-y-3 mb-4">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Price:</span>
                            <span class="font-semibold text-[#654321]">₹${sub.price.toLocaleString()}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Next Delivery:</span>
                            <span class="font-semibold text-[#654321]">${new Date(sub.nextDelivery).toLocaleDateString()}</span>
                        </div>
                        <div>
                            <span class="text-gray-600 block mb-2">Items:</span>
                            <ul class="list-disc list-inside text-sm text-[#654321]">
                                ${sub.items.map(item => `<li>${item}</li>`).join('')}
                            </ul>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button onclick="manageSubscription(${sub.id})" class="flex-1 px-4 py-2 border border-[#8B4513] text-[#8B4513] rounded-lg hover:bg-[#F5F1EB] transition-colors text-sm">Manage</button>
                        <button onclick="cancelSubscription(${sub.id})" class="px-4 py-2 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition-colors text-sm">Cancel</button>
                    </div>
                </div>
            `).join('');
        }
    }
});

// updateSidebarUser is defined in useraccount-sidebar.js

function manageSubscription(id) {
    showToast('Subscription management coming soon', 'info');
}

function cancelSubscription(id) {
    if (confirm('Are you sure you want to cancel this subscription?')) {
        // Update subscription status to inactive
        const subscriptionsList = document.getElementById('subscriptions-list');
        if (subscriptionsList) {
            const subscriptionCard = subscriptionsList.querySelector(`[data-subscription-id="${id}"]`);
            if (subscriptionCard) {
                const statusBadge = subscriptionCard.querySelector('.status-badge');
                if (statusBadge) {
                    statusBadge.textContent = 'Inactive';
                    statusBadge.classList.remove('bg-green-100', 'text-green-700');
                    statusBadge.classList.add('bg-gray-100', 'text-gray-700');
                }
            }
        }
        showToast('Subscription cancelled successfully', 'success');
    }
}

