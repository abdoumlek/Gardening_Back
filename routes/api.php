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
Route::middleware('auth:api')->group(function () {
    Route::get('users', 'UserController@adminUsersList'); //users list
    Route::get('products/admin', 'ProductController@adminProductsList'); //liste des produits admins
    Route::get('products/admin/{product}', 'ProductController@adminGetProductById'); //get porduct as admin
    Route::post('products', 'ProductController@store'); //add product admin only
    Route::put('products/{product}', 'ProductController@update'); //update product admin only
    Route::delete('products/{product}', 'ProductController@delete'); //delete product admin only
    Route::post('categories', 'CategoryController@store'); //add category admin only
    Route::put('categories/{category}', 'CategoryController@update'); //update category admin only
    Route::delete('categories/{category}', 'CategoryController@delete'); //delete category admin only
    Route::post('users/create', 'UserController@createUser'); //add User admin only
    Route::get('products/upload', 'ProductController@getUploadImageToken'); //liste des produits admins
    Route::get('galleries/upload', 'GalleryController@getUploadImageToken'); //liste des produits admins
    Route::put('galleries/{gallery}', 'GalleryController@update'); //update product admin only
    Route::post('galleries', 'GalleryController@store'); //update product admin only
    Route::delete('galleries/{gallery}', 'GalleryController@delete'); //update product admin only
});


//Users
Route::post('users/login', 'LoginController@login'); //add product admin only


Route::get('products/user', 'ProductController@userProductsList'); //liste des produits utilisateurs
Route::get('products/user/{product}', 'ProductController@userGetProductById'); //get product as user
Route::get('categories', 'CategoryController@categoriesList'); //liste des produits admins
Route::get('galleries', 'GalleryController@galleriesList'); //liste des produits admins


