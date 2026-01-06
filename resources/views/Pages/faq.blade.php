@extends('layouts.app')

@section('title', 'FAQ - AURA KURTIS')

@section('content')
    <section class="py-8 sm:py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-[#654321] mb-6 sm:mb-8 text-center">Frequently Asked Questions</h1>
            <div class="space-y-4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-[#654321] mb-2">What is your shipping policy?</h3>
                    <p class="text-gray-700">We offer free shipping on orders above ₹2000. Standard delivery takes 5-7 business days.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-[#654321] mb-2">How do I track my order?</h3>
                    <p class="text-gray-700">You will receive a tracking number via email once your order ships. Use it to track your package.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-[#654321] mb-2">What payment methods do you accept?</h3>
                    <p class="text-gray-700">We accept all major credit cards, debit cards, UPI, and cash on delivery.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

