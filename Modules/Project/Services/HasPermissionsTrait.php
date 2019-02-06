<?php

namespace Modules\Project\Http\Repositories;

use Modules\Project\Http\Repositories\RoleRepository;
use Modules\Project\Http\Repositories\PermissionRepository;


trait HasPermissionsTrait
{


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
        return ((bool)$this->permissions()->where('slug', $permission)->count());
    }

    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role) {
            if ($this->roles()->contains($role)) {
                return true;
            }
        }
        return false;
    }

    public function givePermissionsTo($permissions)
    {
        $permissions = $this->getAllPermissions($permissions);

        if ($permissions === null) {
            return $this;
        }
        $this->permissions()->saveMany($permissions);
        return $this;
    }

    public function deletePermissions($permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }

}