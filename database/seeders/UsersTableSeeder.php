<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Md.Shamim Hossain',
            'email' => 'hr@gmail.com',
            'role' => 'hr',
            'image' => 'shamim.jpg',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'),
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Md.Shamim Hossain',
            'email' => 'shamim@gmail.com',
            'role' => 'employee',
            'image' => 'shamim.jpg',
            'email_verified_at' => now(),
            'password' => bcrypt('1234'),
            'remember_token' => Str::random(10),
        ]);
    }
}
