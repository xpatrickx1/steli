<?php
  $topscreenList = [
    'Быстрые сроки — от замера до монтажа 1-2 дня',
    'Чистая работа благодаря перфораторам с пылесборником, который собирает грязь на 80%',
    'Используем усиленный алюминиевый профиль и сертифицированные полотна',
    'Повышенная гарантия 7 лет на всю работу и материалы',
  ];
?>

<section class="top-screen">
  <div class="container top-screen__wrap">

    <div class="top-screen__breadcrumbs">
        <span><a href="<?= home_url(); ?>">Home</a></span>
        <span> > </span>
        <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'installation' ?></span>
    </div>
    
    <div class="top-screen__top">
      <div class="top-screen--left">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_sub_field('installation_top_1')['url'] ? get_sub_field('installation_top_1')['url'] : bloginfo('template_url') . '/images/page-installation/installation1.png' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
      
      <div class="top-screen--right">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_sub_field('installation_top_2')['url'] ? get_sub_field('installation_top_2')['url'] : bloginfo('template_url') . '/images/page-installation/installation2.png' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_sub_field('installation_top_3')['url'] ? get_sub_field('installation_top_3')['url'] : bloginfo('template_url') . '/images/page-installation/installation3.png' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
      
    </div>

    <div class="top-screen__bottom">
      <h2>
        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h2>
      <div class="top-screen__bottom--right">
      <div class="top-screen__description">
        <?= get_field('top_screen_description') ? the_field('top_screen_description') : 'Теневое примыкание натяжного потолка создаёт визуальный эффект — между потолочной конструкцией и стеной пролегает глубокая тень. ' ?>
      </div>
      <div class="top-screen__description">
        <?= get_field('top_screen_description2') ? the_field('top_screen_description2') : 'Из-за этого кажется, что потолочная «плита» парит в воздухе, не соприкасаясь со стеной. Они хорошо смотрятся в современных и минималистичных интерьерах.' ?>
      </div>
      </div>
      <ul class="top-screen__list">
          <?php if (have_rows('top-screen_list')) :
            while ( have_rows('top-screen_list')) : the_row(); ?>
              <li class="item"><?= get_sub_field('item_title') ?></li>
            <?php endwhile; ?>
          <?php else : ?>
            <?php foreach ( $topscreenList as $key => $item ) : ?>
              <li class="item"><?= $item ?></li>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>
        <a 
      href="#"
      rel="nofollow"
      class="button--main">
      Бесплатный замер
    </a>
    </div>

    

  </div>
</section>
