@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.roles.update', $role) }}" method="post">
                @csrf
                @method('put')
                <div>
                    <label for="{{ $role->id }}">Rol:</label>
                    <input class="form-control mb-2" type="text" name="title" id="{{ $role->id }}" value="{{ $role->title }}">
                </div>
                @foreach($permissions as $permission)
                    <div>
                        <label for="{{ $permission->id }}">
                            <input class="mr-1" type="checkbox" {{ in_array($permission->id, $perm) ? 'checked' : false }} name="permissions[]" id="{{ $permission->id }}" value="{{ $permission->id }}">
                            {{ $permission->title }}
                        </label>
                    </div>
                @endforeach
                <input class="btn btn-success" type="submit" value="Actualizar">
            </form>
        </div>
    </div>
@stop
