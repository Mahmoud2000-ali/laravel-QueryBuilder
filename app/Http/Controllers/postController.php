<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postController extends Controller
{

    public function index(){

        $posts = db::table('posts')->get();
        return view('posts.index', compact('posts'));
    }


    public function create(){
        return view('posts.create');
    }

    public function insert(Request $request){
        DB::table('posts')->insert([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        return response('Success Add');

    }

    public function edit($id){
        $post = db::table('posts')->where('id',$id)->first();
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request,$id){
        db::table('posts')->where('id',$id)->update([
            'title'=>$request->title,
            'body'=>$request->body,
        ]);

        return redirect()->route('posts');
    }

    public function delete($id){
        db::table('posts')->where('id','=',$id)->delete();
        return redirect()->route('posts');
    }

    public function deleteAll(){

        db::table('posts')->delete();
        return redirect()->route('posts');
    }

    public function deleteAllTruncate(){
        db::table('posts')->truncate();
        return redirect()->route('posts');
    }
}
