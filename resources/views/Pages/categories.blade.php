@extends('layouts.app')

@section('title', 'Categories - AURA KURTIS')

@section('content')
    <section class="py-8 sm:py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-[#654321] mb-8 sm:mb-12 text-center">Browse Categories</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-12">
                <!-- Gen Alpha -->
                <a href="{{ route('categories.gen-alpha') }}" class="category-card group cursor-pointer text-center">
                    <div class="w-full h-64 sm:h-80 lg:h-96 bg-gradient-to-br from-orange-200 to-orange-300 rounded-full mb-6 overflow-hidden mx-auto max-w-xs">
                        <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=400&h=400&fit=crop" alt="Gen Alpha" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] group-hover:text-[#8B4513] transition-colors">Gen Alpha</h3>
                </a>
                
                <!-- Gen Z -->
                <a href="{{ route('categories.gen-z') }}" class="category-card group cursor-pointer text-center">
                    <div class="w-full h-64 sm:h-80 lg:h-96 bg-gradient-to-br from-purple-200 to-pink-300 rounded-full mb-6 overflow-hidden mx-auto max-w-xs">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=400&h=400&fit=crop" alt="Gen Z" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] group-hover:text-[#8B4513] transition-colors">Gen Z</h3>
                </a>
                
                <!-- Minimal -->
                <a href="{{ route('categories.minimal') }}" class="category-card group cursor-pointer text-center sm:col-span-2 lg:col-span-1">
                    <div class="w-full h-64 sm:h-80 lg:h-96 bg-gradient-to-br from-pink-200 to-peach-300 rounded-full mb-6 overflow-hidden mx-auto max-w-xs">
                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=400&h=400&fit=crop" alt="Minimal" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] group-hover:text-[#8B4513] transition-colors">Minimal</h3>
                </a>
            </div>
        </div>
    </section>
@endsection

