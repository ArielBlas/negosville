<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    
    // Relcion de muchos a uno
    public function center_images(){
        return $this->belongsTo('App\Center_image', 'center_image_id');
    }
}
