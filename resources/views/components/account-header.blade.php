<!-- Account Header for Mobile/Tablet -->
<header class="account-header bg-[#F5F1EB] sticky top-0 z-40 shadow-sm border-b border-[#E8E0D6] lg:hidden">
    <div class="container mx-auto px-4 sm:px-6">
        <nav class="flex items-center justify-between py-4">
            <!-- Left: Menu Icon -->
            <button id="account-menu-toggle" type="button"
                class="text-[#654321] hover:text-[#8B4513] focus:outline-none p-2 hover:bg-white/50 rounded-lg transition-all">
                <i class="fi fi-rr-menu-burger text-xl sm:text-2xl"></i>
            </button>
            
            <!-- Center: Logo -->
            <a href="{{ route('home') }}"
                class="logo text-xl sm:text-2xl font-serif text-[#8B4513] hover:text-[#654321] transition-colors font-semibold">
                AURA KURTIS
            </a>
            
            <!-- Right: Notification Icon -->
            <button id="account-notification-toggle" type="button"
                class="text-[#654321] hover:text-[#8B4513] focus:outline-none p-2 hover:bg-white/50 rounded-lg transition-all relative">
                <i class="fi fi-rr-bell text-xl sm:text-2xl"></i>
                <span id="notification-badge" class="absolute top-0 right-0 w-4 h-4 bg-red-500 rounded-full text-white text-[10px] flex items-center justify-center hidden">0</span>
            </button>
        </nav>
    </div>
</header>

<!-- Account Menu Sidebar -->
<div id="account-menu-sidebar"
    class="fixed inset-y-0 right-0 w-80 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-[9999] overflow-y-auto lg:hidden">
    <div class="p-6">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6 border-b border-gray-200 pb-4">
            <h2 class="text-xl font-serif font-bold text-[#654321]">My Account</h2>
            <button id="account-menu-close" class="text-gray-400 hover:text-[#8B4513] transition-colors">
                <i class="fi fi-rr-cross text-2xl"></i>
            </button>
        </div>
        
        <!-- User Info -->
        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-200">
            <div class="w-12 h-12 bg-[#8B4513] rounded-full flex items-center justify-center flex-shrink-0 text-white font-semibold text-lg" id="account-menu-user-icon-container">
                <span id="account-menu-user-icon">U</span>
                <img id="account-menu-user-image" src="" alt="User" class="w-12 h-12 rounded-full object-cover hidden">
            </div>
            <div class="min-w-0 flex-1">
                <p class="font-semibold text-[#654321] text-sm truncate" id="account-menu-user-name">User</p>
                <p class="text-xs text-gray-500 truncate" id="account-menu-user-email">user@gmail.com</p>
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="space-y-1">
            <p class="text-xs font-semibold text-gray-400 uppercase mb-2 px-2">MY ACCOUNT</p>
            <a href="{{ route('account.dashboard') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.dashboard') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-apps text-sm"></i>
                <span class="text-sm">Dashboard</span>
            </a>
            <a href="{{ route('account.orders') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.orders*') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-box text-sm"></i>
                <span class="text-sm">My Orders</span>
            </a>
            <a href="{{ route('account.subscriptions') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.subscriptions') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-calendar text-sm"></i>
                <span class="text-sm">Subscriptions</span>
            </a>
            <a href="{{ route('account.returns') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.returns*') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-arrow-left text-sm"></i>
                <span class="text-sm">Returns</span>
            </a>
            <a href="{{ route('wishlist') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('wishlist') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-heart text-sm"></i>
                <span class="text-sm">Wishlist</span>
            </a>
            <a href="{{ route('account.loyalty') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.loyalty') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-star text-sm"></i>
                <span class="text-sm">Loyalty Points</span>
            </a>
            <a href="{{ route('account.referrals') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.referrals') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-users text-sm"></i>
                <span class="text-sm">Referrals</span>
            </a>
            <a href="{{ route('account.gift-cards') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.gift-cards') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-gift text-sm"></i>
                <span class="text-sm">Gift Cards</span>
            </a>
            <a href="{{ route('account.coupons') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.coupons') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-ticket text-sm"></i>
                <span class="text-sm">Coupons</span>
            </a>
            <a href="{{ route('account') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-user text-sm"></i>
                <span class="text-sm">My Profile</span>
            </a>
            <a href="{{ route('account.addresses') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.addresses') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-marker text-sm"></i>
                <span class="text-sm">My Addresses</span>
            </a>
            <div class="pt-4 border-t border-gray-200 mt-4">
                <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-2 text-[#654321] hover:bg-[#F5F1EB] rounded-lg transition-colors">
                    <i class="fi fi-rr-arrow-left text-sm"></i>
                    <span class="text-sm">Back to Shop</span>
                </a>
                <button onclick="handleLogout()" class="w-full flex items-center gap-3 px-3 py-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                    <i class="fi fi-rr-sign-out text-sm"></i>
                    <span class="text-sm">Logout</span>
                </button>
            </div>
        </nav>
    </div>
</div>

<!-- Account Menu Overlay -->
<div id="account-menu-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[9998] hidden lg:hidden"></div>

<!-- Notification Modal -->
<div id="account-notification-modal" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[9999] hidden items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md max-h-[80vh] overflow-hidden flex flex-col">
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <h3 class="text-xl font-serif font-bold text-[#654321]">Notifications</h3>
            <button id="account-notification-close" class="text-gray-400 hover:text-[#8B4513] transition-colors">
                <i class="fi fi-rr-cross text-xl"></i>
            </button>
        </div>
        <div id="notification-list" class="flex-1 overflow-y-auto p-4 space-y-3">
            <!-- Notifications will be populated here -->
        </div>
    </div>
</div>
