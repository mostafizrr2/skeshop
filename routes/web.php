<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.home');
})->name('home');

Route::get('/about', function () {
    return view('home.about');
})->name('about');

Route::get('/shop', function () {
    return view('home.shop');
})->name('shop');

Route::get('/blog', function () {
    return view('home.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('home.contact');
})->name('contact');

Route::get('/checkout', function () {
    return view('home.checkout');
})->name('checkout');

Route::get('/shipping', function () {
    return view('home.shipping');
})->name('shipping');

Route::get('/payment', function () {
    return view('home.payment');
})->name('payment');

Route::get('/product-single', function () {
    return view('home.product-single');
})->name('peoduct.single');

Route::get('/blog-single', function () {
    return view('home.blog-single');
})->name('blog.single');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
