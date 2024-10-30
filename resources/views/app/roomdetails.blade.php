@extends('layouts.indexapp')

@section('title', 'Contact')

@section('content')
    <!--header about-->
    <section class="aboutheader aboutHeaderRoom">
        <h3 class="aboutheader__sub">THE ULTIMATE LUXURY</h3>
        <h2 class="aboutheader__tit">Ultimate Room</h2>
        <div class="aboutheader__btn aboutheader__btn--large">
            <span>
                <a href="{{ route('home') }}">Home&nbsp;|&nbsp;</a>Room Details
            </span>
        </div>
    </section>
    
    <!--Check Availability-->
    <section class="doublebed">
        <div class="doublebed__content">
            <h3 class="doublebed__content__sub">Double Bed</h3>
            <h2 class="doublebed__content__tit">Luxury Double Bed</h2>
            <span class="doublebed__content__precio">$345<span>/Night</span></span>
            <img class="doublebed__content__img" src="../../sources/imgs/doublebed.jpg" alt="image of the room with double bed">
            <h4 class="doublebed__content__avaible">Check Availability</h4>
            <h5 class="doublebed__content__labelin">Check In</h5>
            <div class="doublebed__content__contentin">
                <div class="doublebed__content__contentin__text">
                    <input type="text" placeholder="Fri, 14th June 2020">
                </div>
                <div class="doublebed__content__contentin__calendar">
                    <input type="date">
                    <img src="../../sources/imgs/calendaravaible.svg" alt="">
                </div>
            </div>
            <div></div>
            <h5 class="doublebed__content__labelout">Check Out</h5>
            <div class="doublebed__content__contentin">
                <div class="doublebed__content__contentin__text">
                    <input type="text" placeholder="Sun, 16th June 2020">
                </div>
                <div class="doublebed__content__contentin__calendar">
                    <input type="date">
                    <img src="../../sources/imgs/calendaravaible.svg" alt="">
                </div>
            </div>
            <div></div>
            <div class="doublebed__content__btn">Check Availability</div>
        </div>
        <p class="doublebed__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
    </section>

    <!--Amenities-->
    <section class="amenities">
        <h2 class="amenities__tit">Amenities</h2>
        <ul class="amenities__content">
            <div class="amenities__content__list1">
                <ul>
                    <li><img src="../../sources/imgs/listaroomdetails/lista1.svg" alt=""/>Air conditioner </li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista2.svg" alt=""/>Breakfast</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista3.svg" alt=""/>Cleaning</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista4.svg" alt=""/>Grocery</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista5.svg" alt=""/>Shop near</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista6.svg" alt=""/>24/7 Online Support</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista7.svg" alt=""/>Smart Security</li>
                </ul>
            </div>
            <div class="amenities__content__list2"></div>
                <ul>
                    <li><img src="../../sources/imgs/listaroomdetails/lista8.svg" alt=""/>High speed WiFi</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista9.svg" alt=""/>Kitchen</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista10.svg" alt=""/>Shower</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista11.svg" alt=""/>Single bed</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista12.svg" alt=""/>Towels</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista13.svg" alt=""/>Strong Locker</li>
                    <li><img src="../../sources/imgs/listaroomdetails/lista14.svg" alt=""/>Expert Team</li>
                </ul>
            </div>
        </ul>
    </section>

    <section class="founder">
        <div class="founder__img">
            <div class="founder__img__circle">
                <img class="founder__img__circle__check" src="../../sources/imgs/check.svg" alt="">
            </div>
        </div>
        <h3 class="founder__nombre">Rosalina D. William</h3>
        <h2 class="founder__puesto">Founder, Qux Co.</h2>
        <p class="founder__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </section>

    <section class="cancelation">
        <h2 class="cancelation__tit">Cancellation</h2>
        <p class="cancelation__p">Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
    </section>

<section class="relatedrooms">
    <h2 class="relatedrooms__tit">Related Rooms</h2>
    <!--Sliders-->
    <div class="slider">
        <div class="swiperRoomsPicked sliderRooms slider__content">
            <div class="slider__content__topbar slider__content__topbar--pos">
                <div class="slider__content__topbar__img"></div>
                <div class="slider__content__topbar__img2"></div>
                <div class="slider__content__topbar__img3"></div>
                <div class="slider__content__topbar__img4"></div>
                <div class="slider__content__topbar__img5"></div>
                <div class="slider__content__topbar__img6"></div>
                <div class="slider__content__topbar__img7"></div>
            </div>
            <div class="swiper-wrapper">
                <div class="room swiper-slide">
                    <img class="room__imgRoom" src="../../sources/imgs/room1.jpg" alt="">
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
                <div class="room swiper-slide">
                    <img class="room__imgRoom" src="../../sources/imgs/room1.jpg" alt="">
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
                <div class="room swiper-slide">
                    <img class="room__imgRoom" src="../../sources/imgs/room1.jpg" alt="">
                    <h2 class="room__tit">Minimal Duplex Room</h2>
                    <p class="room__p">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                    <div class="room__content">
                        <span class="room__content__precio">$345/Night</span>
                        <span class="room__content__state">Booking Now</span>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-next--pos"></div>
            <div class="swiper-button-next swiper-button-next--pos"></div>
        </div>
    </div>
</section>
@endsection