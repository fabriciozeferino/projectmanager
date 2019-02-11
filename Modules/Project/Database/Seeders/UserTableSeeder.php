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
        $admin = new \App\User();
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('fds123');
        $admin->save();


        $user = new \App\User();
        $user->name = 'User 1';
        $user->email = 'user1@user.com';
        $user->password = bcrypt('fds123');
        $user->save();

        $user = new \App\User();
        $user->name = 'User 2';
        $user->email = 'user2@user.com';
        $user->password = bcrypt('fds123');
        $user->save();

        $user = new \App\User();
        $user->name = 'User 3';
        $user->email = 'user3@user.com';
        $user->password = bcrypt('fds123');
        $user->save();

        $user = new \App\User();
        $user->name = 'User 4';
        $user->email = 'user4@user.com';
        $user->password = bcrypt('fds123');
        $user->save();

        $user = new \App\User();
        $user->name = 'User 5';
        $user->email = 'user5@user.com';
        $user->password = bcrypt('fds123');
        $user->save();



        echo "\r\n Adding roles to users";

        $data = [
            [
                'role_id' => 1,
                'user_id' => 1,
            ], [
                'role_id' => 2,
                'user_id' => 2,
            ], [
                'role_id' => 2,
                'user_id' => 3,
            ], [
                'role_id' => 2,
                'user_id' => 4,
            ], [
                'role_id' => 2,
                'user_id' => 5,
            ],
        ];

        echo "\r\n-" . count($data) . " roles added";

        \DB::table('role_user')->insert($data);

        echo "\r\n Adding Permissions to Users";

        $data = [
            //admin
            [
                'user_id' => 1,
                'permission_id' => 1,
            ], [
                'user_id' => 1,
                'permission_id' => 2,
            ], [
                'user_id' => 1,
                'permission_id' => 3,
            ], [
                'user_id' => 1,
                'permission_id' => 4,
            ], [
                'user_id' => 1,
                'permission_id' => 5,
            ], [
                'user_id' => 1,
                'permission_id' => 6,
            ], [
                'user_id' => 1,
                'permission_id' => 7,
            ], [
                'user_id' => 1,
                'permission_id' => 8,
            ], [
                'user_id' => 1,
                'permission_id' => 9,
            ], [
                'user_id' => 1,
                'permission_id' => 10,
            ], [
                'user_id' => 1,
                'permission_id' => 11,
            ], [
                'user_id' => 1,
                'permission_id' => 12,
            ], [
                'user_id' => 1,
                'permission_id' => 13,
            ], [
                'user_id' => 1,
                'permission_id' => 14,
            ], [
                'user_id' => 1,
                'permission_id' => 15,
            ], [
                'user_id' => 1,
                'permission_id' => 16,
            ], [
                'user_id' => 1,
                'permission_id' => 17,
            ], [
                'user_id' => 1,
                'permission_id' => 18,
            ], [
                'user_id' => 1,
                'permission_id' => 19,
            ], [
                'user_id' => 1,
                'permission_id' => 20,
            ],
            //user
            [
                'user_id' => 2,
                'permission_id' => 13,
            ], [
                'user_id' => 2,
                'permission_id' => 14,
            ], [
                'user_id' => 2,
                'permission_id' => 15,
            ], [
                'user_id' => 2,
                'permission_id' => 16,
            ], [
                'user_id' => 2,
                'permission_id' => 17,
            ], [
                'user_id' => 2,
                'permission_id' => 18,
            ], [
                'user_id' => 2,
                'permission_id' => 19,
            ], [
                'user_id' => 2,
                'permission_id' => 20,
            ],

            [
                'user_id' => 3,
                'permission_id' => 13,
            ], [
                'user_id' => 3,
                'permission_id' => 14,
            ], [
                'user_id' => 3,
                'permission_id' => 15,
            ], [
                'user_id' => 3,
                'permission_id' => 16,
            ], [
                'user_id' => 3,
                'permission_id' => 17,
            ], [
                'user_id' => 3,
                'permission_id' => 18,
            ], [
                'user_id' => 3,
                'permission_id' => 19,
            ], [
                'user_id' => 3,
                'permission_id' => 20,
            ],



            [
                'user_id' => 4,
                'permission_id' => 13,
            ], [
                'user_id' => 4,
                'permission_id' => 14,
            ], [
                'user_id' => 4,
                'permission_id' => 15,
            ], [
                'user_id' => 4,
                'permission_id' => 16,
            ], [
                'user_id' => 4,
                'permission_id' => 17,
            ], [
                'user_id' => 4,
                'permission_id' => 18,
            ], [
                'user_id' => 4,
                'permission_id' => 19,
            ], [
                'user_id' => 4,
                'permission_id' => 20,
            ],

            [
                'user_id' => 5,
                'permission_id' => 13,
            ], [
                'user_id' => 5,
                'permission_id' => 14,
            ], [
                'user_id' => 5,
                'permission_id' => 15,
            ], [
                'user_id' => 5,
                'permission_id' => 16,
            ], [
                'user_id' => 5,
                'permission_id' => 17,
            ], [
                'user_id' => 5,
                'permission_id' => 18,
            ], [
                'user_id' => 5,
                'permission_id' => 19,
            ], [
                'user_id' => 5,
                'permission_id' => 20,
            ],
        ];

        echo "\r\n-" . count($data) . " permissions added to Admin";

        \DB::table('permission_user')->insert($data);
    }
}
