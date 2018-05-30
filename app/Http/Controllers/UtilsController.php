<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class UtilsController extends Controller
{
    function contact (Request $request) {
      $name = $request->name;
      $subject = $request->subject;
      $mess = $request->message;
      $email = $request->email;
      Mail::send('mails.contact', ['name' => $request->name],
        function($message) use ($name, $subject, $mess, $email){
        $message->from('noreply@blazepxel.com', 'Contacto ');
        $message->to('contacto@blazepxel.com', 'Atención ...')->subject('Contacto');
      });
    }
}
