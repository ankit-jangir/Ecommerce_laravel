<!-- Bottom Navigation (Mobile Only) -->
<div class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 z-50 lg:hidden">
    <div class="flex items-center justify-around py-2">
        <a href="{{ route('home') }}" 
            class="flex flex-col items-center gap-1 px-4 py-2 text-[#654321] hover:text-[#8B4513] transition-colors {{ request()->routeIs('home') ? 'text-[#8B4513]' : '' }}">
            <i class="fi fi-rr-home text-xl"></i>
            <span class="text-xs font-medium">Home</span>
        </a>
        <a href="{{ route('shop') }}" 
            class="flex flex-col items-center gap-1 px-4 py-2 text-[#654321] hover:text-[#8B4513] transition-colors {{ request()->routeIs('shop*') ? 'text-[#8B4513]' : '' }}">
            <i class="fi fi-rr-shopping-bag text-xl"></i>
            <span class="text-xs font-medium">Shop</span>
        </a>
        <button id="bottom-search-toggle" 
            class="flex flex-col items-center gap-1 px-4 py-2 text-[#654321] hover:text-[#8B4513] transition-colors">
            <i class="fi fi-rr-search text-xl"></i>
            <span class="text-xs font-medium">Search</span>
        </button>
        <a href="{{ route('wishlist') }}" 
            class="flex flex-col items-center gap-1 px-4 py-2 text-[#654321] hover:text-[#8B4513] transition-colors relative {{ request()->routeIs('wishlist') ? 'text-[#8B4513]' : '' }}">
            <i class="fi fi-rr-heart text-xl"></i>
            <span class="text-xs font-medium">Wishlist</span>
        </a>
        <button id="bottom-account-toggle" 
            class="flex flex-col items-center gap-1 px-4 py-2 text-[#654321] hover:text-[#8B4513] transition-colors {{ request()->routeIs('account*') ? 'text-[#8B4513]' : '' }}">
            <i class="fi fi-rr-user text-xl"></i>
            <span class="text-xs font-medium">Account</span>
        </button>
    </div>
</div>

<script src="{{ asset('js/bottom-nav.js') }}"></script>

