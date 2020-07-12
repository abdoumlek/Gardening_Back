<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = ['first_name','last_name','email','role_id','password'];
    protected $hidden = ['remember_token','api_token','password'];
    protected $attributes = [
        'phone' => '',
        'city' => '',
        'role_id' => 21,
        'address' => '',
    ];
}
