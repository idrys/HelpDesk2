<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
  protected $fillable = [
      'desktopNr', 'email', 'tephon','message'
  ];
}
