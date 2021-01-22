<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function store(Request $request)
    {
       $request->validate([
           'email'=>'required | email',
           'password'=>'required',
       ]);

       if(!auth()->attempt($request->only('email','password'),$request->remember))
       {
           return redirect()->back()->with('status',"Invalid Login Status");
       }

       return redirect()->route('dashboard');

    }
}
