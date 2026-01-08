@extends('layouts.app')

@section('title', 'My Addresses - AURA KURTIS')

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
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321]">My Addresses</h1>
                        <button onclick="openAddAddressModal()" class="px-4 py-2 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-medium">
                            <i class="fi fi-rr-plus mr-2"></i>Add Address
                        </button>
                    </div>
                    <div id="addresses-list" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Addresses will be populated here -->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Add Address Modal - Slide from Right -->
        <div id="add-address-modal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 hidden">
            <div class="absolute right-0 top-0 bottom-0 w-full sm:w-96 lg:w-[500px] bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-serif font-bold text-[#654321]">Add New Address</h3>
                        <button onclick="closeAddAddressModal()" class="text-gray-400 hover:text-[#8B4513]">
                            <i class="fi fi-rr-cross text-xl"></i>
                        </button>
                    </div>
                    <form id="add-address-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-[#654321] mb-2">Full Name</label>
                            <input type="text" name="name" required placeholder="Enter your full name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-[#654321] mb-2">Phone</label>
                            <input type="tel" name="phone" required placeholder="Enter your phone number" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-[#654321] mb-2">Address Line 1</label>
                            <input type="text" name="address1" required placeholder="Street address, apartment, suite, etc." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-[#654321] mb-2">Address Line 2</label>
                            <input type="text" name="address2" placeholder="Apartment, suite, unit, building, floor, etc." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-[#654321] mb-2">City</label>
                                <input type="text" name="city" required placeholder="Enter city" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#654321] mb-2">Pincode</label>
                                <input type="text" name="pincode" required placeholder="Enter pincode" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-[#654321] mb-2">State</label>
                            <input type="text" name="state" required placeholder="Enter state" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                        </div>
                        <div class="flex gap-3 pt-4">
                            <button type="submit" class="flex-1 bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all">
                                Save Address
                            </button>
                            <button type="button" onclick="closeAddAddressModal()" class="px-6 py-3 border border-gray-300 text-[#654321] rounded-lg hover:bg-gray-50 transition-colors">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/account-addresses.js') }}"></script>
@endsection

