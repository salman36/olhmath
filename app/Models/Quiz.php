<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quiz';


    protected $fillable = [
        'st_class_id',
        'name'
    ];


    public function st_class()
    {
    	return $this->belongsTo('App\Models\stClass');
    }

    public function question()
    {
    	return $this->belongsTo('App\Models\Questilon');
    }
}
