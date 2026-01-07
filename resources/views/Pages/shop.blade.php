@extends('layouts.app')

@section('title', 'Women Kurtis - AURA KURTIS')

@section('content')

@php
$products = [
[
'title' => 'Elegant Cotton Kurti',
'image' => 'https://khatricreations.com/cdn/shop/files/KC200246_1.png?crop=center&height=2389&v=1764854172&width=1792',
'price' => 999,
'old_price' => 1999,
'badge' => 'SALE',
'badge_value' => '-52%',
],
[
'title' => 'Festive Anarkali Kurti',
'image' => 'https://stylejaipur.com/cdn/shop/files/PHOTO-2023-10-09-21-02-48.jpg?v=1728409404&width=533',
'price' => 1499,
'old_price' => null,
'badge' => 'NEW',
],
[
'title' => 'Office Wear Straight Kurti',
'image' => 'https://stylejaipur.com/cdn/shop/files/WhatsAppImage2023-09-29at11.24.49PM.jpg?v=1728409204&width=533',
'price' => 899,
'old_price' => null,
'badge' => 'TRENDING',
],
[
'title' => 'Wedding Special Kurti',
'image' => 'https://stylejaipur.com/cdn/shop/files/21474dae-2c13-4f39-8fad-52a8c414a7b6.jpg?v=1728890097&width=533',
'price' => 1899,
'old_price' => 2499,
'badge' => 'SALE',
'badge_value' => '-25%',
],
[
'title' => 'Daily Wear Printed Kurti',
'image' => 'https://stylejaipur.com/cdn/shop/files/DSC_2461copy.jpg?v=1767345930&width=533',
'price' => 799,
'old_price' => null,
],
[
'title' => 'Casual Rayon Kurti',
'image' => 'https://stylejaipur.com/cdn/shop/files/DSC01254copy.jpg?v=1766647248&width=533',
'price' => 1099,
'old_price' => 1399,
'badge' => 'SALE',
'badge_value' => '-20%',
],
];

$perPage = 6;
$page = request()->get('page', 1);
$paginatedProducts = collect($products)->slice(($page-1)*$perPage, $perPage);
$totalPages = ceil(count($products) / $perPage);
@endphp

<!-- ================= HERO ================= -->
<section class="relative">
    <img src="https://tipsandbeauty.com/wp-content/uploads/2021/01/Stylish-Anarkali-Short-Kurti-With-Long-Flared-Sharara.jpg"
        class="w-full h-[420px] object-cover">

    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
        <div class="bg-white/90 px-10 py-7 text-center max-w-lg">
            <h1 class="text-4xl font-serif font-bold text-[#654321]">Premium Women Kurtis</h1>
            <p class="mt-3 text-sm text-gray-600">
                Cotton • Festive • Office • Wedding Wear
            </p>
        </div>
    </div>
</section>

