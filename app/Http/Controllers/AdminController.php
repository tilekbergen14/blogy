<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->middleware(function ($request, $next) {
            if(Auth::user()->role !== "admin"){
                return redirect()->route('home');
            }
            return $next($request);
        });
    }
    public function blog(){
        $blogs = Blog::get();
        return view('admin.blog', ["blogs" => $blogs]);
    }
    public function addblog(Request $request){
        $blog = null;
        return view('admin.createblog', ['blog' => $blog]);
    }
    public function blog_delete(Blog $blog){
        $blog->delete();
        return redirect()->route("admin-blog");
    }
    public function editblog(Blog $blog, Request $request){
        return view('admin.createblog', ['blog' => $blog]);
    }
    public function addblog_save(Request $request){
        $this->validate($request, [
            "title" => "required",
            "content" => "required",
            "subtitle" => "required",
            'image' => 'image|mimes:jpeg,png,jpg|max:3072',
        ]);
        $imagePath = $request->existedImage ?? null;
        if ($request->image) {
            $imageName = time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('images/thumbnails'), $imageName);
            if($imagePath){
                File::delete(public_path($imagePath));
            }
            $imagePath = "/images/thumbnails/" . $imageName;
        }
        $blog = Blog::find($request->id);
        if($blog){
            $blog->title = $request->title;
            $blog->image = $imagePath;
            $blog->content = $request->content;
            $blog->subtitle = $request->subtitle;
            $blog->update();
            return back();
        }
        Blog::create([
            "title" => $request->title,
            "image" =>  $imagePath,
            "content" => $request->content,
            "user_id" => $request->user()->id,
            "subtitle" => $request->subtitle
        ]);
        return back();
    }
}
