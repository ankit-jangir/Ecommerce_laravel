<header class="main-header bg-[#F5F1EB] sticky top-0 z-40 shadow-sm border-b border-[#E8E0D6]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex items-center justify-between py-4">
            <!-- Left Side: Logo and Mobile Menu Button -->
            <div class="flex items-center gap-3 sm:gap-4">
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-toggle" type="button"
                    class="lg:hidden text-[#654321] hover:text-[#8B4513] focus:outline-none p-2 hover:bg-white/50 rounded-lg transition-all z-50 relative cursor-pointer">
                    <i class="fi fi-rr-menu-burger text-xl sm:text-2xl"></i>
                </button>
                <a href="{{ route('home') }}"
                    class="logo text-[0.8rem] sm:text-[0.8rem] lg:text-3xl font-serif text-[#8B4513] hover:text-[#654321] transition-colors font-semibold">
                    AURA KURTIS
                </a>
            </div>

            <!-- Center: Navigation Links with Dropdowns -->
            <div id="desktop-nav" class="hidden lg:flex items-center gap-4 xl:gap-6">
                <a href="{{ route('new-in') }}"
                    class="nav-link text-sm text-[#654321] hover:text-[#8B4513] transition-colors font-medium">New
                    In</a>

                <!-- Women Dropdown -->
                <div class="relative group">
                    <a href="{{ route('women') }}"
                        class="nav-link text-sm text-[#654321] hover:text-[#8B4513] transition-colors font-medium {{ request()->routeIs('women*') ? 'border-b-2 border-[#8B4513] pb-1' : '' }}">Women</a>
                    <div
                        class="absolute top-full left-0 mt-2 w-64 bg-white shadow-xl rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-200">
                        <div class="p-4">
                            <a href="{{ route('women') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">All
                                Women</a>
                            <a href="{{ route('women.kurti') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Kurtis</a>
                            <a href="{{ route('women.tops') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Tops</a>
                            <a href="{{ route('women.dresses') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Dresses</a>
                            <a href="{{ route('women.bottoms') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Bottoms</a>
                        </div>
                    </div>
                </div>

                <!-- Kurtis Dropdown -->
                <div class="relative group">
                    <a href="{{ route('kurtis') }}"
                        class="nav-link text-sm text-[#654321] hover:text-[#8B4513] transition-colors font-medium">Kurtis</a>
                    <div
                        class="absolute top-full left-0 mt-2 w-64 bg-white shadow-xl rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-200">
                        <div class="p-4">
                            <a href="{{ route('kurtis') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">All
                                Kurtis</a>
                            <a href="{{ route('kurtis.anarkali') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Anarkali</a>
                            <a href="{{ route('kurtis.straight') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Straight
                                Cut</a>
                            <a href="{{ route('kurtis.a-line') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">A-Line</a>
                            <a href="{{ route('kurtis.printed') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Printed</a>
                        </div>
                    </div>
                </div>

                <!-- Combos Dropdown -->
                <div class="relative group">
                    <a href="{{ route('combos') }}"
                        class="nav-link text-sm text-[#654321] hover:text-[#8B4513] transition-colors font-medium">Combos</a>
                    <div
                        class="absolute top-full left-0 mt-2 w-64 bg-white shadow-xl rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-200">
                        <div class="p-4">
                            <a href="{{ route('combos') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">All
                                Combos</a>
                            <a href="{{ route('combos.kurti-sets') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Kurti
                                Sets</a>
                            <a href="{{ route('combos.ethnic-sets') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Ethnic
                                Sets</a>
                        </div>
                    </div>
                </div>

                <!-- Men Dropdown -->
                <div class="relative group">
                    <a href="{{ route('men') }}"
                        class="nav-link text-sm text-[#654321] hover:text-[#8B4513] transition-colors font-medium">Men</a>
                    <div
                        class="absolute top-full left-0 mt-2 w-64 bg-white shadow-xl rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-200">
                        <div class="p-4">
                            <a href="{{ route('men') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">All
                                Men</a>
                            <a href="{{ route('men.kurta') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Kurta</a>
                            <a href="{{ route('men.shirts') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Shirts</a>
                            <a href="{{ route('men.pants') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Pants</a>
                        </div>
                    </div>
                </div>

                <!-- Categories Dropdown -->
                <div class="relative group">
                    <a href="{{ route('categories') }}"
                        class="nav-link text-sm text-[#654321] hover:text-[#8B4513] transition-colors font-medium">Categories</a>
                    <div
                        class="absolute top-full left-0 mt-2 w-64 bg-white shadow-xl rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 border border-gray-200">
                        <div class="p-4">
                            <a href="{{ route('categories.gen-alpha') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Gen
                                Alpha</a>
                            <a href="{{ route('categories.gen-z') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Gen
                                Z</a>
                            <a href="{{ route('categories.minimal') }}"
                                class="block py-2 text-sm text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] px-3 rounded">Minimal</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('shop') }}"
                    class="nav-link text-sm text-[#654321] hover:text-[#8B4513] transition-colors font-medium">Shop</a>
                <a href="{{ route('blogs') }}"
                    class="nav-link text-sm text-[#654321] hover:text-[#8B4513] transition-colors font-medium">Blogs</a>
                <a href="{{ route('contact') }}"
                    class="nav-link text-sm text-[#654321] hover:text-[#8B4513] transition-colors font-medium">Contact</a>
            </div>

            <!-- Right Side: Icons -->
            <div class="flex items-center gap-3 sm:gap-4">
                <button id="search-toggle" type="button"
                    class="text-[#654321] hover:text-[#8B4513] focus:outline-none p-2 hover:bg-white/50 rounded-lg transition-all cursor-pointer">
                    <i class="fi fi-rr-search text-lg sm:text-xl"></i>
                </button>
                <a href="{{ route('wishlist') }}"
                    class="text-[#654321] hover:text-[#8B4513] focus:outline-none p-2 hover:bg-white/50 rounded-lg transition-all relative">
                    <i class="fi fi-rr-heart text-lg sm:text-xl"></i>
                    <span id="wishlist-count"
                        class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold hidden">0</span>
                </a>
                <button id="cart-toggle"
                    class="text-[#654321] hover:text-[#8B4513] focus:outline-none p-2 hover:bg-white/50 rounded-lg transition-all relative">
                    <i class="fi fi-rr-shopping-bag text-lg sm:text-xl"></i>
                    <span id="cart-count"
                        class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold">0</span>
                </button>
                <!-- User Icon with Dropdown -->
                <div class="relative group" id="user-dropdown-container">
                    <button id="user-icon-btn" type="button"
                        class="text-[#654321] hover:text-[#8B4513] focus:outline-none p-2 hover:bg-white/50 rounded-lg transition-all relative">
                        <i class="fi fi-rr-user text-lg sm:text-xl" id="user-icon-default"></i>
                        <div id="user-icon-letter" class="w-6 h-6 rounded-full bg-[#8B4513] text-white text-xs font-semibold flex items-center justify-center hidden"></div>
                        <img id="user-icon-image" src="" alt="User" class="w-6 h-6 rounded-full object-cover hidden">
                    </button>
                    <!-- User Dropdown Menu -->
                    <div id="user-dropdown" class="absolute right-0 top-full mt-2 w-64 bg-white rounded-lg shadow-2xl border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 hidden">
                        <div class="p-4 border-b border-gray-200">
                            <p class="font-semibold text-[#654321] text-lg" id="user-name">User</p>
                            <p class="text-sm text-blue-600" id="user-email">user@gmail.com</p>
                        </div>
                            <div class="py-2">
                                <a href="{{ route('account.dashboard') }}" class="flex items-center gap-3 px-4 py-2 text-[#654321] hover:bg-[#F5F1EB] transition-colors">
                                    <i class="fi fi-rr-apps text-lg"></i>
                                    <span>Dashboard</span>
                                </a>
                                <a href="{{ route('account') }}" class="flex items-center gap-3 px-4 py-2 text-[#654321] hover:bg-[#F5F1EB] transition-colors">
                                    <i class="fi fi-rr-user text-lg"></i>
                                    <span>My Profile</span>
                                </a>
                                <a href="{{ route('account.orders') }}" class="flex items-center gap-3 px-4 py-2 text-[#654321] hover:bg-[#F5F1EB] transition-colors">
                                    <i class="fi fi-rr-shopping-bag text-lg"></i>
                                    <span>My Orders</span>
                                </a>
                                <a href="{{ route('account.addresses') }}" class="flex items-center gap-3 px-4 py-2 text-[#654321] hover:bg-[#F5F1EB] transition-colors">
                                    <i class="fi fi-rr-marker text-lg"></i>
                                    <span>Update Address</span>
                                </a>
                                <button onclick="handleLogout()" class="w-full flex items-center gap-3 px-4 py-2 text-red-600 hover:bg-red-50 transition-colors border-t border-gray-200 mt-2 pt-2">
                                    <span>Logout</span>
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</header>

