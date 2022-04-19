<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogsController extends Controller
{
    public function index(Request $request){
        $blogs = null;
        $search = $request->search ?? null;
        if($search){
            $blogs = Blog::query()->where('title', 'like', "%$request->search%")->paginate(20);
        }else{
            $blogs = Blog::paginate(20);
        }
        return view("blogs", ["blogs" => $blogs, "search" => $search]);
    }
}
