@extends('layouts.app)

@section('content')

<a href="{{ route('devices.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Type</th>
            <th scope="col">Description</th>
            <th scope="col">Serial number</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($devices->items() as $device)
        <tr>
            <td>{{ $device->id}}</td>
            <td>{{ $device->type}}</td>
            <td>{{ $device->description}}</td>
            <td>{{ $device->serial_number}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('devices.show', ['device'=> $device->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('devices.edit', ['device'=> $device->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
