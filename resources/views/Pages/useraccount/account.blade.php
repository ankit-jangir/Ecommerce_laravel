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
                    <div class="bg-white rounded-xl shadow-lg mb-6 overflow-hidden">
                        <div class="flex border-b border-gray-200">
                            <button onclick="switchTab('profile')" id="tab-profile" class="flex-1 px-2 sm:px-4 md:px-6 py-2 sm:py-3 md:py-4 text-xs sm:text-sm md:text-base font-semibold text-[#654321] border-b-2 border-[#8B4513] bg-[#F5F1EB] transition-all">
                                Profile
                            </button>
                            <button onclick="switchTab('edit')" id="tab-edit" class="flex-1 px-2 sm:px-4 md:px-6 py-2 sm:py-3 md:py-4 text-xs sm:text-sm md:text-base font-semibold text-gray-500 hover:text-[#654321] transition-all">
                                Edit Profile
                            </button>
                            <button onclick="switchTab('wallet')" id="tab-wallet" class="flex-1 px-2 sm:px-4 md:px-6 py-2 sm:py-3 md:py-4 text-xs sm:text-sm md:text-base font-semibold text-gray-500 hover:text-[#654321] transition-all">
                                Wallet
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
                    
                    <!-- Wallet Tab Content -->
                    <div id="wallet-tab-content" class="hidden space-y-6">
                        <!-- Wallet Balance Card -->
                        <div class="bg-gradient-to-r from-[#8B4513] to-[#654321] rounded-xl shadow-lg p-6 text-white">
                            <p class="text-sm mb-2 opacity-90">Wallet Balance</p>
                            <p class="text-4xl font-bold mb-1" id="wallet-balance">₹0</p>
                            <p class="text-sm opacity-80">Available for use</p>
                        </div>
                        
                        <!-- Add Money Section -->
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <h2 class="text-xl font-serif font-bold text-[#654321] mb-4">Add Money</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-[#654321] mb-2">Amount</label>
                                    <input type="number" id="wallet-amount" placeholder="Enter amount" min="100" step="100"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                                    <p class="text-xs text-gray-500 mt-1">Minimum amount: ₹100</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#654321] mb-3">Payment Method</label>
                                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                                        <button onclick="selectPaymentMethod('upi')" id="payment-upi" class="payment-method-btn p-4 border-2 border-gray-200 rounded-lg hover:border-[#8B4513] transition-all text-center">
                                            <i class="fi fi-rr-credit-card text-2xl text-[#654321] mb-2"></i>
                                            <p class="text-sm font-semibold text-[#654321]">UPI</p>
                                        </button>
                                        <button onclick="selectPaymentMethod('qr')" id="payment-qr" class="payment-method-btn p-4 border-2 border-gray-200 rounded-lg hover:border-[#8B4513] transition-all text-center">
                                            <i class="fi fi-rr-qrcode text-2xl text-[#654321] mb-2"></i>
                                            <p class="text-sm font-semibold text-[#654321]">QR Code</p>
                                        </button>
                                        <button onclick="selectPaymentMethod('card')" id="payment-card" class="payment-method-btn p-4 border-2 border-gray-200 rounded-lg hover:border-[#8B4513] transition-all text-center">
                                            <i class="fi fi-rr-credit-card text-2xl text-[#654321] mb-2"></i>
                                            <p class="text-sm font-semibold text-[#654321]">Card</p>
                                        </button>
                                        <button onclick="selectPaymentMethod('netbanking')" id="payment-netbanking" class="payment-method-btn p-4 border-2 border-gray-200 rounded-lg hover:border-[#8B4513] transition-all text-center">
                                            <i class="fi fi-rr-bank text-2xl text-[#654321] mb-2"></i>
                                            <p class="text-sm font-semibold text-[#654321]">Net Banking</p>
                                        </button>
                                    </div>
                                </div>
                                <button onclick="processWalletPayment()" id="add-money-btn" disabled
                                    class="w-full bg-[#8B4513] text-white py-3 rounded-lg font-semibold hover:bg-[#654321] transition-all disabled:bg-gray-400 disabled:cursor-not-allowed">
                                    Add Money
                                </button>
                            </div>
                        </div>
                        
                        <!-- Transaction History -->
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6">
                            <h2 class="text-xl font-serif font-bold text-[#654321] mb-4">Transaction History</h2>
                            <div id="wallet-transactions" class="space-y-3">
                                <!-- Transactions will be populated here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- QR Code Modal -->
    <div id="qr-code-modal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-md p-6 text-center">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-serif font-bold text-[#654321]">Scan QR Code</h3>
                <button onclick="closeQRModal()" class="text-gray-400 hover:text-[#8B4513] transition-colors">
                    <i class="fi fi-rr-cross text-xl"></i>
                </button>
            </div>
            <div class="bg-white p-4 rounded-lg mb-4 flex justify-center">
                <img id="qr-code-image" src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=UPI_PAYMENT" alt="QR Code" class="w-64 h-64">
            </div>
            <p class="text-sm text-gray-600 mb-2">Amount: <span id="qr-amount" class="font-semibold text-[#654321]">₹0</span></p>
            <p class="text-xs text-gray-500 mb-4">Scan this QR code with any UPI app to complete payment</p>
            <div class="flex gap-3">
                <button onclick="closeQRModal()" class="flex-1 px-4 py-2 border border-gray-300 text-[#654321] rounded-lg hover:bg-gray-50 transition-colors">
                    Cancel
                </button>
                <button onclick="confirmQRPayment()" class="flex-1 px-4 py-2 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors">
                    Payment Done
                </button>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/account.js') }}"></script>
    <script src="{{ asset('js/account-wallet.js') }}"></script>
@endsection
