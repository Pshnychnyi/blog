<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {
        $countUsers = User::count();
        $countPosts = Post::count();
        $countCats = Category::count();
        $countTags = Tag::count();
        return view('admin.main.index', compact('countUsers', 'countPosts', 'countCats', 'countTags'));
    }
}