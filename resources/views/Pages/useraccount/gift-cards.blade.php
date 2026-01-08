@extends('layouts.app')

@section('title', 'Gift Cards - AURA KURTIS')

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
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] mb-6">My Gift Cards</h1>
                    <div id="gift-cards-list" class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Gift cards will be populated here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/account-gift-cards.js') }}"></script>
@endsection

