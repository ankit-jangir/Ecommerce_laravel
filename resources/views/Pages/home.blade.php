@extends('layouts.app')

@section('title', 'Home - AURA KURTIS')

@section('content')
    <!-- Hero Section - Winter Staples -->
    <section class="hero-winter-staples relative min-h-[500px] sm:min-h-[600px] lg:min-h-[700px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop" alt="Women in Elegant Kurti" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/20"></div>
        </div>
        <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-serif text-white mb-4 sm:mb-6 font-bold">WINTER STAPLES</h1>
            <p class="text-base sm:text-lg md:text-xl text-white/90 mb-6 sm:mb-8 max-w-2xl mx-auto">Elegant kurtis for every occasion</p>
            <a href="{{ route('women') }}" class="inline-block px-8 sm:px-10 py-3 sm:py-4 bg-white text-[#654321] hover:bg-[#F5F1EB] transition-all duration-300 rounded-full font-semibold text-sm sm:text-base">
                Shop Collection
            </a>
        </div>
    </section>

    <!-- Split Banner Section - Layers to Live In -->
    <section class="split-banner py-8 sm:py-12 lg:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
                <!-- Left: Model Image -->
                <div class="relative overflow-hidden rounded-lg group cursor-pointer">
                    <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&w=800&h=1000&fit=crop" alt="Women in Beautiful Kurti" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                
                <!-- Right: Brand Section -->
                <div class="bg-black flex items-center justify-center p-8 sm:p-12 lg:p-16 rounded-lg">
                    <div class="text-center">
                        <div class="w-24 h-24 sm:w-32 sm:h-32 bg-white rounded-full mx-auto mb-6 sm:mb-8 flex items-center justify-center">
                            <span class="text-2xl sm:text-3xl font-serif font-bold text-black">AK</span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-white mb-3 sm:mb-4">LAYERS TO LIVE IN</h2>
                        <p class="text-sm sm:text-base text-white/80 mb-6 sm:mb-8 max-w-md mx-auto">Comfort meets style in our premium kurti collection</p>
                        <a href="{{ route('women') }}" class="inline-block px-6 sm:px-8 py-2.5 sm:py-3 bg-white text-black hover:bg-gray-100 transition-all duration-300 rounded-full font-semibold text-sm sm:text-base">
                            Explore
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Full Width Banner -->
    <section class="full-width-banner py-8 sm:py-12 lg:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-lg">
                <img src="https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg?auto=compress&cs=tinysrgb&w=1920&h=800&fit=crop" alt="Women in Kurti Collection" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex items-end pb-8 sm:pb-12 px-4 sm:px-8">
                    <div class="text-white">
                        <h3 class="text-xl sm:text-2xl lg:text-3xl font-serif mb-2">New Arrivals</h3>
                        <p class="text-sm sm:text-base text-white/90">Discover our latest collection</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Yellow Separator -->
    <section class="yellow-separator bg-yellow-400 py-6 sm:py-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center gap-4 sm:gap-6">
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden sm:block">
                    <path d="M30 10 L35 20 L45 20 L37 27 L40 37 L30 32 L20 37 L23 27 L15 20 L25 20 Z" fill="#654321" opacity="0.6"/>
                </svg>
                <p class="text-sm sm:text-base md:text-lg text-[#654321] font-semibold text-center">Premium Quality • Free Shipping • Easy Returns</p>
                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="hidden sm:block">
                    <path d="M30 10 L35 20 L45 20 L37 27 L40 37 L30 32 L20 37 L23 27 L15 20 L25 20 Z" fill="#654321" opacity="0.6"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- Product Grid - Lifestyle & Fashion -->
    <section class="product-grid-lifestyle py-12 sm:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-center mb-8 sm:mb-12 text-[#654321]">Lifestyle Collection</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
                <!-- Product 1 -->
                <a href="{{ route('product.detail', ['id' => 'floral-print-anarkali']) }}" class="group cursor-pointer block">
                    <div class="relative overflow-hidden mb-4 rounded-lg">
                        <img src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=600&h=800&fit=crop" alt="Floral Print Anarkali Kurti" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold">NEW</span>
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-2">Floral Print Anarkali</h3>
                    <p class="text-sm text-gray-500 mb-1">Comfortable Cotton</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹2,499 <span class="text-sm text-gray-400 line-through ml-2">₹3,299</span></p>
                </a>
                
                <!-- Product 2 -->
                <a href="{{ route('product.detail', ['id' => 'embroidered-straight-cut']) }}" class="group cursor-pointer block">
                    <div class="relative overflow-hidden mb-4 rounded-lg">
                        <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&w=600&h=800&fit=crop" alt="Embroidered Straight Kurti" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 bg-yellow-400 text-[#654321] px-3 py-1 rounded-full text-xs font-semibold">BESTSELLER</span>
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-2">Embroidered Straight Cut</h3>
                    <p class="text-sm text-gray-500 mb-1">Premium Georgette</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹2,799</p>
                </a>
                
                <!-- Product 3 -->
                <a href="{{ route('product.detail', ['id' => 'printed-a-line-kurti']) }}" class="group cursor-pointer block">
                    <div class="relative overflow-hidden mb-4 rounded-lg">
                        <img src="https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg?auto=compress&cs=tinysrgb&w=600&h=800&fit=crop" alt="Printed A-Line Kurti" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">TRENDING</span>
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-2">Printed A-Line Kurti</h3>
                    <p class="text-sm text-gray-500 mb-1">Soft Rayon Fabric</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹1,999 <span class="text-sm text-gray-400 line-through ml-2">₹2,499</span></p>
                </a>
                
                <!-- Product 4 -->
                <a href="{{ route('product.detail', ['id' => 'designer-kurti-set']) }}" class="group cursor-pointer block">
                    <div class="relative overflow-hidden mb-4 rounded-lg">
                        <img src="https://images.pexels.com/photos/157675/fashion-men-s-individuality-black-and-white-157675.jpeg?auto=compress&cs=tinysrgb&w=600&h=800&fit=crop" alt="Designer Kurti Set" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 bg-purple-500 text-white px-3 py-1 rounded-full text-xs font-semibold">EXCLUSIVE</span>
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-2">Designer Kurti Set</h3>
                    <p class="text-sm text-gray-500 mb-1">Complete Outfit</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹3,499 <span class="text-sm text-gray-400 line-through ml-2">₹4,999</span></p>
                </a>
            </div>
        </div>
    </section>

    <!-- Product Grid - Traditional/Formal Wear -->
    <section class="product-grid-traditional py-12 sm:py-16 lg:py-20 bg-[#F5F1EB]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-center mb-8 sm:mb-12 text-[#654321]">Traditional Collection</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
                <!-- Product 1 -->
                <a href="{{ route('product.detail', ['id' => 'heavy-embroidered-kurti']) }}" class="group cursor-pointer block">
                    <div class="relative overflow-hidden mb-4 rounded-lg">
                        <img src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=600&h=800&fit=crop" alt="Heavy Embroidered Kurti" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold">PREMIUM</span>
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-2">Heavy Embroidered Kurti</h3>
                    <p class="text-sm text-gray-500 mb-1">Festival Collection</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹4,999 <span class="text-sm text-gray-400 line-through ml-2">₹6,999</span></p>
                </a>
                
                <!-- Product 2 -->
                <a href="{{ route('product.detail', ['id' => 'silk-flowing-anarkali']) }}" class="group cursor-pointer block">
                    <div class="relative overflow-hidden mb-4 rounded-lg">
                        <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&w=600&h=800&fit=crop" alt="Silk Flowing Kurti" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 bg-pink-500 text-white px-3 py-1 rounded-full text-xs font-semibold">POPULAR</span>
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-2">Silk Flowing Anarkali</h3>
                    <p class="text-sm text-gray-500 mb-1">Luxury Silk Fabric</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹3,799</p>
                </a>
                
                <!-- Product 3 -->
                <a href="{{ route('product.detail', ['id' => 'floral-printed-kurti']) }}" class="group cursor-pointer block">
                    <div class="relative overflow-hidden mb-4 rounded-lg">
                        <img src="https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg?auto=compress&cs=tinysrgb&w=600&h=800&fit=crop" alt="Floral Printed Kurti" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-semibold">LIMITED</span>
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-2">Floral Printed Kurti</h3>
                    <p class="text-sm text-gray-500 mb-1">Casual Wear</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹2,299 <span class="text-sm text-gray-400 line-through ml-2">₹2,999</span></p>
                </a>
                
                <!-- Product 4 -->
                <a href="{{ route('product.detail', ['id' => 'designer-party-kurti']) }}" class="group cursor-pointer block">
                    <div class="relative overflow-hidden mb-4 rounded-lg">
                        <img src="https://images.pexels.com/photos/157675/fashion-men-s-individuality-black-and-white-157675.jpeg?auto=compress&cs=tinysrgb&w=600&h=800&fit=crop" alt="Designer Kurti" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                        <span class="absolute top-4 right-4 bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-semibold">HOT</span>
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-2">Designer Party Kurti</h3>
                    <p class="text-sm text-gray-500 mb-1">Evening Wear</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹3,299 <span class="text-sm text-gray-400 line-through ml-2">₹4,499</span></p>
                </a>
            </div>
        </div>
    </section>

    <!-- More Collections to Love -->
    <section class="more-collections py-12 sm:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-center mb-8 sm:mb-12 text-[#654321]">MORE COLLECTIONS TO LOVE</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12">
                <!-- Collection 1 -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden mb-4 rounded-lg">
                        <img src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=800&h=1000&fit=crop" alt="Patterned Kurti Collection" class="w-full h-[500px] sm:h-[600px] lg:h-[700px] object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="text-xl sm:text-2xl font-medium text-[#654321] mb-2">Patterned Perfection</h3>
                    <p class="text-base sm:text-lg text-gray-600">Explore our vibrant patterns</p>
                    <a href="{{ route('kurtis.printed') }}" class="inline-block mt-3 text-[#8B4513] hover:text-[#654321] font-semibold text-sm sm:text-base">Shop Now →</a>
                </div>
                
                <!-- Collection 2 -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden mb-4 rounded-lg">
                        <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&w=800&h=1000&fit=crop" alt="Flowing Anarkali Collection" class="w-full h-[500px] sm:h-[600px] lg:h-[700px] object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="text-xl sm:text-2xl font-medium text-[#654321] mb-2">Flowing Elegance</h3>
                    <p class="text-base sm:text-lg text-gray-600">Discover graceful silhouettes</p>
                    <a href="{{ route('kurtis.anarkali') }}" class="inline-block mt-3 text-[#8B4513] hover:text-[#654321] font-semibold text-sm sm:text-base">Shop Now →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Bestsellers Carousel -->
    <section class="bestsellers py-12 sm:py-16 lg:py-20 bg-[#F5F1EB]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-center mb-8 sm:mb-12 text-[#654321]">OUR BESTSELLERS</h2>
            <div class="relative">
                <div class="bestsellers-carousel overflow-x-auto scrollbar-hide pb-4">
                    <div class="flex gap-4 sm:gap-6 lg:gap-8" style="scroll-snap-type: x mandatory;">
                        <!-- Bestseller 1 -->
                        <div class="flex-shrink-0 w-[280px] sm:w-[320px] lg:w-[360px]" style="scroll-snap-align: start;">
                            <a href="{{ route('product.detail', ['id' => 'red-embroidered-kurti']) }}" class="group cursor-pointer block">
                                <div class="relative overflow-hidden mb-4 rounded-lg">
                                    <img src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=400&h=500&fit=crop" alt="Red Embroidered Kurti" class="w-full h-[350px] sm:h-[400px] lg:h-[450px] object-cover group-hover:scale-105 transition-transform duration-500">
                                    <span class="absolute top-4 left-4 bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold">#1 BESTSELLER</span>
                                </div>
                                <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-1">Red Embroidered Kurti</h3>
                                <p class="text-xs text-gray-500 mb-1">Festival Special</p>
                                <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹3,299 <span class="text-sm text-gray-400 line-through ml-2">₹4,499</span></p>
                            </a>
                        </div>
                        
                        <!-- Bestseller 2 -->
                        <div class="flex-shrink-0 w-[280px] sm:w-[320px] lg:w-[360px]" style="scroll-snap-align: start;">
                            <a href="{{ route('product.detail', ['id' => 'pink-floral-anarkali']) }}" class="group cursor-pointer block">
                                <div class="relative overflow-hidden mb-4 rounded-lg">
                                    <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&w=400&h=500&fit=crop" alt="Pink Floral Kurti" class="w-full h-[350px] sm:h-[400px] lg:h-[450px] object-cover group-hover:scale-105 transition-transform duration-500">
                                    <span class="absolute top-4 left-4 bg-pink-500 text-white px-3 py-1 rounded-full text-xs font-semibold">TRENDING</span>
                                </div>
                                <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-1">Pink Floral Anarkali</h3>
                                <p class="text-xs text-gray-500 mb-1">Casual Elegance</p>
                                <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹2,699</p>
                            </a>
                        </div>
                        
                        <!-- Bestseller 3 -->
                        <div class="flex-shrink-0 w-[280px] sm:w-[320px] lg:w-[360px]" style="scroll-snap-align: start;">
                            <a href="{{ route('product.detail', ['id' => 'designer-party-kurti-bestseller']) }}" class="group cursor-pointer block">
                                <div class="relative overflow-hidden mb-4 rounded-lg">
                                    <img src="https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg?auto=compress&cs=tinysrgb&w=400&h=500&fit=crop" alt="Designer Kurti" class="w-full h-[350px] sm:h-[400px] lg:h-[450px] object-cover group-hover:scale-105 transition-transform duration-500">
                                    <span class="absolute top-4 left-4 bg-purple-500 text-white px-3 py-1 rounded-full text-xs font-semibold">EXCLUSIVE</span>
                                </div>
                                <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-1">Designer Party Kurti</h3>
                                <p class="text-xs text-gray-500 mb-1">Evening Wear</p>
                                <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹3,999 <span class="text-sm text-gray-400 line-through ml-2">₹5,499</span></p>
                            </a>
                        </div>
                        
                        <!-- Bestseller 4 -->
                        <div class="flex-shrink-0 w-[280px] sm:w-[320px] lg:w-[360px]" style="scroll-snap-align: start;">
                            <a href="{{ route('product.detail', ['id' => 'printed-kurti-set']) }}" class="group cursor-pointer block">
                                <div class="relative overflow-hidden mb-4 rounded-lg">
                                    <img src="https://images.pexels.com/photos/157675/fashion-men-s-individuality-black-and-white-157675.jpeg?auto=compress&cs=tinysrgb&w=400&h=500&fit=crop" alt="Printed Kurti Set" class="w-full h-[350px] sm:h-[400px] lg:h-[450px] object-cover group-hover:scale-105 transition-transform duration-500">
                                    <span class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">NEW</span>
                                </div>
                                <h3 class="text-lg sm:text-xl font-medium text-[#654321] mb-1">Printed Kurti Set</h3>
                                <p class="text-xs text-gray-500 mb-1">Complete Outfit</p>
                                <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹3,499 <span class="text-sm text-gray-400 line-through ml-2">₹4,999</span></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gifting & Concierge Section -->
    <section class="gifting-section py-12 sm:py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 sm:gap-6 lg:gap-8">
                <!-- Left: For Every Celebration -->
                <div class="bg-green-50 p-8 sm:p-12 lg:p-16 rounded-lg text-center">
                    <div class="mb-6 sm:mb-8">
                        <img src="https://images.pexels.com/photos/985635/pexels-photo-985635.jpeg?auto=compress&cs=tinysrgb&w=300&h=300&fit=crop" alt="Gifting Collection" class="w-32 h-32 sm:w-40 sm:h-40 mx-auto rounded-full object-cover">
                    </div>
                    <h3 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-[#654321] mb-3 sm:mb-4">FOR EVERY CELEBRATION</h3>
                    <p class="text-sm sm:text-base text-gray-600 mb-6 sm:mb-8">Perfect gifts for your loved ones</p>
                    <a href="{{ route('gifting') }}" class="inline-block px-6 sm:px-8 py-2.5 sm:py-3 bg-[#8B4513] text-white hover:bg-[#654321] transition-all duration-300 rounded-full font-semibold text-sm sm:text-base">
                        Shop Gifts
                    </a>
                </div>
                
                <!-- Right: The Gifting Concierge -->
                <div class="bg-red-50 p-8 sm:p-12 lg:p-16 rounded-lg text-center">
                    <div class="mb-6 sm:mb-8">
                        <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-auto">
                            <circle cx="60" cy="60" r="50" fill="#654321" opacity="0.2"/>
                            <path d="M60 30 L70 50 L90 50 L75 65 L80 85 L60 75 L40 85 L45 65 L30 50 L50 50 Z" fill="#654321"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-[#654321] mb-3 sm:mb-4">THE GIFTING CONCIERGE</h3>
                    <p class="text-lg sm:text-xl font-semibold text-[#654321] mb-3 sm:mb-4">LAST MINUTE INVITES?</p>
                    <p class="text-sm sm:text-base text-gray-600 mb-6 sm:mb-8">We've got you covered with express delivery</p>
                    <a href="{{ route('contact') }}" class="inline-block px-6 sm:px-8 py-2.5 sm:py-3 bg-[#8B4513] text-white hover:bg-[#654321] transition-all duration-300 rounded-full font-semibold text-sm sm:text-base">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Focus Section -->
    <section class="brand-focus py-12 sm:py-16 lg:py-20 bg-[#F5F1EB]">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-amber-600 to-amber-700 rounded-lg p-8 sm:p-12 lg:p-16 mb-8 sm:mb-12 text-center">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-white mb-3 sm:mb-4">AURA KURTIS</h2>
                <p class="text-base sm:text-lg text-white/90 max-w-2xl mx-auto">Premium quality kurtis for the modern woman</p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 lg:gap-12">
                <!-- Left Image -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="https://images.pexels.com/photos/1464625/pexels-photo-1464625.jpeg?auto=compress&cs=tinysrgb&w=800&h=1000&fit=crop" alt="Casual Kurti Collection" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321] mt-4 mb-2">Casual Comfort</h3>
                    <p class="text-base sm:text-lg text-gray-600">Everyday elegance</p>
                </div>
                
                <!-- Right Image -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg?auto=compress&cs=tinysrgb&w=800&h=1000&fit=crop" alt="Kurti Accessories" class="w-full h-[400px] sm:h-[500px] lg:h-[600px] object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321] mt-4 mb-2">Complete Look</h3>
                    <p class="text-base sm:text-lg text-gray-600">Style accessories</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section for Women Kurtis -->
    <x-video-section 
        :videoUrl="asset('videos/khurti_video.mp4')"
        :showOverlay="false"
        :showContent="true"
        contentText="Premium quality kurtis designed for the modern woman. Explore our collection of elegant, comfortable, and stylish kurtis."
    />

    <!-- Dog Video Section - Full Width -->
    <x-video-section 
        :useDogVideo="true"
        :showOverlay="false"
        :showContent="false"
    />

    <!-- Newsletter Signup -->
    <x-newsletter-signup />
@endsection

<style>
.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
</style>
