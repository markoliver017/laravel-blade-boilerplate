<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User; // Ensure this is imported
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure you have users in the users table
        $users = User::all();
        
        if ($users->isEmpty()) {
            $this->command->info('No users found! Run User seeder first.');
            return;
        }

        // Seed tasks for random users
        foreach ($users as $user) {
            Task::factory()->count(5)->create([
                'user_id' => $user->id,
                'status' => $this->getRandomStatus(),
            ]);
        }
    }

    /**
     * Get a random status for tasks.
     */
    private function getRandomStatus(): string
    {
        return ['pending', 'in_progress', 'completed'][array_rand(['pending', 'in_progress', 'completed'])];
    }
}
