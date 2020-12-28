@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Title: {{$contract->title }}</li>
        <li>Description: {{$contract->description }}</li>
        <li>Contract duration: {{$contract->contract_duration }}</li>
        
    </ul>
    <a href="{{ route('contracts.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
