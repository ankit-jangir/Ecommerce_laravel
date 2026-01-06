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
                <!-- Product Images -->
                <div class="space-y-4">
                    <div class="relative overflow-hidden rounded-lg bg-gray-100">
                        <img id="main-product-image" src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=800&h=1000&fit=crop" alt="Product Image" class="w-full h-[500px] sm:h-[600px] lg:h-[700px] object-cover">
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <div class="cursor-pointer border-2 border-transparent hover:border-[#8B4513] rounded-lg overflow-hidden">
                            <img src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=200&h=250&fit=crop" alt="Thumbnail 1" class="w-full h-20 sm:h-24 object-cover" onclick="changeMainImage(this.src)">
                        </div>
                        <div class="cursor-pointer border-2 border-transparent hover:border-[#8B4513] rounded-lg overflow-hidden">
                            <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&w=200&h=250&fit=crop" alt="Thumbnail 2" class="w-full h-20 sm:h-24 object-cover" onclick="changeMainImage(this.src)">
                        </div>
                        <div class="cursor-pointer border-2 border-transparent hover:border-[#8B4513] rounded-lg overflow-hidden">
                            <img src="https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg?auto=compress&cs=tinysrgb&w=200&h=250&fit=crop" alt="Thumbnail 3" class="w-full h-20 sm:h-24 object-cover" onclick="changeMainImage(this.src)">
                        </div>
                        <div class="cursor-pointer border-2 border-transparent hover:border-[#8B4513] rounded-lg overflow-hidden">
                            <img src="https://images.pexels.com/photos/157675/fashion-men-s-individuality-black-and-white-157675.jpeg?auto=compress&cs=tinysrgb&w=200&h=250&fit=crop" alt="Thumbnail 4" class="w-full h-20 sm:h-24 object-cover" onclick="changeMainImage(this.src)">
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="space-y-6">
                    <div>
                        <span class="inline-block bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold mb-3">NEW</span>
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-[#654321] mb-4">Floral Print Anarkali Kurti</h1>
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
                            <button class="size-btn w-16 h-16 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-semibold text-[#654321] transition-all">S</button>
                            <button class="size-btn w-16 h-16 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-semibold text-[#654321] transition-all">M</button>
                            <button class="size-btn w-16 h-16 border-2 border-[#8B4513] bg-[#F5F1EB] rounded-lg font-semibold text-[#654321] transition-all">L</button>
                            <button class="size-btn w-16 h-16 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-semibold text-[#654321] transition-all">XL</button>
                            <button class="size-btn w-16 h-16 border-2 border-gray-300 hover:border-[#8B4513] rounded-lg font-semibold text-[#654321] transition-all">XXL</button>
                        </div>
                        <a href="{{ route('size-guide') }}" class="text-sm text-[#8B4513] hover:underline">Size Guide</a>
                    </div>

                    <!-- Quantity & Add to Cart -->
                    <div class="border-t border-gray-200 pt-6">
                        <div class="flex items-center gap-4 mb-6">
                            <label class="text-lg font-semibold text-[#654321]">Quantity:</label>
                            <div class="flex items-center border-2 border-gray-300 rounded-lg">
                                <button class="px-4 py-2 text-[#654321] hover:bg-gray-100" onclick="decreaseQty()">-</button>
                                <input type="number" id="quantity" value="1" min="1" max="10" class="w-16 text-center border-0 focus:ring-0 text-[#654321] font-semibold">
                                <button class="px-4 py-2 text-[#654321] hover:bg-gray-100" onclick="increaseQty()">+</button>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button class="flex-1 bg-[#8B4513] text-white py-4 px-6 rounded-lg font-semibold hover:bg-[#654321] transition-all text-lg">
                                Add to Cart
                            </button>
                            <button class="flex-1 bg-white border-2 border-[#8B4513] text-[#8B4513] py-4 px-6 rounded-lg font-semibold hover:bg-[#F5F1EB] transition-all text-lg">
                                Buy Now
                            </button>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="border-t border-gray-200 pt-6">
                        <h3 class="text-lg font-semibold text-[#654321] mb-4">Product Details</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li><strong class="text-[#654321]">Fabric:</strong> Comfortable Cotton</li>
                            <li><strong class="text-[#654321]">Fit:</strong> Regular Fit</li>
                            <li><strong class="text-[#654321]">Length:</strong> Knee Length</li>
                            <li><strong class="text-[#654321]">Care Instructions:</strong> Machine Wash</li>
                            <li><strong class="text-[#654321]">SKU:</strong> {{ $productId ?? 'AK-FPA-001' }}</li>
                        </ul>
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

    <!-- Related Products -->
    <section class="related-products py-12 sm:py-16 bg-[#F5F1EB]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-center mb-8 sm:mb-12 text-[#654321]">You May Also Like</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @for($i = 1; $i <= 4; $i++)
                <a href="{{ route('product.detail', ['id' => 'related-product-' . $i]) }}" class="group cursor-pointer">
                    <div class="relative overflow-hidden mb-4 rounded-lg bg-white">
                        <img src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=400&h=500&fit=crop&sig={{ $i }}" alt="Related Product {{ $i }}" class="w-full h-64 sm:h-80 object-cover group-hover:scale-105 transition-transform duration-500">
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
    </script>
@endsection

