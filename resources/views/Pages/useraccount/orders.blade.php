@extends('layouts.app')

@section('title', 'My Orders - AURA KURTIS')

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
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] mb-6">My Orders</h1>
                    <div id="orders-list" class="space-y-4">
                        <!-- Orders will be populated here -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/account-orders.js') }}"></script>
@endsection

