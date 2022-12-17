<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UodateRequest $request, $id) {
        $data = $request->validated();
        $category = Category::find($id);
        $category->update($data);

        return redirect()->route('admin.category.index')->with('success', 'Категория изменена');


    }
}
