<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        \App\Models\User::factory()->create([
            'name' => 'Niamxmain',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        \App\Models\Task::factory(10)->create();

    }
}
