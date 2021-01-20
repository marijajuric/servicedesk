@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">

        
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="name">First name</label>
            <input value="{{ $user->first_name }}" name="first_name" type="text" class="form-control" id="first_name">
            @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Last name</label>
            <input value="{{ $user->last_name }}" name="last_name" type="text" class="form-control" id="last_name">
            @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ $user->email }}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>


        <div class="form-group">
            <label for="role">Role</label>
            {{ Form::select('role_id', $roles, $user->role_id, ['class' => 'form-control', 'id' => 'role']) }}
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary float-right">Save</button>
            <a href="{{ route('users.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection
