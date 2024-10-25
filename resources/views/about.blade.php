@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!--Header  THE ULTIMATE LUXURY -->
    <header class="header">
      <div class="header__text">
        <h2 class="header__text__small">THE ULTIMATE LUXURY</h2>
        <h1 class="header__text__big">About Us</h1>
      </div>
      <div class="header__btn">
        <a href="{{ route('home') }}" class="header__btn__home">Home</a>
        <h3>|</h3>
        <a href="{{ route('about') }}" class="header__btn__about">About</a>
      </div>
    </header>

    <!-- Video Section -->
    <div class="video">
      <iframe class="video__intro"
        src="https://www.youtube.com/embed/Bu3Doe45lcU?start=25&end=75&autoplay=1&mute=1"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
      <h1 class="video__text">Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h1>
    </div>

    <!-- Boxes Section -->
    <div class="box">
      <div class="box__first__row">
        <div class="box__1">
          <img class="box__1__coffe" src="{{ asset('images/coffe.png') }}" alt="Coffe" />
          <h1 class="box__1__txt">BREAKFAST</h1>
        </div>
        <div class="box__2">
          <img class="box__2__plane" src="{{ asset('images/plane.png') }}" alt="Plane" />
          <h1 class="box__2__txt">AIRPORT PICKUP</h1>
        </div>
      </div>
      <div class="box__second__row">
        <div class="box__3">
          <img class="box__3__map" src="{{ asset('images/map.png') }}" alt="City Map" />
          <h1 class="box__3__txt">CITY GUIDE</h1>
        </div>
        <div class="box__5">
          <img class="box__5__sofa" src="{{ asset('images/sofa.png') }}" alt="Sofa" />
          <h1 class="box__4__txt">BBQ Party</h1>
        </div>
        <div class="box__4">
          <img class="box__4__sofa" src="{{ asset('images/sofa.png') }}" alt="Sofa" />
          <h1 class="box__4__txt">LUXURY ROOM</h1>
        </div>
      </div>
    </div>

    <!-- Restaurant Section -->
    <div class="restaurant">
      <img class="restaurant__img" src="{{ asset('images/Restaurant.webp') }}" alt="Restaurant" />
      <div class="restaurant__flex">
        <h1 class="restaurant__subtitte">Restaurant</h1>
        <h2 class="restaurant__tittle">Get Restaurant Facilities & Many Other More</h2>
        <h3 class="restaurant__body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
        <a class="restaurant__btn" href="#">TAKE A TOUR</a>
      </div>
    </div>

    <!-- Facilities Slider -->
    <div class="core__features">
      <h1 class="core__features__subtittle">FACILITIES</h1>
      <h2 class="core__features__tittle">Core Features</h2>
      <div class="core__features__slider">
        <div class="swiper Swiper2">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="swiper-slide-logos">
                <h1 class="swiper-slide-number">01</h1>
                <img class="swiper-slide-logo" src="{{ asset('images/card-1.png') }}" alt="High Rating" />
              </div>
              <div class="swiper-slide-main-txt">
                <h3 class="swiper-slide-title">Have High Rating</h3>
                <h4 class="swiper-slide-body">Lorem ipsum dolor sit amet.</h4>
              </div>
            </div>
            <!-- Add more slides as needed -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>

    <!-- Fun Facts Section -->
    <div class="fun__facts">
      <h1 class="fun__facts__subtittle">Counter</h1>
      <h2 class="fun__facts__tittle">Some Fun Facts</h2>
      <div class="fun__facts__element">
        <div class="fun__facts__element__1">
          <img class="fun__facts__element__1__img" src="{{ asset('images/men.png') }}" alt="Men Smiling" />
          <div class="fun__facts__element__1__text">
            <h3 class="fun__facts__element__1__text__number">8000</h3>
            <h4 class="fun__facts__element__1__text__description">Happy Users</h4>
          </div>
        </div>
        <!-- More facts -->
      </div>
    </div>
@endsection