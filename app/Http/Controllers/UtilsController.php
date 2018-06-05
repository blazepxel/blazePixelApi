<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class UtilsController extends Controller
{
    function contact (Request $request) {
      Mail::send('emails.contact', [
        'name' => $request->name,
        'subject' => $request->subject,
        'body' => $request->message,
        'email' => $request->email
      ], function($message){
        $message->from('noreply@blazepxel.com', 'Contacto ');
        $message->to('contacto@blazepxel.com', 'Atención ...')->subject('Contacto');
      });
    }
}
