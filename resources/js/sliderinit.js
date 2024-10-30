const swiper = new Swiper('.swiperRoomsPicked', {
    direction: 'horizontal',
    loop: false,
    spaceBetween: 1000,
    breakpoints: {
      1000: {
        slidesPerView: 1,
        spaceBetween: 20
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
});
