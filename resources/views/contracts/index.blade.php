@extends('layouts.app)

@section('content')

<a href="{{ route('contracts.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Created at</th>
            <th scope="col">Contract duration</th>
            <th scope="col">Action</th>
            
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
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('contracts.show', ['contract'=> $contract->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('contracts.edit', ['contract'=> $contract->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
