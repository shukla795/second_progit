<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{


    protected $quarded = [];

    protected $fillable = [
        'caption', 'image',
    ];

    public function user(){
        return $this->belongTo(user::class);
    }

}
