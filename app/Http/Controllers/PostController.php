<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments', 'tags')->get();
        return view('posts.index', compact('posts'));
    }

    // ▼ ここから追加
    public function show($id)
    {
        // 該当するIDの投稿を取得し、コメントやタグも一緒に読み込む
        $post = Post::with('comments', 'tags')->findOrFail($id);

        return view('posts.show', compact('post'));
    }
}
