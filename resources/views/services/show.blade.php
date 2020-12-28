@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Name: {{$service->name }}</li>
        <li>Description: {{$service->description }}</li>
        <li>Price: {{$service->price }}</li>
        
    </ul>
    <a href="{{ route('services.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
