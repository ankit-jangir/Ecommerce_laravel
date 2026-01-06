@extends('layouts.app')

@section('title', 'Home - AURA KURTIS')

@section('content')
    <!-- Hero Section -->
    <x-hero-section />
    
    <!-- Featured Products Section -->
    <section class="py-8 sm:py-12 lg:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-center mb-8 sm:mb-12 text-[#654321]">Featured Collections</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Product Card 1 -->
                <div class="product-card group cursor-pointer">
                    <div class="relative overflow-hidden mb-3 sm:mb-4">
                        <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop" alt="Modern Kurti" class="w-full h-64 sm:h-80 lg:h-96 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-base sm:text-lg font-medium text-[#654321] mb-1 sm:mb-2">Modern Kurti Collection</h3>
                    <p class="text-sm sm:text-base text-gray-600 mb-1 sm:mb-2">Elegant and comfortable</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹1,999</p>
                </div>
                
                <!-- Product Card 2 -->
                <div class="product-card group cursor-pointer">
                    <div class="relative overflow-hidden mb-3 sm:mb-4">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop" alt="Women's Wear" class="w-full h-64 sm:h-80 lg:h-96 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-base sm:text-lg font-medium text-[#654321] mb-1 sm:mb-2">Women's Collection</h3>
                    <p class="text-sm sm:text-base text-gray-600 mb-1 sm:mb-2">Stylish and trendy</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹2,499</p>
                </div>
                
                <!-- Product Card 3 -->
                <div class="product-card group cursor-pointer sm:col-span-2 lg:col-span-1">
                    <div class="relative overflow-hidden mb-3 sm:mb-4">
                        <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?w=500&h=600&fit=crop" alt="Gifting" class="w-full h-64 sm:h-80 lg:h-96 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-base sm:text-lg font-medium text-[#654321] mb-1 sm:mb-2">Gifting Collection</h3>
                    <p class="text-sm sm:text-base text-gray-600 mb-1 sm:mb-2">Perfect for special occasions</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹3,999</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Banner Section -->
    <section class="py-8 sm:py-12 lg:py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif mb-3 sm:mb-4 text-[#654321]">THE WINTER EDIT</h2>
            <p class="text-base sm:text-lg text-gray-600 mb-6 sm:mb-8">Express Delivery Available</p>
            <a href="{{ route('women') }}" class="inline-block px-8 sm:px-10 py-3 sm:py-4 text-sm sm:text-base bg-[#8B4513] text-white hover:bg-[#654321] transition-colors duration-300 rounded-full font-semibold">
                Shop Now
            </a>
        </div>
    </section>
@endsection

