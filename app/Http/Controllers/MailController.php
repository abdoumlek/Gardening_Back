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
    public function html_email($name, $subject, $content)
    {
        $data = ['name' => $name,'content'=>$content];
        Mail::send('mail', $data, function ($message) use($subject) {
            $message->to('plantesetjardinsbizerte@gmail.com', 'Plantes et jardins Bizerte')->subject($subject);
            $message->from('plantesetjardinsbizerte@gmail.com', 'Plantes et jardins Bizerte');
        });
    }
    public function order_email($order, $subject, $products, $delivery_price, $total_price, $total_price_before_delivery)
    {
        $data = ['order' => $order, 'products'=>$products, 'delivery_price'=>$delivery_price ,'total_price'=>$total_price, 'total_price_before_delivery'=>$total_price_before_delivery];
        Mail::send('orderMail', $data, function ($message) use($subject) {
            $message->to('plantesetjardinsbizerte@gmail.com', 'Plantes et jardins Bizerte')->subject($subject);
            $message->from('plantesetjardinsbizerte@gmail.com', 'Plantes et jardins Bizerte');
        });
    }
    public function message_email($subject, $content)
    {
        $data = ['content' => $content];
        Mail::send('messageMail', $data, function ($message) use($subject) {
            $message->to('plantesetjardinsbizerte@gmail.com', 'Plantes et jardins Bizerte')->subject($subject);
            $message->from('plantesetjardinsbizerte@gmail.com', 'Plantes et jardins Bizerte');
        });
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
