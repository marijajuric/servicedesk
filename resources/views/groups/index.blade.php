@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Group name</th>
            <th scope="col">Description</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($groups->items() as $group)
        <tr>
            <td>{{ $group->id}}</td>
            <td>{{ $group->name}}</td>
            <td>{{ $group->description}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>
