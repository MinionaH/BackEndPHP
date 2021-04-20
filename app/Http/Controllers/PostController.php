<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(){
        $posts=Post::all();
        return view("posts",compact('posts'));
    }
    public function post($id){
        $post=Post::find($id);
        return view('post',compact('post'));
    }
    public function create(){
        return view('create');
    }
    public function create_save(Request $request){
        $post=new Post($request->all());
        $post->save();
        return redirect()->back();
    }
    public function update($id){
        $post=Post::find($id);
        return view('update',compact('post'));
    }
    public function update_save(Request $request, $id){
        $post=Post::find($id);
        $post->title=$request->title;
        $post->text=$request->text;
        $post->likes=$request->likes;
        $post->update();
        return redirect()->back();
    }

    public function destroy($id){
        $post=Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}

