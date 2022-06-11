<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{

    public function index(){
        //$posts = DB::table('posts')->get();
        $posts = Post::get();
        return view('insert',compact('posts'));
    }
    public function apiindex(){
        //$posts = DB::table('posts')->get();
        $posts = Post::get();
        return $posts;
    }
    public function edit(Request $request){
        $posts = Post::insert([
            'name'=>$request->post_name,
            'email'=>$request->post_email

        ]);
        return redirect()->back();
    }

    public function delet(Request $request,$id){
        $posts = Post::where('id','=',$id)->delete();
        return redirect()->back();
    }
    public function updatePage(Request $request,$id){
        $posts = Post::where('id','=',$id)->first();
     
        return view('update',compact('posts'));
    }
    public function update(Request $request,$id){
       $posts = Post::where('id','=',$id)->update([
        'name'=>$request->post_name,
        'email'=>$request->post_email

    ]);
        return view('update',compact('posts'));
    }
  
}
