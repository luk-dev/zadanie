export default function circle() {
  let hero_list_items = Array.from(document.querySelectorAll('.js-hero-list li'));
  let hero_list_items_length = hero_list_items.length;
  let ry = 295;
  let rx = 295;

  hero_list_items.forEach(function (item, i) {
    if (window.innerWidth >= 980) {
      item.style.top = String(ry + -ry * Math.cos((360 / hero_list_items_length / 180) * i * Math.PI)) + 'px';
      item.style.left = String(rx + rx * Math.sin((360 / hero_list_items_length / 180) * i * Math.PI)) + 'px';

      if (i > (hero_list_items_length / 2)) {
        item.classList.add("is-right-side");
      }
      if (i == 0) {
        item.classList.add("is-first");
      }
    }
  });

  let result = hero_list_items[((hero_list_items_length + 1) % 2 + Math.floor((hero_list_items_length + 1) / 2) - 1)];
  result.classList.add("is-center");
}