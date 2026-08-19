<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $teacher = Role::create(['name' => 'Teacher']);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-student',
            'edit-student',
            'delete-student'
        ]);

        $teacher->givePermissionTo([
            'create-student',
            'edit-student',
            'delete-student'
        ]);
    }
}