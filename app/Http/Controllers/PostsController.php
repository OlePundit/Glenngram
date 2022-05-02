<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\image;
use App\Models\User;




class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
    return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
                //'another =>'', Tells laravel to ignore all other fields
                
                'caption'=>'required',
                'image'=> 'required' ,
        ]);
        

        if($request->hasfile('image'))
        {
            $imagePath = $request->file('image');
            $extension = $imagePath->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $imagePath->storeAs('public/uploads/', $filename);
            
        }

        //research more on intervention

     
 

        $data = Auth::user()->posts()->create([
            'caption'=>$request->caption,
            'image'=>$request->image,
        ]);

        $data = Auth::id();
        

        return redirect()->route('Profile.show', [$data]);
       
        //goes ahead and grabs the authenticated user
      
    }

    public function show(\App\Models\Post $post)
    {
        
        return view('posts.show', compact ('post'));
    }

    
}