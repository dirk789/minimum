window.addEventListener('load', () => {
  const homepageSlider = new Swiper('.swiper-container', {

	loop: true,
    slidesPerView: 1,
    centeredSlides: false,
    navigation: {
      nextEl: '.slider-next',
      prevEl: '.slider-prev',
    },

   } )
  }, false);