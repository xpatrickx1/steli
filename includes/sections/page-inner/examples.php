<?php

  $examples = [
  
    [
      'price' => '25 000 грн. ',
      'title' => 'Натяжной потолок для кухни 10 м2',
      'text' => 'Качественная установка, недорогая цена',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
    [
      'price' => '35 000 грн. ',
      'title' => 'Натяжной потолок для кухни 10 м2',
      'text' => 'Быстрая установка, доступная цена',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
    [
      'price' => '17 000 грн. ',
      'title' => 'Потолок для детской 10 м2',
      'text' => 'Классический белый матовый потолок с люстрой',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
    [
      'price' => '25 000 грн. ',
      'title' => 'Натяжной потолок для кухни 10 м2',
      'text' => 'Качественная установка, недорогая цена',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
    [
      'price' => '35 000 грн. ',
      'title' => 'Натяжной потолок для кухни 10 м2',
      'text' => 'Быстрая установка, доступная цена',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
    [
      'price' => '17 000 грн. ',
      'title' => 'Потолок для детской 10 м2',
      'text' => 'Классический белый матовый потолок с люстрой',
      'square' => '10м2',
      'pserimeter' => '14м2',
      'canvas' => 'MSD Evolution',
      'rod' => '2 м.п.',
      'angle' => '2 шт.',
      'lightingPoints' => '2 шт.',
    ],
  ];

?>

<section class="examples">
  <div class="container examples__wrap">

    <div class="examples__top">
      <h2>
        <?= get_field('examples_title') ? the_field('examples_title') : 'Примеры установленных натяжных потолков' ?>
      </h2>

      <div class="examples__description section-description">
        <?= get_field('examples_description') ? the_field('examples_description') : 'Примеры установленных натяжных потолков в Киеве и области с учётом всех работ, материалов и комплектующих. Цена зависит от материала полотна, профильной системы примыкания к стене и светотехнического оборудования.' ?>
      </div>
    </div>

    <div class="examples__center">
      <ul class="examples__list">
        <?php if (have_rows('examples_list')) :
          while ( have_rows('examples_list')) : the_row(); ?>
            <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
              <div class="item__price">
                <?= get_sub_field('item_price') ?>
              </div>
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
              <div class="item__center">
                <div class="item__title"><?= get_sub_field('item_title') ?></div>
                <div class="item__text"><?= get_sub_field('item_text') ?></div>
              </div>
              <div class="item__info">
                <div class="item__price">
                  <?= get_sub_field('item_price') ?>
                </div>
              </div>
              </a>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $examples as $key => $item ) : ?>
            <li class="item">
              <div class="item__price">
                <div class="item__subtitle">
                <div>Всё включено</div> <div class="item__value"><?= $item['price'] ?></div>
                </div>
              </div>
              <div class="item__img">
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= bloginfo('template_url') . '/images/page-front/examples' . ($key + 1) . '.png' ?>"
                  class="lazy"
                  width="1px"
                  height="1px"
                />
              </div>
              <div class="item__main">
                <div class="item__title"><?= $item['title'] ?></div>
                <div class="item__text"><?= $item['text'] ?></div>
              </div>
              <div class="item__bottom">
                
                <div class="item__info item__square">
                  <span class="item__info--left">площадь:</span> <span class="item__info--right"><?= $item['square'] ?></span>
                </div>
                <div class="item__info item__pserimeter">
                  <span class="item__info--left">периметр:</span> <span class="item__info--right"><?= $item['pserimeter'] ?></span>
                </div>
                <div class="item__info item__canvas">
                  <span class="item__info--left">канва:</span> <span class="item__info--right"><?= $item['canvas'] ?></span>
                </div>
                <div class="item__info item__rod">
                  <span class="item__info--left">рольга:</span> <span class="item__info--right"><?= $item['rod'] ?></span>
                </div>
                <div class="item__info item__angle">
                  <span class="item__info--left">уголки:</span> <span class="item__info--right"><?= $item['angle'] ?></span>
                </div>
                <div class="item__info item__lightingPoints">
                  <span class="item__info--left">точки освещения:</span> <span class="item__info--right"><?= $item['lightingPoints'] ?></span>
                </div>
              </div>
            </li>
          <?php endforeach; ?>

        <?php endif; ?>
      </ul>
    </div>

  </div>
</section>