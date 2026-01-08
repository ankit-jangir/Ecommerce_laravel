@extends('layouts.app')

@section('title', 'Gen Alpha Collection - AURA KURTIS')

@section('content')

<!-- HEADER -->
<section class="bg-[#f8f5f1] py-10">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl sm:text-5xl font-serif font-bold text-[#654321]">
            Gen Z Collection
        </h1>
        <p class="text-gray-600 mt-2 max-w-xl">
            Trend-driven fashion for the next generation — Men, Women & Kids
        </p>
    </div>
</section>

<!-- SUB CATEGORIES -->
<section class="py-6 border-b">
    <div class="container mx-auto px-4 flex flex-wrap gap-3">
        <span class="px-5 py-2 rounded-full bg-[#654321] text-white text-sm">All</span>
        <span class="px-5 py-2 rounded-full border text-sm cursor-pointer hover:bg-gray-100">Men</span>
        <span class="px-5 py-2 rounded-full border text-sm cursor-pointer hover:bg-gray-100">Women</span>
        <span class="px-5 py-2 rounded-full border text-sm cursor-pointer hover:bg-gray-100">Kids</span>
        <span class="px-5 py-2 rounded-full border text-sm cursor-pointer hover:bg-gray-100">Unisex</span>
    </div>
</section>

<!-- PRODUCTS -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            @php
            $products = [
            [
            'name' => 'Y2K Oversized Hoodie',
            'price' => 2699,
            'img' => 'https://images.unsplash.com/photo-1552374196-c4e7ffc6e126'
            ],
            [
            'name' => 'Street Crop Kurti',
            'price' => 2899,
            'img' => 'https://images.unsplash.com/photo-1519744792095-2f2205e87b6f'
            ],
            [
            'name' => 'Baggy Graphic Shirt',
            'price' => 2199,
            'img' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22'
            ],
            [
            'name' => 'Gen Z Fusion Dress',
            'price' => 3199,
            'img' => 'https://images.unsplash.com/photo-1485968579580-b6d095142e6e'
            ],
            [
            'name' => 'Denim Cargo Co-ord',
            'price' => 3499,
            'img' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c'
            ],
            [
            'name' => 'Minimal Aesthetic Tee',
            'price' => 1799,
            'img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab'
            ],
            [
            'name' => 'Urban Streetwear Set',
            'price' => 2599,
            'img' => 'https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf'
            ],
            [
            'name' => 'Unisex Bomber Jacket',
            'price' => 3999,
            'img' => 'https://images.unsplash.com/photo-1520974735194-6c7b5f41f0a2'
            ],
            ];
            @endphp


            @foreach($products as $index => $product)
            <div class="group relative border rounded-xl overflow-hidden hover:shadow-xl transition">

                <!-- IMAGE -->
                <div class="relative overflow-hidden">
                    <img src="{{ $product['img'] }}?w=500&h=650&fit=crop"
                        class="w-full h-80 object-cover group-hover:scale-110 transition duration-500">

                    <!-- HEART -->
                    <button onclick="toggleHeart(this)"
                        class="absolute top-3 right-3 z-20 bg-white w-10 h-10 rounded-full flex items-center justify-center shadow pointer-events-auto">
                        <i class="fi fi-rr-heart text-gray-500 text-lg transition"></i>
                    </button>



                    <!-- HOVER ACTIONS -->
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition flex items-end pointer-events-none">

                        <div class="w-full flex gap-2 p-4">
                            <button onclick="addToCart(this)"
                                class="add-cart-btn w-full bg-white text-sm py-2 rounded transition">
                                Add to Cart
                            </button>

                            <button class="w-12 bg-white rounded hover:bg-gray-200 flex items-center justify-center">
                                <i class="fi fi-rr-eye"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- INFO -->
                <div class="p-4">
                    <h3 class="font-medium text-[#654321] text-lg">{{ $product['name'] }}</h3>
                    <p class="text-sm text-gray-500 mb-1">Gen Alpha Style</p>
                    <p class="text-lg font-semibold text-[#8B4513]">₹{{ $product['price'] }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- CART MODAL -->
<div id="cartModal" class="fixed inset-0 bg-black/50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 w-80 text-center relative">
        <h3 class="text-xl font-semibold text-[#654321] mb-3">Added to Cart</h3>
        <p class="text-sm text-gray-600 mb-4">Product successfully added</p>
        <button onclick="closeCartModal()" class="bg-[#654321] text-white px-6 py-2 rounded hover:bg-[#8B4513]">
            Continue Shopping
        </button>
    </div>
</div>

<!-- SCRIPT -->
<script>
function toggleHeart(btn) {
    const icon = btn.querySelector('i');

    if (icon.classList.contains('fi-rr-heart')) {
        icon.classList.remove('fi-rr-heart', 'text-gray-500');
        icon.classList.add('fi-sr-heart', 'text-pink-500');
    } else {
        icon.classList.remove('fi-sr-heart', 'text-pink-500');
        icon.classList.add('fi-rr-heart', 'text-gray-500');
    }
}

function openCartModal() {
    document.getElementById('cartModal').classList.remove('hidden');
    document.getElementById('cartModal').classList.add('flex');
    setTimeout(closeCartModal, 1500);
}

function addToCart(btn) {

    // Button state
    btn.innerText = 'Added ✓';
    btn.classList.remove('bg-white', 'text-black');
    btn.classList.add('bg-green-600', 'text-white');

    // Disable repeat click
    btn.disabled = true;

    // Open modal
    document.getElementById('cartModal').classList.remove('hidden');
    document.getElementById('cartModal').classList.add('flex');

    setTimeout(() => {
        closeCartModal();
    }, 1200);
}

function closeCartModal() {
    document.getElementById('cartModal').classList.add('hidden');
}
</script>

@endsection