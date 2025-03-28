</main><?php // main-container end ?>

<?php include(locate_template('main-vars.php', true)); ?>

<footer class="footer">
  <div class="container">
    <img 
      src="<?= bloginfo('template_url') . '/images/loader.gif' ?>" 
      data-src="<?= bloginfo('template_url') . '/images/smile.png' ?>"
      class="lazy"
      width="1px"
      height="1px"
    />
      A smile costs less electricity but gives the same amount of light
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
