@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($notes->items() as $note)
        <tr>
            <td>{{ $note->id}}</td>
            <td>{{ $note->title}}</td>
            <td>{{ $note->description}}</td>
            <td>{{ $note->created_at}}</td>
        </tr>
        @foreach
    </tbody>

</table>

@endsection
