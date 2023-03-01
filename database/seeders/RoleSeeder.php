<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'guest',
            'guard_name' => 'web'
        ]);

        $murid = Role::create([
            'name' => 'murid',
            'guard_name' => 'web'
        ]);

        $guru = Role::create([
            'name' => 'guru',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'dashboard'
        ]);

        Permission::create([
            'name' => 'presensi'
        ]);
        Permission::create([
            'name' => 'laporan'
        ]);

        Permission::create([
            'name' => 'admin',
        ]);
        
        Permission::create([
            'name' => 'guru',
        ]);
        
        Permission::create([
            'name' => 'murid',
        ]);

        $murid->givePermissionTo(['presensi']);
        $guru->givePermissionTo(['laporan']);
    }
}
