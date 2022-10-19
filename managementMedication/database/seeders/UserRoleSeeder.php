<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\userRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        $user = User::all();
        $users = $user->map(function($da) {
            return $da->id;
        });

        $role = Role::all();
        $roles = $role->map(function($da) {
            return $da->id;
        });

        userRole::create(['user_id' => $users[0] , 'role_id' => $roles[0]]);
        UserRole::create(['user_id' => $users[1] , 'role_id' => $roles[1]]);
        UserRole::create(['user_id' => $users[2] , 'role_id' => $roles[2]]);
    }
}
