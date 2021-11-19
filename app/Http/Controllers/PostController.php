<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginate()]);
    }
    
    // カリキュラム08-3ブログ投稿詳細の表示
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
}
