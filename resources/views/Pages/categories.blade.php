@extends('layouts.app')

@section('title', 'Shop by Category - AURA')

@section('content')

<!-- ================= HERO ================= -->
<section class="relative h-[420px] overflow-hidden">
    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?q=80&w=1920"
        class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/70"></div>

    <div class="relative container mx-auto px-6 h-full flex items-center justify-center text-center">
        <div class="text-white max-w-2xl">
            <span class="inline-block mb-4 px-5 py-1 text-xs tracking-widest bg-white/20 rounded-full">
                AURA FASHION HOUSE
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold">
                Explore Our Categories
            </h1>
            <p class="mt-4 text-gray-200">
                Curated styles for men, women & every generation — from everyday wear to festive elegance.
            </p>
        </div>
    </div>
</section>

<!-- ================= CATEGORIES ================= -->
<section class="py-20 bg-[#faf9f7]">
    <div class="container mx-auto px-6">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

            <!-- WOMEN -->
            <a href="{{ route('categories.gen-z') }}"
                class="group relative rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition">

                <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=800&h=900&fit=crop"
                    class="w-full h-[520px] object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

                <div class="absolute inset-0 flex flex-col justify-end p-8 text-white">
                    <h3 class="text-3xl font-serif font-bold">Women</h3>
                    <p class="text-sm mt-2 text-gray-200">
                        Kurtis · Dresses · Ethnic · Western
                    </p>
                    <span class="mt-4 inline-block text-xs tracking-widest underline">
                        SHOP NOW
                    </span>
                </div>
            </a>

            <!-- MEN -->
            <a href="{{ route('categories.gen-alpha') }}"
                class="group relative rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition">

                <img src="https://i.pinimg.com/originals/f1/b4/f3/f1b4f35c609fd65e1012fe5c1e81ba9b.jpg?w=800&h=900&fit=crop"
                    class="w-full h-[520px] object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

                <div class="absolute inset-0 flex flex-col justify-end p-8 text-white">
                    <h3 class="text-3xl font-serif font-bold">Men</h3>
                    <p class="text-sm mt-2 text-gray-200">
                        Kurtas · Shirts · Casual · Festive
                    </p>
                    <span class="mt-4 inline-block text-xs tracking-widest underline">
                        EXPLORE
                    </span>
                </div>
            </a>

            <!-- KIDS / GEN ALPHA -->
            <a href="{{ route('categories.minimal') }}"
                class="group relative rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition">

                <img src="https://images.unsplash.com/photo-1519238263530-99bdd11df2ea?w=800&h=900&fit=crop"
                    class="w-full h-[520px] object-cover group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 transition"></div>

                <div class="absolute inset-0 flex flex-col justify-end p-8 text-white">
                    <h3 class="text-3xl font-serif font-bold">Kids</h3>
                    <p class="text-sm mt-2 text-gray-200">
                        Gen Alpha · Comfort · Fun Styles
                    </p>
                    <span class="mt-4 inline-block text-xs tracking-widest underline">
                        DISCOVER
                    </span>
                </div>
            </a>

        </div>

    </div>
</section>

<!-- ================= BRAND PROMISE ================= -->
<section class="py-16 bg-white border-t">
    <div class="container mx-auto px-6 grid grid-cols-1 sm:grid-cols-3 gap-10 text-center">

        <div>
            <h4 class="font-serif font-semibold mb-2">Premium Fabrics</h4>
            <p class="text-sm text-gray-600">Comfort-first materials for all ages</p>
        </div>

        <div>
            <h4 class="font-serif font-semibold mb-2">Inclusive Styles</h4>
            <p class="text-sm text-gray-600">Fashion for men, women & kids</p>
        </div>

        <div>
            <h4 class="font-serif font-semibold mb-2">Trusted Quality</h4>
            <p class="text-sm text-gray-600">Designed with care & detail</p>
        </div>

    </div>
</section>

@endsection