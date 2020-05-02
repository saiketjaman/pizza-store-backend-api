<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'Api\UserController@login');
Route::post('register', 'Api\UserController@register');
Route::group(['middleware' => 'auth:api', 'namespace' => 'Api'], function () {
    Route::get('logout', 'UserController@logout');
    Route::resource('/orders', 'OrderController');
    Route::patch('orders/{order}/deliver', 'OrderController@deliverOrder');
});
Route::group(['namespace' => 'Api'], function () {
    Route::get('/products', 'ProductsController@index');
    Route::get('/products/{product}', 'ProductsController@show');
    Route::get('/cart', 'ProductsCartController@index');
    Route::post('/cart', 'ProductsCartController@store');
    Route::delete('/cart/{productId}', 'ProductsCartController@destroy');
    Route::delete('/cart', 'ProductsCartController@destroyAll');
});
