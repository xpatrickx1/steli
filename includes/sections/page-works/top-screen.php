<?php

$works = [
  'Все фотографии', 'Теневые', 'Бесщелевые','Световые линии','С треками','Детская','Ванная','Кухня','В зале','Матовые'
];

?>

<section class="top-screen">
  <div class="container">
    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>">Натяжные потолки в Киеве</a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Наши работы' ?></span>
    </div>

    <h2>
      <?php if ( get_field('page_title'))  { 
          echo get_field('page_title') ;
        } else { 
          if (get_bloginfo("language") == 'ru') {
            echo 'Варианты многоуровневых натяжных потолков фото в Киеве' ;
          } else {
            echo 'Варіанти багаторівневих натяжних стель у Києві.';
          } 
        }; ?>
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
