<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GrahamCampbell\ResultType\Success;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Rating;
use App\Models\User;
use App\Models\Quizes;
use App\Models\Questions;

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
        $userCount = User::where('is_admin', 0)->count();
        $adminCount = User::where('is_admin', 1)->count();

        $ratingCount = Rating::all()->count();
        $avgRating = Rating::avg('rating');
        $rate1 = Rating::where('rating', 1)->count();
        $rate2 = Rating::where('rating', 2)->count();
        $rate3 = Rating::where('rating', 3)->count();
        $rate4 = Rating::where('rating', 4)->count();
        $rate5 = Rating::where('rating', 5)->count();

        $quizesCount = Quizes::where('status', 1)->count();
        $questionsCount = Questions::all()->count();

        $ratingChart = app()->chartjs
        ->name('RatingChart')
        ->type('pie')
        ->size(['width' => 200, 'height' => 200])
        ->labels(['1 Star', '2 Stars', '3 Stars', '4 Stars', '5 Stars'])
        ->datasets([
            [
                'backgroundColor' => ['#EA5455', '#D939CD', '#9708CC', '#454acc', '#32CCBC' ],
                'hoverBackgroundColor' => ['#EA5455', '#D939CD', '#9708CC', '#454acc', '#32CCBC' ],
                'data' => [$rate1, $rate2, $rate3, $rate4, $rate5]
            ]
        ])
        ->options([
            'color' => '#fff'
        ]);

        $userChart = app()->chartjs
        ->name('userChart')
        ->type('pie')
        ->size(['width' => 200, 'height' => 200])
        ->labels(['Users', 'Admins'])
        ->datasets([
            [
                'backgroundColor' => ['#454acc', '#30348f' ],
                'hoverBackgroundColor' => ['#454acc', '#30348f' ],
                'data' => [$userCount, $adminCount]
            ]
        ])
        ->options([
            'color' => '#fff'
        ]);



        return view ('adminHome')->with(compact('ratingCount','userCount', 'quizesCount', 'avgRating', 'ratingChart', 'userChart'));
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
        return view('user.learn.hiragana');
    }

    public function katakana()
    {
        return view('user.learn.katakana');
    }

    public function meet()
    {
        return view('user.learn.meet');
    }

    public function food(){
        return view ('user.learn.food');
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
    public function ratingStar(){
        $ratings = Rating::with(['user'])->where('status',1)->orderBy('id','desc')->get()->toArray();

        // Ambil Rerata dari rating
        $ratingSum = Rating::where('status',1)->sum('rating');
        $ratingCount = Rating::where('status',1)->count();
        $ratingAvg = round($ratingSum/$ratingCount,2);

        $avgStarRating = round($ratingSum/$ratingCount);

        return view('user.reviews')->with(compact('ratings','avgStarRating','ratingAvg'));
    }
}
