<?php

namespace Modules\Project\Http\Repositories;

use Modules\Project\Http\Repositories\RoleRepository;
use Modules\Project\Http\Repositories\PermissionRepository;


trait HasPermissionsTrait
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table = 'permission_role';

    protected $guarded = [];

    /**
     * Modules\Project\Http\Repositories\RoleRepository
     */
    public function roles()
    {
        return $this->belongsToMany(RoleRepository::class, 'role_user');

    }

    /**
     * Modules\Project\Http\Repositories\PermissionRepository
     */
    public function permissions()
    {
        return $this->belongsToMany(PermissionRepository::class, 'permission_user');

    }

    // /**
    //  * Check if User has Role
    //  */
    // public function hasRole(...$roles)
    // {
    //     foreach ($roles as $role) {
    //         if ($this->roles->contains('slug', $role)) {
    //             return true;
    //         }
    //     }
    //     return false;
    // }


    // protected function hasPermissionTo($permission)
    // {
    //     return $this->hasPermission($permission);
    // }

    // protected function hasPermission($permission)
    // {
    //     return (bool)$this->permissions->where('slug', $permission->slug)->count();
    // }

    // public function hasPermissionThroughRole($permission)
    // {
    //     foreach ($permission->roles as $role) {
    //         if ($this->roles->contains($role)) {
    //             return true;
    //         }
    //     }
    //     return false;
    // }

    // public function givePermissionsTo($permissions)
    // {
    //     $permissions = $this->getAllPermissions($permissions);
    //     dd($permissions);
    //     if ($permissions === null) {
    //         return $this;
    //     }
    //     $this->permissions()->saveMany($permissions);
    //     return $this;
    // }

    // public function deletePermissions($permissions)
    // {
    //     $permissions = $this->getAllPermissions($permissions);
    //     $this->permissions()->detach($permissions);
    //     return $this;
    // }

}