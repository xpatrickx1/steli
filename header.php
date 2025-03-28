<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('name') . ' | ' . wp_title(); ?></title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <?php wp_head(); ?>
</head>

<?php include(locate_template('main-vars.php', true)); ?>

<body>

<header class="header">
    
    <div class="container">
      <div class="header--bottom">
        <div class="header--bottom-left">
          <?php if (function_exists ('wpm_language_switcher')) wpm_language_switcher (); ?>

          <a 
            href="/about/"
            rel="nofollow" id="headerAbout"
            class="button">
            <?php if (get_bloginfo("language") == 'ru') {
                echo 'About the bank' ;
              } else {
                echo 'About the bank';
              }; 
            ?>
          </a>
        </div>

        <a href="<?= get_bloginfo("language") == 'ru' ? '/ru/' : '/'?>"
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
            <img
              src="<?php bloginfo('template_url'); ?>/images/loader.gif"
              data-src="<?= bloginfo('template_url') . '/images/icons/header-logo.svg' ?>" class="lazy"
              alt="Back to homepage logo link"
              class="lazy"
              width="74px"
              height="78px">
          </div>
        </a>

        <div class="header--bottom-right">
          <a 
            href="/prices/"
            rel="nofollow" id="headerCallbackPopup"
            class="button--bank">
            <?php if (get_bloginfo("language") == 'ru') {
                  echo 'Internet bank' ;
                } else {
                  echo 'Internet bank';
                }; ?>
          </a>

          <ul class="header__navigation navigation">
            <?php if (get_bloginfo("language") == 'ru') { 
              $nav_args = array(
                'theme_location' => 'header_menu_ru',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            } else {
              $nav_args = array(
                'theme_location' => 'header_menu',
                'container' => '',
                'items_wrap' => '%3$s',
              );
              wp_nav_menu($nav_args);
            }; ?>
          </ul>

          <div class="header__hamburger-wrp">
            <span>Menu</span>
            <div class="header__hamburger js-hamburger">
              <div class="hamburger-line1"></div>
              <div class="hamburger-line2"></div>
              <div class="hamburger-line3"></div>
            </div>
        </div>

        </div>
      </div>
    </div>
</header>

<main id="main" class="main">