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
<div class="myAboutBackground myHeight">
    <div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
        <div class="w-full lg:w-full mt-4 lg:mt-10 text-center">
            <p class="text-white px-2 lg:pl-4 lg:pr-6 mt-32 lg:mt-64 text-5xl lg:text-7xl">Sobre Nosotros</p>
        </div>
    </div>
</div>
<!-- End Start Section -->
<!-- Initial Section -->
<div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 py-12 lg:py-24 px-2">
        <div>
            <img class="w-full rounded-lg" src="{{ asset('img/fachada.jpg') }}" alt="fachada">
        </div>
        <div class="mt-6 lg:mt-0">
            <h1 class="text-xl lg:text-3xl font-bold text-black">Somos especialistas en sistemas de comunicación para los servicios de seguridad y atención de emergencias</h1>
            <p class="mt-2 text-lg black">Servicios Electrónicos, S.L. es una empresa canaria lider en el sector de las Telecomunicaciones y Soluciones Tecnológicas.</p>
            <p class="mt-2 text-lg black">Estamos especializados en desarrollos de tecnología e integración de sistemas, venta e instalación de equipos y soluciones de Telecomunicaciones. Siendo nuestra principal área de referencia los sistemas de Radiocomunicación y Redes de Banda Ancha.</p>
            <p class="mt-2 text-lg black">Somos distribuidores de las principales marcas de radiocomunicaciones analógicas, digitales y TETRA como Kenwood, Hytera, Motorola y Sepura, siendo servicio técnico oficial en Canarias de Kenwood Communications desde 1978 y de Hytera y Sepura desde 2014 y 2009.</p>
            <div class="mt-5">
                <div class="flex flex-row">
                    <div class="basis-11">
                        <i class="fas fa-check myColor"></i>
                    </div>
                    <div class="basis-1/2">
                        <p class="text-black cursor-default">Resolución de problemas complejos</p>
                    </div>
                </div>
                <div class="flex flex-row mt-2">
                    <div class="basis-11">
                        <i class="fas fa-check myColor"></i>
                    </div>
                    <div class="basis-1/2">
                        <p class="text-black cursor-default">Garantizamos un servicio de confianza</p>
                    </div>
                </div>
                <div class="flex flex-row mt-2">
                    <div class="basis-11">
                        <i class="fas fa-check myColor"></i>
                    </div>
                    <div class="basis-1/2">
                        <p class="text-black cursor-default">Expertos en campos tecnologicos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Initial Section -->
<!-- Years Section -->
<div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
        <div class="mb-24">
            <h1 class="text-9xl font-bold myColor">40 +</h1>
            <p class="text-lg lg:text-3xl text-black">Años de experiencia</p>
            <p class="text-xl lg:text-3xl mt-10 text-black">Realizamos los mejores <a class="myColor hover:underline" href="{{ route('frontend.services') }}">servicios de TI</a> que prometen su éxito</p>
        </div>
        <div class="mb-10">
            <h1 class="text-lg lg:text-3xl">Acelere la innovación con el mejor equipo tecnológico, lo conectaremos con la mejor tecnología</h1>
            <div class="mt-6">
                <p class="text-black">Gestión de TI</p>
                <div class="percent">
                    <div style="width: 80%"></div>
                </div>
            </div>
            <div class="mt-6">
                <p class="text-black">Seguridad de datos</p>
                <div class="percent">
                    <div style="width: 90%"></div>
                </div>
            </div>
            <div class="mt-6">
                <p class="text-black">Soluciones de TI</p>
                <div class="percent">
                    <div style="width: 90%"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Years Section -->
@endsection
