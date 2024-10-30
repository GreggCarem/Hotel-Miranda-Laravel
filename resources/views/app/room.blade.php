@extends('layouts.indexapp')

@section('title', 'Room')

@section('content')
    <section class="aboutheader">
        <h3 class="aboutheader__sub">THE ULTIMATE LUXURY</h3>
        <h2 class="aboutheader__tit aboutheader__tit--dim">Ultimate Room</h2>
        <div class="aboutheader__btn">
            <span>
                <a href="{{ route('home') }}">Home&nbsp;|&nbsp;</a>Rooms
            </span>
        </div>
    </section>

    @if($rooms->isNotEmpty())
        <div class="swiper sliderRooms">
            <div class="swiper-wrapper">
                @foreach($rooms as $room)
                    <div class="swiper-slide room swiperrooms--dim">
                        <img class="room__imgRoom room__imgRoom--dim" src="{{ $room->photos->first()->uri ?? 'default-image.jpg' }}" alt="">
                        <div class="contentAuxRoom">
                            <h2 class="room__tit">{{ $room->type_room .  $room->room_number }}</h2>
                            <p class="room__p">{{ $room->description }}</p>
                            <div class="room__content">
                                <span class="room__content__precio">${{ $room->price }}/Night</span>
                                <span class="room__content__state">Booking Now</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="sliderRooms__contentPagination">
                <div class="swiper-button-prev swiper-but-room"></div>
                <div class="swiper-pagination swiper-pagination-bull"></div>
                <div class="swiper-button-next swiper-but-room"></div>
            </div>
        </div>
    @else
        <p>No rooms available.</p>
    @endif
@endsection