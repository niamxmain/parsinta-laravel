<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        collect(
            [
                [
                    'name' => 'Niamxmain',
                    'email' => 'test@example.com',
                    'password' => Hash::make('password'),
                    'email_verified_at' => Carbon::now(),
                    'created_at' => now(),
                    'updated_at' => now()->addHour(),
                    'remember_token' => null,
                ],
                [
                    'name' => 'niam',
                    'email' => 'nix@example.com',
                    'password' => Hash::make('pass'),
                    'email_verified_at' => Carbon::now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                    'remember_token' => null,
                ]
            ])->each(function($user){
                DB::table('users')->create($user);
            });
            //jika menggunakan data asli maka langsung tembak DB
            //jika menggunakan dummy data / factory lebih baik import class [use App\Models\Name]
        Task::factory(10)->create();
    }
}
