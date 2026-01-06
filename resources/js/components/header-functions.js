// Header Functions - Search, User, Cart, Mobile Menu
(function() {
    'use strict';
    
    // Initialize all functionality when DOM is ready
    function initHeaderFunctions() {
        // Right Side Search Panel
        const searchToggle = document.getElementById('search-toggle');
        const searchPanel = document.getElementById('search-panel');
        const searchPanelClose = document.getElementById('search-panel-close');
        const searchPanelInput = document.getElementById('search-panel-input');
        const searchPanelResults = document.getElementById('search-panel-results');
        const searchResultsList = document.getElementById('search-results-list');
        
        if (searchToggle && searchPanel) {
            searchToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                searchPanel.classList.remove('translate-x-full');
                document.body.style.overflow = 'hidden';
                setTimeout(() => {
                    if (searchPanelInput) {
                        searchPanelInput.focus();
                    }
                }, 100);
            });
        }
        
        if (searchPanelClose && searchPanel) {
            searchPanelClose.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                searchPanel.classList.add('translate-x-full');
                document.body.style.overflow = '';
            });
        }
        
        // Close search panel on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && searchPanel && !searchPanel.classList.contains('translate-x-full')) {
                searchPanel.classList.add('translate-x-full');
                document.body.style.overflow = '';
            }
        });
        
        // Search functionality for right panel
        if (searchPanelInput && searchResultsList) {
            searchPanelInput.addEventListener('input', function(e) {
                const query = e.target.value.trim();
                
                if (query.length > 0 && searchPanelResults) {
                    searchPanelResults.classList.remove('hidden');
                    // Simulate search results
                    searchResultsList.innerHTML = `
                        <div class="p-4 border border-gray-200 rounded-lg hover:bg-[#F5F1EB] cursor-pointer transition-colors">
                            <p class="font-semibold text-[#654321]">${query} - Women's Kurti</p>
                            <p class="text-sm text-gray-500">Elegant and modern design</p>
                            <p class="text-sm font-semibold text-[#8B4513] mt-1">₹1,999</p>
                        </div>
                        <div class="p-4 border border-gray-200 rounded-lg hover:bg-[#F5F1EB] cursor-pointer transition-colors">
                            <p class="font-semibold text-[#654321]">${query} - Men's Kurta</p>
                            <p class="text-sm text-gray-500">Traditional with modern twist</p>
                            <p class="text-sm font-semibold text-[#8B4513] mt-1">₹2,499</p>
                        </div>
                        <div class="p-4 border border-gray-200 rounded-lg hover:bg-[#F5F1EB] cursor-pointer transition-colors">
                            <p class="font-semibold text-[#654321]">${query} - Combo Set</p>
                            <p class="text-sm text-gray-500">Complete ethnic set</p>
                            <p class="text-sm font-semibold text-[#8B4513] mt-1">₹3,999</p>
                        </div>
                    `;
                } else if (searchPanelResults) {
                    searchPanelResults.classList.add('hidden');
                }
            });
            
            // Search on Enter key
            searchPanelInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    const query = e.target.value.trim();
                    if (query.length > 0) {
                        // Redirect to search results page
                        window.location.href = `/search?q=${encodeURIComponent(query)}`;
                    }
                }
            });
        }
        
        // User Modal
        const userToggle = document.getElementById('user-toggle');
        const userModal = document.getElementById('user-modal');
        const userClose = document.getElementById('user-close');
        
        function openUserModal() {
            if (userModal) {
                userModal.classList.remove('hidden');
                userModal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }
        }
        
        function closeUserModal() {
            if (userModal) {
                userModal.classList.add('hidden');
                userModal.classList.remove('flex');
                document.body.style.overflow = '';
            }
        }
        
        if (userToggle) {
            userToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                openUserModal();
            });
        }
        
        if (userClose) {
            userClose.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                closeUserModal();
            });
        }
        
        if (userModal) {
            userModal.addEventListener('click', function(e) {
                if (e.target === userModal) {
                    closeUserModal();
                }
            });
        }
        
        // Close user modal on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && userModal && !userModal.classList.contains('hidden')) {
                closeUserModal();
            }
        });
        
        // Cart Sidebar
        const cartToggle = document.getElementById('cart-toggle');
        const cartSidebar = document.getElementById('cart-sidebar');
        const cartClose = document.getElementById('cart-close');
        
        if (cartToggle && cartSidebar) {
            cartToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                cartSidebar.classList.remove('translate-x-full');
                document.body.style.overflow = 'hidden';
            });
        }
        
        if (cartClose && cartSidebar) {
            cartClose.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                cartSidebar.classList.add('translate-x-full');
                document.body.style.overflow = '';
            });
        }
        
        // Mobile Left Side Menu Toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        
        function openMobileMenu() {
            if (mobileMenu && mobileMenuOverlay) {
                mobileMenu.classList.remove('-translate-x-full');
                mobileMenuOverlay.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }
        }
        
        function closeMobileMenu() {
            if (mobileMenu && mobileMenuOverlay) {
                mobileMenu.classList.add('-translate-x-full');
                mobileMenuOverlay.classList.add('hidden');
                document.body.style.overflow = '';
                // Close all submenus when closing main menu
                const submenus = document.querySelectorAll('.mobile-menu-submenu');
                submenus.forEach(submenu => {
                    submenu.classList.add('hidden');
                });
                const toggles = document.querySelectorAll('.mobile-submenu-toggle i');
                toggles.forEach(toggle => {
                    toggle.classList.remove('rotate-180');
                });
            }
        }
        
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                openMobileMenu();
            });
        }
        
        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                closeMobileMenu();
            });
        }
        
        if (mobileMenuOverlay) {
            mobileMenuOverlay.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                closeMobileMenu();
            });
        }
        
        // Mobile Menu Accordion - Toggle Submenus
        const mobileSubmenuToggles = document.querySelectorAll('.mobile-submenu-toggle');
        mobileSubmenuToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const menuItem = this.closest('.mobile-menu-item');
                if (!menuItem) return;
                
                const submenu = menuItem.querySelector('.mobile-menu-submenu');
                const icon = this.querySelector('i');
                
                if (submenu && icon) {
                    // Close other submenus
                    document.querySelectorAll('.mobile-menu-submenu').forEach(menu => {
                        if (menu !== submenu) {
                            menu.classList.add('hidden');
                        }
                    });
                    document.querySelectorAll('.mobile-submenu-toggle i').forEach(i => {
                        if (i !== icon) {
                            i.classList.remove('rotate-180');
                        }
                    });
                    
                    // Toggle current submenu
                    submenu.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                }
            });
        });
        
        // Close mobile menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (mobileMenu && !mobileMenu.classList.contains('-translate-x-full')) {
                    closeMobileMenu();
                }
            }
        });
    }
    
    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(initHeaderFunctions, 50);
        });
    } else {
        // DOM is already loaded
        setTimeout(initHeaderFunctions, 50);
    }
    
    // Backup initialization on window load
    window.addEventListener('load', function() {
        setTimeout(initHeaderFunctions, 100);
    });
})();

// Add to cart functionality (example)
window.addToCart = function(productId, productName, price) {
    const cartCount = document.getElementById('cart-count');
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    
    if (cartCount) {
        const currentCount = parseInt(cartCount.textContent) || 0;
        cartCount.textContent = currentCount + 1;
    }
    
    // Update cart items
    if (cartItems) {
        const itemHTML = `
            <div class="flex items-center gap-4 p-4 border border-gray-200 rounded-lg">
                <div class="w-16 h-16 bg-gray-200 rounded"></div>
                <div class="flex-1">
                    <h4 class="font-semibold text-[#654321]">${productName}</h4>
                    <p class="text-[#8B4513] font-bold">${price}</p>
                </div>
                <button class="text-red-500 hover:text-red-700">
                    <i class="fi fi-rr-trash"></i>
                </button>
            </div>
        `;
        cartItems.innerHTML = itemHTML + cartItems.innerHTML;
    }
    
    // Update total
    if (cartTotal) {
        const currentTotal = parseInt(cartTotal.textContent.replace('₹', '').replace(',', '')) || 0;
        const newTotal = currentTotal + parseInt(price.replace('₹', '').replace(',', ''));
        cartTotal.textContent = `₹${newTotal.toLocaleString()}`;
    }
};

