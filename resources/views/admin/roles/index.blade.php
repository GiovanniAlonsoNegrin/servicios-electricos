@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')
    @livewire('admin.roles-index')
@stop
