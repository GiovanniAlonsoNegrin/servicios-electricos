@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Crear Rol</h1>
@stop

@section('content')
    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.roles.store') }}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label id="title">Rol</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Ingrese el nombre del rol">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @foreach($permissions as $permission)
                    <div>
                        <label for="{{ $permission }}">
                            <input class="mr-1" type="checkbox" name="permissions[]" id="{{ $permission->id }}" value="{{ $permission->id }}">
                            {{ $permission->title }}
                        </label>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-success">Crear Rol</button>
                <a class="btn btn-danger" href="{{ route('admin.roles.index') }}">Cancelar</a>
            </form>
        </div>
    </div>
@stop
