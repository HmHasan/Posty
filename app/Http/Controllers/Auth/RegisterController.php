<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Auth.register');
    }

    public function store(Request $request)
    {
       $request->validate([
           'name'=>'required',
           'username'=>'required',
           'email'=>'required | email',
           'password'=>'required | confirmed',
       ]);

       User::create([
        'name'=>$request->name,
        'username'=>$request->username,
        'email'=>$request->email,
        'password'=>Hash::make($request->password)
       ]);

       auth()->attempt([
           'email'=>$request->email,
           'password'=>$request->password,
       ]);

       return redirect()->route('dashboard');
    }
}
