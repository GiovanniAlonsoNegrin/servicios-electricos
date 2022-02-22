@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')

@stop

@section('content')
    <div class="row">
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-4 w-25 h-25">
                            <img class="img-fluid" src="{{ asset('img/logo_mediano.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="mt-2">
                        <p class="text-center display-4 font-weight-bold">Bienvenido</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
