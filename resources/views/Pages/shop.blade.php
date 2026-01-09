@extends('layouts.app')

@section('title', 'Shop - AURA KURTIS')

@section('content')

@php
// Get all products from MockData
$allProducts = \App\Helpers\MockData::getHomepageProducts();
$products = collect($allProducts)->flatten(1)->toArray();

// Category structure with subcategories (matching image)
$categoryStructure = [
    'Men Fashion' => ['Winterwear', 'Shirts', 'Kurtas & Jackets', 'T-Shirts', 'Trousers', 'Gifts for him', 'New Arrivals', 'Bestsellers'],
    'Women Fashion' => ['Printed Kurtis', 'Anarkali Kurtis', 'Cotton Kurtis', 'Festive Kurtis', 'Kurti Sets'],
    'Shoes' => ['Casual Shoes', 'Formal Shoes', 'Sports Shoes'],
    'Accessories' => ['Bags', 'Jewelry', 'Watches', 'Belts']
];

// Map products to subcategories - ensure all categories have at least 1 product
$categoryMapping = [
    'Winterwear' => ['Kurtas', 'Shirts', 'Casual Wear'],
    'Shirts' => ['Shirts', 'Casual Wear'],
    'Kurtas & Jackets' => ['Kurtas', 'Festive Wear'],
    'T-Shirts' => ['Casual Wear', 'T-Shirts'],
    'Trousers' => ['Trousers', 'Bottoms'],
    'Gifts for him' => ['Accessories', 'Gifts'],
    'New Arrivals' => ['Anarkali', 'Straight Cut', 'A-Line'],
    'Bestsellers' => ['Anarkali', 'Straight Cut', 'A-Line'],
    'Printed Kurtis' => ['A-Line', 'Printed'],
    'Anarkali Kurtis' => ['Anarkali'],
    'Cotton Kurtis' => ['Straight Cut', 'Cotton'],
    'Festive Kurtis' => ['Anarkali', 'Festive'],
    'Kurti Sets' => ['Sets', 'Combos'],
];

// Add hover images and assign categories/subcategories
$productsWithHover = [];
foreach ($products as $index => $product) {
    $nextIndex = ($index + 1) % count($products);
    $product['hover_image'] = $products[$nextIndex]['image'] ?? $product['image'];
    $product['color'] = ['Red', 'Blue', 'Black', 'Pink', 'Green', 'Yellow', 'White', 'Orange'][$index % 8] ?? 'Red';
    $product['size'] = ['S', 'M', 'L', 'XL', 'XXL'][$index % 5] ?? 'M';
    
    // Assign to a subcategory based on product category
    $productCategory = $product['category'] ?? 'Anarkali';
    $assignedSubcategory = 'Anarkali Kurtis'; // Default
    
    foreach ($categoryMapping as $subcat => $matchCategories) {
        if (in_array($productCategory, $matchCategories)) {
            $assignedSubcategory = $subcat;
            break;
        }
    }
    
    // Distribute products evenly across all subcategories
    $allSubcategories = collect($categoryStructure)->flatten()->toArray();
    $subcatIndex = $index % count($allSubcategories);
    $product['subcategory'] = $allSubcategories[$subcatIndex] ?? $assignedSubcategory;
    $product['category'] = $product['subcategory']; // Use subcategory for filtering
    
    $productsWithHover[] = $product;
}
$products = $productsWithHover;

// Filter logic - ensure arrays are always arrays of strings
// Helper function to flatten and normalize arrays to strings
function normalizeToArrayOfStrings($value) {
    if (empty($value)) {
        return [];
    }
    
    if (is_string($value)) {
        return [$value];
    }
    
    if (is_array($value)) {
        $result = [];
        foreach ($value as $item) {
            if (is_string($item) && !empty($item)) {
                $result[] = $item;
            } elseif (is_array($item)) {
                // Recursively handle nested arrays
                $nested = normalizeToArrayOfStrings($item);
                $result = array_merge($result, $nested);
            } elseif (is_numeric($item)) {
                $result[] = (string)$item;
            }
        }
        return $result;
    }
    
    return [];
}

$categoryParam = request()->input('category', []);
$colorParam = request()->input('color', []);
$sizeParam = request()->input('size', []);

