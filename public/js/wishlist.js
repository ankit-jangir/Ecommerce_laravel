// Wishlist Page Functions
document.addEventListener('DOMContentLoaded', function() {
    loadWishlist();
});

function loadWishlist() {
    // Get wishlist from localStorage
    const wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
    
    // Update wishlist icons
    if (window.wishlistManager) {
        window.wishlistManager.updateWishlistIcons();
    }
    
    // Mock products data (from MockData)
    const mockProducts = [
        {
            id: 'cotton-petals-coord-set',
            name: 'Cotton Petals – Soft and Delicate Cotton Co-Ord Set',
            price: 1350,
            originalPrice: 2450,
            discount: 44,
            image: '/images/carousel_img1.webp',
            hoverImage: '/images/carousel_img2_back.webp'
        },
        {
            id: 'floral-print-anarkali',
            name: 'Floral Print Anarkali Kurti',
            price: 2499,
            originalPrice: 3299,
            discount: 24,
            image: '/images/productimg8.webp'
        },
        {
            id: 'embroidered-straight-cut',
            name: 'Embroidered Straight Cut Kurti',
            price: 2799,
            originalPrice: null,
            discount: null,
            image: '/images/productimg3.webp'
        },
        {
            id: 'printed-a-line-kurti',
            name: 'Printed A-Line Kurti',
            price: 1999,
            originalPrice: 2499,
            discount: 20,
            image: '/images/productimg5.webp'
        }
    ];
    
    // If wishlist is empty, show mock data
    const displayProducts = wishlist.length > 0 ? wishlist : mockProducts;
    
    const wishlistList = document.getElementById('wishlist-list');
    if (wishlistList) {
        if (displayProducts.length === 0) {
            wishlistList.innerHTML = '<div class="col-span-full text-center py-12"><p class="text-gray-500">Your wishlist is empty</p></div>';
        } else {
            wishlistList.innerHTML = displayProducts.map(product => {
                const productData = typeof product === 'string' ? mockProducts.find(p => p.id === product) : product;
                if (!productData) return '';
                
                return `
                    <div class="product-card group cursor-pointer bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                        <div class="relative overflow-hidden">
                            <div class="relative h-64 sm:h-80">
                                <img src="${productData.image}" alt="${productData.name}" 
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 ${productData.hoverImage ? 'group-hover:opacity-0 absolute inset-0' : ''}">
                                ${productData.hoverImage ? `<img src="${productData.hoverImage}" alt="${productData.name}" class="w-full h-full object-cover transition-opacity duration-500 opacity-0 group-hover:opacity-100">` : ''}
                            </div>
                            ${productData.discount ? `<span class="absolute top-2 left-2 px-2 py-1 bg-red-500 text-white text-xs font-semibold rounded">-${productData.discount}%</span>` : ''}
                            <div class="absolute top-2 right-2 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button onclick="removeFromWishlist('${productData.id}')" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-red-50 text-red-500 shadow-md">
                                    <i class="fi fi-rr-heart text-lg"></i>
                                </button>
                                <button onclick="quickView('${productData.id}')" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-[#F5F1EB] text-[#654321] shadow-md">
                                    <i class="fi fi-rr-eye text-lg"></i>
                                </button>
                                <button onclick="addToCartFromWishlist('${productData.id}')" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-[#F5F1EB] text-[#654321] shadow-md">
                                    <i class="fi fi-rr-shopping-bag text-lg"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-semibold text-[#654321] mb-2 line-clamp-2 text-sm sm:text-base">${productData.name}</h3>
                            <div class="flex items-center gap-2">
                                <span class="font-bold text-[#8B4513] text-base sm:text-lg">Rs. ${productData.price.toLocaleString()}</span>
                                ${productData.originalPrice ? `<span class="text-sm text-gray-400 line-through">Rs. ${productData.originalPrice.toLocaleString()}</span>` : ''}
                            </div>
                            <button onclick="removeFromWishlist('${productData.id}')" 
                                class="mt-3 w-full px-4 py-2 ${wishlist.includes(productData.id) ? 'bg-[#654321] text-white' : 'border border-[#654321] text-[#654321]'} rounded-lg hover:bg-[#654321] hover:text-white transition-colors text-sm font-medium">
                                <i class="fi ${wishlist.includes(productData.id) ? 'fi-sr' : 'fi-rr'}-heart mr-2"></i>
                                ${wishlist.includes(productData.id) ? 'In Wishlist' : 'Add to Wishlist'}
                            </button>
                        </div>
                    </div>
                `;
            }).join('');
        }
    }
}

function removeFromWishlist(productId) {
    const wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
    const updated = wishlist.filter(id => id !== productId);
    localStorage.setItem('wishlist', JSON.stringify(updated));
    showToast('Removed from wishlist', 'success');
    loadWishlist();
}

function quickView(productId) {
    window.location.href = `/product/${productId}`;
}

function addToCartFromWishlist(productId) {
    // Get product data
    const mockProducts = [
        { id: 'cotton-petals-coord-set', name: 'Cotton Petals – Soft and Delicate Cotton Co-Ord Set', price: 1350, image: '/images/carousel_img1.webp' },
        { id: 'floral-print-anarkali', name: 'Floral Print Anarkali Kurti', price: 2499, image: '/images/productimg8.webp' },
        { id: 'embroidered-straight-cut', name: 'Embroidered Straight Cut Kurti', price: 2799, image: '/images/productimg3.webp' },
        { id: 'printed-a-line-kurti', name: 'Printed A-Line Kurti', price: 1999, image: '/images/productimg5.webp' }
    ];
    
    const product = mockProducts.find(p => p.id === productId);
    if (product && window.cartManager) {
        window.cartManager.addToCart({
            id: product.id,
            name: product.name,
            price: product.price,
            image: product.image,
            size: 'M',
            quantity: 1
        });
    }
}

