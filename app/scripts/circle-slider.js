import Swiper, { Autoplay } from 'swiper';

export default function slider() {
  let init = false;
  let swiper = '';
  let i = 0;

  if (window.innerWidth <= 980) {
    if (!init) {
      init = true;
      swiper = new Swiper(".js-circle-slider", {
        modules: [Autoplay],
        direction: "vertical",
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: {
          delay: 5000,
        },
        on: {
          slideChange: function () {
            i++;
            document.querySelector('.js-circle-image').style.transform="rotate(" + (i * 15) + "deg)";
          },
        },
      });
    }
  } else if (init) {
    swiper.destroy();
    init = false;
  }
}
