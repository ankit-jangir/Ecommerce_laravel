@extends('layouts.auth')

@section('title', 'Sign Up - AURA KURTIS')

@section('content')
    <section class="py-12 sm:py-16 bg-[#F5F1EB] min-h-screen flex items-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-2xl p-8">
                <div class="text-center mb-6">
                    <div class="w-20 h-20 bg-[#8B4513] rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fi fi-rr-user-add text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-[#654321] mb-2">Create Account</h3>
                    <p class="text-gray-600">Sign up to get started</p>
                </div>
                
                <form id="register-form" class="space-y-4">
                    @csrf
                    <div>
                        <input type="text" id="register-name" name="name" placeholder="Name" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                    </div>
                    <div>
                        <input type="text" id="register-surname" name="surname" placeholder="Surname" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                    </div>
                    <div>
                        <input type="email" id="register-email" name="email" placeholder="Email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                    </div>
                    <div class="relative">
                        <input type="password" id="register-password" name="password" placeholder="Password" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] pr-12">
                        <button type="button" id="toggle-register-password" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-[#8B4513]">
                            <i class="fi fi-rr-eye" id="register-eye-icon"></i>
                        </button>
                    </div>
                    <div class="relative">
                        <input type="password" id="register-password-confirm" name="password_confirmation" placeholder="Confirm Password" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] pr-12">
                        <button type="button" id="toggle-register-password-confirm" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-[#8B4513]">
                            <i class="fi fi-rr-eye" id="register-confirm-eye-icon"></i>
                        </button>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="terms" name="terms" required class="mr-2">
                        <label for="terms" class="text-sm text-gray-600">
                            I agree to the <a href="{{ route('terms') }}" class="text-[#8B4513] hover:underline">Terms & Conditions</a>
                        </label>
                    </div>
                    <button type="submit"
                        class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all">
                        Sign Up
                    </button>
                    <p class="text-sm text-gray-600 text-center">Already have an account? 
                        <a href="{{ route('login') }}" class="text-[#8B4513] font-semibold hover:underline">Sign In</a>
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

