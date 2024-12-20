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
    
      <div class="top-screen--center">
        <div class="top-screen__address">
          <?= get_field('topscreen_address') ? the_field('topscreen_address') : 'Приезжайте в гости на кофе в центральный шоурум на ул. Б.Хмельницкого 33/34, офиc 9' ?>
        </div> 
        <div class="top-screen__phone">
          <?= get_field('topscreen_phone') ? the_field('topscreen_phone') : '+38 063 654 63 85' ?>
        </div>
        <div class="top-screen__mail">
          <?= get_field('topscreen_phone') ? the_field('offices_title') : 'hi@stelio.com.ua' ?>
        </div>
      </div>

      <div class="top-screen--right">
        <div class="top-screen__work-title">
          <?= get_field('topscreen_worktitle') ? the_field('topscreen_worktitle') : 'Режим работы шоурума и отдела продаж:' ?>
        </div>
        <ul class="top-screen__work-time">
          <li>
            <?= get_field('topscreen_worktitle') ? the_field('topscreen_worktitle') : 'С понедельника по субботу: с <span>9:00</span> до <span>19:00</span>' ?>
          </li>
          <li>
            <?= get_field('topscreen_worktitle') ? the_field('topscreen_worktitle') : 'Воскресенье: офис — по согласованию.' ?>
          </li>
        </ul>
      </div>
    </div>

    <div class="top-screen__images">
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= bloginfo('template_url') . '/images/page-contacts/contacts1.png' ?>"
        class="lazy"
        width="1px"
        height="1px"
      />
      <img 
        src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
        data-src="<?= bloginfo('template_url') . '/images/page-contacts/contacts2.png' ?>"
        class="lazy"
        width="1px"
        height="1px"
      />
    </div>
      
    
  </div>
</section>
