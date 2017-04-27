<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Notification;


class HomeController extends Controller
{
    public function email(){
      Mail::to("slawek@tgs.pl")->send( new Notification());
      return redirect('/');
    }
}
