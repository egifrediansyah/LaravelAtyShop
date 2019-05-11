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

Route::get('/about', function () {
    return view('about');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/product-detail', function () {
    return view('product-detail');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-detail', function () {
    return view('blog-detail');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contact', function () {
    return view('contact');
});


