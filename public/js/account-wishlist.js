// Account Wishlist Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    // Mock wishlist data with images from mock data
    const mockWishlist = [
        {
            id: 'cotton-petals-coord-set',
            name: 'Cotton Petals – Soft and Delicate Cotton Co-Ord Set',
            price: 1350,
            originalPrice: 2450,
            discount: 44,
            image: '/images/carousel_img1.webp',
            hoverImage: '/images/carousel_img2_back.webp',
            inStock: true
        },
        {
            id: 'floral-print-anarkali',
            name: 'Floral Print Anarkali Kurti',
            price: 2499,
            originalPrice: 3299,
            discount: 24,
            image: '/images/productimg8.webp',
            hoverImage: '/images/productimg8.webp',
            inStock: true
        },
        {
            id: 'embroidered-straight-cut',
            name: 'Embroidered Straight Cut Kurti',
            price: 2799,
            originalPrice: null,
            discount: null,
            image: '/images/productimg3.webp',
            hoverImage: '/images/productimg3.webp',
            inStock: true
        },
        {
            id: 'printed-a-line-kurti',
            name: 'Printed A-Line Kurti',
            price: 1999,
            originalPrice: 2499,
            discount: 20,
            image: '/images/productimg5.webp',
            hoverImage: '/images/productimg5.webp',
            inStock: true
        }
    ];
    
    const wishlistList = document.getElementById('wishlist-list');
    if (wishlistList) {
        if (mockWishlist.length === 0) {
            wishlistList.innerHTML = '<div class="col-span-full bg-white rounded-xl shadow-lg p-12 text-center"><p class="text-gray-500">Your wishlist is empty</p></div>';
        } else {
            wishlistList.innerHTML = mockWishlist.map(item => `
                <div class="group bg-white rounded-lg overflow-hidden relative">
                    <div class="relative overflow-hidden">
                        <img src="${item.image}" alt="${item.name}" 
                            class="w-full h-64 sm:h-80 object-cover transition-all duration-300 group-hover:scale-105">
                        ${item.hoverImage && item.hoverImage !== item.image ? `
                            <img src="${item.hoverImage}" alt="${item.name}" 
                                class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        ` : ''}
                        ${item.discount ? `
                            <span class="absolute top-2 left-2 px-2 py-1 bg-red-500 text-white text-xs font-semibold rounded">
                                -${item.discount}%
                            </span>
                        ` : ''}
                        <div class="absolute top-2 right-2 flex flex-col gap-2 opacity-0 lg:group-hover:opacity-100 transition-opacity duration-300">
                            <button onclick="removeFromWishlist('${item.id}')" 
                                class="w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-red-50 text-red-500 shadow-md">
                                <i class="fi fi-rr-heart text-sm"></i>
                            </button>
                            <button onclick="quickView('${item.id}')" 
                                class="w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-[#F5F1EB] text-[#654321] shadow-md">
                                <i class="fi fi-rr-eye text-sm"></i>
                            </button>
                            <button onclick="addToCartFromWishlist('${item.id}')" 
                                class="w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-[#8B4513] hover:text-white text-[#654321] shadow-md transition-colors">
                                <i class="fi fi-rr-shopping-bag text-sm"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-[#654321] mb-2 line-clamp-2 text-sm sm:text-base">${item.name}</h3>
                        <div class="flex items-center gap-2">
                            <span class="font-bold text-[#8B4513] text-lg">₹${item.price.toLocaleString()}</span>
                            ${item.originalPrice ? `<span class="text-sm text-gray-400 line-through">₹${item.originalPrice.toLocaleString()}</span>` : ''}
                        </div>
                    </div>
                </div>
            `).join('');
        }
    }
});

function removeFromWishlist(id) {
    if (confirm('Remove from wishlist?')) {
        if (typeof showToast === 'function') {
            showToast('Removed from wishlist', 'success');
        }
        setTimeout(() => location.reload(), 500);
    }
}

function quickView(id) {
    window.location.href = `/product/${id}`;
}

function addToCartFromWishlist(id) {
    if (typeof showToast === 'function') {
        showToast('Added to cart', 'success');
    }
    // Add to cart logic here
}
