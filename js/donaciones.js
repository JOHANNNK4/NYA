var swiper = new Swiper('.blog-slider', {
    spaceBetween: 30,
    effect: 'fade',
    loop: true,
    mousewheel: {
      invert: false,
    },
    // autoblock-size: true,
    pagination: {
      el: '.blog-slider__pagination',
      clickable: true,
    }
  });