@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created at</th>
            <th scope="col">Status</th>
            <th scope="col">Time units</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tickets->items() as $ticket)
        <tr>
            <td>{{ $ticket->id}}</td>
            <td>{{ $ticket->title}}</td>
            <td>{{ $ticket->description}}</td>
            <td>{{ $ticket->created_at}}</td>
            <td>{{ $ticket->status}}</td>
            <td>{{ $ticket->time_units}}</td>
        </tr>
        @foreach
    </tbody>

</table>

@endsection
