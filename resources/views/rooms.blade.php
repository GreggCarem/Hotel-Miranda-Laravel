@extends('layouts.app')

@section('title', 'Rooms')

@section('content')
    <!--Header  Rooms -->
    <header class="header">
      <div class="header__text">
        <h2 class="header__text__small">THE ULTIMATE LUXURY</h2>
        <h1 class="header__text__big">Ultimate Room</h1>
      </div>
      <div class="header__btn">
        <a href="{{ route('home') }}" class="header__btn__home">Home</a>
        <h3>|</h3>
        <a href="{{ route('rooms.index') }}" class="header__btn__about">Rooms</a>
      </div>
    </header>

    <!-- Rooms Slider -->
    <div class="slider">
      <div class="swiper first-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="separate">
              <a href="#">
                <img class="swiper-slide-img" src="{{ asset('images/Slider-Rooms/Room-1.webp') }}" alt="Rooms" />
              </a>
              <img class="swiper-slide-rules" src="{{ asset('images/Room-rules.png') }}" alt="Room Rules" />
              <div class="swiper-slide-text">
                <h1 class="swiper-slide-text-title">Minimal Duplex Room</h1>
                <h2 class="swiper-slide-text-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
                <h3 class="swiper-slide-text-price">
                  $345/Night<span class="swiper-slide-text-book-now">Booking Now</span>
                </h3>
              </div>
            </div>
          </div>
          <!-- Add more slides as needed -->
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev">
          <img src="{{ asset('images/page-3/arroes-doouble.png') }}" alt="Previous" />
        </div>
        <div class="swiper-button-next">
          <img src="{{ asset('images/page-3/arrow-double-right.png') }}" alt="Next" />
        </div>
      </div>
    </div>
@endsection