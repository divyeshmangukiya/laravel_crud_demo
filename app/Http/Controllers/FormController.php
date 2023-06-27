<?php

namespace App\Http\Controllers;
use App\Models\Formdata;


use Illuminate\Http\Request;

class FormController extends Controller
{
    // public function form()
    // {
    //     return view('form');
    // }
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $post = new Formdata;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect('form')->with('status', 'Blog Post Form Data Has Been inserted');
    }
    
}