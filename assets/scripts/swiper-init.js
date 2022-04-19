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


//PACOTES
var swiper = new Swiper('.swiper-pacotes', {
  observer: true,
  observeParents: true,
  setWrapperSize:true,
  slidesPerView: 5,
  spaceBetween: 0,
  autoplay: {
    delay: 6000,
    disableOnInteraction:false,
  },
  breakpoints: {
    1400:{
      slidesPerView: 4,
    },
    1199: {
      slidesPerView: 3,
    },
    991: {
      slidesPerView: 3,
    },
    767: {
      slidesPerView: 2,
    },
    575: {
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


//BANNER
var swiper = new Swiper('.swiper-banner', {
  effect: 'fade',
  speed: 800,
  fadeEffect: {
    crossFade: false
  },
  observer: true,
  observeParents: true,
  setWrapperSize:true,
  centeredSlides: true,
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    enabled: true,
    delay: 3000,
    disableOnInteraction:false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

//CUSTO DE VIDA
var swiper = new Swiper('.swiper-custo-de-vida', {
  effect: 'slide',
  speed: 800,
  fadeEffect: {
    crossFade: false
  },
  observer: true,
  observeParents: true,
  setWrapperSize:true,
  centeredSlides: true,
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    enabled: true,
    delay: 3000,
    disableOnInteraction:false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});

//DEPOIMENTOS - pais
var swiper = new Swiper('.swiper-depoimentos-destinos', {
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
    992: {
      slidesPerView: 3,
    }
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});

//PROGRAMAS - pais
var swiper = new Swiper('.swiper-destino-programa', {
  observer: true,
  observeParents: true,
  setWrapperSize:true,
  slidesPerView: 1,
  centeredSlides: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction:false,
  },
  breakpoints: {
    992: {
      slidesPerView: 3,
    }
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});