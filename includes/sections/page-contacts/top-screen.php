<section class="top-screen">
  <div class="container">
    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>"><?= get_bloginfo("language") == 'ru' ? 'Натяжные потолки в Киеве' : 'Натяжні стелі у Києві' ?></a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Контакти' ?></span>
    </div>
  </div>
  
  <div class="container ">
    <div class="top-screen__wrap">
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
            <?= get_field('topscreen_email') ? the_field('offices_title') : 'hi@stelio.com.ua' ?>
          </div>
        </div>

        <div class="top-screen--right">
          <div class="top-screen__work-title">
          <?php if ( get_field('topscreen_worktitle'))  { 
                echo get_field('topscreen_worktitle') ;
              } else { 
                if (get_bloginfo("language") == 'ru') {
                  echo 'Режим работы шоурума и отдела продаж:' ;
                } else {
                  echo 'Графік роботи шоуруму та відділу продажу:';
                } 
              }; ?>
          </div>
          <ul class="top-screen__work-time">
            <li>
              <?= get_field('topscreen_worktitle1') ? the_field('topscreen_worktitle1') : 'С понедельника по субботу: с <span>9:00</span> до <span>19:00</span>' ?>
            </li>
            <li>
              <?= get_field('topscreen_worktitle2') ? the_field('topscreen_worktitle2') : 'Воскресенье: офис — по согласованию.' ?>
            </li>
          </ul>
        </div>
      </div>

      <div class="top-screen__images">
        <div class="top-screen__img">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_field('team_top_1')['url'] ? get_field('team_top_1')['url'] : bloginfo('template_url') . '/images/page-contacts/contacts1.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
        </div>
        <div class="top-screen__img">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= get_field('team_top_2')['url'] ? get_field('team_top_2')['url'] : bloginfo('template_url') . '/images/page-contacts/contacts2.webp' ?>"
          class="lazy"
          width="1px"
          height="1px"
        />
        </div>
      </div>
        
    </div>
  </div>
</section>
