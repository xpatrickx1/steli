<?php

  $build = [
    [
      'title' => 'Principal',
      'subtitle' => 'members',
      'text' => 'Cooperation directly with Visa and Mastercard allows our clients to be more flexible in payment operations',
      'icon' => '#',
    ],
    [
      'title' => '16+',
      'subtitle' => 'years of experience',
      'text' => 'With 16 years of hands-on experience in e-commerce and fintech, we bring a wealth of practical knowledge to meet your needs',
      'icon' => '',
    ],
    [
      'title' => '€34.8 M',
      'subtitle' => 'capital & reserves',
      'text' => 'We maintain sufficient capital reserves to meet regulatory requirements and safeguard our clients’ assets',
      'icon' => '',
    ],
    [
      'title' => 'Associations',
      'subtitle' => 'members',
      'text' => 'We are participating in the Fintech Latvia Association, Finance Latvia Association, The Latvian Blockchain Association',
      'icon' => '',
    ],
    [
      'title' => 'EU bank',
      'subtitle' => 'fully licensed',
      'text' => 'We are committed to transparency and excellence and provide seamless banking experiences across the EU',
      'icon' => '',
    ],
    [
      'title' => '38.76 %',
      'subtitle' => 'capital adequacy',
      'text' => 'Our commitment to capital adequacy reflects our dedication to risk management and financial stability',
      'icon' => '',
    ],
  ];

?>

<section class="build" id="build">
  <div class="container build__wrap">

    <div class="pre-title">
    <?= get_field('build_title') ? the_field('build_title') : 'Why choose us' ?>
    </div>

    <h3>
      <?= get_field('build_title') ? the_field('build_title') : 'A better way <br/>to build products' ?>
    </h3>

    <div class="build__description section-subtitle">
      <?= get_field('build_description') ? the_field('build_description') : 'Launch, manage, scale and sell your product with licensed banking infrastructure' ?>
    </div>

    <div class="build__list build__slider">
      
      <?php foreach ( $build as $key => $item ) : ?>
        <div class="item" data-content="<?= $key; ?>">

          <div class="item__top">
            <h5><?= $item['title'] ?></h5>
            <div class="item__subtitle"><?= $item['subtitle'] ?></div>
          </div>

          <p class="section-subtitle"><?= $item['text'] ?></p>

          <div class="item__icon">
            <img 
              src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
              data-src="<?= bloginfo('template_url') . '/images/icons/build' . ($key + 1) . '.svg' ?>"
              class="lazy"
              width="1px"
              height="1px"
            />
          </div>

        </div>
      <?php endforeach; ?>
    </div>
    
  </div>
</section>