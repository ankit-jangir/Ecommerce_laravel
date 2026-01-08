@extends('layouts.app')

@section('title', 'Blog Detail - AURA KURTIS')

@section('content')

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">

        <h1 class="text-3xl sm:text-4xl font-serif text-[#654321] mb-6">
            {{ ucwords(str_replace('-', ' ', $slug)) }}
        </h1>

        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1200"
             class="w-full h-[420px] object-cover rounded-2xl mb-8">

        <p class="text-gray-700 leading-relaxed text-lg">
            This is the detailed blog page for <strong>{{ $slug }}</strong>.
            You can later connect this with database content.
        </p>

    </div>
</section>

<x-newsletter-signup />

@endsection
