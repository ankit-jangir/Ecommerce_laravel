// Bottom Navigation Functions
document.addEventListener('DOMContentLoaded', function() {
    const bottomAccountToggle = document.getElementById('bottom-account-toggle');
    const bottomSearchToggle = document.getElementById('bottom-search-toggle');
    
    // Account toggle logic
    if (bottomAccountToggle) {
        bottomAccountToggle.addEventListener('click', () => {
            const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
            
            if (!currentUser) {
                // Not logged in - show login modal or redirect
                const userModal = document.getElementById('user-modal');
                if (userModal) {
                    userModal.classList.remove('hidden');
                    userModal.classList.add('flex');
                    document.body.style.overflow = 'hidden';
                } else {
                    window.location.href = '/login';
                }
            } else {
                // Logged in - go to account dashboard
                window.location.href = '/account/dashboard';
            }
        });
    }
    
    // Search toggle
    if (bottomSearchToggle) {
        bottomSearchToggle.addEventListener('click', () => {
            const searchToggle = document.getElementById('search-toggle');
            if (searchToggle) {
                searchToggle.click();
            }
        });
    }
});

