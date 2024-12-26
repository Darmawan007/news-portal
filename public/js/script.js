var swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    autoplay: {
      delay: 2000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

var swiper2 = new Swiper(".slide-content2", {
    slidesPerView: 8.5,
    spaceBetween: 25,
    reponsive: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    breakpoints: {
      0: {
        slidesPerView: 2.5
      },
      340: {
        slidesPerView: 3.5
      },
      480: {
        slidesPerView: 4.5
      },
      580: {
        slidesPerView: 5.5
      },
      980: {
        slidesPerView: 6.5
      },
      1080: {
        slidesPerView: 8.5
      },
    }
  });