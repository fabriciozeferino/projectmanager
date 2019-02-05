<?php

namespace Modules\Project\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Project\Http\Repositories\RoleRepository;
use Modules\Project\Http\Repositories\PermissionRepository;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $dev_role = RoleRepository::where('slug', 'developer')->first();
        $manager_role = RoleRepository::where('slug', 'manager')->first();
        $dev_perm = PermissionRepository::where('slug', 'create-tasks')->first();
        $manager_perm = PermissionRepository::where('slug', 'edit-users')->first();


        $this->command->info($dev_role);


        $developer = new \App\User();
        $developer->name = 'root';
        $developer->email = 'root@root.com';
        $developer->password = bcrypt('root');
        $developer->save();
        $developer->roles()->attach($dev_role);
        $developer->permissions()->attach($dev_perm);


        $manager = new \App\User();
        $manager->name = 'Admin';
        $manager->email = 'admin@admin.com';
        $manager->password = bcrypt('admin');
        $manager->save();
        $manager->roles()->attach($manager_role);
        $manager->permissions()->attach($manager_perm);
    }
}
