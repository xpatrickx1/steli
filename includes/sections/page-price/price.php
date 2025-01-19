<?php include 'price-data.php' ?>

<section id="prices" class="price">
  <div class="container price__wrap">

    <div class="price__top">
      <h2>
        <?= get_field('price_title') ? the_field('price_title') : 'Стоимость материалов и установки теневого потолока' ?>
      </h2>

      <div class="price__description section-description">
        <?= get_field('price_description') ? the_field('price_description') : 'У нас вы найдете все необходимое для вашего проекта: комплектующие, карнизы и освещение. С нашей комплектацией вы сэкономите время на доставке, будете уверены в их совместимости и сможете легко уложиться в свой бюджет.' ?>
      </div>
    </div>

    <?php if (have_rows('price_list')) :?>
      <ul class="price__list">
        <?php while ( have_rows('price_list')) : the_row(); ?>
          <li class="item">
            <div class="item__title"><?= get_sub_field('item_title') ?> <span>₴</span></div>
            <div class="item__main">
              <?php if (get_sub_field('item_list')) :
                  while ( have_rows('item_list')) : the_row(); ?>
                    <div class="item__param">
                      <span><?= get_sub_field('item_param') ?></span>
                      <span><?= get_sub_field('item_val') ?></span>
                    </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </li>  
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>

  </div>
</section>