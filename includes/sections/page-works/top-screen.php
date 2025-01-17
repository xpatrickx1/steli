<?php

$works = [
  'Все фотографии', 'Теневые', 'Бесщелевые','Световые линии','С треками','Детская','Ванная','Кухня','В зале','Матовые'
];

?>

<section class="top-screen">
  <div class="container">
    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Наши работы' ?></span>
    </div>

    <h2>
      <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
    </h2>

    <div class="works__list">
      <?php if (has_nav_menu('categoty_works')) :
        $nav_args = array(
          'theme_location' => 'categoty_works',
          'container' => '',
          'items_wrap' => '%3$s',
        );
        wp_nav_menu($nav_args);
      endif; ?>
    </div>
    
  </div>
</section>
