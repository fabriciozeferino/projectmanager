<?php

namespace Modules\Project\Http\Controllers;

use Modules\Project\Http\Controllers\Controller;

use Modules\Project\Http\Services\UserService;

use Modules\Project\Http\Requests\CreateTaskRequest;
use Modules\Project\Http\Requests\UpdateTaskRequest;
use Modules\Project\Http\Requests\DeleteTaslRquest;

class UserController extends Controller
{
    public $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $service = $this->service->index();

        return view('project::user', compact('service'));
    }

    public function show($id)
    {
        return $this->service->show($id);
    }

    public function store(CreateTaskRequest $request)
    {
        return $this->service->store($request->all());
    }

    public function destroy(DeleteTaslRquest $request)
    {
        $this->service->delete($request->all());
    }

    public function update(UpdateTaskRequest $request)
    {
        return $this->service->update($request->all());
    }

}


        //dump($user->hasRole('developer')); //will return true, if user has role

        //dump($user->roles);
       
        //dump($user->givePermissionsTo('create-tasks')); // will return permission, if not null
        //dump($user->hasPermissionTo('create-tasks')); // will return true, if user has permission
        //dump($user->can('edit-users'));