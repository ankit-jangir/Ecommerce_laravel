@extends('layouts.app')

@section('title', 'Shop - AURA KURTIS')

@section('content')
    <section class="py-8 sm:py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-[#654321] mb-6 sm:mb-8">Shop All Products</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                @for($i = 1; $i <= 20; $i++)
                <div class="product-card group cursor-pointer">
                    <div class="relative overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop&sig={{ $i }}" alt="Product {{ $i }}" class="w-full h-64 sm:h-80 object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <h3 class="text-base sm:text-lg font-medium text-[#654321] mb-2">Product {{ $i }}</h3>
                    <p class="text-sm text-gray-600 mb-2">Premium quality</p>
                    <p class="text-base sm:text-lg text-[#8B4513] font-semibold">₹{{ 1499 + ($i * 100) }}</p>
                </div>
                @endfor
            </div>
        </div>
    </section>
@endsection

