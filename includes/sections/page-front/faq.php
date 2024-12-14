<?php include 'faq-data.php' ?>

<section class="faq" id="faq">

    <div class="container">
        <h2>Frequently asked questions</h2>

        <div class="faq__wrap ">
          <div class="faq__content content">
            <?php foreach ( $faqData as $item ) : ?>
              <div class="faq__accordion">
                <?php foreach ( $item['content'] as $key => $content ) : ?>
                  <div class="faq__item">
                    <div class="faq__title-wrap">
                      <h3><?= $content[ 'title' ] ?></h3>
                      <span class="faq__question-icon"></span>
                    </div>
                    <div class="faq__description item-description" ><?= $content[ 'description' ] ?></div>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
    </div>
</section>

