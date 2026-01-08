@extends('layouts.app')

@section('title', 'New Arrivals - AURA KURTIS')

@section('content')

@php
$products = [
[
'id' => 1,
'slug' => 'elegant-cotton-kurti',
'title' => 'Elegant Cotton Kurti',
'category' => 'Daily Wear',
'image' => 'https://khatricreations.com/cdn/shop/files/KC200246_1.png?crop=center&height=2389&v=1764854172&width=1792',
'price' => 999,
'old_price' => 1999,
'badge' => 'SALE',
'badge_value' => '-52%',
],
[
'id' => 2,
'slug' => 'Festive-Anarkali-Kurti',
'title' => 'Festive Anarkali Kurti',
'category' => 'Festive',
'image' => 'https://stylejaipur.com/cdn/shop/files/PHOTO-2023-10-09-21-02-48.jpg?v=1728409404&width=533',
'price' => 1499,
'old_price' => 799,
'badge' => 'NEW',
],
[
'id' => 3,
'slug' => 'Office-Wear-Straight-Kurti',
'title' => 'Office Wear Straight Kurti',
'category' => 'Office',
'image' => 'https://stylejaipur.com/cdn/shop/files/WhatsAppImage2023-09-29at11.24.49PM.jpg?v=1728409204&width=533',
'price' => 899,
'old_price' => 799,
'badge' => 'TRENDING',
],
[
'id' => 5,
'slug' => 'Daily-Wear-Printed-Kurti',
'title' => 'Daily Wear Printed Kurti',
'category' => 'Daily Wear',
'image' => 'https://stylejaipur.com/cdn/shop/files/DSC_2461copy.jpg?v=1767345930&width=533',
'price' => 799,
'old_price' => 799,
'badge' => 'NEW',
],
];

$newProducts = collect($products)->filter(fn($p) => isset($p['badge']) && $p['badge'] === 'NEW');

$perPage = 6;
$page = request()->get('page', 1);
$totalPages = ceil($newProducts->count() / $perPage);

$paginatedProducts = $newProducts->slice(($page - 1) * $perPage, $perPage);
@endphp

<!-- ================= BEAUTIFUL HERO ================= -->
<section class="relative overflow-hidden">
    <!-- Background Image -->
    <img src="https://tipsandbeauty.com/wp-content/uploads/2021/01/Stylish-Anarkali-Short-Kurti-With-Long-Flared-Sharara.jpg"
        class="w-full h-[450px] sm:h-[520px] object-cover scale-105">

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/40 to-black/20"></div>

    <!-- Content -->
    <div class="absolute inset-0 flex items-center justify-center px-4">
        <div
            class="bg-white/90 backdrop-blur-lg px-8 sm:px-12 py-10 text-center max-w-xl rounded-2xl shadow-2xl animate-fadeIn">

            <!-- Badge -->
            <span
                class="inline-block mb-4 px-4 py-1 text-xs tracking-widest font-semibold text-white bg-[#654321] rounded-full">
                ✨ JUST LAUNCHED
            </span>

            <!-- Title -->
            <h1 class="text-3xl sm:text-5xl font-serif font-bold text-[#654321] leading-tight">
                New Arrivals
            </h1>

            <!-- Subtitle -->
            <p class="mt-4 text-sm sm:text-base text-gray-700 leading-relaxed">
                Discover our latest handpicked collection of elegant, stylish and comfortable
                women kurtis designed for every occasion.
            </p>


        </div>
    </div>
</section>


