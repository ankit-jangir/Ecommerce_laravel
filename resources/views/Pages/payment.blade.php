@extends('layouts.app')

@section('title', 'Payment - AURA KURTIS')

@section('content')
    <section class="py-6 sm:py-8 bg-[#F5F1EB] min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <a href="javascript:history.back()" class="inline-flex items-center gap-2 text-[#654321] hover:text-[#8B4513] mb-4">
                <i class="fi fi-rr-arrow-left"></i>
                <span>Back</span>
            </a>
            <h1 class="text-3xl sm:text-4xl font-serif font-bold text-[#654321] mb-6 sm:mb-8">Checkout</h1>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column - Payment Methods -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h2 class="text-xl font-serif font-bold text-[#654321] mb-2">Select Payment Method</h2>
                        <p class="text-sm text-gray-600 mb-6">Choose your preferred payment option</p>
                        
                        <div class="space-y-4">
                            <!-- Wallet Payment Option -->
                            <label class="payment-method-card flex items-start gap-4 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-[#8B4513] transition-all" id="wallet-payment-card">
                                <input type="radio" name="payment_method" value="account_wallet" class="mt-1" onchange="selectPaymentMethod('account_wallet')">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center gap-3">
                                            <i class="fi fi-rr-wallet text-2xl text-[#654321]"></i>
                                            <span class="font-semibold text-[#654321]">My Wallet</span>
                                        </div>
                                        <span class="text-sm font-semibold text-[#8B4513]" id="wallet-balance-display">₹0</span>
                                    </div>
                                    <p class="text-sm text-gray-500">Use your wallet balance to pay</p>
                                    <div id="wallet-payment-info" class="hidden mt-2 p-2 bg-blue-50 rounded text-xs text-blue-700">
                                        <p id="wallet-used-amount"></p>
                                        <p id="wallet-remaining-amount" class="mt-1"></p>
                                    </div>
                                </div>
                            </label>
                            
                            <label class="payment-method-card flex items-start gap-4 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-[#8B4513] transition-all">
                                <input type="radio" name="payment_method" value="card" class="mt-1" onchange="selectPaymentMethod('card')">
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fi fi-rr-credit-card text-2xl text-[#654321]"></i>
                                        <span class="font-semibold text-[#654321]">Credit/Debit Card</span>
                                    </div>
                                    <p class="text-sm text-gray-500">Pay securely with your card</p>
                                </div>
                            </label>
                            
                            <label class="payment-method-card flex items-start gap-4 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-[#8B4513] transition-all">
                                <input type="radio" name="payment_method" value="upi" class="mt-1" onchange="selectPaymentMethod('upi')">
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fi fi-rr-mobile text-2xl text-[#654321]"></i>
                                        <span class="font-semibold text-[#654321]">UPI</span>
                                    </div>
                                    <p class="text-sm text-gray-500">Pay using UPI apps (GPay, PhonePe, etc.)</p>
                                </div>
                            </label>
                            
                            <label class="payment-method-card flex items-start gap-4 p-4 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-[#8B4513] transition-all">
                                <input type="radio" name="payment_method" value="cod" class="mt-1" onchange="selectPaymentMethod('cod')">
                                <div class="flex-1">
                                    <div class="flex items-center gap-3 mb-2">
                                        <i class="fi fi-rr-lock text-2xl text-[#654321]"></i>
                                        <span class="font-semibold text-[#654321]">Cash on Delivery</span>
                                    </div>
                                    <p class="text-sm text-gray-500">Pay when you receive your order</p>
                                </div>
                            </label>
                        </div>
                        
                        <button id="place-order-btn" onclick="placeOrder()" class="w-full mt-6 px-6 py-4 bg-black text-white rounded-lg hover:bg-gray-800 transition-colors font-semibold text-lg flex items-center justify-center gap-2">
                            <span id="place-order-text">Place Order</span>
                        </button>
                    </div>
                </div>
                
                <!-- Right Column - Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-lg p-6 sticky top-4">
                        <h2 class="text-xl font-serif font-bold text-[#654321] mb-4">Order Summary</h2>
                        
                        <div id="order-items" class="space-y-4 mb-4 border-b border-gray-200 pb-4">
                            <!-- Order items will be populated here -->
                        </div>
                        
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center gap-2 text-sm text-gray-600 mb-2">
                                <i class="fi fi-rr-marker text-[#654321]"></i>
                                <span id="delivery-type-display">Delivery Type: Home</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm text-gray-600">
                                <i class="fi fi-rr-calendar text-[#654321]"></i>
                                <span id="delivery-date-display">Delivery Date: Sun, 11 Jan</span>
                            </div>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-4 space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="font-semibold text-[#654321]" id="subtotal">Rs. 0</span>
                            </div>
                            <div class="flex justify-between hidden" id="wallet-discount-row">
                                <span class="text-green-600">Wallet Used</span>
                                <span class="font-semibold text-green-600" id="wallet-discount-amount">-Rs. 0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Shipping</span>
                                <span class="font-semibold text-green-600">Free</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax</span>
                                <span class="font-semibold text-[#654321]">Included</span>
                            </div>
                            <div class="flex justify-between pt-2 border-t border-gray-200">
                                <span class="text-lg font-bold text-[#654321]">Total</span>
                                <span class="text-lg font-bold text-[#8B4513]" id="total">Rs. 0</span>
                            </div>
                            <div class="flex justify-between text-sm text-gray-400 hidden" id="original-total-row">
                                <span class="font-normal">Original Total</span>
                                <span class="line-through" id="original-total">Rs. 0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Order Confirmation Modal -->
    <div id="order-confirm-modal" class="fixed inset-0 bg-black/60 backdrop-blur-sm z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-md p-6 text-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <i class="fi fi-rr-check text-3xl text-green-600"></i>
            </div>
            <h3 class="text-2xl font-serif font-bold text-[#654321] mb-2">Order Placed Successfully!</h3>
            <p class="text-gray-600 mb-6">Your order has been confirmed. You will receive an order confirmation email shortly.</p>
            <div class="space-y-3">
                <a href="/account/orders" class="block w-full px-6 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold">
                    View Orders
                </a>
                <a href="/" class="block w-full px-6 py-3 border border-[#8B4513] text-[#8B4513] rounded-lg hover:bg-[#F5F1EB] transition-colors font-semibold">
                    Continue Shopping
                </a>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('js/payment.js') }}"></script>
@endsection

