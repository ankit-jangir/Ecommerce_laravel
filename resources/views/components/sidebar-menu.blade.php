<div id="sidebar-menu" class="sidebar-menu fixed inset-y-0 left-0 w-full sm:w-80 bg-white shadow-2xl transform -translate-x-full transition-transform duration-300 ease-in-out z-50 overflow-y-auto">
    <div class="p-4 sm:p-6">
        <!-- Header -->
        <div class="flex items-center justify-between mb-4 sm:mb-6">
            <a href="#" class="text-gray-900 hover:underline text-sm sm:text-base">Sign in</a>
            <button id="sidebar-close" class="text-gray-900 hover:text-gray-700 focus:outline-none p-2">
                <i class="fi fi-rr-cross text-xl sm:text-2xl"></i>
            </button>
        </div>
        
        <!-- Main Navigation -->
        <div class="flex flex-wrap gap-4 sm:gap-6 mb-6 sm:mb-8">
            <a href="{{ route('home') }}" class="nav-link text-sm sm:text-base text-gray-900 font-bold {{ request()->routeIs('home') ? 'underline' : '' }}">HOME</a>
            <a href="{{ route('women') }}" class="nav-link text-sm sm:text-base text-gray-900 {{ request()->routeIs('women*') ? 'underline' : '' }}">WOMEN</a>
            <a href="{{ route('men') }}" class="nav-link text-sm sm:text-base text-gray-900 {{ request()->routeIs('men') ? 'underline' : '' }}">MEN</a>
            <a href="{{ route('gifting') }}" class="nav-link text-sm sm:text-base text-gray-900 {{ request()->routeIs('gifting') ? 'underline' : '' }}">GIFTING</a>
        </div>
        
        <!-- Categories -->
        <div class="mb-8">
            <div class="mb-4">
                <h3 class="text-sm font-semibold text-gray-900 mb-3">THE GIFTING CONCIERGE</h3>
            </div>
            
            <div class="mb-4">
                <h3 class="text-xs sm:text-sm font-semibold text-gray-900 mb-3 flex items-center justify-between">
                    OUR STORY
                    <i class="fi fi-rr-angle-right text-sm"></i>
                </h3>
            </div>
            
            <div class="mb-4">
                <h3 class="text-xs sm:text-sm font-semibold text-gray-900 mb-3">RECENTLY VIEWED</h3>
            </div>
            
            <!-- Category Links -->
            <div class="space-y-2 sm:space-y-3 mb-4 sm:mb-6">
                <a href="#" class="flex items-center justify-between text-sm sm:text-base text-gray-900 hover:text-gray-700">
                    <span>Kitchen & Dining</span>
                    <i class="fi fi-rr-plus text-xs sm:text-sm"></i>
                </a>
                <a href="#" class="flex items-center justify-between text-sm sm:text-base text-gray-900 hover:text-gray-700">
                    <span>Serveware</span>
                    <i class="fi fi-rr-plus text-xs sm:text-sm"></i>
                </a>
                <a href="#" class="flex items-center justify-between text-sm sm:text-base text-gray-900 hover:text-gray-700">
                    <span>Drinkware</span>
                    <i class="fi fi-rr-plus text-xs sm:text-sm"></i>
                </a>
                <a href="#" class="flex items-center justify-between text-sm sm:text-base text-gray-900 hover:text-gray-700">
                    <span>Decor</span>
                    <i class="fi fi-rr-plus text-xs sm:text-sm"></i>
                </a>
                <a href="#" class="flex items-center justify-between text-sm sm:text-base text-gray-900 hover:text-gray-700">
                    <span>Barware</span>
                    <i class="fi fi-rr-plus text-xs sm:text-sm"></i>
                </a>
                <a href="#" class="flex items-center justify-between text-sm sm:text-base text-gray-900 hover:text-gray-700">
                    <span>Textile</span>
                    <i class="fi fi-rr-plus text-xs sm:text-sm"></i>
                </a>
                <a href="#" class="text-sm sm:text-base text-gray-900 hover:text-gray-700">Furniture</a>
                <a href="#" class="text-sm sm:text-base text-gray-900 hover:text-gray-700">All Collections</a>
                <a href="#" class="text-sm sm:text-base text-gray-900 hover:text-gray-700">Bestsellers</a>
                <a href="#" class="text-sm sm:text-base text-gray-900 hover:text-gray-700">The House of Things x Nico Sanctuary</a>
            </div>
        </div>
        
        <!-- Utility Links -->
        <div class="space-y-3 sm:space-y-4 mb-4 sm:mb-6">
            <a href="#" class="flex items-center gap-2 sm:gap-3 text-sm sm:text-base text-gray-900 hover:text-gray-700">
                <i class="fi fi-rr-user text-base sm:text-lg"></i>
                <span>Sign in</span>
            </a>
            <a href="#" class="flex items-center gap-2 sm:gap-3 text-sm sm:text-base text-gray-900 hover:text-gray-700">
                <i class="fi fi-rr-heart text-base sm:text-lg"></i>
                <span>Guest wishlist</span>
            </a>
            <a href="#" class="flex items-center gap-2 sm:gap-3 text-sm sm:text-base text-gray-900 hover:text-gray-700">
                <i class="fi fi-rr-marker text-base sm:text-lg"></i>
                <span>Find a store</span>
            </a>
            <a href="#" class="flex items-center gap-2 sm:gap-3 text-sm sm:text-base text-gray-900 hover:text-gray-700">
                <i class="fi fi-rr-envelope text-base sm:text-lg"></i>
                <span>Contact</span>
            </a>
        </div>
        
        <!-- Region & Social -->
        <div class="mb-4 sm:mb-6">
            <div class="flex items-center gap-2 sm:gap-3 mb-4 flex-wrap">
                <i class="fi fi-rr-globe text-base sm:text-lg"></i>
                <span class="text-teal-600 text-sm sm:text-base">India</span>
                <span class="text-gray-900">|</span>
                <a href="#" class="text-sm sm:text-base text-gray-900 underline">Global</a>
                <div class="ml-auto flex gap-2 sm:gap-3">
                    <a href="#" class="text-gray-900 hover:text-gray-700">
                        <i class="fi fi-brands-instagram text-lg sm:text-xl"></i>
                    </a>
                    <a href="#" class="text-gray-900 hover:text-gray-700">
                        <i class="fi fi-brands-linkedin text-lg sm:text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Newsletter -->
        <div class="border-t pt-4 sm:pt-6">
            <h3 class="text-xs sm:text-sm font-semibold text-gray-900 mb-2">Get on the list.</h3>
            <p class="text-xs sm:text-sm text-gray-600 mb-3 sm:mb-4">Sign up for our introductory offers and hear all about new drops, collaborations and much more.</p>
            <form class="flex flex-col sm:flex-row gap-2">
                <input type="email" placeholder="Enter your email address here" class="flex-1 px-3 sm:px-4 py-2 text-sm sm:text-base border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-900">
                <button type="submit" class="px-4 sm:px-6 py-2 text-sm sm:text-base bg-gray-900 text-white rounded hover:bg-gray-800 whitespace-nowrap">SUBMIT</button>
            </form>
        </div>
    </div>
</div>

<!-- Overlay -->
<div id="sidebar-overlay" class="sidebar-overlay fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

