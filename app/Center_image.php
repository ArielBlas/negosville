<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center_image extends Model
{
    protected $table = 'center_images';
    
    // Relacion de uno a muchos
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    
    public function likes(){
        return $this->hasMany('App\Like');
    }
    
    public function locations(){
        return $this->hasMany('App\Location');
    }
    
    public function images(){
        return $this->hasMany('App\Image');
    }
    
    // Relcion de muchos a uno
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}

