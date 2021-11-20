<?php namespace App\Http\Controllers\Frontend;

use GrahamCampbell\ResultType\Success;
use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RatingController extends Controller {

    public function addRating(Request $request) {
        if($request->isMethod('post')) {
            $data=$request->all();
            //echo "<pre>";print_r($data); die;
            // $message = "Login to rate";
            // Alert::error('Error', 'login dulu');
            // return redirect()->route('feedback');


            if( !isset($data['rating'])) {
                Alert::warning('Hmmm...', 'Cobalah memberi setidaknya 1 bintang untuk website kami 😥');
                return redirect()->route('feedback');
            }

            // User jika login di batasi hanya 1 saja
            // jika ingin memberi rating secara terus menerus tinggal hapus if dan else-nya
            $ratingCount=Rating::where(['user_id'=>Auth::user()->id])->count();

            // if($ratingCount > 0) {
            //     Alert::question('Hmmm...', 'Sepertinya kamu sudah pernah memberi feedback');
            //     return redirect()->route('feedback');
            // }

            // else {
                $rating=new Rating;
                $rating->user_id=Auth::user()->id;
                $rating->comments=$data['user_feedback'];
                $rating->rating=$data['rating'];
                $rating->status=0;
                $rating->save();
                Alert::success('Berhasil!', 'Kamu berhasil melakukan feedback 👍');
                return redirect()->route('feedback');
            // }
        }
    }



    // ------------------------------------  SUDAH ADA DI HOME CONTROLLER ------------------------------------ //
    // public function ratingStar(){
    //     $ratings = Rating::with(['user'])->where('status',1)->get()->toArray();
    //     // return view('user.review');
    //     return view('user.review')->with(compact('ratings'));
    // }


}
