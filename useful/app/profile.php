<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    // protected $fillable = array('id','user_id');

    // problems occur in modules
    // BadMethodCallException with message 'Call to undefined method App/profile::belongTo()'
    public function user(){
      return $this->belongTo(user::class);
    }
}
