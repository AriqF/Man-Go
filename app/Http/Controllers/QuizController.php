<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizes;
use App\Models\Questions;
use RealRashid\SweetAlert\Facades\Alert;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quizes=Quizes::orderBy('id','desc')->paginate(50);
        $quiz=Quizes::all();
        return view('admin.create-quiz',compact('quizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'quiz_name'=>'required|unique:quizes',  
        ]);
        $data=$request->all();
        Quizes::create($data);
        return redirect()->back()->with('success','Data add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Quizes::find($id);
        $questions=Questions::where('quizes_id',$id)->get();
        return view('question.details',compact('data','questions'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $data=Quizes::find($id);
        return view('admin.edit-quiz',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=Quizes::find($id);
        $new_data=$request->all();
        $data->update($new_data);

        return redirect('/quizes/create')->with('success','Quiz update successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function status($id)
    {
        $data=Quizes::find($id);
        if($data->status=="1"){
            $data->status=0;
        }else{
        $data->status=1;
        }
        $data->save();

    }
    public function AddQuestion($id)
    {
        
        $quiz=Quizes::all();
        return view('question.add_question',compact('quiz'));

    }

    public function delete($id)
    {
        $data=Quizes::find($id);
        $data->delete();
        Alert::success('Berhasil!', 'Quiz berhasil dihapus');
        return redirect('/quizes/create');
    }
}