<!-- ================= PRODUCTS ================= -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse ($paginatedProducts as $product)
            <div class="group bg-white rounded-2xl overflow-hidden shadow hover:shadow-lg transition relative">

                <a href="{{ route('product.detail', $product['slug']) }}">
                    <img src="{{ $product['image'] }}"
                        class="w-full h-[400px] object-cover transition-transform duration-500 group-hover:scale-105">
                </a>

                <!-- BADGE -->
                @if(isset($product['badge']))
                <span class="absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full
                    {{ $product['badge'] === 'NEW' ? 'bg-black text-white' : '' }}
                    {{ $product['badge'] === 'SALE' ? 'bg-white text-red-600' : '' }}
                    {{ $product['badge'] === 'TRENDING' ? 'bg-orange-500 text-white' : '' }}">
                    {{ $product['badge'] === 'SALE' ? $product['badge_value'] : $product['badge'] }}
                </span>
                @endif

                <div class="p-4">
                    <h3 class="text-sm font-medium mb-2">{{ $product['title'] }}</h3>
                    <div class="flex items-center gap-2">
                        <span class="text-red-600 font-semibold">₹{{ $product['price'] }}</span>
                        @if ($product['old_price'])
                        <span class="line-through text-gray-400 text-xs">₹{{ $product['old_price'] }}</span>
                        @endif
                    </div>

                    <!-- Hover icons -->
                    <div class="flex gap-3 mt-3 opacity-0 group-hover:opacity-100 transition">
                        <button onclick="toggleWishlist(this)"
                            class="w-9 h-9 flex items-center justify-center bg-gray-100 rounded-full hover:bg-gray-200 transition">
                            <i class="fi fi-sr-heart text-gray-700"></i>
                        </button>

                        <a href="{{ route('product.detail', $product['slug']) }}"
                            class="w-9 h-9 flex items-center justify-center bg-gray-100 rounded-full hover:bg-black hover:text-white transition">
                            <i class="fi fi-rr-eye"></i>
                        </a>

                        <button
                            onclick="openCartModal('{{ $product['image'] }}','{{ $product['title'] }}','{{ $product['price'] }}','{{ $product['old_price'] ?? '' }}')"
                            class="w-9 h-9 flex items-center justify-center bg-gray-100 rounded-full hover:bg-black hover:text-white transition">
                            <i class="fi fi-rr-shopping-bag"></i>
                        </button>
                    </div>
                </div>

            </div>
            @empty
            <p class="col-span-3 text-center text-gray-500">No new arrivals at the moment.</p>
            @endforelse

        </div>

        <!-- ================= PAGINATION ================= -->
        <div class="flex justify-center mt-12 gap-2">
            @for ($p = 1; $p <= $totalPages; $p++) <a href="{{ request()->fullUrlWithQuery(['page' => $p]) }}" class="px-4 py-2 text-sm border rounded-full transition
                {{ $page == $p ? 'bg-black text-white' : 'hover:bg-black hover:text-white' }}">
                {{ $p }}
                </a>
                @endfor
        </div>
    </div>
</section>

