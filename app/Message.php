<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  protected $fillable = [
    "user_id",
    "sender",
    "title",
    "content"
  ];
  protected $table = "messages";

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function photo()
  {
    return $this->hasMany('App\Photo');
  }

}
