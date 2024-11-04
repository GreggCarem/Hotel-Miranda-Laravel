@extends('layouts.indexapp')

@section('title', 'Home')

@section('content')
<header>
    <h3 class="subtitulo">THE ULTIMATE LUXURY EXPERIENCE</h3>
    <h1 class="titulo">The Perfect<br>Base For You</h1>
    <div class="btns">
        <div class="btns__taketour">TAKE A TOUR</div>
        <div class="btns__learnmore">LEARN MORE</div>
    </div>
</header>
<!--Form disponibilidad-->
<section>
    <form class="formavailability" action="{{ route('rooms.availability') }}" method="GET">
        <div class='formavailability__content'>
            <label for="datestart" class="formavailability__content__tag">Arrival Date</label>
            <div class="formavailability__content__calendar" id="inputOpenDataIn">
                <div class="formavailability__content__calendar__content">
                    <span class="formavailability__content__calendar__content__span"></span>
                    <input id="datestart" class="formavailability__content__calendar__content__input" type="date">
                </div>
                <input class="formavailability__content__calendar__inputtxt" id="inputDataIn" name="inputDataIn"
                    placeholder="24th march 2020" type="text">
            </div>
        </div>
        <div class='formavailability__content formavailability--margin'>
            <label for="dateend" class="formavailability__content__tag">Departure Date</label>
            <div class="formavailability__content__calendar" id="inputOpenDataOut">
                <div class="formavailability__content__calendar__content">
                    <span class="formavailability__content__calendar__content__span"></span>
                    <input id="dateend" class="formavailability__content__calendar__content__input" type="date">
                </div>
                <input class="formavailability__content__calendar__inputtxt" id="inputDataOut" name="inputDataOut"
                    placeholder="30th march 2020" type="text" readonly>
            </div>
        </div>
        <button class="formavailability__send" type="submit">CHECK AVAILABILITY</button>
    </form>
</section>

<!--About Us-->
<section class="contentaboutus">
    <div class="aboutus">
        <div class="aboutus__info">
            <h3 class="aboutus__info__sub">About Us</h3>
            <h1 class="aboutus__info__tit">Discover Our<br>Underground.</h1>
            <p class="aboutus__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="aboutus__btn">
            <div>BOOK NOW</div>
        </div>
    </div>

    <!--imgsAboutUs-->
    <div class="contentaboutimgs">
        <div class="aboutImgs">
            <div class="aboutImgs__content">
                <img class="aboutImgs__content__img" src="{{ asset('build/images/imgs/img1.jpg') }}" alt="" />
            </div>
            <div class="aboutImgs__contenttxt">
                <div class="aboutImgs__contenttxt__img"></div>
                <img class="aboutImgs__contenttxt__imgshadow" src="{{ asset('build/images/imgs/shadowTeam.svg') }}"
                    alt="">
                <div class="aboutImgs__contenttxt__tit">Strong Team</div>
                <div class="aboutImgs__contenttxt__sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor.</div>
            </div>
        </div>

        <div class="aboutImgs">
            <div class="aboutImgs__content">
                <img class="aboutImgs__content__img" src="{{ asset('build/images/imgs/img2.jpg') }}" alt="" />
            </div>
            <div class="aboutImgs__contenttxt aboutImgs__contenttxt--color">
                <div class="aboutImgs__contenttxt__img2"></div>
                <div class="aboutImgs__contenttxt__tit aboutImgs__contenttxt__tit--color">Luxury Room</div>
                <div class="aboutImgs__contenttxt__sub aboutImgs__contenttxt__sub--color">Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit, sed do eiusmod tempor.</div>
            </div>
        </div>
    </div>

</section>


<!--Slider Rooms-->

