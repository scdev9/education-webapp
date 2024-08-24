<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\DBAL\TimestampType;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();


        DB::table('subjects')->insert([
            'subject' => str('Sinhala')
        ]);

        DB::table('subjects')->insert([
            'subject' => str('Science')
        ]);

        DB::table('subjects')->insert([
            'subject' => str('Maths')
        ]);

        DB::table('subjects')->insert([
            'subject' => str('ICT')
        ]);

        DB::table('subjects')->insert([
            'subject' => str('Buddhism')
        ]);

        DB::table('subjects')->insert([
            'subject' => str('Tamil')
        ]);

        DB::table('subjects')->insert([
            'subject' => str('Civic Education')
        ]);

        DB::table('subjects')->insert([
            'subject' => str('Commerce')
        ]);

        DB::table('subjects')->insert([
            'subject' => str('English')
        ]);
    }
}
