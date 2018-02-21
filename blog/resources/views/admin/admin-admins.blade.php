@extends('admin/admin-header')

@section('content')
    <div class="col s12 m2">
        <p class="z-depth-3">Admins</p>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
            </tr>
        </thead>

        <tbody>
            @foreach($admins as $admin)
            <tr>
                <td>{{$admin->id}}</td>
                <td>{{$admin->username}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection