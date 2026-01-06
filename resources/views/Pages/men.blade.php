@extends('layouts.app')

@section('title', 'Men - AURA KURTIS')

@section('content')
    <!-- Page Header -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-light text-gray-900">MEN</h1>
            <p class="text-gray-600 mt-2">Discover our stylish collection</p>
        </div>
    </section>
    
    <!-- Filter and Sort Bar -->
    <section class="bg-white border-b border-gray-200 py-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-4">
                    <button class="text-sm text-gray-700 hover:text-gray-900">All</button>
                    <button class="text-sm text-gray-700 hover:text-gray-900">Shirts</button>
                    <button class="text-sm text-gray-700 hover:text-gray-900">T-Shirts</button>
                    <button class="text-sm text-gray-700 hover:text-gray-900">Pants</button>
                </div>
                <select class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-900">
                    <option>Sort by: Featured</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Newest First</option>
                </select>
            </div>
        </div>
    </section>
    
    <!-- Products Grid -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @for($i = 1; $i <= 12; $i++)
                <div class="product-card group cursor-pointer">
                    <div class="relative overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1617137968427-85924c800a22?w=500&h=600&fit=crop&sig={{ $i }}" alt="Men's Product {{ $i }}" class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-opacity duration-300"></div>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Men's Product {{ $i }}</h3>
                    <p class="text-gray-600 mb-2">Stylish and comfortable</p>
                    <p class="text-gray-900 font-semibold">₹{{ 2499 + ($i * 100) }}</p>
                </div>
                @endfor
            </div>
        </div>
    </section>
@endsection