// Normalize to arrays of strings
$selectedCategories = normalizeToArrayOfStrings($categoryParam);
$selectedColors = normalizeToArrayOfStrings($colorParam);
$selectedSizes = normalizeToArrayOfStrings($sizeParam);

$maxPrice = request()->get('price', 5000);
$minPrice = 500;

$filteredProducts = collect($products)->filter(function ($product) use ($selectedCategories, $selectedColors, $selectedSizes, $minPrice, $maxPrice) {
    if (!empty($selectedCategories) && !in_array($product['category'] ?? '', $selectedCategories)) {
        return false;
    }
    if (!empty($selectedColors) && !in_array($product['color'] ?? '', $selectedColors)) {
        return false;
    }
    if (!empty($selectedSizes) && !in_array($product['size'] ?? '', $selectedSizes)) {
return false;
}
if ($product['price'] > $maxPrice) {
return false;
}
return true;
});

// For client-side filtering, we'll show all products initially
$totalProducts = count($products);

$colors = ['Red', 'Blue', 'Black', 'Pink', 'Green', 'Yellow', 'White', 'Orange'];
$sizes = ['S', 'M', 'L', 'XL', 'XXL'];
@endphp

<!-- ================= HERO SECTION ================= -->
<section class="relative h-[300px] sm:h-[400px] lg:h-[500px] overflow-hidden">
    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=1920"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative container mx-auto px-4 sm:px-6 h-full flex items-center justify-center text-center">
        <div class="text-white max-w-3xl">
            <span class="inline-block mb-4 px-4 sm:px-5 py-1.5 sm:py-2 text-xs sm:text-sm tracking-widest bg-white/20 rounded-full">
                SHOP COLLECTION
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
                Discover Your Style
            </h1>
            <p class="mt-4 text-sm sm:text-base text-gray-200 max-w-2xl mx-auto">
                Explore our curated collection of premium fashion essentials for every occasion
            </p>
        </div>
    </div>
</section>


