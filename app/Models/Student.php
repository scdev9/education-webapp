<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable =[
        
        'student_name',
          'student_grade',
          'student_email',
          'user_id',
          'teacher_id'
        ];
}
