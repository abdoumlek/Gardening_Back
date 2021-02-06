<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends  MailController
{

    public function store(Request $request)
    {
        $message =  Message::create($request->all());
        $subject= $request->get("subject");
        $phoneNumber= $request->get("phoneNumber");
        $messageContent= $request->get("message");
        $lastName= $request->get("lastName");
        $firstName= $request->get("firstName");
        $content = $lastName . " " . $firstName . " ". $phoneNumber . " " . $messageContent;
        $this->html_email("Demande Jardins",$subject, $content );
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
