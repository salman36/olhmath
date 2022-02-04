<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\stClass;
use Illuminate\Http\Request;

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
        $request->validate([
            'name' => 'required',
            'stclss' => 'required',

        ]);

        $data['st_class_id'] = $request->stclss;
        $data['name'] = $request->name;

        $quiz = Quiz::create($data);
        return redirect()->route('quiz.list');
    }
}
