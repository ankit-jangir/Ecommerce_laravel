<!-- VIDEO HERO / IMAGE STYLE SECTION -->
<section class="relative w-full overflow-hidden bg-white pt-0 pb-10">

    <!-- VIDEO CONTAINER -->
    <div
        class="relative w-full max-w-7xl mx-auto overflow-hidden rounded-2xl
               h-[260px] sm:h-[340px] md:h-[420px] lg:h-[480px]">

        <video
            autoplay
            loop
            muted
            playsinline
            preload="auto"
            class="absolute inset-0 w-full h-full object-cover object-center"
        >
            <source src="{{ asset('videos/khurti_video2.mp4') }}" type="video/mp4">
        </video>

        <!-- DARK OVERLAY -->
        <div class="absolute inset-0 bg-black/30"></div>

        <!-- CENTER CONTENT -->
        <div class="absolute inset-0 flex items-center justify-center z-10">
            <div class="text-center px-4">

                <h2
                    class="text-white font-serif
                           text-xl sm:text-2xl md:text-3xl lg:text-4xl
                           mb-4 tracking-wide">
                    Cotton Kurta Set Collection
                </h2>

                <a href="{{ route('women') }}"
                   class="inline-block text-white text-sm sm:text-base
                          border border-white px-6 py-2 rounded-full
                          hover:bg-white hover:text-[#654321]
                          transition-all duration-300">
                    Shop the collection
                </a>

            </div>
        </div>

    </div>
</section>
