@extends('layouts.app')

@section('title', 'Women Kurti - AURA KURTIS')

@section('content')
    <!-- Page Header -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            <nav class="text-sm text-gray-600 mb-4">
                <a href="{{ route('home') }}" class="hover:text-gray-900">Home</a> / 
                <a href="{{ route('women') }}" class="hover:text-gray-900">Women</a> / 
                <span class="text-gray-900">Kurtis</span>
            </nav>
            <h1 class="text-4xl font-light text-gray-900">WOMEN KURTIS</h1>
            <p class="text-gray-600 mt-2">Modern and elegant kurti collection</p>
        </div>
    </section>
    
    <!-- Filter and Sort Bar -->
    <section class="bg-white border-b border-gray-200 py-4">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-4 flex-wrap">
                    <button class="text-sm text-gray-700 hover:text-gray-900 border-b-2 border-gray-900">All</button>
                    <button class="text-sm text-gray-700 hover:text-gray-900">Anarkali</button>
                    <button class="text-sm text-gray-700 hover:text-gray-900">A-Line</button>
                    <button class="text-sm text-gray-700 hover:text-gray-900">Straight</button>
                    <button class="text-sm text-gray-700 hover:text-gray-900">Printed</button>
                    <button class="text-sm text-gray-700 hover:text-gray-900">Embroidered</button>
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
                @for($i = 1; $i <= 16; $i++)
                <div class="product-card group cursor-pointer">
                    <div class="relative overflow-hidden mb-4">
                        <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop&sig={{ $i }}" alt="Modern Kurti {{ $i }}" class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-opacity duration-300"></div>
                        <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex gap-2">
                            <button class="bg-white p-2 rounded-full shadow-lg hover:bg-gray-100">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                            <button class="bg-white p-2 rounded-full shadow-lg hover:bg-gray-100">
                                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </button>
                        </div>
                        @if($i % 4 == 0)
                        <div class="absolute top-4 left-4 bg-yellow-400 px-3 py-1 rounded text-sm font-semibold text-gray-900">
                            50% OFF
                        </div>
                        @elseif($i % 3 == 0)
                        <div class="absolute top-4 left-4 bg-yellow-400 px-3 py-1 rounded text-sm font-semibold text-gray-900">
                            20% OFF
                        </div>
                        @endif
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Modern Kurti {{ $i }}</h3>
                    <p class="text-gray-600 mb-2 text-sm">Elegant and comfortable design</p>
                    <div class="flex items-center gap-2">
                        <p class="text-gray-900 font-semibold">₹{{ 1999 + ($i * 100) }}</p>
                        @if($i % 4 == 0 || $i % 3 == 0)
                        <span class="text-sm text-red-600 line-through">₹{{ 2999 + ($i * 100) }}</span>
                        @endif
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>
    
    <!-- Load More -->
    <section class="py-8 bg-white">
        <div class="container mx-auto px-4 text-center">
            <button class="px-8 py-3 border-2 border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white transition-colors duration-300">
                Load More
            </button>
        </div>
    </section>
@endsection

