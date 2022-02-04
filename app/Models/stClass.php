<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stClass extends Model
{
    use HasFactory;

    protected $table = 'st_class';

    protected $fillable = ['class_name'];
}
