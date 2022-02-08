<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => env('ADMIN_NAME','admin'),
            'email' => env('ADMIN_EMAIL','admin@domain.com'),
            'password' => Hash::make(env('ADMIN_PASSWORD','admin')),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
    }
}
