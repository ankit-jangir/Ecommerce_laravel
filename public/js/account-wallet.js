// Wallet Functions
let selectedPaymentMethod = null;
let currentAmount = 0;

document.addEventListener('DOMContentLoaded', function() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    
    if (!currentUser) {
        return;
    }
    
    // Initialize wallet with dummy data if empty
    initializeWallet();
    
    // Load wallet data
    loadWalletData();
    
    // Amount input listener
    const walletAmount = document.getElementById('wallet-amount');
    if (walletAmount) {
        walletAmount.addEventListener('input', function() {
            currentAmount = parseFloat(this.value) || 0;
            updateAddMoneyButton();
        });
    }
});

function initializeWallet() {
    // Initialize wallet balance if not exists
    if (!localStorage.getItem('walletBalance')) {
        localStorage.setItem('walletBalance', '0');
    }
    
    // Initialize transaction history with dummy data if empty
    let transactions = JSON.parse(localStorage.getItem('walletTransactions') || '[]');
    
    if (transactions.length === 0) {
        transactions = [
            {
                id: 1,
                type: 'credit',
                amount: 1000,
                method: 'UPI',
                status: 'completed',
                date: new Date(Date.now() - 2 * 24 * 60 * 60 * 1000).toISOString().split('T')[0],
                time: '2 days ago',
                description: 'Money added via UPI'
            },
            {
                id: 2,
                type: 'debit',
                amount: 500,
                method: 'Wallet',
                status: 'completed',
                date: new Date(Date.now() - 1 * 24 * 60 * 60 * 1000).toISOString().split('T')[0],
                time: '1 day ago',
                description: 'Used for order payment'
            },
            {
                id: 3,
                type: 'credit',
                amount: 2000,
                method: 'Card',
                status: 'completed',
                date: new Date(Date.now() - 5 * 24 * 60 * 60 * 1000).toISOString().split('T')[0],
                time: '5 days ago',
                description: 'Money added via Card'
            }
        ];
        localStorage.setItem('walletTransactions', JSON.stringify(transactions));
        
        // Update wallet balance based on transactions
        let balance = 0;
        transactions.forEach(t => {
            if (t.type === 'credit' && t.status === 'completed') {
                balance += t.amount;
            } else if (t.type === 'debit' && t.status === 'completed') {
                balance -= t.amount;
            }
        });
        localStorage.setItem('walletBalance', balance.toString());
    }
}

function loadWalletData() {
    const walletBalance = parseFloat(localStorage.getItem('walletBalance') || '0');
    const transactions = JSON.parse(localStorage.getItem('walletTransactions') || '[]');
    
    // Update wallet balance display
    const walletBalanceEl = document.getElementById('wallet-balance');
    if (walletBalanceEl) {
        walletBalanceEl.textContent = '₹' + walletBalance.toLocaleString();
    }
    
    // Update profile wallet display
    const profileWalletEl = document.getElementById('profile-display-wallet');
    if (profileWalletEl) {
        profileWalletEl.textContent = '₹' + walletBalance.toLocaleString();
    }
    
    // Load transactions
    loadTransactions(transactions);
}

function loadTransactions(transactions) {
    const transactionsEl = document.getElementById('wallet-transactions');
    if (!transactionsEl) return;
    
    if (transactions.length === 0) {
        transactionsEl.innerHTML = `
            <div class="text-center py-8 text-gray-500">
                <i class="fi fi-rr-wallet text-4xl mb-2"></i>
                <p>No transactions yet</p>
            </div>
        `;
        return;
    }
    
    // Sort transactions by date (newest first)
    const sortedTransactions = [...transactions].sort((a, b) => {
        return new Date(b.date) - new Date(a.date);
    });
    
    transactionsEl.innerHTML = sortedTransactions.map(transaction => `
        <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg hover:shadow-md transition-all">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full flex items-center justify-center ${transaction.type === 'credit' ? 'bg-green-100' : 'bg-red-100'}">
                    <i class="fi fi-rr-${transaction.type === 'credit' ? 'arrow-up' : 'arrow-down'} text-xl ${transaction.type === 'credit' ? 'text-green-600' : 'text-red-600'}"></i>
                </div>
                <div>
                    <p class="font-semibold text-[#654321]">${transaction.description}</p>
                    <p class="text-sm text-gray-500">${transaction.method} • ${transaction.time}</p>
                </div>
            </div>
            <div class="text-right">
                <p class="font-bold ${transaction.type === 'credit' ? 'text-green-600' : 'text-red-600'}">
                    ${transaction.type === 'credit' ? '+' : '-'}₹${transaction.amount.toLocaleString()}
                </p>
                <span class="px-2 py-1 rounded text-xs font-medium ${transaction.status === 'completed' ? 'bg-green-100 text-green-700' : transaction.status === 'pending' ? 'bg-yellow-100 text-yellow-700' : 'bg-red-100 text-red-700'}">
                    ${transaction.status}
                </span>
            </div>
        </div>
    `).join('');
}

