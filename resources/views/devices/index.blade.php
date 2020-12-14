@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Type</th>
            <th scope="col">Description</th>
            <th scope="col">Serial number</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($devices->items() as $device)
        <tr>
            <td>{{ $device->id}}</td>
            <td>{{ $device->type}}</td>
            <td>{{ $device->description}}</td>
            <td>{{ $device->serial_number}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
