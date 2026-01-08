// Wishlist Manager
class WishlistManager {
    constructor() {
        this.wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
    }

    toggleWishlist(productId) {
        const index = this.wishlist.indexOf(productId);
        
        if (index > -1) {
            // Remove from wishlist
            this.wishlist.splice(index, 1);
            showToast('Removed from wishlist', 'success');
        } else {
            // Add to wishlist
            this.wishlist.push(productId);
            showToast('Added to wishlist', 'success');
        }
        
        this.saveWishlist();
        this.updateWishlistIcons();
    }

    isInWishlist(productId) {
        return this.wishlist.includes(productId);
    }

    saveWishlist() {
        localStorage.setItem('wishlist', JSON.stringify(this.wishlist));
    }

    updateWishlistIcons() {
        // Update all wishlist icons on the page
        document.querySelectorAll('[data-wishlist-id]').forEach(btn => {
            const productId = btn.getAttribute('data-wishlist-id');
            const icon = btn.querySelector('i');
            
            if (this.isInWishlist(productId)) {
                // In wishlist - theme color
                btn.classList.add('bg-[#654321]', 'text-white');
                btn.classList.remove('bg-white', 'text-[#654321]');
                if (icon) {
                    icon.classList.remove('fi-rr-heart');
                    icon.classList.add('fi-sr-heart');
                }
            } else {
                // Not in wishlist - white bg
                btn.classList.remove('bg-[#654321]', 'text-white');
                btn.classList.add('bg-white', 'text-[#654321]');
                if (icon) {
                    icon.classList.add('fi-rr-heart');
                    icon.classList.remove('fi-sr-heart');
                }
            }
        });
    }
}

// Initialize wishlist manager
let wishlistManager;
document.addEventListener('DOMContentLoaded', function() {
    wishlistManager = new WishlistManager();
    window.wishlistManager = wishlistManager;
    wishlistManager.updateWishlistIcons();
});

// Handle wishlist button clicks
document.addEventListener('click', (e) => {
    const wishlistBtn = e.target.closest('[data-wishlist-id]');
    if (wishlistBtn && wishlistManager) {
        e.preventDefault();
        e.stopPropagation();
        const productId = wishlistBtn.getAttribute('data-wishlist-id');
        wishlistManager.toggleWishlist(productId);
    }
});

