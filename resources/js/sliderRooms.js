const swiperRooms = new Swiper('.sliderRooms', {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    grid: {
        rows: 6, 
        fill: 'row'
    },
    spaceBetween: 30,
    loop: false,
    breakpoints: {
        1000:{
            spaceBetween: 130,
            slidesPerView: 8, 
            slidesPerGroup: 6,
            grid: {
                rows: 4,
                fill: 'row' 
            },
        },
        1784: {
            spaceBetween: 130,
            slidesPerView: 8, 
            slidesPerGroup: 12,
            grid: {
                rows: 4,
                fill: 'row' 
            },
        },
    }
});

/*
breakpoints: {
        1000: {
          slidesPerView: 3,
          spaceBetween: 20,
          grid: {
            rows: 4,
          },
        }
    },*/