<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check()){
    return Redirect::to('/home');
    }
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/classdata', [App\Http\Controllers\stClassController::class, 'index'])->name('clss.list');
Route::post('/studentClass', [App\Http\Controllers\stClassController::class, 'store']);
Route::get('/stClass', [App\Http\Controllers\stClassController::class, 'show']);

Route::get('/quiz-list', [App\Http\Controllers\QuizController::class, 'index'])->name('quiz.list');
Route::get('/quiz-create', [App\Http\Controllers\QuizController::class, 'show']);
Route::post('/quiz-create', [App\Http\Controllers\QuizController::class, 'store']);
Route::get('/quiz/edit/{id}', [App\Http\Controllers\QuizController::class, 'edit'])->name('quiz.edit');

Route::get('/question-list', [App\Http\Controllers\QuestionController::class, 'index'])->name('question.list');
Route::get('/question', [App\Http\Controllers\QuestionController::class, 'show']);
Route::post('/question-create', [App\Http\Controllers\QuestionController::class, 'store']);


// /// Admin

// Route::get('admin-login', [App\Http\Controllers\AdminController::class, 'index']);
// Route::get('register', [App\Http\Controllers\AdminController::class, 'registration']);




