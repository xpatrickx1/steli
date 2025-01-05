<?php

  $options = [
    [
      'title' => 'Толщина',
      'text' => 'Каждый производитель выпускает пленки определенной толщины и величина эта колеблется от <strong>0,17</strong> до <strong>0,25 мм</strong>',
    ],
    [
      'title' => 'Влагостойкость',
      'text' => 'ПВХ потолки обладают антистатичным действием, не впитывают воду и запахи, специальная пропитка препятствует размножению болезнетворных микробов и грибков',
    ],
    [
      'title' => 'Лишний Вес',
      'text' => 'Зависит от толщины материала. Примерно от <strong>180 до 300 гр на м2</strong>',
    ],
    [
      'title' => 'Температурный режим',
      'text' => 'Подходят для использования в помещениях с температурой от <strong>3 до 45 С</strong>',
    ],
    [
      'title' => 'Прочность',
      'text' => 'Пленки средней толщины выдерживают нагрузку до <strong>150 кг на м2</strong> Класс пожаробезопасности — самый высокий уровень безопасности имеют пленки класса <strong>М-1</strong>',
    ],
  
  ];

?>

<section id="options" class="options">
  <div class="container options__wrap">

    <div class="options__top">
      <h2>
        <?= get_field('options_title') ? the_field('options_title') : 'О матовых потолках' ?>
      </h2>

      <div class="options__description">
        <?= get_field('options_description') ? the_field('options_description') : '<p>Матовый натяжной потолок — универсальный вид полотна. Внешне он напоминает хорошо оштукатуренную и окрашенную поверхность. Это лучший вариант для консерваторов, которые предпочитают классическую отделку в интерьере. На таком потолке не будет отвлекающих бликов и разводов. </p><p>Матовый подвесной потолок удобно использовать для помещений с большой площадью — места стыковки разных полотен на нем незаметны. А также в тех комнатах, где планируется сложная композиция из разных материалов, которые должны органично сочетаться друг с другом.</p>' ?>
      </div>
    </div>

    <div class="options__list-title">
      Характеристики
    </div>
    <ul class="options__list">
      <?php if (have_rows('options_list')) :
        while ( have_rows('options_list')) : the_row(); ?>
          <li class="item">
          <div class="item__left">
            <div class="item__title"><?= get_sub_field('item_title') ?></div>
            <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </div>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $options as $key => $item ) : ?>
          <li class="item">
            <div class="item__left">
              <div class="item__title"><?= $item['title'] ?></div>
              <div class="item__text"><?= $item['text'] ?></div>
            </div>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>


    <ul class="options__advantages advantages">
      <?php if (have_rows('advantages_list')) :
        while ( have_rows('advantages_list')) : the_row(); ?>
          <li class="item item__green">
            <div class="item__title"><?= get_field('item_title') ? the_field('item_title') : 'Плюсы матовых полотен' ?></div>
            <ul class="item__list">
              <?php if (have_rows('item_list')) :
                while ( have_rows('item_list')) : the_row(); ?>
                  <div class="item__text">
                    <?= get_sub_field('item_text'); ?>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </ul>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
          <li class="item item__green">
            <div class="item__title">Плюсы матовых полотен</div>
            <ul class="item__list">
              <li>Отсутствие бликов и отражения предметов.</li>
              <li>Сочетается с разными материалами и светильниками.</li>
              <li>Хороший фон для фотопечати.</li>
              <li>Подходит для всех помещений по стилю.</li>
              <li>Не выгорает со временем.</li>
              <li>Быстрый монтаж.</li>
              <li>Неприхотлив в обслуживании — легко моется губкой 
              и мыльным раствором.</li>
              <li>Не заметны швы.</li>
            </ul>
          </li>
          <li class="item  item__gray">
            <div class="item__title">Минусы</div>
            <ul class="item__list">
              <li>Небольшой выбор расцветок</li>
              <li>Матовая ПВХ пленка не подходит для помещений с минусовой температурой — может лопнуть. </li>
              <li>Выход: использовать натяжные потолки из ткани.</li>
            </ul>
          </li>

      <?php endif; ?>
    </ul>

  </div>
</section>