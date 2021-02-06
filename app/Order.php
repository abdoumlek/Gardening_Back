<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Order extends Model
{
    public function products(){
       return $this->belongsToMany(Product::class)->withTimestamps()->withPivot('product_count', 'product_price');
    }
    protected $fillable = ['name',  'phoneNumber', 'address', 'status'];
    protected $attributes = [
        'status' => 'new'];
}
