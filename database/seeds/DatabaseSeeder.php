<?php

use Illuminate\Database\Seeder;

use Modules\Project\Database\Seeders\RoleTableSeeder;
use Modules\Project\Database\Seeders\PermissionTableSeeder;
use Modules\Project\Database\Seeders\UserTableSeeder;
use Modules\Project\Database\Seeders\ProjectTableSeeder;
use Modules\Project\Database\Seeders\TaskTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {




        $this->call(RoleTableSeeder::class);

        $this->command->info('Roles sample created successfully');


        $this->call(PermissionTableSeeder::class);

        $this->command->info('Permissions sample created successfully');

        $this->call(UserTableSeeder::class);

        $this->command->info('Users sample created successfully');


        $this->call(ProjectTableSeeder::class);

        $this->command->info('Projects sample created successfully');


        $this->call(TaskTableSeeder::class);

        $this->command->info('Tasks sample created successfully');
    }
}

