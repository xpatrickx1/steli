<?php

  $catalogTop = [
    [
      'title' => 'Многоуровневые',
      'text' => 'Потолки с переходом уровней из металлических конструкций. Для сметы требуется выезд технол...',
      'link' => '#',
    ],
    [
      'title' => 'Звездное небо',
      'text' => 'Натяжной потолок со звёздным небом это инсталляция из мерцающих звёзд с помощью оптоволоко...',
      'link' => '#',
    ],
    [
      'title' => 'С фотопечатью',
      'text' => 'Качественная UV фотопечать на натяжном потолке шириной до 5,5 метров. Нанести изображения ...',
      'link' => '#',
    ]
  ];

  $catalogBrand = [
    [
      'title' => 'Teqtum',
      'text' => 'Противопожарные натяжные потолки TEQTUM KM2 отвечает требованиям украинского законодательства...',
      'link' => '#',
    ],
    [
      'title' => 'MSD',
      'text' => 'Потолки MSD (МСД) — мировой лидер среди производителей пленки для натяжных потолков.',
      'link' => '#',
    ],
    [
      'title' => 'Система Stelio',
      'text' => 'Бесщелевой натяжной потолок «Стелио» - идеальное примыкание полотна к стене, без резиновой..',
      'link' => '#',
    ],
    [
      'title' => 'Descor',
      'text' => 'Немецкие натяжные потолки из ткани с оптимальным соотношением цена-качество.',
      'link' => '#',
    ]
  ];

  $catalogRow3 = [
    [
      'title' => 'Двухуровневые потолки',
      'text' => 'Зонируют помещение, основа для многих дизайнерских решений. Крепятся на специальную констр...',
      'img' => 'catalog-3-1',
      'link' => '#',
    ],
    [
      'title' => 'С трековыми светильниками',
      'text' => 'Трековая система освещения для натяжных потолков создаёт разные сценарии подсветки в интерьере..',
      'link' => '#',
      'img' => 'catalog-3-2',
    ],
    [
      'title' => 'Контурная подсветка',
      'text' => 'Контурная подсветка для натяжного потолка акцентирует внимание на геометрии помещения. Све...',
      'link' => '#',
      'img' => 'catalog-3-3',
    ],
  ];

  $catalogRow4 = [
    [
      'title' => 'Clipso',
      'text' => 'Бесшовные тканевые потолки премиум-класса. Эстетическое и функциональное решение для потол...',
      'link' => '#',
    ],
    [
      'title' => 'Cerutti St',
      'text' => 'Широкоформатное тканевое полотно с двухсторонней пропиткой и слоем защитного лака с больши...',
      'link' => '#',
    ],
    [
      'title' => 'Парящая подсветка',
      'text' => 'Натяжной потолок с эффектом «парения», благодаря специальному парящему профилю и светодиод...',
      'link' => '#',
    ],
  ];
  
  $catalogRow5 = [
    [
      'title' => 'Бесщелевой потолок',
      'text' => 'Бесщелевое примыкание потолка к стене, без декоративного резинового плинтуса. Реализуется ...',
      'link' => '#',
    ],
    [
      'title' => 'Световые потолки',
      'text' => 'Натяжной потолок со светодиодной подсветкой внутри через светопрозрачное полотно. Равномер...',
      'link' => '#',
    ],
    [
      'title' => 'С подсветкой',
      'text' => 'Натяжные потолки со светодиодной подсветкой в качестве декоративного или основного освещен...',
      'link' => '#',
    ],
    [
      'title' => 'Световые линии',
      'text' => 'Световые линии на натяжном потолке - встроенный профиль со светодиодной подсветкой полосам...',
      'link' => '#',
    ],
  ];

  $catalogRow6 = [
    [
      'title' => 'Теневой потолок',
      'text' => 'Теневое примыкание создаёт впечатление парения потолка с аккуратной линией тени.
Подходит ...',
      'link' => '#',
    ],
    [
      'title' => 'Double Vision',
      'text' => 'При включении светодиодной подсветки на натяжном потолке появляется скрытый рисунок фотопе...',
      'link' => '#',
    ],
    [
      'title' => 'Тканевые потолки',
      'text' => 'Тканевый натяжной потолок из полиэстера с акриловой пропиткой. Экологичный и гип...',
      'link' => '#',
    ],
  ];

  $catalogRow7 = [
    [
      'title' => 'Матовый потолок',
      'text' => 'Внешний вид матовой фактуры натяжного потолка похож на оштукатуренную поверхность или пото...',
      'link' => '/steli/catalog/matte-stretch-ceilings',
    ],
    [
      'title' => 'Сатиновые',
      'text' => 'Потолки из сатина - гладкая, приятная поверхность с небольшим перламутровым глянцем. Униве...',
      'link' => '#',
    ],
    [
      'title' => 'Глянцевые',
      'text' => 'Глянцевая (лаковая) фактура для акцентов в дизайне или недорогого варианта отделки вашего ...',
      'link' => '#',
    ],
  ];

