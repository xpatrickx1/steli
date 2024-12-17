<?php include 'faq-data.php' ?>

<section class="faq" id="faq">

    <div class="container">
        <h2><?= get_field('faq_title') ? the_field('faq_title') : 'Часто задаваемые вопросы' ?></h2>

        <div class="faq__wrap ">
          <div class="faq__accordion">
          <?php if (have_rows('faq_list')) :
            while ( have_rows('faq_list')) : the_row(); ?>
              <div class="faq__item">
                <div class="faq__title-wrap">
                  <h3><?= get_sub_field('item_title') ?></h3>
                  <span class="faq__question-icon"></span>
                </div>
                <div class="faq__description item-description" ><?= get_sub_field('item_description') ?></div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <?php foreach ( $faqData as $item ) : ?>
              <div class="faq__item">
                <div class="faq__title-wrap">
                  <h3><?= $item[ 'title' ] ?></h3>
                  <span class="faq__question-icon"></span>
                </div>
                <div class="faq__description item-description" ><?= $item[ 'description' ] ?></div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
          </div>
        </div>
    </div>
</section>

