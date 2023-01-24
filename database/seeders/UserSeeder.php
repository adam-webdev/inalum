<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin',
            'jenis_kelamin' => 'Laki laki',
            'foto' => 'default.jpg',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);
        $admin->assignRole('Admin');




        $user = User::create([
            'name' => 'user',
            'jenis_kelamin' => 'Laki laki',
            'foto' => 'default.jpg',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123')
        ]);
        $user->assignRole('User');
    }
}