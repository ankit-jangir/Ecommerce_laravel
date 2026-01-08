@extends('layouts.app')

@section('title', 'Search - AURA KURTIS')

@section('content')
    <section class="py-8 sm:py-12 bg-white">
        <div  class="fi items-center justify-center p-4">
            <div class="bg-white rounded-xl shadow-2xl w-full max-w-md transform transition-all relative">
                <button id="user-close"
                    class="absolute top-4 right-4 text-gray-400 hover:text-[#8B4513] transition-colors z-10">
                    <i class="fi fi-rr-cross text-xl"></i>
                </button>
                <div class="p-8">
                    <div class="text-center mb-6">
                        <div class="w-20 h-20 bg-[#8B4513] rounded-full mx-auto mb-4 flex items-center justify-center">
                            <i class="fi fi-rr-user text-3xl text-white"></i>
                        </div>
                        <h3 class="text-2xl font-serif font-bold text-[#654321] mb-2">Welcome Back!</h3>
                        <p class="text-gray-600">Sign in to your account</p>
                    </div>
                    <form class="space-y-4">
                        <input type="email" placeholder="Email"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                        <input type="password" placeholder="Password"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                        <button type="submit"
                            class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all">Sign
                            In</button>
                        <p class="text-sm text-gray-600 text-center">Don't have an account? <a href="#"
                                class="text-[#8B4513] font-semibold hover:underline">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
