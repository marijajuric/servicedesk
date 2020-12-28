@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Title: {{$ticket->title }}</li>
        <li>Description: {{$ticket->description }}</li>
        <li>Status: {{$ticket->status }}</li>
        <li>Time units: {{$ticket->time_units }}</li>
        
    </ul>
    <a href="{{ route('tickets.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
