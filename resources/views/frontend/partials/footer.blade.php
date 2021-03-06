<div class="pt-0">
    <footer id="footer" class="relative z-10 myFooterBackground px-0 lg:px-0">
        <div tabindex="0" aria-label="footer" class="focus:outline-none py-3 lg:py-16">
            <div class="max-w-7xl mx-auto py-4 px-3 lg:px-8">
                <div class="flex flex-col lg:flex-row">
                    <div class="basis-1/2">
                        <div class="w-full lg:w-full">
                            <img class="w-80 ml-5 myFooterLogo" src="{{ asset('img/logo_mediano_sin_fondo.png') }}" alt="logo">
                            <p class="text-white pl-4 pr-6 mt-6 text-base text-justify">@lang('footer.title')</p>
                        </div>
                    </div>
                    <div class="basis-1/2 ml-4 lg:ml-0 mt-4 lg:mt-0">
                        <div class="lg:ml-10">
                            <h3 class="focus:outline-none focus:underline  text-sm lg:text-xl leading-none hover:text-brand dark:hover:text-brand text-white dark:text-gray-50 font-semibold underline uppercase">@lang('footer.pages')</h3>
                            <ul>
                                <li class="mt-6"><a class="focus:outline-none focus:underline text-sm lg:text-base leading-none hover:text-brand hover:text-white text-gray-300" href="{{ route('frontend.index', [], true, app()->getLocale()) }}">@lang('footer.index')</a></li>
                                <li class="mt-6"><a class="focus:outline-none focus:underline text-sm lg:text-base leading-none hover:text-brand hover:text-white text-gray-300" href="{{ route('frontend.about', [], true, app()->getLocale()) }}">@lang('footer.about')</a></li>
                                <li class="mt-6"><a class="focus:outline-none focus:underline text-sm lg:text-base leading-none hover:text-brand hover:text-white text-gray-300" href="{{ route('frontend.services', [], true, app()->getLocale()) }}">@lang('footer.services')</a></li>
                                <li class="mt-6"><a class="focus:outline-none focus:underline text-sm lg:text-base leading-none hover:text-brand hover:text-white text-gray-300" href="{{ route('frontend.contact', [], true, app()->getLocale()) }}">@lang('footer.about')</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="basis-1/2 ml-4 lg:ml-0 mt-4 lg:mt-0">
                        <h3 class="focus:outline-none focus:underline text-sm lg:text-xl leading-none hover:text-brand dark:hover:text-brand text-white dark:text-gray-50 font-semibold underline uppercase">@lang('footer.contact_info')</h3>
                        <ul>
                            <li class="mt-6">
                                <div>
                                    <p class="text-white text-base ml-7 mt-1 cursor-default">@lang('footer.address_title')</p>
                                    <i class="fas fa-map-marker-alt text-white float-left fa-lg mr-3 mt-5"></i>
                                    <div class="ml-7">
                                        <addresss class="cursor-default">
                                            <div>
{{--                                                <a class="focus:outline-none focus:underline text-sm lg:text-base leading-none hover:text-brand hover:text-white text-gray-300" href="javascript:void(0)">C/ Sucre, 22 - Bajo Izqda, CP 35008 Las Palmas</a>--}}
                                                <p class="focus:outline-none focus:underline text-sm lg:text-base leading-none text-gray-300" href="javascript:void(0)">@lang('footer.address1')</p>
                                            </div>
                                            <div class="mt-2">
{{--                                                <a class="focus:outline-none focus:underline text-sm lg:text-base leading-none hover:text-brand hover:text-white text-gray-300" href="javascript:void(0)">Ctra. de Valle Tabares, 23 - Local D, CP 38320 La Laguna</a>--}}
                                                <p class="focus:outline-none focus:underline text-sm lg:text-base leading-none text-gray-300">@lang('footer.address2')</p>
                                            </div>
                                        </addresss>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-6">
                                <i class="fas fa-phone-alt text-white float-left mt-1 fa-lg mr-3"></i>
                                <div class="ml-7">
                                    <a class="focus:outline-none focus:underline text-sm lg:text-base leading-none hover:text-brand hover:text-white text-gray-300" href="tel:+34928248150">+34 928 248 150</a>
                                    <a class="focus:outline-none focus:underline text-sm lg:text-base leading-none hover:text-brand hover:text-white text-gray-300 mt-30" href="tel:+34922648580">+34 922 648 580</a>
                                </div>
                            </li>
                            <li class="mt-6">
                                <i class="fas fa-envelope text-white float-left mt-1 fa-lg mr-3"></i>
                                <div class="ml-7">
                                    <a class="focus:outline-none focus:underline text-sm lg:text-base leading-none hover:text-brand hover:text-white text-gray-300" href="mailto:info@servicioselectronicos.es">info@servicioselectronicos.es</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-0 justify-center items-center border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-3 lg:px-8 myFooterBg">
                <div class="flex flex-col lg:flex-row">
                    <div class="basis-1/2 text-center lg:text-left">
                        <p tabindex="0" class="focus:outline-none py-2 text-xs lg:text-sm leading-none text-white">{{ date('Y') }} ?? servicioselectronicos s.l</p>
                    </div>
                    <div class="basis-1/2 text-center lg:text-right mt-2">
                        <ul class="list-disc text-xs lg:text-sm">
                            <li class="inline text-white hover:text-sky-900 hover:underline"><a href="javascript:void(0)">@lang('footer.policy_privacy')</a></li>
                            <li class="inline text-white hover:text-sky-900 hover:underline ml-2"><a href="javascript:void(0)">@lang('footer.cookies')</a></li>
                            <br class="lg:hidden">
                            <li class="inline text-white hover:text-sky-900 hover:underline ml-2"><a href="javascript:void(0)">@lang('footer.legal')</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
