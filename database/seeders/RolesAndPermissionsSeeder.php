<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create permissions
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'view-users']);
        Permission::create(['name' => 'delete-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'create-departments']);
        Permission::create(['name' => 'view-departments']);
        Permission::create(['name' => 'request-assets']);
        Permission::create(['name' => 'view-asset-requests']);
        Permission::create(['name' => 'create-positions']);
        Permission::create(['name' => 'view-positions']);
        Permission::create(['name' => 'create-categories']);
        Permission::create(['name' => 'view-categories']);
        Permission::create(['name' => 'create-types']);
        Permission::create(['name' => 'view-types']);
        Permission::create(['name' => 'create-manufacturers']);
        Permission::create(['name' => 'view-manufacturers']);
        Permission::create(['name' => 'create-suppliers']);
        Permission::create(['name' => 'view-suppliers']);
        Permission::create(['name' => 'create-assets']);
        Permission::create(['name' => 'edit-assets']);
        Permission::create(['name' => 'delete-assets']);
        Permission::create(['name' => 'view-assets']);
        Permission::create(['name' => 'assign-assets']);
        Permission::create(['name' => 'view-asset-reports']);
        Permission::create(['name' => 'view-assigned-assets']);
        Permission::create(['name' => 'update-asset-status']);
        Permission::create(['name' => 'approve-requests']);

        // Create roles
        $adminRole = Role::create(['name' => 'Admin']);
        $managerRole = Role::create(['name' => 'Manager']);
        $employeeRole = Role::create(['name' => 'Employee']);
        $hrManagerRole = Role::create(['name' => 'Human Resource Manager']);



        // Assign permissions to the Admin role
        $adminRole->givePermissionTo([
            'create-users',
            'view-users',
            'delete-users',
            'edit-users',
            'create-departments',
            'view-departments',
            'request-assets',
            'view-asset-requests',
            'create-positions',
            'view-positions',
            'create-categories',
            'view-categories',
            'create-types',
            'view-types',
            'create-manufacturers',
            'view-manufacturers',
            'create-suppliers',
            'view-suppliers',
            'create-assets',
            'edit-assets',
            'delete-assets',
            'view-assets',
            'view-asset-reports',
            'view-assigned-assets',
            'update-asset-status',
            'approve-requests',
        ]);

        $managerRole->givePermissionTo([
            'create-assets',
            'edit-assets',
            'delete-assets',
            'view-assets',
            'assign-assets',
            'view-asset-reports',
        ]);

        $employeeRole->givePermissionTo([
            'request-assets',
            'view-assigned-assets',
            'update-asset-status',
            'view-asset-requests',
        ]);

        $hrManagerRole->givePermissionTo([
            'approve-requests',
            'view-assigned-assets',

        ]);
    }

}
