@extends('layouts.app)

@section('content')

<a href="{{ route('tickets.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created at</th>
            <th scope="col">Status</th>
            <th scope="col">Time units</th>
            <th scope="col">Action</th>
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
             <td>
                <a class="btn btn-outline-secondary" href="{{ route('tickets.show', ['ticket'=> $ticket->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('tickets.edit', ['ticket'=> $ticket->id])}}"> Edit</a>
            </td>

        </tr>
        @foreach
    </tbody>

</table>

@endsection
