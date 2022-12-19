<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, $id) {
        $data = $request->validated();

        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $id;
        

        Comment::create($data);

        return redirect()->back()->with('success', 'Комментарий добавлен');
    }
}
