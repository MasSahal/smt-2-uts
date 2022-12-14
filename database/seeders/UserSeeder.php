<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@localhost.com',
            'password' => bcrypt('admin'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'sahal',
            'email' => 'sahal@localhost.com',
            'password' => bcrypt('sahal'),
        ]);
    }
}
