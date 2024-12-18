<?php include 'price-data.php' ?>

<section class="price">
  <div class="container price__wrap">

    <div class="price__top">
      <h2>
        <?= get_field('price_title') ? the_field('price_title') : 'Стоимость материалов и установки теневого потолока' ?>
      </h2>

      <div class="price__description section-description">
        <?= get_field('price_description') ? the_field('price_description') : 'У нас вы найдете все необходимое для вашего проекта: комплектующие, карнизы и освещение. С нашей комплектацией вы сэкономите время на доставке, будете уверены в их совместимости и сможете легко уложиться в свой бюджет.' ?>
      </div>
    </div>

    <ul class="price__list">
      <?php if (have_rows('price_list')) :
        while ( have_rows('price_list')) : the_row(); ?>
          <li class="item">
            <div class="item__title"><?= get_sub_field('item_title') ?> <span>₴</span></div>
            <div class="item__main">
              <?php foreach ( $item['items'] as $key => $i ) : ?>
                <div class="item__param">
                  <span><?= get_sub_field('item_param') ?></span>
                  <span><?= get_sub_field('item_val') ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </li>  
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $price as $key => $item ) : ?>
          <li class="item">
            <div class="item__title"><?= $item['title'] ?> <span>₴</span></div>
            <div class="item__main">
              <?php foreach ( $item['items'] as $key => $i ) : ?>
                <div class="item__param">
                  <span><?= $i['param'] ?></span>
                  <span><?= $i['val'] ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

  </div>
</section>