@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created at</th>
            <th scope="col">Contract duration</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($contracts->items() as $contract)
        <tr>
            <td>{{ $contract->id}}</td>
            <td>{{ $contract->title}}</td>
            <td>{{ $contract->description}}</td>
            <td>{{ $contract->created_at}}</td>
            <td>{{ $contract->contract_duration}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
