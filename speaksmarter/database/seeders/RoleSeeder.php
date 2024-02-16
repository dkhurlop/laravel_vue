<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(["name"=> "admin"]);
        $role_editor = Role::create(["name"=> "editor"]);

        $permission_create_role = Permission::create(['name' => 'create role']); 
        $permission_read_role = Permission::create(['name'=> 'read role']);
        $permission_update_role = Permission::create(['name'=> 'update role']);
        $permission_delete_role = Permission::create(['name'=> 'delete role']);

        $permission_create_lesson = Permission::create(['name'=> 'create lesson']);
        $permission_read_lesson = Permission::create(['name'=> 'read lesson']);
        $permission_update_lesson = Permission::create(['name'=> 'update lesson']);
        $permission_delete_lesson = Permission::create(['name'=> 'delete lesson']);

        $permission_create_category = Permission::create(['name'=> 'create category']);
        $permission_read_category = Permission::create(['name'=> 'read category']);
        $permission_update_category = Permission::create(['name'=> 'update category']);
        $permission_delete_category = Permission::create(['name'=> 'delete category']);

        $permissions_admin = [
            'create role',
            'read role',
            'update role',
            'delete role',
            'create lesson',
            'read lesson',
            'update lesson',
            'delete lesson',
            'create category',
            'read category',
            'update category',
            'delete category',
        ];

        $permissions_editor = [
            'create lesson',
            'read lesson',
            'update lesson',
            'delete lesson',
            'create category',
            'read category',
            'update category',
            'delete category',
        ];

        $role_admin->syncPermissions($permissions_admin);
        $role_editor->syncPermissions($permissions_editor);

    }
}
