<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


/////route for dashboard
Route::prefix('admin')->group(function () {

Route::get('/', 'admin\dashboardController@index')->name('admin');

Route::resource('/users', 'userController');
Route::resource('/orders', 'admin\OrderController');
Route::resource('/products', 'admin\productController');
Route::get('/pending{id}','admin\OrderController@pending')->name('pending');
Route::get('/confirm{id}','admin\OrderController@confirmed')->name('confirmed');



});
////////end route for admin





////////////////////////////////////////////////////////////////////////////////////////////////
/////auth
Auth::routes();
///route for home
Route::get('/home', 'HomeController@index')->name('home');
///route for open product_detials
Route::resource('/home/product', 'ProductController');
//////route for shopping cart
Route::resource('cart', 'cartController');
/////////route for checkOut
Route::resource('checkOut', 'checKOutController');

////route for search
Route::get('/home/result','productController@search')->name('search');
///route for profile
Route::resource('/profile','profileController');
///route for vendors
Route::resource('/vendor','vendorController');
////route for messages
Route::resource('/chat','MessageController');






///route for logout
Route::get('/logout', 'userController@logout')->name('logout');

