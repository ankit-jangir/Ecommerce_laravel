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
        notificationToggle.addEventListener('click', (e) => {
            e.preventDefault();
            if (notificationModal) {
                notificationModal.classList.remove('hidden');
                notificationModal.classList.add('flex');
                document.body.style.overflow = 'hidden';
                loadNotifications();
            }
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
    // Get notifications from localStorage or use mock data
    let mockNotifications = JSON.parse(localStorage.getItem('notifications') || '[]');
    
    // If no notifications in localStorage, use mock data
    if (mockNotifications.length === 0) {
        mockNotifications = [
            {
                id: 1,
                title: 'Order Shipped',
                message: 'Your order ORD-2024-001 has been shipped',
                details: 'Your order ORD-2024-001 containing 2 items (Floral Print Anarkali Kurti and Embroidered Straight Cut Kurti) has been shipped via Express Delivery. You can track your order using the tracking number TRK123456789. Expected delivery: January 20, 2024. The package will be delivered to your registered address.',
                time: '2 hours ago',
                date: '2024-01-15',
                read: false,
                type: 'order',
                orderId: 'ORD-2024-001',
                trackingNumber: 'TRK123456789',
                items: ['Floral Print Anarkali Kurti', 'Embroidered Straight Cut Kurti'],
                expectedDelivery: '2024-01-20'
            },
            {
                id: 2,
                title: 'New Coupon Available',
                message: 'Get 20% off on your next purchase with code WELCOME20',
                details: 'Welcome to AURA KURTIS! Use coupon code WELCOME20 to get 20% off on orders above ₹500. This coupon is valid until December 31, 2024. Don\'t miss out on this exclusive offer! Apply this coupon at checkout to enjoy amazing savings on your favorite kurtis.',
                time: '1 day ago',
                date: '2024-01-14',
                read: false,
                type: 'coupon',
                couponCode: 'WELCOME20',
                discount: 20,
                minPurchase: 500,
                validUntil: '2024-12-31'
            },
            {
                id: 3,
                title: 'Order Delivered',
                message: 'Your order ORD-2024-002 has been delivered',
                details: 'Your order ORD-2024-002 has been successfully delivered to your address. We hope you love your purchase! Please rate your experience and help us serve you better. If you have any concerns about your order, please contact our customer support.',
                time: '3 days ago',
                date: '2024-01-12',
                read: true,
                type: 'order',
                orderId: 'ORD-2024-002',
                deliveryDate: '2024-01-12'
            },
            {
                id: 4,
                title: 'Payment Received',
                message: 'Payment of ₹5,298 received for order ORD-2024-001',
                details: 'We have successfully received your payment of ₹5,298 for order ORD-2024-001. Your order is being processed and will be shipped soon. You will receive a confirmation email with tracking details once your order is dispatched. Thank you for your purchase!',
                time: '5 days ago',
                date: '2024-01-10',
                read: true,
                type: 'payment',
                amount: 5298,
                orderId: 'ORD-2024-001',
                paymentMethod: 'Credit Card'
            },
            {
                id: 5,
                title: 'New Product Arrival',
                message: 'Check out our new winter collection!',
                details: 'We have just added new winter kurtis to our collection. Explore the latest designs and styles featuring warm colors, elegant patterns, and comfortable fabrics perfect for the winter season. Limited stock available! Shop now before they\'re gone.',
                time: '1 week ago',
                date: '2024-01-08',
                read: true,
                type: 'product',
                collection: 'Winter Collection'
            }
        ];
        localStorage.setItem('notifications', JSON.stringify(mockNotifications));
    }
    
    const notificationList = document.getElementById('notification-list');
    const notificationBadge = document.getElementById('notification-badge');
    
    // Store notifications in localStorage for details view
    localStorage.setItem('notifications', JSON.stringify(mockNotifications));
    
    if (notificationList) {
        // Show only first 3-4 notifications in modal
        const displayNotifications = mockNotifications.slice(0, 4);
        
        if (displayNotifications.length === 0) {
            notificationList.innerHTML = '<p class="text-gray-500 text-center py-8">No notifications</p>';
        } else {
            notificationList.innerHTML = displayNotifications.map(notif => `
                <div onclick="openNotificationFromModal(${notif.id})" class="p-4 rounded-lg ${notif.read ? 'bg-gray-50' : 'bg-blue-50'} border border-gray-200 cursor-pointer hover:shadow-md transition-all">
                    <div class="flex items-start justify-between mb-2">
                        <h4 class="font-semibold text-[#654321] text-sm sm:text-base">${notif.title}</h4>
                        ${!notif.read ? '<span class="w-2 h-2 bg-blue-500 rounded-full flex-shrink-0 mt-1"></span>' : ''}
                    </div>
                    <p class="text-sm text-gray-600 mb-2 line-clamp-2">${notif.message}</p>
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
    
    // Update sidebar badges
    const sidebarBadge = document.getElementById('sidebar-notification-badge');
    const mobileBadge = document.getElementById('mobile-notification-badge');
    
    if (sidebarBadge) {
        if (unreadCount > 0) {
            sidebarBadge.textContent = unreadCount > 9 ? '9+' : unreadCount;
            sidebarBadge.classList.remove('hidden');
        } else {
            sidebarBadge.classList.add('hidden');
        }
    }
    
    if (mobileBadge) {
        if (unreadCount > 0) {
            mobileBadge.textContent = unreadCount > 9 ? '9+' : unreadCount;
            mobileBadge.classList.remove('hidden');
        } else {
            mobileBadge.classList.add('hidden');
        }
    }
}

function viewNotificationDetails(notificationId) {
    const notifications = JSON.parse(localStorage.getItem('notifications') || '[]');
    const notification = notifications.find(n => n.id === notificationId);
    
    if (!notification) return;
    
    // Check if we're on notifications page - use sidebar
    if (window.location.pathname === '/account/notifications') {
        // Use sidebar slide from right
        const detailsSidebar = document.getElementById('notification-details-sidebar');
        const detailsOverlay = document.getElementById('notification-details-overlay');
        const detailsTitle = document.getElementById('notification-details-title');
        const detailsContent = document.getElementById('notification-details-content');
        
        if (detailsSidebar && detailsTitle && detailsContent) {
            detailsTitle.textContent = notification.title;
            detailsContent.innerHTML = `
                <div class="space-y-4">
                    <div class="p-4 rounded-lg ${notification.read ? 'bg-gray-50' : 'bg-blue-50'} border border-gray-200">
                        <p class="text-sm sm:text-base text-gray-700 leading-relaxed">${notification.details}</p>
                    </div>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2 text-sm text-gray-500 pt-2 border-t border-gray-200">
                        <span class="flex items-center gap-2"><i class="fi fi-rr-clock"></i>${notification.time}</span>
                        <span class="flex items-center gap-2"><i class="fi fi-rr-calendar"></i>${notification.date}</span>
                    </div>
                    ${notification.type === 'order' ? `
                        <div class="pt-4">
                            <a href="/account/orders" class="block w-full px-4 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold text-center">
                                View Order
                            </a>
                        </div>
                    ` : ''}
                    ${notification.type === 'coupon' ? `
                        <div class="pt-4">
                            <a href="/account/coupons" class="block w-full px-4 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold text-center">
                                View Coupons
                            </a>
                        </div>
                    ` : ''}
                </div>
            `;
            
            if (detailsOverlay) {
                detailsOverlay.classList.remove('hidden');
            }
            detailsSidebar.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
            
            // Mark as read
            if (!notification.read) {
                notification.read = true;
                localStorage.setItem('notifications', JSON.stringify(notifications));
                loadNotifications();
            }
        }
    } else {
        // Use modal for other pages
        const detailsModal = document.getElementById('notification-details-modal');
        const detailsTitle = document.getElementById('notification-details-title');
        const detailsContent = document.getElementById('notification-details-content');
        
        if (detailsModal && detailsTitle && detailsContent) {
            detailsTitle.textContent = notification.title;
            detailsContent.innerHTML = `
                <div class="space-y-4">
                    <div class="p-4 rounded-lg ${notification.read ? 'bg-gray-50' : 'bg-blue-50'} border border-gray-200">
                        <p class="text-sm sm:text-base text-gray-700 leading-relaxed">${notification.details}</p>
                    </div>
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2 text-sm text-gray-500 pt-2 border-t border-gray-200">
                        <span class="flex items-center gap-2"><i class="fi fi-rr-clock"></i>${notification.time}</span>
                        <span class="flex items-center gap-2"><i class="fi fi-rr-calendar"></i>${notification.date}</span>
                    </div>
                    ${notification.type === 'order' ? `
                        <div class="pt-4">
                            <a href="/account/orders" class="block w-full px-4 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold text-center">
                                View Order
                            </a>
                        </div>
                    ` : ''}
                    ${notification.type === 'coupon' ? `
                        <div class="pt-4">
                            <a href="/account/coupons" class="block w-full px-4 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold text-center">
                                View Coupons
                            </a>
                        </div>
                    ` : ''}
                </div>
            `;
            
            detailsModal.classList.remove('hidden');
            detailsModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
            
            // Mark as read
            if (!notification.read) {
                notification.read = true;
                localStorage.setItem('notifications', JSON.stringify(notifications));
                loadNotifications();
            }
        }
    }
}

function closeNotificationDetails() {
    // Check if we're on notifications page - use sidebar
    if (window.location.pathname === '/account/notifications') {
        const detailsSidebar = document.getElementById('notification-details-sidebar');
        const detailsOverlay = document.getElementById('notification-details-overlay');
        
        if (detailsSidebar) {
            detailsSidebar.classList.add('translate-x-full');
        }
        if (detailsOverlay) {
            detailsOverlay.classList.add('hidden');
        }
        document.body.style.overflow = '';
    } else {
        const detailsModal = document.getElementById('notification-details-modal');
        if (detailsModal) {
            detailsModal.classList.add('hidden');
            detailsModal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    }
}

function viewAllNotifications() {
    // Close notification modal
    const notificationModal = document.getElementById('account-notification-modal');
    if (notificationModal) {
        notificationModal.classList.add('hidden');
        notificationModal.classList.remove('flex');
        document.body.style.overflow = '';
    }
    
    // Redirect to notifications page
    window.location.href = '/account/notifications';
}

function openNotificationFromModal(notificationId) {
    console.log('openNotificationFromModal called with ID:', notificationId);
    // Store notification ID to open on notification page
    localStorage.setItem('openNotificationId', notificationId.toString());
    console.log('Stored openNotificationId in localStorage:', notificationId);
    
    // Close notification modal
    const notificationModal = document.getElementById('account-notification-modal');
    if (notificationModal) {
        notificationModal.classList.add('hidden');
        notificationModal.classList.remove('flex');
        document.body.style.overflow = '';
    }
    
    // Redirect to notifications page
    console.log('Redirecting to /account/notifications');
    window.location.href = '/account/notifications';
}

// Make functions globally accessible
window.viewNotificationDetails = viewNotificationDetails;
window.closeNotificationDetails = closeNotificationDetails;
window.viewAllNotifications = viewAllNotifications;
window.openNotificationFromModal = openNotificationFromModal;

// Close notification details on overlay click
document.addEventListener('click', (e) => {
    const detailsModal = document.getElementById('notification-details-modal');
    if (detailsModal && e.target === detailsModal) {
        closeNotificationDetails();
    }
});
