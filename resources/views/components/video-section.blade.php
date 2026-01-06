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
    
    <!-- Optional Content Below Video -->
    @if(isset($showContent) && $showContent)
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