<!-- ================= MAIN ================= -->
<section class="py-8 sm:py-12 lg:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 lg:gap-8">
            
            <!-- ================= FILTER SIDEBAR ================= -->
            <aside class="lg:col-span-1">
                <!-- Mobile Filter Toggle and Sort - Side by Side on Phone/Tablet -->
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

                    <!-- CATEGORY -->
                    <div class="bg-white border border-gray-200 rounded-lg p-2 sm:p-3 lg:p-4">
                        <h4 class="font-semibold text-black mb-1 sm:mb-2 lg:mb-3 text-[10px] sm:text-xs lg:text-base">Category</h4>
                        <div class="space-y-1">
                            @foreach($categoryStructure as $mainCategory => $subcategories)
                            <details class="group" {{ $mainCategory === 'Women Fashion' ? 'open' : '' }}>
                                <summary class="flex items-center justify-between cursor-pointer py-1 sm:py-2 text-[10px] sm:text-xs lg:text-sm font-medium text-gray-700 hover:text-[#8B4513] transition-colors">
                                    <span>{{ $mainCategory }}</span>
                                    <i class="fi fi-rr-angle-small-up group-open:rotate-180 transition-transform text-xs"></i>
                                </summary>
                                <div class="pl-2 mt-1 sm:mt-2 space-y-1 sm:space-y-2">
                                    @foreach($subcategories as $subcat)
                                    <label class="flex items-center gap-1 sm:gap-2 text-[10px] sm:text-xs lg:text-sm cursor-pointer py-0.5 sm:py-1">
                                        <input type="checkbox" name="category[]" value="{{ $subcat }}"
                                            {{ in_array($subcat, $selectedCategories) ? 'checked' : '' }}
                                            class="auto-apply-filter w-3 h-3 sm:w-4 sm:h-4 rounded text-[#8B4513] focus:ring-[#8B4513]">
                                        <span class="text-gray-700">{{ $subcat }}</span>
                                    </label>
                                    @endforeach
                </div>
                            </details>
                            @endforeach
                        </div>
                    </div>

                    <!-- COLOR -->
                    <div class="bg-white border border-gray-200 rounded-lg p-2 sm:p-3 lg:p-4">
                        <h4 class="font-semibold text-black mb-1 sm:mb-2 lg:mb-3 text-[10px] sm:text-xs lg:text-base">Color</h4>
                        <div class="flex flex-wrap gap-1.5 sm:gap-2">
                            @foreach($colors as $color)
                            <label class="cursor-pointer">
                                <input type="checkbox" name="color[]" value="{{ $color }}"
                                    {{ in_array($color, $selectedColors) ? 'checked' : '' }}
                                    class="hidden auto-apply-filter color-checkbox">
                                <div class="w-6 h-6 sm:w-8 sm:h-8 rounded-full border-2 {{ in_array($color, $selectedColors) ? 'border-[#8B4513] ring-2 ring-[#8B4513] ring-offset-1' : 'border-gray-300' }} 
                                    {{ strtolower($color) === 'red' ? 'bg-red-500' : '' }}
                                    {{ strtolower($color) === 'blue' ? 'bg-blue-500' : '' }}
                                    {{ strtolower($color) === 'black' ? 'bg-black' : '' }}
                                    {{ strtolower($color) === 'pink' ? 'bg-pink-500' : '' }}
                                    {{ strtolower($color) === 'green' ? 'bg-green-500' : '' }}
                                    {{ strtolower($color) === 'yellow' ? 'bg-yellow-400' : '' }}
                                    {{ strtolower($color) === 'white' ? 'bg-white' : '' }}
                                    {{ strtolower($color) === 'orange' ? 'bg-orange-500' : '' }}
                                    hover:scale-110 transition-transform" title="{{ $color }}">
                                </div>
                            </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- SIZE -->
                    <div class="bg-white border border-gray-200 rounded-lg p-2 sm:p-3 lg:p-4">
                        <h4 class="font-semibold text-black mb-1 sm:mb-2 lg:mb-3 text-[10px] sm:text-xs lg:text-base">Size</h4>
                        <div class="flex flex-wrap gap-1.5 sm:gap-2">
                            @foreach($sizes as $size)
                            <label class="cursor-pointer">
                                <input type="checkbox" name="size[]" value="{{ $size }}"
                                    {{ in_array($size, $selectedSizes) ? 'checked' : '' }}
                                    class="hidden auto-apply-filter size-checkbox">
                                <div class="px-2 py-1 sm:px-3 sm:py-1.5 lg:px-4 lg:py-2 border rounded-lg text-[10px] sm:text-xs lg:text-sm font-medium transition-all
                                    {{ in_array($size, $selectedSizes) ? 'bg-[#8B4513] text-white border-[#8B4513]' : 'bg-white text-gray-700 border-gray-300 hover:border-[#8B4513]' }}">
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
                            <input type="range" name="price" min="500" max="5000" value="{{ $maxPrice }}" step="100"
                                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer price-slider" 
                                style="background: linear-gradient(to right, #8B4513 0%, #8B4513 {{ (($maxPrice - 500) / 4500) * 100 }}%, #e5e7eb {{ (($maxPrice - 500) / 4500) * 100 }}%, #e5e7eb 100%);">
                            <div class="flex justify-between text-[10px] sm:text-xs text-gray-500">
                                <span>₹500</span>
                                <span class="font-semibold text-[#8B4513]" id="priceValue">₹{{ number_format($maxPrice) }}</span>
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
                            We couldn't find any products matching your filters. Try adjusting your search criteria or browse all products.
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

                                <!-- Action Icons - Right Side (Hover) -->
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

