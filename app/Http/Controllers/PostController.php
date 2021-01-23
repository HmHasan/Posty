<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posty.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'post'=>'required | min:5',
        ]);
        dd($request->all());
    }
}
