<?php

use Illuminate\Support\Facades\Route;
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

Route::pattern('slug','(.*)');
Route::pattern('id','([0-9]*)');

Route::group(['namespace' => 'Clothes'], function(){
	//Product
	Route::get('', 'IndexController@index')->name('clothes.index.index');
	Route::get('{slug}-{id}', 'ShopController@list')->name('clothes.shop.list');
	Route::get('{slug}-{id}.html', 'ShopController@detail')->name('clothes.shop.detail');
	Route::post('comment/{id}', 'CommentController@postComment')->name('clothes.shop.comment');
	Route::get('quickview', 'ShopController@quickView')->name('clothes.shop.quickview');
	Route::get('sale', 'ShopController@saleOnline')->name('clothes.shop.sale');
	Route::get('search', 'SearchController@getSearch')->name('clothes.search.search');
	Route::get('show', 'SearchController@show')->name('clothes.search.show');
	//End - Product

	//add CartProduct
	Route::get('cart', 'CartController@index')->name('clothes.cart.index');
	Route::get('checkout', 'CartController@checkout')->name('clothes.cart.checkout')->middleware('cartrole:false');
	Route::post('checkout', 'CartController@postCheckout')->name('clothes.cart.checkout');
	Route::get('add-cart', 'CartController@postCart')->name('clothes.cart.add-cart');
	Route::post('del-cart', 'CartController@delCart')->name('clothes.cart.del-cart');
	Route::get('update-cart', 'CartController@updateCart')->name('clothes.cart.update-cart');
	Route::get('del-all', 'CartController@del')->name('clothes.cart.del-all');

	Route::get('payment-success/{id}', 'CartController@getPayment')->name('clothes.order.payment');
	Route::post('acccept-order', 'CartController@postAccceptorder')->name('clothes.order.acccept-order');
	Route::post('un-order', 'CartController@postUnorder')->name('clothes.order.un-order');
	Route::get('purchase', 'CartController@purchase')->name('clothes.order.purchase');
	//End - CartProduct

	Route::get('contact', 'ContactController@index')->name('clothes.contact.index');
	
});

//Admin 
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function(){
	Route::get('', 'IndexController@index')->name('admin.index.index')->middleware('role:1');
	//Category
	Route::get('cat', 'CatProductController@index')->name('admin.cat.index')->middleware('role:1');
	Route::get('cat/edit', 'CatProductController@getEdit')->name('admin.cat.edit')->middleware('role:1');
	Route::post('cat/edit', 'CatProductController@postEdit')->name('admin.cat.edit')->middleware('role:1');
	Route::post('add', 'CatProductController@postAdd')->name('admin.cat.add')->middleware('role:1');
	Route::get('cat/del', 'CatProductController@del')->name('admin.cat.del')->middleware('role:1');
	//End - Category
	//Product
	Route::get('shop', 'ShopController@index')->name('admin.shop.index')->middleware('role:1');
	
	Route::get('shop/add', 'ShopController@getAdd')->name('admin.shop.add')->middleware('role:1');
	Route::post('shop/add', 'ShopController@postAdd')->name('admin.shop.add')->middleware('role:1');
	Route::get('shop/edit/{id}', 'ShopController@getEdit')->name('admin.shop.edit')->middleware('role:1');
	Route::post('shop/edit/{id}', 'ShopController@postEdit')->name('admin.shop.edit')->middleware('role:1');
	Route::get('shop/del/{id}', 'ShopController@delProduct')->name('admin.shop.del')->middleware('role:1');
	Route::get('ajax-selling', 'ShopController@changeSelling')->name('admin.shop.ajax-selling')->middleware('role:1');
	Route::get('ajax-status', 'ShopController@changeStatus')->name('admin.shop.ajax-status')->middleware('role:1');
	Route::get('del-img', 'ShopController@delImg')->name('admin.shop.del-img');
	// Route::get('shop/search/{id}', 'SearchController@show')->name('admin.shop.search')->middleware('role:1');
	// Route::get('shop/search', 'SearchController@searchProduct')->name('admin.shop.searchProduct')->middleware('role:1');
	//End - Product
	//Users 
	Route::get('users', 'UsersController@index')->name('admin.users.index')->middleware('role:1');
	Route::get('users/edit/{id}', 'UsersController@getEdit')->name('admin.users.edit')->middleware('role:1');
	Route::post('users/edit/{id}', 'UsersController@postEdit')->name('admin.users.edit')->middleware('role:1');
	Route::get('users/del/{id}', 'UsersController@delUser')->name('admin.users.del')->middleware('role:1');
	//End - Users
	//Order 
	Route::get('order', 'OrderController@index')->name('admin.order.index')->middleware('role:1');
	Route::get('order/{id}', 'OrderController@getOrder')->name('admin.order.info')->middleware('role:1');
	Route::post('success-order', 'OrderController@successOrder')->name('admin.order.successOrder')->middleware('role:1');
	Route::post('order-stauts', 'OrderController@changeStatus')->name('admin.order.order-status')->middleware('role:1');
	//End - Order
});

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function(){
	//Login
	Route::get('login', 'AuthController@login')->name('auth.auth.login');
	Route::post('login', 'AuthController@postLogin')->name('auth.auth.login');
	//End - Login
	//Register
	Route::get('register', 'AuthController@register')->name('auth.auth.register');
	Route::post('register', 'AuthController@postRegister')->name('auth.auth.register');
	//End - Register
	//ForgotPassword
	Route::get('Forgot-password', 'AuthController@forgotPassword')->name('auth.auth.forgotpassword');
	Route::post('Forgot-password', 'AuthController@postForgotPassword')->name('auth.auth.forgotpassword');
	//End - ForgotPassword
	
	// Route::get('code-validate', 'AuthController@codeValidate')->name('auth.auth.codevalidate');
	// Route::post('code-validate', 'AuthController@postCodevalidate')->name('auth.auth.codevalidate');
	// Route::get('change-password', 'AuthController@changePassword')->name('auth.auth.changepassword');
	// Route::post('change-password', 'AuthController@postChangepassword')->name('auth.auth.changepassword');
	
	Route::get('logout', 'AuthController@logout')->name('auth.auth.logout');
});

Route::get('/pass', function(){
	return bcrypt('123123');
});
