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

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-12">
            <!-- Product Images Grid (Like Reference Image) -->
            <div class="grid grid-cols-2 gap-4">

                <!-- Image 1 -->
                <div class="overflow-hidden rounded-lg bg-gray-100">
                    <img src="https://khatricreations.com/cdn/shop/files/KC200246_1.png" alt="Product Image 1"
                        class="w-full h-full object-cover">
                </div>

                <!-- Image 2 -->
                <div class="overflow-hidden rounded-lg bg-gray-100">
                    <img src="https://khatricreations.com/cdn/shop/files/KC200246_2.png" alt="Product Image 2"
                        class="w-full h-full object-cover">
                </div>

                <!-- Image 3 -->
                <div class="overflow-hidden rounded-lg bg-gray-100">
                    <img src="https://khatricreations.com/cdn/shop/files/KC200246_3.png" alt="Product Image 3"
                        class="w-full h-full object-cover">
                </div>

                <!-- Image 4 -->
                <div class="overflow-hidden rounded-lg bg-gray-100">
                    <img src="https://khatricreations.com/cdn/shop/files/KC200246_1.png" alt="Product Image 4"
                        class="w-full h-full object-cover">
                </div>

            </div>


            <!-- Product Info -->
            <div class="space-y-6">
                <div>
                    <span
                        class="inline-block bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold mb-3">NEW</span>
                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-[#654321] mb-4">Floral Print Anarkali
                        Kurti</h1>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fi fi-sr-star"></i>
                            <i class="fi fi-sr-star"></i>
                            <i class="fi fi-sr-star"></i>
                            <i class="fi fi-sr-star"></i>
                            <i class="fi fi-sr-star"></i>
                        </div>
                        <span class="text-sm text-gray-600">(4.8) 120 Reviews</span>
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
                    class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
                    <div class="bg-white rounded-lg p-6 w-80 relative">
                        <button id="closeModal"
                            class="absolute top-2 right-2 text-gray-500 hover:text-gray-900">&times;</button>
                        <h3 class="text-lg font-semibold text-[#654321] mb-4">Share this product</h3>
                        <div class="flex flex-col gap-3">
                            <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank"
                                class="flex items-center gap-2 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition-all">
                                <i class="fi fi-brands-whatsapp"></i> WhatsApp
                            </a>
                            <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}"
                                target="_blank"
                                class="flex items-center gap-2 px-4 py-2 bg-blue-400 text-white rounded hover:bg-blue-500 transition-all">
                                <i class="fi fi-brands-twitter"></i> Twitter
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                target="_blank"
                                class="flex items-center gap-2 px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800 transition-all">
                                <i class="fi fi-brands-facebook"></i> Facebook
                            </a>
                            <button id="copyLink"
                                class="flex items-center gap-2 px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 transition-all">
                                <i class="fi fi-rr-copy"></i> Copy Link
                            </button>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200 pt-6">
                    <div class="flex items-baseline gap-4 mb-4">
                        <span class="text-3xl sm:text-4xl font-bold text-[#8B4513]">₹2,499</span>
                        <span class="text-xl text-gray-400 line-through">₹3,299</span>
                        <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-sm font-semibold">24% OFF</span>
                    </div>
                    <p class="text-sm text-gray-600 mb-6">Inclusive of all taxes. Free shipping on orders above ₹999</p>
                </div>

                <!-- Size Selection -->
                <div class="border-t border-gray-200 pt-6">
                    <h3 class="text-lg font-semibold text-[#654321] mb-4">Select Size</h3>
                    <div class="flex gap-3 mb-6">
                        <button
                            class="size-btn w-16 h-16 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-semibold text-[#654321] transition-all">S</button>
                        <button
                            class="size-btn w-16 h-16 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-semibold text-[#654321] transition-all">M</button>
                        <button
                            class="size-btn w-16 h-16 border-2 border-[#8B4513] bg-[#F5F1EB] rounded-lg font-semibold text-[#654321] transition-all">L</button>
                        <button
                            class="size-btn w-16 h-16 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-semibold text-[#654321] transition-all">XL</button>
                        <button
                            class="size-btn w-16 h-16 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-semibold text-[#654321] transition-all">XXL</button>
                    </div>
                    <a href="{{ route('size-guide') }}" class="text-sm text-[#8B4513] hover:underline">Size Guide</a>
                </div>

                <!-- Quantity & Add to Cart -->
                <div class="border-t border-gray-200 pt-6">
                    <div class="flex items-center gap-4 mb-6">
                        <label class="text-lg font-semibold text-[#654321]">Quantity:</label>
                        <div class="flex items-center border-2 border-gray-300 rounded-lg">
                            <button class="px-4 py-2 text-[#654321] hover:bg-gray-100"
                                onclick="decreaseQty()">-</button>
                            <input type="number" id="quantity" value="1" min="1" max="10"
                                class="w-16 text-center border-0 focus:ring-0 text-[#654321] font-semibold">
                            <button class="px-4 py-2 text-[#654321] hover:bg-gray-100"
                                onclick="increaseQty()">+</button>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button
                            class="flex-1 bg-[#8B4513] text-white py-4 px-6 rounded-lg font-semibold hover:bg-[#654321] transition-all text-lg">
                            Add to Cart
                        </button>
                        <button
                            class="flex-1 bg-white border-2 border-[#8B4513] text-[#8B4513] py-4 px-6 rounded-lg font-semibold hover:bg-[#F5F1EB] transition-all text-lg">
                            Buy Now
                        </button>
                    </div>
                </div>

                <!-- Product Details -->
                <!-- Accordion Section -->
                <div class="border-t border-gray-200 pt-6 space-y-4">
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
                            class="accordion-btn w-full flex justify-between items-center px-4 py-3 text-left font-semibold text-[#654321] hover:bg-gray-50 transition-all">
                            {{ $title }}
                            <span class="accordion-icon text-xl">+</span>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden px-4 transition-all duration-500">
                            <ul class="py-2 space-y-1 text-gray-600">
                                @foreach($content as $key => $value)
                                <li><strong class="text-[#654321]">{{ $key }}:</strong> {{ $value }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>


                <!-- Delivery Info -->
                <div class="bg-[#F5F1EB] p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-[#654321] mb-4">Delivery & Returns</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <i class="fi fi-rr-truck text-[#8B4513] mt-1"></i>
                            <span>Free shipping on orders above ₹999</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fi fi-rr-clock text-[#8B4513] mt-1"></i>
                            <span>Delivery within 3-5 business days</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i class="fi fi-rr-undo text-[#8B4513] mt-1"></i>
                            <span>Easy 7-day returns & exchanges</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= CUSTOMER REVIEWS ================= -->
<section class="customer-reviews py-12 sm:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl font-serif text-[#654321] mb-6">Customer Reviews</h2>

        <!-- Reviews Grid -->
        <div id="reviewsGrid" class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
            <!-- Example Review -->
            <div class="review border border-gray-200 rounded-lg p-4">
                <p class="font-semibold text-[#654321]">Anjali</p>
                <div class="flex text-yellow-400 gap-1 mb-2">
                    <i class="fi fi-sr-star"></i>
                    <i class="fi fi-sr-star"></i>
                    <i class="fi fi-sr-star"></i>
                    <i class="fi fi-sr-star"></i>
                    <i class="fi fi-sr-star"></i>
                </div>
                <p class="text-gray-600 mb-2">Fabric quality is very good. Loved the fitting.</p>

                <!-- Scrollable Images -->
                <div class="review-images flex gap-2 overflow-x-auto scroll-smooth">
                    <img src="https://khatricreations.com/cdn/shop/files/KC200246_1.png"
                        class="review-img w-20 h-20 object-cover rounded cursor-pointer flex-shrink-0"
                        alt="Review Image">
                    <img src="https://khatricreations.com/cdn/shop/files/KC200246_2.png"
                        class="review-img w-20 h-20 object-cover rounded cursor-pointer flex-shrink-0"
                        alt="Review Image">
                </div>
            </div>
        </div>

        <!-- Write Review Button -->
        <div class="flex justify-center mb-6">
            <button id="writeReviewBtn"
                class="bg-[#8B4513] text-white py-3 px-6 rounded-full hover:bg-[#654321] transition-all">
                Write a Review
            </button>
        </div>

        <!-- ================== REVIEW FORM ================== -->
        <div id="reviewForm"
            class="hidden bg-white shadow-lg rounded-lg border border-gray-200 p-6 space-y-6 max-w-xl mx-auto">
            <!-- Header -->
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-bold text-[#654321]">Write a Review</h3>
                <button id="cancelReview"
                    class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-300 transition duration-200">
                    Cancel
                </button>
            </div>

            <!-- Rating -->
            <div>
                <label class="block text-gray-700 mb-2 font-medium">Rating</label>
                <div id="reviewStars" class="flex gap-2 text-3xl text-gray-300 cursor-pointer">
                    <i class="fi fi-sr-star" data-star="1"></i>
                    <i class="fi fi-sr-star" data-star="2"></i>
                    <i class="fi fi-sr-star" data-star="3"></i>
                    <i class="fi fi-sr-star" data-star="4"></i>
                    <i class="fi fi-sr-star" data-star="5"></i>
                </div>
            </div>

            <!-- Review Title -->
            <input type="text" id="reviewTitle" placeholder="Review Title (100 chars max)"
                class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] transition">

            <!-- Review Content -->
            <textarea id="reviewContent" rows="4" placeholder="Write your review..."
                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] transition resize-none"></textarea>

            <!-- Image Upload (Camera & Gallery) -->
            <div>
                <label class="block mb-2 text-gray-700 font-medium">Upload Pictures (optional)</label>
                <input type="file" id="reviewImage" accept="image/*" multiple capture="environment"
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 cursor-pointer focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513]">
                <div id="previewImages" class="flex gap-3 mt-3 flex-wrap"></div>
            </div>

            <!-- Name & Email -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <input type="text" id="reviewName" placeholder="Display Name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] transition">
                <input type="email" id="reviewEmail" placeholder="Email Address"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] transition">
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button id="submitReview"
                    class="bg-[#8B4513] text-white px-6 py-2 rounded-lg hover:bg-[#654321] transition duration-200 shadow-md">
                    Submit Review
                </button>
            </div>
        </div>

        <!-- ================== IMAGE MODAL ================== -->
        <div id="reviewImageModal"
            class="fixed inset-0 bg-black bg-opacity-70 hidden justify-center items-center z-50 overflow-x-auto p-4">
            <div class="relative flex gap-4 max-w-4xl w-full">
                <button id="closeReviewModal" class="absolute top-2 right-2 text-white text-3xl z-50">&times;</button>
                <div id="modalImagesContainer" class="flex gap-4 overflow-x-auto scroll-smooth"></div>
            </div>
        </div>
    </div>
