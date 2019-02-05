<?php

namespace Modules\Project\Http\Repositories;


class TaskRepository extends AbstractRepository
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = 'tasks';

    protected $guarded = [];

    //protected $dates = ['due_at'];

    /**
     * App\Users
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    /**
     * Modules\Project\Http\Repositories\ProjectRepository
     */
    public function project()
    {
        return $this->belongsTo(ProjectRepository::class, 'project_id', 'id');
    }

}
