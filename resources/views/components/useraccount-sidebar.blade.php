<!-- User Account Sidebar Component -->
<div class="hidden lg:block lg:w-64 flex-shrink-0">
    <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 sticky top-4">
        <!-- User Info -->
        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-200">
            <div class="w-12 h-12 bg-[#8B4513] rounded-full flex items-center justify-center flex-shrink-0 text-white font-semibold text-lg" id="sidebar-user-icon-container">
                <i class="fi fi-rr-user text-xl text-white" id="sidebar-user-icon"></i>
                <img id="sidebar-user-image" src="" alt="User" class="w-12 h-12 rounded-full object-cover hidden">
            </div>
            <div class="min-w-0 flex-1">
                <p class="font-semibold text-[#654321] text-sm truncate" id="sidebar-user-name">User</p>
                <p class="text-xs text-gray-500 truncate" id="sidebar-user-email">user@gmail.com</p>
            </div>
        </div>
        
        <!-- Navigation -->
        <nav class="space-y-1">
            <p class="text-xs font-semibold text-gray-400 uppercase mb-2 px-2">MY ACCOUNT</p>
            <a href="{{ route('account.dashboard') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.dashboard') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-apps text-sm"></i>
                <span class="text-sm">Dashboard</span>
            </a>
            <a href="{{ route('account.orders') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.orders') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-shopping-bag text-sm"></i>
                <span class="text-sm">My Orders</span>
            </a>
            <a href="{{ route('account.subscriptions') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.subscriptions') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
                <i class="fi fi-rr-calendar text-sm"></i>
                <span class="text-sm">Subscriptions</span>
            </a>
            <a href="{{ route('account.returns') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.returns') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors">
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
            <a href="{{ route('account.notifications') }}" class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('account.notifications') ? 'bg-[#F5F1EB] text-[#8B4513] font-medium' : 'text-[#654321] hover:bg-[#F5F1EB]' }} rounded-lg transition-colors relative">
                <i class="fi fi-rr-bell text-sm"></i>
                <span class="text-sm">Notifications</span>
                <span id="sidebar-notification-badge" class="ml-auto w-5 h-5 bg-red-500 rounded-full text-white text-[10px] flex items-center justify-center font-bold hidden">0</span>
            </a>
            <p class="text-xs font-semibold text-gray-400 uppercase mb-2 mt-4 px-2">SETTINGS</p>
            <a href="{{ route('home') }}" class="flex items-center gap-3 px-3 py-2 text-[#654321] hover:bg-[#F5F1EB] rounded-lg transition-colors">
                <i class="fi fi-rr-arrow-left text-sm"></i>
                <span class="text-sm">Back to Shop</span>
            </a>
            <button onclick="handleLogout()" class="w-full flex items-center gap-3 px-3 py-2 text-red-600 hover:bg-red-50 rounded-lg transition-colors">
                <i class="fi fi-rr-sign-out text-sm"></i>
                <span class="text-sm">Logout</span>
            </button>
        </nav>
    </div>
</div>

