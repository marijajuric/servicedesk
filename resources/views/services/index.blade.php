@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($services->items() as $service)
        <tr>
            <td>{{ $service->id}}</td>
            <td>{{ $service->Name}}</td>
            <td>{{ $service->description}}</td>
            <td>{{ $service->price}}</td>
        </tr>
        @foreach
    </tbody>

</table>

@endsection
