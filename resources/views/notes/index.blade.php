@extends('layouts.app)

@section('content')

<a href="{{ route('notes.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notes->items() as $note)
        <tr>
            <td>{{ $note->id}}</td>
            <td>{{ $note->title}}</td>
            <td>{{ $note->description}}</td>
            <td>{{ $note->created_at}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('notes.show', ['note'=> $note->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('notes.edit', ['note'=> $note->id])}}"> Edit</a>
            </td>
        </tr>
        @foreach
    </tbody>

</table>

@endsection
