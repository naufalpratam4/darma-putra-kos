<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Naufal Darma Yuda Pratama',
                'email' => 'naufal.d.pratama@gmail.com',
                'password' => bcrypt('12345678')
            ],
        ]);
    }
}
