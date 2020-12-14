@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Street name</th>
            <th scope="col">Apartment number</th>
            <th scope="col">Country</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($addresses->items() as $address)
        <tr>
            <td>{{ $address->id}}</td>
            <td>{{ $address->street_name}}</td>
            <td>{{ $address->apartment_number}}</td>
            <td>{{ $address->country}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
