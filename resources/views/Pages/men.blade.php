@extends('layouts.app')

@section('title', 'Men Collection - AURA')

@section('content')

@php
$products = [
[
'id'=>1,'title'=>'Classic White Shirt','category'=>'Shirts','price'=>2499,'old'=>3499,
'image'=>'https://images.unsplash.com/photo-1603252109303-2751441dd157'
],
[
'id'=>2,'title'=>'Denim Casual Shirt','category'=>'Shirts','price'=>2799,'old'=>3699,
'image'=>'https://images.unsplash.com/photo-1598032895397-b9472444bf93'
],
[
'id'=>3,'title'=>'Black Slim T-Shirt','category'=>'T-Shirts','price'=>1599,'old'=>2299,
'image'=>'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633'
],
[
'id'=>4,'title'=>'Olive Green Tee','category'=>'T-Shirts','price'=>1699,'old'=>2399,
'image'=>'https://images.unsplash.com/photo-1620799139834-6b8f844fbe61'
],
[
'id'=>5,'title'=>'Navy Formal Pants','category'=>'Pants','price'=>3199,'old'=>3999,
'image'=>'https://images.unsplash.com/photo-1603252109612-24fa03d145c8'
],
[
'id'=>6,'title'=>'Beige Casual Pants','category'=>'Pants','price'=>2999,'old'=>3799,
'image'=>'https://images.unsplash.com/photo-1618354691551-44de113f0164'
],
];
@endphp

<!-- ================= HERO ================= -->
<section class="relative h-[520px] overflow-hidden">
    <img src="https://images.unsplash.com/photo-1516826957135-700dedea698c?q=80&w=1920"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative container mx-auto px-6 h-full flex items-center">
        <div class="text-white max-w-xl">
            <span class="px-4 py-1 text-xs bg-white/20 rounded-full">MEN'S FASHION</span>
            <h1 class="text-5xl font-light mt-4">Modern <span class="font-semibold">Men Collection</span></h1>
            <p class="mt-4 text-gray-200">Premium shirts, tees & pants for modern lifestyle</p>
        </div>
    </div>
</section>

<!-- ================= FILTER BAR ================= -->
<section class="sticky top-0 bg-white border-b z-40">
    <div class="container mx-auto px-6 py-4 flex flex-wrap gap-4 justify-between items-center">

        <div class="flex gap-3">
            <button onclick="filterProducts('All')" class="tab-btn active">All</button>
            <button onclick="filterProducts('Shirts')" class="tab-btn">Shirts</button>
            <button onclick="filterProducts('T-Shirts')" class="tab-btn">T-Shirts</button>
            <button onclick="filterProducts('Pants')" class="tab-btn">Pants</button>
        </div>

        <select onchange="sortProducts(this.value)" class="px-5 py-2 border rounded-full text-sm">
            <option value="featured">Sort: Featured</option>
            <option value="low">Price: Low to High</option>
            <option value="high">Price: High to Low</option>
        </select>
    </div>
</section>

