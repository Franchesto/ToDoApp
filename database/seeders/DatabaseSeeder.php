<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Todo;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create()->each(function ($user) {
            Todo::factory(5)->create(['user_id' => $user->id])->each(function ($todo) {
                Task::factory(3)->create(['todo_id' => $todo->id]);
            });
        });

    }
}
