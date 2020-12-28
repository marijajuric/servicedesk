@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>First name: {{$user->first_name }}</li>
        <li>Last name: {{$user->last_name }}</li>
        <li>Email: {{$user->email }}</li>
        <li>Phone number: {{$user->phone_number }}</li>
        
    </ul>
    <a href="{{ route('users.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
