<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\DBAL\TimestampType;
use Ramsey\Uuid\Type\Integer;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role_id' => 0,
            'name' => 'ADMIN',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')

            
        ]);

      /*  DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Indumith Apsara',
            'email' => 'indumith@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Tharindu Dananjaya',
            'email' => 'tharindu@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Pasan Dulneth',
            'email' => 'pasan@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Miyuru Kuruppuarachi',
            'email' => 'miyuru@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Apsara Senevirathna',
            'email' => 'apsara@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Sonal Dilmith',
            'email' => 'sonal@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' =>1,
            'name' => 'Moditha Dananjaya',
            'email' => 'moditha@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Prabath Udayakantha',
            'email' => 'prabath@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Dewmina Diwyanjana',
            'email' => 'dewmina@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Eranga Arunodaya',
            'email' => 'eranga@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Hasindu Chamod',
            'email' => 'hasindu@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Chamindu Gunasingha',
            'email' => 'chamindu@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Wasantha Guruji',
            'email' => 'wasantha@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Poornima Kaushalya',
            'email' => 'poornima@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Kaveeja Sanjatha',
            'email' => 'kaveeja@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Kavindya Thathsarani',
            'email' => 'kavindya@gmail.com',
            'password' => bcrypt('password')

            
        ]);
        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Jinananda Thero',
            'email' => 'jinananda@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Dineth Isirindu',
            'email' => 'dineth@gmail.com',
            'password' => bcrypt('password')

            
        ]);
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Malindu Prabath',
            'email' => 'malindu@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Vinupa Sendinu',
            'email' => 'vinupa@gmail.com',
            'password' => bcrypt('password')

            
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Duneeha Induwara',
            'email' => 'duneesha@gmail.com',
            'password' => bcrypt('password')

            
        ]);*/

       
        }
    }   
