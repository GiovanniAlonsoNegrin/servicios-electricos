<nav id="navBar" class="bg-sky-100 w-full">
    <div class="max-w-7xl mx-auto px-2 py-4 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <!-- Mobile menu button-->
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                <button id="menuButtonMobile" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-900 hover:text-white hover:bg-sky-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                {{-- logotipo --}}
                <a href="{{ route('frontend.index') }}" class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-10 w-40 mr-2" src="{{ asset('img/logo_mediano_sin_fondo.png') }}" alt="Servicio electricos">
                    <img class="hidden lg:block h-14 w-64" src="{{ asset('img/logo_mediano_sin_fondo.png') }}" alt="Servicios electricos">
                </a>
                {{-- menu lg --}}
                <div class="hidden sm:block sm:ml-6 mt-1.5">
                    <div class="flex space-x-4 mt-2">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <div>
                            <a href="{{ route('frontend.index', [], true, app()->getLocale()) }}" class="{{ request()->routeIs('frontend.index') ? 'text-sky-900' : 'text-gary-900' }} hover:text-sky-900 px-3 py-2 rounded-md text-lg font-medium" aria-current="page">@lang('nav.home')</a>
                            @if(request()->routeIs('frontend.index'))
                                <div class="w-100 h-0.5 bg-sky-900"></div>
                            @endif
                        </div>

                        <div>
                            <a href="{{ route('frontend.about', [], true, app()->getLocale()) }}" class="{{ request()->routeIs('frontend.about') ? 'text-sky-900' : 'text-gray-900' }}  hover:text-sky-900 px-3 py-2 rounded-md text-lg font-medium">@lang('nav.about')</a>
                            @if(request()->routeIs('frontend.about'))
                                <div class="w-100 h-0.5 bg-sky-900"></div>
                            @endif
                        </div>

                        <div>
                            <a href="{{ route('frontend.services', [], true, app()->getLocale()) }}" class="  hover:text-sky-900 px-3 py-2 rounded-md text-lg font-medium">@lang('nav.services')</a>
{{--                            @if(request()->routeIs('frontend.services'))--}}
{{--                                <div class="w-100 h-0.5 bg-sky-900"></div>--}}
{{--                            @endif--}}
                        </div>

                        <div>
                            <a href="{{ route('frontend.contact', [], true, app()->getLocale()) }}" class="{{ request()->routeIs('frontend.contact') ? 'text-sky-900' : 'text-gray-900' }}  hover:text-sky-900 px-3 py-2 rounded-md text-lg font-medium">@lang('nav.contact')</a>
                            @if(request()->routeIs('frontend.contact'))
                                <div class="w-100 h-0.5 bg-sky-900"></div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <!-- Language menu -->
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button" class="inline-flex justify-center w-full text-sm font-medium text-gray-700 hover:text-sky-900 focus:outline-none" id="langMenuButton" aria-expanded="true" aria-haspopup="true">
                            @lang('nav.language')
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                    <div id="langMenu" class="hidden origin-top-right absolute -right-1 mt-2 w-24 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div role="none">
                            <a href="{{ route(\Request::route()->getName(), request()->route()->parameters(), true, 'es') }}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 rounded-t-md" role="menuitem" tabindex="-1" id="menu-item-0">Espa??ol</a>
                            <a href="{{ route(\Request::route()->getName(), request()->route()->parameters(), true, 'en') }}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 rounded-b-md" role="menuitem" tabindex="-1" id="menu-item-1">Ingl??s</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Language menu -->
            @auth
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{--                <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">--}}
                {{--                    <span class="sr-only">View notifications</span>--}}
                {{--                    <!-- Heroicon name: outline/bell -->--}}
                {{--                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
                {{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />--}}
                {{--                    </svg>--}}
                {{--                </button>--}}

                <!-- Profile dropdown -->
                    <div class="ml-3 relative">
                        <div>
                            <button type="button"  id="profileButton" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="foto de perfil">
                            </button>
                        </div>

                        <!--
                          Dropdown menu, show/hide based on menu state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div id="myProfile" class="hidden origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-50" role="menuitem" tabindex="-1" id="user-menu-item-0">Perfil</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-md text-gray-700 hover:bg-gray-50" role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault(); this.closest('form').submit();">
                                    Salir
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div>
                    <a href="{{ route('login') }}" class="text-gray-300 px-3 py-2 rounded-md text-lg font-medium hidden"><i class="fas fa-sign-in-alt text-gray-900 hover:text-sky-900 fa-lg"></i></a>
{{--                    <a href="{{ route('register') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-lg font-medium">Registrarse</a>--}}
                </div>
            @endauth
        </div>
    </div>

    <!-- Mobile menu. -->
    <div class="sm:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ route('frontend.index', [], true, app()->getLocale()) }}" class="{{ request()->routeIs('frontend.index') ? 'text-sky-900 text-white' : 'text-gray-900' }}  block px-3 py-2 rounded-md text-lg font-medium" aria-current="page">{{__('nav.home')}}</a>
            @if(request()->routeIs('frontend.index'))
                <div class="w-16 ml-1 h-0.5 bg-sky-900"></div>
            @endif

            <a href="{{ route('frontend.about', [], true, app()->getLocale()) }}" class="{{ request()->routeIs('frontend.about') ? 'text-sky-900 text-white' : 'text-gray-900' }} block px-3 py-2 rounded-md text-lg font-medium">{{__('nav.about')}}</a>
            @if(request()->routeIs('frontend.about'))
                <div class="w-28 ml-1 h-0.5 bg-sky-900"></div>
            @endif

            <a href="{{ route('frontend.services', [], true, app()->getLocale()) }}" class="{{ request()->routeIs('frontend.services') ? 'text-sky-900 text-white' : 'text-gray-900' }} block px-3 py-2 rounded-md text-lg font-medium">{{__('nav.services')}}</a>
            @if(request()->routeIs('frontend.services'))
                <div class="w-24 ml-1 h-0.5 bg-sky-900"></div>
            @endif

            <a href="{{ route('frontend.contact', [], true, app()->getLocale()) }}" class="{{ request()->routeIs('frontend.contact') ? 'text-sky-900 text-white' : 'text-gray-900' }} block px-3 py-2 rounded-md text-lg font-medium">{{__('nav.contact')}}</a>
            @if(request()->routeIs('frontend.contact'))
                <div class="w-24 ml-1 h-0.5 bg-sky-900"></div>
            @endif

        </div>
    </div>
</nav>
