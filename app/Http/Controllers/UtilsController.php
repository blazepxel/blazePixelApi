<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class UtilsController extends Controller
{
    function contact (Request $request) {
      $to = 'contacto@blazepxel.com';
      $tel = '';
      if (isset($request->to)) {
        $to = $request->to;
      }
      if (isset($request->tel)) {
        $tel = $request->tel;
      }
      Mail::send('emails.contact', [
        'name' => $request->name,
        'subject' => $request->subject,
        'body' => $request->message,
        'email' => $request->email,
        'tel' => $request->tel,
        'to' => $to,
      ], function($message) use ($to){
        $message->from('noreply@blazepxel.com', 'Contacto ');
        $message->to($to, 'Atención')->subject('Contacto');
      });
    }
}
