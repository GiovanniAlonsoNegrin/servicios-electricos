@extends('frontend.master')

@section('title', 'Servicios')

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
                <h1 class="text-2xl text-black">Estudio, implementación y diseño de Redes Digitales de Radiocomunicación</h1>
                <p class="mt-5 text-black">Trabajamos junto al cliente en el diseño e implementación de la solución más adecuada y que mejor se ajuste a sus requerimientos y presupuesto.</p>
            </div>
        </div>
        <div class="border border-gray-200 rounded-lg px-10 py-16">
            <div class="text-center">
                <i class="fas fa-satellite-dish fa-4x myColor"></i>
            </div>
            <div class="mt-10">
                <h1 class="text-2xl text-black">Consultoría de Telecomunicaciones</h1>
                <p class="mt-5 text-black">Aplicaciones Tecnológicas diseñadas para proveerles de las mejores soluciones de ingeniería.</p>
            </div>
        </div>
        <div class="border border-gray-200 rounded-lg px-10 py-16">
            <div class="text-center">
                <i class="fas fa-tools fa-4x myColor"></i>
            </div>
            <div class="mt-10">
                <h1 class="text-2xl text-black">Diseño, instalación y equipamiento de vehículos especiales</h1>
                <p class="mt-5 text-black">Contamos con los mejores materiales para la realización del equipamiento de vehículos de bomberos, ambulancias etc...</p>
            </div>
        </div>
    </div>
</div>
<!-- End Init Service Section -->
<!-- Solutions Section -->
<div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8 cursor-default">
    <div class="py-5">
        <h1 class="text-center text-3xl lg:text-4xl">Soluciones de comunicación</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 mt-10">
            <div class="uppercase font-bold text-xl lg:text-2xl text-black text-center lg:text-right mt-1 lg:mt-8 mb-1 lg:mb-0">
                <p class="mr-3">Emergencias</p>
                <p class="mr-3">Infraestructuras críticas</p>
                <p class="mr-3">Policía y seguridad pública</p>
                <p class="mr-3">112</p>
                <p class="mr-3">Bomberos</p>
                <p class="mr-3">Protección civil</p>
                <p class="mr-3">Servcios forestales</p>
                <p class="mr-3">Centros sanitarios</p>
                <p class="mr-3">Servicios municipales</p>
                <p class="mr-3">Industrias</p>
                <p class="mr-3">Transporte</p>
                <p class="mr-3">Taxis</p>
                <p class="mr-3">Handling aeroportuario</p>
                <p class="mr-3">hotels & resorts</p>
                <p class="mr-3">facilities y empresas de servicios</p>
                <p class="mr-3">Seguridad privada</p>
            </div>
            <div class="border-t-8 lg:border-t-0 lg:border-l-8 border-blue-900 uppercase text-lg text-black font-bold">
                <ul class="myUl ml-5 mt-5 lg:mt-0">
                    <li>Soluciones de despacho</li>
                    <li class="mt-3">Soluciones de movilidad</li>
                    <li class="mt-3">Soluciones de radio: voz y datos</li>
                    <li class="mt-3">Soluciones de localización y gestión de flotas</li>
                    <li class="mt-3">Instalaciones en vehículos</li>
                    <li class="mt-3">Terminales móviles de datos</li>
                    <li class="mt-3">Impresoras y sistemas embarcados</li>
                    <li class="mt-3">Aplicaciones y desarrollos a medida</li>
                    <li class="mt-3">Equipamiento y solución tetra</li>
                    <li class="mt-3">Integración de sistemas</li>
                    <li class="mt-3">Transición a banda ancha-lte</li>
                    <li class="mt-3">Consultoría y asesoría técnica</li>
                    <li class="mt-3">Redes de comunicación</li>
                    <li class="mt-3">Radiocomunicación para misión crítica</li>
                    <li class="mt-3">Centros de coordinación y comunicaciones</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Solutions Section -->
