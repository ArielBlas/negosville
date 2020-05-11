<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    
    // Relcion de muchos a uno
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function center_images(){
        return $this->belongsTo('App\Center_images', 'center_image_id');
    }
}
