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

    <figure class="top-screen__imgs">
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= bloginfo('template_url') . '/images/first-screen/natyzhnoy-potolok-s-podsvetkoy.jpg' ?>"
        class="lazy"
        width="1px"
        height="1px"
      />
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= bloginfo('template_url') . '/images/first-screen/natyzhnoy-potolok-s-trekami.jpg' ?>"
        class="lazy"
        width="1px"
        height="1px"
      />
    </figure>


  </div>
</section>
