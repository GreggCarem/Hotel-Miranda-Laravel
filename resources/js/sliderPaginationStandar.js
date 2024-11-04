const swiperStandar = new Swiper(".swiperNormal", {
    loop: true,
    direction: "horizontal",
    loop: false,
    spaceBetween: 1000,
    pagination: {
        el: ".paginationStandar",
    },
});

var swiper4 = new Swiper(".Swiper4", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    slidesPerView: 1,
    breakpoints: {
        1000: {
            slidesPerView: 3,

            spaceBetween: 10,
        },
    },
});
