<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use Faker\Factory as Faker;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $dates = [
            Carbon::parse('2025-05-01'),
            Carbon::parse('2025-05-05'),
            Carbon::parse('2025-05-10'),
            Carbon::parse('2025-05-15'),
            Carbon::parse('2025-05-20'),
        ];

        for ($i = 0; $i < 100; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password123'),
                'email_verified_at' => null,
                'remember_token' => Str::random(10),
                'created_at' => $dates[intdiv($i, 20)],
                'updated_at' => now(),
            ]);
        }
    }
}


