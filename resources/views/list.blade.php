@extends('layout')
@section('content')
    <div>
        <h1>List Of Resturent</h1>

        @if (Session::get('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif()

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td><a href="delete/{{ $item->id }}"><i class="fa fa-trash"></a></i>
                            <a href="edit/{{ $item->id }}"><i class="fa fa-edit"></a></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
