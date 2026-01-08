@extends('layouts.app')

@section('title', 'Terms & Conditions - AURA KURTIS')

@section('content')

<!-- ================= HERO ================= -->
<section class="relative h-[55vh] sm:h-[65vh] overflow-hidden">
    <img
        src="https://images.unsplash.com/photo-1505250469679-203ad9ced0cb?auto=format&fit=crop&w=1800&q=80"
        class="absolute inset-0 w-full h-full object-cover"
        alt="Terms and Conditions">

    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 h-full flex items-center justify-center text-center px-4">
        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-serif text-white font-semibold">
            Terms & Conditions
        </h1>
    </div>
</section>

<!-- ================= CONTENT ================= -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl space-y-12 text-gray-700 leading-relaxed">

        <!-- INTRODUCTION -->
        <div>
            <h2 class="text-xl font-serif text-[#654321] mb-4 flex items-center gap-3">
                <i class="fi fi-rr-info text-lg"></i> Introduction
            </h2>
            <p>
                Welcome to <strong>AURA KURTIS</strong>. By accessing or using our website,
                you agree to be bound by these Terms & Conditions. These terms govern your use
                of our website, products, and services.
            </p>
        </div>

        <!-- SALE TERMS -->
        <div>
            <h2 class="text-xl font-serif text-[#654321] mb-4 flex items-center gap-3">
                <i class="fi fi-rr-badge-percent text-lg"></i> Terms During Sale Period
            </h2>

            <ul class="list-disc pl-5 space-y-2">
                <li>Selected products may be available on sale both online and in-store.</li>
                <li>Discounted items are not eligible for return or exchange unless defective.</li>
                <li>All prices displayed are inclusive of applicable taxes.</li>
                <li>Orders may be cancelled if inventory fails quality checks.</li>
                <li>Credit notes issued during sales are not refundable.</li>
            </ul>
        </div>

        <!-- RIGHT TO CHANGE -->
        <div>
            <h2 class="text-xl font-serif text-[#654321] mb-4 flex items-center gap-3">
                <i class="fi fi-rr-refresh text-lg"></i> Right to Modify
            </h2>
            <p>
                AURA KURTIS reserves the right to update or modify these Terms & Conditions
                at any time without prior notice. Continued use of the website implies acceptance
                of the revised terms.
            </p>
        </div>

        <!-- INTELLECTUAL PROPERTY -->
        <div>
            <h2 class="text-xl font-serif text-[#654321] mb-4 flex items-center gap-3">
                <i class="fi fi-rr-copyright text-lg"></i> Intellectual Property
            </h2>
            <p>
                All content including text, images, graphics, logos, and designs are the
                intellectual property of AURA KURTIS. Unauthorized reproduction or use is prohibited.
            </p>
        </div>

        <!-- USER RESPONSIBILITY -->
        <div>
            <h2 class="text-xl font-serif text-[#654321] mb-4 flex items-center gap-3">
                <i class="fi fi-rr-user text-lg"></i> User Responsibilities
            </h2>
            <p>
                Users must ensure the accuracy of personal information provided and maintain
                confidentiality of their account credentials.
            </p>
        </div>

        <!-- BILLING -->
        <div>
            <h2 class="text-xl font-serif text-[#654321] mb-4 flex items-center gap-3">
                <i class="fi fi-rr-receipt text-lg"></i> Pricing & Billing
            </h2>
            <p>
                Prices displayed are Maximum Retail Prices (MRP). Additional shipping charges
                may apply based on delivery location.
            </p>
        </div>

        <!-- ORDER CANCELLATION -->
        <div>
            <h2 class="text-xl font-serif text-[#654321] mb-4 flex items-center gap-3">
                <i class="fi fi-rr-cross-circle text-lg"></i> Order Cancellation
            </h2>
            <p>
                Orders may be cancelled due to unavoidable circumstances such as stock unavailability
                or payment issues. Refunds will be processed within 7 working days.
            </p>
        </div>

        <!-- PAYMENTS -->
        <div>
            <h2 class="text-xl font-serif text-[#654321] mb-4 flex items-center gap-3">
                <i class="fi fi-rr-credit-card text-lg"></i> Payments
            </h2>
            <p>
                Payments are securely processed through third-party payment gateways.
                AURA KURTIS is not responsible for payment failures beyond its control.
            </p>
        </div>

        <!-- GIFT CARDS -->
        <div>
            <h2 class="text-xl font-serif text-[#654321] mb-4 flex items-center gap-3">
                <i class="fi fi-rr-gift text-lg"></i> Gift Cards
            </h2>
            <ul class="list-disc pl-5 space-y-2">
                <li>Gift Cards are redeemable online only.</li>
                <li>They cannot be exchanged for cash.</li>
                <li>Validity is 1 year from date of issue.</li>
            </ul>
        </div>

        <!-- CONTACT -->
        <div>
            <h2 class="text-xl font-serif text-[#654321] mb-4 flex items-center gap-3">
                <i class="fi fi-rr-headset text-lg"></i> Contact Information
            </h2>

            <div class="space-y-3">
                <div class="flex items-center gap-3">
                    <i class="fi fi-rr-envelope text-[#654321] text-lg"></i>
                    <span>care@aurakurtis.com</span>
                </div>

                <div class="flex items-center gap-3">
                    <i class="fi fi-rr-phone-call text-[#654321] text-lg"></i>
                    <span>+91 9XXXXXXXXX</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ================= NEWSLETTER ================= -->
<x-newsletter-signup />

@endsection
