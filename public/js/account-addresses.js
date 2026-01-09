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
    setupAddressForm();
});

function loadAddresses() {
    // Mock addresses data
    const mockAddresses = [
        {
            id: 1,
            type: 'home',
            name: 'User',
            phone: '9876543210',
            address1: '123, Main Street',
            address2: 'Near City Mall',
            city: 'Mumbai',
            pincode: '400001',
            state: 'Maharashtra',
            isDefault: true
        },
        {
            id: 2,
            type: 'office',
            name: 'User',
            phone: '9876543211',
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
            addressesList.innerHTML = addresses.map(addr => {
                const typeLabels = {
                    'home': 'Home',
                    'office': 'Office',
                    'other': 'Other'
                };
                const typeIcons = {
                    'home': 'fi-rr-home',
                    'office': 'fi-rr-building',
                    'other': 'fi-rr-box'
                };
                return `
                <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 ${addr.isDefault ? 'border-2 border-[#8B4513]' : ''}">
                    <div class="flex items-start justify-between mb-3">
                        <div class="flex items-center gap-2">
                            ${addr.isDefault ? '<span class="px-2 py-1 bg-[#8B4513] text-white text-xs rounded">Default</span>' : ''}
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded flex items-center gap-1">
                                <i class="fi ${typeIcons[addr.type] || 'fi-rr-marker'} text-xs"></i>
                                ${typeLabels[addr.type] || 'Address'}
                            </span>
                        </div>
                        <button onclick="editAddress(${addr.id})" class="text-[#8B4513] hover:text-[#654321] p-1" title="Edit">
                            <i class="fi fi-rr-edit text-sm"></i>
                        </button>
                    </div>
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
            `;
            }).join('');
        }
    }
}

function openAddAddressModal() {
    const modal = document.getElementById('add-address-modal');
    const modalContent = modal?.querySelector('.absolute');
    if (modal && modalContent) {
        modal.classList.remove('hidden');
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
        // Trigger animation
        setTimeout(() => {
            modalContent.classList.remove('translate-x-full');
        }, 10);
    }
}

function closeAddAddressModal() {
    const modal = document.getElementById('add-address-modal');
    const modalContent = modal?.querySelector('.absolute');
    if (modal && modalContent) {
        modalContent.classList.add('translate-x-full');
        setTimeout(() => {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }, 300);
    }
    const form = document.getElementById('add-address-form');
    const editIdField = document.getElementById('edit-address-id');
    const modalTitle = document.querySelector('#add-address-modal h3');
    
    if (form) {
        form.reset();
    }
    if (editIdField) {
        editIdField.value = '';
    }
    if (modalTitle) {
        modalTitle.textContent = 'Add New Address';
    }
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
        if (typeof showToast === 'function') {
            showToast('Address deleted successfully', 'success');
        }
        loadAddresses();
    }
}

function editAddress(id) {
    const addresses = JSON.parse(localStorage.getItem('addresses') || '[]');
    const address = addresses.find(addr => addr.id === id);
    
    if (!address) return;
    
    // Open modal first
    const modal = document.getElementById('add-address-modal');
    const modalContent = modal?.querySelector('.absolute');
    const modalTitle = document.getElementById('address-modal-title');
    const editIdField = document.getElementById('edit-address-id');
    const form = document.getElementById('add-address-form');
    
    if (modal && modalContent && form && editIdField) {
        // Set edit mode
        if (modalTitle) {
            modalTitle.textContent = 'Edit Address';
        }
        editIdField.value = address.id;
        
        // Fill form with address data
        form.querySelector('[name="address_type"]').value = address.type || 'home';
        form.querySelector('[name="name"]').value = address.name || '';
        form.querySelector('[name="phone"]').value = address.phone || '';
        form.querySelector('[name="address1"]').value = address.address1 || '';
        form.querySelector('[name="address2"]').value = address.address2 || '';
        form.querySelector('[name="city"]').value = address.city || '';
        form.querySelector('[name="pincode"]').value = address.pincode || '';
        form.querySelector('[name="state"]').value = address.state || '';
        
        // Show modal
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
        setTimeout(() => {
            modalContent.classList.remove('translate-x-full');
        }, 10);
    }
}

// Handle form submission (edit and add)
function setupAddressForm() {
    const addAddressForm = document.getElementById('add-address-form');
    if (addAddressForm) {
        // Remove existing listeners
        const newForm = addAddressForm.cloneNode(true);
        addAddressForm.parentNode.replaceChild(newForm, addAddressForm);
        
        newForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(newForm);
            const editId = formData.get('address_id');
            const addresses = JSON.parse(localStorage.getItem('addresses') || '[]');
            
            if (editId) {
                // Update existing address
                const addressIndex = addresses.findIndex(addr => addr.id == editId);
                if (addressIndex !== -1) {
                    addresses[addressIndex] = {
                        ...addresses[addressIndex],
                        type: formData.get('address_type'),
                        name: formData.get('name'),
                        phone: formData.get('phone'),
                        address1: formData.get('address1'),
                        address2: formData.get('address2'),
                        city: formData.get('city'),
                        pincode: formData.get('pincode'),
                        state: formData.get('state')
                    };
                    localStorage.setItem('addresses', JSON.stringify(addresses));
                    if (typeof showToast === 'function') {
                        showToast('Address updated successfully!', 'success');
                    }
                }
            } else {
                // Add new address
                const address = {
                    id: Date.now(),
                    type: formData.get('address_type'),
                    name: formData.get('name'),
                    phone: formData.get('phone'),
                    address1: formData.get('address1'),
                    address2: formData.get('address2'),
                    city: formData.get('city'),
                    pincode: formData.get('pincode'),
                    state: formData.get('state'),
                    isDefault: false
                };
                addresses.push(address);
                localStorage.setItem('addresses', JSON.stringify(addresses));
                if (typeof showToast === 'function') {
                    showToast('Address added successfully!', 'success');
                }
            }
            
            closeAddAddressModal();
            loadAddresses();
            setupAddressForm(); // Re-setup form after modal close
        });
    }
}

// Setup form on page load
document.addEventListener('DOMContentLoaded', function() {
    setupAddressForm();
});

// updateSidebarUser is defined in useraccount-sidebar.js

