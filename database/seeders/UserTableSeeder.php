<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'SMK Antartika 1',
            'email' => 'admin@sia.net',
            'password' => bcrypt('antartikayes'),
            'remember_token' => Str::random(20)
        ]);
    }
}
