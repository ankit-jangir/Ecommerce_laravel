@extends('layouts.app')

@section('title', 'About Us - AURA KURTIS')

@section('content')

    {{-- PAGE HEADER --}}
    <section class="bg-[#F5F1EB] py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-[#654321] mb-2">
                About Us
            </h1>
            <p class="text-sm text-gray-600">
                Home / <span class="text-[#654321]">About Us</span>
            </p>
        </div>
    </section>

    {{-- OUR STORY --}}
    <section class="py-14 bg-white">
        <div class="container mx-auto px-4 max-w-5xl text-center">
            <h2 class="text-2xl sm:text-3xl font-serif text-[#654321] mb-4">
                Our Story
            </h2>

            <h3 class="text-xl sm:text-2xl font-serif text-gray-900 mb-6">
                Where Tradition Meets Modern Elegance
            </h3>

            <p class="text-gray-700 leading-relaxed mb-4">
                AURA KURTIS is born from a love for Indian craftsmanship and contemporary fashion.
                We design kurtis that celebrate femininity, comfort, and timeless style.
            </p>

            <p class="text-gray-700 leading-relaxed">
                Each piece reflects thoughtful design, premium fabrics,
                and a commitment to quality that lasts beyond trends.
            </p>
        </div>
    </section>

    {{-- IMAGE + PHILOSOPHY --}}
    <section class="py-16 bg-[#F5F1EB]">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <div class="relative h-[420px] rounded-2xl overflow-hidden">
                <img src="{{ asset('images/about_women_kurti1.webp') }}"
                    class="w-full h-full object-cover object-top transition duration-700 hover:scale-105"
                    alt="Aura Kurtis Collection">
            </div>

            <div>
                <h2 class="text-2xl sm:text-3xl font-serif text-[#654321] mb-4">
                    Our Philosophy
                </h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Fashion should feel effortless. We focus on clean silhouettes,
                    breathable fabrics, and versatile designs that fit seamlessly
                    into everyday and festive wardrobes.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Every kurti is crafted to empower women with confidence,
                    comfort, and timeless elegance.
                </p>
            </div>

        </div>
    </section>

    {{-- ORIGIN --}}
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <div>
                <h2 class="text-2xl sm:text-3xl font-serif text-[#654321] mb-4">
                    Our Origin
                </h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Rooted in Jaipur — India’s textile capital — AURA KURTIS works closely
                    with skilled artisans preserving the heritage of hand-block printing.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    We blend heritage techniques with modern aesthetics
                    to create designs that are truly timeless.
                </p>
            </div>

            <div class="relative h-[420px] rounded-2xl overflow-hidden">
                <img src="{{ asset('images/about_women_kurti2.jpg') }}"
                    class="w-full h-full object-cover object-top transition duration-700 hover:scale-105"
                    alt="Jaipur Textile Craft">
            </div>

        </div>
    </section>

    {{-- VALUES / CARDS --}}
    <section class="py-16 bg-[#F5F1EB]">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl sm:text-3xl font-serif text-[#654321] text-center mb-12">
                Why Choose AURA KURTIS
            </h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition text-center">
                    <h3 class="font-semibold text-lg mb-2">Premium Fabrics</h3>
                    <p class="text-gray-600 text-sm">
                        Carefully sourced fabrics that feel soft, breathable, and luxurious.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition text-center">
                    <h3 class="font-semibold text-lg mb-2">Artisan Crafted</h3>
                    <p class="text-gray-600 text-sm">
                        Supporting traditional hand-block printing and skilled craftsmanship.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition text-center">
                    <h3 class="font-semibold text-lg mb-2">Perfect Fit</h3>
                    <p class="text-gray-600 text-sm">
                        Designed for comfort and elegance across all body types.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition text-center">
                    <h3 class="font-semibold text-lg mb-2">Timeless Style</h3>
                    <p class="text-gray-600 text-sm">
                        Designs that stay relevant beyond seasonal trends.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-16 bg-white text-center">
        <div class="container mx-auto px-4 max-w-3xl">
            <h2 class="text-2xl sm:text-3xl font-serif text-[#654321] mb-4">
                Designed for Every Woman
            </h2>
            <p class="text-gray-700 mb-8">
                Discover kurtis that combine tradition, comfort, and effortless elegance.
            </p>

            <a href="{{ route('women') }}"
                class="inline-block px-8 py-3 rounded-full bg-[#654321] text-white font-semibold
                  hover:bg-[#4b2f1d] transition">
                Explore Collection
            </a>
        </div>
    </section>

    {{-- NEWSLETTER --}}
    <x-newsletter-signup />

@endsection
