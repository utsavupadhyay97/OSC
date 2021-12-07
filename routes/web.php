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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



Route::get('/admin', 'AdminController@index')->name('admin');
Route::resources(['/admin/products'=>'ProductController']);
Route::resources(['/admin/users'=> 'UserController']);
Route::resources(['/admin/blogs'=>'BlogController']);
Route::resources(['/admin/recentprojects'=>'RecentProjectController']);
Route::resources(['/admin/services'=>'ServiceController']);
// Route::resource(['/admin/single'=> 'SingleProductController']);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/order', 'orderController@index');
// Route::get('/product/{$id}', 'SingleProductController@show')->name('single');
//Route::resource(['Singleproduct', 'SingleProductController']);

Route::get('/product/{id}','SingleProductController@show');
ROute::get('/service/{id}','ServiceController@show');


//Route::get('/product/{$id}', 'SingleProductController@show')->name('product');
Route::get('/cart', 'CartController@index')->name('cart_index');


// Route::get('/', 'ProductsController@index');
 
Route::get('cart', 'CartController@index');
 
Route::get('Cart/{id}','CartController@addToCart');

// Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
//     return "this page requires that you be logged in and an Admin";
// }]);
Route::get('/Ourteam', 'HomeController@Ourteam');
Route::get('/contactus', 'HomeController@contactus');
//Route::resources(['/admin/users'=> 'UserController']);
Route::get('/products', 'HomeController@products');
Route::get('/services', 'HomeController@services');
Route::get('/blogs', 'HomeController@blogs');




Route::resource('/checkout', 'CheckoutController',[
    'names' => [
        'create' => 'checkout.create',
        'index' => 'checkout.index',
        'store' => 'checkout.store',
        'destroy' => 'checkout.destroy',
        'edit' => 'backend.checkout.edit',
        'update' => 'backend.checkout.update',
    ]
]);

Route::patch('/update-cart', 'CartController@update');
 
Route::delete('/remove-from-cart', 'CartController@remove');

