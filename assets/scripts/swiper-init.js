//configs dos carrosseis

var swiper = new Swiper('.swiper-parceiros', {
  observer: true,
  observeParents: true,
  setWrapperSize:true,
  loop:true,
  spaceBetween: 0,
  slidesPerView: 6,
  autoplay: {
    delay: 3000,
    disableOnInteraction:false,
  },
  breakpoints: {
    1199: {
      slidesPerView: 6,
    },
    991: {
      slidesPerView: 5,
    },
    767: {
      slidesPerView: 4,
    },
    400:{
      slidesPerView: 3,
    },
    0: {
      slidesPerView: 1,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});