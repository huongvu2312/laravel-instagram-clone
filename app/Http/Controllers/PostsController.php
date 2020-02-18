<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            // 'another' => ''
            'caption' => 'required',
            // 'image' => 'required|image'
            'image' => ['required', 'image']
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        // Grab authentication user, go to their post and create
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        return redirect('/profile/' . auth()->user()->id);
    }
}
