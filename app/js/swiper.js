$(document).ready(function () {
    let init = false;
    let swiper;

    function swiperCard() {
      if (window.innerWidth <= 1023) {
        if (!init) {
          init = true;
          swiper = new Swiper(".app", {
            // slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 90,
            pagination: {
              el: ".app__pagination",
              clickable: true,
            },
            breakpoints: {
              // when window width is >= 320px
              320: {
                slidesPerView: 1,
                spaceBetween: 20
              },
              446: {
                slidesPerView: 2,
                spaceBetween: 35
              },
              720: {
                slidesPerView: 2,
                spaceBetween: 90
              }
            }
          })
        } else {
          swiper.destroy();
          init = false;
        }
      }
    }

    swiperCard();
    window.addEventListener("resize", swiperCard);
  }
)