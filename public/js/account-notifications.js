// Account Notifications Page Functions
// Global flag to prevent re-rendering when details sidebar is open
let isNotificationDetailsOpen = false;

document.addEventListener('DOMContentLoaded', function() {
    console.log('Notifications page loaded');
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    // Load notifications only once
    console.log('Calling loadNotifications...');
    loadNotifications();
    updateNotificationBadges();
    
    // Check if notification should be opened from modal
    const openNotificationId = localStorage.getItem('openNotificationId');
    if (openNotificationId) {
        const notificationId = parseInt(openNotificationId);
        console.log('Found openNotificationId in localStorage:', notificationId);
        localStorage.removeItem('openNotificationId');
        console.log('Opening notification from modal:', notificationId);
        // Wait for page to fully load, then open notification
        setTimeout(() => {
            console.log('Attempting to open notification details for ID:', notificationId);
            if (typeof viewNotificationDetails === 'function') {
                viewNotificationDetails(notificationId);
            } else {
                console.error('viewNotificationDetails function not found, trying window.viewNotificationDetails');
                if (typeof window.viewNotificationDetails === 'function') {
                    window.viewNotificationDetails(notificationId);
                } else {
                    console.error('viewNotificationDetails not available on window either');
                }
            }
        }, 1000);
    }
});

