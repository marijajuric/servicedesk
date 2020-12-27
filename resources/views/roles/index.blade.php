@extends('layouts.app)

@section('content')

<a href="{{ route('roles.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Role name</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($roles->items() as $role)
        <tr>
            <td>{{ $role->id}}</td>
            <td>{{ $role->name}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('roles.show', ['role'=> $role->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('roles.edit', ['role'=> $role->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