<section class="slider">
    <h3 class="slider__sub">Rooms</h3>
    <h2 class="slider__tit">Hand Picked Rooms</h2>

    <div class="slider__content">
        <div class="swiperRoomsPicked">
            <div class="swiper-wrapper">
                <div class="swiper-slide" role="group">
                    <div class="slider__content__topbar slider__content__topbar--redim">
                        <div class="slider__content__topbar__sub slider__content__topbar__sub--redim">
                            <div class="slider__content__topbar__sub__img"></div>
                            <div class="slider__content__topbar__sub__img2"></div>
                            <div class="slider__content__topbar__sub__img3"></div>
                            <div class="slider__content__topbar__sub__img4"></div>
                            <div class="slider__content__topbar__sub__img5"></div>
                            <div class="slider__content__topbar__sub__img6"></div>
                            <div class="slider__content__topbar__sub__img7"></div>
                        </div>
                    </div>
                    <div class="swiperImage">
                        <img class="swiperImage__img" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="Room 1" />
                    </div>
                    <div class="slider__content__info">
                        <div>
                            <h2 class="slider__content__info__tit">Minimal Duplex Room</h2>
                            <p class="slider__content__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                        <span class="slider__content__info__precio">$345<span
                                class="slider__content__info__precio__night">/Night</span></span>
                    </div>
                </div>

                <div class="swiper-slide" role="group">
                    <div class="slider__content__topbar slider__content__topbar--redim">
                        <div class="slider__content__topbar__sub slider__content__topbar__sub--redim">
                            <div class="slider__content__topbar__sub__img"></div>
                            <div class="slider__content__topbar__sub__img2"></div>
                            <div class="slider__content__topbar__sub__img3"></div>
                            <div class="slider__content__topbar__sub__img4"></div>
                            <div class="slider__content__topbar__sub__img5"></div>
                            <div class="slider__content__topbar__sub__img6"></div>
                            <div class="slider__content__topbar__sub__img7"></div>
                        </div>
                    </div>
                    <div class="swiperImage">
                        <img class="swiperImage__img" src="{{ asset('build/images/imgs/room2.jpg') }}" alt="Room 2" />
                    </div>
                    <div class="slider__content__info">
                        <div>
                            <h2 class="slider__content__info__tit">Minimal Duplex Room</h2>
                            <p class="slider__content__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                        <span class="slider__content__info__precio">$345<span
                                class="slider__content__info__precio__night">/Night</span></span>
                    </div>
                </div>

                <div class="swiper-slide" role="group">
                    <div class="slider__content__topbar slider__content__topbar--redim">
                        <div class="slider__content__topbar__sub slider__content__topbar__sub--redim">
                            <div class="slider__content__topbar__sub__img"></div>
                            <div class="slider__content__topbar__sub__img2"></div>
                            <div class="slider__content__topbar__sub__img3"></div>
                            <div class="slider__content__topbar__sub__img4"></div>
                            <div class="slider__content__topbar__sub__img5"></div>
                            <div class="slider__content__topbar__sub__img6"></div>
                            <div class="slider__content__topbar__sub__img7"></div>
                        </div>
                    </div>
                    <div class="swiperImage">
                        <img class="swiperImage__img" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="Room 1" />
                    </div>
                    <div class="slider__content__info">
                        <div>
                            <h2 class="slider__content__info__tit">Minimal Duplex Room</h2>
                            <p class="slider__content__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                        <span class="slider__content__info__precio">$345<span
                                class="slider__content__info__precio__night">/Night</span></span>
                    </div>
                </div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<!--Intro video-->
<section class="video">
    <div class="videocontent">
        <h3 class="video__sub">Intro video</h3>
        <h2 class="video__tit">Meet With Our Luxury Place.</h2>
        <p class="video__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat you have to understand this.</p>
        <div class="auxcontent">
            <div class="video__container" onclick="playVideo()">
                <video id="video" class="video__container__play" poster="./sources/video/poster.jpg" controls>
                    <source src="./sources/video/hotelMiranda.mp4" type="video/mp4">
                    <p>Video not supported</p>
                </video>
                <button class="video__container__button">▶</button>
            </div>
        </div>
        <div class="video__btn">BOOK NOW</div>
    </div>
</section>

