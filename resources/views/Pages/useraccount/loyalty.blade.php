@extends('layouts.app')

@section('title', 'Loyalty Points - AURA KURTIS')

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
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] mb-6">Loyalty Points</h1>
                    
                    <!-- Points Summary -->
                    <div class="bg-gradient-to-r from-[#8B4513] to-[#654321] rounded-xl shadow-lg p-6 mb-6 text-white">
                        <p class="text-sm mb-2">Total Points</p>
                        <p class="text-4xl font-bold" id="total-points">0</p>
                        <p class="text-sm mt-2 text-white/80">Available for redemption</p>
                    </div>
                    
                    <!-- Points History -->
                    <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                        <h2 class="text-xl font-serif font-bold text-[#654321] mb-4">Points History</h2>
                        <div id="points-history" class="space-y-4">
                            <!-- Points history will be populated here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/account-loyalty.js') }}"></script>
@endsection

