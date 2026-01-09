@extends('layouts.app')

@section('title', 'Notifications - AURA KURTIS')

@section('content')
    <!-- Account Header for Mobile/Tablet -->
    <x-account-header />
    
    <section class="py-6 sm:py-8 bg-[#F5F1EB] min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Left Sidebar -->
                <x-useraccount-sidebar />
                
                <!-- Main Content -->
                <div class="flex-1 min-w-0">
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] mb-6">Notifications</h1>
                    <div id="notifications-list" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        <!-- Dummy UI Data - Will be replaced by JS -->
                        <div class="bg-white rounded-xl shadow-lg p-2 sm:p-4 lg:p-6 hover:shadow-xl transition-all border-l-2 sm:border-l-4 border-blue-500 h-full flex flex-col">
                            <div class="flex flex-col items-start justify-between flex-1 min-h-0">
                                <div class="flex-1 w-full min-w-0">
                                    <div class="flex items-center gap-1 sm:gap-2 mb-1 sm:mb-2 flex-wrap">
                                        <h4 class="font-semibold text-[#654321] text-[10px] sm:text-xs md:text-sm lg:text-base xl:text-lg leading-tight">Order Shipped</h4>
                                        <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-blue-500 rounded-full flex-shrink-0"></span>
                                    </div>
                                    <p class="text-[9px] sm:text-[10px] md:text-xs lg:text-sm text-gray-600 mb-1 sm:mb-2 line-clamp-2 leading-tight">Your order ORD-2024-001 has been shipped</p>
                                    <p class="text-[8px] sm:text-[9px] md:text-xs text-gray-500 flex items-center gap-1 mb-1 sm:mb-2">
                                        <i class="fi fi-rr-clock text-[8px] sm:text-[9px]"></i>
                                        <span class="truncate">2 hours ago</span>
                                    </p>
                                </div>
                                <div class="flex items-center justify-between w-full mt-auto pt-1 sm:pt-2">
                                    <button onclick="viewNotificationDetails(1)" class="text-[8px] sm:text-[9px] md:text-xs lg:text-sm text-[#8B4513] hover:text-[#654321] font-medium flex items-center gap-0.5 sm:gap-1 transition-colors">
                                        <span>View</span>
                                        <i class="fi fi-rr-arrow-right text-[8px] sm:text-[9px]"></i>
                                    </button>
                                    <button onclick="markAsRead(1)" class="p-1 sm:p-1.5 text-gray-400 hover:text-[#8B4513] transition-colors flex-shrink-0" title="Mark as read">
                                        <i class="fi fi-rr-check text-[8px] sm:text-[9px] md:text-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl shadow-lg p-2 sm:p-4 lg:p-6 hover:shadow-xl transition-all border-l-2 sm:border-l-4 border-blue-500 h-full flex flex-col">
                            <div class="flex flex-col items-start justify-between flex-1 min-h-0">
                                <div class="flex-1 w-full min-w-0">
                                    <div class="flex items-center gap-1 sm:gap-2 mb-1 sm:mb-2 flex-wrap">
                                        <h4 class="font-semibold text-[#654321] text-[10px] sm:text-xs md:text-sm lg:text-base xl:text-lg leading-tight">New Coupon Available</h4>
                                        <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-blue-500 rounded-full flex-shrink-0"></span>
                                    </div>
                                    <p class="text-[9px] sm:text-[10px] md:text-xs lg:text-sm text-gray-600 mb-1 sm:mb-2 line-clamp-2 leading-tight">Get 20% off on your next purchase with code WELCOME20</p>
                                    <p class="text-[8px] sm:text-[9px] md:text-xs text-gray-500 flex items-center gap-1 mb-1 sm:mb-2">
                                        <i class="fi fi-rr-clock text-[8px] sm:text-[9px]"></i>
                                        <span class="truncate">1 day ago</span>
                                    </p>
                                </div>
                                <div class="flex items-center justify-between w-full mt-auto pt-1 sm:pt-2">
                                    <button onclick="viewNotificationDetails(2)" class="text-[8px] sm:text-[9px] md:text-xs lg:text-sm text-[#8B4513] hover:text-[#654321] font-medium flex items-center gap-0.5 sm:gap-1 transition-colors">
                                        <span>View</span>
                                        <i class="fi fi-rr-arrow-right text-[8px] sm:text-[9px]"></i>
                                    </button>
                                    <button onclick="markAsRead(2)" class="p-1 sm:p-1.5 text-gray-400 hover:text-[#8B4513] transition-colors flex-shrink-0" title="Mark as read">
                                        <i class="fi fi-rr-check text-[8px] sm:text-[9px] md:text-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl shadow-lg p-2 sm:p-4 lg:p-6 hover:shadow-xl transition-all h-full flex flex-col">
                            <div class="flex flex-col items-start justify-between flex-1 min-h-0">
                                <div class="flex-1 w-full min-w-0">
                                    <div class="flex items-center gap-1 sm:gap-2 mb-1 sm:mb-2 flex-wrap">
                                        <h4 class="font-semibold text-[#654321] text-[10px] sm:text-xs md:text-sm lg:text-base xl:text-lg leading-tight">Order Delivered</h4>
                                    </div>
                                    <p class="text-[9px] sm:text-[10px] md:text-xs lg:text-sm text-gray-600 mb-1 sm:mb-2 line-clamp-2 leading-tight">Your order ORD-2024-002 has been delivered</p>
                                    <p class="text-[8px] sm:text-[9px] md:text-xs text-gray-500 flex items-center gap-1 mb-1 sm:mb-2">
                                        <i class="fi fi-rr-clock text-[8px] sm:text-[9px]"></i>
                                        <span class="truncate">3 days ago</span>
                                    </p>
                                </div>
                                <div class="flex items-center justify-between w-full mt-auto pt-1 sm:pt-2">
                                    <button onclick="viewNotificationDetails(3)" class="text-[8px] sm:text-[9px] md:text-xs lg:text-sm text-[#8B4513] hover:text-[#654321] font-medium flex items-center gap-0.5 sm:gap-1 transition-colors">
                                        <span>View</span>
                                        <i class="fi fi-rr-arrow-right text-[8px] sm:text-[9px]"></i>
                                    </button>
                                    <button onclick="markAsRead(3)" class="p-1 sm:p-1.5 text-gray-400 hover:text-[#8B4513] transition-colors flex-shrink-0" title="Mark as read">
                                        <i class="fi fi-rr-check text-[8px] sm:text-[9px] md:text-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl shadow-lg p-2 sm:p-4 lg:p-6 hover:shadow-xl transition-all h-full flex flex-col">
                            <div class="flex flex-col items-start justify-between flex-1 min-h-0">
                                <div class="flex-1 w-full min-w-0">
                                    <div class="flex items-center gap-1 sm:gap-2 mb-1 sm:mb-2 flex-wrap">
                                        <h4 class="font-semibold text-[#654321] text-[10px] sm:text-xs md:text-sm lg:text-base xl:text-lg leading-tight">Payment Received</h4>
                                    </div>
                                    <p class="text-[9px] sm:text-[10px] md:text-xs lg:text-sm text-gray-600 mb-1 sm:mb-2 line-clamp-2 leading-tight">Payment of ₹5,298 received for order ORD-2024-001</p>
                                    <p class="text-[8px] sm:text-[9px] md:text-xs text-gray-500 flex items-center gap-1 mb-1 sm:mb-2">
                                        <i class="fi fi-rr-clock text-[8px] sm:text-[9px]"></i>
                                        <span class="truncate">5 days ago</span>
                                    </p>
                                </div>
                                <div class="flex items-center justify-between w-full mt-auto pt-1 sm:pt-2">
                                    <button onclick="viewNotificationDetails(4)" class="text-[8px] sm:text-[9px] md:text-xs lg:text-sm text-[#8B4513] hover:text-[#654321] font-medium flex items-center gap-0.5 sm:gap-1 transition-colors">
                                        <span>View</span>
                                        <i class="fi fi-rr-arrow-right text-[8px] sm:text-[9px]"></i>
                                    </button>
                                    <button onclick="markAsRead(4)" class="p-1 sm:p-1.5 text-gray-400 hover:text-[#8B4513] transition-colors flex-shrink-0" title="Mark as read">
                                        <i class="fi fi-rr-check text-[8px] sm:text-[9px] md:text-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl shadow-lg p-2 sm:p-4 lg:p-6 hover:shadow-xl transition-all h-full flex flex-col">
                            <div class="flex flex-col items-start justify-between flex-1 min-h-0">
                                <div class="flex-1 w-full min-w-0">
                                    <div class="flex items-center gap-1 sm:gap-2 mb-1 sm:mb-2 flex-wrap">
                                        <h4 class="font-semibold text-[#654321] text-[10px] sm:text-xs md:text-sm lg:text-base xl:text-lg leading-tight">New Product Arrival</h4>
                                    </div>
                                    <p class="text-[9px] sm:text-[10px] md:text-xs lg:text-sm text-gray-600 mb-1 sm:mb-2 line-clamp-2 leading-tight">Check out our new winter collection!</p>
                                    <p class="text-[8px] sm:text-[9px] md:text-xs text-gray-500 flex items-center gap-1 mb-1 sm:mb-2">
                                        <i class="fi fi-rr-clock text-[8px] sm:text-[9px]"></i>
                                        <span class="truncate">1 week ago</span>
                                    </p>
                                </div>
                                <div class="flex items-center justify-between w-full mt-auto pt-1 sm:pt-2">
                                    <button onclick="viewNotificationDetails(5)" class="text-[8px] sm:text-[9px] md:text-xs lg:text-sm text-[#8B4513] hover:text-[#654321] font-medium flex items-center gap-0.5 sm:gap-1 transition-colors">
                                        <span>View</span>
                                        <i class="fi fi-rr-arrow-right text-[8px] sm:text-[9px]"></i>
                                    </button>
                                    <button onclick="markAsRead(5)" class="p-1 sm:p-1.5 text-gray-400 hover:text-[#8B4513] transition-colors flex-shrink-0" title="Mark as read">
                                        <i class="fi fi-rr-check text-[8px] sm:text-[9px] md:text-xs"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Notification Details Sidebar - Slide from Right -->
    <div id="notification-details-sidebar" class="fixed inset-y-0 right-0 w-full sm:w-96 lg:w-[500px] bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-[9999] flex flex-col">
        <!-- Fixed Header -->
        <div class="flex items-center justify-between p-4 sm:p-6 border-b border-gray-200 flex-shrink-0">
            <h3 class="text-lg sm:text-xl font-serif font-bold text-[#654321]" id="notification-details-title">Notification Details</h3>
            <button onclick="closeNotificationDetails()" class="text-gray-400 hover:text-[#8B4513] transition-colors p-2">
                <i class="fi fi-rr-cross text-xl"></i>
            </button>
        </div>
        
        <!-- Scrollable Content -->
        <div class="flex-1 overflow-y-auto p-4 sm:p-6">
            <div id="notification-details-content">
                <!-- Notification details will be populated here -->
            </div>
        </div>
    </div>
    
    <!-- Overlay -->
    <div id="notification-details-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[9998] hidden"></div>
    
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/account-notifications.js') }}"></script>
@endsection

