<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table ='teachers';
    protected $fillable=[
        'teacher_name',
        'teacher_email',
        'user_id',
        'teacher_subject'
    ];
}
