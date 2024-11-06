<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    protected $model = Member::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Automatically create and associate a User
            'member_id' => strtoupper($this->faker->unique()->bothify('M-#####')),
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            't_birth' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'aka' => $this->faker->userName,
            'gt' => $this->faker->name,
            'batch_name' => 'Batch ' . $this->faker->year(),
            'current_chapter' => $this->faker->randomElement(['abung', 'balagbag', 'buhaynasapa', 'calitcalit', 'calicanto','calubcub', 'laiya-ibabao', 'laiya-aplaya','tipaz','talahiban', 'sapangan', 'sampiro']),
            'root_chapter' => $this->faker->city,
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'user_type' => $this->faker->randomElement(['admin', 'member']),
            'region' => $this->faker->state,
            'province' => $this->faker->state,
            'municipality' => $this->faker->city,
            'barangay' => $this->faker->streetName,
            'address' => $this->faker->address,
            'photo' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
        ];
    }
}
