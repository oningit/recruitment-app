<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create Super Admin User
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@admin.com',
            'password' => Hash::make('password')
        ]);
        $superAdmin->assignRole('Super Admin');

        //Create Admin User
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);
        $admin->assignRole('Admin');

        $productManager = User::create([
            'name' => 'Product Manager',
            'email' => 'manager@admin.com',
            'password' => Hash::make('password')
        ]);
        $productManager->assignRole('Product Manager');
    }
}
