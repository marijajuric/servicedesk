@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Name: {{$role->name }}</li>
        
        
    </ul>
    <a href="{{ route('roles.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
