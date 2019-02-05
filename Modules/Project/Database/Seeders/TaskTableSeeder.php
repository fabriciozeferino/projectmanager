<?php

namespace Modules\Project\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Project\Http\Repositories\TaskRepository;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createTasks = new TaskRepository();
        $createTasks->project_id = 1;
        $createTasks->user_id = 1;
        $createTasks->description = 'task user 1';
        $createTasks->status = 1;
        $createTasks->archive = 1;
        $createTasks->due_at = '2019-02-03 10:15:18';
        $createTasks->save();

        $createTasks = new TaskRepository();
        $createTasks->project_id = 1;
        $createTasks->user_id = 1;
        $createTasks->description = 'segunda task projeto 1';
        $createTasks->status = 1;
        $createTasks->archive = 1;
        $createTasks->due_at = '2019-02-03 10:15:18';
        $createTasks->save();

        $createTasks = new TaskRepository();
        $createTasks->project_id = 3;
        $createTasks->user_id = 2;
        $createTasks->description = 'primeira tarefa primeiro projeto user 2';
        $createTasks->status = 1;
        $createTasks->archive = 1;
        $createTasks->due_at = '2019-02-03 10:15:18';
        $createTasks->save();

        $createTasks = new TaskRepository();
        $createTasks->project_id = 3;
        $createTasks->user_id = 2;
        $createTasks->description = 'segunda tarefa primeiro projeto user 2';
        $createTasks->status = 1;
        $createTasks->archive = 1;
        $createTasks->due_at = '2019-02-03 10:15:18';
        $createTasks->save();
    }
}
