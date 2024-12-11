<?php

  $call = [
    [
      'title' => 'Точная итоговая стоимость и сроки монтажа потолков.',
    ],
    [
      'title' => 'Замеры проводятся каждый день с 9 до 20 часов.',
    ],
    [
      'title' => 'Услуга бесплатная, даже если вы откажетесь от заказа!',
    ],
  ];

?>

<section class="call">
  <div class="container call__wrap">

    <div class="call__top">
      <h2>
        <?= get_field('call_title') ? the_field('call_title') : 'Запишитесь на бесплатный замер потолков' ?>
      </h2>

      <div class="call__description section-description">
        <?= get_field('call_description') ? the_field('call_description') : 'Технолог приедет в удобное для вас время. Замерит помещения, продемонстрирует материалы, подберёт подходящие конструкции.' ?>
      </div>
    

      <ul class="call__list">
        <?php if (have_rows('call_list')) :
          while ( have_rows('call_list')) : the_row(); ?>
            <li class="item"><?= get_sub_field('item_title') ?></li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $call as $key => $item ) : ?>
            <li class="item"><?= $item['title'] ?></li>
          <?php endforeach; ?>

        <?php endif; ?>
      </ul>
    </div>

    <div class="call__bottom">
      <?php echo do_shortcode('[contact-form-7 id="724fadd" title="Contact form 1"]') ?>
    </div>

  </div>
</section>