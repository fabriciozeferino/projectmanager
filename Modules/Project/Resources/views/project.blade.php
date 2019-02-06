@extends('layouts.app')
@section('content')


    <div class="card">
        <div class="card-header">Projects</div>
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Owner</th>
                        <th scope="col">View</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->project as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->user_id }}</td>
                        <td><a href="{{ asset('/project/'. $project->id)}}">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    @stop
