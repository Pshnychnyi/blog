<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke($id) {

        $user = User::find($id);
        return view('admin.users.show', ['user' => $user]);
    }
}
