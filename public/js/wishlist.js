// Wishlist Page Functions
document.addEventListener('DOMContentLoaded', function() {
    loadWishlist();
    // Update buttons after initial load
    setTimeout(() => {
        if (window.cartManager) {
            window.cartManager.updateAllCartButtons();
        }
        updateWishlistPageButtons();
    }, 300);
});

function loadWishlist() {
    // Get wishlist from localStorage - clean it first
    let wishlist = [];
    try {
        const stored = localStorage.getItem('wishlist');
        if (stored) {
            const parsed = JSON.parse(stored);
            wishlist = Array.isArray(parsed) ? parsed.filter(id => id && typeof id === 'string') : [];
            // Save cleaned wishlist
            localStorage.setItem('wishlist', JSON.stringify(wishlist));
        }
    } catch (e) {
        wishlist = [];
        localStorage.setItem('wishlist', JSON.stringify(wishlist));
    }
    
    // Update wishlist manager
    if (window.wishlistManager) {
        window.wishlistManager.wishlist = wishlist;
        window.wishlistManager.updateWishlistIcons();
        window.wishlistManager.updateWishlistCount();
    }
    
    // Update cart buttons state
    if (window.cartManager) {
        setTimeout(() => {
            window.cartManager.updateAllCartButtons();
        }, 100);
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
    
    const wishlistList = document.getElementById('wishlist-list');
    if (wishlistList) {
        if (wishlist.length === 0) {
            // Show empty state when wishlist is empty
            wishlistList.innerHTML = `
                <div class="col-span-full flex flex-col items-center justify-center py-16 sm:py-20">
                    <div class="mb-6">
                        <i class="fi fi-rr-heart text-6xl sm:text-7xl text-gray-300"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-serif font-bold text-[#654321] mb-3">No Products in Wishlist</h3>
                    <p class="text-gray-500 text-sm sm:text-base mb-6 text-center max-w-md">Start adding products you love to your wishlist!</p>
                    <a href="/shop" class="px-6 py-3 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors font-semibold text-sm sm:text-base">
                        <i class="fi fi-rr-shopping-bag mr-2"></i>Shop Now
                    </a>
                </div>
            `;
        } else {
            // Display wishlist products
            wishlistList.innerHTML = wishlist.map(productId => {
                const productData = mockProducts.find(p => p.id === productId);
                if (!productData) return '';
                
                return `
                    <div class="product-card group cursor-pointer bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300" onclick="handleWishlistCardClick('${productData.id}')">
                        <div class="relative overflow-hidden">
                            <div class="relative h-64 sm:h-80">
                                <img src="${productData.image}" alt="${productData.name}" 
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 ${productData.hoverImage ? 'group-hover:opacity-0 absolute inset-0' : ''}">
                                ${productData.hoverImage ? `<img src="${productData.hoverImage}" alt="${productData.name}" class="w-full h-full object-cover transition-opacity duration-500 opacity-0 group-hover:opacity-100">` : ''}
                            </div>
                            ${productData.discount ? `<span class="absolute top-2 left-2 px-2 py-1 bg-red-500 text-white text-xs font-semibold rounded">-${productData.discount}%</span>` : ''}
                            <div class="absolute top-2 right-2 flex flex-col gap-2 opacity-100 lg:opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                                <button onclick="event.stopPropagation(); toggleWishlistFromPage('${productData.id}')" 
                                    class="wishlist-btn w-10 h-10 rounded-full flex items-center justify-center shadow-md ${wishlist.includes(productData.id) ? 'bg-[#654321] text-white' : 'bg-white text-[#654321]'}"
                                    data-wishlist-id="${productData.id}">
                                    <i class="fi ${wishlist.includes(productData.id) ? 'fi-sr' : 'fi-rr'}-heart text-lg"></i>
                                </button>
                                <button onclick="event.stopPropagation(); quickView('${productData.id}')" class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:bg-[#F5F1EB] text-[#654321] shadow-md">
                                    <i class="fi fi-rr-eye text-lg"></i>
                                </button>
                                <button onclick="event.stopPropagation(); addToCartFromWishlist('${productData.id}')" 
                                    class="action-cart w-10 h-10 rounded-full flex items-center justify-center shadow-md bg-white text-[#654321]"
                                    data-product-id="${productData.id}" 
                                    data-product-name="${productData.name.replace(/'/g, "\\'")}" 
                                    data-product-price="${productData.price}" 
                                    data-product-image="${productData.image}">
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
                            <button onclick="event.stopPropagation(); toggleWishlistFromPage('${productData.id}')" 
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
    
    // Update wishlist manager if available
    if (window.wishlistManager) {
        window.wishlistManager.wishlist = updated;
        window.wishlistManager.updateWishlistIcons();
        window.wishlistManager.updateWishlistCount();
    }
    
    if (typeof showToast === 'function') {
        showToast('Removed from wishlist', 'success');
    }
    loadWishlist();
}

function handleWishlistCardClick(productId) {
    // Check if click was on a button (don't navigate if button was clicked)
    if (event.target.closest('button') || event.target.closest('a')) {
        return;
    }
    // Navigate to product details
    window.location.href = `/product/${productId}`;
}

function toggleWishlistFromPage(productId) {
    if (window.wishlistManager) {
        window.wishlistManager.toggleWishlist(productId);
        loadWishlist(); // Reload to update UI
        updateWishlistPageButtons(); // Update button states
    } else {
        // Fallback if wishlistManager not available
        const wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
        const index = wishlist.indexOf(productId);
        
        if (index > -1) {
            wishlist.splice(index, 1);
            if (typeof showToast === 'function') {
                showToast('Removed from wishlist', 'success');
            }
        } else {
            wishlist.push(productId);
            if (typeof showToast === 'function') {
                showToast('Added to wishlist', 'success');
            }
        }
        localStorage.setItem('wishlist', JSON.stringify(wishlist));
        loadWishlist();
    }
}

// Update wishlist buttons on wishlist page after load
function updateWishlistPageButtons() {
    if (window.wishlistManager) {
        setTimeout(() => {
            // Update wishlist buttons on wishlist page
            document.querySelectorAll('.wishlist-btn').forEach(btn => {
                const productId = btn.getAttribute('data-wishlist-id');
                if (productId && window.wishlistManager.isInWishlist(productId)) {
                    btn.classList.add('bg-[#654321]', 'text-white');
                    btn.classList.remove('bg-white', 'text-[#654321]');
                    const icon = btn.querySelector('i');
                    if (icon) {
                        icon.classList.remove('fi-rr-heart');
                        icon.classList.add('fi-sr-heart');
                    }
                } else {
                    btn.classList.remove('bg-[#654321]', 'text-white');
                    btn.classList.add('bg-white', 'text-[#654321]');
                    const icon = btn.querySelector('i');
                    if (icon) {
                        icon.classList.add('fi-rr-heart');
                        icon.classList.remove('fi-sr-heart');
                    }
                }
            });
        }, 200);
    }
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
        // Toast will be shown by cartManager.addToCart
    } else if (typeof showToast === 'function') {
        showToast('Product added to cart!', 'success');
    }
}

