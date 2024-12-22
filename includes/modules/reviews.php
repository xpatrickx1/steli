<?php

  $reviews = [
  
    [
      'title' => 'Ольга С.',
      'stars' => 5,
      'date' => '17 Октября 2024',
      'text' => 'Вибираючи компанію, яка встановлюватиме натяжні стелі, я насамперед звертала увагу на якість товару. Як відомо, зараз більшість компаній на ринку продають китайське полотно. У мене маленька дитина, мені важливо, щоб стеля не була токсичною, оскільки це шкідливо. Я замовила Бельгію.',
    ],
    [
      'title' => 'Анатолій А.',
      'stars' => 4,
      'date' => '21 Ноября 2024',
      'text' => 'Купила натяжну стелю для своєї кухні, і результат перевершив очікування. 
Виглядає чудово, легка у догляді та водоустойчива. 
Зараз моє улюблене місце вдома. 
Дякую за такий відмінний продукт!',
    ],
    [
      'title' => 'Ольга С.',
      'stars' => 5,
      'date' => '5 Декабря 2024',
      'text' => 'Дуже задоволений покупкою натяжної стелі! Вона змінила вигляд нашої кімнати радикально. 
Монтаж пройшов швидко і без проблем, а якість матеріалу вражає. 
Рекомендую всім, хто хоче освіжити свій інтер’єр!',
    ],
    [
      'title' => 'Ольга С.',
      'stars' => 5,
      'date' => '17 Октября 2024',
      'text' => 'Вибираючи компанію, яка встановлюватиме натяжні стелі, я насамперед звертала увагу на якість товару. Як відомо, зараз більшість компаній на ринку продають китайське полотно. У мене маленька дитина, мені важливо, щоб стеля не була токсичною, оскільки це шкідливо. Я замовила Бельгію.',
    ],
    [
      'title' => 'Анатолій А.',
      'stars' => 5,
      'date' => '21 Ноября 2024',
      'text' => 'Купила натяжну стелю для своєї кухні, і результат перевершив очікування. 
Виглядає чудово, легка у догляді та водоустойчива. 
Зараз моє улюблене місце вдома. 
Дякую за такий відмінний продукт!',
    ],
    [
      'title' => 'Ольга С.',
      'stars' => 4,
      'date' => '5 Декабря 2024',
      'text' => 'Дуже задоволений покупкою натяжної стелі! Вона змінила вигляд нашої кімнати радикально. 
Монтаж пройшов швидко і без проблем, а якість матеріалу вражає. 
Рекомендую всім, хто хоче освіжити свій інтер’єр!',
    ],
  ];

?>

<section class="reviews">
  <div class="container reviews__wrap">

    <div class="reviews__top">
      <h2>
        <?= get_field('reviews_title') ? the_field('reviews_title') : 'Отзывы с google карт' ?>
      </h2>

      <div class="reviews__description section-description">
        <?= get_field('reviews_description') ? the_field('reviews_description') : 'Всі відгуки залишені реальними людьми. У цьому ви можете легко переконатися, зв’язавшись з ними по контактах у соціальних мережах.' ?>
      </div>
    </div>

    <div class="reviews__center">
      <ul class="reviews__list">
        <?php if (have_rows('reviews_list')) :
          while ( have_rows('reviews_list')) : the_row(); ?>
            <li class="item">
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__date"><?= get_sub_field('item_date') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $reviews as $key => $item ) : ?>
            <li class="item">
              <div class="item__title">
                <?= $item['title'] ?>
                <span class='item__stars item__stars--<?= $item['stars'] ?>'></span>
              </div>
              <div class="item__date"><?= $item['date'] ?></div>
              <div class="item__text"><?= $item['text'] ?></div>
            </li>
          <?php endforeach; ?>

        <?php endif; ?>
        
      </ul>

    </div>
    <div id="reviewsShowmore" class="reviews__showmore"><?= get_field('reviews_showmore') ? the_field('reviews_showmore') : 'Загрузить еще' ?></div>

  </div>
</section>