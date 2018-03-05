@extends('layouts.admin')

@section('content')
    <div class="col s12 m2">
        <h5 class="z-depth-3">Users</h5>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
