@extends('layouts.app')

@section('title', 'FAQ - AURA KURTIS')

@section('content')

<!-- ================= HERO ================= -->
<section class="relative h-[50vh] overflow-hidden">
    <img src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4?auto=format&fit=crop&w=1800&q=80"
         class="absolute inset-0 w-full h-full object-cover"
         alt="FAQ">

    <div class="absolute inset-0 bg-black/40"></div>

    <div class="relative z-10 h-full flex items-center justify-center">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-serif text-white">
            Frequently Asked Questions
        </h1>
    </div>
</section>

<!-- ================= FAQ CONTENT ================= -->
<section class="py-14 bg-white">
    <div class="container mx-auto px-4 max-w-4xl space-y-6">

        <!-- PAYMENT FAQ -->
        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                What secure payment gateways does Aura Kurtis use?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                Aura Kurtis uses trusted and industry-approved payment gateways such as Razorpay and PayU
                to process all online transactions securely. These gateways ensure that your card details,
                UPI information, and banking credentials are fully encrypted and never stored on our servers.
                All payments comply with PCI-DSS security standards, ensuring complete safety and data privacy
                for every customer shopping with us.
            </p>
        </details>

        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                Can I order Cash on Delivery (COD)?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <div class="mt-3 text-gray-700 text-sm space-y-2 leading-relaxed">
                <p>
                    Cash on Delivery (COD) is available on most products across India for customer convenience.
                    However, COD availability may vary depending on your delivery location, order value,
                    and ongoing promotional periods.
                </p>
                <p>
                    During major sales, festive offers, or on selected premium designs, COD may be temporarily
                    disabled. We recommend checking COD availability at checkout before placing your order.
                </p>
            </div>
        </details>

        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                What payment methods do you accept?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                We offer multiple secure payment options to ensure a smooth checkout experience.
                Customers can pay using credit cards, debit cards, UPI, digital wallets, net banking,
                and Cash on Delivery where applicable. These options allow flexibility and convenience
                while ensuring complete transaction security.
            </p>
        </details>

        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                My payment failed but money was deducted
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                In case your payment fails but the amount is deducted from your account, please do not worry.
                Such transactions are usually auto-refunded by your bank within 5 to 7 business days.
                If the amount is not credited back within this period, you may contact our customer support
                team with your transaction details for quick assistance.
            </p>
        </details>

        <!-- ORDER & SHIPPING -->
        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                How long does delivery take?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                Orders placed on Aura Kurtis are generally delivered within 5 to 7 business days.
                Delivery timelines may vary depending on your location, courier partner availability,
                and unforeseen circumstances such as weather conditions or public holidays.
                Once dispatched, tracking details will be shared for real-time updates.
            </p>
        </details>

        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                How can I track my order?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                After your order is shipped, you will receive a tracking link via SMS and email
                on your registered contact details. Using this link, you can monitor the delivery
                status of your order in real time until it reaches your doorstep.
            </p>
        </details>

        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                Can I modify or cancel my order?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                Orders can be modified or cancelled within 24 hours of placing them, provided
                they have not been processed or shipped. Once the order is dispatched,
                modifications or cancellations may not be possible. Please contact support
                as early as possible for assistance.
            </p>
        </details>

        <!-- RETURNS & SIZE -->
        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                What is your return policy?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                We offer an easy and customer-friendly return policy within 7 days of delivery.
                Products must be unused, unwashed, and returned in their original packaging.
                Once the returned item passes quality checks, refunds or exchanges are processed
                as per our policy guidelines.
            </p>
        </details>

        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                How do I choose the right size?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                Choosing the right size is easy with our detailed Size Guide available on each product page.
                We recommend measuring yourself accurately and comparing the measurements with the chart.
                If you are between two sizes, opting for the larger size usually ensures a more comfortable fit.
            </p>
        </details>

        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                Do you offer custom sizing?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                Currently, Aura Kurtis does not provide custom tailoring or made-to-measure services.
                All our designs are available in standard sizes that are thoughtfully crafted
                to suit a wide range of body types while ensuring comfort and elegance.
            </p>
        </details>

        <!-- ACCOUNT -->
        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                Do I need an account to place an order?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                No, creating an account is not mandatory to place an order.
                You can checkout as a guest. However, registering an account
                allows you to track orders easily, save addresses, and enjoy
                a faster checkout experience in future purchases.
            </p>
        </details>

        <details class="group border-b pb-4">
            <summary class="flex justify-between items-center cursor-pointer text-[#654321] font-medium text-lg">
                Is my personal information safe?
                <i class="fi fi-rr-minus-small group-open:rotate-180 transition"></i>
            </summary>
            <p class="mt-3 text-gray-700 text-sm leading-relaxed">
                Yes, your personal information is completely safe with Aura Kurtis.
                We follow strict data protection practices and never share customer
                information with third parties. All personal and payment data
                is handled securely in compliance with privacy regulations.
            </p>
        </details>

    </div>
</section>

<x-newsletter-signup />

@endsection
