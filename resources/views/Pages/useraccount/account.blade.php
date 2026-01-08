@extends('layouts.app')

@section('title', 'My Account - AURA KURTIS')

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
                    <h1 class="text-2xl sm:text-3xl font-serif font-bold text-[#654321] mb-6">My Profile</h1>
                    
                    <!-- Tabs -->
                    <div class="bg-white rounded-xl shadow-lg mb-6">
                        <div class="flex border-b border-gray-200">
                            <button onclick="switchTab('profile')" id="tab-profile" class="flex-1 px-6 py-4 font-semibold text-[#654321] border-b-2 border-[#8B4513] bg-[#F5F1EB]">
                                Profile
                            </button>
                            <button onclick="switchTab('edit')" id="tab-edit" class="flex-1 px-6 py-4 font-semibold text-gray-500 hover:text-[#654321] transition-colors">
                                Edit Profile
                            </button>
                        </div>
                    </div>
                    
                    <!-- Profile Tab Content -->
                    <div id="profile-tab-content" class="space-y-6">
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <h2 class="text-xl font-serif font-bold text-[#654321] mb-6">Profile Information</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-500 mb-1">Full Name</label>
                                    <p class="text-lg font-semibold text-[#654321]" id="profile-display-name">User</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-500 mb-1">Email</label>
                                    <p class="text-lg font-semibold text-[#654321]" id="profile-display-email">user@gmail.com</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-500 mb-1">Phone</label>
                                    <p class="text-lg font-semibold text-[#654321]" id="profile-display-phone">+91 9876543210</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-500 mb-1">Wallet Balance</label>
                                    <p class="text-lg font-semibold text-[#8B4513]" id="profile-display-wallet">₹0</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-500 mb-1">Addresses</label>
                                    <p class="text-lg font-semibold text-[#654321]" id="profile-display-addresses">0 saved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Edit Tab Content -->
                    <div id="edit-tab-content" class="hidden space-y-6">
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <h2 class="text-xl font-serif font-bold text-[#654321] mb-6">Edit Profile Information</h2>
                            <form id="profile-form" class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-[#654321] mb-2">Full Name</label>
                                    <input type="text" id="profile-name" name="name" maxlength="50"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#654321] mb-2">Email</label>
                                    <input type="email" id="profile-email" name="email" maxlength="100"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#654321] mb-2">Phone</label>
                                    <input type="tel" id="profile-phone" name="phone" 
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-500 mb-2">Password</label>
                                    <input type="password" value="••••••••" disabled
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-gray-400 cursor-not-allowed">
                                    <p class="text-xs text-gray-500 mt-1">Password cannot be edited</p>
                                </div>
                                <button type="submit"
                                    class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all">
                                    Update Profile
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/account.js') }}"></script>
@endsection
