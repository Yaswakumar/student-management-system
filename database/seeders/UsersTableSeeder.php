<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.ph
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'yaswanth',
            'email' => 'admin@yaswanth.com',
            'password' => Hash::make('admin@123')
        ]);
    }
}
