<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //only the name is mandatory for category
    protected $fillable = ['name', 'description'];
    protected $attributes = [
        'description' => '',
    ];
}
