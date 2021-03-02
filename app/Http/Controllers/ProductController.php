<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use ImageKit\ImageKit;

class ProductController extends Controller
{
    public function adminProductsList()
    {
        return Product::join('categories', 'categories.id', '=', 'category_id')->select('categories.name as category', 'products.*')->get();
    }

    public function userProductsList()
    {
        return Product::join('categories', 'categories.id', '=', 'category_id')->select('categories.name  as category', 'products.id', 'reference', 'products.name', 'photo', 'discount', 'selling_price','quantity')->get();
    }

    public function userGetProductById(Product $product)
    {
        return Product::join('categories', 'categories.id', '=', 'category_id')->where('products.id', $product->id)->select('categories.name  as category', 'reference', 'products.name', 'photo', 'discount', 'products.description', 'selling_price', 'quantity')->first();
    }
    public function adminGetProductById(Product $product)
    {
        return Product::join('categories', 'categories.id', '=', 'category_id')->where('products.id', $product->id)->select('products.*', 'categories.name as category')->first();
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request)
    {
        $product  = Product::find($request->get("id"));
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function delete(Request $request, Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }

    public function getUploadImageToken()
    {
        $public_key = env('PUBLIC_UPLOAD_IMAGE_KEY');
        $your_private_key = env('PRIVATE_UPLOAD_IMAGE_KEY');
        $url_end_point =env('PRIVATE_UPLOAD_IMAGE_URL');

        $imageKit = new ImageKit(
            $public_key,
            $your_private_key,
            $url_end_point
        );
        
        $authenticationParameters = $imageKit->getAuthenticationParameters();

        return response()->json($authenticationParameters, 200);
    }
}
