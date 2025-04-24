<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view logistic',
            'create logistic',
            'edit logistic',
            'delete logistic',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }

        $adminRole = Role::create([
            'name' => 'admin'
        ]);

        $adminRole->givePermissionTo([
            'view logistic',
            'create logistic',
            'edit logistic',
            'delete logistic',
        ]);

        $visitorRole = Role::create([
            'name' => 'visitor'
        ]);

        $visitorRole->givePermissionTo([
            'view logistic',
        ]);

        $userRole = User::create([
            'name'      => 'miftah',
            'email'     => 'miftah@admin.com',
            'password'  => bcrypt(123123123),
        ]);

        $userRole->assignRole($adminRole);
    }
}
