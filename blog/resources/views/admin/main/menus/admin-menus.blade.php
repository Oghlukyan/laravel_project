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
            <th>Edit</th>
            <th>Remove</th>
        </tr>
        </thead>

        <tbody>
        @foreach($menus as $menu)
            <tr>
                <td>{{ $menu->id }}</td>
                <td>{{ $menu->title }}</td>
                <td>{{ $menu->text }}</td>
                <td>{{ $menu->meta_title }}</td>
                <td>{{ $menu->meta_description }}</td>
                <td>{{ $menu->status }}</td>
                <td>{{ $menu->number }}</td>
                <td>
                    <button data-menu="{{ $menu }}" data-target="changeMenuModal" data-toggle="modal" class="modal-trigger btn-floating waves-effect orange">
                        <i class="material-icons">edit</i>
                    </button>
                </td>
                <td>
                    <button data-id="{{ $menu->id }}" data-target="deleteMenuModal" data-toggle="modal" class="btn-floating modal-trigger waves-effect waves-teal red">
                        <i class="material-icons">remove</i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <button data-target="addMenuModal" class="btn modal-trigger waves-effect waves-teal green">Add New Menu</button>

    @include('admin.main.menus.admin-addMenuModal')
    @include('admin.main.menus.admin-changeMenuModal')
    @include('admin.main.menus.admin-deleteMenuModal')
@endsection
