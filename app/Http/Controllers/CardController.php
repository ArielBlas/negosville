<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Center_image;

class CardController extends Controller
{   
  
    public function index($id){
        $image = Center_image::find($id);
        
        return view('card.index', [
            'image' => $image
        ]);
    }

    public function create(){
        return view('card.create');
    }
    
    public function save(Request $request) {
        
        $validate = $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'image_path' => ['required', 'image'],
            'description' => ['required', 'string', 'max:255']
        ]);
        
        $title = $request->input('title');
        $category = $request->input('category');
        $image_path = $request->file('image_path');
        $description = $request->input('description');
        
        $user = \Auth::user();
        $image = new Center_image();
        $image->user_id = $user->id;
        $image->title = $title;
        $image->category = $category;
        $image->description = $description;
        
        if($image_path){
            $image_path_name = time().$image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));
            $image->image_path = $image_path_name;
        }
        $image->save();
        
        return redirect()->route('location.index')->with([
            'message' => 'La publicacion ha sido subida correctamente!!'
        ]);
    }
    
    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }
}
