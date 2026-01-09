@props([
    'id' => '',
    'title' => '',
    'products' => [],
])


<section class="py-8 sm:py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-center mb-10 text-[#654321]">
            {{ $title }}
        </h2>

        <div class="relative carousel-wrapper" data-carousel="{{ $id }}">

            <!-- PREV -->
            <button
                class="carousel-prev absolute left-2 top-1/2 -translate-y-1/2 z-20
                       w-12 h-12 sm:w-14 sm:h-14
                       bg-white border border-[#E5DCCF]
                       rounded-full shadow-md
                       flex items-center justify-center
                       transition-all duration-300
                       hover:bg-[#654321] group">

                <i
                    class="fi fi-rr-angle-left
                          text-xl sm:text-2xl
                          text-[#654321]
                          group-hover:text-white"></i>
            </button>

            <!-- NEXT -->
            <button
                class="carousel-next absolute right-2 top-1/2 -translate-y-1/2 z-20
                       w-12 h-12 sm:w-14 sm:h-14
                       bg-white border border-[#E5DCCF]
                       rounded-full shadow-md
                       flex items-center justify-center
                       transition-all duration-300
                       hover:bg-[#654321] group">

                <i
                    class="fi fi-rr-angle-right
                          text-xl sm:text-2xl
                          text-[#654321]
                          group-hover:text-white"></i>
            </button>

            <!-- CAROUSEL -->
            <div class="overflow-hidden">
                <div class="carousel-track flex gap-4 transition-transform duration-500 ease-in-out">
                    @if (!empty($products))
                        @foreach ($products as $product)
                            <div class="flex-shrink-0 w-[200px] sm:w-[240px] md:w-[280px] lg:w-[320px]">
                                <div class="group relative bg-white rounded-xl overflow-hidden">

                                    <!-- IMAGE WRAPPER -->
                                    <div class="relative aspect-[3/4] overflow-hidden">

                                        <!-- DEFAULT IMAGE -->
                                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                                            class="absolute inset-0 w-full h-full object-cover
                        transition-opacity duration-500
                        group-hover:opacity-0">

                                        <!-- HOVER IMAGE -->
                                        <img src="{{ $product['hover_image'] ?? $product['image'] }}"
                                            alt="{{ $product['name'] }}"
                                            class="absolute inset-0 w-full h-full object-cover
                        opacity-0 transition-opacity duration-500
                        group-hover:opacity-100">

                                        <!-- DISCOUNT -->
                                        @if (!empty($product['discount']))
                                            <span
                                                class="absolute top-3 left-3 bg-white text-red-600
                             text-xs font-semibold px-2 py-0.5 rounded-full">
                                                -{{ $product['discount'] }}%
                                            </span>
                                        @endif

                                        <!-- ACTION ICONS - Right Side -->
                                        <div
                                            class="absolute top-3 right-3 flex flex-col gap-2
                        opacity-100 lg:opacity-0 translate-x-0 lg:translate-x-3
                        transition-all duration-300
                        lg:group-hover:opacity-100 lg:group-hover:translate-x-0 z-20">

                                            <!-- LIKE -->
                                            <button type="button"
                                                class="w-9 h-9 rounded-full bg-white text-[#654321]
                               flex items-center justify-center shadow
                               hover:bg-[#654321] hover:text-white transition"
                                                data-wishlist-id="{{ $product['id'] }}">
                                                <i class="fi fi-rr-heart text-sm"></i>
                                            </button>

                                            <!-- VIEW -->
                                            <a href="{{ route('product.detail', $product['id']) }}"
                                                class="w-9 h-9 rounded-full bg-white text-[#654321]
                          flex items-center justify-center shadow
                          hover:bg-[#654321] hover:text-white transition">
                                                <i class="fi fi-rr-eye text-sm"></i>
                                            </a>

                                            <!-- CART -->
                                            <button type="button"
                                                class="action-cart w-9 h-9 rounded-full bg-white text-[#654321]
                               flex items-center justify-center shadow
                               hover:bg-[#654321] hover:text-white transition"
                                                data-product-id="{{ $product['id'] }}"
                                                data-product-name="{{ $product['name'] }}"
                                                data-product-price="{{ $product['price'] }}"
                                                data-product-image="{{ $product['image'] }}">
                                                <i class="fi fi-rr-shopping-bag text-sm"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- INFO -->
                                    <div class="p-3">
                                        <h3 class="text-sm font-medium text-[#654321] leading-snug mb-1">
                                            {{ $product['name'] }}
                                        </h3>

                                        <div class="text-sm font-semibold text-[#8B4513]">
                                            Rs. {{ number_format($product['price']) }}
                                            @if ($product['original_price'])
                                                <span class="text-xs text-gray-400 line-through ml-1">
                                                    Rs. {{ number_format($product['original_price']) }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- FULL CLICK -->
                                    <a href="{{ route('product.detail', $product['id']) }}"
                                        class="absolute inset-0 z-10"></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center text-gray-500 w-full">
                            No products available
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

