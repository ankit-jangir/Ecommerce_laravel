// Cart Functionality (Static - using localStorage)
class CartManager {
    constructor() {
        this.cart = JSON.parse(localStorage.getItem('cart') || '[]');
        this.updateCartUI();
    }

    addToCart(product, showNotification = true) {
        const existingItem = this.cart.find(item => item.id === product.id && item.size === product.size);
        
        if (existingItem) {
            // Already in cart - remove it (toggle behavior)
            this.removeFromCart(product.id, product.size || 'M');
            return;
        }
        
        // Add new item to cart
        this.cart.push({
            id: product.id,
            name: product.name,
            image: product.image || '',
            price: product.price,
            quantity: product.quantity || 1,
            size: product.size || 'M',
            color: product.color || ''
        });
        
        this.saveCart();
        this.updateCartUI();
        this.updateCartButtons(product.id, false);
        if (showNotification && typeof showToast === 'function') {
            showToast('Product added to cart!', 'success');
        }
    }
    
    updateCartButtons(productId, keepAdded = false) {
        // Update cart button state
        document.querySelectorAll(`[data-product-id="${productId}"].action-cart`).forEach(btn => {
            const isInCart = this.cart.some(item => item.id === productId);
            
            if (isInCart) {
                // Product is in cart - show added state (theme color)
                btn.classList.add('bg-[#8B4513]', 'text-white');
                btn.classList.remove('bg-white', 'text-[#654321]', 'hover:bg-[#654321]', 'hover:text-white');
                const icon = btn.querySelector('i');
                if (icon) {
                    icon.className = 'fi fi-rr-check text-xs sm:text-sm';
                }
            } else {
                // Not in cart - show normal state
                btn.classList.remove('bg-[#8B4513]', 'text-white');
                btn.classList.add('bg-white', 'text-[#654321]', 'hover:bg-[#654321]', 'hover:text-white');
                const icon = btn.querySelector('i');
                if (icon) {
                    icon.className = 'fi fi-rr-shopping-bag text-xs sm:text-sm';
                }
            }
        });
    }
    
    updateAllCartButtons() {
        // Update all cart buttons on page load
        document.querySelectorAll('.action-cart').forEach(btn => {
            const productId = btn.getAttribute('data-product-id');
            if (productId) {
                this.updateCartButtons(productId, true);
            }
        });
    }

    removeFromCart(productId, size) {
        const itemToRemove = this.cart.find(item => item.id === productId && item.size === size);
        this.cart = this.cart.filter(item => !(item.id === productId && item.size === size));
        this.saveCart();
        this.updateCartUI();
        // Update button state when removed - immediately change to normal
        this.updateCartButtons(productId, false);
        if (typeof showToast === 'function') {
            showToast('Product removed from cart', 'success');
        }
        return itemToRemove;
    }

    updateQuantity(productId, size, quantity) {
        const item = this.cart.find(item => item.id === productId && item.size === size);
        if (item) {
            if (quantity <= 0) {
                this.removeFromCart(productId, size);
            } else {
                item.quantity = quantity;
                this.saveCart();
                this.updateCartUI();
                // Update button state
                this.updateCartButtons(productId, false);
            }
        }
    }

    getTotal() {
        return this.cart.reduce((total, item) => total + (item.price * item.quantity), 0);
    }

    getCount() {
        return this.cart.reduce((count, item) => count + item.quantity, 0);
    }

    saveCart() {
        localStorage.setItem('cart', JSON.stringify(this.cart));
    }

