<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function login_get(Request $request){
        return view("auth.login", []);
    }
    
    public function login_post(Request $request){
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        if (!auth()->attempt($request->only("email", 'password'), $request->remember)) {
            return back()->with("status", "Invalid credentials!");
        }
        return redirect()->route("home");
    }

    public function register_get(){
        return view("auth.register", []);
    }

    public function register_post(Request $request){
        $this->validate($request, [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => $request->username,
        ]);
        if (!auth()->attempt($request->only("email", 'password'), $request->remember)) {
            return back()->with("status", "Invalid credentials!");
        }
        return redirect()->route("home");
    }
}
