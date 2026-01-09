@extends('layouts.app')

@section('title', 'Checkout - AURA KURTIS')

@section('content')
    <section class="py-6 sm:py-8 bg-[#F5F1EB] min-h-screen">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <a href="javascript:history.back()"
                class="inline-flex items-center gap-2 text-[#654321] hover:text-[#8B4513] mb-4">
                <i class="fi fi-rr-arrow-left"></i>
                <span>Back</span>
            </a>
            <h1 class="text-3xl sm:text-4xl font-serif font-bold text-[#654321] mb-6 sm:mb-8">Checkout</h1>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <!-- Left Column - Delivery Form -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Delivery Type -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h2 class="text-xl font-serif font-bold text-[#654321] mb-2">Delivery Type</h2>
                        <p class="text-sm text-gray-600 mb-4">Select where you want your order delivered</p>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <button onclick="selectDeliveryType('home')" id="delivery-home"
                                class="delivery-type-btn p-4 border-2 border-gray-200 rounded-lg hover:border-[#8B4513] transition-all text-left">
                                <div class="flex items-center gap-3 mb-2">
                                    <i class="fi fi-rr-home text-2xl text-[#654321]"></i>
                                    <span class="font-semibold text-[#654321]">Home</span>
                                </div>
                                <p class="text-sm text-gray-500">Residential address</p>
                            </button>
                            <button onclick="selectDeliveryType('office')" id="delivery-office"
                                class="delivery-type-btn p-4 border-2 border-gray-200 rounded-lg hover:border-[#8B4513] transition-all text-left">
                                <div class="flex items-center gap-3 mb-2">
                                    <i class="fi fi-rr-building text-2xl text-[#654321]"></i>
                                    <span class="font-semibold text-[#654321]">Office</span>
                                </div>
                                <p class="text-sm text-gray-500">Work address</p>
                            </button>
                            <button onclick="selectDeliveryType('other')" id="delivery-other"
                                class="delivery-type-btn p-4 border-2 border-gray-200 rounded-lg hover:border-[#8B4513] transition-all text-left">
                                <div class="flex items-center gap-3 mb-2">
                                    <i class="fi fi-rr-box text-2xl text-[#654321]"></i>
                                    <span class="font-semibold text-[#654321]">Other</span>
                                </div>
                                <p class="text-sm text-gray-500">Other location</p>
                            </button>
                        </div>
                    </div>

                    <!-- Delivery Details Form -->
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h2 class="text-xl font-serif font-bold text-[#654321] mb-2">Delivery Details</h2>
                        <p class="text-sm text-gray-600 mb-6">Please provide your delivery information</p>
                        <form id="checkout-form" class="space-y-4">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-[#654321] mb-2">First Name <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="first_name" required placeholder="Enter your first name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#654321] mb-2">Last Name <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="last_name" required placeholder="Enter your last name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#654321] mb-2">Email <span
                                        class="text-red-500">*</span></label>
                                <input type="email" name="email" required placeholder="Enter your email address"
                                    onblur="validateEmail(this)"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400 transition-colors">
                                <p class="text-xs text-red-500 mt-1 hidden" id="email-error">Please enter a valid email
                                    address</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#654321] mb-2">Phone Number <span
                                        class="text-red-500">*</span></label>
                                <input type="tel" name="phone" required maxlength="10" pattern="[0-9]{10}"
                                    placeholder="Enter 10-digit phone number"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, ''); this.classList.remove('border-red-500');"
                                    onblur="validatePhone(this)"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400 transition-colors">
                                <p class="text-xs text-red-500 mt-1 hidden" id="phone-error">Please enter a valid 10-digit
                                    phone number</p>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#654321] mb-2">Address <span
                                        class="text-red-500">*</span></label>
                                <textarea name="address" rows="3" required placeholder="Enter your complete address"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400"></textarea>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-[#654321] mb-2">City <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="city" required placeholder="Enter city name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#654321] mb-2">State <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="state" required placeholder="Enter state name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-[#654321] mb-2">Pincode <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="pincode" required maxlength="6" pattern="[0-9]{6}"
                                        placeholder="Enter 6-digit pincode"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, ''); this.classList.remove('border-red-500');"
                                        onblur="validatePincode(this)"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400 transition-colors">
                                    <p class="text-xs text-red-500 mt-1 hidden" id="pincode-error">Please enter a valid
                                        6-digit pincode</p>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#654321] mb-2">Country</label>
                                <input type="text" name="country" value="India" readonly
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-[#654321]">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-[#654321] mb-2">Preferred Delivery Date <span
                                        class="text-red-500">*</span></label>
                                <input type="date" name="delivery_date" id="delivery-date" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321]">
                                <p class="text-xs text-gray-500 mt-1">Delivery available from 2 days onwards (minimum 2
                                    days processing)</p>
                            </div>
                            <button type="submit" id="continue-payment-btn"
                                class="w-full sm:w-auto px-8 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold flex items-center justify-center gap-2">
                                <span id="continue-payment-text">Continue to Payment</span>
                            </button>

                        </form>
                    </div>
                </div>

                <!-- Right Column - Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-lg p-6 sticky top-4">
                        <h2 class="text-xl font-serif font-bold text-[#654321] mb-4">Order Summary</h2>

                        <!-- Coupon Code -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-[#654321] mb-2">Coupon Code</label>
                            <div class="flex gap-2">
                                <input type="text" id="coupon-code" placeholder="Enter code"
                                    class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] placeholder-gray-400"
                                    onkeypress="if(event.key === 'Enter') { event.preventDefault(); applyCoupon(); }">
                                <button onclick="applyCoupon()" type="button"
                                    class="px-4 py-2 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors flex items-center justify-center gap-2 font-medium min-w-[50px]">
                                    <i class="fi fi-rr-tag text-lg"></i>
                                    <span class="hidden sm:inline">Apply</span>
                                </button>
                            </div>
                            <!-- Welcome Coupon for New Users -->
                            <div id="welcome-coupon-section" class="mt-3 hidden">
                                <div
                                    class="bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-300 rounded-lg p-4">
                                    <div class="flex items-center justify-between">
                                        <div>
                                            <p class="text-sm font-semibold text-green-700 mb-1">🎉 Welcome Coupon!</p>
                                            <p class="text-xs text-green-600">Use <span class="font-bold">WELCOME20</span>
                                                for 20% off on orders above ₹500</p>
                                        </div>
                                        <button onclick="applyWelcomeCoupon()" type="button"
                                            class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors text-sm font-medium whitespace-nowrap">
                                            Apply Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 pt-4 mb-4">
                            <div id="order-items" class="space-y-4 mb-4">
                                <!-- Order items will be populated here -->
                            </div>
                        </div>

                        <div class="border-t border-gray-200 pt-4 space-y-2">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="font-semibold text-[#654321]" id="subtotal">Rs. 0</span>
                            </div>
                            <!-- Coupon Discount -->
                            <div id="coupon-discount-row" class="hidden flex justify-between items-center">
                                <span class="text-gray-600">Coupon Discount</span>
                                <div class="text-right">
                                    <span class="font-semibold text-green-600" id="coupon-discount-amount">-Rs. 0</span>
                                    <p class="text-xs text-green-600 mt-0.5" id="coupon-saved-text">You saved Rs. 0</p>
                                </div>
                            </div>
                            <!-- Gift Card Discount -->
                            <div id="gift-card-discount-row" class="hidden flex justify-between items-center">
                                <span class="text-gray-600">Gift Card</span>
                                <div class="text-right">
                                    <span class="font-semibold text-green-600" id="gift-card-discount-amount">-Rs.
                                        0</span>
                                </div>
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
                                <div class="text-right">
                                    <span class="text-lg font-bold text-[#8B4513]" id="total">Rs. 0</span>
                                    <p id="original-total-text" class="text-xs text-gray-400 line-through hidden"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/checkout.js') }}"></script>
    <script>
        function validatePhone(field) {
            const phonePattern = /^[0-9]{10}$/;
            const errorMsg = document.getElementById('phone-error');
            if (!phonePattern.test(field.value)) {
                field.classList.add('border-red-500');
                if (errorMsg) errorMsg.classList.remove('hidden');
                return false;
            } else {
                field.classList.remove('border-red-500');
                if (errorMsg) errorMsg.classList.add('hidden');
                return true;
            }
        }

        function validatePincode(field) {
            const pincodePattern = /^[0-9]{6}$/;
            const errorMsg = document.getElementById('pincode-error');
            if (!pincodePattern.test(field.value)) {
                field.classList.add('border-red-500');
                if (errorMsg) errorMsg.classList.remove('hidden');
                return false;
            } else {
                field.classList.remove('border-red-500');
                if (errorMsg) errorMsg.classList.add('hidden');
                return true;
            }
        }

        function validateEmail(field) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const errorMsg = document.getElementById('email-error');
            if (!emailPattern.test(field.value)) {
                field.classList.add('border-red-500');
                if (errorMsg) errorMsg.classList.remove('hidden');
                return false;
            } else {
                field.classList.remove('border-red-500');
                if (errorMsg) errorMsg.classList.add('hidden');
                return true;
            }
        }
    </script>
@endsection
