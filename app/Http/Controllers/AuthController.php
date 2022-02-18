<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\stClass;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    use ApiResponser;

    public function register(Request $request)
    {
        $attr = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'st_class_id' => 'required',
            'class_name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
        ]);

        $user = User::create([
            'name' => $attr['name'],
            'password' => bcrypt($attr['password']),
            'email' => $attr['email'],
            'st_class_id' => $attr['st_class_id'],
            'class_name' => $attr['class_name'],
            'phone' => $attr['phone'],
            'gender' => $attr['gender'],
            'role_id' => 2
        ]);

        return $this->success([
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    }

    public function login(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        if (!Auth::attempt($attr)) {
            return $this->error('Credentials not match', 401);
        }

        return $this->success([
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }

    public function quiz_data($id)
    {

        $data = DB::table('st_class')
        ->join('quiz', 'st_class.id', '=', 'quiz.st_class_id')
        ->where('st_class.id',$id)
        ->join('questions', 'questions.quiz_id', '=', 'quiz.id')
        ->get();

//         $data = Quiz::with('st_class')->where('st_class_id', $id)->get();
// dd($data[0]['st_class_id']);
        dd($data);
        // return response()->json([
		// 	'status' => 'Success',
		// 	'data' => $data
		// ]);


    }



}
