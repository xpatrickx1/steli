<?php

  $order = [
    [
      'text' => 'Мы — профессиональная монтажная компания по натяжным потолкам в Киеве. Специализируемся на установке современных систем: бесщелевые, теневые, многоуровневые. ',
    ],
    [
      'text' => 'Обновляем интерьеры с помощью минималистичных потолков с функциональным освещением. Скрываем инженерные коммуникации, комбинируем конструкции и виды примыканий.',
    ],
  ];

?>

<section class="top-screen">
  <div class="container">
    <div class="top-screen__breadcrumbs">
      <span><a href="<?= home_url(); ?>">Home</a></span>
      <span> > </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Inner' ?></span>
    </div>
  </div>
  
  <div class="container top-screen__wrap">

    <div class="top-screen--top">
      <h2>
        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h2>
    
      <ul class="top-screen__list">
        <?php if (have_rows('top_list')) :
          while ( have_rows('top_list')) : the_row(); ?>
            <li class="item"><?= get_sub_field('item_text') ?></li>
          <?php endwhile; ?>
        <?php else : ?>
          <?php foreach ( $order as $key => $item ) : ?>
            <li class="item"><?= $item['text'] ?> </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </div>

    <div class="top-screen--bottom">
      <div class="top-screen__images--top">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= bloginfo('template_url') . '/images/page-team/team1.png' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
      <div class="top-screen__images--bottom">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= bloginfo('template_url') . '/images/page-team/team2.png' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= bloginfo('template_url') . '/images/page-team/team3.png' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= bloginfo('template_url') . '/images/page-team/team4.png' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
      
    </div>
  </div>
</section>
