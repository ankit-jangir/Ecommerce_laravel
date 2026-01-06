@extends('layouts.app')

@section('title', 'Blogs - AURA KURTIS')

@section('content')
    <section class="py-8 sm:py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-[#654321] mb-6 sm:mb-8">Fashion Blog</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                @for($i = 1; $i <= 9; $i++)
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600&h=400&fit=crop&sig={{ $i }}" alt="Blog {{ $i }}" class="w-full h-48 sm:h-64 object-cover">
                    <div class="p-4 sm:p-6">
                        <h3 class="text-lg sm:text-xl font-serif font-bold text-[#654321] mb-2">Fashion Tips {{ $i }}</h3>
                        <p class="text-sm sm:text-base text-gray-600 mb-4">Discover the latest fashion trends and styling tips for your wardrobe.</p>
                        <a href="#" class="text-[#8B4513] font-semibold hover:underline">Read More →</a>
                    </div>
                </article>
                @endfor
            </div>
        </div>
    </section>
@endsection

