<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        $question_data = Question::with('quiz')->get();
        // dd($quiz_data);
        return view('question.index', compact('question_data'));
    }


    public function show()
    {
        $quiz_data = Quiz::get();
        return view('question.create', compact('quiz_data'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'quiz_id' => 'required',
            'question_statement' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct' => 'required',

        ]);

        $data['quiz_id'] = $request->quiz_id;
        $data['question_name'] = $request->question_statement;
        $data['option_a'] = $request->option_a;
        $data['option_b'] = $request->option_b;
        $data['option_c'] = $request->option_c;
        $data['option_d'] = $request->option_d;
        $data['correct'] = $request->correct;

        $question_data = Question::create($data);
        return redirect()->route('question.list')->with('success', 'Question created successfully.');
    }
}
