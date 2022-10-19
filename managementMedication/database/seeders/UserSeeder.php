<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Omar',
            'email' => 'omar@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Soufiane',
            'email' => 'soufiane@gmail.com',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Akram',
            'email' => 'demo@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
