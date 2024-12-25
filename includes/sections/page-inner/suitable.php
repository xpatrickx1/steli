<?php

  $suitable = [
    [
      'title' => 'Рельефная отделка',
      'text' => 'Фактурная стена, например: декоративный камень  «утопает» в теневом зазоре. Но правильная геометрия потолка сохраняется ровными линиями теневого профиля.',
    ],
    [
      'title' => 'Неровные стены',
      'text' => 'Погрешности компенсируются усиленным багетом. Сохраняется ровная конструкция потолка, а неровности нивелируются теневым зазором.',
    ],
    [
      'title' => 'Хлипкие стены',
      'text' => 'Используем профиль для потолочного монтажа, когда  стены выполнены из пеноблоков, гипсокартона или облицованы твёрдым керамогранитом.',
    ],
  ];

?>

<section id="suitable" class="suitable">
  <div class="container suitable__wrap">

    <div class="suitable__top">
      <h2>
        <?= get_field('suitable_title') ? the_field('suitable_title') : 'Подходит для монтажа в любых условиях' ?>
      </h2>

      <div class="suitable__description section-description">
        <?= get_field('suitable_description') ? the_field('suitable_description') : 'Отправьте ваш проект и требования по материалам. Мы посчитаем, составим предложение и перезвоним для консультации по смете.' ?>
      </div>
    

      <ul class="suitable__list">
        <?php if (have_rows('suitable_list')) :
          while ( have_rows('suitable_list')) : the_row(); ?>
            <li class="item"><?= get_sub_field('item_title') ?></li>
            <li class="item"><?= get_sub_field('item_text') ?></li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $suitable as $key => $item ) : ?>
            <li class="item">
              <div class="item__title">
                <?= $item['title'] ?>
              </div>
              <div class="item__text">
                <?= $item['text'] ?>
              </div>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>

    <div class="suitable__bottom">
      <?php if (have_rows('suitable_bottom_text')) :
        while ( have_rows('suitable_bottom_text')) : the_row(); ?>
          <p><?= get_sub_field('suitable_bottom_text') ?></p>
        <?php endwhile; ?>
      <?php else : ?>
        <p>При работе с теневыми потолками есть один момент, который требует аккуратности и опыта. На углах профиль запиливают. Когда профиль огибает угол стены, из-за наклона «полки» образуется острый клин, который может порвать полотно. </p>
        <p>Мы устанавливаем теневые потолки с момента появления технологии. Новые подходы к установке или сложные решения мы сначала оттачиваем на стендах в учебном центре, и только потом уже реализовываем на объектах.</p>
        <p>Поэтому наши мастера склеивают места запила двухкомпонентным клеем, а затем шлифуют место соединения.</p>
      <?php endif; ?>
    </div>

  </div>
</section>