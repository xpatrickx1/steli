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

<section class="calculator">
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
      <div id="parameters"></div>
      <div class="result">
        <div class="calc__wrong wrong">
          <div class="wrong__title">Недостоверный расчёт по интернету</div>
          <div class="wrong__price">~17000 ₴</div>  
          <div class="wrong__desc">Пример заниженного расчёта стоимости на других онлайн-калькуляторах. Такая низкая итоговая сумма означает:</div>  
          <div class="wrong__cause">Цена за материал и работу, но без профиля по периметру. Или эконом плёнка и пластиковый багет.</div>  
          <div class="wrong__cause">Или эконом плёнка и пластиковый багет.</div>  
        </div>
        <div class="calc__correct correct">
          <div class="correct__title">Наша предварительная цена</div>
          <div class="correct__price" >~ <span id="result-price"></span> грн</div>  
          <div class="correct__desc">Стоимость включает установку и материалы</div>  
          <ul class="correct__list">
            <li>Алюминиевый профиль</li>
            <li>Монтажные работы</li>
            <li>Установка светильников</li>
            <li>Гарантия на монтаж 3 года</li>
          </ul>  
          <button class="correct__btn">Бесплатный замер</button> 
        </div>
    </div>

  </div>
</section>