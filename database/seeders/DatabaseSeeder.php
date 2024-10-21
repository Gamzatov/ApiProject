<?php

namespace Database\Seeders;

use App\Enums\UserRoleEnum;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::query()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '93799922',
            'role' => UserRoleEnum::ADMIN->value,
        ]);
    }
}
