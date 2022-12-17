<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Mail\User\SubscribeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, $id) {
        $data = $request->validated();
        $user = User::find($id);
        $user->update($data);
        Mail::to('artem0096@gmail.com')->send(new SubscribeMail());

        return redirect()->route('admin.user.index')->with('success', 'Изменения сохранены');


    }
}
