<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

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
            'nama' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            "password" => bcrypt('12345')
        ]);

        $admin->assignRole('admin');
        $admin->givePermissionTo(Permission::all());

        $guest = User::create([
            'nama' => 'guest',
            'username' => 'guest',
            'email' => 'user@gmail.com',
            "password" => bcrypt('12345')
        ]);

        $guest->assignRole('guest');

        $guru = User::create([
            'nama' => 'guru',
            'username' => 'guru',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        $guru->assignRole('guru');

        $murid = User::create([
            'nama' => 'murid',
            'username' => 'murid',
            'email' => 'murid@gmail.com',
            'password' => bcrypt('12345')
        ]);

        $murid->assignRole('murid');
    }
}
