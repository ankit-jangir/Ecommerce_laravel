<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    $products = \App\Helpers\MockData::getHomepageProducts();
    $heroImages = \App\Helpers\MockData::getHeroImages();
    $collectionImages = \App\Helpers\MockData::getCollectionImages();
    return view('Pages.home', compact('products', 'heroImages', 'collectionImages'));
})->name('home');

// New In
Route::get('/new-in', function () {
    return view('Pages.new-in');
})->name('new-in');

// Women Routes
Route::get('/women', function () {
    return view('Pages.women');
})->name('women');

Route::get('/women/kurti', function () {
    return view('Pages.women-kurti');
})->name('women.kurti');

Route::get('/women/tops', function () {
    return view('Pages.women-tops');
})->name('women.tops');

Route::get('/women/dresses', function () {
    return view('Pages.women-dresses');
})->name('women.dresses');

Route::get('/women/bottoms', function () {
    return view('Pages.women-bottoms');
})->name('women.bottoms');

// Kurtis Routes
Route::get('/kurtis', function () {
    return view('Pages.kurtis');
})->name('kurtis');

Route::get('/kurtis/anarkali', function () {
    return view('Pages.kurtis-anarkali');
})->name('kurtis.anarkali');

Route::get('/kurtis/straight', function () {
    return view('Pages.kurtis-straight');
})->name('kurtis.straight');

Route::get('/kurtis/a-line', function () {
    return view('Pages.kurtis-a-line');
})->name('kurtis.a-line');

Route::get('/kurtis/printed', function () {
    return view('Pages.kurtis-printed');
})->name('kurtis.printed');

// Combos Routes
Route::get('/combos', function () {
    return view('Pages.combos');
})->name('combos');

Route::get('/combos/kurti-sets', function () {
    return view('Pages.combos-kurti-sets');
})->name('combos.kurti-sets');

Route::get('/combos/ethnic-sets', function () {
    return view('Pages.combos-ethnic-sets');
})->name('combos.ethnic-sets');

// Men Routes
Route::get('/men', function () {
    return view('Pages.men');
})->name('men');

Route::get('/men/kurta', function () {
    return view('Pages.men-kurta');
})->name('men.kurta');

Route::get('/men/shirts', function () {
    return view('Pages.men-shirts');
})->name('men.shirts');

Route::get('/men/pants', function () {
    return view('Pages.men-pants');
})->name('men.pants');

// Categories Routes
Route::get('/categories', function () {
    return view('Pages.categories');
})->name('categories');

Route::get('/categories/gen-alpha', function () {
    return view('Pages.categories-gen-alpha');
})->name('categories.gen-alpha');

Route::get('/categories/gen-z', function () {
    return view('Pages.categories-gen-z');
})->name('categories.gen-z');

Route::get('/categories/minimal', function () {
    return view('Pages.categories-minimal');
})->name('categories.minimal');

// Shop
Route::get('/shop', function () {
    return view('Pages.shop');
})->name('shop');

// BLOG LIST PAGE
Route::get('/blogs', function () {
    $products = \App\Helpers\MockData::getHomepageProducts();
    return view('Pages.blogs', compact('products'));
})->name('blogs');

// BLOG DETAIL PAGE
Route::get('/blogs/{slug}', function ($slug) {
    $products = \App\Helpers\MockData::getHomepageProducts();
    return view('Pages.blogdetail', compact('slug', 'products'));
})->name('blog.detail');


// Gifting
Route::get('/gifting', function () {
    return view('Pages.gifting');
})->name('gifting');

// Contact
Route::get('/contact', function () {
    return view('Pages.contact');
})->name('contact');

// Authentication Routes
Route::get('/login', function () {
    return view('Pages.login');
})->name('login');

Route::get('/register', function () {
    return view('Pages.register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('Pages.forgot-password');
})->name('forgot-password');

Route::get('/account', function () {
    return view('Pages.useraccount.account');
})->name('account');

Route::get('/account/dashboard', function () {
    return view('Pages.useraccount.dashboard');
})->name('account.dashboard');

Route::get('/account/orders', function () {
    return view('Pages.useraccount.orders');
})->name('account.orders');

Route::get('/account/coupons', function () {
    return view('Pages.useraccount.coupons');
})->name('account.coupons');

Route::get('/account/subscriptions', function () {
    return view('Pages.useraccount.subscriptions');
})->name('account.subscriptions');

Route::get('/account/returns', function () {
    return view('Pages.useraccount.returns');
})->name('account.returns');

Route::get('/wishlist', function () {
    return view('Pages.wishlist');
})->name('wishlist');

Route::get('/account/loyalty', function () {
    return view('Pages.useraccount.loyalty');
})->name('account.loyalty');

Route::get('/account/referrals', function () {
    return view('Pages.useraccount.referrals');
})->name('account.referrals');

Route::get('/account/gift-cards', function () {
    return view('Pages.useraccount.gift-cards');
})->name('account.gift-cards');

Route::get('/account/addresses', function () {
    return view('Pages.useraccount.addresses');
})->name('account.addresses');

Route::get('/account/notifications', function () {
    return view('Pages.useraccount.notifications');
})->name('account.notifications');

Route::get('/orders', function () {
    return view('Pages.useraccount.orders');
})->name('orders');

Route::get('/address', function () {
    return view('Pages.useraccount.addresses');
})->name('address');

Route::post('/logout', function () {
    return redirect('/login');
})->name('logout');

// Footer Pages
Route::get('/about-us', function () {
    return view('Pages.about-us');
})->name('about-us');

Route::get('/size-guide', function () {
    $products = \App\Helpers\MockData::getHomepageProducts();
    return view('Pages.size-guide', compact('products'));
})->name('size-guide');

Route::get('/returns', function () {
    return view('Pages.returns');
})->name('returns');

Route::get('/faq', function () {
    return view('Pages.faq');
})->name('faq');

Route::get('/terms', function () {
    return view('Pages.terms');
})->name('terms');

Route::get('/privacy', function () {
    return view('Pages.privacy');
})->name('privacy');

Route::get('/checkout', function () {
    return view('Pages.checkout');
})->name('checkout');

Route::get('/payment', function () {
    return view('Pages.payment');
})->name('payment');

Route::get('/account/orders/{id}', function ($id) {
    return view('Pages.useraccount.order-detail', compact('id'));
})->name('account.order.detail');

Route::get('/account/orders/{id}/track', function ($id) {
    return view('Pages.useraccount.track-order', compact('id'));
})->name('account.order.track');

Route::get('/account/returns/{id}/track', function ($id) {
    return view('Pages.useraccount.track-return', compact('id'));
})->name('account.return.track');

// Product Detail Route
Route::get('/product/{id}', function ($id) {
    $product = \App\Helpers\MockData::getProductById($id);
    $products = \App\Helpers\MockData::getHomepageProducts();
    return view('Pages.product-detail', ['productId' => $id, 'product' => $product, 'products' => $products]);
})->name('product.detail');
