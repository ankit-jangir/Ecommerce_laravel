@extends('layouts.app')

@section('title', 'Shop by Category - AURA')

@section('content')

<!-- ================= HERO ================= -->
<section class="relative h-[300px] sm:h-[400px] lg:h-[500px] overflow-hidden">
    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=1920"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative container mx-auto px-4 sm:px-6 h-full flex items-center justify-center text-center">
        <div class="text-white max-w-3xl">
            <span class="inline-block mb-4 px-4 sm:px-5 py-1.5 sm:py-2 text-xs sm:text-sm tracking-widest bg-white/20 rounded-full">
                AURA FASHION HOUSE
            </span>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4">
                Explore Our Categories
            </h1>
            <p class="mt-4 text-sm sm:text-base text-gray-200 max-w-2xl mx-auto">
                Curated styles for men, women & every generation — from everyday wear to festive elegance.
            </p>
        </div>
    </div>
</section>

<!-- ================= CATEGORIES ================= -->
<section class="py-12 sm:py-16 lg:py-20 bg-[#faf9f7]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-black mb-3">Shop by Category</h2>
            <p class="text-gray-600 text-sm sm:text-base">Discover our wide range of fashion collections</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8 lg:gap-12">
            <!-- WOMEN -->
            <a href="{{ route('categories.gen-z') }}"
                class="group relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 block">
                <div class="relative w-full h-[300px] sm:h-[400px] lg:h-[520px] overflow-hidden">
                <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=800&h=900&fit=crop"
                        class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/30 group-hover:from-black/80 transition"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-6 sm:p-8 text-white">
                    <h3 class="text-2xl sm:text-3xl font-bold mb-2">Women</h3>
                    <p class="text-xs sm:text-sm mt-2 text-gray-200 mb-3">
                        Kurtis · Dresses · Ethnic · Western
                    </p>
                    <span class="mt-2 inline-block text-xs sm:text-sm tracking-widest font-semibold border-b-2 border-white pb-1 group-hover:border-[#8B4513] transition">
                        SHOP NOW →
                    </span>
                </div>
            </a>

            <!-- MEN -->
            <a href="{{ route('categories.gen-alpha') }}"
                class="group relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 block">
                <div class="relative w-full h-[300px] sm:h-[400px] lg:h-[520px] overflow-hidden">
                <img src="https://i.pinimg.com/originals/f1/b4/f3/f1b4f35c609fd65e1012fe5c1e81ba9b.jpg?w=800&h=900&fit=crop"
                        class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/30 group-hover:from-black/80 transition"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-6 sm:p-8 text-white">
                    <h3 class="text-2xl sm:text-3xl font-bold mb-2">Men</h3>
                    <p class="text-xs sm:text-sm mt-2 text-gray-200 mb-3">
                        Kurtas · Shirts · Casual · Festive
                    </p>
                    <span class="mt-2 inline-block text-xs sm:text-sm tracking-widest font-semibold border-b-2 border-white pb-1 group-hover:border-[#8B4513] transition">
                        EXPLORE →
                    </span>
                </div>
            </a>

            <!-- KIDS -->
            <a href="{{ route('categories.minimal') }}"
                class="group relative rounded-2xl sm:rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 block sm:col-span-2 lg:col-span-1">
                <div class="relative w-full h-[300px] sm:h-[400px] lg:h-[520px] overflow-hidden">
                <img src="https://images.unsplash.com/photo-1519238263530-99bdd11df2ea?w=800&h=900&fit=crop"
                        class="w-full h-full object-cover object-center group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-black/30 group-hover:from-black/80 transition"></div>
                <div class="absolute inset-0 flex flex-col justify-end p-6 sm:p-8 text-white">
                    <h3 class="text-2xl sm:text-3xl font-bold mb-2">Kids</h3>
                    <p class="text-xs sm:text-sm mt-2 text-gray-200 mb-3">
                        Gen Alpha · Comfort · Fun Styles
                    </p>
                    <span class="mt-2 inline-block text-xs sm:text-sm tracking-widest font-semibold border-b-2 border-white pb-1 group-hover:border-[#8B4513] transition">
                        DISCOVER →
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- ================= STATS SECTION ================= -->
<section class="py-12 sm:py-16 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 sm:gap-8 lg:gap-12">
            <div class="text-center">
                <div class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#8B4513] mb-2">10K+</div>
                <p class="text-xs sm:text-sm text-gray-600">Happy Customers</p>
            </div>
            <div class="text-center">
                <div class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#8B4513] mb-2">500+</div>
                <p class="text-xs sm:text-sm text-gray-600">Products</p>
            </div>
            <div class="text-center">
                <div class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#8B4513] mb-2">50+</div>
                <p class="text-xs sm:text-sm text-gray-600">Categories</p>
            </div>
            <div class="text-center">
                <div class="text-3xl sm:text-4xl lg:text-5xl font-bold text-[#8B4513] mb-2">4.8★</div>
                <p class="text-xs sm:text-sm text-gray-600">Average Rating</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= BRAND PROMISE ================= -->
<section class="py-12 sm:py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-black mb-3">Why Choose AURA?</h2>
            <p class="text-gray-600 text-sm sm:text-base max-w-2xl mx-auto">Quality, style, and comfort in every piece</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">
            <div class="text-center bg-white p-6 sm:p-8 rounded-xl shadow-md">
                <div class="w-16 h-16 sm:w-20 sm:h-20 bg-[#8B4513]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fi fi-rr-star text-2xl sm:text-3xl text-[#8B4513]"></i>
                </div>
                <h4 class="text-lg sm:text-xl font-bold text-black mb-2">Premium Fabrics</h4>
                <p class="text-sm sm:text-base text-gray-600">Comfort-first materials for all ages</p>
            </div>
            <div class="text-center bg-white p-6 sm:p-8 rounded-xl shadow-md">
                <div class="w-16 h-16 sm:w-20 sm:h-20 bg-[#8B4513]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fi fi-rr-users text-2xl sm:text-3xl text-[#8B4513]"></i>
                </div>
                <h4 class="text-lg sm:text-xl font-bold text-black mb-2">Inclusive Styles</h4>
                <p class="text-sm sm:text-base text-gray-600">Fashion for men, women & kids</p>
            </div>
            <div class="text-center bg-white p-6 sm:p-8 rounded-xl shadow-md sm:col-span-2 lg:col-span-1">
                <div class="w-16 h-16 sm:w-20 sm:h-20 bg-[#8B4513]/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fi fi-rr-shield-check text-2xl sm:text-3xl text-[#8B4513]"></i>
                </div>
                <h4 class="text-lg sm:text-xl font-bold text-black mb-2">Trusted Quality</h4>
                <p class="text-sm sm:text-base text-gray-600">Designed with care & detail</p>
            </div>
        </div>
    </div>
</section>

<!-- ================= TESTIMONIALS ================= -->
<x-testimonials />

<!-- ================= NEWSLETTER ================= -->
<div class="pb-0">
    <x-newsletter-signup />
</div>

@endsection
