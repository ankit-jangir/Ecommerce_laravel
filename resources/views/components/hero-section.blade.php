<section class="hero-section relative min-h-[500px] sm:min-h-[600px] lg:min-h-[700px] flex items-center overflow-hidden bg-white">
    <div class="hero-slider relative w-full">
        <!-- Slide 1 -->
        <div class="hero-slide active">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <!-- Left Section: Text Content -->
                    <div class="text-center lg:text-left z-10 order-2 lg:order-1">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-serif font-bold text-[#654321] mb-4 sm:mb-6 leading-tight">
                            Elegant Modern<br>Kurtis
                        </h1>
                        <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 mb-6 sm:mb-8 leading-relaxed max-w-xl mx-auto lg:mx-0">
                            Discover our curated collection of premium kurtis that blend traditional elegance with contemporary style
                        </p>
                        <a href="{{ route('women') }}" class="inline-block px-6 sm:px-8 lg:px-10 py-2.5 sm:py-3 lg:py-4 bg-[#8B4513] text-white rounded-full text-sm sm:text-base font-semibold hover:bg-[#654321] transition-all duration-300 shadow-lg hover:shadow-xl">
                            Shop Now
                        </a>
                    </div>
                    
                    <!-- Right Section: Model Image -->
                    <div class="relative z-10 order-1 lg:order-2">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=600&h=800&fit=crop" alt="Elegant Modern Kurti" class="w-full h-auto max-h-[500px] sm:max-h-[600px] lg:max-h-[700px] object-cover rounded-lg shadow-2xl">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent rounded-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="hero-slide">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <div class="text-center lg:text-left z-10 order-2 lg:order-1">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-serif font-bold text-[#654321] mb-4 sm:mb-6 leading-tight">
                            Premium Quality<br>Ethnic Wear
                        </h1>
                        <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 mb-6 sm:mb-8 leading-relaxed max-w-xl mx-auto lg:mx-0">
                            Experience the finest craftsmanship in our exclusive collection of traditional and modern ethnic wear
                        </p>
                        <a href="{{ route('kurtis') }}" class="inline-block px-6 sm:px-8 lg:px-10 py-2.5 sm:py-3 lg:py-4 bg-[#8B4513] text-white rounded-full text-sm sm:text-base font-semibold hover:bg-[#654321] transition-all duration-300 shadow-lg hover:shadow-xl">
                            Explore Collection
                        </a>
                    </div>
                    <div class="relative z-10 order-1 lg:order-2">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&h=800&fit=crop" alt="Premium Ethnic Wear" class="w-full h-auto max-h-[500px] sm:max-h-[600px] lg:max-h-[700px] object-cover rounded-lg shadow-2xl">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent rounded-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="hero-slide">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <div class="text-center lg:text-left z-10 order-2 lg:order-1">
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-serif font-bold text-[#654321] mb-4 sm:mb-6 leading-tight">
                            Style That<br>Speaks to You
                        </h1>
                        <p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-600 mb-6 sm:mb-8 leading-relaxed max-w-xl mx-auto lg:mx-0">
                            Find your perfect style with our diverse range of kurtis, combos, and ethnic wear collections
                        </p>
                        <a href="{{ route('shop') }}" class="inline-block px-6 sm:px-8 lg:px-10 py-2.5 sm:py-3 lg:py-4 bg-[#8B4513] text-white rounded-full text-sm sm:text-base font-semibold hover:bg-[#654321] transition-all duration-300 shadow-lg hover:shadow-xl">
                            Shop Now
                        </a>
                    </div>
                    <div class="relative z-10 order-1 lg:order-2">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600&h=800&fit=crop" alt="Style Collection" class="w-full h-auto max-h-[500px] sm:max-h-[600px] lg:max-h-[700px] object-cover rounded-lg shadow-2xl">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent rounded-lg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Slider Dots -->
    <div class="absolute bottom-4 sm:bottom-6 left-1/2 transform -translate-x-1/2 z-20 flex gap-2">
        <button class="hero-dot active w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-[#8B4513] transition-all" data-slide="0"></button>
        <button class="hero-dot w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-gray-300 hover:bg-[#8B4513] transition-all" data-slide="1"></button>
        <button class="hero-dot w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-gray-300 hover:bg-[#8B4513] transition-all" data-slide="2"></button>
    </div>
</section>

<style>
.hero-slide {
    display: none;
    animation: fadeIn 0.5s ease-in-out;
}

.hero-slide.active {
    display: block;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.hero-dot');
    let currentSlide = 0;
    
    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => {
            dot.classList.remove('active');
            dot.classList.add('bg-gray-300');
            dot.classList.remove('bg-[#8B4513]');
        });
        
        slides[index].classList.add('active');
        dots[index].classList.add('active');
        dots[index].classList.remove('bg-gray-300');
        dots[index].classList.add('bg-[#8B4513]');
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }
    
    // Auto slide every 5 seconds
    setInterval(nextSlide, 5000);
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });
});
</script>
