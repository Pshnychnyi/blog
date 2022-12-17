<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class EditController extends Controller
{
    public function __invoke($id) {

        $category = Category::find($id);

        return view('admin.categories.edit', ['category' => $category]);
    }

}
