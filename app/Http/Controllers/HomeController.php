<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Notification;


class HomeController extends Controller
{
    public function email(){
      //$data = [{"desktopNr": "234", "email": "olek@tgs.pl"}];
      $data = 'Test sławka';
      Mail::to("idrys2@gmail.com")->send( new Notification($data));
      return redirect('/');
    }
}
