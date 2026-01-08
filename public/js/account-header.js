// Account Header Functions
document.addEventListener('DOMContentLoaded', function() {
    // Account Menu Toggle
    const accountMenuToggle = document.getElementById('account-menu-toggle');
    const accountMenuSidebar = document.getElementById('account-menu-sidebar');
    const accountMenuClose = document.getElementById('account-menu-close');
    const accountMenuOverlay = document.getElementById('account-menu-overlay');
    
    function openAccountMenu() {
        if (accountMenuSidebar && accountMenuOverlay) {
            accountMenuSidebar.classList.remove('translate-x-full');
            accountMenuOverlay.classList.remove('hidden');
            accountMenuOverlay.style.display = 'block';
            document.body.style.overflow = 'hidden';
            updateAccountMenuUser();
        }
    }
    
    function closeAccountMenu() {
        if (accountMenuSidebar && accountMenuOverlay) {
            accountMenuSidebar.classList.add('translate-x-full');
            accountMenuOverlay.classList.add('hidden');
            accountMenuOverlay.style.display = 'none';
            document.body.style.overflow = '';
        }
    }
    
    if (accountMenuToggle) {
        accountMenuToggle.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            openAccountMenu();
        });
    }
    
    if (accountMenuClose) {
        accountMenuClose.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            closeAccountMenu();
        });
    }
    
    if (accountMenuOverlay) {
        accountMenuOverlay.addEventListener('click', (e) => {
            if (e.target === accountMenuOverlay) {
                closeAccountMenu();
            }
        });
    }
    
    // Close on ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && accountMenuSidebar && !accountMenuSidebar.classList.contains('translate-x-full')) {
            closeAccountMenu();
        }
    });
    
    // Notification Toggle
    const notificationToggle = document.getElementById('account-notification-toggle');
    const notificationModal = document.getElementById('account-notification-modal');
    const notificationClose = document.getElementById('account-notification-close');
    
    if (notificationToggle) {
        notificationToggle.addEventListener('click', () => {
            notificationModal.classList.remove('hidden');
            notificationModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
            loadNotifications();
        });
    }
    
    if (notificationClose) {
        notificationClose.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            notificationModal.classList.add('hidden');
            notificationModal.classList.remove('flex');
            document.body.style.overflow = '';
        });
    }
    
    if (notificationModal) {
        notificationModal.addEventListener('click', (e) => {
            if (e.target === notificationModal) {
                notificationModal.classList.add('hidden');
                notificationModal.classList.remove('flex');
                document.body.style.overflow = '';
            }
        });
    }
    
    // Load notifications on page load
    loadNotifications();
    updateAccountMenuUser();
});

function updateAccountMenuUser() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    const userName = document.getElementById('account-menu-user-name');
    const userEmail = document.getElementById('account-menu-user-email');
    const userIcon = document.getElementById('account-menu-user-icon');
    const userImage = document.getElementById('account-menu-user-image');
    
    if (!currentUser) return;
    
    if (userName) userName.textContent = currentUser.name || 'User';
    if (userEmail) userEmail.textContent = currentUser.email || 'user@gmail.com';
    
    if (currentUser.avatar) {
        if (userIcon) userIcon.classList.add('hidden');
        if (userImage) {
            userImage.src = currentUser.avatar;
            userImage.classList.remove('hidden');
        }
    } else if (currentUser.name) {
        const firstLetter = currentUser.name.charAt(0).toUpperCase();
        if (userIcon) {
            userIcon.textContent = firstLetter;
            userIcon.classList.remove('hidden');
        }
        if (userImage) userImage.classList.add('hidden');
    }
}

function loadNotifications() {
    // Mock notifications
    const mockNotifications = [
        {
            id: 1,
            title: 'Order Shipped',
            message: 'Your order ORD-2024-001 has been shipped',
            time: '2 hours ago',
            read: false
        },
        {
            id: 2,
            title: 'New Coupon Available',
            message: 'Get 20% off on your next purchase with code WELCOME20',
            time: '1 day ago',
            read: false
        },
        {
            id: 3,
            title: 'Order Delivered',
            message: 'Your order ORD-2024-002 has been delivered',
            time: '3 days ago',
            read: true
        }
    ];
    
    const notificationList = document.getElementById('notification-list');
    const notificationBadge = document.getElementById('notification-badge');
    
    if (notificationList) {
        if (mockNotifications.length === 0) {
            notificationList.innerHTML = '<p class="text-gray-500 text-center py-8">No notifications</p>';
        } else {
            notificationList.innerHTML = mockNotifications.map(notif => `
                <div class="p-4 rounded-lg ${notif.read ? 'bg-gray-50' : 'bg-blue-50'} border border-gray-200">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="font-semibold text-[#654321]">${notif.title}</h4>
                        ${!notif.read ? '<span class="w-2 h-2 bg-blue-500 rounded-full"></span>' : ''}
                    </div>
                    <p class="text-sm text-gray-600 mb-2">${notif.message}</p>
                    <p class="text-xs text-gray-500">${notif.time}</p>
                </div>
            `).join('');
        }
    }
    
    // Update badge
    const unreadCount = mockNotifications.filter(n => !n.read).length;
    if (notificationBadge) {
        if (unreadCount > 0) {
            notificationBadge.textContent = unreadCount > 9 ? '9+' : unreadCount;
            notificationBadge.classList.remove('hidden');
        } else {
            notificationBadge.classList.add('hidden');
        }
    }
}
