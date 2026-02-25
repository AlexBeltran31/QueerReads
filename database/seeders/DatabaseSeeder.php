<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@queerreads.com'],
            [
                'name' => 'Admin Test',
                'password' => Hash::make('password'),
                'pronouns' => 'they/them',
            ]
        );
    }
}