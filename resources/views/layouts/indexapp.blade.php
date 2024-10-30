<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/toastify-js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    @vite([
        'resources/css/app.css',
        'resources/css/index/index.css',
        'resources/css/nav/nav.scss',
        'resources/css/header/headerHome.scss',
        'resources/css/form/availability.scss',
        'resources/css/aboutUs/about.scss',
        'resources/css/aboutUs/imgAboutUs.scss',
        'resources/css/sliderRooms/slider.scss',
        'resources/css/introvideo/video.scss',
        'resources/css/facilities/facilities.scss',
        'resources/css/menu/menu.scss',
        'resources/css/sliderStandar/sliderStandarNavigation.scss',
        'resources/css/estadisticas/estadisticas.scss',
        'resources/css/footer/footer.scss',
        'resources/css/aboutPage/about.scss',
        'resources/css/room/room.scss',
        'resources/css/roomdetails/roomdetails.scss',
        'resources/css/offers/offers.scss',
        'resources/css/contact/contact.scss',
    ])
    @vite('resources/js/app.js')
</head>
<body>
<div class="topbarescritorio"></div>
    <nav>
        
        <div class="contentsecondnav">
            <!--close-->
            <div class="navclose">
                <div class="navclose__img"></div>
                <div class="navclose__menu"></div>
            </div>
            <!--titulo-->
            <div class="navtitulos">
                <a href="{{ route('home') }}">
                    <div class="navtitulos__content navtitulos--fondo">
                        <img class="navtitulos__content__img" src="{{ asset('build/images/imgs/H.svg') }}" alt="Logo Hotel Miranda"/>
                    </div>
                    <div class="navtitulos__content">
                        <img class="navtitulos__content__tit" src="{{ asset('build/images/imgs/HotelMiranda.svg') }}" alt=""/>
                    </div>
                </a>
            </div>
            <!--Nav-->
            <div class="navMenu">
                <div class="navMenu__about"><a href="{{ route('about') }}">About Us</a></div>
                <div class="navMenu__rooms"><a href="{{ route('rooms.index') }}">Rooms</a></div>
                <div class="navMenu__offers"><a href="{{ route('rooms.offers') }}">Offers</a></div>
                <div class="navMenu__contact"><a href="{{ route('contact') }}">Contact</a></div> 
            </div>                  
            <!--iconos-->
            <div class="naviconos">
                <a href="{{Auth::check() ? route('dashboard') : route('register')}}">
                    <div class="aux">
                        <div class="naviconos__perfil"></div>
                    </div>
                </a>
                <a href="">
                    <div class="aux2">
                        <div class="naviconos__search"></div>
                    </div>
                </a>
            </div>
        </div>
    </nav>
    <!--Nav JS-->
    <div class="nav">
        <ul class="nav__list">
            <li>About Us</li>
            <li>Rooms</li>
            <li>Offers</li>
            <li>Contact</li>
        </ul>
    </div>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer">
            <div class="contentfooter1">
                <div>
                    <div class="footer__logo">H</div>
                    <span class="footer__name">HOTEL<br><span>MIRANDA</span></span>
                </div>
                <p class="footer__p">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
                <div>
                    <div class="footer__contentprimary">
                        <div class="footer__contentsecundary contentSec">
                            <svg id="facebook" width="20px" height="20px" id="facebook" fill="white" viewBox="-192 -192 2304.00 2304.00" xmlns="http://www.w3.org/2000/svg" transform="matrix(1, 0, 0, 1, 0, 0)">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="3.84"/>
                                <g id="SVGRepo_iconCarrier"> <path d="M1168.737 487.897c44.672-41.401 113.824-36.889 118.9-36.663l289.354-.113 6.317-417.504L1539.65 22.9C1511.675 16.02 1426.053 0 1237.324 0 901.268 0 675.425 235.206 675.425 585.137v93.97H337v451.234h338.425V1920h451.234v-789.66h356.7l62.045-451.233H1126.66v-69.152c0-54.937 14.214-96.112 42.078-122.058" fill-rule="evenodd"/> </g>
                            </svg>
                        </div>
                    </div>
    
                    <div class="footer__contentprimary">
                        <div class="footer__contentsecundary contentSec">
                            <svg id="twitter" width="15px" height="15px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="white">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                <g id="SVGRepo_iconCarrier"> <title>twitter [#154]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="white" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="white"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#154]"> </path> </g> </g> </g> </g>
                            </svg>
                        </div>
                    </div>
    
                    <div class="footer__contentprimary">
                        <div class="footer__contentsecundary contentSec">
                            <svg id="be" width="20px" height="20px" viewBox="0 0 24 24" fill="#000000" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 19C1.67157 19 1 18.3284 1 17.5V6.5C1 5.67157 1.67157 5 2.5 5H8C13 5 13 11.5 10 11.5C13 11.5 14 19 8 19H2.5ZM4.5 11C4.22386 11 4 10.7761 4 10.5V7.5C4 7.22386 4.22386 7 4.5 7H7C7 7 9 7 9 9C9 11 7 11 7 11H4.5ZM4.5 13C4.22386 13 4 13.2239 4 13.5V16.5C4 16.7761 4.22386 17 4.5 17H8C8 17 9.5 17 9.5 15C9.5 13 8 13 8 13H4.5Z" fill="#ffffff"/> <path fill-rule="evenodd" clip-rule="evenodd" d="M21.499 14.0034C22.3279 14.0034 23.0212 13.3199 22.8522 12.5085C21.6065 6.52886 12.9128 7.08088 13 14.0034C13.0665 19.2762 20.4344 20.9671 22.6038 16.1898C22.9485 15.4308 22.1747 14.9997 21.5372 14.9997C20.9706 14.9997 20.5313 15.5223 20.1693 15.9582C19.1272 17.2132 15.9628 17.1221 15.5449 14.5142C15.5005 14.2375 15.7304 14.0034 16.0106 14.0034H21.499ZM15.8184 11.9997C15.671 11.9997 15.5758 11.8453 15.6545 11.7207C16.7141 10.0424 19.2614 10.0605 20.3398 11.7189C20.4207 11.8434 20.3257 11.9997 20.1772 11.9997H15.8184Z" fill="#ffffff"/> <path d="M16 6C15.4477 6 15 6.44772 15 7C15 7.55228 15.4477 8 16 8H20C20.5523 8 21 7.55228 21 7C21 6.44772 20.5523 6 20 6H16Z" fill="#ffffff"/> </g>
                            </svg>
                        </div>
                    </div>
    
                    <div class="footer__contentprimary">
                        <div class="footer__contentsecundary contentSec">
                            <svg id="linkedin" width="15px" height="15px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                <g id="SVGRepo_iconCarrier"> <title>linkedin [#161]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -7479.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M144,7339 L140,7339 L140,7332.001 C140,7330.081 139.153,7329.01 137.634,7329.01 C135.981,7329.01 135,7330.126 135,7332.001 L135,7339 L131,7339 L131,7326 L135,7326 L135,7327.462 C135,7327.462 136.255,7325.26 139.083,7325.26 C141.912,7325.26 144,7326.986 144,7330.558 L144,7339 L144,7339 Z M126.442,7323.921 C125.093,7323.921 124,7322.819 124,7321.46 C124,7320.102 125.093,7319 126.442,7319 C127.79,7319 128.883,7320.102 128.883,7321.46 C128.884,7322.819 127.79,7323.921 126.442,7323.921 L126.442,7323.921 Z M124,7339 L129,7339 L129,7326 L124,7326 L124,7339 Z" id="linkedin-[#161]"> </path> </g> </g> </g> </g>
                            </svg>
                        </div>
                    </div>
    
                    <div class="footer__contentprimary">
                        <div class="footer__contentsecundary contentSec">
                            <svg id="youtube" width="15px" height="15px" viewBox="0 -3 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                <g id="SVGRepo_iconCarrier"> <title>youtube [#168]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -7442.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M251.988432,7291.58588 L251.988432,7285.97425 C253.980638,7286.91168 255.523602,7287.8172 257.348463,7288.79353 C255.843351,7289.62824 253.980638,7290.56468 251.988432,7291.58588 M263.090998,7283.18289 C262.747343,7282.73013 262.161634,7282.37809 261.538073,7282.26141 C259.705243,7281.91336 248.270974,7281.91237 246.439141,7282.26141 C245.939097,7282.35515 245.493839,7282.58153 245.111335,7282.93357 C243.49964,7284.42947 244.004664,7292.45151 244.393145,7293.75096 C244.556505,7294.31342 244.767679,7294.71931 245.033639,7294.98558 C245.376298,7295.33761 245.845463,7295.57995 246.384355,7295.68865 C247.893451,7296.0008 255.668037,7296.17532 261.506198,7295.73552 C262.044094,7295.64178 262.520231,7295.39147 262.895762,7295.02447 C264.385932,7293.53455 264.28433,7285.06174 263.090998,7283.18289" id="youtube-[#168]"> </path> </g> </g> </g> </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contentfooter2">
                <h3 class="footer__titservices">Services.</h3>
                <div class="footer__lista">
                    <ul>
                        <div class="footer__lista__content1">
                            <li>+ Resturent & Bar</li>
                            <li>+ Swimming Pool </li>
                            <li>+ Wellness & Spa </li>
                            <li>+ Restaurant </li>
                            <li>+ Conference Room </li>
                            <li>+ Coctail Party House</li>
                        </div>
                        <div class="footer__lista__content2">
                            <li>+ Gaming Zone </li>
                            <li>+ Marrige Party </li>
                            <li>+ Party Planning </li>
                            <li>+ Tour Consultancy</li>
                        </div>
                    </ul>
                </div>
            </div>
           
            <div class="contentfooter3">
                <h3 class="footer__titcontact">Contact Us.</h3>
                <div>
                    <div class="footer__contentcontact">
                        <div class="footer__contentcontact__imgphone">
                            <img src="./sources//imgs/contact/phone.svg" alt=""/>
                        </div>
                        <div class="footer__contentcontact__txtphone">
                            <span class="footer__contentcontact__txtphone__tit">Phone Number</span>
                            <span class="footer__contentcontact__txtphone__num">+36 600845465</span>
                        </div>
                    </div>
                    <div class="footer__contentcontact">
                        <div class="footer__contentcontact__imgphone">
                            <img src="./sources//imgs/contact/correo.svg" alt=""/>
                        </div>
                        <div class="footer__contentcontact__txtphone">
                            <span class="footer__contentcontact__txtphone__tit">Mail</span>
                            <span class="footer__contentcontact__txtphone__num">hotelmiranda@miranda.com</span>
                        </div>
                    </div>
                    <div class="footer__contentcontact">
                        <div class="footer__contentcontact__imgphone">
                            <img src="./sources//imgs/contact/map.svg" alt=""/>
                        </div>
                        <div class="footer__contentcontact__txtphone">
                            <span class="footer__contentcontact__txtphone__tit">Location</span>
                            <span class="footer__contentcontact__txtphone__num">C/Extremadura 127</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__copy">
            <span class="footer__copy__tit">Copyright By@Example - 2020</span>
            <span class="footer__copy__sub">Terms of use    |    Privacy Environmental Policy</span>
        </div>
    </footer>

    @if(session('message'))
    <script>
        Toastify({
            text: "{{ session('message') }}",
            duration: 5000,
            close: true,
            gravity: "top",
            position: "center",
            backgroundColor: "{{ session('alert-class') === 'alert-success' ? '#28a745' : '#dc3545' }}",
        }).showToast();
    </script>
@endif
</body>
</html>
