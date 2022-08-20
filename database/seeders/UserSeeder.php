<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Jahit',
            'email' => 'admin.tailor@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => true,
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Putri Tailor',
            'email' => 'putri.tailor@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
            'remember_token' => Str::random(10),
        ]);
    }
}
