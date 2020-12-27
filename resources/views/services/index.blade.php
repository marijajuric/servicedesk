@extends('layouts.app)

@section('content')

<a href="{{ route('services.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services->items() as $service)
        <tr>
            <td>{{ $service->id}}</td>
            <td>{{ $service->Name}}</td>
            <td>{{ $service->description}}</td>
            <td>{{ $service->price}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('services.show', ['service'=> $service->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('services.edit', ['service'=> $service->id])}}"> Edit</a>
            </td>
        </tr>
        @foreach
    </tbody>

</table>

@endsection
