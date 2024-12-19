<section class="top-screen">
  <div class="container top-screen__wrap">

    <div class="top-screen--left">
      <h2>
        <?= get_field( 'page_title' ) ? the_field( 'page_title' ) : get_the_title() ?>
      </h2>
    </div>

    <div class="top-screen--right">
      <div class="top-screen__description">
        <?= get_field('top_screen_description') ? the_field('top_screen_description') : 'Компания «Стелио» профессионально занимается установкой натяжных потолков в Киеве.
Современные решения для наших интерьеров позволяют реализовывать нестандартные и сложные проекты с безупречной проработкой.' ?>
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
