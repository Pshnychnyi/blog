<?php

namespace App\Http\Controllers\Personal\Like;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke($id) {
        $post = Auth()->user()->likedPosts()->detach($id);
        return redirect()->back()->with('success', 'Статья удалена из понравившихся');
    }
}
