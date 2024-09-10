<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Ahmad',
                'email' => 'admin1@example.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Admin Sami',
                'email' => 'admin2@example.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Sujoud Mohammad',
                'email' => 'user1@example.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Sara Quran',
                'email' => 'user2@example.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Mohammad Subhi',
                'email' => 'user3@example.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
