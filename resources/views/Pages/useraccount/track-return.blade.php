@extends('layouts.app')

@section('title', 'Track Return - AURA KURTIS')

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
                    <a href="{{ route('account.returns') }}" class="inline-flex items-center gap-2 text-[#654321] hover:text-[#8B4513] mb-4">
                        <i class="fi fi-rr-arrow-left"></i>
                        <span>Back to Returns</span>
                    </a>
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] mb-6">Track Return</h1>
                    <div id="track-return-content" class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                        <!-- Return tracking info will be populated here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/track-return.js') }}"></script>
@endsection
