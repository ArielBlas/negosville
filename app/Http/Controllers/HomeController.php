<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Center_image;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $images = Center_image::orderBy('id', 'desc')->get();
        
        return view('welcome', [
            'images' => $images
        ]);
        
    }
}
