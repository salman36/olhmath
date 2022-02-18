<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\stClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{

    public function index()
    {
        $quiz_data = Quiz::with('st_class')->get();
        // dd($quiz_data);
        return view('quiz.index', compact('quiz_data'));
    }


    public function show()
    {
        $student_class = stClass::get();
        return view('quiz.create', compact('student_class'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'stclss' => 'required',

        ]);

        $data['st_class_id'] = $request->stclss;
        $data['name'] = $request->name;

        $quiz = Quiz::create($data);
        return redirect()->route('quiz.list')->with('success', 'Quiz created successfully.');
    }

    public function edit($id)
    {

        $student_class = stClass::all();
        $quiz_data = Quiz::where('id', $id)->first();
        return view('quiz.edit',compact('quiz_data', 'student_class'));

    }

    public function Update(Request $request, $id)
    {
        $data = array();
        $data['st_class_id'] = $request->stclss;
        $data['name'] = $request->name;
        DB::table('quiz')->where('id',$id)->update($data);
		return redirect()->route('quiz.list')->with('success', 'Quiz updated successfully.');
    }

    public function Delete($id)
    {
        $quiz = Quiz::where('id',$id)->delete();
		return redirect()->route('quiz.list')->with('success', 'Quiz Deleted successfully.');

    }
}
