<?php
/* Template Name: Inner plain content Template */

get_header();
?>

<?php get_template_part('includes/sections/page-inner/top-screen')?>

<section class="category-content">
  <div class="container">
    <div class="category-content__wrap">
      <?php
        if (have_posts() ) {
          while (have_posts()) : the_post();
            echo apply_filters( 'the_content', get_the_content() );
          endwhile;
        }
      ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>