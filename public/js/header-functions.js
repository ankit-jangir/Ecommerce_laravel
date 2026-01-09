// Header Functions
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    
    if (mobileMenuToggle) {
        mobileMenuToggle.onclick = () => {
            mobileMenu.classList.remove('-translate-x-full');
            mobileMenuOverlay?.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        };
    }
    
    [mobileMenuClose, mobileMenuOverlay].forEach(el => {
        if (el) el.onclick = () => {
            mobileMenu.classList.add('-translate-x-full');
            mobileMenuOverlay?.classList.add('hidden');
            document.body.style.overflow = '';
        };
    });
    
    // Search Panel
    const searchToggle = document.getElementById('search-toggle');
    const searchPanel = document.getElementById('search-panel');
    const searchPanelClose = document.getElementById('search-panel-close');
    
    if (searchToggle) {
        searchToggle.onclick = () => {
            searchPanel.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
            // Focus search input
            setTimeout(() => {
                const searchInput = document.getElementById('search-panel-input');
                if (searchInput) searchInput.focus();
            }, 300);
        };
    }
    
    if (searchPanelClose) {
        searchPanelClose.onclick = () => {
            searchPanel.classList.add('translate-x-full');
            document.body.style.overflow = '';
        };
    }
    
    // User Modal (for non-logged in users)
    const userToggle = document.getElementById('user-toggle');
    const userModal = document.getElementById('user-modal');
    const userClose = document.getElementById('user-close');
    
    if (userToggle) {
        userToggle.onclick = () => {
            userModal.classList.remove('hidden');
            userModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        };
    }
    
    [userClose, userModal].forEach(el => {
        if (el) el.onclick = (e) => {
            if (e.target === userModal || e.target === el) {
                userModal.classList.add('hidden');
                userModal.classList.remove('flex');
                document.body.style.overflow = '';
            }
        };
    });
    
    // Cart Sidebar
    const cartToggle = document.getElementById('cart-toggle');
    const cartSidebar = document.getElementById('cart-sidebar');
    const cartClose = document.getElementById('cart-close');
    
    if (cartToggle) {
        cartToggle.onclick = () => {
            cartSidebar.classList.remove('translate-x-full');
            document.body.style.overflow = 'hidden';
        };
    }
    
    if (cartClose) {
        cartClose.onclick = () => {
            cartSidebar.classList.add('translate-x-full');
            document.body.style.overflow = '';
        };
    }
    
    // Mobile Menu Submenu Toggle - Close all by default, user can open
    // First, close all submenus on page load
    document.querySelectorAll('.mobile-menu-submenu').forEach(submenu => {
        submenu.classList.add('hidden');
    });
    
    // Then set up toggle functionality
    document.querySelectorAll('.mobile-submenu-toggle').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const menuItem = this.closest('.mobile-menu-item');
            const submenu = menuItem.querySelector('.mobile-menu-submenu');
            const icon = this.querySelector('i');
            
            if (submenu) {
                const isHidden = submenu.classList.contains('hidden');
                
                if (isHidden) {
                    submenu.classList.remove('hidden');
                    icon.classList.remove('fi-rr-angle-small-down');
                    icon.classList.add('fi-rr-angle-small-up');
                } else {
                    submenu.classList.add('hidden');
                    icon.classList.remove('fi-rr-angle-small-up');
                    icon.classList.add('fi-rr-angle-small-down');
                }
            }
        });
    });
    
    // Nested Submenu Toggle (for Kurtis under Women)
    document.querySelectorAll('.mobile-submenu-toggle-nested').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const menuItem = this.closest('.mobile-menu-item-nested');
            const submenu = menuItem.querySelector('.mobile-menu-submenu-nested');
            const icon = this.querySelector('i');
            
            if (submenu) {
                const isHidden = submenu.classList.contains('hidden');
                
                if (isHidden) {
                    submenu.classList.remove('hidden');
                    icon.classList.remove('fi-rr-angle-small-down');
                    icon.classList.add('fi-rr-angle-small-up');
                } else {
                    submenu.classList.add('hidden');
                    icon.classList.remove('fi-rr-angle-small-up');
                    icon.classList.add('fi-rr-angle-small-down');
                }
            }
        });
    });
    
    // Nested Submenu Toggle (for Kurtis under Women, etc.)
    document.querySelectorAll('.mobile-submenu-toggle-nested').forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            const menuItem = this.closest('.mobile-menu-item-nested');
            const submenu = menuItem.querySelector('.mobile-menu-submenu-nested');
            const icon = this.querySelector('i');
            
            if (submenu) {
                const isHidden = submenu.classList.contains('hidden');
                
                if (isHidden) {
                    submenu.classList.remove('hidden');
                    icon.classList.remove('fi-rr-angle-small-down');
                    icon.classList.add('fi-rr-angle-small-up');
                } else {
                    submenu.classList.add('hidden');
                    icon.classList.remove('fi-rr-angle-small-up');
                    icon.classList.add('fi-rr-angle-small-down');
                }
            }
        });
    });
    
    // ESC key close all
    document.onkeydown = (e) => {
        if (e.key === 'Escape') {
            [mobileMenu, searchPanel, userModal, cartSidebar].forEach(el => {
                if (el) {
                    if (el.classList.contains('translate-x-full')) {
                        el.classList.add('translate-x-full');
                    } else {
                        el.classList.add('hidden');
                        el.classList.remove('flex');
                    }
                }
            });
            document.body.style.overflow = '';
        }
    };
    
    // Check if user is logged in (static check)
    setTimeout(() => {
        updateUserUI();
    }, 100);
    
    // Make handleLogout globally accessible
    window.handleLogout = handleLogout;
});

