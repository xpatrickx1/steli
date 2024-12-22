<?php

  $catalogTop = [
    [
      'title' => 'Многоуровневые',
      'text' => 'Потолки с переходом уровней из металлических конструкций. Для сметы требуется выезд технол...',
      'link' => '#',
    ],
    [
      'title' => 'Звездное небо',
      'text' => 'Натяжной потолок со звёздным небом это инсталляция из мерцающих звёзд с помощью оптоволоко...',
      'link' => '#',
    ],
    [
      'title' => 'С фотопечатью',
      'text' => 'Качественная UV фотопечать на натяжном потолке шириной до 5,5 метров. Нанести изображения ...',
      'link' => '#',
    ]
  ];

  $catalogBrand = [
    [
      'title' => 'Teqtum',
      'text' => 'Противопожарные натяжные потолки TEQTUM KM2 отвечает требованиям украинского законодательства...',
      'link' => '#',
    ],
    [
      'title' => 'MSD',
      'text' => 'Потолки MSD (МСД) — мировой лидер среди производителей пленки для натяжных потолков.',
      'link' => '#',
    ],
    [
      'title' => 'Система Stelio',
      'text' => 'Бесщелевой натяжной потолок «Стелио» - идеальное примыкание полотна к стене, без резиновой..',
      'link' => '#',
    ],
    [
      'title' => 'Descor',
      'text' => 'Немецкие натяжные потолки из ткани с оптимальным соотношением цена-качество.',
      'link' => '#',
    ]
  ];

?>

<section class="catalog">
  <div class="container catalog__wrap">
    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>">Натяжные потолки в Киеве</a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Каталог потолков' ?></span>
    </div>
    <div class="catalog__top">
      <h2>
        <?= get_field('catalog_title') ? the_field('catalog_title') : 'Каталог натяжных потолков' ?>
      </h2>

    <ul class="catalog__list">
      <?php if (have_rows('catalog_list')) :
        while ( have_rows('catalog_list')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
              <div class="item__img">
                <?php if(get_sub_field('item_img')['url']) : ?>
                  <img 
                    src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                    data-src="<?= get_sub_field('item_img')['url'] ?>"
                    class="lazy"
                    width="1px"
                    height="1px"
                  />
                <?php endif; ?>
              </div>
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $catalogTop as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog' . ($key + 1) . '.png' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            </a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

    <ul class="catalog__list list__brands">
      <?php if (have_rows('catalog_brandlist')) :
        while ( have_rows('catalog_brandlist')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
              <div class="item__img">
                <?php if(get_sub_field('item_img')['url']) : ?>
                  <img 
                    src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                    data-src="<?= get_sub_field('item_img')['url'] ?>"
                    class="lazy"
                    width="1px"
                    height="1px"
                  />
                <?php endif; ?>
              </div>
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $catalogBrand as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalogBrand' . ($key + 1) . '.png' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            </a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

  </div>
</section>