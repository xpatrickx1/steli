<?php

$features = [
  
  [
    'title' => 'Тканевые натяжные потолки',
    'text' => 'Тканевые полотна устанавливаются на фирменный пластиковый профиль-прищепку методом натяжки без необходимости нагрева помещения. Профиль крепится с шагом 5-7 см, а ткань отрезается с запасом по 25 см с каждой стороны для удобства монтажа. В отличие от ПВХ-плёнки, ткань не требует сварки с гарпуном, и пластиковая вставка не используется благодаря уникальной системе крепления.',
  ],
  [
    'title' => 'Процесс создания многоуровневой конструкции',
    'text' => 'На этапе замера разрабатывается макет, который согласовывается с клиентом. После доработки макет отправляется в цех, где изготавливается из профилей Prozet. На объекте монтажники собирают конструкцию из привезённых элементов.',
  ],
  [
    'title' => 'Установка световых потолков',
    'text' => 'Светодиодная лента монтируется на черновой потолок, поверх которого натягивается светопрозрачное полотно. Подготовка базового потолка включает грунтовку или отделку пластиком для устранения просвечивания.',
  ],
 
];

?>

<section id="features" class="features">
  <div class="container features__wrap">

    <div class="features__top">
      <h2>
        <?= get_field('features_title') ? the_field('features_title') : 'Особенности монтажа различных типов потолков' ?>
      </h2>

      <ul class="features__list">
        <?php if (have_rows('features_list')) :
          while ( have_rows('features_list')) : the_row(); ?>
            <li class="item">
                <div class="item__title item-title18">
                <?= get_sub_field('item_title') ?>
                </div>  
                <div class="item__text">
                <?= get_sub_field('item_text') ?>
                </div>  
              </div></li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $features as $key => $item ) : ?>
            <li class="item">
              <div class="item__title item-title18">
                <?= $item['title'] ?>
              </div>  
              <div class="item__text">
                <?= $item['text'] ?> 
              </div>  
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>

    <ul class="features__bottom">
    <?php if (have_rows('features_images')) :
          while ( have_rows('features_images')) : the_row(); ?>
          <li>
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= get_sub_field('item_img')['url'] ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
            <div class="item__text">
                <?= get_sub_field('item_text') ?>
            </div>
          </li>
          <?php endwhile; ?>
        <?php else : ?>
          <li>
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= bloginfo('template_url') . '/images/page-installation/features1.png' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
            <div class="item__text">
              Мастер заводит полотно в профиль
            </div>  
          </li>
          <li>
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= bloginfo('template_url') . '/images/page-installation/features2.png' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
            <div class="item__text">
            Сборка перехода уровня
            </div>  
          </li>
          <li>
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= bloginfo('template_url') . '/images/page-installation/features3.png' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
            <div class="item__text">
            Проклейка светодиодной ленты
            </div>  
          </li>
        <?php endif; ?>
    </ul>
  </div>
</section>