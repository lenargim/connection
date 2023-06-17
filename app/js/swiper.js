$(document).ready(function (){
  let init = false;
  let swiper;
  function swiperCard() {
    if (window.innerWidth <= 1023) {
      if (!init) {
        init = true;
        swiper = new Swiper(".app", {
          slidesPerView: 2,
          slidesPerGroup: 2,
          spaceBetween: 90,
          pagination: {
            el: ".app__pagination",
            clickable: true,
          },
        });
      }
    } else if (init) {
      swiper.destroy();
      init = false;
    }
  }
  swiperCard();
  window.addEventListener("resize", swiperCard);

})