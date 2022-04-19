<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){
        $latestBlogs = Blog::orderBy("created_at", "desc")->limit(10)->get();
        $popBlogs = Blog::limit(10)->get();
        
        return view('welcome', ["latestBlogs" => $latestBlogs, "popBlogs" => $popBlogs]);
    }
}
