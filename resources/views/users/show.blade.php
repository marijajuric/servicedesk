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
    <div>
    @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
        <a class="btn btn-primary" href="{{ route('change_password.edit', ['user' => $user]) }}">Change Password</a>
        @endif

    @if($loggedInUser->isAdmin() || $user->id === $loggedInUser->id)
        <form class="form-inline" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            <button type="submit" onclick="confirm('Are you sure?')" class="btn btn-danger">Deactivate</button>
        </form>
        @endif
    </div>
    <a href="{{ route('users.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
