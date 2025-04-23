function initSwiper() {

const swiperFeedback = new Swiper('.feedback-slider', {
  slidesPerView: 1, 
  loop: true,
  spaceBetween: 0,
  watchSlidesProgress: true,
  grabCursor: true,
  navigation: {
    nextEl: '.slider__button-next',
    prevEl: '.slider__button-prev',
    lockClass: 'hide'
  },
  pagination: {
    el: '.slider-pagination',
    type: 'bullets',
  },
  
  breakpoints:{
        768:{
          slidesPerView: 2, 
          spaceBetween: 40,
        }    
  }
});
}

window.addEventListener('DOMContentLoaded', function() {
  initSwiper();
});
