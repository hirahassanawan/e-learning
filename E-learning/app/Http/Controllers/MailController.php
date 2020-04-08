<?php
use DB;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    // public function send()
    // {
    //     Mail::send(['text'=>'mail'],['name','Hina'],function($message){
    //         $message->to('hinalilaram@gmail.com','hina lilaram')->subject('Greetings');
    //         $message->from('hinalilaram@gmail.com','Hina');

    //     });
    // }
    
    function data(){
        echo DB::all();
          // $enames = array('ahina','ahveena','asara','ahira','reeba');
          // foreach($enames as $ename){
          // echo $ename;
          // echo '<br>'; }
      return view('index');  }
    
}
