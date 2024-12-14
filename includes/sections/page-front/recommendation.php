<section class="recommendation">
  <div class="container recommendation__wrap">

    <h5>
      <?= get_field('recommendation_title') ? the_field('recommendation_title') : 'Наш подход ценят заказчики и партнёры' ?>
    </h5>

    <div class="recommendation__center">
      <div class="recommendation__description">
        <?= get_field('recommendation_description') ? the_field('recommendation_description') : 'Принцип компании — детальная проработка проекта до старта работ. Проектирование позволяет быстро и качественно устанавливать натяжные потолки и освещение любой сложности.' ?>
      </div>
      <a 
        href="#"
        rel="nofollow" id="headerCalculateButtonMob"
        class="button--main">
        Бесплатный замер
      </a>
    </div>

    <div class="recommendation__reviews">
      <div class="recommendation__reviews--title">Stelio рекомендуют</div>
      <div class="recommendation__reviews--top">
        <div class="recommendation__reviews--center">
          <span class="recommendation__reviews--rating"><strong>4.7</strong>/5</span>
          <span class="recommendation__reviews--text">27 отывов</span>
        </div>
      </div>
      <a class="recommendation__reviews--maps" href="<?= get_field('recommendation_href') ? the_field('recommendation_href') : '#' ?>"><?= get_field('recommendation_link_text') ? the_field('recommendation_link_text') : 'google maps рейтинг' ?></a>
    </div>

  </div>
</section>