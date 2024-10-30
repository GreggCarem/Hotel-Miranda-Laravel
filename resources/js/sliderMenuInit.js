const swiperMenu = new Swiper('.swiperMenu', {
    direction: 'horizontal',
    slidesPerView: '1',
    grid: {
        rows: 3
    },
    loop: false,
    navigation: {
      nextEl: '.posnext',
      prevEl: '.posback',
    },
    breakpoints: {
      1000: {
        slidesPerView: '2',
      }
    }
});