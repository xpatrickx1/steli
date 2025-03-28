<?php

  $payment = [
    [
      'title' => 'Payment methods for everyone',
      'text' => 'We offer a range of secure and convenient payment methods to meet your needs',
    ],
    [
      'title' => 'Seamless global payment solutions',
      'text' => 'We offer a range of secure and convenient payment methods to meet your needs',
      'list' => [
        'Customized payment form', 'Advanced fraud prevention tools', 'Dedicated personal manager', 'Card-based payouts', 'Recurring payments', 'Dynamical descriptors'
      ],
    ]
  ];

    if (have_rows('payments_list')):

      $payment = [];
      
        while ( have_rows('payments_list')) : the_row();
            $payment[$counter]['title'] = get_sub_field('item_title');
            $payment[$counter]['text'] = get_sub_field('item_text');
            $payment[$counter]['link'] = get_sub_field('item_link');
            $counter++;
        endwhile;
    endif;

?>

<section class="payment">
  <div class="container payment__wrap">

  <div class="pre-title">
    Powering your payment success
  </div>

  <h3>
    <?= get_field('payment_title') ? the_field('payment_title') : 'Designed for E-merchants <br/> & payment service providers' ?>
  </h3>

  <div class="payment__description section-subtitle">
    <?= get_field('payment_description') ? the_field('payment_description') : 'Connect all types of payment methods and easily integrate modules from popular eCommerce platforms' ?>
  </div>

  <div class="tabs__container">
    <div class="tabs">
      <button class="tab active" data-tab="1">E-merchants</button>
      <button class="tab" data-tab="2">Payment service providers</button>
    </div>

    <div class="payment__content">
      <div class="content__wrapper">
        <?php if (have_rows('payments_list')) :
            while ( have_rows('payment_list')) : the_row(); ?>
              <div class="content <?= get_row_index() == 1 ? 'active' : '' ?>" data-content="<?=get_row_index(); ?>">
                <div class="text__block">
                  <div class="item__icon item__icon--<?= get_row_index() ?>">
                    <img 
                      src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                      data-src="<?= bloginfo('template_url') . '/images/icons/payment' . get_row_index() . '.svg' ?>"
                      class="lazy"
                      width="1px"
                      height="1px"
                    />
                  </div>
                  <h4><?= get_sub_field('item_title') ?></h4>
                  <p class="section-subtitle"><?= get_sub_field('item_text') ?></p>

                  <?php if (have_rows('content_list')) : ?>
                    <ul class="content__list">
                      <?php while ( have_rows('content_list')) : the_row(); ?>
                        <li class="item"><?= get_sub_field('item_title') ?></li>
                      <?php endwhile; ?>
                    </ul>
                  <?php endif; ?>

                  <div class="content__actions">
                    <a 
                      href="/prices/"
                      rel="nofollow"
                      class="button--main">
                      <?php if (get_bloginfo("language") == 'en') {
                            echo 'Get in touch' ;
                          } else {
                            echo 'Get in touch';
                          }; ?>
                          <span class="button-icon"></span>
                    </a>

                    <?php if ( get_row_index() == 1 ) : ?>
                      <a 
                        href="/prices/"
                        rel="nofollow"
                        class="button--second">
                        <?php if (get_bloginfo("language") == 'en') {
                              echo 'Google Pay integration' ;
                            } else {
                              echo 'Google Pay integration';
                            }; ?>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
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
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <?php foreach ( $payment as $key => $item ) : ?>
              <div class="content <?= $key == 0 ? 'active' : '' ?>" data-content="<?= $key; ?>">
                <div class="text__block">
                  <div class="item__icon item__icon--<?= ($key + 1) ?>">
                    <img 
                      src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                      data-src="<?= bloginfo('template_url') . '/images/icons/payment' . ($key + 1) . '.svg' ?>"
                      class="lazy"
                      width="1px"
                      height="1px"
                    />
                  </div>
                  <h4><?= $item['title'] ?></h4>
                  <p class="section-subtitle"><?= $item['text'] ?></p>

                  <?php if ( $item['list'] ) : ?>
                    <ul class="content__list">
                      <?php foreach ( $item['list'] as $keyList => $listItem ) : ?>
                        <li class="item"><?= $listItem ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>

                  <div class="content__actions">
                    <a 
                      href="/prices/"
                      rel="nofollow" id="headerCallbackPopup"
                      class="button--main">
                      <?php if (get_bloginfo("language") == 'en') {
                            echo 'Get in touch' ;
                          } else {
                            echo 'Get in touch';
                          }; ?>
                          <span class="button-icon"></span>
                    </a>

                    <?php if ( $key == 0 ) : ?>
                      <a 
                        href="/prices/"
                        rel="nofollow" id="headerCallbackPopup"
                        class="button--second">
                        <?php if (get_bloginfo("language") == 'en') {
                              echo 'Google Pay integration' ;
                            } else {
                              echo 'Google Pay integration';
                            }; ?>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>

                <div class="item__img">
                  <img 
                    src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                  data-src="<?= bloginfo('template_url') . '/images/page-front/payment' . ($key + 1) . '.png' ?>"
                    class="lazy"
                    width="1px"
                    height="1px"
                  />
                </div>
              </div>
            <?php endforeach; ?>

          <?php endif; ?>

      </div>

      <div class="payment__scrollbar scroll">
        <span span class="scroll__number scroll__number--top">01</span>
          <div class="scroll__line">
            <div class="scroll__progress"></div>
          </div>
        <span class="scroll__number scroll__number--bottom">02</span>
      </div>
    </div>
  </div>

    
  </div>
</section>