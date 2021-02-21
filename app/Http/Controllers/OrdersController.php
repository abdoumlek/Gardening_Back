<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrdersController extends MailController
{
    public function store(Request $orderDetails)
    {
        $details = $orderDetails->get('order');
        $products = $orderDetails->get('products');
        $order =  Order::create($details);
        $price = 0;
        $content = $order->phoneNumber . " " . $order->address;
        foreach ($products as $productOrder) {
            $product = Product::where("id", $productOrder["product_id"])->first();
            $order->products()->attach($product, [
                'product_count' => $productOrder["count"],
                'product_price' => $product->selling_price * (1 - $product->discount),
            ]);
            $content = $content .  " " . $product->id . " " . $product->name . " X " . $productOrder["count"];
            $price =  $price + ($productOrder["count"] * $product->selling_price * (1 - $product->discount));
        }
        $formattedPrice = number_format($price + 5, 3, '.', '');
        $priceBeforeDelivery = number_format($price, 3, '.', '');
        $this->order_email($order, "Commande prix: " . $formattedPrice.'TND', $order->products, "5.000TND", $formattedPrice.'TND', $priceBeforeDelivery.'TND');
        return response()->json($order, 201);
    }
    public function adminOrdersList()
    {
        return Order::with("products")->where('status','new')->get();
    }

    public function adminGetOrderById($orderId)
    {
        return Order::where('id', $orderId)->with("products")->first();
    }

    public function update(Request $request)
    {
        $order  = Order::find($request->get("id"));
        $order->update($request->all());
        return response()->json($order, 200);
    }
}
