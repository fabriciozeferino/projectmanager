<?php

namespace Modules\Project\Http\Repositories;

use Modules\Project\Http\Repositories\RoleRepository;
use Modules\Project\Http\Repositories\PermissionRepository;


trait PermissionRoleRepository
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
}