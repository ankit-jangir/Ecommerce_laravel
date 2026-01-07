@extends('layouts.app')

@section('title', 'Blogs - AURA KURTIS')

@section('content')

<section class="bg-[#FFF8F0] py-14">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="text-center mb-14">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold text-[#5A3A1A]">
                Aura Fashion Journal
            </h1>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                Curated fashion stories, styling guides & trends inspired by Indian elegance.
            </p>
        </div>

        <!-- Sticky Filters -->
        <div class="sticky top-20 z-30 bg-[#FFF8F0] py-4 mb-14">
            <div class="flex flex-wrap justify-center gap-3">
                <button class="px-5 py-2 rounded-full bg-[#8B4513] text-white text-sm font-semibold shadow">
                    All
                </button>
                <button
                    class="px-5 py-2 rounded-full bg-white text-[#8B4513] border border-[#8B4513] text-sm font-semibold hover:bg-[#8B4513] hover:text-white transition">
                    Fashion Tips
                </button>
                <button
                    class="px-5 py-2 rounded-full bg-white text-[#8B4513] border border-[#8B4513] text-sm font-semibold hover:bg-[#8B4513] hover:text-white transition">
                    Styling Guides
                </button>
                <button
                    class="px-5 py-2 rounded-full bg-white text-[#8B4513] border border-[#8B4513] text-sm font-semibold hover:bg-[#8B4513] hover:text-white transition">
                    Trends
                </button>
                <button
                    class="px-5 py-2 rounded-full bg-white text-[#8B4513] border border-[#8B4513] text-sm font-semibold hover:bg-[#8B4513] hover:text-white transition">
                    Festive Wear
                </button>
            </div>
        </div>

        <!-- Featured Blog -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-20">
            <div class="relative rounded-3xl overflow-hidden group shadow-lg">
                <img src="https://images.unsplash.com/photo-1503341455253-b2e723bb3dbb?w=1200"
                    class="w-full h-[420px] object-cover transform group-hover:scale-110 transition duration-700">

                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

                <div class="absolute bottom-6 left-6 right-6 text-white">
                    <span class="bg-[#8B4513] px-4 py-1 text-xs rounded-full uppercase tracking-wider">
                        Featured
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-serif font-bold mt-4">
                        How to Style Kurtis for Festive Evenings
                    </h2>
                    <p class="text-sm mt-3 opacity-90">
                        Discover elegant styling tips that elevate your festive look effortlessly.
                    </p>
                    <a href="#" class="inline-block mt-5 text-sm font-semibold underline underline-offset-4">
                        Read Full Story →
                    </a>
                </div>
            </div>

            <!-- Featured Side Blogs -->
            <div class="space-y-8">
                @for($i=1;$i<=2;$i++) <article class="flex gap-5 bg-white rounded-2xl shadow-md overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=500&sig={{$i}}"
                        class="w-40 h-40 object-cover transform group-hover:scale-110 transition duration-500">

                    <div class="p-4">
                        <span class="text-xs text-[#8B4513] uppercase font-semibold">Trending</span>
                        <h3 class="font-serif font-bold text-lg text-[#5A3A1A] mt-1">
                            Latest Kurti Trends {{ $i }}
                        </h3>
                        <p class="text-sm text-gray-600 mt-2 line-clamp-2">
                            Explore what's trending this season in ethnic fashion.
                        </p>
                        <a href="#" class="text-sm font-semibold text-[#8B4513] mt-3 inline-block">
                            Read More →
                        </a>
                    </div>
                    </article>
                    @endfor
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @for($i=1;$i<=9;$i++) <article
                class="bg-white rounded-3xl shadow-md overflow-hidden group hover:shadow-xl transition">
                <div class="relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=600&sig={{$i}}"
                        class="w-full h-60 object-cover transform group-hover:scale-110 transition duration-700">

                    <span
                        class="absolute top-4 left-4 bg-white/90 px-3 py-1 rounded-full text-xs font-semibold text-[#8B4513]">
                        Styling
                    </span>
                </div>

                <div class="p-6 space-y-3">
                    <div class="flex items-center text-xs text-gray-500 gap-4">
                        <span>🗓 12 Jan 2026</span>
                        <span>⏱ 5 min read</span>
                    </div>

                    <h3 class="text-xl font-serif font-bold text-[#5A3A1A]">
                        Everyday Kurti Styling {{ $i }}
                    </h3>

                    <p class="text-sm text-gray-600 line-clamp-3">
                        Simple yet elegant ways to style kurtis for daily wear & office looks.
                    </p>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2 mt-4">
                        <span class="px-3 py-1 bg-[#FFF1E6] text-xs rounded-full text-[#8B4513]">Kurti</span>
                        <span class="px-3 py-1 bg-[#FFF1E6] text-xs rounded-full text-[#8B4513]">Office Wear</span>
                        <span class="px-3 py-1 bg-[#FFF1E6] text-xs rounded-full text-[#8B4513]">Fashion</span>
                    </div>

                    <a href="#" class="inline-block mt-4 font-semibold text-[#8B4513]">
                        Read More →
                    </a>
                </div>
                </article>
                @endfor
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-16 gap-2">
            <button class="px-4 py-2 rounded-md bg-[#8B4513] text-white font-semibold">1</button>
            <button class="px-4 py-2 rounded-md bg-white border border-[#8B4513] text-[#8B4513]">2</button>
            <button class="px-4 py-2 rounded-md bg-white border border-[#8B4513] text-[#8B4513]">3</button>
            <button class="px-4 py-2 rounded-md bg-white border border-[#8B4513] text-[#8B4513]">
                Next →
            </button>
        </div>

    </div>
</section>

@endsection