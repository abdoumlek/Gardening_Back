<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $message =  Message::create($request->all());
        
        return response()->json($message, 201);
    }
    public function adminMessagesList()
    {
        return Message::all();
    }

    public function adminGetMessageById($messageId)
    {
        return Message::where('id', $messageId)->first();
    }
}
