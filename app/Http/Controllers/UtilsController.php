<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class UtilsController extends Controller
{
    function contact (Request $request) {
      $contact = $request->getContent();
      // Mail::send('mails.contact', ['name' => $request->name],
      //   function($message) use ($contact){
      //   $message->from('abelorihuela@wtc-talent.com', 'Encuesta ');
      //   $message->to('abelorihuelamendoza@hotmail.com', 'Buenas Tardes ...')->subject('Contacto');
      // });
      return $contact->$name;
    }
}
