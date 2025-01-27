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
                'title' => 'data_perkuliahan_access',
            ],
            [
                'id'    => 18,
                'title' => 'mahasiswa_access',
            ],
            [
                'id'    => 19,
                'title' => 'mahasiswa_create',
            ],
            [
                'id'    => 20,
                'title' => 'mahasiswa_edit',
            ],
            [
                'id'    => 21,
                'title' => 'mahasiswa_show',
            ],
            [
                'id'    => 22,
                'title' => 'mahasiswa_delete',
            ],
            [
                'id'    => 23,
                'title' => 'jurusan_access',
            ],
            [
                'id'    => 24,
                'title' => 'jurusan_create',
            ],
            [
                'id'    => 25,
                'title' => 'jurusan_edit',
            ],
            [
                'id'    => 26,
                'title' => 'jurusan_show',
            ],
            [
                'id'    => 27,
                'title' => 'jurusan_delete',
            ],
            [
                'id'    => 28,
                'title' => 'fakultas_access',
            ],
            [
                'id'    => 29,
                'title' => 'fakultas_create',
            ],
            [
                'id'    => 30,
                'title' => 'fakultas_edit',
            ],
            [
                'id'    => 31,
                'title' => 'fakultas_show',
            ],
            [
                'id'    => 32,
                'title' => 'fakultas_delete',
            ],
            [
                'id'    => 33,
                'title' => 'warga_access',
            ],
            [
                'id'    => 34,
                'title' => 'warga_create',
            ],
            [
                'id'    => 35,
                'title' => 'warga_edit',
            ],
            [
                'id'    => 36,
                'title' => 'warga_show',
            ],
            [
                'id'    => 37,
                'title' => 'warga_delete',
            ],
            [
                'id'    => 38,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
