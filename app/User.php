<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Project\Http\Repositories\HasPermissionsTrait;

class User extends Authenticatable
{
    use Notifiable, HasPermissionsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The project that belong to the user.
     */
    public function project()
    {
        return $this->hasMany('Modules\Project\Http\Repositories\ProjectRepository');
    }

    /**
     * The task that belong to the user.
     */
    public function task()
    {
        return $this->hasMany('Modules\Project\Http\Repositories\TasksRepository');
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('Modules\Project\Http\Repositories\RoleRepository', 'role_user', 'user_id', 'role_id');
    }

    /**
     * The permissions that belong to the user.
     */
    public function permissions()
    {
        return $this->belongsToMany('Modules\Project\Http\Repositories\PermissionRepository', 'permission_user', 'user_id', 'permission_id');
    }

}
