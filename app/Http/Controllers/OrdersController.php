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
        $price = $price + 5;
        $this->html_email("Commande", "Commande prix" . $price, $content);
        return response()->json($order, 201);
    }
    public function adminOrdersList()
    {
        return Order::with('products')->get();
    }

    public function adminGetOrderById($orderId)
    {
        return Order::where('id', $orderId)->first();
    }
}
