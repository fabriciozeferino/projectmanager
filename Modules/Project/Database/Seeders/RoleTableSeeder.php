<?php

namespace Modules\Project\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Project\Http\Repositories\PermissionRepository;
use Modules\Project\Http\Repositories\RoleRepository;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin
        $admin_role = new RoleRepository();
        $admin_role->slug = 'admin';
        $admin_role->name = 'Admin';
        $admin_role->save();

        //Users
        $permission = PermissionRepository::where('slug', 'create-users')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'read-users')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'update-users')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'delete-users')->first();
        $admin_role->permissions()->attach($permission);

        //Permissions
        $permission = PermissionRepository::where('slug', 'create-permissions')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'read-permissions')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'update-permissions')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'delete-permissions')->first();
        $admin_role->permissions()->attach($permission);

        //Roles
        $permission = PermissionRepository::where('slug', 'create-roles')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'read-roles')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'update-roles')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'delete-roles')->first();
        $admin_role->permissions()->attach($permission);

        //Projects
        $permission = PermissionRepository::where('slug', 'create-projects')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'read-projects')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'update-projects')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'delete-projects')->first();
        $admin_role->permissions()->attach($permission);

        //Tasks
        $permission = PermissionRepository::where('slug', 'create-tasks')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'read-tasks')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'update-tasks')->first();
        $admin_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'delete-tasks')->first();
        $admin_role->permissions()->attach($permission);




        //User
        $user_role = new RoleRepository();
        $user_role->slug = 'user';
        $user_role->name = 'User';
        $user_role->save();

        $permission = PermissionRepository::where('slug', 'create-projects')->first();
        $user_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'read-projects')->first();
        $user_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'update-projects')->first();
        $user_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'delete-projects')->first();
        $user_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'create-tasks')->first();
        $user_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'read-tasks')->first();
        $user_role->permissions()->attach($permission);

        $permission = PermissionRepository::where('slug', 'update-tasks')->first();
        $user_role->permissions()->attach($permission);

        $user_permission = PermissionRepository::where('slug', 'delete-tasks')->first();
        $user_role->permissions()->attach($user_permission);
    }
}
