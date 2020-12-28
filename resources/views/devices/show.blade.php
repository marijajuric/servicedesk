@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Type: {{$device -> type }}</li>
        <li>Description: {{$device->description }}</li>
        <li>Serial number: {{$device->serial_number }}</li>
        
    </ul>
    <a href="{{ route('devices.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