function selectPaymentMethod(method) {
    selectedPaymentMethod = method;
    
    // Update button styles
    document.querySelectorAll('.payment-method-btn').forEach(btn => {
        btn.classList.remove('bg-[#F5F1EB]', 'border-[#8B4513]');
        btn.classList.add('border-gray-200');
    });
    
    const selectedBtn = document.getElementById(`payment-${method}`);
    if (selectedBtn) {
        selectedBtn.classList.add('bg-[#F5F1EB]', 'border-[#8B4513]');
        selectedBtn.classList.remove('border-gray-200');
    }
    
    updateAddMoneyButton();
}

function updateAddMoneyButton() {
    const addMoneyBtn = document.getElementById('add-money-btn');
    if (addMoneyBtn) {
        if (currentAmount >= 100 && selectedPaymentMethod) {
            addMoneyBtn.disabled = false;
        } else {
            addMoneyBtn.disabled = true;
        }
    }
}

function processWalletPayment() {
    const amount = parseFloat(document.getElementById('wallet-amount').value);
    
    if (!amount || amount < 100) {
        showToast('Minimum amount is ₹100', 'error');
        return;
    }
    
    if (!selectedPaymentMethod) {
        showToast('Please select a payment method', 'error');
        return;
    }
    
    // Show QR code modal for UPI and QR methods
    if (selectedPaymentMethod === 'qr' || selectedPaymentMethod === 'upi') {
        showQRModal(amount);
    } else {
        // For other methods, process directly
        processPayment(amount, selectedPaymentMethod);
    }
}

function showQRModal(amount) {
    const qrModal = document.getElementById('qr-code-modal');
    const qrAmount = document.getElementById('qr-amount');
    const qrImage = document.getElementById('qr-code-image');
    
    if (qrModal && qrAmount && qrImage) {
        qrAmount.textContent = '₹' + amount.toLocaleString();
        // Generate QR code with payment data
        const qrData = `upi://pay?pa=merchant@upi&pn=AURA%20KURTIS&am=${amount}&cu=INR&tn=Wallet%20Recharge`;
        qrImage.src = `https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=${encodeURIComponent(qrData)}`;
        
        qrModal.classList.remove('hidden');
        qrModal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }
}

function closeQRModal() {
    const qrModal = document.getElementById('qr-code-modal');
    if (qrModal) {
        qrModal.classList.add('hidden');
        qrModal.classList.remove('flex');
        document.body.style.overflow = '';
    }
}

function confirmQRPayment() {
    const amount = parseFloat(document.getElementById('wallet-amount').value);
    processPayment(amount, selectedPaymentMethod);
    closeQRModal();
}

function processPayment(amount, method) {
    // Show loading state
    const addMoneyBtn = document.getElementById('add-money-btn');
    const originalText = addMoneyBtn ? addMoneyBtn.innerHTML : '';
    
    if (addMoneyBtn) {
        addMoneyBtn.disabled = true;
        addMoneyBtn.innerHTML = '<span class="flex items-center justify-center gap-2"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Processing...</span>';
    }
    
    // Simulate payment processing
    setTimeout(() => {
        // Get current balance
        let balance = parseFloat(localStorage.getItem('walletBalance') || '0');
        
        // Get transactions
        let transactions = JSON.parse(localStorage.getItem('walletTransactions') || '[]');
        
        // Create new transaction
        const newTransaction = {
            id: transactions.length > 0 ? Math.max(...transactions.map(t => t.id)) + 1 : 1,
            type: 'credit',
            amount: amount,
            method: method === 'qr' ? 'QR Code' : method === 'upi' ? 'UPI' : method === 'card' ? 'Card' : 'Net Banking',
            status: 'completed',
            date: new Date().toISOString().split('T')[0],
            time: 'Just now',
            description: `Money added via ${method === 'qr' ? 'QR Code' : method === 'upi' ? 'UPI' : method === 'card' ? 'Card' : 'Net Banking'}`
        };
        
        // Add transaction
        transactions.unshift(newTransaction);
        localStorage.setItem('walletTransactions', JSON.stringify(transactions));
        
        // Update balance
        balance += amount;
        localStorage.setItem('walletBalance', balance.toString());
        
        // Show success message
        showToast(`₹${amount.toLocaleString()} added to wallet successfully!`, 'success');
        
        // Reset form
        document.getElementById('wallet-amount').value = '';
        currentAmount = 0;
        selectedPaymentMethod = null;
        document.querySelectorAll('.payment-method-btn').forEach(btn => {
            btn.classList.remove('bg-[#F5F1EB]', 'border-[#8B4513]');
            btn.classList.add('border-gray-200');
        });
        
        // Reload wallet data
        loadWalletData();
        
        // Reset button
        if (addMoneyBtn) {
            addMoneyBtn.disabled = false;
            addMoneyBtn.innerHTML = originalText;
        }
        
        // Update profile wallet display
        if (typeof loadProfileData === 'function') {
            loadProfileData();
        }
    }, 2000);
}

// Make functions globally accessible
window.selectPaymentMethod = selectPaymentMethod;
window.processWalletPayment = processWalletPayment;
window.closeQRModal = closeQRModal;
window.confirmQRPayment = confirmQRPayment;
window.loadWalletData = loadWalletData;

