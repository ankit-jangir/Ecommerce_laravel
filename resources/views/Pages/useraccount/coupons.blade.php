@extends('layouts.app')

@section('title', 'My Coupons - AURA KURTIS')

@section('content')
    <!-- Account Header for Mobile/Tablet -->
    <x-account-header />
    
    <section class="py-6 sm:py-8 bg-[#F5F1EB] min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Left Sidebar -->
                <x-useraccount-sidebar />
                
                <!-- Main Content -->
                <div class="flex-1 min-w-0">
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] mb-6">My Coupons</h1>
                    <div id="coupons-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <!-- Coupons will be populated here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/account-coupons.js') }}"></script>
@endsection

