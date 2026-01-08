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
    const profileContent = document.getElementById('profile-tab-content');
    const editContent = document.getElementById('edit-tab-content');
    
    if (tab === 'profile') {
        profileTab.classList.add('border-[#8B4513]', 'bg-[#F5F1EB]', 'text-[#654321]');
        profileTab.classList.remove('text-gray-500');
        editTab.classList.remove('border-[#8B4513]', 'bg-[#F5F1EB]', 'text-[#654321]');
        editTab.classList.add('text-gray-500');
        profileContent.classList.remove('hidden');
        editContent.classList.add('hidden');
    } else {
        editTab.classList.add('border-[#8B4513]', 'bg-[#F5F1EB]', 'text-[#654321]');
        editTab.classList.remove('text-gray-500');
        profileTab.classList.remove('border-[#8B4513]', 'bg-[#F5F1EB]', 'text-[#654321]');
        profileTab.classList.add('text-gray-500');
        editContent.classList.remove('hidden');
        profileContent.classList.add('hidden');
    }
}

window.switchTab = switchTab;

