<?php

namespace App\Helpers;

class MockData
{
    public static function getHomepageProducts()
    {
        return [
            // Lifestyle Collection
            'lifestyle' => [
                [
                    'id' => 'floral-print-anarkali',
                    'name' => 'Floral Print Anarkali Kurti',
                    'description' => 'Comfortable Cotton',
                    'price' => 2499,
                    'original_price' => 3299,
                    'discount' => 24,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => asset('images/productimg8.webp'),
                    'category' => 'Anarkali',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'embroidered-straight-cut',
                    'name' => 'Embroidered Straight Cut Kurti',
                    'description' => 'Premium Georgette',
                    'price' => 2799,
                    'original_price' => null,
                    'discount' => null,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => asset('images/productimg3.webp'),
                    'category' => 'Straight Cut',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'printed-a-line-kurti',
                    'name' => 'Printed A-Line Kurti',
                    'description' => 'Soft Rayon Fabric',
                    'price' => 1999,
                    'original_price' => 2499,
                    'discount' => 20,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => asset('images/productimg5.webp'),
                    'category' => 'A-Line',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'designer-kurti-set',
                    'name' => 'Designer Kurti Set',
                    'description' => 'Complete Outfit',
                    'price' => 3499,
                    'original_price' => 4999,
                    'discount' => 30,
                    'badge' => 'EXCLUSIVE',
                    'badge_color' => 'purple',
                    'image' => asset('images/productimg11.webp'),
                    'category' => 'Kurti Set',
                    'fabric' => 'Cotton'
                ],
            ],
            
            // Traditional Collection
            'traditional' => [
                [
                    'id' => 'heavy-embroidered-kurti',
                    'name' => 'Heavy Embroidered Kurti',
                    'description' => 'Festival Collection',
                    'price' => 4999,
                    'original_price' => 6999,
                    'discount' => 29,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'red',
                    'image' => asset('images/productimg1.webp'),
                    'category' => 'Embroidered',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'silk-flowing-anarkali',
                    'name' => 'Silk Flowing Anarkali',
                    'description' => 'Luxury Silk Fabric',
                    'price' => 3799,
                    'original_price' => null,
                    'discount' => null,
                    'badge' => 'POPULAR',
                    'badge_color' => 'pink',
                    'image' => asset('images/productimg2.jpg'),
                    'category' => 'Anarkali',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'floral-printed-kurti',
                    'name' => 'Floral Printed Kurti',
                    'description' => 'Casual Wear',
                    'price' => 2299,
                    'original_price' => 2999,
                    'discount' => 23,
                    'badge' => 'LIMITED',
                    'badge_color' => 'blue',
                    'image' => asset('images/productimg4.webp'),
                    'category' => 'Printed',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'designer-party-kurti',
                    'name' => 'Designer Party Kurti',
                    'description' => 'Evening Wear',
                    'price' => 3299,
                    'original_price' => 4499,
                    'discount' => 27,
                    'badge' => 'HOT',
                    'badge_color' => 'orange',
                    'image' => asset('images/productimg12.jpg'),
                    'category' => 'Party Wear',
                    'fabric' => 'Georgette'
                ],
            ],
            
            // Bestsellers - Extended for slider
          'bestsellers' => [

    [
        'id' => 'cotton-petals-coord-set',
        'name' => 'Cotton Petals – Soft and Delicate Cotton Co-Ord Set',
        'description' => 'Complete Outfit',
        'price' => 1350,
        'original_price' => 2450,
        'discount' => 44,
        'badge' => '-44%',
        'badge_color' => 'red',
        'image' => asset('images/carousel_img1.webp'),
        'hover_image' => asset('images/carousel_img2_back.webp'),
        'category' => 'Co-Ord Set',
        'fabric' => 'Cotton'
    ],

    [
        'id' => 'blue-ethnic-kurti-set',
        'name' => 'Blue Ethnic Printed Kurti Set',
        'description' => 'Festive Elegance',
        'price' => 1599,
        'original_price' => 2799,
        'discount' => 43,
        'badge' => '-43%',
        'badge_color' => 'red',
        'image' => asset('images/carousel_img2.webp'),
        'hover_image' => asset('images/carousel_img1_back.jpg'),
        'category' => 'Kurti Set',
        'fabric' => 'Rayon'
    ],

    [
        'id' => 'floral-anarkali-set',
        'name' => 'Floral Cotton Anarkali Set',
        'description' => 'Casual Elegance',
        'price' => 1899,
        'original_price' => 3299,
        'discount' => 42,
        'badge' => '-42%',
        'badge_color' => 'red',
        'image' => asset('images/carousel_img3.jpg'),
        'hover_image' => asset('images/carousel_img3_back.webp'),
        'category' => 'Anarkali',
        'fabric' => 'Cotton'
    ],

    [
        'id' => 'pastel-coord-set',
        'name' => 'Pastel Printed Cotton Co-Ord Set',
        'description' => 'Everyday Comfort',
        'price' => 1499,
        'original_price' => 2599,
        'discount' => 42,
        'badge' => '-42%',
        'badge_color' => 'red',
        'image' => asset('images/carousel_img4.jpg'),
        'hover_image' => asset('images/carousel_img5.webp'),
        'category' => 'Co-Ord Set',
        'fabric' => 'Cotton'
    ],

    [
        'id' => 'designer-party-coord',
        'name' => 'Designer Party Wear Co-Ord Set',
        'description' => 'Evening Wear',
        'price' => 2199,
        'original_price' => 3999,
        'discount' => 45,
        'badge' => '-45%',
        'badge_color' => 'red',
        'image' => asset('images/carousel_img5.webp'),
        'hover_image' => asset('images/carousel_img4.jpg'),
        'category' => 'Party Wear',
        'fabric' => 'Georgette'
    ],

    [
        'id' => 'printed-rayon-kurti',
        'name' => 'Printed Rayon Straight Kurti',
        'description' => 'Daily Wear',
        'price' => 999,
        'original_price' => 1799,
        'discount' => 44,
        'badge' => '-44%',
        'badge_color' => 'red',
        'image' => asset('images/carousel_img6.jpg'),
        'hover_image' => asset('images/carousel_img7.jpg'),
        'category' => 'Kurti',
        'fabric' => 'Rayon'
    ],

    [
        'id' => 'embroidered-festive-set',
        'name' => 'Embroidered Festive Kurti Set',
        'description' => 'Traditional Style',
        'price' => 2699,
        'original_price' => 4799,
        'discount' => 44,
        'badge' => '-44%',
        'badge_color' => 'red',
        'image' => asset('images/carousel_img7.jpg'),
        'hover_image' => asset('images/carousel_img6.jpg'),
        'category' => 'Festive Wear',
        'fabric' => 'Cotton Silk'
    ],

    [
        'id' => 'soft-linen-kurti',
        'name' => 'Soft Linen Minimal Kurti',
        'description' => 'Elegant Everyday',
        'price' => 1799,
        'original_price' => 2999,
        'discount' => 40,
        'badge' => '-40%',
        'badge_color' => 'red',
        'image' => asset('images/carousel_img8.webp'),
        'hover_image' => asset('images/carousel_img5.webp'),
        'category' => 'Kurti',
        'fabric' => 'Linen'
    ],

    // [
    //     'id' => 'handblock-cotton-set',
    //     'name' => 'Handblock Printed Cotton Kurti Set',
    //     'description' => 'Artisan Collection',
    //     'price' => 2299,
    //     'original_price' => 3899,
    //     'discount' => 41,
    //     'badge' => '-41%',
    //     'badge_color' => 'red',
    //     'image' => asset('images/carousel_img9.webp'),
    //     'hover_image' => asset('images/carousel_img9_back.webp'),
    //     'category' => 'Kurti Set',
    //     'fabric' => 'Cotton'
    // ],

    // [
    //     'id' => 'luxury-silk-anarkali',
    //     'name' => 'Luxury Silk Anarkali Kurti',
    //     'description' => 'Premium Occasion Wear',
    //     'price' => 3499,
    //     'original_price' => 5999,
    //     'discount' => 42,
    //     'badge' => '-42%',
    //     'badge_color' => 'red',
    //     'image' => asset('images/carousel_img10.webp'),
    //     'hover_image' => asset('images/carousel_img10_back.webp'),
    //     'category' => 'Anarkali',
    //     'fabric' => 'Silk'
    // ],

],

            
            // Suits Collection
            'suits' => [
                [
                    'id' => 'red-embroidered-suit',
                    'name' => 'Red Embroidered Suit',
                    'description' => 'Traditional Suit Set',
                    'price' => 5999,
                    'original_price' => 7999,
                    'discount' => 25,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'red',
                    'image' => asset('images/productimg13.webp'),
                    'category' => 'Suit Set',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'pink-floral-suit',
                    'name' => 'Pink Floral Suit',
                    'description' => 'Elegant Suit Set',
                    'price' => 4499,
                    'original_price' => null,
                    'discount' => null,
                    'badge' => 'POPULAR',
                    'badge_color' => 'pink',
                    'image' => asset('images/bestsellers_productimg1.webp'),
                    'category' => 'Suit Set',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'designer-party-suit',
                    'name' => 'Designer Party Suit',
                    'description' => 'Festive Collection',
                    'price' => 6999,
                    'original_price' => 9999,
                    'discount' => 30,
                    'badge' => 'EXCLUSIVE',
                    'badge_color' => 'purple',
                    'image' => asset('images/bestsellers_productimg2.webp'),
                    'category' => 'Suit Set',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'casual-cotton-suit',
                    'name' => 'Casual Cotton Suit',
                    'description' => 'Everyday Wear',
                    'price' => 2999,
                    'original_price' => 3999,
                    'discount' => 25,
                    'badge' => 'NEW',
                    'badge_color' => 'green',
                    'image' => asset('images/bestsellers_productimg3.webp'),
                    'category' => 'Suit Set',
                    'fabric' => 'Cotton'
                ],
            ],
            
            // Men's Collection
            'men' => [
                [
                    'id' => 'men-cotton-kurta',
                    'name' => 'Cotton Kurta for Men',
                    'description' => 'Comfortable Cotton',
                    'price' => 1299,
                    'original_price' => 1999,
                    'discount' => 35,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1603252109303-2751441dd157?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-pathani-kurta',
                    'name' => 'Pathani Kurta',
                    'description' => 'Traditional Style',
                    'price' => 1699,
                    'original_price' => 2499,
                    'discount' => 32,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-nehru-jacket',
                    'name' => 'Nehru Jacket',
                    'description' => 'Formal Elegance',
                    'price' => 2999,
                    'original_price' => 3999,
                    'discount' => 25,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'men-printed-kurta',
                    'name' => 'Printed Kurta',
                    'description' => 'Casual Wear',
                    'price' => 1399,
                    'original_price' => 1999,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1603252109303-2751441dd157?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-embroidered-kurta',
                    'name' => 'Embroidered Kurta',
                    'description' => 'Festive Collection',
                    'price' => 2299,
                    'original_price' => 3299,
                    'discount' => 30,
                    'badge' => 'EXCLUSIVE',
                    'badge_color' => 'purple',
                    'image' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'men-formal-shirt',
                    'name' => 'Formal Shirt',
                    'description' => 'Premium Cotton',
                    'price' => 1499,
                    'original_price' => 2299,
                    'discount' => 35,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1594938291221-94f313b0e69a?w=500&h=600&fit=crop',
                    'category' => 'Shirts',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-striped-shirt',
                    'name' => 'Striped Formal Shirt',
                    'description' => 'Office Wear',
                    'price' => 1799,
                    'original_price' => 2599,
                    'discount' => 31,
                    'badge' => 'POPULAR',
                    'badge_color' => 'blue',
                    'image' => 'https://images.unsplash.com/photo-1603252109612-24fa03d145c8?w=500&h=600&fit=crop',
                    'category' => 'Shirts',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-checkered-shirt',
                    'name' => 'Checkered Shirt',
                    'description' => 'Smart Casual',
                    'price' => 1599,
                    'original_price' => 2299,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594938291221-94f313b0e69a?w=500&h=600&fit=crop',
                    'category' => 'Shirts',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-linen-shirt',
                    'name' => 'Linen Shirt',
                    'description' => 'Summer Comfort',
                    'price' => 1899,
                    'original_price' => 2699,
                    'discount' => 30,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1603252109612-24fa03d145c8?w=500&h=600&fit=crop',
                    'category' => 'Shirts',
                    'fabric' => 'Linen'
                ],
                [
                    'id' => 'men-casual-tshirt',
                    'name' => 'Casual T-Shirt',
                    'description' => 'Soft Cotton',
                    'price' => 799,
                    'original_price' => 1299,
                    'discount' => 38,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=500&h=600&fit=crop',
                    'category' => 'T-Shirts',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-winter-jacket',
                    'name' => 'Winter Jacket',
                    'description' => 'Warm & Cozy',
                    'price' => 2499,
                    'original_price' => 3499,
                    'discount' => 29,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=500&h=600&fit=crop',
                    'category' => 'Winterwear',
                    'fabric' => 'Polyester'
                ],
                [
                    'id' => 'men-formal-trousers',
                    'name' => 'Formal Trousers',
                    'description' => 'Classic Fit',
                    'price' => 1799,
                    'original_price' => 2499,
                    'discount' => 28,
                    'badge' => 'POPULAR',
                    'badge_color' => 'blue',
                    'image' => 'https://images.unsplash.com/photo-1624378515193-9c1b8c0b8b8b?w=500&h=600&fit=crop',
                    'category' => 'Trousers',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-ethnic-kurta',
                    'name' => 'Ethnic Kurta Set',
                    'description' => 'Festive Collection',
                    'price' => 1999,
                    'original_price' => 2999,
                    'discount' => 33,
                    'badge' => 'EXCLUSIVE',
                    'badge_color' => 'purple',
                    'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-casual-shirt',
                    'name' => 'Casual Shirt',
                    'description' => 'Everyday Wear',
                    'price' => 1199,
                    'original_price' => 1799,
                    'discount' => 33,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1603252109612-24fa03d145c8?w=500&h=600&fit=crop',
                    'category' => 'Shirts',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-polo-tshirt',
                    'name' => 'Polo T-Shirt',
                    'description' => 'Sporty Style',
                    'price' => 899,
                    'original_price' => 1399,
                    'discount' => 36,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=500&h=600&fit=crop',
                    'category' => 'T-Shirts',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-winter-sweater',
                    'name' => 'Winter Sweater',
                    'description' => 'Warm & Stylish',
                    'price' => 2199,
                    'original_price' => 3199,
                    'discount' => 31,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=500&h=600&fit=crop',
                    'category' => 'Winterwear',
                    'fabric' => 'Wool'
                ],
                [
                    'id' => 'men-chinos',
                    'name' => 'Chinos Pants',
                    'description' => 'Smart Casual',
                    'price' => 1599,
                    'original_price' => 2299,
                    'discount' => 30,
                    'badge' => 'POPULAR',
                    'badge_color' => 'blue',
                    'image' => 'https://images.unsplash.com/photo-1618354691551-44de113f0164?w=500&h=600&fit=crop',
                    'category' => 'Trousers',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-sherwani',
                    'name' => 'Designer Sherwani',
                    'description' => 'Wedding Collection',
                    'price' => 4999,
                    'original_price' => 6999,
                    'discount' => 29,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'men-gift-set',
                    'name' => 'Gift Set for Men',
                    'description' => 'Perfect Gift',
                    'price' => 2999,
                    'original_price' => 4499,
                    'discount' => 33,
                    'badge' => 'GIFT',
                    'badge_color' => 'orange',
                    'image' => 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=500&h=600&fit=crop',
                    'category' => 'Gifts for him',
                    'fabric' => 'Mixed'
                ],
            ],
            
            // Combos Collection
            'combos' => [
                [
                    'id' => 'combo-kurti-set-1',
                    'name' => 'Kurti Set Combo',
                    'description' => 'Complete Outfit',
                    'price' => 2499,
                    'original_price' => 3999,
                    'discount' => 38,
                    'badge' => 'COMBO',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Kurti Sets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'combo-ethnic-set-1',
                    'name' => 'Ethnic Set Combo',
                    'description' => 'Traditional Style',
                    'price' => 3499,
                    'original_price' => 4999,
                    'discount' => 30,
                    'badge' => 'COMBO',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'Ethnic Sets',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'combo-kurti-set-2',
                    'name' => 'Printed Kurti Set',
                    'description' => 'Casual Combo',
                    'price' => 1999,
                    'original_price' => 2999,
                    'discount' => 33,
                    'badge' => 'COMBO',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Kurti Sets',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'combo-ethnic-set-2',
                    'name' => 'Festive Ethnic Set',
                    'description' => 'Party Wear',
                    'price' => 4499,
                    'original_price' => 6499,
                    'discount' => 31,
                    'badge' => 'COMBO',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'Ethnic Sets',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'combo-kurti-set-3',
                    'name' => 'Anarkali Combo Set',
                    'description' => 'Elegant Style',
                    'price' => 2799,
                    'original_price' => 3999,
                    'discount' => 30,
                    'badge' => 'COMBO',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Kurti Sets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'combo-ethnic-set-3',
                    'name' => 'Designer Ethnic Combo',
                    'description' => 'Premium Collection',
                    'price' => 5499,
                    'original_price' => 7999,
                    'discount' => 31,
                    'badge' => 'COMBO',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'Ethnic Sets',
                    'fabric' => 'Silk'
                ],
            ],
            
            // Kurtis Collection
            'kurtis' => [
                [
                    'id' => 'kurti-anarkali-1',
                    'name' => 'Floral Anarkali Kurti',
                    'description' => 'Flowing Elegance',
                    'price' => 2299,
                    'original_price' => 3299,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Anarkali',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'kurti-straight-1',
                    'name' => 'Printed Straight Kurti',
                    'description' => 'Casual Comfort',
                    'price' => 1499,
                    'original_price' => 2299,
                    'discount' => 35,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Straight Cut',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'kurti-a-line-1',
                    'name' => 'A-Line Kurti',
                    'description' => 'Modern Style',
                    'price' => 1799,
                    'original_price' => 2599,
                    'discount' => 31,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'A-Line',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'kurti-printed-1',
                    'name' => 'Printed Kurti',
                    'description' => 'Daily Wear',
                    'price' => 1299,
                    'original_price' => 1999,
                    'discount' => 35,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Printed',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'kurti-anarkali-2',
                    'name' => 'Embroidered Anarkali',
                    'description' => 'Festive Collection',
                    'price' => 3499,
                    'original_price' => 4999,
                    'discount' => 30,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Anarkali',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'kurti-straight-2',
                    'name' => 'Cotton Straight Kurti',
                    'description' => 'Comfortable Fit',
                    'price' => 1199,
                    'original_price' => 1799,
                    'discount' => 33,
                    'badge' => 'POPULAR',
                    'badge_color' => 'blue',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'Straight Cut',
                    'fabric' => 'Cotton'
                ],
            ],
            
            // Men's Collection
            'men' => [
                [
                    'id' => 'men-casual-shirt-1',
                    'name' => 'Classic White Formal Shirt',
                    'description' => 'Premium Cotton',
                    'price' => 1999,
                    'original_price' => 2999,
                    'discount' => 33,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1603252109303-2751441dd157?w=500&h=600&fit=crop',
                    'category' => 'Shirts',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-denim-shirt-1',
                    'name' => 'Denim Casual Shirt',
                    'description' => 'Comfortable Fit',
                    'price' => 2299,
                    'original_price' => 3299,
                    'discount' => 30,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1594938291221-94f313b0e69a?w=500&h=600&fit=crop',
                    'category' => 'Shirts',
                    'fabric' => 'Denim'
                ],
                [
                    'id' => 'men-tshirt-black',
                    'name' => 'Black Slim Fit T-Shirt',
                    'description' => 'Premium Quality',
                    'price' => 899,
                    'original_price' => 1499,
                    'discount' => 40,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?w=500&h=600&fit=crop',
                    'category' => 'T-Shirts',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-tshirt-olive',
                    'name' => 'Olive Green Casual Tee',
                    'description' => 'Comfortable Wear',
                    'price' => 999,
                    'original_price' => 1699,
                    'discount' => 41,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1620799139834-6b8f844fbe61?w=500&h=600&fit=crop',
                    'category' => 'T-Shirts',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-kurta-formal',
                    'name' => 'Embroidered Kurta',
                    'description' => 'Festive Collection',
                    'price' => 2499,
                    'original_price' => 3999,
                    'discount' => 38,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'purple',
                    'image' => 'https://images.unsplash.com/photo-1603252109612-24fa03d145c8?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-kurta-casual',
                    'name' => 'Cotton Kurta',
                    'description' => 'Daily Wear',
                    'price' => 1799,
                    'original_price' => 2799,
                    'discount' => 36,
                    'badge' => 'POPULAR',
                    'badge_color' => 'blue',
                    'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-pants-navy',
                    'name' => 'Navy Formal Pants',
                    'description' => 'Professional Look',
                    'price' => 2499,
                    'original_price' => 3499,
                    'discount' => 29,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1603252109612-24fa03d145c8?w=500&h=600&fit=crop',
                    'category' => 'Trousers',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-pants-beige',
                    'name' => 'Beige Casual Pants',
                    'description' => 'Comfortable Fit',
                    'price' => 2199,
                    'original_price' => 3199,
                    'discount' => 31,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1618354691551-44de113f0164?w=500&h=600&fit=crop',
                    'category' => 'Trousers',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-winter-jacket',
                    'name' => 'Winter Jacket',
                    'description' => 'Warm & Cozy',
                    'price' => 3999,
                    'original_price' => 5999,
                    'discount' => 33,
                    'badge' => 'WINTER',
                    'badge_color' => 'blue',
                    'image' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=500&h=600&fit=crop',
                    'category' => 'Winterwear',
                    'fabric' => 'Polyester'
                ],
                [
                    'id' => 'men-winter-sweater',
                    'name' => 'Woolen Sweater',
                    'description' => 'Premium Quality',
                    'price' => 3299,
                    'original_price' => 4999,
                    'discount' => 34,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=500&h=600&fit=crop',
                    'category' => 'Winterwear',
                    'fabric' => 'Wool'
                ],
                [
                    'id' => 'men-gift-watch',
                    'name' => 'Premium Watch Set',
                    'description' => 'Elegant Gift',
                    'price' => 4999,
                    'original_price' => 7999,
                    'discount' => 38,
                    'badge' => 'GIFT',
                    'badge_color' => 'purple',
                    'image' => 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=500&h=600&fit=crop',
                    'category' => 'Gifts for him',
                    'fabric' => 'Leather'
                ],
                [
                    'id' => 'men-gift-wallet',
                    'name' => 'Leather Wallet',
                    'description' => 'Premium Quality',
                    'price' => 1299,
                    'original_price' => 1999,
                    'discount' => 35,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1627123424574-724758594e93?w=500&h=600&fit=crop',
                    'category' => 'Gifts for him',
                    'fabric' => 'Leather'
                ],
            ],
            
            // Combos Collection
            'combos' => [
                [
                    'id' => 'combo-kurti-set-1',
                    'name' => 'Cotton Kurti Set',
                    'description' => 'Complete Outfit',
                    'price' => 2999,
                    'original_price' => 4499,
                    'discount' => 33,
                    'badge' => 'COMBO',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Kurti Sets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'combo-ethnic-set-1',
                    'name' => 'Ethnic Printed Set',
                    'description' => 'Festive Collection',
                    'price' => 3499,
                    'original_price' => 5499,
                    'discount' => 36,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Ethnic Sets',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'combo-kurti-set-2',
                    'name' => 'Designer Kurti Set',
                    'description' => 'Premium Quality',
                    'price' => 3999,
                    'original_price' => 5999,
                    'discount' => 33,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'Kurti Sets',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'combo-ethnic-set-2',
                    'name' => 'Embroidered Ethnic Set',
                    'description' => 'Traditional Style',
                    'price' => 4499,
                    'original_price' => 6999,
                    'discount' => 36,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'purple',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Ethnic Sets',
                    'fabric' => 'Silk'
                ],
            ],
            
            // Kurtis Collection
            'kurtis' => [
                [
                    'id' => 'kurti-anarkali-premium',
                    'name' => 'Premium Anarkali Kurti',
                    'description' => 'Flowing Elegance',
                    'price' => 2799,
                    'original_price' => 3999,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Anarkali',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'kurti-straight-cotton',
                    'name' => 'Cotton Straight Kurti',
                    'description' => 'Daily Wear',
                    'price' => 1499,
                    'original_price' => 2299,
                    'discount' => 35,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'Straight Cut',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'kurti-a-line-printed',
                    'name' => 'Printed A-Line Kurti',
                    'description' => 'Casual Style',
                    'price' => 1799,
                    'original_price' => 2699,
                    'discount' => 33,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'A-Line',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'kurti-printed-cotton',
                    'name' => 'Printed Cotton Kurti',
                    'description' => 'Comfortable Fit',
                    'price' => 1299,
                    'original_price' => 1999,
                    'discount' => 35,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Printed',
                    'fabric' => 'Cotton'
                ],
            ],
            
            // Women Subcategories
            'women_kurtis' => [
                [
                    'id' => 'women-kurti-anarkali-1',
                    'name' => 'Floral Anarkali Kurti',
                    'description' => 'Flowing Elegance',
                    'price' => 2499,
                    'original_price' => 3499,
                    'discount' => 29,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Kurtis',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'women-kurti-straight-1',
                    'name' => 'Cotton Straight Kurti',
                    'description' => 'Daily Wear',
                    'price' => 1799,
                    'original_price' => 2499,
                    'discount' => 28,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'Kurtis',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'women-kurti-printed-1',
                    'name' => 'Printed A-Line Kurti',
                    'description' => 'Casual Style',
                    'price' => 1999,
                    'original_price' => 2799,
                    'discount' => 29,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Kurtis',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'women-kurti-embroidered-1',
                    'name' => 'Embroidered Kurti',
                    'description' => 'Festive Collection',
                    'price' => 3299,
                    'original_price' => 4499,
                    'discount' => 27,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'purple',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Kurtis',
                    'fabric' => 'Silk'
                ],
            ],
            
            'women_tops' => [
                [
                    'id' => 'women-top-casual-1',
                    'name' => 'Casual Cotton Top',
                    'description' => 'Comfortable Fit',
                    'price' => 1299,
                    'original_price' => 1999,
                    'discount' => 35,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312680-c5d69d0c0e9b?w=500&h=600&fit=crop',
                    'category' => 'Tops',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'women-top-printed-1',
                    'name' => 'Printed Casual Top',
                    'description' => 'Everyday Style',
                    'price' => 1499,
                    'original_price' => 2299,
                    'discount' => 35,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Tops',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'women-top-party-1',
                    'name' => 'Party Wear Top',
                    'description' => 'Evening Elegance',
                    'price' => 2199,
                    'original_price' => 3299,
                    'discount' => 33,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Tops',
                    'fabric' => 'Georgette'
                ],
            ],
            
            'women_dresses' => [
                [
                    'id' => 'women-dress-casual-1',
                    'name' => 'Casual Summer Dress',
                    'description' => 'Comfortable & Stylish',
                    'price' => 2499,
                    'original_price' => 3499,
                    'discount' => 29,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Dresses',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'women-dress-party-1',
                    'name' => 'Party Wear Dress',
                    'description' => 'Elegant Evening',
                    'price' => 3999,
                    'original_price' => 5999,
                    'discount' => 33,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'purple',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Dresses',
                    'fabric' => 'Silk'
                ],
            ],
            
            'women_bottoms' => [
                [
                    'id' => 'women-bottom-palazzo-1',
                    'name' => 'Cotton Palazzo Pants',
                    'description' => 'Comfortable Fit',
                    'price' => 1799,
                    'original_price' => 2499,
                    'discount' => 28,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312680-c5d69d0c0e9b?w=500&h=600&fit=crop',
                    'category' => 'Bottoms',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'women-bottom-leggings-1',
                    'name' => 'Stretch Leggings',
                    'description' => 'Perfect Fit',
                    'price' => 999,
                    'original_price' => 1499,
                    'discount' => 33,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Bottoms',
                    'fabric' => 'Polyester'
                ],
            ],
            
            // Men Subcategories
            'men_kurtas' => [
                [
                    'id' => 'men-kurta-formal-1',
                    'name' => 'Embroidered Kurta',
                    'description' => 'Festive Collection',
                    'price' => 2499,
                    'original_price' => 3999,
                    'discount' => 38,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1603252109612-24fa03d145c8?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-kurta-casual-1',
                    'name' => 'Cotton Kurta',
                    'description' => 'Daily Wear',
                    'price' => 1799,
                    'original_price' => 2799,
                    'discount' => 36,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=500&h=600&fit=crop',
                    'category' => 'Kurtas & Jackets',
                    'fabric' => 'Cotton'
                ],
            ],
            
            'men_shirts' => [
                [
                    'id' => 'men-shirt-formal-1',
                    'name' => 'Classic White Formal Shirt',
                    'description' => 'Premium Cotton',
                    'price' => 1999,
                    'original_price' => 2999,
                    'discount' => 33,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1603252109303-2751441dd157?w=500&h=600&fit=crop',
                    'category' => 'Shirts',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-shirt-casual-1',
                    'name' => 'Denim Casual Shirt',
                    'description' => 'Comfortable Fit',
                    'price' => 2299,
                    'original_price' => 3299,
                    'discount' => 30,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1594938291221-94f313b0e69a?w=500&h=600&fit=crop',
                    'category' => 'Shirts',
                    'fabric' => 'Denim'
                ],
            ],
            
            'men_pants' => [
                [
                    'id' => 'men-pants-formal-1',
                    'name' => 'Navy Formal Pants',
                    'description' => 'Professional Look',
                    'price' => 2499,
                    'original_price' => 3499,
                    'discount' => 29,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1603252109612-24fa03d145c8?w=500&h=600&fit=crop',
                    'category' => 'Trousers',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'men-pants-casual-1',
                    'name' => 'Beige Casual Pants',
                    'description' => 'Comfortable Fit',
                    'price' => 2199,
                    'original_price' => 3199,
                    'discount' => 31,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1618354691551-44de113f0164?w=500&h=600&fit=crop',
                    'category' => 'Trousers',
                    'fabric' => 'Cotton'
                ],
            ],
            
            // Kurtis Subcategories
            'kurtis_anarkali' => [
                [
                    'id' => 'kurti-anarkali-floral-1',
                    'name' => 'Floral Anarkali Kurti',
                    'description' => 'Flowing Elegance',
                    'price' => 2799,
                    'original_price' => 3999,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Anarkali',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'kurti-anarkali-embroidered-1',
                    'name' => 'Embroidered Anarkali',
                    'description' => 'Festive Collection',
                    'price' => 3499,
                    'original_price' => 4999,
                    'discount' => 30,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'purple',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Anarkali',
                    'fabric' => 'Silk'
                ],
            ],
            
            'kurtis_straight' => [
                [
                    'id' => 'kurti-straight-cotton-1',
                    'name' => 'Cotton Straight Kurti',
                    'description' => 'Daily Wear',
                    'price' => 1499,
                    'original_price' => 2299,
                    'discount' => 35,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'Straight Cut',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'kurti-straight-printed-1',
                    'name' => 'Printed Straight Kurti',
                    'description' => 'Comfortable Fit',
                    'price' => 1799,
                    'original_price' => 2699,
                    'discount' => 33,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Straight Cut',
                    'fabric' => 'Rayon'
                ],
            ],
            
            'kurtis_a_line' => [
                [
                    'id' => 'kurti-a-line-printed-1',
                    'name' => 'Printed A-Line Kurti',
                    'description' => 'Casual Style',
                    'price' => 1799,
                    'original_price' => 2699,
                    'discount' => 33,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'A-Line',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'kurti-a-line-cotton-1',
                    'name' => 'Cotton A-Line Kurti',
                    'description' => 'Everyday Comfort',
                    'price' => 1499,
                    'original_price' => 2299,
                    'discount' => 35,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'A-Line',
                    'fabric' => 'Cotton'
                ],
            ],
            
            'kurtis_printed' => [
                [
                    'id' => 'kurti-printed-cotton-1',
                    'name' => 'Printed Cotton Kurti',
                    'description' => 'Comfortable Fit',
                    'price' => 1299,
                    'original_price' => 1999,
                    'discount' => 35,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Printed',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'kurti-printed-rayon-1',
                    'name' => 'Printed Rayon Kurti',
                    'description' => 'Daily Wear',
                    'price' => 1199,
                    'original_price' => 1799,
                    'discount' => 33,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'Printed',
                    'fabric' => 'Rayon'
                ],
            ],
            
            // Combos Subcategories
            'combos_kurti_sets' => [
                [
                    'id' => 'combo-kurti-set-cotton-1',
                    'name' => 'Cotton Kurti Set',
                    'description' => 'Complete Outfit',
                    'price' => 2999,
                    'original_price' => 4499,
                    'discount' => 33,
                    'badge' => 'COMBO',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Kurti Sets',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'combo-kurti-set-designer-1',
                    'name' => 'Designer Kurti Set',
                    'description' => 'Premium Quality',
                    'price' => 3999,
                    'original_price' => 5999,
                    'discount' => 33,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Kurti Sets',
                    'fabric' => 'Georgette'
                ],
            ],
            
            'combos_ethnic_sets' => [
                [
                    'id' => 'combo-ethnic-printed-1',
                    'name' => 'Ethnic Printed Set',
                    'description' => 'Festive Collection',
                    'price' => 3499,
                    'original_price' => 5499,
                    'discount' => 36,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Ethnic Sets',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'combo-ethnic-embroidered-1',
                    'name' => 'Embroidered Ethnic Set',
                    'description' => 'Traditional Style',
                    'price' => 4499,
                    'original_price' => 6999,
                    'discount' => 36,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'purple',
                    'image' => 'https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=500&h=600&fit=crop',
                    'category' => 'Ethnic Sets',
                    'fabric' => 'Silk'
                ],
            ],
            
            // Category Pages Data
            'gen_alpha' => [
                [
                    'id' => 'gen-alpha-oversized-hoodie-1',
                    'name' => 'Oversized Hoodie',
                    'description' => 'Comfortable Streetwear',
                    'price' => 2299,
                    'original_price' => 3299,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=500&h=600&fit=crop',
                    'category' => 'Gen Alpha',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'gen-alpha-streetwear-kurti-1',
                    'name' => 'Streetwear Kurti',
                    'description' => 'Modern Fusion',
                    'price' => 2499,
                    'original_price' => 3499,
                    'discount' => 29,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1594633313593-bab3825d0caf?w=500&h=600&fit=crop',
                    'category' => 'Gen Alpha',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'gen-alpha-casual-shirt-1',
                    'name' => 'Casual Shirt',
                    'description' => 'Everyday Comfort',
                    'price' => 1899,
                    'original_price' => 2699,
                    'discount' => 30,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1617137968427-85924c800a61?w=500&h=600&fit=crop',
                    'category' => 'Gen Alpha',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'gen-alpha-fusion-dress-1',
                    'name' => 'Fusion Dress',
                    'description' => 'Contemporary Style',
                    'price' => 2799,
                    'original_price' => 3999,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=500&h=600&fit=crop',
                    'category' => 'Gen Alpha',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'gen-alpha-denim-coord-1',
                    'name' => 'Denim Co-ord',
                    'description' => 'Stylish Set',
                    'price' => 2599,
                    'original_price' => 3699,
                    'discount' => 30,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=500&h=600&fit=crop',
                    'category' => 'Gen Alpha',
                    'fabric' => 'Denim'
                ],
                [
                    'id' => 'gen-alpha-minimal-tee-1',
                    'name' => 'Minimal Tee',
                    'description' => 'Simple & Clean',
                    'price' => 1499,
                    'original_price' => 2199,
                    'discount' => 32,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=500&h=600&fit=crop',
                    'category' => 'Gen Alpha',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'gen-alpha-kids-street-set-1',
                    'name' => 'Kids Street Set',
                    'description' => 'Comfortable for Kids',
                    'price' => 1999,
                    'original_price' => 2899,
                    'discount' => 31,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1602810318383-e386cc2a3cc7?w=500&h=600&fit=crop',
                    'category' => 'Gen Alpha',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'gen-alpha-unisex-jacket-1',
                    'name' => 'Unisex Jacket',
                    'description' => 'Versatile Style',
                    'price' => 2999,
                    'original_price' => 4299,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1520974735194-6c7b5f41f0a2?w=500&h=600&fit=crop',
                    'category' => 'Gen Alpha',
                    'fabric' => 'Polyester'
                ],
            ],
            
            'gen_z' => [
                [
                    'id' => 'gen-z-y2k-hoodie-1',
                    'name' => 'Y2K Oversized Hoodie',
                    'description' => 'Retro Vibes',
                    'price' => 2699,
                    'original_price' => 3899,
                    'discount' => 31,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=500&h=600&fit=crop',
                    'category' => 'Gen Z',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'gen-z-street-crop-kurti-1',
                    'name' => 'Street Crop Kurti',
                    'description' => 'Modern Edge',
                    'price' => 2899,
                    'original_price' => 4099,
                    'discount' => 29,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1519744792095-2f2205e87b6f?w=500&h=600&fit=crop',
                    'category' => 'Gen Z',
                    'fabric' => 'Rayon'
                ],
                [
                    'id' => 'gen-z-baggy-graphic-shirt-1',
                    'name' => 'Baggy Graphic Shirt',
                    'description' => 'Bold Prints',
                    'price' => 2199,
                    'original_price' => 3199,
                    'discount' => 31,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1617137968427-85924c800a61?w=500&h=600&fit=crop',
                    'category' => 'Gen Z',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'gen-z-fusion-dress-1',
                    'name' => 'Gen Z Fusion Dress',
                    'description' => 'Contemporary Elegance',
                    'price' => 3199,
                    'original_price' => 4599,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1485968579580-b6d095142e6e?w=500&h=600&fit=crop',
                    'category' => 'Gen Z',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'gen-z-denim-cargo-coord-1',
                    'name' => 'Denim Cargo Co-ord',
                    'description' => 'Street Style',
                    'price' => 3499,
                    'original_price' => 4999,
                    'discount' => 30,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=500&h=600&fit=crop',
                    'category' => 'Gen Z',
                    'fabric' => 'Denim'
                ],
                [
                    'id' => 'gen-z-minimal-aesthetic-tee-1',
                    'name' => 'Minimal Aesthetic Tee',
                    'description' => 'Clean Design',
                    'price' => 1799,
                    'original_price' => 2599,
                    'discount' => 31,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=500&h=600&fit=crop',
                    'category' => 'Gen Z',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'gen-z-urban-streetwear-set-1',
                    'name' => 'Urban Streetwear Set',
                    'description' => 'Complete Outfit',
                    'price' => 2599,
                    'original_price' => 3799,
                    'discount' => 32,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1602810318383-e386cc2a3cc7?w=500&h=600&fit=crop',
                    'category' => 'Gen Z',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'gen-z-unisex-bomber-jacket-1',
                    'name' => 'Unisex Bomber Jacket',
                    'description' => 'Classic Style',
                    'price' => 3999,
                    'original_price' => 5799,
                    'discount' => 31,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1520974735194-6c7b5f41f0a2?w=500&h=600&fit=crop',
                    'category' => 'Gen Z',
                    'fabric' => 'Polyester'
                ],
            ],
            
            'minimal' => [
                [
                    'id' => 'minimal-oversized-hoodie-1',
                    'name' => 'Minimal Oversized Hoodie',
                    'description' => 'Simple & Comfortable',
                    'price' => 2299,
                    'original_price' => 3299,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=500&h=600&fit=crop',
                    'category' => 'Minimal',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'minimal-straight-kurti-1',
                    'name' => 'Minimal Straight Kurti',
                    'description' => 'Clean Lines',
                    'price' => 1999,
                    'original_price' => 2899,
                    'discount' => 31,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=500&h=600&fit=crop',
                    'category' => 'Minimal',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'minimal-casual-shirt-1',
                    'name' => 'Minimal Casual Shirt',
                    'description' => 'Everyday Essential',
                    'price' => 1799,
                    'original_price' => 2599,
                    'discount' => 31,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1617137968427-85924c800a61?w=500&h=600&fit=crop',
                    'category' => 'Minimal',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'minimal-simple-dress-1',
                    'name' => 'Minimal Simple Dress',
                    'description' => 'Elegant Simplicity',
                    'price' => 2499,
                    'original_price' => 3599,
                    'discount' => 31,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=500&h=600&fit=crop',
                    'category' => 'Minimal',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'minimal-neutral-coord-1',
                    'name' => 'Minimal Neutral Co-ord',
                    'description' => 'Neutral Tones',
                    'price' => 2399,
                    'original_price' => 3499,
                    'discount' => 31,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=500&h=600&fit=crop',
                    'category' => 'Minimal',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'minimal-basic-tee-1',
                    'name' => 'Minimal Basic Tee',
                    'description' => 'Wardrobe Essential',
                    'price' => 1299,
                    'original_price' => 1999,
                    'discount' => 35,
                    'badge' => 'BESTSELLER',
                    'badge_color' => 'yellow',
                    'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=500&h=600&fit=crop',
                    'category' => 'Minimal',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'minimal-comfort-set-1',
                    'name' => 'Minimal Comfort Set',
                    'description' => 'Relaxed Fit',
                    'price' => 2199,
                    'original_price' => 3199,
                    'discount' => 31,
                    'badge' => 'NEW',
                    'badge_color' => 'red',
                    'image' => 'https://images.unsplash.com/photo-1602810318383-e386cc2a3cc7?w=500&h=600&fit=crop',
                    'category' => 'Minimal',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'minimal-classic-jacket-1',
                    'name' => 'Minimal Classic Jacket',
                    'description' => 'Timeless Design',
                    'price' => 2799,
                    'original_price' => 4099,
                    'discount' => 32,
                    'badge' => 'TRENDING',
                    'badge_color' => 'green',
                    'image' => 'https://images.unsplash.com/photo-1520974735194-6c7b5f41f0a2?w=500&h=600&fit=crop',
                    'category' => 'Minimal',
                    'fabric' => 'Cotton'
                ],
            ],
        ];
    }
    
    public static function getHeroImages()
    {
        return [
            'hero' => asset('images/heroimg1.png'),
            'split_left' => asset('images/productimg2.jpg'),
            'banner' => asset('images/productimg3.webp'),
        ];
    }
    
    public static function getCollectionImages()
    {
        return [
            'patterned' => asset('images/collection_img1.webp'),
            'anarkali' => asset('images/collection_img2.webp'),
            'casual' => asset('images/casual_img1.jpg'),
            'complete' => asset('images/casual_img2.webp'),
        ];
    }
    
    public static function getProductById($id)
    {
        $allProducts = self::getHomepageProducts();
        foreach ($allProducts as $category => $products) {
            foreach ($products as $product) {
                if ($product['id'] === $id) {
                    return $product;
                }
            }
        }
        return null;
    }
}