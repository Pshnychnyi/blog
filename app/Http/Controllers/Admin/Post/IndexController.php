<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Models\Post;
use Illuminate\Http\Request;


class IndexController extends BaseController
{
    public function __invoke() {

        $posts = Post::paginate(10)->withQueryString();


        return view('admin.posts.index', ['posts' => $posts]);
    }
}
