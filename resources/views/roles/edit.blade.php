@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    
    <form action="{{ route('roles.update', ['role' => $role->id]) }}" method="POST">

        
        @csrf
        @method('PUT')

        
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ $role->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>


        <div class="mt-4">
            <button type="submit" class="btn btn-primary float-right">Save</button>
            <a href="{{ route('roles.index') }}" class="btn btn-link">Cancel</a>
        </div>
    </form>
</div>
@endsection
