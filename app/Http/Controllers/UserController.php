<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function user_data()
    {   // Untuk menampilkan data user
        return view('admin.user-data', [
            'users' => User::get(),   // urut dari yg terbaru/pengganti Descending latest('id')->get()
        ]);
    }

    public function create()
    {   // Untuk create user
        return view('admin.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'password_confirmation' => bcrypt($request->password_confirmation),
        ]);

        // ini gapake
        // return back()->with('toast_success','User Has been added successfully');
        Alert::success('Berhasil!', 'User berhasil ditambahkan');
        return back();


        // ini pake session
        // session()->flash('success', 'User telah dihapus');
        // return redirect()->route('admin.user-data');
    }

    public function edit($id)
    {
        return view('admin.edit',[
            'user' => User::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);

        // ini gapake
        // return back()->with('toast_success', 'Your Profile Has Been Updated');
        Alert::success('Berhasil!', 'Data user berhasil diubah');
        return back();

        // ini pake session
        // session()->flash('success', 'Profil berhasil diubah');
        // return redirect()->route('admin.user-data');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        // ini gapake
        // return back()->with('toast_success', 'Your Profile Has Been Updated');
        Alert::success('Berhasil!', 'User berhasil dihapus');
        return back();

        // return back()->with(toast('User telah dihapus'), null);

        // ini pake session
        // session()->flash('danger', 'User telah dihapus');
        // return redirect()->route('admin.user-data');
    }
}
