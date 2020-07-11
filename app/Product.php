<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'photo', 'quantity', 'selling_price', 'buying_price', 'discount', 'category_id'];
    protected $attributes = [
        'reference' => '',
        'photo' => '',
        'quantity' => 0,
        'buying_price' => 0,
        'discount' => 0,
    ];
}
