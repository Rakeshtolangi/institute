<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure roles exist before assigning them
        $superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $teacherRole = Role::firstOrCreate(['name' => 'Teacher']);

        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Rakesh', 
            'email' => 'rakesh@gmail.com',
            'password' => Hash::make('12345')
        ]);
        $superAdmin->assignRole($superAdminRole);

        // Creating Admin User
        $admin = User::create([
            'name' => 'Chanas', 
            'email' => 'chanas@gmail.com',
            'password' => Hash::make('12345')
        ]);
        $admin->assignRole($adminRole);

        // Creating Teacher User
        $teacher = User::create([
            'name' => 'Gopal', 
            'email' => 'gopal@gmail.com',
            'password' => Hash::make('12345')
        ]);
        $teacher->assignRole($teacherRole);
    }
}
