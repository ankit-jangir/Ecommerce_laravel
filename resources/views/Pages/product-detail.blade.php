@extends('layouts.app')

@section('title', 'Product Detail - AURA KURTIS')

@section('content')
<section class="product-detail py-8 sm:py-12 lg:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-6 sm:mb-8">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="{{ route('home') }}" class="hover:text-[#8B4513] transition-colors">Home</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="{{ route('women') }}" class="hover:text-[#8B4513] transition-colors">Women</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-[#654321] font-medium">Product Detail</li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12">
            <!-- Product Images Section -->
            <div class="space-y-2 sm:space-y-3">
                <!-- Main Product Image -->
                <div class="relative overflow-hidden rounded-lg bg-gray-100" style="max-height: 500px;">
                    <img id="main-product-image" 
                         src="{{ $product['image'] ?? 'https://khatricreations.com/cdn/shop/files/KC200246_1.png' }}" 
                         alt="{{ $product['name'] ?? 'Product Image' }}"
                         class="w-full h-auto max-h-[400px] sm:max-h-[450px] lg:max-h-[500px] object-contain mx-auto">
                </div>

                <!-- Thumbnail Images (Scrollable if many) -->
                @php
                $productImages = [
                    $product['image'] ?? 'https://khatricreations.com/cdn/shop/files/KC200246_1.png',
                    $product['hover_image'] ?? 'https://khatricreations.com/cdn/shop/files/KC200246_2.png',
                    'https://khatricreations.com/cdn/shop/files/KC200246_3.png',
                    'https://khatricreations.com/cdn/shop/files/KC200246_1.png',
                    'https://khatricreations.com/cdn/shop/files/KC200246_2.png',
                ];
                @endphp
                
                <div class="flex gap-2 overflow-x-auto scrollbar-hide pb-2">
                    @foreach($productImages as $index => $img)
                    <button type="button" 
                            onclick="changeMainImage('{{ $img }}', this)"
                            class="product-thumbnail flex-shrink-0 w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded-lg overflow-hidden border-2 {{ $index === 0 ? 'border-[#8B4513]' : 'border-gray-200' }} transition-all hover:border-[#8B4513]">
                        <img src="{{ $img }}" 
                             alt="Thumbnail {{ $index + 1 }}"
                             class="w-full h-full object-cover">
                    </button>
                    @endforeach
                </div>

                <!-- Customer Reviews Section (Below Images on Desktop) -->
                <div class=" mt-6 pt-6 border-t border-gray-200">
                    <h2 class="text-xl font-semibold text-black mb-4">Customer Reviews</h2>
                    
                    <!-- Reviews Grid -->
                    <div id="reviewsGridDesktop" class="space-y-4">
                        <!-- Example Review -->
                        <div class="review border border-gray-200 rounded-lg p-3">
                            <p class="font-medium text-black text-sm mb-1">Anjali</p>
                            <div class="flex text-yellow-400 gap-0.5 mb-2 text-xs">
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                                <i class="fi fi-sr-star"></i>
                            </div>
                            <p class="text-sm text-gray-600 mb-2">Fabric quality is very good. Loved the fitting.</p>

                            <!-- Scrollable Images -->
                            <div class="review-images flex gap-2 overflow-x-auto scroll-smooth">
                                <img src="https://khatricreations.com/cdn/shop/files/KC200246_1.png"
                                    class="review-img w-16 h-16 object-cover rounded cursor-pointer flex-shrink-0"
                                    alt="Review Image">
                                <img src="https://khatricreations.com/cdn/shop/files/KC200246_2.png"
                                    class="review-img w-16 h-16 object-cover rounded cursor-pointer flex-shrink-0"
                                    alt="Review Image">
                            </div>
                        </div>
                    </div>

                    <!-- Write Review Button -->
                    <div class="mt-4">
                        <button id="writeReviewBtnDesktop"
                            class="bg-[#8B4513] text-white py-2 px-4 rounded-lg hover:bg-[#654321] transition-all text-sm">
                            Write a Review
                        </button>
                    </div>
                </div>
            </div>


            <!-- Product Info -->
            <div class="space-y-4 sm:space-y-6">
                <div>
                    <span
                        class="inline-block bg-red-500 text-white px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-[10px] sm:text-xs font-medium mb-2">NEW</span>
                    <h1 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-black mb-2 sm:mb-3">Floral Print Anarkali Kurti</h1>
                    <div class="flex items-center gap-2 mb-3">
                        <div class="flex text-yellow-400">
                            <i class="fi fi-sr-star text-xs sm:text-sm"></i>
                            <i class="fi fi-sr-star text-xs sm:text-sm"></i>
                            <i class="fi fi-sr-star text-xs sm:text-sm"></i>
                            <i class="fi fi-sr-star text-xs sm:text-sm"></i>
                            <i class="fi fi-sr-star text-xs sm:text-sm"></i>
                        </div>
                        <span class="text-xs sm:text-sm text-gray-600">(4.8) 120 Reviews</span>
                    </div>
                </div>

                <!-- Share Button -->
                <div class="mt-4">
                    <button id="shareBtn"
                        class="flex items-center gap-2 bg-[#8B4513] text-white px-4 py-2 rounded-lg hover:bg-[#654321] transition-all">
                        <i class="fi fi-rr-share"></i> Share
                    </button>
                </div>

                <!-- Share Modal -->
                <div id="shareModal"
                    class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50 p-4">
                    <div class="bg-white rounded-lg p-4 sm:p-6 w-full max-w-xs sm:max-w-sm relative">
                        <button id="closeModal"
                            class="absolute top-2 right-2 text-gray-500 hover:text-gray-900 text-2xl">&times;</button>
                        <h3 class="text-base sm:text-lg font-semibold text-[#654321] mb-4 text-center">Share this product</h3>
                        <div class="flex justify-center items-center gap-4 sm:gap-6">
                            <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank"
                                class="w-12 h-12 sm:w-14 sm:h-14 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-green-600 transition-all shadow-md"
                                title="WhatsApp">
                                <i class="fi fi-brands-whatsapp text-xl sm:text-2xl"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}"
                                target="_blank"
                                class="w-12 h-12 sm:w-14 sm:h-14 bg-blue-400 text-white rounded-full flex items-center justify-center hover:bg-blue-500 transition-all shadow-md"
                                title="Twitter">
                                <i class="fi fi-brands-twitter text-xl sm:text-2xl"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                target="_blank"
                                class="w-12 h-12 sm:w-14 sm:h-14 bg-blue-700 text-white rounded-full flex items-center justify-center hover:bg-blue-800 transition-all shadow-md"
                                title="Facebook">
                                <i class="fi fi-brands-facebook text-xl sm:text-2xl"></i>
                            </a>
                            <button id="copyLink"
                                class="w-12 h-12 sm:w-14 sm:h-14 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300 transition-all shadow-md"
                                title="Copy Link">
                                <i class="fi fi-rr-copy text-xl sm:text-2xl text-gray-700"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200 pt-4 sm:pt-6">
                    <div class="flex items-baseline gap-2 sm:gap-3 mb-2 sm:mb-3">
                        <span class="text-2xl sm:text-3xl font-semibold text-[#8B4513]">₹2,499</span>
                        <span class="text-base sm:text-lg text-gray-400 line-through">₹3,299</span>
                        <span class="bg-green-100 text-green-700 px-1.5 py-0.5 sm:px-2 sm:py-1 rounded text-xs font-medium">24% OFF</span>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-600 mb-4 sm:mb-6">Inclusive of all taxes. Free shipping on orders above ₹999</p>
                </div>

                <!-- Size Selection -->
                <div class="border-t border-gray-200 pt-4 sm:pt-6">
                    <h3 class="text-base sm:text-lg font-semibold text-black mb-3">Select Size</h3>
                    <div class="flex gap-2 mb-4 flex-wrap">
                        <button data-size="S"
                            class="size-btn w-10 h-10 sm:w-12 sm:h-12 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-medium text-xs sm:text-sm text-gray-700 transition-all">S</button>
                        <button data-size="M"
                            class="size-btn w-10 h-10 sm:w-12 sm:h-12 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-medium text-xs sm:text-sm text-gray-700 transition-all">M</button>
                        <button data-size="L"
                            class="size-btn w-10 h-10 sm:w-12 sm:h-12 border-2 border-[#8B4513] bg-[#F5F1EB] rounded-lg font-medium text-xs sm:text-sm text-gray-700 transition-all active-size">L</button>
                        <button data-size="XL"
                            class="size-btn w-10 h-10 sm:w-12 sm:h-12 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-medium text-xs sm:text-sm text-gray-700 transition-all">XL</button>
                        <button data-size="XXL"
                            class="size-btn w-10 h-10 sm:w-12 sm:h-12 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-medium text-xs sm:text-sm text-gray-700 transition-all">XXL</button>
                    </div>
                    <a href="{{ route('size-guide') }}" class="text-xs sm:text-sm text-[#8B4513] hover:underline">Size Guide</a>
                </div>

                <!-- Quantity & Add to Cart -->
                <div class="border-t border-gray-200 pt-4 sm:pt-6">
                    <div class="flex items-center gap-3 sm:gap-4 mb-4 sm:mb-6">
                        <label class="text-sm sm:text-base font-medium text-gray-700">Quantity:</label>
                        <div class="flex items-center border-2 border-gray-300 rounded-lg">
                            <button class="px-3 py-1.5 sm:px-4 sm:py-2 text-gray-700 hover:bg-gray-100 text-sm sm:text-base"
                                onclick="decreaseQty()">-</button>
                            <input type="number" id="quantity" value="1" min="1" max="10"
                                class="w-12 sm:w-16 text-center border-0 focus:ring-0 text-gray-700 font-normal text-sm sm:text-base">
                            <button class="px-3 py-1.5 sm:px-4 sm:py-2 text-gray-700 hover:bg-gray-100 text-sm sm:text-base"
                                onclick="increaseQty()">+</button>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2 sm:gap-3">
                        <button id="add-to-cart-btn"
                            class="w-full bg-[#8B4513] text-white py-2 sm:py-2.5 px-2 sm:px-3 rounded-lg font-medium hover:bg-[#654321] transition-all text-xs sm:text-sm flex items-center justify-center gap-1.5">
                            <span class="add-to-cart-text">Add to Cart</span>
                            <span class="add-to-cart-spinner hidden">
                                <i class="fi fi-rr-spinner animate-spin text-xs"></i>
                            </span>
                        </button>
                        <button id="buy-now-btn"
                            class="w-full bg-white border-2 border-[#8B4513] text-[#8B4513] py-2 sm:py-2.5 px-2 sm:px-3 rounded-lg font-medium hover:bg-[#F5F1EB] transition-all text-xs sm:text-sm flex items-center justify-center gap-1.5">
                            <span class="buy-now-text">Buy Now</span>
                            <span class="buy-now-spinner hidden">
                                <i class="fi fi-rr-spinner animate-spin text-xs"></i>
                            </span>
                        </button>
                    </div>
                </div>

                <!-- Product Details -->
                <!-- Accordion Section -->
                <div class="border-t border-gray-200 pt-4 sm:pt-6 space-y-3">
                    @php
                    $accordions = [
                    'Product Details' => [
                    'Fabric' => 'Comfortable Cotton',
                    'Fit' => 'Regular Fit',
                    'Length' => 'Knee Length',
                    'Care Instructions' => 'Machine Wash',
                    'SKU' => $productId ?? 'AK-FPA-001'
                    ],
                    'Fabric & Care' => [
                    'Material' => 'Cotton Blend',
                    'Washing' => 'Hand Wash / Machine Wash'
                    ],
                    'Shipping & Returns' => [
                    'Shipping' => 'Free shipping on orders above ₹999',
                    'Delivery' => '3-5 business days',
                    'Returns' => '7-day easy returns'
                    ],
                    'Seller Information' => [
                    'Seller' => 'AURA KURTIS Official Store',
                    'Contact' => 'support@aurakurtis.com'
                    ]
                    ];
                    @endphp

                    @foreach($accordions as $title => $content)
                    <div class="accordion border border-gray-200 rounded-lg overflow-hidden">
                        <button
                            class="accordion-btn w-full flex justify-between items-center px-3 sm:px-4 py-2 sm:py-3 text-left font-semibold text-black hover:bg-gray-50 transition-all text-sm sm:text-base">
                            {{ $title }}
                            <span class="accordion-icon text-lg sm:text-xl">+</span>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden px-3 sm:px-4 transition-all duration-500">
                            <ul class="py-2 space-y-1 text-xs sm:text-sm text-gray-600">
                                @foreach($content as $key => $value)
                                <li><span class="font-medium text-gray-800">{{ $key }}:</span> {{ $value }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>


                <!-- Delivery Info -->
                <div class="bg-[#F5F1EB] p-4 sm:p-6 rounded-lg">
                    <h3 class="text-base sm:text-lg font-semibold text-black mb-3 sm:mb-4">Delivery & Returns</h3>
                    <ul class="space-y-1.5 sm:space-y-2 text-xs sm:text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <i class="fi fi-rr-truck text-[#8B4513] mt-0.5 text-xs sm:text-sm"></i>
                            <span>Free shipping on orders above ₹999</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fi fi-rr-clock text-[#8B4513] mt-0.5 text-xs sm:text-sm"></i>
                            <span>Delivery within 3-5 business days</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fi fi-rr-undo text-[#8B4513] mt-0.5 text-xs sm:text-sm"></i>
                            <span>Easy 7-day returns & exchanges</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ================= REVIEW MODAL ================= -->
<div id="reviewForm"
  class="fixed inset-0 hidden items-center justify-center bg-black/60 px-4"
  style="z-index:999">

  <div
    class="bg-white w-full max-w-2xl rounded-2xl shadow-xl p-5 max-h-[90vh] overflow-y-auto relative">

    <!-- Header -->
    <div class="flex justify-between items-center mb-4">
      <h3 class="text-lg font-semibold">Write a review</h3>
      <button id="cancelReviewTop"
        class="bg-black text-white px-4 py-2 rounded-lg text-sm">
        Cancel
      </button>
    </div>

    <!-- Rating -->
    <div class="mb-4 text-center">
      <p class="font-medium mb-2">Rating</p>
      <div class="flex justify-center text-2xl text-gray-300 gap-1 cursor-pointer" id="reviewStars">
        <span data-star="1">★</span>
        <span data-star="2">★</span>
        <span data-star="3">★</span>
        <span data-star="4">★</span>
        <span data-star="5">★</span>
      </div>
    </div>

    <!-- Title -->
    <div class="mb-4">
      <label class="block mb-1 text-sm font-medium">Review Title</label>
      <input type="text"
        class="w-full border rounded-lg px-3 py-2">
    </div>

    <!-- Content -->
    <div class="mb-4">
      <label class="block mb-1 text-sm font-medium">Review Content</label>
      <textarea rows="4"
        class="w-full border rounded-lg px-3 py-2"></textarea>
    </div>

    <!-- Name -->
    <div class="mb-4">
      <label class="block mb-1 text-sm font-medium">Display Name</label>
      <input type="text"
        class="w-full border rounded-lg px-3 py-2">
    </div>

    <!-- Email -->
    <div class="mb-4">
      <label class="block mb-1 text-sm font-medium">Email</label>
      <input type="email"
        class="w-full border rounded-lg px-3 py-2">
    </div>

    <!-- Actions -->
    <div class="flex justify-end gap-3 pt-4 border-t">
      <button id="cancelReviewBottom"
        class="border px-5 py-2 rounded-lg text-sm">
        Cancel
      </button>
      <button
        class="bg-black text-white px-5 py-2 rounded-lg text-sm">
        Submit
      </button>
    </div>

  </div>
</div>


<!-- ================= REVIEW IMAGE MODAL ================= -->
<div id="reviewImageModal"
    class="fixed inset-0 bg-black bg-opacity-70 hidden justify-center items-center z-50 overflow-x-auto">
    <div class="relative max-w-4xl w-full flex gap-4 p-4">
        <button id="closeReviewModal" class="absolute top-2 right-2 text-white text-3xl z-50">&times;</button>
        <div id="modalImagesContainer" class="flex gap-4 overflow-x-auto scroll-smooth"></div>
    </div>
</div>


<!-- Shop The Look Section -->
<x-shop-look-section 
    image="{{ asset('images/shop_img1.webp') }}" 
    title="Shop The Look"
    subtitle="Fierce elegance is about authenticity" 
    :products="$products['bestsellers'] ?? []" 
    id="shop-look-carousel" />

<!-- Our Bestsellers Carousel -->
<x-product-carousel 
    id="bestsellers" 
    title="OUR BESTSELLERS" 
    :products="$products['bestsellers'] ?? []" />

@push('scripts')
<script>
// Change main product image when thumbnail is clicked
function changeMainImage(src, clickedThumb) {
    document.getElementById('main-product-image').src = src;
    
    // Update active thumbnail
    document.querySelectorAll('.product-thumbnail').forEach(thumb => {
        thumb.classList.remove('border-[#8B4513]');
        thumb.classList.add('border-gray-200');
    });
    
    if (clickedThumb) {
        clickedThumb.classList.remove('border-gray-200');
        clickedThumb.classList.add('border-[#8B4513]');
    }
}

// Get selected size
function getSelectedSize() {
    // Use data attribute or active-size class
    const activeSizeBtn = document.querySelector('.size-btn.active-size') || 
                          document.querySelector('.size-btn[data-size].border-\\[\\#8B4513\\]');
    
    if (activeSizeBtn) {
        return activeSizeBtn.getAttribute('data-size') || activeSizeBtn.textContent.trim();
    }
    
    // Default to 'L' if no size selected (since L is default in HTML)
    return 'L';
}

// Add to Cart functionality
document.getElementById('add-to-cart-btn').addEventListener('click', function() {
    const btn = this;
    const spinner = btn.querySelector('.add-to-cart-spinner');
    const text = btn.querySelector('.add-to-cart-text');
    
    // Show loading
    spinner.classList.remove('hidden');
    text.textContent = 'Adding...';
    btn.disabled = true;
    
    // Get product details
    const productId = '{{ $productId ?? $product["id"] ?? "product-1" }}';
    const productName = '{{ $product["name"] ?? "Floral Print Anarkali Kurti" }}';
    const productPrice = {{ $product["price"] ?? 2499 }};
    const productImage = document.getElementById('main-product-image').src;
    const selectedSize = getSelectedSize();
    const quantity = parseInt(document.getElementById('quantity').value) || 1;
    
            // Add to cart using cartManager
            setTimeout(() => {
                if (window.cartManager) {
                    const product = {
                        id: productId,
                        name: productName,
                        price: productPrice,
                        image: productImage,
                        size: selectedSize,
                        quantity: quantity
                    };
                    
                    // cartManager.addToCart shows toast by default, which is what we want
                    window.cartManager.addToCart(product, true);
                } else {
                    // Fallback if cartManager not available
                    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
                    cart.push({
                        id: productId,
                        name: productName,
                        price: productPrice,
                        image: productImage,
                        size: selectedSize,
                        quantity: quantity
                    });
                    localStorage.setItem('cart', JSON.stringify(cart));
                    
                    // Only show toast if cartManager is not available
                    if (typeof showToast === 'function') {
                        showToast('Product added to cart!', 'success');
                    }
                }
        
        // Reset button
        spinner.classList.add('hidden');
        text.textContent = 'Add to Cart';
        btn.disabled = false;
    }, 500);
});

// Buy Now functionality
document.getElementById('buy-now-btn').addEventListener('click', function() {
    const btn = this;
    const spinner = btn.querySelector('.buy-now-spinner');
    const text = btn.querySelector('.buy-now-text');
    
    // Show loading
    spinner.classList.remove('hidden');
    text.textContent = 'Processing...';
    btn.disabled = true;
    
    // Check if user is logged in
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    setTimeout(() => {
        if (!currentUser) {
            // User not logged in - redirect to login
            if (typeof showToast === 'function') {
                showToast('Please login to continue', 'error');
            }
            setTimeout(() => {
                window.location.href = '{{ route("login") }}';
            }, 1500);
        } else {
            // User logged in - add to cart and redirect to checkout
            const productId = '{{ $productId ?? $product["id"] ?? "product-1" }}';
            const productName = '{{ $product["name"] ?? "Floral Print Anarkali Kurti" }}';
            const productPrice = {{ $product["price"] ?? 2499 }};
            const productImage = document.getElementById('main-product-image').src;
            const selectedSize = getSelectedSize();
            const quantity = parseInt(document.getElementById('quantity').value) || 1;
            
            if (window.cartManager) {
                const product = {
                    id: productId,
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    size: selectedSize,
                    quantity: quantity
                };
                
                window.cartManager.addToCart(product);
            } else {
                // Fallback
                const cart = JSON.parse(localStorage.getItem('cart') || '[]');
                cart.push({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    size: selectedSize,
                    quantity: quantity
                });
                localStorage.setItem('cart', JSON.stringify(cart));
            }
            
            // Redirect to checkout
            window.location.href = '{{ route("checkout") }}';
        }
        
        // Reset button
        spinner.classList.add('hidden');
        text.textContent = 'Buy Now';
        btn.disabled = false;
    }, 500);
});

function increaseQty() {
    const qtyInput = document.getElementById('quantity');
    if (parseInt(qtyInput.value) < 10) {
        qtyInput.value = parseInt(qtyInput.value) + 1;
    }
}

function decreaseQty() {
    const qtyInput = document.getElementById('quantity');
    if (parseInt(qtyInput.value) > 1) {
        qtyInput.value = parseInt(qtyInput.value) - 1;
    }
}

// Size selection
document.querySelectorAll('.size-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.size-btn').forEach(b => {
            b.classList.remove('border-[#8B4513]', 'bg-[#F5F1EB]', 'active-size');
            b.classList.add('border-gray-300');
        });
        this.classList.add('border-[#8B4513]', 'bg-[#F5F1EB]', 'active-size');
        this.classList.remove('border-gray-300');
    });
});
document.querySelectorAll('.accordion-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const content = btn.nextElementSibling;
        const icon = btn.querySelector('.accordion-icon');

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            icon.textContent = '+';
        } else {
            // Close others
            document.querySelectorAll('.accordion-content').forEach(c => c.style.maxHeight = null);
            document.querySelectorAll('.accordion-icon').forEach(i => i.textContent = '+');

            content.style.maxHeight = content.scrollHeight + 'px';
            icon.textContent = '-';
        }
    });
});
const shareBtn = document.getElementById('shareBtn');
const shareModal = document.getElementById('shareModal');
const closeModal = document.getElementById('closeModal');

