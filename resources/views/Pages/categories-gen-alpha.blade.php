@extends('layouts.app')

@section('title', 'Gen Alpha Collection - AURA KURTIS')

@section('content')

@php
// Get products from MockData - specifically gen alpha
$allProducts = \App\Helpers\MockData::getHomepageProducts();
$genAlphaProducts = $allProducts['gen_alpha'] ?? [];
$bestsellers = $allProducts['bestsellers'] ?? [];

// If no specific gen alpha, use all products and filter
if (empty($genAlphaProducts)) {
    $genAlphaProducts = collect($allProducts)->flatten(1)->toArray();
}

// Add hover images and assign to gen alpha
$productsWithHover = [];
foreach ($genAlphaProducts as $index => $product) {
    $nextIndex = ($index + 1) % count($genAlphaProducts);
    $product['hover_image'] = $genAlphaProducts[$nextIndex]['image'] ?? $product['image'];
    $product['color'] = ['Red', 'Blue', 'Black', 'Pink', 'Green', 'Yellow', 'White', 'Orange'][$index % 8] ?? 'Red';
    $product['size'] = ['S', 'M', 'L', 'XL', 'XXL'][$index % 5] ?? 'M';
    $product['category'] = 'Gen Alpha';
    $product['subcategory'] = 'Gen Alpha';
    $productsWithHover[] = $product;
}
$products = $productsWithHover;

// Subcategories for Gen Alpha
$subcategories = ['All', 'Men', 'Women', 'Kids', 'Unisex'];
@endphp

<!-- ================= HERO SECTION ================= -->
<section class="relative h-[300px] sm:h-[400px] lg:h-[500px] overflow-hidden">
    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=1920"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative container mx-auto px-4 sm:px-6 h-full flex items-center justify-center text-center">
        <div class="text-white max-w-3xl">
            <span class="inline-block mb-4 px-4 sm:px-5 py-1.5 sm:py-2 text-xs sm:text-sm tracking-widest bg-white/20 rounded-full">
                GEN ALPHA COLLECTION
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
                Gen Alpha Collection
            </h1>
            <p class="mt-4 text-sm sm:text-base text-gray-200 max-w-2xl mx-auto">
                Trend-driven fashion for the next generation — Men, Women & Kids
            </p>
        </div>
    </div>
</section>

<!-- ================= SUB CATEGORIES ================= -->
<section class="py-4 sm:py-6 border-b bg-white sticky top-0 z-40">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap gap-2 sm:gap-3 justify-center lg:justify-start overflow-x-auto scrollbar-hide pb-2">
            @foreach($subcategories as $subcat)
            <button onclick="filterBySubcategory('{{ $subcat }}')" 
                class="subcategory-btn px-4 sm:px-5 py-2 rounded-full text-xs sm:text-sm font-medium transition-all whitespace-nowrap {{ $subcat === 'All' ? 'bg-[#654321] text-white' : 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-100' }}">
                {{ $subcat }}
            </button>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= MAIN ================= -->
