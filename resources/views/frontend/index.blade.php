@extends('frontend.master')

@section('title', 'Home')

@section('body')
<!-- Button -->
<div id="scrollButton" class="hidden mr-2 bg-sky-700 hover:bg-sky-600 bottom-10 right-0 h-12 lg:h-16 w-12 lg:w-16 fixed z-50 lg:rounded-full border-2 border-sky-800 cursor-pointer">
    <div class="mx-auto text-center mt-1 lg:mt-3">
        <i class="fas fa-chevron-up fa-2x hover:text-white"></i>
    </div>
</div>
<!-- End button -->
<!-- Section one -->
<div class="myBackground myIndexHeight">
    <div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
        <div class="lg:w-1/2 float-left">
            <div class="w-full lg:w-full mt-4 lg:mt-10">
                <h1 class="text-white px-2 lg:pl-4 lg:pr-6 mt-12 lg:mt-32 text-xl lg:text-4xl">@lang('frontend.home_title')</h1>
                <p class="text-white px-2 lg:pl-4 pr-6 mt-10 text-sm lg:text-4xl text-justify">@lang('frontend.home_subtitle')</p>
                <div class="mt-12 lg:mt-24">
                    <a class="bg-sky-500 hover:bg-sky-700 text-white ml-2 lg:ml-5 py-5 px-8 rounded-full" href="{{ route('frontend.about') }}">@lang('frontend.home_button')</a>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 float-right">
            <div class="w-full lg:w-full mt-10 lg:mt-40 mr-9 lg:mr-0 mx-auto">
                <img id="isos" class="w-80 opacity-0" src="{{ asset('img/isos.png') }}" alt="logo">
            </div>
        </div>
    </div>
</div>
<!-- End section one -->
<!-- Section services -->
<div class="py-5 mySecondHeight myServicesBackground">
    <div class="w-full mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
{{--                <div class="w-full h-10 flex items-center justify-center">--}}
{{--                    <h1 class="text-blue-700 text-lg lg:text-4xl font-semibold">Contamos con el mejor servicio</h1>--}}
{{--                </div>--}}
        <a href="{{ route('frontend.services') }}">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <div id="boxTwo" class="mt-10 rounded">
                    <div class="w-full">
                        <img id="boxTwo" class="object-cover rounded myServicesImgWidth mx-auto mt-20 2xl:mt-12" src="{{ asset('img/servicios/servicios.png') }}" alt="servicios">
                    </div>
                </div>
                <div id="boxOne" class="mt-10 rounded col-span-2">
                    <div class="w-full px-4 py-1 rounded">
                        <p class="myColor text-lg font-bold">@lang('frontend.home_service_question')</p>
                        <h1 class="text-gray-900 text-2xl lg:text-4xl mt-4">@lang('frontend.home_service_title')</h1>
                        <div class="mt-10">
                            <div class="flex flex-col lg:flex-row mt-10 lg:mt-5">
                                <div class="basis-1/2 flex flex-row">
                                    <div class="basis-14">
                                        <img class="mt-2" src="{{ asset('img/servicios/features-1.png') }}" alt="equipo">
                                    </div>
                                    <div class="basis-4/5 ml-4">
                                        <h1 class="text-2xl">@lang('frontend.home_service_expert_title')</h1>
                                        <p class="text-lg">@lang('frontend.home_service_expert_msg')</p>
                                    </div>
                                </div>
                                <div class="basis-1/2 flex flex-row mt-10 lg:mt-0">
                                    <div class="basis-14">
                                        <img class="mt-2" src="{{ asset('img/servicios/features-2.png') }}" alt="equipo">
                                    </div>
                                    <div class="basis-4/5 ml-4">
                                        <h1 class="text-2xl">@lang('frontend.home_service_control_title')</h1>
                                        <p class="text-lg">@lang('frontend.home_service_control_msg')</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col lg:flex-row mt-10">
                                <div class="basis-1/2 flex flex-row">
                                    <div class="basis-14">
                                        <img class="mt-2" src="{{ asset('img/servicios/features-3.png') }}" alt="equipo">
                                    </div>
                                    <div class="basis-4/5 ml-4">
                                        <h1 class="text-2xl">@lang('frontend.home_service_integration_title')</h1>
                                        <p class="text-lg">@lang('frontend.home_service_integration_msg')</p>
                                    </div>
                                </div>
                                <div class="basis-1/2 flex flex-row mt-10 lg:mt-0">
                                    <div class="basis-14">
                                        <img class="mt-2" src="{{ asset('img/servicios/features-4.png') }}" alt="equipo">
                                    </div>
                                    <div class="basis-4/5 ml-4">
                                        <h1 class="text-2xl">@lang('frontend.home_service_support_title')</h1>
                                        <p class="text-lg">@lang('frontend.home_service_support_msg')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 mb-10">
                            <p class="text-lg">@lang('frontend.home_service_msg1')<a class="myColor underline" href="{{ route('frontend.services') }}">@lang('frontend.home_service_msg2')</a> @lang('frontend.home_service_msg3')</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<!-- End Section services -->
<!-- Section brands -->
<div class="py-5">
    <div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
        <div class="w-full h-10 flex items-center justify-center">
            <h1 class="text-gray-900 text-lg lg:text-4xl font-semibold">@lang('frontend.home_service_brands')</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 lg:gap-0 items-center justify-center justify-items-center mt-9">
            <div>
                <a href="https://www.kenwood.es/" target="_blank">
                    <img src="{{ asset('img/marcas/kenwood_logo.png') }}"
                         class="w-40"
                         loading="lazy"
                         alt="kenwood_logo">
                </a>
            </div>
            <div>
                <a href="https://www.motorola.es/" target="_blank">
                    <img src="{{ asset('img/marcas/motorola_logo.png') }}"
                         class="w-40"
                         loading="lazy"
                         alt="motorola_logo">
                </a>
            </div>
            <div>
                <a href="https://www.teltronic.es/" target="_blank">
                    <img src="{{ asset('img/marcas/teltronic_logo.png') }}"
                         class="w-40 mt-6 lg:mt-0"
                         loading="lazy"
                         alt="teltronic_logo">
                </a>
            </div>
            <div>
                <a href="https://www.hytera.com/" target="_blank">
                    <img src="{{ asset('img/marcas/hytera_logo.png') }}"
                         class="w-40 mt-6 lg:mt-0"
                         loading="lazy"
                         alt="hytera_logo">
                </a>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-10 lg:gap-4 lg:gap-0 md:grid-cols-3 items-center justify-center justify-items-center mt-14 lg:mt-9">
            <div>
                <a href="https://www.sepura.com/" target="_blank">
                    <img src="{{ asset('img/marcas/sepura_logo.png') }}"
                         class="w-40 mt-6 lg:mt-0"
                         loading="lazy"
                         alt="sepura_logo">
                </a>
            </div>
            <div>
                <a href="https://www.fiplex.com/es/" target="_blank">
                    <img src="{{ asset('img/marcas/logo_flipex.png') }}"
                         class="w-40 mt-6 lg:mt-0"
                         loading="lazy"
                         alt="flipex_logo">
                </a>
            </div>
            <div>
                <a href="https://www.davidclarkcompany.com/" target="_blank">
                    <img src="{{ asset('img/marcas/david_clark_logo.png') }}"
                         class="w-40 mt-6 lg:mt-0"
                         loading="lazy"
                         alt="david_clark_logo">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End section brands -->
@endsection
{{--@section('js')--}}
{{--    <script>--}}
{{--    </script>--}}
{{--@endsection--}}
