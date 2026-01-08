@extends('layouts.app')

@section('title', 'Women Collection - AURA')

@section('content')

@php
$products = [
[
'id' => 1,
'slug' => 'elegant-cotton-kurti',
'title' => 'Elegant Cotton Kurta',
'category' => 'Kurta',
'image' => 'https://khatricreations.com/cdn/shop/files/KC200246_1.png?crop=center&height=2389&v=1764854172&width=1792',
'price' => 999,
'old_price' => 1999,
'badge' => 'SALE',
'badge_value' => '-52%',
],
[
'id' => 2,
'slug' => 'festive-anarkali-dress',
'title' => 'Festive Anarkali Dress',
'category' => 'Dress',
'image' => 'https://stylejaipur.com/cdn/shop/files/PHOTO-2023-10-09-21-02-48.jpg?v=1728409404&width=533',
'price' => 1499,
'old_price' => 1899,
'badge' => 'NEW',
],
[
'id' => 3,
'slug' => 'office-wear-top',
'title' => 'Office Wear Straight Top',
'category' => 'Top',
'image' => 'https://stylejaipur.com/cdn/shop/files/WhatsAppImage2023-09-29at11.24.49PM.jpg?v=1728409204&width=533',
'price' => 899,
'old_price' => 1099,
'badge' => 'TRENDING',
],
[
'id' => 4,
'slug' => 'printed-palazzo-bottom',
'title' => 'Printed Palazzo Bottom',
'category' => 'Bottom',
'image' => 'https://stylejaipur.com/cdn/shop/files/DSC_2461copy.jpg?v=1767345930&width=533',
'price' => 799,
'old_price' => 999,
'badge' => 'NEW',
],
];
@endphp

<!-- ================= HERO ================= -->
<section class="relative overflow-hidden">
    <img src="https://tipsandbeauty.com/wp-content/uploads/2021/01/Stylish-Anarkali-Short-Kurti-With-Long-Flared-Sharara.jpg"
        class="w-full h-[450px] object-cover">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="absolute inset-0 flex items-center justify-center">
        <div class="bg-white/90 px-10 py-10 rounded-2xl text-center max-w-xl">
            <span class="px-4 py-1 text-xs bg-[#654321] text-white rounded-full">🌸 WOMEN FASHION</span>
            <h1 class="text-4xl font-serif font-bold text-[#654321] mt-4">Women Dresses Collection</h1>
            <p class="text-sm text-gray-700 mt-3">
                Discover dresses crafted for modern women.
            </p>
        </div>
    </div>
</section>

<!-- ================= PRODUCTS ================= -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 lg:px-8">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($products as $product)
            <div class="group bg-white rounded-2xl shadow hover:shadow-lg overflow-hidden relative">

                <img src="{{ $product['image'] }}"
                    class="w-full h-[400px] object-cover group-hover:scale-105 transition">

                <!-- Badge -->
                <span class="absolute top-3 left-3 px-3 py-1 text-xs rounded-full
                    {{ $product['badge']=='SALE'?'bg-white text-red-600':'' }}
                    {{ $product['badge']=='NEW'?'bg-black text-white':'' }}
                    {{ $product['badge']=='TRENDING'?'bg-orange-500 text-white':'' }}">
                    {{ $product['badge']=='SALE'?'Flat '.$product['badge_value']:($product['badge']=='NEW'?'New In':'Trending') }}
                </span>

                <!-- Icons -->
                <div class="absolute top-3 right-3 flex flex-col gap-2">
                    <!-- Wishlist -->
                    <button onclick="toggleWishlist(this)"
                        class="w-9 h-9 bg-white rounded-full flex items-center justify-center shadow">
                        <i class="fi fi-sr-heart text-gray-600"></i>
                    </button>

                    <!-- View -->
                    <a href="{{ route('product.detail', $product['slug']) }}"
                        class="w-9 h-9 bg-white rounded-full flex items-center justify-center shadow">
                        <i class="fi fi-rr-eye"></i>
                    </a>

                    <!-- Cart -->
                    <button onclick="openCartModal(
                        '{{ $product['image'] }}',
                        '{{ $product['title'] }}',
                        '{{ $product['price'] }}',
                        '{{ $product['old_price'] }}'
                    )" class="w-9 h-9 bg-white rounded-full flex items-center justify-center shadow">
                        <i class="fi fi-rr-shopping-bag"></i>
                    </button>
                </div>

                <div class="p-4">
                    <p class="text-xs uppercase text-gray-500">{{ $product['category'] }}</p>
                    <h3 class="text-sm font-medium">{{ $product['title'] }}</h3>

                    <div class="flex gap-2 mt-1">
                        <span class="text-red-600 font-semibold">₹{{ $product['price'] }}</span>
                        <span class="text-xs line-through text-gray-400">₹{{ $product['old_price'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= CART MODAL ================= -->
<div id="cartModal" class="fixed inset-0 bg-black/50 hidden z-50 flex items-center justify-center px-4">
    <div class="bg-white w-full max-w-xl rounded-2xl p-6 relative">

        <button onclick="closeCartModal()" class="absolute top-3 right-3 w-8 h-8 bg-gray-100 rounded-full">✕</button>

        <div class="flex gap-5">
            <img id="cartImg" class="w-32 h-40 object-cover rounded-xl">

            <div>
                <h3 id="cartTitle" class="font-semibold text-lg"></h3>
                <div class="flex gap-2 mt-1">
                    <span id="cartPrice" class="text-red-600 font-bold"></span>
                    <span id="cartOldPrice" class="line-through text-gray-400 text-sm"></span>
                </div>

                <div class="flex items-center gap-3 mt-4">
                    <button onclick="changeQty(-1)" class="w-8 h-8 bg-gray-100 rounded-full">−</button>
                    <span id="qty">1</span>
                    <button onclick="changeQty(1)" class="w-8 h-8 bg-gray-100 rounded-full">+</button>
                </div>
            </div>
        </div>

        <!-- Size -->
        <div class="mt-6">
            <p class="text-sm font-medium mb-2">Select Size</p>
            <div class="flex gap-2">
                @foreach(['M','L','XL','XXL'] as $size)
                <button onclick="selectSize(this)"
                    class="size-btn px-4 py-2 border rounded-full text-sm">{{ $size }}</button>
                @endforeach
            </div>
        </div>

        <!-- Add to Cart -->
        <button onclick="addToCart()" class="w-full mt-6 py-3 bg-black text-white rounded-full">
            Add To Cart
        </button>
    </div>
</div>

<!-- ================= JS ================= -->
<script>
let qty = 1;

function toggleWishlist(btn) {
    btn.querySelector('i').classList.toggle('text-pink-500');
}

function openCartModal(img, title, price, old) {
    document.getElementById('cartModal').classList.remove('hidden');
    document.getElementById('cartImg').src = img;
    document.getElementById('cartTitle').innerText = title;
    document.getElementById('cartPrice').innerText = `₹${price}`;
    document.getElementById('cartOldPrice').innerText = `₹${old}`;
    qty = 1;
    document.getElementById('qty').innerText = qty;
}

function closeCartModal() {
    document.getElementById('cartModal').classList.add('hidden');
}

function addToCart() {
    // yahan future me backend logic aa sakta hai
    closeCartModal(); // ✅ modal close on add to cart
}

function changeQty(val) {
    qty += val;
    if (qty < 1) qty = 1;
    document.getElementById('qty').innerText = qty;
}

function selectSize(btn) {
    document.querySelectorAll('.size-btn').forEach(b => b.classList.remove('bg-black', 'text-white'));
    btn.classList.add('bg-black', 'text-white');
}
</script>

@endsection