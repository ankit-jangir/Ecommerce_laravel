@extends('layouts.app')

@section('title', 'Blog Detail - AURA KURTIS')

@section('content')

@php
    // Mock blog data with extensive content
    $blogData = [
        'everyday-kurti-styling-for-office' => [
            'category' => 'Styling Guides',
            'categoryColor' => 'bg-green-100 text-green-700',
            'title' => 'Everyday Kurti Styling for Office',
            'date' => '12 Jan 2026',
            'views' => '126k Views',
            'image' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=1200',
            'content' => [
                'These people envy me for having a lifestyle they don\'t have, but the truth is, sometimes I envy their lifestyle instead. Struggling to sell one multi-million dollar home currently.',
                'Kurtis have become a popular choice for office wear due to their comfort, elegance, and versatility. They offer a perfect blend of traditional Indian aesthetics with modern professional requirements, making them ideal for contemporary workplaces. The evolution of office dress codes has opened doors for ethnic wear, and kurtis have emerged as a favorite among working professionals.',
                'Why Kurtis Work for Office',
                'Kurtis are naturally comfortable, breathable, and easy to maintain. They provide a professional yet ethnic look that stands out in corporate environments while maintaining comfort throughout the day. The fabric choices available today, from cotton to georgette, ensure that you stay comfortable even during long working hours.',
                'When selecting kurtis for office wear, consider the length, fit, and fabric. Knee-length or longer kurtis in solid colors or subtle prints work best. Pair them with formal trousers or palazzos for a complete professional look. Avoid overly embellished or flashy designs that might be too casual for office settings.',
                'Styling Tips for Office Kurtis',
                'Accessorizing your office kurti is key to creating a polished look. A simple statement necklace or elegant earrings can elevate your outfit. Choose footwear that complements your kurti - closed-toe flats or low heels work well. A structured handbag or tote completes the professional ensemble.',
                'Color coordination is essential when styling kurtis for office. Neutral tones like beige, navy, black, and white are safe choices. You can also experiment with pastels or muted colors that maintain professionalism while adding personality to your wardrobe.',
                'When styled correctly with the right accessories, kurtis can make an excellent choice for office wear, offering both style and comfort for working professionals. They allow you to express your cultural identity while maintaining a professional appearance that commands respect in the workplace.'
            ],
            'tags' => ['Kurti', 'Office', 'Fashion', 'Styling', 'Professional']
        ],
        'festive-kurti-looks-for-evening-parties' => [
            'category' => 'Festive Wear',
            'categoryColor' => 'bg-purple-100 text-purple-700',
            'title' => 'Festive Kurti Looks for Evening Parties',
            'date' => '15 Jan 2026',
            'views' => '98k Views',
            'image' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=1200',
            'content' => [
                'Festive occasions call for elegant and sophisticated attire that reflects your personal style while celebrating traditional Indian aesthetics.',
                'Festive kurtis have gained immense popularity for evening parties due to their intricate designs, rich fabrics, and ability to make a statement. They offer the perfect balance between traditional elegance and contemporary fashion. Whether it\'s a wedding, festival celebration, or special gathering, a well-chosen festive kurti can make you the center of attention.',
                'Why Festive Kurtis are Special',
                'Festive kurtis are crafted with attention to detail, featuring beautiful embroidery, premium fabrics, and designs that celebrate Indian craftsmanship. They provide a luxurious feel while maintaining comfort for long evening events. The intricate work, whether it\'s zari, sequins, or thread work, adds a touch of opulence that makes these pieces perfect for special occasions.',
                'When choosing a festive kurti, consider the event type and venue. For formal evening parties, opt for rich fabrics like silk, velvet, or brocade. Embellished kurtis with intricate embroidery work beautifully for weddings and celebrations. The color palette should complement the occasion - deep jewel tones for evening events, bright colors for daytime celebrations.',
                'Accessorizing Your Festive Look',
                'The right accessories can transform your festive kurti into a stunning ensemble. Statement jewelry, such as jhumkas or chandbalis, adds traditional charm. A matching dupatta or stole can enhance the overall look. Don\'t forget to choose the right footwear - embellished juttis or heels that complement your outfit.',
                'Makeup and hairstyling play crucial roles in completing your festive look. Traditional hairstyles like braids or buns adorned with flowers or accessories work beautifully. Your makeup should enhance your features without overpowering your outfit. A bold lip color or kohl-rimmed eyes can add drama to your festive appearance.',
                'When paired with the right accessories and styling, festive kurtis can make an excellent choice for evening parties, offering both elegance and comfort for special occasions. They allow you to celebrate your cultural heritage while looking absolutely stunning at any festive gathering.'
            ],
            'tags' => ['Festive', 'Ethnic', 'Party', 'Elegance', 'Celebration']
        ],
        'top-kurti-trends-this-season' => [
            'category' => 'Trends',
            'categoryColor' => 'bg-blue-100 text-blue-700',
            'title' => 'Top Kurti Trends This Season',
            'date' => '18 Jan 2026',
            'views' => '145k Views',
            'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1200',
            'content' => [
                'Fashion trends evolve constantly, and staying updated with the latest kurti styles can help you make informed choices for your wardrobe.',
                'This season brings exciting new trends in kurti fashion, from contemporary cuts to traditional patterns with modern twists. Designers are experimenting with fabrics, silhouettes, and embellishments to create unique pieces. The fashion industry has seen a resurgence of interest in ethnic wear, and kurtis are at the forefront of this movement.',
                'Why These Trends Matter',
                'Understanding current trends helps you make fashion-forward choices while staying true to your personal style. These trends reflect the evolving preferences of modern Indian women who seek both tradition and innovation. By incorporating these trends, you can keep your wardrobe fresh and contemporary while maintaining your cultural identity.',
                'This season, we\'re seeing a shift towards sustainable fabrics, minimalist designs with subtle details, and versatile pieces that can transition from day to night. The focus is on comfort without compromising style, making kurtis more accessible and wearable for everyday occasions.',
                'Key Trends to Watch',
                'Asymmetric hemlines are making a strong comeback, adding modern flair to traditional silhouettes. High-low kurtis and layered designs are also gaining popularity. Color blocking and geometric patterns are emerging as favorites among fashion enthusiasts.',
                'Sustainable fashion is influencing kurti designs, with more brands focusing on eco-friendly fabrics and ethical production. This trend aligns with the growing consciousness about environmental impact and sustainable living.',
                'When incorporated thoughtfully, these trends can enhance your wardrobe, offering fresh styling options that celebrate both contemporary fashion and traditional Indian aesthetics. They provide opportunities to experiment with your style while staying connected to your roots.'
            ],
            'tags' => ['Trends', 'Kurti', 'Fashion', 'Season', 'Style']
        ],
        'how-to-pair-kurtis-with-dupattas' => [
            'category' => 'Fashion Tips',
            'categoryColor' => 'bg-pink-100 text-pink-700',
            'title' => 'How to Pair Kurtis with Dupattas',
            'date' => '20 Jan 2026',
            'views' => '112k Views',
            'image' => 'https://images.unsplash.com/photo-1520975916090-3105956dac38?w=1200',
            'content' => [
                'Mastering the art of pairing kurtis with dupattas can transform your entire look, creating elegant and sophisticated ensembles.',
                'Dupattas have become an essential accessory for kurtis, adding elegance and completing the traditional look. The right pairing can enhance your outfit while the wrong choice can disrupt the overall aesthetic. Understanding color theory, fabric compatibility, and draping techniques can help you create stunning combinations.',
                'Why Dupatta Pairing is Important',
                'Dupattas add layers, texture, and visual interest to your kurti. They can complement or contrast with your main outfit, creating depth and sophistication in your overall appearance. A well-chosen dupatta can elevate a simple kurti to an elegant ensemble, making it suitable for various occasions.',
                'The key to successful dupatta pairing lies in understanding balance. If your kurti is heavily embellished, opt for a simpler dupatta. Conversely, a plain kurti can be enhanced with an intricately designed dupatta. The fabric should complement your kurti - lightweight dupattas work with flowy kurtis, while structured dupattas pair well with fitted styles.',
                'Color Coordination Techniques',
                'Color coordination is crucial when pairing dupattas with kurtis. You can choose complementary colors from the color wheel, or opt for monochromatic schemes using different shades of the same color. Contrasting colors can create bold statements, while similar tones provide a harmonious look.',
                'Pattern mixing requires careful consideration. If your kurti has a bold print, choose a dupatta with a subtle pattern or solid color. Geometric patterns can be paired with floral designs if they share a common color palette. The goal is to create visual interest without overwhelming the outfit.',
                'Draping Styles and Techniques',
                'Different draping styles can completely change your look. The traditional front drape works for formal occasions, while a casual shoulder drape is perfect for everyday wear. Experimenting with different draping techniques can help you find styles that flatter your body type and suit the occasion.',
                'When chosen thoughtfully, dupattas can make an excellent addition to your kurti ensemble, offering both style enhancement and traditional elegance for various occasions. They provide endless opportunities for creativity and personal expression in your ethnic wear styling.'
            ],
            'tags' => ['Kurti', 'Dupatta', 'Styling', 'Tips', 'Fashion']
        ]
    ];

    $blog = $blogData[$slug] ?? [
        'category' => 'Fashion',
        'categoryColor' => 'bg-gray-100 text-gray-700',
        'title' => ucwords(str_replace('-', ' ', $slug)),
        'date' => date('d M Y'),
        'views' => '50k Views',
        'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1200',
        'content' => [
            'This is a detailed blog post about kurtis and fashion.',
            'Kurtis have become an essential part of modern Indian fashion, offering comfort, style, and versatility.',
            'Why Kurtis are Popular',
            'They provide a perfect blend of traditional aesthetics with contemporary designs, making them suitable for various occasions.',
            'When styled correctly, kurtis can enhance your wardrobe and reflect your personal style.'
        ],
        'tags' => ['Fashion', 'Kurti', 'Style']
    ];

    // Get products for display
    $products = \App\Helpers\MockData::getHomepageProducts();
