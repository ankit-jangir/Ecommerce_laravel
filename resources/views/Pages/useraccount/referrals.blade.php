@extends('layouts.app')

@section('title', 'Referrals - AURA KURTIS')

@section('content')
    <!-- Account Header for Mobile/Tablet -->
    <x-account-header />
    
    <section class="py-6 sm:py-8 bg-[#F5F1EB] min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Mobile Menu Toggle -->
            <button id="account-mobile-sidebar-toggle" class="lg:hidden mb-4 px-4 py-2 bg-white rounded-lg shadow-md flex items-center gap-2 text-[#654321]">
                <i class="fi fi-rr-menu-burger"></i>
                <span>Menu</span>
            </button>
            
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Left Sidebar -->
                <x-useraccount-sidebar />
                <x-useraccount-mobile-sidebar />
                
                <!-- Main Content -->
                <div class="flex-1 min-w-0">
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] mb-6">Referrals</h1>
                    
                    <!-- Referral Code -->
                    <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                        <h2 class="text-lg font-semibold text-[#654321] mb-4">Your Referral Code</h2>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <div class="flex-1 px-4 py-3 bg-[#F5F1EB] rounded-lg border-2 border-[#8B4513]">
                                <p class="text-2xl font-bold text-[#654321] text-center" id="referral-code">REFUSER123</p>
                            </div>
                            <button onclick="copyReferralCode()" class="px-6 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-medium">
                                Copy Code
                            </button>
                        </div>
                        <p class="text-sm text-gray-600 mt-4">Share this code with friends and earn rewards!</p>
                    </div>
                    
                    <!-- Referral Stats -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <p class="text-sm text-gray-500 mb-1">Total Referrals</p>
                            <p class="text-2xl font-bold text-[#654321]" id="total-referrals">0</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <p class="text-sm text-gray-500 mb-1">Successful Referrals</p>
                            <p class="text-2xl font-bold text-[#654321]" id="successful-referrals">0</p>
                        </div>
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <p class="text-sm text-gray-500 mb-1">Rewards Earned</p>
                            <p class="text-2xl font-bold text-[#654321]" id="rewards-earned">₹0</p>
                        </div>
                    </div>
                    
                    <!-- Referral List -->
                    <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                        <h2 class="text-xl font-serif font-bold text-[#654321] mb-4">Referral History</h2>
                        <div id="referrals-list" class="space-y-4">
                            <!-- Referrals will be populated here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/account-referrals.js') }}"></script>
@endsection

