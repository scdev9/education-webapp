<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SessionControlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('session_controls')->insert([
        'session_id'=>1,
        'student_id'=>1,
        'teacher_id'=>11,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>1,
        'student_id'=>2,
        'teacher_id'=>11,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>1,
        'student_id'=>4,
        'teacher_id'=>11,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>1,
        'student_id'=>7,
        'teacher_id'=>11,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>2,
        'student_id'=>1,
        'teacher_id'=>5,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>2,
        'student_id'=>8,
        'teacher_id'=>5,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>2,
        'student_id'=>10,
        'teacher_id'=>5,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>2,
        'student_id'=>12,
        'teacher_id'=>5,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>3,
        'student_id'=>16,
        'teacher_id'=>3,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>3,
        'student_id'=>17,
        'teacher_id'=>3,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>3,
        'student_id'=>19,
        'teacher_id'=>3,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>4,
        'student_id'=>1,
        'teacher_id'=>15,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>4,
        'student_id'=>20,
        'teacher_id'=>15,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>4,
        'student_id'=>21,
        'teacher_id'=>15,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>5,
        'student_id'=>1,
        'teacher_id'=>18,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>5,
        'student_id'=>2,
        'teacher_id'=>18,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>5,
        'student_id'=>22,
        'teacher_id'=>18,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>5,
        'student_id'=>16,
        'teacher_id'=>18,
       ]);

       DB::table('session_controls')->insert([
        'session_id'=>5,
        'student_id'=>10,
        'teacher_id'=>18,
       ]);

       
    }
}
