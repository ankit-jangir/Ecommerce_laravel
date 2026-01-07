@extends('layouts.app')

@section('title', 'Contact - AURA KURTIS')

@section('content')
<section class="py-12 bg-gradient-to-b from-white via-[#FFF8F0] to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <h1
            class="text-4xl sm:text-5xl lg:text-6xl font-serif font-bold text-[#654321] mb-12 text-center tracking-wide">
            Contact Us</h1>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">

            <!-- Contact Info Card -->
            <div class="bg-white shadow-lg rounded-3xl p-8 hover:shadow-2xl transition-shadow duration-300">
                <h2 class="text-3xl font-serif font-bold text-[#654321] mb-8">Get in Touch</h2>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <i class="fi fi-rr-marker text-[#8B4513] text-2xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-[#654321] mb-1">Address</h3>
                            <p class="text-gray-600">123 Fashion Street, Mumbai, India</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <i class="fi fi-rr-phone-call text-[#8B4513] text-2xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-[#654321] mb-1">Phone</h3>
                            <p class="text-gray-600">+91 8588000150</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <i class="fi fi-rr-envelope text-[#8B4513] text-2xl mt-1"></i>
                        <div>
                            <h3 class="font-semibold text-[#654321] mb-1">Email</h3>
                            <p class="text-gray-600">care@aurakurtis.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form Card -->
            <div class="bg-white shadow-lg rounded-3xl p-8 hover:shadow-2xl transition-shadow duration-300">
                <h2 class="text-3xl font-serif font-bold text-[#654321] mb-8 text-center">Send Us a Message</h2>
                <form class="space-y-6">
                    <input type="text" placeholder="Your Name"
                        class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] shadow-sm">
                    <input type="email" placeholder="Your Email"
                        class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] shadow-sm">
                    <textarea placeholder="Your Message" rows="6"
                        class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] shadow-sm"></textarea>
                    <button type="submit"
                        class="w-full bg-[#8B4513] text-white py-4 rounded-xl font-semibold text-lg hover:bg-[#654321] transition-all shadow-md">Send
                        Message</button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection