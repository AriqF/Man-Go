<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Auth\Events\CurrentDeviceLogout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class RatingsController extends Controller
{
    public function ratings(){
        // Session::put('page','rating-data');
        $ratings = Rating::with(['user'])->get()->toArray();
        // dd($ratings);
        return view('admin.rating-data')->with(compact('ratings'));
    }

    public function updateRatingStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status = 1;
            }
            Rating::where('id',$data['rating_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'rating_id'=>$data['rating_id']]);
        }
    }
}
