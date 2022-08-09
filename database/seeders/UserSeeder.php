<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            "password" => bcrypt('12345')
        ]);

        $admin->assignRole('admin');

        
        $user = User::create([
            'name' => 'user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            "password" => bcrypt('12345')
        ]);

        $user->assignRole('user');
    }
}
