document.addEventListener("DOMContentLoaded", () => {
    const body = document.body;

    // ================= COMMON FUNCTIONS =================
    function openPanel(panel) {
        if (!panel) return;

        closeAllPanels();
        panel.classList.remove("translate-x-full");
        panel.classList.add("translate-x-0");
        body.classList.add("overflow-hidden");
    }

    function closePanel(panel) {
        if (!panel) return;

        panel.classList.add("translate-x-full");
        panel.classList.remove("translate-x-0");
        body.classList.remove("overflow-hidden");
    }

    function closeAllPanels() {
        document.querySelectorAll(".side-panel").forEach((panel) => {
            panel.classList.add("translate-x-full");
            panel.classList.remove("translate-x-0");
        });
    }

    // ================= SEARCH =================
    openOnClick("search-toggle", "search-panel");
    closeOnClick("search-panel-close", "search-panel");

    // ================= CART =================
    openOnClick("cart-toggle", "cart-sidebar");
    closeOnClick("cart-close", "cart-sidebar");

    // ================= WISHLIST =================
    openOnClick("wishlist-toggle", "wishlist-sidebar");
    closeOnClick("wishlist-close", "wishlist-sidebar");

    // ================= HELPERS =================
    function openOnClick(btnId, panelId) {
        const btn = document.getElementById(btnId);
        const panel = document.getElementById(panelId);

        btn?.addEventListener("click", () => openPanel(panel));
    }

    function closeOnClick(btnId, panelId) {
        const btn = document.getElementById(btnId);
        const panel = document.getElementById(panelId);

        btn?.addEventListener("click", () => closePanel(panel));
    }

    // ================= MOBILE MENU =================
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileOverlay = document.getElementById("mobile-menu-overlay");

    document
        .getElementById("mobile-menu-toggle")
        ?.addEventListener("click", () => {
            mobileMenu.classList.remove("-translate-x-full");
            mobileOverlay.classList.remove("hidden");
        });

    document
        .getElementById("mobile-menu-close")
        ?.addEventListener("click", () => {
            mobileMenu.classList.add("-translate-x-full");
            mobileOverlay.classList.add("hidden");
        });

    mobileOverlay?.addEventListener("click", () => {
        mobileMenu.classList.add("-translate-x-full");
        mobileOverlay.classList.add("hidden");
    });

    // ================= MOBILE ACCORDION =================
    document.querySelectorAll(".mobile-submenu-toggle").forEach((btn) => {
        btn.addEventListener("click", () => {
            const submenu = btn.parentElement.nextElementSibling;
            submenu?.classList.toggle("hidden");
            btn.querySelector("i")?.classList.toggle("rotate-180");
        });
    });
});
