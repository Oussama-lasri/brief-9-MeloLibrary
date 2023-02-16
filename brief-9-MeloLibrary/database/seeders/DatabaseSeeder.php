<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\artiste;
use App\Models\Client;
use App\Models\authManager;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        artiste::create([
                'nom'=>'test',
                'date_de_naissqance' => '20-1-2001',
                'image' => 'test.jpg',
        ]
        );

        Client::create([
            
        ]);





        Client::create([]);
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
