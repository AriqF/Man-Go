<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view ('adminHome');
    }

    public function stats()
    {
        return view('user.stats');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function feedback()
    {
        return view('user.feedback');
    }

    public function change_password()
    {
        return view('user.change-password');
    }

    public function hiragana()
    {
        return view('user.hiragana');
    }

    public function katakana()
    {
        return view('user.katakana');
    }

    public function admin_profile()
    {
        return view('admin.admin-profile');
    }

    public function change_admin_password()
    {
        return view('admin.admin-password');
    }

    public function rating_data()
    {
        return view('admin.rating-data');
    }
}
