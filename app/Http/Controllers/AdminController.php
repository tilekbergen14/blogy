<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.index');
    }
    public function blog(){
        return view('admin.blog');
    }
    public function addblog(){
        return view('admin.addblog');
    }
    public function addblog_save(Request $request){
        Blog::create([
            "title" => $request->title,
            "image" =>  "somethings",
            "content" => $request->content,
            "user_id" => $request->user()->id
        ]);
        return view('admin.addblog');
    }
}