<!-- ================= CATEGORIES SECTION (AT BOTTOM) ================= -->
<section class="py-6 sm:py-8 lg:py-12 bg-white border-t border-gray-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-4 sm:mb-6">
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-black mb-2">Shop by Category</h2>
            <p class="text-xs sm:text-sm text-gray-600">Check express delivery availability by PIN code and apply filter to browse.</p>
        </div>

        <!-- Categories - Horizontal Scroll (6-8 categories, Max 5-6 visible) -->
        <div class="overflow-x-auto pb-4 scrollbar-hide" style="scrollbar-width: none; -ms-overflow-style: none;">
            <div class="flex gap-3 sm:gap-4 lg:gap-6 min-w-max justify-center lg:justify-center">
                @php
                // Select 8 categories with unique images based on name
                $categoryList = [
                    'Winterwear' => [
                        'name' => 'Winterwear',
                        'image' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=200&h=200&fit=crop',
                        'route' => route('shop') . '?category[]=Winterwear'
                    ],
                    'Shirts' => [
                        'name' => 'Shirts',
                        'image' => 'https://images.unsplash.com/photo-1594938291221-94f313b0e69a?w=200&h=200&fit=crop',
                        'route' => route('shop') . '?category[]=Shirts'
                    ],
                    'Kurtas & Jackets' => [
                        'name' => 'Kurtas & Jackets',
                        'image' => 'https://images.unsplash.com/photo-1603252109303-2751441dd157?w=200&h=200&fit=crop',
                        'route' => route('shop') . '?category[]=Kurtas & Jackets'
                    ],
                    'T-Shirts' => [
                        'name' => 'T-Shirts',
                        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=200&h=200&fit=crop',
                        'route' => route('shop') . '?category[]=T-Shirts'
                    ],
                    'Trousers' => [
                        'name' => 'Trousers',
                        'image' => 'https://images.unsplash.com/photo-1624378515193-9c1b8c0b8b8b?w=200&h=200&fit=crop',
                        'route' => route('shop') . '?category[]=Trousers'
                    ],
                    'Gifts for him' => [
                        'name' => 'Gifts for him',
                        'image' => 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=200&h=200&fit=crop',
                        'route' => route('shop') . '?category[]=Gifts for him'
                    ],
                    'New Arrivals' => [
                        'name' => 'New Arrivals',
                        'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=200&h=200&fit=crop',
                        'route' => route('shop') . '?category[]=New Arrivals'
                    ],
                    'Bestsellers' => [
                        'name' => 'Bestsellers',
                        'image' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?w=200&h=200&fit=crop',
                        'route' => route('shop') . '?category[]=Bestsellers'
                    ],
                ];
                @endphp
                
                @foreach($categoryList as $category)
                <a href="{{ $category['route'] }}" 
                    class="category-btn flex flex-col items-center gap-2 sm:gap-3 min-w-[70px] sm:min-w-[80px] lg:min-w-[90px] cursor-pointer group flex-shrink-0">
                    <div class="w-14 h-14 sm:w-16 sm:h-16 lg:w-20 lg:h-20 rounded-full overflow-hidden border-2 border-gray-200 group-hover:border-[#8B4513] transition-all shadow-md group-hover:shadow-lg">
                        <img src="{{ $category['image'] }}" 
                             alt="{{ $category['name'] }}"
                             class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <span class="text-[9px] sm:text-[10px] lg:text-xs font-medium text-gray-700 group-hover:text-[#8B4513] transition-colors text-center leading-tight">{{ $category['name'] }}</span>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
// Mobile filter toggle - defined globally so it's available for onclick handlers
window.toggleMobileFilters = function() {
    const sidebar = document.getElementById('filter-sidebar');
    const icon = document.getElementById('filter-toggle-icon');
    
    if (!sidebar || !icon) return;
    
    const isHidden = sidebar.getAttribute('data-mobile-hidden') === 'true';
    
    if (isHidden) {
        sidebar.classList.remove('hidden');
        sidebar.classList.add('block');
        sidebar.style.display = 'block';
        sidebar.setAttribute('data-mobile-hidden', 'false');
        icon.classList.remove('fi-rr-angle-small-down');
        icon.classList.add('fi-rr-angle-small-up');
    } else {
        sidebar.classList.add('hidden');
        sidebar.classList.remove('block');
        sidebar.style.display = 'none';
        sidebar.setAttribute('data-mobile-hidden', 'true');
        icon.classList.remove('fi-rr-angle-small-up');
        icon.classList.add('fi-rr-angle-small-down');
    }
};

