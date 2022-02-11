<?php

namespace App\Http\Controllers;

use App\Models\stClass;
use Illuminate\Http\Request;

class stClassController extends Controller
{


    public function index()
    {
        $student_data = stClass::all();
        return view('st_class.index', compact('student_data'));
    }

    public function show()
    {
        return view('st_class.create');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',

        ]);

        $data['class_name'] = $request->name;

        $student_class = stClass::create($data);
        return redirect()->route('clss.list')->with('success', 'Class created successfully.');

    }
}
