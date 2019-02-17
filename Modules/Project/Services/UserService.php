<?php

namespace Modules\Project\Http\Services;

use Modules\Project\Http\Repositories\UserRepository;
use Modules\Project\Http\Repositories\PermissionRepository;
use Modules\Project\Http\Repositories\RoleRepository;


class UserService extends AbstractService
{
    public $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->index();
    }

    public function show($id)
    {
        $repository = $this->repository->show($id);

        // $repository->load('roles', 'permissions');


        return (response()->json([
            'data' => $repository->load('roles', 'permissions'),
            'permissions' => PermissionRepository::all(),
            'roles' => RoleRepository::all()
        ]));




    }

    public function store($id)
    {
        return $this->repository->create($id);
    }

    public function update($id)
    {
        $register = $this->repository->show($id['id']);

        return $register->update($id);
    }

    public function delete($data)
    {
        $this->repository->deleteRow($data);

        return $this->respondWithJson($data, 204);
    }
}
