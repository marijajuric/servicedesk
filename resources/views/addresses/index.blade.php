@extends('layouts.app)

@section('content')
<a href="{{ route('addresses.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped mt-5">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Street name</th>
            <th scope="col">Apartment number</th>
            <th scope="col">Country</th>
            <th scope="col">Action</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($addresses->items() as $address)
        <tr>
            <td>{{ $address->id}}</td>
            <td>{{ $address->street_name}}</td>
            <td>{{ $address->apartment_number}}</td>
            <td>{{ $address->country}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('addresses.show', ['address'=> $address->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('addresses.edit', ['address'=> $address->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
