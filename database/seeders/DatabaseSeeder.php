<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Task;
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


        $tasks =
            [
                [
                    'name' => 'Niamxmain',
                    'email' => 'test@example.com',
                    'password' => Hash::make('password'),
                    'email_verified_at' => Carbon::now(),
                ],
                [
                    'name' => 'niam',
                    'email' => 'nix@example.com',
                    'password' => Hash::make('pass'),
                    'email_verified_at' => Carbon::now(),
                ]
            ];
        foreach ($tasks as $task) {
            User::factory()->create($task);
        }
        Task::factory(10)->create();
    }
}
