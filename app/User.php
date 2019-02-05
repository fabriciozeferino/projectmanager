<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * Check if User has Role
     */
    public function hasRole(...$roles)
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }

    public function hasPermissionTo($permission)
    {
        return $this->hasPermission($permission);
    }

    public function hasPermission($permission)
    {
        return $this->permissions->where('slug', $permission->slug)->count();
    }

    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }
}
