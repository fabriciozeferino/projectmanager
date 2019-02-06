@extends('layouts.app')
@section('content')


<div class="card">
    <div class="card-header">Roles</div>
    <div class="card-body">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Name</th>
                    <th scope="col">View</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($service as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->slug }}</td>
                    <td>{{ $item->name }}</td>
                    <td><a href="{{ asset('/item/'. $item->id)}}">View</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

@endsection
