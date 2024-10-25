document.addEventListener("DOMContentLoaded", function () {
  var swiper1 = new Swiper(".first-slider", {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 1,
    spaceBetween: 100,
    breakpoints: {
      1000: {
        slidesPerView: 1.5,
        centeredSlides: true,
        spaceBetween: 100,
      },
    },
  });

  // Second Slider
  var swiper2 = new Swiper(".Swiper2", {
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    slidesPerView: 1,
    breakpoints: {
      1000: {
        slidesPerView: 6,

        spaceBetween: 50,
      },
    },
  });

  // Third Slider
  var swiper3 = new Swiper(".Swiper3", {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    slidesPerView: 1,
    breakpoints: {
      1000: {
        slidesPerView: 2,

        spaceBetween: 10,
      },
    },
  });
  // Fourth Slider
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
});
