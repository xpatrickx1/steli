<section class="top-screen">
  <div class="container top-screen__wrap">

    <div class="top-screen--left">
      <h1>
        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h1>
    </div>

    <div class="top-screen--right">
      <div class="top-screen__description">
        <?= get_field('hp_description') ? the_field('hp_description') : 'Stelio' ?>
      </div>
    </div>

    <div class="top-screen__img">
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= bloginfo('template_url') . '/images/first-screen/top-screen-img.png' ?>"
        class="lazy"
        width="1px"
        height="1px"
      />
    </div>


  </div>
</section>