    updateCartUI() {
        // Update cart count badge
        const cartCount = document.getElementById('cart-count');
        if (cartCount) {
            const count = this.getCount();
            cartCount.textContent = count;
            cartCount.classList.toggle('hidden', count === 0);
        }

        // Update cart sidebar
        const cartItems = document.getElementById('cart-items');
        const cartTotal = document.getElementById('cart-total');
        
        if (cartItems) {
            if (this.cart.length === 0) {
                cartItems.innerHTML = `
                    <div class="text-center py-12">
                        <i class="fi fi-rr-shopping-bag text-6xl text-gray-300 mb-4"></i>
                        <p class="text-gray-500">Your cart is empty</p>
                    </div>
                `;
            } else {
                cartItems.innerHTML = `
                    <h3 class="text-sm font-semibold text-[#654321] mb-4">Products</h3>
                ` + this.cart.map(item => `
                    <div class="flex gap-4 p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow" data-product-id="${item.id}" data-size="${item.size}">
                        <img src="${item.image || 'https://via.placeholder.com/80'}" alt="${item.name}" 
                            class="w-20 h-20 object-cover rounded-lg flex-shrink-0">
                        <div class="flex-1 min-w-0">
                            <h4 class="font-semibold text-[#654321] text-sm mb-1">${item.name}</h4>
                            <p class="text-xs text-gray-500 mb-1">Size: ${item.size}${item.color ? ' | Color: ' + item.color : ''}</p>
                            <p class="font-bold text-[#8B4513] text-sm mb-2">₹${item.price.toLocaleString()} x ${item.quantity}</p>
                            <div class="flex items-center gap-2">
                                <button onclick="if(window.cartManager) window.cartManager.updateQuantity('${item.id}', '${item.size}', ${item.quantity - 1})" 
                                    class="w-7 h-7 bg-gray-200 rounded flex items-center justify-center hover:bg-gray-300 transition-colors text-[#654321] font-semibold">-</button>
                                <span class="w-8 text-center font-semibold text-[#654321]">${item.quantity}</span>
                                <button onclick="if(window.cartManager) window.cartManager.updateQuantity('${item.id}', '${item.size}', ${item.quantity + 1})" 
                                    class="w-7 h-7 bg-gray-200 rounded flex items-center justify-center hover:bg-gray-300 transition-colors text-[#654321] font-semibold">+</button>
                            </div>
                        </div>
                        <button onclick="if(window.cartManager) window.cartManager.removeFromCart('${item.id}', '${item.size}')" 
                            class="text-red-500 hover:text-red-700 p-2 hover:bg-red-50 rounded-lg transition-colors flex-shrink-0 self-start" title="Remove from cart">
                            <i class="fi fi-rr-trash text-lg"></i>
                        </button>
                    </div>
                `).join('');
            }
        }

        if (cartTotal) {
            cartTotal.textContent = '₹' + this.getTotal().toLocaleString();
        }
    }
}

// Initialize cart manager
let cartManager;
document.addEventListener('DOMContentLoaded', function() {
    cartManager = new CartManager();
    window.cartManager = cartManager; // Make it globally accessible
    // Update all cart buttons to show added state if products are in cart
    setTimeout(() => {
        cartManager.updateAllCartButtons();
    }, 100);
});

// Add to cart buttons
document.addEventListener('DOMContentLoaded', function() {
    // Handle add to cart buttons
    document.addEventListener('click', (e) => {
        const addToCartBtn = e.target.closest('.add-to-cart-btn');
        if (addToCartBtn && cartManager) {
            e.preventDefault();
            const product = {
                id: addToCartBtn.dataset.productId,
                name: addToCartBtn.dataset.productName,
                price: parseFloat(addToCartBtn.dataset.productPrice),
                image: addToCartBtn.dataset.productImage || '',
                size: addToCartBtn.dataset.productSize || 'M',
                quantity: parseInt(addToCartBtn.dataset.productQuantity || 1)
            };
            cartManager.addToCart(product);
        }
    });
});

// Checkout handler
function handleCheckout() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    const cart = JSON.parse(localStorage.getItem('cart') || '[]');
    
    if (cart.length === 0) {
        if (typeof showToast === 'function') {
            showToast('Your cart is empty', 'error');
        }
        return;
    }
    
    if (!currentUser) {
        if (typeof showToast === 'function') {
            showToast('Please login to checkout', 'error');
        }
        setTimeout(() => {
            window.location.href = '/login';
        }, 1500);
        return;
    }
    
    // Close cart sidebar
    const cartSidebar = document.getElementById('cart-sidebar');
    if (cartSidebar) {
        cartSidebar.classList.add('translate-x-full');
        document.body.style.overflow = '';
    }
    
    // Redirect to checkout
    window.location.href = '/checkout';
}

// Make handleCheckout globally accessible
window.handleCheckout = handleCheckout;

