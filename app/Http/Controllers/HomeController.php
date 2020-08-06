<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all()->sortByDesc('created_at');
        foreach ($posts as $key => $post) {
            $username = DB::table('users')->where('id', $post['user_id'])->value('name');
            $posts[$key]['username'] = $username;
        }
        return view('index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request, Post $post)
    {
        $post->fill($request->all());
        $post->user_id = $request->user()->id;
        $post->save();
        return redirect()->route('home.index');
    }
}
