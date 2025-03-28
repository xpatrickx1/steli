<section class="top-screen">
  <div class="container top-screen__wrap">

    <div class="top-screen--left">
      <h2>
      Payment <br/>
        <div class="img-group">
        <div class="img">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= bloginfo('template_url') . '/images/icons/bank.svg' ?>"
          class="lazy"
          width="1"
          height="1"
        /></div>
        <div class="img">
        <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= bloginfo('template_url') . '/images/icons/backet.png' ?>"
          class="lazy"
          width="1"
          height="1"
        /></div>
      </div> solutions to boost business growth
      </h2>

      <div class="top-screen__description section-subtitle">
        <?= get_field('top_screen_description') ? the_field('top_screen_description') : 'Everything e-merchants and payment service providers need: accept online payments, support multiple currencies, and ensure seamless checkouts & top-tier security.' ?>
      </div>


      <div class="top-screen__actions">
        <a 
          href="/prices/"
          rel="nofollow" 
          class="button--main">
          <?php if (get_bloginfo("language") == 'en') {
                echo 'Become a client' ;
              } else {
                echo 'Become a client';
              }; ?>
              <span class="button-icon"></span>
        </a>

        <a 
          href="/prices/"
          rel="nofollow" 
          class="button--second">
          <?php if (get_bloginfo("language") == 'en') {
                echo 'Contact us' ;
              } else {
                echo 'Contact us';
              }; ?>
        </a>
      </div>
      
    </div>
    
    <div class="top-screen--right">
      <img 
          src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
          data-src="<?= bloginfo('template_url') . '/images/first-screen/top-screen-img.png' ?>"
          class="lazy"
          width="1"
          height="1"
        />
    </div>
  </div>
</section>