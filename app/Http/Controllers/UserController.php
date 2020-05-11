<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function perfil(){
        return view('user.perfil');
    }

    public function config(){
        return view('user.config');
    }
    
    public function update(Request $request) {
        
        $user = \Auth::user();
        $id = $user->id;
        
        $validate = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255', 'unique:users,nick,'.$id],
            'email' => ['required', 'string', 'max:255', 'unique:users,email,'.$id]
        ]
        );
             
        $name = $request->input('name');
        $surname = $request->input('surname');
        $nick = $request->input('nick');
        $email = $request->input('email');
        
        $user->name = $name;
        $user->surname = $surname;
        $user->nick = $nick;
        $user->email = $email;
        
        $image = $request->file('image');
        if($image){
            $image_name = time().$image->getClientOriginalName();
            
            storage::disk('users')->put($image_name, File::get($image));
            
            $user->image = $image_name;
        }
        
        $user->update();
        
        return redirect()->route('config')
                         ->with(['message' => 'Usuario actualizado']);
    }
    
    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        
        return new Response($file, 200);
    }
}
