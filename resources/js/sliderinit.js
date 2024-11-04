const swiper = new Swiper(".swiperRoomsPicked", {
    loop: true,
    spaceBetween: 1000,
    slidesPerView: "auto",
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1000: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
