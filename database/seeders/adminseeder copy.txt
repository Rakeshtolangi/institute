<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Rakesh', 
            'email' => 'rakesh@gmail.com',
            'password' => Hash::make('12345')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Chanas', 
            'email' => 'chanas@gmail.com',
            'password' => Hash::make('12345')
        ]);
        $admin->assignRole('Admin');

        // Creating Teacher User
        $teacher = User::create([
            'name' => 'Gopal', 
            'email' => 'gopal@gmail.com',
            'password' => Hash::make('12345')
        ]);
        $teacher->assignRole('Teacher');
    }
}