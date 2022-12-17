<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, $id) {
        $data = $request->validated();
        
        $this->service->update($data, $id);

        return redirect()->route('admin.post.index')->with('success', 'Изменения сохранены');


    }
}
