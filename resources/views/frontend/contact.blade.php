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
            <p class="text-white px-2 lg:pl-4 lg:pr-6 mt-32 lg:mt-64 text-5xl lg:text-7xl">Contacto</p>
        </div>
    </div>
</div>
<!-- End Start Section -->
<!-- Icons Sections -->
<div class="bg-sky-100">
    <div class="max-w-7xl mx-auto px-2 py-1 lg:py-24 px-8 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="text-center bg-white rounded-lg relative h-60 mt-24 lg:mt-0">
                <div class="absolute bg-blue-700 rounded-full w-28 h-28 text-center myContactIcons -top-12">
                    <i class="fas fa-phone-alt fa-3x text-white mt-8"></i>
                </div>
                <div class="mt-20">
                    <p class="text-gray-600 text-xl">Teléfono</p>
                    <a class="text-base lg:text-2xl hover:text-blue-600" href="tel:928248150">928 248 150</a> <span class="text-2xl">/</span>
                    <a class="text-base lg:text-2xl hover:text-blue-400" href="tel:928243935">928 243 935</a>
                    <br>
                    <a class="text-base lg:text-2xl hover:text-blue-400" href="tel:922648580">922648580</a>
                </div>
            </div>
            <div class="text-center bg-white rounded-lg relative h-60 mt-24 lg:mt-0">
                <div class="absolute bg-blue-700 rounded-full w-28 h-28 text-center myContactIcons -top-12">
                    <i class="fas fa-envelope fa-3x text-white mt-8"></i>
                </div>
                <div class="mt-20">
                    <p class="text-gray-600 text-xl">Email</p>
                    <a class="text-base lg:text-2xl hover:text-blue-600" href="mailto:info@servicioselectricos.com">info@servicioselectricos.es</a>
                </div>
            </div>
            <div class="text-center bg-white rounded-lg relative h-60 mt-24 lg:mt-0">
                <div class="absolute bg-blue-700 rounded-full w-28 h-28 text-center myContactIcons -top-12">
                    <i class="fas fa-map-marker-alt fa-3x text-white mt-8"></i>
                </div>
                <div class="mt-20 px-3">
                    <p class="text-gray-600 text-xl">Dirección</p>
                    <a class="text-base lg:text-xl hover:text-blue-600" href="https://goo.gl/maps/tb4ahtfprLXve4nm7" target="_blank">C/Sucre, 22 - Bajo Izda.<br>35008 Las Palmas</a>
                    <br>
                    <a class="text-base lg:text-xl hover:text-blue-600" href="https://goo.gl/maps/tb4ahtfprLXve4nm7" target="_blank">Ctra. de Valle Tabares, 23 - Local D.<br>35320 La Laguna</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Icons Sections -->
<!-- Form Section -->
<div class="bg-sky-100">
    <div class="max-w-7xl mx-auto px-2 py-1 lg:py-4 sm:px-6 lg:px-8">
        <div class="px-5 lg:px-52 py-4 relative mb-10 mt-10 lg:mt-0">
                @livewire('frontend.contact')
        </div>
    </div>
</div>
<!-- End orm Section -->
<!-- Maps Section -->
<div class="w-full myContactMapsDiv">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d879.4155370495105!2d-15.4174681707482!3d28.15677148131106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc4095519369020f%3A0x370db4f2c3e9a4c2!2sC.%20Sucre%2C%2022%2C%2035008%20Las%20Palmas%20de%20Gran%20Canaria%2C%20Las%20Palmas!5e0!3m2!1ses!2ses!4v1641141176793!5m2!1ses!2ses"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">

    </iframe>
</div>
<div class="w-full myContactMapsDiv">
    <iframe src="https://www.google.com/maps/embed?pb=!4v1641228140882!6m8!1m7!1sUw3vABVMyR8PylqYY39wWw!2m2!1d28.15693385351508!2d-15.41677420414682!3f204.60593460018956!4f16.440469485912658!5f0.7820865974627469"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">

    </iframe>
</div>
<!-- End Maps Section -->

@endsection
