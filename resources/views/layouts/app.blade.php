<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AURA KURTIS - Elegant Modern Kurtis')</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Flaticon Icons -->
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-brands/css/uicons-brands.css">
    
    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet"
      href="https://cdn-uicons.flaticon.com/2.4.0/uicons-regular-rounded/css/uicons-regular-rounded.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-white">
    <!-- Offer Header Slider -->
    <x-offer-slider />
    
    <!-- Main Header -->
    <x-header />
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    <x-footer />
    
    <!-- WhatsApp Icon -->
    <x-whatsapp-icon />
    {{-- resources/views/layouts/app.blade.php --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('Laravel Header JS loaded');
    
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
        };
    }
    
    if (searchPanelClose) {
        searchPanelClose.onclick = () => {
            searchPanel.classList.add('translate-x-full');
            document.body.style.overflow = '';
        };
    }
    
    // User Modal
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
    
    // ESC key close all
    document.onkeydown = (e) => {
        if (e.key === 'Escape') {
            [mobileMenu, searchPanel, userModal, cartSidebar].forEach(el => {
                if (el && !el.classList.contains('translate-x-full') || !el.classList.contains('hidden')) {
                    el.classList.add(el.classList.contains('translate-x-full') ? 'translate-x-full' : 'hidden');
                }
            });
            document.body.style.overflow = '';
        }
    };
    
    console.log('✅ All header functions ready');
});


</script>
<script src="{{ asset('js/carousel.js') }}" defer></script>
<script>
document.addEventListener("DOMContentLoaded", () => {

    // LIKE
    document.addEventListener('click', e => {
        const btn = e.target.closest('.action-like');
        if (!btn) return;

        e.preventDefault();
        e.stopPropagation();

        btn.classList.toggle('bg-[#654321]');
        btn.classList.toggle('text-white');
        btn.classList.toggle('bg-white');
        btn.classList.toggle('text-[#654321]');

        btn.querySelector('i').classList.toggle('fi-rr-heart');
        btn.querySelector('i').classList.toggle('fi-sr-heart');
    });

    // CART
    document.addEventListener('click', e => {
        const btn = e.target.closest('.action-cart');
        if (!btn) return;

        e.preventDefault();
        e.stopPropagation();

        btn.classList.toggle('bg-[#654321]');
        btn.classList.toggle('text-white');
        btn.classList.toggle('bg-white');
        btn.classList.toggle('text-[#654321]');
    });

});
</script>

</body>
</html>

