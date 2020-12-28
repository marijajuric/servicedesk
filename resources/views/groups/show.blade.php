@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Name: {{$group->name }}</li>
        <li>Description: {{$group->description }}</li>
        
    </ul>
    <a href="{{ route('groups.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
