<nav class="nav" id="nav-bar">
    <div class="nav__menu">
        <a id="menu">
            <img class="nav__menu__img" id="menu__img" src="{{ asset('images/Menu.png') }}" alt="Menu">
        </a>
        <ul id="menu__content" class="nav__menu__content">
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('rooms.index') }}">Rooms</a></li>
            <li><a href="{{ route('offers') }}">Offers</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>

    <div class="nav__logo">
        <div class="nav__logo__img">
            <img class="nav__logo__img__detail__desktop" src="{{ asset('images/Desktop/H-big.png') }}" alt="Logo">
            <img class="nav__logo__img__detail" src="{{ asset('images/Logo-H.png') }}" alt="Logo">
        </div>
        <div class="nav__logo__name">
            <img class="nav__logo__name__desktop" src="{{ asset('images/Desktop/Hotel-Miranda.png') }}" alt="Hotel Miranda">
            <img class="nav__logo__name__mobile" src="{{ asset('images/Logo-Name.png') }}" alt="Hotel Miranda Mobile">
        </div>
    </div>
    
    <ul class="nav__menu__content__desktop">
        <li><a href="{{ route('about') }}">About Us</a></li>
        <li><a href="{{ route('rooms.index') }}">Rooms</a></li>
        <li><a href="{{ route('offers') }}">Offers</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
    
    <div class="nav__btns">
        <img class="nav__btns__user" src="{{ asset('images/User-Logo.png') }}" alt="User Logo">
        <img class="nav__btns__search" src="{{ asset('images/Serch-Logo.png') }}" alt="Search Logo">
    </div>
</nav>