@endphp

<section class="py-8 sm:py-12 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        
        <!-- Category Tag -->
        <div class="mb-4">
            <span class="inline-block px-4 py-2 rounded-md text-sm font-semibold {{ $blog['categoryColor'] }}">
                {{ $blog['category'] }}
            </span>
        </div>

        <!-- Title -->
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-black mb-4 leading-tight">
            {{ $blog['title'] }}
        </h1>

        <!-- Date and Views -->
        <div class="flex items-center gap-4 text-sm text-gray-600 mb-6">
            <span>{{ $blog['date'] }}</span>
            <span>•</span>
            <span>{{ $blog['views'] }}</span>
        </div>

        <!-- Main Image -->
        <div class="mb-8">
            <img src="{{ $blog['image'] }}" 
                 alt="{{ $blog['title'] }}"
                 class="w-full h-auto rounded-lg object-cover shadow-md">
        </div>

        <!-- Content -->
        <div class="prose prose-lg max-w-none mb-8">
            @foreach($blog['content'] as $index => $paragraph)
                @if(strlen($paragraph) < 50 && !str_contains($paragraph, '.'))
                    <h2 class="text-xl sm:text-2xl font-bold text-black mt-8 mb-4">{{ $paragraph }}</h2>
                @else
                    <p class="text-gray-700 leading-relaxed mb-4 text-base sm:text-lg">
                        {{ $paragraph }}
                    </p>
                @endif
            @endforeach
        </div>

        <!-- Tags -->
        <div class="mb-8 pt-6 border-t border-gray-200">
            <p class="text-sm font-semibold text-black mb-3">Tags:</p>
            <div class="flex flex-wrap gap-2">
                @foreach($blog['tags'] as $tag)
                    <a href="#" class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition-colors">
                        {{ $tag }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Back to Blog Button -->
        <div class="pt-6 border-t border-gray-200 mb-12">
            <a href="{{ route('blogs') }}" 
               class="inline-flex items-center gap-2 text-[#8B4513] hover:text-[#654321] font-semibold transition-colors">
                <span>←</span>
                <span>Back to Blog</span>
            </a>
        </div>

    </div>

    <!-- Related Products Section -->
    <section class="py-8 sm:py-12 bg-white border-t border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl font-bold text-black text-center mb-8 sm:mb-12">
                Shop The Look
            </h2>
            
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                @foreach(($products['bestsellers'] ?? []) as $product)
                    <div class="group cursor-pointer block product-card relative">
                        <a href="{{ route('product.detail', ['id' => $product['id']]) }}">
                            <div class="relative overflow-hidden mb-3 sm:mb-4 rounded-lg bg-white">
                                <div class="relative w-full aspect-square overflow-hidden">
                                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}"
                                        class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-300">
                                </div>
                                
                                @if(isset($product['badge']) && $product['badge'])
                                    <span class="absolute top-2 right-2 sm:top-3 sm:right-3 text-white px-2 py-1 rounded-full text-xs font-semibold {{ $product['badge_color'] === 'red' ? 'bg-red-500' : ($product['badge_color'] === 'yellow' ? 'bg-yellow-500' : ($product['badge_color'] === 'green' ? 'bg-green-500' : ($product['badge_color'] === 'purple' ? 'bg-purple-500' : ($product['badge_color'] === 'pink' ? 'bg-pink-500' : ($product['badge_color'] === 'blue' ? 'bg-blue-500' : ($product['badge_color'] === 'orange' ? 'bg-orange-500' : 'bg-gray-500')))))) }}">
                                        {{ $product['badge'] }}
                                    </span>
                                @endif

                                <!-- Action Icons - Right Side -->
                                <div class="absolute top-2 right-2 sm:top-3 sm:right-3 flex flex-col gap-2 opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300 z-20">
                                    <button type="button" 
                                        data-wishlist-id="{{ $product['id'] }}"
                                        class="wishlist-btn w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-white text-[#654321] flex items-center justify-center shadow-md hover:bg-[#654321] hover:text-white transition z-30">
                                        <i class="fi fi-rr-heart text-xs sm:text-sm"></i>
                                    </button>
                                    <a href="{{ route('product.detail', ['id' => $product['id']]) }}"
                                        class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-white text-[#654321] flex items-center justify-center shadow-md hover:bg-[#654321] hover:text-white transition z-30">
                                        <i class="fi fi-rr-eye text-xs sm:text-sm"></i>
                                    </a>
                                    <button type="button"
                                        class="action-cart w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-white text-[#654321] flex items-center justify-center shadow-md hover:bg-[#654321] hover:text-white transition z-30"
                                        data-product-id="{{ $product['id'] }}" 
                                        data-product-name="{{ $product['name'] }}"
                                        data-product-price="{{ $product['price'] }}"
                                        data-product-image="{{ $product['image'] }}">
                                        <i class="fi fi-rr-shopping-bag text-xs sm:text-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </a>
                        
                        <div class="px-1">
                            <a href="{{ route('product.detail', ['id' => $product['id']]) }}">
                                <h3 class="text-sm sm:text-base font-medium text-black mb-1 sm:mb-2 line-clamp-2 hover:text-[#8B4513] transition-colors">
                                    {{ $product['name'] }}
                                </h3>
                            </a>
                            @if(isset($product['description']))
                                <p class="text-xs text-gray-500 mb-1 line-clamp-1">{{ $product['description'] }}</p>
                            @endif
                            <p class="text-sm sm:text-base text-[#8B4513] font-semibold">
                                ₹{{ number_format($product['price']) }}
                                @if(isset($product['original_price']) && $product['original_price'])
                                    <span class="text-xs text-gray-400 line-through ml-2">₹{{ number_format($product['original_price']) }}</span>
                                @endif
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize wishlist buttons
    const wishlistButtons = document.querySelectorAll('.wishlist-btn');
    
    wishlistButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const productId = this.getAttribute('data-wishlist-id');
            const icon = this.querySelector('i');
            
            if (window.wishlistManager) {
                window.wishlistManager.toggleWishlist(productId);
                const isInWishlist = window.wishlistManager.isInWishlist(productId);
                
                if (isInWishlist) {
                    icon.classList.remove('fi-rr-heart');
                    icon.classList.add('fi-sr-heart', 'text-pink-500');
                    this.classList.add('bg-pink-50');
                } else {
                    icon.classList.remove('fi-sr-heart', 'text-pink-500');
                    icon.classList.add('fi-rr-heart');
                    this.classList.remove('bg-pink-50');
                }
            } else {
                // Fallback
                const wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
                const index = wishlist.indexOf(productId);
                
                if (index > -1) {
                    wishlist.splice(index, 1);
                    icon.classList.remove('fi-sr-heart', 'text-pink-500');
                    icon.classList.add('fi-rr-heart');
                    this.classList.remove('bg-pink-50');
                    if (typeof showToast === 'function') {
                        showToast('Removed from wishlist', 'success');
                    }
                } else {
                    wishlist.push(productId);
                    icon.classList.remove('fi-rr-heart');
                    icon.classList.add('fi-sr-heart', 'text-pink-500');
                    this.classList.add('bg-pink-50');
                    if (typeof showToast === 'function') {
                        showToast('Added to wishlist', 'success');
                    }
                }
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
            }
        });
    });

    // Update wishlist button states on load
    if (window.wishlistManager) {
        wishlistButtons.forEach(btn => {
            const productId = btn.getAttribute('data-wishlist-id');
            const isInWishlist = window.wishlistManager.isInWishlist(productId);
            const icon = btn.querySelector('i');
            
            if (isInWishlist) {
                icon.classList.remove('fi-rr-heart');
                icon.classList.add('fi-sr-heart', 'text-pink-500');
                btn.classList.add('bg-pink-50');
            }
        });
    }
});
</script>

@endsection
