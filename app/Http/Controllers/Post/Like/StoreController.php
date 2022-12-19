<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request, $id) {
      
        auth()->user()->likedPosts()->toggle($id);

        return redirect()->back()->with('success', 'Like добавлен');
    }
}
