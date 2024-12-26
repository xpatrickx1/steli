<section class="top-screen">
  <div class="container top-screen__wrap">

    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>">Натяжные потолки в Киеве</a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><a href="/catalog/"><?= get_bloginfo("language") == 'ru' ? 'Каталог' : 'Каталог' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Каталог потолков' ?></span>
    </div>
    
    <div class="top-screen__top">
      <div class="top-screen--left">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_sub_field('inner_top_1')['url'] ? get_sub_field('inner_top_1')['url'] : bloginfo('template_url') . '/images/page-inner/innerTop1.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
      
      <div class="top-screen--right">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_sub_field('inner_top_2')['url'] ? get_sub_field('inner_top_2')['url'] : bloginfo('template_url') . '/images/page-inner/innerTop2.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_sub_field('inner_top_3')['url'] ? get_sub_field('inner_top_3')['url'] : bloginfo('template_url') . '/images/page-inner/innerTop3.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
      
    </div>

    <div class="top-screen__bottom">
      <h2>
        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h2>
      <div class="top-screen__description">
        <?= get_field('top_screen_description_1') ? the_field('top_screen_description_1') : 'Теневое примыкание натяжного потолка создаёт визуальный эффект — между потолочной конструкцией и стеной пролегает глубокая тень. ' ?>
      </div>
      <div class="top-screen__description">
        <?= get_field('top_screen_description2') ? the_field('top_screen_description2') : 'Из-за этого кажется, что потолочная «плита» парит в воздухе, не соприкасаясь со стеной. Они хорошо смотрятся в современных и минималистичных интерьерах.' ?>
      </div>
    </div>

    <a 
      href="#"
      data-hover="<?= get_bloginfo("language") == 'ru' ? 'Бесплатный замер' : 'Безкоштовний замір' ?>"
      rel="nofollow" id="headerOrderBtn"
      class="button--main">
      <span><?= get_bloginfo("language") == 'ru' ? 'Бесплатный замер' : 'Безкоштовний замір'?></span>
    </a>

  </div>
</section>
