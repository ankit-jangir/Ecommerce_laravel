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
                    'image' => asset('images/productimg2.jpg'),
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
                    'image' => asset('images/productimg7.jpg'),
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
                    'image' => asset('images/productimg8.webp'),
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
                    'image' => asset('images/productimg10.jpg'),
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
                    'image' => asset('images/productimg11.webp'),
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
                    'id' => 'red-embroidered-kurti',
                    'name' => 'Red Embroidered Kurti',
                    'description' => 'Festival Special',
                    'price' => 3299,
                    'original_price' => 4499,
                    'discount' => 27,
                    'badge' => '#1 BESTSELLER',
                    'badge_color' => 'red',
                    'image' => asset('images/productimg2.jpg'),
                    'category' => 'Embroidered',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'pink-floral-anarkali',
                    'name' => 'Pink Floral Anarkali',
                    'description' => 'Casual Elegance',
                    'price' => 2699,
                    'original_price' => null,
                    'discount' => null,
                    'badge' => 'TRENDING',
                    'badge_color' => 'pink',
                    'image' => asset('images/productimg3.webp'),
                    'category' => 'Anarkali',
                    'fabric' => 'Georgette'
                ],
                [
                    'id' => 'designer-party-kurti-bestseller',
                    'name' => 'Designer Party Kurti',
                    'description' => 'Evening Wear',
                    'price' => 3999,
                    'original_price' => 5499,
                    'discount' => 27,
                    'badge' => 'EXCLUSIVE',
                    'badge_color' => 'purple',
                    'image' => asset('images/productimg5.webp'),
                    'category' => 'Party Wear',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'printed-kurti-set',
                    'name' => 'Printed Kurti Set',
                    'description' => 'Complete Outfit',
                    'price' => 3499,
                    'original_price' => 4999,
                    'discount' => 30,
                    'badge' => 'NEW',
                    'badge_color' => 'green',
                    'image' => asset('images/productimg7.jpg'),
                    'category' => 'Kurti Set',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'embroidered-suit-set',
                    'name' => 'Embroidered Suit Set',
                    'description' => 'Traditional Set',
                    'price' => 5999,
                    'original_price' => 7999,
                    'discount' => 25,
                    'badge' => 'PREMIUM',
                    'badge_color' => 'red',
                    'image' => asset('images/productimg8.webp'),
                    'category' => 'Suit Set',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'silk-anarkali-kurti',
                    'name' => 'Silk Anarkali Kurti',
                    'description' => 'Luxury Collection',
                    'price' => 4799,
                    'original_price' => null,
                    'discount' => null,
                    'badge' => 'POPULAR',
                    'badge_color' => 'pink',
                    'image' => asset('images/productimg10.jpg'),
                    'category' => 'Anarkali',
                    'fabric' => 'Silk'
                ],
                [
                    'id' => 'casual-printed-kurti',
                    'name' => 'Casual Printed Kurti',
                    'description' => 'Everyday Wear',
                    'price' => 2199,
                    'original_price' => 2999,
                    'discount' => 27,
                    'badge' => 'LIMITED',
                    'badge_color' => 'blue',
                    'image' => asset('images/productimg11.webp'),
                    'category' => 'Printed',
                    'fabric' => 'Cotton'
                ],
                [
                    'id' => 'party-wear-kurti',
                    'name' => 'Party Wear Kurti',
                    'description' => 'Festive Collection',
                    'price' => 4299,
                    'original_price' => 5999,
                    'discount' => 28,
                    'badge' => 'HOT',
                    'badge_color' => 'orange',
                    'image' => asset('images/productimg12.jpg'),
                    'category' => 'Party Wear',
                    'fabric' => 'Georgette'
                ],
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
                    'image' => asset('images/productimg2.jpg'),
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
                    'image' => asset('images/productimg3.webp'),
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
                    'image' => asset('images/productimg5.webp'),
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
            'patterned' => asset('images/productimg5.webp'),
            'anarkali' => asset('images/productimg7.jpg'),
            'casual' => asset('images/productimg8.webp'),
            'complete' => asset('images/productimg10.jpg'),
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
