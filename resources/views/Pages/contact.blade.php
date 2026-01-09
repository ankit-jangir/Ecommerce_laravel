@extends('layouts.app')

@section('title', 'Contact - AURA KURTIS')

@section('content')
    <section class="bg-[#F5F1EB] py-10 sm:py-14">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-[#654321]">
                Contact Us
            </h1>
            <p class="text-sm text-gray-600 mt-2">
                Home / <span class="text-[#654321]">Contact Us</span>
            </p>
        </div>
    </section>
    <section class="py-8 sm:py-12 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">


            <!-- Get in Touch Section - Top -->
            <div class="max-w-4xl mx-auto mb-8 sm:mb-12">
                <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 sm:p-8">
                    <h2 class="text-2xl sm:text-3xl font-bold text-black mb-6 text-center">
                        Get in Touch
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Office Address -->
                        <div class="flex gap-4 items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#F5F1EB] rounded-full flex items-center justify-center">
                                <i class="fi fi-rr-marker text-[#8B4513] text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-2">Office Address</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    AURA KURTIS<br>
                                    Jaipur, Rajasthan, India
                                </p>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="flex gap-4 items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-[#F5F1EB] rounded-full flex items-center justify-center">
                                <i class="fi fi-rr-phone-call text-[#8B4513] text-lg"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-black mb-2">Phone Number</h3>
                                <p class="text-gray-700">
                                    <a href="tel:+918588000150" class="hover:text-[#8B4513] transition-colors">
                                        +91 8588000150
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 max-w-6xl mx-auto">

                <!-- LEFT : Contact Form -->
                <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 sm:p-8">
                    <h2 class="text-2xl sm:text-3xl font-bold text-black mb-6 text-center">
                        Send Us a Message
                    </h2>

                    <form id="contact-form" class="space-y-5">
                        <!-- Name and Surname Row -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-black mb-2">
                                    First Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="first_name" name="first_name" required
                                    placeholder="Enter your first name"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-gray-900 transition-all">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-black mb-2">
                                    Last Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="last_name" name="last_name" required
                                    placeholder="Enter your last name"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-gray-900 transition-all">
                            </div>
                        </div>

                        <!-- User Type Select -->
                        <div>
                            <label for="user_type" class="block text-sm font-medium text-black mb-2">
                                I am a <span class="text-red-500">*</span>
                            </label>
                            <select id="user_type" name="user_type" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-gray-900 bg-white transition-all appearance-none cursor-pointer">
                                <option value="">Select your type</option>
                                <option value="user">User</option>
                                <option value="investor">Investor</option>
                            </select>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-black mb-2">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                placeholder="Enter your email address"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-gray-900 transition-all">
                        </div>

                        <!-- Location -->
                        <div>
                            <label for="location" class="block text-sm font-medium text-black mb-2">
                                Location <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="location" name="location" value="Jaipur" required
                                placeholder="Enter your location"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-gray-900 transition-all">
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-black mb-2">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" name="message" rows="5" required placeholder="Enter your message here..."
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] outline-none text-[#654321] resize-none transition-all"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full bg-[#8B4513] text-white py-3 px-6 rounded-lg font-semibold hover:bg-[#654321] transition-all">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- RIGHT : Additional Info + Map -->
                <div class="space-y-6">
                    <!-- Contact Info Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <!-- Call Us -->
                        <div class="bg-white rounded-xl shadow-md border border-gray-200 p-5 text-center">
                            <div class="w-12 h-12 bg-[#F5F1EB] rounded-full flex items-center justify-center mx-auto mb-3">
                                <i class="fi fi-rr-phone-call text-[#8B4513] text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-black mb-2">Call Us</h3>
                            <p class="text-gray-700 text-sm">
                                <a href="tel:+918588000150" class="hover:text-[#8B4513] transition-colors">
                                    (+91) 8588000150
                                </a>
                            </p>
                        </div>

                        <!-- Email -->
                        <div class="bg-white rounded-xl shadow-md border border-gray-200 p-5 text-center">
                            <div class="w-12 h-12 bg-[#F5F1EB] rounded-full flex items-center justify-center mx-auto mb-3">
                                <i class="fi fi-rr-envelope text-[#8B4513] text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-black mb-2">Email</h3>
                            <p class="text-gray-700 text-sm">
                                <a href="mailto:care@aurakurtis.com" class="hover:text-[#8B4513] transition-colors">
                                    care@aurakurtis.com
                                </a>
                            </p>
                        </div>

                        <!-- Location -->
                        <div class="bg-white rounded-xl shadow-md border border-gray-200 p-5 text-center">
                            <div class="w-12 h-12 bg-[#F5F1EB] rounded-full flex items-center justify-center mx-auto mb-3">
                                <i class="fi fi-rr-marker text-[#8B4513] text-xl"></i>
                            </div>
                            <h3 class="font-semibold text-black mb-2">Location</h3>
                            <p class="text-gray-700 text-sm">Jaipur, Rajasthan</p>
                        </div>
                    </div>

                    <!-- Additional Contact Info -->
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 p-6 sm:p-8">
                        <h3 class="text-xl sm:text-2xl font-bold text-black mb-6">
                            Contact Information
                        </h3>

                        <div class="space-y-5">
                            <div class="flex gap-4 items-start">
                                <div
                                    class="flex-shrink-0 w-10 h-10 bg-[#F5F1EB] rounded-full flex items-center justify-center">
                                    <i class="fi fi-rr-clock text-[#8B4513] text-lg"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-black mb-1">Business Hours</h4>
                                    <p class="text-gray-700 text-sm">
                                        Monday - Saturday: 9:00 AM - 6:00 PM<br>
                                        Sunday: Closed
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.963123456789!2d75.7873!3d26.9124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db5b5b5b5b5b5%3A0x5b5b5b5b5b5b5b5b!2sJaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1234567890123!5m2!1sen!2sin"
                            class="w-full h-64 sm:h-80 border-0" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" allowfullscreen>
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contact-form');

            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Get form data
                    const formData = new FormData(contactForm);
                    const data = Object.fromEntries(formData);

                    // Validate form
                    const firstName = formData.get('first_name');
                    const lastName = formData.get('last_name');
                    const userType = formData.get('user_type');
                    const email = formData.get('email');
                    const location = formData.get('location');
                    const message = formData.get('message');

                    if (!firstName || !lastName || !userType || !email || !location || !message) {
                        if (typeof showToast === 'function') {
                            showToast('Please fill all required fields', 'error');
                        } else {
                            alert('Please fill all required fields');
                        }
                        return;
                    }

                    // Show loading state
                    const submitBtn = contactForm.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.disabled = true;
                    submitBtn.innerHTML =
                        '<span class="flex items-center justify-center gap-2"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Sending...</span>';

                    // Simulate form submission
                    setTimeout(function() {
                        // Show success message
                        if (typeof showToast === 'function') {
                            showToast('Thank you! Your message has been sent successfully.',
                                'success');
                        } else {
                            alert('Thank you! Your message has been sent successfully.');
                        }

                        // Reset form
                        contactForm.reset();

                        // Reset button
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    }, 1000);
                });
            }
        });
    </script>
@endsection
