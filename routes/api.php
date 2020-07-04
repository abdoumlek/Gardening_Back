<?php

use Illuminate\Http\Request;

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

//api routes
Route::get('/products/admin', 'ProductController@adminProductsList');//liste des produits admins
Route::get('/products/user', 'ProductController@userProductsList');//liste des produits utilisateurs
Route::get('products/admin/{product}', 'ProductController@adminGetProductById');
Route::get('products/user/{product}', 'ProductController@userGetProductById');
Route::post('products', 'ProductController@store');
Route::put('products/{product}', 'ProductController@update');
Route::delete('products/{product}', 'ProductController@delete');