// Update user UI based on login status
function updateUserUI() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    const userDropdown = document.getElementById('user-dropdown');
    const userIconDefault = document.getElementById('user-icon-default');
    const userIconImage = document.getElementById('user-icon-image');
    const userName = document.getElementById('user-name');
    const userEmail = document.getElementById('user-email');
    
    if (currentUser) {
        // Show dropdown
        if (userDropdown) {
            userDropdown.classList.remove('hidden');
        }
        
        // Update user info
        if (userName) userName.textContent = currentUser.name || 'User';
        if (userEmail) userEmail.textContent = currentUser.email || 'user@gmail.com';
        
        // Update icon
        const userIconLetter = document.getElementById('user-icon-letter');
        if (currentUser.avatar) {
            if (userIconDefault) userIconDefault.classList.add('hidden');
            if (userIconLetter) userIconLetter.classList.add('hidden');
            if (userIconImage) {
                userIconImage.src = currentUser.avatar;
                userIconImage.classList.remove('hidden');
            }
        } else {
            if (userIconImage) userIconImage.classList.add('hidden');
            if (currentUser.name) {
                const firstLetter = currentUser.name.charAt(0).toUpperCase();
                if (userIconLetter) {
                    userIconLetter.textContent = firstLetter;
                    userIconLetter.classList.remove('hidden');
                }
                if (userIconDefault) userIconDefault.classList.add('hidden');
            } else {
                if (userIconDefault) userIconDefault.classList.remove('hidden');
                if (userIconLetter) userIconLetter.classList.add('hidden');
            }
        }
    } else {
        // Hide dropdown
        if (userDropdown) {
            userDropdown.classList.add('hidden');
        }
        
        // Redirect to login on click
        const userIconBtn = document.getElementById('user-icon-btn');
        if (userIconBtn) {
            userIconBtn.onclick = () => {
                window.location.href = '/login';
            };
        }
    }
}

// Handle logout
function handleLogout() {
    localStorage.removeItem('currentUser');
    showToast('Logged out successfully', 'success');
    setTimeout(() => {
        window.location.href = '/login';
    }, 1000);
}

