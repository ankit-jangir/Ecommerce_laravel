@extends('layouts.app')

@section('title', 'Return & Exchange - AURA KURTIS')

@section('content')

<!-- ================= HERO ================= -->
<section class="relative h-[65vh] overflow-hidden">
    <img
        src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1800&q=80"
        class="absolute inset-0 w-full h-full object-cover"
        alt="Return & Exchange">

    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-4">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-bold text-white">
            RETURN & EXCHANGE
        </h1>
        <p class="mt-3 text-sm sm:text-base text-white/90 max-w-xl">
            We’re making returning and exchanging super easy at Aura Kurtis.  
            Here’s how it works.
        </p>
    </div>
</section>

<!-- ================= NOTICE BAR ================= -->
<section class="bg-[#2F2F2F] text-white text-[11px] sm:text-sm py-3 text-center px-4">
    A 7-DAY RETURN / EXCHANGE PERIOD FROM DATE OF DELIVERY |
    CREDIT NOTE VALID FOR ONE YEAR FROM DATE OF ISSUE |
    PLEASE NOTE, WE DO NOT OFFER REFUNDS
</section>

<!-- ================= ONLINE / STORE ================= -->
<section class="bg-[#FAFAFA] py-16">
    <div class="container mx-auto px-4 max-w-6xl grid grid-cols-1 md:grid-cols-2 gap-14">

        <!-- ONLINE -->
        <div>
            <div class="flex items-center gap-3 mb-5">
                <i class="fi fi-rr-globe text-2xl text-[#654321]"></i>
                <h2 class="text-lg font-serif font-semibold text-[#654321]">
                    FOR ONLINE ORDERS
                </h2>
            </div>

            <p class="text-sm text-gray-700 leading-relaxed mb-4">
                Returning or exchanging your online order is simple — do it via a home pick-up
                or visit a store. Start your online return or exchange by entering your
                purchase email ID and order number.
            </p>

            <p class="text-sm text-gray-700 leading-relaxed mb-4">
                For home pick-ups, there’s no INR 200 fee, which will be deducted from your
                credit note. Once you request a pick-up, a courier will collect your package
                from your shipping address within 2–3 working days.
            </p>

            <p class="text-sm text-gray-700 leading-relaxed">
                To return or exchange an item at store, find your nearest store.
                For gift returns, please provide the email address used for purchase and
                the order number.
            </p>

            <p class="text-sm text-gray-700 leading-relaxed mt-3">
                Any additional charges for shipping or gift wrap, if paid,
                will be deducted from your credit note amount.
            </p>
        </div>

        <!-- STORE -->
        <div>
            <div class="flex items-center gap-3 mb-5">
                <i class="fi fi-rr-marker text-2xl text-[#654321]"></i>
                <h2 class="text-lg font-serif font-semibold text-[#654321]">
                    FOR IN-STORE PURCHASES
                </h2>
            </div>

            <p class="text-sm text-gray-700 leading-relaxed mb-4">
                Items bought in-store can only be returned at a physical store.
                Please note: store purchases cannot be returned by home pick-ups.
            </p>

            <p class="text-sm text-gray-700 leading-relaxed mb-4">
                However, in-store returns are available for both online and in-store orders.
                Simply bring the items and your receipt to the store.
            </p>

            <p class="text-sm text-gray-700 leading-relaxed mb-4">
                For your convenience, returns or exchanges can be made at any Aura Kurtis store,
                no matter where the original purchase was made.
            </p>

            <p class="text-sm text-gray-700 leading-relaxed">
                Any additional charges for shipping or gift wrap, if paid,
                will be deducted from your credit note amount.
            </p>
        </div>

    </div>
</section>

<!-- ================= HOW TO RETURN ================= -->
<section class="bg-white py-20">
    <div class="container mx-auto px-4 max-w-4xl">

        <h2 class="text-2xl sm:text-3xl font-serif text-center text-[#654321] mb-12">
            HOW TO RETURN
        </h2>

        <div class="space-y-8 text-sm text-gray-700 leading-relaxed">

            <div>
                <h3 class="font-semibold mb-2">Conditions for Returns</h3>
                <p><strong>Return Window</strong></p>
                <p>Online purchases: 7 days from delivery date.</p>
                <p>In-store purchases: 7 days from purchase date.</p>
                <p>Please note, return or exchange request will only be accepted once.</p>
            </div>

            <div>
                <h3 class="font-semibold mb-2">Item Condition</h3>
                <p>
                    Items must be unused, in original condition, and include all tags.
                </p>
            </div>

            <div>
                <h3 class="font-semibold mb-2">Return Location</h3>
                <p>
                    Returns or exchanges can be made at any Aura Kurtis store,
                    irrespective of where the purchase was made.
                </p>
            </div>

            <div>
                <h3 class="font-semibold mb-2">Credit Note or Exchange</h3>
                <p>
                    For accepted returns, we’ll issue a credit note or exchange the item
                    for another size in the same colour, style and design.
                </p>
                <p>
                    Credit notes are valid for 1 year and can be used both online and in-store.
                </p>
            </div>

            <div>
                <h3 class="font-semibold mb-2">Special Return Conditions</h3>
                <p>
                    Gift cards, fragrances, wellness products, accessories,
                    and sale items marked as final sale are non-returnable.
                </p>
                <p>
                    Wedding and customised apparel are non-returnable but eligible for exchange.
                </p>
            </div>

            <div>
                <h3 class="font-semibold mb-2">Damaged / Wrong / Missing Items</h3>
                <p>
                    Report any issues within 48 hours of delivery for a replacement
                    or credit note.
                </p>
            </div>

            <div>
                <h3 class="font-semibold mb-2">Refunds</h3>
                <p>
                    Refunds are issued only for fulfilment errors such as incorrect or missing items.
                    Refunds are not provided for time or labour involved in product creation.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ================= NEWSLETTER ================= -->
<x-newsletter-signup />

@endsection
