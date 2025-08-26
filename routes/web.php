<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/test-swiper', function () {
    return view('test-swiper');
});
Route::get('/products', function () {
    $products = [
        [
            'id'        => 1,
            'name'      => 'Alexander Sofa',
            'slug'      => 'alexander-sofa',
            'category'  => 'Accessories',
            'badge'     => '10% off',
            'image'     => 'product1.png',
            'price'     => 12.00,
            'old_price' => 15.00,
        ],
        [
            'id'        => 2,
            'name'      => 'Chair Pillow',
            'slug'      => 'chair-pillow',
            'category'  => 'Pharma Product',
            'badge'     => '10% off',
            'image'     => 'product2.png',
            'price'     => 34.00,
            'old_price' => 20.00,
        ],
        [
            'id'        => 3,
            'name'      => 'Curaskin Lipgel',
            'slug'      => 'curaskin-lipgel',
            'category'  => 'Skin Product',
            'badge'     => '10% off',
            'image'     => 'product3.png',
            'price'     => 8.50,
            'old_price' => 12.00,
        ],
        [
            'id'        => 4,
            'name'      => 'Leather Chair',
            'slug'      => 'leather-chair',
            'category'  => 'Accessories',
            'badge'     => '10% off',
            'image'     => 'product4.png',
            'price'     => 66.00,
            'old_price' => 80.00,
        ],
        [
            'id'        => 5,
            'name'      => 'Alexander Sofa',
            'slug'      => 'alexander-sofa-2',
            'category'  => 'Accessories',
            'badge'     => '10% off',
            'image'     => 'product5.png',
            'price'     => 12.00,
            'old_price' => 15.00,
        ],
        [
            'id'        => 6,
            'name'      => 'Chair Pillow',
            'slug'      => 'chair-pillow-2',
            'category'  => 'Pharma Product',
            'badge'     => '10% off',
            'image'     => 'product6.png',
            'price'     => 34.00,
            'old_price' => 20.00,
        ],
        [
            'id'        => 7,
            'name'      => 'Modern Lamp',
            'slug'      => 'modern-lamp',
            'category'  => 'Accessories',
            'badge'     => null,
            'image'     => 'product7.png',
            'price'     => 45.00,
            'old_price' => null,
        ],
        [
            'id'        => 8,
            'name'      => 'Wooden Table',
            'slug'      => 'wooden-table',
            'category'  => 'Furniture',
            'badge'     => '20% off',
            'image'     => 'product8.png',
            'price'     => 120.00,
            'old_price' => 150.00,
        ],
    ];

    return view('product', compact('products'));
});



