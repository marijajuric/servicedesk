@extends('layouts.app)

@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Phone number</th>
            <th scope="col">Created at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users->items() as $user)
        <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->first_name}}</td>
            <td>{{ $user->last_name}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->password}}</td>
            <td>{{ $user->phone_number}}</td>
            <td>{{ $user->created_at}}</td>
        </tr>
        @foreach
    </tbody>

</table>

@endsection