<!--Facilities-->
<section class="facilities">
    <h3 class="facilities__sub">Facilities</h3>
    <h2 class="facilities__tit">Core Features</h2>
    <div class="mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="facilities__card">
                    <span class="facilities__card__num">01</span>
                    <div class="facilities__card__img"></div>
                    <div class="facilities__card__info">
                        <h2 class="facilities__card__info__tit">Have High Rating</h2>
                        <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__card">
                    <span class="facilities__card__num">02</span>
                    <div class="facilities__card__img2"></div>
                    <div class="facilities__card__info">
                        <h2 class="facilities__card__info__tit">Quiet Hours</h2>
                        <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__card">
                    <span class="facilities__card__num">03</span>
                    <div class="facilities__card__img3"></div>
                    <div class="facilities__card__info">
                        <h2 class="facilities__card__info__tit">Best Locations</h2>
                        <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__card">
                    <span class="facilities__card__num">04</span>
                    <div class="facilities__card__img4"></div>
                    <div class="facilities__card__info">
                        <h2 class="facilities__card__info__tit">Free Cancellation</h2>
                        <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__card">
                    <span class="facilities__card__num">05</span>
                    <div class="facilities__card__img5"></div>
                    <div class="facilities__card__info">
                        <h2 class="facilities__card__info__tit">Payment Options</h2>
                        <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__card">
                    <span class="facilities__card__num">06</span>
                    <div class="facilities__card__img6"></div>
                    <div class="facilities__card__info">
                        <h2 class="facilities__card__info__tit">Special Offers</h2>
                        <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination paginationStandarFacilities"></div>
    </div>


    <div class="auxfacilities">
        <div>
            <div class="facilities__card facilities--light">
                <span class="facilities__card__num facilities__card__num--light">01</span>
                <div class="facilities__card__img"></div>
                <div class="facilities__card__info">
                    <h2 class="facilities__card__info__tit">Have High Rating</h2>
                    <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>

            <div class="facilities__card facilities--light">
                <span class="facilities__card__num facilities__card__num--light">02</span>
                <div class="facilities__card__img2"></div>
                <div class="facilities__card__info">
                    <h2 class="facilities__card__info__tit">Quiet Hours</h2>
                    <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>

            <div class="facilities__card facilities--light">
                <span class="facilities__card__num facilities__card__num--light">03</span>
                <div class="facilities__card__img3"></div>
                <div class="facilities__card__info">
                    <h2 class="facilities__card__info__tit">Best Locations</h2>
                    <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </div>

        <div>
            <div class="facilities__card facilities--light">
                <span class="facilities__card__num facilities__card__num--light">04</span>
                <div class="facilities__card__img4"></div>
                <div class="facilities__card__info">
                    <h2 class="facilities__card__info__tit">Free Cancellation</h2>
                    <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>

            <div class="facilities__card facilities--light">
                <span class="facilities__card__num facilities__card__num--light">05</span>
                <div class="facilities__card__img5"></div>
                <div class="facilities__card__info">
                    <h2 class="facilities__card__info__tit">Payment Options</h2>
                    <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>

            <div class="facilities__card facilities--light">
                <span class="facilities__card__num facilities__card__num--light">06</span>
                <div class="facilities__card__img6"></div>
                <div class="facilities__card__info">
                    <h2 class="facilities__card__info__tit">Special Offers</h2>
                    <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Menu-->
