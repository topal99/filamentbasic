<?php

namespace Database\Seeders;

use AnourValar\EloquentSerialize\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        // call seeder

        $this->call([
            GuestBookSeeder::class,
            HeroSeeder::class,
            ServiceSeeder::class,
        ]);
    }
}