<section class="py-8 sm:py-12 lg:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 lg:gap-8">
            
            <!-- ================= FILTER SIDEBAR ================= -->
            <aside class="lg:col-span-1">
                <!-- Mobile Filter Toggle and Sort -->
                <div class="lg:hidden mb-4 flex gap-2">
                    <button type="button" onclick="toggleMobileFilters()" 
                        class="flex-1 flex items-center justify-between bg-white border border-gray-200 rounded-lg p-2 text-xs font-semibold text-black">
                        <span>Filters</span>
                        <i class="fi fi-rr-angle-small-down" id="filter-toggle-icon"></i>
                    </button>
                    <div class="flex-1">
                        <select id="sort-select-mobile" class="w-full px-3 py-2 border border-gray-200 rounded-lg text-xs focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none bg-white">
                            <option value="popularity">Sort by Popularity</option>
                            <option value="price_low">Price: Low to High</option>
                            <option value="price_high">Price: High to Low</option>
                            <option value="newest">Newest First</option>
                        </select>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg p-2 sm:p-3 lg:p-6 space-y-3 sm:space-y-4 lg:space-y-6 sticky top-24 hidden lg:block" id="filter-sidebar" data-mobile-hidden="true">
                    <div class="flex items-center justify-between mb-1 sm:mb-2 lg:mb-4">
                        <h3 class="text-xs sm:text-sm lg:text-xl font-bold text-black">Filters</h3>
                        <button type="button" onclick="clearAllFilters()" id="clear-all-btn" class="text-[10px] sm:text-xs text-[#8B4513] hover:underline font-semibold" style="display: none;">Clear All</button>
                    </div>

                    <!-- COLOR -->
                    <div class="bg-white border border-gray-200 rounded-lg p-2 sm:p-3 lg:p-4">
                        <h4 class="font-semibold text-black mb-1 sm:mb-2 lg:mb-3 text-[10px] sm:text-xs lg:text-base">Color</h4>
                        <div class="flex flex-wrap gap-1.5 sm:gap-2">
                            @php
                            $colors = ['Red', 'Blue', 'Black', 'Pink', 'Green', 'Yellow', 'White', 'Orange'];
                            @endphp
                            @foreach($colors as $color)
                            <label class="cursor-pointer">
                                <input type="checkbox" name="color[]" value="{{ $color }}"
                                    class="hidden auto-apply-filter color-checkbox">
                                <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 border-gray-300 hover:scale-110 transition-transform
                                    {{ strtolower($color) === 'red' ? 'bg-red-500' : '' }}
                                    {{ strtolower($color) === 'blue' ? 'bg-blue-500' : '' }}
                                    {{ strtolower($color) === 'black' ? 'bg-black' : '' }}
                                    {{ strtolower($color) === 'pink' ? 'bg-pink-500' : '' }}
                                    {{ strtolower($color) === 'green' ? 'bg-green-500' : '' }}
                                    {{ strtolower($color) === 'yellow' ? 'bg-yellow-400' : '' }}
                                    {{ strtolower($color) === 'white' ? 'bg-white' : '' }}
                                    {{ strtolower($color) === 'orange' ? 'bg-orange-500' : '' }}" title="{{ $color }}">
                                </div>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- SIZE -->
                    <div class="bg-white border border-gray-200 rounded-lg p-2 sm:p-3 lg:p-4">
                        <h4 class="font-semibold text-black mb-1 sm:mb-2 lg:mb-3 text-[10px] sm:text-xs lg:text-base">Size</h4>
                        <div class="flex flex-wrap gap-1.5 sm:gap-2">
                            @php
                            $sizes = ['S', 'M', 'L', 'XL', 'XXL'];
                            @endphp
                            @foreach($sizes as $size)
                            <label class="cursor-pointer">
                                <input type="checkbox" name="size[]" value="{{ $size }}"
                                    class="hidden auto-apply-filter size-checkbox">
                                <div class="px-2 py-1 sm:px-3 sm:py-1.5 lg:px-4 lg:py-2 border rounded-lg text-[10px] sm:text-xs lg:text-sm font-medium transition-all bg-white text-gray-700 border-gray-300 hover:border-[#8B4513]">
                                    {{ $size }}
                                </div>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- PRICE -->
                    <div class="bg-white border border-gray-200 rounded-lg p-2 sm:p-3 lg:p-4">
                        <h4 class="font-semibold text-black mb-1 sm:mb-2 lg:mb-3 text-[10px] sm:text-xs lg:text-base">Price</h4>
                        <div class="space-y-2 sm:space-y-3">
                            <input type="range" name="price" min="500" max="5000" value="5000" step="100"
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer price-slider" 
                                style="background: linear-gradient(to right, #8B4513 0%, #8B4513 100%, #e5e7eb 100%, #e5e7eb 100%);">
                            <div class="flex justify-between text-[10px] sm:text-xs text-gray-500">
                                <span>₹500</span>
                                <span class="font-semibold text-[#8B4513]" id="priceValue">₹5,000</span>
                                <span>₹5000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- ================= PRODUCTS GRID ================= -->
            <div class="lg:col-span-3">
                <!-- Header -->
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
                    <div>
                        <p class="text-sm sm:text-base text-gray-600">Showing <span class="font-semibold text-black" id="product-count">{{ count($products) }}</span> products</p>
                        <div class="flex items-center gap-2 mt-2 flex-wrap" id="applied-filters" style="display: none;">
                            <span class="text-xs sm:text-sm text-gray-600">Applied Filters:</span>
                            <div id="filter-tags"></div>
                            <button type="button" onclick="clearAllFilters()" class="text-xs text-[#8B4513] hover:underline font-semibold">Clear All</button>
                        </div>
                    </div>
                    <div class="hidden lg:block">
                        <select id="sort-select" class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none">
                            <option value="popularity">Sort by Popularity</option>
                            <option value="price_low">Price: Low to High</option>
                            <option value="price_high">Price: High to Low</option>
                            <option value="newest">Newest First</option>
                        </select>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 lg:gap-6" id="products-grid">
                
                <!-- No Products Message -->
                <div id="no-products-message" class="col-span-full hidden">
                    <div class="flex flex-col items-center justify-center py-12 sm:py-16 lg:py-20 bg-gradient-to-b from-gray-50 to-white rounded-xl border border-gray-200">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 lg:w-28 lg:h-28 mb-4 sm:mb-6">
                            <svg class="w-full h-full text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg sm:text-xl lg:text-2xl font-bold text-black mb-2 sm:mb-3">No Products Found</h3>
                        <p class="text-xs sm:text-sm text-gray-600 text-center max-w-sm mb-4 sm:mb-6 px-4">
                            We couldn't find any products matching your criteria.
                        </p>
                        <button onclick="clearAllFilters()" class="px-5 py-2.5 sm:px-6 sm:py-3 bg-[#8B4513] text-white rounded-lg font-semibold hover:bg-[#654321] transition-colors text-xs sm:text-sm shadow-md hover:shadow-lg">
                            Clear All Filters
                        </button>
                    </div>
                </div>
                    @foreach($products as $product)
                    <div class="group cursor-pointer block product-card relative filterable-product" 
                         data-category="{{ $product['category'] ?? '' }}"
                         data-color="{{ $product['color'] ?? '' }}"
                         data-size="{{ $product['size'] ?? '' }}"
                         data-price="{{ $product['price'] }}"
                         data-name="{{ $product['name'] }}"
                         data-id="{{ $product['id'] }}"
                         data-image="{{ $product['image'] }}"
                         data-hover-image="{{ $product['hover_image'] ?? $product['image'] }}"
                         data-badge="{{ $product['badge'] ?? '' }}"
                         data-badge-color="{{ $product['badge_color'] ?? '' }}"
                         data-description="{{ $product['description'] ?? '' }}"
                         data-original-price="{{ $product['original_price'] ?? '' }}">
                        <a href="{{ route('product.detail', ['id' => $product['id']]) }}">
                            <div class="relative overflow-hidden mb-2 sm:mb-3 md:mb-4 rounded-lg bg-white">
                                <div class="relative w-full aspect-square overflow-hidden">
                                    <!-- Default Image -->
                                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                                        class="absolute inset-0 w-full h-full object-cover object-center transition-opacity duration-500 group-hover:opacity-0">
                                    <!-- Hover Image -->
                                    <img src="{{ $product['hover_image'] ?? $product['image'] }}" alt="{{ $product['name'] }}"
                                        class="absolute inset-0 w-full h-full object-cover object-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                                </div>

                                @if(isset($product['badge']) && $product['badge'])
                                    <span class="absolute top-2 left-2 sm:top-3 sm:left-3 text-white px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-[10px] sm:text-xs font-semibold {{ $product['badge_color'] === 'red' ? 'bg-red-500' : ($product['badge_color'] === 'yellow' ? 'bg-yellow-500' : ($product['badge_color'] === 'green' ? 'bg-green-500' : ($product['badge_color'] === 'purple' ? 'bg-purple-500' : ($product['badge_color'] === 'pink' ? 'bg-pink-500' : ($product['badge_color'] === 'blue' ? 'bg-blue-500' : ($product['badge_color'] === 'orange' ? 'bg-orange-500' : 'bg-gray-500')))))) }}">
                                        {{ $product['badge'] }}
                                    </span>
                                @endif

                                <!-- Action Icons - Right Side -->
                                <div class="absolute top-2 right-2 sm:top-3 sm:right-3 flex flex-col gap-2 opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 z-20">
                                    <button type="button" 
                                        data-wishlist-id="{{ $product['id'] }}"
                                        class="wishlist-btn w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-white text-[#654321] flex items-center justify-center shadow-md hover:bg-[#654321] hover:text-white transition z-30">
                                        <i class="fi fi-rr-heart text-xs sm:text-sm"></i>
                                    </button>
                                    <a href="{{ route('product.detail', ['id' => $product['id']]) }}"
                                        class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-white text-[#654321] flex items-center justify-center shadow-md hover:bg-[#654321] hover:text-white transition z-30">
                                        <i class="fi fi-rr-eye text-xs sm:text-sm"></i>
                                    </a>
                                    <button type="button"
                                        class="action-cart w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-white text-[#654321] flex items-center justify-center shadow-md hover:bg-[#654321] hover:text-white transition z-30"
                                        data-product-id="{{ $product['id'] }}" 
                                        data-product-name="{{ $product['name'] }}"
                                        data-product-price="{{ $product['price'] }}"
                                        data-product-image="{{ $product['image'] }}">
                                        <i class="fi fi-rr-shopping-bag text-xs sm:text-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </a>
                        
                        <div class="px-1">
                            <a href="{{ route('product.detail', ['id' => $product['id']]) }}">
                                <h3 class="text-sm sm:text-base font-medium text-black mb-1 sm:mb-2 line-clamp-2 hover:text-[#8B4513] transition-colors">
                                    {{ $product['name'] }}
                                </h3>
                            </a>
                            @if(isset($product['description']))
                                <p class="text-xs text-gray-500 mb-1 line-clamp-1">{{ $product['description'] }}</p>
                            @endif
                            <p class="text-sm sm:text-base text-[#8B4513] font-semibold">
                                ₹{{ number_format($product['price']) }}
                                @if(isset($product['original_price']) && $product['original_price'])
                                    <span class="text-xs text-gray-400 line-through ml-2">₹{{ number_format($product['original_price']) }}</span>
                                @endif
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div id="pagination-container" class="flex justify-center items-center gap-2 mt-6 sm:mt-8 lg:mt-12 flex-wrap"></div>
            </div>
        </div>
    </div>
</section>

<!-- Our Bestsellers Carousel with Auto-Slide -->
<x-product-carousel id="bestsellers" title="OUR BESTSELLERS" :products="$bestsellers" />

@push('scripts')
<script>
// Mobile filter toggle - defined globally
window.toggleMobileFilters = function() {
    const sidebar = document.getElementById('filter-sidebar');
    const icon = document.getElementById('filter-toggle-icon');
    
    if (!sidebar) return;
    
    const isHidden = sidebar.getAttribute('data-mobile-hidden') === 'true';
    
    if (isHidden) {
        sidebar.classList.remove('hidden');
        sidebar.classList.add('block');
        sidebar.style.display = 'block';
        sidebar.setAttribute('data-mobile-hidden', 'false');
        if (icon) {
            icon.classList.remove('fi-rr-angle-small-down');
            icon.classList.add('fi-rr-angle-small-up');
        }
    } else {
        sidebar.classList.add('hidden');
        sidebar.classList.remove('block');
        sidebar.style.display = 'none';
        sidebar.setAttribute('data-mobile-hidden', 'true');
        if (icon) {
            icon.classList.remove('fi-rr-angle-small-up');
            icon.classList.add('fi-rr-angle-small-down');
        }
    }
};

document.addEventListener('DOMContentLoaded', function() {
    // Get all products
    const allProducts = Array.from(document.querySelectorAll('.filterable-product'));
    let selectedColors = [];
    let selectedSizes = [];
    let maxPrice = 5000;
    let currentPage = 1;
    let currentSubcategory = 'All';
    const productsPerPage = 12;

    // Filter by subcategory
    window.filterBySubcategory = function(subcategory) {
        currentSubcategory = subcategory;
        
        // Update button states
        document.querySelectorAll('.subcategory-btn').forEach(btn => {
            if (btn.textContent.trim() === subcategory) {
                btn.classList.add('bg-[#654321]', 'text-white');
                btn.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-700');
            } else {
                btn.classList.remove('bg-[#654321]', 'text-white');
                btn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-700');
            }
        });
        
        applyFilters();
    };

    // Client-side filter function
    function applyFilters() {
        selectedColors = Array.from(document.querySelectorAll('.auto-apply-filter[name="color[]"]:checked')).map(cb => cb.value);
        selectedSizes = Array.from(document.querySelectorAll('.auto-apply-filter[name="size[]"]:checked')).map(cb => cb.value);
        
        const priceSlider = document.getElementById('price-slider');
        if (priceSlider) {
            maxPrice = parseInt(priceSlider.value);
        }

        let visibleProducts = [];
        allProducts.forEach(product => {
            const color = product.getAttribute('data-color') || '';
            const size = product.getAttribute('data-size') || '';
            const price = parseInt(product.getAttribute('data-price') || 0);

            let show = true;
            if (selectedColors.length > 0 && !selectedColors.includes(color)) show = false;
            if (selectedSizes.length > 0 && !selectedSizes.includes(size)) show = false;
            if (price > maxPrice) show = false;

            if (show) visibleProducts.push(product);
        });

        const productGrid = document.getElementById('products-grid');
        if (productGrid) {
            productGrid.innerHTML = '';
        }

        const noProductsMsg = document.getElementById('no-products-message');
        if (visibleProducts.length === 0) {
            if (noProductsMsg) noProductsMsg.classList.remove('hidden');
            document.getElementById('product-count').textContent = 0;
        } else {
            if (noProductsMsg) noProductsMsg.classList.add('hidden');
        }

        currentPage = 1;
        updatePagination(visibleProducts);
        displayProducts(visibleProducts);
        document.getElementById('product-count').textContent = visibleProducts.length;
        updateAppliedFilters();
    }

    function displayProducts(visibleProducts) {
        const start = (currentPage - 1) * productsPerPage;
        const end = start + productsPerPage;
        const pageProducts = visibleProducts.slice(start, end);

        const productGrid = document.getElementById('products-grid');
        if (productGrid) {
            productGrid.innerHTML = '';
            if (pageProducts.length === 0) {
                document.getElementById('no-products-message').classList.remove('hidden');
            } else {
                document.getElementById('no-products-message').classList.add('hidden');
                pageProducts.forEach(product => productGrid.appendChild(product.cloneNode(true)));
            }
        }
        
        // Re-initialize cart/wishlist buttons for newly displayed products
        window.cartManager.initCartButtons();
        window.wishlistManager.initWishlistButtons();
    }

    function updatePagination(visibleProducts) {
        const totalPages = Math.ceil(visibleProducts.length / productsPerPage);
        const paginationContainer = document.getElementById('pagination-container');
        
        if (!paginationContainer) return;
        
        if (visibleProducts.length <= productsPerPage || totalPages <= 1) {
            paginationContainer.innerHTML = '';
            return;
        }

        let paginationHTML = '';
        if (currentPage > 1) {
            paginationHTML += `<button onclick="changePage(${currentPage - 1})" class="px-2 py-1 sm:px-3 sm:py-1.5 border border-gray-300 rounded-lg text-[10px] sm:text-xs text-gray-700 hover:bg-[#F5F1EB] transition-colors">← Prev</button>`;
        }

        const maxVisiblePages = window.innerWidth < 640 ? 5 : 7;
        const startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
        const endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
        
        if (startPage > 1) {
            paginationHTML += `<button onclick="changePage(1)" class="px-2 py-1 sm:px-3 sm:py-1.5 rounded-lg border border-gray-300 text-[10px] sm:text-xs text-gray-700 hover:bg-[#F5F1EB] transition-colors">1</button>`;
            if (startPage > 2) paginationHTML += `<span class="px-1 sm:px-2 text-gray-500 text-xs">...</span>`;
        }
        
        for (let i = startPage; i <= endPage; i++) {
            paginationHTML += `<button onclick="changePage(${i})" class="px-2 py-1 sm:px-3 sm:py-1.5 rounded-lg border border-gray-300 text-[10px] sm:text-xs ${i === currentPage ? 'bg-[#8B4513] text-white border-[#8B4513]' : 'text-gray-700 hover:bg-[#F5F1EB]'} transition-colors">${i}</button>`;
        }
        
        if (endPage < totalPages) {
            if (endPage < totalPages - 1) paginationHTML += `<span class="px-1 sm:px-2 text-gray-500 text-xs">...</span>`;
            paginationHTML += `<button onclick="changePage(${totalPages})" class="px-2 py-1 sm:px-3 sm:py-1.5 rounded-lg border border-gray-300 text-[10px] sm:text-xs text-gray-700 hover:bg-[#F5F1EB] transition-colors">${totalPages}</button>`;
        }

        if (currentPage < totalPages) {
            paginationHTML += `<button onclick="changePage(${currentPage + 1})" class="px-2 py-1 sm:px-3 sm:py-1.5 border border-gray-300 rounded-lg text-[10px] sm:text-xs text-gray-700 hover:bg-[#F5F1EB] transition-colors">Next →</button>`;
        }
        paginationContainer.innerHTML = paginationHTML;
    }

    window.changePage = function(page) {
        currentPage = page;
        const visibleProducts = allProducts.filter(p => p.style.display !== 'none');
        displayProducts(visibleProducts);
        updatePagination(visibleProducts);
        window.scrollTo({ top: document.getElementById('products-grid').offsetTop - 100, behavior: 'smooth' });
    };

    function updateAppliedFilters() {
        const appliedFiltersContainer = document.getElementById('applied-filters');
        if (!appliedFiltersContainer) return;

        let tagsHTML = '';
        [...selectedColors, ...selectedSizes].forEach(filterValue => {
            tagsHTML += `
                <span class="flex items-center bg-[#F5F1EB] text-[#8B4513] text-xs px-3 py-1 rounded-full">
                    ${filterValue}
                    <button type="button" class="ml-1 text-[#8B4513] hover:text-[#654321] remove-filter-tag" data-value="${filterValue}">&times;</button>
                </span>
            `;
        });
        if (maxPrice < 5000) {
            tagsHTML += `
                <span class="flex items-center bg-[#F5F1EB] text-[#8B4513] text-xs px-3 py-1 rounded-full">
                    Max Price: ₹${maxPrice.toLocaleString()}
                    <button type="button" class="ml-1 text-[#8B4513] hover:text-[#654321] remove-filter-tag" data-value="max_price">&times;</button>
                </span>
            `;
        }
        appliedFiltersContainer.innerHTML = tagsHTML;

        if (tagsHTML) {
            appliedFiltersContainer.style.display = 'flex';
            document.getElementById('clear-all-btn').style.display = 'block';
        } else {
            appliedFiltersContainer.style.display = 'none';
            document.getElementById('clear-all-btn').style.display = 'none';
        }

        document.querySelectorAll('.remove-filter-tag').forEach(button => {
            button.addEventListener('click', function() {
                const valueToRemove = this.getAttribute('data-value');
                if (valueToRemove === 'max_price') {
                    const priceSlider = document.getElementById('price-slider');
                    if (priceSlider) {
                        priceSlider.value = 5000;
                        document.getElementById('priceValue').textContent = '₹5,000';
                        updatePriceSlider();
                    }
                } else {
                    const checkbox = document.querySelector(`.auto-apply-filter[value="${valueToRemove}"]`);
                    if (checkbox) {
                        checkbox.checked = false;
                        // For color checkboxes, remove active style
                        if (checkbox.type === 'checkbox' && checkbox.closest('label').querySelector('div[style*="background"]')) {
                            const label = checkbox.closest('label');
                            label.querySelector('div').classList.remove('border-[#8B4513]', 'ring-2', 'ring-[#8B4513]', 'ring-offset-1');
                            label.querySelector('div').classList.add('border-gray-300');
                        }
                        // For size checkboxes, remove active style
                        if (checkbox.closest('label').querySelector('div:not([style*="background"])')) {
                            const label = checkbox.closest('label');
                            label.querySelector('div').classList.remove('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
                            label.querySelector('div').classList.add('bg-white', 'text-gray-700', 'border-gray-300');
                        }
                    }
                }
                applyFilters();
            });
        });
    }

    // Event Listeners for filters
    document.querySelectorAll('.auto-apply-filter').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // For color checkboxes, toggle active style
            const label = this.closest('label');
            const colorDiv = label.querySelector('div[style*="background"], div.bg-red-500, div.bg-blue-500, div.bg-black, div.bg-pink-500, div.bg-green-500, div.bg-yellow-400, div.bg-white, div.bg-orange-500');
            if (colorDiv) {
                if (this.checked) {
                    colorDiv.classList.add('border-[#8B4513]', 'ring-2', 'ring-[#8B4513]', 'ring-offset-1');
                    colorDiv.classList.remove('border-gray-300');
                } else {
                    colorDiv.classList.remove('border-[#8B4513]', 'ring-2', 'ring-[#8B4513]', 'ring-offset-1');
                    colorDiv.classList.add('border-gray-300');
                }
            }
            // For size checkboxes, toggle active style
            const sizeDiv = label.querySelector('div:not([style*="background"]):not(.bg-red-500):not(.bg-blue-500):not(.bg-black):not(.bg-pink-500):not(.bg-green-500):not(.bg-yellow-400):not(.bg-white):not(.bg-orange-500)');
            if (sizeDiv && !colorDiv) {
                if (this.checked) {
                    sizeDiv.classList.add('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
                    sizeDiv.classList.remove('bg-white', 'text-gray-700', 'border-gray-300');
                } else {
                    sizeDiv.classList.remove('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
                    sizeDiv.classList.add('bg-white', 'text-gray-700', 'border-gray-300');
                }
            }
            applyFilters();
        });
    });

    window.clearAllFilters = function() {
        document.querySelectorAll('.auto-apply-filter').forEach(checkbox => {
            checkbox.checked = false;
            // Reset color styles
            const label = checkbox.closest('label');
            const colorDiv = label.querySelector('div[style*="background"], div.bg-red-500, div.bg-blue-500, div.bg-black, div.bg-pink-500, div.bg-green-500, div.bg-yellow-400, div.bg-white, div.bg-orange-500');
            if (colorDiv) {
                colorDiv.classList.remove('border-[#8B4513]', 'ring-2', 'ring-[#8B4513]', 'ring-offset-1');
                colorDiv.classList.add('border-gray-300');
            }
            // Reset size styles
            const sizeDiv = label.querySelector('div:not([style*="background"]):not(.bg-red-500):not(.bg-blue-500):not(.bg-black):not(.bg-pink-500):not(.bg-green-500):not(.bg-yellow-400):not(.bg-white):not(.bg-orange-500)');
            if (sizeDiv && !colorDiv) {
                sizeDiv.classList.remove('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
                sizeDiv.classList.add('bg-white', 'text-gray-700', 'border-gray-300');
            }
        });
        const priceSlider = document.getElementById('price-slider');
        if (priceSlider) {
            priceSlider.value = 5000;
            document.getElementById('priceValue').textContent = '₹5,000';
            updatePriceSlider();
        }
        applyFilters();
    };

    // Price slider functionality
    const priceSlider = document.getElementById('price-slider');
    const priceValue = document.getElementById('priceValue');
    
    function updatePriceSlider() {
        if (priceSlider) {
            const value = priceSlider.value;
            const percentage = ((value - 500) / 4500) * 100;
            priceSlider.style.background = `linear-gradient(to right, #8B4513 0%, #8B4513 ${percentage}%, #e5e7eb ${percentage}%, #e5e7eb 100%)`;
        }
    }
    
    if (priceSlider && priceValue) {
        priceValue.textContent = '₹' + parseInt(priceSlider.value).toLocaleString();
        updatePriceSlider();
        priceSlider.addEventListener('input', function() {
            const value = parseInt(this.value);
            priceValue.textContent = '₹' + value.toLocaleString();
            updatePriceSlider();
            applyFilters();
        });
    }

    // Sort by dropdown
    const sortSelect = document.getElementById('sort-select');
    const sortSelectMobile = document.getElementById('sort-select-mobile');
    
    function sortProducts(sortBy) {
        const visibleProducts = allProducts.filter(p => {
            const color = p.getAttribute('data-color') || '';
            const size = p.getAttribute('data-size') || '';
            const price = parseInt(p.getAttribute('data-price') || 0);
            
            let show = true;
            if (selectedColors.length > 0 && !selectedColors.includes(color)) show = false;
            if (selectedSizes.length > 0 && !selectedSizes.includes(size)) show = false;
            if (price > maxPrice) show = false;
            
            return show;
        });
        
        visibleProducts.sort((a, b) => {
            const priceA = parseInt(a.getAttribute('data-price') || 0);
            const priceB = parseInt(b.getAttribute('data-price') || 0);
            const nameA = a.getAttribute('data-name').toLowerCase();
            const nameB = b.getAttribute('data-name').toLowerCase();
            const idA = parseInt(a.getAttribute('data-id')) || 0;
            const idB = parseInt(b.getAttribute('data-id')) || 0;
            
            switch(sortBy) {
                case 'price_low':
                    return priceA - priceB;
                case 'price_high':
                    return priceB - priceA;
                case 'newest':
                    return idB - idA;
                default:
                    return nameA.localeCompare(nameB);
            }
        });
        
        const productGrid = document.getElementById('products-grid');
        productGrid.innerHTML = '';
        visibleProducts.forEach(product => productGrid.appendChild(product.cloneNode(true)));
        
        currentPage = 1;
        displayProducts(visibleProducts);
        updatePagination(visibleProducts);
        
        // Re-initialize cart/wishlist buttons
        window.cartManager.initCartButtons();
        window.wishlistManager.initWishlistButtons();
    }
    
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            sortProducts(this.value);
        });
    }
    
    if (sortSelectMobile) {
        sortSelectMobile.addEventListener('change', function() {
            sortProducts(this.value);
        });
    }

    // Initialize - show all products
    applyFilters();

    // Initialize cart and wishlist buttons
    window.cartManager.initCartButtons();
    window.wishlistManager.initWishlistButtons();
    
    const filterSidebar = document.getElementById('filter-sidebar');
    if (filterSidebar) {
        // Set initial state for mobile filter sidebar
        if (window.innerWidth < 1024) {
            filterSidebar.classList.add('hidden');
            filterSidebar.style.display = 'none';
            filterSidebar.setAttribute('data-mobile-hidden', 'true');
        } else {
            filterSidebar.classList.remove('hidden');
            filterSidebar.style.display = 'block';
            filterSidebar.setAttribute('data-mobile-hidden', 'false');
        }
    }
});
</script>
@endpush

@endsection
