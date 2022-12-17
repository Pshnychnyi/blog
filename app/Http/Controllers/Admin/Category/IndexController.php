<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke() {

        $categories = Category::paginate(10)->withQueryString();


        return view('admin.categories.index', ['categories' => $categories]);
    }
}
