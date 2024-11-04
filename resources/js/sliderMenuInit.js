const swiperMenu = new Swiper(".swiperMenu", {
    direction: "horizontal",
    slidesPerView: 1,
    loop: true,
    grid: {
        rows: 3,
    },

    navigation: {
        nextEl: ".posnext",
        prevEl: ".posback",
    },
    breakpoints: {
        1000: {
            slidesPerView: 2,

            spaceBetween: 10,
        },
    },
});
