<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'role' => 'Manager'
        ]);

        Role::create([
            'role' => 'Admin'
        ]);

        Role::create([
            'role' => 'User'
        ]);
    }
}
