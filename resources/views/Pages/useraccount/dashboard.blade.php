@extends('layouts.app')

@section('title', 'Dashboard - AURA KURTIS')

@section('content')
    <!-- Account Header for Mobile/Tablet -->
    <x-account-header />
    
    <section class="py-6 sm:py-8 bg-[#F5F1EB] min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Left Sidebar -->
                <x-useraccount-sidebar />
                <!-- Mobile sidebar hidden on account pages, using header menu instead -->
                
                <!-- Main Content -->
                <div class="flex-1 min-w-0">
                    <!-- Welcome Banner -->
                    <div class="bg-gradient-to-r from-[#8B4513] to-[#654321] rounded-xl shadow-lg p-6 mb-6 text-white">
                        <h1 class="text-2xl sm:text-3xl font-serif font-bold mb-2" id="welcome-text">Welcome back, User! 👋</h1>
                        <p class="text-white/90">Here's what's happening with your account today.</p>
                    </div>
                    
                    <!-- Summary Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fi fi-rr-shopping-bag text-blue-600 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Total Orders</p>
                                    <p class="text-2xl font-bold text-[#654321]" id="total-orders">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                    <i class="fi fi-rr-rupee-sign text-green-600 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Total Spent</p>
                                    <p class="text-2xl font-bold text-[#654321]" id="total-spent">₹0</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                    <i class="fi fi-rr-heart text-red-600 text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Wishlist Items</p>
                                    <p class="text-2xl font-bold text-[#654321]" id="wishlist-count">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quick Actions -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-6">
                        <a href="{{ route('shop') }}" class="bg-white rounded-xl shadow-lg p-4 sm:p-6 text-center hover:shadow-xl transition-shadow">
                            <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <i class="fi fi-rr-shopping-cart text-purple-600 text-xl"></i>
                            </div>
                            <p class="text-sm font-medium text-[#654321]">Browse Products</p>
                        </a>
                        <a href="{{ route('account.orders') }}" class="bg-white rounded-xl shadow-lg p-4 sm:p-6 text-center hover:shadow-xl transition-shadow">
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <i class="fi fi-rr-box text-orange-600 text-xl"></i>
                            </div>
                            <p class="text-sm font-medium text-[#654321]">Track Orders</p>
                        </a>
                        <a href="{{ route('wishlist') }}" class="bg-white rounded-xl shadow-lg p-4 sm:p-6 text-center hover:shadow-xl transition-shadow">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <i class="fi fi-rr-heart text-red-600 text-xl"></i>
                            </div>
                            <p class="text-sm font-medium text-[#654321]">My Wishlist</p>
                        </a>
                        <a href="{{ route('account.addresses') }}" class="bg-white rounded-xl shadow-lg p-4 sm:p-6 text-center hover:shadow-xl transition-shadow">
                            <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mx-auto mb-3">
                                <i class="fi fi-rr-marker text-pink-600 text-xl"></i>
                            </div>
                            <p class="text-sm font-medium text-[#654321]">Manage Addresses</p>
                        </a>
                    </div>
                    
                    <!-- Recent Orders -->
                    <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                        <h2 class="text-xl font-serif font-bold text-[#654321] mb-4">Recent Orders</h2>
                        <div id="recent-orders" class="space-y-4">
                            <!-- Orders will be populated here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/account-dashboard.js') }}"></script>
@endsection

