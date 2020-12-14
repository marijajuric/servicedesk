@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Company name</th>
            <th scope="col">OIB</th>
           
        </tr>
    </thead>
    <tbody>
        @foreach ($companies->items() as $company)
        <tr>
            <td>{{ $company->id}}</td>
            <td>{{ $company->name}}</td>
            <td>{{ $company->OIB}}</td>
            
        </tr>
        @foreach
    </tbody>

</table>

@endsection
