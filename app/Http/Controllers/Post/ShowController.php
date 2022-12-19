<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke($id) {
        $post = Post::find($id);
        $date = Carbon::parse($post->created_at);
        
        $relatedPosts = Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->get()->random(3);
        return view('post.show', ['post' => $post, 'date' => $date, 'relatedPosts' => $relatedPosts]);
    }
}
