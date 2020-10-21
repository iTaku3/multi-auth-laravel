<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
        [
            [
                'name' => 'admin',
            	'email' => 'admin@laravel.com',
            	'password' => Hash::make('password'),
            	'remember_token' => Str::random(10),
            	'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        ]);
    }
}
