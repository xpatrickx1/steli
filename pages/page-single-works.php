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
      <span><a href="/catalog/"><?= get_bloginfo("language") == 'ru' ? 'Наши работы' : 'Наші роботи' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Матовый потолок' ?></span>
    </div>

    <h2>
      <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
    </h2>

    <ul class="works__list">
      <?php if (have_rows('works_list')) :
        while ( have_rows('works_list')) : the_row(); ?>
          <li class="item">
            <a href="" class="item"><?= get_sub_field('item_text') ?></a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $works as $key => $item ) : ?>
          <li class="item">
            <a href="#" class="item">
              <?= $item ?>
            </a>
          </li>
        <?php endforeach; ?>
      <?php endif; ?>
    </ul>
    
  </div>
</section>


<section class="category-content">
  <div class="container">
    <div class="content__wrap">
      <?php
        if (have_posts() ) {
          while (have_posts()) : the_post();
            echo apply_filters( 'the_content', get_the_content() );
          endwhile;
        }
      ?>
    </div>
  </div>
</section>

