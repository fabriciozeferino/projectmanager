@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    
                        {{-- {{ session('user') }} --}}
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ session('user') }}
                        </div>
                    @endif --}}
                    

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
