// Account Referrals Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    // Mock referrals data
    const referralCode = 'REFUSER123';
    const totalReferrals = 5;
    const successfulReferrals = 3;
    const rewardsEarned = 1500;
    
    const mockReferrals = [
        { name: 'Priya Sharma', email: 'priya@example.com', date: '2024-01-20', status: 'Completed', reward: 500 },
        { name: 'Rahul Kumar', email: 'rahul@example.com', date: '2024-01-15', status: 'Completed', reward: 500 },
        { name: 'Anita Singh', email: 'anita@example.com', date: '2024-01-10', status: 'Pending', reward: 0 },
        { name: 'Vikram Patel', email: 'vikram@example.com', date: '2024-01-05', status: 'Completed', reward: 500 },
        { name: 'Sneha Reddy', email: 'sneha@example.com', date: '2024-01-01', status: 'Pending', reward: 0 }
    ];
    
    const referralCodeEl = document.getElementById('referral-code');
    if (referralCodeEl) referralCodeEl.textContent = referralCode;
    
    const totalReferralsEl = document.getElementById('total-referrals');
    const successfulReferralsEl = document.getElementById('successful-referrals');
    const rewardsEarnedEl = document.getElementById('rewards-earned');
    
    if (totalReferralsEl) totalReferralsEl.textContent = totalReferrals;
    if (successfulReferralsEl) successfulReferralsEl.textContent = successfulReferrals;
    if (rewardsEarnedEl) rewardsEarnedEl.textContent = '₹' + rewardsEarned.toLocaleString();
    
    const referralsList = document.getElementById('referrals-list');
    if (referralsList) {
        referralsList.innerHTML = mockReferrals.map(ref => {
            const statusColors = {
                'Completed': 'bg-green-100 text-green-700',
                'Pending': 'bg-yellow-100 text-yellow-700'
            };
            return `
                <div class="flex flex-col sm:flex-row sm:items-center justify-between p-4 border border-gray-200 rounded-lg">
                    <div class="flex-1 mb-3 sm:mb-0">
                        <p class="font-semibold text-[#654321] mb-1">${ref.name}</p>
                        <p class="text-sm text-gray-500">${ref.email}</p>
                        <p class="text-xs text-gray-400 mt-1">Referred on ${new Date(ref.date).toLocaleDateString()}</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="text-right">
                            <span class="px-2 py-1 rounded-full text-xs font-medium ${statusColors[ref.status] || 'bg-gray-100 text-gray-700'}">${ref.status}</span>
                            ${ref.reward > 0 ? `<p class="text-sm font-semibold text-green-600 mt-1">₹${ref.reward}</p>` : ''}
                        </div>
                    </div>
                </div>
            `;
        }).join('');
    }
});

function copyReferralCode() {
    const code = document.getElementById('referral-code')?.textContent || 'REFUSER123';
    navigator.clipboard.writeText(code).then(() => {
        if (typeof showToast === 'function') {
            showToast('Referral code copied!', 'success');
        } else {
            alert('Referral code copied: ' + code);
        }
    });
}

// updateSidebarUser is defined in useraccount-sidebar.js

