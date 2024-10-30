@extends('layouts.indexapp')

@section('title', 'About')

@section('content')
    <!--header about-->
    <section class="aboutheader">
        <h3 class="aboutheader__sub">THE ULTIMATE LUXURY</h3>
        <h2 class="aboutheader__tit">About Us</h2>
        <div class="aboutheader__btn">
            <span>
                <a href="{{ route('home') }}">Home&nbsp;|&nbsp;</a>About
            </span>
        </div>
    </section>

    <section class="videoabout">
        <div class="videoabout__container" onclick="playVideo()">
            <video id="video" class="videoabout__container__play" controls>
                <source src="../../sources/video/hotelMiranda.mp4" type="video/mp4">
                <p>Video not suported</p>
            </video>
            <button class="videoabout__container__button video__container__button">▶</button>
        </div>
        <p>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</p>
        <!--Cambiar SVG para el HOVER-->
        <div class="fourpoints">
            <div class="fourpoints__content">
                <svg class="fourpoints__content__img paths" xmlns="http://www.w3.org/2000/svg" version="1.1" width="60px" height="51px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g><path style="opacity:0.746" fill="#bead8e" d="M 14.5,-0.5 C 15.8333,-0.5 17.1667,-0.5 18.5,-0.5C 19.9288,2.30843 20.5955,5.30843 20.5,8.5C 21.2674,7.82803 21.9341,6.9947 22.5,6C 21.3313,3.99348 20.6646,1.82682 20.5,-0.5C 21.8333,-0.5 23.1667,-0.5 24.5,-0.5C 24.7239,1.78672 25.3906,3.95339 26.5,6C 25.4958,8.3504 24.4958,10.6837 23.5,13C 26.8546,14.1499 27.8546,13.3165 26.5,10.5C 26.722,8.94458 27.3887,7.61125 28.5,6.5C 27.0541,4.3821 26.3874,2.04877 26.5,-0.5C 27.5,-0.5 28.5,-0.5 29.5,-0.5C 33.4443,3.96824 33.4443,8.46824 29.5,13C 32.6592,13.0114 35.4926,13.8447 38,15.5C 38.3333,18.8333 38.6667,22.1667 39,25.5C 41.8407,24.5796 44.674,23.5796 47.5,22.5C 48.9643,19.997 50.131,17.3303 51,14.5C 51.5613,13.9781 52.228,13.6448 53,13.5C 56.0936,15.0891 58.2602,17.4224 59.5,20.5C 59.5,24.5 59.5,28.5 59.5,32.5C 58.1221,35.4202 56.4554,38.2535 54.5,41C 56.2475,41.3519 57.9142,41.8519 59.5,42.5C 59.5,44.8333 59.5,47.1667 59.5,49.5C 58.8333,49.5 58.5,49.8333 58.5,50.5C 40.5,50.5 22.5,50.5 4.5,50.5C 0.747042,43.8992 2.74704,40.8992 10.5,41.5C 10.5,40.5 10.5,39.5 10.5,38.5C 5.9494,39.3417 2.28273,38.0083 -0.5,34.5C -0.5,29.8333 -0.5,25.1667 -0.5,20.5C 0.961599,19.5423 2.29493,18.3756 3.5,17C 7.5,15.6667 11.5,14.3333 15.5,13C 14.1337,10.6182 14.467,8.45153 16.5,6.5C 15.0541,4.3821 14.3874,2.04877 14.5,-0.5 Z M 20.5,8.5 C 20.2865,10.1439 20.6198,11.6439 21.5,13C 20.1667,13.6667 18.8333,13.6667 17.5,13C 18.0527,11.1222 19.0527,9.62219 20.5,8.5 Z M 12.5,17.5 C 19.8333,17.5 27.1667,17.5 34.5,17.5C 34.6646,20.5184 34.498,23.5184 34,26.5C 32.1239,23.5724 29.6239,22.9057 26.5,24.5C 25.0516,30.2642 26.385,35.2642 30.5,39.5C 25.5646,42.1122 20.5646,42.1122 15.5,39.5C 14.4164,38.3349 13.5831,37.0016 13,35.5C 12.5005,29.5092 12.3338,23.5092 12.5,17.5 Z M 52.5,18.5 C 53.2891,18.7828 53.9558,19.2828 54.5,20C 53.184,20.5281 52.5173,20.0281 52.5,18.5 Z M 6.5,24.5 C 7.69348,24.9704 8.36015,25.9704 8.5,27.5C 8.16667,28.5 7.83333,29.5 7.5,30.5C 6.53443,28.604 6.2011,26.604 6.5,24.5 Z M 50.5,24.5 C 52.1667,24.5 53.8333,24.5 55.5,24.5C 55.6621,26.5273 55.4955,28.5273 55,30.5C 52.8733,28.8863 51.3733,26.8863 50.5,24.5 Z M 44.5,27.5 C 56.9443,35.178 55.611,39.8446 40.5,41.5C 39.584,37.2077 39.584,32.8744 40.5,28.5C 42.099,28.7678 43.4324,28.4345 44.5,27.5 Z M 34.5,30.5 C 35.7479,31.3339 36.4146,32.6672 36.5,34.5C 36.3333,35.8333 36.1667,37.1667 36,38.5C 31.0616,36.1674 30.5616,33.5007 34.5,30.5 Z M 6.5,46.5 C 22.6715,45.1732 39.0049,45.1732 55.5,46.5C 39.1028,47.8168 22.7695,47.8168 6.5,46.5 Z"/></g>
                </svg>
                <span class="fourpoints__content__tit">Breakfast</span>
            </div>
            <div class="fourpoints__content">
                <svg class="fourpoints__content__img paths" xmlns="http://www.w3.org/2000/svg" version="1.1" width="57px" height="53px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g><path style="opacity:0.472" fill="#beac8d" d="M 47.5,-0.5 C 49.5,-0.5 51.5,-0.5 53.5,-0.5C 54.6588,0.740292 55.6588,2.07363 56.5,3.5C 56.5,5.83333 56.5,8.16667 56.5,10.5C 51.887,14.9392 47.0536,19.2725 42,23.5C 40.8025,31.4385 40.1358,39.4385 40,47.5C 39.6339,49.4517 38.8005,51.1184 37.5,52.5C 35.5,52.5 33.5,52.5 31.5,52.5C 29.551,47.0313 28.3844,41.3646 28,35.5C 23.0076,39.4979 18.0076,43.4979 13,47.5C 9.52718,45.8637 7.36052,43.197 6.5,39.5C 4.19438,39.0074 1.86105,38.6741 -0.5,38.5C -0.5,35.1667 -0.5,31.8333 -0.5,28.5C 5.68753,28.2026 11.6875,27.036 17.5,25C 14.0072,23.2094 10.3405,21.876 6.5,21C 2.67297,18.0947 2.67297,15.0947 6.5,12C 14.2745,11.7396 21.9412,12.5729 29.5,14.5C 35.5441,9.44723 41.5441,4.44723 47.5,-0.5 Z M 13.5,40.5 C 14.7279,38.9902 14.7279,37.4902 13.5,36C 10.1815,35.1208 6.84817,34.2875 3.5,33.5C 7.45922,32.6735 11.4592,32.1735 15.5,32C 25.4752,23.6964 35.4752,15.363 45.5,7C 47.01,6.15019 48.51,5.31686 50,4.5C 52.9948,5.51761 53.3281,7.18428 51,9.5C 48.323,12.5092 45.323,15.1758 42,17.5C 40.3333,14.8333 38.6667,14.8333 37,17.5C 36.7956,27.5369 36.129,37.5369 35,47.5C 33.5035,40.1934 32.1702,32.86 31,25.5C 27.1667,24 26,25.1667 27.5,29C 23.2311,33.4468 18.5645,37.2801 13.5,40.5 Z M 10.5,17.5 C 10.7352,16.9033 11.2352,16.5699 12,16.5C 15.9858,16.9724 19.8191,17.8057 23.5,19C 22.6667,19.8333 21.8333,20.6667 21,21.5C 17.8159,19.3293 14.3159,17.996 10.5,17.5 Z"/></g>
                </svg>
                <span class="fourpoints__content__tit">Airport Pickup</span>
            </div>
            <div class="fourpoints__content">
                <svg class="fourpoints__content__img paths" xmlns="http://www.w3.org/2000/svg" version="1.1" width="54px" height="53px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g><path style="opacity:0.74" fill="#bead8d" d="M 20.5,-0.5 C 24.1667,-0.5 27.8333,-0.5 31.5,-0.5C 45.0121,7.52176 47.0121,18.0218 37.5,31C 40.2263,31.1816 42.8929,31.6816 45.5,32.5C 48.2169,38.59 50.8835,44.59 53.5,50.5C 53.5,50.8333 53.5,51.1667 53.5,51.5C 52.8333,51.5 52.5,51.8333 52.5,52.5C 34.8333,52.5 17.1667,52.5 -0.5,52.5C -0.5,51.1667 -0.5,49.8333 -0.5,48.5C 0.222348,47.4489 1.22235,46.7822 2.5,46.5C 2.38929,45.8826 2.05596,45.3826 1.5,45C 3.46219,40.9072 5.29552,36.7406 7,32.5C 9.405,31.7256 11.905,31.2256 14.5,31C 8.95527,23.2925 8.12194,15.1259 12,6.5C 14.4412,3.54644 17.2745,1.21311 20.5,-0.5 Z M 22.5,1.5 C 37.7824,2.04883 43.2824,9.7155 39,24.5C 36.1223,30.547 31.9556,35.547 26.5,39.5C 18.104,33.8835 13.104,26.0501 11.5,16C 12.178,8.77667 15.8447,3.94334 22.5,1.5 Z M 8.5,33.5 C 14.527,33.1676 14.8604,34.5009 9.5,37.5C 8.83333,37.3333 8.16667,37.1667 7.5,37C 8.33663,35.9887 8.66997,34.8221 8.5,33.5 Z M 15.5,33.5 C 16.6266,34.1217 17.6266,34.955 18.5,36C 15.5641,40.2637 12.8974,44.7637 10.5,49.5C 10.15,47.3498 10.8166,45.1831 12.5,43C 10.7148,41.8372 8.7148,41.1705 6.5,41C 12.303,41.6826 15.303,39.1826 15.5,33.5 Z M 35.5,33.5 C 38.2469,33.1866 40.9135,33.52 43.5,34.5C 43.8333,35.1667 44.1667,35.8333 44.5,36.5C 39.32,39.2528 39.9867,40.7528 46.5,41C 41.1771,41.4994 35.8437,41.666 30.5,41.5C 30.3505,42.552 30.5172,43.552 31,44.5C 33.1238,45.6217 34.9571,47.1217 36.5,49C 35.5,49.6667 34.5,49.6667 33.5,49C 31.3529,46.7632 29.0196,44.7632 26.5,43C 27.1667,42.3333 27.8333,41.6667 28.5,41C 32.0894,40.7931 35.5894,40.2931 39,39.5C 39.1667,39.1667 39.3333,38.8333 39.5,38.5C 37.5767,37.6922 35.5767,37.1922 33.5,37C 34.305,35.8873 34.9717,34.7206 35.5,33.5 Z M 17.5,39.5 C 21.625,42.4526 25.625,45.6193 29.5,49C 24.467,49.8289 19.467,49.6623 14.5,48.5C 15.801,45.5729 16.801,42.5729 17.5,39.5 Z M 2.5,46.5 C 4.24319,44.5636 6.24319,44.2302 8.5,45.5C 7.83318,48.8333 5.83318,50.1667 2.5,49.5C 2.5,48.5 2.5,47.5 2.5,46.5 Z M 35.5,45.5 C 39.6344,44.5151 43.9677,44.1818 48.5,44.5C 48.4208,45.9305 48.7542,47.2638 49.5,48.5C 46.5541,49.6548 43.5541,49.8214 40.5,49C 39.2107,47.1978 37.5441,46.0312 35.5,45.5 Z"/></g>
                    <g><path style="opacity:0.717" fill="#beac8d" d="M 23.5,8.5 C 33.1096,8.93592 35.7762,13.4359 31.5,22C 24.7189,25.1079 20.3855,23.1079 18.5,16C 18.3875,14.3376 19.0542,13.1709 20.5,12.5C 20.508,16.721 22.3413,19.721 26,21.5C 31.2896,19.7655 32.4563,16.5989 29.5,12C 27.2305,11.2419 25.0639,11.4086 23,12.5C 21.07,10.9229 21.2367,9.58956 23.5,8.5 Z"/></g>
                </svg>
                <span class="fourpoints__content__tit">City Guide</span>
            </div>
            <div class="fourpoints__content">
                <svg class="fourpoints__content__img paths" xmlns="http://www.w3.org/2000/svg" version="1.1" width="53px" height="53px" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g><path style="opacity:0.747" fill="#beac8e" d="M 13.5,5.5 C 21.8333,5.5 30.1667,5.5 38.5,5.5C 38.7852,7.28801 38.4519,8.95467 37.5,10.5C 36.6143,9.67504 36.281,8.67504 36.5,7.5C 35.325,7.28099 34.325,7.61432 33.5,8.5C 34.5312,9.70034 35.3645,11.0337 36,12.5C 36.414,12.0426 36.914,11.7093 37.5,11.5C 38.4841,14.4281 38.8174,17.4281 38.5,20.5C 30.1667,20.5 21.8333,20.5 13.5,20.5C 13.5,15.5 13.5,10.5 13.5,5.5 Z M 22.5,12.5 C 21.7932,16.3281 19.4599,17.9948 15.5,17.5C 15.5,14.1667 15.5,10.8333 15.5,7.5C 16.552,7.35055 17.552,7.51722 18.5,8C 15.5098,12.8525 16.8431,14.3525 22.5,12.5 Z M 22.5,12.5 C 22.7035,10.6096 22.0368,9.10963 20.5,8C 24.1667,7.33333 27.8333,7.33333 31.5,8C 30.624,9.58601 29.624,11.086 28.5,12.5C 26.4093,8.56053 24.4093,8.56053 22.5,12.5 Z M 31.5,12.5 C 33.3838,13.3816 34.7171,14.8816 35.5,17C 29.975,18.3081 28.6416,16.8081 31.5,12.5 Z M 24.5,13.5 C 26.1042,14.287 26.7709,15.6203 26.5,17.5C 25.325,17.719 24.325,17.3857 23.5,16.5C 24.1272,15.5832 24.4606,14.5832 24.5,13.5 Z"/></g>
                    <g><path style="opacity:0.754" fill="#bead8e" d="M 52.5,27.5 C 52.5,31.8333 52.5,36.1667 52.5,40.5C 50.5,40.5 48.5,40.5 46.5,40.5C 47.2647,45.9064 44.9313,47.9064 39.5,46.5C 39.5,45.1667 39.5,43.8333 39.5,42.5C 37.4727,42.6621 35.4727,42.4955 33.5,42C 35.9368,40.6253 38.6035,40.1253 41.5,40.5C 41.238,41.9778 41.5713,43.3112 42.5,44.5C 43.4656,42.604 43.7989,40.604 43.5,38.5C 31.8333,38.5 20.1667,38.5 8.5,38.5C 8.2011,40.604 8.53443,42.604 9.5,44.5C 10.4287,43.3112 10.762,41.9778 10.5,40.5C 17.8635,40.1694 25.1968,40.5027 32.5,41.5C 25.8665,42.4967 19.1998,42.83 12.5,42.5C 12.5,43.8333 12.5,45.1667 12.5,46.5C 7.06868,47.9064 4.73534,45.9064 5.5,40.5C 3.5,40.5 1.5,40.5 -0.5,40.5C -0.5,36.1667 -0.5,31.8333 -0.5,27.5C 0.5,27.5 1.5,27.5 2.5,27.5C 3.16667,25.5 3.83333,23.5 4.5,21.5C 3.16667,21.5 1.83333,21.5 0.5,21.5C -0.644371,14.175 2.35563,11.175 9.5,12.5C 9.96286,15.4824 10.2962,18.4824 10.5,21.5C 9.16667,21.5 7.83333,21.5 6.5,21.5C 7.04436,23.5795 7.8777,25.5795 9,27.5C 9.48278,26.552 9.64945,25.552 9.5,24.5C 12.2469,24.1866 14.9135,24.52 17.5,25.5C 15.604,26.4656 13.604,26.7989 11.5,26.5C 11.3398,28.1992 11.5065,29.8659 12,31.5C 12.3176,29.9391 13.1509,28.7724 14.5,28C 17.8333,27.3333 21.1667,27.3333 24.5,28C 25,28.5 25.5,29 26,29.5C 29.9181,27.2263 34.0847,26.893 38.5,28.5C 38.8333,28.1667 39.1667,27.8333 39.5,27.5C 32.5,26.8333 25.5,26.1667 18.5,25.5C 26.4723,24.5023 34.4723,24.169 42.5,24.5C 42.3505,25.552 42.5172,26.552 43,27.5C 44.1223,25.5795 44.9556,23.5795 45.5,21.5C 44.1667,21.5 42.8333,21.5 41.5,21.5C 41.7038,18.4824 42.0371,15.4824 42.5,12.5C 49.6444,11.175 52.6444,14.175 51.5,21.5C 50.1667,21.5 48.8333,21.5 47.5,21.5C 47.7637,24.7571 49.4304,26.7571 52.5,27.5 Z M 31.5,12.5 C 28.6416,16.8081 29.975,18.3081 35.5,17C 34.7171,14.8816 33.3838,13.3816 31.5,12.5 Z M 24.5,13.5 C 24.4606,14.5832 24.1272,15.5832 23.5,16.5C 24.325,17.3857 25.325,17.719 26.5,17.5C 26.7709,15.6203 26.1042,14.287 24.5,13.5 Z M 4.5,14.5 C 5.4959,14.4142 6.32924,14.7476 7,15.5C 7.30945,16.7659 7.80945,17.9326 8.5,19C 2.5781,20.7128 1.24476,19.2128 4.5,14.5 Z M 44.5,14.5 C 47.5406,14.4056 49.2072,15.9056 49.5,19C 47.5,19.6667 45.5,19.6667 43.5,19C 44.3802,17.6439 44.7135,16.1439 44.5,14.5 Z M 1.5,29.5 C 2.67504,29.281 3.67504,29.6143 4.5,30.5C 2.94835,31.7979 1.94835,31.4646 1.5,29.5 Z M 7.5,29.5 C 9.33702,29.6395 9.67036,30.3061 8.5,31.5C 7.70245,31.0431 7.36912,30.3764 7.5,29.5 Z M 42.5,29.5 C 44.337,29.6395 44.6704,30.3061 43.5,31.5C 42.7025,31.0431 42.3691,30.3764 42.5,29.5 Z M 47.5,29.5 C 48.675,29.281 49.675,29.6143 50.5,30.5C 48.9483,31.7979 47.9483,31.4646 47.5,29.5 Z M 1.5,33.5 C 3.16667,33.5 4.83333,33.5 6.5,33.5C 6.61623,36.9103 4.94956,38.2436 1.5,37.5C 1.5,36.1667 1.5,34.8333 1.5,33.5 Z M 9.5,33.5 C 20.5202,33.1679 31.5202,33.5012 42.5,34.5C 31.1813,35.6658 19.848,35.8325 8.5,35C 9.05596,34.6174 9.38929,34.1174 9.5,33.5 Z M 45.5,33.5 C 47.1667,33.5 48.8333,33.5 50.5,33.5C 50.5,34.8333 50.5,36.1667 50.5,37.5C 47.0504,38.2436 45.3838,36.9103 45.5,33.5 Z"/></g>
                </svg>
                <span class="fourpoints__content__tit">Luxury Room</span>
            </div>
        </div>
    </section>

    <!--Tour-->
    <section class="taketour">
        <div>
            <img class="taketour__img" src="{{ asset('build/images/imgs/restaurant.jpg') }}" alt="Foto del restaurante">
        </div>
        <div>
            <h3 class="taketour__sub">Restaurant</h3>
            <h2 class="taketour__tit">Get Restaurant Facilities & Many Other More</h2>
            <p class="taketour__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            <div class="taketour__btn">TAKE A TOUR</div>
        </div>
    </section>

    <!--Facilities-->
    <section class="facilities facilities--dark">
        <h3 class="facilities__sub facilities__sub--dark">Facilities</h3>
        <h2 class="facilities__tit">Core Features</h2>
            <div class="mySwiper mySwiper--dark">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="facilities__card">
                                <span class="facilities__card__num facilities__card__num--dark">01</span>
                                <div class="facilities__card__img"></div>
                                <div class="facilities__card__info">
                                    <h2 class="facilities__card__info__tit">Have High Rating</h2>
                                    <p class="facilities__card__info__p facilities__card__info__p--dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="facilities__card">
                                <span class="facilities__card__num facilities__card__num--dark">02</span>
                                <div class="facilities__card__img2"></div>
                                <div class="facilities__card__info">
                                    <h2 class="facilities__card__info__tit">Quiet Hours</h2>
                                    <p class="facilities__card__info__p facilities__card__info__p--dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="facilities__card">
                                <span class="facilities__card__num facilities__card__num--dark">03</span>
                                <div class="facilities__card__img3"></div>
                                <div class="facilities__card__info">
                                    <h2 class="facilities__card__info__tit">Best Locations</h2>
                                    <p class="facilities__card__info__p facilities__card__info__p--dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="facilities__card">
                                <span class="facilities__card__num facilities__card__num--dark">04</span>
                                <div class="facilities__card__img4"></div>
                                <div class="facilities__card__info">
                                    <h2 class="facilities__card__info__tit">Free Cancellation</h2>
                                    <p class="facilities__card__info__p facilities__card__info__p--dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="facilities__card">
                                <span class="facilities__card__num facilities__card__num--dark">05</span>
                                <div class="facilities__card__img5"></div>
                                <div class="facilities__card__info">
                                    <h2 class="facilities__card__info__tit">Payment Options</h2>
                                    <p class="facilities__card__info__p facilities__card__info__p--dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="facilities__card">
                                <span class="facilities__card__num facilities__card__num--dark">06</span>
                                <div class="facilities__card__img6"></div>
                                <div class="facilities__card__info">
                                    <h2 class="facilities__card__info__tit">Special Offers</h2>
                                    <p class="facilities__card__info__p facilities__card__info__p--dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="swiper-pagination paginationStandarFacilities paginationStandarFacilitiesDark"></div>
            </div>

            <div class="auxfacilities">
                <div>
                    <div class="facilities__card">
                        <span class="facilities__card__num">01</span>
                        <div class="facilities__card__img"></div>
                        <div class="facilities__card__info">
                            <h2 class="facilities__card__info__tit">Have High Rating</h2>
                            <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    
                    <div class="facilities__card">
                        <span class="facilities__card__num">02</span>
                        <div class="facilities__card__img2"></div>
                        <div class="facilities__card__info">
                            <h2 class="facilities__card__info__tit">Quiet Hours</h2>
                            <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    
                    <div class="facilities__card">
                        <span class="facilities__card__num">03</span>
                        <div class="facilities__card__img3"></div>
                        <div class="facilities__card__info">
                            <h2 class="facilities__card__info__tit">Best Locations</h2>
                            <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="facilities__card">
                        <span class="facilities__card__num">04</span>
                        <div class="facilities__card__img4"></div>
                        <div class="facilities__card__info">
                            <h2 class="facilities__card__info__tit">Free Cancellation</h2>
                            <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>

                    <div class="facilities__card">
                        <span class="facilities__card__num">05</span>
                        <div class="facilities__card__img5"></div>
                        <div class="facilities__card__info">
                            <h2 class="facilities__card__info__tit">Payment Options</h2>
                            <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                    
                    <div class="facilities__card">
                        <span class="facilities__card__num">06</span>
                        <div class="facilities__card__img6"></div>
                        <div class="facilities__card__info">
                            <h2 class="facilities__card__info__tit">Special Offers</h2>
                            <p class="facilities__card__info__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!--Counter-->
    <section class="counter">
        <h3 class="counter__sub">COUNTER</h3>
        <h2 class="counter__tit">Some Fun Facts</h2>
        <div class="counter__contentmain">
            <div class="counter__content">
                <img src="{{ asset('build/images/imgs/counter/likeman.svg') }}" alt="" class="counter__content__img"/>
                <div class="counter__content__txt">
                    <span class="counter__content__txt__num">8000</span>
                    <span class="counter__content__txt__text">Happy Users</span>
                </div>
                <img src="{{ asset('build/images/imgs/counter/flecha.svg') }}" alt="go" class="counter__content__flecha"/>
            </div>

            <div class="counter__content">
                <img src="../../sources/imgs/counter/likeestrella.svg" alt="" class="counter__content__img"/>
                <div class="counter__content__txt">
                    <span class="counter__content__txt__num">10M</span>
                    <span class="counter__content__txt__text">Reviews & Appriciate</span>
                </div>
                <img src="{{ asset('build/images/imgs/counter/flecha.svg') }}" alt="go" class="counter__content__flecha"/>
            </div>

            <div class="counter__content">
                <img src="../../sources/imgs/counter/mundo.svg" alt="" class="counter__content__img"/>
                <div class="counter__content__txt">
                    <span class="counter__content__txt__num">100</span>
                    <span class="counter__content__txt__text">Country Coverage</span>
                </div>
                <img src="{{ asset('build/images/imgs/counter/flecha.svg') }}" alt="go" class="counter__content__flecha"/>
            </div>
        </div>

            <!--Slider standar-->
        <div class="swiperNormal">
            <div class="swiper-dim swiper-wrapper">
                <div class="swiper-slide">
                    <img class="imgSlider" src="{{ asset('build/images/imgs/counter/slide2.jpg') }}" alt="Room 1"/>
                </div>
                <div class="swiper-slide">
                    <img class="imgSlider" src="{{ asset('build/images/imgs/counter/slide1.jpg') }}" alt="Room 2"/>
                </div>
            </div>
            <div class="swiper-pagination paginationStandar"></div>
        </div>
        <div class="swiperNormall">
            <div class="normalaux">
                <div class="swiperNormall__imgcontent">
                    <img class="swiperNormall__imgcontent__img" src="{{ asset('build/images/imgs/room1.jpg') }}" alt="Room 2"/>
                </div>
                <div class="swiperNormall__imgcontent">
                    <img class="swiperNormall__imgcontent__img" src="{{ asset('build/images/imgs/room3.jpg') }}" alt="Room 3"/>
                </div>
            </div>
        </div>
    </section>
@endsection