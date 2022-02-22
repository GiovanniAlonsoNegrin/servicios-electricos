@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th colspan="1"></th>
                        <th width="10px">
                            <a class="text-success" href="{{ route('admin.users.create') }}"><i class="fas fa-plus-circle fa-lg"></i></a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            @forelse($user->roles as $role)
                                <td>{{ $role->title }}</td>
                            @empty
                                <td>Sin Rol</td>
                            @endforelse
                            <td width="10px">
                                <a {{ ($user->id == 1) ? "hidden" : "" }} class="text-primary" href="{{ route('admin.users.edit', $user) }}"><i class="fas fa-edit fa-lg"></i></a>
                            </td>
                            <td width="10px">
                                <form {{ ($user->id == 1) ? "hidden" : "" }} action="{{ route('admin.users.destroy', $user) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-danger border-transparent bg-transparent"><i class="fas fa-trash-alt fa-lg"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

