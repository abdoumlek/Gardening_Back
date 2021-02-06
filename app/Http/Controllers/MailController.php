<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    // public function basic_email()
    // {
    //     $data = array('name' => 'Plantes et jardins Bizerte');

    //     Mail::send(['text' => 'mail'], $data, function ($message) {
    //         $message->to('plantesetjardinsbizerte@gmail.com', 'Plantes et jardins Bizerte')->subject('Laravel Basic Testing Mail');
    //         $message->from('plantesetjardinsbizerte@gmail.com', 'Plantes et jardins Bizerte');
    //     });
    //     echo "Basic Email Sent. Check your inbox.";
    // }
    public function html_email()
    {
        $data = array('name' => 'Plantes et jardins Bizerte');
        Mail::send('mail', $data, function ($message) {
            $message->to('plantesetjardinsbizerte@gmail.com', 'Plantes et jardins Bizerte')->subject('Laravel HTML Testing Mail');
            $message->from('plantesetjardinsbizerte@gmail.com', 'Plantes et jardins Bizerte');
        });
        echo "HTML Email Sent. Check your inbox.";
    }
    // public function attachment_email()
    // {
    //     $data = array('name' => 'Plantes et jardins Bizerte');
    //     Mail::send('mail', $data, function ($message) {
    //         $message->to('abc@gmail.com', 'Plantes et jardins Bizerte')->subject('Laravel Testing Mail with Attachment');
    //         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
    //         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
    //         $message->from('xyz@gmail.com', 'Plantes et jardins Bizerte');
    //     });
    //     echo "Email Sent with attachment. Check your inbox.";
    // }
}
