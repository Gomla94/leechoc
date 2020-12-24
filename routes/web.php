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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/store', 'HomeController@store')->name('store');
Route::get('/about-us', 'HomeController@about')->name('about-us');
Route::get('/contact-us', 'HomeController@contact')->name('contact-us');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/categories/{category_id}', 'HomeController@filter_products')->name('filter_products');
Route::post('/checkout', 'HomeController@checkout')->name('checkout');
Route::post('/checkout/done', 'Order\OrderController@store');
Route::get('/all', 'HomeController@all')->name('all');
Route::get('/cart', 'HomeController@cart')->name('cart');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {
    Route::resource('products', 'Product\ProductController');
    Route::resource('categories', 'Category\CategoryController');
    Route::get('orders', 'Order\OrderController@index')->name('orders.index');
    Route::get('orders/{order}', 'Order\OrderController@show')->name('orders.show');
    Route::resource('images', 'Images\ImagesController');
    Route::get('homepagetext/edit', 'HomePage\HomePageController@edit')->name('homepage.edit');
    Route::put('homepagetext/edit', 'HomePage\HomePageController@update')->name('homepage.update');
    Route::get('changepassword', 'HomeController@change_password_form')->name('admin.changepassword')->middleware('auth');
    Route::post('changepassword', 'HomeController@change_password')->name('changepassword.store')->middleware('auth');
    // Route::get('images/create', 'Images\ImagesController@create')->name('images.create');
    // Route::post('images/create', 'Images\ImagesController@store')->name('images.store');
});