<!-- ================= PRODUCTS ================= -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10" id="productGrid">

        @foreach($products as $p)
        <div class="product-card bg-white rounded-2xl overflow-hidden shadow hover:shadow-xl transition"
            data-category="{{ $p['category'] }}" data-price="{{ $p['price'] }}">

            <div class="relative overflow-hidden group">
                <img src="{{ $p['image'] }}"
                    class="w-full h-[420px] object-cover group-hover:scale-110 transition duration-700">

                <!-- Actions -->
                <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-3 opacity-0 group-hover:opacity-100">

                    <!-- Heart -->
                    <button onclick="toggleHeart(this)"
                        class="w-10 h-10 bg-white rounded-full shadow flex items-center justify-center">
                        <svg class="w-5 h-5 heart-icon text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path
                                d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8L12 21l7.8-7.6a5.5 5.5 0 0 0 0-7.8z" />
                        </svg>
                    </button>

                    <!-- View -->
                    <a href="#" class="w-10 h-10 bg-white rounded-full shadow flex items-center justify-center">
                        <i class="fi fi-rr-eye"></i>
                    </a>

                    <!-- Cart -->
                    <button onclick="openCartModal(
    '{{ $p['title'] }}',
    '{{ $p['price'] }}',
    '{{ $p['old'] }}',
    '{{ $p['image'] }}'
)" class="w-10 h-10 bg-white rounded-full shadow flex items-center justify-center">
                        <i class="fi fi-rr-shopping-bag"></i>
                    </button>
                </div>
            </div>

            <div class="p-5">
                <p class="text-xs uppercase text-gray-500">{{ $p['category'] }}</p>
                <h3 class="text-sm font-medium mt-1">{{ $p['title'] }}</h3>

                <div class="flex gap-2 mt-3">
                    <span class="font-semibold">₹{{ $p['price'] }}</span>
                    <span class="text-xs line-through text-gray-400">₹{{ $p['old'] }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- ================= ADVANCED CART MODAL ================= -->
<div id="cartModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">

    <div class="bg-white rounded-2xl w-[420px] p-6 relative">

        <!-- Close -->
        <button onclick="closeCartModal()" class="absolute top-3 right-4 text-xl font-bold">&times;</button>

        <!-- Product -->
        <div class="flex gap-4">
            <img id="cartImage" class="w-24 h-32 rounded-lg object-cover">

            <div>
                <h3 id="cartTitle" class="font-semibold text-lg"></h3>

                <div class="flex gap-2 mt-1">
                    <span id="cartPrice" class="text-red-500 font-semibold"></span>
                    <span id="cartOld" class="line-through text-gray-400 text-sm"></span>
                </div>

                <!-- Quantity -->
                <div class="flex items-center gap-3 mt-4">
                    <button onclick="changeQty(-1)" class="w-8 h-8 rounded-full bg-gray-200">−</button>

                    <span id="cartQty">1</span>

                    <button onclick="changeQty(1)" class="w-8 h-8 rounded-full bg-gray-200">+</button>
                </div>
            </div>
        </div>

        <!-- Size -->
        <div class="mt-6">
            <p class="text-sm font-medium mb-2">Select Size</p>
            <div class="flex gap-3">
                <button class="size-btn" onclick="selectSize(this)">M</button>
                <button class="size-btn" onclick="selectSize(this)">L</button>
                <button class="size-btn" onclick="selectSize(this)">XL</button>
                <button class="size-btn" onclick="selectSize(this)">XXL</button>
            </div>
        </div>

        <!-- Add To Cart -->
        <button class="mt-6 w-full bg-black text-white py-3 rounded-full font-medium">
            Add To Cart
        </button>
    </div>
</div>


<!-- ================= JS ================= -->
<script>
function toggleHeart(btn) {
    const icon = btn.querySelector('.heart-icon');
    icon.classList.toggle('text-pink-500');
    icon.classList.toggle('fill-pink-500');
}

function openCartModal(title, price) {
    document.getElementById('cartText').innerText = title + ' - ₹' + price;
    document.getElementById('cartModal').classList.remove('hidden');
    document.getElementById('cartModal').classList.add('flex');
}

function closeCartModal() {
    document.getElementById('cartModal').classList.add('hidden');
}

function filterProducts(cat) {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    event.target.classList.add('active');

    document.querySelectorAll('.product-card').forEach(card => {
        card.style.display = (cat === 'All' || card.dataset.category === cat) ? 'block' : 'none';
    });
}

function sortProducts(type) {
    let grid = document.getElementById('productGrid');
    let cards = Array.from(grid.children);

    cards.sort((a, b) => {
        let p1 = parseInt(a.dataset.price);
        let p2 = parseInt(b.dataset.price);
        return type === 'low' ? p1 - p2 : type === 'high' ? p2 - p1 : 0;
    });

    cards.forEach(card => grid.appendChild(card));
}
let qty = 1;
let selectedSize = '';

function openCartModal(title, price, old, image) {
    qty = 1;
    selectedSize = '';

    document.getElementById('cartTitle').innerText = title;
    document.getElementById('cartPrice').innerText = '₹' + price;
    document.getElementById('cartOld').innerText = '₹' + old;
    document.getElementById('cartImage').src = image;
    document.getElementById('cartQty').innerText = qty;

    document.querySelectorAll('.size-btn')
        .forEach(btn => btn.classList.remove('active'));

    document.getElementById('cartModal').classList.remove('hidden');
    document.getElementById('cartModal').classList.add('flex');
}

function closeCartModal() {
    document.getElementById('cartModal').classList.add('hidden');
}

function changeQty(val) {
    qty = Math.max(1, qty + val);
    document.getElementById('cartQty').innerText = qty;
}

function selectSize(btn) {
    document.querySelectorAll('.size-btn')
        .forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    selectedSize = btn.innerText;
}
</script>

<style>
.tab-btn {
    padding: 8px 16px;
    border-radius: 9999px;
    font-size: 14px;
    background: #f3f3f3;
}

.tab-btn.active {
    background: black;
    color: white;
}

.size-btn {
    border: 1px solid #ddd;
    padding: 8px 16px;
    border-radius: 9999px;
    font-size: 14px;
}

.size-btn.active {
    background: black;
    color: white;
}
</style>

@endsection