<?php

  $calculator = [
    [
      'title' => 'Тканевые потолки',
      'text' => 'Тканевый натяжной потолок из полиэстера с акриловой пропиткой. Экологичный и гипоаллергенный материал с оригинальной фактурой. Устанавливаются без нагревания.',
      'link' => '#',
    ],
    [
      'title' => 'Матовый потолок',
      'text' => 'Внешний вид матовой фактуры натяжного потолка похож на оштукатуренную поверхность или потолок из гипсокартона. Универсальное решение для стильных интерьеров, без блика и отражений.',
      'link' => '#',
    ]
  ];

?>

<section id="calculator" class="calculator">
  <div class="container calculator__wrap">

    <div class="calculator__top">
      <h2>
        <?= get_field('calculator_title') ? the_field('calculator_title') : 'Калькулятор натяжного потолка' ?>
      </h2>

      <div class="calculator__description section-description">
        <?= get_field('calculator_description') ? the_field('calculator_description') : 'Рассчитайте стоимость натяжного потолка с монтажом по своим размерам.' ?>
      </div>
    </div>

    <div class="calc">
      <div id="parameters">
        <div class="input-group">
          <label for="square"><?= get_bloginfo("language") == 'ru' ? 'Площадь, м2' : 'Площа, м2'?></label>
          <input type="number" id="square" value="<?= get_field('calculator_square_value') ? the_field('calculator_square_value') : 17 ?>">
          <div class="calc__buttons">
            <button class="decrement">-</button>
            <button class="increment">+</button>
          </div>
        </div>
        <div class="input-group">
          <label for="angles"><?= get_bloginfo("language") == 'ru' ? 'Количество углов' : 'Кількість кутів'?></label>
          <input type="number" id="angles" value="4">
          <div class="calc__buttons">
            <button class="decrement">-</button>
            <button class="increment">+</button>
          </div>
        </div>
        <div class="input-group">
          <label for="lightingPoints"><?= get_bloginfo("language") == 'ru' ? 'Светильники' : 'Світильники'?></label>
          <input type="number" id="lightingPoints" value="0">
          <div class="calc__buttons">
            <button class="decrement">-</button>
            <button class="increment">+</button>
          </div>
        </div>
        <div class="input-group">
          <label for="chandeliers"><?= get_bloginfo("language") == 'ru' ? 'Люстры' : 'Люстри'?></label>
          <input type="number" id="chandeliers" value="0">
          <div class="calc__buttons">
            <button class="decrement">-</button>
            <button class="increment">+</button>
          </div>
        </div>
        <div class="input-group">
          <label for="rod"><?= get_bloginfo("language") == 'ru' ? 'Трубы' : 'Труби'?></label>
          <input type="number" id="pipes" value="0">
          <div class="calc__buttons">
            <button class="decrement">-</button>
            <button class="increment">+</button>
          </div>
        </div>
      </div>
      <div class="result">
        <div class="calc__wrong wrong">
          <div class="wrong__title">
            <?php if ( get_field('calculator_wrong_title'))  { 
              echo get_field('calculator_wrong_title') ;
             } else { 
              if (get_bloginfo("language") == 'ru') {
                echo 'Недостоверный расчёт по интернету' ;
              } else {
                echo 'Недостовірний розрахунок по інтернету';
              } 
            }; ?>
          </div>
          <div class="wrong__price">~ <span id="wrongPrice"></span> ₴</div>  
          <div class="wrong__desc">
            <?php if ( get_field('calculator_wrong_subtitle'))  { 
               echo get_field('calculator_wrong_subtitle') ;
              } else { 
              if (get_bloginfo("language") == 'ru') {
                echo 'Пример заниженного расчёта стоимости на других онлайн-калькуляторах. Такая низкая итоговая сумма означает:';
              } else {
                echo 'Приклад заниженого розрахунку вартості інших онлайн-калькуляторах. Така низька підсумкова сума означає:';
              } 
            }; ?>
            <?= get_field('calculator_wrong_subtitle') ? the_field('calculator_wrong_title') : 'Пример заниженного расчёта стоимости на других онлайн-калькуляторах. Такая низкая итоговая сумма означает:' ?></div>  
            <ul class="wrong__list">
              <?php if (have_rows('calculator_wrong_list')) :
                while ( have_rows('calculator_wrong_list')) : the_row(); ?>
                  <li class="wrong__cause">
                    <?= get_sub_field('wrong_text'); ?>
                  </li>
                <?php endwhile; ?>
              <?php else : ?>
                <li class="wrong__cause">Цена за материал и работу, но без профиля по периметру. Или эконом плёнка и пластиковый багет.</li>  
                <li class="wrong__cause">Или эконом плёнка и пластиковый багет.</li>  
              <?php endif; ?>
            </ul>
        </div>
        <div class="calc__correct correct">
          <div class="correct__title">
            <?php if ( get_field('calculator_correct_title'))  { 
               echo get_field('calculator_correct_title') ;
              } else { 
                if (get_bloginfo("language") == 'ru') {
                  echo 'Наша предварительная цена' ;
                } else {
                  echo 'Наша попередня ціна';
                } 
              }; ?>
            </div>
          <div class="correct__price" ><span id="resultPriceFrom"></span> - <span id="resultPriceTo"></span> ₴</div>  
          <div class="correct__desc">
          <?php if ( get_field('calculator_correct_subtitle'))  { 
               echo get_field('calculator_correct_subtitle') ;
              } else { 
                if (get_bloginfo("language") == 'ru') {
                  echo 'Стоимость включает установку и материалы' ;
                } else {
                  echo 'Вартість включає встановлення та матеріали';
                } 
              }; ?></div>  
          <ul class="correct__list">
              <?php if (have_rows('calculator_correct_list')) :
                while ( have_rows('calculator_correct_list')) : the_row(); ?>
                  <li>
                    <?= get_sub_field('correct_text'); ?>
                  </li>
                <?php endwhile; ?>
              <?php else : ?>
                <li>Алюминиевый профиль</li>
                <li>Монтажные работы</li>
                <li>Установка светильников</li>
                <li>Гарантия на монтаж 3 года</li>
              <?php endif; ?>
            
          </ul>  
          <a href="<?= get_field('calculator_brn_href') ? the_field('calculator_brn_href') : '#' ?>" class="correct__btn">
          <?php if ( get_field('calculator_brn_name'))  { 
               echo get_field('calculator_brn_name') ;
              } else { 
                if (get_bloginfo("language") == 'ru') {
                  echo 'Безкоштовний замір' ;
                } else {
                  echo 'Бесплатный замер';
                } 
              }; ?>
              </a> 
        </div>
    </div>

  </div>
</section>