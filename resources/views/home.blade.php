@extends('layouts.app')

@section('title', 'Home')

@section('content')
<header class="header">
    <div class="header__text">
        <h2 class="header__text__small">THE ULTIMATE LUXURY EXPERIENCE</h2>
        <h1 class="header__text__big">The Perfect Base For You</h1>
    </div>
    <div class="header__btn">
        <a href="#" class="header__btn__tour">Take a Tour</a>
        <a href="#" class="header__btn__learn">Learn more</a>
    </div>
</header>

<!-- Calendar Section -->
<div class="calendar">
    <div class="calendar__inner">
        <div class="calendar__inner__arrival">
            <h3 class="calendar__arrival__txt">Arrival Date</h3>
            <input class="calendar__input" type="date" name="arrival" id="arrival">
            <div class="calendar__line"></div>
        </div>
        <div class="calendar__inner__departure">
            <h3 class="calendar__departure__txt">Departure Date</h3>
            <input class="calendar__input" type="date" name="departure" id="departure">
            <div class="calendar__line"></div>
        </div>
        <a href="#" class="calendar__btn">CHECK AVAILABILITY</a>
    </div>
</div>

<!-- About Us Section -->
<div class="Discover">
    <div class="about__us">
        <h1 class="about__us__subtitle">ABOUT US</h1>
        <h2 class="about__us__title">Discover Our Underground.</h2>
        <h3 class="about__us__text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </h3>
        <a href="#" class="book__now">BOOK NOW</a>
    </div>
</div>

<!-- Slider Section -->
<div class="slider">
    <div class="swiper first-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="swiper-slide-img" src="{{ asset('images/Slider-Rooms/Room-1.webp') }}" alt="Room 1">
                <div class="swiper-slide-text">
                    <h1 class="swiper-slide-text-title">Minimal Duplex Room</h1>
                    <h2 class="swiper-slide-text-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                    <h3 class="swiper-slide-text-price">$345/<span class="swiper-slide-text-price-small">Night</span></h3>
                </div>
            </div>
            <!-- Add more slides here -->
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>
@endsection