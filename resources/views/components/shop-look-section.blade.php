@props([
    'image',
    'title',
    'subtitle',
    'products',
    'id'
])

<section class="bg-white py-8 sm:py-10 lg:py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 sm:gap-10 lg:gap-14 items-center">

            <!-- LEFT IMAGE -->
            <div class="order-2 lg:order-1">
                <img src="{{ $image }}"
                     class="w-full h-[400px] sm:h-[500px] lg:h-[680px]  rounded-lg sm:rounded-2xl">
            </div>

            <!-- RIGHT -->
            <div class="order-1 lg:order-2">

                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-[#654321] mb-2">
                    {{ $title }}
                </h2>

                <p class="text-sm sm:text-base text-gray-500 mb-6 sm:mb-8">
                    {{ $subtitle }}
                </p>

                <!-- ✅ SAME CAROUSEL CALL -->
                <x-product-carousel
                    :products="$products"
                    :id="$id"
                />

            </div>
        </div>
    </div>
</section>
