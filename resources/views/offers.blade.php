@extends('layouts.app')

@section('title', 'Offers')

@section('content')
    <!-- Header for Offers Page -->
    <header class="header">
        <div class="header__text">
            <h2 class="header__text__small">THE ULTIMATE LUXURY</h2>
            <h1 class="header__text__big">Our Offers</h1>
        </div>
        <div class="header__btn">
            <a href="{{ route('home') }}" class="header__btn__home">Home</a>
            <h3>|</h3>
            <a href="{{ route('offers') }}" class="header__btn__about">Offers</a>
        </div>
    </header>

    <!-- Offers Section -->
    <div class="rooms">
        <div class="room__1">
            <div class="room__img">
                <img class="room__img__photo" src="{{ asset('images/page-5/Rooms/1.webp') }}" alt="Hotel Room" />
                <div class="room__price">
                    <h1 class="room__price__cancelled">$500</h1>
                    <span class="room__price__cancelled__small">/Night</span>
                    <h2 class="room__price__discount">
                        $500<span class="room__price__discount__small">/Night</span>
                    </h2>
                </div>
            </div>
            <div class="room__information">
                <h1 class="room__information__subtittle">Double Bed</h1>
                <h2 class="room__information__tittle">Luxury Double Bed</h2>
                <div class="room__information__body__flex">
                    <h3 class="room__information__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                    </h3>
                    <div class="features">
                        <div class="features__grid">
                            <div class="feature">
                                <img src="{{ asset('images/page-5/AC.png') }}" alt="Air conditioner" />
                                <p>Air conditioner</p>
                            </div>
                            <div class="feature">
                                <img src="{{ asset('images/page-5/wifi.png') }}" alt="High speed WiFi" />
                                <p>High speed WiFi</p>
                            </div>
                            <!-- Add more features here -->
                        </div>
                    </div>
                </div>
            </div>
            <a class="book__now__btn" href="#">BOOK NOW</a>
        </div>

        <!-- Add more room offers as necessary -->
    </div>

    <!-- Popular Rooms Slider -->
    <div class="swiper__information">
        <h1 class="swiper__information__subtittle">Popular List</h1>
        <h2 class="swiper__information__tittle">Popular Rooms</h2>
        <div class="slider">
            <div class="swiper first-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="swiper-slide-rules" src="{{ asset('images/Room-rules.png') }}" alt="Room Rules" />
                        <img class="swiper-slide-img" src="{{ asset('images/Slider-Rooms/Room-1.webp') }}" alt="Rooms" />
                        <div class="swiper-slide-text">
                            <h1 class="swiper-slide-text-title">Minimal Duplex Room</h1>
                            <h2 class="swiper-slide-text-body">Lorem ipsum dolor sit amet.</h2>
                            <h3 class="swiper-slide-text-price">$345/Night <span class="swiper-slide-text-book-now">Booking Now</span></h3>
                        </div>
                    </div>
                    <!-- Add more popular rooms in the slider -->
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
@endsection