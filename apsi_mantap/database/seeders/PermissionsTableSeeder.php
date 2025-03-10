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
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'data_fakultas_access',
            ],
            [
                'id'    => 18,
                'title' => 'product_create',
            ],
            [
                'id'    => 19,
                'title' => 'product_edit',
            ],
            [
                'id'    => 20,
                'title' => 'product_show',
            ],
            [
                'id'    => 21,
                'title' => 'product_delete',
            ],
            [
                'id'    => 22,
                'title' => 'product_access',
            ],
            [
                'id'    => 23,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 24,
                'title' => 'history_order_access',
            ],
            [
                'id'    => 25,
                'title' => 'order_create',
            ],
            [
                'id'    => 26,
                'title' => 'order_edit',
            ],
            [
                'id'    => 27,
                'title' => 'order_show',
            ],
            [
                'id'    => 28,
                'title' => 'order_delete',
            ],
            [
                'id'    => 29,
                'title' => 'order_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
