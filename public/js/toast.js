// Toast Notification System
function showToast(message, type = 'info', duration = 3000) {
    // Ensure container exists
    let container = document.getElementById('toast-container');
    if (!container) {
        container = createToastContainer();
    }
    
    const toast = document.createElement('div');
    toast.className = `toast-notification toast-${type} transform translate-x-full transition-all duration-300`;
    
    const icons = {
        success: 'fi-rr-check-circle',
        error: 'fi-rr-cross-circle',
        warning: 'fi-rr-exclamation',
        info: 'fi-rr-info'
    };
    
    const colors = {
        success: 'bg-green-500',
        error: 'bg-red-500',
        warning: 'bg-yellow-500',
        info: 'bg-blue-500'
    };
    
    toast.innerHTML = `
        <div class="flex items-center gap-3 ${colors[type]} rounded-lg shadow-lg p-4 min-w-[300px]">
            <i class="fi ${icons[type]} text-xl text-white"></i>
            <p class="flex-1 text-white font-medium">${message}</p>
            <button onclick="this.parentElement.parentElement.remove()" class="text-white hover:text-gray-200">
                <i class="fi fi-rr-cross text-sm"></i>
            </button>
        </div>
    `;
    
    container.appendChild(toast);
    
    // Trigger animation
    setTimeout(() => {
        toast.classList.remove('translate-x-full');
    }, 10);
    
    // Auto remove
    setTimeout(() => {
        toast.classList.add('translate-x-full');
        setTimeout(() => {
            if (toast.parentNode) {
                toast.remove();
            }
        }, 300);
    }, duration);
}

function createToastContainer() {
    const container = document.createElement('div');
    container.id = 'toast-container';
    container.className = 'fixed top-4 right-4 z-[9999] space-y-2';
    document.body.appendChild(container);
    return container;
}

// Make showToast globally available
window.showToast = showToast;

