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
Route::get('products/admin', 'ProductController@adminProductsList');//liste des produits admins
Route::get('products/user', 'ProductController@userProductsList');//liste des produits utilisateurs
Route::get('products/admin/{product}', 'ProductController@adminGetProductById');//get porduct as admin
Route::get('products/user/{product}', 'ProductController@userGetProductById');//get product as user
Route::post('products', 'ProductController@store');//add product admin only
Route::put('products/{product}', 'ProductController@update');//update product admin only
Route::delete('products/{product}', 'ProductController@delete');//delete product admin only

Route::get('categories', 'CategoryController@categoriesList');//liste des produits admins
Route::post('categories', 'CategoryController@store');//add product admin only
Route::put('categories/{category}', 'CategoryController@update');//update product admin only
Route::delete('categories/{category}', 'CategoryController@delete');//delete product admin only
