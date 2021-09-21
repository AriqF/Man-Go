<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProfileInformationController extends Controller
{

    public function update(Request $request)
    {
        $attr = $request->validate([
            'name' => ['required', 'alpha_num', 'unique:users,name,' . auth()->id()],
        ]);

        auth()->user()->update($attr);

        return back()-> with('messsage', 'Your Profile Has Been Updated');

    }
}
