@extends('layouts.app') 

@section('content')
    <!--New Datails -->
    <header class="header">
      <div class="header__text">
        <h2 class="header__text__small">THE ULTIMATE LUXURY</h2>
        <h1 class="header__text__big">New Details</h1>
      </div>
      <div class="header__btn">
        <a href="{{ url('/') }}" class="header__btn__home">Home</a>
        <h3>|</h3>
        <a href="{{ route('contact') }}" class="header__btn__about">Blog</a>
      </div>
    </header>
    
    <!-- Information about the Hotel -->
    <div class="information">
      <div class="information__1">
        <img class="information__1__img" src="{{ asset('images/Location.png') }}" alt="Mail" />
        <h1 class="information__1__tittle">Hotel Address</h1>
        <h2 class="information__1__description">
          19/A, Cirikon City hall Tower New York, NYC
        </h2>
        <h3 class="information__1__number">01</h3>
      </div>
      <div class="information__2">
        <img class="information__2__img" src="{{ asset('images/Phone.png') }}" alt="Phone" />
        <h1 class="information__2__tittle">Phone Number</h1>
        <h2 class="information__2__description">
          + 97656 8675 7864 7 + 876 766 8675 765 6
        </h2>
        <h3 class="information__2__number">02</h3>
      </div>
      <div class="information__3">
        <img class="information__3__img" src="{{ asset('images/email.png') }}" alt="Mail" />
        <h1 class="information__3__tittle">Email</h1>
        <h2 class="information__3__description">
          info@webmail.com jobs.webmail@mail.com
        </h2>
        <h3 class="information__3__number">03</h3>
      </div>
    </div>

    <!-- Image -->
    <div class="image">
      <img class="image__room" src="{{ asset('images/Luxury-room.jpg') }}" alt="Luxury-room" />
    </div>

    <!-- Contact Form -->
    <form class="contact__form" method="POST" action="{{ route('contact.submit') }}">
      @csrf <!-- This is important for Laravel form submissions -->

      <div class="contact__form__name">
        <img src="{{ asset('images/person.png') }}" alt="Person" />
        <input class="name" type="text" name="name" placeholder="Your full name" required />
      </div>
      <div class="contact__form__phone">
        <img src="{{ asset('images/phone.png') }}" alt="Phone" />
        <input class="number" type="tel" name="phone" placeholder="Add phone number" required />
      </div>
      <div class="contact__form__email">
        <img src="{{ asset('images/email.png') }}" alt="Email" />
        <input class="email" type="email" name="email" placeholder="Enter email address" required />
      </div>
      <div class="contact__form__subject">
        <img src="{{ asset('images/book.png') }}" alt="Subject" />
        <input class="subject" type="text" name="subject" placeholder="Enter subject" required />
      </div>
      <div class="contact__form__message">
        <img class="contact__form__message__img" src="{{ asset('images/edit.png') }}" alt="Message" />
        <textarea class="message" name="message" placeholder="Enter message" required></textarea>
      </div>

      <button class="form__btn" type="submit">SEND</button>
    </form>
@endsection