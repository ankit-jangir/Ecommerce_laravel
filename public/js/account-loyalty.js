// Account Loyalty Points Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    // Mock loyalty points data
    const totalPoints = 1250;
    const mockPointsHistory = [
        { date: '2024-01-25', description: 'Order #ORD-2024-003', points: 75, type: 'earned' },
        { date: '2024-01-20', description: 'Order #ORD-2024-002', points: 28, type: 'earned' },
        { date: '2024-01-15', description: 'Order #ORD-2024-001', points: 50, type: 'earned' },
        { date: '2024-01-10', description: 'Redeemed for Coupon', points: -100, type: 'redeemed' },
        { date: '2024-01-05', description: 'Order #ORD-2023-099', points: 60, type: 'earned' }
    ];
    
    const totalPointsEl = document.getElementById('total-points');
    if (totalPointsEl) {
        totalPointsEl.textContent = totalPoints.toLocaleString();
    }
    
    const pointsHistoryEl = document.getElementById('points-history');
    if (pointsHistoryEl) {
        pointsHistoryEl.innerHTML = mockPointsHistory.map(history => `
            <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg">
                <div class="flex-1">
                    <p class="font-medium text-[#654321] mb-1">${history.description}</p>
                    <p class="text-sm text-gray-500">${new Date(history.date).toLocaleDateString()}</p>
                </div>
                <div class="text-right">
                    <p class="font-bold ${history.type === 'earned' ? 'text-green-600' : 'text-red-600'}">
                        ${history.type === 'earned' ? '+' : ''}${history.points}
                    </p>
                    <p class="text-xs text-gray-500">points</p>
                </div>
            </div>
        `).join('');
    }
});

// updateSidebarUser is defined in useraccount-sidebar.js