?>

<section class="catalog">
  <div class="container ">
    <div class="catalog__wrap">
    <div class="breadcrumbs">
      <span><a href="<?= home_url(); ?>">Натяжные потолки в Киеве</a></span>
      <span class="breadcrumbs__slash"> / </span>
      <span><?= get_field('breadcrumb') ? the_field('breadcrumb') : 'Каталог потолков' ?></span>
    </div>
    <div class="catalog__top">
      <h2>
        <?= get_field('catalog_title') ? the_field('catalog_title') : 'Каталог натяжных потолков' ?>
      </h2>

    <ul class="catalog__list">
      <?php if (have_rows('catalog_top')) :
        while ( have_rows('catalog_top')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
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
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $catalogTop as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            </a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

    <ul class="catalog__list list__brands">
      <?php if (have_rows('catalog_brandlist')) :
        while ( have_rows('catalog_brandlist')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
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
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $catalogBrand as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalogBrand' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            </a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

    <ul class="catalog__list catalog__list_3">
      <?php if (have_rows('catalog__list_3')) :
        while ( have_rows('catalog__list_3')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
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
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $catalogRow3 as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog-3-' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            </a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

    <ul class="catalog__list catalog__list_4">
      <?php if (have_rows('catalog__list_4')) :
        while ( have_rows('catalog__list_4')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
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
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $catalogRow4 as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog-4-' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            </a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

    <ul class="catalog__list catalog__list_5">
      <?php if (have_rows('catalog__list_5')) :
        while ( have_rows('catalog__list_5')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
              <div class="item__img">
                  <img 
                    src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                    data-src="<?= get_sub_field('item_img')['url'] ?>"
                    class="lazy"
                    width="1px"
                    height="1px"
                  />
              </div>
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $catalogRow5 as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog-5-' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            </a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

    <ul class="catalog__list catalog__list_6">
      <?php if (have_rows('catalog__list_6')) :
        while ( have_rows('catalog__list_6')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
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
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $catalogRow6 as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog-6-' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            </a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>

    <ul class="catalog__list catalog__list_7">
      <?php if (have_rows('catalog__list_7')) :
        while ( have_rows('catalog__list_7')) : the_row(); ?>
          <li class="item">
            <a href="<?= get_sub_field('item_link') ?>">
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
              <div class="item__title"><?= get_sub_field('item_title') ?></div>
              <div class="item__text"><?= get_sub_field('item_text') ?></div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php else : ?>
        <?php foreach ( $catalogRow7 as $key => $item ) : ?>
          <li class="item">
          <a href="<?= $item['link'] ?>">
            <div class="item__img">
              <img 
                src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
                data-src="<?= bloginfo('template_url') . '/images/page-catalog/catalog-7-' . ($key + 1) . '.webp' ?>"
                class="lazy"
                width="1px"
                height="1px"
              />
            </div>
            <div class="item__title"><?= $item['title'] ?></div>
            <div class="item__text"><?= $item['text'] ?></div>
            </a>
          </li>
        <?php endforeach; ?>

      <?php endif; ?>
    </ul>
    </div>
  </div>
</section>



<?php
$author_id = 'user_' . get_the_author_ID();
$authorAbout = get_field( 'about', $author_id );

$args = array(
  'post_type' => 'post',
  'orderby' => 'rand',
  'author' => get_the_author_ID(),
  'posts_per_page' => 3,
  'category_name' => 'proizvoditeli',
);

$query = new WP_Query($args);
?>

  <div class="recent-post">
    <div class="container">
      <div class="recent-post__title">Published articles</div>

      <div class="recent-post__wrap">
        <?php if ( $query->have_posts() ) :
          while ( $query->have_posts() ) :
            $query->the_post();
            $postID = get_the_id();
            $postThumbnail = get_the_post_thumbnail($postID, array(), array("class" => "item__img"));
            $postThumbnailPlaceholder = '<img src="' . get_bloginfo('template_url') . '/images/loader.gif' . '" data-src="' . get_bloginfo('template_url') . '/images/features/blog.jpg' . '"  class="lazy item__img">';
            $postThumb = $postThumbnail ? $postThumbnail : $postThumbnailPlaceholder ;
        ?>
          <article id="post-<?= $postID ?>" class="recent-post__item item">
            <div class="recent-post__thumbnail"><?= $postThumb ?></div>

            <div class="item__info">
              <div class="item__read">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.99297 1.66666C5.39297 1.66666 1.66797 5.39999 1.66797 9.99999C1.66797 14.6 5.39297 18.3333 9.99297 18.3333C14.6013 18.3333 18.3346 14.6 18.3346 9.99999C18.3346 5.39999 14.6013 1.66666 9.99297 1.66666ZM10.0013 16.6667C6.31797 16.6667 3.33464 13.6833 3.33464 9.99999C3.33464 6.31666 6.31797 3.33332 10.0013 3.33332C13.6846 3.33332 16.668 6.31666 16.668 9.99999C16.668 13.6833 13.6846 16.6667 10.0013 16.6667Z" fill="#2AB0AB"/>
                  <path d="M10.418 5.83334H9.16797V10.8333L13.543 13.4583L14.168 12.4333L10.418 10.2083V5.83334Z" fill="#2AB0AB"/>
                </svg>
                <div><?= estimated_reading_time() ?></div>
              </div>

              <a href="<?= get_permalink() ?>" class="item__title"><?= get_the_title() ?></a>

              <div class="item--bottom">

                <div class="item__date"><?= get_the_date('F d, Y') ?></div>

                <div class="item__views">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.9987 3.75C5.83203 3.75 2.2737 6.34167 0.832031 10C2.2737 13.6583 5.83203 16.25 9.9987 16.25C14.1654 16.25 17.7237 13.6583 19.1654 10C17.7237 6.34167 14.1654 3.75 9.9987 3.75ZM9.9987 14.1667C7.6987 14.1667 5.83203 12.3 5.83203 10C5.83203 7.7 7.6987 5.83333 9.9987 5.83333C12.2987 5.83333 14.1654 7.7 14.1654 10C14.1654 12.3 12.2987 14.1667 9.9987 14.1667ZM9.9987 7.5C8.61536 7.5 7.4987 8.61667 7.4987 10C7.4987 11.3833 8.61536 12.5 9.9987 12.5C11.382 12.5 12.4987 11.3833 12.4987 10C12.4987 8.61667 11.382 7.5 9.9987 7.5Z" fill="#2AB0AB"/>
                  </svg>

                  <?= get_post_meta( $post->ID, 'views', true ) ? get_post_meta( $post->ID, 'views', true ) : '0' ?> views
                </div>
              </div>
            </div>
          </article>
          <?php endwhile; 
        endif; ?>
      </div>
    </div>
  </div>