@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Street name: {{$address->street_name }}</li>
        <li>Apartment number: {{$address->apartment_number }}</li>
        <li>Country: {{$address->country }}</li>
    </ul>
    <a href="{{ route('addresses.index')}} " class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
