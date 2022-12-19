<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke() {

        $categories = Category::with('posts')->get();

        return view('category.index', compact('categories'));
    }
}
