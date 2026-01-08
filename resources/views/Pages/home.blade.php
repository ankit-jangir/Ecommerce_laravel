@extends('layouts.app')

@section('title', 'Home - AURA KURTIS')

@section('content')

   <section class="relative w-full h-[65vh] sm:h-[75vh] lg:h-[90vh] overflow-hidden">

    <!-- BACKGROUND IMAGE -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/banner_img1.webp') }}"
             alt="Winter Kurta Collection"
             class="w-full h-full object-cover object-[center_30%]
                    brightness-75">

        <!-- OVERLAY -->
        <div class="absolute inset-0
                    bg-gradient-to-r
                    from-black/70 via-black/40 to-transparent">
        </div>
    </div>

    <!-- CONTENT -->
    <div class="relative z-10 h-full flex items-center">
        <div class="px-4 sm:px-8 lg:px-16 max-w-4xl">

            <h1
                class="text-white font-serif font-bold tracking-wide
                       leading-tight
                       text-3xl sm:text-5xl md:text-6xl lg:text-7xl">
                WINTER STAPLES
            </h1>

            <p
                class="mt-3 sm:mt-4
                       text-white/90
                       text-sm sm:text-base md:text-lg lg:text-xl
                       max-w-xl">
                Elegant kurtis for every occasion
            </p>

            <a href="{{ route('women') }}"
               class="inline-block mt-6 sm:mt-8
                      px-8 sm:px-10 py-3 sm:py-3.5
                      bg-white text-[#654321]
                      rounded-full font-semibold
                      text-sm sm:text-base
                      hover:bg-[#F5F1EB]
                      transition">
                Shop Collection
            </a>

        </div>
    </div>
</section>




    <!-- Split Banner Section - Layers to Live In -->
    <section class="split-banner py-4 sm:py-6 md:py-8 lg:py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 sm:gap-4 lg:gap-6">
                <a href="{{ route('women') }}" class="relative overflow-hidden rounded-lg group block">
                    <div class="relative w-full aspect-[1/1] overflow-hidden bg-gray-100 rounded-lg">
                        <img src="{{ asset('images/herotop_img.jpg') }}" alt="Women in Beautiful Kurti"
                            class="absolute inset-0 w-full h-full object-cover object-center
                   group-hover:scale-105 transition-all duration-500" />
                    </div>
                </a>


                <!-- Right: Brand Section -->
                <div class="bg-black flex items-center justify-center p-4 sm:p-6 md:p-8 lg:p-12 rounded-lg">
                    <div class="text-center">
                        <div
                            class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 bg-white rounded-full mx-auto mb-3 sm:mb-4 md:mb-6 flex items-center justify-center">
                            <span class="text-lg sm:text-xl md:text-2xl font-serif font-bold text-black">AK</span>
                        </div>
                        <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-serif text-white mb-2 sm:mb-3 md:mb-4">
                            LAYERS TO LIVE IN</h2>
                        <p class="text-xs sm:text-sm text-white/80 mb-3 sm:mb-4 md:mb-6 max-w-sm mx-auto">
                            Comfort meets style in our premium kurti collection</p>
                        <a href="{{ route('women') }}"
                            class="inline-block px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 bg-white text-black hover:bg-gray-100 transition-all duration-300 rounded-full font-semibold text-xs sm:text-sm">
                            Explore
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Full Width Banner - New Arrivals -->
    <section class="full-width-banner py-6 sm:py-8 md:py-12 lg:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <a href="{{ route('new-in') }}" class="relative group block overflow-hidden rounded-xl">

                <!-- Aspect Ratio Container -->
                <div class="relative w-full aspect-[16/9] sm:aspect-[21/9] overflow-hidden">

                    <img src="{{ asset('images/herosectionimg3.jpg') }}" alt="Women in Kurti Collection"
                        class="w-full h-full object-cover object-[center_20%]
                           transition-transform duration-700 group-hover:scale-105">

                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent
                            flex items-end px-5 pb-6 sm:px-8 sm:pb-8">

                        <div class="text-white">
                            <h3
                                class="text-xl sm:text-2xl md:text-3xl font-serif
                                   underline underline-offset-8 decoration-2 decoration-white">
                                New Arrivals
                            </h3>

                            <p class="mt-2 text-sm sm:text-base text-white/90">
                                Discover our latest collection
                            </p>
                        </div>

                    </div>
                </div>
            </a>
        </div>
    </section>


    <!-- Yellow Separator -->
    <section class="yellow-separator bg-yellow-400 py-4 sm:py-6 md:py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center gap-3 sm:gap-4 md:gap-6">
                <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="hidden sm:block sm:w-[50px] sm:h-[50px] md:w-[60px] md:h-[60px]">
                    <path d="M30 10 L35 20 L45 20 L37 27 L40 37 L30 32 L20 37 L23 27 L15 20 L25 20 Z" fill="#654321"
                        opacity="0.6" />
                </svg>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg text-[#654321] font-semibold text-center">Premium
                    Quality • Free Shipping • Easy Returns</p>
                <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="hidden sm:block sm:w-[50px] sm:h-[50px] md:w-[60px] md:h-[60px]">
                    <path d="M30 10 L35 20 L45 20 L37 27 L40 37 L30 32 L20 37 L23 27 L15 20 L25 20 Z" fill="#654321"
                        opacity="0.6" />
                </svg>
            </div>
        </div>
    </section>

    <!-- Product Grid - Lifestyle & Fashion -->
    <section class="product-grid-lifestyle py-8 sm:py-12 md:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2
                class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-center mb-6 sm:mb-8 md:mb-12 text-[#654321]">
                Lifestyle Collection</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 lg:gap-8">
                @foreach ($products['lifestyle'] ?? [] as $product)
                    <a href="{{ route('product.detail', ['id' => $product['id']]) }}"
                        class="group cursor-pointer block product-card">
                        <div class="relative overflow-hidden mb-2 sm:mb-3 md:mb-4 rounded-lg bg-white">
                            <div class="relative w-full aspect-square overflow-hidden">
                                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <span
                                class="absolute top-2 right-2 sm:top-3 sm:right-3 md:top-4 md:right-4 text-white px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-[10px] sm:text-xs font-semibold {{ $product['badge_color'] === 'red' ? 'bg-red-500' : ($product['badge_color'] === 'yellow' ? 'bg-yellow-500' : ($product['badge_color'] === 'green' ? 'bg-green-500' : ($product['badge_color'] === 'purple' ? 'bg-purple-500' : ($product['badge_color'] === 'pink' ? 'bg-pink-500' : ($product['badge_color'] === 'blue' ? 'bg-blue-500' : ($product['badge_color'] === 'orange' ? 'bg-orange-500' : 'bg-gray-500')))))) }}">{{ $product['badge'] }}</span>
                        </div>
                        <h3
                            class="text-sm sm:text-base md:text-lg lg:text-xl font-medium text-[#654321] mb-1 sm:mb-2
           relative inline-block
           after:content-[''] after:absolute after:left-0 after:-bottom-0.5
           after:w-0 after:h-[2px] after:bg-[#654321]
           after:transition-all after:duration-300
           group-hover:after:w-full">
                            {{ $product['name'] }}
                        </h3>

                        <p class="text-xs sm:text-sm text-gray-500 mb-1">{{ $product['description'] }}</p>
                        <p class="text-sm sm:text-base md:text-lg text-[#8B4513] font-semibold">
                            ₹{{ number_format($product['price']) }}
                            @if ($product['original_price'])
                                <span
                                    class="text-xs sm:text-sm text-gray-400 line-through ml-1 sm:ml-2">₹{{ number_format($product['original_price']) }}</span>
                            @endif
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Product Grid - Traditional/Formal Wear -->
    <section class="product-grid-traditional py-8 sm:py-12 md:py-16 lg:py-20 bg-[#F5F1EB]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2
                class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-center mb-6 sm:mb-8 md:mb-12 text-[#654321]">
                Traditional Collection</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 lg:gap-8">
                @foreach ($products['traditional'] ?? [] as $product)
                    <a href="{{ route('product.detail', ['id' => $product['id']]) }}"
                        class="group cursor-pointer block product-card">
                        <div class="relative overflow-hidden mb-2 sm:mb-3 md:mb-4 rounded-lg bg-white">
                            <div class="relative w-full aspect-square overflow-hidden">
                                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <span
                                class="absolute top-2 left-2 sm:top-3 sm:left-3 md:top-4 md:left-4 text-white px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-[10px] sm:text-xs font-semibold {{ $product['badge_color'] === 'red' ? 'bg-red-500' : ($product['badge_color'] === 'yellow' ? 'bg-yellow-500' : ($product['badge_color'] === 'green' ? 'bg-green-500' : ($product['badge_color'] === 'purple' ? 'bg-purple-500' : ($product['badge_color'] === 'pink' ? 'bg-pink-500' : ($product['badge_color'] === 'blue' ? 'bg-blue-500' : ($product['badge_color'] === 'orange' ? 'bg-orange-500' : 'bg-gray-500')))))) }}">{{ $product['badge'] }}</span>
                        </div>
                        <h3
                            class="text-sm sm:text-base md:text-lg lg:text-xl font-medium text-[#654321] mb-1 sm:mb-2
           relative inline-block
           after:content-[''] after:absolute after:left-0 after:-bottom-0.5
           after:w-0 after:h-[2px] after:bg-[#654321]
           after:transition-all after:duration-300
           group-hover:after:w-full">
                            {{ $product['name'] }}
                        </h3>

                        <p class="text-xs sm:text-sm text-gray-500 mb-1">{{ $product['description'] }}</p>
                        <p class="text-sm sm:text-base md:text-lg text-[#8B4513] font-semibold">
                            ₹{{ number_format($product['price']) }}
                            @if ($product['original_price'])
                                <span
                                    class="text-xs sm:text-sm text-gray-400 line-through ml-1 sm:ml-2">₹{{ number_format($product['original_price']) }}</span>
                            @endif
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Suits Collection Section -->
    <section class="suits-collection py-8 sm:py-12 md:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2
                class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-center mb-6 sm:mb-8 md:mb-12 text-[#654321]">
                Premium Suits Collection</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 lg:gap-8">
                @foreach ($products['suits'] ?? [] as $product)
                    <a href="{{ route('product.detail', ['id' => $product['id']]) }}"
                        class="group cursor-pointer block product-card">
                        <div class="relative overflow-hidden mb-2 sm:mb-3 md:mb-4 rounded-lg bg-white">
                            <div class="relative w-full aspect-square overflow-hidden">
                                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <span
                                class="absolute top-2 left-2 sm:top-3 sm:left-3 md:top-4 md:left-4 text-white px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-[10px] sm:text-xs font-semibold {{ $product['badge_color'] === 'red' ? 'bg-red-500' : ($product['badge_color'] === 'yellow' ? 'bg-yellow-500' : ($product['badge_color'] === 'green' ? 'bg-green-500' : ($product['badge_color'] === 'purple' ? 'bg-purple-500' : ($product['badge_color'] === 'pink' ? 'bg-pink-500' : ($product['badge_color'] === 'blue' ? 'bg-blue-500' : ($product['badge_color'] === 'orange' ? 'bg-orange-500' : 'bg-gray-500')))))) }}">{{ $product['badge'] }}</span>
                        </div>
                        <h3
                            class="text-sm sm:text-base md:text-lg lg:text-xl font-medium text-[#654321] mb-1 sm:mb-2
           relative inline-block
           after:content-[''] after:absolute after:left-0 after:-bottom-0.5
           after:w-0 after:h-[2px] after:bg-[#654321]
           after:transition-all after:duration-300
           group-hover:after:w-full">
                            {{ $product['name'] }}
                        </h3>

                        <p class="text-xs sm:text-sm text-gray-500 mb-1">{{ $product['description'] }}</p>
                        <p class="text-sm sm:text-base md:text-lg text-[#8B4513] font-semibold">
                            ₹{{ number_format($product['price']) }}
                            @if ($product['original_price'])
                                <span
                                    class="text-xs sm:text-sm text-gray-400 line-through ml-1 sm:ml-2">₹{{ number_format($product['original_price']) }}</span>
                            @endif
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- More Collections to Love -->
    <section class="more-collections py-8 sm:py-12 md:py-16 lg:py-20 bg-[#F5F1EB]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2
                class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-center mb-6 sm:mb-8 md:mb-12 text-[#654321]">
                MORE COLLECTIONS TO LOVE</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
                <!-- Collection 1 -->
                <a href="{{ route('kurtis.printed') }}"
                    class="group cursor-pointer block relative overflow-hidden rounded-lg">
                    <div class="relative h-[500px] sm:h-[600px] md:h-[700px] lg:h-[800px] xl:h-[900px] overflow-hidden">
                        <img src="{{ $collectionImages['patterned'] ?? asset('images/productimg5.webp') }}"
                            alt="Patterned Kurti Collection"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 md:p-12 lg:p-16">
                            <h3
                                class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-serif text-white font-bold uppercase tracking-wide underline decoration-white decoration-2 underline-offset-4">
                                FIREFLY
                            </h3>
                        </div>
                    </div>
                </a>

                <!-- Collection 2 -->
                <a href="{{ route('kurtis.anarkali') }}"
                    class="group cursor-pointer block relative overflow-hidden rounded-lg">
                    <div class="relative h-[500px] sm:h-[600px] md:h-[700px] lg:h-[800px] xl:h-[900px] overflow-hidden">
                        <img src="{{ $collectionImages['anarkali'] ?? asset('images/productimg7.jpg') }}"
                            alt="Flowing Anarkali Collection"
                            class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 md:p-12 lg:p-16">
                            <h3
                                class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-serif text-white font-bold uppercase tracking-wide underline decoration-white decoration-2 underline-offset-4">
                                DHARA
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Our Bestsellers Carousel with Auto-Slide -->
    <x-product-carousel id="bestsellers" title="OUR BESTSELLERS" :products="$products['bestsellers']" />


    <!-- Gifting & Concierge Section -->
    <section class="gifting-section py-8 sm:py-12 md:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">

                <!-- Left: For Every Celebration -->
                <div class="bg-green-50 p-6 sm:p-8 md:p-12 lg:p-16 rounded-lg text-center">
                    <div class="mb-4 sm:mb-6 md:mb-8">
                        <img src="{{ asset('images/Gifting_img1.jpg') }}" alt="Gifting Collection"
                            class="w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 mx-auto rounded-full object-cover">
                    </div>
                    <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-[#654321] mb-2 sm:mb-3 md:mb-4">
                        FOR EVERY CELEBRATION</h3>
                    <p class="text-xs sm:text-sm md:text-base text-gray-600 mb-4 sm:mb-6 md:mb-8">Perfect gifts for your
                        loved ones</p>
                    <a href="{{ route('gifting') }}"
                        class="inline-block px-5 sm:px-6 md:px-8 py-2 sm:py-2.5 md:py-3 bg-[#8B4513] text-white hover:bg-[#654321] transition-all duration-300 rounded-full font-semibold text-xs sm:text-sm md:text-base">
                        Shop Gifts
                    </a>
                </div>

                <!-- Right: The Gifting Concierge -->
                <div class="bg-red-50 p-6 sm:p-8 md:p-12 lg:p-16 rounded-lg text-center">
                    <div class="mb-4 sm:mb-6 md:mb-8">
                        <svg width="100" height="100" viewBox="0 0 120 120" fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            class="mx-auto sm:w-[110px] sm:h-[110px] md:w-[120px] md:h-[120px]">
                            <circle cx="60" cy="60" r="50" fill="#654321" opacity="0.2" />
                            <path d="M60 30 L70 50 L90 50 L75 65 L80 85 L60 75 L40 85 L45 65 L30 50 L50 50 Z"
                                fill="#654321" />
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-[#654321] mb-2 sm:mb-3 md:mb-4">
                        THE GIFTING CONCIERGE</h3>
                    <p class="text-base sm:text-lg md:text-xl font-semibold text-[#654321] mb-2 sm:mb-3 md:mb-4">LAST
                        MINUTE INVITES?</p>
                    <p class="text-xs sm:text-sm md:text-base text-gray-600 mb-4 sm:mb-6 md:mb-8">We've got you covered
                        with express delivery</p>
                    <a href="{{ route('contact') }}"
                        class="inline-block px-5 sm:px-6 md:px-8 py-2 sm:py-2.5 md:py-3 bg-[#8B4513] text-white hover:bg-[#654321] transition-all duration-300 rounded-full font-semibold text-xs sm:text-sm md:text-base">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Focus Section -->
    <section class="brand-focus py-8 sm:py-12 md:py-16 lg:py-20 bg-[#F5F1EB]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-gradient-to-r from-amber-600 to-amber-700 rounded-lg p-6 sm:p-8 md:p-12 lg:p-16 mb-6 sm:mb-8 md:mb-12 text-center">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-serif text-white mb-2 sm:mb-3 md:mb-4">AURA
                    KURTIS</h2>
                <p class="text-sm sm:text-base md:text-lg text-white/90 max-w-2xl mx-auto">Premium quality kurtis for the
                    modern woman</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">

                <!-- LEFT CARD -->
                <a href="{{ route('women') }}" class="group relative block overflow-hidden rounded-2xl">

                    <!-- IMAGE -->
                    <div class="w-full aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('images/Summer_img1.webp') }}" alt="Casual Collection"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>

                    <!-- DARK OVERLAY -->
                    <div class="absolute inset-0 bg-black/20"></div>

                    <!-- CONTENT -->
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <h3
                            class="relative inline-block text-lg sm:text-xl md:text-2xl font-semibold mb-1
                       after:content-[''] after:absolute after:left-0 after:-bottom-1
                       after:w-0 after:h-[2px] after:bg-[#654321]
                       after:transition-all after:duration-300
                       group-hover:after:w-full">
                            Summer Feels Like
                        </h3>

                        <p class="text-xs sm:text-sm opacity-90 mb-4">
                            Can make you stand out from the rest
                        </p>

                        <!-- BUTTON -->
                        <span
                            class="inline-flex items-center justify-center
                       px-6 py-2
                       rounded-full
                       bg-white text-[#654321]
                       text-xs sm:text-sm font-semibold
                       transition-all duration-300
                       group-hover:bg-[#654321]
                       group-hover:text-white">
                            Shop Now
                        </span>
                    </div>
                </a>

                <!-- RIGHT CARD -->
                <a href="{{ route('combos') }}" class="group relative block overflow-hidden rounded-2xl">

                    <!-- IMAGE -->
                    <div class="w-full aspect-[3/4] overflow-hidden">
                        <img src="{{ asset('images/Summer_img2.webp') }}" alt="Complete Look"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>

                    <!-- DARK OVERLAY -->
                    <div class="absolute inset-0 bg-black/20"></div>

                    <!-- CONTENT -->
                    <div class="absolute bottom-6 left-6 right-6 text-white">
                        <h3
                            class="relative inline-block text-lg sm:text-xl md:text-2xl font-semibold mb-1
                       after:content-[''] after:absolute after:left-0 after:-bottom-1
                       after:w-0 after:h-[2px] after:bg-[#654321]
                       after:transition-all after:duration-300
                       group-hover:after:w-full">
                            As Bright As The Last
                        </h3>

                        <p class="text-xs sm:text-sm opacity-90 mb-4">
                            Anything you're thinking about wearing
                        </p>

                        <!-- BUTTON -->
                        <span
                            class="inline-flex items-center justify-center
                       px-6 py-2
                       rounded-full
                       bg-white text-[#654321]
                       text-xs sm:text-sm font-semibold
                       transition-all duration-300
                       group-hover:bg-[#654321]
                       group-hover:text-white">
                            Discover Now
                        </span>
                    </div>
                </a>

            </div>


        </div>
    </section>

    <!-- Split Banner Section - Shop Women / Shop Home Style -->
    <x-shop-look-section image="{{ asset('images/shop_img1.webp') }}" title="Shop The Look"
        subtitle="Fierce elegance is about authenticity" :products="$products['bestsellers']" id="shop-look-carousel" />





    <!-- Animated Culture Section - Fades in after delay -->
    <section id="culture-section"
        class="culture-section
           pt-4 sm:pt-6 md:pt-8
           pb-12 sm:pb-16 md:pb-20 lg:pb-24
           bg-white
           opacity-0 transition-opacity duration-1000">

        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <p
                    class="text-xl sm:text-2xl md:text-3xl lg:text-4xl
                      font-serif text-[#654321] leading-relaxed">
                    Ours is a culture where madness and data co-exist.
                </p>
            </div>
        </div>
    </section>



    <!-- khurit Video Section - Full Width -->
    <x-video-section :useDogVideo="true" :showOverlay="false" :showContent="false" />
    <x-newsletter-signup />
    <!-- Shop Kurti / Shop Men Section -->
    <section class="shop-men-home bg-white py-10">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10">

                <!-- SHOP MEN -->
                <a href="{{ route('men') }}" class="relative group block overflow-hidden">
                    <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-[#F5F1EB]">

                        <img src="{{ asset('images/men_img1.jpg') }}" alt="Shop Men"
                            class="absolute inset-0 w-full h-full
             object-cover object-center
             transition-transform duration-700
             group-hover:scale-105">

                        <div class="absolute inset-0 bg-black/25"></div>

                        <div class="absolute inset-0 flex items-end justify-center pb-6">
                            <h3
                                class="text-lg sm:text-xl md:text-2xl lg:text-3xl
                   font-serif text-white uppercase
                   tracking-wide underline underline-offset-8">
                                SHOP MEN
                            </h3>
                        </div>
                    </div>

                </a>

                <!-- SHOP KURTI -->
                <a href="{{ route('combos') }}" class="relative group block overflow-hidden">

                    <div class="relative w-full aspect-[4/5] overflow-hidden rounded-xl bg-[#F5F1EB]">

                        <img src="{{ asset('images/women_img1.jpg') }}" alt="Shop Men"
                            class="absolute inset-0 w-full h-full
             object-cover object-center
             transition-transform duration-700
             group-hover:scale-105">

                        <div class="absolute inset-0 bg-black/25"></div>

                        <div class="absolute inset-0 flex items-end justify-center pb-6">
                            <h3
                                class="text-lg sm:text-xl md:text-2xl lg:text-3xl
                   font-serif text-white uppercase
                   tracking-wide underline underline-offset-8">
                                SHOP women
                            </h3>
                        </div>
                    </div>

                </a>

            </div>
        </div>
    </section>




    <!-- Service Features Section -->
    <section class="service-features bg-[#F5F1EB]
                py-8 sm:py-12 md:py-14 lg:py-18">

        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <!-- TAGLINE -->
            <div class="text-center mb-6 sm:mb-8 md:mb-10">
                <p
                    class="text-sm sm:text-base md:text-lg
                      text-[#654321] font-medium leading-relaxed">
                    ❤️ Rooted in India, and inspired by journeys across the Indian Ocean. ❤️
                </p>
            </div>

            <!-- FEATURES GRID -->
            <div
                class="grid grid-cols-2
                    gap-x-4 gap-y-6
                    sm:gap-x-6 sm:gap-y-8
                    md:gap-x-8 md:gap-y-10
                    lg:grid-cols-4 lg:gap-10">

                <!-- EASY RETURNS -->
                <div class="flex flex-col items-center text-center">
                    <div class="mb-3 sm:mb-4">
                        <i
                            class="fi fi-rr-refresh
                              text-3xl sm:text-4xl md:text-5xl
                              text-[#654321]"></i>
                    </div>

                    <h3
                        class="text-sm sm:text-base md:text-lg
                           font-semibold text-[#654321] mb-1">
                        Easy returns
                    </h3>

                    <p class="text-xs sm:text-sm text-gray-700 max-w-[180px] sm:max-w-xs">
                        Return within 15 days of delivery.
                        <a href="#" class="underline hover:text-[#654321]">See T&Cs</a>
                    </p>
                </div>

                <!-- WORLDWIDE SHIPPING -->
                <div class="flex flex-col items-center text-center">
                    <div class="mb-3 sm:mb-4">
                        <i
                            class="fi fi-rr-truck-moving
                              text-3xl sm:text-4xl md:text-5xl
                              text-[#654321]"></i>
                    </div>

                    <h3
                        class="text-sm sm:text-base md:text-lg
                           font-semibold text-[#654321] mb-1">
                        We ship worldwide
                    </h3>

                    <p class="text-xs sm:text-sm text-gray-700">
                        <a href="#" class="underline hover:text-[#654321]">
                            global.aurakurtis.com
                        </a>
                    </p>
                </div>

                <!-- FREE SHIPPING -->
                <div class="flex flex-col items-center text-center">
                    <div class="mb-3 sm:mb-4">
                        <i
                            class="fi fi-rr-box
                              text-3xl sm:text-4xl md:text-5xl
                              text-[#654321]"></i>
                    </div>

                    <h3
                        class="text-sm sm:text-base md:text-lg
                           font-semibold text-[#654321] mb-1">
                        Free shipping
                    </h3>

                    <p class="text-xs sm:text-sm text-gray-700">
                        Orders above ₹1,000
                    </p>
                </div>

                <!-- CASH ON DELIVERY -->
                <div class="flex flex-col items-center text-center">
                    <div class="mb-3 sm:mb-4">
                        <i
                            class="fi fi-rr-money
                              text-3xl sm:text-4xl md:text-5xl
                              text-[#654321]"></i>
                    </div>

                    <h3
                        class="text-sm sm:text-base md:text-lg
                           font-semibold text-[#654321] mb-1">
                        Cash on delivery
                    </h3>

                    <p class="text-xs sm:text-sm text-gray-700">
                        COD available
                    </p>
                </div>

            </div>
        </div>
    </section>


@endsection

<style>
    /* Hero Section - Proper Image Centering and Full Face Display */
    .hero-winter-staples {
        position: relative;
    }

    .hero-winter-staples img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        display: block;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    /* Product Cards - Centered Images with Proper Display */
    .product-card {
        transition: transform 0.3s ease;
    }

    .product-card img {
        object-fit: cover;
        object-position: center center;
        width: 100%;
        height: 100%;
        display: block;
    }

    /* Ensure all product images show centered person/model - No extra white space */
    .product-card .aspect-square {
        background-color: #f9fafb;
        overflow: hidden;
    }

    .product-card .aspect-square img {
        object-position: center center !important;
        min-height: 100%;
        min-width: 100%;
    }

    /* Responsive Product Cards - Proper aspect ratio, no extra white space */
    .product-card .aspect-square {
        aspect-ratio: 1 / 1;
        width: 100%;
    }

    /* Ensure images fill container completely - responsive */
    @media (max-width: 639px) {
        .product-card .aspect-square {
            min-height: 250px;
        }

        .product-card h3 {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .product-card p {
            font-size: 0.75rem;
        }
    }

    @media (min-width: 640px) and (max-width: 1023px) {
        .product-card .aspect-square {
            min-height: 300px;
        }

        .product-card h3 {
            font-size: 1rem;
            line-height: 1.5rem;
        }

    }

    @media (min-width: 1024px) {
        .product-card .aspect-square {
            min-height: 400px;
        }

        .product-card h3 {
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
    }

    @media (min-width: 1280px) {
        .product-card .aspect-square {
            min-height: 450px;
        }

        .product-card h3 {
            font-size: 1.25rem;
            line-height: 1.75rem;
        }
    }

    /* Bestsellers Slider Styles */
    .bestsellers-carousel-wrapper {
        position: relative;
    }

    .bestsellers-carousel-wrapper:hover .bestsellers-nav-btn {
        opacity: 1 !important;
    }

    .bestsellers-nav-btn {
        transition: all 0.3s ease;
        cursor: pointer;
        border: none;
        outline: none;
    }

    .bestsellers-nav-btn:hover {
        transform: scale(1.15);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        background-color: white !important;
    }

    .bestsellers-nav-btn:active {
        transform: scale(1.05);
    }

    /* Ensure arrows are visible and accessible on all screens */
    @media (max-width: 767px) {
        .bestsellers-nav-btn {
            padding: 0.5rem;
            background-color: white !important;
            opacity: 1 !important;
        }

        .bestsellers-nav-btn svg {
            width: 1.25rem;
            height: 1.25rem;
        }
    }

    /* Bestsellers Carousel - Responsive with arrows */
    .bestsellers-carousel-wrapper {
        position: relative;
        overflow: hidden;
    }

    @media (max-width: 1023px) {
        .bestsellers-carousel-wrapper {
            overflow-x: hidden;
            /* Hide scrollbar, use arrows instead */
            scroll-behavior: smooth;
        }

        .bestsellers-carousel {
            scroll-snap-type: none;
            /* Disable snap when using arrows */
        }
    }

    @media (min-width: 1024px) {
        .bestsellers-carousel-wrapper {
            overflow: hidden;
        }
    }

    /* Ensure arrows don't overlap content on mobile */
    @media (max-width: 639px) {
        #bestsellers-prev {
            left: 0.25rem;
            padding: 0.5rem;
        }

        #bestsellers-next {
            right: 0.25rem;
            padding: 0.5rem;
        }
    }

    /* Shop Men / Shop Home Section - Equal Height Cards with Proper Gaps */
    .shop-men-home {
        background-color: white;
        width: 100%;
    }

    .shop-men-home .container {
        max-width: 100%;
        padding: 0;
    }

    .shop-grid {
        display: grid;
        width: 100%;
        gap: 0;
    }

    .shop-card {
        width: 100%;
        display: block;
        position: relative;
    }

    .shop-card-inner {
        width: 100%;
        position: relative;
        aspect-ratio: 1 / 1;
    }

    /* Desktop - Two columns side by side, equal height, no gap */
    @media (min-width: 1024px) {
        .shop-grid {
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        .shop-card {
            height: 100%;
        }

        .shop-card-inner {
            height: 700px;
            aspect-ratio: auto;
        }
    }

    /* Tablet - Two columns, equal height, no gap */
    @media (min-width: 768px) and (max-width: 1023px) {
        .shop-grid {
            grid-template-columns: 1fr 1fr;
            gap: 0;
        }

        .shop-card-inner {
            height: 600px;
            aspect-ratio: auto;
        }
    }

    /* Mobile - Single column, equal height cards with gap */
    @media (max-width: 767px) {
        .shop-men-home {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .shop-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .shop-card {
            width: 100%;
        }

        .shop-card-inner {
            height: 400px;
            aspect-ratio: auto;
        }
    }

    /* Small mobile - Same size cards */
    @media (max-width: 639px) {
        .shop-card-inner {
            height: 400px;
        }
    }

    /* Extra small mobile */
    @media (max-width: 479px) {
        .shop-card-inner {
            height: 350px;
        }
    }

    /* Service Features Section - Responsive Styling */
    .service-features {
        background-color: #F5F1EB;
    }

    .service-feature-item {
        transition: transform 0.3s ease;
    }

    .service-feature-item:hover {
        transform: translateY(-5px);
    }

    .service-feature-item svg {
        transition: transform 0.3s ease;
    }

    .service-feature-item:hover svg {
        transform: scale(1.1);
    }

    /* Responsive adjustments for service features */
    @media (max-width: 639px) {
        .service-features {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .service-feature-item {
            margin-bottom: 2rem;
        }

        .service-feature-item:last-child {
            margin-bottom: 0;
        }
    }

    @media (min-width: 640px) and (max-width: 1023px) {
        .service-features {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
    }
</style>

<script>
    // Animated Culture Section - Fade in after delay
    document.addEventListener('DOMContentLoaded', function() {
        const cultureSection = document.getElementById('culture-section');
        if (cultureSection) {
            // Start with opacity 0 (already set in HTML)
            // Fade in after 2 seconds
            setTimeout(() => {
                cultureSection.style.opacity = '1';
            }, 2000);
        }
    });
</script>
