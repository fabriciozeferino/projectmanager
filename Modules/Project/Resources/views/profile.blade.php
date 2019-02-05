@php
    $user = auth()->user();
@endphp

<div class="card bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header">Profile</div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $user->name }}</h5>
        <p class="card-text">Email: {{ $user->email }}</p>
    </div>
</div>

<div class="card bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header">Roles</div>

    <ul class="list-group list-group-flush">
        @foreach ($user->roles as $item)
        <li class="list-group-item">{{ $item->name}}</li>
        @endforeach
    </ul>
</div>

<div class="card bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header">Permissions</div>
    <ul class="list-group list-group-flush">
        @foreach ($user->permissions as $permission)
        <li class="list-group-item">{{ $permission->name}}</li>
        @endforeach
    </ul>
</div>