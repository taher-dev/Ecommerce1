<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            // Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'status' => 'active',
                'phone' => fake()->phoneNumber(),
                'address' => fake()->address(),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => Str::random(10),
                'profile_photo_path' => fake()->imageUrl('60', '60'),
                'current_team_id' => null,
            ],
            // Vendor
            [
                'name' => 'Vendor',
                'username' => 'vendor',
                'email' => 'vendor@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('vendor123'),
                'role' => 'vendor',
                'status' => 'active',
                'phone' => fake()->phoneNumber(),
                'address' => fake()->address(),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => Str::random(10),
                'profile_photo_path' => fake()->imageUrl('60', '60'),
                'current_team_id' => null,
            ],
            // User
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('user123'),
                'role' => 'user',
                'status' => 'active',
                'phone' => fake()->phoneNumber(),
                'address' => fake()->address(),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => Str::random(10),
                'profile_photo_path' => fake()->imageUrl('60', '60'),
                'current_team_id' => null,
            ],
        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }

    }
}
