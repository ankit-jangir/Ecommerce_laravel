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
    <main class="pb-16 lg:pb-0">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @if(!request()->routeIs('account*'))
        <x-footer />
    @endif
    
    <!-- WhatsApp Icon -->
    <x-whatsapp-icon />
    
    <!-- Bottom Navigation (Mobile) -->
    <x-bottom-nav />
    
    <!-- Toast Notification Container (Global) -->
    <div id="toast-container" class="fixed top-4 right-4 z-[9999] space-y-2"></div>
    
    <!-- JavaScript Files -->
    <script src="{{ asset('js/toast.js') }}"></script>
    <script src="{{ asset('js/header-functions.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ asset('js/auth.js') }}"></script>
    <script src="{{ asset('js/useraccount-sidebar.js') }}"></script>
    <script src="{{ asset('js/wishlist-manager.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}" defer></script>
    <script src="{{ asset('js/account-header.js') }}"></script>
    
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        // CART - Handle action-cart buttons (toggle behavior)
        document.addEventListener('click', e => {
            const btn = e.target.closest('.action-cart');
            if (!btn || !window.cartManager) return;

            e.preventDefault();
            e.stopPropagation();

            const productId = btn.getAttribute('data-product-id');
            const productName = btn.getAttribute('data-product-name');
            const productPrice = parseFloat(btn.getAttribute('data-product-price'));
            const productImage = btn.getAttribute('data-product-image');

            if (productId && productName && productPrice) {
                const product = {
                    id: productId,
                    name: productName,
                    price: productPrice,
                    image: productImage || '',
                    size: 'M',
                    quantity: 1
                };
                
                // Check if product is already in cart
                const isInCart = window.cartManager.cart.some(item => item.id === productId && item.size === 'M');
                
                if (isInCart) {
                    // Remove from cart
                    window.cartManager.removeFromCart(productId, 'M');
                } else {
                    // Add to cart
                    window.cartManager.addToCart(product);
                }
            }
        });
    });
    </script>
    
    @stack('scripts')

</body>
</html>

