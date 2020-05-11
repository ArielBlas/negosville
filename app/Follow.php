<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected  $table = 'follows';
        
    // Relcion de muchos a uno
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function profiles(){
        return $this->belongsTo('App\Profile', 'profile_id');
    }
}
