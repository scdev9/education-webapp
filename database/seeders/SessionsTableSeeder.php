<?php

namespace Database\Seeders;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\DBAL\TimestampType;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();


        DB::table('sessions')->insert([
            'session_name' => str('Sinhala Class'),
            'session_date'=> Carbon::create('2024', '03', '01'),
            'start_time'=>str("07:30:00"),
            'end_time' =>str("10:30:00")

        ]);

        DB::table('sessions')->insert([
            'session_name' => str('Science Class'),
            'session_date'=> Carbon::create('2024', '03', '01'),
            'start_time'=>str("13:30:00"),
            'end_time' =>str("14:30:00")
        ]);

        DB::table('sessions')->insert([
            'session_name' => str('Maths Class'),
            'session_date'=> Carbon::create('2024', '03', '01'),
            'start_time'=>str("18:30:00"),
            'end_time' =>str("20:30:00")
        ]);

        DB::table('sessions')->insert([
            'session_name' => str('ICT Class'),
            'session_date'=> Carbon::create('2024', '03', '02'),
            'start_time'=>str("07:30:00"),
            'end_time' =>str("10:30:00")
        ]);

        DB::table('sessions')->insert([
            'session_name' => str('Buddhism Class'),
            'session_date'=> Carbon::create('2024', '03', '02'),
            'start_time'=>str("11:30:00"),
            'end_time' =>str("12:30:00")
        ]);

        DB::table('sessions')->insert([
            'session_name' => str('Tamil Class'),
            'session_date'=> Carbon::create('2024', '03', '02'),
            'start_time'=>str("14:30:00"),
            'end_time' =>str("16:30:00")
        ]);

        DB::table('sessions')->insert([
            'session_name' => str('Civic Class'),
            'session_date'=> Carbon::create('2024', '03', '03'),
            'start_time'=>str("07:30:00"),
            'end_time' =>str("10:30:00")
        ]);

        DB::table('sessions')->insert([
            'session_name' => str('Commerce Class'),
            'session_date'=> Carbon::create('2024', '03', '03'),
            'start_time'=>str("11:30:00"),
            'end_time' =>str("13:30:00")
        ]);

        DB::table('sessions')->insert([
            'session_name' => str('English Class'),
            'session_date'=> Carbon::create('2024', '03', '03'),
            'start_time'=>str("15:30:00"),
            'end_time' =>str("18:30:00")
        ]);
    }
}