<!-- Telecomunications Section -->
<div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8 cursor-default">
    <div class="py-5">
        <h1 class="text-center text-3xl lg:text-4xl">Consultoría de Telecomunicaciones</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10 px-5">
            <div class="text-2xl text-black py-16">
                <p>Suministramos electrónica, software, hardware y productos a medida a diversas agencias y organismos públicos en canarias</p>
                <p class="mt-10">Diseñamos, desarrollamos y fabricamos productos y servicios para dar soporte y sacar el mayor partido posible a su equipamiento, ahorrándole tiempo y dinero.</p>
            </div>
            <div>
                <img class="rounded-lg" src="{{ asset('img/servicios/service_comunications.jpg') }}" alt="telecomunicaciones">
            </div>
        </div>
    </div>
</div>
<!-- Equipment Vehicles Section -->
<div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8 cursor-default">
    <div class="py-5">
        <h1 class="text-center text-3xl lg:text-4xl">Diseño, instalación y equipamiento de vehículos especiales</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mt-10 px-5">
            <div>
                <img class="rounded-lg" src="{{ asset('img/servicios/mecanico.jpg') }}" alt="telecomunicaciones">
            </div>
            <div class="text-2xl text-black py-8">
                <ul class="myUl">
                    <li>Puestos de Mando Avanzado (PMA) y comunicaciones</li>
                    <li class="mt-5">Vehículos de Bomberos y Extinción de Incendios</li>
                    <li class="mt-5">Atestados: Traslado de detenidos y Unidades Especiales</li>
                    <li class="mt-5">Ambulancias: Traslado, Básicas, Medicalizadas y Coordinación</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Equipment Vehicles Section -->
<!-- I+D+I Section -->
<div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8 cursor-default">
    <div class="py-5">
        <div class="flex flex-row">
            <div>
                <img src="{{ asset('img/servicios/IDI.png') }}" alt="i+d+i">
            </div>
            <div class="basis-full">
                <h1 class="text-center text-2xl lg:text-3xl lg:text-5xl">Lo imposible no existe</h1>
                <p class="text-center myColor uppercase text-lg lg:text-3xl font-bold">Investigación, desarrollo e innovación</p>
            </div>
        </div>
        <div class="mt-10 px-5 grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div>
                <ul class="text-black text-lg lg:text-2xl space-y-4">
                    <li>- Cumplimiento de la <span class="font-bold">Ley de Protección de Datos.</span></li>
                    <li>- <span class="font-bold">Estados del vehículo</span>, apertura puerta, arranque etc...</li>
                    <li>- Envío de <span class="font-bold">mensajes por megafonía</span> de manera remota.</li>
                    <li>- <span class="font-bold">Accionamiento remoto de dispositivos,</span> puertas etc...</li>
                    <li>- <span class="font-bold">Encendido y apagado programado</span> de la emisora.</li>
                    <li>- Envío de <span class="font-bold">alarmas remotas</span>.</li>
                    <li>- Conexión a <span class="font-bold">porteros automáticos</span></li>
                    <li>- Comunicaciones en <span class="font-bold">POSTES SOS</span>.</li>
                    <li>- <span class="font-bold">Gestión de flotas</span> mediante <span class="font-bold">GPS</span>.</li>
                    <li>- Envío/Recepción de <span class="font-bold">mensajes</span> en pantalla.</li>
                </ul>
            </div>
            <div>
                <ul class="text-black text-lg lg:text-2xl space-y-4">
                    <li>- Conexión a <span class="font-bold">impresora</span> para mensajes.</li>
                    <li>- Conexión a <span class="font-bold">pantallas led</span> para avisos remotos.</li>
                    <li>- Envío de <span class="font-bold">estados</span> de operatividad.</li>
                    <li>- <span class="font-bold">Mensajes de texto</span>, individuales, generales y de grupo.</li>
                    <li>- Sistemas de <span class="font-bold">Telemetría y alarmas</span>.</li>
                    <li>- <span class="font-bold">Teleconsulta</span> a base de datos.</li>
                    <li>- Seguridad con sistema "<span class="font-bold">hombre caído</span>".</li>
                    <li>- <span class="font-bold">Maletas logísticas de comunicaciones</span>.</li>
                    <li>- Comunicaciones por <span class="font-bold">Bluetooth</span>.</li>
                    <li>- <span class="font-bold">Pasarelas de comunicaciones</span> TETRA - PMR.</li>
                    <li>- <span class="font-bold">Controles remotos</span> para vehículos especiales.</li>
                    <li>- Conexión con el <span class="font-bold">CECOES 112</span>.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End I+D+I Section -->

@endsection
