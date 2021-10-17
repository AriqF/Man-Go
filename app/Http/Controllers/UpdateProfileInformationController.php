<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;

class UpdateProfileInformationController extends Controller
{

    public function updateuser(Request $request)
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

        //sweet alert
        return back()-> with('success', 'Your Profile Has Been Updated');

    }

    public function updateadmin(Request $request)
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

        //sweet alert
        return back()-> with('success', 'Your Profile Has Been Updated');

    }
}
