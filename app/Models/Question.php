<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable=[
        'quiz_id',
        'question_name',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'correct'
    ];



    public function quiz()
    {
    	return $this->belongsTo('App\Models\Quiz');
    }
}
