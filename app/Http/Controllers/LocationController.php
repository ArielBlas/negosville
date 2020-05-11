<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Center_image;

class LocationController extends Controller
{
    public function index(){
    $images = Center_image::orderBy('id', 'desc')->get();
        
    return view('location.index', [
        'images' => $images
    ]);
    }
}
