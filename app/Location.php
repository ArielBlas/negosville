<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    
    // Relcion de muchos a uno
    public function center_images(){
        return $this->belongsTo('App\Center_image', 'center_image_id');
    }
}
