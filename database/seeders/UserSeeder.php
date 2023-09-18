<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'firstname' => 'Mélaine',
            'lastname' => 'Dewitte',
            'email' => 'melaine.dewitte@icloud.com',
            'role' => 'admin'
        ]);
    }
}
