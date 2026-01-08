// Search Functionality with Suggestions
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-panel-input');
    const searchButton = document.getElementById('search-button');
    const suggestionsDiv = document.getElementById('search-suggestions');
    const suggestionsList = document.getElementById('suggestions-list');
    const searchResults = document.getElementById('search-panel-results');
    const resultsList = document.getElementById('search-results-list');

    // Get products from mock data (using bestsellers as they have images)
    const mockProducts = [
        {
            id: 'cotton-petals-coord-set',
            name: 'Cotton Petals – Soft and Delicate Cotton Co-Ord Set',
            category: 'Co-Ord Set',
            price: 1350,
            originalPrice: 2450,
            discount: 44,
            image: '/images/carousel_img1.webp'
        },
        {
            id: 'floral-print-anarkali',
            name: 'Floral Print Anarkali Kurti',
            category: 'Anarkali',
            price: 2499,
            originalPrice: 3299,
            discount: 24,
            image: '/images/productimg8.webp'
        },
        {
            id: 'embroidered-straight-cut',
            name: 'Embroidered Straight Cut Kurti',
            category: 'Straight Cut',
            price: 2799,
            originalPrice: null,
            discount: null,
            image: '/images/productimg3.webp'
        },
        {
            id: 'printed-a-line-kurti',
            name: 'Printed A-Line Kurti',
            category: 'A-Line',
            price: 1999,
            originalPrice: 2499,
            discount: 20,
            image: '/images/productimg5.webp'
        },
        {
            id: 'designer-kurti-set',
            name: 'Designer Kurti Set',
            category: 'Kurti Set',
            price: 3499,
            originalPrice: 4999,
            discount: 30,
            image: '/images/productimg11.webp'
        },
        {
            id: 'heavy-embroidered-kurti',
            name: 'Heavy Embroidered Kurti',
            category: 'Embroidered',
            price: 4999,
            originalPrice: 6999,
            discount: 29,
            image: '/images/productimg1.webp'
        },
        {
            id: 'silk-flowing-anarkali',
            name: 'Silk Flowing Anarkali',
            category: 'Anarkali',
            price: 3799,
            originalPrice: null,
            discount: null,
            image: '/images/productimg2.jpg'
        },
        {
            id: 'floral-printed-kurti',
            name: 'Floral Printed Kurti',
            category: 'Printed',
            price: 2299,
            originalPrice: 2999,
            discount: 23,
            image: '/images/productimg4.webp'
        }
    ];

    function performSearch(query) {
        const filtered = mockProducts.filter(product => 
            product.name.toLowerCase().includes(query.toLowerCase()) ||
            product.category.toLowerCase().includes(query.toLowerCase())
        );

        if (filtered.length > 0) {
            // Show results in panel
            resultsList.innerHTML = filtered.map(product => `
                <div class="flex items-center gap-4 p-4 border border-gray-200 rounded-lg hover:shadow-md transition-shadow">
                    <img src="${product.image}" alt="${product.name}" class="w-20 h-20 object-cover rounded-lg">
                    <div class="flex-1 min-w-0">
                        <a href="/product/${product.id}" class="font-semibold text-[#654321] hover:text-[#8B4513] block truncate" title="${product.name}">${product.name.length > 25 ? product.name.substring(0, 25) + '...' : product.name}</a>
                        <p class="text-sm text-gray-500 truncate">${product.category}</p>
                    </div>
                    <div class="text-right">
                        <div class="flex items-center gap-2 mb-2">
                            <p class="font-bold text-[#8B4513]">₹${product.price.toLocaleString()}</p>
                            ${product.originalPrice ? `<p class="text-sm text-gray-400 line-through">₹${product.originalPrice.toLocaleString()}</p>` : ''}
                        </div>
                        <button onclick="addToCart('${product.id}')" class="px-4 py-2 bg-[#8B4513] text-white rounded-lg hover:bg-[#654321] transition-colors text-sm">
                            Add to Cart
                        </button>
                    </div>
                </div>
            `).join('');
            searchResults.classList.remove('hidden');
            suggestionsDiv.classList.add('hidden');
        } else {
            // No results - redirect to shop with query
            window.location.href = `/shop?search=${encodeURIComponent(query)}`;
        }
    }

    if (searchInput) {
        let searchTimeout;
        
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.trim().toLowerCase();
            
            clearTimeout(searchTimeout);
            
            if (query.length === 0) {
                suggestionsDiv.classList.add('hidden');
                searchResults.classList.add('hidden');
                return;
            }

            searchTimeout = setTimeout(() => {
                // Filter products
                const filtered = mockProducts.filter(product => 
                    product.name.toLowerCase().includes(query) ||
                    product.category.toLowerCase().includes(query)
                );

                if (filtered.length > 0) {
                    // Show suggestions with images
                    suggestionsList.innerHTML = filtered.slice(0, 5).map(product => `
                        <a href="/product/${product.id}" class="flex items-center gap-3 px-4 py-3 hover:bg-[#F5F1EB] transition-colors cursor-pointer">
                            <img src="${product.image}" alt="${product.name}" class="w-12 h-12 object-cover rounded-lg">
                            <div class="flex-1">
                                <p class="font-medium text-[#654321]">${product.name}</p>
                                <p class="text-sm text-gray-500">${product.category}</p>
                            </div>
                            <p class="font-semibold text-[#8B4513]">₹${product.price.toLocaleString()}</p>
                        </a>
                    `).join('');
                    suggestionsDiv.classList.remove('hidden');
                } else {
                    suggestionsDiv.classList.add('hidden');
                }
            }, 300);
        });

        // Handle search on Enter
        searchInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                const query = e.target.value.trim();
                if (query.length > 0) {
                    performSearch(query);
                }
            }
        });
    }

    // Handle search button click
    if (searchButton) {
        searchButton.addEventListener('click', (e) => {
            e.preventDefault();
            const query = searchInput?.value.trim() || '';
            if (query.length > 0) {
                performSearch(query);
            }
        });
    }

    // Hide suggestions when clicking outside
    document.addEventListener('click', (e) => {
        if (searchInput && !searchInput.contains(e.target) && suggestionsDiv && !suggestionsDiv.contains(e.target) && searchButton && !searchButton.contains(e.target)) {
            suggestionsDiv.classList.add('hidden');
        }
    });
});
