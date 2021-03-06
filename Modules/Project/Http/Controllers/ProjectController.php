<?php

namespace Modules\Project\Http\Controllers;

use Modules\Project\Http\Controllers\Controller;

use Modules\Project\Http\Services\ProjectService;

use Modules\Project\Http\Requests\CreateProjectRequest;
use Modules\Project\Http\Requests\UpdateProjectRequest;
use Modules\Project\Http\Requests\DeleteProjectRequest;
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
        $user = auth()->user();


        return view('project::project', compact('user'));
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
