<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function adminProductsList()
    {
        return Product::select('Reference', 'name', 'buying_price', 'selling_price', 'quantity')->get();
    }

    public function userProductsList()
    {
        return Product::select('Reference', 'name', 'photo', 'discount', 'description', 'selling_price')->get();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function delete(Request $request, Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
