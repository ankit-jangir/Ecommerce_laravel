// Account Addresses Functions
document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        window.location.href = '/login';
        return;
    }
    
    if (typeof updateSidebarUser === 'function') {
        updateSidebarUser();
    }
    loadAddresses();
    
    const addAddressForm = document.getElementById('add-address-form');
    if (addAddressForm) {
        addAddressForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(addAddressForm);
            const address = {
                id: Date.now(),
                name: formData.get('name'),
                phone: formData.get('phone'),
                address1: formData.get('address1'),
                address2: formData.get('address2'),
                city: formData.get('city'),
                pincode: formData.get('pincode'),
                state: formData.get('state'),
                isDefault: false
            };
            
            const addresses = JSON.parse(localStorage.getItem('addresses') || '[]');
            addresses.push(address);
            localStorage.setItem('addresses', JSON.stringify(addresses));
            
            showToast('Address added successfully!', 'success');
            closeAddAddressModal();
            loadAddresses();
        });
    }
});

function loadAddresses() {
    // Mock addresses data
    const mockAddresses = [
        {
            id: 1,
            name: 'User',
            phone: '+91 9876543210',
            address1: '123, Main Street',
            address2: 'Near City Mall',
            city: 'Mumbai',
            pincode: '400001',
            state: 'Maharashtra',
            isDefault: true
        },
        {
            id: 2,
            name: 'User',
            phone: '+91 9876543211',
            address1: '456, Park Avenue',
            address2: 'Block A, Apartment 5',
            city: 'Delhi',
            pincode: '110001',
            state: 'Delhi',
            isDefault: false
        }
    ];
    
    const storedAddresses = JSON.parse(localStorage.getItem('addresses') || '[]');
    const addresses = storedAddresses.length > 0 ? storedAddresses : mockAddresses;
    
    const addressesList = document.getElementById('addresses-list');
    if (addressesList) {
        if (addresses.length === 0) {
            addressesList.innerHTML = '<div class="col-span-full bg-white rounded-xl shadow-lg p-12 text-center"><p class="text-gray-500">No addresses saved</p></div>';
        } else {
            addressesList.innerHTML = addresses.map(addr => `
                <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 ${addr.isDefault ? 'border-2 border-[#8B4513]' : ''}">
                    ${addr.isDefault ? '<span class="inline-block px-2 py-1 bg-[#8B4513] text-white text-xs rounded mb-3">Default</span>' : ''}
                    <h3 class="font-semibold text-[#654321] mb-2">${addr.name}</h3>
                    <p class="text-sm text-gray-600 mb-1">${addr.phone}</p>
                    <p class="text-sm text-gray-600 mb-1">${addr.address1}</p>
                    ${addr.address2 ? `<p class="text-sm text-gray-600 mb-1">${addr.address2}</p>` : ''}
                    <p class="text-sm text-gray-600 mb-1">${addr.city}, ${addr.state} - ${addr.pincode}</p>
                    <div class="flex gap-2 mt-4">
                        <button onclick="setDefaultAddress(${addr.id})" class="px-4 py-2 border border-[#8B4513] text-[#8B4513] rounded-lg hover:bg-[#F5F1EB] transition-colors text-sm">Set as Default</button>
                        <button onclick="deleteAddress(${addr.id})" class="px-4 py-2 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 transition-colors text-sm">Delete</button>
                    </div>
                </div>
            `).join('');
        }
    }
}

function openAddAddressModal() {
    const modal = document.getElementById('add-address-modal');
    const modalContent = modal?.querySelector('.absolute');
    if (modal && modalContent) {
        modal.classList.remove('hidden');
        setTimeout(() => {
            modalContent.classList.remove('translate-x-full');
        }, 10);
        document.body.style.overflow = 'hidden';
    }
}

function closeAddAddressModal() {
    const modal = document.getElementById('add-address-modal');
    const modalContent = modal?.querySelector('.absolute');
    if (modal && modalContent) {
        modalContent.classList.add('translate-x-full');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
        document.body.style.overflow = '';
    }
    const form = document.getElementById('add-address-form');
    if (form) form.reset();
}

// Close modal on overlay click
document.addEventListener('click', (e) => {
    const modal = document.getElementById('add-address-modal');
    if (modal && e.target === modal) {
        closeAddAddressModal();
    }
});

function setDefaultAddress(id) {
    const addresses = JSON.parse(localStorage.getItem('addresses') || '[]');
    addresses.forEach(addr => {
        addr.isDefault = addr.id === id;
    });
    localStorage.setItem('addresses', JSON.stringify(addresses));
    showToast('Default address set successfully', 'success');
    loadAddresses();
}

function deleteAddress(id) {
    if (confirm('Delete this address?')) {
        const addresses = JSON.parse(localStorage.getItem('addresses') || '[]');
        const filtered = addresses.filter(addr => addr.id !== id);
        localStorage.setItem('addresses', JSON.stringify(filtered));
        showToast('Address deleted successfully', 'success');
        loadAddresses();
    }
}

// updateSidebarUser is defined in useraccount-sidebar.js

