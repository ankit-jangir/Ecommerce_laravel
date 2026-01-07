<!-- Video Section for Women Kurtis -->
<section class="video-section relative overflow-hidden bg-white py-0">
    <!-- Full Width Video Container - Properly Centered -->
    <div class="relative w-full h-[50vh] sm:h-[60vh] md:h-[70vh] lg:h-[80vh] xl:h-[85vh] bg-black flex items-center justify-center overflow-hidden">
        <!-- Video Element - Full Width, Centered, and Responsive - No Controls -->
        <video 
            id="kurtis-video"
            class="w-full h-full object-cover object-center" 
            autoplay
            loop
            muted
            playsinline
            preload="auto"
            style="min-width: 100%; min-height: 100%; width: 100%; height: 100%; object-fit: cover; object-position: center;"
        >
            @if(isset($videoUrl) && $videoUrl)
                <source src="{{ $videoUrl }}" type="video/mp4">
            @elseif(isset($useDogVideo) && $useDogVideo)
                <!-- Dog video from public/videos folder -->
                <source src="{{ asset('videos/dog_video.mp4') }}" type="video/mp4">
            @else
                <!-- Default kurti video from public/videos folder -->
                <source src="{{ asset('videos/khurti_video.mp4') }}" type="video/mp4">
            @endif
            Your browser does not support the video tag.
        </video>
                
        
        <!-- Optional Overlay Text -->
        @if(isset($showOverlay) && $showOverlay)
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent flex items-end justify-center pb-8 sm:pb-12 pointer-events-none z-10">
            <div class="text-center px-4">
                <h3 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-white mb-2 sm:mb-4">Discover Our Collection</h3>
                <p class="text-base sm:text-lg text-white/90 max-w-2xl">Experience the elegance and comfort of our premium women's kurtis</p>
            </div>
        </div>
        @endif
    </div>
    
    <!-- Content Below Video - Show for Women Kurtis -->
    @if(isset($alwaysShowContent) && $alwaysShowContent)
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16 bg-white">
        <div class="text-center max-w-4xl mx-auto">
            <h3 class="text-2xl sm:text-3xl lg:text-4xl font-serif text-[#654321] mb-4 sm:mb-6">Discover Elegant Women's Kurtis</h3>
            <p class="text-base sm:text-lg lg:text-xl text-gray-700 leading-relaxed mb-4">
                Experience the perfect blend of traditional elegance and modern style with our premium collection of women's kurtis. Each piece is carefully crafted to bring comfort, sophistication, and timeless beauty to your wardrobe.
            </p>
            <p class="text-sm sm:text-base text-gray-600">
                From casual everyday wear to festive celebrations, find the perfect kurti that speaks to your unique style.
            </p>
            <div class="mt-6 sm:mt-8">
                <a href="{{ route('women') }}" class="inline-block px-6 sm:px-8 md:px-10 py-2.5 sm:py-3 md:py-4 bg-[#8B4513] text-white hover:bg-[#654321] transition-all duration-300 rounded-full font-semibold text-sm sm:text-base">
                    Shop Women's Collection
                </a>
            </div>
        </div>
    </div>
    @endif
    
    <!-- Optional Content Below Video (Legacy Support) -->
    @if(isset($showContent) && $showContent && !isset($alwaysShowContent))
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 lg:py-16">
        <div class="text-center">
            <h3 class="text-xl sm:text-2xl lg:text-3xl font-serif text-[#654321] mb-4">AURA KURTIS</h3>
            <p class="text-sm sm:text-base text-gray-600 max-w-2xl mx-auto">
                {{ $contentText ?? 'Premium quality kurtis designed for the modern woman. Explore our collection of elegant, comfortable, and stylish kurtis.' }}
            </p>
        </div>
    </div>
    @endif
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.getElementById('kurtis-video');
            if (video) {
                // Ensure video is properly centered and full-width
                video.style.width = '100%';
                video.style.height = '100%';
                video.style.objectFit = 'cover';
                video.style.objectPosition = 'center';
                
                // Ensure video plays on load
                const playPromise = video.play();
                if (playPromise !== undefined) {
                    playPromise.catch(function(error) {
                        console.log('Video autoplay prevented:', error);
                        // Show play button if autoplay fails
                    });
                }
                
                // Video plays automatically without controls
                // No click/touch handlers needed - video just plays silently
                
                // Ensure video maintains aspect ratio and centers properly on load
                video.addEventListener('loadedmetadata', function() {
                    video.style.objectFit = 'cover';
                    video.style.objectPosition = 'center';
                    video.style.width = '100%';
                    video.style.height = '100%';
                });
                
                // Handle resize to maintain proper centering
                window.addEventListener('resize', function() {
                    video.style.width = '100%';
                    video.style.height = '100%';
                    video.style.objectFit = 'cover';
                    video.style.objectPosition = 'center';
                });
            }
        });
    </script>
</section>

