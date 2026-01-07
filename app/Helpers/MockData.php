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