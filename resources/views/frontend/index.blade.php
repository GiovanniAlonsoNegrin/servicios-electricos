@extends('frontend.master')
@section('body')
    <div class="relative">
        <!-- Button -->
        <div id="scrollButton" class="hidden mr-2 bg-sky-500 hover:bg-sky-700 bottom-10 right-0 h-16 w-16 fixed z-50 rounded-full border-2 border-sky-800 cursor-pointer">
            <div class="mx-auto text-center mt-3">
                <i class="fas fa-chevron-up fa-2x hover:text-white"></i>
            </div>
        </div>
        <!-- End button -->
        <!-- Section one -->
        <div class="myBackground myHeight">
            <div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
                <div class="lg:w-1/2 float-left">
                    <div class="w-full lg:w-full mt-4 lg:mt-10">
                        <p class="text-white px-2 lg:pl-4 lg:pr-6 mt-12 lg:mt-32 text-lg lg:text-4xl text-justify">Especialistas en sistemas de comunicación para los servicios de seguridad y atención de emergencias.</p>
                        <p class="text-white px-2 lg:pl-4 pr-6 mt-10 text-sm lg:text-4xl text-justify">Desde 1978.</p>
                        <div class="mt-12 lg:mt-24">
                            <a class="bg-sky-500 hover:bg-sky-700 text-white ml-2 lg:ml-5 py-5 px-8 rounded-full" href="{{ route('frontend.about') }}">Conócenos</a>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 float-right">
                    <div class="w-full lg:w-full mt-10 lg:mt-40 mr-9 lg:mr-0">
                        <img id="isos" class="w-80 opacity-0" src="{{ asset('img/isos.png') }}" alt="logo">
                    </div>
                </div>
            </div>
        </div>
        <!-- End section one -->
        <!-- Section services -->
        <div class="bg-sky-200 py-5 mySecondHeight">
            <div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
                <div class="bg-sky-700 rounded w-full h-10 flex items-center justify-center">
                    <h1 class="text-gray-900 text-lg lg:text-2xl font-semibold">Contamos con el mejor servicio</h1>
                </div>
                <a href="{{ route('frontend.services') }}">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div id="boxOne" class="mt-10 rounded">
                            <div class="w-full px-4 py-1 rounded bg-sky-700">
                                <ul class="py-3">
                                    <li>
                                        <h1 class="text-gray-900 text-lg text-justify font-bold">Estudio de Redes Digitales de Radiocomunicación</h1>
                                        <p class="text-white font-thin">Trabajamos con las mejores herramientas para estar al día, siempre poniendo el máximo empeño en nuestra actividad.</p>
                                    </li>
                                    <li>
                                        <h1 class="text-gray-900 text-lg text-justify font-bold mt-1">Diseño de Redes Digitales de Radiocomunicación</h1>
                                        <p class="text-white font-thin">Trabajamos con las mejores herramientas para estar al día, siempre poniendo el máximo empeño en nuestra actividad.</p>
                                    </li>
                                    <li>
                                        <h1 class="text-gray-900 text-lg text-justify font-bold mt-1">Implementación de Redes Digitales de Radiocomunicación</h1>
                                        <p class="text-white font-thin">Trabajamos con las mejores herramientas para estar al día, siempre poniendo el máximo empeño en nuestra actividad.</p>
                                    </li>
                                    <li>
                                        <h1 class="text-gray-900 text-lg text-justify font-bold mt-1">Consultoría de Telecomunicaciones</h1>
                                        <p class="text-white font-thin">Trabajamos con las mejores herramientas para estar al día, siempre poniendo el máximo empeño en nuestra actividad.</p>
                                    </li>
                                    <li>
                                        <h1 class="text-gray-900 text-lg text-justify font-bold mt-1">Diseño de Vehículos Especiales</h1>
                                        <p class="text-white font-thin">Trabajamos con las mejores herramientas para estar al día, siempre poniendo el máximo empeño en nuestra actividad.</p>
                                    </li>
                                    <li>
                                        <h1 class="text-gray-900 text-lg text-justify font-bold mt-1">Instalación de Vehículos Especiales</h1>
                                        <p class="text-white font-thin">Trabajamos con las mejores herramientas para estar al día, siempre poniendo el máximo empeño en nuestra actividad.</p>
                                    </li>
                                    <li>
                                        <h1 class="text-gray-900 text-lg text-justify font-bold mt-1">Equipamiento de Vehículos Especiales</h1>
                                        <p class="text-white font-thin">Trabajamos con las mejores herramientas para estar al día, siempre poniendo el máximo empeño en nuestra actividad.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="boxTwo" class="mt-10 rounded">
                            <div class="w-full">
                                <img id="boxTwo" class="object-cover rounded" src="{{ asset('img/servicios.png') }}" alt="fachada">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- End ection services -->
        <!-- Section brands -->
        <div class="bg-sky-300 py-5">
            <div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
                <div class="bg-sky-700 rounded w-full h-10 flex items-center justify-center">
                    <h1 class="text-white text-lg lg:text-2xl font-semibold">Usamos las mejores marcas</h1>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 lg:gap-0 items-center justify-center justify-items-center mt-9">
                    <div>
                        <img src="{{ asset('img/marcas/kenwood_logo.png') }}"
                             class="w-40"
                             loading="lazy"
                             alt="kenwood_logo">
                    </div>
                    <div>
                        <img src="{{ asset('img/marcas/motorola_logo.png') }}"
                             class="w-40"
                             loading="lazy"
                             alt="motorola_logo">
                    </div>
                    <div>
                        <img src="{{ asset('img/marcas/teltronic_logo.png') }}"
                             class="w-40"
                             loading="lazy"
                             alt="teltronic_logo">
                    </div>
                    <div>
                        <img src="{{ asset('img/marcas/hytera_logo.png') }}"
                             class="w-40"
                             loading="lazy"
                             alt="hytera_logo">
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 lg:gap-0 lg:grid-cols-3 items-center justify-center justify-items-center mt-9">
                    <div>
                        <img src="{{ asset('img/marcas/sepura_logo.png') }}"
                             class="w-40"
                             loading="lazy"
                             alt="sepura_logo">
                    </div>
                    <div>
                        <img src="{{ asset('img/marcas/logo_flipex.png') }}"
                             class="w-40"
                             loading="lazy"
                             alt="flipex_logo">
                    </div>
                    <div>
                        <img src="{{ asset('img/marcas/david_clark_logo.png') }}"
                             class="w-40"
                             loading="lazy"
                             alt="david_clark_logo">
                    </div>
                </div>
            </div>
        </div>
        <!-- End section brands -->
    </div>

@endsection
@section('js')
    <script>
    </script>
@endsection
