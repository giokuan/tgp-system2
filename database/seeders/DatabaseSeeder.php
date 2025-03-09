<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // Create a specific User with an associated Member
    //     $testUser = User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);

    //     Member::factory()->create([
    //         'user_id' => $testUser->id,  // Link the Member to the Test User
    //         'member_id' => 'M-00001',    // Optional: set a specific member_id
    //     ]);

    //     // Generate 49 additional Members with their own associated Users
    //     Member::factory()->count(49)->create();
    // }

    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Giovanni Kuan', // Replace with your actual name
            'email' => 'giokuan@email.com', // Replace with your actual email
            'email_verified_at' => now(),
            'password' => Hash::make('Silkylocket1982#'), // Change this to a secure password
            'user_type' => 'admin',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
