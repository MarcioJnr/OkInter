//configs dos carrosseis
//PARCEIROS
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


//DEPOIMENTOS
var swiper = new Swiper('.swiper-depoimentos', {
  observer: true,
  observeParents: true,
  setWrapperSize:true,
  centeredSlides: true,
  loop:true,
  slidesPerView: 3,
  spaceBetween: 0,
  autoplay: {
    delay: 4000,
    disableOnInteraction:false,
  },
  breakpoints: {
    991: {
      slidesPerView: 3,
    },
    767: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});

var swiper = new Swiper('.swiper-destinos-galeria', {
  observer: true,
  observeParents: true,
  setWrapperSize:true,
  centeredSlides: true,
  loop:true,
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    delay: 4000,
    disableOnInteraction:false,
  },
  breakpoints: {
    991: {
      slidesPerView: 1,
    },
    767: {
      slidesPerView: 1,
    },
    0: {
      slidesPerView: 1,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});

var swiper = new Swiper('.swiper-custo-de-vida', {
  observer: true,
  observeParents: true,
  setWrapperSize:true,
  centeredSlides: true,
  loop:true,
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    delay: 4000,
    disableOnInteraction:false,
  },
  breakpoints: {
    991: {
      slidesPerView: 1,
    },
    767: {
      slidesPerView: 1,
    },
    0: {
      slidesPerView: 1,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});