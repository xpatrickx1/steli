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

    <ul class="works__list">
      <?php if (have_rows('works_list')) :
        while ( have_rows('works_list')) : the_row(); ?>
          <li class="item">
            <a href="#">
              <?= get_sub_field('item_text') ?>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $works as $key => $item ) : ?>
          <li class="item">
            <a href="#">
              <?= $item ?>
            </a>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
    
  </div>
</section>
