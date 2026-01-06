@extends('layouts.app')

@section('title', 'Contact - AURA KURTIS')

@section('content')
    <section class="py-8 sm:py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-[#654321] mb-8 sm:mb-12 text-center">Contact Us</h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 max-w-5xl mx-auto">
                <div>
                    <h2 class="text-2xl font-serif font-bold text-[#654321] mb-6">Get in Touch</h2>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <i class="fi fi-rr-marker text-[#8B4513] text-xl mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-[#654321] mb-1">Address</h3>
                                <p class="text-gray-600">123 Fashion Street, Mumbai, India</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fi fi-rr-phone-call text-[#8B4513] text-xl mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-[#654321] mb-1">Phone</h3>
                                <p class="text-gray-600">+91 8588000150</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <i class="fi fi-rr-envelope text-[#8B4513] text-xl mt-1"></i>
                            <div>
                                <h3 class="font-semibold text-[#654321] mb-1">Email</h3>
                                <p class="text-gray-600">care@aurakurtis.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <form class="space-y-4">
                        <input type="text" placeholder="Your Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                        <input type="email" placeholder="Your Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                        <textarea placeholder="Your Message" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]"></textarea>
                        <button type="submit" class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

