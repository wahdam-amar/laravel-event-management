<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(500)
        ->hasMember(1)
        ->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@dev.com',
            'password' => bcrypt('admindev'),
        ]);

        $this->call(
            EventSeeder::class
        );
    }
}
