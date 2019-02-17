@extends('layouts.app')
@section('content')
{{-- <script>
    var app = @json($projects);
</script>    --}}
{{-- {{ dd(json_encode($projects->original)) }} --}}
<list-component :projects="{{json_encode($projects->original)}}"></list-component>
    
    @stop