<section class="menu">
    <div class="menu__content">
        <div class="menu__content__img"></div>
    </div>
    <div class="menu__contenttit">
        <h3 class="menu__contenttit__sub">MENU</h3>
        <h2 class="menu__contenttit__tit">Our Foods Menu</h2>
    </div>

    <div class="swiperMenu">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-width">
                <div class="menuinfo">
                    <div class="menuinfo__contentimg">
                        <img class="menuinfo__contentimg__img" src="{{ asset('build/images/imgs/menu1.jpg') }}"
                            alt="Menu 1" />
                    </div>
                    <div class="menuinfo__contenttxt">
                        <h2 class="menuinfo__contenttxt__tit">Eggs & Bacon</h2>
                        <p class="menuinfo__contenttxt__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                            sed do eiusmod tempor.</p>
                    </div>
                    <img class="menuinfo__contenttxt__img" src="{{ asset('build/images/imgs/menuflecha.svg') }}"
                        alt="more information">
                </div>
            </div>
            <div class="swiper-slide slide-width">
                <div class="menuinfo">
                    <div class="menuinfo__contentimg">
                        <img class="menuinfo__contentimg__img" src="{{ asset('build/images/imgs/menu2.jpg') }}"
                            alt="Menu 2" />
                    </div>
                    <div class="menuinfo__contenttxt">
                        <h2 class="menuinfo__contenttxt__tit">Tea or Coffee</h2>
                        <p class="menuinfo__contenttxt__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                            sed do eiusmod tempor.</p>
                    </div>
                    <img class="menuinfo__contenttxt__img" src="{{ asset('build/images/imgs/menuflecha.svg') }}"
                        alt="more information">
                </div>
            </div>
            <div class="swiper-slide slide-width">
                <div class="menuinfo">
                    <div class="menuinfo__contentimg">
                        <img class="menuinfo__contentimg__img" src="{{ asset('build/images/imgs/menu3.jpg') }}"
                            alt="Menu 3" />
                    </div>
                    <div class="menuinfo__contenttxt">
                        <h2 class="menuinfo__contenttxt__tit">Chia Oatmeal</h2>
                        <p class="menuinfo__contenttxt__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                            sed do eiusmod tempor.</p>
                    </div>
                    <img class="menuinfo__contenttxt__img" src="{{ asset('build/images/imgs/menuflecha.svg') }}"
                        alt="more information">
                </div>
            </div>
            <div class="swiper-slide slide-width">
                <div class="menuinfo">
                    <div class="menuinfo__contentimg">
                        <img class="menuinfo__contentimg__img" src="{{ asset('build/images/imgs/menu4.jpg') }}"
                            alt="Menu 4" />
                    </div>
                    <div class="menuinfo__contenttxt">
                        <h2 class="menuinfo__contenttxt__tit">Fruit Parfait</h2>
                        <p class="menuinfo__contenttxt__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                            sed do eiusmod tempor.</p>
                    </div>
                    <img class="menuinfo__contenttxt__img" src="{{ asset('build/images/imgs/menuflecha.svg') }}"
                        alt="more information">
                </div>
            </div>
            <div class="swiper-slide slide-width">
                <div class="menuinfo">
                    <div class="menuinfo__contentimg">
                        <img class="menuinfo__contentimg__img" src="{{ asset('build/images/imgs/menu5.jpg') }}"
                            alt="Menu 5" />
                    </div>
                    <div class="menuinfo__contenttxt">
                        <h2 class="menuinfo__contenttxt__tit">Marmalade Selection</h2>
                        <p class="menuinfo__contenttxt__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                            sed do eiusmod tempor.</p>
                    </div>
                    <img class="menuinfo__contenttxt__img" src="{{ asset('build/images/imgs/menuflecha.svg') }}"
                        alt="more information">
                </div>
            </div>
            <div class="swiper-slide slide-width">
                <div class="menuinfo">
                    <div class="menuinfo__contentimg">
                        <img class="menuinfo__contentimg__img" src="{{ asset('build/images/imgs/menu6.jpg') }}"
                            alt="Menu 6" />
                    </div>
                    <div class="menuinfo__contenttxt">
                        <h2 class="menuinfo__contenttxt__tit">Cheese Plate</h2>
                        <p class="menuinfo__contenttxt__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                            sed do eiusmod tempor.</p>
                    </div>
                    <img class="menuinfo__contenttxt__img" src="{{ asset('build/images/imgs/menuflecha.svg') }}"
                        alt="more information">
                </div>
            </div>
            <div class="swiper-slide slide-width">
                <div class="menuinfo">
                    <div class="menuinfo__contentimg">
                        <img class="menuinfo__contentimg__img" src="{{ asset('build/images/imgs/menu1.jpg') }}"
                            alt="Menu 1" />
                    </div>
                    <div class="menuinfo__contenttxt">
                        <h2 class="menuinfo__contenttxt__tit">Eggs & Bacon</h2>
                        <p class="menuinfo__contenttxt__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                            sed do eiusmod tempor.</p>
                    </div>
                    <img class="menuinfo__contenttxt__img" src="{{ asset('build/images/imgs/menuflecha.svg') }}"
                        alt="more information">
                </div>
            </div>
            <div class="swiper-slide slide-width">
                <div class="menuinfo">
                    <div class="menuinfo__contentimg">
                        <img class="menuinfo__contentimg__img" src="{{ asset('build/images/imgs/menu2.jpg') }}"
                            alt="Menu 2" />
                    </div>
                    <div class="menuinfo__contenttxt">
                        <h2 class="menuinfo__contenttxt__tit">Tea or Coffee</h2>
                        <p class="menuinfo__contenttxt__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                            sed do eiusmod tempor.</p>
                    </div>
                    <img class="menuinfo__contenttxt__img" src="{{ asset('build/images/imgs/menuflecha.svg') }}"
                        alt="more information">
                </div>
            </div>
            <div class="swiper-slide slide-width">
                <div class="menuinfo">
                    <div class="menuinfo__contentimg">
                        <img class="menuinfo__contentimg__img" src="{{ asset('build/images/imgs/menu3.jpg') }}"
                            alt="Menu 3" />
                    </div>
                    <div class="menuinfo__contenttxt">
                        <h2 class="menuinfo__contenttxt__tit">Chia Oatmeal</h2>
                        <p class="menuinfo__contenttxt__p">Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                            sed do eiusmod tempor.</p>
                    </div>
                    <img class="menuinfo__contenttxt__img" src="{{ asset('build/images/imgs/menuflecha.svg') }}"
                        alt="more information">
                </div>
            </div>
        </div>

        <div class="contentnavigation">
            <div class="swiper-button-prev posback"></div>
            <div class="swiper-button-next posnext"></div>
        </div>
    </div>
