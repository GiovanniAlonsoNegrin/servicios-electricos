@extends('frontend.master')
@section('body')
<!-- Button -->
<div id="scrollButton" class="hidden mr-2 bg-sky-700 hover:bg-sky-600 bottom-10 right-0 h-12 lg:h-16 w-12 lg:w-16 fixed z-50 lg:rounded-full border-2 border-sky-800 cursor-pointer">
    <div class="mx-auto text-center mt-1 lg:mt-3">
        <i class="fas fa-chevron-up fa-2x hover:text-white"></i>
    </div>
</div>
<!-- End button -->
<!-- Start Section -->
<div class="myBackground myHeight">
    <div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
        <div class="w-full lg:w-full mt-4 lg:mt-10 text-center">
            <p class="text-white px-2 lg:pl-4 lg:pr-6 mt-32 lg:mt-64 text-5xl lg:text-7xl">Servicios</p>
        </div>
    </div>
</div>
<!-- End Start Section -->
<!-- Init Service Section -->
<div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8 cursor-default">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-10 lg:mt-24">
        <div class="border border-gray-200 rounded-lg px-10 py-16">
            <div class="text-center">
                <i class="fas fa-broadcast-tower fa-4x myColor"></i>
            </div>
            <div class="mt-10">
                <h1 class="text-2xl text-gray-900">Estudio, implementación y diseño de Redes Digitales de Radiocomunicación</h1>
                <p class="mt-5 font-thin text-gray-900">Trabajamos junto al cliente en el diseño e implementación de la solución más adecuada y que mejor se ajuste a sus requerimientos y presupuesto.</p>
            </div>
        </div>
        <div class="border border-gray-200 rounded-lg px-10 py-16">
            <div class="text-center">
                <i class="fas fa-satellite-dish fa-4x myColor"></i>
            </div>
            <div class="mt-10">
                <h1 class="text-2xl text-gray-900">Consultoría de Telecomunicaciones</h1>
                <p class="mt-5 font-thin text-gray-900">Aplicaciones Tecnológicas diseñadas para proveerles de las mejores soluciones de ingeniería.</p>
            </div>
        </div>
        <div class="border border-gray-200 rounded-lg px-10 py-16">
            <div class="text-center">
                <i class="fas fa-tools fa-4x myColor"></i>
            </div>
            <div class="mt-10">
                <h1 class="text-2xl text-gray-900">Diseño, instalación y equipamiento de vehículos especiales</h1>
                <p class="mt-5 font-thin text-gray-900">Contamos con los mejores materiales para la realización del equipamiento de vehículos de bomberos, ambulancias etc...</p>
            </div>

        </div>
    </div>
</div>
<!-- End Init Service Section -->
<!-- Solutions Section -->
<div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8 cursor-default">
    <div class="py-5">
        <h1 class="text-center text-2xl lg:text-4xl">Soluciones de comunicación</h1>
        <img class="mt-5" src="{{ asset('img/servicios/servicios_1.png') }}" alt="soluciones">
    </div>
</div>
<!-- End Solutions Section -->
@endsection
