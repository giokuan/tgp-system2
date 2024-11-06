<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Member;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a specific User with an associated Member
        $testUser = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Member::factory()->create([
            'user_id' => $testUser->id,  // Link the Member to the Test User
            'member_id' => 'M-00001',    // Optional: set a specific member_id
        ]);

        // Generate 49 additional Members with their own associated Users
        Member::factory()->count(49)->create();
    }
}
