@extends('layouts.app')

@section('title', 'Home - AURA KURTIS')

@section('content')
    <!-- Hero Section - Winter Staples - Single Image Properly Centered -->
    <section class="hero-winter-staples relative min-h-[500px] sm:min-h-[600px] md:min-h-[700px] lg:min-h-[800px] xl:min-h-[900px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/heroimg1.png') }}" alt="Women in Elegant Kurti" class="w-full h-full object-cover" style="object-position: center 30%;">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/20"></div>
        </div>
        <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 w-full">
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-serif text-white mb-4 sm:mb-5 md:mb-6 font-bold drop-shadow-2xl">WINTER STAPLES</h1>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-white mb-6 sm:mb-7 md:mb-8 max-w-2xl mx-auto drop-shadow-lg">Elegant kurtis for every occasion</p>
            <a href="{{ route('women') }}" class="inline-block px-8 sm:px-10 md:px-12 py-3 sm:py-3.5 md:py-4 bg-white text-[#654321] hover:bg-[#F5F1EB] transition-all duration-300 rounded-full font-semibold text-sm sm:text-base md:text-lg shadow-xl border border-[#654321]/10">
                Shop Collection
            </a>
        </div>
    </section>

    <!-- Split Banner Section - Layers to Live In -->
    <section class="split-banner py-6 sm:py-8 md:py-12 lg:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
                <!-- Left: Model Image -->
                <div class="relative overflow-hidden rounded-lg group cursor-pointer">
                    <img src="{{ $heroImages['split_left'] ?? asset('images/productimg2.jpg') }}" alt="Women in Beautiful Kurti" class="w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                
                <!-- Right: Brand Section -->
                <div class="bg-black flex items-center justify-center p-6 sm:p-8 md:p-12 lg:p-16 rounded-lg">
                    <div class="text-center">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 bg-white rounded-full mx-auto mb-4 sm:mb-6 md:mb-8 flex items-center justify-center">
                            <span class="text-xl sm:text-2xl md:text-3xl font-serif font-bold text-black">AK</span>
                        </div>
                        <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-white mb-2 sm:mb-3 md:mb-4">LAYERS TO LIVE IN</h2>
                        <p class="text-xs sm:text-sm md:text-base text-white/80 mb-4 sm:mb-6 md:mb-8 max-w-md mx-auto">Comfort meets style in our premium kurti collection</p>
                        <a href="{{ route('women') }}" class="inline-block px-5 sm:px-6 md:px-8 py-2 sm:py-2.5 md:py-3 bg-white text-black hover:bg-gray-100 transition-all duration-300 rounded-full font-semibold text-xs sm:text-sm md:text-base">
                            Explore
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Full Width Banner -->
    <section class="full-width-banner py-6 sm:py-8 md:py-12 lg:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-lg">
                <img src="{{ $heroImages['banner'] ?? asset('images/productimg3.webp') }}" alt="Women in Kurti Collection" class="w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex items-end pb-6 sm:pb-8 md:pb-12 px-4 sm:px-6 md:px-8">
                    <div class="text-white">
                        <h3 class="text-lg sm:text-xl md:text-2xl lg:text-3xl font-serif mb-1 sm:mb-2">New Arrivals</h3>
                        <p class="text-xs sm:text-sm md:text-base text-white/90">Discover our latest collection</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Yellow Separator -->
    <section class="yellow-separator bg-yellow-400 py-4 sm:py-6 md:py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center gap-3 sm:gap-4 md:gap-6">
                <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden sm:block sm:w-[50px] sm:h-[50px] md:w-[60px] md:h-[60px]">
                    <path d="M30 10 L35 20 L45 20 L37 27 L40 37 L30 32 L20 37 L23 27 L15 20 L25 20 Z" fill="#654321" opacity="0.6"/>
                </svg>
                <p class="text-xs sm:text-sm md:text-base lg:text-lg text-[#654321] font-semibold text-center">Premium Quality • Free Shipping • Easy Returns</p>
                <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden sm:block sm:w-[50px] sm:h-[50px] md:w-[60px] md:h-[60px]">
                    <path d="M30 10 L35 20 L45 20 L37 27 L40 37 L30 32 L20 37 L23 27 L15 20 L25 20 Z" fill="#654321" opacity="0.6"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- Product Grid - Lifestyle & Fashion -->
    <section class="product-grid-lifestyle py-8 sm:py-12 md:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-center mb-6 sm:mb-8 md:mb-12 text-[#654321]">Lifestyle Collection</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 lg:gap-8">
                @foreach($products['lifestyle'] ?? [] as $product)
                <a href="{{ route('product.detail', ['id' => $product['id']]) }}" class="group cursor-pointer block product-card">
                    <div class="relative overflow-hidden mb-2 sm:mb-3 md:mb-4 rounded-lg bg-white">
                        <div class="relative w-full aspect-square overflow-hidden flex items-center justify-center">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover" style="object-position: center center;">
                        </div>
                        <span class="absolute top-2 right-2 sm:top-3 sm:right-3 md:top-4 md:right-4 text-white px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-[10px] sm:text-xs font-semibold {{ $product['badge_color'] === 'red' ? 'bg-red-500' : ($product['badge_color'] === 'yellow' ? 'bg-yellow-500' : ($product['badge_color'] === 'green' ? 'bg-green-500' : ($product['badge_color'] === 'purple' ? 'bg-purple-500' : ($product['badge_color'] === 'pink' ? 'bg-pink-500' : ($product['badge_color'] === 'blue' ? 'bg-blue-500' : ($product['badge_color'] === 'orange' ? 'bg-orange-500' : 'bg-gray-500')))))) }}">{{ $product['badge'] }}</span>
                    </div>
                    <h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-medium text-[#654321] mb-1 sm:mb-2">{{ $product['name'] }}</h3>
                    <p class="text-xs sm:text-sm text-gray-500 mb-1">{{ $product['description'] }}</p>
                    <p class="text-sm sm:text-base md:text-lg text-[#8B4513] font-semibold">
                        ₹{{ number_format($product['price']) }}
                        @if($product['original_price'])
                            <span class="text-xs sm:text-sm text-gray-400 line-through ml-1 sm:ml-2">₹{{ number_format($product['original_price']) }}</span>
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
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-center mb-6 sm:mb-8 md:mb-12 text-[#654321]">Traditional Collection</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 lg:gap-8">
                @foreach($products['traditional'] ?? [] as $product)
                <a href="{{ route('product.detail', ['id' => $product['id']]) }}" class="group cursor-pointer block product-card">
                    <div class="relative overflow-hidden mb-2 sm:mb-3 md:mb-4 rounded-lg bg-white">
                        <div class="relative w-full aspect-square overflow-hidden flex items-center justify-center">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover" style="object-position: center center;">
                        </div>
                        <span class="absolute top-2 left-2 sm:top-3 sm:left-3 md:top-4 md:left-4 text-white px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-[10px] sm:text-xs font-semibold {{ $product['badge_color'] === 'red' ? 'bg-red-500' : ($product['badge_color'] === 'yellow' ? 'bg-yellow-500' : ($product['badge_color'] === 'green' ? 'bg-green-500' : ($product['badge_color'] === 'purple' ? 'bg-purple-500' : ($product['badge_color'] === 'pink' ? 'bg-pink-500' : ($product['badge_color'] === 'blue' ? 'bg-blue-500' : ($product['badge_color'] === 'orange' ? 'bg-orange-500' : 'bg-gray-500')))))) }}">{{ $product['badge'] }}</span>
                    </div>
                    <h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-medium text-[#654321] mb-1 sm:mb-2">{{ $product['name'] }}</h3>
                    <p class="text-xs sm:text-sm text-gray-500 mb-1">{{ $product['description'] }}</p>
                    <p class="text-sm sm:text-base md:text-lg text-[#8B4513] font-semibold">
                        ₹{{ number_format($product['price']) }}
                        @if($product['original_price'])
                            <span class="text-xs sm:text-sm text-gray-400 line-through ml-1 sm:ml-2">₹{{ number_format($product['original_price']) }}</span>
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
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-center mb-6 sm:mb-8 md:mb-12 text-[#654321]">Premium Suits Collection</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 lg:gap-8">
                @foreach($products['suits'] ?? [] as $product)
                <a href="{{ route('product.detail', ['id' => $product['id']]) }}" class="group cursor-pointer block product-card">
                    <div class="relative overflow-hidden mb-2 sm:mb-3 md:mb-4 rounded-lg bg-white">
                        <div class="relative w-full aspect-square overflow-hidden flex items-center justify-center">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover" style="object-position: center center;">
                        </div>
                        <span class="absolute top-2 left-2 sm:top-3 sm:left-3 md:top-4 md:left-4 text-white px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-[10px] sm:text-xs font-semibold {{ $product['badge_color'] === 'red' ? 'bg-red-500' : ($product['badge_color'] === 'yellow' ? 'bg-yellow-500' : ($product['badge_color'] === 'green' ? 'bg-green-500' : ($product['badge_color'] === 'purple' ? 'bg-purple-500' : ($product['badge_color'] === 'pink' ? 'bg-pink-500' : ($product['badge_color'] === 'blue' ? 'bg-blue-500' : ($product['badge_color'] === 'orange' ? 'bg-orange-500' : 'bg-gray-500')))))) }}">{{ $product['badge'] }}</span>
                    </div>
                    <h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-medium text-[#654321] mb-1 sm:mb-2">{{ $product['name'] }}</h3>
                    <p class="text-xs sm:text-sm text-gray-500 mb-1">{{ $product['description'] }}</p>
                    <p class="text-sm sm:text-base md:text-lg text-[#8B4513] font-semibold">
                        ₹{{ number_format($product['price']) }}
                        @if($product['original_price'])
                            <span class="text-xs sm:text-sm text-gray-400 line-through ml-1 sm:ml-2">₹{{ number_format($product['original_price']) }}</span>
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
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-center mb-6 sm:mb-8 md:mb-12 text-[#654321]">MORE COLLECTIONS TO LOVE</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
                <!-- Collection 1 -->
                <a href="{{ route('kurtis.printed') }}" class="group cursor-pointer block relative overflow-hidden">
                    <div class="relative h-[500px] sm:h-[600px] md:h-[700px] lg:h-[800px] xl:h-[900px] overflow-hidden flex items-center justify-center">
                        <img src="{{ $collectionImages['patterned'] ?? asset('images/productimg5.webp') }}" alt="Patterned Kurti Collection" class="w-full h-full object-cover" style="object-position: center center;">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 md:p-12 lg:p-16">
                            <h3 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-serif text-white font-bold uppercase tracking-wide underline decoration-white decoration-2 underline-offset-4">
                                FIREFLY
                            </h3>
                        </div>
                    </div>
                </a>
                
                <!-- Collection 2 -->
                <a href="{{ route('kurtis.anarkali') }}" class="group cursor-pointer block relative overflow-hidden">
                    <div class="relative h-[500px] sm:h-[600px] md:h-[700px] lg:h-[800px] xl:h-[900px] overflow-hidden flex items-center justify-center">
                        <img src="{{ $collectionImages['anarkali'] ?? asset('images/productimg7.jpg') }}" alt="Flowing Anarkali Collection" class="w-full h-full object-cover" style="object-position: center center;">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 md:p-12 lg:p-16">
                            <h3 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-serif text-white font-bold uppercase tracking-wide underline decoration-white decoration-2 underline-offset-4">
                                DHARA
                            </h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Our Bestsellers Carousel with Auto-Slide -->
    <section class="bestsellers py-8 sm:py-12 md:py-16 lg:py-20 bg-[#F5F1EB]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-center mb-6 sm:mb-8 md:mb-12 text-[#654321]">OUR BESTSELLERS</h2>
            <div class="relative">
                <!-- Navigation Arrows -->
                <button id="bestsellers-prev" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white shadow-lg rounded-full p-2 sm:p-3 md:p-4 transition-all opacity-0 group-hover:opacity-100 bestsellers-nav-btn hidden lg:flex items-center justify-center">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-[#654321]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button id="bestsellers-next" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-white/90 hover:bg-white shadow-lg rounded-full p-2 sm:p-3 md:p-4 transition-all opacity-0 group-hover:opacity-100 bestsellers-nav-btn hidden lg:flex items-center justify-center">
                    <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-[#654321]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                
                <!-- Carousel Container -->
                <div class="bestsellers-carousel-wrapper relative group overflow-hidden">
                    <div id="bestsellers-carousel" class="bestsellers-carousel flex gap-3 sm:gap-4 md:gap-6 lg:gap-8 transition-transform duration-500 ease-in-out">
                        @foreach($products['bestsellers'] ?? [] as $product)
                        <div class="flex-shrink-0 w-[240px] sm:w-[280px] md:w-[300px] lg:w-[320px] xl:w-[360px]">
                            <a href="{{ route('product.detail', ['id' => $product['id']]) }}" class="group cursor-pointer block product-card">
                                <div class="relative overflow-hidden mb-3 sm:mb-4 bg-white rounded-lg">
                                    <div class="relative w-full aspect-square overflow-hidden flex items-center justify-center">
                                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-full h-full object-cover" style="object-position: center center;">
                                    </div>
                                    <span class="absolute top-2 left-2 sm:top-3 sm:left-3 md:top-4 md:left-4 text-white px-2 py-0.5 sm:px-3 sm:py-1 rounded-full text-[10px] sm:text-xs font-semibold {{ $product['badge_color'] === 'red' ? 'bg-red-500' : ($product['badge_color'] === 'yellow' ? 'bg-yellow-500' : ($product['badge_color'] === 'green' ? 'bg-green-500' : ($product['badge_color'] === 'purple' ? 'bg-purple-500' : ($product['badge_color'] === 'pink' ? 'bg-pink-500' : ($product['badge_color'] === 'blue' ? 'bg-blue-500' : ($product['badge_color'] === 'orange' ? 'bg-orange-500' : 'bg-gray-500')))))) }}">{{ $product['badge'] }}</span>
                                </div>
                                <h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-medium text-[#654321] mb-1">{{ $product['name'] }}</h3>
                                <p class="text-[10px] sm:text-xs text-gray-500 mb-1">{{ $product['description'] }}</p>
                                <p class="text-sm sm:text-base md:text-lg text-[#8B4513] font-semibold">
                                    ₹{{ number_format($product['price']) }}
                                    @if($product['original_price'])
                                        <span class="text-[10px] sm:text-xs md:text-sm text-gray-400 line-through ml-1 sm:ml-2">₹{{ number_format($product['original_price']) }}</span>
                                    @endif
                                </p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gifting & Concierge Section -->
    <section class="gifting-section py-8 sm:py-12 md:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
                <!-- Left: For Every Celebration -->
                <div class="bg-green-50 p-6 sm:p-8 md:p-12 lg:p-16 rounded-lg text-center">
                    <div class="mb-4 sm:mb-6 md:mb-8">
                        <img src="{{ asset('images/productimg11.webp') }}" alt="Gifting Collection" class="w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 mx-auto rounded-full object-cover">
                    </div>
                    <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-[#654321] mb-2 sm:mb-3 md:mb-4">FOR EVERY CELEBRATION</h3>
                    <p class="text-xs sm:text-sm md:text-base text-gray-600 mb-4 sm:mb-6 md:mb-8">Perfect gifts for your loved ones</p>
                    <a href="{{ route('gifting') }}" class="inline-block px-5 sm:px-6 md:px-8 py-2 sm:py-2.5 md:py-3 bg-[#8B4513] text-white hover:bg-[#654321] transition-all duration-300 rounded-full font-semibold text-xs sm:text-sm md:text-base">
                        Shop Gifts
                    </a>
                </div>
                
                <!-- Right: The Gifting Concierge -->
                <div class="bg-red-50 p-6 sm:p-8 md:p-12 lg:p-16 rounded-lg text-center">
                    <div class="mb-4 sm:mb-6 md:mb-8">
                        <svg width="100" height="100" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto sm:w-[110px] sm:h-[110px] md:w-[120px] md:h-[120px]">
                            <circle cx="60" cy="60" r="50" fill="#654321" opacity="0.2"/>
                            <path d="M60 30 L70 50 L90 50 L75 65 L80 85 L60 75 L40 85 L45 65 L30 50 L50 50 Z" fill="#654321"/>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-[#654321] mb-2 sm:mb-3 md:mb-4">THE GIFTING CONCIERGE</h3>
                    <p class="text-base sm:text-lg md:text-xl font-semibold text-[#654321] mb-2 sm:mb-3 md:mb-4">LAST MINUTE INVITES?</p>
                    <p class="text-xs sm:text-sm md:text-base text-gray-600 mb-4 sm:mb-6 md:mb-8">We've got you covered with express delivery</p>
                    <a href="{{ route('contact') }}" class="inline-block px-5 sm:px-6 md:px-8 py-2 sm:py-2.5 md:py-3 bg-[#8B4513] text-white hover:bg-[#654321] transition-all duration-300 rounded-full font-semibold text-xs sm:text-sm md:text-base">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Brand Focus Section -->
    <section class="brand-focus py-8 sm:py-12 md:py-16 lg:py-20 bg-[#F5F1EB]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-amber-600 to-amber-700 rounded-lg p-6 sm:p-8 md:p-12 lg:p-16 mb-6 sm:mb-8 md:mb-12 text-center">
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-serif text-white mb-2 sm:mb-3 md:mb-4">AURA KURTIS</h2>
                <p class="text-sm sm:text-base md:text-lg text-white/90 max-w-2xl mx-auto">Premium quality kurtis for the modern woman</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
                <!-- Left Image -->
                <a href="{{ route('women') }}" class="group cursor-pointer block">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="{{ $collectionImages['casual'] ?? asset('images/productimg8.webp') }}" alt="Casual Kurti Collection" class="w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="text-base sm:text-lg md:text-xl font-medium text-[#654321] mt-3 sm:mt-4 mb-1 sm:mb-2">Casual Comfort</h3>
                    <p class="text-sm sm:text-base md:text-lg text-gray-600">Everyday elegance</p>
                </a>
                
                <!-- Right Image -->
                <a href="{{ route('combos') }}" class="group cursor-pointer block">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="{{ $collectionImages['complete'] ?? asset('images/productimg10.jpg') }}" alt="Kurti Accessories" class="w-full h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="text-base sm:text-lg md:text-xl font-medium text-[#654321] mt-3 sm:mt-4 mb-1 sm:mb-2">Complete Look</h3>
                    <p class="text-sm sm:text-base md:text-lg text-gray-600">Style accessories</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Split Banner Section - Shop Women / Shop Home Style -->
    <section class="split-shop-banner py-0 bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0">
            <!-- Left: Shop Women -->
            <a href="{{ route('women') }}" class="relative group cursor-pointer block overflow-hidden">
                <div class="relative h-[400px] sm:h-[500px] md:h-[600px] lg:h-[700px] overflow-hidden">
                    <img src="{{ $heroImages['split_left'] ?? asset('images/productimg2.jpg') }}" alt="Shop Women's Kurtis" class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 md:p-12 lg:p-16">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-serif text-white font-bold uppercase tracking-wide underline decoration-white decoration-2 underline-offset-4">
                            SHOP WOMEN
                        </h3>
                    </div>
                </div>
            </a>
            
            <!-- Right: Shop Home/Combos -->
            <a href="{{ route('combos') }}" class="relative group cursor-pointer block overflow-hidden">
                <div class="relative h-[400px] sm:h-[500px] md:h-[600px] lg:h-[700px] overflow-hidden">
                    <img src="{{ $collectionImages['complete'] ?? asset('images/productimg10.jpg') }}" alt="Shop Complete Looks" class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 md:p-12 lg:p-16">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-serif text-white font-bold uppercase tracking-wide underline decoration-white decoration-2 underline-offset-4">
                            SHOP COMBOS
                        </h3>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- Animated Culture Section - Fades in after delay -->
    <section id="culture-section" class="culture-section py-12 sm:py-16 md:py-20 lg:py-24 bg-white opacity-0 transition-opacity duration-1000">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <p class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-serif text-[#654321] leading-relaxed">
                    Ours is a culture where madness and data co-exist.
                </p>
            </div>
        </div>
    </section>


    <!-- khurit Video Section - Full Width -->
    <x-video-section 
        :useDogVideo="true"
        :showOverlay="false"
        :showContent="false"
    />

    <!-- Newsletter Signup - Last Section Before Footer -->
    <x-newsletter-signup />
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
    object-position: center 30%;
    display: block;
}

/* Ensure full face is visible on different screen sizes */
@media (min-width: 640px) {
    .hero-winter-staples img {
        object-position: center 25%;
    }
}

@media (min-width: 1024px) {
    .hero-winter-staples img {
        object-position: center 20%;
    }
}

@media (min-width: 1280px) {
    .hero-winter-staples img {
        object-position: center 15%;
    }
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

/* Ensure all product images show centered person/model */
.product-card .aspect-square {
    background-color: #f9fafb;
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-card .aspect-square img {
    object-position: center 30% !important;
}

@media (min-width: 640px) {
    .product-card .aspect-square img {
        object-position: center 25% !important;
    }
}

@media (min-width: 1024px) {
    .product-card .aspect-square img {
        object-position: center 20% !important;
    }
}

/* Responsive Product Cards - Phone (small), Tablet (medium), Desktop (large) */

/* Mobile - Small Cards */
@media (max-width: 639px) {
    .product-card img {
        height: 250px;
    }
    .product-card h3 {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }
    .product-card p {
        font-size: 0.75rem;
    }
}

/* Tablet - Medium Cards */
@media (min-width: 640px) and (max-width: 1023px) {
    .product-card img {
        height: 300px;
    }
    .product-card h3 {
        font-size: 1rem;
        line-height: 1.5rem;
    }
}

/* Desktop - Large Cards */
@media (min-width: 1024px) {
    .product-card img {
        height: 500px;
    }
    .product-card h3 {
        font-size: 1.125rem;
        line-height: 1.75rem;
    }
}

/* Extra Large Desktop - Original Size */
@media (min-width: 1280px) {
    .product-card img {
        height: 600px;
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
}

.bestsellers-nav-btn:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

@media (max-width: 1023px) {
    .bestsellers-carousel-wrapper {
        overflow-x: auto;
        scroll-behavior: smooth;
        scroll-snap-type: x mandatory;
    }
    
    .bestsellers-carousel {
        scroll-snap-type: x mandatory;
    }
    
    .bestsellers-carousel > div {
        scroll-snap-align: start;
    }
}

@media (min-width: 1024px) {
    .bestsellers-carousel-wrapper {
        overflow: hidden;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('bestsellers-carousel');
    const prevBtn = document.getElementById('bestsellers-prev');
    const nextBtn = document.getElementById('bestsellers-next');
    const wrapper = document.querySelector('.bestsellers-carousel-wrapper');
    
    if (!carousel || !prevBtn || !nextBtn || !wrapper) return;
    
    let currentIndex = 0;
    let autoSlideInterval;
    let isPaused = false;
    
    // Get number of visible items based on screen size
    function getVisibleItems() {
        if (window.innerWidth >= 1280px) return 4; // XL Desktop
        if (window.innerWidth >= 1024px) return 3; // Desktop
        if (window.innerWidth >= 768px) return 2;  // Tablet
        return 1; // Mobile
    }
    
    // Get card width including gap
    function getCardWidth() {
        if (window.innerWidth >= 1280px) return 360 + 32; // card + gap
        if (window.innerWidth >= 1024px) return 320 + 32;
        if (window.innerWidth >= 768px) return 300 + 24;
        return 240 + 12;
    }
    
    // Get total items
    const totalItems = carousel.children.length;
    
    function updateCarousel() {
        const cardWidth = getCardWidth();
        const translateX = -currentIndex * cardWidth;
        carousel.style.transform = `translateX(${translateX}px)`;
    }
    
    function nextSlide() {
        const visibleItems = getVisibleItems();
        const maxIndex = Math.max(0, totalItems - visibleItems);
        if (maxIndex === 0) return; // Don't slide if all items fit
        currentIndex = (currentIndex + 1) % (maxIndex + 1);
        if (currentIndex === 0 && maxIndex > 0) currentIndex = 0; // Reset to start
        updateCarousel();
    }
    
    function prevSlide() {
        const visibleItems = getVisibleItems();
        const maxIndex = Math.max(0, totalItems - visibleItems);
        if (maxIndex === 0) return; // Don't slide if all items fit
        currentIndex = currentIndex === 0 ? maxIndex : currentIndex - 1;
        updateCarousel();
    }
    
    function startAutoSlide() {
        stopAutoSlide(); // Clear any existing interval
        if (window.innerWidth < 1024) return; // Only auto-slide on desktop
        autoSlideInterval = setInterval(() => {
            if (!isPaused) {
                nextSlide();
            }
        }, 3000); // Auto-slide every 3 seconds
    }
    
    function stopAutoSlide() {
        if (autoSlideInterval) {
            clearInterval(autoSlideInterval);
            autoSlideInterval = null;
        }
    }
    
    // Event Listeners
    nextBtn.addEventListener('click', () => {
        nextSlide();
        stopAutoSlide();
        startAutoSlide(); // Restart timer
    });
    
    prevBtn.addEventListener('click', () => {
        prevSlide();
        stopAutoSlide();
        startAutoSlide(); // Restart timer
    });
    
    // Pause on hover
    wrapper.addEventListener('mouseenter', () => {
        isPaused = true;
        prevBtn.style.opacity = '1';
        nextBtn.style.opacity = '1';
    });
    
    wrapper.addEventListener('mouseleave', () => {
        isPaused = false;
        prevBtn.style.opacity = '0';
        nextBtn.style.opacity = '0';
    });
    
    // Show/hide arrows on desktop
    function toggleArrows() {
        if (window.innerWidth >= 1024) {
            prevBtn.style.display = 'flex';
            nextBtn.style.display = 'flex';
        } else {
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'none';
        }
    }
    
    // Handle resize
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            currentIndex = 0; // Reset to start on resize
            updateCarousel();
            toggleArrows();
            stopAutoSlide();
            startAutoSlide();
        }, 250);
    });
    
    // Initialize
    updateCarousel();
    toggleArrows();
    startAutoSlide();
});

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
