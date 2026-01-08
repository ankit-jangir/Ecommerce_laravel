// Shared Sidebar User Update Function
function updateSidebarUser() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser') || 'null');
    const sidebarUserName = document.getElementById('sidebar-user-name');
    const sidebarUserEmail = document.getElementById('sidebar-user-email');
    const sidebarUserIcon = document.getElementById('sidebar-user-icon');
    const sidebarUserImage = document.getElementById('sidebar-user-image');
    
    if (!currentUser) return;
    
    if (sidebarUserName) sidebarUserName.textContent = currentUser.name || 'User';
    if (sidebarUserEmail) sidebarUserEmail.textContent = currentUser.email || 'user@gmail.com';
    
    if (currentUser.avatar) {
        if (sidebarUserIcon) sidebarUserIcon.classList.add('hidden');
        if (sidebarUserImage) {
            sidebarUserImage.src = currentUser.avatar;
            sidebarUserImage.classList.remove('hidden');
        }
    } else if (currentUser.name) {
        const firstLetter = currentUser.name.charAt(0).toUpperCase();
        if (sidebarUserIcon) {
            sidebarUserIcon.textContent = firstLetter;
            sidebarUserIcon.classList.remove('hidden');
            sidebarUserIcon.classList.remove('fi', 'fi-rr-user');
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    updateSidebarUser();
});

