<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permissions = [
            'user' => [
                'User Create',
                'User Edit',
                'User Delete',
                'User Status'
            ],
            'role' => [
                'Role Create',
                'Role Edit',
                'Role Delete',
                'Role Status'
            ],
        ];

        foreach ($permissions as $key => $permission) {
            foreach ($permission as $group) {
                Permission::create([
                    'name' => $group,
                    'group_name' => $key
                ]);
            }
        }
    }
}
