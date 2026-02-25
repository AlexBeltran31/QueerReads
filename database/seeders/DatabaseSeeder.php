<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void {
        $this->call([
            CategorySeeder::class,
            BookSeeder::class,
        ]);
        
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