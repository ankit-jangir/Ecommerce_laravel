// Account Page Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    // Update sidebar user info
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    
    // Load profile display data
    loadProfileData();
    
    const profileName = document.getElementById('profile-name');
    const profileEmail = document.getElementById('profile-email');
    const profilePhone = document.getElementById('profile-phone');
    
    if (profileName) profileName.value = currentUser.name || '';
    if (profileEmail) profileEmail.value = currentUser.email || '';
    if (profilePhone) profilePhone.value = currentUser.phone || '';
    
    // Profile form submission
    const profileForm = document.getElementById('profile-form');
    if (profileForm) {
        profileForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const updatedUser = {
                ...currentUser,
                name: profileName.value,
                email: profileEmail.value,
                phone: profilePhone.value
            };
            
            // Validate phone number
            const phoneRegex = /^[0-9]{10}$/;
            if (profilePhone.value && !phoneRegex.test(profilePhone.value.replace(/[^0-9]/g, ''))) {
                showToast('Please enter a valid 10-digit phone number', 'error');
                return;
            }
            
            // Validate name length
            if (profileName.value.length > 50) {
                showToast('Name should not exceed 50 characters', 'error');
                return;
            }
            
            localStorage.setItem('currentUser', JSON.stringify(updatedUser));
            showToast('Profile updated successfully!', 'success');
            
            // Update UI
            loadProfileData();
            if (typeof updateSidebarUser === 'function') {
                updateSidebarUser();
            }
            if (typeof updateUserUI === 'function') {
                updateUserUI();
            }
            if (typeof updateAccountMenuUser === 'function') {
                updateAccountMenuUser();
            }
        });
    }
});

function loadProfileData() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    const addresses = JSON.parse(localStorage.getItem('addresses') || '[]');
    const walletBalance = parseFloat(localStorage.getItem('walletBalance') || '0');
    
    const displayName = document.getElementById('profile-display-name');
    const displayEmail = document.getElementById('profile-display-email');
    const displayPhone = document.getElementById('profile-display-phone');
    const displayWallet = document.getElementById('profile-display-wallet');
    const displayAddresses = document.getElementById('profile-display-addresses');
    
    if (displayName) displayName.textContent = currentUser?.name || 'User';
    if (displayEmail) displayEmail.textContent = currentUser?.email || 'user@gmail.com';
    if (displayPhone) displayPhone.textContent = currentUser?.phone || '+91 9876543210';
    if (displayWallet) displayWallet.textContent = '₹' + walletBalance.toLocaleString();
    if (displayAddresses) displayAddresses.textContent = addresses.length + ' saved';
}

function switchTab(tab) {
    const profileTab = document.getElementById('tab-profile');
    const editTab = document.getElementById('tab-edit');
    const walletTab = document.getElementById('tab-wallet');
    const profileContent = document.getElementById('profile-tab-content');
    const editContent = document.getElementById('edit-tab-content');
    const walletContent = document.getElementById('wallet-tab-content');
    
    // Reset all tabs
    [profileTab, editTab, walletTab].forEach(t => {
        if (t) {
            t.classList.remove('border-[#8B4513]', 'bg-[#F5F1EB]', 'text-[#654321]');
            t.classList.add('text-gray-500', 'hover:text-[#654321]');
        }
    });
    
    // Hide all content
    [profileContent, editContent, walletContent].forEach(c => {
        if (c) c.classList.add('hidden');
    });
    
    if (tab === 'profile') {
        if (profileTab) {
            profileTab.classList.add('border-[#8B4513]', 'bg-[#F5F1EB]', 'text-[#654321]');
            profileTab.classList.remove('text-gray-500', 'hover:text-[#654321]');
        }
        if (profileContent) profileContent.classList.remove('hidden');
    } else if (tab === 'edit') {
        if (editTab) {
            editTab.classList.add('border-[#8B4513]', 'bg-[#F5F1EB]', 'text-[#654321]');
            editTab.classList.remove('text-gray-500', 'hover:text-[#654321]');
        }
        if (editContent) editContent.classList.remove('hidden');
    } else if (tab === 'wallet') {
        if (walletTab) {
            walletTab.classList.add('border-[#8B4513]', 'bg-[#F5F1EB]', 'text-[#654321]');
            walletTab.classList.remove('text-gray-500', 'hover:text-[#654321]');
        }
        if (walletContent) {
            walletContent.classList.remove('hidden');
            // Load wallet data when tab is opened
            if (typeof loadWalletData === 'function') {
                loadWalletData();
            }
        }
    }
}

window.switchTab = switchTab;

