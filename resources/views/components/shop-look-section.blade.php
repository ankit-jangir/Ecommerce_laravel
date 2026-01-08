@props([
    'image',
    'title',
    'subtitle',
    'products',
    'id'
])

<section class="bg-white py-10">
    <div class="container mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

            <!-- LEFT IMAGE -->
            <div>
                <img src="{{ $image }}"
                     class="w-full h-[680px] rounded-2xl">
            </div>

            <!-- RIGHT -->
            <div>

                <h2 class="text-4xl font-serif text-[#654321] mb-2">
                    {{ $title }}
                </h2>

                <p class="text-gray-500 mb-8">
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
