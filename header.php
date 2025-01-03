<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php bloginfo('name') . ' | ' . wp_title(); ?></title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <?php wp_head(); ?>
</head>

<?php include(locate_template('main-vars.php', true)); ?>

<body>

<header class="header">
    <div class="container">
      <div class="header--top">
        <div class='header__schedule'>
          Пн - Сб: c 9:00 до 19:00
        </div>

        <div class='header__autonom'>
          <?= get_bloginfo("language") == 'ru' ? 'Рабоаем автономно' : 'Працюємо автономно'?>
        </div>

        <div class="header--top-left">
          <?php if (function_exists ('wpm_language_switcher')) wpm_language_switcher (); ?>

          <div class='header__phone'>
            +38 063 654 63 85
          </div>
        </div>
        
      </div>
      <div class="header--bottom">
          <a href="/"
            class="header__logo" aria-label="Header logo"
          >
            <div class="logo__desktop">
                <img src="<?= bloginfo('template_url') . '/images/loader.gif' ?>"
                  data-src="<?= bloginfo('template_url') . '/images/icons/header-logo.svg' ?>" class="lazy"
                  alt="Back to homepage logo link"
                  width="200px"
                  height="41px"
                >
            </div>

            <div class="logo__mobile">
              <picture class="lazy">
                <source
                  data-srcset="<?= bloginfo('template_url') . '/images/icons/header-logo.png' ?>, <?= bloginfo('template_url') . '/images/icons/header-logo.png' ?> 2x">
                <img
                  src="<?php bloginfo('template_url'); ?>/images/loader.gif"
                  alt="Back to homepage logo link"
                  class="lazy"
                  width="74px"
                  height="78px">
              </picture>
            </div>
          </a>

          <ul class="header__navigation navigation">
            <?php if (has_nav_menu('header_menu')) :
              $nav_args = array(
                'theme_location' => 'header_menu',
                'container' => '',
                'items_wrap' => '%3$s',
                'walker' => new My_Walker_Nav_Menu(),
              );
              wp_nav_menu($nav_args);
            endif; ?>
          </ul>

          <a 
            href="#"
            rel="nofollow" id="headerCalculateButtonMob"
            class="button--second">
            Заказать звонок
          </a>

          <div class="header__hamburger js-hamburger">
            <div class="hamburger-line1"></div>
            <div class="hamburger-line2"></div>
            <div class="hamburger-line3"></div>
          </div>

      </div>

    </div>

</header>

<main id="main" class="main">