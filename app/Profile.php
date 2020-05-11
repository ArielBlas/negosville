<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected  $table = 'profiles';
    
    public function follows(){
        return $this->hasMany('App\Follow');
    }

    // Relcion de muchos a uno
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
