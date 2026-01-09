@extends('layouts.auth')

@section('title', 'Forgot Password - AURA KURTIS')

@section('content')
    <section class="py-12 sm:py-16 bg-[#F5F1EB] min-h-screen flex items-center">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-2xl p-8">
                <!-- Header Section (Changes based on form state) -->
                <div id="form-header" class="text-center mb-6">
                    <div class="w-20 h-20 bg-[#8B4513] rounded-full mx-auto mb-4 flex items-center justify-center">
                        <i class="fi fi-rr-key text-3xl text-white"></i>
                    </div>
                    <h3 id="form-title" class="text-2xl font-serif font-bold text-[#654321] mb-2">Forgot Password?</h3>
                    <p id="form-subtitle" class="text-gray-600">Enter your email to receive OTP</p>
                    <p id="otp-email-display" class="text-sm text-blue-600 mt-2 hidden"></p>
                </div>
                
                <!-- Email Form (Shown Initially) -->
                <form id="forgot-password-form" class="space-y-4">
                    @csrf
                    <div>
                        <input type="email" id="forgot-email" name="email" placeholder="Email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                    </div>
                    <button type="submit"
                        class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all">
                        Send OTP
                    </button>
                </form>
                
                <!-- OTP Verification Section (Hidden Initially, Replaces Email Form) -->
                <div id="otp-section" class="hidden space-y-4">
                    <form id="otp-verify-form" class="space-y-4">
                        <div class="flex gap-2 justify-center flex-wrap" id="otp-inputs">
                            <input type="text" maxlength="1" class="otp-digit w-12 h-12 sm:w-14 sm:h-14 text-center text-lg font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]" pattern="[0-9]">
                            <input type="text" maxlength="1" class="otp-digit w-12 h-12 sm:w-14 sm:h-14 text-center text-lg font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]" pattern="[0-9]">
                            <input type="text" maxlength="1" class="otp-digit w-12 h-12 sm:w-14 sm:h-14 text-center text-lg font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]" pattern="[0-9]">
                            <input type="text" maxlength="1" class="otp-digit w-12 h-12 sm:w-14 sm:h-14 text-center text-lg font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]" pattern="[0-9]">
                            <input type="text" maxlength="1" class="otp-digit w-12 h-12 sm:w-14 sm:h-14 text-center text-lg font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]" pattern="[0-9]">
                            <input type="text" maxlength="1" class="otp-digit w-12 h-12 sm:w-14 sm:h-14 text-center text-lg font-semibold border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]" pattern="[0-9]">
                        </div>
                        <button type="submit"
                            class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all">
                            Verify OTP
                        </button>
                        <button type="button" id="resend-otp" class="w-full text-[#8B4513] hover:underline text-sm">
                            Resend OTP
                        </button>
                    </form>
                </div>
                
                <!-- Reset Password Section (Hidden Initially, Shows after OTP verification) -->
                <div id="reset-password-section" class="hidden space-y-4">
                    <form id="reset-password-form" class="space-y-4">
                        <div class="relative">
                            <input type="password" id="reset-password" name="password" placeholder="New Password" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] pr-12">
                            <button type="button" id="toggle-reset-password" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-[#8B4513]">
                                <i class="fi fi-rr-eye" id="reset-eye-icon"></i>
                            </button>
                        </div>
                        <div class="relative">
                            <input type="password" id="reset-password-confirm" name="password_confirmation" placeholder="Confirm Password" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] pr-12">
                            <button type="button" id="toggle-reset-password-confirm" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-[#8B4513]">
                                <i class="fi fi-rr-eye" id="reset-confirm-eye-icon"></i>
                            </button>
                        </div>
                        <button type="submit"
                            class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all">
                            Reset Password
                        </button>
                    </form>
                </div>
                
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

