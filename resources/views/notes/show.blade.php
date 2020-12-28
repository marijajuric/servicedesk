@extends('layouts.app)

@section('content')
<div>
    <h4 class="mt-2">Details</h4>
    <ul class="list-unstyled">
        <li>Title: {{$note->title }}</li>
        <li>Description: {{$note->description }}</li>
        
    </ul>
    <a href="{{ route('notes.index')}}" class="btn btn-outline-secondary"> Back </a>
</div>

@endsection
