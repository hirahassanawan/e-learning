<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Routing\Controller;
class MailController extends Controller
{
    public function send()
    {
        Mail::send(['text'=>'mail'],['name','Hina'],function($message){
            $message->to('hinalilaram@gmail.com','hina lilaram')->subject('Greetings');
            $message->from('hinalilaram@gmail.com','Hina');

        });
    }
}
