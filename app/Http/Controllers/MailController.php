<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//we will use Mail namespace
use Mail;
class MailController extends Controller
{
    //first, create function for send basic  email
    public function basic_email(){
        $data = ['name' => 'Jorgew Mario'];
        Mail::send(['text'=> 'mail'], $data, function($message){
           $message->to('jmla196@gmail.com', 'Jorge mario Lopez')->subject('Envio Mail from Laravel with Basics emails');
        });
        echo 'Basics Email was sent!';
    }

    //create new function to send HTML email
    public function html_email() {
        $data = ['name' => 'Jorge Mario'];
        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to('jmla196@gmail.com', 'Jorge mario Lopez')->subject('Send Mail from Laravel with Basics emails');
            $message->from('jmla_1996@hotmail.com', 'Carlos Andres');
        });
        echo 'Basics Email was sent!';
    }

    //create new function to send mail with attachment Mail
    public function attachment_email(){
        $data = ['name' => 'Jorge Mario'];
        Mail::send(['text' => 'mail'], $data, function ($message) {
            $message->to('jmla196@gmail.com', 'Jorge mario Lopez')->subject('Send Mail from Laravel with Basics emails');
            // add attach here
            // I have  a image file on Laravel project
            $message->attach('https://pbs.twimg.com/media/C02i1X5XEAEm9B5.jpg:large');
            $message->from('jmla_1996@hotmail.com', 'Carlos Andres');
        });
        echo 'Basics Email was sent!';

    }
}
