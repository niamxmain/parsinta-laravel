<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(
            [
                [
                    'name' => 'Niamxmain',
                    'email' => 'test@example.com',
                    'password' => bcrypt('password'),
                    'email_verified_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now()->addHour(),
                ],
                [
                    'name' => 'niam',
                    'email' => 'nix@example.com',
                    'password' => bcrypt('pass'),
                    'email_verified_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ])->each(function($user){
                DB::table('users')->insert($user);
            });
            //jika menggunakan data asli maka langsung tembak DB
            //jika menggunakan dummy data / factory lebih baik import class [use App\Models\Name]
    }
}