<!-- Mobile Left Side Menu -->
<div id="mobile-menu"
    class="fixed inset-y-0 left-0 w-80 bg-white shadow-2xl transform -translate-x-full transition-transform duration-300 ease-in-out z-[9999] flex flex-col lg:hidden">
    <!-- Fixed Header -->
    <div class="flex items-center justify-between p-6 border-b border-gray-200 flex-shrink-0">
        <h2 class="text-xl font-serif font-bold text-[#654321]">Aura kurti</h2>
        <button id="mobile-menu-close" class="text-gray-400 hover:text-[#8B4513] transition-colors">
            <i class="fi fi-rr-cross text-2xl"></i>
        </button>
    </div>

    <!-- Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-6">
        <!-- Navigation Links -->
        <div class="space-y-1">
            <a href="{{ route('home') }}"
                class="block py-3 px-4 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors font-medium {{ request()->routeIs('home') ? 'bg-[#F5F1EB] text-[#8B4513]' : '' }}">Home</a>
            <a href="{{ route('new-in') }}"
                class="block py-3 px-4 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors">New
                In</a>

            <!-- Women Section with Accordion -->
            <div class="mobile-menu-item">
                <div class="flex items-center justify-between">
                    <a href="{{ route('women') }}"
                        class="flex-1 py-3 px-4 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors font-semibold {{ request()->routeIs('women*') ? 'bg-[#F5F1EB] text-[#8B4513]' : '' }}">Women</a>
                    <button
                        class="mobile-submenu-toggle p-3 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors">
                        <i class="fi fi-rr-angle-small-down text-sm transition-transform duration-300"></i>
                    </button>
                </div>
                <div class="mobile-menu-submenu hidden pl-4 mt-1 space-y-1">
                    <a href="{{ route('women') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">All
                        Women</a>
                    <!-- Kurtis with nested submenu -->
                    <div class="mobile-menu-item-nested">
                        <div class="flex items-center justify-between">
                            <a href="{{ route('women.kurti') }}"
                                class="flex-1 py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors font-medium">Kurtis</a>
                            <button class="mobile-submenu-toggle-nested p-2 text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">
                                <i class="fi fi-rr-angle-small-down text-xs transition-transform duration-300"></i>
                            </button>
                        </div>
                        <div class="mobile-menu-submenu-nested hidden pl-4 mt-1 space-y-1">
                            <a href="{{ route('kurtis') }}"
                                class="block py-1.5 px-4 text-xs text-gray-500 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">All Kurtis</a>
                            <a href="{{ route('kurtis.anarkali') }}"
                                class="block py-1.5 px-4 text-xs text-gray-500 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Anarkali</a>
                            <a href="{{ route('kurtis.straight') }}"
                                class="block py-1.5 px-4 text-xs text-gray-500 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Straight Cut</a>
                            <a href="{{ route('kurtis.a-line') }}"
                                class="block py-1.5 px-4 text-xs text-gray-500 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">A-Line</a>
                            <a href="{{ route('kurtis.printed') }}"
                                class="block py-1.5 px-4 text-xs text-gray-500 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Printed</a>
                        </div>
                    </div>
                    <a href="{{ route('women.tops') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Tops</a>
                    <a href="{{ route('women.dresses') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Dresses</a>
                    <a href="{{ route('women.bottoms') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Bottoms</a>
                </div>
            </div>

            <!-- Kurtis Section with Accordion -->
            <div class="mobile-menu-item">
                <div class="flex items-center justify-between">
                    <a href="{{ route('kurtis') }}"
                        class="flex-1 py-3 px-4 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors font-semibold">Kurtis</a>
                    <button
                        class="mobile-submenu-toggle p-3 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors">
                        <i class="fi fi-rr-angle-small-down text-sm transition-transform duration-300"></i>
                    </button>
                </div>
                <div class="mobile-menu-submenu hidden pl-4 mt-1 space-y-1">
                    <a href="{{ route('kurtis') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">All
                        Kurtis</a>
                    <a href="{{ route('kurtis.anarkali') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Anarkali</a>
                    <a href="{{ route('kurtis.straight') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Straight
                        Cut</a>
                    <a href="{{ route('kurtis.a-line') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">A-Line</a>
                    <a href="{{ route('kurtis.printed') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Printed</a>
                </div>
            </div>

            <!-- Combos Section with Accordion -->
            <div class="mobile-menu-item">
                <div class="flex items-center justify-between">
                    <a href="{{ route('combos') }}"
                        class="flex-1 py-3 px-4 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors font-semibold">Combos</a>
                    <button
                        class="mobile-submenu-toggle p-3 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors">
                        <i class="fi fi-rr-angle-small-down text-sm transition-transform duration-300"></i>
                    </button>
                </div>
                <div class="mobile-menu-submenu hidden pl-4 mt-1 space-y-1">
                    <a href="{{ route('combos') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">All
                        Combos</a>
                    <a href="{{ route('combos.kurti-sets') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Kurti
                        Sets</a>
                    <a href="{{ route('combos.ethnic-sets') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Ethnic
                        Sets</a>
                </div>
            </div>

            <!-- Men Section with Accordion -->
            <div class="mobile-menu-item">
                <div class="flex items-center justify-between">
                    <a href="{{ route('men') }}"
                        class="flex-1 py-3 px-4 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors font-semibold">Men</a>
                    <button
                        class="mobile-submenu-toggle p-3 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors">
                        <i class="fi fi-rr-angle-small-down text-sm transition-transform duration-300"></i>
                    </button>
                </div>
                <div class="mobile-menu-submenu hidden pl-4 mt-1 space-y-1">
                    <a href="{{ route('men') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">All
                        Men</a>
                    <a href="{{ route('men.kurta') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Kurta</a>
                    <a href="{{ route('men.shirts') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Shirts</a>
                    <a href="{{ route('men.pants') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Pants</a>
                </div>
            </div>

            <!-- Categories Section with Accordion -->
            <div class="mobile-menu-item">
                <div class="flex items-center justify-between">
                    <a href="{{ route('categories') }}"
                        class="flex-1 py-3 px-4 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors font-semibold">Categories</a>
                    <button
                        class="mobile-submenu-toggle p-3 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors">
                        <i class="fi fi-rr-angle-small-down text-sm transition-transform duration-300"></i>
                    </button>
                </div>
                <div class="mobile-menu-submenu hidden pl-4 mt-1 space-y-1">
                    <a href="{{ route('categories.gen-alpha') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Gen
                        Alpha</a>
                    <a href="{{ route('categories.gen-z') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Gen
                        Z</a>
                    <a href="{{ route('categories.minimal') }}"
                        class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded transition-colors">Minimal</a>
                </div>
            </div>

            <a href="{{ route('shop') }}"
                class="block py-3 px-4 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors">Shop</a>
            <a href="{{ route('blogs') }}"
                class="block py-3 px-4 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors">Blogs</a>
            <a href="{{ route('contact') }}"
                class="block py-3 px-4 text-[#654321] hover:text-[#8B4513] hover:bg-[#F5F1EB] rounded-lg transition-colors">Contact</a>
        </div>

        <!-- Footer Links -->
        <div class="mt-8 pt-6 border-t border-gray-200 space-y-2">
            <a href="{{ route('about-us') }}"
                class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] transition-colors">About Us</a>
            <a href="{{ route('size-guide') }}"
                class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] transition-colors">Size Guide</a>
            <a href="{{ route('returns') }}"
                class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] transition-colors">Returns</a>
            <a href="{{ route('faq') }}"
                class="block py-2 px-4 text-sm text-gray-600 hover:text-[#8B4513] transition-colors">FAQ</a>
        </div>
    </div>
