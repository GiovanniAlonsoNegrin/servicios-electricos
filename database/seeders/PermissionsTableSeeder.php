<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'admin',
            ],
            [
                'id' => 2,
                'title' => 'user',
            ],
            [
                'id' => 3,
                'title' => 'view_users',
            ],
            [
                'id' => 4,
                'title' => 'create_users',
            ],
            [
                'id' => 5,
                'title' => 'edit_users',
            ],
            [
                'id' => 6,
                'title' => 'delete_user',
            ],
            [
                'id' => 7,
                'title' => 'view_roles',
            ],
            [
                'id' => 8,
                'title' => 'create_roles',
            ],
            [
                'id' => 9,
                'title' => 'edit_roles',
            ],
            [
                'id' => 10,
                'title' => 'delete_roles',
            ],
        ];

        Permission::insert($permissions);
    }
}
