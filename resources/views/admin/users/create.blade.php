@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Crear usuario</h1>
@stop

@section('content')
    @livewire('admin.user-create')
@stop
