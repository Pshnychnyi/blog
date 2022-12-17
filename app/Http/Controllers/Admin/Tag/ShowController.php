<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke($id) {

        $tag = Tag::find($id);
        return view('admin.tags.show', ['tag' => $tag]);
    }
}