</section>


<!--Slider standar-->
<div class="swiperNormal">
    <div class="swiper-dim swiper-wrapper">
        <div class="swiper-slide">
            <img class="imgSlider" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="Room 1" />
        </div>
        <div class="swiper-slide">
            <img class="imgSlider" src="{{ asset('build/images/imgs/room2.jpg') }}" alt="Room 2" />
        </div>
    </div>
    <div class="swiper-pagination paginationStandar"></div>
</div>

<div class="swiperNormall">
    <div class="normalaux">
        <div class="swiperNormall__imgcontent">
            <img class="swiperNormall__imgcontent__img" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="Room 1" />
        </div>
        <div class="swiperNormall__imgcontent">
            <img class="swiperNormall__imgcontent__img" src="{{ asset('build/images/imgs/room2.jpg') }}" alt="Room 2" />
        </div>
        <div class="swiperNormall__imgcontent">
            <img class="swiperNormall__imgcontent__img" src="{{ asset('build/images/imgs/room3.jpg') }}" alt="Room 3" />
        </div>
    </div>
</div>

<!--Estadisticas-->
<section class="estadisticas">
    <div class="estadisticasbloq">
        <div class="estadisticas__img">
            <img src="{{ asset('build/images/imgs/estadisticas/est1.svg') }}" alt="Proyectos Completados" />
        </div>
        <span class="estadisticas__tit">84k<span>+</span></span>
        <span class="estadisticas__sub">Projects are Completed</span>
    </div>
    <div class="estadisticasbloq">
        <div class="estadisticas__img">
            <img src="{{ asset('build/images/imgs/estadisticas/est2.svg') }}" alt="Active Backers" />
        </div>
        <span class="estadisticas__tit">10M<span>+</span></span>
        <span class="estadisticas__sub">Active Backers Around World</span>
    </div>
    <div class="estadisticasbloq">
        <div class="estadisticas__img">
            <img src="{{ asset('build/images/imgs/estadisticas/est3.svg') }}" alt="Categories Served" />
        </div>
        <span class="estadisticas__tit">02K<span>+</span></span>
        <span class="estadisticas__sub">Categories Served</span>
    </div>
    <div class="estadisticasbloq">
        <div class="estadisticas__img">
            <img src="{{ asset('build/images/imgs/estadisticas/est4.svg') }}" alt="Idea Raised Funds" />
        </div>
        <span class="estadisticas__tit">100M<span>+</span></span>
        <span class="estadisticas__sub">Idea Raised Funds</span>
    </div>
</section>
@endsection