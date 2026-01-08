@extends('layouts.app')

@section('title', 'Wishlist - AURA KURTIS')

@section('content')
    <section class="py-6 sm:py-8 bg-white min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-4 sm:mb-6">
                <nav class="text-sm text-gray-500 mb-2">
                    <a href="{{ route('home') }}" class="hover:text-[#8B4513]">Home</a> / <span class="text-[#654321]">Wishlist</span>
                </nav>
                <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321]">Wishlist</h1>
            </div>
            <div id="wishlist-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-6">
                <!-- Wishlist items will be populated here -->
            </div>
        </div>
    </section>
    <script src="{{ asset('js/wishlist.js') }}"></script>
@endsection
