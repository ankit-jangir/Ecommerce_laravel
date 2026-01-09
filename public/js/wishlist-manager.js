// Wishlist Manager
class WishlistManager {
    constructor() {
        // Clean wishlist - remove any invalid entries
        const stored = localStorage.getItem('wishlist');
        if (stored) {
            try {
                const parsed = JSON.parse(stored);
                // Ensure it's an array and filter out any invalid values
                this.wishlist = Array.isArray(parsed) ? parsed.filter(id => id && typeof id === 'string') : [];
            } catch (e) {
                this.wishlist = [];
            }
        } else {
            this.wishlist = [];
        }
        // Save cleaned wishlist
        if (stored) {
            localStorage.setItem('wishlist', JSON.stringify(this.wishlist));
        }
    }

    toggleWishlist(productId) {
        const index = this.wishlist.indexOf(productId);
        
        if (index > -1) {
            // Remove from wishlist
            this.wishlist.splice(index, 1);
            if (typeof showToast === 'function') {
                showToast('Removed from wishlist', 'success');
            }
        } else {
            // Add to wishlist
            this.wishlist.push(productId);
            if (typeof showToast === 'function') {
                showToast('Added to wishlist', 'success');
            }
        }
        
        this.saveWishlist();
        this.updateWishlistIcons();
        // Ensure count is updated after toggle
        this.updateWishlistCount();
    }

    isInWishlist(productId) {
        return this.wishlist.includes(productId);
    }

    saveWishlist() {
        localStorage.setItem('wishlist', JSON.stringify(this.wishlist));
        this.updateWishlistCount();
    }

    updateWishlistCount() {
        // Update wishlist count badge in header
        const wishlistCount = document.getElementById('wishlist-count');
        if (wishlistCount) {
            // Ensure wishlist is clean and get actual count
            const actualWishlist = Array.isArray(this.wishlist) ? this.wishlist.filter(id => id && typeof id === 'string') : [];
            const count = actualWishlist.length;
            
            // Update the wishlist array if it was cleaned
            if (actualWishlist.length !== this.wishlist.length) {
                this.wishlist = actualWishlist;
                this.saveWishlist();
            }
            
            wishlistCount.textContent = count;
            wishlistCount.classList.toggle('hidden', count === 0);
        }
    }

    updateWishlistIcons() {
        // Update all wishlist icons on the page (including .wishlist-btn class)
        document.querySelectorAll('[data-wishlist-id], .wishlist-btn[data-wishlist-id]').forEach(btn => {
            const productId = btn.getAttribute('data-wishlist-id');
            if (!productId) return;
            
            const icon = btn.querySelector('i');
            const isInWishlist = this.isInWishlist(productId);
            
            if (isInWishlist) {
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
        this.updateWishlistCount();
    }
}

// Initialize wishlist manager
let wishlistManager;
document.addEventListener('DOMContentLoaded', function() {
    wishlistManager = new WishlistManager();
    window.wishlistManager = wishlistManager;
    
    // Ensure count is correct on load
    wishlistManager.updateWishlistCount();
    wishlistManager.updateWishlistIcons();
    
    // Double check count after a short delay
    setTimeout(() => {
        wishlistManager.updateWishlistCount();
    }, 100);
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

