@extends('frontend.master')
@section('body')
    <div class="myBackground myHeight">
        <div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
            <div class="lg:w-1/2 float-left">
                <div class="w-full lg:w-full mt-4 lg:mt-10">
                    <p class="text-white px-2 lg:pl-4 lg:pr-6 mt-12 lg:mt-32 text-lg lg:text-4xl text-justify">Especialistas en sistemas de comunicación para los servicios de seguridad y atención de emergencias.</p>
                    <p class="text-white px-2 lg:pl-4 pr-6 mt-10 text-sm lg:text-4xl text-justify">Desde 1978.</p>
                    <div class="mt-12 lg:mt-24">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white ml-2 lg:ml-5 py-5 px-8 rounded-full" href="{{ route('frontend.about') }}">Conócenos</a>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 float-right">
                <div class="w-full lg:w-full mt-10 lg:mt-40 mr-2.5 lg:mr-0">
                    <img class="w-80" src="{{ asset('img/isos.png') }}" alt="logo">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
    </script>
@endsection
