<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('teachers')->insert([
            'user_id'=>3,
            'teacher_name' => str('Tharindu Dananjaya'),
            'teacher_subject' => str('Maths'),
            'teacher_email' => str('tharindu@gmail.com')
        ]);

        DB::table('teachers')->insert([
            'user_id'=>5,
            'teacher_name' => str('Miyuru Kuruppuarachi'),
            'teacher_subject' => str('Science'),
            'teacher_email' => str('miyuru@gmail.com')
        ]);

        DB::table('teachers')->insert([
            'user_id'=>6,
            'teacher_name' => str('Apsara Senevirathna'),
            'teacher_subject' => str('English'),
            'teacher_email' => str('apsara@gmail.com')
        ]);

        DB::table('teachers')->insert([
            'user_id'=>9,
            'teacher_name' => str('Prabath Udayakantha'),
            'teacher_subject' => str('Civic Education'),
            'teacher_email' => str('prabath@gmail.com')
        ]);

        DB::table('teachers')->insert([
            'user_id'=>11,
            'teacher_name' => str('Eranga Arunodaya'),
            'teacher_subject' => str('Sinhala'),
            'teacher_email' => str('eranga@gmail.com')
        ]);

        DB::table('teachers')->insert([
            'user_id'=>13,
            'teacher_name' => str('Chamindu Gunasingha'),
            'teacher_subject' => str('Commerce'),
            'teacher_email' => str('chamindu@gmail.com')
        ]);

        DB::table('teachers')->insert([
            'user_id'=>14,
            'teacher_name' => str('Wasantha Guruji'),
            'teacher_subject' => str('Tamil'),
            'teacher_email' => str('wasantha@gmail.com')
        ]);

        DB::table('teachers')->insert([
            'user_id'=>15,
            'teacher_name' => str('Poornima Kaushalya'),
            'teacher_subject' => str('ICT'),
            'teacher_email' => str('poornima@gmail.com')
        ]);

        DB::table('teachers')->insert([
            'user_id'=>18,
            'teacher_name' => str('Jinananda Thero'),
            'teacher_subject' => str('Buddhism'),
            'teacher_email' => str('tharindu@gmail.com')
        ]);
       }   
    }