<!-- ================= MAIN ================= -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 lg:px-8 grid grid-cols-1 lg:grid-cols-4 gap-12">

        <!-- ================= FILTER ================= -->
        <aside class="lg:col-span-1 space-y-8  top-28 h-fit">

            <h3 class="font-semibold text-xl border-b pb-2">Filters</h3>

            <!-- CATEGORY -->
            <div>
                <h4 class="font-medium mb-3">Category</h4>
                @foreach(['Daily Wear','Festive','Office','Wedding'] as $cat)
                <label class="flex items-center gap-3 text-sm cursor-pointer mb-2">
                    <input type="checkbox" class="w-4 h-4 rounded text-black focus:ring-black">
                    {{ $cat }}
                </label>
                @endforeach
            </div>

            <!-- PRICE -->
            <div>
                <h4 class="font-medium mb-3">Price Range</h4>

                <input type="range" min="500" max="5000" value="2500" class="w-full accent-black"
                    oninput="document.getElementById('priceValue').innerText = this.value">

                <div class="flex justify-between text-xs text-gray-500 mt-1">
                    <span>₹500</span>
                    <span>₹<span id="priceValue">2500</span></span>
                    <span>₹5000</span>
                </div>
            </div>

            <button class="w-full py-2 border border-black text-sm hover:bg-black hover:text-white transition">
                Apply Filters
            </button>
        </aside>

        <!-- ================= PRODUCTS ================= -->
        <div class="lg:col-span-3">

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8">

                @foreach($paginatedProducts as $product)
                <div class="group">

                    <div class="relative overflow-hidden rounded-2xl">

                        <img src="{{ $product['image'] }}"
                            class="w-full h-[420px] object-cover transition duration-500 group-hover:scale-105">

                        <!-- BADGE -->
                        @if(isset($product['badge']))
                        <span class="absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full
                        {{ $product['badge']=='SALE'?'bg-white text-red-600':'' }}
                        {{ $product['badge']=='NEW'?'bg-black text-white':'' }}
                        {{ $product['badge']=='TRENDING'?'bg-orange-500 text-white':'' }}">
                            {{ $product['badge']=='SALE' ? $product['badge_value'] : $product['badge'] }}
                        </span>
                        @endif

                        <!-- HOVER ICONS -->
                        <div class="absolute top-4 right-4 flex flex-col gap-3 opacity-0 translate-x-6
                        group-hover:opacity-100 group-hover:translate-x-0 transition">

                            <!-- HEART -->
                            <button onclick="toggleWishlist(this)"
                                class="w-10 h-10 bg-white rounded-full shadow flex items-center justify-center hover:bg-gray-100 transition">
                                <i class="fi fi-sr-heart text-gray-700"></i>
                            </button>

                            <!-- VIEW -->
                            <button
                                class="w-10 h-10 bg-white rounded-full shadow flex items-center justify-center hover:bg-black hover:text-white transition">
                                <i class="fi fi-rr-eye"></i>
                            </button>
                            <button onclick="openCartModal()"
                                class="w-10 h-10 bg-white rounded-full shadow flex items-center justify-center hover:bg-black hover:text-white transition">
                                <i class="fi fi-rr-shopping-bag"></i>
                            </button>




                        </div>
                    </div>

                    <div class="mt-4">
                        <h3 class="text-sm font-medium">{{ $product['title'] }}</h3>
                        <div class="flex gap-2 mt-1">
                            <span class="text-red-600 font-semibold">₹{{ $product['price'] }}</span>
                            @if($product['old_price'])
                            <span class="line-through text-xs text-gray-400">₹{{ $product['old_price'] }}</span>
                            @endif
                        </div>
                    </div>

                </div>
                @endforeach

            </div>

            <!-- ================= PAGINATION ================= -->
            <div class="flex justify-center mt-14 gap-2">
                @for($p=1;$p<=$totalPages;$p++) <a href="?page={{ $p }}" class="px-4 py-2 text-sm border rounded-full transition
                   {{ $page==$p ? 'bg-black text-white' : 'hover:bg-black hover:text-white' }}">
                    {{ $p }}
                    </a>
                    @endfor
            </div>

        </div>
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
                    <img src="https://khatricreations.com/cdn/shop/files/KC200246_1.png?crop=center&height=400"
                        class="w-32 h-40 object-cover rounded-xl">

                    <div class="flex-1">
                        <h3 class="font-semibold text-lg">
                            Designer Cotton Kurta Set for Women
                        </h3>

                        <div class="flex items-center gap-3 mt-1">
                            <span class="text-red-600 font-bold text-lg">₹1,690.00</span>
                            <span class="line-through text-sm text-gray-400">₹2,999.00</span>
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
                        @foreach(['M','L','XL','XXL','3XL'] as $size)
                        <button class="size-btn px-4 py-2 border rounded-full text-sm transition"
                            data-size="{{ $size }}" onclick="selectSize(this)">
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
                    class="w-full mt-4 py-3 rounded-full bg-orange-300 text-white opacity-50 cursor-not-allowed"
                    disabled>
                    Buy Now
                </button>

            </div>
        </div>
    </div>
</section>

<!-- ================= JS ================= -->
<script>
function toggleWishlist(btn) {
    const icon = btn.querySelector('i');

    if (icon.classList.contains('text-pink-500')) {
        icon.classList.remove('text-pink-500');
        icon.classList.add('text-gray-700');
    } else {
        icon.classList.remove('text-gray-700');
        icon.classList.add('text-pink-500');
    }
}
</script>

@endsection
<script>
function openCartModal() {
    document.getElementById('cartModal').classList.remove('hidden');
    document.getElementById('cartModal').classList.add('flex');
}

function closeCartModal() {
    document.getElementById('cartModal').classList.add('hidden');
    document.getElementById('cartModal').classList.remove('flex');

    // reset
    const buyBtn = document.getElementById('buyBtn');
    const check = document.getElementById('termsCheck');

    buyBtn.disabled = true;
    buyBtn.classList.add('opacity-50', 'cursor-not-allowed');
    buyBtn.classList.remove('bg-orange-500');
    check.checked = false;
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
</script>