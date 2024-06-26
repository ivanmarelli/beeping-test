<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Ivan Marelli',
            'email' => 'ivanmarelli@gmail.com',
        ]);

        \App\Models\Product::factory(10)->create();

        \App\Models\Order::factory(20)->create();

        \App\Models\OrderLine::factory(20)->create();

    }
}