function loadNotifications() {
    // Guard: Don't re-render if details sidebar is open
    if (isNotificationDetailsOpen) {
        console.log('Skipping loadNotifications: details sidebar open');
        return;
    }
    
    console.log('loadNotifications function called');
    // Get notifications from localStorage or use mock data
    let notifications = JSON.parse(localStorage.getItem('notifications') || '[]');
    
    console.log('loadNotifications called, current count:', notifications.length);
    
    // Always ensure we have mock data - reset if empty or less than 5
    if (notifications.length === 0 || notifications.length < 5) {
        console.log('No notifications found or less than 5, loading mock data');
        notifications = [
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
        localStorage.setItem('notifications', JSON.stringify(notifications));
        console.log('Mock notifications saved to localStorage, count:', notifications.length);
    }
    
    // Re-read from localStorage to ensure we have the latest data
    notifications = JSON.parse(localStorage.getItem('notifications') || '[]');
    console.log('Final notifications count:', notifications.length);
    console.log('Final notifications data:', JSON.stringify(notifications, null, 2));
    
    const notificationsList = document.getElementById('notifications-list');
    
    if (!notificationsList) {
        console.error('notifications-list element not found in DOM!');
        // Try again after a short delay
        setTimeout(() => {
            const retryList = document.getElementById('notifications-list');
            if (retryList) {
                console.log('Found notifications-list on retry');
                displayNotifications(notifications, retryList);
            } else {
                console.error('Still cannot find notifications-list element');
            }
        }, 500);
        return;
    }
    
    console.log('Found notifications-list element, displaying notifications');
    displayNotifications(notifications, notificationsList);
}

function displayNotifications(notifications, notificationsList) {
    console.log('displayNotifications called with', notifications.length, 'notifications');
    console.log('notificationsList element:', notificationsList);
    
    if (!notificationsList) {
        console.error('notificationsList is null or undefined');
        return;
    }
    
    if (notifications.length === 0) {
        console.log('No notifications, showing empty state');
        notificationsList.innerHTML = `
            <div class="bg-white rounded-xl shadow-lg p-12 text-center">
                <i class="fi fi-rr-bell text-6xl text-gray-300 mb-4"></i>
                <p class="text-gray-500 text-lg mb-2">No notifications</p>
                <p class="text-gray-400 text-sm">You're all caught up!</p>
            </div>
        `;
    } else {
        console.log('Rendering', notifications.length, 'notifications');
        // Sort notifications: unread first, then by date (newest first)
        const sortedNotifications = [...notifications].sort((a, b) => {
            if (a.read !== b.read) return a.read ? 1 : -1;
            return new Date(b.date) - new Date(a.date);
        });
        
        console.log('Sorted notifications:', sortedNotifications);
        
            const html = sortedNotifications.map(notif => {
            console.log('Rendering notification:', notif.id, notif.title);
            return `
                <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 hover:shadow-xl transition-all ${notif.read ? '' : 'border-l-4 border-blue-500'}">
                    <div class="flex items-start justify-between mb-3">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <h4 class="font-semibold text-[#654321] text-base sm:text-lg">${notif.title || 'Notification'}</h4>
                                ${!notif.read ? '<span class="w-2 h-2 bg-blue-500 rounded-full flex-shrink-0"></span>' : ''}
                            </div>
                            <p class="text-sm sm:text-base text-gray-600 mb-2 line-clamp-2">${notif.message || 'No message'}</p>
                            <p class="text-xs text-gray-500 flex items-center gap-2 mb-3">
                                <i class="fi fi-rr-clock"></i>
                                ${notif.time || 'Recently'}
                            </p>
                            <button onclick="if(typeof viewNotificationDetails === 'function') { viewNotificationDetails(${notif.id}); } else if(typeof window.viewNotificationDetails === 'function') { window.viewNotificationDetails(${notif.id}); } else { console.error('viewNotificationDetails not found'); }" class="text-sm text-[#8B4513] hover:text-[#654321] font-medium flex items-center gap-1 transition-colors">
                                <span>View</span>
                                <i class="fi fi-rr-arrow-right text-xs"></i>
                            </button>
                        </div>
                        <button onclick="if(typeof markAsRead === 'function') { markAsRead(${notif.id}); } else if(typeof window.markAsRead === 'function') { window.markAsRead(${notif.id}); }" class="ml-4 p-2 text-gray-400 hover:text-[#8B4513] transition-colors" title="Mark as read">
                            <i class="fi fi-rr-check text-sm"></i>
                        </button>
                    </div>
                </div>
            `;
        }).join('');
        
        console.log('Generated HTML length:', html.length);
        notificationsList.innerHTML = html;
        console.log('Notifications rendered successfully, count:', sortedNotifications.length);
        console.log('notificationsList.innerHTML length after setting:', notificationsList.innerHTML.length);
    }
    
    updateNotificationBadges();
}

function viewNotificationDetails(notificationId) {
    // Set flag to prevent re-rendering
    isNotificationDetailsOpen = true;
    
    console.log('viewNotificationDetails called with ID:', notificationId);
    const notifications = JSON.parse(localStorage.getItem('notifications') || '[]');
    console.log('All notifications:', notifications);
    const notification = notifications.find(n => n.id === notificationId);
    
    if (!notification) {
        console.error('Notification not found for ID:', notificationId);
        // Reset flag if notification not found
        isNotificationDetailsOpen = false;
        if (typeof showToast === 'function') {
            showToast('Notification not found', 'error');
        }
        return;
    }
    
    console.log('Found notification:', notification);
    
    const detailsSidebar = document.getElementById('notification-details-sidebar');
    const detailsOverlay = document.getElementById('notification-details-overlay');
    const detailsTitle = document.getElementById('notification-details-title');
    const detailsContent = document.getElementById('notification-details-content');
    
    console.log('Elements:', { detailsSidebar, detailsOverlay, detailsTitle, detailsContent });
    
    if (detailsSidebar && detailsTitle && detailsContent) {
        console.log('All elements found, building details HTML');
        console.log('Notification data:', notification);
        detailsTitle.textContent = notification.title || 'Notification Details';
        
        // Ensure we have all required fields with defaults
        const notificationData = {
            title: notification.title || 'Notification',
            message: notification.message || '',
            details: notification.details || notification.message || 'No additional details available.',
            type: notification.type || 'general',
            read: notification.read || false,
            time: notification.time || 'Recently',
            date: notification.date || new Date().toISOString().split('T')[0],
            orderId: notification.orderId || null,
            trackingNumber: notification.trackingNumber || null,
            expectedDelivery: notification.expectedDelivery || null,
            couponCode: notification.couponCode || null,
            discount: notification.discount || null,
            minPurchase: notification.minPurchase || null,
            validUntil: notification.validUntil || null,
            deliveryDate: notification.deliveryDate || null,
            collection: notification.collection || null,
            items: notification.items || null,
            amount: notification.amount || null,
            paymentMethod: notification.paymentMethod || null
        };
        
        console.log('Processed notificationData:', notificationData);
        
        // Build full notification details with all data
        let detailsHTML = `
            <div class="space-y-4">
                <div class="p-4 rounded-lg ${notificationData.read ? 'bg-gray-50' : 'bg-blue-50'} border border-gray-200">
                    <h5 class="font-semibold text-[#654321] mb-2 text-base sm:text-lg">${notificationData.title}</h5>
                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed mb-3">${notificationData.message}</p>
                    <div class="border-t border-gray-200 pt-3 mt-3">
                        <p class="text-sm text-gray-600 leading-relaxed">${notificationData.details}</p>
                    </div>
                </div>
                
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <h6 class="font-semibold text-[#654321] mb-3 text-sm">Notification Details</h6>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">Type:</span>
                            <span class="font-medium text-[#654321] capitalize">${notificationData.type}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">Status:</span>
                            <span class="px-2 py-1 rounded ${notificationData.read ? 'bg-gray-100 text-gray-700' : 'bg-blue-100 text-blue-700'} text-xs font-medium">
                                ${notificationData.read ? 'Read' : 'Unread'}
                            </span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">Time:</span>
                            <span class="font-medium text-[#654321]">${notificationData.time}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-gray-600">Date:</span>
                            <span class="font-medium text-[#654321]">${notificationData.date}</span>
                        </div>
                        ${notificationData.orderId ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Order ID:</span>
                                <span class="font-medium text-[#654321]">${notificationData.orderId}</span>
                            </div>
                        ` : ''}
                        ${notificationData.trackingNumber ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Tracking Number:</span>
                                <span class="font-medium text-[#654321]">${notificationData.trackingNumber}</span>
                            </div>
                        ` : ''}
                        ${notificationData.expectedDelivery ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Expected Delivery:</span>
                                <span class="font-medium text-[#654321]">${notificationData.expectedDelivery}</span>
                            </div>
                        ` : ''}
                        ${notificationData.couponCode ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Coupon Code:</span>
                                <span class="font-medium text-[#654321]">${notificationData.couponCode}</span>
                            </div>
                        ` : ''}
                        ${notificationData.discount ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Discount:</span>
                                <span class="font-medium text-[#654321]">${notificationData.discount}%</span>
                            </div>
                        ` : ''}
                        ${notificationData.minPurchase ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Min. Purchase:</span>
                                <span class="font-medium text-[#654321]">₹${notificationData.minPurchase.toLocaleString()}</span>
                            </div>
                        ` : ''}
                        ${notificationData.validUntil ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Valid Until:</span>
                                <span class="font-medium text-[#654321]">${new Date(notificationData.validUntil).toLocaleDateString('en-IN', { day: 'numeric', month: 'long', year: 'numeric' })}</span>
                            </div>
                        ` : ''}
                        ${notificationData.deliveryDate ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Delivery Date:</span>
                                <span class="font-medium text-[#654321]">${new Date(notificationData.deliveryDate).toLocaleDateString('en-IN', { day: 'numeric', month: 'long', year: 'numeric' })}</span>
                            </div>
                        ` : ''}
                        ${notificationData.collection ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Collection:</span>
                                <span class="font-medium text-[#654321]">${notificationData.collection}</span>
                            </div>
                        ` : ''}
                        ${notificationData.items && notificationData.items.length > 0 ? `
                            <div class="flex items-start justify-between">
                                <span class="text-gray-600">Items:</span>
                                <span class="font-medium text-[#654321] text-right max-w-[60%]">${notificationData.items.join(', ')}</span>
                            </div>
                        ` : ''}
                        ${notificationData.amount ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Amount:</span>
                                <span class="font-medium text-[#654321]">₹${notificationData.amount.toLocaleString()}</span>
                            </div>
                        ` : ''}
                        ${notificationData.paymentMethod ? `
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600">Payment Method:</span>
                                <span class="font-medium text-[#654321]">${notificationData.paymentMethod}</span>
                            </div>
                        ` : ''}
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-2 text-sm text-gray-500 pt-2 border-t border-gray-200">
                    <span class="flex items-center gap-2"><i class="fi fi-rr-clock"></i>${notificationData.time}</span>
                    <span class="flex items-center gap-2"><i class="fi fi-rr-calendar"></i>${notificationData.date}</span>
                </div>
                
                ${notificationData.type === 'order' ? `
                    <div class="pt-2">
                        <a href="/account/orders" class="block w-full px-4 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold text-center">
                            <i class="fi fi-rr-box mr-2"></i>View Order
                        </a>
                    </div>
                ` : ''}
                ${notificationData.type === 'coupon' ? `
                    <div class="pt-2">
                        <a href="/account/coupons" class="block w-full px-4 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold text-center">
                            <i class="fi fi-rr-ticket mr-2"></i>View Coupons
                        </a>
                    </div>
                ` : ''}
                ${notificationData.type === 'payment' ? `
                    <div class="pt-2">
                        <a href="/account/orders" class="block w-full px-4 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold text-center">
                            <i class="fi fi-rr-credit-card mr-2"></i>View Orders
                        </a>
                    </div>
                ` : ''}
                ${notificationData.type === 'product' ? `
                    <div class="pt-2">
                        <a href="/shop" class="block w-full px-4 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold text-center">
                            <i class="fi fi-rr-shopping-bag mr-2"></i>Shop Now
                        </a>
                    </div>
                ` : ''}
            </div>
        `;
        
        // Set content immediately
        console.log('Setting detailsContent.innerHTML, HTML length:', detailsHTML.length);
        console.log('Details HTML preview:', detailsHTML.substring(0, 300));
        
        // Clear and set content
        detailsContent.innerHTML = '';
        detailsContent.innerHTML = detailsHTML;
        console.log('Details HTML set successfully');
        console.log('Details content element:', detailsContent);
        console.log('Details content innerHTML length after setting:', detailsContent.innerHTML.length);
        
        // Verify content was set
        if (detailsContent.innerHTML.trim().length === 0) {
            console.error('Warning: detailsContent is empty after setting HTML! Retrying...');
            // Try setting again after a short delay
            setTimeout(() => {
                detailsContent.innerHTML = detailsHTML;
                console.log('Retry: Details HTML set again, length:', detailsContent.innerHTML.length);
            }, 100);
        } else {
            console.log('Details content verified, length:', detailsContent.innerHTML.length);
        }
        
        // Show sidebar and overlay immediately (content is already set)
        if (detailsOverlay) {
            detailsOverlay.classList.remove('hidden');
            console.log('Overlay shown');
        }
        
        // Remove translate-x-full to show sidebar
        detailsSidebar.classList.remove('translate-x-full');
        document.body.style.overflow = 'hidden';
        console.log('Sidebar shown, translate-x-full removed');
        console.log('isNotificationDetailsOpen flag set to true');
        
        // Mark as read
        if (!notification.read) {
            markAsRead(notificationId);
        }
    } else {
        console.error('Required elements not found:', {
            detailsSidebar: !!detailsSidebar,
            detailsTitle: !!detailsTitle,
            detailsContent: !!detailsContent
        });
        if (typeof showToast === 'function') {
            showToast('Unable to display notification details', 'error');
        }
    }
}

function closeNotificationDetails() {
    console.log('closeNotificationDetails called');
    
    // Reset flag to allow re-rendering
    isNotificationDetailsOpen = false;
    console.log('isNotificationDetailsOpen flag reset to false');
    
    const detailsSidebar = document.getElementById('notification-details-sidebar');
    const detailsOverlay = document.getElementById('notification-details-overlay');
    
    if (detailsSidebar) {
        detailsSidebar.classList.add('translate-x-full');
    }
    if (detailsOverlay) {
        detailsOverlay.classList.add('hidden');
    }
    document.body.style.overflow = '';
}

function markAsRead(notificationId) {
    const notifications = JSON.parse(localStorage.getItem('notifications') || '[]');
    const notification = notifications.find(n => n.id === notificationId);
    
    if (notification && !notification.read) {
        notification.read = true;
        localStorage.setItem('notifications', JSON.stringify(notifications));
        loadNotifications();
        updateNotificationBadges();
        
        if (typeof showToast === 'function') {
            showToast('Notification marked as read', 'success');
        }
    }
}

function updateNotificationBadges() {
    const notifications = JSON.parse(localStorage.getItem('notifications') || '[]');
    const unreadCount = notifications.filter(n => !n.read).length;
    
    // Update sidebar badge
    const sidebarBadge = document.getElementById('sidebar-notification-badge');
    if (sidebarBadge) {
        if (unreadCount > 0) {
            sidebarBadge.textContent = unreadCount > 9 ? '9+' : unreadCount;
            sidebarBadge.classList.remove('hidden');
        } else {
            sidebarBadge.classList.add('hidden');
        }
    }
    
    // Update mobile badge
    const mobileBadge = document.getElementById('mobile-notification-badge');
    if (mobileBadge) {
        if (unreadCount > 0) {
            mobileBadge.textContent = unreadCount > 9 ? '9+' : unreadCount;
            mobileBadge.classList.remove('hidden');
        } else {
            mobileBadge.classList.add('hidden');
        }
    }
    
    // Update header badge (if exists)
    const headerBadge = document.getElementById('notification-badge');
    if (headerBadge) {
        if (unreadCount > 0) {
            headerBadge.textContent = unreadCount > 9 ? '9+' : unreadCount;
            headerBadge.classList.remove('hidden');
        } else {
            headerBadge.classList.add('hidden');
        }
    }
}

// Close sidebar on overlay click
document.addEventListener('click', (e) => {
    const detailsOverlay = document.getElementById('notification-details-overlay');
    if (detailsOverlay && e.target === detailsOverlay) {
        closeNotificationDetails();
    }
});

// Make functions globally accessible
window.viewNotificationDetails = viewNotificationDetails;
window.closeNotificationDetails = closeNotificationDetails;
window.markAsRead = markAsRead;
window.loadNotifications = loadNotifications;

