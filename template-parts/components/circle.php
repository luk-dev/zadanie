<?php
$circle_highlight = "Poznaj nasze kompetencje";
$circle_data = [
  [
    'icon' => 'icon1',
    'name' =>  'Zarządzanie projektami'
  ],
  [
    'icon' => 'icon2',
    'name' =>  'Dotacje i granty międzynarodowe'
  ],
  [
    'icon' => 'icon3',
    'name' =>  'Międzynarodowa księgowość, kadry i podatki'
  ],
  [
    'icon' => 'icon4',
    'name' =>  'Prawo międzynarodowe'
  ],
  [
    'icon' => 'icon5',
    'name' =>  'Finansowanie handlu międzynarodowego'
  ],
  [
    'icon' => 'icon6',
    'name' =>  'Pozyskiwanie inwestorów (M&A)'
  ],
  [
    'icon' => 'icon7',
    'name' =>  'Nieruchomości'
  ],
  [
    'icon' => 'icon8',
    'name' =>  'Komercjalizacja własności intelektualnej'
  ],
  [
    'icon' => 'icon9',
    'name' =>  'Podnoszenie produktywności'
  ],
  [
    'icon' => 'icon10',
    'name' =>  'Crowdfunding'
  ],
  [
    'icon' => 'icon11',
    'name' =>  'Ubezpieczenia międzynarodowe'
  ],
  [
    'icon' => 'icon12',
    'name' =>  'Marketing 360º'
  ]
];
?>

<div class="circle js-circle-slider swiper">
  <span class="circle__highlight"><?php echo $circle_highlight; ?></span>
  <figure class="circle__image-wr">
    <img class="circle__image js-circle-image" src="dist/static/img/cog.png" alt="Grafika koła zębatego">
  </figure>
  <ul class="circle__list js-hero-list swiper-wrapper">
  <?php foreach($circle_data as $item): ?>
    <li class="circle__item js-hero-list-item swiper-slide" style="background-image: url('dist/static/img/icons/<?php echo $item['icon']?>.svg')">
      <span class="circle__item-text"><?php echo $item['name']?></span>
    </li>
  <?php endforeach; ?>
  </ul>
</div>