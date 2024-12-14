</main><?php // main-container end ?>

<?php include(locate_template('main-vars.php', true)); ?>

<footer class="footer">
  <div class="container">

    <div class="footer__top">
      <a href="/"
        class="footer__logo" 
        aria-label="Footer logo">
        <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" data-src="<?= bloginfo('template_url') . '/images/icons/footer-logo.png' ?>" class="lazy" width="170px" height="57px" alt="footer site logo">
      </a>
      <div class="footer__desc">
        <?= get_field('footer_desc') ? the_field('footer_desc') : 'Современные натяжные потолки и освещение в Киеве' ?>
      </div>

      <div class="footer__phone">
        <?= get_field('footer_phone') ? the_field('footer_phone') : '+38 063 654 63 85' ?>
      </div>
      <div class="footer__orders">
        <?= get_field('footer_orders') ? the_field('footer_orders') : 'Прием заявок на сайте происходит круглосуточно' ?>
      </div>
      <button>вам перезвонить ?</button>
    </div>

    

    <div class="footer__main">
      <div class="footer__menu">
        <ul class="footer__menu footer__menu--post text--capitalize">
          <?php if (has_nav_menu('footer_menu_post')) :
            $nav_args = array(
              'theme_location' => 'footer_menu_post',
              'container' => '',
              'items_wrap' => '%3$s',
            );
            wp_nav_menu($nav_args);
          endif; ?>
        </ul>
      </div>

    </div>

    <div class="footer__bottom">
      Работаем по Киеву и Киевской области
    </div>

  </div>
</footer>

<?php wp_footer(); ?>

<div data-crm-widget="disclaimer" data-params='{"theme":"dark"}'></div>

</body>
</html>