</section>

<!-- ================= REVIEW IMAGE MODAL ================= -->
<div id="reviewImageModal"
    class="fixed inset-0 bg-black bg-opacity-70 hidden justify-center items-center z-50 overflow-x-auto">
    <div class="relative max-w-4xl w-full flex gap-4 p-4">
        <button id="closeReviewModal" class="absolute top-2 right-2 text-white text-3xl z-50">&times;</button>
        <div id="modalImagesContainer" class="flex gap-4 overflow-x-auto scroll-smooth"></div>
    </div>
</div>


<!-- Related Products -->
<section class="related-products py-12 sm:py-16 bg-[#F5F1EB]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-center mb-8 sm:mb-12 text-[#654321]">You May Also
            Like</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @for($i = 1; $i <= 4; $i++) <a href="{{ route('product.detail', ['id' => 'related-product-' . $i]) }}"
                class="group cursor-pointer">
                <div class="relative overflow-hidden mb-4 rounded-lg bg-white">
                    <img src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=400&h=500&fit=crop&sig={{ $i }}"
                        alt="Related Product {{ $i }}"
                        class="w-full h-64 sm:h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h3 class="text-lg font-medium text-[#654321] mb-2">Related Product {{ $i }}</h3>
                <p class="text-base text-[#8B4513] font-semibold">₹{{ 1999 + ($i * 200) }}</p>
                </a>
                @endfor
        </div>
    </div>
</section>

<script>
function changeMainImage(src) {
    document.getElementById('main-product-image').src = src;
}

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
            b.classList.remove('border-[#8B4513]', 'bg-[#F5F1EB]');
            b.classList.add('border-gray-300');
        });
        this.classList.add('border-[#8B4513]', 'bg-[#F5F1EB]');
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
document.getElementById('copyLink').addEventListener('click', () => {
    navigator.clipboard.writeText(window.location.href);
    alert('Link copied to clipboard!');
});
// ================= DYNAMIC REVIEW FORM =================
const writeBtn = document.getElementById('writeReviewBtn');
const reviewForm = document.getElementById('reviewForm');
const cancelBtn = document.getElementById('cancelReview');

