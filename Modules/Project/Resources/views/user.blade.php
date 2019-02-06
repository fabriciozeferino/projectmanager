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
                @foreach ($service as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>
                        @foreach ($user->permissions as $item)
                        <span class="badge badge-danger">{{ $item->name}}</span>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($user->roles as $item)
                        <span class="badge badge-success">{{ $item->name}}</span>
                        @endforeach
                    </td>
                    <td><a href="{{ asset('/user/'. $user->id)}}">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
