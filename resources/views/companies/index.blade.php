@extends('layouts.app)

@section('content')

<a href="{{ route('companies.create') }}" class="btn btn-primary mt-5">Add</a>

<table class="table table-striped mt-5">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Company name</th>
            <th scope="col">OIB</th>
            <th scope="col">Action</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($companies->items() as $company)
        <tr>
            <td>{{ $company->id}}</td>
            <td>{{ $company->name}}</td>
            <td>{{ $company->OIB}}</td>
            <td>
                <a class="btn btn-outline-secondary" href="{{ route('companies.show', ['company'=> $company->id])}}"> Details</a>
                <a class="btn btn-outline-secondary" href="{{ route('companies.edit', ['company'=> $company->id])}}"> Edit</a>
            </td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
