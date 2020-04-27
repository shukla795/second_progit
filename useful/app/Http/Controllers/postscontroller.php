<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
// use Auth;
use Illuminate\Http\Request;
// $post=  new App\post();
use App\post;
use Auth;
class postscontroller extends Controller
{
    // public function _construct(){
    //     $this->middleware('auth');
    // }

       public function create(){
        return view('posts.create');
    }

    public function upload( request $request ){
        // dd($request->all());
        $data=request()->validate([
            'caption'=>'required',
            // 'image'=>['required','image'],
            'image'=>'required',
        ]);

        // $request->file('image');
        // return $request->image->store('public');
        $post = new Post();
        $post->image = $request->file('image')->store('images');


        // dd(request('image')->store('images'));

        // dd(request('image')->store('public'));


        //     $file = $request->file('image')->store('public');






        // if($request->hasFile('image'))
        // {
        //     $image=$request->file('image');
        //     $filename=time().'.'.$image->getClientOrigionalExtension();
        //     $location=public_path('images/'.$filename);
        //     Image::make($image)->resize(800,400)->save($location);
        //     $post->image=$filename;
        // }

        // auth()->user()->posts()->create($data);

        //  [   'caption'=>$data['caption'],
        //     $post->caption=>'caption',
        //      $post->image=>$filename,
        //     //  $post->save();
        // ];

        // $post->save();
        // }
        // dd(request()->all());
        //return redirect('/profile/',auth()->user()->id);
        // $post=post::find(Auth::id());
        // return view('posts.create')->with('post',$post);
    }
}
