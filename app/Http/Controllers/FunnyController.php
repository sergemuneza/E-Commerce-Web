<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FunnyController extends Controller
{
    public function showHomePage() 
    {
        return view('welcome');
    }

    public function showRegisterForm()
    {
        return view('RegisterForm');
    }

    public function userRegisterForm(Request $request) 
    {
        $request->validate([
            'name'=>'required|string|max:20', 
            'age'=>'required|numeric', 
            'email'=>'required|email|unique:users,email', 
            'password'=>'required|min:5'
        ]);

        $user = new User; //This 'user' created stands for a model/table (All for database)
        $user->name = $request->name;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); 

        $user->save();
        return redirect()->back()->with('message','Successfully Registered!');
    }

    public function showLoginForm()
    {
        return view('LoginForm');
    }

    public function userLoginForm(Request $request)
    {
        $credentials = $request->only('email','password');

        if (Auth::attempt(credentials: $credentials)) {
            return view ('welcome');
        }
        return redirect()->back()->with('message','Invalid Credentials, Try Again!');
    
    }

}
