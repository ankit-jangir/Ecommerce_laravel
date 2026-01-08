<footer class="footer bg-[#F5F1EB] text-[#654321] relative">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 mb-12">
            <!-- Column 1: Brand Information -->
            <div class="col-span-1">
                <h2 class="text-2xl sm:text-3xl font-serif font-bold text-[#8B4513] mb-3">AURA KURTIS</h2>
                <p class="text-sm text-gray-600 mb-6 leading-relaxed">Discover timeless elegance with our curated collection of premium fashion essentials.</p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 bg-white border border-gray-300 rounded-lg flex items-center justify-center hover:bg-[#8B4513] hover:text-white transition-all group">
                        <i class="fi fi-brands-instagram text-[#654321] group-hover:text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white border border-gray-300 rounded-lg flex items-center justify-center hover:bg-[#8B4513] hover:text-white transition-all group">
                        <i class="fi fi-brands-facebook text-[#654321] group-hover:text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white border border-gray-300 rounded-lg flex items-center justify-center hover:bg-[#8B4513] hover:text-white transition-all group">
                        <i class="fi fi-brands-twitter text-[#654321] group-hover:text-white"></i>
                    </a>
                </div>
            </div>
            
            <!-- Column 2: Quick Links -->
            <div class="col-span-1">
                <h3 class="text-base font-bold text-[#654321] mb-4 sm:mb-6">Quick Links</h3>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('new-in') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">New Arrivals</a></li>
                    <li><a href="{{ route('women') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">Women</a></li>
                    <li><a href="{{ route('men') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">Men</a></li>
                    <li><a href="{{ route('shop') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">Sale</a></li>
                </ul>
            </div>
            
            <!-- Column 3: Customer Support -->
            <div class="col-span-1">
                <h3 class="text-base font-bold text-[#654321] mb-4 sm:mb-6">Customer Support</h3>
                <ul class="space-y-3 text-sm">
                    <li><a href="{{ route('contact') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">Contact Us</a></li>
                    <li><a href="{{ route('about-us') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">About us</a></li>
                    <li><a href="{{ route('size-guide') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">Size Guide</a></li>
                    <li><a href="{{ route('returns') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">Returns</a></li>
                    <li><a href="{{ route('faq') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">FAQ</a></li>
                    <li><a href="{{ route('terms') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">Terms & Conditions</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-gray-600 hover:text-[#8B4513] transition-colors">Privacy Policy</a></li>
                </ul>
            </div>
            
            <!-- Column 4: Newsletter -->
            <div class="col-span-1">
                <h3 class="text-base font-bold text-[#654321] mb-4 sm:mb-6">Newsletter</h3>
                <p class="text-sm text-gray-600 mb-4">Subscribe for exclusive offers and updates</p>
                <form class="flex gap-2">
                    <input type="email" placeholder="Your email" class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#8B4513] focus:border-[#8B4513] text-sm text-[#654321] placeholder-gray-400">
                    <button type="submit" class="px-6 py-2 bg-[#8B4513] text-white rounded-lg font-semibold hover:bg-[#654321] transition-all whitespace-nowrap text-sm">Subscribe</button>
                </form>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div class="border-t border-gray-300 pt-6 sm:pt-8">
            <div class="text-center">
                <p class="text-xs sm:text-sm text-gray-600">© 2024 AURA KURTIS. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
