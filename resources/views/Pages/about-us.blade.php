@extends('layouts.app')

@section('title', 'About Us - AURA KURTIS')

@section('content')

<!-- PAGE HEADER -->
<section class="bg-[#F5F1EB] py-10 sm:py-14">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-[#654321] mb-2">
            About Us
        </h1>
        <p class="text-sm text-gray-600">
            Home / <span class="text-[#654321]">About Us</span>
        </p>
    </div>
</section>

<!-- OUR STORY -->
<section class="py-12 sm:py-16 bg-white">
    <div class="container mx-auto px-4 max-w-5xl">
        <h2 class="text-2xl sm:text-3xl font-serif text-[#654321] mb-4">
            Our Story
        </h2>

        <h3 class="text-xl sm:text-2xl font-serif text-gray-900 mb-4">
            Traditional as well as Youth Oriented Trendy Designs
        </h3>

        <p class="text-gray-700 leading-relaxed mb-6">
            AURA KURTIS brings together timeless Indian craftsmanship and modern fashion.
            Our collections reflect a blend of tradition, comfort, and contemporary
            silhouettes designed for today’s confident women.
        </p>

        <p class="text-gray-700 leading-relaxed">
            Each design is thoughtfully curated to celebrate individuality while staying
            rooted in India’s rich textile heritage.
        </p>
    </div>
</section>

<!-- PHILOSOPHY -->
<section class="py-12 sm:py-16 bg-[#F5F1EB]">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- IMAGE -->
            <div class="relative h-[420px] overflow-hidden rounded-xl bg-[#EDE7DF]">
                <img src="{{ asset('images/about_women_kurti1.webp') }}"
                     alt="Women Kurti Collection"
                     class="w-full h-full object-cover object-top
                            transition-transform duration-700 hover:scale-105">
            </div>

            <!-- CONTENT -->
            <div>
                <h2 class="text-2xl sm:text-3xl font-serif text-[#654321] mb-4">
                    Philosophy
                </h2>

                <p class="text-gray-700 leading-relaxed mb-4">
                    We believe fashion should feel as good as it looks.
                    Our philosophy is rooted in quality craftsmanship,
                    elegant design, and effortless comfort.
                </p>

                <p class="text-gray-700 leading-relaxed">
                    Every kurti is created with attention to detail,
                    ensuring durability, style, and a perfect fit
                    for everyday and festive wear alike.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ORIGIN -->
<section class="py-12 sm:py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            <!-- CONTENT -->
            <div>
                <h2 class="text-2xl sm:text-3xl font-serif text-[#654321] mb-4">
                    Origin
                </h2>

                <p class="text-gray-700 leading-relaxed mb-4">
                    AURA KURTIS originated from Jaipur — the heart of India’s textile heritage.
                    We work closely with skilled artisans specializing in hand-block printing,
                    a craft celebrated worldwide for its intricate patterns and superior quality.
                </p>

                <p class="text-gray-700 leading-relaxed">
                    By blending heritage techniques with modern design,
                    we create garments that honor tradition while embracing innovation.
                </p>
            </div>

            <!-- IMAGE -->
            <div class="relative h-[420px] overflow-hidden rounded-xl bg-[#EDE7DF]">
                <img src="{{ asset('images/about_women_kurti2.jpg') }}"
                     alt="Jaipur Handcrafted Kurti"
                     class="w-full h-full object-cover object-top
                            transition-transform duration-700 hover:scale-105">
            </div>

        </div>
    </div>
</section>

<!-- CONTACT / BRAND TRUST -->
<section class="py-12 sm:py-16 bg-[#F5F1EB]">
    <div class="container mx-auto px-4 text-center max-w-3xl">

        <h2 class="text-2xl sm:text-3xl font-serif text-[#654321] mb-4">
            Get in Touch
        </h2>

        <p class="text-gray-700 leading-relaxed mb-6">
            Have questions about our collections or need help choosing the perfect kurti?
            Our team is always happy to assist you.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('contact') }}"
               class="px-6 py-3 rounded-full bg-[#654321] text-white
                      hover:bg-[#4b2f1d] transition font-semibold">
                Contact Us
            </a>

            <a href="{{ route('women') }}"
               class="px-6 py-3 rounded-full bg-white border border-[#654321]
                      text-[#654321] hover:bg-[#654321] hover:text-white
                      transition font-semibold">
                Shop Collection
            </a>
        </div>
    </div>
</section>

<!-- NEWSLETTER -->
<x-newsletter-signup />

@endsection
