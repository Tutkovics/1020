<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hookah extends Model
{
    public function user(){
        $this->belongsTo('App\User');
    }
}
