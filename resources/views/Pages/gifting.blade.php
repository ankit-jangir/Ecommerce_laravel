@extends('layouts.app')

@section('title', 'Gifting - AURA KURTIS')

@section('content')
    <!-- Hero Banner -->
    <section class="relative h-64 sm:h-80 lg:h-96 flex items-center justify-center overflow-hidden bg-gradient-to-r from-[#F5F1EB] to-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-serif font-bold text-[#654321] mb-3 sm:mb-4">THE GIFTING CONCIERGE</h1>
            <p class="text-lg sm:text-xl md:text-2xl text-[#8B4513] font-medium">NOW DELIVERS PAN-INDIA</p>
        </div>
    </section>
    
    <!-- Page Header -->
    <section class="bg-white py-8 sm:py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-[#654321]">GIFTING</h2>
            <p class="text-gray-600 mt-2 text-sm sm:text-base">Perfect gifts for every occasion</p>
        </div>
    </section>
    
    <!-- Categories -->
    <section class="py-8 sm:py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 mb-8 sm:mb-12">
                <div class="category-card group cursor-pointer">
                    <div class="relative overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=600&h=400&fit=crop" alt="Kitchen & Dining" class="w-full h-48 sm:h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321]">Kitchen & Dining</h3>
                </div>
                <div class="category-card group cursor-pointer">
                    <div class="relative overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=600&h=400&fit=crop" alt="Serveware" class="w-full h-48 sm:h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321]">Serveware</h3>
                </div>
                <div class="category-card group cursor-pointer">
                    <div class="relative overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1556911220-bff31c812dba?w=600&h=400&fit=crop" alt="Drinkware" class="w-full h-48 sm:h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <h3 class="text-lg sm:text-xl font-medium text-[#654321]">Drinkware</h3>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Products Grid -->
    <section class="py-8 sm:py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-center mb-8 sm:mb-12 text-[#654321]">Featured Gifts</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                @for($i = 1; $i <= 12; $i++)
                <div class="product-card group cursor-pointer">
                    <div class="relative overflow-hidden mb-3 sm:mb-4">
                        <img src="https://images.unsplash.com/photo-1558769132-cb1aea458c5e?w=500&h=600&fit=crop&sig={{ $i }}" alt="Gift {{ $i }}" class="w-full h-64 sm:h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-base sm:text-lg font-medium text-[#654321] mb-1 sm:mb-2">Gift Item {{ $i }}</h3>
                    <p class="text-sm sm:text-base text-gray-600 mb-1 sm:mb-2">Perfect for special occasions</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹{{ 3999 + ($i * 100) }}</p>
                </div>
                @endfor
            </div>
        </div>
    </section>
@endsection

