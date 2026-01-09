@extends('layouts.auth')

@section('title', 'Login - AURA KURTIS')

@section('content')
    <section class="py-12 sm:py-16 bg-[#F5F1EB] min-h-screen flex items-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-2xl p-8">
                <div class="text-center mb-6">
                    <div class="w-20 h-20 bg-[#8B4513] rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fi fi-rr-user text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-[#654321] mb-2">Welcome Back!</h3>
                    <p class="text-gray-600">Sign in to your account</p>
                </div>
                
                <form id="login-form" class="space-y-4">
                    @csrf
                    <div>
                        <input type="email" id="login-email" name="email" placeholder="Email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                    </div>
                    <div class="relative">
                        <input type="password" id="login-password" name="password" placeholder="Password" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] pr-12">
                        <button type="button" id="toggle-login-password" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-[#8B4513]">
                            <i class="fi fi-rr-eye" id="login-eye-icon"></i>
                        </button>
                    </div>
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="mr-2">
                            <span class="text-sm text-gray-600">Remember me</span>
                        </label>
                        <a href="{{ route('forgot-password') }}" class="text-sm text-[#8B4513] hover:underline">Forgot Password?</a>
                    </div>
                    <button type="submit"
                        class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all">
                        Sign In
                    </button>
                    <p class="text-sm text-gray-600 text-center">Don't have an account? 
                        <a href="{{ route('register') }}" class="text-[#8B4513] font-semibold hover:underline">Sign Up</a>
                    </p>
                </form>
                <div class="mt-4 text-center">
                    <a href="{{ route('home') }}" class="text-sm text-[#8B4513] hover:underline">Back to Home</a>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script src="{{ asset('js/auth.js') }}"></script>
    @endpush
@endsection

