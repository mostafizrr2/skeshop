<?php

Route::get('/', 'HomepageController@index')->name('home');
Route::get('/about', 'HomepageController@about')->name('about');
Route::get('/shop',  'HomepageController@shop')->name('shop');
Route::get('/blog', 'HomepageController@blog')->name('blog');
Route::get('/contact', 'HomepageController@contact')->name('contact');
Route::get('/checkout','HomepageController@checkout')->name('checkout');
Route::get('/shipping', 'HomepageController@shipping')->name('shipping');
Route::get('/payment', 'HomepageController@payment')->name('payment');
Route::get('/product-single', 'HomepageController@product_single')->name('peoduct.single');
Route::get('/blog-single', 'HomepageController@blog_single')->name('blog.single');

//For Admin dashboard

Route::group([
    'namespace' => 'Dashboard',
    'middleware' => 'auth',
],

 function(){

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('dashboard/profile', 'DashboardController@profile')->name('dash.profile');
    Route::get('dashboard/settings', 'DashboardController@settings')->name('dash.settings');

    Route::get('dashboard/all-sliders', 'SliderController@index')->name('all.slider');

    Route::get('dashboard/create-slider', 'SliderController@create')->name('create.slider');
    Route::post('dashboard/store-slider', 'SliderController@store')->name('store.slider');
    
    Route::get('dashboard/edit-slider/{id}', 'SliderController@edit')->name('edit.slider');
    Route::put('dashboard/update-slider/{id}', 'SliderController@update')->name('update.slider');

    Route::get('dashboard/delete-slider/{id}', 'SliderController@destroy')->name('destroy.slider');



    Route::get('/logout', 'DashboardController@logout')->name('logout');
});

// LAravel default auth route.. created by laravel
Auth::routes();



