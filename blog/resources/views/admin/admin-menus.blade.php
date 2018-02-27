@extends('layouts.admin')

@section('content')
    <div class="col s12 m2">
        <h5 class="z-depth-3">Menus</h5>
    </div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text</th>
            <th>Meta_title</th>
            <th>Meta_description</th>
            <th>Status</th>
            <th>Number</th>
        </tr>
        </thead>

        <tbody>
        @foreach($menus as $menu)
            <tr>
                <td>{{$menu->id}}</td>
                <td>{{$menu->title}}</td>
                <td>{{$menu->text}}</td>
                <td>{{$menu->meta_title}}</td>
                <td>{{$menu->meta_description}}</td>
                <td>{{$menu->status}}</td>
                <td>{{$menu->number}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @include('admin.admin-addNewMenu')
@endsection
