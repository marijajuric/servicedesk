@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Name: {{$company->name }}</li>
        <li>OIB: {{$company->OIB }}</li>
        
    </ul>
    <a href="{{ route('companies.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
