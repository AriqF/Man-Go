<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateProfileInformationController extends Controller
{

    public function update(Request $request)
    {
        // return $request->file('image')->store('profile-pict');

        $attr = $request->validate([
            'name' => ['required', 'alpha_num', 'unique:users,name,' . auth()->id()],
            'image' => 'image|file|max:1024',
        ]);

        if($request->file('image')){
            $attr['image'] = $request->file('image')->store('profile-pict');
        }

        auth()->user()->update($attr);

        return back()-> with('messsage', 'Your Profile Has Been Updated');

    }
}
