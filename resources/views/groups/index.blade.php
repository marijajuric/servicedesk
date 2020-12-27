@extends('layouts.app)

@section('content')

<a href="{{ route('groups.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Group name</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($groups->items() as $group)
        <tr>
            <td>{{ $group->id}}</td>
            <td>{{ $group->name}}</td>
            <td>{{ $group->description}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('groups.show', ['group'=> $group->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('groups.edit', ['group'=> $group->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>
