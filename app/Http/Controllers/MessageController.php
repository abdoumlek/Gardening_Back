<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use \stdClass;

class MessageController extends  MailController
{

    public function store(Request $request)
    {
        $message =  Message::create($request->all());
        $subject= $request->get("subject");
        $phoneNumber= $request->get("phoneNumber");
        $messageContent= $request->get("message");
        $email= $request->get("email");
        $lastName= $request->get("lastName");
        $firstName= $request->get("firstName");
        $content = new stdClass();
        $content->subject = $subject;
        $content->last_name = $lastName;
        $content->first_name = $firstName;
        $content->email = $email;
        $content->phone_number = $phoneNumber;
        $content->message = $messageContent;
        // dd($content);
        $this->message_email($subject, $content );
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
