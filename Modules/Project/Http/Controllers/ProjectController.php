<?php

namespace Modules\Project\Http\Controllers;

use Modules\Project\Http\Controllers\Controller;

use Modules\Project\Http\Services\ProjectService;

use Modules\Project\Http\Requests\CreateProjectRequest;
use Modules\Project\Http\Requests\UpdateProjectRequest;
use Modules\Project\Http\Requests\DeleteProjectRequest;
use App\User;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\View;


class ProjectController extends Controller
{
    public $service;

    public function __construct(ProjectService $service)
    {
        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = $request->user();

        return view('project::project', compact('user'));

        return View::make('package::view.login');


        //dump($user->roles);
        //dump($user->hasRole('developer')); //will return true, if user has role
        //dd($user->givePermissionsTo('create-tasks')); // will return permission, if not null
        dump($user->can('create-tasks')); // will return true, if user has permission
        dd($user->can('edit-users'));
        return 'a';// $this->service->index();
    }

    public function show($project_id)
    {
        return $this->service->show($project_id);
    }

    public function store(CreateProjectRequest $request)
    {
        return $this->service->store($request->all());
    }

    public function update(UpdateProjectRequest $request)
    {
        return $this->service->update($request->all());
    }

    public function delete(DeleteProjectRequest $request)
    {
        return $this->service->delete($request['id']);
    }
}
