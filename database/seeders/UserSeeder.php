<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected static ?string $password;
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'nim' => 1,
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
        ]);

        User::factory(10)->create();
    }
}
