<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            [
                'name'           => 'user',
                'email'          => 'user@laravel.com',
                'password'       => Hash::make('password'),
                'remember_token' => Str::random(10),
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                'name'           => 'user2',
                'email'          => 'user2@laravel.com',
                'password'       => Hash::make('password'),
                'remember_token' => Str::random(10),
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
            [
                'name'           => 'user3',
                'email'          => 'user3@laravel.com',
                'password'       => Hash::make('password'),
                'remember_token' => Str::random(10),
                "created_at" => new DateTime(),
                "updated_at" => new DateTime(),
            ],
        ]);
    }
}
