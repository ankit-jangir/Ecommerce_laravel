@extends('layouts.app')

@section('title', 'Contact - AURA KURTIS')

@section('content')
<section class="py-14 bg-[#FFF8F0]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <h1 class="text-4xl sm:text-5xl font-serif font-bold text-[#654321] mb-12 text-center">
            Contact Us
        </h1>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 max-w-6xl mx-auto">

            <!-- LEFT : INFO + MAP -->
            <div class="space-y-8">

                <!-- Contact Info -->
                <div class="bg-white rounded-2xl shadow p-8">
                    <h2 class="text-2xl font-serif font-bold text-[#654321] mb-6">
                        Get in Touch
                    </h2>

                    <div class="space-y-5 text-sm">
                        <div class="flex gap-4">
                            <i class="fi fi-rr-marker text-[#8B4513] text-xl mt-1"></i>
                            <p class="text-gray-600">
                                123 Fashion Street,<br> Mumbai, India
                            </p>
                        </div>

                        <div class="flex gap-4">
                            <i class="fi fi-rr-phone-call text-[#8B4513] text-xl mt-1"></i>
                            <p class="text-gray-600">+91 8588000150</p>
                        </div>

                        <div class="flex gap-4">
                            <i class="fi fi-rr-envelope text-[#8B4513] text-xl mt-1"></i>
                            <p class="text-gray-600">care@aurakurtis.com</p>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="bg-white rounded-2xl shadow overflow-hidden">
                    <iframe src="https://www.google.com/maps?q=Mumbai%20India&output=embed" class="w-full h-64 border-0"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>

            <!-- RIGHT : FORM -->
            <div class="bg-white rounded-2xl shadow p-8">
                <h2 class="text-2xl font-serif font-bold text-[#654321] mb-6 text-center">
                    Send Us a Message
                </h2>

                <form class="space-y-5">
                    <input type="text" placeholder="Your Name"
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-[#8B4513] outline-none">

                    <input type="email" placeholder="Your Email"
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-[#8B4513] outline-none">

                    <textarea rows="5" placeholder="Your Message"
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-[#8B4513] outline-none"></textarea>

                    <button type="submit"
                        class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-medium hover:bg-[#654321] transition">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection