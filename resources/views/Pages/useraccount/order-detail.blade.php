@extends('layouts.app')

@section('title', 'Order Details - AURA KURTIS')

@section('content')
    <!-- Account Header for Mobile/Tablet -->
    <x-account-header />
    
    <section class="py-6 sm:py-8 bg-[#F5F1EB] min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Left Sidebar -->
                <x-useraccount-sidebar />
                <x-useraccount-mobile-sidebar />
                
                <!-- Main Content -->
                <div class="flex-1 min-w-0">
                    <a href="{{ route('account.orders') }}" class="inline-flex items-center gap-2 text-[#654321] hover:text-[#8B4513] mb-4">
                        <i class="fi fi-rr-arrow-left"></i>
                        <span>Back to Orders</span>
                    </a>
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] mb-6">Order Details</h1>
                    <div id="order-detail-content" class="space-y-6">
                        <!-- Order details will be populated here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/order-detail.js') }}"></script>
@endsection