<!-- ================= CART MODAL ================= -->
<div id="cartModal" class="fixed inset-0 bg-black/50 z-50 hidden items-center justify-center px-4">

    <div class="bg-white w-full max-w-xl rounded-3xl p-6 relative">

        <!-- Close -->
        <button onclick="closeCartModal()"
            class="absolute top-4 right-4 w-9 h-9 rounded-full bg-gray-100 hover:bg-black hover:text-white transition">
            ✕
        </button>

        <!-- Product -->
        <div class="flex gap-5">
            <img id="cartProductImage" src="" class="w-32 h-40 object-cover rounded-xl">

            <div class="flex-1">
                <h3 id="cartProductTitle" class="font-semibold text-lg">Product Title</h3>

                <div class="flex items-center gap-3 mt-1">
                    <span id="cartProductPrice" class="text-red-600 font-bold text-lg">₹0</span>
                    <span id="cartProductOldPrice" class="line-through text-sm text-gray-400"></span>
                </div>

                <!-- Quantity -->
                <div class="flex items-center gap-3 mt-4">
                    <button onclick="changeQty(-1)" class="w-9 h-9 bg-gray-100 rounded-full text-lg">−</button>

                    <span id="qtyValue" class="font-semibold">1</span>

                    <button onclick="changeQty(1)" class="w-9 h-9 bg-gray-100 rounded-full text-lg">+</button>
                </div>

            </div>
        </div>

        <!-- Size -->
        <div class="mt-6">
            <p class="text-sm font-medium mb-2">Size:</p>
            <div class="flex gap-2">
                @foreach (['M', 'L', 'XL', 'XXL', '3XL'] as $size)
                <button class="size-btn px-4 py-2 border rounded-full text-sm transition" data-size="{{ $size }}"
                    onclick="selectSize(this)">
                    {{ $size }}
                </button>
                @endforeach
            </div>
        </div>

        <!-- Add to Cart -->
        <button onclick="closeCartModal()"
            class="w-full mt-6 py-3 rounded-full bg-gray-700 text-white hover:bg-black transition">
            Add To Cart
        </button>

        <!-- Terms -->
        <a href="{{ route('terms') }}"> <label class="flex items-center gap-3 mt-5 text-sm cursor-pointer">
                <input type="checkbox" id="termsCheck" onchange="toggleBuyBtn()" class="w-4 h-4 accent-black">
                I agree with <span class="underline">Terms & Conditions</span>
            </label></a>


        <!-- Buy Now -->
        <button id="buyBtn" onclick="closeCartModal()"
            class="w-full mt-4 py-3 rounded-full bg-orange-300 text-white opacity-50 cursor-not-allowed" disabled>
            Buy Now
        </button>

    </div>
</div>

<!-- ================= JS ================= -->
<script>
function toggleWishlist(btn) {
    const icon = btn.querySelector('i');
    icon.classList.toggle('text-pink-500');
    icon.classList.toggle('text-gray-700');
}

/* ================= CART MODAL ================= */
let qty = 1;
let selectedSize = '';

function openCartModal(image, title, price, oldPrice) {
    document.getElementById('cartModal').classList.remove('hidden');
    document.getElementById('cartModal').classList.add('flex');

    // Set product data
    document.getElementById('cartProductImage').src = image;
    document.getElementById('cartProductTitle').innerText = title;
    document.getElementById('cartProductPrice').innerText = `₹${price}`;
    document.getElementById('cartProductOldPrice').innerText = oldPrice ? `₹${oldPrice}` : '';

    // reset quantity
    qty = 1;
    document.getElementById('qtyValue').innerText = qty;

    // reset size
    selectedSize = '';
    document.querySelectorAll('.size-btn').forEach(btn => btn.classList.remove('bg-black', 'text-white',
        'border-black'));

    // reset buy btn
    const buyBtn = document.getElementById('buyBtn');
    const check = document.getElementById('termsCheck');
    buyBtn.disabled = true;
    buyBtn.classList.add('opacity-50', 'cursor-not-allowed');
    buyBtn.classList.remove('bg-orange-500');
    check.checked = false;
}

function closeCartModal() {
    document.getElementById('cartModal').classList.add('hidden');
    document.getElementById('cartModal').classList.remove('flex');
}

function toggleBuyBtn() {
    const buyBtn = document.getElementById('buyBtn');
    const check = document.getElementById('termsCheck');

    if (check.checked) {
        buyBtn.disabled = false;
        buyBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        buyBtn.classList.add('bg-orange-500');
    } else {
        buyBtn.disabled = true;
        buyBtn.classList.add('opacity-50', 'cursor-not-allowed');
        buyBtn.classList.remove('bg-orange-500');
    }
}

/* ================= QUANTITY ================= */
function changeQty(value) {
    qty += value;
    if (qty < 1) qty = 1;
    document.getElementById('qtyValue').innerText = qty;
}

/* ================= SIZE ================= */
function selectSize(button) {
    document.querySelectorAll('.size-btn').forEach(btn => btn.classList.remove('bg-black', 'text-white',
        'border-black'));
    button.classList.add('bg-black', 'text-white', 'border-black');
    selectedSize = button.innerText;
}
</script>

@endsection