</div>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[9998] hidden lg:hidden"></div>

<!-- Right Side Search Panel -->
<div id="search-panel"
    class="fixed inset-y-0 right-0 w-full sm:w-96 lg:w-[500px] bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-[9999] flex flex-col">
    <!-- Header - Fixed -->
    <div class="p-6 border-b border-gray-200 flex-shrink-0">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-serif font-bold text-[#654321]">Search Products</h2>
            <button id="search-panel-close" class="text-gray-400 hover:text-[#8B4513] transition-colors">
                <i class="fi fi-rr-cross text-2xl"></i>
            </button>
        </div>
    </div>

    <!-- Content - Scrollable -->
    <div class="flex-1 overflow-y-auto p-6">
        <!-- Search Input - Fixed at top -->
        <div class="mb-6 relative sticky top-0 bg-white z-10 pb-2 -mt-6 pt-6">
            <div class="flex gap-2">
                <input type="text" id="search-panel-input" placeholder="Search products..."
                    class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                <button id="search-button" type="button"
                    class="px-6 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-medium">
                    <i class="fi fi-rr-search"></i>
                </button>
            </div>
            <!-- Search Suggestions -->
            <div id="search-suggestions" class="absolute top-full left-0 right-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg z-50 hidden max-h-96 overflow-y-auto">
                <div id="suggestions-list" class="py-2">
                    <!-- Suggestions will be populated here -->
                </div>
            </div>
        </div>

        <!-- Category Cards -->
        <div id="search-categories" class="mb-6">
            <h3 class="text-lg font-semibold text-[#654321] mb-4">Browse Categories</h3>
            <div class="grid grid-cols-3 gap-4">
                <!-- Gen Alpha Card -->
                <a href="{{ route('categories.gen-alpha') }}" class="category-card group cursor-pointer">
                    <div
                        class="w-full h-24 sm:h-32 bg-gradient-to-br from-orange-200 to-orange-300 rounded-full mb-3 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=200&h=200&fit=crop"
                            alt="Gen Alpha"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <p
                        class="text-center text-sm font-medium text-[#654321] group-hover:text-[#8B4513] transition-colors">
                        Gen Alpha</p>
                </a>

                <!-- Gen Z Card -->
                <a href="{{ route('categories.gen-z') }}" class="category-card group cursor-pointer">
                    <div
                        class="w-full h-24 sm:h-32 bg-gradient-to-br from-purple-200 to-pink-300 rounded-full mb-3 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=200&h=200&fit=crop"
                            alt="Gen Z"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <p
                        class="text-center text-sm font-medium text-[#654321] group-hover:text-[#8B4513] transition-colors">
                        Gen Z</p>
                </a>

                <!-- Minimal Card -->
                <a href="{{ route('categories.minimal') }}" class="category-card group cursor-pointer">
                    <div
                        class="w-full h-24 sm:h-32 bg-gradient-to-br from-pink-200 to-peach-300 rounded-full mb-3 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=200&h=200&fit=crop"
                            alt="Minimal"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <p
                        class="text-center text-sm font-medium text-[#654321] group-hover:text-[#8B4513] transition-colors">
                        Minimal</p>
                </a>
            </div>
        </div>

        <!-- Search Results - Scrollable -->
        <div id="search-panel-results" class="hidden">
            <h3 class="text-lg font-semibold text-[#654321] mb-4">Search Results</h3>
            <div class="space-y-3" id="search-results-list"></div>
        </div>
    </div>
</div>

<!-- User/Login Modal (for non-logged in users) -->
@guest
<div id="user-modal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-md transform transition-all relative">
        <button id="user-close"
            class="absolute top-4 right-4 text-gray-400 hover:text-[#8B4513] transition-colors z-10">
            <i class="fi fi-rr-cross text-xl"></i>
        </button>
        <div class="p-8">
            <div class="text-center mb-6">
                <div class="w-20 h-20 bg-[#8B4513] rounded-full mx-auto mb-4 flex items-center justify-center">
                    <i class="fi fi-rr-user text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-serif font-bold text-[#654321] mb-2">Welcome Back!</h3>
                <p class="text-gray-600">Sign in to your account</p>
            </div>
            <form action="{{ route('login') }}" method="GET" class="space-y-4">
                <a href="{{ route('login') }}"
                    class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all block text-center">Sign
                    In</a>
                <p class="text-sm text-gray-600 text-center">Don't have an account? <a href="{{ route('register') }}"
                        class="text-[#8B4513] font-semibold hover:underline">Sign Up</a></p>
            </form>
        </div>
    </div>
</div>
@endguest

<!-- Cart Sidebar -->
<div id="cart-sidebar"
    class="fixed inset-y-0 right-0 w-full sm:w-96 bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-[9999] flex flex-col">
    <div class="p-6 border-b border-gray-200 flex-shrink-0">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-serif font-bold text-[#654321]">Shopping Cart</h2>
            <button id="cart-close" class="text-gray-400 hover:text-[#8B4513] transition-colors">
                <i class="fi fi-rr-cross text-2xl"></i>
            </button>
        </div>
    </div>
    <div class="flex-1 overflow-y-auto p-6">
        <div id="cart-items" class="space-y-4">
            <div class="text-center py-12">
                <i class="fi fi-rr-shopping-bag text-6xl text-gray-300 mb-4"></i>
                <p class="text-gray-500">Your cart is empty</p>
            </div>
        </div>
    </div>
    <div class="border-t border-gray-200 pt-4 pb-4 px-6 bg-white flex-shrink-0">
        <div class="flex justify-between mb-4">
            <span class="text-lg font-semibold text-[#654321]">Total:</span>
            <span id="cart-total" class="text-xl font-bold text-[#8B4513]">₹0</span>
        </div>
        <button onclick="handleCheckout()"
            class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all">Checkout</button>
    </div>
</div>
