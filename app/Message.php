<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['subject', 'firstName', 'lastName', 'email', 'phoneNumber', 'message', 'status'];
    protected $attributes = [
        'status' => 'new'];
}
