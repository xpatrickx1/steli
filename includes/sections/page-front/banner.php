<section class="banner">
    <div class="banner__wrap">
      <div class="banner__left">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= bloginfo('template_url') . '/images/page-front/banner.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
      </div>
      
      <div class="banner__right">
        <a 
          href="<?= get_field('banner_href') ? the_field('banner_href') : '#' ?>"
          data-hover="<?= get_field('banner_btn') ? the_field('banner_btn') : 'Оформить оплату частями' ?>"
          rel="nofollow" id="orderBanner"
          class="button--main">
          <span><?= get_field('banner_btn') ? the_field('banner_btn') : 'Оформить оплату частями' ?></span> 
        </a>

        <div class="banner__text">
          <?= get_field('banner_title') ? the_field('banner_title') : 'Рассрочка до 8 платежей от Монобанка под 0%' ?>
        </div>
      </div>
    </div>
  </div>
</section>