@extends('layouts.app')
@section('content')


<div class="card">
    <div class="card-header">Users</div>
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
                        <small class=" {{-- {{ substr($item->slug, strpos($item->slug, "-") + 1) . "-color" }} --}}">•{{
                            $item->name }}</small>
                        @endforeach
                    </td>

                    <td>
                        @foreach ($user->roles as $item)
                        <span class="badge {{ $item->slug . "-color" }}">{{ $item->name }}</span>
                        @endforeach
                    </td>

                    <td>
                        <button type="button" class="btn btn-sm btn-primary readBtnModal" data-toggle="modal"
                            data-target="#exampleModal" data-id="{{ $user->id }}" data-repository="user">Edit</button>

                        <button type="button" class="btn btn-sm btn-danger deleteBtnModal" data-id="{{ $user->id }}"
                            data-repository="user">Delete</button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@include('project::delete')

@include('project::modal')

@endsection



{{--
Route::get('user', 'UserController@index');
Route::get('user/{user}', 'UserController@show');
Route::post('user', 'UserController@store');
Route::put('user/{user}', 'UserController@update');
Route::delete('user/{user}', 'UserController@delete'); --}}