document.addEventListener('DOMContentLoaded', function() {
    // Get all products
    const allProducts = Array.from(document.querySelectorAll('.filterable-product'));
    let selectedCategories = [];
    let selectedColors = [];
    let selectedSizes = [];
    let maxPrice = 5000;
    let currentPage = 1;
    const productsPerPage = 12;

    // Filter by category from category buttons
    window.filterByCategory = function(category) {
        // Uncheck all category checkboxes first
        document.querySelectorAll('.auto-apply-filter[name="category[]"]').forEach(cb => {
            cb.checked = false;
        });
        
        // Check the selected category
        const checkbox = document.querySelector(`.auto-apply-filter[name="category[]"][value="${category}"]`);
        if (checkbox) {
            checkbox.checked = true;
            applyFilters();
        }
    };

    // Client-side filter function (no page reload)
    function applyFilters() {
        // Get selected filters
        selectedCategories = Array.from(document.querySelectorAll('.auto-apply-filter[name="category[]"]:checked')).map(cb => cb.value);
        selectedColors = Array.from(document.querySelectorAll('.auto-apply-filter[name="color[]"]:checked')).map(cb => cb.value);
        selectedSizes = Array.from(document.querySelectorAll('.auto-apply-filter[name="size[]"]:checked')).map(cb => cb.value);
        
        const priceSlider = document.querySelector('.price-slider');
        if (priceSlider) {
            maxPrice = parseInt(priceSlider.value);
        }

        // Filter products
        let visibleProducts = [];
        allProducts.forEach(product => {
            const category = product.getAttribute('data-category') || '';
            const color = product.getAttribute('data-color') || '';
            const size = product.getAttribute('data-size') || '';
            const price = parseInt(product.getAttribute('data-price') || 0);

            let show = true;

            // Category filter - if categories are selected, product must match at least one
            if (selectedCategories.length > 0) {
                if (!selectedCategories.includes(category)) {
                    show = false;
                }
            }

            // Color filter
            if (selectedColors.length > 0 && !selectedColors.includes(color)) {
                show = false;
            }

            // Size filter
            if (selectedSizes.length > 0 && !selectedSizes.includes(size)) {
                show = false;
            }

            // Price filter
            if (price > maxPrice) {
                show = false;
            }

            // Store visible products (even if only 1 product matches)
            if (show) {
                visibleProducts.push(product);
            }
        });

        // Show/hide products
        allProducts.forEach(product => {
            product.style.display = 'none';
        });

        // Show no products message if needed (only when truly no products)
        const noProductsMsg = document.getElementById('no-products-message');
        if (visibleProducts.length === 0) {
            noProductsMsg.classList.remove('hidden');
            noProductsMsg.style.display = 'block';
    } else {
            noProductsMsg.classList.add('hidden');
            noProductsMsg.style.display = 'none';
        }

        // Reset to page 1 when filtering
        currentPage = 1;
        
        // Update pagination and display (even if only 1 product)
        updatePagination(visibleProducts);
        displayProducts(visibleProducts);

        // Update product count
        document.getElementById('product-count').textContent = visibleProducts.length;

        // Update applied filters display
        updateAppliedFilters();
    }

    // Display products with pagination
    function displayProducts(visibleProducts) {
        const start = (currentPage - 1) * productsPerPage;
        const end = start + productsPerPage;
        const pageProducts = visibleProducts.slice(start, end);

        // Hide all products first
        allProducts.forEach(product => {
            product.style.display = 'none';
        });

        // Show products for current page
        pageProducts.forEach(product => {
            product.style.display = 'block';
        });
    }

    // Update pagination
    function updatePagination(visibleProducts) {
        const totalPages = Math.ceil(visibleProducts.length / productsPerPage);
        const paginationContainer = document.getElementById('pagination-container');
        
        if (!paginationContainer) return;
        
        // Show pagination only if there are more products than productsPerPage
        if (visibleProducts.length <= productsPerPage || totalPages <= 1) {
            paginationContainer.innerHTML = '';
            return;
        }

        let paginationHTML = '';

        // Previous button
        if (currentPage > 1) {
            paginationHTML += `<button onclick="changePage(${currentPage - 1})" class="px-2 py-1 sm:px-3 sm:py-1.5 border border-gray-300 rounded-lg text-[10px] sm:text-xs text-gray-700 hover:bg-[#F5F1EB] transition-colors">← Prev</button>`;
        }

        // Page numbers - show max 5 pages on mobile, more on desktop
        const maxVisiblePages = window.innerWidth < 640 ? 5 : 7;
        const startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
        const endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
        
        if (startPage > 1) {
            paginationHTML += `<button onclick="changePage(1)" class="px-2 py-1 sm:px-3 sm:py-1.5 rounded-lg border border-gray-300 text-[10px] sm:text-xs text-gray-700 hover:bg-[#F5F1EB] transition-colors">1</button>`;
            if (startPage > 2) {
                paginationHTML += `<span class="px-1 sm:px-2 text-gray-500 text-xs">...</span>`;
            }
        }
        
        for (let i = startPage; i <= endPage; i++) {
            paginationHTML += `<button onclick="changePage(${i})" class="px-2 py-1 sm:px-3 sm:py-1.5 rounded-lg border border-gray-300 text-[10px] sm:text-xs ${i === currentPage ? 'bg-[#8B4513] text-white border-[#8B4513]' : 'text-gray-700 hover:bg-[#F5F1EB]'} transition-colors">${i}</button>`;
        }
        
        if (endPage < totalPages) {
            if (endPage < totalPages - 1) {
                paginationHTML += `<span class="px-1 sm:px-2 text-gray-500 text-xs">...</span>`;
            }
            paginationHTML += `<button onclick="changePage(${totalPages})" class="px-2 py-1 sm:px-3 sm:py-1.5 rounded-lg border border-gray-300 text-[10px] sm:text-xs text-gray-700 hover:bg-[#F5F1EB] transition-colors">${totalPages}</button>`;
        }

        // Next button
        if (currentPage < totalPages) {
            paginationHTML += `<button onclick="changePage(${currentPage + 1})" class="px-2 py-1 sm:px-3 sm:py-1.5 border border-gray-300 rounded-lg text-[10px] sm:text-xs text-gray-700 hover:bg-[#F5F1EB] transition-colors">Next →</button>`;
        }

        paginationContainer.innerHTML = paginationHTML;
    }

    // Change page function
    window.changePage = function(page) {
        currentPage = page;
        // Get visible products
        const visibleProducts = allProducts.filter(p => {
            const category = p.getAttribute('data-category') || '';
            const color = p.getAttribute('data-color') || '';
            const size = p.getAttribute('data-size') || '';
            const price = parseInt(p.getAttribute('data-price') || 0);

            if (selectedCategories.length > 0 && !selectedCategories.includes(category)) return false;
            if (selectedColors.length > 0 && !selectedColors.includes(color)) return false;
            if (selectedSizes.length > 0 && !selectedSizes.includes(size)) return false;
            if (price > maxPrice) return false;
            return true;
        });
        
        displayProducts(visibleProducts);
        updatePagination(visibleProducts);
        
        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    // Update applied filters tags
    function updateAppliedFilters() {
        const appliedFiltersDiv = document.getElementById('applied-filters');
        const filterTagsDiv = document.getElementById('filter-tags');
        const clearAllBtn = document.getElementById('clear-all-btn');
        
        const hasFilters = selectedCategories.length > 0 || selectedColors.length > 0 || selectedSizes.length > 0 || maxPrice < 5000;
        
        if (hasFilters) {
            appliedFiltersDiv.style.display = 'flex';
            if (clearAllBtn) clearAllBtn.style.display = 'block';
            filterTagsDiv.innerHTML = '';
            
            selectedCategories.forEach(cat => {
                const tag = document.createElement('span');
                tag.className = 'inline-flex items-center gap-1 px-2 py-1 bg-[#F5F1EB] text-[#8B4513] rounded text-xs';
                tag.innerHTML = `${cat} <button type="button" onclick="removeClientFilter('category', '${cat}')" class="hover:text-red-600">×</button>`;
                filterTagsDiv.appendChild(tag);
            });
            
            selectedColors.forEach(color => {
                const tag = document.createElement('span');
                tag.className = 'inline-flex items-center gap-1 px-2 py-1 bg-[#F5F1EB] text-[#8B4513] rounded text-xs';
                tag.innerHTML = `${color} <button type="button" onclick="removeClientFilter('color', '${color}')" class="hover:text-red-600">×</button>`;
                filterTagsDiv.appendChild(tag);
            });
            
            selectedSizes.forEach(size => {
                const tag = document.createElement('span');
                tag.className = 'inline-flex items-center gap-1 px-2 py-1 bg-[#F5F1EB] text-[#8B4513] rounded text-xs';
                tag.innerHTML = `${size} <button type="button" onclick="removeClientFilter('size', '${size}')" class="hover:text-red-600">×</button>`;
                filterTagsDiv.appendChild(tag);
            });
        } else {
            appliedFiltersDiv.style.display = 'none';
            if (clearAllBtn) clearAllBtn.style.display = 'none';
        }
    }

    // Remove filter function (client-side)
    window.removeClientFilter = function(type, value) {
        const checkboxes = document.querySelectorAll(`.auto-apply-filter[name="${type}[]"]`);
        checkboxes.forEach(cb => {
            if (cb.value === value) {
                cb.checked = false;
                // Update visual state
                if (cb.classList.contains('color-checkbox')) {
                    const colorDiv = cb.nextElementSibling;
                    colorDiv.classList.remove('border-[#8B4513]', 'ring-2', 'ring-[#8B4513]', 'ring-offset-1');
                    colorDiv.classList.add('border-gray-300');
                } else if (cb.classList.contains('size-checkbox')) {
                    const sizeDiv = cb.nextElementSibling;
                    sizeDiv.classList.remove('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
                    sizeDiv.classList.add('bg-white', 'text-gray-700', 'border-gray-300');
                }
            }
        });
        applyFilters();
    };

    // Clear all filters
    window.clearAllFilters = function() {
        document.querySelectorAll('.auto-apply-filter').forEach(cb => {
            cb.checked = false;
            // Update visual state
            if (cb.classList.contains('color-checkbox')) {
                const colorDiv = cb.nextElementSibling;
                colorDiv.classList.remove('border-[#8B4513]', 'ring-2', 'ring-[#8B4513]', 'ring-offset-1');
                colorDiv.classList.add('border-gray-300');
            } else if (cb.classList.contains('size-checkbox')) {
                const sizeDiv = cb.nextElementSibling;
                sizeDiv.classList.remove('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
                sizeDiv.classList.add('bg-white', 'text-gray-700', 'border-gray-300');
            }
        });
        
        const priceSlider = document.querySelector('.price-slider');
        if (priceSlider) {
            priceSlider.value = 5000;
            updatePriceSlider();
            document.getElementById('priceValue').textContent = '₹5,000';
        }
        
        applyFilters();
    };

    // Auto-apply on checkbox change
    document.querySelectorAll('.auto-apply-filter').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // Update visual state
            if (this.classList.contains('color-checkbox')) {
                const colorDiv = this.nextElementSibling;
                if (this.checked) {
                    colorDiv.classList.add('border-[#8B4513]', 'ring-2', 'ring-[#8B4513]', 'ring-offset-1');
                    colorDiv.classList.remove('border-gray-300');
                } else {
                    colorDiv.classList.remove('border-[#8B4513]', 'ring-2', 'ring-[#8B4513]', 'ring-offset-1');
                    colorDiv.classList.add('border-gray-300');
                }
            } else if (this.classList.contains('size-checkbox')) {
                const sizeDiv = this.nextElementSibling;
                if (this.checked) {
                    sizeDiv.classList.add('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
                    sizeDiv.classList.remove('bg-white', 'text-gray-700', 'border-gray-300');
    } else {
                    sizeDiv.classList.remove('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
                    sizeDiv.classList.add('bg-white', 'text-gray-700', 'border-gray-300');
                }
            }
            
            // Apply filters instantly (no page reload)
            applyFilters();
        });
    });

    // Price slider
    const priceSlider = document.querySelector('.price-slider');
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
            
            // Apply filters instantly (no page reload)
            applyFilters();
        });
    }

    // Initialize filters on page load with URL parameters
    @if(!empty($selectedCategories) || !empty($selectedColors) || !empty($selectedSizes) || $maxPrice != 5000)
        // Set initial filter state from URL
        @php
        $categoriesJson = json_encode($selectedCategories);
        $colorsJson = json_encode($selectedColors);
        $sizesJson = json_encode($selectedSizes);
        @endphp
        
        // Set categories from URL
        const urlSelectedCategories = {!! $categoriesJson !!};
        urlSelectedCategories.forEach(function(cat) {
            if (typeof cat === 'string' && cat) {
                const catCheckbox = document.querySelector(`.auto-apply-filter[name="category[]"][value="${cat.replace(/"/g, '&quot;')}"]`);
                if (catCheckbox) {
                    catCheckbox.checked = true;
                    selectedCategories.push(cat);
                }
            }
        });
        
        // Set colors from URL
        const urlSelectedColors = {!! $colorsJson !!};
        urlSelectedColors.forEach(function(color) {
            if (typeof color === 'string' && color) {
                const colorCheckbox = document.querySelector(`.auto-apply-filter[name="color[]"][value="${color.replace(/"/g, '&quot;')}"]`);
                if (colorCheckbox) {
                    colorCheckbox.checked = true;
                    selectedColors.push(color);
                    const colorDiv = colorCheckbox.nextElementSibling;
                    if (colorDiv) {
                        colorDiv.classList.add('border-[#8B4513]', 'ring-2', 'ring-[#8B4513]', 'ring-offset-1');
                        colorDiv.classList.remove('border-gray-300');
                    }
                }
            }
        });
        
        // Set sizes from URL
        const urlSelectedSizes = {!! $sizesJson !!};
        urlSelectedSizes.forEach(function(size) {
            if (typeof size === 'string' && size) {
                const sizeCheckbox = document.querySelector(`.auto-apply-filter[name="size[]"][value="${size.replace(/"/g, '&quot;')}"]`);
                if (sizeCheckbox) {
                    sizeCheckbox.checked = true;
                    selectedSizes.push(size);
                    const sizeDiv = sizeCheckbox.nextElementSibling;
                    if (sizeDiv) {
                        sizeDiv.classList.add('bg-[#8B4513]', 'text-white', 'border-[#8B4513]');
                        sizeDiv.classList.remove('bg-white', 'text-gray-700', 'border-gray-300');
                    }
                }
            }
        });
        if (priceSlider) {
            priceSlider.value = {{ $maxPrice }};
            updatePriceSlider();
            priceValue.textContent = '₹' + {{ $maxPrice }}.toLocaleString();
        }
    @endif

    // Initialize filters on page load
    applyFilters();
    
    // Show filters on desktop by default, hide on mobile/tablet
    const filterSidebar = document.getElementById('filter-sidebar');
    if (filterSidebar) {
        // On desktop (lg and above), filter is visible via CSS class 'lg:block'
        // On mobile/tablet, it's hidden by default via 'hidden' class
        if (window.innerWidth >= 1024) {
            filterSidebar.classList.remove('hidden');
            filterSidebar.classList.add('block');
            filterSidebar.setAttribute('data-mobile-hidden', 'false');
        } else {
            filterSidebar.classList.add('hidden');
            filterSidebar.classList.remove('block');
            filterSidebar.setAttribute('data-mobile-hidden', 'true');
        }
    }

    // Wishlist functionality
    const wishlistButtons = document.querySelectorAll('.wishlist-btn');
    
    wishlistButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const productId = this.getAttribute('data-wishlist-id');
            const icon = this.querySelector('i');
            
            if (window.wishlistManager) {
                window.wishlistManager.toggleWishlist(productId);
                const isInWishlist = window.wishlistManager.isInWishlist(productId);
                
                if (isInWishlist) {
                    icon.classList.remove('fi-rr-heart');
                    icon.classList.add('fi-sr-heart', 'text-pink-500');
                    this.classList.add('bg-pink-50');
                } else {
                    icon.classList.remove('fi-sr-heart', 'text-pink-500');
                    icon.classList.add('fi-rr-heart');
                    this.classList.remove('bg-pink-50');
                }
            }
        });
    });

    // Update wishlist button states on load
    if (window.wishlistManager) {
        wishlistButtons.forEach(btn => {
            const productId = btn.getAttribute('data-wishlist-id');
            const isInWishlist = window.wishlistManager.isInWishlist(productId);
            const icon = btn.querySelector('i');
            
            if (isInWishlist) {
                icon.classList.remove('fi-rr-heart');
                icon.classList.add('fi-sr-heart', 'text-pink-500');
                btn.classList.add('bg-pink-50');
            }
        });
    }

    // Sort functionality - Desktop
    const sortSelect = document.getElementById('sort-select');
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            sortProducts(this.value);
        });
    }

    // Sort functionality - Mobile
    const sortSelectMobile = document.getElementById('sort-select-mobile');
    if (sortSelectMobile) {
        sortSelectMobile.addEventListener('change', function() {
            sortProducts(this.value);
        });
    }

    // Shared sort function
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
                default: // popularity
                    return nameA.localeCompare(nameB);
            }
        });
        
        products.forEach(product => grid.appendChild(product));
    }
});

// Remove filter function
function removeFilter(type, value) {
    const url = new URL(window.location.href);
    const params = url.searchParams;
    const currentValues = params.getAll(type + '[]');
    const newValues = currentValues.filter(v => v !== value);
    
    params.delete(type + '[]');
    newValues.forEach(v => params.append(type + '[]', v));
    
    window.location.href = url.toString();
}
</script>
@endpush

@endsection