shareBtn.addEventListener('click', () => shareModal.classList.remove('hidden'));
closeModal.addEventListener('click', () => shareModal.classList.add('hidden'));
shareModal.addEventListener('click', (e) => {
    if (e.target === shareModal) shareModal.classList.add('hidden');
});

// Copy link
const copyLinkBtn = document.getElementById('copyLink');
if (copyLinkBtn) {
    copyLinkBtn.addEventListener('click', () => {
        navigator.clipboard.writeText(window.location.href).then(() => {
            if (typeof showToast === 'function') {
                showToast('Link copied to clipboard!', 'success');
            } else {
                alert('Link copied to clipboard!');
            }
            // Close modal after copying
            shareModal.classList.add('hidden');
        }).catch(() => {
            if (typeof showToast === 'function') {
                showToast('Failed to copy link', 'error');
            }
        });
    });
}
// ================= DYNAMIC REVIEW FORM =================
const writeBtnDesktop = document.getElementById('writeReviewBtnDesktop');
const writeBtnMobile = document.getElementById('writeReviewBtn');
const reviewForm = document.getElementById('reviewForm');
const cancelBtnTop = document.getElementById('cancelReviewTop');
const cancelBtnBottom = document.getElementById('cancelReviewBottom');

// Function to open the review form modal
function openReviewFormModal() {
    if (reviewForm) {
        reviewForm.classList.remove('hidden');
        reviewForm.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
}

// Function to close the review form modal
function closeReviewFormModal() {
    if (reviewForm) {
        reviewForm.classList.add('hidden');
        reviewForm.style.display = 'none';
        document.body.style.overflow = '';
    }
}

// Open review form from desktop button
if (writeBtnDesktop) {
    writeBtnDesktop.addEventListener('click', openReviewFormModal);
}

// Open review form from mobile button (if exists)
if (writeBtnMobile) {
    writeBtnMobile.addEventListener('click', openReviewFormModal);
}

// Close review form
if (cancelBtnTop) {
    cancelBtnTop.addEventListener('click', closeReviewFormModal);
}

if (cancelBtnBottom) {
    cancelBtnBottom.addEventListener('click', closeReviewFormModal);
}

// Close on backdrop click
if (reviewForm) {
    reviewForm.addEventListener('click', (e) => {
        if (e.target === reviewForm) {
            closeReviewFormModal();
        }
    });
}

// ================= STAR RATING =================
const stars = document.querySelectorAll('#reviewStars i');
let selectedRating = 0;

stars.forEach(star => {
    star.addEventListener('click', () => {
        selectedRating = parseInt(star.dataset.star);
        stars.forEach(s => s.classList.remove('text-yellow-400'));
        for (let i = 0; i < selectedRating; i++) stars[i].classList.add('text-yellow-400');
    });
});

// ================= IMAGE PREVIEW =================
const reviewImageInput = document.getElementById('reviewImage');
const previewImages = document.getElementById('previewImages');
let selectedImages = [];

if (reviewImageInput) {
    // Trigger file input when clicking the upload area
    const uploadArea = reviewImageInput.closest('.border-dashed');
    if (uploadArea) {
        uploadArea.addEventListener('click', (e) => {
            if (e.target !== reviewImageInput && e.target.tagName !== 'BUTTON') {
                reviewImageInput.click();
            }
        });
    }
    
    reviewImageInput.addEventListener('change', (e) => {
        if (previewImages) previewImages.innerHTML = '';
        selectedImages = Array.from(e.target.files);

        selectedImages.forEach((file, index) => {
            const imgWrapper = document.createElement('div');
            imgWrapper.classList.add('relative');
            const isVideo = file.type.startsWith('video/');
            imgWrapper.innerHTML = `
                ${isVideo ? 
                    `<video src="${URL.createObjectURL(file)}" class="w-20 h-20 object-cover rounded cursor-pointer"></video>` :
                    `<img src="${URL.createObjectURL(file)}" class="w-20 h-20 object-cover rounded cursor-pointer">`
                }
                <button class="absolute top-0 right-0 bg-black bg-opacity-50 text-white text-xs w-5 h-5 rounded-full flex justify-center items-center remove-img">&times;</button>
            `;
            if (previewImages) previewImages.appendChild(imgWrapper);

            // Remove image
            imgWrapper.querySelector('.remove-img').addEventListener('click', () => {
                selectedImages.splice(index, 1);
                imgWrapper.remove();
            });

            // Click to open modal
            const mediaElement = imgWrapper.querySelector('img') || imgWrapper.querySelector('video');
            if (mediaElement) {
                mediaElement.addEventListener('click', () => openImageModal([file]));
            }
        });
    });
}

// ================= IMAGE MODAL =================
const imageModal = document.getElementById('reviewImageModal');
const modalImagesContainer = document.getElementById('modalImagesContainer');
const closeModalBtn = document.getElementById('closeReviewModal');

function openImageModal(images) {
    modalImagesContainer.innerHTML = '';
    images.forEach(file => {
        const imgEl = document.createElement('img');
        imgEl.src = file instanceof File ? URL.createObjectURL(file) : file;
        imgEl.classList.add('h-96', 'object-contain', 'flex-shrink-0');
        modalImagesContainer.appendChild(imgEl);
    });
    imageModal.classList.remove('hidden');
}

closeModalBtn.addEventListener('click', () => imageModal.classList.add('hidden'));
imageModal.addEventListener('click', e => {
    if (e.target === imageModal) imageModal.classList.add('hidden');
});

// ================= SUBMIT REVIEW =================
const reviewGrid = document.getElementById('reviewsGrid');
document.getElementById('submitReview').addEventListener('click', () => {
    const title = document.getElementById('reviewTitle').value.trim();
    const content = document.getElementById('reviewContent').value.trim();
    const name = document.getElementById('reviewName').value.trim();

    if (!title || !content || !name) {
        if (typeof showToast === 'function') {
            showToast('Please fill all required fields!', 'error');
        } else {
            alert('Please fill required fields!');
        }
        return;
    }

    // Create Review Card
    const newReview = document.createElement('div');
    newReview.classList.add('review', 'border', 'border-gray-200', 'rounded-lg', 'p-4', 'mb-4');
    newReview.innerHTML = `
        <p class="font-semibold text-[#654321]">${name}</p>
        <div class="flex text-yellow-400 gap-1 mb-2">
            ${'<i class="fi fi-sr-star"></i>'.repeat(selectedRating)}
            ${'<i class="fi fi-sr-star text-gray-300"></i>'.repeat(5-selectedRating)}
        </div>
        <p class="text-gray-600 mt-1 mb-2">${content}</p>
        <div class="review-images flex gap-2 overflow-x-auto scroll-smooth"></div>
    `;

    const reviewImagesContainer = newReview.querySelector('.review-images');
    selectedImages.forEach(file => {
        const img = document.createElement('img');
        img.src = URL.createObjectURL(file);
        img.classList.add('w-20', 'h-20', 'object-cover', 'rounded', 'cursor-pointer', 'flex-shrink-0');
        img.addEventListener('click', () => openImageModal([file]));
        reviewImagesContainer.appendChild(img);
    });

    reviewGrid.prepend(newReview);

    // Show success toast
    if (typeof showToast === 'function') {
        showToast('Review submitted successfully!', 'success');
    }

    // Reset form
    closeReviewFormModal();
    document.getElementById('reviewTitle').value = '';
    document.getElementById('reviewContent').value = '';
    document.getElementById('reviewName').value = '';
    document.getElementById('reviewEmail').value = '';
    if (reviewImageInput) reviewImageInput.value = '';
    if (previewImages) previewImages.innerHTML = '';
    selectedImages = [];
    selectedRating = 0;
    stars.forEach(s => s.classList.remove('text-yellow-400'));
});
</script>
@endpush
@endsection