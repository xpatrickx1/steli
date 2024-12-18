
<section id="certificates" class="certificates">
  <div class="container certificates__wrap">

    <div class="certificates__top">
      <h3>
        <?= get_field('certificates_title') ? the_field('certificates_title') : 'Сертификаты' ?>
      </h3>
    </div>

    <div class="certificates__list">
      <?php if (have_rows('certificates_list')) :
        while ( have_rows('certificates_list')) : the_row(); ?>
            <div class="item__img">
              <?php if(get_sub_field('item_img')['url']) : ?>
                <img 
                  src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= get_sub_field('item_img')['url'] ?>"
                  class="lazy"
                  width="1px"
                  height="1px"
                />
              <?php endif; ?>
            </div>
        <?php endwhile; ?>
      <?php else : ?>
          <div class="item__img">
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= bloginfo('template_url') . '/images/page-inner/certificates1.png' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= bloginfo('template_url') . '/images/page-inner/certificates2.png' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
          </div>
      <?php endif; ?>
    </ul>

  </div>
</section>