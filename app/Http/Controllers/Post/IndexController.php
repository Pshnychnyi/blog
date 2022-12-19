<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {

        $posts = Post::paginate(3)->withQueryString();
        $randPosts = Post::get()->random(4);
        $lastPosts = Post::orderBy('id', 'desc')->get()->take(4);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count', 'desc')->get()->take(4);
        return view('main.index', compact('posts', 'randPosts', 'likedPosts'));
    }
}
