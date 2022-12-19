<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, $id) {
        $data = $request->validated();

        $comment = Comment::find($id);

        $comment->update($data);

        return redirect()->route('personal.comment.index')->with('success', 'Изменения сохранены');
    }
}
