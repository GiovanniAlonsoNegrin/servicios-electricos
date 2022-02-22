@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Editar usuario</h1>
@stop

@section('content')

    @if(session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.users.update', $user) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label id="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label id="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <p class="font-weight-bold">Rol de usuario</p>
                    @foreach($roles as $role)
                        <div class="form-check">
                            <input class="form-radio-input" {{ in_array($role->id, $rol) ? 'checked' : false }} type="radio" name="roles" value="{{ $role->id }}" id="{{ $role->title }}">
                            <label class="form-radio-label" for="{{ $role->title }}">
                                {{ $role->title }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-success">Editar usuario</button>
            </form>
        </div>
    </div>
@stop
