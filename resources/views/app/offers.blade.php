@extends('layouts.indexapp')

@section('title', 'Room Offers')

@section('content')
     <!--header about-->
     <section class="aboutheader">
        <h3 class="aboutheader__sub">THE ULTIMATE LUXURY</h3>
        <h2 class="aboutheader__tit">Our Offers</h2>
        <div class="aboutheader__btn">
            <span>
                <a href="{{ route('home') }}">Home&nbsp;|&nbsp;</a>Offers
            </span>
        </div>
    </section>

    <!--offers-->
    <section class="offers">
        @foreach($rooms as $room)
            <div class="contentaux">
                <div class="offers__img" style="background-image: url('{{ $room->photos[0]->uri }}');">
                    <span class="offers__img__precio1 offers__img__precio1--none">${{ $room->price }}<span>/Night</span></span>
                    <span class="offers__img__precio2 offers__img__precio2--none">${{ number_format($room->price - (($room->discount * $room->price)/100),2) }}<span>/Night</span></span>
                </div>
                <div class="contentaux2">
                    <h3 class="offers__sub">{{ $room->type_room }}</h3>
                    <h2 class="offers__tit">{{ '#'.$room->room_number.' '.$room->type_room }}</h2>
                    <div class="contentPriceAux">
                        <span class="offers__img__absolute1">${{ $room->price }}<span>/Night</span></span>
                        <span class="offers__img__absolute2">${{ number_format($room->price - (($room->discount * $room->price)/100),2) }}<span>/Night</span></span>
                    </div>
                    <div class="contentaux2--flex">
                        <div>
                            <p class="offers__p">{{ $room->description }}</p>
                            <div class="listnone">
                                <div class="offers__lista1">
                                    <ul>
                                        @foreach($room->amenities as $amenity)
                                            <li><img src="{{ asset($amenity->icon) }}" alt="">{{ $amenity->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="offers__btn">BOOK NOW</div>
                        </div>

                        <div class="listblock">
                            <div class="offers__lista1 listblock__listan1">
                                <ul>
                                    @foreach($room->amenities as $amenity)
                                        <li><img src="{{ asset($amenity->icon) }}" alt="">{{ $amenity->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <!--Popular-->
    <section class="relatedrooms popular popular--dark">
        <h3 class="popular__sub">Popular List</h3>
        <h2 class="relatedrooms__tit popular__tit">Popular Rooms</h2>
        <!--Sliders-->
        <div class="slider slider--offer">
            <div class="swiperRoomsPicked sliderRooms slider__content room--white">
                <div class="swiper-wrapper">
                    <div class="room swiper-slide room--offers">
                        <div class="contentoffersAux">
                            <img class="room__imgRoom" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
                            <div class="slider__content__topbar slider__content__topbar--posOffers">
                                <div class="slider__content__topbar__img"></div>
                                <div class="slider__content__topbar__img2"></div>
                                <div class="slider__content__topbar__img3"></div>
                                <div class="slider__content__topbar__img4"></div>
                                <div class="slider__content__topbar__img5"></div>
                                <div class="slider__content__topbar__img6"></div>
                                <div class="slider__content__topbar__img7"></div>
                            </div>
                        </div>
                        <h2 class="room__tit">Minimal Duplex Room</h2>
                        <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="room__content">
                            <span class="room__content__precio">$345/Night</span>
                            <span class="room__content__state">Booking Now</span>
                        </div>
                    </div>
                    <div class="room swiper-slide room--offers">
                        <div class="contentoffersAux">
                            <img class="room__imgRoom" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
                            <div class="slider__content__topbar slider__content__topbar--posOffers">
                                <div class="slider__content__topbar__img"></div>
                                <div class="slider__content__topbar__img2"></div>
                                <div class="slider__content__topbar__img3"></div>
                                <div class="slider__content__topbar__img4"></div>
                                <div class="slider__content__topbar__img5"></div>
                                <div class="slider__content__topbar__img6"></div>
                                <div class="slider__content__topbar__img7"></div>
                            </div>
                        </div>
                        <h2 class="room__tit">Minimal Duplex Room</h2>
                        <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="room__content">
                            <span class="room__content__precio">$345/Night</span>
                            <span class="room__content__state">Booking Now</span>
                        </div>
                    </div>
                    <div class="room swiper-slide room--offers">
                        <div class="contentoffersAux">
                            <img class="room__imgRoom" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="">
                            <div class="slider__content__topbar slider__content__topbar--posOffers">
                                <div class="slider__content__topbar__img"></div>
                                <div class="slider__content__topbar__img2"></div>
                                <div class="slider__content__topbar__img3"></div>
                                <div class="slider__content__topbar__img4"></div>
                                <div class="slider__content__topbar__img5"></div>
                                <div class="slider__content__topbar__img6"></div>
                                <div class="slider__content__topbar__img7"></div>
                            </div>
                        </div>
                        <h2 class="room__tit">Minimal Duplex Room</h2>
                        <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                        <div class="room__content">
                            <span class="room__content__precio">$345/Night</span>
                            <span class="room__content__state">Booking Now</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-next--posOfeert"></div>
                <div class="swiper-button-next swiper-button-next--posOfeert"></div>
            </div>
        </div>
    </section>
@endsection