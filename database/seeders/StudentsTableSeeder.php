<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use League\CommonMark\Reference\Reference;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'user_id'=>1,
            'teacher_id'=>1,
            'student_name' => str('Shamika Chathuranga'),
            'student_grade' => str('11'),
            'student_email' => str('shamika@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>2,
            'teacher_id'=>2,
            'student_name' => str('Indumith Apsara'),
            'student_grade' => str('11'),
            'student_email' => str('indumith@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>4,
            'teacher_id'=>3,
            'student_name' => str('Pasan Dulneth'),
            'student_grade' => str('10'),
            'student_email' => str('pasan@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>7,
            'teacher_id'=>4,
            'student_name' => str('Sonal Dilmith'),
            'student_grade' => str('10'),
            'student_email' => str('sonal@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>8,
            'teacher_id'=>5,
            'student_name' => str('Moditha Dananjaya'),
            'student_grade' => str('10'),
            'student_email' => str('moditha@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>10,
            'teacher_id'=>6,
            'student_name' => str('Dewmina Diwyanjana'),
            'student_grade' => str('9'),
            'student_email' => str('dewmina@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>12,
            'teacher_id'=>7,
            'student_name' => str('Hasindu Chamod'),
            'student_grade' => str('9'),
            'student_email' => str('hasindu@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>16,
            'teacher_id'=>4,
            'student_name' => str('Kaveeja Sanjatha'),
            'student_grade' => str('8'),
            'student_email' => str('kaveeja@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>17,
            'teacher_id'=>8,
            'student_name' => str('Kavindya Thathsarani'),
            'student_grade' => str('8'),
            'student_email' => str('kavindya@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>19,
            'teacher_id'=>9,
            'student_name' => str('Dineth Isirindu'),
            'student_grade' => str('8'),
            'student_email' => str('dineth@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>20,
            'teacher_id'=>10,
            'student_name' => str('Malindu Prabath'),
            'student_grade' => str('7'),
            'student_email' => str('malindu@gmail.com')
        ]);

        DB::table('students')->insert([
            'user_id'=>21,
            'teacher_id'=>1,
            'student_name' => str('Vinupa Sendinu'),
            'student_grade' => str('7'),
            'student_email' => str('vinupa@gmail.com')
        ]);


        DB::table('students')->insert([
            'user_id'=>22,
            'teacher_id'=>3,
            'student_name' => str('Duneesha Induwara'),
            'student_grade' => str('11'),
            'student_email' => str('duneesha@gmail.com')
        ]);

    
    }
}