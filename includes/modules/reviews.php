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
      'title' => 'Сургій З.',
      'stars' => 5,
      'date' => '17 Вересня 2023',
      'text' => 'У компанії «Стелio» замовили натяжну стелю з точковими світильниками, люстрою та встановленням карниза. Майстер Антон виконав великий обсяг роботи якісно та акуратно. Дякуємо за професіоналізм, рекомендуємо!
Проте монтаж затримався на тиждень, що було трохи незручно. Просимо компанію звернути увагу на організацію термінів. (Серпень 2024 року)',
    ],
    [
      'title' => 'Антон Т.',
      'stars' => 5,
      'date' => '15 Грудня 2024',
      'text' => 'Огромная благодарность команде Stelio за реализацию сложного проекта потолка в квартире. Качество выполнения и подход — на высшем уровне! Фёдор, Павел и Николай, вы настоящие профессионалы, спасибо за отличную работу!',
    ],
    [
      'title' => 'Марина Р.',
      'stars' => 4,
      'date' => '7 Листопада 2023',
      'text' => 'Сподобалася робота замірника Дениса, швидко зробив, залишався на звязку з усіх питань. І монтажника Олега, акуратний і педантичний у роботі.',
    ],
  ];

?>

<section class="reviews">
  <div class="container reviews__wrap">

    <div class="reviews__top">
      <h2>
      <?php if ( get_field('reviews_title'))  { 
        echo get_field('reviews_title') ;
        } else { 
        if (get_bloginfo("language") == 'ru') {
          echo 'Отзывы с google карт' ;
        } else {
          echo 'Відгуки з google карт';
        } 
      }; ?>
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
              <div class="item__title">
                <?= get_sub_field('item_title') ?>
                <span class='item__stars item__stars--<?= get_sub_field('item_rating') ?>'></span>
              </div>
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
    <button id="reviewsShowmore" class="reviews__showmore button--second">
    <?php if ( get_field('reviews_showmore'))  { 
      echo get_field('reviews_showmore') ;
      } else { 
      if (get_bloginfo("language") == 'ru') {
        echo 'Загрузить еще' ;
      } else {
        echo 'Завантажити ще';
      } 
    }; ?>
  </button>
</section>