writeBtn.addEventListener('click', () => reviewForm.classList.remove('hidden'));
cancelBtn.addEventListener('click', () => reviewForm.classList.add('hidden'));

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

reviewImageInput.addEventListener('change', (e) => {
    previewImages.innerHTML = '';
    selectedImages = Array.from(e.target.files);

    selectedImages.forEach((file, index) => {
        const imgWrapper = document.createElement('div');
        imgWrapper.classList.add('relative');
        imgWrapper.innerHTML = `
            <img src="${URL.createObjectURL(file)}" class="w-20 h-20 object-cover rounded cursor-pointer">
            <button class="absolute top-0 right-0 bg-black bg-opacity-50 text-white text-xs w-5 h-5 rounded-full flex justify-center items-center remove-img">&times;</button>
        `;
        previewImages.appendChild(imgWrapper);

        // Remove image
        imgWrapper.querySelector('.remove-img').addEventListener('click', () => {
            selectedImages.splice(index, 1);
            imgWrapper.remove();
        });

        // Click to open modal
        imgWrapper.querySelector('img').addEventListener('click', () => openImageModal([file]));
    });
});

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

    if (!title || !content || !name) return alert('Please fill required fields!');

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

    // Reset form
    reviewForm.classList.add('hidden');
    document.getElementById('reviewTitle').value = '';
    document.getElementById('reviewContent').value = '';
    document.getElementById('reviewName').value = '';
    document.getElementById('reviewEmail').value = '';
    reviewImageInput.value = '';
    previewImages.innerHTML = '';
    selectedImages = [];
    selectedRating = 0;
    stars.forEach(s => s.classList.remove('text-yellow-400'));
});
</script>
@endsection