<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $permissions = [
            'create products',
            'list products',
            'update products',
            'register sales'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $adminRole->givePermissionTo(Permission::all());

        
        $sellerRole = Role::firstOrCreate(['name' => 'Seller']);
        $sellerRole->givePermissionTo([
            'create products',
            'list products',
            'update products',
            'register sales'
        ]);
    }
}
