@extends('layouts.app')

@section('title', 'Straight Cut Kurtis - AURA KURTIS')

@section('content')

@php
// Get products from MockData - specifically straight cut kurtis
$allProducts = \App\Helpers\MockData::getHomepageProducts();
$straightProducts = $allProducts['kurtis_straight'] ?? [];
$bestsellers = $allProducts['bestsellers'] ?? [];

// If no specific straight, use all products and filter
if (empty($straightProducts)) {
    $straightProducts = collect($allProducts)->flatten(1)->toArray();
}

// Add hover images and assign to straight
$productsWithHover = [];
foreach ($straightProducts as $index => $product) {
    $nextIndex = ($index + 1) % count($straightProducts);
    $product['hover_image'] = $straightProducts[$nextIndex]['image'] ?? $product['image'];
    $product['color'] = ['Red', 'Blue', 'Black', 'Pink', 'Green', 'Yellow', 'White', 'Orange'][$index % 8] ?? 'Red';
    $product['size'] = ['S', 'M', 'L', 'XL', 'XXL'][$index % 5] ?? 'M';
    $product['category'] = 'Straight Cut';
    $product['subcategory'] = 'Straight Cut';
    $productsWithHover[] = $product;
}
$products = $productsWithHover;
@endphp

<!-- ================= HERO SECTION ================= -->
<section class="relative h-[300px] sm:h-[400px] lg:h-[500px] overflow-hidden">
    <img src="https://tipsandbeauty.com/wp-content/uploads/2021/01/Stylish-Anarkali-Short-Kurti-With-Long-Flared-Sharara.jpg"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative container mx-auto px-4 sm:px-6 h-full flex items-center justify-center text-center">
        <div class="text-white max-w-3xl">
            <span class="inline-block mb-4 px-4 sm:px-5 py-1.5 sm:py-2 text-xs sm:text-sm tracking-widest bg-white/20 rounded-full">
                KURTIS COLLECTION
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
                Straight Cut Kurtis
            </h1>
            <p class="mt-4 text-sm sm:text-base text-gray-200 max-w-2xl mx-auto">
                Discover elegant straight cut kurtis crafted for modern women
            </p>
        </div>
    </div>
</section>

<!-- ================= MAIN ================= -->
<section class="py-8 sm:py-12 lg:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header with Sort (No Filters) -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
            <div>
                <p class="text-sm sm:text-base text-gray-600">Showing <span class="font-semibold text-black" id="product-count">{{ count($products) }}</span> products</p>
            </div>
            <div>
                <select id="sort-select" class="w-full sm:w-auto px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none">
                    <option value="popularity">Sort by Popularity</option>
                    <option value="price_low">Price: Low to High</option>
                    <option value="price_high">Price: High to Low</option>
                    <option value="newest">Newest First</option>
                </select>
            </div>
        </div>

        <!-- Products Grid - Responsive: Phone 2, Tablet 2-3, Desktop 3 -->
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
</section>

<!-- Our Bestsellers Carousel with Auto-Slide -->
<x-product-carousel id="bestsellers" title="OUR BESTSELLERS" :products="$bestsellers" />

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all products
    const allProducts = Array.from(document.querySelectorAll('.filterable-product'));
    let currentPage = 1;
    const productsPerPage = 12;

    // Display products with pagination
    function displayProducts(visibleProducts) {
        const start = (currentPage - 1) * productsPerPage;
        const end = start + productsPerPage;
        const pageProducts = visibleProducts.slice(start, end);

        allProducts.forEach(product => product.style.display = 'none');
        pageProducts.forEach(product => product.style.display = 'block');
    }

    // Update pagination
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
        displayProducts(allProducts);
        updatePagination(allProducts);
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    // Initialize - show all products
    displayProducts(allProducts);
    updatePagination(allProducts);

    // Initialize cart and wishlist buttons
    window.cartManager.initCartButtons();
    window.wishlistManager.initWishlistButtons();

    // Sort functionality
    const sortSelect = document.getElementById('sort-select');
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            sortProducts(this.value);
        });
    }

    function sortProducts(sortBy) {
        const products = Array.from(document.querySelectorAll('.product-card'));
        const grid = document.getElementById('products-grid');
        
        products.sort((a, b) => {
            const priceA = parseInt(a.getAttribute('data-price'));
            const priceB = parseInt(b.getAttribute('data-price'));
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
        
        products.forEach(product => grid.appendChild(product));
        displayProducts(allProducts);
        updatePagination(allProducts);
    }
});
</script>
@endpush

@endsection
