<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('descriptions')->get(); // Postları ve açıklamalarını çek
        return view('posts.index', compact('posts')); // Blade'e gönder
    }

}
