<!-- Mobile Sidebar for Account Pages -->
<div id="account-mobile-sidebar" class="fixed inset-y-0 left-0 w-64 bg-white shadow-2xl transform -translate-x-full transition-transform duration-300 ease-in-out z-50 overflow-y-auto lg:hidden">
    <div class="p-4">
        <!-- Header -->
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-200">
            <h2 class="text-xl font-serif font-bold text-[#654321]">My Account</h2>
            <button id="account-mobile-sidebar-close" class="text-gray-400 hover:text-[#8B4513] transition-colors">
                <i class="fi fi-rr-cross text-xl"></i>
            </button>
        </div>
        
        <!-- User Info -->
        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-200">
            <div class="w-12 h-12 bg-[#8B4513] rounded-full flex items-center justify-center flex-shrink-0 text-white font-semibold text-lg" id="mobile-sidebar-user-icon-container">
                <i class="fi fi-rr-user text-xl text-white" id="mobile-sidebar-user-icon"></i>
                <img id="mobile-sidebar-user-image" src="" alt="User" class="w-12 h-12 rounded-full object-cover hidden">
            </div>
            <div class="min-w-0 flex-1">
                <p class="font-semibold text-[#654321] text-sm truncate" id="mobile-sidebar-user-name">User</p>
                <p class="text-xs text-gray-500 truncate" id="mobile-sidebar-user-email">user@gmail.com</p>
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

<!-- Overlay -->
<div id="account-mobile-sidebar-overlay" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40 hidden lg:hidden"></div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const accountSidebarToggle = document.getElementById('account-mobile-sidebar-toggle');
    const accountSidebar = document.getElementById('account-mobile-sidebar');
    const accountSidebarClose = document.getElementById('account-mobile-sidebar-close');
    const accountSidebarOverlay = document.getElementById('account-mobile-sidebar-overlay');
    
    function openSidebar() {
        accountSidebar.classList.remove('-translate-x-full');
        accountSidebarOverlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }
    
    function closeSidebar() {
        accountSidebar.classList.add('-translate-x-full');
        accountSidebarOverlay.classList.add('hidden');
        document.body.style.overflow = '';
    }
    
    if (accountSidebarToggle) {
        accountSidebarToggle.addEventListener('click', openSidebar);
    }
    
    [accountSidebarClose, accountSidebarOverlay].forEach(el => {
        if (el) el.addEventListener('click', closeSidebar);
    });
    
    // Update user info
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    // Update mobile sidebar user
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    const mobileSidebarUserName = document.getElementById('mobile-sidebar-user-name');
    const mobileSidebarUserEmail = document.getElementById('mobile-sidebar-user-email');
    const mobileSidebarUserIcon = document.getElementById('mobile-sidebar-user-icon');
    const mobileSidebarUserImage = document.getElementById('mobile-sidebar-user-image');
    
    if (mobileSidebarUserName) mobileSidebarUserName.textContent = currentUser?.name || 'User';
    if (mobileSidebarUserEmail) mobileSidebarUserEmail.textContent = currentUser?.email || 'user@gmail.com';
    
    if (currentUser?.avatar) {
        if (mobileSidebarUserIcon) mobileSidebarUserIcon.classList.add('hidden');
        if (mobileSidebarUserImage) {
            mobileSidebarUserImage.src = currentUser.avatar;
            mobileSidebarUserImage.classList.remove('hidden');
        }
    } else if (currentUser?.name) {
        const firstLetter = currentUser.name.charAt(0).toUpperCase();
        if (mobileSidebarUserIcon) {
            mobileSidebarUserIcon.textContent = firstLetter;
            mobileSidebarUserIcon.classList.remove('hidden');
            mobileSidebarUserIcon.classList.remove('fi', 'fi-rr-user');
        }
    }
});
</script>

