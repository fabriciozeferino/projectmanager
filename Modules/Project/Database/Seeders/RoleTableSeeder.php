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
        Model::unguard();

        $dev_permission = PermissionRepository::where('slug', 'create-tasks')->first();
        $manager_permission = PermissionRepository::where('slug', 'edit-users')->first();


        $dev_role = new RoleRepository();
        $dev_role->slug = 'developer';
        $dev_role->name = 'Developer';
        $dev_role->save();
        $dev_role->permissions()->attach($dev_permission);

        $manager_role = new RoleRepository();
        $manager_role->slug = 'admin';
        $manager_role->name = 'Admin';
        $manager_role->save();
        $manager_role->permissions()->attach($manager_permission);
    }
}
